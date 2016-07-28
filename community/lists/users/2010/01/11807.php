<?
$subject_val = "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 18 08:34:18 2010" -->
<!-- isoreceived="20100118133418" -->
<!-- sent="Mon, 18 Jan 2010 14:34:12 +0100" -->
<!-- isosent="20100118133412" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="4B546354.4080504_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B544642.9040203_at_fft.be" -->
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
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-18 08:34:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Eloi,
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does the segmentation faults you're facing also happen in a sequential 
</span><br>
<span class="quotelev1">&gt; environment (i.e. not linked against openmpi libraries) ?
</span><br>
<p>No, without MPI everything works fine. Also, linking against mvapich 
<br>
doesn't give any errors. I think there is a problem with GotoBLAS and 
<br>
the shared library infrastructure of OpenMPI. The code doesn't come to 
<br>
the point to execute the gemm operation at all.
<br>
<p><span class="quotelev1">&gt; Have you already informed Kazushige Goto (developer of Gotoblas) ?
</span><br>
<p>Not yet. Since the problem only happens with openmpi and the BLAS 
<br>
(stand-alone) seems to work, I thought the openmpi mailing list would be 
<br>
the better place to discuss this (to get a grasp of what the error could 
<br>
be before going to the GotoBLAS mailing list).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Eloi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: Could you post your Makefile.rule here so that we could check the 
</span><br>
<span class="quotelev1">&gt; different compilation options chosen ?
</span><br>
<p>I didn't make any changes to the Makefile.rules. This is the content of 
<br>
Makefile.conf:
<br>
<p>OSNAME=Linux
<br>
ARCH=x86_64
<br>
C_COMPILER=GCC
<br>
BINARY32=
<br>
BINARY64=1
<br>
CEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
<br>
-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
<br>
-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 
<br>
-L/lib/../lib64 -L/usr/lib/../lib64  -lc
<br>
F_COMPILER=GFORTRAN
<br>
FC=gfortran
<br>
BU=_
<br>
FEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
<br>
-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2 
<br>
-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64 
<br>
-L/lib/../lib64 -L/usr/lib/../lib64  -lgfortran -lm -lgfortran -lm -lc
<br>
CORE=BARCELONA
<br>
LIBCORE=barcelona
<br>
NUM_CORES=8
<br>
HAVE_MMX=1
<br>
HAVE_SSE=1
<br>
HAVE_SSE2=1
<br>
HAVE_SSE3=1
<br>
HAVE_SSE4A=1
<br>
HAVE_3DNOWEX=1
<br>
HAVE_3DNOW=1
<br>
MAKE += -j 8
<br>
SGEMM_UNROLL_M=8
<br>
SGEMM_UNROLL_N=4
<br>
DGEMM_UNROLL_M=4
<br>
DGEMM_UNROLL_N=4
<br>
QGEMM_UNROLL_M=2
<br>
QGEMM_UNROLL_N=2
<br>
CGEMM_UNROLL_M=4
<br>
CGEMM_UNROLL_N=2
<br>
ZGEMM_UNROLL_M=2
<br>
ZGEMM_UNROLL_N=2
<br>
XGEMM_UNROLL_M=1
<br>
XGEMM_UNROLL_N=1
<br>
<p><p>Thanks,
<br>
Dorian
<br>
<p><span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11808.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
