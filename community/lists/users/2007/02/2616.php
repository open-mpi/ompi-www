<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Feb  5 19:14:46 2007" -->
<!-- isoreceived="20070206001446" -->
<!-- sent="Mon, 5 Feb 2007 16:14:36 -0800" -->
<!-- isosent="20070206001436" -->
<!-- name="Reese Faucette" -->
<!-- email="reese_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect" -->
<!-- id="086301c74983$c9be64f0$58c31fac_at_bart" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="2453e2900702051216o5c1e0a82ya9269b0f0f55b2eb_at_mail.gmail.com" -->
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
<strong>From:</strong> Reese Faucette (<em>reese_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-05 19:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2615.php">Jeff Squyres: "Re: [OMPI users] Application porting guide or hints?"</a>
<li><strong>In reply to:</strong> <a href="2610.php">Alex Tumanov: "[OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2623.php">Alex Tumanov: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Reply:</strong> <a href="2623.php">Alex Tumanov: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I'm having difficulty with running a simple hello world OpenMPI
</span><br>
<span class="quotelev1">&gt; program over Myrinet gm interconnect - please see the log at the end
</span><br>
<span class="quotelev1">&gt; of this email. The error is tripped by a call to the function
</span><br>
<span class="quotelev1">&gt; gm_global_id_to_node_id(
</span><br>
<span class="quotelev1">&gt;        gm_btl-&gt;port,
</span><br>
<span class="quotelev1">&gt;        gm_endpoint-&gt;endpoint_addr.global_id,
</span><br>
<span class="quotelev1">&gt;        &amp;gm_endpoint-&gt;endpoint_addr.node_id))
</span><br>
<span class="quotelev1">&gt; My hardware setup is identical to the one described here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2007/02/2577.php">http://www.open-mpi.org/community/lists/users/2007/02/2577.php</a>
</span><br>
<span class="quotelev1">&gt; and I'm using the latest stable release - OpenMPI 1.1.4. Has anybody
</span><br>
<span class="quotelev1">&gt; encountered this error before? Google returns nothing on it...
</span><br>
<p>What version of GM are you running?  And are you sure that gm_board_info 
<br>
shows all the nodes that are listed in your machine file?    Could you send 
<br>
a copy of your gm_board_info output , please?  A mismatch between the list 
<br>
of nodes actually configured onto the Myrinet fabric and the machine file is 
<br>
a common source of errors like this.  The mismatch could be caused by cable 
<br>
failure or other mapping issues.
<br>
<p>Why GM instead of MX, by the way?
<br>
<p>thanks!
<br>
-reese
<br>
Myricom, Inc. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2617.php">Ralph H Castain: "Re: [OMPI users] large jobs hang on startup (deadlock?)"</a>
<li><strong>Previous message:</strong> <a href="2615.php">Jeff Squyres: "Re: [OMPI users] Application porting guide or hints?"</a>
<li><strong>In reply to:</strong> <a href="2610.php">Alex Tumanov: "[OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2623.php">Alex Tumanov: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
<li><strong>Reply:</strong> <a href="2623.php">Alex Tumanov: "Re: [OMPI users] running OpenMPI jobs over Myrinet gm interconnect"</a>
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
