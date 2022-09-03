@extends('layouts.master')
@section('content')
<style>
	.bd-placeholder-img {
		font-size: 1.125rem;
		text-anchor: middle;
		-webkit-user-select: none;
		-moz-user-select: none;
		user-select: none;
	}

	@media (min-width: 768px) {
		.bd-placeholder-img-lg {
			font-size: 3.5rem;
		}
	}

	.b-example-divider {
		height: 3rem;
		background-color: rgba(0, 0, 0, .1);
		border: solid rgba(0, 0, 0, .15);
		border-width: 1px 0;
		box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
	}

	.b-example-vr {
		flex-shrink: 0;
		width: 1.5rem;
		height: 100vh;
	}

	.bi {
		vertical-align: -.125em;
		fill: currentColor;
	}

	.nav-scroller {
		position: relative;
		z-index: 2;
		height: 2.75rem;
		overflow-y: hidden;
	}

	/* .nav-scroller .nav {
		display: flex;
		flex-wrap: nowrap;
		padding-bottom: 1rem;
		margin-top: -1px;
		overflow-x: auto;
		text-align: center;
		white-space: nowrap;
		-webkit-overflow-scrolling: touch;
	} */
	.icon_item {
		background-color: #0d6efd;
		height: 50px;
		width: 50px;
		border-radius: 5px;
		text-align: center;
		position: absolute;
		margin-left: 145px;
		top: -30px;
	}

	.icon_item_2nd {
		background-color: #0d6efd;
		height: 50px;
		width: 50px;
		border-radius: 5px;
		text-align: center;
		position: absolute;
		margin-left: 240px;
		top: -30px;
	}

	.secend_row {
		margin-top: 20px;
	}

	.icon i {
		margin: 0;
		padding: 0;
		/* max-width: auto; */
		color: white;
	}
</style>
<div class="album py-5 bg-light">
	<div class="container">
		<h2 class="fw-bold text-center text-dark mb-5">All Wallet is overflowing with User-Friendly Features!</h2>
		<div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<div class="col">
				<div class="card  shadow-sm ">
					<!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
						<title>Placeholder</title>
						<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
					</svg> -->

					<div class="card-body">
						<h4 class="text-center text-dark pt-5 ">No Ads Ever</h3>
							<p class="card-text text-muted text-center">Most of finance managing apps do not realize this except for All Wallet that ads are distracting and unimportant. That is why, you will come across not even a single ad while operating All Wallet.</p>

							<!-- <div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
								<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
							</div>
								<small class="text-muted">9 mins</small>
							</div> -->
					</div>
					<div class="icon_item text-center">
						<div class="icon">
							<i class="fa-solid  text-center pt-2 fs-2 fa-eye-low-vision"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card shadow-sm pb-5">
					<!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
						<title>Placeholder</title>
						<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
					</svg> -->

					<div class="card-body">
						<h4 class="text-center text-dark pt-5 ">100% Data Safety</h3>
							<p class="card-text text-muted text-center">All the information that you provide All Wallet with stays safe, and secret. No third party can know a bit of your data.</p>
							<!-- <div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
								<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
							</div>
								<small class="text-muted">9 mins</small>
							</div> -->
					</div>
					<div class="icon_item text-center">
						<div class="icon">
							<i class="fa-solid  text-light text-center pt-2 fs-2 fa-lock-keyhole"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card shadow-sm pb-5">
					<!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
						<title>Placeholder</title>
						<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
					</svg> -->

					<div class="card-body">
						<h4 class="text-center text-dark pt-5 ">Progress Tracking</h3>
							<p class="card-text  text-muted text-center">
								With All Wallet, you can track your financial progress by staying updated on your income, expenses, and budget.</p>
							<!-- <div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
								<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
							</div>
								<small class="text-muted">9 mins</small>
							</div> -->
					</div>
					<div class="icon_item text-center">
						<div class="icon">
							<i class="fa-solid fa-location-xmark"></i>
						</div>
					</div>
				</div>
			</div>

		</div>
		<div class="row secend_row row-cols-1 row-cols-sm-2 row-cols-md-2 g-3 ">
			<div class="col">
				<div class="card  shadow-sm ">
					<!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
						<title>Placeholder</title>
						<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
					</svg> -->

					<div class="card-body">
						<h4 class="text-center text-dark pt-5 ">Easy Budgeting</h3>
							<p class="card-text text-muted text-center">
								There is nothing to do on your part because All Wallet takes the responsibility of all your money activities.</p>

							<!-- <div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
								<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
							</div>
								<small class="text-muted">9 mins</small>
							</div> -->
					</div>
					<div class="icon_item_2nd text-center">
						<div class="icon text-center">
							<i class="fa-solid fa-scale-balanced fs-2 pt-2"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card shadow-sm">
					<!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
						<title>Placeholder</title>
						<rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text>
					</svg> -->

					<div class="card-body">
						<h4 class="text-center text-dark pt-5 ">Financial Statement Monitoring</h3>
							<p class="card-text text-muted text-center">
								Get a full-time access to your score and get notified on every change in your financial statement.</p>
							<!-- <div class="d-flex justify-content-between align-items-center">
								<div class="btn-group">
								<button type="button" class="btn btn-sm btn-outline-secondary">View</button>
								<button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
							</div>
								<small class="text-muted">9 mins</small>
							</div> -->
					</div>
					<div class="icon_item_2nd text-center">
						<div class="icon">
							<!-- <i class="fa-solid  text-light text-center pt-2 fs-2 fa-lock-keyhole"></i> -->
							<i class="fa-regular fa-file-lines fs-2 pt-2"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection