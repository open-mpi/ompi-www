<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 18:15:56 2012" -->
<!-- isoreceived="20120201231556" -->
<!-- sent="Thu, 02 Feb 2012 00:15:49 +0100" -->
<!-- isosent="20120201231549" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F29C7A5.70408_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F29C6EA.90204_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 18:15:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2774.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2772.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2774.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2774.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 02/02/2012 00:12, Paul H. Hargrove a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/1/2012 5:20 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 01/02/2012 03:49, Christopher Samuel a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With XLC and 1.3.1 and 1.4 I get plenty of warnings (compile logs for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; both attached) whilst compiling and then 4 failures in make check
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (accompanied with segmentation faults):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; samuel_at_tambo:~/HWLOC/hwloc-1.3.1&gt;  grep -B1 FAIL: log
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: line 1:  5267 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: hwloc_bind
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: line 1:  5285 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: hwloc_get_last_cpu_location
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: line 1:  5335 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: hwloc_is_thissystem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /bin/sh: line 1:  5481 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FAIL: glibc-sched
</span><br>
<span class="quotelev2">&gt;&gt; All these tests involved binding, which is likely broken (see below).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;/vlsci/VLSCI/samuel/HWLOC/hwloc-1.3.1/include/hwloc.h&quot;, line 1203.28:
</span><br>
<span class="quotelev2">&gt;&gt; 1506-1385 (W) The attribute &quot;pure&quot; is not a valid type attribute.
</span><br>
<span class="quotelev2">&gt;&gt;    CC     traversal.lo
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attribute pure is before the function name, I'll move it after, XLC
</span><br>
<span class="quotelev2">&gt;&gt; doesn't seems to warn in this case.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;distances.c&quot;, line 62.42: 1506-404 (W) restrict can only qualify a
</span><br>
<span class="quotelev2">&gt;&gt; pointer type.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;distances.c&quot;, line 84.50: 1506-404 (W) restrict can only qualify a
</span><br>
<span class="quotelev2">&gt;&gt; pointer type.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;distances.c&quot;, line 226.40: 1506-404 (W) restrict can only qualify a
</span><br>
<span class="quotelev2">&gt;&gt; pointer type.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; XLC may be wrong here, topology_t is typedef'ed to a pointer...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've seen this sort of thing before where &quot;pointerness&quot; was ignored
</span><br>
<span class="quotelev1">&gt; when &quot;inside&quot; the typedef.
</span><br>
<span class="quotelev1">&gt; Since this is only a warning, and a missing &quot;restrict&quot; should not
</span><br>
<span class="quotelev1">&gt; impact correctness, I vote to ignore this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;topology-linux.c&quot;, line 303.33: 1506-280 (W) Function argument
</span><br>
<span class="quotelev2">&gt;&gt; assignment between types &quot;unsigned int&quot; and &quot;struct {...}*&quot; is not
</span><br>
<span class="quotelev2">&gt;&gt; allowed.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;topology-linux.c&quot;, line 303.27: 1506-098 (E) Missing argument(s).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;topology-linux.c&quot;, line 391.32: 1506-280 (W) Function argument
</span><br>
<span class="quotelev2">&gt;&gt; assignment between types &quot;unsigned int&quot; and &quot;struct {...}*&quot; is not
</span><br>
<span class="quotelev2">&gt;&gt; allowed.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;topology-linux.c&quot;, line 391.26: 1506-098 (E) Missing argument(s).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;topology-linux.c&quot;, line 715.40: 1506-280 (W) Function argument
</span><br>
<span class="quotelev2">&gt;&gt; assignment between types &quot;unsigned int&quot; and &quot;struct {...}*&quot; is not
</span><br>
<span class="quotelev2">&gt;&gt; allowed.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;topology-linux.c&quot;, line 715.34: 1506-098 (E) Missing argument(s).
</span><br>
<span class="quotelev2">&gt;&gt; &quot;topology-linux.c&quot;, line 807.40: 1506-280 (W) Function argument
</span><br>
<span class="quotelev2">&gt;&gt; assignment between types &quot;unsigned int&quot; and &quot;struct {...}*&quot; is not
</span><br>
<span class="quotelev2">&gt;&gt; allowed.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;topology-linux.c&quot;, line 807.34: 1506-098 (E) Missing argument(s).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks very bad. It means something screwed the already very complex
</span><br>
<span class="quotelev2">&gt;&gt; sched_setaffinity detection code.
</span><br>
<span class="quotelev2">&gt;&gt; Does XLC redefine its own sched_setaffinity functions? Can you find the
</span><br>
<span class="quotelev2">&gt;&gt; relevant header file and send it?
</span><br>
<span class="quotelev2">&gt;&gt; PGI had similar problems at some point. That's very annoying.
</span><br>
<span class="quotelev2">&gt;&gt; This explains why binding tests broke.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot find any instances within the /opt/apps/ibm tree on this
</span><br>
<span class="quotelev1">&gt; machine:
</span><br>
<span class="quotelev2">&gt;&gt; $ find /opt/apps/ibm -name \*.h|xargs grep affi
</span><br>
<span class="quotelev2">&gt;&gt; find: `/opt/apps/ibm/vac/11.1/lap/license': Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; find: `/opt/apps/ibm/essl/5.1/lap/license': Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; find: `/opt/apps/ibm/xlf/13.1/lap/license': Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/ibm/xlsmp/2.1/include/omp.h:  ibm_sched_affinity= 1000/*
</span><br>
<span class="quotelev2">&gt;&gt; AFFINITY scheduling type. This is an IBM extension. */
</span><br>
<span class="quotelev2">&gt;&gt; $ find /opt/apps/ibm -name \*.h|xargs grep cpu_set_t
</span><br>
<span class="quotelev2">&gt;&gt; find: `/opt/apps/ibm/vac/11.1/lap/license': Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; find: `/opt/apps/ibm/essl/5.1/lap/license': Permission denied
</span><br>
<span class="quotelev2">&gt;&gt; find: `/opt/apps/ibm/xlf/13.1/lap/license': Permission denied
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The generated config.h contains:
</span><br>
<span class="quotelev2">&gt;&gt; #define HWLOC_HAVE_OLD_SCHED_SETAFFINITY 1
</span><br>
<span class="quotelev2">&gt;&gt; #define HWLOC_HAVE_SCHED_SETAFFINITY 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The &quot;OLD&quot; sched_setaffinity is the 2-argument version, but
</span><br>
<span class="quotelev1">&gt; /usr/include/sched.h contains the 3-argument version:
</span><br>
<span class="quotelev2">&gt;&gt; extern int sched_setaffinity (__pid_t __pid, size_t __cpusetsize,
</span><br>
<span class="quotelev2">&gt;&gt;                               __const cpu_set_t *__cpuset) __THROW;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, it would appear that configure has wrongly set
</span><br>
<span class="quotelev1">&gt; &quot;HWLOC_HAVE_OLD_SCHED_SETAFFINITY&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Examining config.log I find
</span><br>
<span class="quotelev2">&gt;&gt; configure:9046: checking for old prototype of sched_setaffinity
</span><br>
<span class="quotelev2">&gt;&gt; configure:9064: xlc -c   conftest.c &gt;&amp;5
</span><br>
<span class="quotelev2">&gt;&gt; &quot;conftest.c&quot;, line 82.19: 1506-236 (W) Macro name _GNU_SOURCE has
</span><br>
<span class="quotelev2">&gt;&gt; been redefined.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;conftest.c&quot;, line 82.19: 1506-358 (I) &quot;_GNU_SOURCE&quot; is defined on
</span><br>
<span class="quotelev2">&gt;&gt; line 25 of conftest.c.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;conftest.c&quot;, line 89.23: 1506-280 (W) Function argument assignment
</span><br>
<span class="quotelev2">&gt;&gt; between types &quot;unsigned long&quot; and &quot;void*&quot; is not allowed.
</span><br>
<span class="quotelev2">&gt;&gt; &quot;conftest.c&quot;, line 89.19: 1506-098 (E) Missing argument(s).
</span><br>
<span class="quotelev2">&gt;&gt; configure:9064: $? = 0
</span><br>
<span class="quotelev2">&gt;&gt; configure:9068: result: yes
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is WRONG.
</span><br>
<span class="quotelev1">&gt; The compiler has reported an error: &quot;(E) Missing argument(s)&quot; and yet
</span><br>
<span class="quotelev1">&gt; exited with $? = 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking at xlc docs to see if there is some compiler flag to be set.
</span><br>
<p>Thanks for the debugging, this makes my last mail to Christopher useless
<br>
then :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2774.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2772.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>In reply to:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2774.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2774.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
