<?
$subject_val = "Re: [hwloc-devel] test failure";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 15:33:10 2009" -->
<!-- isoreceived="20091209203310" -->
<!-- sent="Wed, 09 Dec 2009 21:33:02 +0100" -->
<!-- isosent="20091209203302" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] test failure" -->
<!-- id="4B20097E.3050203_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2DA1B946-ED6A-4C7C-9E9C-0F43E4A8B14D_at_cisco.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 15:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-devel] test failure"</a>
<li><strong>Previous message:</strong> <a href="0498.php">Jeff Squyres: "[hwloc-devel] test failure"</a>
<li><strong>In reply to:</strong> <a href="0498.php">Jeff Squyres: "[hwloc-devel] test failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-devel] test failure"</a>
<li><strong>Reply:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-devel] test failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; While working on the embedded stuff, I noticed the following assertion failure in the SVN trunk:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; lt-hwloc_cpuset_string: hwloc_cpuset_string.c:110: main: Assertion `hwloc_cpuset_isequal(set, obj-&gt;cpuset)' failed.
</span><br>
<span class="quotelev1">&gt; /bin/sh: line 1: 10909 Aborted                 (core dumped) ${dir}$tst
</span><br>
<span class="quotelev1">&gt; FAIL: hwloc_cpuset_string
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p><p>I can't reproduce this here, on Linux x86 and x86_64.
<br>
<p>Could you do something like char *foo = hwloc_cpuset_asprintf(set),
<br>
*foo2 = hwloc_cpuset_asprintf(obj-&gt;cpuset) and printf(&quot;%s != %s\n&quot;, foo,
<br>
foo2); ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-devel] test failure"</a>
<li><strong>Previous message:</strong> <a href="0498.php">Jeff Squyres: "[hwloc-devel] test failure"</a>
<li><strong>In reply to:</strong> <a href="0498.php">Jeff Squyres: "[hwloc-devel] test failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-devel] test failure"</a>
<li><strong>Reply:</strong> <a href="0500.php">Jeff Squyres: "Re: [hwloc-devel] test failure"</a>
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
