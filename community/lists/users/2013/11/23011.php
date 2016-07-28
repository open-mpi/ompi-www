<?
$subject_val = "[OMPI users] Bug MPI_Iscatter";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 21 17:20:28 2013" -->
<!-- isoreceived="20131121222028" -->
<!-- sent="Thu, 21 Nov 2013 15:19:50 -0700" -->
<!-- isosent="20131121221950" -->
<!-- name="Pierre Jolivet" -->
<!-- email="jolivet_at_[hidden]" -->
<!-- subject="[OMPI users] Bug MPI_Iscatter" -->
<!-- id="43AA9D3E-C3E3-4D60-B182-03C7A73C95E7_at_ann.jussieu.fr" -->
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
<strong>Subject:</strong> [OMPI users] Bug MPI_Iscatter<br>
<strong>From:</strong> Pierre Jolivet (<em>jolivet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-21 17:19:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23012.php">Jeff Squyres (jsquyres): "[OMPI users] Did you go to the Open MPI BOF?"</a>
<li><strong>Previous message:</strong> <a href="23010.php">Dominique Orban: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23014.php">Jeff Hammond: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23014.php">Jeff Hammond: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
The following code doesn&#146;t execute properly :
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int          taskid, ntasks;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Request rq;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;taskid);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;ntasks);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double* r;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int l = 0;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if(taskid &gt; 0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Iscatter(NULL, 0, MPI_DATATYPE_NULL, r, l, MPI_DOUBLE, 0, MPI_COMM_WORLD, &amp;rq);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
}
<br>
<p>Outcome:
<br>
*** An error occurred in MPI_Type_extent
<br>
*** MPI_ERR_TYPE: invalid datatype
<br>
<p>Hotfix: change MPI_DATATYPE_NULL to something else.
<br>
<p>Thanks for a quick fix.<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23012.php">Jeff Squyres (jsquyres): "[OMPI users] Did you go to the Open MPI BOF?"</a>
<li><strong>Previous message:</strong> <a href="23010.php">Dominique Orban: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23014.php">Jeff Hammond: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23014.php">Jeff Hammond: "Re: [OMPI users] Bug MPI_Iscatter"</a>
<li><strong>Reply:</strong> <a href="23015.php">George Bosilca: "Re: [OMPI users] Bug MPI_Iscatter"</a>
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
