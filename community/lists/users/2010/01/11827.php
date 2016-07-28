<?
$subject_val = "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 20:39:08 2010" -->
<!-- isoreceived="20100120013908" -->
<!-- sent="Wed, 20 Jan 2010 02:39:01 +0100" -->
<!-- isosent="20100120013901" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="4B565EB5.3030905_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E0BA7C80-FC3B-4EFD-AC98-9DBF6E0AADD1_at_cisco.com" -->
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
<strong>Date:</strong> 2010-01-19 20:39:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11828.php">Dave Love: "[OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11826.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>In reply to:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>@Gus I don't use any flags for the installed OpenMPI version. In fact 
<br>
for this mail I used an OpenMPI version just installed with the 
<br>
--enable-debug flag.
<br>
<p>&nbsp;From what I can tell from stepping through the debugger the problem 
<br>
happens in btl_openib_component_init:
<br>
<p>#0  btl_openib_component_init (num_btl_modules=0x7fff7a8593e8, 
<br>
enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
/home/kraused/ompi/openmpi-1.4/ompi/mca/btl/openib/btl_openib_component.c:2099
<br>
#1  0x00002b9eb6f65679 in mca_btl_base_select 
<br>
(enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
/home/kraused/ompi/openmpi-1.4/ompi/mca/btl/base/btl_base_select.c:110
<br>
#2  0x00002aaad007d933 in mca_bml_r2_component_init 
<br>
(priority=0x7fff7a8594b4, enable_progress_threads=false, 
<br>
enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at /home/kraused/ompi/openmpi-1.4/ompi/mca/bml/r2/bml_r2_component.c:86
<br>
#3  0x00002b9eb6f64a80 in mca_bml_base_init 
<br>
(enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at /home/kraused/ompi/openmpi-1.4/ompi/mca/bml/base/bml_base_init.c:69
<br>
#4  0x00002aaacfc5580a in mca_pml_ob1_component_init 
<br>
(priority=0x7fff7a8595d0, enable_progress_threads=false, 
<br>
enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
/home/kraused/ompi/openmpi-1.4/ompi/mca/pml/ob1/pml_ob1_component.c:168
<br>
#5  0x00002b9eb6f787a4 in mca_pml_base_select 
<br>
(enable_progress_threads=false, enable_mpi_threads=false)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at 
<br>
/home/kraused/ompi/openmpi-1.4/ompi/mca/pml/base/pml_base_select.c:126
<br>
#6  0x00002b9eb6ef4989 in ompi_mpi_init (argc=1, argv=0x7fff7a859af8, 
<br>
requested=0, provided=0x7fff7a859858)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at /home/kraused/ompi/openmpi-1.4/ompi/runtime/ompi_mpi_init.c:534
<br>
#7  0x00002b9eb6f33bb2 in PMPI_Init (argc=0x7fff7a8598cc, 
<br>
argv=0x7fff7a8598c0) at 
<br>
/home/kraused/ompi/openmpi-1.4/ompi/mpi/c/profile/pinit.c:80
<br>
#8  0x00000000004007e6 in main (argc=1, argv=0x7fff7a859af8) at 
<br>
/home/kraused/blas.c:20
<br>
<p>When I set a breakpoint in btl_openib_component_init and continue from 
<br>
there I get a SIGILL but the backtrace is meaningless to me:
<br>
<p>Program received signal SIGILL, Illegal instruction.
<br>
[Switching to Thread 0x40901940 (LWP 21183)]
<br>
0x00007fff23b2a7c0 in ?? ()
<br>
(gdb) bt
<br>
#0  0x00007fff23b2a7c0 in ?? ()
<br>
#1  0x0000003df9c06307 in start_thread () from /lib64/libpthread.so.0
<br>
#2  0x0000003df90d1ded in clone () from /lib64/libc.so.6
<br>
#3  0x0000000000000000 in ?? ()
<br>
<p><p>The bad thing is: If I step through btl_openib_component_init right 
<br>
after the call to ompi_btl_openib_fd_init and continue from there the 
<br>
program finishes.
<br>
<p>More precisely: stepping beyond the pthread_create call at line 537 in 
<br>
btl_openib_fd.c and afterwards I can continue.
<br>
I conjecture that gdb influences the threading here and therefore the 
<br>
problem doesn't show up?!
<br>
<p>I'm interested in digging further but I need some advices/hints where to 
<br>
go from here.
<br>
<p>Thanks,
<br>
Dorian
<br>
<p><p>On 1/19/10 1:29 PM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Can you get a core dump, or otherwise see exactly where the seg fault is occurring?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 18, 2010, at 8:34 AM, Dorian Krause wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; Hi Eloi,
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does the segmentation faults you're facing also happen in a sequential
</span><br>
<span class="quotelev3">&gt;&gt;&gt; environment (i.e. not linked against openmpi libraries) ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
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
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Have you already informed Kazushige Goto (developer of Gotoblas) ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; Not yet. Since the problem only happens with openmpi and the BLAS
</span><br>
<span class="quotelev2">&gt;&gt; (stand-alone) seems to work, I thought the openmpi mailing list would be
</span><br>
<span class="quotelev2">&gt;&gt; the better place to discuss this (to get a grasp of what the error could
</span><br>
<span class="quotelev2">&gt;&gt; be before going to the GotoBLAS mailing list).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
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
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; I didn't make any changes to the Makefile.rules. This is the content of
</span><br>
<span class="quotelev2">&gt;&gt; Makefile.conf:
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
<span class="quotelev2">&gt;&gt;      
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11828.php">Dave Love: "[OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11826.php">Nicolas Bock: "Re: [OMPI users] shared memory (sm) module not working properly?"</a>
<li><strong>In reply to:</strong> <a href="11823.php">Jeff Squyres: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11830.php">Gus Correa: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
