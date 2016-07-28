<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 08:04:06 2015" -->
<!-- isoreceived="20150401120406" -->
<!-- sent="Wed, 1 Apr 2015 05:04:04 -0700" -->
<!-- isosent="20150401120404" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3" -->
<!-- id="CAMD57oejbNL+U-NWpsOaPZ78qdrY9F5C7OX928xr4vD3MPJKKQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EA490A_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-01 08:04:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26587.php">Lane, William: "[OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26587.php">Lane, William: "[OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The warning about binding to memory is due to not having numactl-devel
<br>
installed on the system. The job would still run, but we are warning you
<br>
that we cannot bind memory to the same domain as the core where we bind the
<br>
process. Can cause poor performance, but not fatal. I forget the name of
<br>
the param, but you can tell us to &quot;shut up&quot; :-)
<br>
<p>The other warning/error indicates that we aren't seeing enough cores on the
<br>
allocation you gave us via the hostile to support one proc/core - i.e., we
<br>
didn't at least 128 cores in the sum of the nodes you told us about. I take
<br>
it you were expecting that there were that many or more?
<br>
<p>Ralph
<br>
<p><p>On Wed, Apr 1, 2015 at 12:54 AM, Lane, William &lt;William.Lane_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;  I'm having problems running OpenMPI jobs
</span><br>
<span class="quotelev1">&gt; (using a hostfile) on an HPC cluster running
</span><br>
<span class="quotelev1">&gt; ROCKS on CentOS 6.3. I'm running OpenMPI
</span><br>
<span class="quotelev1">&gt; outside of Sun Grid Engine (i.e. it is not submitted
</span><br>
<span class="quotelev1">&gt; as a job to SGE). The program being run is a LAPACK
</span><br>
<span class="quotelev1">&gt; benchmark. The commandline parameter I'm
</span><br>
<span class="quotelev1">&gt; using to run the jobs is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $MPI_DIR/bin/mpirun -np $NSLOTS -bind-to-core -report-bindings --hostfile
</span><br>
<span class="quotelev1">&gt; hostfile --mca btl_tcp_if_include eth0 --prefix $MPI_DIR
</span><br>
<span class="quotelev1">&gt; $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Where MPI_DIR=/hpc/apps/mpi/openmpi/1.8.2/
</span><br>
<span class="quotelev1">&gt; NSLOTS=128
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm getting errors of the form and OpenMPI never runs the LAPACK benchmark:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev1">&gt;    supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev1">&gt;    support binding memory to the process location.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Node:  csclprd3-0-11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev1">&gt;    on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev1">&gt;    contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev1">&gt;    This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev1">&gt; be degraded.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;    A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev1">&gt;    processes than cpus on a resource:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       Bind to:     CORE
</span><br>
<span class="quotelev1">&gt;       Node:        csclprd3-0-11
</span><br>
<span class="quotelev1">&gt;       #processes:  2
</span><br>
<span class="quotelev1">&gt;       #cpus:       1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev1">&gt;    option to your binding directive.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only installed numa packages are:
</span><br>
<span class="quotelev1">&gt; numactl.x86_64
</span><br>
<span class="quotelev1">&gt; 2.0.7-3.el6                        @centos6.3-x86_64-0/$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I search for the available NUMA packages I find:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yum search numa | less
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Loaded plugins: fastestmirror
</span><br>
<span class="quotelev1">&gt;         Loading mirror speeds from cached hostfile
</span><br>
<span class="quotelev1">&gt;         ============================== N/S Matched: numa
</span><br>
<span class="quotelev1">&gt; ===============================
</span><br>
<span class="quotelev1">&gt;         numactl-devel.i686 : Development package for building Applications
</span><br>
<span class="quotelev1">&gt; that use numa
</span><br>
<span class="quotelev1">&gt;         numactl-devel.x86_64 : Development package for building
</span><br>
<span class="quotelev1">&gt; Applications that use
</span><br>
<span class="quotelev1">&gt;                              : numa
</span><br>
<span class="quotelev1">&gt;         numad.x86_64 : NUMA user daemon
</span><br>
<span class="quotelev1">&gt;         numactl.i686 : Library for tuning for Non Uniform Memory Access
</span><br>
<span class="quotelev1">&gt; machines
</span><br>
<span class="quotelev1">&gt;         numactl.x86_64 : Library for tuning for Non Uniform Memory Access
</span><br>
<span class="quotelev1">&gt; machines
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do I need to install additional and/or different NUMA packages in order to
</span><br>
<span class="quotelev1">&gt; get OpenMPI to work
</span><br>
<span class="quotelev1">&gt; on this cluster?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill Lane
</span><br>
<span class="quotelev1">&gt;  IMPORTANT WARNING: This message is intended for the use of the person or
</span><br>
<span class="quotelev1">&gt; entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev1">&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev1">&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev1">&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev1">&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev1">&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev1">&gt; you for your cooperation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Searchable archives:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/index.php">http://www.open-mpi.org/community/lists/users/2015/04/index.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26588/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Previous message:</strong> <a href="26587.php">Lane, William: "[OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26587.php">Lane, William: "[OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
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
