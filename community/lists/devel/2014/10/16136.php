<?
$subject_val = "[OMPI devel] btl/openib and MPI_Intercomm_create on the same host";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 31 03:53:02 2014" -->
<!-- isoreceived="20141031075302" -->
<!-- sent="Fri, 31 Oct 2014 16:52:57 +0900" -->
<!-- isosent="20141031075257" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] btl/openib and MPI_Intercomm_create on the same host" -->
<!-- id="54533FD9.5080109_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] btl/openib and MPI_Intercomm_create on the same host<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-31 03:52:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16137.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="16135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>currently, the dynamic/intercomm_create fails if ran on one host with an
<br>
IB port :
<br>
mpirun -np 1 ./intercomm_create
<br>
/* misleading error message is
<br>
opal/mca/btl/openib/connect/btl_openib_connect_udcm.c:1899:udcm_process_messages]
<br>
could not find associated endpoint */
<br>
<p>this program spawns one task and a second one, create a single
<br>
communicator and performs a barrier.
<br>
<p>what happens here is :
<br>
- tasks 0 and 1 do not use IB as a loopback interface because 
<br>
OPAL_MODEX_RECV fails in mca_btl_openib_proc_create()
<br>
/* this is ok since the openib modex was sent with PMIX_REMOTE */
<br>
<p>but later, task 1 will try to communicate with task 2 via the openib btl.
<br>
the reason is task 1 got the openib modex from task 2 via
<br>
ompi_comm_get_rprocs invoked by MPI_Intercomm_create
<br>
<p>and this will cause an error with a misleading error message reported by
<br>
task 2
<br>
<p>i wrote the attached hack to &quot;fix&quot; the issue.
<br>
i had to strcmp the host names since at that time, proc-&gt;proc_flags is
<br>
OPAL_PROC_NON_LOCAL
<br>
<p>i guess several things are not being handled correctly here, could you
<br>
please advise a correct way to fix this ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16136/openib.diff">openib.diff</a>
</ul>
<!-- attachment="openib.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16137.php">Dave Goodell (dgoodell): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated.	dev-198-g68bec0a"</a>
<li><strong>Previous message:</strong> <a href="16135.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] enable-smp-locks affects PSM performance"</a>
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
