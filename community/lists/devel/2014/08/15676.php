<?
$subject_val = "[OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 21 15:45:19 2014" -->
<!-- isoreceived="20140821194519" -->
<!-- sent="Thu, 21 Aug 2014 20:45:14 +0100" -->
<!-- isosent="20140821194514" -->
<!-- name="Andrej Prsa" -->
<!-- email="aprsa09_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working" -->
<!-- id="20140821204514.6075028e_at_antares" -->
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
<strong>Subject:</strong> [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working<br>
<strong>From:</strong> Andrej Prsa (<em>aprsa09_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-21 15:45:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15677.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15675.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15677.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15677.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear devels,
<br>
<p>I have been trying out 1.8.2rcs recently and found a show-stopping
<br>
problem on our cluster. Running any job with any number of processors
<br>
larger than 32 will always employ only 32 cores per node (our nodes
<br>
have 48 cores). We are seeing identical behavior with 1.8.2rc4,
<br>
1.8.2rc2, and 1.8.1. Running identical programs shows no such issues
<br>
with version 1.6.5, where all 48 cores per node are working. While our
<br>
system is running torque/maui, the problem is evident by running mpirun
<br>
directly.
<br>
<p>I am attaching hwloc topology in case that helps -- I am aware of a
<br>
buggy bios code that trips hwloc, but I don't know if that might be an
<br>
issue or not. I am happy to help debugging if you can provide me with
<br>
guidance.
<br>
<p>Thanks,
<br>
Andrej
<br>
<p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15676/cluster.output">cluster.output</a>
</ul>
<!-- attachment="cluster.output" -->
<hr>
<ul>
<li>application/x-bzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15676/cluster.tar.bz2">cluster.tar.bz2</a>
</ul>
<!-- attachment="cluster.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15677.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Previous message:</strong> <a href="15675.php">Gilles Gouaillardet: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r32555 - trunk/opal/mca/btl/scif"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15677.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<li><strong>Reply:</strong> <a href="15677.php">Ralph Castain: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
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
