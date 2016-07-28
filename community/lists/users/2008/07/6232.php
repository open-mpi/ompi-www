<?
$subject_val = "[OMPI users] MPI_BCast problem on multiple networks.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 10:26:16 2008" -->
<!-- isoreceived="20080731142616" -->
<!-- sent="Thu, 31 Jul 2008 15:26:09 +0100" -->
<!-- isosent="20080731142609" -->
<!-- name="David Robson" -->
<!-- email="David.Robson_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_BCast problem on multiple networks." -->
<!-- id="4891CB81.3030607_at_jet.uk" -->
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
<strong>Subject:</strong> [OMPI users] MPI_BCast problem on multiple networks.<br>
<strong>From:</strong> David Robson (<em>David.Robson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 10:26:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6233.php">Gabriele Fatigati: "[OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Previous message:</strong> <a href="6231.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6235.php">Adrian Knoth: "Re: [OMPI users] MPI_BCast problem on multiple networks."</a>
<li><strong>Reply:</strong> <a href="6235.php">Adrian Knoth: "Re: [OMPI users] MPI_BCast problem on multiple networks."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI users
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;I have a problem with openmpi codes hanging in MPI_BCast ...
<br>
<p>All our nodes are connected to one LAN.  However, half of them
<br>
also have an interface to a second private LAN.  If the first
<br>
openMPI process of a job starts on one of the dual-homed nodes, and
<br>
a second process from the same job starts on a single-home, it
<br>
will hang on MPI_BCast.  It works if the first process is on a
<br>
single-homed node, or for all other combinations.
<br>
<p>It also works if I disable the private interface.  Otherwise there
<br>
are no network problems.  I can ping any host from any other.
<br>
openmpi programs without MPI_BCast work OK.
<br>
<p>I guess that this is something to do with openmpi passing IP
<br>
addresses between processes.  Is there some setting that can be
<br>
done to override this?
<br>
<p>Has any seen anything like this, or have any ideas??
<br>
<p>Thanks in Advance
<br>
<p><pre>
-- 
David Robson
CODAS &amp; IT Department, UKAEA Culham
Culham Science Centre, Abingdon, OXON, OX14 3DB, UK
Voice: +44(0)1235-46-4569, Fax: 4404
Work email: David.Robson_at_[hidden]
Home email: David.W.Robson_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6233.php">Gabriele Fatigati: "[OMPI users] OpenMPI 1.4 nightly"</a>
<li><strong>Previous message:</strong> <a href="6231.php">Scott Beardsley: "Re: [OMPI users] Missing F90 modules"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6235.php">Adrian Knoth: "Re: [OMPI users] MPI_BCast problem on multiple networks."</a>
<li><strong>Reply:</strong> <a href="6235.php">Adrian Knoth: "Re: [OMPI users] MPI_BCast problem on multiple networks."</a>
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
