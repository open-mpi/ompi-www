<?
$subject_val = "[OMPI users] Checkpointing an MPI application with OMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 10:47:15 2013" -->
<!-- isoreceived="20130128154715" -->
<!-- sent="Mon, 28 Jan 2013 10:47:11 -0500" -->
<!-- isosent="20130128154711" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="[OMPI users] Checkpointing an MPI application with OMPI" -->
<!-- id="51069D7F.7030009_at_calculquebec.ca" -->
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
<strong>Subject:</strong> [OMPI users] Checkpointing an MPI application with OMPI<br>
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 10:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21244.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21242.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21244.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21244.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
I am doing checkpointing tests (with BLCR) with an MPI application 
<br>
compiled with OpenMPI 1.6.3, and I am seeing behaviors that are quite 
<br>
strange.
<br>
<p>First, some details about the tests :
<br>
- The only filesystem available on the nodes are 1) one tmpfs, 2) one 
<br>
lustre shared filesystem (tested to be able to provide ~15GB/s for 
<br>
writing and support ~40k IOPs).
<br>
- The job was running with 8 or 16 MPI ranks on nodes with 8 cores (1 or 
<br>
2 nodes). Each MPI rank was using approximately 200MB of memory.
<br>
- I was doing checkpoints with ompi-checkpoint and restarting with 
<br>
ompi-restart.
<br>
- I was starting with mpirun -am ft-enable-cr
<br>
- The nodes are monitored by ganglia, which allows me to see the number 
<br>
of IOPs and the read/write speed on the filesystem.
<br>
<p>I tried a few different mca settings, but I consistently observed that :
<br>
- The checkpoints lasted ~4-5 minutes each time
<br>
- During checkpoint, each node (8 ranks) was doing ~500 IOPs, and 
<br>
writing at ~15MB/s.
<br>
<p>I am worried by the number of IOPs and the very slow writing speed. This 
<br>
was a very small test. We have jobs running with 128 or 256 MPI ranks, 
<br>
each using 1-2 GB of ram per rank. With such jobs, the overall number of 
<br>
IOPs would reach tens of thousands and would completely overload our 
<br>
lustre filesystem. Moreover, with 15MB/s per node, the checkpointing 
<br>
process would take hours.
<br>
<p>How can I improve on that ? Is there an MCA setting that I am missing ?
<br>
<p>Thanks,
<br>
<p><pre>
-- 
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21244.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Previous message:</strong> <a href="21242.php">#YEO JINGJIE#: "Re: [OMPI users] Error when attempting to run LAMMPS on Centos 6.2	with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21244.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
<li><strong>Reply:</strong> <a href="21244.php">Ralph Castain: "Re: [OMPI users] Checkpointing an MPI application with OMPI"</a>
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
