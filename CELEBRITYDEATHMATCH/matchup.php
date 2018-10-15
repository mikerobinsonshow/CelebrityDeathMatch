<?php include('functions/sessiontracking.php'); ?>
<?php include('header.php'); ?>
<?php include('functions/matchuphelper.php'); ?>
<?php include('functions/getcoinamount.php'); ?>
            <div id="matchup">
                <!-- start coding under here  -->
                <h2>MATCH UP</h2>
                 <form name='actorSelect'  method='POST' action ='stage.php'>
                <div class="chArea">
                        <div class="firstchoice">
                            <h3>1ST CHOICE</h3>
                            <table>
                                <tr>
                                    <td><?php echo " <input type='radio' name='teamOne' value='$actorIdArray[0]' checked = true /> " ?></td>
                                    <td><?php echo "$imageArray[0]"   ?></td>
                                    <td><?php echo "$nameArray[0]" ?></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="teamOne" value="$actorIdArray[1]" /></td>
                                    <td><?php echo "$imageArray[1]"   ?></td>
                                    <td><?php echo "$nameArray[1]" ?></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="teamOne" value="$actorIdArray[2]" /></td>
                                    <td><?php echo "$imageArray[2]"   ?></td>
                                    <td><?php echo "$nameArray[2]" ?></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="teamOne" value="$actorIdArray[3]" /></td>
                                    <td><?php echo "$imageArray[3]"   ?></td>
                                    <td><?php echo "$nameArray[3]" ?></td>
                                </tr>
                                <tr>
                                    <td><input type="radio" name="teamOne" value="$actorIdArray[4]" /></td>
                                    <td><?php echo "$imageArray[4]"   ?></td>
                                    <td><?php echo "$nameArray[4]" ?></td>
                                </tr>
                            </table>
                        </div>   
                        
                        <div class="secondchoice">
                            <h3>2ND CHOICE</h3>
                            <table>
                                <tr>
                                    <td><?php echo " <input type='radio' name='teamTwo' value='$actorIdArray[5]' checked =true /> " ?></td>
                                    <td><?php echo "$imageArray[5]"   ?></td>
                                    <td><?php echo "$nameArray[5]" ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo " <input type='radio' name='teamTwo' value='$actorIdArray[6]'/> " ?></td>
                                    <td><?php echo "$imageArray[6]"   ?></td>
                                    <td><?php echo "$nameArray[6]" ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo " <input type='radio' name='teamTwo' value='$actorIdArray[7]'  /> " ?></td>
                                    <td><?php echo "$imageArray[7]"   ?></td>
                                    <td><?php echo "$nameArray[7]" ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo " <input type='radio' name='teamTwo' value='$actorIdArray[8]'  /> " ?></td>
                                    <td><?php echo "$imageArray[8]"   ?></td>
                                    <td><?php echo "$nameArray[8]" ?></td>
                                </tr>
                                <tr>
                                    <td><?php echo " <input type='radio' name='teamTwo' value='$actorIdArray[9]' /> " ?></td>
                                    <td><?php echo "$imageArray[9]"   ?></td>
                                    <td><?php echo "$nameArray[9]" ?></td>
                                </tr>
                            </table>
                            
                        </div>      
                     
                </div>
                <p><input type="submit" value="Match Up" class ="bigbtn" /></p>
                </form>   

            </div>
<!-- end conding -->
<?php include('footer.php'); ?>