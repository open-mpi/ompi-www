<?
$subject_val = "Re: [OMPI users] MPI_Alltoall with Vector Datatype";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 09:53:21 2014" -->
<!-- isoreceived="20140508135321" -->
<!-- sent="Thu, 8 May 2014 08:53:20 -0500" -->
<!-- isosent="20140508135320" -->
<!-- name="Spenser Gilliland" -->
<!-- email="spenser_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Alltoall with Vector Datatype" -->
<!-- id="CAEBucnDUfY-NGVCrnXGokDGWbKd46KUGruTrdMEQH2_LVxtSrA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAEBucnD_iDrrwQnAZ6cRpqYeVfCODztrr3t=mdG4CcqQnRi52Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Alltoall with Vector Datatype<br>
<strong>From:</strong> Spenser Gilliland (<em>spenser_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 09:53:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24311.php">zack li: "[OMPI users] Issue running mpi program"</a>
<li><strong>In reply to:</strong> <a href="24309.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George &amp; other list members,
<br>
<p>I think I may have a race condition in this example that is masked by
<br>
the print_matrix statement.
<br>
<p>For example, lets say rank one has a large sleep before reaching the
<br>
local transpose, will the other ranks have completed the Alltoall and
<br>
when rank one reaches the local transpose it is altering the data that
<br>
the other processors sent it?
<br>
<p>Thanks,
<br>
Spenser
<br>
<p><p><pre>
-- 
Spenser Gilliland
Computer Engineer
Doctoral Candidate
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24311.php">zack li: "[OMPI users] Issue running mpi program"</a>
<li><strong>In reply to:</strong> <a href="24309.php">Spenser Gilliland: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Reply:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
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
