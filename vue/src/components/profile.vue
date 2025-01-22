<template>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/profile.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
            <img src="../img/logo.svg">
            <div class="text_logo">
                <p>Q</p>
                <p>u</p>
                <p>a</p>
                <p>n</p>
                <p>t</p>
                <p>a</p>
            </div>
        </div>
        <img src="../img/Group.svg">
    </header>
    <main>
        <div class="container_messages">
            <div class="menu">
                    <div class="friends">
                        <a href ="..//html/friends.html">
                            <img src="../img/Component 1.svg">
                            <p>Friends</p>
                        </a>
                    </div>
                <div class="messages">
                    <a href="../html/main_screen.html">
                        <img src="../img/Component 2.svg">
                        <p>Messages</p>
                    </a>
                </div>
            </div>
            <div class="info">
                <div class="h1">
                    <p>More information</p>
                    <img src="../img/Info 1.svg">
                </div>
                <p>Friends:</p>
                <p>Date of birth:</p>
                <p>Hometown:</p>
                <p>languages:</p>
                <p>Educational institution:</p>
                <form action="../php/log_out.php">
                    <button>
                        <img src="../img/log_out_jtltofoq8kjm 1.svg">
                    </button>
                </form>
            </div>
        </div>
        <div class="profile">
            <img src="../img/Group.svg">
            <div class="profile_name">
                <p id="app">{{ name }}</p>
                <p>online</p>
                <p>I will save you from loneliness, but I do not know how to save myself.</p>
            </div>
            <div class="photo"></div>
        </div>
    </main>
</body>
</html>
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script>
        const { createApp, ref } = Vue

        createApp({
        setup() {
            const name = 'maks'
            return {
            name
            }
        }
        }).mount('#app')
    </script>