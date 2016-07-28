<?
$subject_val = "[OMPI devel] 1.2.7 hung in IMB at 16K collectives with MX";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 26 13:08:06 2008" -->
<!-- isoreceived="20081126180806" -->
<!-- sent="Wed, 26 Nov 2008 19:07:59 +0100 (CET)" -->
<!-- isosent="20081126180759" -->
<!-- name="Bogdan Costescu" -->
<!-- email="Bogdan.Costescu_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.2.7 hung in IMB at 16K collectives with MX" -->
<!-- id="Pine.LNX.4.64.0811261847320.10684_at_kenzo.iwr.uni-heidelberg.de" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] 1.2.7 hung in IMB at 16K collectives with MX<br>
<strong>From:</strong> Bogdan Costescu (<em>Bogdan.Costescu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-26 13:07:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4964.php">Jeff Squyres: "[OMPI devel] Fwd: OMPI: FYI did You notice Open MPI @ Amazon's Cloud computing?"</a>
<li><strong>Previous message:</strong> <a href="4962.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>While running the IMB 3.1 with OpenMPI 1.2.7 over MX 1.2.7, I see 
<br>
hangs in most collective operations when testing with 16K buffers when 
<br>
running on 128 nodes, one MPI rank per node, with the default 
<br>
settings:
<br>
<p>works:	PingPong, PingPing, Sendrecv, Exchange, Allreduce, Reduce,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reduce_scatter, Allgather, Bcast, Barrier
<br>
<p>hangs after 8K:	Allgatherv, Gather, Gatherv, Scatter, Scatterv,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Alltoall, Alltoallv
<br>
<p>(&quot;hangs after 8K&quot; means that the results for 8K are printed, but those 
<br>
for 16K are not - I've allowed them several hours after the 8K results 
<br>
have been printed before killing the jobs; the processes continue to 
<br>
use CPU time, but no progress seems to be made). I've only recently 
<br>
been able to run the IMB on such large number of nodes, some lower 
<br>
level issues prevented me from running them before.
<br>
<p>The IMB finishes successfully in the same conditions when run on 64 
<br>
nodes. With Allgatherv I've found that the breaking point is somewhere 
<br>
around 90 nodes: it works with 88 nodes and it hangs with 90 nodes.
<br>
<p>The above tests were performed with the default settings. When I 
<br>
specify '--mca mtl mx --mca pml cm' the IMB finishes successfully on 
<br>
128 nodes; with MPICH-MX, the IMB also finishes successfully on 128 
<br>
nodes. However, I consider it to be a big problem if the default 
<br>
OpenMPI settings lead to hangs.
<br>
<p>Is this a known (but undocumented) behaviour ? Do other sites with a 
<br>
similar setup observe these hangs ? Can someone suggest what to do to 
<br>
avoid them or at least a way to debug this ?
<br>
<p>Thanks in advance !
<br>
<p><pre>
-- 
Bogdan Costescu
IWR, University of Heidelberg, INF 368, D-69120 Heidelberg, Germany
Phone: +49 6221 54 8240, Fax: +49 6221 54 8850
E-mail: bogdan.costescu_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4964.php">Jeff Squyres: "[OMPI devel] Fwd: OMPI: FYI did You notice Open MPI @ Amazon's Cloud computing?"</a>
<li><strong>Previous message:</strong> <a href="4962.php">Peter Kjellstrom: "Re: [OMPI devel] gather-bug reminder/re-post"</a>
<!-- nextthread="start" -->
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
