<?
$subject_val = "[OMPI users] OpenMPI (1.8.3) and environment variable export";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 12 11:08:39 2015" -->
<!-- isoreceived="20150612150839" -->
<!-- sent="Fri, 12 Jun 2015 17:08:37 +0200" -->
<!-- isosent="20150612150837" -->
<!-- name="borno_borno_at_[hidden]" -->
<!-- email="borno_borno_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI (1.8.3) and environment variable export" -->
<!-- id="trinity-2e1f4c59-77ea-43d3-a989-fac453cc355f-1434121717370_at_3capp-gmx-bs50" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI (1.8.3) and environment variable export<br>
<strong>From:</strong> <a href="mailto:borno_borno_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%20(1.8.3)%20and%20environment%20variable%20export"><em>borno_borno_at_[hidden]</em></a><br>
<strong>Date:</strong> 2015-06-12 11:08:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27125.php">Ralph Castain: "Re: [OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
<li><strong>Previous message:</strong> <a href="27123.php">kishor sharma: "[OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>Reply:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey there, 
<br>
<p>I know that variable export in general can be done with the -x option of mpirun, but I guess that won't help me.
<br>
More precisely I have a heterogeneous cluster (number of cores per cpu) and one process for each node. The application I need to launch uses hybrid MPI+OpenMP parallelization an I have to set the OMP_NUM_THREADS variable such that it fits the number of cores on each node. 
<br>
<p>I have no access to the application to get the number of cores from within the process. I just can launch it.
<br>
<p>Is there any chance to do this?
<br>
<p>Best regards,
<br>
<p>Kurt
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27125.php">Ralph Castain: "Re: [OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
<li><strong>Previous message:</strong> <a href="27123.php">kishor sharma: "[OMPI users] Help : Slowness with OpenMPI (1.8.1) and Numpy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
<li><strong>Reply:</strong> <a href="27126.php">Noam Bernstein: "Re: [OMPI users] OpenMPI (1.8.3) and environment variable export"</a>
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
