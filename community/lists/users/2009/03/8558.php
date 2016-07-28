<?
$subject_val = "Re: [OMPI users] Collective operations and synchronization";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 17:49:02 2009" -->
<!-- isoreceived="20090323214902" -->
<!-- sent="Mon, 23 Mar 2009 21:49:11 +0000" -->
<!-- isosent="20090323214911" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Collective operations and synchronization" -->
<!-- id="16453513eaf3eb897afa810de17b5fa8_at_pittman.co.uk" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DEAAF790-F217-46E3-907A-B1776C1B7FB0_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Collective operations and synchronization<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 17:49:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8557.php">Richard Treumann: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 23 Mar 2009, at 21:11, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Just one point to emphasize - Eugene said it, but many times people 
</span><br>
<span class="quotelev1">&gt; don't fully grasp the implication.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On an MPI_Allreduce, the algorithm requires that all processes -enter- 
</span><br>
<span class="quotelev1">&gt; the call before anyone can exit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It does -not- require that they all exit at the same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So if you want to synchronize on the -exit-, as your question 
</span><br>
<span class="quotelev1">&gt; indicated, then you must add the MPI_Barrier as you describe.
</span><br>
<p>All MPI_Barrier requires is that all processes enter the call before 
<br>
anyone can exit, I'm not sure that &quot;synchronising on exit&quot; has any 
<br>
particular meaning at all.
<br>
<p>Putting a MPI_Barrier call immediatly after a MPI_Allreduce call would 
<br>
be superfluous.
<br>
<p>Ashley,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8557.php">Richard Treumann: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Reply:</strong> <a href="8559.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
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
