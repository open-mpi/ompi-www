<?
$subject_val = "[OMPI devel] MPI_Type_create_hindexed_block() segfaults";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 21 07:56:39 2014" -->
<!-- isoreceived="20140421115639" -->
<!-- sent="Mon, 21 Apr 2014 14:56:09 +0300" -->
<!-- isosent="20140421115609" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Type_create_hindexed_block() segfaults" -->
<!-- id="CAEcYPwBww6mVvdAFYUdF0V0hzQarx8Ef5jCOYRfd8NTxGPKwuQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Type_create_hindexed_block() segfaults<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-21 07:56:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14564.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Add_error_class()"</a>
<li><strong>Previous message:</strong> <a href="14562.php">Lisandro Dalcin: "[OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14567.php">George Bosilca: "Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<li><strong>Reply:</strong> <a href="14567.php">George Bosilca: "Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the problem is in the following source code line
<br>
(file:ompi_datatype_args.c, line:221):
<br>
<p><a href="https://bitbucket.org/ompiteam/ompi-svn-mirror/src/v1.8/ompi/datatype/ompi_datatype_args.c?at=v1.8#cl-221">https://bitbucket.org/ompiteam/ompi-svn-mirror/src/v1.8/ompi/datatype/ompi_datatype_args.c?at=v1.8#cl-221</a>
<br>
<p>I think you should just remove that bogus line, and that's all.
<br>
<p><p>[dalcinl_at_kw2060 openmpi]$ cat type_hindexed_block.c
<br>
#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;MPI_Aint disps[] = {0};
<br>
&nbsp;&nbsp;MPI_Datatype datatype;
<br>
&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;MPI_Type_create_hindexed_block(1, 1, disps, MPI_BYTE, &amp;datatype);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;return 0;
<br>
}
<br>
[dalcinl_at_kw2060 openmpi]$ mpicc type_hindexed_block.c
<br>
[dalcinl_at_kw2060 openmpi]$ ./a.out
<br>
[kw2060:20304] *** Process received signal ***
<br>
[kw2060:20304] Signal: Segmentation fault (11)
<br>
[kw2060:20304] Signal code: Address not mapped (1)
<br>
[kw2060:20304] Failing at address: 0x6a
<br>
[kw2060:20304] [ 0] /lib64/libpthread.so.0[0x327c40f750]
<br>
[kw2060:20304] [ 1] /lib64/libc.so.6[0x327bc94126]
<br>
[kw2060:20304] [ 2]
<br>
/home/devel/mpi/openmpi/1.8.0/lib/libmpi.so.1(ompi_datatype_set_args+0x7f1)[0x7f8f0158b62a]
<br>
[kw2060:20304] [ 3]
<br>
/home/devel/mpi/openmpi/1.8.0/lib/libmpi.so.1(MPI_Type_create_hindexed_block+0x24d)[0x7f8f015cedc8]
<br>
[kw2060:20304] [ 4] ./a.out[0x40080c]
<br>
[kw2060:20304] [ 5] /lib64/libc.so.6(__libc_start_main+0xf5)[0x327bc21d65]
<br>
[kw2060:20304] [ 6] ./a.out[0x4006f9]
<br>
[kw2060:20304] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
<p><pre>
-- 
Lisandro Dalcin
---------------
CIMEC (UNL/CONICET)
Predio CONICET-Santa Fe
Colectora RN 168 Km 472, Paraje El Pozo
3000 Santa Fe, Argentina
Tel: +54-342-4511594 (ext 1016)
Tel/Fax: +54-342-4511169
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14564.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Add_error_class()"</a>
<li><strong>Previous message:</strong> <a href="14562.php">Lisandro Dalcin: "[OMPI devel] Win_fence() with assertion=MPI_MODE_NOPRECEDE|MPI_MODE_NOSUCCEED"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14567.php">George Bosilca: "Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
<li><strong>Reply:</strong> <a href="14567.php">George Bosilca: "Re: [OMPI devel] MPI_Type_create_hindexed_block() segfaults"</a>
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
