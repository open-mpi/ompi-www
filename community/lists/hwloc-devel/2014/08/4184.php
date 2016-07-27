<?
$subject_val = "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 10:56:33 2014" -->
<!-- isoreceived="20140828145633" -->
<!-- sent="Thu, 28 Aug 2014 16:56:31 +0200" -->
<!-- isosent="20140828145631" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] patch to execute command when using hwloc-bind --get" -->
<!-- id="53FF431F.90404_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="53EB2E52.9000503_at_surfsara.nl" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] patch to execute command when using hwloc-bind --get<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 10:56:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4185.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-189-ge467c5f)"</a>
<li><strong>Previous message:</strong> <a href="4183.php">Samuel Thibault: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>In reply to:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/08/2014 11:22, John Donners a &#233;crit :
<br>
<span class="quotelev2">&gt;&gt; 2) you just want to check whether the upcoming binding works, so you
</span><br>
<span class="quotelev2">&gt;&gt; just do something like &quot;mpirun .... hwloc-bind --get&quot; or &quot;srun ...
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-bind --get&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do you want a mode that creates a new task and displays it binding?
</span><br>
<span class="quotelev1">&gt; indeed.
</span><br>
<span class="quotelev2">&gt;&gt; Looks similar to passing &quot;hwloc-bind --get ; newtask&quot; to srun or
</span><br>
<span class="quotelev2">&gt;&gt; mpirun ?
</span><br>
<span class="quotelev1">&gt; the syntax would then be something like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -n 2 bash -c &quot;hwloc-bind --get ; newtask&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; it's possible, but quite ugly.
</span><br>
<p>I added this to master, it will be in the upcoming v1.10 (expected in
<br>
the next weeks).
<br>
thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4185.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-189-ge467c5f)"</a>
<li><strong>Previous message:</strong> <a href="4183.php">Samuel Thibault: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>In reply to:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
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
