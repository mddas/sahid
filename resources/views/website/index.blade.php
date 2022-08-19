@extends("layouts.master")
   
    @section('content')
        @include("website.slider")
        @include("website.ourservices")
        @include("website.about")
        @include("website.sahidteam")
        @include("website.ourstatistics")
        @include("website.latestnews")
        @include("website.ourtestimonial")
        @include("website.sahidcontactdetails") 
        @if(Session::has('contact'))
            <script>
                Swal.fire({
                    position: 'bottom-end',
                    icon: 'success',
                    title: 'submitted sucessfully!!',
                    showConfirmButton: false,
                    timer: 1500
                })
            </script>
    @endif
    @endsection   
 