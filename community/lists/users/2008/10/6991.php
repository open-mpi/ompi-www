<?
$subject_val = "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 15 09:34:50 2008" -->
<!-- isoreceived="20081015133450" -->
<!-- sent="Wed, 15 Oct 2008 15:35:09 +0200" -->
<!-- isosent="20081015133509" -->
<!-- name="Francesco Iannone" -->
<!-- email="francesco.iannone_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI 1.2.7 &amp;amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk" -->
<!-- id="C51BBE2D.6491%francesco.iannone_at_frascati.enea.it" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC0F85A0-7906-43A6-BD74-CD3553FB9DD8_at_cisco.com" -->
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
<strong>From:</strong> Francesco Iannone (<em>francesco.iannone_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-15 09:35:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6992.php">Rajeev Thakur: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6990.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6950.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Reply:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Jeff
<br>
<p>First of all About your replay:
<br>
&#179; I'm surprised that we have not yet put this info in our FAQ -- I'll
<br>
make a note to do so... &#179;
<br>
<p>I sent support at Mailing list on date: 2008-08-21 12:43:40
<br>
<p>Subject: [OMPI users] Memory allocation with PGI compiler
<br>
<p>About ptmalloc:
<br>
<p>I have a cluster of 16 nodes DualCPU DualCore AMD  RAM 16 GB with InfiniBand
<br>
CISCO HCA and switch InfiniBand.
<br>
It uses Linux RH Enterprise 4  64 bit , OpenMPI 1.2.7, PGI 7.1-4 and
<br>
openib-1.2-7.
<br>
<p>Hence it means that the option &#139;disable-ptmalloc2 is catastrophic in the
<br>
above configuration.
<br>
<p>Can you help me about this issue in memory allocation in Openmpi 1.2.7 and
<br>
PGI. I tested also with PGI 7.2 with same effects.
<br>
<p><p>Thans in advance 
<br>
<p><p><p>On 11/10/08 14:03, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm surprised that we have not yet put this info in our FAQ -- I'll
</span><br>
<span class="quotelev1">&gt; make a note to do so...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ptmalloc2 is a memory allocator that is only relevant for OpenFabrics
</span><br>
<span class="quotelev1">&gt; networks.  If you're not using OpenFabrics, then you don't need it,
</span><br>
<span class="quotelev1">&gt; and you can safely disable ptmalloc2.  FWIW, we have changed the
</span><br>
<span class="quotelev1">&gt; default behavior in the upcoming Open MPI v1.3 to include include
</span><br>
<span class="quotelev1">&gt; ptmalloc2 by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 10, 2008, at 11:18 AM, Francesco Iannone wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dear openmpi users
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have compiled oenmpi.1.2.7 with PGI 7.1-4 compilers with configure
</span><br>
<span class="quotelev2">&gt;&gt; option &#179;--disable-ptmalloc2-opt-sbrk&#178; , to fix a segmentation fault
</span><br>
<span class="quotelev2">&gt;&gt; in sysMALLOC function of &#179;opal/mca/memory/ptmalloc2/malloc.c&#178;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Anybody knows what it means to compile with this option ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Francesco Iannone
</span><br>
<span class="quotelev2">&gt;&gt; Associazione EURATOM-ENEA sulla Fusione
</span><br>
<span class="quotelev2">&gt;&gt; C.R. ENEA Frascati
</span><br>
<span class="quotelev2">&gt;&gt; Via E. Fermi 45
</span><br>
<span class="quotelev2">&gt;&gt; 00044 Frascati (Roma) Italy
</span><br>
<span class="quotelev2">&gt;&gt; phone 00-39-06-9400-5124
</span><br>
<span class="quotelev2">&gt;&gt; fax 00-39-06-9400-5524
</span><br>
<span class="quotelev2">&gt;&gt; mailto:francesco.iannone_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.afs.enea.it/iannone">http://www.afs.enea.it/iannone</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Dr. Francesco Iannone
<br>
Associazione EURATOM-ENEA sulla Fusione
<br>
C.R. ENEA Frascati
<br>
Via E. Fermi 45
<br>
00044 Frascati (Roma) Italy
<br>
phone 00-39-06-9400-5124
<br>
fax 00-39-06-9400-5524
<br>
mailto:francesco.iannone_at_[hidden]
<br>
<a href="http://www.afs.enea.it/iannone">http://www.afs.enea.it/iannone</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6992.php">Rajeev Thakur: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6990.php">Sangamesh B: "Re: [OMPI users] Performance: MPICH2 vs OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="6950.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
<li><strong>Reply:</strong> <a href="6993.php">Jeff Squyres: "Re: [OMPI users] OPENMPI 1.2.7 &amp; PGI compilers: configure option --disable-ptmalloc2-opt-sbrk"</a>
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
