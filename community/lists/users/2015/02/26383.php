<?
$subject_val = "[OMPI users] machinefile binding error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 24 15:49:10 2015" -->
<!-- isoreceived="20150224204910" -->
<!-- sent="Tue, 24 Feb 2015 20:49:02 +0000" -->
<!-- isosent="20150224204902" -->
<!-- name="Galloway, Jack D" -->
<!-- email="jackg_at_[hidden]" -->
<!-- subject="[OMPI users] machinefile binding error" -->
<!-- id="B2B766770F518A4EA4567774C593969831ADBB2F_at_ECS-EXG-P-MB07.win.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] machinefile binding error<br>
<strong>From:</strong> Galloway, Jack D (<em>jackg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-24 15:49:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Previous message:</strong> <a href="26382.php">vithanousek: "[OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26385.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Reply:</strong> <a href="26385.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I recently upgraded my CentOS kernel and am running 2.6.32-504.8.1.el6.x86_64, in this upgrade I also decided to upgrade my intel/openmpi codes.
<br>
<p>I upgraded from:
<br>
<p>intel version 13.1.2, with openmpi 1.6.5
<br>
intel 15.0.2, with openmpi 1.8.4
<br>
<p>Previously a command of &quot;mpirun -np NP -machinefile MACH executable&quot; would return expected results, particularly in how the machinefile was mapped to mpi tasks.  However, now when I try to run a code (which worked in the 13.1.2/1.6.5 paradigm) things behave anomalously.
<br>
<p>For instance, if I have machine file (&quot;mach_burn_24s&quot;) that consists of:
<br>
tebow
<br>
tebow121 slots=24
<br>
tebow122 slots=24
<br>
tebow123 slots=24
<br>
tebow124 slots=24
<br>
tebow125 slots=24
<br>
tebow126 slots=24
<br>
tebow127 slots=24
<br>
tebow128 slots=24
<br>
tebow129 slots=24
<br>
tebow130 slots=24
<br>
tebow131 slots=24
<br>
tebow132 slots=24
<br>
tebow133 slots=24
<br>
tebow134 slots=24
<br>
tebow135 slots=24
<br>
<p>Before the allocation would follow as expected (i.e. -np 25 -machinefile above) would give 1 task on tebow, and 24 on tebow121, and if I assigned 361 the entire machinefile would be filled up.
<br>
<p>However now it's not the case.  If I type &quot;mpirun -np 24 -machinefile burn_machs/mach_burn_24s hostname&quot;, I get the following result:
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow
<br>
tebow121
<br>
tebow
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>
tebow121
<br>
<p>Now there are 16 cores on &quot;tebow&quot;, but I only requested one task in the machinefile (so I assume).  And furthermore if I request 361 I get the following catastrophic error:
<br>
<p>--------------------------------------------------------------------------
<br>
WARNING: a request was made to bind a process. While the system
<br>
supports binding the process itself, at least one node does NOT
<br>
support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;Node:  tebow124
<br>
<p>This usually is due to not having the required NUMA support installed
<br>
on the node. In some Linux distributions, the required support is
<br>
contained in the libnumactl and libnumactl-devel packages.
<br>
This is a warning only; your job will continue, though performance may be degraded.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
A request was made to bind to that would result in binding more
<br>
processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;Bind to:     NONE
<br>
&nbsp;&nbsp;&nbsp;Node:        tebow125
<br>
&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>You can override this protection by adding the &quot;overload-allowed&quot;
<br>
option to your binding directive.
<br>
--------------------------------------------------------------------------
<br>
<p>All the compute nodes (tebow121-135) have 24+ cores on them.  I believe some configuration change has occurred which has duped the system into trying to go off the reported number of cores, but even then it seems to be getting things wrong (i.e. not pulling the right number of cores).
<br>
<p>The config line use previously (which worked without issue according to the machinefile specification) was:
<br>
&nbsp;&nbsp;$ ./configure --prefix=/opt/openmpi/openmpi-1.6.5 --with-openib --with-openib-libdir=/usr/lib64 CC=icc F77=ifort FC=ifort CXX=icpc
<br>
<p>The config line which I now use is:
<br>
./configure --prefix=/opt/openmpi/openmpi-1.8.4 --with-verbs --with-verbs-libdir=/usr/lib64 CC=icc F77=ifort FC=ifort CXX=icpc
<br>
<p>I'm at a loss where to look for the solution, any help is appreciated.
<br>
<p>--Jack
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26384.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Why are the static libs different if compiled with or	without dynamic switch?"</a>
<li><strong>Previous message:</strong> <a href="26382.php">vithanousek: "[OMPI users] MPIIO and OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26385.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
<li><strong>Reply:</strong> <a href="26385.php">Ralph Castain: "Re: [OMPI users] machinefile binding error"</a>
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
