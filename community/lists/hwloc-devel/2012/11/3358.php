<?
$subject_val = "Re: [hwloc-devel] Cgroup resource limits";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov  2 18:05:15 2012" -->
<!-- isoreceived="20121102220515" -->
<!-- sent="Fri, 2 Nov 2012 15:05:08 -0700" -->
<!-- isosent="20121102220508" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Cgroup resource limits" -->
<!-- id="FB3EF70F-1BC4-4B1C-A08E-0EAD4252910E_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="509438AD.4010307_at_inria.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-02 18:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3359.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3357.php">Rayson Ho: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3362.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3362.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3366.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3371.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice
<br>
<p>I think Linux cgroups makes the most sense in terms of a mechanism for doing this. We don't already do it, but it is something our customers want to see in the platform - so we have to provide it.
<br>
<p>The basic use-case is for an application to specify a max memory requirement, thus allowing us to subdivide the node when allocating resources. In that case, we need to ensure that the application remains within that memory limit so we don't start swapping. This is a typical &quot;big data&quot; requirement, and the apps know how to handle the situation where they run up against the limit (e.g., what to do when malloc returns NULL).
<br>
<p>System resource managers don't usually provide this capability, so we will do it at the ORTE level. We already use hwloc there for resource discovery and process placement, so it seems natural to include the ability to specify limits. Since ORTE also does the process launching, it could do the final cgroup definition and pass it to Linux.
<br>
<p>We envision an API that basically is modeled after the cgroup structure. What we would want hwloc to do is the final step - we pass in the resource constraints, including bind and memory policy specs, and hwloc does the &quot;magic&quot; to tell Linux what needs to be done.
<br>
<p>Make sense?
<br>
Ralph
<br>
<p><p>On Nov 2, 2012, at 2:18 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not very familiar with these features. What system mechanism do you
</span><br>
<span class="quotelev1">&gt; currently use for this? Linux cgroups? Any concrete example of what you
</span><br>
<span class="quotelev1">&gt; would like to do?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 02/11/2012 22:12, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We (Greenplum) have a need to support resource limits (e.g., memory and cpu usage) on processes running under Open MPI's RTE. OMPI uses hwloc for processor and memory affinity, so this seems a likely place to add the required support. Jeff tells me that it doesn't yet exist in hwloc - I'm wondering if you would welcome and/or be willing to consider contributions from our engineers towards adding this capability?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Obviously, we'd need to discuss how and where to do the extension. Just wanted to first see if this is an option, or if we should do it directly in OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3359.php">Ralph Castain: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Previous message:</strong> <a href="3357.php">Rayson Ho: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>In reply to:</strong> <a href="3356.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3362.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3362.php">Brice Goglin: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3366.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
<li><strong>Reply:</strong> <a href="3371.php">Christopher Samuel: "Re: [hwloc-devel] Cgroup resource limits"</a>
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
