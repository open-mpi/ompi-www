<?
$subject_val = "Re: [OMPI users] Building 1.6.3 on OS X 10.8";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 11 15:03:34 2013" -->
<!-- isoreceived="20130211200334" -->
<!-- sent="Mon, 11 Feb 2013 20:03:29 +0000" -->
<!-- isosent="20130211200329" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Building 1.6.3 on OS X 10.8" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC42CF597F_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPa_DOA8qvvSsbda6K6VLge-jwEGgwp5rKVVDbn710LANUoaRw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Building 1.6.3 on OS X 10.8<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-11 15:03:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21379.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21381.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21381.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 11, 2013, at 2:46 PM, Mark Bolstad &lt;the.render.dude_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That's what I noticed, no .so's (actually, I noticed that the dlname in the .la file is empty. thank you, dtruss)
</span><br>
<p>Please send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><span class="quotelev1">&gt; I've built it two different ways:
</span><br>
<span class="quotelev1">&gt; --disable-mpi-f77
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;  --prefix=/Users/bolstadm/papillon/build/macosx-x86_64/Release/openmpi-1.6.3 --disable-mpi-f77 --with-openib=no --enable-shared --disable-static
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both give me the same errors and no .so's.
</span><br>
<p>That's weird -- it should make .so's in both cases.
<br>
<p><span class="quotelev1">&gt; I noticed that I point to the maports libtool (/opt/local/bin/libtool) so I changed the path to find /usr/bin first to no avail. I changed the compiler from gcc to clang and that didn't work either.
</span><br>
<p>configure/make should be using the &quot;libtool&quot; that is internal to the expanded tarball tree, so whichever libtool your PATH points to shouldn't matter.
<br>
<p><span class="quotelev1">&gt; Where do the shared objects get created in the build cycle?
</span><br>
<p>All throughout the build, actually.  Generally, they're created in the */mca/*/* directories in the source tree.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21379.php">Beatty, Daniel D CIV NAVAIR, 474300D: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Previous message:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>In reply to:</strong> <a href="21377.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21381.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
<li><strong>Reply:</strong> <a href="21381.php">Mark Bolstad: "Re: [OMPI users] Building 1.6.3 on OS X 10.8"</a>
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
