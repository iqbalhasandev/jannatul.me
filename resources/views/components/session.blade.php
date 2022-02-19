@php
if(!isset($errors)) $errors= new Illuminate\Support\ViewErrorBag;
@endphp

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ ucwords(session()->get('success'))}}
</div>
@endif

@if (session()->has('status'))
<div class="alert alert-success" role="alert">
    {{ ucwords(session()->get('status'))}}
</div>
@endif

@if(session()->has('error'))
<div class="alert alert-danger" role="alert">
    {{ ucwords(session()->get('error'))}}
</div>
@endif

@if(session()->has('warning'))
<div class="alert alert-danger" role="alert">
    {{ ucwords(session()->get('warning'))}}
</div>
@endif

@if(session()->has('info'))
<div class="alert alert-info" role="alert">
    {{ ucwords(session()->get('info'))}}
</div>
@endif
