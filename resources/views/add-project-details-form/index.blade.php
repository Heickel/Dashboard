@extends('layouts.layout')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<div id="content-page" class="content-page">
   <div class="container-fluid">
      <div class="row d-flex justify-content-center">
         <div class="col-lg-11">
            <div class="iq-card ">
               <div class="iq-card-header d-flex justify-content-center">
                  <div class="iq-header-title">
                     <h4 class="card-title">Projects Details</h4>
                  </div>
               </div>
               <div class="iq-card-body">
                  <div class="new-projret-details justify-content-center align-items-center">
                     <form form name="add-program-details-form" id="add-program-details-form" method="post" action="{{route('store_project_details')}}">
                        @csrf
                        <div class="row d-flex justify-content-center">
                           <div class="form-group col-md-5">
                              <label for="exampleInputText1">Code</label>
                              <input type="number" class="form-control" maxlength="100" id="code" name="code" placeholder="Enter code" required>
                           </div>
                           <div class="form-group col-md-5">
                              <label for="exampleInputText1">Name</label>
                              <input type="text" class="form-control" maxlength="100" id="name" name="name" placeholder="Enter Name" required>
                           </div>    
                           <div class="form-group col-md-5">
                              <label for="exampleFormControlSelect1">Program</label>
                              <select class="form-control" id="program" name="program">
                                 <option selected="Select program" disabled selected hidden>Select program</option>
                                 <option>0</option>
                                 <option>1</option>
                                 <option>2</option>
                                 <option>3</option>
                                 <option>4</option>
                              </select>
                           </div> 
                           <div class="form-group col-md-5">
                           <label for="exampleFormControlSelect1">Program type</label>
                           <select class="form-control" id="type" name="type">
                              <option selected="type" disabled selected hidden>Select type</option>
                              <option>initiative</option>
                              <option>critical</option>
                              <option>normal</option>
                              <option>very critical</option>
                              <option>construction</option>
                           </select>
                           </div>
                           <div class="form-group col-md-5">
                           <label for="exampleFormControlSelect1">Program categorie</label>
                           <select class="form-control" id="program_categorie" name="program_categorie">
                              <option selected="program_categorie" disabled selected hidden>Select program categorie</option>
                              <option>0</option>
                              <option>1</option>
                              <option>2</option>
                              <option>3</option>
                              <option>4</option>
                           </select>
                           </div>                 
                           <div class="form-group col-md-5">
                           <label for="exampleFormControlSelect1">Program sub categorie</label>
                           <select class="form-control" id="program_sub_categorie" name="program_sub_categorie">
                               <option selected="program_sub_categorie" disabled selected hidden>Select  program sub categorie</option>
                               <option>0</option>
                               <option>1</option>
                               <option>2</option>
                               <option>3</option>
                               <option>4</option>
                           </select>
                           </div>
                           <div class="form-group col-md-5">
                           <label for="exampleFormControlSelect1">Requesting Part</label>
                           <select class="form-control" id="requesting_part" name="requesting_part">
                               <option selected="requesting_part" disabled selected hidden>Select requesting part</option>
                               <option>The legal administration</option>
                               <option>Corporate Communications</option>
                               <option>Revenues</option>
                               <option>Risk Management</option>
                               <option>technical management</option>
                               <option>Engineering Department</option>
                               <option>Conversion library</option>
                               <option>Operating Administration</option>
                               <option>Human Resources</option>
                               <option>Media management</option>
                           </select>
                           </div>
                           <div class="form-group col-md-5">
                           <label for="exampleFormControlSelect1">Purchasing Officer</label>
                           <select class="form-control" id="purchasing_officer" name="purchasing_officer">
                               <option selected="purchasing_officer" disabled selected hidden>Select Purchasing Officer</option>
                               <option>Mohammed Al-Dowsary</option>
                               <option>Fahad Al-Sahli</option>
                               <option>Musaed Al-Uhaibi</option>
                               <option>Mohammed Al-Dowsary 1</option>
                               <option>Mohammed Al-Dakhil</option>
                               <option>Ahmed Al-Morched</option>
                               <option>Saleh Al-Jerboa</option>
                               <option>Abdullah Al-Suhaibani</option>
                               <option>Omar Al-Fahad</option>
                               <option>Omar Al-Nafie</option>
                           </select>
                           </div>
                        </div>
                        <hr>
                        <div class="text-right">
                           <button type="submit" class="btn iq-bg-danger">Back</button>                                              
                           <button type="submit" class="btn btn-primary ">Next</button>
                        </div>   
                    </form>
                 </div>   
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
