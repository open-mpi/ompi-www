<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 22 07:21:03 2010" -->
<!-- isoreceived="20100322112103" -->
<!-- sent="Mon, 22 Mar 2010 12:20:58 +0100" -->
<!-- isosent="20100322112058" -->
<!-- name="Bert Wesarg" -->
<!-- email="bert.wesarg_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840" -->
<!-- id="36ca99e91003220420u276ece0cna0e0022c35e108c_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="201003221020.o2MAKWC2020696_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840<br>
<strong>From:</strong> Bert Wesarg (<em>bert.wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-22 07:20:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0783.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<li><strong>Previous message:</strong> <a href="0781.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0783.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<li><strong>Reply:</strong> <a href="0783.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Mar 22, 2010 at 11:20,  &lt;sthibaul_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-03-22 06:20:31 EDT (Mon, 22 Mar 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 1840
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/1840">https://svn.open-mpi.org/trac/hwloc/changeset/1840</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modified: trunk/src/topology-aix.c
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/src/topology-aix.c &#194;&#160; &#194;&#160;(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/src/topology-aix.c &#194;&#160; &#194;&#160;2010-03-22 06:20:31 EDT (Mon, 22 Mar 2010)
</span><br>
<span class="quotelev1">&gt; @@ -73,28 +73,29 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160; return res;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static hwloc_cpuset_t
</span><br>
<span class="quotelev1">&gt; -hwloc_aix_get_sth_cpubind(hwloc_topology_t topology, rstype_t what, rsid_t who, int policy __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; +static int
</span><br>
<span class="quotelev1">&gt; +hwloc_aix_get_sth_cpubind(hwloc_topology_t topology, rstype_t what, rsid_t who, hwloc_cpuset_t hwloc_set, int policy __hwloc_attribute_unused)
</span><br>
<span class="quotelev1">&gt; &#194;&#160;{
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;hwloc_cpuset_t hwloc_set = NULL;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; rsethandle_t rset;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; unsigned cpu, maxcpus;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;int res = -1;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; rset = rs_alloc(RS_EMPTY);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; if (ra_getrset(what, who, 0, rset) == -1)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; goto out;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;hwloc_set = hwloc_cpuset_alloc();
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;hwloc_cpuset_zero(hwloc_set);
</span><br>
<span class="quotelev1">&gt; &#194;&#160; maxcpus = rs_getinfo(rset, R_MAXPROCS, 0);
</span><br>
<span class="quotelev1">&gt; &#194;&#160; for (cpu = 0; cpu &lt; maxcpus; cpu++)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; if (rs_op(RS_TESTRESOURCE, rset, NULL, R_PROCS, cpu) == 1)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; hwloc_cpuset_set(hwloc_set, cpu);
</span><br>
<span class="quotelev1">&gt; &#194;&#160; hwloc_cpuset_andset(hwloc_set, hwloc_topology_get_complete_cpuset(topology));
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;res = 0;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;out:
</span><br>
<span class="quotelev1">&gt; &#194;&#160; rs_free(rset);
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;return hwloc_set;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;return res;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;static int
</span><br>
<span class="quotelev1">&gt; @@ -104,11 +105,11 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160; return hwloc_aix_set_sth_cpubind(topology, R_PROCESS, who, hwloc_set, policy);
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static hwloc_cpuset_t
</span><br>
<span class="quotelev1">&gt; -hwloc_aix_get_thisproc_cpubind(hwloc_topology_t topology, int policy)
</span><br>
<span class="quotelev1">&gt; +static int
</span><br>
<span class="quotelev1">&gt; +hwloc_aix_get_thisproc_cpubind(hwloc_topology_t topology, hwloc_cpuset_t hwloc_set, int policy)
</span><br>
<span class="quotelev1">&gt; &#194;&#160;{
</span><br>
<span class="quotelev1">&gt; &#194;&#160; rsid_t who = { .at_pid = getpid() };
</span><br>
<p>This one came to my intention while looking over the commit, but
<br>
shouldn't this be topology-&gt;pid as of r1837?
<br>
<p>Bert
<br>
<p><span class="quotelev1">&gt; - &#194;&#160;return hwloc_aix_get_sth_cpubind(topology, R_PROCESS, who, policy);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;return hwloc_aix_get_sth_cpubind(topology, R_PROCESS, who, hwloc_set, policy);
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;static int
</span><br>
<span class="quotelev1">&gt; @@ -118,11 +119,11 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160; return hwloc_aix_set_sth_cpubind(topology, R_THREAD, who, hwloc_set, policy);
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static hwloc_cpuset_t
</span><br>
<span class="quotelev1">&gt; -hwloc_aix_get_thisthread_cpubind(hwloc_topology_t topology, int policy)
</span><br>
<span class="quotelev1">&gt; +static int
</span><br>
<span class="quotelev1">&gt; +hwloc_aix_get_thisthread_cpubind(hwloc_topology_t topology, hwloc_cpuset_t hwloc_set, int policy)
</span><br>
<span class="quotelev1">&gt; &#194;&#160;{
</span><br>
<span class="quotelev1">&gt; &#194;&#160; rsid_t who = { .at_tid = thread_self() };
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;return hwloc_aix_get_sth_cpubind(topology, R_THREAD, who, policy);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;return hwloc_aix_get_sth_cpubind(topology, R_THREAD, who, hwloc_set, policy);
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;static int
</span><br>
<span class="quotelev1">&gt; @@ -132,11 +133,11 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160; return hwloc_aix_set_sth_cpubind(topology, R_PROCESS, who, hwloc_set, policy);
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static hwloc_cpuset_t
</span><br>
<span class="quotelev1">&gt; -hwloc_aix_get_proc_cpubind(hwloc_topology_t topology, hwloc_pid_t pid, int policy)
</span><br>
<span class="quotelev1">&gt; +static int
</span><br>
<span class="quotelev1">&gt; +hwloc_aix_get_proc_cpubind(hwloc_topology_t topology, hwloc_pid_t pid, hwloc_cpuset_t hwloc_set, int policy)
</span><br>
<span class="quotelev1">&gt; &#194;&#160;{
</span><br>
<span class="quotelev1">&gt; &#194;&#160; rsid_t who = { .at_pid = pid };
</span><br>
<span class="quotelev1">&gt; - &#194;&#160;return hwloc_aix_get_sth_cpubind(topology, R_PROCESS, who, policy);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160;return hwloc_aix_get_sth_cpubind(topology, R_PROCESS, who, hwloc_set, policy);
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;static int
</span><br>
<span class="quotelev1">&gt; @@ -152,16 +153,16 @@
</span><br>
<span class="quotelev1">&gt; &#194;&#160; }
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -static hwloc_cpuset_t
</span><br>
<span class="quotelev1">&gt; -hwloc_aix_get_thread_cpubind(hwloc_topology_t topology, hwloc_thread_t pthread, int policy)
</span><br>
<span class="quotelev1">&gt; +static int
</span><br>
<span class="quotelev1">&gt; +hwloc_aix_get_thread_cpubind(hwloc_topology_t topology, hwloc_thread_t pthread, hwloc_cpuset_t hwloc_set, int policy)
</span><br>
<span class="quotelev1">&gt; &#194;&#160;{
</span><br>
<span class="quotelev1">&gt; &#194;&#160; struct __pthrdsinfo info;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; int size;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; if (pthread_getthrds_np(&amp;pthread, PTHRDSINFO_QUERY_TID, &amp;info, sizeof(info), NULL, &amp;size))
</span><br>
<span class="quotelev1">&gt; - &#194;&#160; &#194;&#160;return NULL;
</span><br>
<span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;return -1;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; {
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; rsid_t who = { .at_tid = info.__pi_tid };
</span><br>
<span class="quotelev1">&gt; - &#194;&#160; &#194;&#160;return hwloc_aix_get_sth_cpubind(topology, R_THREAD, who, policy);
</span><br>
<span class="quotelev1">&gt; + &#194;&#160; &#194;&#160;return hwloc_aix_get_sth_cpubind(topology, R_THREAD, who, hwloc_set, policy);
</span><br>
<span class="quotelev1">&gt; &#194;&#160; }
</span><br>
<span class="quotelev1">&gt; &#194;&#160;}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0783.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<li><strong>Previous message:</strong> <a href="0781.php">Samuel Thibault: "Re: [hwloc-devel] Change bind API."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0783.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
<li><strong>Reply:</strong> <a href="0783.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1840"</a>
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
