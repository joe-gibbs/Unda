@extends('layouts.master')
@section('page-title', 'View your details')
@push('scripts')
  <script src="{{ asset('js/edit-toggle.js') }}"></script>
@endpush

@section('content')
    <div class="sidebar-overlay" id="sidebar-overlay"></div>
    <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
    <div class="mobile-menu-handle"></div>

    <article class="content dashboard-page">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <fieldset>
              <legend>Account</legend>
              <table class="table table-condensed table-responsive small">
                <tbody>
                  <tr id="name">
                    <td>Name</td>
                    <td>{{$user->name}}</td>
                    <td><button id="edit-name" href="">Edit</button></td>
                  </tr>
                  <!--Different row is displayed when user clicks edit - toggle the display of the rows-->
                  <tr id="name-edit" style="display:none;">
                    <td colspan=3>
                        <form method="post" action="{{URL::to('/account/update/name')}}">
                          {{ csrf_field() }}
                          <fieldset>
                            <legend class="col-lg-12 text-center">Edit Name</legend>
                            <br />

                            <div class="row">
                              <label class="col-lg-3" for="new-first">First Name: </label>
                              <input class="col-lg-5" name="firstname" type="text" id="new-first" />
                              <label class="col-lg-4" id="first-validity"><!--TODO Add glyphicon tick -->Name is valid</label>
                            </div>

                            <br />

                            <div class="row">
                              <label class="col-lg-3" for="new-last">Last Name: </label>
                              <input class="col-lg-5" name="lastname" type="text" id="new-last" />
                              <label class="col-lg-4" id="last-validity">Name is valid</label>
                            </div>

                            <br />

                            <div class="row">
                              <div class="col-lg-5"></div>
                              <input class="small col-lg-2 center-block btn btn-primary" type="submit" value="Update"/>
                              <div class="col-lg-5"></div>
                            </div>
                          </fieldset>
                        </form>
                    </td>
                  </tr>
                  <tr id="email">
                    <td>Email</td>
                    <td>{{$user->email}}</td>
                    <td><button id="edit-email" href="">Edit</button></td>
                  </tr>
                  <tr id="email-edit" style="display:none;">
                    <td colspan=3>
                        <form method="post" action="{{URL::to('/account/update/email')}}">
                          {{ csrf_field() }}
                          <fieldset>
                            <legend class="col-lg-12 text-center">Change Email</legend>
                            <br />

                            <div class="row">
                              <label class="col-lg-3" for="new-email">Email: </label>
                              <input class="col-lg-5" name="email" type="text" id="new-email" />
                              <label class="col-lg-4" id="email-validity">Email is valid</label>
                            </div>

                            <br />

                            <div class="row">
                              <label class="col-lg-3" for="conf-email">Confirm Email: </label>
                              <input class="col-lg-5" name="email-confirm" type="text" id="conf-email" />
                              <label class="col-lg-4" id="email-match">Email does not match</label>
                            </div>

                            <br />

                            <div class="row">
                              <div class="col-lg-5"></div>
                              <input class="small col-lg-2 center-block btn btn-primary" type="submit" value="Verify"/>
                              <div class="col-lg-5"></div>
                            </div>
                          </fieldset>
                        </form>
                    </td>
                  </tr>
                  <tr id="password">
                    <td>Password</td>
                    <td>********</td>
                    <td><button id="edit-password" href="">Edit</button></td>
                  </tr>
                  <tr id="password-edit" style="display:none;">
                    <td colspan=3>
                        <form method="post" action="{{URL::to('/account/update/password')}}">
                          {{ csrf_field() }}
                          <fieldset>
                            <legend class="col-lg-12 text-center">Change Password</legend>
                            <br />

                            <div class="row">
                              <label class="col-lg-3" for="old-password">Old Password: </label>
                              <input class="col-lg-5" name="password-old" type="text" id="old-password" />
                              <label class="col-lg-4" id="password-correct"></label>
                            </div>

                            <br />

                            <div class="row">
                              <label class="col-lg-3" for="new-password">New Password: </label>
                              <input class="col-lg-5" name="password" type="text" id="new-password" />
                              <label class="col-lg-4" id="password-validity">Password must be 8 characters</label>
                            </div>

                            <br />

                            <div class="row">
                              <label class="col-lg-3" for="conf-password">Confirm Password: </label>
                              <input class="col-lg-5" name="password-confirm" type="text" id="conf-password" />
                              <label class="col-lg-4" id="password-match">Password does not match</label>
                            </div>

                            <br />

                            <div class="row">
                              <div class="col-lg-5"></div>
                              <input class="small col-lg-2 center-block btn btn-primary" type="submit" value="Update"/>
                              <div class="col-lg-5"></div>
                            </div>
                          </fieldset>
                        </form>
                    </td>
                  </tr>
                  <tr id="picture">
                    <td>Picture</td>
                    <td>
                      <a href="">
                        <img src="http://www.abc.net.au/news/image/8709852-3x2-940x627.jpg" class="img-fluid rounded mx-auto d-block" width="50%" height="50%" />
                      </a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </fieldset>
          </div>
        </div>
        <div class="row">

        </div>
      </div>
    </article>


  @endsection
