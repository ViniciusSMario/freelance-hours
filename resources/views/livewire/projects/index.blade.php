<div class="grid grid-cols-2 gap-4">
    @foreach ($projects as $project)
        <a href="{{ route('projects.show', $project) }}">
            <x-project-card-simple :project="$project" />
        </a>
    @endforeach
</div>
