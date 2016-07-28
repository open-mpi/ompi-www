<?
$subject_val = "[OMPI users] Simple MPI hello world hangs over IB";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  4 10:55:23 2013" -->
<!-- isoreceived="20130204155523" -->
<!-- sent="Mon, 4 Feb 2013 10:55:01 -0500" -->
<!-- isosent="20130204155501" -->
<!-- name="Bharath Ramesh" -->
<!-- email="bramesh_at_[hidden]" -->
<!-- subject="[OMPI users] Simple MPI hello world hangs over IB" -->
<!-- id="20130204155501.GV5904_at_vt.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Simple MPI hello world hangs over IB<br>
<strong>From:</strong> Bharath Ramesh (<em>bramesh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-04 10:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21292.php">Number Cruncher: "[OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Previous message:</strong> <a href="21290.php">Clarinet: "[OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21375.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Simple MPI hello world hangs over IB"</a>
<li><strong>Reply:</strong> <a href="21375.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Simple MPI hello world hangs over IB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am trying to debug an issue which is really weird. I have
<br>
simple MPI hello world application (attached) that hangs when I
<br>
try to run on our cluster using 256 nodes with 16 cores on each
<br>
node. The cluster uses QDR IB.
<br>
<p>I am able to run the test over ethernet by excluding openib from
<br>
the btl. However, what is weird is that for the same set of nodes
<br>
xhpl completes without any error using 256 nodes and 16 cores. I
<br>
have tried running the Pallas MPI Benchmark and it also behaves
<br>
similarly to hello world and ends up hanging when I run it using
<br>
256 nodes.
<br>
<p>When I attach gdb to the MPI processes and look at the backtrace
<br>
I see that close ~1000 of the MPI processes are stuck in MPI_Send
<br>
while the others are waiting in MPI_Finalize. I have checked to
<br>
make sure that the ulimit setting for locked memory is unlimited.
<br>
The number of open files per process is 131072. The default MPI
<br>
stack provided is openmpi-1.6.1 on the system. I compiled
<br>
openmpi-1.6.3 in my home directory and the behavior remains to be
<br>
the same.
<br>
<p>I would appreciate any help in debugging this issue.
<br>
<p><pre>
-- 
Bharath

</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21291/hello_world_mpi.c">hello_world_mpi.c</a>
</ul>
<!-- attachment="hello_world_mpi.c" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21291/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21292.php">Number Cruncher: "[OMPI users] All_to_allv algorithm patch"</a>
<li><strong>Previous message:</strong> <a href="21290.php">Clarinet: "[OMPI users] OpenMPI 1.6 with Intel 11 Compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21375.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Simple MPI hello world hangs over IB"</a>
<li><strong>Reply:</strong> <a href="21375.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Simple MPI hello world hangs over IB"</a>
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
