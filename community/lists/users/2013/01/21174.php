<?
$subject_val = "[OMPI users] Invalid filename?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 21 09:55:29 2013" -->
<!-- isoreceived="20130121145529" -->
<!-- sent="Mon, 21 Jan 2013 09:55:23 -0500" -->
<!-- isosent="20130121145523" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] Invalid filename?" -->
<!-- id="50FD56DB.4050107_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> [OMPI users] Invalid filename?<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-21 09:55:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21175.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Previous message:</strong> <a href="21173.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21176.php">Reuti: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>Reply:</strong> <a href="21176.php">Reuti: "Re: [OMPI users] Invalid filename?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>If you try to open a file with a &quot;:&quot; in the filename (ex: &quot;file:o&quot;), you 
<br>
get an MPI_ERR_NO_SUCH_FILE.
<br>
<p>ERROR Returned by MPI: 42
<br>
ERROR_string Returned by MPI: MPI_ERR_NO_SUCH_FILE: no such file or 
<br>
directory
<br>
<p>Just launch the simple test code attached to see the problem.
<br>
<p>MPICH has the same bug, but is a little more explicit about it:
<br>
<p>ADIO_RESOLVEFILETYPE_PREFIX(575): Invalid file name file:o
<br>
<p>Is this really a bug?
<br>
<p>Thanks,
<br>
<p>Eric
<br>
<p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21174/bug_file_open.cc">bug_file_open.cc</a>
</ul>
<!-- attachment="bug_file_open.cc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21175.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<li><strong>Previous message:</strong> <a href="21173.php">Francesco Simula: "Re: [OMPI users] OMPI 1.6.3, InfiniBand and MTL MXM; unable to make it work!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21176.php">Reuti: "Re: [OMPI users] Invalid filename?"</a>
<li><strong>Reply:</strong> <a href="21176.php">Reuti: "Re: [OMPI users] Invalid filename?"</a>
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
