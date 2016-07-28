<?
$subject_val = "[hwloc-users] FW:  hwloc tutorial material";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 10:04:42 2013" -->
<!-- isoreceived="20130122150442" -->
<!-- sent="Tue, 22 Jan 2013 08:03:19 -0700" -->
<!-- isosent="20130122150319" -->
<!-- name="Kenneth A. Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="[hwloc-users] FW:  hwloc tutorial material" -->
<!-- id="00ab01cdf8b1$9d7da750$d878f5f0$_at_wattsys.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] FW:  hwloc tutorial material<br>
<strong>From:</strong> Kenneth A. Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 10:03:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0833.php">Stefan Eilemann: "[hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0831.php">Erik Schnetter: "Re: [hwloc-users] hwloc tutorial material"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Resent to the group.
<br>
<p>-----Original Message-----
<br>
From: Kenneth A. Lloyd [mailto:kenneth.lloyd_at_[hidden]] 
<br>
Sent: Tuesday, January 22, 2013 6:05 AM
<br>
To: 'Brice Goglin'
<br>
Subject: RE: [hwloc-users] hwloc tutorial material
<br>
<p>Here's the primary issue (at least my primary issue):
<br>
<p>There is a structure to computational problem spaces - on a continuum from
<br>
regular to amorphous.  Predicated on the fact that there is the size and
<br>
structure of data, and there is a size and structure to the program
<br>
execution graph (a network graph, that is not always the same, conditioned
<br>
by the data).  Given these conditions, how does one look at the compute
<br>
capability of an existing cluster, and configure the compute fabric (shmem
<br>
distribution, and associated affinities across various devices) to
<br>
effectively and efficiently address the problem?  Our current solution tends
<br>
toward: The programmer hard-codes the solution or the user uses heuristics
<br>
to make those determinations.  
<br>
<p>We have cast this as a CUDA problem, but it is more universal than that with
<br>
other MPP languages (as you mentioned), Xeon Phi, other GPUs, and FPGAs.  In
<br>
a heterogeneous cluster, the asymmetries may complicate the solution (as may
<br>
nodes being down, checkpoint / restart schedules).  Of course it is
<br>
incumbent for the hardware to reflect information about its capability
<br>
(beyond the scope of hwloc).
<br>
<p>Sure, we can poll the nodes and use cudaGetDeviceProperties to build up
<br>
potential graphs (put them in a XML-DOM or other data structure) - but even
<br>
there, we generally (still) have to use associated lookup tables (IMO, a
<br>
cheesy option in this day and age, but I digress).
<br>
<p>I think I understand the general direction for HPC computation using OpenMPI
<br>
w/ hwloc.  Perhaps a more flexible MPI using MPI_Dist_Graph (missing at
<br>
present) is warranted?
<br>
<p>I'll get off my stump now.
<br>
<p>-----Original Message-----
<br>
From: Brice Goglin [mailto:Brice.Goglin_at_[hidden]]
<br>
Sent: Tuesday, January 22, 2013 5:15 AM
<br>
To: Kenneth A. Lloyd
<br>
Cc: Hardware locality user list
<br>
Subject: Re: [hwloc-users] hwloc tutorial material
<br>
<p>Le 22/01/2013 10:27, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Kenneth A. Lloyd, le Mon 21 Jan 2013 22:46:37 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for making this tutorial available.  Using hwloc 1.7, how far 
</span><br>
<span class="quotelev2">&gt;&gt; down into, say, NVIDIA cards can the architecture be reflected?
</span><br>
<span class="quotelev2">&gt;&gt; Global memory size? SMX cores? None of the above?
</span><br>
<span class="quotelev1">&gt; None of the above for now.  Both are available in the cuda svn branch, 
</span><br>
<span class="quotelev1">&gt; however.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Now the question to Kenneth is &quot;what do YOU need?&quot;
<br>
<p>I didn't merge the GPU internals into the trunk yet because I'd like to see
<br>
if that matches what we would do with OpenCL and other accelerators such as
<br>
the Xeon Phi.
<br>
<p>One thing is keep in mind is that most hwloc/GPU users will use hwloc to get
<br>
locality information but they will also still use CUDA to use the GPU. So
<br>
they will still be able to use CUDA to get in-depth GPU information anyway.
<br>
Then the question is how much CUDA info do we want to duplicate in hwloc.
<br>
hwloc could have the basic/uniform GPU information and let users rely on
<br>
CUDA for everything CUDA-specific for instance. Right now, the basic/uniform
<br>
part is almost empty (just contain the GPU model name or so).
<br>
<p>Also the CUDA branch creates hwloc objects inside the GPU to describe the
<br>
memory/cores/caches/... Would you use these objects in your application ? or
<br>
would you rather just have a basic GPU attribute structure containing the
<br>
number of SMX, the memory size, ... One problem with this is that it may be
<br>
hard to define a structure that works for all GPUs, even only the NVIDIA
<br>
ones. We may need an union of structs...
<br>
<p>I am talking about &quot;your application&quot; above because having lstopo draw very
<br>
nice GPU internals doesn't mean the corresponding hwloc objects are useful
<br>
to real application.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0833.php">Stefan Eilemann: "[hwloc-users] OpenGL GPU detection code"</a>
<li><strong>Previous message:</strong> <a href="0831.php">Erik Schnetter: "Re: [hwloc-users] hwloc tutorial material"</a>
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
