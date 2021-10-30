let app = new Vue({
    el: '#app',
    data: {
        title: 'REST API',
        allData: '',
        searchs: '',
        reads: '',
        myModal: false,
        hiddenId: null,
        actionButton: 'Insert',
        dyynamicTitle: 'Add data'
    },
    methods: {
        fetchAllData() {
            axios.get('http://localhost/api_code/fontend/product/read_paging.php', {
                action: 'fetchall'
            }).then(res => {
                app.allData = res.data.records
            })
        },
        fetchSearchs() {
            axios.get('http://localhost/api_code/fontend/product/search.php', {
                action: 'fetchsearchs'
            }).then(res => {
                app.searchs = res.data.records
            })
        },
        fetchRead() {
            axios.get('http://localhost/api_code/fontend/product/read.php', {
                action: 'fetchread'
            }).then(res => {
                app.reads = res.data.records
            })
        },
        openModal() {
            app.name = '';
            app.description = '';
            app.price = '';
            app.category_id = '';
            app.created = '';
            app.actionButton = 'Insert';
            app.dyynamicTitle = 'Add Data';
            app.myModal = true;
        },
        submitData() {
            if (app.name != '' && app.description != '' && app.price != '' && app.category_id != '' &&
                app.created != '') {
                if (app.actionButton == 'Insert') {
                    axios.post('http://localhost/api_code/fontend/product/create.php', {
                        action: 'insert',
                        name: app.name,
                        description: app.description,
                        price: app.price,
                        category_id: app.category_id,
                        created: app.created
                    }).then(res => {
                        app.myModal = false;
                        app.fetchAllData();
                        app.name = '';
                        app.description = '';
                        app.price = '';
                        app.category_id = '';
                        app.created = '';
                        // alert(res.data.message);
                        window.location.reload();
                    });
                }
                if (app.actionButton == 'Update') {
                    axios.post('http://localhost/api_code/fontend/product/update.php', {
                        action: 'update',
                        name: app.name,
                        description: app.description,
                        price: app.price,
                        category_id: app.category_id,
                        created: app.created,
                        hiddenId: app.hiddenId
                    }).then(res => {
                        app.myModal = false;
                        app.fetchAllData();
                        app.name = '';
                        app.description = '';
                        app.price = '';
                        app.category_id = '';
                        app.created = '';
                        app.hiddenId = '';
                        // alert(res.data.message);
                        window.location.reload();
                    })
                }
            }
        },
        fetchData(id) {
            axios.post('http://localhost/api_code/fontend/product/read_one.php', {
                id: id,
                action: 'fetchSingle'

            }).then(res => {
                app.name = res.data.name;
                app.description = res.data.description;
                app.price = res.data.price;
                app.category_id = res.data.category_id;
                app.created = res.data.created;
                app.hiddenId = res.data.id;
                app.myModal = true;
                app.actionButton = 'Update';
                app.dyynamicTitle = 'Edit';
            });
        },
        deleteData(id) {
            if (confirm("Are you Sure")) {
                axios.post('http://localhost/api_code/fontend/product/detete.php', {
                    action: 'delete',
                    id: id
                }).then(res => {
                    app.fetchAllData();
                    alert(res.data.massage);
                });
            }
        }
    },
    created() {
        this.fetchAllData();
        this.fetchSearchs();
        this.fetchRead();
    }
})