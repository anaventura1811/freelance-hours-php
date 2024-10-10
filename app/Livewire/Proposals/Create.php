<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Livewire\Component;

class Create extends Component
{
    public Project $project;

    public bool $modal = false;

    public string $email = '';

    public int $hours = 0;

    protected $rules = [

        'email' => 'required',

        'hours' => 'required|numeric|min:1',

    ];

    public function save()
    {
        $this->validate();

        $this->project->proposals()
        ->updateOrCreate(
            ['email' => $this->email],
            ['hours' => $this->hours],
        );
    }

    public function render()
    {
        return view('livewire.proposals.create');
    }
}
