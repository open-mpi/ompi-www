<?
$subject_val = "[OMPI users] is loop unrolling safe for MPI logic?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 17 04:23:02 2010" -->
<!-- isoreceived="20100717082302" -->
<!-- sent="Sat, 17 Jul 2010 09:22:57 +0100" -->
<!-- isosent="20100717082257" -->
<!-- name="Anton Shterenlikht" -->
<!-- email="mexas_at_[hidden]" -->
<!-- subject="[OMPI users] is loop unrolling safe for MPI logic?" -->
<!-- id="20100717082257.GA50750_at_mech-cluster241.men.bris.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C40CD35.7020003_at_ias.edu" -->
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
<strong>Subject:</strong> [OMPI users] is loop unrolling safe for MPI logic?<br>
<strong>From:</strong> Anton Shterenlikht (<em>mexas_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-17 04:22:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using mpif90 with Intel 10 fortran complier:
<br>
<p>% mpif90 -compile_info 
<br>
ifort -I/usr/mpi/qlogic//include/mpich/intel10/x86_64 -c -I/usr/mpi/qlogic//include
<br>
<p>If I don't specify any compiler options, the
<br>
compiler vectorises some loops:
<br>
<p>% mpif90 p-grains1.f90 
<br>
p-grains1.f90(123): (col. 1) remark: LOOP WAS VECTORIZED.
<br>
p-grains1.f90(250): (col. 35) remark: LOOP WAS VECTORIZED.
<br>
<p>Is loop vectorisation/unrolling safe for MPI logic?
<br>
I presume it is, but are there situations where
<br>
loop vectorisation could e.g. violate the order
<br>
of execution of MPI calls?
<br>
<p>many thanks
<br>
anton
<br>
<p><p><pre>
-- 
Anton Shterenlikht
Room 2.6, Queen's Building
Mech Eng Dept
Bristol University
University Walk, Bristol BS8 1TR, UK
Tel: +44 (0)117 331 5944
Fax: +44 (0)117 929 4423
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13680.php">Jeff Squyres: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="13671.php">Prentice Bisbal: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
<li><strong>Reply:</strong> <a href="13681.php">Jeff Squyres: "Re: [OMPI users] is loop unrolling safe for MPI logic?"</a>
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
