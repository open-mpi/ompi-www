<?
$subject_val = "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 18 11:49:46 2010" -->
<!-- isoreceived="20100118164946" -->
<!-- sent="Mon, 18 Jan 2010 17:49:43 +0100" -->
<!-- isosent="20100118164943" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="4B549127.4000108_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B546354.4080504_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2<br>
<strong>From:</strong> Eloi Gaudry (<em>eg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-18 11:49:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11814.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11814.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dorian Krause wrote:
<br>
<span class="quotelev1">&gt; Hi Eloi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Does the segmentation faults you're facing also happen in a 
</span><br>
<span class="quotelev2">&gt;&gt; sequential environment (i.e. not linked against openmpi libraries) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, without MPI everything works fine. Also, linking against mvapich 
</span><br>
<span class="quotelev1">&gt; doesn't give any errors. I think there is a problem with GotoBLAS and 
</span><br>
<span class="quotelev1">&gt; the shared library infrastructure of OpenMPI. The code doesn't come to 
</span><br>
<span class="quotelev1">&gt; the point to execute the gemm operation at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you already informed Kazushige Goto (developer of Gotoblas) ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not yet. Since the problem only happens with openmpi and the BLAS 
</span><br>
<span class="quotelev1">&gt; (stand-alone) seems to work, I thought the openmpi mailing list would 
</span><br>
<span class="quotelev1">&gt; be the better place to discuss this (to get a grasp of what the error 
</span><br>
<span class="quotelev1">&gt; could be before going to the GotoBLAS mailing list).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Eloi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS: Could you post your Makefile.rule here so that we could check the 
</span><br>
<span class="quotelev2">&gt;&gt; different compilation options chosen ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I didn't make any changes to the Makefile.rules. This is the content 
</span><br>
<span class="quotelev1">&gt; of Makefile.conf:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OSNAME=Linux
</span><br>
<span class="quotelev1">&gt; ARCH=x86_64
</span><br>
<span class="quotelev1">&gt; C_COMPILER=GCC
</span><br>
<span class="quotelev1">&gt; BINARY32=
</span><br>
<span class="quotelev1">&gt; BINARY64=1
</span><br>
<span class="quotelev1">&gt; CEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 
</span><br>
<span class="quotelev1">&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lc
</span><br>
<span class="quotelev1">&gt; F_COMPILER=GFORTRAN
</span><br>
<span class="quotelev1">&gt; FC=gfortran
</span><br>
<span class="quotelev1">&gt; BU=_
</span><br>
<span class="quotelev1">&gt; FEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
</span><br>
<span class="quotelev1">&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 
</span><br>
<span class="quotelev1">&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lgfortran -lm -lgfortran -lm -lc
</span><br>
<span class="quotelev1">&gt; CORE=BARCELONA
</span><br>
<span class="quotelev1">&gt; LIBCORE=barcelona
</span><br>
<span class="quotelev1">&gt; NUM_CORES=8
</span><br>
<span class="quotelev1">&gt; HAVE_MMX=1
</span><br>
<span class="quotelev1">&gt; HAVE_SSE=1
</span><br>
<span class="quotelev1">&gt; HAVE_SSE2=1
</span><br>
<span class="quotelev1">&gt; HAVE_SSE3=1
</span><br>
<span class="quotelev1">&gt; HAVE_SSE4A=1
</span><br>
<span class="quotelev1">&gt; HAVE_3DNOWEX=1
</span><br>
<span class="quotelev1">&gt; HAVE_3DNOW=1
</span><br>
<span class="quotelev1">&gt; MAKE += -j 8
</span><br>
<span class="quotelev1">&gt; SGEMM_UNROLL_M=8
</span><br>
<span class="quotelev1">&gt; SGEMM_UNROLL_N=4
</span><br>
<span class="quotelev1">&gt; DGEMM_UNROLL_M=4
</span><br>
<span class="quotelev1">&gt; DGEMM_UNROLL_N=4
</span><br>
<span class="quotelev1">&gt; QGEMM_UNROLL_M=2
</span><br>
<span class="quotelev1">&gt; QGEMM_UNROLL_N=2
</span><br>
<span class="quotelev1">&gt; CGEMM_UNROLL_M=4
</span><br>
<span class="quotelev1">&gt; CGEMM_UNROLL_N=2
</span><br>
<span class="quotelev1">&gt; ZGEMM_UNROLL_M=2
</span><br>
<span class="quotelev1">&gt; ZGEMM_UNROLL_N=2
</span><br>
<span class="quotelev1">&gt; XGEMM_UNROLL_M=1
</span><br>
<span class="quotelev1">&gt; XGEMM_UNROLL_N=1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt;
</span><br>
Dorian,
<br>
<p>I've been experiencing similar issue on two different Opteron 
<br>
architectures (22xx and 25x), in a sequential environment, when using 
<br>
v2-1.10 of GotoBLAS. If you can downgrade to version 2-1.09, I bet you 
<br>
will not experience such issues. Anyway, I'm pretty sure Kazushige is 
<br>
working on fixing this right now.
<br>
<p>Eloi
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11809.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>Previous message:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11814.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11814.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
