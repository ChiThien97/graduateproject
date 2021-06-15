import AppForm from '../app-components/Form/AppForm';

Vue.component('sanpham-form', {
    mixins: [AppForm],
    data: function() {
        return {
            form: {
                
            }
        }
    }

});