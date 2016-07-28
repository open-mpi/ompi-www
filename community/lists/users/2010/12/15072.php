<?
$subject_val = "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 10 13:37:59 2010" -->
<!-- isoreceived="20101210183759" -->
<!-- sent="Fri, 10 Dec 2010 18:37:49 +0000" -->
<!-- isosent="20101210183749" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Method for worker to determine its &amp;quot;rank&amp;quot; on a	single machine?" -->
<!-- id="3F675BF5-C748-493D-9457-81B10E6F54BC_at_pittman.co.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B3B96BC7-8A5E-401C-B78D-0223A33BF0BE_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-10 13:37:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15073.php">David Mathog: "[OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
For a much simpler approach you could also use these two environment variables, this is on my current system which is 1.5 based, YMMV of course.
<br>
<p>OMPI_COMM_WORLD_LOCAL_RANK
<br>
OMPI_COMM_WORLD_LOCAL_SIZE
<br>
<p>Actually orte seems to set both OMPI_COMM_WORLD_LOCAL_RANK and OMPI_COMM_WORLD_NODE_RANK, I can't see any difference between the two.
<br>
<p>Ashley.
<br>
<p>On 10 Dec 2010, at 18:25, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So if you wanted to get your own local rank, you would call:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; my_local_rank = orte_ess.proc_get_local_rank(ORTE_PROC_MY_NAME);
</span><br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15073.php">David Mathog: "[OMPI users] Guaranteed run rank 0 on a given machine?"</a>
<li><strong>Previous message:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
<li><strong>In reply to:</strong> <a href="15070.php">Ralph Castain: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on a	single machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15071.php">Gus Correa: "Re: [OMPI users] Method for worker to determine its &quot;rank&quot; on	a	single machine?"</a>
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
