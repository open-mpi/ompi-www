<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 11:40:40 2015" -->
<!-- isoreceived="20150401154040" -->
<!-- sent="Wed, 1 Apr 2015 08:40:38 -0700" -->
<!-- isosent="20150401154038" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3" -->
<!-- id="CAMD57oeT+7nki+Of-L5Wzoa1TkkRu_skwRTzaqxbSH_j70BU=A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EA4E0F_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Date:</strong> 2015-04-01 11:40:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26611.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26611.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bingo - you said the magic word. This is a terminology issue. When we say
<br>
&quot;core&quot;, we mean the old definition of &quot;core&quot;, not &quot;hyperthreads&quot;. If you
<br>
want to use HTs as your base processing unit and bind to them, then you
<br>
need to specify --bind-to hwthread. That warning should then go away.
<br>
<p>We don't require a swap region be mounted - I didn't see anything in your
<br>
original message indicating that OMPI had actually crashed, but just wasn't
<br>
launching due to the above issue. Were you actually seeing crashes as well?
<br>
<p><p>On Wed, Apr 1, 2015 at 8:31 AM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's the associated hostfile:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #openMPI hostfile for csclprd3
</span><br>
<span class="quotelev1">&gt; #max slots prevents oversubscribing csclprd3-0-9
</span><br>
<span class="quotelev1">&gt; csclprd3-0-0 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt; csclprd3-0-1 slots=6 max-slots=6
</span><br>
<span class="quotelev1">&gt; csclprd3-0-2 slots=6 max-slots=6
</span><br>
<span class="quotelev1">&gt; csclprd3-0-3 slots=6 max-slots=6
</span><br>
<span class="quotelev1">&gt; csclprd3-0-4 slots=6 max-slots=6
</span><br>
<span class="quotelev1">&gt; csclprd3-0-5 slots=6 max-slots=6
</span><br>
<span class="quotelev1">&gt; csclprd3-0-6 slots=6 max-slots=6
</span><br>
<span class="quotelev1">&gt; csclprd3-0-7 slots=32 max-slots=32
</span><br>
<span class="quotelev1">&gt; csclprd3-0-8 slots=32 max-slots=32
</span><br>
<span class="quotelev1">&gt; csclprd3-0-9 slots=32 max-slots=32
</span><br>
<span class="quotelev1">&gt; csclprd3-0-10 slots=32 max-slots=32
</span><br>
<span class="quotelev1">&gt; csclprd3-0-11 slots=32 max-slots=32
</span><br>
<span class="quotelev1">&gt; csclprd3-0-12 slots=12 max-slots=12
</span><br>
<span class="quotelev1">&gt; csclprd3-0-13 slots=24 max-slots=24
</span><br>
<span class="quotelev1">&gt; csclprd3-0-14 slots=16 max-slots=16
</span><br>
<span class="quotelev1">&gt; csclprd3-0-15 slots=16 max-slots=16
</span><br>
<span class="quotelev1">&gt; csclprd3-0-16 slots=24 max-slots=24
</span><br>
<span class="quotelev1">&gt; csclprd3-0-17 slots=24 max-slots=24
</span><br>
<span class="quotelev1">&gt; csclprd3-6-1 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; csclprd3-6-5 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The number of slots also includes hyperthreading
</span><br>
<span class="quotelev1">&gt; cores.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One more question, would not having defined swap
</span><br>
<span class="quotelev1">&gt; partitions on all the nodes in the ring cause OpenMPI
</span><br>
<span class="quotelev1">&gt; to crash? Because no swap partitions are defined
</span><br>
<span class="quotelev1">&gt; for any of the above systems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Bill L.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* users [users-bounces_at_[hidden]] on behalf of Ralph Castain [
</span><br>
<span class="quotelev1">&gt; rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, April 01, 2015 5:04 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   The warning about binding to memory is due to not having numactl-devel
</span><br>
<span class="quotelev1">&gt; installed on the system. The job would still run, but we are warning you
</span><br>
<span class="quotelev1">&gt; that we cannot bind memory to the same domain as the core where we bind the
</span><br>
<span class="quotelev1">&gt; process. Can cause poor performance, but not fatal. I forget the name of
</span><br>
<span class="quotelev1">&gt; the param, but you can tell us to &quot;shut up&quot; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The other warning/error indicates that we aren't seeing enough cores on
</span><br>
<span class="quotelev1">&gt; the allocation you gave us via the hostile to support one proc/core - i.e.,
</span><br>
<span class="quotelev1">&gt; we didn't at least 128 cores in the sum of the nodes you told us about. I
</span><br>
<span class="quotelev1">&gt; take it you were expecting that there were that many or more?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 1, 2015 at 12:54 AM, Lane, William &lt;William.Lane_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I'm having problems running OpenMPI jobs
</span><br>
<span class="quotelev2">&gt;&gt; (using a hostfile) on an HPC cluster running
</span><br>
<span class="quotelev2">&gt;&gt; ROCKS on CentOS 6.3. I'm running OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; outside of Sun Grid Engine (i.e. it is not submitted
</span><br>
<span class="quotelev2">&gt;&gt; as a job to SGE). The program being run is a LAPACK
</span><br>
<span class="quotelev2">&gt;&gt; benchmark. The commandline parameter I'm
</span><br>
<span class="quotelev2">&gt;&gt; using to run the jobs is:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $MPI_DIR/bin/mpirun -np $NSLOTS -bind-to-core -report-bindings --hostfile
</span><br>
<span class="quotelev2">&gt;&gt; hostfile --mca btl_tcp_if_include eth0 --prefix $MPI_DIR
</span><br>
<span class="quotelev2">&gt;&gt; $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Where MPI_DIR=/hpc/apps/mpi/openmpi/1.8.2/
</span><br>
<span class="quotelev2">&gt;&gt; NSLOTS=128
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm getting errors of the form and OpenMPI never runs the LAPACK
</span><br>
<span class="quotelev2">&gt;&gt; benchmark:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev2">&gt;&gt;    supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev2">&gt;&gt;    support binding memory to the process location.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Node:  csclprd3-0-11
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev2">&gt;&gt;    on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev2">&gt;&gt;    contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev2">&gt;&gt;    This is a warning only; your job will continue, though performance may
</span><br>
<span class="quotelev2">&gt;&gt; be degraded.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;    A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev2">&gt;&gt;    processes than cpus on a resource:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Bind to:     CORE
</span><br>
<span class="quotelev2">&gt;&gt;       Node:        csclprd3-0-11
</span><br>
<span class="quotelev2">&gt;&gt;       #processes:  2
</span><br>
<span class="quotelev2">&gt;&gt;       #cpus:       1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev2">&gt;&gt;    option to your binding directive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The only installed numa packages are:
</span><br>
<span class="quotelev2">&gt;&gt; numactl.x86_64
</span><br>
<span class="quotelev2">&gt;&gt; 2.0.7-3.el6                        @centos6.3-x86_64-0/$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I search for the available NUMA packages I find:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; yum search numa | less
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Loaded plugins: fastestmirror
</span><br>
<span class="quotelev2">&gt;&gt;         Loading mirror speeds from cached hostfile
</span><br>
<span class="quotelev2">&gt;&gt;         ============================== N/S Matched: numa
</span><br>
<span class="quotelev2">&gt;&gt; ===============================
</span><br>
<span class="quotelev2">&gt;&gt;         numactl-devel.i686 : Development package for building
</span><br>
<span class="quotelev2">&gt;&gt; Applications that use numa
</span><br>
<span class="quotelev2">&gt;&gt;         numactl-devel.x86_64 : Development package for building
</span><br>
<span class="quotelev2">&gt;&gt; Applications that use
</span><br>
<span class="quotelev2">&gt;&gt;                              : numa
</span><br>
<span class="quotelev2">&gt;&gt;         numad.x86_64 : NUMA user daemon
</span><br>
<span class="quotelev2">&gt;&gt;         numactl.i686 : Library for tuning for Non Uniform Memory Access
</span><br>
<span class="quotelev2">&gt;&gt; machines
</span><br>
<span class="quotelev2">&gt;&gt;         numactl.x86_64 : Library for tuning for Non Uniform Memory Access
</span><br>
<span class="quotelev2">&gt;&gt; machines
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do I need to install additional and/or different NUMA packages in order
</span><br>
<span class="quotelev2">&gt;&gt; to get OpenMPI to work
</span><br>
<span class="quotelev2">&gt;&gt; on this cluster?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev2">&gt;&gt;  IMPORTANT WARNING: This message is intended for the use of the person or
</span><br>
<span class="quotelev2">&gt;&gt; entity to which it is addressed and may contain information that is
</span><br>
<span class="quotelev2">&gt;&gt; privileged and confidential, the disclosure of which is governed by
</span><br>
<span class="quotelev2">&gt;&gt; applicable law. If the reader of this message is not the intended
</span><br>
<span class="quotelev2">&gt;&gt; recipient, or the employee or agent responsible for delivering it to the
</span><br>
<span class="quotelev2">&gt;&gt; intended recipient, you are hereby notified that any dissemination,
</span><br>
<span class="quotelev2">&gt;&gt; distribution or copying of this information is strictly prohibited. Thank
</span><br>
<span class="quotelev2">&gt;&gt; you for your cooperation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Searchable archives:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/index.php">http://www.open-mpi.org/community/lists/users/2015/04/index.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   IMPORTANT WARNING: This message is intended for the use of the person
</span><br>
<span class="quotelev1">&gt; or entity to which it is addressed and may contain information that is
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/04/26589.php">http://www.open-mpi.org/community/lists/users/2015/04/26589.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26590/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26591.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Previous message:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26589.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26611.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26611.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
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
