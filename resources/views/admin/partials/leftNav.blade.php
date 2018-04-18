				<!-- BEGIN: Aside Menu -->
<div 
	id="m_ver_menu" 
	class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " 
	data-menu-vertical="true"
	 data-menu-scrollable="false" data-menu-dropdown-timeout="500"  
	>
					<ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow ">
						<li class="m-menu__item  {{ request()->is('inicio') ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
							<a  href="/" class="m-menu__link ">
								<i class="m-menu__link-icon flaticon-laptop"></i>
								<span class="m-menu__link-title">
									<span class="m-menu__link-wrap">
										<span class="m-menu__link-text">
											Ir al sitio Web
										</span>
										<span class="m-menu__link-badge">
											<span class="m-badge m-badge--danger">
												2
											</span>
										</span>
									</span>
								</span>
							</a>
						</li>
						<li class="m-menu__section">
							<h4 class="m-menu__section-text">
								MENU
							</h4>
							<i class="m-menu__section-icon flaticon-more-v3"></i>
						</li>
						<li class="m-menu__item {{ request()->is('admin') ? 'm-menu__item--active' : ''  }}" aria-haspopup="true" >
							<a  href="{{route('home') }}  " class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-settings"></i>
								<span class="m-menu__link-text">
									INICIO
								</span>
							</a>
						</li>
						<li class="m-menu__item  m-menu__item--submenu {{ request()->is('admin/*') ? 'm-menu__item--active m-menu__item--open m-menu__item--expanded' : ''  }} " aria-haspopup="true"  data-menu-submenu-toggle="hover">
							<a  href="#" class="m-menu__link m-menu__toggle">
								<i class="m-menu__link-icon flaticon-layers"></i>
								<span class="m-menu__link-text">
									BLOG
								</span>
								<i class="m-menu__ver-arrow la la-angle-right"></i>
							</a>
							<div class="m-menu__submenu ">
								<span class="m-menu__arrow"></span>
								<ul class="m-menu__subnav">
									<li class="m-menu__item  m-menu__item--parent" aria-haspopup="true" >
										<span class="m-menu__link">
											<span class="m-menu__link-text">
												blog
											</span>
										</span>
									</li>
									<li class="m-menu__item {{ request()->is('admin/crear') ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
										<a  href="{{route('admin.pages.crear') }}  " class="m-menu__link ">
											<i class="m-menu__link-icon flaticon-edit-1">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Crear posts
											</span>
										</a>
									</li>
									<li class="m-menu__item {{ request()->is('admin/listar') ? 'm-menu__item--active' : '' }}" aria-haspopup="true" >
										<a  href="{{route('admin.pages.listar') }}  " class="m-menu__link ">
											<i class="m-menu__link-icon flaticon-visible">
												<span></span>
											</i>
											<span class="m-menu__link-text">
												Ver todos los posts
											</span>
										</a>
									</li>
									
								</ul>
							</div>
						</li>{{-- 
						<li class="m-menu__section">
							<h4 class="m-menu__section-text">
								Snippets
							</h4>
							<i class="m-menu__section-icon flaticon-more-v3"></i>
						</li> --}}						
						
					</ul>
				</div>
				<!-- END: Aside Menu -->