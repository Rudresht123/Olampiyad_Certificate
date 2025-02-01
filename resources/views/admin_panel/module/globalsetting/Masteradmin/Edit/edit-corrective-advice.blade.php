<form action="{{ route('admin.global-setting.edit.corrective-advice',$correctiveadvice->id) }}" method="POST">
@csrf
@method('PUT')
    <fieldset class="form-fieldset  mx-3 mb-3">
        <legend>Corrective Advice Information</legend>
        <div class="row">
        <div class="col-lg-4 gorm-group ">
            <label for="" class="form-label">Position<span
                    class="text-danger">*</span></label>
            <input type="text" name="position" value="{{$correctiveadvice->position ?? ''}}" autocomplete="off" class="form-control input-sm"
                required placeholder="Enter Corrective Advice  Position">
        </div>
        <div class="col-lg-8 gorm-group ">
            <label for="" class="form-label">Corrective Adivce Category <span class="text-danger">*</span></label>
            <select name="corrective_advice_category" class="form-select" id="">
            <option value="">Please Select Corrective Advice Category</option>
            @foreach($correctivecategorys as $correctivecategorys)
            <option required value="{{$correctivecategorys->id ?? ''}}" {{$correctiveadvice->corrective_advice_category == $correctivecategorys->id ? 'selected' : ''}}>{{$correctivecategorys->category_name ?? ''}}</option>
            @endforeach
          </select>
        </div>
            <div class="col-sm-12 form-group">
                <label for="" class="form-label">Corrective Advice <span class="test-danger">*</span></label>
              <textarea required name="corrective_advice" class="form-control w-100" cols="2" rows="2" placeholder="Carrective Advice">{{$correctiveadvice->corrective_advice ?? ''}}</textarea>
            </div>
       
            <div class="col-sm-6 mb-3 pt-2">
                <b>Default Active : </b> <input type="radio" value="yes" {{$correctiveadvice->is_active=='yes' ? 'checked' : ''}}  name="is_active"><input type="radio" class="ms-3" {{$correctiveadvice->is_active=='no' ? 'checked' : ''}} value="no"  name="is_active">
            </div>
            <div class="col-lg-6">
                <span class="text-danger fw-bold fs-12">
                    Note : {A,B,C,D} User For Letters and {images} is User For Show The Image
                </span>
            </div>
        </div>
    </fieldset>
    
                
<div class="modal-footer mt-3">
    
    <button type="submit" class="btn btn-primary btn-icon px-3">
    <i class="fa fa-plus"></i> Update
</button>
<button  type="button" class="btn btn-secondary px-3" data-bs-dismiss="modal">
<i class="fa fa-times"></i> Cancel
</button>

</div>
</form>