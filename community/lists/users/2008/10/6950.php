<?
$subject_val = "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 11 08:03:45 2008" -->
<!-- isoreceived="20081011120345" -->
<!-- sent="Sat, 11 Oct 2008 08:03:39 -0400" -->
<!-- isosent="20081011120339" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI 1.2.7 &amp;amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk" -->
<!-- id="FC0F85A0-7906-43A6-BD74-CD3553FB9DD8_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="C5153ED8.62F3%francesco.iannone_at_frascati.enea.it" -->
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
<strong>Date:</strong> 2008-10-11 08:03:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6951.php">Jeff Squyres: "Re: [OMPI users] where is opal_install_dirs?"</a>
<li><strong>Previous message:</strong> <a href="6949.php">Jeff Squyres: "Re: [OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>In reply to:</strong> <a href="6935.php">Francesco Iannone: "[OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6991.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Reply:</strong> <a href="6991.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm surprised that we have not yet put this info in our FAQ -- I'll  
<br>
make a note to do so...
<br>
<p>ptmalloc2 is a memory allocator that is only relevant for OpenFabrics  
<br>
networks.  If you're not using OpenFabrics, then you don't need it,  
<br>
and you can safely disable ptmalloc2.  FWIW, we have changed the  
<br>
default behavior in the upcoming Open MPI v1.3 to include include  
<br>
ptmalloc2 by default.
<br>
<p><p><p>On Oct 10, 2008, at 11:18 AM, Francesco Iannone wrote:
<br>
<p><span class="quotelev1">&gt; Dear openmpi users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compiled oenmpi.1.2.7 with PGI 7.1-4 compilers with configure  
</span><br>
<span class="quotelev1">&gt; option &#147;--disable-ptmalloc2-opt-sbrk&#148; , to fix a segmentation fault  
</span><br>
<span class="quotelev1">&gt; in sysMALLOC function of &#147;opal/mca/memory/ptmalloc2/malloc.c&#148;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anybody knows what it means to compile with this option ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dr. Francesco Iannone
</span><br>
<span class="quotelev1">&gt; Associazione EURATOM-ENEA sulla Fusione
</span><br>
<span class="quotelev1">&gt; C.R. ENEA Frascati
</span><br>
<span class="quotelev1">&gt; Via E. Fermi 45
</span><br>
<span class="quotelev1">&gt; 00044 Frascati (Roma) Italy
</span><br>
<span class="quotelev1">&gt; phone 00-39-06-9400-5124
</span><br>
<span class="quotelev1">&gt; fax 00-39-06-9400-5524
</span><br>
<span class="quotelev1">&gt; mailto:francesco.iannone_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.afs.enea.it/iannone">http://www.afs.enea.it/iannone</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6951.php">Jeff Squyres: "Re: [OMPI users] where is opal_install_dirs?"</a>
<li><strong>Previous message:</strong> <a href="6949.php">Jeff Squyres: "Re: [OMPI users] --enable-static --enable-shared using intel compilers"</a>
<li><strong>In reply to:</strong> <a href="6935.php">Francesco Iannone: "[OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6991.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Reply:</strong> <a href="6991.php">Francesco Iannone: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
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
