@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.sanpham.actions.edit', ['name' => $sanpham->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <sanpham-form
                :action="'{{ $sanpham->resource_url }}'"
                :data="{{ $sanpham->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.sanpham.actions.edit', ['name' => $sanpham->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.sanpham.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </sanpham-form>

        </div>
    
</div>

@endsection