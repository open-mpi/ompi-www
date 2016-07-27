<?
$subject_val = "[hwloc-devel] standalone-like build inside other projects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 30 05:55:05 2010" -->
<!-- isoreceived="20100630095505" -->
<!-- sent="Wed, 30 Jun 2010 11:53:53 +0200" -->
<!-- isosent="20100630095353" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="[hwloc-devel] standalone-like build inside other projects" -->
<!-- id="4C2B1431.3090801_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] standalone-like build inside other projects<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-30 05:53:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1120.php">Jeff Squyres: "Re: [hwloc-devel] standalone-like build inside other projects"</a>
<li><strong>Previous message:</strong> <a href="1118.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1120.php">Jeff Squyres: "Re: [hwloc-devel] standalone-like build inside other projects"</a>
<li><strong>Reply:</strong> <a href="1120.php">Jeff Squyres: "Re: [hwloc-devel] standalone-like build inside other projects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found this in the mvapich commits:
<br>
(<a href="http://mail.cse.ohio-state.edu/pipermail/mvapich-commit/2010-June/001283.html">http://mail.cse.ohio-state.edu/pipermail/mvapich-commit/2010-June/001283.html</a>)
<br>
<p>No need to build the doc directory
<br>
<p>Modified: mvapich2/trunk/src/mpid/ch3/channels/mrail/src/hwloc/Makefile.am
<br>
===================================================================
<br>
--- mvapich2/trunk/src/mpid/ch3/channels/mrail/src/hwloc/Makefile.am	2010-06-29 22:01:58 UTC (rev 3997)
<br>
+++ mvapich2/trunk/src/mpid/ch3/channels/mrail/src/hwloc/Makefile.am	2010-06-29 22:02:09 UTC (rev 3998)
<br>
@@ -7,7 +7,7 @@
<br>
&nbsp;
<br>
&nbsp;SUBDIRS = src include
<br>
&nbsp;if HWLOC_BUILD_STANDALONE
<br>
-SUBDIRS += utils tests doc
<br>
+SUBDIRS += utils tests 
<br>
&nbsp;endif
<br>
<p><p>If more people are going to use hwloc in standalone-mode inside other
<br>
projects, maybe we need to talk:
<br>
* tell them to switch to the embedded mode ? if not, what do they miss
<br>
in the embedded mode ?
<br>
* look at supporting the disabling the doc/tools build when called by
<br>
AC_CONFIG_SUBDIRS ?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1120.php">Jeff Squyres: "Re: [hwloc-devel] standalone-like build inside other projects"</a>
<li><strong>Previous message:</strong> <a href="1118.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2270"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1120.php">Jeff Squyres: "Re: [hwloc-devel] standalone-like build inside other projects"</a>
<li><strong>Reply:</strong> <a href="1120.php">Jeff Squyres: "Re: [hwloc-devel] standalone-like build inside other projects"</a>
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
