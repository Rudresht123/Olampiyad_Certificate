

<label for="" class="form-label">Select School <span class="text-danger">*</span></label>
                    <select name="school_id" class="select2 form-select" id="school_select">
                        <option value="">Please Select School</option>
                        @foreach(schoolList() as $school)
                        <option value="{{$school->id ?? ''}}" {{isset($couresedata) && $couresedata->id == $school->id ? 'selected' : ''}}>
                            <span class="fw-bold">{{$school->school_name ?? ''}}</span> {{$school->contact_no ?? ''}}
                        </option>
                        @endforeach
                    </select>