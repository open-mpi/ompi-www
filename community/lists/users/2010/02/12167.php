<?
$subject_val = "[OMPI users] OpenMPI with Sun Gridengine: Host key verification failed.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 26 09:01:39 2010" -->
<!-- isoreceived="20100226140139" -->
<!-- sent="Fri, 26 Feb 2010 15:01:34 +0100" -->
<!-- isosent="20100226140134" -->
<!-- name="Tobias M&#195;&#188;ller" -->
<!-- email="Tobias_Mueller_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI with Sun Gridengine: Host key verification failed." -->
<!-- id="17be05571002260601x6681073i7fde8faea7070958_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed.<br>
<strong>From:</strong> Tobias M&#195;&#188;ller (<em>Tobias_Mueller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-26 09:01:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12168.php">Reuti: "Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>Previous message:</strong> <a href="12166.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12168.php">Reuti: "Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>Reply:</strong> <a href="12168.php">Reuti: "Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everybody!
<br>
<p>I hope this list is the right place for my problem concerning OpenMPI
<br>
with Sun Gridengine. I'm running OpenMPI with gridengine support:
<br>
<p>MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
<br>
MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
<br>
<p>on 4 Debian Lenny system with Sun Gridengine 6.2. I've written a small
<br>
test program which only displays the hostname of each MPI process its
<br>
running on and start this via a simple script with a submit by qsub:
<br>
<p>#!/bin/bash
<br>
#$ -V
<br>
### number of processors and parallel environment
<br>
#$ -pe sol 32
<br>
### Job name
<br>
#$ -N &quot;mpi_test&quot;
<br>
### Start from current working directory
<br>
#$ -cwd
<br>
#$ -l arch=lx26-amd64
<br>
/usr/bin/mpirun.openmpi --mca pls_gridengine_verbose 1 -v ~/grid/mpi_test/main
<br>
<p>The gridengine starts the jobs, but fails with Host key verification
<br>
failed. in the logfiles:
<br>
<p>local configuration sol2.XXX not defined - using global configuration
<br>
Starting server daemon at host &quot;sol2.XXX&quot;
<br>
Starting server daemon at host &quot;sol3.XXX&quot;
<br>
Starting server daemon at host &quot;sol4.XXX&quot;
<br>
Starting server daemon at host &quot;sol1.XXX&quot;
<br>
Server daemon successfully started with task id &quot;1.sol2&quot;
<br>
Server daemon successfully started with task id &quot;1.sol4&quot;
<br>
Server daemon successfully started with task id &quot;1.sol1&quot;
<br>
Server daemon successfully started with task id &quot;1.sol3&quot;
<br>
Establishing /usr/bin/ssh session to host sol2.XXX ...
<br>
Host key verification failed.
<br>
/usr/bin/ssh exited with exit code 255
<br>
reading exit code from shepherd ... 129
<br>
[sol2:22892] ERROR: A daemon on node sol2.XXX failed to start as expected.
<br>
[sol2:22892] ERROR: There may be more information available from
<br>
[sol2:22892] ERROR: the 'qstat -t' command on the Grid Engine tasks.
<br>
[sol2:22892] ERROR: If the problem persists, please restart the
<br>
[sol2:22892] ERROR: Grid Engine PE job
<br>
[sol2:22892] ERROR: The daemon exited unexpectedly with status 129.
<br>
...
<br>
<p>The host keys for all 4 solX hosts are in the known_hosts file of the
<br>
user submitting the job and of the known_hosts file of root.
<br>
<p>Any hints why this could go wrong?
<br>
<p>Regards
<br>
&nbsp;&nbsp;Tobias
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12168.php">Reuti: "Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>Previous message:</strong> <a href="12166.php">Ralph Castain: "Re: [OMPI users] Number of processes and spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12168.php">Reuti: "Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
<li><strong>Reply:</strong> <a href="12168.php">Reuti: "Re: [OMPI users] OpenMPI with Sun Gridengine: Host key verification failed."</a>
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
