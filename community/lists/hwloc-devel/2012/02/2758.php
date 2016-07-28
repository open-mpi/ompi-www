<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 08:20:27 2012" -->
<!-- isoreceived="20120201132027" -->
<!-- sent="Wed, 01 Feb 2012 14:20:22 +0100" -->
<!-- isosent="20120201132022" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7" -->
<!-- id="4F293C16.5040906_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F28A82D.9000102_at_unimelb.edu.au" -->
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
<strong>Date:</strong> 2012-02-01 08:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2759.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2757.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2770.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2770.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 01/02/2012 03:49, Christopher Samuel a &#233;crit :
<br>
<span class="quotelev1">&gt; With XLC and 1.3.1 and 1.4 I get plenty of warnings (compile logs for
</span><br>
<span class="quotelev1">&gt; both attached) whilst compiling and then 4 failures in make check
</span><br>
<span class="quotelev1">&gt; (accompanied with segmentation faults):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; samuel_at_tambo:~/HWLOC/hwloc-1.3.1&gt; grep -B1 FAIL: log
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  5267 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_bind
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  5285 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_get_last_cpu_location
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  5335 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_is_thissystem
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1:  5481 Segmentation fault      ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: glibc-sched
</span><br>
<p>All these tests involved binding, which is likely broken (see below).
<br>
<p><p>&quot;/vlsci/VLSCI/samuel/HWLOC/hwloc-1.3.1/include/hwloc.h&quot;, line 1203.28:
<br>
1506-1385 (W) The attribute &quot;pure&quot; is not a valid type attribute.
<br>
&nbsp;&nbsp;CC     traversal.lo
<br>
<p>Attribute pure is before the function name, I'll move it after, XLC
<br>
doesn't seems to warn in this case.
<br>
<p><p>&quot;distances.c&quot;, line 62.42: 1506-404 (W) restrict can only qualify a
<br>
pointer type.
<br>
&quot;distances.c&quot;, line 84.50: 1506-404 (W) restrict can only qualify a
<br>
pointer type.
<br>
&quot;distances.c&quot;, line 226.40: 1506-404 (W) restrict can only qualify a
<br>
pointer type.
<br>
<p>XLC may be wrong here, topology_t is typedef'ed to a pointer...
<br>
<p><p>&quot;topology-linux.c&quot;, line 303.33: 1506-280 (W) Function argument
<br>
assignment between types &quot;unsigned int&quot; and &quot;struct {...}*&quot; is not allowed.
<br>
&quot;topology-linux.c&quot;, line 303.27: 1506-098 (E) Missing argument(s).
<br>
&quot;topology-linux.c&quot;, line 391.32: 1506-280 (W) Function argument
<br>
assignment between types &quot;unsigned int&quot; and &quot;struct {...}*&quot; is not allowed.
<br>
&quot;topology-linux.c&quot;, line 391.26: 1506-098 (E) Missing argument(s).
<br>
&quot;topology-linux.c&quot;, line 715.40: 1506-280 (W) Function argument
<br>
assignment between types &quot;unsigned int&quot; and &quot;struct {...}*&quot; is not allowed.
<br>
&quot;topology-linux.c&quot;, line 715.34: 1506-098 (E) Missing argument(s).
<br>
&quot;topology-linux.c&quot;, line 807.40: 1506-280 (W) Function argument
<br>
assignment between types &quot;unsigned int&quot; and &quot;struct {...}*&quot; is not allowed.
<br>
&quot;topology-linux.c&quot;, line 807.34: 1506-098 (E) Missing argument(s).
<br>
<p>This looks very bad. It means something screwed the already very complex
<br>
sched_setaffinity detection code.
<br>
Does XLC redefine its own sched_setaffinity functions? Can you find the
<br>
relevant header file and send it?
<br>
PGI had similar problems at some point. That's very annoying.
<br>
This explains why binding tests broke.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2759.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.4 assertion failures on Linux/POWER7"</a>
<li><strong>Previous message:</strong> <a href="2757.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2738.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2770.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2770.php">Christopher Samuel: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
<li><strong>Reply:</strong> <a href="2771.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.3.1 assertion failures on Linux/POWER7"</a>
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
