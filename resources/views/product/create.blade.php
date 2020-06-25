@extends('layouts.mdb')

@section('content')


<div class="container">
    <div class="row row justify-content-center">
       <div class="col-md-8 mt-5">

 <!-- Material form contact -->
<div class="card">

<h5 class="card-header info-color white-text text-center py-4">
    <strong>Create Product</strong>
</h5>

<!--Card content-->
<div class="card-body px-lg-5 pt-0">


    <!-- Form -->
    <form class="text" style="color: #757575;"  action="{{ url('product/create') }}" method="post">
             @csrf

        
        <div class="md-form mt-5">
            <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="off" >
            <label for="Product_name">Product Name</label>
        </div>
        @if ($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
        @endif

       
        <div class="md-form">
            <input type="text" name="description" class="form-control @error('description') is-invalid @enderror"value="{{ old('description') }}" autocomplete="off">
            <label for="description">Description</label>
        </div>
        @if ($errors->has('description'))
                    <span class="text-danger">{{ $errors->first('description') }}</span>
        @endif
        
        <div class="md-form">
            <input type="text" name="contacts" class="form-control @error('contacts') is-invalid @enderror" value="{{ old('contacts') }}"autocomplete="off">
            <label for="conctact">Conctact details</label>
        </div>
        @if ($errors->has('contacts'))
                    <span class="text-danger">{{ $errors->first('contacts') }}</span>
        @endif

        <div class="md-form">
            <input type="text" name="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}"autocomplete="off">
            <label for="price">Price</label>
        </div>
        @if ($errors->has('price'))
                    <span class="text-danger">{{ $errors->first('price') }}</span>
        @endif

        
       <label for="Price">Price is negotiable?</label>
       <div class="custom-control custom-switch">
          <input type="checkbox" class="custom-control-input" id="customSwitch1" name="negotiable" checked>
             <label class="custom-control-label" for="customSwitch1"></label>
        </div>
        <hr class="my-3">
       
        <label for="Price" class="mr-5" >Product new/used/not possible to declare?</label> 
           <div class="custom-control custom-radio custom-control-inline">
               <input type="radio" class="custom-control-input" id="new" value="1" name="product_type_id">
               <label class="custom-control-label" for="new">New</label>
          </div>


           <div class="custom-control custom-radio custom-control-inline">
              <input type="radio" class="custom-control-input" id="used" value="2" name="product_type_id">
              <label class="custom-control-label" for="used">Used</label>
           </div>

           <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" class="custom-control-input" id="none" value="3" name="product_type_id">
                <label class="custom-control-label" for="none">None</label>
          </div>


    
          <hr class="my-3">

          
          <div class="form-group">
                
                       <select class="form-control"  name="catagory_id"  required>
                               <option selected >Catagory</option>
                                <option value="1">Animals</option>
                                <option value="2">Business</option>
                                <option  value="3">Education</option>
                                <option value="4">Electronics</option>
                                <option value="5">Electronics</option>
                                <option value="6">Electronics</option>
                                <option value="7">Fashan & health</option>
                                <option value="8">Food & Agri</option>
                                <option value="9">Gardening</option>
                                <option value="10">hobby & sport</option>
                                <option value="11">Jobs</option>
                                <option value="12">Other</option>
                                <option value="13">Property</option>
                                <option value="14">Services</option>
                                <option value="15">Vehicles</option>
                                

                                
                        </select>
          </div>
          


        <!-- Send button -->
        <button class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit">Create</button>

    </form>
    <!-- Form -->

</div>
    

</div>
<!-- Material form contact -->
       </div>
    <div>
</div>

<!-- Card -->

@endsection