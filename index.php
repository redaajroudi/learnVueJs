<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.11/semantic.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <title>Document</title>
</head>
<body>
<div class="container" id="app">

    <a  :href="link">{{message}}</a>
    <input type="checkbox" v-model="cls" :true-value="'success'" :false-value="'error'">
    <div class="ui message " :class="cls"><i class="close icon" aria-hidden="true" @click="close"></i><p>{{message}}</p></div>

    <ul>
        <li v-for="person in personnes">{{person}}</li>
    </ul>
</div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.4.2/vue.min.js"></script>
<script src="js/app.js"></script>
</html>