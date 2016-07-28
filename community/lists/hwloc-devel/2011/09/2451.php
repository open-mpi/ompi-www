<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 23 16:06:52 2011" -->
<!-- isoreceived="20110923200652" -->
<!-- sent="Fri, 23 Sep 2011 22:06:45 +0200" -->
<!-- isosent="20110923200645" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845" -->
<!-- id="4E7CE6D5.9070004_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="133206DF-E4FA-4A2E-A941-CEE6809FA9EA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-23 16:06:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2452.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2452.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2452.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 23/09/2011 21:57, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 23, 2011, at 3:50 PM, Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; AFAIK configure will not generate Makefile[.in] unless the dir is in
</span><br>
<span class="quotelev2">&gt;&gt; SUBDIRS. Otherwise we would have Makefile[.in] generated in
</span><br>
<span class="quotelev2">&gt;&gt; tests/embedded (I don't have any).
</span><br>
<span class="quotelev1">&gt; Sure it will.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you have foo/bar/Makefile listed in AC_CONFIG_FILES, it'll be generated.
</span><br>
<p>Woot, will try it, thanks.
<br>
<p><span class="quotelev1">&gt; tests/embedded/Makefile.am does not generate Makefile.am because it's not listed in an AC_CONFIG_FILES anywhere (e.g., hwloc_internal.m4).  It's a separate subdirectory with its own autogen/etc.
</span><br>
<p>Then I don't remember why we didn't use DIST_SUBDIRS=embedded. I think
<br>
we talked about it but...
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2452.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Previous message:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>In reply to:</strong> <a href="2450.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2452.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
<li><strong>Reply:</strong> <a href="2452.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r3845"</a>
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
