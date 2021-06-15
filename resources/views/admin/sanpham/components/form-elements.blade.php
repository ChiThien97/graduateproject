<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tensanpham'), 'has-success': fields.tensanpham && fields.tensanpham.valid }">
    <label for="tensanpham" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sanpham.columns.tensanpham') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tensanpham" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tensanpham'), 'form-control-success': fields.tensanpham && fields.tensanpham.valid}" id="tensanpham" name="tensanpham" placeholder="{{ trans('admin.sanpham.columns.tensanpham') }}">
        <div v-if="errors.has('tensanpham')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tensanpham') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('slug'), 'has-success': fields.slug && fields.slug.valid }">
    <label for="slug" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sanpham.columns.slug') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.slug" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('slug'), 'form-control-success': fields.slug && fields.slug.valid}" id="slug" name="slug" placeholder="{{ trans('admin.sanpham.columns.slug') }}">
        <div v-if="errors.has('slug')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('slug') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('gia'), 'has-success': fields.gia && fields.gia.valid }">
    <label for="gia" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sanpham.columns.gia') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.gia" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('gia'), 'form-control-success': fields.gia && fields.gia.valid}" id="gia" name="gia" placeholder="{{ trans('admin.sanpham.columns.gia') }}">
        <div v-if="errors.has('gia')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('gia') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('gia_km'), 'has-success': fields.gia_km && fields.gia_km.valid }">
    <label for="gia_km" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sanpham.columns.gia_km') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.gia_km" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('gia_km'), 'form-control-success': fields.gia_km && fields.gia_km.valid}" id="gia_km" name="gia_km" placeholder="{{ trans('admin.sanpham.columns.gia_km') }}">
        <div v-if="errors.has('gia_km')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('gia_km') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('mota'), 'has-success': fields.mota && fields.mota.valid }">
    <label for="mota" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sanpham.columns.mota') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.mota" v-validate="''" id="mota" name="mota"></textarea>
        </div>
        <div v-if="errors.has('mota')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('mota') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hinhanh'), 'has-success': fields.hinhanh && fields.hinhanh.valid }">
    <label for="hinhanh" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sanpham.columns.hinhanh') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.hinhanh" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('hinhanh'), 'form-control-success': fields.hinhanh && fields.hinhanh.valid}" id="hinhanh" name="hinhanh" placeholder="{{ trans('admin.sanpham.columns.hinhanh') }}">
        <div v-if="errors.has('hinhanh')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hinhanh') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('baohanh'), 'has-success': fields.baohanh && fields.baohanh.valid }">
    <label for="baohanh" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sanpham.columns.baohanh') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.baohanh" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('baohanh'), 'form-control-success': fields.baohanh && fields.baohanh.valid}" id="baohanh" name="baohanh" placeholder="{{ trans('admin.sanpham.columns.baohanh') }}">
        <div v-if="errors.has('baohanh')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('baohanh') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('thongso'), 'has-success': fields.thongso && fields.thongso.valid }">
    <label for="thongso" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sanpham.columns.thongso') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.thongso" v-validate="'required'" id="thongso" name="thongso"></textarea>
        </div>
        <div v-if="errors.has('thongso')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('thongso') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('ngaytao'), 'has-success': fields.ngaytao && fields.ngaytao.valid }">
    <label for="ngaytao" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.sanpham.columns.ngaytao') }}</label>
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
            {{ trans('admin.sanpham.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


