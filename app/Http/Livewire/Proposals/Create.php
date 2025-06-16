<?php

namespace App\Http\Livewire\Proposals;

use App\Models\Project;
use Livewire\Component;

class Create extends Component
{
    public Project $project;
    public bool $modal = true;

    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'numeric', 'min:1'])]
    public int $hours = 0;

    public function openModal()
    {
        $this->modal = true;
    }

    public function closeModal()
    {
        $this->modal = false;
    }

    public function save()
    {
        $this->validate();
        $this->project->proposals()
            ->updateOrCreate(
                ['email' => $this->email],
                ['hours' => $this->hours]
            );
    }

    public function render()
    {
        return view('livewire.proposals.create');
    }
}
