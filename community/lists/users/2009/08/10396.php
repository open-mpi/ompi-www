<?
$subject_val = "[OMPI users] Invalid info object in MPI_Comm_spawn_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 05:12:34 2009" -->
<!-- isoreceived="20090818091234" -->
<!-- sent="Tue, 18 Aug 2009 11:12:29 +0200" -->
<!-- isosent="20090818091229" -->
<!-- name="Federico Golfr&#232; Andreasi" -->
<!-- email="federico.golfre_at_[hidden]" -->
<!-- subject="[OMPI users] Invalid info object in MPI_Comm_spawn_multiple" -->
<!-- id="b88e40560908180212n98a72b9ncf3f931d6ef75f62_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Invalid info object in MPI_Comm_spawn_multiple<br>
<strong>From:</strong> Federico Golfr&#232; Andreasi (<em>federico.golfre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 05:12:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the info object I only set the &quot;host&quot; key (after creatig the object with
<br>
the MPI_Info_create).
<br>
<p>I've modified my code to leave out that request and created the array of
<br>
Info object as an array of MPI_INFO_NULL but the problem is still the same.
<br>
The error is thrown only when running with more than one process.
<br>
<p>I tried also the previous OpenMPI version (v 1.3.2).
<br>
<p>Do I send you a short program for testing it?
<br>
<p>Thank you!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Federico
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10396/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Previous message:</strong> <a href="10395.php">Jeff Squyres: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
<li><strong>Reply:</strong> <a href="10397.php">Jeff Squyres: "Re: [OMPI users] Invalid info object in MPI_Comm_spawn_multiple"</a>
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
