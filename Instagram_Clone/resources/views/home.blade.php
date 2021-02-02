@extends('layouts.app') @section('content')
<div class="container">
	<div class="row">
		<div class="col-3 p-5">
			<img
				src="https://d33wubrfki0l68.cloudfront.net/bbfa33a202e8612d49b6c1ed05c1fdd8e4001566/bbdd1/img/fcc_secondary_small.svg"
				style="height: 120px;">
		</div>
		<div class="col-9 pt-5">
			<div class="d-flex justify-content-between">
				<h1>{{$user->username}}</h1>
				<a href="#">Add New Post</a>
			</div>
			<div class="d-flex">
				<div class="pr-5">
					<strong>153</strong> posts
				</div>
				<div class="pr-5">
					<strong>23k</strong> followers
				</div>
				<div class="pr-5">
					<strong>212</strong> following
				</div>
			</div>
			<div class="pt-4 font-weight-bold">{{$user->profile->title}}</div> 
			<div>{{$user->profile->description}}</div> 
			<div>
				<a href=# style="text-decoration: none; color: #0000CD">{{$user->profile->url}}</a>
			</div>
		</div>
	</div>
	<div class="row pt-5">
		<div class="col-4">
			<img
				src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.39.1440.1440a/s640x640/132198748_207307411022493_7579025210009190436_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_cat=109&_nc_ohc=EDiwu9snNxAAX-VizKD&tp=1&oh=1724920f94a195bc3e12263d1a33b0c4&oe=60397B20" class="w-100"></img>
		</div>
		<div class="col-4">
			<img
				src="https://scontent-lax3-1.cdninstagram.com/v/t51.2885-15/sh0.08/e35/c0.63.1440.1440a/s640x640/137610308_914440902700263_6382550674910912760_n.jpg?_nc_ht=scontent-lax3-1.cdninstagram.com&_nc_cat=103&_nc_ohc=SgjC7ba9jnAAX_xqRWC&tp=1&oh=0a8d37606a546f5369332afb2088a9c5&oe=60383F1F" class="w-100"></img>
		</div>
		<div class="col-4">
			<img
				src="https://scontent-lax3-2.cdninstagram.com/v/t51.2885-15/sh0.08/e35/s640x640/139960312_2283502301774071_820328158957930315_n.jpg?_nc_ht=scontent-lax3-2.cdninstagram.com&_nc_cat=107&_nc_ohc=R61pSn5ucFoAX9byHQZ&tp=1&oh=d0bbaca3c93696644ec0e711f5168ac0&oe=6038107B" class="w-100"></img>
		</div>
	</div>
</div>
@endsection
