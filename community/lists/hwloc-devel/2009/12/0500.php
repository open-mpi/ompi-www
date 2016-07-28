<?
$subject_val = "Re: [hwloc-devel] test failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 15:42:30 2009" -->
<!-- isoreceived="20091209204230" -->
<!-- sent="Wed, 9 Dec 2009 15:42:18 -0500" -->
<!-- isosent="20091209204218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] test failure" -->
<!-- id="EA2E1E28-8896-46E2-81E1-BEDDAA4F46DA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B20097E.3050203_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] test failure<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 15:42:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0501.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1456)"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Brice Goglin: "Re: [hwloc-devel] test failure"</a>
<li><strong>In reply to:</strong> <a href="0499.php">Brice Goglin: "Re: [hwloc-devel] test failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doh -- disregard -- pilot error on my part...
<br>
<p>/me slinks back into my hole...
<br>
<p><p>On Dec 9, 2009, at 3:33 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; While working on the embedded stuff, I noticed the following assertion failure in the SVN trunk:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; lt-hwloc_cpuset_string: hwloc_cpuset_string.c:110: main: Assertion `hwloc_cpuset_isequal(set, obj-&gt;cpuset)' failed.
</span><br>
<span class="quotelev2">&gt; &gt; /bin/sh: line 1: 10909 Aborted                 (core dumped) ${dir}$tst
</span><br>
<span class="quotelev2">&gt; &gt; FAIL: hwloc_cpuset_string
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can't reproduce this here, on Linux x86 and x86_64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you do something like char *foo = hwloc_cpuset_asprintf(set),
</span><br>
<span class="quotelev1">&gt; *foo2 = hwloc_cpuset_asprintf(obj-&gt;cpuset) and printf(&quot;%s != %s\n&quot;, foo,
</span><br>
<span class="quotelev1">&gt; foo2); ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0501.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.0a1r1456)"</a>
<li><strong>Previous message:</strong> <a href="0499.php">Brice Goglin: "Re: [hwloc-devel] test failure"</a>
<li><strong>In reply to:</strong> <a href="0499.php">Brice Goglin: "Re: [hwloc-devel] test failure"</a>
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
