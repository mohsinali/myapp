<?php ob_start(); session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <title>ECP must enforce all election laws, says SC</title>
        <link rel="stylesheet" href="css/jquery.mobile-1.2.0.min.css" />
        <script src="js/jquery-1.8.2.min.js">
        </script>
        <script src="js/jquery.mobile-1.2.0.min.js">
        </script>
        <style>
            .content {font-size: 12px;}
            p.summary {font-family:Arial; font-size:14px; font-weight:bold; color:#000;}
            h3 {margin-bottom: 0px;}
        </style>
    </head>
    <body>
        <!-- Home -->
        <div data-role="page" id="page1">
            <div data-theme="b" data-role="header" data-position="fixed">
                <a href="" onclick="window.location.replace('home.php');" data-role="button">Back</a>
                <h1>ECP must enforce all election laws, says SC</h1>                
            </div>
            <div data-role="content" class="content">
                <h3>ECP must enforce all election laws, says SC</h3>
                Wednesday, January 9, 2013 (04:59 PST)
                <img src="images/showimg.jpg" align="right" />
                <p class="summary">ISLAMABAD: The Supreme Court (SC) on Tuesday sought a comprehensive report till January 15 from the Election Commission of Pakistan (ECP) after the implementation of its earlier judgment of June 8, 2012 on the election campaign expenses regulation case.</p>
                <p>A three-member bench, headed by Chief Justice Iftikhar Muhammad Chaudhry, issued the directive on a review petition filed by 
                    the Workers Party Pakistan (WPP) through its general secretary Akhtar Hussain.</p>
                
                <p>
                    The decision was authored by the chief justice on June 8 after conducting a number of hearings into a constitutional petition.
                    The CJ, in his decision, had directed that all election laws be strictly implemented by the ECP in the discharge of its 
                    constitutional mandate under Article 218(3) of the Constitution, Representation of the People Act and other laws/rules.
                </p>
                
                <p>
                    "The Election Commission is empowered to check not just illegal actions relating to the election (violating the limits set for campaign finance, etc.) or corrupt practices (bribery, etc.), but is also empowered to review all election activities, including Jalsas, Juloos, use of loudspeakers, etc. for their effects on the standards of 'fairness, justness and honesty' that elections are expected to meet," it said.
                </p>
                <p>
                    The decision held that the ECP was also empowered to take preemptive measures to ensure that the spirit of `fairness, justness and honesty' of elections was fully observed. A candidate must accountfor all the expenses immediately after the election was over, the CJ held in his verdict.
                </p>
                <p>
                    Besides, the ECP was asked to facilitate the voters, with increase in the number of polling stations throughout the country so that the polling stations were not at a distance of more than two kilometers from the place of residence of voters.
                </p>
                
                
                
            </div>
            <?php include("includes/footer.php"); ?>
                
        </div>
        <script>
            //App custom javascript            
//            window.location = "index.php";
            //App custom javascript
            var dataStore = window.sessionStorage;
//            dataStore.setItem('key','value');
            //alert(dataStore.getItem('email'));
            $("#email").html(dataStore.getItem('email'));
            
        </script>
    </body>
</html>