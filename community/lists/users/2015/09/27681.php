<?
$subject_val = "[OMPI users] Problem using mpifort(Intel)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 25 13:36:30 2015" -->
<!-- isoreceived="20150925173630" -->
<!-- sent="Fri, 25 Sep 2015 19:36:28 +0200" -->
<!-- isosent="20150925173628" -->
<!-- name="Julien Bodart" -->
<!-- email="julien.bodart_at_[hidden]" -->
<!-- subject="[OMPI users] Problem using mpifort(Intel)" -->
<!-- id="CACWXmz6rdWZVJV3x3_qn5Zzu2rd8fFUqTgL9=UeVU5mRHdUDVg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Problem using mpifort(Intel)<br>
<strong>From:</strong> Julien Bodart (<em>julien.bodart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-25 13:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27682.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Previous message:</strong> <a href="27680.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27682.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Reply:</strong> <a href="27682.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27757.php">Julien Bodart: "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>This problem has probably been discussed already but I could not find it:
<br>
<p>I a m trying to compile openmpi with intel-16 compilers mpicc,mpicxx
<br>
work, but I have trouble with mpifort:
<br>
<p>Trying to compile one of example programs I get the following error message:
<br>
<p>ring_usempi.f90(35): error #6285: There is no matching specific
<br>
subroutine for this generic subroutine call.   [MPI_SEND]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;call MPI_SEND(message, 1, MPI_INTEGER, next, tag, MPI_COMM_WORLD,
<br>
ierr)
<br>
-----------^
<br>
<p>wether I use openmpi 1.8 or openmpi 1.10
<br>
<p>I cannot find the right configure options to get the correct fortran
<br>
bindings.
<br>
<p>Thanks for your help
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27681/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27682.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Previous message:</strong> <a href="27680.php">Rolf vandeVaart: "Re: [OMPI users] How does MPI_Allreduce work?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27682.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Reply:</strong> <a href="27682.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Problem using mpifort(Intel)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27757.php">Julien Bodart: "Re: [OMPI users] Problem using mpifort(Intel)"</a>
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
