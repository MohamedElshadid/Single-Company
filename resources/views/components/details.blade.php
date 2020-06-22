
@push('consultation')
<script src="{{URL::asset('js/consultationscript.js')}}"></script>

@endpush
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css" />
    <!-- Button trigger modal -->
    <div id="contact" class="details">
        <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header text-center">
                        <h4 class="modal-title w-100 font-weight-bold">Confirm</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
    
                    @if(count($errors) > 0)
    
                    <div class="alerts alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
    
                    @endif
    
                    @if($msg = Session::get('success'))
                    <div class="alert alert-success">{{$msg}}</div>
                    @endif
                        <div class="alerts alert alert-danger">
                            <ul>
                            </ul>  
                        </div>
                    {{-- <form action="{{ url('/contact') }}" method="post"> --}}
    
                        @csrf
    
                        <div id='consmodal'class="modal-body mx-3">
                            <div class="md-form mb-2">
                                <i class="fa fa-user"></i>
                                <input id='username' type="text" class="form-control validate" name="username">
    
                                <label data-error="wrong" data-success="right" for="defaultForm-email">Your Name</label>
                            </div>
                            <div class="md-form mb-2">
                                <i class="fa fa-phone"></i>
                                <input id='phoneno' type="text" name="phone" class="form-control validate">
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Phone</label>
                            </div>
                            <div class="md-form mb-2">
                                <i class="fa fa-comments"></i>
                                <textarea id='comment' type="text" name="comment" class="form-control validate"></textarea>
                                <label data-error="wrong" data-success="right" for="defaultForm-pass">Your Comment</label>
                            </div>
                            <div class="form-group">
                                <div class="input-group date" id="datetimepicker1" data-target-input="nearest">
                                    <input id='calldate'type="text" class="form-control datetimepicker-input" name="date" data-target="#datetimepicker1" />
                                    <div class="input-group-append" data-target="#datetimepicker1" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
    
                        </div>
                        <div class="modal-footer d-flex justify-content-center">
                            <button id='conssubmit' class="btn btn-success btn-block">Submit</button>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
    
        <div class="text-center">
            <button class="btn btn_info mt-4" style="position: relative;top: 172px;" data-toggle="modal" data-target="#modalLoginForm">Contact Us
            </button>
        </div>
    </div>
    </section>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>
<script type="text/javascript">
$('#datetimepicker1').datetimepicker();
</script>
