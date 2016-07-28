<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 10 23:57:41 2006" -->
<!-- isoreceived="20060411035741" -->
<!-- sent="Mon, 10 Apr 2006 21:57:34 -0600" -->
<!-- isosent="20060411035734" -->
<!-- name="Lee D. Peterson" -->
<!-- email="Lee.Peterson_at_[hidden]" -->
<!-- subject="[OMPI users] MPI Jobs Hang on OS X XServe Cluster" -->
<!-- id="1320CD18-493B-4DBC-BB82-8CA81ED000A1_at_Colorado.EDU" -->
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
<strong>From:</strong> Lee D. Peterson (<em>Lee.Peterson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-10 23:57:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Previous message:</strong> <a href="1011.php">Aniruddha Shet: "[OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1065.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1065.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI,
<br>
<p>I'm transitioning from LAM-MPI to OpenMPI and have just compiled OMPI  
<br>
1.0.2 on OS X server 10.4.6. I'm using gcc 3.3 and XLF (both f77 and  
<br>
f90), and I'm using ssh to run the jobs. My cluster is all G5 dual  
<br>
2GHz+ xserves, and I am using both ethernet ports for communication.  
<br>
One is used for NFS and the other is for MPI.
<br>
<p>I've had few problems the past year running this config with LAM-MPI  
<br>
(latest release). But what worked before doesn't with OpenMPI 1.0.2.
<br>
<p>When I run any parallel job that spans multiple machines, the process  
<br>
runs indefinitely. I've checked this using the BLACS and PBLAS test  
<br>
routines, the HPL benchmark, and even a simple mpi-pong program. All  
<br>
of them execute but produce no output past some initial output,  
<br>
consuming 100% of the CPU on every node that's launched. In contrast,  
<br>
all of these programs run in a few seconds on a single node, with two  
<br>
processors, and up to -np 8. When I cntrl-C to stop the program,  
<br>
openmpi safely stops all the processes, no matter how many machines  
<br>
have been used.
<br>
<p>I noticed a couple postings from the past few months that seem to be  
<br>
related but didn't seem to be quite the same symptoms. Any ideas what  
<br>
could be going on?
<br>
<p>OpenMPI is a really great project, and it is obvious the quality of  
<br>
software development that has gone into it. I appreciate all your  
<br>
help. My config.log and omni-info.out files are attached.
<br>
<p>Lee Peterson
<br>
Professor
<br>
Aerospace Engineering Sciences
<br>
University of Colorado
<br>
Boulder, CO
<br>
<p>
<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1012/ompi-output.tgz">ompi-output.tgz</a>
</ul>
<!-- attachment="ompi-output.tgz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1013.php">Michael Kluskens: "Re: [OMPI users] ORTE errors"</a>
<li><strong>Previous message:</strong> <a href="1011.php">Aniruddha Shet: "[OMPI users] Error while loading shared libraries"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1065.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
<li><strong>Reply:</strong> <a href="1065.php">Lee D. Peterson: "Re: [OMPI users] MPI Jobs Hang on OS X XServe Cluster"</a>
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
