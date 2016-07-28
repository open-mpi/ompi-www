<?
$subject_val = "[OMPI users] mpi_abort_delay";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 23:45:12 2012" -->
<!-- isoreceived="20120204044512" -->
<!-- sent="Fri, 3 Feb 2012 23:45:05 -0500" -->
<!-- isosent="20120204044505" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="[OMPI users] mpi_abort_delay" -->
<!-- id="5C3EF624-B18E-44A2-ACC5-DBE66F1979F6_at_eecs.utk.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] mpi_abort_delay<br>
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 23:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18392.php">John Hearns: "Re: [OMPI users] IO performance"</a>
<li><strong>Previous message:</strong> <a href="18390.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18393.php">Jeff Squyres: "Re: [OMPI users] mpi_abort_delay"</a>
<li><strong>Reply:</strong> <a href="18393.php">Jeff Squyres: "Re: [OMPI users] mpi_abort_delay"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>The mpi_abort_delay parameters does deadlock the aborting process, as to ease the manual attachment of gdb, only if the code does indeed call MPI_Abort. 
<br>
<p>Is there any similar command line trick to keep alive a process that is exiting with assert() (or better with segfault etc) ?
<br>
<p><p><pre>
--
* Dr. Aur&#233;lien Bouteiller
* Researcher at Innovative Computing Laboratory
* University of Tennessee
* 1122 Volunteer Boulevard, suite 350
* Knoxville, TN 37996
* 865 974 6321

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18391/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18392.php">John Hearns: "Re: [OMPI users] IO performance"</a>
<li><strong>Previous message:</strong> <a href="18390.php">Reuti: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18393.php">Jeff Squyres: "Re: [OMPI users] mpi_abort_delay"</a>
<li><strong>Reply:</strong> <a href="18393.php">Jeff Squyres: "Re: [OMPI users] mpi_abort_delay"</a>
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
