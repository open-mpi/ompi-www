<?
$subject_val = "Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 09:51:49 2015" -->
<!-- isoreceived="20150507135149" -->
<!-- sent="Thu, 7 May 2015 09:51:47 -0400" -->
<!-- isosent="20150507135147" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}" -->
<!-- id="CAMJJpkVw__Gd-69C86t=D7uyqQj2oAOovtgFEKZQxy6fNhptsw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEcYPwDQT15FGcc-DfVCL0sAFXTBcMZSoOnyX7ycGuwAxkhiUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Issues with MPI_Type_create_f90_{real|complex}<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-07 09:51:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17391.php">Lisandro Dalcin: "[OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17389.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<li><strong>In reply to:</strong> <a href="17389.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lisandro,
<br>
<p>Indeed there was a bug regarding these 2 datatypes. A fix has been pushed
<br>
to the trunk.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;George.
<br>
<p><p>On Thu, May 7, 2015 at 5:15 AM, Lisandro Dalcin &lt;dalcinl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is with a debug build of 1.8.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting segfaults with tests related to the use of
</span><br>
<span class="quotelev1">&gt; MPI_Type_create_f90_{real|complex}. See below the attached test case
</span><br>
<span class="quotelev1">&gt; and the valgrind output (BTW, MPI_Type_create_f90_integer seems to be
</span><br>
<span class="quotelev1">&gt; OK).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat type_f90.c
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[])
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   MPI_Datatype datatype;
</span><br>
<span class="quotelev1">&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Type_create_f90_integer(4, &amp;datatype);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Type_create_f90_real( 6,  30, &amp;datatype);
</span><br>
<span class="quotelev1">&gt;   MPI_Type_create_f90_real(15, 300, &amp;datatype);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Type_create_f90_complex( 6,  30, &amp;datatype);
</span><br>
<span class="quotelev1">&gt;   MPI_Type_create_f90_complex(15, 300, &amp;datatype);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;   return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpicc type_f90.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ valgrind -q ./a.out
</span><br>
<span class="quotelev1">&gt; ==1025== Invalid write of size 4
</span><br>
<span class="quotelev1">&gt; ==1025==    at 0x4C740BF: ompi_datatype_set_args (ompi_datatype_args.c:206)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4CC91CE: PMPI_Type_create_f90_real
</span><br>
<span class="quotelev1">&gt; (ptype_create_f90_real.c:108)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x400878: main (in
</span><br>
<span class="quotelev1">&gt; /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==1025==  Address 0x8e703cc is 0 bytes after a block of size 60 alloc'd
</span><br>
<span class="quotelev1">&gt; ==1025==    at 0x4A0645D: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x53236F0: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4C739E3: ompi_datatype_set_args (ompi_datatype_args.c:121)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4CC91CE: PMPI_Type_create_f90_real
</span><br>
<span class="quotelev1">&gt; (ptype_create_f90_real.c:108)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x400878: main (in
</span><br>
<span class="quotelev1">&gt; /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==1025==
</span><br>
<span class="quotelev1">&gt; ==1025== Invalid write of size 4
</span><br>
<span class="quotelev1">&gt; ==1025==    at 0x4C740BF: ompi_datatype_set_args (ompi_datatype_args.c:206)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4CC91CE: PMPI_Type_create_f90_real
</span><br>
<span class="quotelev1">&gt; (ptype_create_f90_real.c:108)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x40088E: main (in
</span><br>
<span class="quotelev1">&gt; /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==1025==  Address 0x8e7073c is 0 bytes after a block of size 60 alloc'd
</span><br>
<span class="quotelev1">&gt; ==1025==    at 0x4A0645D: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x53236F0: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4C739E3: ompi_datatype_set_args (ompi_datatype_args.c:121)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4CC91CE: PMPI_Type_create_f90_real
</span><br>
<span class="quotelev1">&gt; (ptype_create_f90_real.c:108)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x40088E: main (in
</span><br>
<span class="quotelev1">&gt; /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==1025==
</span><br>
<span class="quotelev1">&gt; ==1025== Invalid write of size 4
</span><br>
<span class="quotelev1">&gt; ==1025==    at 0x4C740BF: ompi_datatype_set_args (ompi_datatype_args.c:206)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4CC8636: PMPI_Type_create_f90_complex
</span><br>
<span class="quotelev1">&gt; (ptype_create_f90_complex.c:110)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4008A4: main (in
</span><br>
<span class="quotelev1">&gt; /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==1025==  Address 0x8e70aac is 0 bytes after a block of size 60 alloc'd
</span><br>
<span class="quotelev1">&gt; ==1025==    at 0x4A0645D: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x53236F0: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4C739E3: ompi_datatype_set_args (ompi_datatype_args.c:121)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4CC8636: PMPI_Type_create_f90_complex
</span><br>
<span class="quotelev1">&gt; (ptype_create_f90_complex.c:110)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4008A4: main (in
</span><br>
<span class="quotelev1">&gt; /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==1025==
</span><br>
<span class="quotelev1">&gt; ==1025== Invalid write of size 4
</span><br>
<span class="quotelev1">&gt; ==1025==    at 0x4C740BF: ompi_datatype_set_args (ompi_datatype_args.c:206)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4CC8636: PMPI_Type_create_f90_complex
</span><br>
<span class="quotelev1">&gt; (ptype_create_f90_complex.c:110)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4008BA: main (in
</span><br>
<span class="quotelev1">&gt; /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==1025==  Address 0x8e70e1c is 0 bytes after a block of size 60 alloc'd
</span><br>
<span class="quotelev1">&gt; ==1025==    at 0x4A0645D: malloc (in
</span><br>
<span class="quotelev1">&gt; /usr/lib64/valgrind/vgpreload_memcheck-amd64-linux.so)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x53236F0: opal_malloc (malloc.c:101)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4C739E3: ompi_datatype_set_args (ompi_datatype_args.c:121)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4CC8636: PMPI_Type_create_f90_complex
</span><br>
<span class="quotelev1">&gt; (ptype_create_f90_complex.c:110)
</span><br>
<span class="quotelev1">&gt; ==1025==    by 0x4008BA: main (in
</span><br>
<span class="quotelev1">&gt; /home/dalcinl/Devel/BUGS-MPI/openmpi/a.out)
</span><br>
<span class="quotelev1">&gt; ==1025==
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ============
</span><br>
<span class="quotelev1">&gt; Research Scientist
</span><br>
<span class="quotelev1">&gt; Computer, Electrical and Mathematical Sciences &amp; Engineering (CEMSE)
</span><br>
<span class="quotelev1">&gt; Numerical Porous Media Center (NumPor)
</span><br>
<span class="quotelev1">&gt; King Abdullah University of Science and Technology (KAUST)
</span><br>
<span class="quotelev1">&gt; <a href="http://numpor.kaust.edu.sa/">http://numpor.kaust.edu.sa/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4700 King Abdullah University of Science and Technology
</span><br>
<span class="quotelev1">&gt; al-Khawarizmi Bldg (Bldg 1), Office # 4332
</span><br>
<span class="quotelev1">&gt; Thuwal 23955-6900, Kingdom of Saudi Arabia
</span><br>
<span class="quotelev1">&gt; <a href="http://www.kaust.edu.sa">http://www.kaust.edu.sa</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Office Phone: +966 12 808-0459
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/05/17389.php">http://www.open-mpi.org/community/lists/devel/2015/05/17389.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17390/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17391.php">Lisandro Dalcin: "[OMPI devel] Build regression: VampirTrace libraries built with debug symbols and no optimization"</a>
<li><strong>Previous message:</strong> <a href="17389.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<li><strong>In reply to:</strong> <a href="17389.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<!-- nextthread="start" -->
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
