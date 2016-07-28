<?
$subject_val = "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 13:42:43 2008" -->
<!-- isoreceived="20081015174243" -->
<!-- sent="Wed, 15 Oct 2008 13:42:36 -0400" -->
<!-- isosent="20081015174236" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI 1.2.7 &amp;amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk" -->
<!-- id="7599328F-C015-4D4C-A5B6-BD22CAB11BAD_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C51BBE2D.6491%francesco.iannone_at_frascati.enea.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-15 13:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6994.php">Jed Brown: "[OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6992.php">Rajeev Thakur: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6991.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Reply:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 15, 2008, at 9:35 AM, Francesco Iannone wrote:
<br>
<p><span class="quotelev1">&gt; I have a cluster of 16 nodes DualCPU DualCore AMD  RAM 16 GB with  
</span><br>
<span class="quotelev1">&gt; InfiniBand
</span><br>
<span class="quotelev1">&gt; CISCO HCA and switch InfiniBand.
</span><br>
<span class="quotelev1">&gt; It uses Linux RH Enterprise 4  64 bit , OpenMPI 1.2.7, PGI 7.1-4 and
</span><br>
<span class="quotelev1">&gt; openib-1.2-7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence it means that the option &#151;disable-ptmalloc2 is catastrophic in  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; above configuration.
</span><br>
<p>Actually, I notice that in your original message, you said &quot;--disable- 
<br>
ptmalloc2-opt-sbrk&quot;, but here you said &quot;--disable-ptmalloc2&quot;.  The  
<br>
former is:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Only trigger callbacks when sbrk is used  
<br>
for small
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;allocations, rather than every call to  
<br>
malloc/free.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(default: enabled)
<br>
<p>So it should be fine to disable; it shouldn't affect overall MPI  
<br>
performance too much.
<br>
<p>The latter disables ptmalloc2 entirely (and you'll likely get lower  
<br>
benchmark bandwidth for large messages).
<br>
<p>I'm unaware of either of these options leading to problems with the  
<br>
PGI compiler suite; I have tested OMPI v1.2.x with several versions of  
<br>
the PGI compiler without problem (although my latest version is PGI  
<br>
7.1-4).
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
<li><strong>Next message:</strong> <a href="6994.php">Jed Brown: "[OMPI users] on SEEK_*"</a>
<li><strong>Previous message:</strong> <a href="6992.php">Rajeev Thakur: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6991.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Reply:</strong> <a href="6997.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
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
