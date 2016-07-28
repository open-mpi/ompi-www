<?
$subject_val = "[OMPI devel] MPI_Comm_spawn affinity and coll/ml";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun  5 03:20:24 2014" -->
<!-- isoreceived="20140605072024" -->
<!-- sent="Thu, 5 Jun 2014 16:20:22 +0900" -->
<!-- isosent="20140605072022" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Comm_spawn affinity and coll/ml" -->
<!-- id="CAAkFZ5vejrcCW9yKSVQspsDuT1mb-42NMHTPXg=E_on+-i3pMw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Comm_spawn affinity and coll/ml<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-05 03:20:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14974.php">George Bosilca: "[OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14980.php">Hjelm, Nathan T: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<li><strong>Reply:</strong> <a href="14980.php">Hjelm, Nathan T: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>on my single socket four cores VM (no batch manager), i am running the
<br>
intercomm_create test from the ibm test suite.
<br>
<p>mpirun -np 1 ./intercomm_create
<br>
=&gt; OK
<br>
<p>mpirun -np 2 ./intercomm_create
<br>
=&gt; HANG :-(
<br>
<p>mpirun -np 2 --mca coll ^ml  ./intercomm_create
<br>
=&gt; OK
<br>
<p>basically, this first two tasks will call twice MPI_Comm_spawn(2 tasks)
<br>
followed by MPI_Intercomm_merge
<br>
and the 4 spawned tasks will call MPI_Intercomm_merge followed by
<br>
MPI_Intercomm_create
<br>
<p>i digged a bit into that issue and found two distinct issues :
<br>
<p>1) binding :
<br>
tasks [0-1] (launched with mpirun) are bound on cores [0-1] =&gt; OK
<br>
tasks[2-3] (first spawn) are bound on cores [0-1] =&gt; ODD, i would have
<br>
expected [2-3]
<br>
tasks[4-5] (second spawn) are not bound at all =&gt; ODD again, could have
<br>
made sense if tasks[2-3] were bound on cores [2-3]
<br>
i observe the same behaviour  with the --oversubscribe mpirun parameter
<br>
<p>2) coll/ml
<br>
coll/ml hangs when -np 2 (total 6 tasks, including 2 unbound tasks)
<br>
i suspect coll/ml is unable to handle unbound tasks.
<br>
if i am correct, should coll/ml detect this and simply automatically
<br>
disqualify itself ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14975/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14976.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intermittent hangs when exiting with error"</a>
<li><strong>Previous message:</strong> <a href="14974.php">George Bosilca: "[OMPI devel] RFC: Move the Open MPI communication infrastructure in OPAL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14980.php">Hjelm, Nathan T: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
<li><strong>Reply:</strong> <a href="14980.php">Hjelm, Nathan T: "Re: [OMPI devel] MPI_Comm_spawn affinity and coll/ml"</a>
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
