<?
$subject_val = "[OMPI users] need help with a code segment";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 16:18:42 2009" -->
<!-- isoreceived="20090811201842" -->
<!-- sent="Tue, 11 Aug 2009 13:18:36 -0700" -->
<!-- isosent="20090811201836" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="[OMPI users] need help with a code segment" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F206BCE96E_at_XCH-SW-1V1.sw.nos.boeing.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] need help with a code segment<br>
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 16:18:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10308.php">Jeff Squyres: "Re: [OMPI users] need help with a code segment"</a>
<li><strong>Previous message:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10308.php">Jeff Squyres: "Re: [OMPI users] need help with a code segment"</a>
<li><strong>Reply:</strong> <a href="10308.php">Jeff Squyres: "Re: [OMPI users] need help with a code segment"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to build a code with OPENMPI 1.3.3 that compiles with
<br>
LAM/MPI.
<br>
<p>It is using mpicc and here is the code segment and error :
<br>
<p>void drt_pll_init(int my_rank,int num_processors);
<br>
#ifdef DRT_USE_MPI
<br>
#include &lt;mpi.h&gt;
<br>
MPI_Comm drt_pll_mpi_split_comm_world(int key);
<br>
#else
<br>
int drt_pll_mpi_split_comm_world(int key);
<br>
#endif
<br>
<p>/fltapps/boeing/cfd/mpi/openmpi1.3.3_intel91_64/bin/mpicc
<br>
-I/fltapps/boeing/cf
<br>
mpi/openmpi1.3.3_intel91_64/include -DDRT_PARALLEL -DDRT_USE_MPI
<br>
-DPRECISION=2
<br>
-O -I../../P3Dlib/src -I/include  -I/fltusr/borensbs/local/include
<br>
-DOMPI_MPI_
<br>
&nbsp;&nbsp;&nbsp;-c -o drt_dv_app.o drt_dv_app.c
<br>
drt_Lib.h(336): error: identifier &quot;MPI_Comm&quot; is undefined
<br>
&nbsp;&nbsp;MPI_Comm drt_pll_mpi_split_comm_world(int key);
<br>
&nbsp;&nbsp;^
<br>
<p>compilation aborted for drt_dv_app.c (code 2)
<br>
make[1]: *** [drt_dv_app.o] Error 2
<br>
<p>Hope someone can help
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p><p>&nbsp;
<br>
<p>__________ Information from ESET NOD32 Antivirus, version of virus
<br>
signature database 4326 (20090811) __________
<br>
<p>The message was checked by ESET NOD32 Antivirus.
<br>
<p><a href="http://www.eset.com">http://www.eset.com</a>
<br>
&nbsp;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10307/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10308.php">Jeff Squyres: "Re: [OMPI users] need help with a code segment"</a>
<li><strong>Previous message:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10308.php">Jeff Squyres: "Re: [OMPI users] need help with a code segment"</a>
<li><strong>Reply:</strong> <a href="10308.php">Jeff Squyres: "Re: [OMPI users] need help with a code segment"</a>
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
