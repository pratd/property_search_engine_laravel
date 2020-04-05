<template>
    <div class="col s12">
        <div class="input-field col s12">
            <select>
                <option value="" disabled selected>-</option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            <label>Select kind</label>
        </div>
        <div class="input-field col s12">
            <select>
                <option value="" disabled selected></option>
                <option value="1">Option 1</option>
                <option value="2">Option 2</option>
                <option value="3">Option 3</option>
            </select>
            <label>Type city,town,etc.</label>
        </div>
        <div class="col s12">
            <a class="waves-effect waves-light btn">button</a>
        </div>
    </div>

</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }

    $(document).ready(function(){
        $('select').formSelect();
    });
</script>
