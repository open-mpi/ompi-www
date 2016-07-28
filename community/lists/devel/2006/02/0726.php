<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 09:05:25 2006" -->
<!-- isoreceived="20060209140525" -->
<!-- sent="Thu, 9 Feb 2006 09:05:23 -0500" -->
<!-- isosent="20060209140523" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Modification to triggers" -->
<!-- id="5DF3AD0D-1AEE-4037-ABF5-EC2CEED4C4BB_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7.0.0.16.2.20060208104021.02449ac8_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-09 09:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Brian Barrett: "required automake version..."</a>
<li><strong>Previous message:</strong> <a href="0725.php">Gleb Natapov: "Re:  compilation problem"</a>
<li><strong>In reply to:</strong> <a href="0722.php">Ralph H. Castain: "Modification to triggers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
<li><strong>Reply:</strong> <a href="0728.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2006, at 12:46 PM, Ralph H. Castain wrote:
<br>
<p><span class="quotelev1">&gt; In addition, I took advantage of the change to fix something Brian
</span><br>
<span class="quotelev1">&gt; had flagged in the orte/mca/rmgr/urm/rmgr_urm.c file where he noted
</span><br>
<span class="quotelev1">&gt; that the wireup of stdin for io forwarding should occur at the LAUNCH
</span><br>
<span class="quotelev1">&gt; stage (as opposed to the STG1 stage gate where it was occurring).
</span><br>
<span class="quotelev1">&gt; Given the availability of the new triggers, I changed that to conform
</span><br>
<span class="quotelev1">&gt; to his noted request.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian: please check that code to ensure I did this correctly.
</span><br>
<p>I can't figure out exactly what is going on, but it looks like this  
<br>
change broke standard input forwarding.  I currently have it traced  
<br>
back (via printf debugging) to the fact that the  
<br>
orte_rmgr_urm_wireup_callback() callback never gets triggered in  
<br>
mpirun, so the wireup_stdin() function is never called and we never  
<br>
start pushing mpirun's standard input into the iof system.
<br>
<p>At that point, we fall into parts of the code with which I'm not too  
<br>
familiar, so I have to hand this one back to you ;).
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0727.php">Brian Barrett: "required automake version..."</a>
<li><strong>Previous message:</strong> <a href="0725.php">Gleb Natapov: "Re:  compilation problem"</a>
<li><strong>In reply to:</strong> <a href="0722.php">Ralph H. Castain: "Modification to triggers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0728.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
<li><strong>Reply:</strong> <a href="0728.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
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
