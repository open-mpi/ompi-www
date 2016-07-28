<?
$subject_val = "[OMPI devel] race condition in abort can cause mpirun v1.8 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 26 03:03:24 2014" -->
<!-- isoreceived="20141126080324" -->
<!-- sent="Wed, 26 Nov 2014 17:03:12 +0900" -->
<!-- isosent="20141126080312" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] race condition in abort can cause mpirun v1.8 hang" -->
<!-- id="54758940.1090603_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] race condition in abort can cause mpirun v1.8 hang<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-26 03:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16358.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Previous message:</strong> <a href="16356.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16360.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Reply:</strong> <a href="16360.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i noted several hangs in mtt with the v1.8 branch.
<br>
<p>a simple way to reproduce it is to use the MPI_Errhandler_fatal_f test
<br>
from the intel_tests suite,
<br>
invoke mpirun on one node and run the taks on an other node :
<br>
<p>node0$ mpirun -np 3 -host node1 --mca btl tcp,self ./MPI_Errhandler_fatal_f
<br>
<p>/* since this is a race condition, you might need to run this in a loop
<br>
in order to hit the bug */
<br>
<p>the attached tarball contains a patch (add debug + temporary hack) and
<br>
some log files obtained with
<br>
--mca errmgr_base_verbose 100 --mca odls_base_verbose 100
<br>
<p>without the hack, i can reproduce the bug with -np 3 (log.ko.txt) , with
<br>
the hack, i can still reproduce the hang (though it might
<br>
be a different one) with -np 16 (log.ko.2.txt)
<br>
<p>i remember some similar hangs were fixed on the trunk/master a few
<br>
monthes ago.
<br>
i tried to backport some commits but it did not help :-(
<br>
<p>could you please have a look at this ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>
<br><hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16357/abort_hang.tar.gz">abort_hang.tar.gz</a>
</ul>
<!-- attachment="abort_hang.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16358.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Previous message:</strong> <a href="16356.php">Ralph Castain: "Re: [OMPI devel] OpenMPI v1.8 and v1.8.3 mpirun hangs at execution on an embedded ARM Linux kernel version 3.15.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16360.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Reply:</strong> <a href="16360.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
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
