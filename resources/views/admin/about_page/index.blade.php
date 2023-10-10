@extends('admin.admin_master')
@section('admin')

<div class="page-content">
    <div class="container-fluid">

       

                    <!-- start page title -->
                    <div class="row">
                        <div class="col-12">
                            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                <h4 class="mb-sm-0">Responsive Table</h4>

                                <div class="page-title-right">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                                        <li class="breadcrumb-item active">Responsive Table</li>
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
    
                                    <h4 class="card-title">Example</h4>
                                    <p class="card-title-desc">This is an experimental awesome solution for responsive tables with complex data.</p>
    
                                    <div class="table-rep-plugin">
                                        <div class="table-responsive mb-0" data-pattern="priority-columns">
                                            <table id="tech-companies-1" class="table">
                                                <thead>
                                                <tr>
                                                    <th>Title</th>
                                                    <th data-priority="1">Sub Title</th>
                                                    <th data-priority="3">Short Description</th>
                                                    <th data-priority="1">Long Description</th>
                                                    <th data-priority="3">About Image</th>
                                                    <th data-priority="3">Order</th>
                                                    <th data-priority="6">Status</th>
                                                    <th data-priority="6">Action</th>
                                                   
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($abouts as $about)
                                               
                                                    

                                                    <tr>
                                                       
                                                        <td><span class="co-name">{{$about->title}}</span></td>
                                                        
                                                        <td>{{ Str::limit($about->sub_title, 5, '....') }}</td>
                                                        <td>{{ Str::limit($about->short_description, 8, '....') }}</td>
                                                        <td>{{ Str::limit($about->long_description, 8, '....') }}</td>
                                                        <td><img src="{{asset($about->about_image)}}" style="height: 70px; width: 70px;"></td>
                                                        <td>{{$about->order}}</td>
                                                        <td>
                                                            @if($about->status == 1)
                                                            <span class="badge bg-success">Active</span>
                                                            @else
                                                            <span class="badge bg-danger">Inactive</span>
                                                            @endif
                                                        </td> 
                                                        <td>
                                                            <a href="{{route('edit.about',$about->id)}}" class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>
                                                            <a href="{{route('delete.about',$about->id)}}" class="btn btn-danger btn-sm" id="delete"><i class="fa fa-trash"></i></a>
                                                            @if($about->status == 1)
                                                            <a href="" class="btn btn-success btn-sm">Active</a>
                                                            @else
                                                            <a href="" class="btn btn-danger btn-sm">Inactive</i></a>
                                                            @endif 
                                          
                                                       
                                                    </tr>
                                                    @endforeach 
    
                                                    
                                                   
                                               
                                                
                                                </tbody>
                                            </table>
                                        
                            </div>
                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
    </div>
</div>



@endsection