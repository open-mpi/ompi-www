<?
$subject_val = "[OMPI users] segfault when combining OpenMPI and GotoBLAS2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 18 06:17:02 2010" -->
<!-- isoreceived="20100118111702" -->
<!-- sent="Mon, 18 Jan 2010 12:16:56 +0100" -->
<!-- isosent="20100118111656" -->
<!-- name="Dorian Krause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="[OMPI users] segfault when combining OpenMPI and GotoBLAS2" -->
<!-- id="4B544328.8050908_at_web.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] segfault when combining OpenMPI and GotoBLAS2<br>
<strong>From:</strong> Dorian Krause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-18 06:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>has any one successfully combined OpenMPI and GotoBLAS2? I'm facing 
<br>
segfaults in any program which combines the two libraries (as shared 
<br>
libs). The segmentation fault seems to occur in MPI_Init(). The gdb 
<br>
backtrace is
<br>
<p>Program received signal SIGSEGV, Segmentation fault.
<br>
[Switching to Thread 0x424fb940 (LWP 9155)]
<br>
0x00002b2956ca9900 in opal_list_t_class () from 
<br>
/share/apps/openmpi/1.3.2/gcc-4.1.2/lib/libopen-pal.so.0
<br>
(gdb) bt
<br>
#0  0x00002b2956ca9900 in opal_list_t_class () from 
<br>
/share/apps/openmpi/1.3.2/gcc-4.1.2/lib/libopen-pal.so.0
<br>
#1  0x0000003df9c06307 in start_thread () from /lib64/libpthread.so.0
<br>
#2  0x0000003df90d1ded in clone () from /lib64/libc.so.6
<br>
#3  0x0000000000000000 in ?? ()
<br>
<p>(For sake of completeness I have attached the test-program, you need to 
<br>
compile it with -DSIZEOF_SCAL_T=8, e.g.
<br>
mpicc -DSIZEOF_SCAL_T=8 -o blas blas.c -L$GOTO2_LIB -lgoto2 -lgfortran).
<br>
<p>I'm working on a Opteron x86_64 system running CentOs 5.2 . GotoBLAS2 V. 
<br>
1.10 was compiled with gcc-4.1.2. This problem applies to OpenMPI 1.3.2 
<br>
and OpenMPI 1.4.0 alike (both compiled with gcc-4.1.2).
<br>
<p>I could post the `ompi_info --all` if anyone is interested but I think 
<br>
both installations are quiet standard (openib, romio).
<br>
<p>Thanks,
<br>
Dorian
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11805/blas.c">blas.c</a>
</ul>
<!-- attachment="blas.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Previous message:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
<li><strong>Reply:</strong> <a href="11806.php">Eloi Gaudry: "Re: [OMPI users] segfault when combining OpenMPI and GotoBLAS2"</a>
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
