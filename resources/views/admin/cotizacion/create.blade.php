@extends('layouts.admin')
 
@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
        <h1>Agregar Cotización</h1>
    </div>
  </div><!-- /.container-fluid -->
</section>
    
<!-- Main Content-->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <createcotizacion-component></createcotizacion-component>
      </div>
    </div>
  </div>
</section>
<!-- /Main Content-->

@endsection