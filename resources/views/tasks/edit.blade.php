<x-layout title="Edit Task">

    {{-- @if ($errors->any())
        @foreach ($errors->all() as $error)
            <h1>{{ $error }}</h1>
        @endforeach
    @endif --}}

    <div class="content">
        <div class="animated fadeIn">

            <div class="row">


                <div class="col-lg-10">
                    <div class="card">
                        <div class="card-header"><strong>Tasks</strong><small> Form</small></div>
                        <div class="card-body card-block">
                            <form action="{{ route('tasks.update', ['task' => $task->id]) }}" method="post">
                                @csrf
                                @method('PUT')
                                <div class="form-group"><label for="title" class=" form-control-label">Title</label>
                                    <input type="text" id="company" value="{{ old('title', $task->title) }}"
                                        name="title" placeholder="Enter task title" class="form-control" required>
                                </div>
                                <div class="form-group"><label for="description"
                                        class=" form-control-label">Description</label>
                                    <input type="text" value="{{ old('description', $task->description) }}"
                                        id="vat" name="description" placeholder="Enter description for task"
                                        class="form-control" required>
                                </div>

                                <div class="form-group">
                                    <div><label for="select" class=" form-control-label">Status</label></div>
                                    <div>
                                        <select id="select" class="form-control" name="status" required>
                                            <option value="pending"
                                                {{ $task->status == 'pending' ? 'selected' : '' }}>
                                                Pending</option>
                                            <option value="started"
                                                {{ $task->status == 'started' ? 'selected' : '' }}>
                                                Started</option>
                                            <option value="completed"
                                                {{ $task->status == 'completed' ? 'selected' : '' }}>Completed
                                            </option>
                                        </select>
                                    </div>
                                </div>



                                <div class="form-group">
                                    <label for="progress" class=" form-control-label">Progress</label>
                                    <input max="100" min="0" type="number" id="progress" name="progress"
                                        placeholder="Progress %" class="form-control" required
                                        value="{{ old('progress', $task->progress) }}">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" value="submit">Edit</button>
                                </div>
                            </form>
                            <form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <div class="form-group">
                                    <button class="btn btn-danger" type="submit" value="submit"
                                        onclick="return confirm('are you sure to delete this task?')">Delete</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>




            </div><!-- .animated -->
        </div><!-- .content -->

        <div class="clearfix"></div>



</x-layout>
