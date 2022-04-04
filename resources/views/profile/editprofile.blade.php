<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link href="{{ URL::asset('css/profile.css') }}" type="text/css" rel="stylesheet">

<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                    width="150px"
                    src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span
                    class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span>
                </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile Settings</h4>
                </div>
                <div class="row mt-2">

                    <div class="row mt-3">

                        <form action="{{ route('updateprofile', ['data' => $data]) }}" enctype="multipart/form-data"
                            method="POST">
                            @csrf
                            @method('PUT')
                            <div class="col-md-6"><label class="labels">Name</label>
                                <input name="name" type="text" class="form-control" placeholder="first name"
                                    value="{{ $data['name'] }}">
                            </div>
                    </div>
                    <div class="col-md-12"><label class="labels">EMAil</label>
                        <input name="email" type="text" class="form-control" placeholder=" enter Email"
                            value="{{ $data['email'] }}">
                    </div>
                    <div class="col-md-12"><label class="labels">password</label>
                        <input name="password" type="password" class="form-control" placeholder="enter password"
                            value="{{ $data['password'] }}">
                    </div>
                    <div class="col-md-12"><label class="labels">Age</label>
                        <input name="age" type="number" class="form-control" placeholder="enter Age"
                            value="{{ $data['age'] }}">
                    </div>
                    <div class="col-md-12"><label class="labels">phone</label>
                        <input name="phone" type="text" class="form-control" placeholder="phone"
                            value="{{ $data['phone'] }}""></div>
             <div class=" col-md-12"><label class="labels">Address</label>
                        <input name="address" type="text" class="form-control" placeholder="enter address "
                            value="{{ $data['address'] }}""></div>
             <div class=" col-md-12"><label class="labels">Banck Account</label>
                        <input name="bank_account" type="text" class="form-control" placeholder="enter bank_account "
                            value="{{ $data->advertiser['bank_account'] }}""></div>
             <div class=" col-md-12"><label class="labels">id_photo</label>
                        <input name="id_photo" type="file" class="form-control" placeholder="enter id_photo "
                            value="{{ $data->advertiser['id_photo'] }}""></div>
             <div class=" col-md-12"><label class="labels">national_id</label>
                        <input name="national_id" type="text" class="form-control" placeholder="enter national_id "
                            value="{{ $data->advertiser['national_id'] }}""></div>
                        </div>
                        <div class="mt-5 text-center"><input class="btn btn-primary " name="submit" type="submit" value="Save Profile"></div>
                    </form>
                        
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>