<?
$subject_val = "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  6 18:35:06 2011" -->
<!-- isoreceived="20110906223506" -->
<!-- sent="Tue, 06 Sep 2011 22:34:13 -0000 (UTC)" -->
<!-- isosent="20110906223413" -->
<!-- name="Igor Gali&#196;&#135;" -->
<!-- email="i.galic_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC" -->
<!-- id="756ce01a-94e3-42ba-bfe2-330ce94a6fc5_at_iris" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20110906160849.GK13632_at_type.bordeaux.inria.fr" -->
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
<strong>Date:</strong> 2011-09-06 18:34:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2399.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3776)"</a>
<li><strong>Previous message:</strong> <a href="2397.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2395.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2406.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
----- Original Message -----
<br>
<span class="quotelev1">&gt; Igor Gali&#196;&#135;, le Tue 06 Sep 2011 18:00:00 +0200, a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; And also send the output of
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; lstopo --input &quot;nodes:2 sockets:3 caches:4 cores:5 6&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Stdout:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://paste.pocoo.org/show/471341/">http://paste.pocoo.org/show/471341/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; And without --enable-debug?  (Since that option apparently makes
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; work).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Tests fail without --enable-debug -- what really makes it work is
</span><br>
<span class="quotelev2">&gt; &gt; just
</span><br>
<span class="quotelev2">&gt; &gt; adding -g to CFLAGS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah, ok, so could you upload somewhere (or send me) the output &amp;
</span><br>
<span class="quotelev1">&gt; stderr
</span><br>
<span class="quotelev1">&gt; with --enable-debug (but without -g) of both the lstopo command and
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; failing test?
</span><br>
<p>As I said: Tests do not fail if compiled with either -g, or with
<br>
--enable-debug
<br>
<p>Right now, for me the sanest solution seems to be to go with -g
<br>
and optionally with --disable-visibility.
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><pre>
-- 
Igor Gali&#196;&#135;
Tel: +43 (0) 664 886 22 883
Mail: i.galic_at_[hidden]
URL: <a href="http://brainsware.org/">http://brainsware.org/</a>
GPG: 571B 8B8A FC97 266D BDA3  EF6F 43AD 80A4 5779 3257

</pre>
<hr>
<ul>
<li>application/x-bzip-compressed-tar attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2398/debug.tar.bz2">debug.tar.bz2</a>
</ul>
<!-- attachment="debug.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2399.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3776)"</a>
<li><strong>Previous message:</strong> <a href="2397.php">Jeff Squyres: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<li><strong>In reply to:</strong> <a href="2395.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2406.php">Samuel Thibault: "Re: [hwloc-devel] Bug-Report: visibility=hiden on Sparc/Sun CC"</a>
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
