<?
$subject_val = "[OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 13:13:53 2015" -->
<!-- isoreceived="20151015171353" -->
<!-- sent="Thu, 15 Oct 2015 17:13:45 +0000" -->
<!-- isosent="20151015171345" -->
<!-- name="Zhi Zhang" -->
<!-- email="zzhang_at_[hidden]" -->
<!-- subject="[OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0" -->
<!-- id="4227B153F68A8F4AA6872B9C0DD73CD924DD3E9E_at_AEMAILMBX03.lenovo.com" -->
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
<strong>Subject:</strong> [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0<br>
<strong>From:</strong> Zhi Zhang (<em>zzhang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 13:13:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27872.php">Brant Abbott: "[OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27870.php">Siegmar Gross: "Re: [OMPI users] fatalerror:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Reply:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>When running the Intel MPI Benchmark (versions 3.2.3 and 4.1.0.109 were tried), running all benchmarks, and looping the test over and over, after a while, when the test is exiting (running MPI_Finalize), the test will hang.
<br>
<p>When the processes on the nodes are checked, one node will be running IMB-MPI1 still, and that process will be in zombie state.  The orted parent of that process is still running though.  This has been reproduced with multiple networks and transports, but most debug on this was done with Intel TrueScale IB.
<br>
<p>I can provide more information if needed. Thanks.
<br>
<p>[mysig]
<br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27871/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-27871/image001.png" alt="image001.png
">
<!-- attachment="image001.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27872.php">Brant Abbott: "[OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27870.php">Siegmar Gross: "Re: [OMPI users] fatalerror:openmpi-v2.x-dev-415-g5c9b192andopenmpi-dev-2696-gd579a07"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
<li><strong>Reply:</strong> <a href="27875.php">Jeff Squyres (jsquyres): "Re: [OMPI users] IMB-MPI1 stuck at MPI_Finalize with OpenMPI 1.10.0"</a>
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
