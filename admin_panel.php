<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invite de commandes</title>
    <style>
        body {
            font-family: Consolas, monospace;
            background-color: #000;
            margin: 0;
            padding: 0;
        }

        .command-interface {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .cmd-window {
            background-color: #000;
            border: 2px solid #00ff00;
            /* Green border */
            border-radius: 5px;
            width: 400px;
        }

        .title-bar {
            background-color: #00ff00;
            /* Green */
            color: #000;
            padding: 5px;
            border-top-left-radius: 5px;
            border-top-right-radius: 5px;
        }

        .title {
            font-size: 16px;
            font-weight: bold;
        }

        .content {
            padding: 10px;
        }

        .output {
            color: #00ff00;
            /* Green */
        }

        .input-line {
            display: flex;
        }

        .prompt {
            color: #00ff00;
            /* Green */
            margin-right: 5px;
        }

        .command-input {
            background: none;
            border: none;
            outline: none;
            color: #00ff00;
            /* Green */
            font-family: Consolas, monospace;
            font-size: inherit;
            width: calc(100% - 20px);
        }
    </style>
</head>

<body>
    <div class="command-interface">
        <div class="cmd-window">
            <div class="title-bar">
                <div class="title">Invite de commandes</div>
            </div>
            <div class="content">
                <div class="output">
                    Bienvenue dans l'interface de commande!
                </div>
                <div class="input-line">
                    <div class="prompt">$&nbsp;</div>
                    <input type="text" class="command-input" placeholder="Enter your command here">
                </div>
            </div>
        </div>
    </div>
</body>

</html>