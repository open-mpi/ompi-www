<?
$subject_val = "[OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 03:54:54 2015" -->
<!-- isoreceived="20150401075454" -->
<!-- sent="Wed, 1 Apr 2015 07:54:52 +0000" -->
<!-- isosent="20150401075452" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EA490A_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-01 03:54:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having problems running OpenMPI jobs
<br>
(using a hostfile) on an HPC cluster running
<br>
ROCKS on CentOS 6.3. I'm running OpenMPI
<br>
outside of Sun Grid Engine (i.e. it is not submitted
<br>
as a job to SGE). The program being run is a LAPACK
<br>
benchmark. The commandline parameter I'm
<br>
using to run the jobs is:
<br>
<p>$MPI_DIR/bin/mpirun -np $NSLOTS -bind-to-core -report-bindings --hostfile hostfile --mca btl_tcp_if_include eth0 --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
<br>
<p>Where MPI_DIR=/hpc/apps/mpi/openmpi/1.8.2/
<br>
NSLOTS=128
<br>
<p>I'm getting errors of the form and OpenMPI never runs the LAPACK benchmark:
<br>
<p>&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;WARNING: a request was made to bind a process. While the system
<br>
&nbsp;&nbsp;&nbsp;supports binding the process itself, at least one node does NOT
<br>
&nbsp;&nbsp;&nbsp;support binding memory to the process location.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Node:  csclprd3-0-11
<br>
<p>&nbsp;&nbsp;&nbsp;This usually is due to not having the required NUMA support installed
<br>
&nbsp;&nbsp;&nbsp;on the node. In some Linux distributions, the required support is
<br>
&nbsp;&nbsp;&nbsp;contained in the libnumactl and libnumactl-devel packages.
<br>
&nbsp;&nbsp;&nbsp;This is a warning only; your job will continue, though performance may be degraded.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;A request was made to bind to that would result in binding more
<br>
&nbsp;&nbsp;&nbsp;processes than cpus on a resource:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bind to:     CORE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node:        csclprd3-0-11
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#processes:  2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#cpus:       1
<br>
<p>&nbsp;&nbsp;&nbsp;You can override this protection by adding the &quot;overload-allowed&quot;
<br>
&nbsp;&nbsp;&nbsp;option to your binding directive.
<br>
&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p>The only installed numa packages are:
<br>
numactl.x86_64                                                2.0.7-3.el6                        @centos6.3-x86_64-0/$
<br>
<p>When I search for the available NUMA packages I find:
<br>
<p>yum search numa | less
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loaded plugins: fastestmirror
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Loading mirror speeds from cached hostfile
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;============================== N/S Matched: numa ===============================
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numactl-devel.i686 : Development package for building Applications that use numa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numactl-devel.x86_64 : Development package for building Applications that use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: numa
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numad.x86_64 : NUMA user daemon
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numactl.i686 : Library for tuning for Non Uniform Memory Access machines
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;numactl.x86_64 : Library for tuning for Non Uniform Memory Access machines
<br>
<p>Do I need to install additional and/or different NUMA packages in order to get OpenMPI to work
<br>
on this cluster?
<br>
<p>-Bill Lane
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26587/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/03/26586.php">Jeff Squyres (jsquyres): "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
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
