<?
$subject_val = "Re: [OMPI users] problem with alltoall with ppn=8";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug 16 14:28:45 2008" -->
<!-- isoreceived="20080816182845" -->
<!-- sent="Sat, 16 Aug 2008 19:28:39 +0100" -->
<!-- isosent="20080816182839" -->
<!-- name="Ashley Pittman" -->
<!-- email="apittman_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with alltoall with ppn=8" -->
<!-- id="1218911319.10852.3.camel_at_bruce.priv.wark.uk.streamline-computing.com" -->
<!-- inreplyto="604D05AF-1D51-49DC-AF5E-53DE86CBB9F9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with alltoall with ppn=8<br>
<strong>From:</strong> Ashley Pittman (<em>apittman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-16 14:28:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6366.php">Brian Dobbins: "[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Previous message:</strong> <a href="6364.php">Kozin, I \(Igor\): "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>In reply to:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6377.php">Rolf Vandevaart: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6377.php">Rolf Vandevaart: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sat, 2008-08-16 at 08:03 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; - large all to all operations are very stressful on the network, even  
</span><br>
<span class="quotelev1">&gt; if you have very low latency / high bandwidth networking such as DDR IB
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - if you only have 1 IB HCA in a machine with 8 cores, the problem  
</span><br>
<span class="quotelev1">&gt; becomes even more difficult because all 8 of your MPI processes will  
</span><br>
<span class="quotelev1">&gt; be hammering the HCA with read and write requests; it's a simple I/O  
</span><br>
<span class="quotelev1">&gt; resource contention issue
</span><br>
<p>That alone doesn't explain the sudden jump (drop) in performance
<br>
figures.
<br>
<p><span class="quotelev1">&gt; - there are several different algorithms in Open MPI for performing  
</span><br>
<span class="quotelev1">&gt; alltoall, but they were not tuned for ppn&gt;4 (honestly, they were tuned  
</span><br>
<span class="quotelev1">&gt; for ppn=1, but they still usually work &quot;well enough&quot; for ppn&lt;=4).  In  
</span><br>
<span class="quotelev1">&gt; Open MPI v1.3, we introduce the &quot;hierarch&quot; collective module, which  
</span><br>
<span class="quotelev1">&gt; should greatly help with ppn&gt;4 kinds of scenarios for collectives  
</span><br>
<span class="quotelev1">&gt; (including, at least to some degree, all to all)
</span><br>
<p>Is there a way to tell or influence which algorithm is used in the
<br>
current case?  Looking through the code I can see several but cannot see
<br>
how to tune the thresholds.
<br>
<p>Ashley.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6366.php">Brian Dobbins: "[OMPI users] Q: OpenMPI's use of /tmp and hanging apps via FS problems?"</a>
<li><strong>Previous message:</strong> <a href="6364.php">Kozin, I \(Igor\): "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>In reply to:</strong> <a href="6360.php">Jeff Squyres: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6377.php">Rolf Vandevaart: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
<li><strong>Reply:</strong> <a href="6377.php">Rolf Vandevaart: "Re: [OMPI users] problem with alltoall with ppn=8"</a>
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
