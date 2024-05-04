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
        <div class="col-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Histórico de Doenças</h4>
                    
                </div><!-- end card header -->
                <div class="card-body">
                    <div class="live-preview">
                        <div class="row">
                            <div class="col-md-4">
                                <div>

                                
                                    <!-- Bootstrap Custom Checkboxes color -->
                                    <div>
                                        <div class="form-check mb-6">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" checked>
                                            <label class="form-check-label" for="formCheck6">
                                                Checkbox Primary
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--end col-->

                            <div class="col-md-4">
                                <div>

                                    
                                    <!-- Bootstrap Custom Checkboxes color -->
                                    <div>
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck6" checked>
                                            <label class="form-check-label" for="formCheck6">
                                                Checkbox Primary
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="mt-4 mt-md-0">
                                
                                    <!-- Bootstrap Custom Outline Checkboxes -->
                                    <div>
                                        <div class="form-check form-check-outline form-check-primary mb-3">
                                            <input class="form-check-input" type="checkbox" id="formCheck13" checked>
                                            <label class="form-check-label" for="formCheck13">
                                                Checkbox Outline Primary
                                            </label>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->
                    </div>


                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

       




       

   </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    
@endsection