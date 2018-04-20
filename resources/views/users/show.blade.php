@extends('layout')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-lg-3 col-md-4">
			<div class="user-profile row-space-4 text-center">
				<img class="profile-full img-circle" src="{{ Auth::user()->image }}" alt="">
			</div>

			<div class="panel panel-default verifications hidden-xs hidden-sm">
				<div class="panel-heading">
					認証済みID
				</div>
				<div class="panel-body">
					<div id="ver-email">
						メールアドレス
					</div>
					<br>
					<div id="ver-tel">
						電話番号
					</div>
					<br>
					<div id="ver-facebook">
						Facebook
					</div>
				</div>
			</div>
		</div>

		<div class="col-lg-9 col-md-8 col-sm-12">
			<h1>こんにちわ</h1>
		</div>
	</div>
</div>
@endsection
