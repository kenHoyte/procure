@extends('backend.main')
@section('content')

<div class="main-content">

    <div class="page-content">
        <div class="container-fluid">

            <!-- start page title -->
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box d-flex align-items-center justify-content-between">
                        <h4 class="mb-0 font-size-18">Main Board</h4>

                           {{-- toast alert here --}}
                           @if (session('success'))
                           <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                               {{session('success')}}                            
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           @endif
                           @if (session('error'))
                           <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                               {{session('error')}}                            
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                           @endif
                           @if ($errors->any())
                           <ul style="list-style: none">
                           @foreach ($errors->all() as $error)
                           <li>
                               <div class="alert alert-warning alert-dismissible fade show mb-0" role="alert">
                               {{$error}}                            
                               <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                 <span aria-hidden="true">&times;</span>
                               </button>
                           </div>
                       </li>
                            @endforeach
                           </ul>
                           @endif

                        <div class="page-title-right">
                            <ol class="breadcrumb m-0">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Xeloro</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>

                        </div>

                    </div>
                </div>
            </div>
            <!-- end page title -->

            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Buttons example</h4>
                            <p class="card-subtitle mb-4">
                                The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page
                                that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                            </p>

                            <table id="datatable-buttons" class="table table-striped dt-responsive nowrap">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Request Item</th>
                                        <th>Status</th>
                                       
                                    </tr>
                                </thead>
                            
                            
                                <tbody>
                                   @foreach ($reqs as $req)
                                    <tr>
                                            <td>{{$req->name}} </td>
                                            <td>{{$req->request_item}} </td>                                       
                                            <td>{{$req->status}} </td>                                       
                                    
                                    </tr>
                                   @endforeach
                                    
                                </tbody>
                            </table>
                            
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
<!-- end main content-->

@endsection