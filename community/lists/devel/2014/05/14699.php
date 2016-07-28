<?
$subject_val = "[OMPI devel] scif btl side effects";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  7 07:23:23 2014" -->
<!-- isoreceived="20140507112323" -->
<!-- sent="Wed, 07 May 2014 20:23:32 +0900" -->
<!-- isosent="20140507112332" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] scif btl side effects" -->
<!-- id="536A17B4.4070904_at_iferc.org" -->
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
<strong>Subject:</strong> [OMPI devel] scif btl side effects<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-07 07:23:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14700.php">Elena Elkina: "[OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14698.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI Folks,
<br>
<p>i noticed some crashes when running OpenMPI (both latest v1.8 and trunk
<br>
from svn) on a single linux system where a MIC is available.
<br>
/* strictly speaking, MIC hardware is not needed: libscif.so, mic kernel
<br>
module and accessible /dev/mic/* are enough */
<br>
<p>the attached test_scif program can be used in order to evidence this issue.
<br>
/* this is an over simplified version of collective/bcast_struct.c from
<br>
the ibm test suite,
<br>
it is currently failing on the bend-rsh cluster at intel */
<br>
<p>this program will cause a silent failure
<br>
(MPI_Recv receives truncated data without issuing any warning)
<br>
<p>i ran a few investigations and basically, here is what i found :
<br>
MPI_Send will split the message into two fragments. the first fragment
<br>
is sent via the vader btl
<br>
and the second fragment is sent with the scif btl.
<br>
<p>the program will success if the scif btl is disabled (mpirun --mca btl
<br>
^scif)
<br>
interestingly, i found that
<br>
mpirun -host localhost -np 2 --mca btl scif,self ./test_scif
<br>
does produce correct results with ompi v1.8 r31309 (a crash might happen
<br>
in MPI_Finalize)
<br>
and it procuce incorrect results with ompi v1.8 r31671 and trunk (r31667)
<br>
<p>imho :
<br>
a) the scif btl could/should be automatically disabled if no MIC is
<br>
detected on a host
<br>
b) the scif btl could/should not be used to communicates between two
<br>
cores of the host
<br>
(e.g. it should be used *only* when at least one peer is on the MIC)
<br>
c) that being said, that should work so there is a bug
<br>
d) there is a regression in v1.8 and a bug that might have been always here
<br>
<p>i attached a patch that will automatically disable the scif btl if no
<br>
MIC is found
<br>
(e.g. scif_get_nodeIDs(...) returns 1), i believe it is safe to use it
<br>
(that being said, we might want to add an option to force the use of the
<br>
scif btl no matter what)
<br>
<p>could you please share your thoughts on my asumptions a) b) c) and d) ?
<br>
if b) is what we want to implement, then mca_btl_scif_add_procs could be
<br>
modified as follow :
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!OPAL_PROC_ON_LOCAL_HOST(ompi_proc-&gt;proc_flags) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_proc == ompi_proc) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* scif can only be used with procs on this board */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>becomes
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (!OPAL_PROC_ON_LOCAL_HOST(ompi_proc-&gt;proc_flags) ||
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;my_proc == ompi_proc || (!IS_MIC(my_proc) &amp;&amp;
<br>
!IS_MIC(ompi_proc)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* scif can only be used with procs on this board unless
<br>
both procs are not on MIC */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;continue;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>and IS_MIC(proc) has to be implemented ...
<br>
/* is hwloc 1.7.2 already able to do this ? if yes, pointers will be
<br>
highly appreciated */
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>

<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14699/scif.patch">scif.patch</a>
</ul>
<!-- attachment="scif.patch" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14699/test_scif.c">test_scif.c</a>
</ul>
<!-- attachment="test_scif.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14700.php">Elena Elkina: "[OMPI devel] regression with derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="14698.php">Ralph Castain: "Re: [OMPI devel] RFC: Force Slurm to use PMI-1 unless PMI-2 is specifically requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
<li><strong>Reply:</strong> <a href="14724.php">Hjelm, Nathan T: "Re: [OMPI devel] scif btl side effects"</a>
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
