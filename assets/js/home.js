var task;
axios.get('./taskapi').then(response => {
    // this.loadBufer = response.data;

    task = response.data  ;

    // this.load();


    console.log(task);
    // Vue.prototype.$http = axios;
    // var vm0 = '';
    var vm = new Vue({
        el: '#app',
        components: {
            mdbBtn: mdbvue.mdbBtn,
            mdbDatatable:mdbvue.mdbDatatable
        },
        data() {
            return {
                data: {
                    loadBufer: [],
                    language: {
                        "paginate": {
                            "next":       "SIGUIENTE",
                            "previous":   "ANTERIOR"
                        }
                    },

                    columns: [
                        {
                            label: 'ID',
                            field: 'id',
                            sort: 'asc'
                        },
                        {
                            label: 'Пользователь',
                            field: 'user',
                            sort: 'asc'
                        },
                        {
                            label: 'Email',
                            field: 'email',
                            sort: 'asc'
                        },
                        {
                            label: 'Задача',
                            field: 'task',
                            sort: 'asc'
                        },
                        {
                            label: 'Статус',
                            field: 'status',
                            sort: 'asc'
                        },

                    ],
                    rows: task,
                    // [
                    //     {
                    //         user: 'Tiger Nixon',
                    //         email: 'System Architect',
                    //         task: 'Edinburgh',
                    //         status: '61',
                    //         // date: '2011/04/25',
                    //         // salary: '$320'
                    //     },
                    //     {
                    //         user: 'Tiger Nixon',
                    //         email: 'System Architect',
                    //         task: 'Edinburgh',
                    //         status: '61',
                    //         // date: '2011/04/25',
                    //         // salary: '$320'
                    //     },
                    // ]
                }
            }
        },
        created: function () {

        },
        // async mounted(){
        //     await axios.get('http://tophotels.ts3h.ru/taskapi').then(response => {
        //         // this.loadBufer = response.data;
        //
        //          this.$data.data.rows = response.data  ;
        //          console.log(this.$data.data);
        //         // this.load();
        //
        //     });
        // },
        // methods: {
        //     loadMenu: async function() {
        //         await axios.get('http://tophotels.ts3h.ru/taskapi').then(response => {
        //             this.loadBufer = response.data;
        //             // console.log(response.data);
        //             this.load();
        //         });
        //
        //     },
        //     load: function () {
        //         axios.get('http://tophotels.ts3h.ru/taskapi').then(response => {
        //             this.$data.data.rows = response.data;
        //              console.log(vm0 = response.data)
        //         })
        //     }
        // }

    });
});
// vm.loadMenu();
//
// name: 'DatatablePage',
//     components: {
//     mdbDatatable
// }
