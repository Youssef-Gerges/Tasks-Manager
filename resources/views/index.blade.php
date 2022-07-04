<x-layout title="Home">
    <div class="content">
        <!-- Animated -->
        <div class="animated fadeIn">
            <!-- Widgets  -->
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="stat-widget-five">
                                <div class="stat-icon dib flat-color-3">
                                    <i class="pe-7s-browser"></i>
                                </div>
                                <div class="stat-content">
                                    <div class="text-left dib">
                                        <div class="stat-text"><span class="count"> {{ $tasks->count() }}</span>
                                        </div>
                                        <div class="stat-heading">Total</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- /Widgets -->
            <div class="orders">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="box-title">Tasks </h4>
                            </div>
                            <div class="card-body--">
                                <div class="table-stats order-table ov-h">
                                    <table class="table ">
                                        <thead>
                                            <tr>
                                                <th class="serial">#</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Progress (%)</th>
                                                <th>Status</th>
                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($tasks->count() > 0)
                                                @foreach ($tasks as $task)
                                                    <tr>
                                                        <td class="serial">{{ $loop->index + 1 }}.</td>
                                                        <td> <span class="name">{{ $task->title }}</span> </td>
                                                        <td> <span class="product">{{ $task->description }}</span>
                                                        </td>
                                                        <td> {{ $task->progress }} </td>
                                                        <td>
                                                            <span
                                                                @class([
                                                                    'badge',
                                                                    'badge-success' => $task->status == 'completed',
                                                                    'badge-primary' => $task->status == 'started',
                                                                    'badge-dark' => $task->status == 'pending',
                                                                ])>{{ $task->status }}</span>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-info btn-sm"
                                                                href="{{ route('tasks.edit', ['task' => $task->id]) }}">Edit
                                                            </a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr aria-colspan="6" class="text-center">
                                                    <td class="text-center" colspan="6">
                                                        <span class="text-center">No Tasks</span>
                                                    </td>
                                                </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div> <!-- /.table-stats -->
                            </div>
                        </div> <!-- /.card -->
                    </div> <!-- /.col-lg-8 -->
                </div>
            </div>
            <!-- /.orders -->
        </div>
        <!-- .animated -->
    </div>
    <!-- /.content -->
</x-layout>
