var app = new Vue({
    el: '#app',
    data: {
        message: 'Hello Vue!',
        treners: treners
    },
    methods: {
        test: function (testMessage) {
            if (!testMessage) {
                testMessage = 'this is test';
            }

            console.log('test', testMessage);
        }
    },
    mounted: function () {
        console.log('Initialize!');
    },
    complete: function() {

    }
})