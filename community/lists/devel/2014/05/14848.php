<?
$subject_val = "[OMPI devel] some info is not pushed into the dstore";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 27 06:51:03 2014" -->
<!-- isoreceived="20140527105103" -->
<!-- sent="Tue, 27 May 2014 19:51:00 +0900" -->
<!-- isosent="20140527105100" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] some info is not pushed into the dstore" -->
<!-- id="CAAkFZ5tXgS2g497FbsKH_i_s+vZDD80GeegLqzeriMHozf8F-w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] some info is not pushed into the dstore<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-27 06:51:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14849.php">Nathan Hjelm: "Re: [OMPI devel] Threshold for pinning down user-buffers"</a>
<li><strong>Previous message:</strong> <a href="14847.php">Gilles Gouaillardet: "[OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14853.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Reply:</strong> <a href="14853.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>while debugging the dynamic/intercomm_create from the ibm test suite, i
<br>
found something odd.
<br>
<p>i ran *without* any batch manager on a VM (one socket and four cpus)
<br>
mpirun -np 1 ./dynamic/intercomm_create
<br>
<p>it hangs by default
<br>
it works with --mca coll ^ml
<br>
<p>basically :
<br>
- task 0 spawns task 1
<br>
- task 0 spawns task 2
<br>
- a communicator is created for the 3 tasks via MPI_Intercomm_create()
<br>
<p>MPI_Intercomm_create() calls ompi_comm_get_rprocs() which calls
<br>
ompi_proc_set_locality()
<br>
<p>then, on task 1, ompi_proc_set_locality() calls
<br>
opal_dstore.fetch(opal_dstore_internal, &quot;task 2&quot;-&gt;proc_name, ...) which
<br>
fails and this is OK
<br>
then
<br>
opal_dstore_fetch(opal_dstore_nonpeer, &quot;task 2&quot;-&gt;proc_name, ...) which
<br>
fails and this is *not* OK
<br>
<p>/* on task 2, the first fetch for &quot;task 1&quot; fails but the second success */
<br>
<p>my analysis is that when task 2 was created, it updated its
<br>
opal_dstore_nonpeer with info from &quot;task 1&quot; which was previously spawned by
<br>
task 0.
<br>
when task 1 was spawned, task 2 did not exist yet and hence
<br>
opal_dstore_nonpeer contains no reference to task 2.
<br>
but when task 2 was spawned, opal_dstore_nonpeer of task 1 has not been
<br>
updated, hence the failure
<br>
<p>(on task 1, proc_flags of task 2 has incorrect locality, this likely
<br>
confuses coll ml and hang the test)
<br>
<p>should task1 have received new information when task 2 was spawned ?
<br>
shoud task2 have sent information to task1 when it was spawned ?
<br>
should task1 have (tried to) get fresh information before invoking
<br>
MPI_Intercomm_create() ?
<br>
<p>incidentally, i found ompi_proc_set_locality calls opal_dstore.store with
<br>
identifier &amp;proc (the argument is &amp;proc-&gt;proc_name everywhere else, so this
<br>
is likely a bug/typo. the attached patch fixes this.
<br>
<p>Thanks in advance for your feedback,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14848/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-diff attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14848/proc.patch">proc.patch</a>
</ul>
<!-- attachment="proc.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14849.php">Nathan Hjelm: "Re: [OMPI devel] Threshold for pinning down user-buffers"</a>
<li><strong>Previous message:</strong> <a href="14847.php">Gilles Gouaillardet: "[OMPI devel] RFC: about dynamic/intercomm_create test from ibm test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14853.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
<li><strong>Reply:</strong> <a href="14853.php">Ralph Castain: "Re: [OMPI devel] some info is not pushed into the dstore"</a>
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
