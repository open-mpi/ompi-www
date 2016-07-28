<?
$subject_val = "[OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 01:01:47 2015" -->
<!-- isoreceived="20150430050147" -->
<!-- sent="Wed, 29 Apr 2015 23:50:40 -0500" -->
<!-- isosent="20150430045040" -->
<!-- name="Satish Balay" -->
<!-- email="balay_at_[hidden]" -->
<!-- subject="[OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4" -->
<!-- id="alpine.LFD.2.11.1504292259460.5873_at_asterix" -->
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
<strong>Subject:</strong> [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4<br>
<strong>From:</strong> Satish Balay (<em>balay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-30 00:50:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26817.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI developers,
<br>
<p>We've had issues (memory errors) with OpenMPI - and code in PETSc
<br>
library that uses MPI_Win_fence().
<br>
<p>Vagrind shows memory corruption deep inside OpenMPI function stack.
<br>
<p>I'm attaching a potential patch that appears to fix this issue for us.
<br>
[the corresponding valgrind trace is listed in the patch header]
<br>
<p>Perhaps there is a more appropriate fix for this memory corruption. Could
<br>
you check on this?
<br>
<p>[Sorry I don't have a pure MPI test code to demonstrate this error -
<br>
but a PETSc test example code consistantly reproduces this issue]
<br>
<p>Thanks,
<br>
Satish
<br>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26818/openmpi-1.8.4.patch">openmpi-1.8.4.patch</a>
</ul>
<!-- attachment="openmpi-1.8.4.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26819.php">Noam Bernstein: "Re: [OMPI users] new hwloc error"</a>
<li><strong>Previous message:</strong> <a href="26817.php">Ralph Castain: "Re: [OMPI users] new hwloc error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
<li><strong>Reply:</strong> <a href="26822.php">Ralph Castain: "Re: [OMPI users] potential bug with MPI_Win_fence() in openmpi-1.8.4"</a>
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
