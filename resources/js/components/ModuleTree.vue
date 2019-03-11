<template>
    <tree
        :data="items"
        ref="tree"
    />
</template>

<script>
    import LiquorTree from 'liquor-tree';
    Vue.use(LiquorTree);

    export default {
        data() {
            return {
                items: this.renderTree()
            }
        },
        methods: {
            renderTree() {
                return axios.get('/modules/tree').then(({data}) => {
                    return data;
                });
            }
        }
    }
</script>
