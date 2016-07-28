<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  9 09:40:13 2006" -->
<!-- isoreceived="20060209144013" -->
<!-- sent="Thu, 09 Feb 2006 07:40:12 -0700" -->
<!-- isosent="20060209144012" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  Modification to triggers" -->
<!-- id="7.0.0.16.2.20060209073947.023fe8c8_at_lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5DF3AD0D-1AEE-4037-ABF5-EC2CEED4C4BB_at_open-mpi.org" -->
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
<strong>Date:</strong> 2006-02-09 09:40:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0729.php">Ralph H. Castain: "Re:  required automake version..."</a>
<li><strong>Previous message:</strong> <a href="0727.php">Brian Barrett: "required automake version..."</a>
<li><strong>In reply to:</strong> <a href="0726.php">Brian Barrett: "Re:  Modification to triggers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0730.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
<li><strong>Reply:</strong> <a href="0730.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm....yuck! I'll take a look - will set it back to what it was 
<br>
before in the interim.
<br>
<p>Thanks
<br>
Ralph
<br>
<p>At 07:05 AM 2/9/2006, you wrote:
<br>
<span class="quotelev1">&gt;On Feb 8, 2006, at 12:46 PM, Ralph H. Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; In addition, I took advantage of the change to fix something Brian
</span><br>
<span class="quotelev2">&gt; &gt; had flagged in the orte/mca/rmgr/urm/rmgr_urm.c file where he noted
</span><br>
<span class="quotelev2">&gt; &gt; that the wireup of stdin for io forwarding should occur at the LAUNCH
</span><br>
<span class="quotelev2">&gt; &gt; stage (as opposed to the STG1 stage gate where it was occurring).
</span><br>
<span class="quotelev2">&gt; &gt; Given the availability of the new triggers, I changed that to conform
</span><br>
<span class="quotelev2">&gt; &gt; to his noted request.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Brian: please check that code to ensure I did this correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I can't figure out exactly what is going on, but it looks like this
</span><br>
<span class="quotelev1">&gt;change broke standard input forwarding.  I currently have it traced
</span><br>
<span class="quotelev1">&gt;back (via printf debugging) to the fact that the
</span><br>
<span class="quotelev1">&gt;orte_rmgr_urm_wireup_callback() callback never gets triggered in
</span><br>
<span class="quotelev1">&gt;mpirun, so the wireup_stdin() function is never called and we never
</span><br>
<span class="quotelev1">&gt;start pushing mpirun's standard input into the iof system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;At that point, we fall into parts of the code with which I'm not too
</span><br>
<span class="quotelev1">&gt;familiar, so I have to hand this one back to you ;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0729.php">Ralph H. Castain: "Re:  required automake version..."</a>
<li><strong>Previous message:</strong> <a href="0727.php">Brian Barrett: "required automake version..."</a>
<li><strong>In reply to:</strong> <a href="0726.php">Brian Barrett: "Re:  Modification to triggers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0730.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
<li><strong>Reply:</strong> <a href="0730.php">Ralph H. Castain: "Re:  Modification to triggers"</a>
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
