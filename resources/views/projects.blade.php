@extends('layouts.master')
@section('contenu')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Projects <small>Listing design</small></h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Projects</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Settings 1</a>
                                    <a class="dropdown-item" href="#">Settings 2</a>
                                </div>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <p>Simple table with project listing with progress and editing options</p>

                        <!-- start project list -->
                        <table class="table table-striped projects">
                            <thead>
                                <tr>
                                    <th style="width: 1%">#</th>
                                    <th style="width: 20%">Project Name</th>
                                    <th>Team Members</th>
                                    <th>Project Progress</th>
                                    <th>Status</th>
                                    <th style="width: 20%">#Edit</th>
                                </tr>
                            </thead>
                            @foreach ($projects as $project)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $project-> projectName }}</td>
                                <td>{{ $project->teamMembers }}</td>
                                <td>{{ $project->projectProgress }}</td>
                                <td>{{ $project->status }}</td>
                                <td>
                                    <form action="{{route('projects.destroy',$project->id)}}" method="POST">
                                        <a href="{{route('projects.show,$project->id')}}" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> View </a>
                                        <a href="{{route('projects.edit,$project->id')}}" class=" btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">Delete</button>
                                        <div>
                                            <a href="{{route('projects.create')}}" class=" btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Ajout </a>
                                            @if ($message = Session::get('success'))
                                            <div class="alert alert-success">
                                                <p>{{ $message }}</p>
                                            </div>
                                            @endif
                                        </div>

                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </table>
                        {!! $projects->links()!!}
                        <!-- end project list -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- footer content -->
<footer>
    <div class="pull-right">
        Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
    </div>
    <div class="clearfix"></div>
</footer>
<!-- /footer content -->
@endsection