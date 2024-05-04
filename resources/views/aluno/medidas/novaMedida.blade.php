@extends('templates.aluno')


@section('content-aluno')

<div class="page-content">
   <div class="container-fluid">
       
       <div class="row">
         <div class="col-lg-12">
             <!-- Simple card -->
             <div class="card">
                 <img class="card-img-top img-fluid" src="{{ url('assets/images/banner.png') }}" alt="Card image cap">
                 
             </div><!-- end card -->
         </div><!-- end col -->
         
     </div><!-- end row -->

       <div class="row">
           <div class="col-xxl-12">
               <div class="card">
                   <div class="card-header align-items-center d-flex">
                       <h4 class="card-title mb-0 flex-grow-1">Minhas Medidas</h4>
                       
                   </div><!-- end card header -->

                   <div class="card-body">
                       
                       <div class="live-preview">
                           <form action="javascript:void(0);">
                               <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="ForminputState" class="form-label">Parte do Corpo</label>
                                        <select id="ForminputState" class="form-select" data-choices data-choices-sorting="true">
                                            <option selected>Choose...</option>
                                            <option>...</option>
                                        </select>
                                    </div>
                                </div>
                                <!--end col-->
                                   <div class="col-md-6">
                                       <div class="mb-3">
                                           <label for="lastNameinput" class="form-label">Valor</label>
                                           <input type="text" class="form-control"  id="lastNameinput">
                                       </div>
                                   </div>
                                   <!--end col-->
                                   <div class="col-md-6">
                                       <div class="mb-3">
                                           <label for="compnayNameinput" class="form-label">Data</label>
                                           <input type="date" class="form-control" id="compnayNameinput">
                                       </div>
                                   </div>
                                   <!--end col-->
                                   <div class="col-md-6">
                                       <div class="mb-3">
                                           <label for="phonenumberInput" class="form-label">Fotografia</label>
                                           <input type="file" class="form-control" id="phonenumberInput">
                                       </div>
                                   </div>
                                   <!--end col-->
                                  
                                   <div class="col-lg-12">
                                       <div class="text-end">
                                           <button type="submit" class="btn btn-primary">Enviar Dados</button>
                                       </div>
                                   </div>
                                   <!--end col-->
                               </div>
                               <!--end row-->
                           </form>
                       </div>
                       <div class="d-none code-view">
                          
                       </div>
                   </div>
               </div>
           </div> <!-- end col -->
       </div>
       <!--end row-->

       




       

   </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    
@endsection