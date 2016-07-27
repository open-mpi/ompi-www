<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 16:44:42 2009" -->
<!-- isoreceived="20091111214442" -->
<!-- sent="Wed, 11 Nov 2009 22:44:37 +0100" -->
<!-- isosent="20091111214437" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="20091111214437.GY4729_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200911111633.nABGXVq7001677_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 16:44:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Maybe in reply to:</strong> <a href="0360.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
bgoglin_at_[hidden], le Wed 11 Nov 2009 11:33:31 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; +/** \brief Bind thread given by \p pid to CPU set \p cpuset.
</span><br>
<span class="quotelev1">&gt; + *
</span><br>
<span class="quotelev1">&gt; + * \note This function now manipulates hwloc cpusets.
</span><br>
<span class="quotelev1">&gt; + */
</span><br>
<span class="quotelev1">&gt; +static __inline int
</span><br>
<span class="quotelev1">&gt; +hwloc_plpa_sched_setaffinity(hwloc_topology_t topology, hwloc_pid_t pid, hwloc_cpuset_t cpuset)
</span><br>
<span class="quotelev1">&gt; +{
</span><br>
<span class="quotelev1">&gt; +  /* FIXME: should be set_thread_cpubind with a pid */
</span><br>
<span class="quotelev1">&gt; +  return hwloc_set_proc_cpubind(topology, pid, cpuset, 0);
</span><br>
<span class="quotelev1">&gt; +}
</span><br>
<p>That's one instance where the Linux interface is odd (it talks about a
<br>
pid, but it's actually a thread, and there is no way to set the affinity
<br>
mask of a whole process...) and I believe we shouldn't try to support
<br>
all the cases.  I'd suggest to bind a thread only when pid is 0.  If
<br>
pid is not zero, that means that either the application is calling the
<br>
linux-only gettid() or some other linux-only way to get the tid of a
<br>
specific thread, or it assumes that the target is a single-threaded
<br>
process and thus providing the pid of that process is enough to change
<br>
its cpu affinity.  In that case we can use hwloc_set_proc_cpubind like
<br>
already done above.  Same for getaffinity.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0360.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Maybe in reply to:</strong> <a href="0360.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0362.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
