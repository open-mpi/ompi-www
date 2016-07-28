<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  5 19:39:21 2011" -->
<!-- isoreceived="20110905233921" -->
<!-- sent="Mon, 05 Sep 2011 23:39:12 -0000 (UTC)" -->
<!-- isosent="20110905233912" -->
<!-- name="Igor Gali&#196;&#135;" -->
<!-- email="i.galic_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="26b78f1f-3eef-4ac5-ade2-fde336ad3d4d_at_iris" -->
<!-- charset="utf-8" -->
<!-- inreplyto="2CA8B947-9FED-471E-B6C4-BE324F3FA655_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC<br>
<strong>From:</strong> Igor Gali&#196;&#135; (<em>i.galic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-05 19:39:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2374.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3765)"</a>
<li><strong>Previous message:</strong> <a href="2372.php">Samuel Thibault: "Re: [hwloc-devel] trunk make check on eddie"</a>
<li><strong>In reply to:</strong> <a href="2371.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2378.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2378.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
<span class="quotelev1">&gt; I do not believe your diagnosis is correct (but I am not at keyboard
</span><br>
<span class="quotelev1">&gt; to check). The configure visibility stuff turns on 2 different
</span><br>
<span class="quotelev1">&gt; things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - visibility compiler attributes
</span><br>
<span class="quotelev1">&gt; - compiler cli flags (fvisibility)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With your sed, u only disabled the cli options, whichight be
</span><br>
<span class="quotelev1">&gt; redundant anyway. But the vis attrs were left on, and therefore the
</span><br>
<span class="quotelev1">&gt; lib symbols might not have been visible properly...?  That's a
</span><br>
<span class="quotelev1">&gt; guess.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The fact that u did disable vis and it works means that when all vis
</span><br>
<span class="quotelev1">&gt; stuff is properly disabled, it works fine.
</span><br>
<p>True, I shortsightedly overlooked that.
<br>
<p><span class="quotelev1">&gt; So I think the real issue is why configure might be getting your
</span><br>
<span class="quotelev1">&gt; visibility tests wrong...?  Please send your configure stdout/stderr
</span><br>
<span class="quotelev1">&gt; and config.log - we can have a look.
</span><br>
<p>Will do an report back.
<br>
<p>Another thing: Even with visibility disabled, I'm getting test failures
<br>
on, I believe only i386 (so that should mean sparc and sparcv9 are passing)
<br>
Can't confirm for amd64 yet.
<br>
<p>i
<br>
<p><pre>
-- 
Igor Gali&#196;&#135;
Tel: +43 (0) 664 886 22 883
Mail: i.galic_at_[hidden]
URL: <a href="http://brainsware.org/">http://brainsware.org/</a>
GPG: 571B 8B8A FC97 266D BDA3  EF6F 43AD 80A4 5779 3257
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2374.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3765)"</a>
<li><strong>Previous message:</strong> <a href="2372.php">Samuel Thibault: "Re: [hwloc-devel] trunk make check on eddie"</a>
<li><strong>In reply to:</strong> <a href="2371.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2378.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Reply:</strong> <a href="2378.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
