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
                                                    <th>Name</th>
                                                    <th data-priority="1">Address </th>
                                                    <th data-priority="3">email</th>
                                                    <th data-priority="1">number </th>
                                                    <th data-priority="3">Message  </th>
                                                    
                                                   
                                                </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($contacts as $contact)
                                               
                                                    

                                                    <tr>
                                                       
                                                        <td><span class="co-name">{{$contact->name}}</span></td>
                                                        
                                                        <td>{{  ($contact->address) }}</td>
                                                        <td>{{  ($contact->email) }}</td>
                                                        <td>{{  ($contact->number) }}</td>

                                                        <td>{{ Str::limit($contact->message, 10, '....') }}</td>
                                                        
                                                        
                                                        <td>
                                                            <a href=" " class="btn btn-info btn-sm"><i class="fa fa-pen"></i></a>
                                                            <form action="{{route('delete.contact',$contact->id)}}" method="POST" style="display: inline-block;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash"></i></button>
                                                            </form>

                                                            
                                          
                                                       
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