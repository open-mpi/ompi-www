<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 11:09:34 2011" -->
<!-- isoreceived="20110906150934" -->
<!-- sent="Tue, 06 Sep 2011 15:09:23 -0000 (UTC)" -->
<!-- isosent="20110906150923" -->
<!-- name="Igor Gali&#196;&#135;" -->
<!-- email="i.galic_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="1cb35cc2-d837-4ae9-bea2-8c5f425bddcf_at_iris" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20110906125612.GA13632_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-09-06 11:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2389.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2384.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2389.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
<span class="quotelev1">&gt; Igor Gali&#196;&#135;, le Tue 06 Sep 2011 14:48:07 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Assertion failed: !obj, file hwloc_get_obj_inside_cpuset.c, line
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 40
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /bin/bash: line 5: 20986 Abort                   (core dumped)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ${dir}$tst
</span><br>
<span class="quotelev3">&gt; &gt; &gt; FAIL: hwloc_get_obj_inside_cpuset
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Uh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you re-run it after giving --enable-debug to ./configure?
</span><br>
<p>Tests pass with -g only and with --enable-debug (and with no change to
<br>
visibility -- I'll attempt this as next step.)
<br>
<p><span class="quotelev1">&gt; And also send the output of
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lstopo --input &quot;nodes:2 sockets:3 caches:4 cores:5 6&quot;
</span><br>
<p>Stdout:
<br>
<a href="http://paste.pocoo.org/show/471341/">http://paste.pocoo.org/show/471341/</a>
<br>
<p>Stdout+Stderr don't fit into the pastebin...
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
<li><strong>Next message:</strong> <a href="2389.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>Previous message:</strong> <a href="2387.php">Jeff Squyres: "Re: [hwloc-devel] roadmap, XML/JSON/..."</a>
<li><strong>In reply to:</strong> <a href="2384.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2389.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
