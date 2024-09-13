@extends('template')

@section('card-body')
<div class = "mx-auto text-center p-3 m-5">
    <h5 class="mb-4">You Are About To Be Redirected To: </h5>
    <h1 class="text-pink m-0 url">{{ $url->url }}</h1>
</div>
@endsection
@section('card-footer')
<div class="card-footer p-0">
    <button
        class="btn btn-primary mx-auto text-center w-100 h-100 text-capitalize fs-5">Go!</button>
</div>
@endsection

@section('scripts')
<script type="text/javascript">
let url = "{{ $url->url }}";
$('.card-footer button').on('click', function () {
    window.location.href = url;
})
</script>
@endsection
