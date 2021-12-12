<div id="task_warrior" class="d-flex flex-wrap">
    @foreach( $tasks as $task )
        <div class="card mx-1 mb-2" style="width:18rem">
            <div class="card-body">
                <div class="card-title fs-5" alt="{{ $task->description }}">
                    {{ Str::of($task->description)->words(3, '...') }}
                </div>
                <div class="card-subtitle d-flex gap-1 fs-6">
                    @if (isset($task->tags))
                        @foreach( $task->tags as $tag )
                            <div class="alert-primary rounded-pill px-3">{{ $tag }}</div>
                        @endforeach
                    @else
                        <div class="alert-secondary rounded-pill px-3 text-muted">no tags</div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach
</div>
