@extends('admin.template')
@section('subheader')
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Crear Nuevo Post
				</h3>
				<ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
					<li class="m-nav__item m-nav__item--home">
						<a href="#" class="m-nav__link m-nav__link--icon">
							<i class="m-nav__link-icon la la-home"></i>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="{{ route('inicio') }}  " class="m-nav__link">
							<span class="m-nav__link-text">
								Sitio Web
							</span>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item">
						<a href="{{ route('home') }}" class="m-nav__link">
							<span class="m-nav__link-text">
								Escritorio
							</span>
						</a>
					</li>
					<li class="m-nav__separator">
						-
					</li>
					<li class="m-nav__item ">
						<a href="" class="m-nav__link">
							<span class="m-nav__link-text">
								Crear 
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div>
				<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
					<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--outline-2x m-btn--air m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
						<i class="la la-plus m--hide"></i>
						<i class="la la-ellipsis-h"></i>
					</a>
					<div class="m-dropdown__wrapper">
						<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
						<div class="m-dropdown__inner">
							<div class="m-dropdown__body">
								<div class="m-dropdown__content">
									<ul class="m-nav">
										<li class="m-nav__section m-nav__section--first m--hide">
											<span class="m-nav__section-text">
												Quick Actions
											</span>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
												<i class="m-nav__link-icon flaticon-share"></i>
												<span class="m-nav__link-text">
													Activity
												</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
												<i class="m-nav__link-icon flaticon-chat-1"></i>
												<span class="m-nav__link-text">
													Messages
												</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
												<i class="m-nav__link-icon flaticon-info"></i>
												<span class="m-nav__link-text">
													FAQ
												</span>
											</a>
										</li>
										<li class="m-nav__item">
											<a href="" class="m-nav__link">
												<i class="m-nav__link-icon flaticon-lifebuoy"></i>
												<span class="m-nav__link-text">
													Support
												</span>
											</a>
										</li>
										<li class="m-nav__separator m-nav__separator--fit"></li>
										<li class="m-nav__item">
											<a href="#" class="btn btn-outline-danger m-btn m-btn--pill m-btn--wide btn-sm">
												Submit
											</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@stop

@section('contenido')

<div class="m-portlet">
	
	<!--begin::Form-->
	<form class="m-form m-form--fit m-form--label-align-right" method="POST" action="{{ route('admin.pages.store') }}  " id="crearPost">
		{{ csrf_field() }}
		<div class="m-portlet__body">
			<div class="form-group m-form__group row ">
				<div class="col-lg-7 m-form--state row">
					<label>
					  Titulo:
					</label>
					<input type="text" class="form-control m-input" placeholder="Ingrese el titulo de la publicación" name="title" id="title" maxlength="50" >
					
					{!! $errors->first('title','<div class="form-control-feedback errorLara">:message</div>') !!}
				</div>
				<div class="col-lg-5">
					<label class="col-form-label">                                    
						Fecha
					</label>
					<div class="input-group date">
						<input type="text" class="form-control " name="published_at" id="m_datepicker_2" readonly  placeholder="Seleccione la fecha" />
						<div class="input-group-append">
							<span class="input-group-text">
								<i class="la la-calendar-check-o"></i>
							</span>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group m-form__group row ">
				<div class="col-lg-7">
					<label for="exampleTextarea">
						Contenido del Post
					</label>
						<div class="form-group m-form__group row">
							
							<div class="col-lg-12 col-md-12 col-sm-12">
								<textarea  class="form-control " data-provide="markdown" rows="10" name="body" id="body"></textarea>
							</div>
							{!! $errors->first('body','<div class="form-control-feedback errorLara">:message</div>') !!}
						</div>
				</div>
				<div class="col-lg-5">
			  		<label for="exampleSelect1">
			  			Categoría
			  		</label>
			  		<select class="form-control m-bootstrap-select m_selectpicker {{ $errors->has('category') ? 'errorLara' : '' }} " name="category" id="category">
			  			<option value=""> Selecciona una categoría</option>
			  			@foreach($categorias as $cat)
							
							<option value="{{ $cat->id }} ">{{ $cat->name }}</option>	
							
			  			@endforeach
			  		
			  		</select>
			  		{!! $errors->first('category','<div class="form-control-feedback errorLara">:message</div>') !!}
						<label class="mt-4">
							Etiquetas
						</label>
						<div class="">
							<select class="form-control m-select2" id="m_select2_tag" name="tags[]" multiple="multiple">
								@foreach($tags as $tag)
									<option value="{{ $tag->id  }}">{{$tag->name  }}  </option>
								@endforeach
							</select>
							{!! $errors->first('tags','<div class="form-control-feedback errorLara">:message</div>') !!}
						</div>
						<label class="mt-4">
						  Extracto:
						</label>
						<textarea class="form-control m-input" placeholder="Ingresa resumen del post" name="excerpt" id="excerpt" rows="5"></textarea>
						{!! $errors->first('excerpt','<div class="form-control-feedback errorLara">:message</div>') !!}
				</div>
			</div>
			</div>
		</div>
		<div class="m-portlet__foot m-portlet__no-border m-portlet__foot--fit">
			<div class="m-form__actions m-form__actions--solid">
				<div class="row">
					<div class="col-lg-6">
						<button type="submit" class="btn btn-primary">
							Guardar
						</button>
						<button type="reset" class="btn btn-secondary">
							Cancelar
						</button>
					</div>
					<div class="col-lg-6 m--align-right">
						<button type="reset" class="btn btn-danger">
							Borrar
						</button>
					</div>
				</div>
			</div>
		</div>
	</form>
	<!--end::Form-->
</div>

@stop
@push('scripts')

	<script src="/metronic/assets/demo/default/custom/components/forms/widgets/bootstrap-select.js" type="text/javascript"></script>
	<script src="/metronic/assets/demo/default/custom/components/forms/widgets/bootstrap-markdown.js" type="text/javascript"></script>
	<script src="/metronic/assets/demo/default/custom/components/forms/widgets/select2.js" type="text/javascript"></script>
	<script src="/metronic/assets/demo/default/custom/components/forms/widgets/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="/metronic/assets/demo/default/custom/components/forms/validation/form-controls.js" type="text/javascript"></script>
	<script src="/metronic/assets/demo/default/custom/components/forms/validation/messages_es_AR.js" type="text/javascript"></script>



@endpush