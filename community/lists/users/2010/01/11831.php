<?
$subject_val = "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 11:38:47 2010" -->
<!-- isoreceived="20100120163847" -->
<!-- sent="Wed, 20 Jan 2010 17:38:39 +0100" -->
<!-- isosent="20100120163839" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="4B57318F.1090005_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B572C1E.8060100_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2010-01-20 11:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11836.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11836.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>FYI, This issue is solved with the last version of the library 
<br>
(v2-1.11), at least on my side.
<br>
<p>Eloi
<br>
<p>Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Dorian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dorian Krause wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; @Gus I don't use any flags for the installed OpenMPI version. In fact 
</span><br>
<span class="quotelev2">&gt;&gt; for this mail I used an OpenMPI version just installed with the 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-debug flag.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are right, my guess was wrong.
</span><br>
<span class="quotelev1">&gt; Just that some people reported trouble with threaded
</span><br>
<span class="quotelev1">&gt; versions of OpenMPI, specifically when running HPL on top of Goto BLAS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FYI, my local HPL was built with (non-threaded) OpenMPI 1.3.2 and
</span><br>
<span class="quotelev1">&gt; Goto BLAS 1.26, which now I see is kind of ancient
</span><br>
<span class="quotelev1">&gt; (but still seems to be the default at TACC).
</span><br>
<span class="quotelev1">&gt; I linked other programs to that Goto BLAS also.
</span><br>
<span class="quotelev1">&gt; It works fine and fast, but this doesn't help you much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Have you tried other programs linked with your current OpenMPI,
</span><br>
<span class="quotelev1">&gt; but that do not use Goto BLAS, just to ensure that the problem
</span><br>
<span class="quotelev1">&gt; is not on OpenMPI?
</span><br>
<span class="quotelev1">&gt; (Say, the basic programs in the examples directory: connectivity_c.c,
</span><br>
<span class="quotelev1">&gt; ring_c.c, hello_c.c.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, hopefully Kazuhighe Goto will find out what is going on.
</span><br>
<span class="quotelev1">&gt; Good luck!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  From what I can tell from stepping through the debugger the problem 
</span><br>
<span class="quotelev2">&gt;&gt; happens in btl_openib_component_init:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #0  btl_openib_component_init (num_btl_modules=0x7fff7a8593e8, 
</span><br>
<span class="quotelev2">&gt;&gt; enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev2">&gt;&gt;     at 
</span><br>
<span class="quotelev2">&gt;&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/btl/openib/btl_openib_component.c:2099 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00002b9eb6f65679 in mca_btl_base_select 
</span><br>
<span class="quotelev2">&gt;&gt; (enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev2">&gt;&gt;     at 
</span><br>
<span class="quotelev2">&gt;&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/btl/base/btl_base_select.c:110
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00002aaad007d933 in mca_bml_r2_component_init 
</span><br>
<span class="quotelev2">&gt;&gt; (priority=0x7fff7a8594b4, enable_progress_threads=false, 
</span><br>
<span class="quotelev2">&gt;&gt; enable_mpi_threads=false)
</span><br>
<span class="quotelev2">&gt;&gt;     at 
</span><br>
<span class="quotelev2">&gt;&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/bml/r2/bml_r2_component.c:86
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00002b9eb6f64a80 in mca_bml_base_init 
</span><br>
<span class="quotelev2">&gt;&gt; (enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev2">&gt;&gt;     at 
</span><br>
<span class="quotelev2">&gt;&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/bml/base/bml_base_init.c:69
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00002aaacfc5580a in mca_pml_ob1_component_init 
</span><br>
<span class="quotelev2">&gt;&gt; (priority=0x7fff7a8595d0, enable_progress_threads=false, 
</span><br>
<span class="quotelev2">&gt;&gt; enable_mpi_threads=false)
</span><br>
<span class="quotelev2">&gt;&gt;     at 
</span><br>
<span class="quotelev2">&gt;&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/pml/ob1/pml_ob1_component.c:168
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00002b9eb6f787a4 in mca_pml_base_select 
</span><br>
<span class="quotelev2">&gt;&gt; (enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev2">&gt;&gt;     at 
</span><br>
<span class="quotelev2">&gt;&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/pml/base/pml_base_select.c:126
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00002b9eb6ef4989 in ompi_mpi_init (argc=1, argv=0x7fff7a859af8, 
</span><br>
<span class="quotelev2">&gt;&gt; requested=0, provided=0x7fff7a859858)
</span><br>
<span class="quotelev2">&gt;&gt;     at /home/kraused/ompi/openmpi-1.4/ompi/runtime/ompi_mpi_init.c:534
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00002b9eb6f33bb2 in PMPI_Init (argc=0x7fff7a8598cc, 
</span><br>
<span class="quotelev2">&gt;&gt; argv=0x7fff7a8598c0) at 
</span><br>
<span class="quotelev2">&gt;&gt; /home/kraused/ompi/openmpi-1.4/ompi/mpi/c/profile/pinit.c:80
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00000000004007e6 in main (argc=1, argv=0x7fff7a859af8) at 
</span><br>
<span class="quotelev2">&gt;&gt; /home/kraused/blas.c:20
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I set a breakpoint in btl_openib_component_init and continue 
</span><br>
<span class="quotelev2">&gt;&gt; from there I get a SIGILL but the backtrace is meaningless to me:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGILL, Illegal instruction.
</span><br>
<span class="quotelev2">&gt;&gt; [Switching to Thread 0x40901940 (LWP 21183)]
</span><br>
<span class="quotelev2">&gt;&gt; 0x00007fff23b2a7c0 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007fff23b2a7c0 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x0000003df9c06307 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x0000003df90d1ded in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The bad thing is: If I step through btl_openib_component_init right 
</span><br>
<span class="quotelev2">&gt;&gt; after the call to ompi_btl_openib_fd_init and continue from there the 
</span><br>
<span class="quotelev2">&gt;&gt; program finishes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More precisely: stepping beyond the pthread_create call at line 537 
</span><br>
<span class="quotelev2">&gt;&gt; in btl_openib_fd.c and afterwards I can continue.
</span><br>
<span class="quotelev2">&gt;&gt; I conjecture that gdb influences the threading here and therefore the 
</span><br>
<span class="quotelev2">&gt;&gt; problem doesn't show up?!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm interested in digging further but I need some advices/hints where 
</span><br>
<span class="quotelev2">&gt;&gt; to go from here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Dorian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 1/19/10 1:29 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you get a core dump, or otherwise see exactly where the seg 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fault is occurring?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 18, 2010, at 8:34 AM, Dorian Krause wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Eloi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Does the segmentation faults you're facing also happen in a 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; sequential
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; environment (i.e. not linked against openmpi libraries) ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; No, without MPI everything works fine. Also, linking against mvapich
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; doesn't give any errors. I think there is a problem with GotoBLAS and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the shared library infrastructure of OpenMPI. The code doesn't come to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the point to execute the gemm operation at all.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Have you already informed Kazushige Goto (developer of Gotoblas) ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Not yet. Since the problem only happens with openmpi and the BLAS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (stand-alone) seems to work, I thought the openmpi mailing list 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the better place to discuss this (to get a grasp of what the error 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be before going to the GotoBLAS mailing list).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; PS: Could you post your Makefile.rule here so that we could check the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; different compilation options chosen ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I didn't make any changes to the Makefile.rules. This is the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; content of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Makefile.conf:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OSNAME=Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ARCH=x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C_COMPILER=GCC
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BINARY32=
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BINARY64=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; F_COMPILER=GFORTRAN
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FC=gfortran
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; BU=_
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lgfortran -lm -lgfortran -lm -lc
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CORE=BARCELONA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; LIBCORE=barcelona
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; NUM_CORES=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_MMX=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_SSE=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_SSE2=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_SSE3=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_SSE4A=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_3DNOWEX=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; HAVE_3DNOW=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MAKE += -j 8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGEMM_UNROLL_M=8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; SGEMM_UNROLL_N=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DGEMM_UNROLL_M=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; DGEMM_UNROLL_N=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; QGEMM_UNROLL_M=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; QGEMM_UNROLL_N=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CGEMM_UNROLL_M=4
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; CGEMM_UNROLL_N=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ZGEMM_UNROLL_M=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ZGEMM_UNROLL_N=2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XGEMM_UNROLL_M=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; XGEMM_UNROLL_N=1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dorian
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11832.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11836.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11836.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
