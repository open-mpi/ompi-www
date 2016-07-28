<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 13 05:08:12 2012" -->
<!-- isoreceived="20120913090812" -->
<!-- sent="Thu, 13 Sep 2012 11:08:06 +0200" -->
<!-- isosent="20120913090806" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src" -->
<!-- id="5051A276.20903_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="3E5718E4-4ED0-47CB-90E4-8340B8CCB2D7_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-13 05:08:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3281.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4837)"</a>
<li><strong>Previous message:</strong> <a href="3279.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4824)"</a>
<li><strong>In reply to:</strong> <a href="3259.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3262.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 05/09/2012 17:42, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; On Sep 5, 2012, at 11:36 AM, Samuel Thibault wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1. We do not allow &quot;./configure --enable-static --enable-shared&quot;.  Even though that's valid Automake/Libtool (i.e., it'll generate libhwloc.a *and* libhwloc.so), we don't allow it.
</span><br>
<span class="quotelev2">&gt;&gt; Well, actually for instance Debian builds once with -static, and once
</span><br>
<span class="quotelev2">&gt;&gt; with -shared, and installs both...
</span><br>
<span class="quotelev1">&gt; That scenario is fine.  It's just the &quot;build both at once&quot; scenario that isn't allowed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>So we want to forbid $enable_plugins=yes -a $enable_shared=yes -a
<br>
$enable_static=yes ?
<br>
<p>There's still one thing that I don't understand. What if you builds once
<br>
static, once shared, and install both as Samuel said above. Why don't we
<br>
have any problem there?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3281.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4837)"</a>
<li><strong>Previous message:</strong> <a href="3279.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.6a1r4824)"</a>
<li><strong>In reply to:</strong> <a href="3259.php">Jeff Squyres: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3262.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
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
