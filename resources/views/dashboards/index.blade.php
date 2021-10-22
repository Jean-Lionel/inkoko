@extends('layouts.app')
@section('content')
<div>
	<!-- Counts Section -->
	<section class="py-5">
		<div class="container-fluid">
			<div class="row">
				<!-- Count item widget-->
				<div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
					<div class="d-flex">
						<svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
							<use xlink:href="#user-1"> </use>
						</svg>
						<div class="ms-2">
							<h3 class="h4 text-dark text-uppercase fw-normal">Nouveau Client</h3>
							<p class="text-gray-500 small">Last 7 days</p>
							<p class="display-6 mb-0">25</p>
						</div>
					</div>
				</div>
				<!-- Count item widget-->
				<div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
					<div class="d-flex">
						<svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
							<use xlink:href="#survey-1"> </use>
						</svg>
						<div class="ms-2">
							<h3 class="h4 text-dark text-uppercase fw-normal">Work Orders</h3>
							<p class="text-gray-500 small">Last 5 days</p>
							<p class="display-6 mb-0">400</p>
						</div>
					</div>
				</div>
				<!-- Count item widget-->
				<div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
					<div class="d-flex">
						<svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
							<use xlink:href="#list-details-1"> </use>
						</svg>
						<div class="ms-2">
							<h3 class="h4 text-dark text-uppercase fw-normal">New Quotes</h3>
							<p class="text-gray-500 small">Last 2 months</p>
							<p class="display-6 mb-0">342</p>
						</div>
					</div>
				</div>
				<!-- Count item widget-->
				<div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
					<div class="d-flex">
						<svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
							<use xlink:href="#numbers-1"> </use>
						</svg>
						<div class="ms-2">
							<h3 class="h4 text-dark text-uppercase fw-normal">New Invoices</h3>
							<p class="text-gray-500 small">Last 2 days</p>
							<p class="display-6 mb-0">123</p>
						</div>
					</div>
				</div>
				<!-- Count item widget-->
				<div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
					<div class="d-flex">
						<svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
							<use xlink:href="#literature-1"> </use>
						</svg>
						<div class="ms-2">
							<h3 class="h4 text-dark text-uppercase fw-normal">Open Cases</h3>
							<p class="text-gray-500 small">Last 3 months</p>
							<p class="display-6 mb-0">92</p>
						</div>
					</div>
				</div>
				<!-- Count item widget-->
				<div class="col-xl-2 col-md-4 col-6 gy-4 gy-xl-0">
					<div class="d-flex">
						<svg class="svg-icon svg-icon-sm svg-icon-heavy text-primary mt-1 flex-shrink-0">
							<use xlink:href="#paper-stack-1"> </use>
						</svg>
						<div class="ms-2">
							<h3 class="h4 text-dark text-uppercase fw-normal">New Cases</h3>
							<p class="text-gray-500 small">Last 7 days</p>
							<p class="display-6 mb-0">70</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Header Section-->
	<section class="bg-white py-5">
		<div class="container-fluid">
			<div class="row d-flex align-items-md-stretch">
				<!-- To Do List-->
				<div class="col-lg-3 col-md-6">
					<div class="card shadow-0">
						<div class="card-body p-0">
							<h2 class="h3 fw-normal">To do List</h2>
							<p class="text-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
							<form>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="list1">
									<label class="form-check-label text-sm" for="list1">Similique sunt in culpa qui officia</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="list2">
									<label class="form-check-label text-sm" for="list2">Ed ut perspiciatis unde omnis iste</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="list3">
									<label class="form-check-label text-sm" for="list3">At vero eos et accusamus et iusto </label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="list4">
									<label class="form-check-label text-sm" for="list4">Explicabo Nemo ipsam voluptatem</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="list5">
									<label class="form-check-label text-sm" for="list5">Similique sunt in culpa qui officia</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="list6">
									<label class="form-check-label text-sm" for="list6">At vero eos et accusamus et iusto</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="list7">
									<label class="form-check-label text-sm" for="list7">Similique sunt in culpa qui officia</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="list8">
									<label class="form-check-label text-sm" for="list8">Ed ut perspiciatis unde omnis iste</label>
								</div>
							</form>
						</div>
					</div>
				</div>
				<!-- Pie Chart-->
				<div class="col-lg-3 col-md-6">
					<div class="card shadow-0">
						<h2 class="h3 fw-normal"> My Projects</h2>
						<p class="text-sm text-muted"> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						<div class="pie-chart">
							<canvas id="pieChart" style="width: 300px; height: 300px; max-width: 100%"> </canvas>
						</div>
					</div>
				</div>
				<!-- Line Chart -->
				<div class="col-lg-6 col-md-12">
					<div class="card shadow-0">
						<h2 class="h3 fw-normal">Rapport</h2>
						<p class="text-sm text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor amet officiis</p>
						<canvas id="lineCahrt"></canvas>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Statistics Section-->
	<section class="py-5">
		<div class="container-fluid">
			<div class="row align-items-stretch gy-4">
				<div class="col-lg-4">
					<!-- Income-->
					<div class="card text-center h-100 mb-0">
						<div class="card-body">
							<svg class="svg-icon svg-icon-big svg-icon-light mb-4 text-muted">
								<use xlink:href="#sales-up-1"> </use>
							</svg>
							<p class="text-gray-700 display-6">126,418</p>
							<p class="text-primary h2 fw-bold">All Income</p>
							<p class="text-xs text-gray-600 mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit sed do.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<!-- Monthly Usage-->
					<div class="card h-100 mb-0">
						<div class="card-body">
							<h2 class="h3 fw-normal mb-4">Monthly Usage</h2>
							<div class="row align-items-center mb-3 gx-lg-5">
								<div class="col-lg-6">
									<table class="w-100">
										<tbody>
											<tr>
												<td>
													<div class="position-relative mx-auto" style="max-width: 120px">
														<canvas class="mx-auto" id="monthlyProgress" width="150" height="150"></canvas>
														<p class="h3 text-primary fw-normal position-absolute top-50 start-50 translate-middle text-center m-0">80%</p>
													</div>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								<div class="col-lg-6 border-start">
									<p class="fw-bold h2 text-primary">80.56 Gb</p>
									<p class="text-xs fw-light text-gray-500 mb-0">Current Plan</p>
									<p class="text-gray-500">100 Gb Monthly</p>
								</div>
							</div>
							<p class="text-xs text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<!-- User Actibity-->
					<div class="card h-100 mb-0">
						<div class="card-body">
							<h2 class="h3 fw-normal mb-4">User Activity</h2>
							<p class="display-6">210</p>
							<h3 class="h4 fw-normal">Social Users</h3>
							<div class="progress rounded-0 mb-3">
								<div class="progress-bar progress-bar bg-primary" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
							<div class="d-flex justify-content-between">
								<div class="text-start">
									<p class="h5 fw-normal mb-2">Pages Visits</p>
									<p class="fw-bold text-xl text-primary mb-0">230</p>
								</div>
								<div class="text-end">
									<p class="h5 fw-normal mb-2">New Visits</p>
									<p class="fw-bold text-xl text-primary mb-0">73.4%</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Updates Section -->
</div>


@endsection