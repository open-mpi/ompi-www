<?
$subject_val = "[OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 18:28:19 2016" -->
<!-- isoreceived="20160112232819" -->
<!-- sent="Tue, 12 Jan 2016 16:27:50 -0700" -->
<!-- isosent="20160112232750" -->
<!-- name="Jim Edwards" -->
<!-- email="jedwards_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW" -->
<!-- id="CAPuR+ZjYOYNWGuN5fcimZ-GYHxeZU6DKoMFpNEWwoVKr13TySw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW<br>
<strong>From:</strong> Jim Edwards (<em>jedwards_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-12 18:27:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28248.php">Palmer, Bruce J: "Re: [OMPI users] Put/Get semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using OpenMPI-1.8.3 built with gcc 4.8.3
<br>
and I am using an MPI_Alltoallw call to perform
<br>
an all to some (or some to all) communication.
<br>
<p>In the case in which my task is not sending (or receiving) any data I set
<br>
the
<br>
datatype for that send or recv buffer to MPI_DATATYPE_NULL - this
<br>
works fine with other mpi libraries but fails in openmpi.   If I set
<br>
the datatype to something else say MPI_CHAR - it works fine.   I think
<br>
that this is a bug in open-mpi - would you agree?
<br>
<p><p><p><p><pre>
-- 
Jim Edwards
CESM Software Engineer
National Center for Atmospheric Research
Boulder, CO
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28249/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Previous message:</strong> <a href="28248.php">Palmer, Bruce J: "Re: [OMPI users] Put/Get semantics"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
<li><strong>Reply:</strong> <a href="28250.php">Gilles Gouaillardet: "Re: [OMPI users] MPI_DATATYPE_NULL and MPI_AlltoallW"</a>
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
