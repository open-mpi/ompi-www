<?
$subject_val = "[OMPI users] memory per core/process";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 30 00:21:54 2013" -->
<!-- isoreceived="20130330042154" -->
<!-- sent="Sat, 30 Mar 2013 11:21:46 +0700" -->
<!-- isosent="20130330042146" -->
<!-- name="Duke Nguyen" -->
<!-- email="duke.lists_at_[hidden]" -->
<!-- subject="[OMPI users] memory per core/process" -->
<!-- id="5156685A.6030209_at_gmx.com" -->
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
<strong>Subject:</strong> [OMPI users] memory per core/process<br>
<strong>From:</strong> Duke Nguyen (<em>duke.lists_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-30 00:21:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21629.php">Jorge Naranjo Bouzas: "[OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>Previous message:</strong> <a href="21627.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21630.php">Patrick Bégou: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21630.php">Patrick Bégou: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21632.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I am sorry if this question had been asked before, but after ten days of 
<br>
searching/working on the system, I surrender :(. We try to use mpirun to 
<br>
run abinit (abinit.org) which in turns will call an input file to run 
<br>
some simulation. The command to run is pretty simple
<br>
<p>$ mpirun -np 4 /opt/apps/abinit/bin/abinit &lt; input.files &gt;&amp; output.log
<br>
<p>We ran this command on a server with two quad core x5420 and 16GB of 
<br>
memory. I called only 4 core, and I guess in theory each of the core 
<br>
should take up to 2GB each.
<br>
<p>In the output of the log, there is something about memory:
<br>
<p>P This job should need less than                     717.175 Mbytes of 
<br>
memory.
<br>
&nbsp;&nbsp;&nbsp;Rough estimation (10% accuracy) of disk space for files :
<br>
&nbsp;&nbsp;&nbsp;WF disk file :     69.524 Mbytes ; DEN or POT disk file : 14.240 Mbytes.
<br>
<p>So basically it reported that the above job should not take more than 
<br>
718MB each core.
<br>
<p>But I still have the Segmentation Fault error:
<br>
<p>mpirun noticed that process rank 0 with PID 16099 on node biobos exited 
<br>
on signal 11 (Segmentation fault).
<br>
<p>The system already has limits up to unlimited:
<br>
<p>$ cat /etc/security/limits.conf | grep -v '#'
<br>
* soft memlock unlimited
<br>
* hard memlock unlimited
<br>
<p>I also tried to run
<br>
<p>$ ulimit -l unlimited
<br>
<p>before the mpirun command above, but it did not help at all.
<br>
<p>If we adjust the parameters of the input.files to give the reported mem 
<br>
per core is less than 512MB, then the job runs fine.
<br>
<p>Please help,
<br>
<p>Thanks,
<br>
<p>D.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21628/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21629.php">Jorge Naranjo Bouzas: "[OMPI users] OpenMPI + BLCR + LSF integration"</a>
<li><strong>Previous message:</strong> <a href="21627.php">Gus Correa: "Re: [OMPI users] Problem with mpiexec --cpus-per-proc in multiple nodes in OMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21630.php">Patrick Bégou: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21630.php">Patrick Bégou: "Re: [OMPI users] memory per core/process"</a>
<li><strong>Reply:</strong> <a href="21632.php">Reuti: "Re: [OMPI users] memory per core/process"</a>
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
