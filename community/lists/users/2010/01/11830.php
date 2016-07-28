<?
$subject_val = "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 11:15:36 2010" -->
<!-- isoreceived="20100120161536" -->
<!-- sent="Wed, 20 Jan 2010 11:15:26 -0500" -->
<!-- isosent="20100120161526" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="4B572C1E.8060100_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B565EB5.3030905_at_web.de" -->
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
<strong>Date:</strong> 2010-01-20 11:15:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11831.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="11827.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11831.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11831.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dorian
<br>
<p>Dorian Krause wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @Gus I don't use any flags for the installed OpenMPI version. In fact 
</span><br>
<span class="quotelev1">&gt; for this mail I used an OpenMPI version just installed with the 
</span><br>
<span class="quotelev1">&gt; --enable-debug flag.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You are right, my guess was wrong.
<br>
Just that some people reported trouble with threaded
<br>
versions of OpenMPI, specifically when running HPL on top of Goto BLAS.
<br>
<p>FYI, my local HPL was built with (non-threaded) OpenMPI 1.3.2 and
<br>
Goto BLAS 1.26, which now I see is kind of ancient
<br>
(but still seems to be the default at TACC).
<br>
I linked other programs to that Goto BLAS also.
<br>
It works fine and fast, but this doesn't help you much.
<br>
<p>Have you tried other programs linked with your current OpenMPI,
<br>
but that do not use Goto BLAS, just to ensure that the problem
<br>
is not on OpenMPI?
<br>
(Say, the basic programs in the examples directory: connectivity_c.c,
<br>
ring_c.c, hello_c.c.)
<br>
<p>Anyway, hopefully Kazuhighe Goto will find out what is going on.
<br>
Good luck!
<br>
<p>Gus Correa
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
<p><p><span class="quotelev1">&gt;  From what I can tell from stepping through the debugger the problem 
</span><br>
<span class="quotelev1">&gt; happens in btl_openib_component_init:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #0  btl_openib_component_init (num_btl_modules=0x7fff7a8593e8, 
</span><br>
<span class="quotelev1">&gt; enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/btl/openib/btl_openib_component.c:2099 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #1  0x00002b9eb6f65679 in mca_btl_base_select 
</span><br>
<span class="quotelev1">&gt; (enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/btl/base/btl_base_select.c:110
</span><br>
<span class="quotelev1">&gt; #2  0x00002aaad007d933 in mca_bml_r2_component_init 
</span><br>
<span class="quotelev1">&gt; (priority=0x7fff7a8594b4, enable_progress_threads=false, 
</span><br>
<span class="quotelev1">&gt; enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at /home/kraused/ompi/openmpi-1.4/ompi/mca/bml/r2/bml_r2_component.c:86
</span><br>
<span class="quotelev1">&gt; #3  0x00002b9eb6f64a80 in mca_bml_base_init 
</span><br>
<span class="quotelev1">&gt; (enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at /home/kraused/ompi/openmpi-1.4/ompi/mca/bml/base/bml_base_init.c:69
</span><br>
<span class="quotelev1">&gt; #4  0x00002aaacfc5580a in mca_pml_ob1_component_init 
</span><br>
<span class="quotelev1">&gt; (priority=0x7fff7a8595d0, enable_progress_threads=false, 
</span><br>
<span class="quotelev1">&gt; enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/pml/ob1/pml_ob1_component.c:168
</span><br>
<span class="quotelev1">&gt; #5  0x00002b9eb6f787a4 in mca_pml_base_select 
</span><br>
<span class="quotelev1">&gt; (enable_progress_threads=false, enable_mpi_threads=false)
</span><br>
<span class="quotelev1">&gt;     at 
</span><br>
<span class="quotelev1">&gt; /home/kraused/ompi/openmpi-1.4/ompi/mca/pml/base/pml_base_select.c:126
</span><br>
<span class="quotelev1">&gt; #6  0x00002b9eb6ef4989 in ompi_mpi_init (argc=1, argv=0x7fff7a859af8, 
</span><br>
<span class="quotelev1">&gt; requested=0, provided=0x7fff7a859858)
</span><br>
<span class="quotelev1">&gt;     at /home/kraused/ompi/openmpi-1.4/ompi/runtime/ompi_mpi_init.c:534
</span><br>
<span class="quotelev1">&gt; #7  0x00002b9eb6f33bb2 in PMPI_Init (argc=0x7fff7a8598cc, 
</span><br>
<span class="quotelev1">&gt; argv=0x7fff7a8598c0) at 
</span><br>
<span class="quotelev1">&gt; /home/kraused/ompi/openmpi-1.4/ompi/mpi/c/profile/pinit.c:80
</span><br>
<span class="quotelev1">&gt; #8  0x00000000004007e6 in main (argc=1, argv=0x7fff7a859af8) at 
</span><br>
<span class="quotelev1">&gt; /home/kraused/blas.c:20
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I set a breakpoint in btl_openib_component_init and continue from 
</span><br>
<span class="quotelev1">&gt; there I get a SIGILL but the backtrace is meaningless to me:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Program received signal SIGILL, Illegal instruction.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 0x40901940 (LWP 21183)]
</span><br>
<span class="quotelev1">&gt; 0x00007fff23b2a7c0 in ?? ()
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007fff23b2a7c0 in ?? ()
</span><br>
<span class="quotelev1">&gt; #1  0x0000003df9c06307 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x0000003df90d1ded in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The bad thing is: If I step through btl_openib_component_init right 
</span><br>
<span class="quotelev1">&gt; after the call to ompi_btl_openib_fd_init and continue from there the 
</span><br>
<span class="quotelev1">&gt; program finishes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More precisely: stepping beyond the pthread_create call at line 537 in 
</span><br>
<span class="quotelev1">&gt; btl_openib_fd.c and afterwards I can continue.
</span><br>
<span class="quotelev1">&gt; I conjecture that gdb influences the threading here and therefore the 
</span><br>
<span class="quotelev1">&gt; problem doesn't show up?!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm interested in digging further but I need some advices/hints where to 
</span><br>
<span class="quotelev1">&gt; go from here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/19/10 1:29 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you get a core dump, or otherwise see exactly where the seg fault 
</span><br>
<span class="quotelev2">&gt;&gt; is occurring?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 18, 2010, at 8:34 AM, Dorian Krause wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Eloi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Does the segmentation faults you're facing also happen in a sequential
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; environment (i.e. not linked against openmpi libraries) ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No, without MPI everything works fine. Also, linking against mvapich
</span><br>
<span class="quotelev3">&gt;&gt;&gt; doesn't give any errors. I think there is a problem with GotoBLAS and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the shared library infrastructure of OpenMPI. The code doesn't come to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the point to execute the gemm operation at all.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Have you already informed Kazushige Goto (developer of Gotoblas) ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Not yet. Since the problem only happens with openmpi and the BLAS
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (stand-alone) seems to work, I thought the openmpi mailing list would be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the better place to discuss this (to get a grasp of what the error could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be before going to the GotoBLAS mailing list).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Eloi
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PS: Could you post your Makefile.rule here so that we could check the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; different compilation options chosen ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I didn't make any changes to the Makefile.rules. This is the content of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Makefile.conf:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OSNAME=Linux
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ARCH=x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C_COMPILER=GCC
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BINARY32=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BINARY64=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; F_COMPILER=GFORTRAN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC=gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; BU=_
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FEXTRALIB=-L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/usr/lib/gcc/x86_64-redhat-linux/4.1.2/../../../../lib64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -L/lib/../lib64 -L/usr/lib/../lib64  -lgfortran -lm -lgfortran -lm -lc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CORE=BARCELONA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LIBCORE=barcelona
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NUM_CORES=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HAVE_MMX=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HAVE_SSE=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HAVE_SSE2=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HAVE_SSE3=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HAVE_SSE4A=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HAVE_3DNOWEX=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HAVE_3DNOW=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MAKE += -j 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGEMM_UNROLL_M=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; SGEMM_UNROLL_N=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DGEMM_UNROLL_M=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; DGEMM_UNROLL_N=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QGEMM_UNROLL_M=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QGEMM_UNROLL_N=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CGEMM_UNROLL_M=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CGEMM_UNROLL_N=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ZGEMM_UNROLL_M=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ZGEMM_UNROLL_N=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XGEMM_UNROLL_M=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; XGEMM_UNROLL_N=1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dorian
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;        
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11831.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11829.php">Matthias Jurenz: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="11827.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11831.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11831.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
