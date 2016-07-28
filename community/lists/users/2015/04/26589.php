<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 11:31:40 2015" -->
<!-- isoreceived="20150401153140" -->
<!-- sent="Wed, 1 Apr 2015 15:31:33 +0000" -->
<!-- isosent="20150401153133" -->
<!-- name="Lane, William" -->
<!-- email="William.Lane_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3" -->
<!-- id="434F2BB0AF80484CA04DE0D8C0738BF293EA4E0F_at_cshsmsgmbx02.CSMC.EDU" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57oejbNL+U-NWpsOaPZ78qdrY9F5C7OX928xr4vD3MPJKKQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3<br>
<strong>From:</strong> Lane, William (<em>William.Lane_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-01 11:31:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26590.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26590.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26590.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Here's the associated hostfile:
<br>
<p>#openMPI hostfile for csclprd3
<br>
#max slots prevents oversubscribing csclprd3-0-9
<br>
csclprd3-0-0 slots=12 max-slots=12
<br>
csclprd3-0-1 slots=6 max-slots=6
<br>
csclprd3-0-2 slots=6 max-slots=6
<br>
csclprd3-0-3 slots=6 max-slots=6
<br>
csclprd3-0-4 slots=6 max-slots=6
<br>
csclprd3-0-5 slots=6 max-slots=6
<br>
csclprd3-0-6 slots=6 max-slots=6
<br>
csclprd3-0-7 slots=32 max-slots=32
<br>
csclprd3-0-8 slots=32 max-slots=32
<br>
csclprd3-0-9 slots=32 max-slots=32
<br>
csclprd3-0-10 slots=32 max-slots=32
<br>
csclprd3-0-11 slots=32 max-slots=32
<br>
csclprd3-0-12 slots=12 max-slots=12
<br>
csclprd3-0-13 slots=24 max-slots=24
<br>
csclprd3-0-14 slots=16 max-slots=16
<br>
csclprd3-0-15 slots=16 max-slots=16
<br>
csclprd3-0-16 slots=24 max-slots=24
<br>
csclprd3-0-17 slots=24 max-slots=24
<br>
csclprd3-6-1 slots=4 max-slots=4
<br>
csclprd3-6-5 slots=4 max-slots=4
<br>
<p>The number of slots also includes hyperthreading
<br>
cores.
<br>
<p>One more question, would not having defined swap
<br>
partitions on all the nodes in the ring cause OpenMPI
<br>
to crash? Because no swap partitions are defined
<br>
for any of the above systems.
<br>
<p>-Bill L.
<br>
<p><p>________________________________
<br>
From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Wednesday, April 01, 2015 5:04 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
<br>
<p>The warning about binding to memory is due to not having numactl-devel installed on the system. The job would still run, but we are warning you that we cannot bind memory to the same domain as the core where we bind the process. Can cause poor performance, but not fatal. I forget the name of the param, but you can tell us to &quot;shut up&quot; :-)
<br>
<p>The other warning/error indicates that we aren't seeing enough cores on the allocation you gave us via the hostile to support one proc/core - i.e., we didn't at least 128 cores in the sum of the nodes you told us about. I take it you were expecting that there were that many or more?
<br>
<p>Ralph
<br>
<p><p>On Wed, Apr 1, 2015 at 12:54 AM, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2015/04/index.php">http://www.open-mpi.org/community/lists/users/2015/04/index.php</a>
<br>
<p>IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26589/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26590.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26588.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26590.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26590.php">Ralph Castain: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
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
