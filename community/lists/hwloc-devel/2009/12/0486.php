<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 13:20:53 2009" -->
<!-- isoreceived="20091208182053" -->
<!-- sent="Tue, 8 Dec 2009 13:20:47 -0500" -->
<!-- isosent="20091208182047" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447" -->
<!-- id="2536878D-ECF8-4A9D-A73D-D25B3C5661D6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B1E981D.7050909_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 13:20:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0487.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0485.php">Jeff Squyres: "[hwloc-devel] update libtool/autoconf"</a>
<li><strong>In reply to:</strong> <a href="0484.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0487.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Reply:</strong> <a href="0487.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 8, 2009, at 1:17 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev2">&gt;&gt; New require LT 2.2.6b
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By the way, isn't LT_INIT supposed to enforce the required version? We
</span><br>
<span class="quotelev1">&gt; had a bug report from somebody running libtool 1.5 (in the libpci
</span><br>
<span class="quotelev1">&gt; branch). He got obscur errors during autogen.sh, but nothing said
</span><br>
<span class="quotelev1">&gt; clearly that his libtool was too old...
</span><br>
<p>We could do that (I think it's actually LT_PREREQ).  The control I bumped was in the &quot;make a dist tarball&quot; script, not in configure.ac itself -- meaning that we only cared about the version that went out in official tarballs; developers had a little more freedom for their own development copies.
<br>
<p>If you want to be a bit stricter on developers, I'm fine with that, too.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0487.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Previous message:</strong> <a href="0485.php">Jeff Squyres: "[hwloc-devel] update libtool/autoconf"</a>
<li><strong>In reply to:</strong> <a href="0484.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0487.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
<li><strong>Reply:</strong> <a href="0487.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r1447"</a>
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
