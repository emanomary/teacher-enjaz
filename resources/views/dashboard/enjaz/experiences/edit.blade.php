<div class="modal fade" id="edit-experience-eModal" tabindex="-1" aria-labelledby="add-edu-eModal" aria-hidden="true">
    <div class="modal-dialog  modal-lg modal-dialog-centered ">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">{{__('enjaz.addEnjazCpanel')}}</h5>
                <button type="button" class="btn-close ms-0" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body p-3 m-5 mt-0" >
                <div id="custom-alert" class="alert alert-danger" style="display: none;"></div>
                <form id="editExperienceForm" name="experienceForm" method="POST" action="{{--{{route('experiences.update',$experience->id)}}--}}">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id" value="{{--{{$experience->id}}--}}">

                    <div class="form-floating mb-3 ms-3">
                        <input type="text" class="form-control" id="name" name="name" value="{{--{{$experience->name}}--}}">
                        <label for="floatingInput" >{{__('enjaz.experience')}}</label>
                        <div class="text-danger" id="experienceError"></div>
                    </div>
                    <div class="form-floating mb-3 ms-3">
                        <input type="text" class="form-control" id="organization" name="organization" value="{{--{{$experience->organization}}--}}">
                        <label for="floatingInput" >{{__('enjaz.organization')}}</label>
                        <div class="text-danger" id="organizationError"></div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-floating mb-3 ms-3">
                                <input type="date" class="form-control" id="from" name="from" value="{{--{{$experience->from}}--}}">
                                <label for="floatingInput" >{{__('enjaz.from')}}</label>
                                <div class="text-danger" id="fromError"></div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-floating mb-3 ms-3">
                                <input type="date" class="form-control" id="to" name="to" value="{{--{{$experience->to}}--}}">
                                <label for="floatingInput" >{{__('enjaz.to')}}</label>
                                <div class="text-danger" id="toError"></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn custom-btn" id="editBtn">{{__('enjaz.update')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

