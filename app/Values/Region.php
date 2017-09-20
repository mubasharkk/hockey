<?php
namespace App\Values;

use Illuminate\Contracts\Support\Arrayable;

final class Region implements Arrayable
{
    /**
     * @var \App\Region
     */
    private $data;

    /**
     * Region constructor.
     * @param \App\Region $data
     */
    public function __construct(\App\Region $data)
    {
        $this->data = $data;
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return [
            'name' => $this->data->name,
            'id' => $this->data->id,
            'url'  => [
                'clubs' => route('clubs-list', ['regionId' => $this->data->id]),
                'leagues' => route('leagues-list', ['regionId' => $this->data->id]),
            ],
        ];
    }
}