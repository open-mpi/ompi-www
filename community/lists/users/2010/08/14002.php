<?
$subject_val = "[OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 21:49:14 2010" -->
<!-- isoreceived="20100813014914" -->
<!-- sent="Thu, 12 Aug 2010 21:49:01 -0400" -->
<!-- isosent="20100813014901" -->
<!-- name="David Ronis" -->
<!-- email="David.Ronis_at_[hidden]" -->
<!-- subject="[OMPI users] Abort" -->
<!-- id="1281664141.14228.16.camel_at_montroll.chem.mcgill.ca" -->
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
<strong>Subject:</strong> [OMPI users] Abort<br>
<strong>From:</strong> David Ronis (<em>David.Ronis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 21:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14003.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="14001.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
<li><strong>Maybe reply:</strong> <a href="14021.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Maybe reply:</strong> <a href="14040.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Maybe reply:</strong> <a href="14045.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've got a mpi program that is supposed to to generate a core file if
<br>
problems arise on any of the nodes.   I tried to do this by adding a
<br>
call to abort() to my exit routines but this doesn't work; I get no core
<br>
file, and worse, mpirun doesn't detect that one of my nodes has
<br>
aborted(?) and doesn't kill off the entire job, except in the trivial
<br>
case where the number of processors I'm running on is 1.   I've replaced
<br>
abort with MPI_Abort, which kills everything off, but leaves no core
<br>
file.  Any suggestions how I can get one and still have mpi exit?
<br>
<p>Thanks in advance.
<br>
<p>David
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14003.php">Randolph Pullen: "Re: [OMPI users] MPI_Bcast issue"</a>
<li><strong>Previous message:</strong> <a href="14001.php">Tim Prince: "Re: [OMPI users] OpenMPI Run-Time &quot;Freedom&quot; Question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14005.php">Ralph Castain: "Re: [OMPI users] Abort"</a>
<li><strong>Maybe reply:</strong> <a href="14021.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Maybe reply:</strong> <a href="14040.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Maybe reply:</strong> <a href="14045.php">David Ronis: "Re: [OMPI users] Abort"</a>
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
