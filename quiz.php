<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>CSUMB Online Quiz</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

    </head>
    <body>
        <div>

            <form cellpadding="10">
                <table style="width:100%;">
                    <tr>
                        <td colspan="2">
                            <!--Question 1-->
                            <label for="quest1">&nbsp;&nbsp;&nbsp;What year was CSUMB founded?&nbsp;&nbsp;&nbsp;</label>
                            <input type="text" name="question1" id="quest1" size="5" /><br />

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="question1-feedback" class="answer"></div><hr>
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <!--Question 2-->
                           <strong>&nbsp;&nbsp;&nbsp;What is the name of CSUMB's mascot?</strong> <br>
                            <label for='q2-1'></label>
                            <input type="radio" name="question2" id="q2-1"  value="A"/>&nbsp;&nbsp;&nbsp;Otto <br />
                            <label for='q2-2'></label>
                            <input type="radio" name="question2" id="q2-2"  value="B"/>&nbsp;&nbsp;&nbsp;Albus <br />
                            <label for='q2-3'></label>
                            <input type="radio" name="question2" id="q2-3"  Value="C"/>&nbsp;&nbsp;&nbsp;Monte Rey <br />

                        </td>

                        <td >
                            <div id="mascot">
                                <img src="img/mascot.png" alt="CSUMB Mascot" width="150" />
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <div id="question2-feedback" class="answer"></div><hr>
                        </td>
                    </tr>

                    <tr>
                        <!--Question 3-->
                        <td colspan="2">
                            <label for="quest3">&nbsp;&nbsp;&nbsp;Where is CSUMB Located?</label>&nbsp;&nbsp;&nbsp;
                            <input type="text" name="question3" id="quest3" size="15" /><br />

                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="question3-feedback" class="answer"></div><hr>
                        </td>
                    </tr>

                    <tr>
                        <td>
                             <!--Question 4-->
                            <strong>&nbsp;&nbsp;&nbsp;How Many Students Attend CSUMB&nbsp;&nbsp;&nbsp;</strong>
                            <select id="question4" >
                                <option value="75">Select</option>
                                <option value="75">75</option>
                                <option value="7500">7500</option>
                                <option value="75000">75000</option>
                                <option value="750000">750000</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <div id="question4-feedback" class="answer"></div><hr>
                        </td>
                    </tr>


                </table>

                <br>
                <input type="submit" value="Submit" class="btn btn-info" />

                <!--Will display the "loading" or "spinning" animated gif-->
                <div id="waiting"></div>

            </form>

            <!--Will display the quiz score-->
            <div id="scores"></div>
        </div>
    </body>

</html>    