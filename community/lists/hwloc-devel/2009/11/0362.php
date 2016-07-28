<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 18:31:56 2009" -->
<!-- isoreceived="20091111233156" -->
<!-- sent="Thu, 12 Nov 2009 00:31:48 +0100" -->
<!-- isosent="20091111233148" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333" -->
<!-- id="4AFB4964.4010800_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20091111214437.GY4729_at_const.famille.thibault.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 18:31:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; bgoglin_at_[hidden], le Wed 11 Nov 2009 11:33:31 -0500, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; +/** \brief Bind thread given by \p pid to CPU set \p cpuset.
</span><br>
<span class="quotelev2">&gt;&gt; + *
</span><br>
<span class="quotelev2">&gt;&gt; + * \note This function now manipulates hwloc cpusets.
</span><br>
<span class="quotelev2">&gt;&gt; + */
</span><br>
<span class="quotelev2">&gt;&gt; +static __inline int
</span><br>
<span class="quotelev2">&gt;&gt; +hwloc_plpa_sched_setaffinity(hwloc_topology_t topology, hwloc_pid_t pid, hwloc_cpuset_t cpuset)
</span><br>
<span class="quotelev2">&gt;&gt; +{
</span><br>
<span class="quotelev2">&gt;&gt; +  /* FIXME: should be set_thread_cpubind with a pid */
</span><br>
<span class="quotelev2">&gt;&gt; +  return hwloc_set_proc_cpubind(topology, pid, cpuset, 0);
</span><br>
<span class="quotelev2">&gt;&gt; +}
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's one instance where the Linux interface is odd (it talks about a
</span><br>
<span class="quotelev1">&gt; pid, but it's actually a thread, and there is no way to set the affinity
</span><br>
<span class="quotelev1">&gt; mask of a whole process...) and I believe we shouldn't try to support
</span><br>
<span class="quotelev1">&gt; all the cases.  I'd suggest to bind a thread only when pid is 0.  If
</span><br>
<span class="quotelev1">&gt; pid is not zero, that means that either the application is calling the
</span><br>
<span class="quotelev1">&gt; linux-only gettid() or some other linux-only way to get the tid of a
</span><br>
<span class="quotelev1">&gt; specific thread, or it assumes that the target is a single-threaded
</span><br>
<span class="quotelev1">&gt; process and thus providing the pid of that process is enough to change
</span><br>
<span class="quotelev1">&gt; its cpu affinity.  In that case we can use hwloc_set_proc_cpubind like
</span><br>
<span class="quotelev1">&gt; already done above.  Same for getaffinity.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>The problem is that our hwloc/Linux does not implement
<br>
set_proc_cpubind() so far. That's why PLPA/hwloc reports that binding is
<br>
not supported.
<br>
<p>What about we add set_proc_cpubind() support to Linux and:
<br>
* document in hwloc.h that it may bind a single thread if the
<br>
application (wrongly) passes a tid
<br>
* document that hwloc_plpa_sched_setaffinity now works on processes
<br>
instead of pids and that application should use thread_t and
<br>
set_thread_cpubind for local threads
<br>
* maybe return -ENOSYS on Linux if STRICT is given?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Previous message:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>In reply to:</strong> <a href="0361.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
<li><strong>Reply:</strong> <a href="0363.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1333"</a>
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
