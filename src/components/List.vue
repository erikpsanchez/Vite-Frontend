<script setup>
import { ref } from 'vue'

const show = ref(true)
const list = ref([1, 2, 3])
</script>

<template>
    <button class="toggle" @click="show = !show">Toggle List</button>
    <button class="push" @click="list.push(list.length + 1)">Push Number</button>
    <button class="pop" @click="list.pop()">Pop Number</button>
    <button class="reverse" @click="list.reverse()">Reverse List</button>

    <ul v-if="show && list.length">
        <li v-for="item of list">{{ item }}</li>
    </ul>
    <p class="msg" v-else-if="list.length">List is not empty, but hidden 😶‍🌫️</p>
    <p class="msg" v-else>List is empty 😯</p>
</template>

<style scoped>
    button {
        margin: 10px 20px;
        color: white;
        border-radius: 4px;
        font-size: 16px;
        padding: 10px 15px;
        border: none;
    }

    button:hover {
        cursor: pointer;
    }

    .toggle {
        background-color: #ffbb34;
    }

    .toggle:hover {
        background-color: #ff9e0a;
    }

    .push {
        background-color: #4385f5;
    }

    .push:hover {
        background-color: #0e47a1;
    }

    .pop {
        background-color: #ff3548;
    }

    .pop:hover {
        background-color: #cc0001;
    }

    .reverse {
        background-color: #01c851;
    }

    .reverse:hover {
        background-color: #007e34;
    }

    li {
        transition: cubic-bezier(0.39, 0.575, 0.565, 1);
        font-size: 16px;
        font-family: Arial, Helvetica, sans-serif;
        margin-bottom: 6px;
    }

    .msg {
        font-family: Arial, Helvetica, sans-serif;
        font-size: 18px;
        margin-left: 20px;
    }
</style>
