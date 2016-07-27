<?
$subject_val = "Re: [hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Nov  3 03:53:08 2012" -->
<!-- isoreceived="20121103075308" -->
<!-- sent="Sat, 03 Nov 2012 08:53:01 +0100" -->
<!-- isosent="20121103075301" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cgroup resource limits" -->
<!-- id="5094CD5D.60401_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FB3EF70F-1BC4-4B1C-A08E-0EAD4252910E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Cgroup resource limits<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-03 03:53:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3363.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4991)"</a>
<li><strong>Previous message:</strong> <a href="3361.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.2rc1r4973)"</a>
<li><strong>In reply to:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3366.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 02/11/2012 23:05, Ralph Castain a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think Linux cgroups makes the most sense in terms of a mechanism for doing this. We don't already do it, but it is something our customers want to see in the platform - so we have to provide it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The basic use-case is for an application to specify a max memory requirement, thus allowing us to subdivide the node when allocating resources. In that case, we need to ensure that the application remains within that memory limit so we don't start swapping. This is a typical &quot;big data&quot; requirement, and the apps know how to handle the situation where they run up against the limit (e.g., what to do when malloc returns NULL).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; System resource managers don't usually provide this capability, so we will do it at the ORTE level. We already use hwloc there for resource discovery and process placement, so it seems natural to include the ability to specify limits. Since ORTE also does the process launching, it could do the final cgroup definition and pass it to Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We envision an API that basically is modeled after the cgroup structure. What we would want hwloc to do is the final step - we pass in the resource constraints, including bind and memory policy specs, and hwloc does the &quot;magic&quot; to tell Linux what needs to be done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I had a quick look at cgroups and here's my feeling:
<br>
<p>I see quite a lot of files under the &quot;memory&quot; cgroup virtual fs. If
<br>
we're going to support some of those that you need, we might get users
<br>
request to support others files and/or types of cgroups (we already
<br>
support reading from the cpuset cgroup, btw). And those files may have
<br>
different formats of inputs/outputs. That may be a endless pandora box.
<br>
<p>One easy solution would just put the minimal thing in hwloc
<br>
(setting/getting the list of CPUs, memory nodes and tasks inside a
<br>
cgroup) and let applications actually do everything else (read/write
<br>
into random files). hwloc could still retrieve the base directory to
<br>
help them but the file-specific read/write format would remain in the
<br>
application that needs it.
<br>
<p>Also do you want to add cgroup information to the topology? There are so
<br>
many files in there that it may be hard to decide which ones deserve
<br>
being added to the topology.
<br>
<p><p>Note that I couldn't use the memory cgroup yet. For some reason, it
<br>
fails to mount here. So I just looked at the cpuset cgroup and at the
<br>
memory documentation.
<br>
<p>By the way, is there some root access involved in modify cgroup? Or is
<br>
it safe to put the directory world-writable so that anybody can manage
<br>
its own cgroups?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3363.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4991)"</a>
<li><strong>Previous message:</strong> <a href="3361.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.2rc1r4973)"</a>
<li><strong>In reply to:</strong> <a href="3358.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3366.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
