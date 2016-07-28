<?
$subject_val = "[OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  8 05:14:57 2015" -->
<!-- isoreceived="20151008091457" -->
<!-- sent="Thu, 8 Oct 2015 11:14:52 +0200" -->
<!-- isosent="20151008091452" -->
<!-- name="&#195;&#133;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer" -->
<!-- id="5616340C.6090606_at_hpc2n.umu.se" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer<br>
<strong>From:</strong> &#195;&#133;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-08 05:14:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27841.php">Marcin Krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28046.php">Åke Sandgren: "Re: [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28046.php">Åke Sandgren: "Re: [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!
<br>
<p>The attached code shows a problem when using mmap:ed buffer with 
<br>
MPI_Send and vader btl.
<br>
<p>With OMPI_MCA_btl='^vader' it works in all cases i have tested.
<br>
<p><p>Intel MPI also have problems with this, failing to receive the complete 
<br>
data, getting a NULL at position 6116 when the receiver is on another node.
<br>
<p>(Haven't had time to build 1.10 yet...)
<br>
<p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90-580 14
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27842/t.c">t.c</a>
</ul>
<!-- attachment="t.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27843.php">simona bellavista: "Re: [OMPI users] python, mpi and shell subprocess: orte_error_log"</a>
<li><strong>Previous message:</strong> <a href="27841.php">Marcin Krotkiewski: "Re: [OMPI users] Process binding with SLURM and 'heterogeneous' nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28046.php">Åke Sandgren: "Re: [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/28046.php">Åke Sandgren: "Re: [OMPI users] openmpi 1.8.8: Problems with MPI_Send and mmap:ed buffer"</a>
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
