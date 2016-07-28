<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1940";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 12:59:36 2010" -->
<!-- isoreceived="20100406165936" -->
<!-- sent="Tue, 6 Apr 2010 18:59:29 +0200" -->
<!-- isosent="20100406165929" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1940" -->
<!-- id="s2h36ca99e91004060959w3aea8a30ua4bf1ac4c3b84783_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201004061536.o36FaHX7013051_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1940<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 12:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0891.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Previous message:</strong> <a href="0889.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 6, 2010 at 17:36,  &lt;bgoglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: bgoglin
</span><br>
<span class="quotelev1">&gt; Date: 2010-04-06 11:36:17 EDT (Tue, 06 Apr 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1940
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1940">https://svn.open-mpi.org/trac/hwloc/changeset/1940</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Stop using HWLOC_NBMAXCPUS in Linux hwloc_linux_set/get_tid_cpubind
</span><br>
<span class="quotelev1">&gt; Text files modified:
</span><br>
<span class="quotelev1">&gt; &#194;&#160; branches/dyncpusets/src/topology-linux.c | &#194;&#160; &#194;&#160;31 ++++++++++++++++++++++---------
</span><br>
<span class="quotelev1">&gt; &#194;&#160; 1 files changed, 22 insertions(+), 9 deletions(-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: branches/dyncpusets/src/topology-linux.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- branches/dyncpusets/src/topology-linux.c &#194;&#160; &#194;&#160;(original)
</span><br>
<span class="quotelev1">&gt; +++ branches/dyncpusets/src/topology-linux.c &#194;&#160; &#194;&#160;2010-04-06 11:36:17 EDT (Tue, 06 Apr 2010)
</span><br>
<span class="quotelev1">&gt; @@ -192,8 +192,6 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160;#endif
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#define HWLOC_NBMAXCPUS 1024 /* FIXME: drop */
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev1">&gt; &#194;&#160;int
</span><br>
<span class="quotelev1">&gt; &#194;&#160;hwloc_linux_set_tid_cpubind(hwloc_topology_t topology __hwloc_attribute_unused, pid_t tid, hwloc_const_cpuset_t hwloc_set)
</span><br>
<span class="quotelev1">&gt; &#194;&#160;{
</span><br>
<span class="quotelev1">&gt; @@ -205,13 +203,21 @@
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; /* The resulting binding is always strict */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#if defined(HWLOC_HAVE_CPU_SET_S) &amp;&amp; !defined(HWLOC_HAVE_OLD_SCHED_SETAFFINITY) &amp;&amp; CPU_SETSIZE &lt; HWLOC_NBMAXCPUS
</span><br>
<span class="quotelev1">&gt; +#if defined(HWLOC_HAVE_CPU_SET_S) &amp;&amp; !defined(HWLOC_HAVE_OLD_SCHED_SETAFFINITY)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; cpu_set_t *plinux_set;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; unsigned cpu;
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;size_t setsize = CPU_ALLOC_SIZE(HWLOC_NBMAXCPUS);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;int last;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;size_t setsize;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; int err;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;plinux_set = CPU_ALLOC(HWLOC_NBMAXCPUS);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;last = hwloc_cpuset_last(hwloc_set);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;if (last == -1) {
</span><br>
<span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;errno = -EINVAL;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;return -1;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;}
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;setsize = CPU_ALLOC_SIZE(last+1);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;plinux_set = CPU_ALLOC(last+1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; CPU_ZERO_S(setsize, plinux_set);
</span><br>
<span class="quotelev1">&gt; &#194;&#160; hwloc_cpuset_foreach_begin(cpu, hwloc_set)
</span><br>
<span class="quotelev1">&gt; @@ -253,12 +259,17 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160; int err;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; /* TODO Kerrighed */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -#if defined(HWLOC_HAVE_CPU_SET_S) &amp;&amp; !defined(HWLOC_HAVE_OLD_SCHED_SETAFFINITY) &amp;&amp; CPU_SETSIZE &lt; HWLOC_NBMAXCPUS
</span><br>
<span class="quotelev1">&gt; +#if defined(HWLOC_HAVE_CPU_SET_S) &amp;&amp; !defined(HWLOC_HAVE_OLD_SCHED_SETAFFINITY)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; cpu_set_t *plinux_set;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; unsigned cpu;
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;size_t setsize = CPU_ALLOC_SIZE(HWLOC_NBMAXCPUS);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;int last;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;size_t setsize;
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;last = hwloc_cpuset_last(topology-&gt;levels[0][0]-&gt;complete_cpuset);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;assert(last != -1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;plinux_set = CPU_ALLOC(HWLOC_NBMAXCPUS);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;setsize = CPU_ALLOC_SIZE(last+1);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;plinux_set = CPU_ALLOC(last+1);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; err = sched_getaffinity(tid, setsize, plinux_set);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; @@ -268,7 +279,7 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; hwloc_cpuset_zero(hwloc_set);
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;for(cpu=0; cpu&lt;HWLOC_NBMAXCPUS; cpu++)
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;for(cpu=0; cpu&lt;last; cpu++)
</span><br>
<p>Shouldn't this be &quot;cpu&lt;=last&quot;?
<br>
<p>Bert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0891.php">Samuel Thibault: "Re: [hwloc-devel] Embedding: is it worth it?"</a>
<li><strong>Previous message:</strong> <a href="0889.php">Jeff Squyres: "Re: [hwloc-devel] rc1?"</a>
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
