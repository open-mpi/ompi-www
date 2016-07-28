<?
$subject_val = "[OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 30 18:05:15 2015" -->
<!-- isoreceived="20150630220515" -->
<!-- sent="Tue, 30 Jun 2015 22:05:10 +0000" -->
<!-- isosent="20150630220510" -->
<!-- name="Steven Eliuk" -->
<!-- email="s.eliuk_at_[hidden]" -->
<!-- subject="[OMPI users] 1.8.6 w/ CUDA 7.0 &amp;amp; GDR Huge Memory Leak" -->
<!-- id="D1B860A4.25112%s.eliuk_at_samsung.com" -->
<!-- charset="Windows-1252" -->
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
<strong>Subject:</strong> [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak<br>
<strong>From:</strong> Steven Eliuk (<em>s.eliuk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-30 18:05:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27232.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Previous message:</strong> <a href="27230.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Reply:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>Looks like we have found a large memory leak,
<br>
<p>Very difficult to share code on this but here are some details,
<br>
<p>1.8.5 w/ Cuda 7.0 &#151; no memory leak
<br>
1.8.5 w/ cuda 6.5 &#151; no memory leak
<br>
1.8.6 w/ cuda 7.0 &#151; large memory leak
<br>
1.8.5 w/ cuda 6.5 &#151; no memory leak
<br>
mvapich2 2.1 GDR &#151; no issue on either flavor of CUDA.
<br>
<p>We have a relatively basic program that reproduces the error and have even narrowed it back to a single machine w/ multiple gpus and only two slaves. Looks like something in the IPC within a single node,
<br>
<p>We don&#146;t have many free cycles at the moment but less us know if we can help w/ something basic,
<br>
<p>Heres our config flag for 1.8.5,
<br>
<p>./configure FC=gfortran --without-mx --with-openib=/usr --with-openib-libdir=/usr/lib64/ --enable-openib-rdmacm --without-psm --with-cuda=/cm/shared/apps/cuda70/toolkit/current --prefix=/cm/shared/OpenMPI_1_8_5_CUDA70
<br>
<p>Kindest Regards,
<br>
&#151;
<br>
Steven Eliuk, Ph.D. Comp Sci,
<br>
Project Lead,
<br>
Computing Science Innovation Center,
<br>
SRA - SV,
<br>
Samsung Electronics,
<br>
665 Clyde Avenue,
<br>
Mountain View, CA 94043,
<br>
Work: +1 650-623-2986,
<br>
Cell: +1 408-819-4407.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27231/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27232.php">George Bosilca: "Re: [OMPI users] Allgather Implementation Details"</a>
<li><strong>Previous message:</strong> <a href="27230.php">Nick Radcliffe: "Re: [OMPI users] Running with native ugni on a Cray XC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Reply:</strong> <a href="27234.php">Rolf vandeVaart: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/07/27238.php">Stefan Paquay: "Re: [OMPI users] 1.8.6 w/ CUDA 7.0 &amp; GDR Huge Memory Leak"</a>
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
