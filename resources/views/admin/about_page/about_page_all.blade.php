@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">About Page  </h4>
                        
                        <form action="{{route('create.about')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <input type="hidden" name="id" value="">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="title" name="title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Sub Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="sub_title" name="sub_title">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                                <div class="col-sm-10">
                                    <textarea required class="form-control" name="short_description" id="" cols="3" rows="10">
                                       
                                    </textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                                <div class="col-sm-10">
                                    <textarea id="elm1" name="long_description"> 
                                       
                                    </textarea>   
                                </div>
                            </div>

           
                            
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> About Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file"  id="about_image" name="about_image">
                                  
                                    <span class="text-danger">photo must be  px </span>

                                </div>
                            </div>



                            {{-- for showing image  --}}

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>

                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{(!empty($about->about_image)) ? url('upload/about_image/' . $about->about_image) : url('upload/user_images/no_image.jpg')}}" alt="Card image cap" alt="Card image cap">

                                </div>
                            </div>  

                            {{-- order --}}

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Order</label>
                                <div class="col-sm-10">
                                  <input type="number" class="form-control" name="order" id="order">

                                </div>
                            </div>

                            {{--  for status  --}}

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Status</label>
                                <div class="col-sm-10">
                                    <select class="form-control" name="status" >
                                        <option>Please Select Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-info waves-effect waves-light" value="Update Profile" >
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