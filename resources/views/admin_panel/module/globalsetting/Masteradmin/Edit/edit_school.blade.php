<form action="{{ route('admin.global-setting.edit.school',$schoolinformation->id) }}" method="POST">
    @csrf
    @method('PUT')
    <fieldset class="form-fieldset  mx-3">
        <legend>School Information</legend>
        <div class="row">
            <div class="gorm-group col-lg-4">
                <label for="" class="form-label">School Name<span
                        class="text-danger">*</span></label>
                <input type="text" name="school_name" value="{{$schoolinformation->school_name ?? ''}}" autocomplete="off" class="form-control input-sm"
                    required placeholder="Enter School Name">
            </div>
            <div class="col-sm-4 form-group">
                <label for="" class="form-label">School Contact No<span class="text-secondary">(optional)</span></label>
                <input type="text" name="phone_no" value="{{$schoolinformation->phone_no ?? ''}}" autocomplete="off" class="form-control input-sm"
                    placeholder="Enter Contact Number..">
            </div>
            <div class="col-sm-4 form-group">
                <label for="" class="form-label">School Email<span class="text-secondary">(optional)</span></label>
                <input type="text" name="email" value="{{$schoolinformation->email ?? ''}}" autocomplete="off" class="form-control input-sm"
                    placeholder="Enter School Email">
            </div>


            <div class="col-sm-4 form-group">
                <label for="" class="form-label">Principle Name<span class="text-secondary">(optional)</span></label>
                <input type="text" name="principle_name" value="{{$schoolinformation->priinciple_name ?? ''}}" autocomplete="off" class="form-control input-sm"
                    placeholder="Enter Principle Name..">
            </div>
            <div class="col-sm-4 form-group">
                <label for="" class="form-label">Principle Email<span class="text-secondary">(optional)</span></label>
                <input type="text" name="principle_email" value="{{$schoolinformation->principle_email ?? ''}}" autocomplete="off" class="form-control input-sm"
                    placeholder="Enter Principle Email">
            </div>


            <div class="col-sm-4 form-group">
                <label for="" class="form-label">Principle Phone No.<span class="text-secondary">(optional)</span></label>
                <input type="text" name="principle_phone_no" value="{{$schoolinformation->principle_phone_no ?? ''}}" autocomplete="off" class="form-control input-sm"
                    placeholder="Enter Principle Phone No..">
            </div>


            <div class="gorm-group col-lg-4">
                <label for="" class="form-label">Print Certificate School Name<span
                        class="text-danger">*</span></label>
                <textarea name="print_certificate_school_name" required class="form-control" placeholder="Certificate Print School Name..." id="">{{$schoolinformation->print_certificate_school_name ?? ''}}</textarea>
            </div>
       
        <div class="col-sm-4 form-group">
            <label for="" class="form-label">School Address <span
                    class="text-danger">*</span></label>
            <textarea name="school_address" class="form-control" required placeholder="School Address..." id="">{{$schoolinformation->school_address ?? ''}}</textarea>
        </div>
        <div class="col-sm-4 form-group">
            <label for="" class="form-label">About School<span class="text-secondary">(optional)</span></label>
            <textarea name="about_school" class="form-control" placeholder="About School..." id="">{{$schoolinformation->about_school ?? ''}}</textarea>
        </div>

        <div class="col-sm-4 gorm-group ">
            <label for="" class="form-label">School Logo <span class="text-secondary">(optional)</span></label>
            <input type="file" name="school_logo" value="{{old('school_logo')}}" autocomplete="off" class="form-control input-sm"
                placeholder="Enter School Name">
        </div>

        <div class="col-sm-4 gorm-group ">
            <label for="" class="form-label">School No of Student <span class="text-secondary">(optional)</span></label>
            <input type="text" name="no_of_student" value="{{$schoolinformation->no_of_student ?? ''}}" autocomplete="off" class="form-control input-sm"
                placeholder="Enter No Of Student">
        </div>
        <div class="col-sm-4 mb-3 pt-4">
            <b>Default Active : </b> <input type="checkbox" {{$schoolinformation->is_active =='yes' ? 'checked' : ''}} name="is_active">
        </div>
        
        </div>
    </fieldset>


    <div class="modal-footer mt-3 ">

        <button type="submit" class="btn btn-primary btn-icon px-2">
            <i class="fa fa-plus"></i> Update
        </button>
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            <i class="fa fa-times"></i> Cancel
        </button>

    </div>
</form>