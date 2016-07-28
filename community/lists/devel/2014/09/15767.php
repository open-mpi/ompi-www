<?
$subject_val = "[OMPI devel] race condition in coll/ml";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  1 06:16:03 2014" -->
<!-- isoreceived="20140901101603" -->
<!-- sent="Mon, 01 Sep 2014 19:16:00 +0900" -->
<!-- isosent="20140901101600" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] race condition in coll/ml" -->
<!-- id="54044760.5050402_at_iferc.org" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] race condition in coll/ml<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-01 06:16:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15768.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Previous message:</strong> <a href="15766.php">Gilles Gouaillardet: "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15769.php">Ralph Castain: "Re: [OMPI devel] race condition in coll/ml"</a>
<li><strong>Reply:</strong> <a href="15769.php">Ralph Castain: "Re: [OMPI devel] race condition in coll/ml"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>mtt recently failed a bunch of times with the trunk.
<br>
a good suspect is the collective/ibarrier test from the ibm test suite.
<br>
<p>most of the time, CHECK_AND_RECYCLE will fail
<br>
/* IS_COLL_SYNCMEM(coll_op) is true */
<br>
<p>with this test case, we just get a glory SIGSEGV since OBJ_RELEASE is
<br>
called on MPI_COMM_WORLD (which has *not* been allocated with OBJ_NEW)
<br>
<p>i commited r32659 in order to :
<br>
- display an error message
<br>
- abort if the communicator is an intrincic one
<br>
<p>with attached modified version of the ibarrier test, i always get an
<br>
error on task 0 when invoked with
<br>
mpirun -np 2 -host node0,node1 --mca btl tcp,self ./ibarrier
<br>
<p>the modified version adds some sleep(1) in order to work around the race
<br>
condition and get a reproducible crash
<br>
<p>i tried to dig and could not find a correct way to fix this.
<br>
that being said, i tried the attached ml.patch and it did fix the
<br>
problem (even with NREQS=1024)
<br>
i did not commit it since this is very likely incorrect.
<br>
<p>could someone have a look ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15767/ibarrier.c">ibarrier.c</a>
</ul>
<!-- attachment="ibarrier.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15767/ml.patch">ml.patch</a>
</ul>
<!-- attachment="ml.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15768.php">tmishima_at_[hidden]: "Re: [OMPI devel] oshmem-openmpi-1.8.2 causes compile error with -i8(64bit fortarn integer) configuration"</a>
<li><strong>Previous message:</strong> <a href="15766.php">Gilles Gouaillardet: "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15769.php">Ralph Castain: "Re: [OMPI devel] race condition in coll/ml"</a>
<li><strong>Reply:</strong> <a href="15769.php">Ralph Castain: "Re: [OMPI devel] race condition in coll/ml"</a>
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
