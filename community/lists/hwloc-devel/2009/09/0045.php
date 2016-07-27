<?
$subject_val = "Re: [hwloc-devel] API, and make distcheck failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 16:17:06 2009" -->
<!-- isoreceived="20090915201706" -->
<!-- sent="Tue, 15 Sep 2009 22:16:31 +0200" -->
<!-- isosent="20090915201631" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] API, and make distcheck failure" -->
<!-- id="4AAFF61F.6090006_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D6B5C7D2-8AE2-411D-91C9-AB775950B0B9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] API, and make distcheck failure<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 16:16:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0046.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>In reply to:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0046.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Reply:</strong> <a href="0046.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev2">&gt;&gt; Also, make distcheck currently fails here. It looks for index.html
</span><br>
<span class="quotelev2">&gt;&gt; inside the build dir while it should look inside the source dir.
</span><br>
<span class="quotelev2">&gt;&gt; However, it seems that it correctly looks inside the source dir when
</span><br>
<span class="quotelev2">&gt;&gt; building outside of make distcheck. Don't know what's going on...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; I'm unable to recreate this.  Can you give me a recipe to recreate
</span><br>
<span class="quotelev1">&gt; this problem?
</span><br>
<p>svn co ... ; cd trunk ; autoreconf -ifv ; mkdir ../build ; cd ../build ;
<br>
../src/configure ; make ; make distcheck
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0046.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Previous message:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>In reply to:</strong> <a href="0044.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0046.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>Reply:</strong> <a href="0046.php">Jeff Squyres: "Re: [hwloc-devel] API, and make distcheck failure"</a>
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
