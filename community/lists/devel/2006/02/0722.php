<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  8 13:53:19 2006" -->
<!-- isoreceived="20060208185319" -->
<!-- sent="Wed, 08 Feb 2006 10:46:26 -0700" -->
<!-- isosent="20060208174626" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Modification to triggers" -->
<!-- id="7.0.0.16.2.20060208104021.02449ac8_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-08 12:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0723.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0726.php">Brian Barrett: "Re:  Modification to triggers"</a>
<li><strong>Reply:</strong> <a href="0726.php">Brian Barrett: "Re:  Modification to triggers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>As you'll see in my latest commit, I have made a slight modification 
<br>
to the standard triggers that ensures we define them for ALL of the 
<br>
process and job states. This will now allow users to subscribe to 
<br>
triggers (for example) on all processes achieving INIT, LAUNCH, and 
<br>
RUNNING states, if they want to do something when that happens.
<br>
<p>I modified the way we were defining the subscriptions (in 
<br>
orte/mca/rmgr/base/rmgr_base_stage_gate.c) to allow a caller to 
<br>
define which standard triggers they wanted to know about. This 
<br>
avoided overburdening the launch system and orterun with callbacks in 
<br>
which they have no interest.
<br>
<p>In addition, I took advantage of the change to fix something Brian 
<br>
had flagged in the orte/mca/rmgr/urm/rmgr_urm.c file where he noted 
<br>
that the wireup of stdin for io forwarding should occur at the LAUNCH 
<br>
stage (as opposed to the STG1 stage gate where it was occurring). 
<br>
Given the availability of the new triggers, I changed that to conform 
<br>
to his noted request.
<br>
<p>Brian: please check that code to ensure I did this correctly.
<br>
<p>As always, please let me know if you encounter any problems. I will 
<br>
continue to test it myself as best I can.
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0723.php">Nathan DeBardeleben: "Re:  Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0721.php">Ralph H. Castain: "Re:  Alpha 4 and job state transitions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0726.php">Brian Barrett: "Re:  Modification to triggers"</a>
<li><strong>Reply:</strong> <a href="0726.php">Brian Barrett: "Re:  Modification to triggers"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
