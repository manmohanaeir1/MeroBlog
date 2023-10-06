@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<div class="page-content">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Home Slide Page  </h4>
                        
                        <form action="{{route('update.slider')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                                <input type="hidden" name="id" value="{{ $homeSlide->id}}">

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="title" name="title" value="{{$homeSlide->title}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="sub_title" name="sub_title" value="{{$homeSlide->sub_title}}">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label">Video Url</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="text"  id="Video_url" name="Video_url" value="{{$homeSlide->Video_url}}">
                                </div>
                            </div>
                            
                            
                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> Slider Image</label>
                                <div class="col-sm-10">
                                    <input class="form-control" type="file"  id="home_slider" name="home_slider">
                                  
                                    <span class="text-danger">photo must be 636 * 852 px </span>

                                </div>
                            </div>



                            {{-- for showing image  --}}

                            <div class="row mb-3">
                                <label for="example-text-input" class="col-sm-2 col-form-label"> </label>

                                <div class="col-sm-10">
                                    <img id="showImage" class="rounded avatar-lg" src="{{(!empty($homeSlide->home_slider)) ? url('upload/home_slider/' . $homeSlide->home_slider) : url('upload/user_images/no_image.jpg')}}" alt="Card image cap" alt="Card image cap">

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
        $('#home_slider').change(function(e){
            var reader = new FileReader();
            reader.onload = function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });
     
</script>

@endsection     