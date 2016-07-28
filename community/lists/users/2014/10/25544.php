<?
$subject_val = "[OMPI users] New ib locked pages behavior?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 21 18:36:14 2014" -->
<!-- isoreceived="20141021223614" -->
<!-- sent="Tue, 21 Oct 2014 15:36:07 -0700" -->
<!-- isosent="20141021223607" -->
<!-- name="Bill Broadley" -->
<!-- email="bill_at_[hidden]" -->
<!-- subject="[OMPI users] New ib locked pages behavior?" -->
<!-- id="5446DFD7.2080601_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> [OMPI users] New ib locked pages behavior?<br>
<strong>From:</strong> Bill Broadley (<em>bill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-21 18:36:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25543.php">Siegmar Gross: "[OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25552.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've setup several clusters over the years with OpenMPI.  I often get the below
<br>
error:
<br>
<p>&nbsp;&nbsp;&nbsp;WARNING: It appears that your OpenFabrics subsystem is configured to only
<br>
&nbsp;&nbsp;&nbsp;allow registering part of your physical memory.  This can cause MPI jobs to
<br>
&nbsp;&nbsp;&nbsp;run with erratic performance, hang, and/or crash.
<br>
&nbsp;&nbsp;&nbsp;...
<br>
&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local host:              c2-31
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registerable memory:     32768 MiB
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total memory:            64398 MiB
<br>
<p>I'm well aware of the normal fixes, and have implemented them in puppet to
<br>
ensure compute nodes get the changes.  To be paranoid I've implemented all the
<br>
changes, and they all worked under ubuntu 13.10.
<br>
<p>However with ubuntu 14.04 it seems like it's not working, thus the above message.
<br>
<p>As recommended by the faq's I've implemented:
<br>
1) ulimit -l unlimited in /etc/profile.d/slurm.sh
<br>
2) PropagateResourceLimitsExcept=MEMLOCK in slurm.conf
<br>
3) UsePAM=1 in slurm.conf
<br>
4) in /etc/security/limits.conf
<br>
&nbsp;&nbsp;&nbsp;* hard memlock unlimited
<br>
&nbsp;&nbsp;&nbsp;* soft memlock unlimited
<br>
&nbsp;&nbsp;&nbsp;* hard stack unlimited
<br>
&nbsp;&nbsp;&nbsp;* soft stack unlimited
<br>
<p>My changes seem to be working, of I submit this to slurm:
<br>
#!/bin/bash -l
<br>
ulimit -l
<br>
hostname
<br>
mpirun bash -c ulimit -l
<br>
mpirun ./relay 1 131072
<br>
<p>I get:
<br>
&nbsp;&nbsp;&nbsp;unlimited
<br>
&nbsp;&nbsp;&nbsp;c2-31
<br>
&nbsp;&nbsp;&nbsp;unlimited
<br>
&nbsp;&nbsp;&nbsp;unlimited
<br>
&nbsp;&nbsp;&nbsp;unlimited
<br>
&nbsp;&nbsp;&nbsp;unlimited
<br>
&nbsp;&nbsp;&nbsp;&lt;above error message only 32GB of Registerable memory&gt;
<br>
&nbsp;&nbsp;&nbsp;&lt;output of mpirun relay&gt;
<br>
<p>Is there some new kernel parameter, ofed parameter, or similar that controls
<br>
locked pages now?  The kernel is 3.13.0-36 and the libopenmpi-dev package is 1.6.5.
<br>
<p>Since the ulimit -l is getting to both the slurm launched script and also to the
<br>
mpirun launched binaries I'm pretty puzzled.
<br>
<p>Any suggestions?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Previous message:</strong> <a href="25543.php">Siegmar Gross: "[OMPI users] which info is needed for SIGSEGV in Java for openmpi-dev-124-g91e9686 on Solaris"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25545.php">Gus Correa: "Re: [OMPI users] New ib locked pages behavior?"</a>
<li><strong>Reply:</strong> <a href="25552.php">rf_at_[hidden]: "Re: [OMPI users] New ib locked pages behavior?"</a>
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
