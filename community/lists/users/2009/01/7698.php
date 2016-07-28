<?
$subject_val = "[OMPI users] MPI flavor-agnostic libraries";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 09:49:51 2009" -->
<!-- isoreceived="20090114144951" -->
<!-- sent="Wed, 14 Jan 2009 09:49:45 -0500" -->
<!-- isosent="20090114144945" -->
<!-- name="Gregory D Abram" -->
<!-- email="gabra_at_[hidden]" -->
<!-- subject="[OMPI users] MPI flavor-agnostic libraries" -->
<!-- id="OF30AFFC2D.54157A4C-ON8525753E.005048EA-8525753E.005175B5_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] MPI flavor-agnostic libraries<br>
<strong>From:</strong> Gregory D Abram (<em>gabra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 09:49:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7699.php">Jeff Squyres: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Previous message:</strong> <a href="7697.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7699.php">Jeff Squyres: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Reply:</strong> <a href="7699.php">Jeff Squyres: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Reply:</strong> <a href="7700.php">Mattijs Janssens: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd like to release binary libraries that use MPI but are agnostic as to
<br>
which flavor or MPI (eg. OpenMPI, MVAPICH, LAM...) that is used by the
<br>
application linking the libraries.  I've seen that there are some
<br>
significant differences that stand in the way, for example that MPI_Comm is
<br>
a pointer on OpenMPI and an integer on MVAPICH.  I can see some ways that
<br>
might work, but they are pretty complex - for example, I could create an
<br>
intercept library that loads a real MPI library explicitly and do whatever
<br>
needs be done (for example, translating MPI_Comm parameters).  Does anyone
<br>
know of anything that might help?
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7698/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7699.php">Jeff Squyres: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Previous message:</strong> <a href="7697.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes. (fwd)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7699.php">Jeff Squyres: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Reply:</strong> <a href="7699.php">Jeff Squyres: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
<li><strong>Reply:</strong> <a href="7700.php">Mattijs Janssens: "Re: [OMPI users] MPI flavor-agnostic libraries"</a>
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
