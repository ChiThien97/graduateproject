import AppForm from '../app-components/Form/AppForm';

Vue.component('loaisanpham-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                tenloai:  '' ,
                slug:  '' ,
                mota:  '' ,
                ngaytao:  '' ,
                enabled:  false ,
                
            }
        }
    }

});