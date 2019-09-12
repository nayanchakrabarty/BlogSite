@if(session('message'))
    <div class="text-center" style="margin-bottom: 20px">
        <span class="alert alert-success">{{ session('message') }}</span>
    </div>
@endif
