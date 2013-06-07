<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="description" content="$1">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>My Awesome MemThing</title>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="jquery.js"></script>
        <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
        <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
        <link href='http://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:700' rel='stylesheet' type='text/css'>
        <style type="text/css">
        #mywords,
        .restoftheword {
            font-size: 70px;
            font-family: 'Helvetica Neue',Arial,sans-serif;
            font-weight: bold;
            letter-spacing: 0px;
            line-height: 1em;
            color: #1b1e1f;
            text-shadow: 0 1px 0 #fff;
            text-align: center;
        }
        .restoftheword {
            opacity: 0.2;
            display: none;
        }
        .space {
            display: none;
            margin-right: 20px;
        }
        section {
            margin: 50px auto 0;
            width: 75px;
            height: 95px;
            position: relative;
            text-align: center;
            margin-bottom: 30px;
        }
        :active, :focus {
            outline: 0;
        }
        /** Font-Face **/
        @font-face {
          font-family: "FontAwesome";
          src: url("fonts/fontawesome-webfont.eot");
          src: url("fonts/fontawesome-webfont.eot?#iefix") format('eot'), 
               url("fonts/fontawesome-webfont.woff") format('woff'), 
               url("fonts/fontawesome-webfont.ttf") format('truetype'), 
               url("fonts/fontawesome-webfont.svg#FontAwesome") format('svg');
          font-weight: normal;
          font-style: normal;
        }
        /** Styling the Button **/
        #button {
            font-family: "FontAwesome";
            text-shadow: 0px 1px 1px rgba(250,250,250,0.1);
            font-size: 32pt;
            display: block;
            position: relative;
            text-decoration: none;
            box-shadow: 0px 3px 0px 0px rgb(34,34,34),
                        0px 7px 10px 0px rgb(17,17,17),
                        inset 0px 1px 1px 0px rgba(250, 250, 250, .2), 
                        inset 0px -12px 35px 0px rgba(0, 0, 0, .5);
            width: 70px;
            height: 70px;
            border: 0;
            color: rgb(37,37,37);
            border-radius: 35px;
            text-align: center;
            line-height: 79px;
            background-color: rgb(83,87,93);

            transition: color 350ms ease, text-shadow 350ms;
                -o-transition: color 350ms ease, text-shadow 350ms;
                -moz-transition: color 350ms ease, text-shadow 350ms;
                -webkit-transition: color 350ms ease, text-shadow 350ms;
        }
        #button:before {
            content: "";
            width: 80px;
            height: 80px;
            display: block;
            z-index: -2;
            position: absolute;
            background-color: rgb(26,27,29);
            left: -5px;
            top: -2px;
            border-radius: 40px;
            box-shadow: 0px 1px 0px 0px rgba(250,250,250,0.1), 
                        inset 0px 1px 2px rgba(0, 0, 0, 0.5);
        }
        #button:active {
            box-shadow: 0px 0px 0px 0px rgb(34,34,34),
                        0px 3px 7px 0px rgb(17,17,17),
                        inset 0px 1px 1px 0px rgba(250, 250, 250, .2), 
                        inset 0px -10px 35px 5px rgba(0, 0, 0, .5);
            background-color: rgb(83,87,93);
            top: 3px;
        }
        #button.on {
            box-shadow: 0px 0px 0px 0px rgb(34,34,34),
                        0px 3px 7px 0px rgb(17,17,17), 
                        inset 0px 1px 1px 0px rgba(250, 250, 250, .2), 
                        inset 0px -10px 35px 5px rgba(0, 0, 0, .5);
            background-color: rgb(83,87,93);
            top: 3px;
            color: #fff;
            text-shadow: 0px 0px 3px rgb(250,250,250);
        }
        #button:active:before, #button.on:before {
            top: -5px;
            background-color: rgb(26,27,29);
            box-shadow: 0px 1px 0px 0px rgba(250,250,250,0.1), 
                        inset 0px 1px 2px rgba(0, 0, 0, 0.5);
        }
        /* Styling the Indicator light */
        #button + span {
            display: block;
            width: 8px;
            height: 8px;
            background-color: rgb(226,0,0);
            box-shadow: inset 0px 1px 0px 0px rgba(250,250,250,0.5),
                        0px 0px 3px 2px rgba(226,0,0,0.5);
            border-radius: 4px;
            clear: both;
            position: absolute;
            bottom: 0;
            left: 42%;
            transition: background-color 350ms, box-shadow 700ms;
            -o-transition: background-color 350ms, box-shadow 700ms;
            -moz-transition: background-color 350ms, box-shadow 700ms;
            -webkit-transition: background-color 350ms, box-shadow 700ms;
        }
        #button.on + span {
            box-shadow: inset 0px 1px 0px 0px rgba(250,250,250,0.5),
                        0px 0px 3px 2px rgba(135,187,83,0.5);
            background-color: rgb(135,187,83);
        }
        #hiddenone {
            display: none;
        }
        input[type="text"] {
            border-radius: 6.2px;
            padding: 8px 15px;
            border: 1px solid rgb(112, 112, 112);
            font-size: 14px;
            height: 38px;
            background-color: #ffffff;
            -webkit-transition: border linear .2s, box-shadow linear .2s;
            -webkit-transition-property: border, box-shadow;
            -webkit-transition-duration: 0.2s, 0.2s;
            -webkit-transition-timing-function: linear, linear;
            -webkit-transition-delay: initial, initial;
            line-height: 20px;
            color: #555555;
            display: block;
            font-weight: normal;
            vertical-align: middle;
            -webkit-appearance: textfield;
            -webkit-rtl-ordering: logical;
            -webkit-user-select: text;
            cursor: auto;
            text-transform: none;
            text-indent: 0px;
            text-shadow: none;
            text-align: -webkit-auto;
            letter-spacing: normal;
            word-spacing: normal;
            font: -webkit-small-control;
            width:400px;
            margin-left: auto;
            margin-right: auto;
            margin-top:50px;
        }
        input[type="text"]:focus {
              outline: none;
                  border-color: #9ecaed;
                  box-shadow: 0 0 10px #9ecaed;
              }

        #go {
            position: relative;
            color: rgba(255,255,255,1);
            text-decoration: none;
            background-color: rgba(219,87,5,1);
            font-family: 'Yanone Kaffeesatz';
            font-weight: 700;
            font-size: 50px;
            display: block;
            padding: 4px;
            -webkit-border-radius: 8px;
            -moz-border-radius: 8px;
            border-radius: 8px;
            -webkit-box-shadow: 0px 9px 0px rgba(219,31,5,1), 0px 9px 25px rgba(0,0,0,.7);
            -moz-box-shadow: 0px 9px 0px rgba(219,31,5,1), 0px 9px 25px rgba(0,0,0,.7);
            box-shadow: 0px 9px 0px rgba(219,31,5,1), 0px 9px 25px rgba(0,0,0,.7);
            margin: 10px auto;
            width: 80px;
            text-align: center;
            border: none;
            -webkit-transition: all .1s ease;
            -moz-transition: all .1s ease;
            -ms-transition: all .1s ease;
            -o-transition: all .1s ease;
            transition: all .1s ease;
        }

        #go:active {
            -webkit-box-shadow: 0px 3px 0px rgba(219,31,5,1), 0px 3px 6px rgba(0,0,0,.9);
            -moz-box-shadow: 0px 3px 0px rgba(219,31,5,1), 0px 3px 6px rgba(0,0,0,.9);
            box-shadow: 0px 3px 0px rgba(219,31,5,1), 0px 3px 6px rgba(0,0,0,.9);
            position: relative;
            top: 6px;
        }
        .gray {
            opacity: 0.5;
        }
        </style>
    </head>
    <body>
        <section>  
            <a rel="external" id="button">&#xF011;</a>  
            <span></span>  
        </section>









        <div id="hiddenone">
            <?php

                if(isset($_GET['keyword'])) {
                   $torubytext = $_GET['keyword'];
                   $toruby = 'toruby.txt';
                   file_put_contents($toruby, $torubytext);
                }

                // wait for responce from ruby script
                while(!file_exists('fromruby.txt')){}

                $fromruby = 'fromruby.txt';
                $input = file_get_contents($fromruby);
                $pairs = explode('|', $input);
            ?>
        </div>
        <?php 
                // echo $input;
                ?>
        <div id="mywords">
            <?php
                foreach ($pairs as $pair) {
                    $pair_contents = explode(' ', $pair);
                    $substring = $pair_contents[0];
                    $fullstring = $pair_contents[1];
                    $splitted_fullstring = explode($substring, $fullstring);
                    $before = $splitted_fullstring[0];
                    $after = $splitted_fullstring[1];
                    echo "<span class='restoftheword'>$before</span><span id='learningwordpart'>$substring</span><span class='restoftheword'>$after</span><span class='space'></span>";
                }
                unlink('fromruby.txt');
            ?>
        </div>
        <form method="GET">
            <input type="text" name="keyword" value="Your word!" id="keyword">
            <input type="submit" id="go" value="GO!">
        </form>









        <script type="text/javascript">
        $(document).ready(function(){  
            if($("#keyword").val() === "Your word!") {
                $("#keyword").addClass("gray");
            } else {
                $("#keyword").removeClass("gray");
            }
            
            $('#button').click(function(){
                $(this).toggleClass('on');  
                if($(this).hasClass('on')) {
                    $('.restoftheword').show('slow','linear',{});
                    $('.space').show('slow','linear',{});
                } else {
                    $('.restoftheword').hide('slow','linear',{});
                    $('.space').hide('slow','linear',{});
                }
            });  
            $('#keyword').click(function() {
                if($(this).val() === "Your word!") {
                    $(this).val("");
                    $(this).removeClass("gray");
                }
            });
        }); 

        // function hi(){
        //     $('#hiddenone').load('test.txt');
        //     var fullfullstring = $('#hiddenone').html();
        //     var pairs = fullfullstring.split("|");
        //     var finaloutput = "";
        //     for(var i=0; i<pairs.length; i++) {
        //         var pair_contents = pairs[i].split(" ");
        //         var substring = pair_contents[0];
        //         var fullstring = pair_contents[1];
        //         var splitted_fullstring = fullstring.split(substring);

        //         var before = splitted_fullstring[0];
        //         var after = splitted_fullstring[1];

        //         finaloutput = finaloutput + "<span class='restoftheword'>" + before + "</span><span id='learningwordpart'>" + substring + "</span><span class='restoftheword'>" + after + "</span><span class='space'></span>";
        //     }
        //     $('#mywords').html(finaloutput);
        // }
        // setInterval(hi, 2000);
        // hi();
        </script>
    </body>
</html>