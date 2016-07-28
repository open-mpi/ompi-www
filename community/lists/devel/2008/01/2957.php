<?
$subject_val = "Re: [OMPI devel] vt integration -- still problems on os x";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 10 13:22:03 2008" -->
<!-- isoreceived="20080110182203" -->
<!-- sent="Thu, 10 Jan 2008 13:21:47 -0500" -->
<!-- isosent="20080110182147" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] vt integration -- still problems on os x" -->
<!-- id="F92ADF50-1031-4322-A71A-5DA965EC6DB8_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200801101619.12625.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] vt integration -- still problems on os x<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-10 13:21:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2958.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>In reply to:</strong> <a href="2954.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 10, 2008, at 10:19 AM, Andreas Kn&#252;pfer wrote:
<br>
<p><span class="quotelev1">&gt; unfortunately, we're unable to reproduce this error. Could you pass  
</span><br>
<span class="quotelev1">&gt; some more
</span><br>
<span class="quotelev1">&gt; information about your configure command line? This was done with  
</span><br>
<span class="quotelev1">&gt; gcc 4.2 on
</span><br>
<span class="quotelev1">&gt; mac os X, wasn't it?
</span><br>
<p>I'm on Leopard on my MBP with:
<br>
<p>./configure --prefix=/Users/jsquyres/bogus --enable-mpi-f90 --without- 
<br>
threads
<br>
<p>But I might see the problem here -- I just realized/remembered that  
<br>
I'm using the sf.net GCC install (hpc.sf.net).  If I force /usr/bin/ 
<br>
gcc (and friends), it seems to work:
<br>
<p>./configure --prefix=/Users/jsquyres/bogus CC=/usr/bin/gcc CXX=/usr/ 
<br>
bin/g++ --disable-mpi-fortran
<br>
<p>However, the hpc.sf.net OS X compilers are not uncommon (because they  
<br>
provide fortran compiler support for OS X).  Do you think you'll be  
<br>
able to test with these compilers?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2958.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>Previous message:</strong> <a href="2956.php">Jon Mason: "Re: [OMPI devel] [PATCH] openib btl: extensable cpc selection	enablement"</a>
<li><strong>In reply to:</strong> <a href="2954.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
<li><strong>Reply:</strong> <a href="2965.php">Matthias Jurenz: "Re: [OMPI devel] vt integration -- still problems on os x"</a>
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
