<?
$subject_val = "Re: [hwloc-users] hwloc tutorial material";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 07:15:20 2013" -->
<!-- isoreceived="20130122121520" -->
<!-- sent="Tue, 22 Jan 2013 13:15:12 +0100" -->
<!-- isosent="20130122121512" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc tutorial material" -->
<!-- id="50FE82D0.3010505_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20130122092729.GA6155_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc tutorial material<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 07:15:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0831.php">Erik Schnetter: "Re: [hwloc-users] hwloc tutorial material"</a>
<li><strong>Previous message:</strong> <a href="0829.php">Samuel Thibault: "Re: [hwloc-users] hwloc tutorial material"</a>
<li><strong>In reply to:</strong> <a href="0829.php">Samuel Thibault: "Re: [hwloc-users] hwloc tutorial material"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0831.php">Erik Schnetter: "Re: [hwloc-users] hwloc tutorial material"</a>
<li><strong>Reply:</strong> <a href="0831.php">Erik Schnetter: "Re: [hwloc-users] hwloc tutorial material"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 22/01/2013 10:27, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Kenneth A. Lloyd, le Mon 21 Jan 2013 22:46:37 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for making this tutorial available.  Using hwloc 1.7, how far down
</span><br>
<span class="quotelev2">&gt;&gt; into, say, NVIDIA cards can the architecture be reflected?  Global memory
</span><br>
<span class="quotelev2">&gt;&gt; size? SMX cores? None of the above?
</span><br>
<span class="quotelev1">&gt; None of the above for now.  Both are available in the cuda svn branch,
</span><br>
<span class="quotelev1">&gt; however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Now the question to Kenneth is &quot;what do YOU need?&quot;
<br>
<p>I didn't merge the GPU internals into the trunk yet because I'd like to
<br>
see if that matches what we would do with OpenCL and other accelerators
<br>
such as the Xeon Phi.
<br>
<p>One thing is keep in mind is that most hwloc/GPU users will use hwloc to
<br>
get locality information but they will also still use CUDA to use the
<br>
GPU. So they will still be able to use CUDA to get in-depth GPU
<br>
information anyway. Then the question is how much CUDA info do we want
<br>
to duplicate in hwloc. hwloc could have the basic/uniform GPU
<br>
information and let users rely on CUDA for everything CUDA-specific for
<br>
instance. Right now, the basic/uniform part is almost empty (just
<br>
contain the GPU model name or so).
<br>
<p>Also the CUDA branch creates hwloc objects inside the GPU to describe
<br>
the memory/cores/caches/... Would you use these objects in your
<br>
application ? or would you rather just have a basic GPU attribute
<br>
structure containing the number of SMX, the memory size, ... One problem
<br>
with this is that it may be hard to define a structure that works for
<br>
all GPUs, even only the NVIDIA ones. We may need an union of structs...
<br>
<p>I am talking about &quot;your application&quot; above because having lstopo draw
<br>
very nice GPU internals doesn't mean the corresponding hwloc objects are
<br>
useful to real application.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0831.php">Erik Schnetter: "Re: [hwloc-users] hwloc tutorial material"</a>
<li><strong>Previous message:</strong> <a href="0829.php">Samuel Thibault: "Re: [hwloc-users] hwloc tutorial material"</a>
<li><strong>In reply to:</strong> <a href="0829.php">Samuel Thibault: "Re: [hwloc-users] hwloc tutorial material"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0831.php">Erik Schnetter: "Re: [hwloc-users] hwloc tutorial material"</a>
<li><strong>Reply:</strong> <a href="0831.php">Erik Schnetter: "Re: [hwloc-users] hwloc tutorial material"</a>
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
