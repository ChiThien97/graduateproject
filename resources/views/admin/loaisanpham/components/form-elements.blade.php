<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tenloai'), 'has-success': fields.tenloai && fields.tenloai.valid }">
    <label for="tenloai" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.loaisanpham.columns.tenloai') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tenloai" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tenloai'), 'form-control-success': fields.tenloai && fields.tenloai.valid}" id="tenloai" name="tenloai" placeholder="{{ trans('admin.loaisanpham.columns.tenloai') }}">
        <div v-if="errors.has('tenloai')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tenloai') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('slug'), 'has-success': fields.slug && fields.slug.valid }">
    <label for="slug" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.loaisanpham.columns.slug') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.slug" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('slug'), 'form-control-success': fields.slug && fields.slug.valid}" id="slug" name="slug" placeholder="{{ trans('admin.loaisanpham.columns.slug') }}">
        <div v-if="errors.has('slug')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slug') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('mota'), 'has-success': fields.mota && fields.mota.valid }">
    <label for="mota" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.loaisanpham.columns.mota') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.mota" v-validate="''" id="mota" name="mota"></textarea>
        </div>
        <div v-if="errors.has('mota')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('mota') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ngaytao'), 'has-success': fields.ngaytao && fields.ngaytao.valid }">
    <label for="ngaytao" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.loaisanpham.columns.ngaytao') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.ngaytao" :config="datePickerConfig" v-validate="'date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('ngaytao'), 'form-control-success': fields.ngaytao && fields.ngaytao.valid}" id="ngaytao" name="ngaytao" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('ngaytao')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('ngaytao') }}</div>
    </div>
</div>

<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': fields.enabled && fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.loaisanpham.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


