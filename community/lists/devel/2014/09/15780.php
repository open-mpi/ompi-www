<?
$subject_val = "[OMPI devel] race condition in grpcomm/rcd";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  9 06:10:07 2014" -->
<!-- isoreceived="20140909101007" -->
<!-- sent="Tue, 09 Sep 2014 19:10:03 +0900" -->
<!-- isosent="20140909101003" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] race condition in grpcomm/rcd" -->
<!-- id="540ED1FB.8060504_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] race condition in grpcomm/rcd<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-09 06:10:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15781.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Previous message:</strong> <a href="15779.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15781.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Reply:</strong> <a href="15781.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>Since r32672 (trunk), grpcomm/rcd is the default module.
<br>
the attached spawn.c test program is a trimmed version of the
<br>
spawn_with_env_vars.c test case
<br>
from the ibm test suite.
<br>
<p>when invoked on two nodes :
<br>
- the program hangs with -np 2
<br>
- the program can crash with np &gt; 2
<br>
error message is
<br>
[node0:30701] [[42913,0],0] TWO RECEIVES WITH SAME PEER [[42913,0],1]
<br>
AND TAG -33 - ABORTING
<br>
<p>here is my full command line (from node0) :
<br>
<p>mpirun -host node0,node1 -np 2 --oversubscribe --mca btl tcp,self --mca
<br>
coll ^ml ./spawn
<br>
<p>a simple workaround is to add the following extra parameter to the
<br>
mpirun command line :
<br>
--mca grpcomm_rcd_priority 0
<br>
<p>my understanding it that the race condition occurs when all the
<br>
processes call MPI_Finalize()
<br>
internally, the pmix module will have mpirun/orted issue two ALLGATHER
<br>
involving mpirun and orted
<br>
(one job 1 aka the parent, and one for job 2 aka the spawned tasks)
<br>
the error message is very explicit : this is not (currently) supported
<br>
<p>i wrote the attached rml.patch which is really a workaround and not a fix :
<br>
in this case, each job will invoke an ALLGATHER but with a different tag
<br>
/* that works for a limited number of jobs only */
<br>
<p>i did not commit this patch since this is not a fix, could someone
<br>
(Ralph ?) please review the issue and comment ?
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p><p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15780/spawn.c">spawn.c</a>
</ul>
<!-- attachment="spawn.c" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15780/rml.patch">rml.patch</a>
</ul>
<!-- attachment="rml.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15781.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Previous message:</strong> <a href="15779.php">Gilles Gouaillardet: "Re: [OMPI devel] about r32685"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15781.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
<li><strong>Reply:</strong> <a href="15781.php">Ralph Castain: "Re: [OMPI devel] race condition in grpcomm/rcd"</a>
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
