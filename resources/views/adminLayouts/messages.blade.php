@if(Session('success'))
<div class="alert alert-success h3 text-center">
	<p>{{ Session('success') }}</p>
</div>
@endif
@if(Session('danger'))
<div class="alert alert-danger h3 text-center">
	<p>{{ Session('danger') }}</p>
</div>
@endif

