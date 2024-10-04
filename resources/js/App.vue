<template>
    <div>
        <div class="text-xl w-3/4 bg-red-700">This is a home vue page</div>
        <div>
            <CustomButton :bgText="buttonText" bgColor="bg-[#4CAF50]" @buttonClick="handleButtonClick" />
        </div>
    </div>
</template>

<script setup>
import CustomButton from './CustomButtom.vue';
import { ref } from 'vue';

const buttonText = ref('accept');

const fetchData = () => {
    console.log('fetched data');
}

const handleButtonClick = () => {
    // console.log('button clicked')
    fetchData();
}

</script>