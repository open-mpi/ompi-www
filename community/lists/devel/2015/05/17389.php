<?
$subject_val = "[OMPI devel] Issues with MPI_Type_create_f90_{real|complex}";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 05:15:47 2015" -->
<!-- isoreceived="20150507091547" -->
<!-- sent="Thu, 7 May 2015 12:15:24 +0300" -->
<!-- isosent="20150507091524" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Issues with MPI_Type_create_f90_{real|complex}" -->
<!-- id="CAEcYPwDQT15FGcc-DfVCL0sAFXTBcMZSoOnyX7ycGuwAxkhiUg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-07 05:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17390.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<li><strong>Previous message:</strong> <a href="17388.php">Lisandro Dalcin: "[OMPI devel] Warnings about malloc(0) in debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17390.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<li><strong>Reply:</strong> <a href="17390.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is with a debug build of 1.8.5
<br>
<p>I'm getting segfaults with tests related to the use of
<br>
MPI_Type_create_f90_{real|complex}. See below the attached test case
<br>
and the valgrind output (BTW, MPI_Type_create_f90_integer seems to be
<br>
OK).
<br>
<p>$ cat type_f90.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Datatype datatype;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;MPI_Type_create_f90_integer(4, &amp;datatype);
<br>
<p>&nbsp;&nbsp;MPI_Type_create_f90_real( 6,  30, &amp;datatype);
<br>
&nbsp;&nbsp;MPI_Type_create_f90_real(15, 300, &amp;datatype);
<br>
<p>&nbsp;&nbsp;MPI_Type_create_f90_complex( 6,  30, &amp;datatype);
<br>
&nbsp;&nbsp;MPI_Type_create_f90_complex(15, 300, &amp;datatype);
<br>
<p>&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>$ mpicc type_f90.c
<br>
<p>$ valgrind -q ./a.out
<br>
==1025== Invalid write of size 4
<br>
==1025==    at 0x4C740BF: ompi_datatype_set_args (ompi_datatype_args.c:206)
<br>
==1025==    by 0x4CC91CE: PMPI_Type_create_f90_real
<br>
(ptype_create_f90_real.c:108)
<br>
==1025==    by 0x400878: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==1025==  Address 0x8e703cc is 0 bytes after a block of size 60 alloc'd
<br>
==1025==    at 0x4A0645D: malloc (in
<br>
/usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==1025==    by 0x53236F0: opal_malloc (malloc.c:101)
<br>
==1025==    by 0x4C739E3: ompi_datatype_set_args (ompi_datatype_args.c:121)
<br>
==1025==    by 0x4CC91CE: PMPI_Type_create_f90_real
<br>
(ptype_create_f90_real.c:108)
<br>
==1025==    by 0x400878: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==1025==
<br>
==1025== Invalid write of size 4
<br>
==1025==    at 0x4C740BF: ompi_datatype_set_args (ompi_datatype_args.c:206)
<br>
==1025==    by 0x4CC91CE: PMPI_Type_create_f90_real
<br>
(ptype_create_f90_real.c:108)
<br>
==1025==    by 0x40088E: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==1025==  Address 0x8e7073c is 0 bytes after a block of size 60 alloc'd
<br>
==1025==    at 0x4A0645D: malloc (in
<br>
/usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==1025==    by 0x53236F0: opal_malloc (malloc.c:101)
<br>
==1025==    by 0x4C739E3: ompi_datatype_set_args (ompi_datatype_args.c:121)
<br>
==1025==    by 0x4CC91CE: PMPI_Type_create_f90_real
<br>
(ptype_create_f90_real.c:108)
<br>
==1025==    by 0x40088E: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==1025==
<br>
==1025== Invalid write of size 4
<br>
==1025==    at 0x4C740BF: ompi_datatype_set_args (ompi_datatype_args.c:206)
<br>
==1025==    by 0x4CC8636: PMPI_Type_create_f90_complex
<br>
(ptype_create_f90_complex.c:110)
<br>
==1025==    by 0x4008A4: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==1025==  Address 0x8e70aac is 0 bytes after a block of size 60 alloc'd
<br>
==1025==    at 0x4A0645D: malloc (in
<br>
/usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==1025==    by 0x53236F0: opal_malloc (malloc.c:101)
<br>
==1025==    by 0x4C739E3: ompi_datatype_set_args (ompi_datatype_args.c:121)
<br>
==1025==    by 0x4CC8636: PMPI_Type_create_f90_complex
<br>
(ptype_create_f90_complex.c:110)
<br>
==1025==    by 0x4008A4: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==1025==
<br>
==1025== Invalid write of size 4
<br>
==1025==    at 0x4C740BF: ompi_datatype_set_args (ompi_datatype_args.c:206)
<br>
==1025==    by 0x4CC8636: PMPI_Type_create_f90_complex
<br>
(ptype_create_f90_complex.c:110)
<br>
==1025==    by 0x4008BA: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==1025==  Address 0x8e70e1c is 0 bytes after a block of size 60 alloc'd
<br>
==1025==    at 0x4A0645D: malloc (in
<br>
/usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
<br>
==1025==    by 0x53236F0: opal_malloc (malloc.c:101)
<br>
==1025==    by 0x4C739E3: ompi_datatype_set_args (ompi_datatype_args.c:121)
<br>
==1025==    by 0x4CC8636: PMPI_Type_create_f90_complex
<br>
(ptype_create_f90_complex.c:110)
<br>
==1025==    by 0x4008BA: main (in /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
<br>
==1025==
<br>
<p><p><pre>
-- 
Lisandro Dalcin
============
Research Scientist
Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
Numerical Porous Media Center (NumPor)
King Abdullah University of Science and Technology (KAUST)
<a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
4700 King Abdullah University of Science and Technology
al-Khawarizmi Bldg (Bldg 1), Office # 4332
Thuwal 23955-6900, Kingdom of Saudi Arabia
<a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
Office Phone: +966 12 808-0459
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17390.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<li><strong>Previous message:</strong> <a href="17388.php">Lisandro Dalcin: "[OMPI devel] Warnings about malloc(0) in debug build"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17390.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<li><strong>Reply:</strong> <a href="17390.php">George Bosilca: "Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
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
