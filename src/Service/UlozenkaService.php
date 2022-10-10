<?php

namespace App\Service;

use App\Class\BranchModel;
use App\Class\CoordinatesModel;
use Symfony\Component\HttpClient\Response\CurlResponse;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class UlozenkaService
{
    private HttpClientInterface $client;

    private DtoService $dtoService;

    public function __construct(HttpClientInterface $client, DtoService $dtoService)
    {
        $this->client = $client;
        $this->dtoService = $dtoService;
    }

    public function getListOfBranches(): array
    {
        $branches = [];
        /** @var CurlResponse $response */
        $response = $this->client->request('GET', 'https://www.ulozenka.cz/gmap');

        foreach (json_decode($response->getContent(), true) as $branch) {
            $branches[] = $this->getBranchModel($branch);
        }

        return $branches;
    }

    public function getBranchModel(array $branch): BranchModel
    {
        return new BranchModel(
            $branch['id'],
            $branch['name'],
            new CoordinatesModel($branch['lat'], $branch['lng']),
            $this->dtoService->getBusinessHoursArray($branch['openingHours']),
            $branch['name'],
            $branch['odkaz'],
            implode(';', $branch['announcements'])
        );
    }
}
