@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>




<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Edit About Page  </h4>

                    
                            
                        <form action="{{route('update.about') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                             
                                <input type="hidden" name="id" value="{{ $about->id}}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="title" name="title" value="{{$about->title}}" >
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Sub Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="sub_title" name="sub_title" value="{{$about->sub_title}}" >
                                </div>
                               
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                    <textarea  class="form-control" name="short_description"  id="" cols="3"  rows="10"  value="" >
                                        {{$about->short_description}}
                                    </textarea>
                                    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="long_description"  > 
                                        {{$about->long_description}}
                                    </textarea>   
                                    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Slider Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file"  id="about_image" name="about_image">
                                  
                                    <span class="text-danger">photo must be 636 * 852 px </span>

                                </div>
                            </div>



                            {{-- for showing image  --}}

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>

                                <div class="col-sm-10">

                                    <img src="{{asset($about->about_image)}}" class="rounded avatar-lg" alt="" id="showImage" style="width: 100px; height: 100px;">


                                </div>
                            </div>  
                            

           
                            
                          


              

                            {{-- order --}}

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Order</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" name="order" id="order"  value="{{$about->order}}">

                                </div>
                            </div>

                            {{--  for status  --}}

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status" required value="{{$about->status}}">
                                        <option>Please Select Status</option>
                                        <option value="1" {{$about->status == 1 ? 'selected':''}} >Active</option>
                                        <option value="0" {{$about->status == 0 ? 'selected':''}} >Inactive</option>

                                        
                                    </select>
                                </div>
                               
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update" >
                        </form>
                      
                    </div>
                </div>
            </div> <!-- end col -->
        </div>


    </div>
</div>
    
<script type="text/javascript">
    $(document).ready(function(){
        $('#about_image').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
     
</script>



@endsection     