<template>
    <div class="col s12">
        <div class="row">
            <div class="input-field col s10 offset-s1">
                <select>
                    <option value="" disabled selected>-</option>
                    <option v-for="(somes,index) in some">{{index}}</option>
                </select>
                <label>Select kind</label>
            </div>
            <div class="input-field col s10 offset-s1">
                <select>
                    <option value="" disabled selected></option>
                    <option value="1">Option 1</option>
                    <option value="2">Option 2</option>
                    <option value="3">Option 3</option>
                </select>
                <label>Type city,town,etc.</label>
            </div>
        </div>
        <div class="center-align">
            <a class="col s10 offset-s1 waves-effect waves-light btn btn-one">button</a>
        </div>
    </div>
</template>
<script>
    export default {
        props: ['some'],
        mounted() {
            console.log('Component mounted.')
            console.dir(this.some)
        }
    }

    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
