<?
$subject_val = "[OMPI users] Changing the MPIRUN/MPIEXEC semantics";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  3 11:36:23 2009" -->
<!-- isoreceived="20090703153623" -->
<!-- sent="Fri, 03 Jul 2009 17:36:19 +0200" -->
<!-- isosent="20090703153619" -->
<!-- name="Simone Pellegrini" -->
<!-- email="spellegrini_at_[hidden]" -->
<!-- subject="[OMPI users] Changing the MPIRUN/MPIEXEC semantics" -->
<!-- id="4A4E2573.3080809_at_dps.uibk.ac.at" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Changing the MPIRUN/MPIEXEC semantics<br>
<strong>From:</strong> Simone Pellegrini (<em>spellegrini_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-03 11:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Previous message:</strong> <a href="9813.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Reply:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
current implementation of mpirun starts the executable in different 
<br>
nodes. For some reason I need to start different MPI applications across 
<br>
nodes and I want to use MPI to communicate among these applications. For 
<br>
short I want to breakdown the SPMD model, something like:
<br>
<p>mpirun --np 3 mpi_app1 &quot;app1_args&quot;, mpi_app2, &quot;app2_args&quot;, mpi_app3, 
<br>
&quot;app3_args&quot;
<br>
<p>Is it possible to have this kind of behavior with the current 
<br>
implementation of mpirun?
<br>
if not... it's implement it via changing the mpirun and/or mpiexec 
<br>
routines or does it implies radical changes to the entire Open MPI library?
<br>
<p>regards, Simone
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Previous message:</strong> <a href="9813.php">Scott Atchley: "Re: [OMPI users] Problems with MPI_Issend and MX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
<li><strong>Reply:</strong> <a href="9815.php">Ralph Castain: "Re: [OMPI users] Changing the MPIRUN/MPIEXEC semantics"</a>
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
