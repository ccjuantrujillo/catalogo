@extends('layouts.admin')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
	<div class="container-fluid">
		<div class="row titulo-vista">
			<h5>Editar Cotización de Calibración</h5>
		</div>
	</div>
</section>

<!-- Main Content-->
<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<editcotizacioncalibracion-component codigo="{{$cotizacion->COTIP_Codigo}}" token="{{csrf_token()}}"></editcotizacioncalibracion-component>
			</div>
		</div>
	</div>
</section>
<!-- Main Content-->

@endsection