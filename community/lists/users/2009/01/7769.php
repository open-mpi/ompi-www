<?
$subject_val = "[OMPI users] MPIAbort and raise(SIGTERM)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 18:25:38 2009" -->
<!-- isoreceived="20090122232538" -->
<!-- sent="Fri, 23 Jan 2009 00:25:25 +0100" -->
<!-- isosent="20090122232525" -->
<!-- name="Gijsbert Wiesenekker" -->
<!-- email="gijsbert.wiesenekker_at_[hidden]" -->
<!-- subject="[OMPI users] MPIAbort and raise(SIGTERM)" -->
<!-- id="49790065.80807_at_gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPIAbort and raise(SIGTERM)<br>
<strong>From:</strong> Gijsbert Wiesenekker (<em>gijsbert.wiesenekker_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-22 18:25:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7770.php">Sangamesh B: "[OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Previous message:</strong> <a href="7768.php">Jeff Squyres: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am running OpenMPI on Fedora Core 10. MPI_Abort does not seem to abort 
<br>
the processes on FC10. I found out that when you send a signal all 
<br>
processes seem to abort as expected, so I am now using raise(SIGTERM) 
<br>
instead of MPI_Abort(). Are there any consequences to not using MPI_Abort?
<br>
<p>Regards,
<br>
Gijsbert
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7770.php">Sangamesh B: "[OMPI users] Cluster with IB hosts and Ethernet hosts"</a>
<li><strong>Previous message:</strong> <a href="7768.php">Jeff Squyres: "Re: [OMPI users] dead lock in MPI_Finalize"</a>
<!-- nextthread="start" -->
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
