<?
$subject_val = "Re: [hwloc-users] MPI + threads parallelization";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  1 05:02:46 2010" -->
<!-- isoreceived="20101001090246" -->
<!-- sent="Fri, 01 Oct 2010 11:02:42 +0200" -->
<!-- isosent="20101001090242" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] MPI + threads parallelization" -->
<!-- id="4CA5A3B2.1010903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTikL8vGO79trgYADuVnN+ppRU6uP6__DQaiai=yg_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-01 05:02:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0234.php">Samuel Thibault: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Previous message:</strong> <a href="0232.php">Ondrej Marsalek: "[hwloc-users] MPI + threads parallelization"</a>
<li><strong>In reply to:</strong> <a href="0232.php">Ondrej Marsalek: "[hwloc-users] MPI + threads parallelization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Reply:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/10/2010 10:56, Ondrej Marsalek a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a question regarding parallelization using both MPI and threads
</span><br>
<span class="quotelev1">&gt; in a NUMA setup. I would like to be able to use one MPI process per
</span><br>
<span class="quotelev1">&gt; socket or NUMA node and use threads within each MPI process to use all
</span><br>
<span class="quotelev1">&gt; the cores. Can I use hwloc to put and keep all of these in the right
</span><br>
<span class="quotelev1">&gt; places?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ondrej
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>It mostly depends on the MPI implementation. Several of them are
<br>
switching to hwloc for binding, so you will likely have a mpiexec option
<br>
to do so.
<br>
<p>Otherwise, assuming mpiexec does not bind anything and you have 4 numa
<br>
nodes, you can do it manually with something like:
<br>
&nbsp;&nbsp;mpiexec --np 1 hwloc-bind node:0 myprog : -np 1 hwloc-bind node:1
<br>
myrog : -np 2 hwloc-bind node:2 myprog : -np 3 hwloc-bind node:3 myprog
<br>
which runs 4 instances of &quot;myprog&quot; and bind them on different numa nodes.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0234.php">Samuel Thibault: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Previous message:</strong> <a href="0232.php">Ondrej Marsalek: "[hwloc-users] MPI + threads parallelization"</a>
<li><strong>In reply to:</strong> <a href="0232.php">Ondrej Marsalek: "[hwloc-users] MPI + threads parallelization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>Reply:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
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
