@extends('admin.template')
@section('subheader')
	<div class="m-subheader ">
		<div class="d-flex align-items-center">
			<div class="mr-auto">
				<h3 class="m-subheader__title m-subheader__title--separator">
					Lista de Posts
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
								Listado 
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

				<div class="m-content">
					<div class="m-portlet m-portlet--mobile">
						<div class="m-portlet__head">
							<div class="m-portlet__head-caption">
								<div class="m-portlet__head-title">
									<h3 class="m-portlet__head-text">
										Datatable initilized from HTML table
									</h3>
								</div>
							</div>
							<div class="m-portlet__head-tools">
								<ul class="m-portlet__nav">
									<li class="m-portlet__nav-item">
										<div class="m-dropdown m-dropdown--inline m-dropdown--arrow m-dropdown--align-right m-dropdown--align-push" data-dropdown-toggle="hover" aria-expanded="true">
											<a href="#" class="m-portlet__nav-link btn btn-lg btn-secondary  m-btn m-btn--icon m-btn--icon-only m-btn--pill  m-dropdown__toggle">
												<i class="la la-ellipsis-h m--font-brand"></i>
											</a>
											<div class="m-dropdown__wrapper">
												<span class="m-dropdown__arrow m-dropdown__arrow--right m-dropdown__arrow--adjust"></span>
												<div class="m-dropdown__inner">
													<div class="m-dropdown__body">
														<div class="m-dropdown__content">
															<ul class="m-nav">
																<li class="m-nav__section m-nav__section--first">
																	<span class="m-nav__section-text">
																		Quick Actions
																	</span>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-share"></i>
																		<span class="m-nav__link-text">
																			Create Post
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-chat-1"></i>
																		<span class="m-nav__link-text">
																			Send Messages
																		</span>
																	</a>
																</li>
																<li class="m-nav__item">
																	<a href="" class="m-nav__link">
																		<i class="m-nav__link-icon flaticon-multimedia-2"></i>
																		<span class="m-nav__link-text">
																			Upload File
																		</span>
																	</a>
																</li>
																<li class="m-nav__section">
																	<span class="m-nav__section-text">
																		Useful Links
																	</span>
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
																<li class="m-nav__separator m-nav__separator--fit m--hide"></li>
																<li class="m-nav__item m--hide">
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
									</li>
								</ul>
							</div>
						</div>
						<div class="m-portlet__body">
							<!--begin: Search Form -->
							<div class="m-form m-form--label-align-right m--margin-top-20 m--margin-bottom-30">
								<div class="row align-items-center">
									<div class="col-xl-8 order-2 order-xl-1">
										<div class="form-group m-form__group row align-items-center">
											<div class="col-md-4">
												<div class="m-form__group m-form__group--inline">
													<div class="m-form__label">
														<label>
															Status:
														</label>
													</div>
													<div class="m-form__control">
														<select class="form-control m-bootstrap-select" id="m_form_status">
															<option value="">
																All
															</option>
															<option value="1">
																Pending
															</option>
															<option value="2">
																Delivered
															</option>
															<option value="3">
																Canceled
															</option>
														</select>
													</div>
												</div>
												<div class="d-md-none m--margin-bottom-10"></div>
											</div>
											<div class="col-md-4">
												<div class="m-form__group m-form__group--inline">
													<div class="m-form__label">
														<label class="m-label m-label--single">
															Type:
														</label>
													</div>
													<div class="m-form__control">
														<select class="form-control m-bootstrap-select" id="m_form_type">
															<option value="">
																All
															</option>
															<option value="1">
																Online
															</option>
															<option value="2">
																Retail
															</option>
															<option value="3">
																Direct
															</option>
														</select>
													</div>
												</div>
												<div class="d-md-none m--margin-bottom-10"></div>
											</div>
											<div class="col-md-4">
												<div class="m-input-icon m-input-icon--left">
													<input type="text" class="form-control m-input" placeholder="Buscar..." id="generalSearch">
													<span class="m-input-icon__icon m-input-icon__icon--left">
														<span>
															<i class="la la-search"></i>
														</span>
													</span>
												</div>
											</div>
										</div>
									</div>
									<div class="col-xl-4 order-1 order-xl-2 m--align-right">
										<a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon m-btn--air m-btn--pill">
											<span>
												<i class="la la-cart-plus"></i>
												<span>
													New Order
												</span>
											</span>
										</a>
										<div class="m-separator m-separator--dashed d-xl-none"></div>
									</div>
								</div>
							</div>
							<!--end: Search Form -->
	<!--begin: Datatable -->
							<table class="m-datatable" id="html_table" width="100%">
								<thead>
									<tr>
										<th class="text-center">ID</th>
										<th class="text-center">Titulo</th>
										<th class="text-center">Excerpt</th>
										<th class="text-center" >Fecha</th>
										<th class="text-center" >Acciones</th>
									</tr>
								</thead>
								<tbody>
									{{-- {{ $posts[0]}} --}}
									@foreach($posts as $post)
										
										<tr >
											<td>{{ $post->id }}  </td>
											<td>{{ $post->title}}  </td>
											<td>{{ $post->excerpt }}  </td>
											<td>{{ $post->published_at }}  </td>
											<td>
												<a href="" class="btn btn-success btn-sm "><i class="fa fa-eye"></i> </a>
												<a href="" class="btn btn-info btn-sm "><i class="fa fa-pencil"></i> </a>
												<a href="" class="btn btn-danger btn-sm "><i class="fa fa-trash"></i> </a>
											</td>
										</tr>

									@endforeach

								</tbody>
							</table>
							<!--end: Datatable -->
						</div>
					</div>
				</div>
			</div>
		</div>
			
