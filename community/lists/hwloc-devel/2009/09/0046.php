<?
$subject_val = "Re: [hwloc-devel] API, and make distcheck failure";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 15 17:42:23 2009" -->
<!-- isoreceived="20090915214223" -->
<!-- sent="Tue, 15 Sep 2009 17:42:17 -0400" -->
<!-- isosent="20090915214217" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] API, and make distcheck failure" -->
<!-- id="1A9501A1-50AB-4E2A-8BA7-3C4806920EE6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AAFF61F.6090006_at_inria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-15 17:42:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0047.php">Samuel Thibault: "Re: [hwloc-devel] hwloc web site"</a>
<li><strong>Previous message:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>In reply to:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Got it; I can duplicated.  I'll check it shortly -- I made trac #2 for  
<br>
it.
<br>
<p>On Sep 15, 2009, at 4:16 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Also, make distcheck currently fails here. It looks for index.html
</span><br>
<span class="quotelev3">&gt; &gt;&gt; inside the build dir while it should look inside the source dir.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, it seems that it correctly looks inside the source dir  
</span><br>
<span class="quotelev1">&gt; when
</span><br>
<span class="quotelev3">&gt; &gt;&gt; building outside of make distcheck. Don't know what's going on...
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm unable to recreate this.  Can you give me a recipe to recreate
</span><br>
<span class="quotelev2">&gt; &gt; this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; svn co ... ; cd trunk ; autoreconf -ifv ; mkdir ../build ; cd ../ 
</span><br>
<span class="quotelev1">&gt; build ;
</span><br>
<span class="quotelev1">&gt; ../src/configure ; make ; make distcheck
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="0047.php">Samuel Thibault: "Re: [hwloc-devel] hwloc web site"</a>
<li><strong>Previous message:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
<li><strong>In reply to:</strong> <a href="0045.php">Brice Goglin: "Re: [hwloc-devel] API, and make distcheck failure"</a>
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
