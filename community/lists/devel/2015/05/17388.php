<?
$subject_val = "[OMPI devel] Warnings about malloc(0) in debug build";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  7 04:47:28 2015" -->
<!-- isoreceived="20150507084728" -->
<!-- sent="Thu, 7 May 2015 11:47:06 +0300" -->
<!-- isosent="20150507084706" -->
<!-- name="Lisandro Dalcin" -->
<!-- email="dalcinl_at_[hidden]" -->
<!-- subject="[OMPI devel] Warnings about malloc(0) in debug build" -->
<!-- id="CAEcYPwB2uk4LEzXh2qgm1gPCeDaba+ihqvK5Ep3KBZchzcXWmw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Warnings about malloc(0) in debug build<br>
<strong>From:</strong> Lisandro Dalcin (<em>dalcinl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-07 04:47:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17389.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<li><strong>Previous message:</strong> <a href="17387.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17400.php">Ralph Castain: "Re: [OMPI devel] Warnings about malloc(0) in debug build"</a>
<li><strong>Reply:</strong> <a href="17400.php">Ralph Castain: "Re: [OMPI devel] Warnings about malloc(0) in debug build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks, I've just built 1.8.5 to test with mpi4py. My configure line was:
<br>
<p>$ ./configure --prefix=/home/devel/mpi/openmpi/1.8.5 --enable-debug
<br>
--enable-mem-debug
<br>
<p>While running the tests, my terminal was flooded with malloc(0)
<br>
warnings, below a list of unique lines.
<br>
<p>malloc debug: Request for 0 bytes (coll_libnbc_ireduce_scatter_block.c, 67)
<br>
malloc debug: Request for 0 bytes (nbc_internal.h, 505)
<br>
malloc debug: Request for 0 bytes (osc_rdma_active_target.c, 74)
<br>
malloc debug: Request for 0 bytes (osc_rdma_active_target.c, 76)
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
<li><strong>Next message:</strong> <a href="17389.php">Lisandro Dalcin: "[OMPI devel] Issues with MPI_Type_create_f90_{real|complex}"</a>
<li><strong>Previous message:</strong> <a href="17387.php">Edgar Gabriel: "Re: [OMPI devel] 1.8.5 release"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17400.php">Ralph Castain: "Re: [OMPI devel] Warnings about malloc(0) in debug build"</a>
<li><strong>Reply:</strong> <a href="17400.php">Ralph Castain: "Re: [OMPI devel] Warnings about malloc(0) in debug build"</a>
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
