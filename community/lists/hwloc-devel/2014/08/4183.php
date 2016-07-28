<?
$subject_val = "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 28 08:04:57 2014" -->
<!-- isoreceived="20140828120457" -->
<!-- sent="Thu, 28 Aug 2014 14:04:55 +0200" -->
<!-- isosent="20140828120455" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] patch to execute command when using hwloc-bind --get" -->
<!-- id="20140828120455.GL3698_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-28 08:04:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4184.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Previous message:</strong> <a href="4182.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-21-gfd56b4e)"</a>
<li><strong>In reply to:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4184.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
John Donners, le Wed 13 Aug 2014 11:22:26 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt;Do you want a mode that creates a new task and displays it binding?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; indeed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Looks similar to passing &quot;hwloc-bind --get ; newtask&quot; to srun or mpirun ?
</span><br>
<span class="quotelev1">&gt; 
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
<p>I've been thinking about it, and I agree that it'd be a convenient thing
<br>
to provide.
<br>
<p>mpirun -n 2 hwloc-bind --get newtask
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4184.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<li><strong>Previous message:</strong> <a href="4182.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9-21-gfd56b4e)"</a>
<li><strong>In reply to:</strong> <a href="4172.php">John Donners: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4184.php">Brice Goglin: "Re: [hwloc-devel] patch to execute command when using hwloc-bind --get"</a>
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