@stop
@push('scripts')

	<script src="/metronic/assets/demo/default/custom/components/datatables/base/html-table.js" type="text/javascript"></script>
	<script>
		var options = {
		    data: {
		        pageSize: 10,
		        saveState: {
		            cookie: true,
		            webstorage: true
		        },

		        serverPaging: false,
		        serverFiltering: false,
		        serverSorting: false
		    },

		    layout: {
		        theme: 'default',
		        class: 'm-datatable--brand',
		        scroll: false,
		        height: null,
		        footer: false,
		        header: true,

		        smoothScroll: {
		            scrollbarShown: true
		        },

		        spinner: {
		            overlayColor: '#000000',
		            opacity: 0,
		            type: 'loader',
		            state: 'brand',
		            message: true
		        },

		        icons: {
		            sort: {asc: 'la la-arrow-up', desc: 'la la-arrow-down'},
		            pagination: {
		                next: 'la la-angle-right',
		                prev: 'la la-angle-left',
		                first: 'la la-angle-double-left',
		                last: 'la la-angle-double-right',
		                more: 'la la-ellipsis-h'
		            },
		            rowDetail: {expand: 'fa fa-caret-down', collapse: 'fa fa-caret-right'}
		        }
		    },

		    sortable: true,

		    pagination: true,

		    search: {
		      // enable trigger search by keyup enter
		      onEnter: true,
		      // input text for search
		      input: $('#generalSearch'),
		      // search delay in milliseconds
		      delay: 400,
		    },

		    // detail: {
		    //     title: 'Load sub table',
		    //     content: function (e) {
		    //         // e.data
		    //         // e.detailCell
		    //     }
		    // },

		    rows: {
		      callback: function() {},
		      // auto hide columns, if rows overflow. work on non locked columns
		      autoHide: false,
		    },
		    toolbar: {
		        layout: ['pagination', 'info'],

		        placement: ['bottom'],  //'top', 'bottom'

		        items: {
		            pagination: {
		                type: 'default',

		                pages: {
		                    desktop: {
		                        layout: 'default',
		                        pagesNumber: 6
		                    },
		                    tablet: {
		                        layout: 'default',
		                        pagesNumber: 3
		                    },
		                    mobile: {
		                        layout: 'compact'
		                    }
		                },

		                navigation: {
		                    prev: true,
		                    next: true,
		                    first: true,
		                    last: true
		                },

		                pageSizeSelect: [10, 20, 30, 50, 100]
		            },

		            info: true
		        }
		    },

		    translate: {
		        records: {
		            processing: 'Procesando...',
		            noRecords: 'No se encontraron registros'
		        },
		        toolbar: {
		            pagination: {
		                items: {
		                    default: {
		                        first: 'First',
		                        prev: 'Anterior',
		                        next: 'Siguiente',
		                        last: 'Último',
		                        more: 'Más Páginas',
		                        input: 'Page number',
		                        select: 'Select page size'
		                    },

		                }
		            }
		        }
		    }
		}
		var datatable = $('#html_table').mDatatable(options);
	</script>

@endpush