<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../css/friends.css">

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
        <a href="../html/profile.php"><img src="../img/Group.svg"></a>
    </header>
    <main>
        <div class="container_messages">
            <div class="menu">
                    <div class="friends">
                        <a href ="..//html/friends.php">
                            <img src="../img/Component 1.svg">
                            <p>Friends</p>
                        </a>
                    </div>
                <div class="messages">
                    <a href="../html/main_screen.php">
                        <img src="../img/Component 2.svg">
                        <p>Messages</p>
                    </a>
                </div>
            </div>
            <div class="list_choice">
                <div class="friends_choice">
                    <button onclick="ds_1()">
                        <img src="../img/Vector (1).png">
                        <p>Friends</p>
                    </button>
                </div>
                <div class="requests_choice">
                    <button onclick="ds_2()">
                        <img src="../img/Vector (2).png">
                        <p>Send requests</p>
                    </button>
                </div>
                <div class="friendship_choice">
                    <button onclick="ds_3()">
                        <img src="../img/Vector (3).png">
                        <p>Friendship requests</p>
                    </button>
                </div>
            </div>
        </div>
        <div class="list">
            <div class="friends_list">
                <div class="btn_1">
                    <button>
                        <img src="../img/Group.svg">
                    </button>
                </div>
                <p>Alex Holland</p>
                <div class="btn_2" >
                    <button>
                        <img src="../img/Component 4.png">
                    </button>
                </div>
            </div>

            <div class="requests_list">
                <div class="btn_1">
                    <button>
                        <img src="../img/Group.svg">
                    </button>
                </div>
                <p>Alex Holland</p>
                <div class="btn_2">
                    <button>
                        <img src="../img/Component 3.png">
                    </button>
                </div>
                <div class="btn_3">
                    <button>
                        <img src="../img/Vector (4).png">
                    </button>
                </div>
            </div>

            <div class="friendship_list">
                <div class="btn_1">
                    <button>
                        <img src="../img/Group.svg">
                    </button>
                </div>
                <p>Alex Holland</p>
                <div class="btn_2">
                    <button>
                        <img src="../img/Component 3.png">
                    </button>
                </div>
                <div class="btn_3">
                    <button>
                        <img src="../img/add.svg">
                    </button>
                </div>
            </div>
        </div>
        <script src="../js/display_block.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    </main>
</body>
</html>