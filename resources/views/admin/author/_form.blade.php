<div class="form-group">
    <label class="col-md-12">Author name</label>
    <div class="col-md-12">
        <input name="name" value="{{ old('name',isset($author)?$author->name:null) }}" type="text" placeholder="Enter author name" class="form-control form-control-line @error('name') is-invalid @enderror">
    </div>
    @error('name')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Author Email</label>
    <div class="col-md-12">
        <input name="email" value="{{ old('email',isset($author)?$author->email:null) }}" type="text" placeholder="Enter author email" class="form-control form-control-line @error('email') is-invalid @enderror">
    </div>
    @error('email')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Author Phone</label>
    <div class="col-md-12">
        <input name="phone" value="{{ old('phone',isset($author)?$author->phone:null) }}" type="tel" placeholder="Enter author Phone number" class="form-control form-control-line @error('phone') is-invalid @enderror">
    </div>
    @error('phone')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Address</label>
    <div class="col-md-12">
        <textarea rows="5" name="address" class="form-control form-control-line">{{ old('address',isset($author)?$author->address:null) }}</textarea>
    </div>
    @error('address')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
<div class="form-group">
    <label class="col-md-12">Author Gender</label>
    @php
        if(old("gender")){
            $gender = old('gender');
        }elseif(isset($author)){
            $gender = $author->gender;
        }else{
            $gender = null;
        }
    @endphp
    <div class="col-md-12">
        <input name="gender" @if($gender =='male') checked @endif value="male" type="radio" id="male"> <label for="male">Male</label>
        <input name="gender" @if($gender =='female') checked @endif value="female" type="radio" id="female"> <label for="female">Female</label>
        <input name="gender" @if($gender =='others') checked @endif value="others" type="radio" id="others"> <label for="others">Others</label>
    </div>
    @error('gender')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-control">
    <label class="col-md-12">Author Image</label>
    <div class="col-md-12">
        @if(isset($author) && $author->image != null)
            <img src="{{ asset($author->image) }}" alt="">
        @endif
        <input name="image" value="{{ old('image',isset($author)?$author->image:null) }}" type="file" placeholder="Enter author image" class="form-control form-control-line @error('image') is-invalid @enderror">
    </div>
    @error('image')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label class="col-md-12">Details</label>
    <div class="col-md-12">
        <textarea rows="5" name="details" class="form-control form-control-line">{{ old('details',isset($author)?$author->details:null) }}</textarea>
    </div>
    @error('details')
    <div class="pl-1 text-danger">{{ $message }}</div>
    @enderror
</div>
