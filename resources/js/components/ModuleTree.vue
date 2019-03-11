<template>
    <tree
        :data="items"
        :options="options"
        ref="tree"
    />
</template>

<script>
    import LiquorTree from 'liquor-tree';
    Vue.use(LiquorTree);

    export default {
        mounted() {
            console.log('Component mounted.')
        },
        data() {
            return {
                items: [
                {text: 'Item 1'},
                {text: 'Item 2'},
                {text: 'Item 3', children: [
                    {text: 'Item 3.1'},
                    {text: 'Item 3.2'}
                ]}
                ],
                options: {
                checkbox: true
                }
            }
        }
    }
</script>
