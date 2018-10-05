new Vue({
    el: '#crud',
    created: function(){
        this.getSistemas();
    },
    data: {
        sistemas: []
    },
    methods: {
        getSistemas: function(){
            var urlSistemas = '/sistemas';
            axios.get(urlSistemas).then( response => {
                this.sistemas = response.data
            });

        },
        deleteSistema: function(sistema){
            var url = '/sistemas/'+sistema.id;
            axios.delete(url).then( response=> {
                this.getSistemas();
            });
        }
    }


});