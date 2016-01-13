@extends('layouts.main')

@section('head')
<head>
  <meta charset="utf-8">
  <title>login..</title>
  <link href="{{ asset('/style/css/signin.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('/style/css/parsley.css') }}" rel="stylesheet" type="text/css" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">
  <!-- style -->
  <link href="{{ asset('/style/abound.css') }}" rel="stylesheet" type="text/css" />
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/dist/css/bootstrapValidator.css') }}" rel="stylesheet" type="text/css">
  <link rel="stylesheet" href="{{ asset('/datetimepicker/datepicker.min.css') }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset('/datetimepicker/datepicker3.min.css') }}" type="text/css" />


  <!-- Custom styles for this template -->
  <!-- <link href="{{ asset('/assets/css/navbar-static-top.css') }}" rel="stylesheet" type="text/css" /> -->
  <!-- jQuery -->
  <script src="{{ asset('/jquery/jquery-1.10.2.min.js') }}" type="text/javascript"></script>
    <!-- bootstrap js--->
  <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
  <!-- validator -->
  <script src="{{ asset('/dist/js/bootstrapValidator.js') }}" type="text/javascript"></script>
  <!-- datetimepicker -->
  <script src="{{ asset('/datetimepicker/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
  <script src="https://www.google.com/recaptcha/api.js"></script>

</head>
@stop

