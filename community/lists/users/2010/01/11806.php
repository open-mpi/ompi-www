<?
$subject_val = "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 18 06:30:16 2010" -->
<!-- isoreceived="20100118113016" -->
<!-- sent="Mon, 18 Jan 2010 12:30:10 +0100" -->
<!-- isosent="20100118113010" -->
<!-- name="Eloi Gaudry" -->
<!-- email="eg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="4B544642.9040203_at_fft.be" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4B544328.8050908_at_web.de" -->
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
<strong>Date:</strong> 2010-01-18 06:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11805.php">Dorian Krause: "[OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11805.php">Dorian Krause: "[OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dorian Krause wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; has any one successfully combined OpenMPI and GotoBLAS2? I'm facing 
</span><br>
<span class="quotelev1">&gt; segfaults in any program which combines the two libraries (as shared 
</span><br>
<span class="quotelev1">&gt; libs). The segmentation fault seems to occur in MPI_Init(). The gdb 
</span><br>
<span class="quotelev1">&gt; backtrace is
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 0x424fb940 (LWP 9155)]
</span><br>
<span class="quotelev1">&gt; 0x00002b2956ca9900 in opal_list_t_class () from 
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi/1.3.2/gcc-4.1.2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00002b2956ca9900 in opal_list_t_class () from 
</span><br>
<span class="quotelev1">&gt; /share/apps/openmpi/1.3.2/gcc-4.1.2/lib/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x0000003df9c06307 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #2  0x0000003df90d1ded in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #3  0x0000000000000000 in ?? ()
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (For sake of completeness I have attached the test-program, you need 
</span><br>
<span class="quotelev1">&gt; to compile it with -DSIZEOF_SCAL_T=8, e.g.
</span><br>
<span class="quotelev1">&gt; mpicc -DSIZEOF_SCAL_T=8 -o blas blas.c -L$GOTO2_LIB -lgoto2 -lgfortran).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm working on a Opteron x86_64 system running CentOs 5.2 . GotoBLAS2 
</span><br>
<span class="quotelev1">&gt; V. 1.10 was compiled with gcc-4.1.2. This problem applies to OpenMPI 
</span><br>
<span class="quotelev1">&gt; 1.3.2 and OpenMPI 1.4.0 alike (both compiled with gcc-4.1.2).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could post the `ompi_info --all` if anyone is interested but I think 
</span><br>
<span class="quotelev1">&gt; both installations are quiet standard (openib, romio).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Dorian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
Dorian,
<br>
<p>Does the segmentation faults you're facing also happen in a sequential 
<br>
environment (i.e. not linked against openmpi libraries) ?
<br>
Have you already informed Kazushige Goto (developer of Gotoblas) ?
<br>
<p>Regards,
<br>
Eloi
<br>
<p>PS: Could you post your Makefile.rule here so that we could check the 
<br>
different compilation options chosen ?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11805.php">Dorian Krause: "[OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>In reply to:</strong> <a href="11805.php">Dorian Krause: "[OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11807.php">Dorian Krause: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
