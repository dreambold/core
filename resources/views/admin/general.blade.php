@extends('admin')

@section('body')
    <div class="app-title">
        <div>
            <h1><i class="fa fa-cogs"></i> {{$page_title}}</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
            <li class="breadcrumb-item"><a href="{{url()->current()}}">{{$page_title}}</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title ">{{$page_title}}</h3>
                <div class="tile-body">
                    <form role="form" method="POST" action="">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="form-group col-md-3">
                                <h6 class="text-uppercase">Website Title</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" value="{{$general->sitename}}"
                                           name="sitename">
                                    <div class="input-group-append"><span class="input-group-text">
                                            <i class="fa fa-file-text-o"></i>
                                            </span>
                                    </div>
                                </div>
                                <span class="text-danger">{{$errors->first('sitename')}}</span>
                            </div>

                            <div class="form-group  col-md-3">
                                <h6>COLOR</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" style="background-color: #{!! $general->color !!} " value="#{!! $general->color !!}"
                                           name="color">
                                    <div class="input-group-append"><span class="input-group-text">
                                            <i class="fa fa-paint-brush"></i>
                                        </span>
                                    </div>
                                </div>
                                <span class="text-danger">{{ $errors->first('color') }}</span>
                            </div>


                            <div class="form-group  col-md-2">
                                <h6 class="text-uppercase">Referral Bonus <small>(level 1)</small> </h6>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" value="{{$general->level_one}}"
                                           onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                           name="level_one">
                                    <div class="input-group-append"><span class="input-group-text">%</span></div>
                                </div>
                                <small class="form-text text-muted" >User  will  get bonus per deposit</small>
                                <span class="text-danger">{{ $errors->first('level_one') }}</span>
                            </div>

                            <div class="form-group  col-md-2">
                                <h6 class="text-uppercase">Referral Bonus <small>(level 2)</small> </h6>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" value="{{$general->level_two}}"
                                           onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                           name="level_two">
                                    <div class="input-group-append"><span class="input-group-text">%</span></div>
                                </div>
                                <small class="form-text text-muted" >User  will  get bonus per deposit</small>
                                <span class="text-danger">{{ $errors->first('level_two') }}</span>
                            </div>
                            <div class="form-group  col-md-2">
                                <h6 class="text-uppercase">Referral Bonus <small>(level 3)</small> </h6>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" value="{{$general->level_three}}"
                                           onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                           name="level_three">
                                    <div class="input-group-append"><span class="input-group-text">%</span></div>
                                </div>
                                <small class="form-text text-muted" >User  will  get bonus per deposit</small>
                                <span class="text-danger">{{ $errors->first('level_three') }}</span>
                            </div>



                        </div>

                        <div class="row">

                            <div class="form-group  col-md-3">
                                <h6>BASE CURRENCY </h6>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" value="{{$general->currency}}" name="currency">
                                    <div class="input-group-append"><span class="input-group-text">
                                            <i class="fa fa-money"></i>
                                            </span>
                                    </div>
                                </div>

                                <span class="text-danger">{{ $errors->first('currency') }}</span>
                            </div>
                            <div class="form-group  col-md-3">
                                <h6>CURRENCY SYMBOL</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" value="{{$general->currency_sym}}"
                                           name="currency_sym">
                                    <div class="input-group-append"><span class="input-group-text">
                                            <i class="fa fa-exclamation-circle"></i>
                                            </span>
                                    </div>
                                </div>
                                <span class="text-danger">{{ $errors->first('currency_sym') }}</span>
                            </div>
                            <div class="form-group  col-md-3">
                                <h6>Decimal After Point</h6>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" value="{{$general->decimal}}"
                                           name="decimal">
                                    <div class="input-group-append"><span class="input-group-text">
                                            Decimal
                                            </span>
                                    </div>
                                </div>
                                <span class="text-danger">{{ $errors->first('decimal') }}</span>
                            </div>

                            <div class="form-group col-md-3">
                                <h6> Homepage Counter </h6>
                                <div class="input-group">
                                    <input type="text" name="counter" value="{{old('counter', $general->counter)}}" class="form-control form-control-lg"
                                           placeholder="00" onkeyup="this.value = this.value.replace (/^\.|[^\d\.]|(\.)(.*)/g, '')">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><strong>Seconds</strong></span>
                                    </div>
                                </div>
                                @if ($errors->has('counter'))
                                    <div class="error">{{ $errors->first('counter') }}</div>
                                @endif
                            </div>

                            <div class="form-group col-md-3">
                                <h6>Coins Release Date: </h6>
                                <div class="input-group">
                                    <input value="{{old('release_date', $general->release_date)}}" type='text' name="release_date" class="form-control" id='datetimepicker4' />
                                </div>
                                @if ($errors->has('release_date'))
                                    <div class="error">{{ $errors->first('release_date') }}</div>
                                @endif
                            </div>

                            <div class="form-group  col-md-3">
                                <h6>REGISTRATION</h6>
                                <input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="large"
                                       data-width="100%" type="checkbox"
                                       name="registration" {{$general->registration == "1" ? 'checked' : '' }}>
                            </div>

                            <div class="form-group col-md-6">
                                <h6 class="text-uppercase">Bitcoin Deposit Limit <small>(Per user)</small> </h6>
                                <div class="input-group">
                                    <input type="text" class="form-control form-control-lg" value="{{old('btc_limit', $general->btc_limit)}}"
                                           onkeyup="this.value = this.value.replace (/^\.|[^\d\.]/g, '')"
                                           name="btc_limit">
                                    <div class="input-group-append pull-right"><span class="input-group-text">BTC</span></div>
                                </div>
                                @if ($errors->has('btc_limit'))
                                    <div class="error">{{ $errors->first('btc_limit') }}</div>
                                @endif
                            </div>

                        </div>

                        <div class="row">
                            <div class="form-group  col-md-3">
                                <h6>EMAIL VERIFICATION</h6>
                                <input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="large"
                                       data-width="100%" type="checkbox"
                                       name="email_verification" {{ $general->email_verification == "1" ? 'checked' : '' }}>
                            </div>

                            <div class="form-group  col-md-3">
                                <h6>EMAIL NOTIFICATION</h6>
                                <input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="large"
                                       data-width="100%" type="checkbox"
                                       name="email_notification" {{ $general->email_notification == "1" ? 'checked' : '' }}>
                            </div>

                            <div class="form-group  col-md-3">
                                <h6>SMS VERIFICATION</h6>
                                <input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="large"
                                       data-width="100%" type="checkbox"
                                       name="sms_verification" {{$general->sms_verification == "1" ? 'checked' : ''}}>
                            </div>

                            <div class="form-group  col-md-3">
                                <h6>SMS NOTIFICATION</h6>
                                <input data-toggle="toggle" data-onstyle="success" data-offstyle="danger" data-size="large"
                                       data-width="100%" type="checkbox"
                                       name="sms_notification" {{ $general->sms_notification == "1" ? 'checked' : '' }}>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group  col-md-12 ">
                                <br><br>
                                <button class="btn btn-primary btn-block btn-lg">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>4
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker-standalone.min.css" />
    <script>
        
        $('#datetimepicker4').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss'
        });
        bkLib.onDomLoaded(function () {
            new nicEditor({fullPanel: true}).panelInstance('area1');
        });
    </script>

@stop
