@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- <link href="{{ asset('/css/main.css') }}" rel="stylesheet"> -->
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<a href="{{ url('/asrama') }}">DATA ASRAMA</a><br>
            <a href="{{ url('/blacklists') }}">LIST BLACKLIST</a><br>
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
					<div id="content">
						<section class="container">
						<div class="col-lg-3">
							<div class="panel panel-default">
								<div class="panel-heading">
									<div class="left">
										<strong>Profile</strong>
									</div>
									<div class="right">
										<a href="/AsramaApp/public/editprofile">Update <span class="glyphicon glyphicon-cog" aria-hidden="true"></span></a>                        </div>
									<div class="clear"></div>
								</div>
								<div class="panel-body">
									<ul class="profile">
										<li>
											<div class="icon left">
												<span class="glyphicon glyphicon-user" aria-hidden="true"></span>
											</div>
											<div class="content right">
												Ade Y R</div>    
											<div class="clear"></div>
										</li>
										<li>
											<div class="icon left">
												<span class="glyphicon glyphicon-tags" aria-hidden="true"></span>
											</div>
											<div class="content right">
												135135135</div>    
											<div class="clear"></div>
										</li>
										<li>
											<div class="icon left">
												<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
											</div>
											<div class="content right">
												08 Maret 2017                                </div>    
											<div class="clear"></div>
										</li>
										<li>
											<div class="icon left">
												<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
											</div>
											<div class="content right">
												poiu@poiu.com                                </div>    
											<div class="clear"></div>
										</li>
										<li>
											<div class="icon left">
												<span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>
											</div>
											<div class="content right">
												081081081081                                </div>    
											<div class="clear"></div>
										</li>
										<li>
											<div class="icon left">
												<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
											</div>
											<div class="content right">
																				</div>    
											<div class="clear"></div>
										</li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Menampilkan status asrama penghuni -->
						<div class="col-lg-9 bottom20">
								<div class="heading-pannel"><strong><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Ade Y R</strong></div>
								<div class="col-lg-6">
									<dl class="dl-horizontal">
										<dt>Jenis Penghuni</dt>
										<dd>Regular</dd>

										<dt>Status</dt>
										<dd>Mahasiswa ITB</dd>
																	<dt>Fakultas</dt>
										<dd>Fakultas Teknik Mesin Dan Dirgantara (FTMD)</dd>

										<dt>Jurusan</dt>
										<dd>Teknik Mesin</dd>    
																	
									</dl>
								</div>
					  </div>
						
					</section></div><!-- content -->
					
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
