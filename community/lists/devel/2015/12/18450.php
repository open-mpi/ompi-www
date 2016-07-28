<?
$subject_val = "[OMPI devel] v1.10: mpirun --host xxx behaviour";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 22 03:49:31 2015" -->
<!-- isoreceived="20151222084931" -->
<!-- sent="Tue, 22 Dec 2015 17:49:28 +0900" -->
<!-- isosent="20151222084928" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.10: mpirun --host xxx behaviour" -->
<!-- id="56790E98.8040407_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] v1.10: mpirun --host xxx behaviour<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-22 03:49:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Previous message:</strong> <a href="18449.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Reply:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i (re)discovered an old and odd behaviour in v1.10, which was discussed 
<br>
in <a href="https://github.com/open-mpi/ompi-release/pull/664">https://github.com/open-mpi/ompi-release/pull/664</a>
<br>
<p>when running
<br>
mpirun --host xxx ...
<br>
mpirun v1.10 assumes one slot per host.
<br>
<p>consequently, on my vm with 4 cores
<br>
mpirun -np 2 ./helloworld_mpi
<br>
works fine
<br>
but
<br>
mpirun -np 2 --host localhost ./helloworld_mpi
<br>
fails with the following error message
<br>
&quot;There are not enough slots available ...&quot;
<br>
<p>if i understand correctly, and thought this is a different behaviour 
<br>
from v1.8, this is compliant with the definition of the --host option.
<br>
it seems you were open to some change.
<br>
<p>did you have time to think about it ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Previous message:</strong> <a href="18449.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.10.2rc1] alloc link failure on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
<li><strong>Reply:</strong> <a href="18451.php">Ralph Castain: "Re: [OMPI devel] v1.10: mpirun --host xxx behaviour"</a>
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