@section('content')
  <body>
    <section class="main-body">
      <!-- <div class="container-fluid"> -->
        <div id="content">
          <div class="page-header">
            <h1><strong>Alumni</strong> <small>Registration</small></h1>
          </div>
          <div class="col-lg-8 col-lg-offset-2">
              <form id="defaultForm" class="form-horizontal" action="/auth/register" method="post">
                  <div class="form-group">
                      <label class="col-lg-3 control-label">Nama Lengkap</label>
                      <div class="col-lg-6">
                          <input type="text" class="form-control" name="namalengkap"  />
                      </div>
                      <!--<div class="col-lg-4">
                          <input type="text" class="form-control" name="lastName" placeholder="Nama Belakang" />
                      </div>-->
                  </div>

                  <div class="form-group">
                        <label class="col-lg-3 control-label">Gender</label>
                        <div class="col-lg-5">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="male" /> Laki-laki
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="gender" value="female" /> Perempuan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tahun Masuk</label>
                        <div class="col-lg-4">
                            <select class="form-control" name="thmasuk">
                                <option value="" selected="selected">-- Pilih --</option>
                                @for ($i=1970; $i < 2016; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tahun Keluar</label>
                        <div class="col-lg-4">
                            <select class="form-control" name="thkeluar" placeholder="tahun lulus">
                                <option value="" selected="selected">-- Pilih --</option>
                                @for ($i=1970; $i < 2016; $i++)
                                <option value="{{ $i }}">{{ $i }}</option>
                                @endfor
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Tempat Kerja</label>
                        <div class="col-lg-7 text-field">
                            <input type="text" class="form-control" name="tempatKerja" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Reguler</label>
                        <div class="col-lg-4">
                            <select class="form-control" name="reguler">
                                <option value="">-- Reguler --</option>

                                <option value="A">Reguler A</option>
                                <option value="B">Reguler B</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Foto</label>
                        <div class="col-lg-4">
                          <span class="btn btn-default btn-file">
                            Browse...<input type="file" name="foto">
                          </span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-lg-3 control-label">Email</label>
                        <div class="col-lg-5">
                            <input type="text" class="form-control" name="email" />
                        </div>
                    </div>

                </fieldset>


                  <div class="form-group">
                      <label class="col-lg-3 control-label">Password</label>
                      <div class="col-lg-5">
                          <input type="password" class="form-control" name="password" />
                      </div>
                  </div>

                  <div class="form-group">
                      <label class="col-lg-3 control-label">Konfirmasi Password</label>
                      <div class="col-lg-5">
                          <input type="password" class="form-control" name="confirmPassword" />
                      </div>
                  </div>

                  <div class="form-group">
                      <div class="col-lg-5 col-lg-offset-3">
                          <div class="checkbox">
                              <input type="checkbox" name="acceptTerms" /> Bersedia mengikuti aturan yang berlaku?
                          </div>
                      </div>
                  </div>
                    <div class="col-lg-5 col-lg-offset-3">
                    <div class="g-recaptcha" data-sitekey="6LfUQRETAAAAAOHtzaPYU2pjnbv7l9dzufmlwYox"></div>
                  </div>
                </fieldset>

                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary" id="daftar">Daftar</button>
                    </div>
                </div>


              </form>
            </div>


        </div>
      <!-- </div> -->
    </section>

    <script type="text/javascript">
      $(document).ready(function(){
        $('#datePicker')
        .datepicker({
            format: 'mm/dd/yyyy'
        })
        .on('changeDate', function(e) {
            // Revalidate the date field
            $('#defaultForm').formValidation('revalidateField', 'date');
        });

        $("#daftar").click(function () {
                //need to validate the captcha
                function get_action(defaultForm) {
                var v = grecaptcha.getResponse();
                if(v.length == 0)
                {
                    document.getElementById('captcha').innerHTML="You can't leave Captcha Code empty";
                    return false;
                }
                if(v.length != 0)
                {
                    document.getElementById('captcha').innerHTML="Captcha completed";
                    return true;
                }
            }
            });

        $('#defaultForm').bootstrapValidator({
          message: 'this value is not valid',
          feedbackIcons: {
              valid: 'glyphicon glyphicon-ok',
              invalid: 'glyphicon glyphicon-remove',
              validating: 'glyphicon glyphicon-refresh'
          },
          fields: {
            namalengkap: {
                  validators: {
                      notEmpty: {
                          message: 'Nama depan tidak boleh kosong'
                      },
                      stringCase: {
                          message: 'Gunakan Huruf Kapital. Contoh: \'FELIK\'',
                          case: 'upper'
                      },
                      regexp: {
                          regexp: /^[A-Z\s]+$/i,
                          message: 'Gunakan hanya alphabet dan spasi'
                      }
                  }
              },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'Pilih jenis kelamin'
                    }
                }
            },
            date: {
                validators: {
                    notEmpty: {
                        message: 'Isi tanggal lahir'
                    },
                    date: {
                        format: 'MM/DD/YYYY',
                        message: 'Format tanggal lahir tidak valid'
                    }
                }
            },
            // ages: {
            //     validators: {
            //         notEmpty: {
            //           message: 'Berapa usia anda?'
            //       },
            //         lessThan: {
            //             value: 100,
            //             inclusive: true,
            //             message: 'Usia Maksimal 100 tahun'
            //         },
            //         greaterThan: {
            //             value: 10,
            //             inclusive: false,
            //             message: 'Usia Harus diatas 10 tahun'
            //         }
            //
            //     }
            // },
            address: {
              validators: {
                notEmpty:{
                  message: 'Alamat harus diisi'
                }
              }
            },
            thmasuk: {
                validators: {
                    notEmpty: {
                        message: 'Pilih asal daerah'
                    }
                }
            },
            thmasuk: {
                validators: {
                    notEmpty: {
                        message: 'Pilih asal daerah'
                    }
                }
            },
            phoneNumberUS: {
                validators: {
                    notEmpty: {
                      message: 'Isi nomor HP'
                    },
                   stringLength:{
                     min: 10,
                     max: 19,
                     message: 'Nomor hp harus lebih dari 10 dan kurang dari 19 karakter'
                   }


                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Email tidak boleh kosong'
                    },
                    //emailAddress: {
                        //message: 'Alamat email tidak valid'
                    //},
                    regexp:{
                      regexp: /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i,
                      message: 'Email tidak tidak valid'
                    }
                }
            },
            username: {
                message: 'Username tidak valid',
                validators: {
                    notEmpty: {
                        message: 'Username harus diisi'
                    },
                    stringLength: {
                        min: 6,
                        max: 30,
                        message: 'Username minimal 6 sampai 30 karakter'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'Karakter tidak valid, gunakan \'Aa-Zz\',   \'.\'  , dan   \'_\' '
                    }
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password tidak boleh kosong'
                    },
                    stringLength:{
                      min: 8,
                      max: 30,
                      message: 'minimal 8 karakter sampai 30'
                    },
                    identical: {
                        field: 'confirmPassword',
                        message: 'Password tidak cocok'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'Password tidak boleh kosong'
                    },
                    identical: {
                        field: 'password',
                        message: 'Password tidak cocok'
                    }
                }
            },
            acceptTerms: {
                validators: {
                    notEmpty: {
                        message: 'Anda harus mencentang dan menerima semua ketentuan untuk menjadi hawe'
                    }
                }
            }



          }
        });
      });

      </script>

  </body>
@stop
