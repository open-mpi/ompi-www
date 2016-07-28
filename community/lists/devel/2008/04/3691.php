<?
$subject_val = "[OMPI devel] ORTE Scaling results: updated";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 17:10:12 2008" -->
<!-- isoreceived="20080408211012" -->
<!-- sent="Tue, 08 Apr 2008 15:10:00 -0600" -->
<!-- isosent="20080408211000" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] ORTE Scaling results: updated" -->
<!-- id="C4213B48.CFF8%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] ORTE Scaling results: updated<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-08 17:10:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3692.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>Previous message:</strong> <a href="3690.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>The wiki page has been updated with the latest test results from a new
<br>
branch that implemented inbound collectives on the modex and barrier
<br>
operations. As you will see from the graphs, ORTE/OMPI now exhibits a
<br>
negative 2nd-derivative on the launch time curve for mpi_no_op (i.e.,
<br>
MPI_Init/MPI_Finalize).
<br>
<p>Some cleanup of the branch code is required before insertion into the trunk.
<br>
I'll send out a note when that occurs.
<br>
<p>The wiki page is at:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/ORTEScalabilityTesting">https://svn.open-mpi.org/trac/ompi/wiki/ORTEScalabilityTesting</a>
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3692.php">Bernhard Fischer: "Re: [OMPI devel] [PATCH] Fix typo in configure helptext"</a>
<li><strong>Previous message:</strong> <a href="3690.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] MPI_Comm_connect/Accept"</a>
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
