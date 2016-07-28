<?
$subject_val = "[OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May  3 04:04:30 2011" -->
<!-- isoreceived="20110503080430" -->
<!-- sent="Tue, 3 May 2011 13:04:25 +0500" -->
<!-- isosent="20110503080425" -->
<!-- name="Ahsan Ali" -->
<!-- email="ahsanshah01_at_[hidden]" -->
<!-- subject="[OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)" -->
<!-- id="BANLkTinzKP8HEs_mvuUbkaMCXggoZ=Wcgg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)<br>
<strong>From:</strong> Ahsan Ali (<em>ahsanshah01_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-03 04:04:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16419.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Previous message:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16421.php">Ralph Castain: "Re: [OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)"</a>
<li><strong>Reply:</strong> <a href="16421.php">Ralph Castain: "Re: [OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am able to run WRFV3.2.1 using mpirun on multiple cores of single machine,
<br>
but when I want to run it across multiple nodes in cluster using hostlist
<br>
then I get error, The compute nodes are mounted with the master node during
<br>
boot using NFS. I get following error. Please help.
<br>
<p>[root_at_pmd02 em_real]# mpirun -np 10 -hostfile /home/pmdtest/hostlist
<br>
./real.exe
<br>
bash: orted: command not found
<br>
bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 22006) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
--------------------------------------------------------------------------
<br>
mpirun: clean termination accomplished
<br>
<p><p><pre>
-- 
Syed Ahsan Ali Bokhari
Electronic Engineer (EE)
Research &amp; Development Division
Pakistan Meteorological Department H-8/4, Islamabad.
Phone # off  +92518358714
Cell # +923155145014
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16419.php">Randolph Pullen: "Re: [OMPI users] is there an equiv of iprove for bcast?"</a>
<li><strong>Previous message:</strong> <a href="16417.php">Ralph Castain: "Re: [OMPI users] Building openmpi with PGI 11.4: won't find torque??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16421.php">Ralph Castain: "Re: [OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)"</a>
<li><strong>Reply:</strong> <a href="16421.php">Ralph Castain: "Re: [OMPI users] WRF Problem running in Parallel on multiple nodes (cluster)"</a>
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
