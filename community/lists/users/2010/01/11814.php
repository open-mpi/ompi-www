<?
$subject_val = "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 10:35:18 2010" -->
<!-- isoreceived="20100119153518" -->
<!-- sent="Tue, 19 Jan 2010 10:35:02 -0500" -->
<!-- isosent="20100119153502" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="4B55D126.7090102_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B549127.4000108_at_fft.be" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-19 10:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11815.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Previous message:</strong> <a href="11813.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11816.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11816.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11817.php">Yaakoub El Khamra: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dorian and Eloi
<br>
<p>I wonder if this is really a Goto BLAS problem or related to
<br>
how OpenMPI was configured.
<br>
<p>In a recent sequence of postings on this list
<br>
a colleague reported several errors which were fixed
<br>
after he removed the (non-default) &quot;--enable-mpi-threads&quot;
<br>
flag from his OpenMPI configuration (and built OpenMPI again,
<br>
and recompiled).
<br>
<p>See this thread:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/12/11640.php">http://www.open-mpi.org/community/lists/users/2009/12/11640.php</a>
<br>
<a href="http://www.open-mpi.org/community/lists/users/2010/01/11695.php">http://www.open-mpi.org/community/lists/users/2010/01/11695.php</a>
<br>
<p>He was also using BLAS (most likely Goto's) in the HPL benchmark.
<br>
<p>Did you configure OpenMPI with &quot;--enable-mpi-threads&quot;?
<br>
Have you tried without it?
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Eloi Gaudry wrote:
<br>
<span class="quotelev1">&gt; Dorian Krause wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Eloi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does the segmentation faults you're facing also happen in a 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sequential environment (i.e. not linked against openmpi libraries) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, without MPI everything works fine. Also, linking against mvapich 
</span><br>
<span class="quotelev2">&gt;&gt; doesn't give any errors. I think there is a problem with GotoBLAS and 
</span><br>
<span class="quotelev2">&gt;&gt; the shared library infrastructure of OpenMPI. The code doesn't come to 
</span><br>
<span class="quotelev2">&gt;&gt; the point to execute the gemm operation at all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you already informed Kazushige Goto (developer of Gotoblas) ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not yet. Since the problem only happens with openmpi and the BLAS 
</span><br>
<span class="quotelev2">&gt;&gt; (stand-alone) seems to work, I thought the openmpi mailing list would 
</span><br>
<span class="quotelev2">&gt;&gt; be the better place to discuss this (to get a grasp of what the error 
</span><br>
<span class="quotelev2">&gt;&gt; could be before going to the GotoBLAS mailing list).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PS: Could you post your Makefile.rule here so that we could check the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different compilation options chosen ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I didn't make any changes to the Makefile.rules. This is the content 
</span><br>
<span class="quotelev2">&gt;&gt; of Makefile.conf:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OSNAME=Linux
</span><br>
<span class="quotelev2">&gt;&gt; ARCH=x86_64
</span><br>
<span class="quotelev2">&gt;&gt; C_COMPILER=GCC
</span><br>
<span class="quotelev2">&gt;&gt; BINARY32=
</span><br>
<span class="quotelev2">&gt;&gt; BINARY64=1
</span><br>
<span class="quotelev2">&gt;&gt; CEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 
</span><br>
<span class="quotelev2">&gt;&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lc
</span><br>
<span class="quotelev2">&gt;&gt; F_COMPILER=GFORTRAN
</span><br>
<span class="quotelev2">&gt;&gt; FC=gfortran
</span><br>
<span class="quotelev2">&gt;&gt; BU=_
</span><br>
<span class="quotelev2">&gt;&gt; FEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
</span><br>
<span class="quotelev2">&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 
</span><br>
<span class="quotelev2">&gt;&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lgfortran -lm -lgfortran -lm -lc
</span><br>
<span class="quotelev2">&gt;&gt; CORE=BARCELONA
</span><br>
<span class="quotelev2">&gt;&gt; LIBCORE=barcelona
</span><br>
<span class="quotelev2">&gt;&gt; NUM_CORES=8
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_MMX=1
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_SSE=1
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_SSE2=1
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_SSE3=1
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_SSE4A=1
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_3DNOWEX=1
</span><br>
<span class="quotelev2">&gt;&gt; HAVE_3DNOW=1
</span><br>
<span class="quotelev2">&gt;&gt; MAKE += -j 8
</span><br>
<span class="quotelev2">&gt;&gt; SGEMM_UNROLL_M=8
</span><br>
<span class="quotelev2">&gt;&gt; SGEMM_UNROLL_N=4
</span><br>
<span class="quotelev2">&gt;&gt; DGEMM_UNROLL_M=4
</span><br>
<span class="quotelev2">&gt;&gt; DGEMM_UNROLL_N=4
</span><br>
<span class="quotelev2">&gt;&gt; QGEMM_UNROLL_M=2
</span><br>
<span class="quotelev2">&gt;&gt; QGEMM_UNROLL_N=2
</span><br>
<span class="quotelev2">&gt;&gt; CGEMM_UNROLL_M=4
</span><br>
<span class="quotelev2">&gt;&gt; CGEMM_UNROLL_N=2
</span><br>
<span class="quotelev2">&gt;&gt; ZGEMM_UNROLL_M=2
</span><br>
<span class="quotelev2">&gt;&gt; ZGEMM_UNROLL_N=2
</span><br>
<span class="quotelev2">&gt;&gt; XGEMM_UNROLL_M=1
</span><br>
<span class="quotelev2">&gt;&gt; XGEMM_UNROLL_N=1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Dorian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Dorian,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've been experiencing similar issue on two different Opteron 
</span><br>
<span class="quotelev1">&gt; architectures (22xx and 25x), in a sequential environment, when using 
</span><br>
<span class="quotelev1">&gt; v2-1.10 of GotoBLAS. If you can downgrade to version 2-1.09, I bet you 
</span><br>
<span class="quotelev1">&gt; will not experience such issues. Anyway, I'm pretty sure Kazushige is 
</span><br>
<span class="quotelev1">&gt; working on fixing this right now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11815.php">Shiqing Fan: "Re: [OMPI users] Win32 compilation broken (MSVC2008, OpenMPI1.4.1)"</a>
<li><strong>Previous message:</strong> <a href="11813.php">Andreea Costea: "Re: [OMPI users] Checkpoint/Restart error"</a>
<li><strong>In reply to:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11816.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11816.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11817.php">Yaakoub El Khamra: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
