<?
$subject_val = "Re: [hwloc-users] MPI + threads parallelization";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 20 08:51:25 2010" -->
<!-- isoreceived="20101020125125" -->
<!-- sent="Wed, 20 Oct 2010 14:51:20 +0200" -->
<!-- isosent="20101020125120" -->
<!-- name="Ondrej Marsalek" -->
<!-- email="ondrej.marsalek_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] MPI + threads parallelization" -->
<!-- id="AANLkTimpr7Gb3K6FAwG1wu-56F5rS1zBRAYufrcD191B_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="71EBB6F7-8FC0-4F08-9C38-9867A7647A35_at_mcs.anl.gov" -->
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
<strong>From:</strong> Ondrej Marsalek (<em>ondrej.marsalek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-20 08:51:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/11/0237.php">ryuuta: "[hwloc-users] xmlbuffer test failure"</a>
<li><strong>Previous message:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>In reply to:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0234.php">Samuel Thibault: "Re: [hwloc-users] MPI + threads parallelization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks everyone for the useful information.
<br>
<p>Ondrej
<br>
<p><p>On Fri, Oct 1, 2010 at 11:02, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It mostly depends on the MPI implementation. Several of them are
</span><br>
<span class="quotelev1">&gt; switching to hwloc for binding, so you will likely have a mpiexec option
</span><br>
<span class="quotelev1">&gt; to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Otherwise, assuming mpiexec does not bind anything and you have 4 numa
</span><br>
<span class="quotelev1">&gt; nodes, you can do it manually with something like:
</span><br>
<span class="quotelev1">&gt; &#194;&#160;mpiexec --np 1 hwloc-bind node:0 myprog : -np 1 hwloc-bind node:1
</span><br>
<span class="quotelev1">&gt; myrog : -np 2 hwloc-bind node:2 myprog : -np 3 hwloc-bind node:3 myprog
</span><br>
<span class="quotelev1">&gt; which runs 4 instances of &quot;myprog&quot; and bind them on different numa nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p>On Fri, Oct 1, 2010 at 12:14, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sure. You can for instance bind each whole MPI process to NUMA nodes and
</span><br>
<span class="quotelev1">&gt; let the system manage threads afterward, or even bind threads inside the
</span><br>
<span class="quotelev1">&gt; process. Of course, to get coherent things, you'll need to do a bit of
</span><br>
<span class="quotelev1">&gt; maths to bind according to the MPI rank number.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that lstopo --top shows the bound processes (and even threads on
</span><br>
<span class="quotelev1">&gt; Linux), which will probably useful to debug your code :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<p>On Fri, Oct 1, 2010 at 17:46, Dave Goodell &lt;goodell_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Oct 1, 2010, at 4:02 AM CDT, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It mostly depends on the MPI implementation. Several of them are
</span><br>
<span class="quotelev2">&gt;&gt; switching to hwloc for binding, so you will likely have a mpiexec option
</span><br>
<span class="quotelev2">&gt;&gt; to do so.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, MPICH2 supports this when using the hydra process manager: <a href="http://wiki.mcs.anl.gov/mpich2/index.php/Using_the_Hydra_Process_Manager#Process-core_Binding">http://wiki.mcs.anl.gov/mpich2/index.php/Using_the_Hydra_Process_Manager#Process-core_Binding</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI has similar functionality documented somewhere on their website, but I don't have the link handy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Dave
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2010/11/0237.php">ryuuta: "[hwloc-users] xmlbuffer test failure"</a>
<li><strong>Previous message:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
<li><strong>In reply to:</strong> <a href="0235.php">Dave Goodell: "Re: [hwloc-users] MPI + threads parallelization"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0234.php">Samuel Thibault: "Re: [hwloc-users] MPI + threads parallelization"</a>
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
