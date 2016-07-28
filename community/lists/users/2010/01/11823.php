<?
$subject_val = "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 14:45:37 2010" -->
<!-- isoreceived="20100119194537" -->
<!-- sent="Tue, 19 Jan 2010 07:29:50 -0500" -->
<!-- isosent="20100119122950" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="E0BA7C80-FC3B-4EFD-AC98-9DBF6E0AADD1_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 07:29:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11822.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>In reply to:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11827.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11827.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you get a core dump, or otherwise see exactly where the seg fault is occurring?
<br>
<p>On Jan 18, 2010, at 8:34 AM, Dorian Krause wrote:
<br>
<p><span class="quotelev1">&gt; Hi Eloi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does the segmentation faults you're facing also happen in a sequential
</span><br>
<span class="quotelev2">&gt; &gt; environment (i.e. not linked against openmpi libraries) ?
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
<span class="quotelev2">&gt; &gt; Have you already informed Kazushige Goto (developer of Gotoblas) ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Not yet. Since the problem only happens with openmpi and the BLAS
</span><br>
<span class="quotelev1">&gt; (stand-alone) seems to work, I thought the openmpi mailing list would be
</span><br>
<span class="quotelev1">&gt; the better place to discuss this (to get a grasp of what the error could
</span><br>
<span class="quotelev1">&gt; be before going to the GotoBLAS mailing list).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; Eloi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; PS: Could you post your Makefile.rule here so that we could check the
</span><br>
<span class="quotelev2">&gt; &gt; different compilation options chosen ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I didn't make any changes to the Makefile.rules. This is the content of
</span><br>
<span class="quotelev1">&gt; Makefile.conf:
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
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11824.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>Previous message:</strong> <a href="11822.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn_multiple with MPI_Info object"</a>
<li><strong>In reply to:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11827.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11827.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
