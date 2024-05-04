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
        <div class="col-lg-12">
            <div class="card">

                <div class="card-body">
                    <div class="live-preview">
                        <div class="d-grid gap-2">
                            <button class="btn btn-primary" type="button">Baixar Meu Plano</button>
                        </div>
                    </div>
                </div><!-- end card-body -->
            </div><!-- end card -->
        </div>
        <!--end col-->
    </div>
    <!--end row-->

       




       

   </div> <!-- container-fluid -->
</div>
<!-- End Page-content -->
    
@endsection