<?
$subject_val = "[OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 15 19:42:33 2013" -->
<!-- isoreceived="20130515234233" -->
<!-- sent="Thu, 16 May 2013 01:42:48 +0200" -->
<!-- isosent="20130515234248" -->
<!-- name="H Hogreve" -->
<!-- email="hogreve_at_[hidden]" -->
<!-- subject="[OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers" -->
<!-- id="004401ce51c5$ea6444d0$f000a8c0_at_ifisr11al7dp30" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers<br>
<strong>From:</strong> H Hogreve (<em>hogreve_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-15 19:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21906.php">Hayato KUNIIE: "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21909.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>Reply:</strong> <a href="21909.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
&nbsp;Dear mpi team / users:
<br>
&nbsp;
<br>
&nbsp;To get a mpi with 64-bit integers (linux system:
<br>
&nbsp;ubuntu 12.04) I invoked the following
<br>
&nbsp;configuration options:
<br>
&nbsp;
<br>
&nbsp;./configure --prefix=/opt/openmpi CXX=icpc CC=icc F77=ifort FC=ifort
<br>
&nbsp;FFLAGS=-i8 FCFLAGS=-i8
<br>
&nbsp;
<br>
&nbsp;The subsequent make/install scripts apparently
<br>
&nbsp;went through smoothly, but when I check
<br>
&nbsp;
<br>
&nbsp;ompi_info -a | grep 'Fort integer size'
<br>
&nbsp;
<br>
&nbsp;the result reads:
<br>
&nbsp;
<br>
&nbsp;Fort integer size: 4
<br>
&nbsp;
<br>
&nbsp;What went awry?
<br>
&nbsp;For all hints and suggestions many thanks in advance,
<br>
&nbsp;Hans H.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21908.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<li><strong>Previous message:</strong> <a href="21906.php">Hayato KUNIIE: "Re: [OMPI users] MPI_SUM is not defined on the MPI_INTEGER datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21909.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
<li><strong>Reply:</strong> <a href="21909.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Subject: Building openmpi-1.6.4 with 64-bit integers"</a>
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
