<?
$subject_val = "Re: [OMPI devel] Make Error: io_romio_ad_wait.c";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 17:38:54 2009" -->
<!-- isoreceived="20090120223854" -->
<!-- sent="Tue, 20 Jan 2009 17:38:47 -0500" -->
<!-- isosent="20090120223847" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Make Error: io_romio_ad_wait.c" -->
<!-- id="31A1EA0E-922E-4D82-BB81-06576E749CC8_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ae4c35670901181759n728a7d85ub23689254afd784c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Make Error: io_romio_ad_wait.c<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 17:38:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5245.php">Jeff Squyres: "[OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Previous message:</strong> <a href="5243.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5226.php">Jeremy Espenshade: "[OMPI devel] Make Error: io_romio_ad_wait.c"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 18, 2009, at 8:59 PM, Jeremy Espenshade wrote:
<br>
<p><span class="quotelev1">&gt; libtool: compile:  ppc_4xx-gcc -DHAVE_CONFIG_H -I. -I../../adio/ 
</span><br>
<span class="quotelev1">&gt; include -DOMPI_BUILDING=1 -I/home/jeremy/Desktop/openmpi-1.2.8/ompi/ 
</span><br>
<span class="quotelev1">&gt; mca/io/romio/romio/../../../../.. -I/home/jeremy/Desktop/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.8/ompi/mca/io/romio/romio/../../../../../opal/include - 
</span><br>
<span class="quotelev1">&gt; I../../../../../../../opal/include -I../../../../../../../ompi/ 
</span><br>
<span class="quotelev1">&gt; include -I/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio/romio/ 
</span><br>
<span class="quotelev1">&gt; include -I/home/jeremy/Desktop/openmpi-1.2.8/ompi/mca/io/romio/romio/ 
</span><br>
<span class="quotelev1">&gt; adio/include -O3 -DNDEBUG -finline-functions -fno-strict-aliasing - 
</span><br>
<span class="quotelev1">&gt; pthread -D_LARGEFILE64_SOURCE -D_FILE_OFFSET_BITS=64 - 
</span><br>
<span class="quotelev1">&gt; DHAVE_ROMIOCONF_H -DHAVE_ROMIOCONF_H -I../../include -MT  
</span><br>
<span class="quotelev1">&gt; io_romio_ad_wait.lo -MD -MP -MF .deps/io_romio_ad_wait.Tpo -c  
</span><br>
<span class="quotelev1">&gt; io_romio_ad_wait.c  -fPIC -DPIC -o .libs/io_romio_ad_wait.o
</span><br>
<span class="quotelev1">&gt; io_romio_ad_wait.c: In function 'ADIOI_GEN_IOComplete':
</span><br>
<span class="quotelev1">&gt; io_romio_ad_wait.c:59: warning: passing argument 1 of 'aio_suspend'  
</span><br>
<span class="quotelev1">&gt; makes pointer from integer without a cast
</span><br>
<span class="quotelev1">&gt; io_romio_ad_wait.c:59: warning: passing argument 2 of 'aio_suspend'  
</span><br>
<span class="quotelev1">&gt; makes integer from pointer without a cast
</span><br>
<span class="quotelev1">&gt; io_romio_ad_wait.c:59: error: too few arguments to function  
</span><br>
<span class="quotelev1">&gt; 'aio_suspend'
</span><br>
<span class="quotelev1">&gt; io_romio_ad_wait.c:62: error: 'tmp1' undeclared (first use in this  
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; io_romio_ad_wait.c:62: error: (Each undeclared identifier is  
</span><br>
<span class="quotelev1">&gt; reported only once
</span><br>
<span class="quotelev1">&gt; io_romio_ad_wait.c:62: error: for each function it appears in.)
</span><br>
<p><p>This looks like a prototype mismatch with the aio_suspend() library  
<br>
function.
<br>
<p>What is the prototype of this function on your system?  The prototype  
<br>
is the same on several systems that I have checked (RHEL4, Debian  
<br>
somethingorother with kernel 2.6.18, OS X Leopard):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#include &lt;aio.h&gt;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;aio_suspend(const struct aiocb *const list[], int nent,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;const struct timespec *timeout);
<br>
<p>Is it different on your system?
<br>
<p>FWIW, I notice that in the upgraded ROMIO in the just-released OMPI  
<br>
v1.3, it doesn't use the call to aio_complete at all.  So you might  
<br>
want to try that...?
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
<li><strong>Next message:</strong> <a href="5245.php">Jeff Squyres: "[OMPI devel] RFC: Adding OMPI_CHECK_WITHDIR checks"</a>
<li><strong>Previous message:</strong> <a href="5243.php">Patrick Geoffray: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5226.php">Jeremy Espenshade: "[OMPI devel] Make Error: io_romio_ad_wait.c"</a>
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
