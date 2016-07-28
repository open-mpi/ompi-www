<?
$subject_val = "Re: [OMPI users] bulding rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 10:10:36 2009" -->
<!-- isoreceived="20090709141036" -->
<!-- sent="Thu, 9 Jul 2009 10:10:30 -0400" -->
<!-- isosent="20090709141030" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bulding rpm" -->
<!-- id="87F9C582-6094-4A18-83D0-7E797E3E7C60_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="29370997.62721247149358743.JavaMail.root_at_mta.iut.ac.ir" -->
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
<strong>Subject:</strong> Re: [OMPI users] bulding rpm<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-09 10:10:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9899.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>In reply to:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9901.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Reply:</strong> <a href="9901.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 9, 2009, at 10:22 AM, rahmani wrote:
<br>
<p><span class="quotelev1">&gt; yes, they are intel library and all are in LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi/intel/1.3.2/bin/mpif90 --showme
</span><br>
<span class="quotelev1">&gt; gfortran -I/usr/local/include -pthread -I/usr/local/lib -L/usr/local/ 
</span><br>
<span class="quotelev1">&gt; lib -lmpi_f90 -lmpi_f77 -lmpi -lopen-rte -lopen-pal -ldl -Wl,-- 
</span><br>
<span class="quotelev1">&gt; export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldd /usr/local/openmpi/intel/1.3.2/bin/mpirun
</span><br>
<span class="quotelev1">&gt;         linux-vdso.so.1 =&gt;  (0x00007fff555fd000)
</span><br>
<span class="quotelev1">&gt;         libopen-rte.so.0 =&gt; /usr/local/lib/libopen-rte.so.0  
</span><br>
<span class="quotelev1">&gt; (0x00007fa64d154000)
</span><br>
<span class="quotelev1">&gt;         libopen-pal.so.0 =&gt; /usr/local/lib/libopen-pal.so.0  
</span><br>
<span class="quotelev1">&gt; (0x00007fa64cef2000)
</span><br>
<span class="quotelev1">&gt;         libdl.so.2 =&gt; /lib64/libdl.so.2 (0x00007fa64ccee000)
</span><br>
<span class="quotelev1">&gt;         libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00007fa64cad6000)
</span><br>
<span class="quotelev1">&gt;         libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00007fa64c8d3000)
</span><br>
<span class="quotelev1">&gt;         libm.so.6 =&gt; /lib64/libm.so.6 (0x00007fa64c67d000)
</span><br>
<span class="quotelev1">&gt;         libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00007fa64c466000)
</span><br>
<span class="quotelev1">&gt;         libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x00007fa64c24a000)
</span><br>
<span class="quotelev1">&gt;         libc.so.6 =&gt; /lib64/libc.so.6 (0x00007fa64bef1000)
</span><br>
<span class="quotelev1">&gt;         /lib64/ld-linux-x86-64.so.2 (0x00007fa64d3b2000)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I had another openmpi in my computer. I configure openmpi 1.3 with  
</span><br>
<span class="quotelev1">&gt; gnu compiler and --prefix=/usr/local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can not use both of them?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You can; you just need to set your LD_LIBRARY_PATH appropriately.
<br>
<p>Specifically, when you run &quot;mpirun&quot; (or &quot;mpif90&quot; or ...&quot;), it looks to  
<br>
find libopen-rte.so.  The first one that it is finding is the &quot;wrong&quot;  
<br>
one -- the one in /usr/local.  You therefore get &quot;wrong&quot; results  
<br>
because it's behaving like the one installed in /usr/local.
<br>
<p>You can probably prefix your LD_LIBRARY_PATH with /usr/local/openmpi/ 
<br>
intel/1.3.2/lib and then it'll use the &quot;right&quot; ilibopen-rte.so.
<br>
<p>Make sense?
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
<li><strong>Next message:</strong> <a href="9899.php">Durga Choudhury: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>Previous message:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>In reply to:</strong> <a href="9897.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9901.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
<li><strong>Reply:</strong> <a href="9901.php">rahmani: "Re: [OMPI users] bulding rpm"</a>
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
