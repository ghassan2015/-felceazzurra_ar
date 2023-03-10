@extends('layouts.admin')

@section('title','طلبات التواصل')
@section('content')
<div class="col-12 p-3">
	<div class="col-12 col-lg-12 p-0 ">
        <div class="col-12 col-lg-12 p-0 main-box">
            <div class="card card-custom example example-compact">
                <div class="card-header">

                    <div class="col-12 px-0">
                        <div class="col-12 px-3 py-3" style="font-size: 20px;">
                           عرض الرسالة
                        </div>
                        <div class="col-12 divider" style="min-height: 2px;"></div>
                    </div>
                </div>
                <div class="card-body">


                <div class="col-12 col-lg-8 p-0 main-box">

			<div class="col-12 p-3 row">

				<div class="col-12 col-lg-12 p-2">
					<div class="col-12">
						الاسم
					</div>
					<div class="col-12 pt-3">
						{{$contact->name}}
					</div>
				</div>
				<div class="col-12 col-lg-12 p-2">
					<div class="col-12">
						البريد
					</div>
					<div class="col-12 pt-3">
						{{$contact->email}}
					</div>
				</div>
				<div class="col-12 col-lg-12 p-2">
					<div class="col-12">
						الهاتف
					</div>
					<div class="col-12 pt-3">
						{{$contact->phone}}
					</div>
				</div>
				<div class="col-12 col-lg-12 p-2">
					<div class="col-12">
						الرسالة
					</div>
					<div class="col-12 pt-3" style="white-space: pre-line;">{!!\MainHelper::focus_urls($contact->message)!!}</div>
				</div>
			</div>
		</div>
	</div>
</div>
        </div>
    </div>
</div>
@endsection
