<?
$subject_val = "[OMPI users] MPI_Comm_create with unequal group arguments";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 20 09:00:46 2012" -->
<!-- isoreceived="20120120140046" -->
<!-- sent="Fri, 20 Jan 2012 15:00:39 +0100" -->
<!-- isosent="20120120140039" -->
<!-- name="Jens J&#248;rgen Mortensen" -->
<!-- email="jensj_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Comm_create with unequal group arguments" -->
<!-- id="4F197387.4030808_at_fysik.dtu.dk" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Comm_create with unequal group arguments<br>
<strong>From:</strong> Jens J&#248;rgen Mortensen (<em>jensj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-20 09:00:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18232.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>Previous message:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Reply:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>For a long time, I have been calling MPI_Comm_create(comm, group, 
<br>
newcomm) with different values for group on the different processes of 
<br>
comm.  In pseudo-code, I would create two sub-communicators from a world 
<br>
with 4 ranks like this:
<br>
<p>if world.rank &lt; 2:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm = world.create([0, 1])
<br>
else:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;comm = world.create([2, 3])
<br>
<p>Now I read from the MPI_Comm_create description that this way of calling 
<br>
MPI_Comm_create is erroneous:
<br>
<p>&nbsp;&nbsp;&nbsp;&quot;The call is erroneous if not all group arguments have the same value&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Comm_create.3.php#toc7">http://www.open-mpi.org/doc/v1.4/man3/MPI_Comm_create.3.php#toc7</a>
<br>
<p>So, I guess I have just been lucky that it has worked for me?  Or is it 
<br>
OK to do what I do?
<br>
<p>Jens J&#248;rgen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18232.php">Josh Hursey: "Re: [OMPI users] Checkpoint an MPI process"</a>
<li><strong>Previous message:</strong> <a href="18230.php">Rodrigo Oliveira: "Re: [OMPI users] Checkpoint an MPI process"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
<li><strong>Reply:</strong> <a href="18233.php">Josh Hursey: "Re: [OMPI users] MPI_Comm_create with unequal group arguments"</a>
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
