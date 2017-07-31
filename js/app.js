new Vue({
    el:'#app',
    data:{
        message:'salut les gent',
        link:'https://google.com',
        cls:'success',
        personnes:['reda','hanane','karim','fati'],

    },
    methods:{
        close:function () {
            this.message='fermer',
            this.success=false
        }
    }
});