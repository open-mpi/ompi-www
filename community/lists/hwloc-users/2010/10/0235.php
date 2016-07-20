<?
$subject_val = "Re: [hwloc-users] MPI + threads parallelization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  1 11:46:45 2010" -->
<!-- isoreceived="20101001154645" -->
<!-- sent="Fri, 1 Oct 2010 10:46:41 -0500" -->
<!-- isosent="20101001154641" -->
<!-- name="Dave Goodell" -->
<!-- email="goodell_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] MPI + threads parallelization" -->
<!-- id="71EBB6F7-8FC0-4F08-9C38-9867A7647A35_at_mcs.anl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CA5A3B2.1010903_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] MPI + threads parallelization<br>
<strong>From:</strong> Dave Goodell (<em>goodell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-01 11:46:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0236.php">Ondrej Marsalek: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Previous message:</strong> <a href="0234.php">Samuel Thibault: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>In reply to:</strong> <a href="0233.php">Brice Goglin: "Re: [hwloc-users] MPI + threads parallelization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0236.php">Ondrej Marsalek: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Reply:</strong> <a href="0236.php">Ondrej Marsalek: "Re: [hwloc-users] MPI + threads parallelization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 1, 2010, at 4:02 AM CDT, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Le 01/10/2010 10:56, Ondrej Marsalek a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi again,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a question regarding parallelization using both MPI and threads
</span><br>
<span class="quotelev2">&gt;&gt; in a NUMA setup. I would like to be able to use one MPI process per
</span><br>
<span class="quotelev2">&gt;&gt; socket or NUMA node and use threads within each MPI process to use all
</span><br>
<span class="quotelev2">&gt;&gt; the cores. Can I use hwloc to put and keep all of these in the right
</span><br>
<span class="quotelev2">&gt;&gt; places?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Ondrej
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It mostly depends on the MPI implementation. Several of them are
</span><br>
<span class="quotelev1">&gt; switching to hwloc for binding, so you will likely have a mpiexec option
</span><br>
<span class="quotelev1">&gt; to do so.
</span><br>
<p>FWIW, MPICH2 supports this when using the hydra process manager: <a href="http://wiki.mcs.anl.gov/mpich2/index.php/Using_the_Hydra_Process_Manager#Process-core_Binding">http://wiki.mcs.anl.gov/mpich2/index.php/Using_the_Hydra_Process_Manager#Process-core_Binding</a>
<br>
<p>Open MPI has similar functionality documented somewhere on their website, but I don't have the link handy.
<br>
<p>-Dave
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0236.php">Ondrej Marsalek: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Previous message:</strong> <a href="0234.php">Samuel Thibault: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>In reply to:</strong> <a href="0233.php">Brice Goglin: "Re: [hwloc-users] MPI + threads parallelization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0236.php">Ondrej Marsalek: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Reply:</strong> <a href="0236.php">Ondrej Marsalek: "Re: [hwloc-users] MPI + threads parallelization"</a>
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
