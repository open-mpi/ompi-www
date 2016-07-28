<?
$subject_val = "Re: [OMPI users] OpenMP + OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 09:47:32 2008" -->
<!-- isoreceived="20080129144732" -->
<!-- sent="Tue, 29 Jan 2008 15:47:27 +0100" -->
<!-- isosent="20080129144727" -->
<!-- name="Stephen Wornom" -->
<!-- email="stephen.wornom_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMP + OMPI" -->
<!-- id="479F3C7F.4020005_at_sophia.inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA134252-A61D-401F-879D-5C5998F548B5_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMP + OMPI<br>
<strong>From:</strong> Stephen Wornom (<em>stephen.wornom_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 09:47:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4903.php">Wong, Wayne: "Re: [OMPI users] Trouble with fault tolerance checkpointing"</a>
<li><strong>Previous message:</strong> <a href="4901.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4907.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Reply:</strong> <a href="4907.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Both cases should work just fine. In fact as long as there is only one 
</span><br>
<span class="quotelev1">&gt; execution flow using MPI functions, the user will not face any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I compiled my mpi fortran code using the  -mp option to verify that the 
<br>
mpi code would still run. I get this message when I run the code on the 
<br>
sophia helios grid5000 cluster.
<br>
mpirun.openmpi noticed that job rank 0 with PID 4061 on node 
<br>
helios-46.sophia.grid5000.fr exited on signal 15 (Terminated).
<br>
<p>Any ideas as to what may be the problem?
<br>
Stephen
<br>
p.s.
<br>
I had added OMP directives to the code before simply verifying that the 
<br>
-mp option would work in the absense of OMP directives.
<br>
<p>These are my compile options:
<br>
FCPATH  = /opt/openmpi/1.2.4/bin
<br>
<p>LDLIBS   = -lmpi
<br>
<p>FC       = ${FCPATH}/mpif90
<br>
CC       = ${FCPATH}/mpicc
<br>
<p>FFLAGS     =-mp -pg -fast -Mvect -Mdalign -mcmodel=medium -Mextend -r8 
<br>
-pc 64 -Mextend
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4903.php">Wong, Wayne: "Re: [OMPI users] Trouble with fault tolerance checkpointing"</a>
<li><strong>Previous message:</strong> <a href="4901.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>In reply to:</strong> <a href="4822.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4907.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
<li><strong>Reply:</strong> <a href="4907.php">George Bosilca: "Re: [OMPI users] OpenMP + OMPI"</a>
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
