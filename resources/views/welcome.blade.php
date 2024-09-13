@extends('template')

@section('card-body')
<form class = "mx-auto text-center mt-5 mb-3" method="POST" action="/create" id="post-form">
    <input type="text" class="form-control text-lg-start fs-5 py-2" id="link" name='link'  placeholder="Enter URL here.." required>
    <button type="submit" id="shorten" class="btn btn-primary mx-auto text-center p-2 px-4 m-2 text-capitalize fs-5">shorten Now!</button>
</form>
@endsection
@section('card-footer')
<div class="card-footer position-relative d-flex align-items-center p-3" id="newLink">
    <p class="text-lg-start fs-5 m-0">Shortened Link Will Appear Here...</p>
    <i class="fa fa-clipboard" aria-hidden="true"></i>
</div>

<b class="alert alert-primary fixed-top text-center mx-auto" style="display: none;">Copied!!</b>
@endsection

@section('scripts')
<script type="text/javascript">
    $('#post-form').on('submit',function(e){
        e.preventDefault();

        $.ajax({
            type:'post',
            url:'/create',
            data:{
                link:$('#link').val(),
            },
            success: function(data){
                console.log($('#newLink'))
                $('#newLink').children().first().text(window.location.protocol + '//' + window.location.host+'/'+data)
                $('#newLink').trigger('change')
            }
        });

    });

    $('#newLink').on('change', function () {
        if ($(this).text() !== '')
            $(this).addClass('text-white bg-pink');
        else
            $(this).removeClass('text-white bg-pink');
    })
    $('#newLink').on('click',function() {
        if ($(this).hasClass('text-white bg-pink'))
        {
            navigator.clipboard.writeText($('#newLink').children().first().text());
            $('b.alert').fadeIn();


            setTimeout(()=>{
                $('b.alert').fadeOut();
            }, 3000)
        }
    })
</script>
@endsection
