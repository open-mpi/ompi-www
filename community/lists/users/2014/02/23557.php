<?
$subject_val = "[OMPI users] GNU 4.8.x and (no) mpi_f08 module";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  6 04:09:26 2014" -->
<!-- isoreceived="20140206090926" -->
<!-- sent="Thu, 6 Feb 2014 10:09:07 +0100 (CET)" -->
<!-- isosent="20140206090907" -->
<!-- name="Christoph Niethammer" -->
<!-- email="niethammer_at_[hidden]" -->
<!-- subject="[OMPI users] GNU 4.8.x and (no) mpi_f08 module" -->
<!-- id="1748752944.60365.1391677747646.JavaMail.root_at_hlrs.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="758377921.60029.1391677019481.JavaMail.root_at_hlrs.de" -->
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
<strong>Subject:</strong> [OMPI users] GNU 4.8.x and (no) mpi_f08 module<br>
<strong>From:</strong> Christoph Niethammer (<em>niethammer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-06 04:09:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<li><strong>Previous message:</strong> <a href="23556.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<li><strong>Reply:</strong> <a href="23558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am wondering if it is possible to get a working mpi_f08 module with Open MPI &gt;=1.7.4 and GNU 4.8.x compiler.
<br>
Unfortunately configure (without additional options beside --prefix) decides to not build the mpi_f08 module:
<br>
<p>configure:56605: checking if building Fortran 'use mpi' bindings
<br>
configure:56608: result: yes
<br>
configure:57983: checking if building Fortran 'use mpi_f08' bindings
<br>
configure:57990: result: no
<br>
<p>With Intel 14 the mpi_f08 module is build correctly.
<br>
Any ideas where the problem could come from and how to solve it?
<br>
<p>Best regards
<br>
Christoph Niethammer
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<li><strong>Previous message:</strong> <a href="23556.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
<li><strong>Reply:</strong> <a href="23558.php">Jeff Squyres (jsquyres): "Re: [OMPI users] GNU 4.8.x and (no) mpi_f08 module"</a>
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
