<?php

namespace App\Http\Livewire\Projects;

use App\Models\Project;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        // Passa a variável $projects diretamente para a view
        return view('livewire.projects.index', [
            'projects' => $this->getProjects(),
        ]);
    }

    // Método público para buscar projetos
    public function getProjects()
    {
        return Project::query()->inRandomOrder()->get();
    }
}
