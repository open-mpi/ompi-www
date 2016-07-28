<?
$subject_val = "[OMPI users] Optimal 3-D Cartesian processor mapping";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 15:01:28 2012" -->
<!-- isoreceived="20120424190128" -->
<!-- sent="Tue, 24 Apr 2012 12:01:38 -0700" -->
<!-- isosent="20120424190138" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="[OMPI users] Optimal 3-D Cartesian processor mapping" -->
<!-- id="1335294098.5406.58.camel_at_cedar.reachone.com" -->
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
<strong>Subject:</strong> [OMPI users] Optimal 3-D Cartesian processor mapping<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-24 15:01:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19097.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19100.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19100.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a large ensemble-based atmospheric data assimilation system that
<br>
does a 3-D cartesian partitioning of the 'domain' using MPI_DIMS_CREATE,
<br>
MPI_CART_CREATE, etc.  Two of the dimensions are spacial, i.e. latitude
<br>
and longitude; the third is an 'ensemble' dimension, across which
<br>
subsets of ensemble members are held.
<br>
<p>Most MPI communication is in the two spacial dimensions, while
<br>
calculations in the ensemble dimension are essentially embarrassingly
<br>
parallel except for an occasional collective reduction call.  On a
<br>
typical system with multi-core nodes, we would like to map the spacial
<br>
dimensions on-node, to get the benefit of shared memory communication,
<br>
and map the ensemble dimension across nodes, since there isn't much
<br>
communication required.  For example, for a 90 member ensemble case
<br>
running on 6-16 core nodes (96 cores), we might do 4x4 mapping in the
<br>
spacial dimension, and have 6 as the ensemble dimension (15 members
<br>
each).
<br>
<p>My question is this:  If the cartesian mapping is done so the two
<br>
spacial dimensions are the 'most rapidly varying' in equivalent 1-D
<br>
processor mapping, will Open-mpi automatically assign those 2 dimensions
<br>
'on-node', and assign the 'ensemble' dimension as the slowest varying
<br>
and across nodes?  If not, how can we guarantee this to happen?
<br>
<p>T. Rosmond
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19099.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19097.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19100.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Reply:</strong> <a href="19100.php">Jeffrey Squyres: "Re: [OMPI users] Optimal 3-D Cartesian processor mapping"</a>
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
