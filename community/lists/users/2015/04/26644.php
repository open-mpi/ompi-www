<?
$subject_val = "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 22:32:12 2015" -->
<!-- isoreceived="20150408023212" -->
<!-- sent="Tue, 7 Apr 2015 19:32:07 -0700" -->
<!-- isosent="20150408023207" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3" -->
<!-- id="58F2E5B7-327B-4F11-B51B-E8E99A9BEFE7_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="434F2BB0AF80484CA04DE0D8C0738BF293EA7EE6_at_cshsmsgmbx02.CSMC.EDU" -->
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
<strong>Date:</strong> 2015-04-07 22:32:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26645.php">Alan Wild: "[OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Previous message:</strong> <a href="26643.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26643.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I&#146;m not sure our man pages are good enough to answer your question, but here is the URL
<br>
<p><a href="http://www.open-mpi.org/doc/v1.8/">http://www.open-mpi.org/doc/v1.8/</a> &lt;<a href="http://www.open-mpi.org/doc/v1.8/">http://www.open-mpi.org/doc/v1.8/</a>&gt;
<br>
<p>I&#146;m a tad tied up right now, but I&#146;ll try to address this prior to 1.8.5 release. Thanks for all that debug effort! Helps a bunch.
<br>
<p><span class="quotelev1">&gt; On Apr 7, 2015, at 1:17 PM, Lane, William &lt;William.Lane_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've finally had some luck using the following:
</span><br>
<span class="quotelev1">&gt; $MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-single --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where $NSLOTS was 56 and my hostfile hostfile-single is:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; csclprd3-0-0 slots=12 max-slots=24
</span><br>
<span class="quotelev1">&gt; csclprd3-0-1 slots=6 max-slots=12
</span><br>
<span class="quotelev1">&gt; csclprd3-0-2 slots=6 max-slots=12
</span><br>
<span class="quotelev1">&gt; csclprd3-0-3 slots=6 max-slots=12
</span><br>
<span class="quotelev1">&gt; csclprd3-0-4 slots=6 max-slots=12
</span><br>
<span class="quotelev1">&gt; csclprd3-0-5 slots=6 max-slots=12
</span><br>
<span class="quotelev1">&gt; csclprd3-0-6 slots=6 max-slots=12
</span><br>
<span class="quotelev1">&gt; csclprd3-6-1 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; csclprd3-6-5 slots=4 max-slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The max-slots differs from slots on some nodes
</span><br>
<span class="quotelev1">&gt; because I include the hyperthreaded cores in
</span><br>
<span class="quotelev1">&gt; the max-slots, the last two nodes have CPU's that
</span><br>
<span class="quotelev1">&gt; don't support hyperthreading at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does --use-hwthread-cpus prevent slots from
</span><br>
<span class="quotelev1">&gt; being assigned to hyperthreading cores?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For some reason the manpage for OpenMPI 1.8.2
</span><br>
<span class="quotelev1">&gt; isn't installed on our CentOS 6.3 systems is there a
</span><br>
<span class="quotelev1">&gt; URL I can I find a copy of the manpages for OpenMPI 1.8.2?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Bill Lane
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users [users-bounces_at_[hidden]] on behalf of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Monday, April 06, 2015 1:39 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm&#133;well, that shouldn&#146;t be the issue. To check, try running it with &#147;bind-to none&#148;. If you can get a backtrace telling us where it is crashing, that would also help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 6, 2015, at 12:24 PM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For the following two different commandline invocations of the LAPACK benchmark
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-no_slots --mca btl_tcp_if_include eth0 --hetero-nodes --use-hwthread-cpus --bind-to hwthread --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $MPI_DIR/bin/mpirun -np $NSLOTS --report-bindings --hostfile hostfile-no_slots --mca btl_tcp_if_include eth0 --hetero-nodes --bind-to-core --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm receiving the same kinds of OpenMPI error messages (but for different nodes in the ring):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         [csclprd3-0-16:25940] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt;         [csclprd3-0-16:25940] Signal: Bus error (7)
</span><br>
<span class="quotelev2">&gt;&gt;         [csclprd3-0-16:25940] Signal code: Non-existant physical address (2)
</span><br>
<span class="quotelev2">&gt;&gt;         [csclprd3-0-16:25940] Failing at address: 0x7f8b1b5a2600
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         mpirun noticed that process rank 82 with PID 25936 on node csclprd3-0-16 exited on signal 7 (Bus error).
</span><br>
<span class="quotelev2">&gt;&gt;         --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;         16 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It seems to occur on systems that have more than one, physical CPU installed. Could
</span><br>
<span class="quotelev2">&gt;&gt; this be due to a lack of the correct NUMA libraries being installed?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Bill L.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, April 05, 2015 6:09 PM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 5, 2015, at 5:58 PM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think some of the Intel Blade systems in the cluster are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dual core, but don't support hyperthreading. Maybe it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be better to exclude hyperthreading altogether
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from submitted OpenMPI jobs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes - or you can add &quot;--hetero-nodes -use-hwthread-cpus --bind-to hwthread&quot; to the cmd line. This tells mpirun that the nodes aren't all the same, and so it has to look at each node's topology instead of taking the first node as the template for everything. The second tells it to use the HTs as independent cpus where they are supported.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not entirely sure the suggestion will work - if we hit a place where HT isn't supported, we may balk at being asked to bind to HTs. I can probably make a change that supports this kind of hetero arrangement (perhaps something like bind-to pu) - might make it into 1.8.5 (we are just starting the release process on it now).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OpenMPI doesn't crash, but it doesn't run the LAPACK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; benchmark either.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks again Ralph.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bill L.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, April 01, 2015 8:40 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bingo - you said the magic word. This is a terminology issue. When we say &quot;core&quot;, we mean the old definition of &quot;core&quot;, not &quot;hyperthreads&quot;. If you want to use HTs as your base processing unit and bind to them, then you need to specify --bind-to hwthread. That warning should then go away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We don't require a swap region be mounted - I didn't see anything in your original message indicating that OMPI had actually crashed, but just wasn't launching due to the above issue. Were you actually seeing crashes as well?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Apr 1, 2015 at 8:31 AM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here's the associated hostfile:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #openMPI hostfile for csclprd3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #max slots prevents oversubscribing csclprd3-0-9
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-0 slots=12 max-slots=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-1 slots=6 max-slots=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-2 slots=6 max-slots=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-3 slots=6 max-slots=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-4 slots=6 max-slots=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-5 slots=6 max-slots=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-6 slots=6 max-slots=6
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-7 slots=32 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-8 slots=32 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-9 slots=32 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-10 slots=32 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-11 slots=32 max-slots=32
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-12 slots=12 max-slots=12
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-13 slots=24 max-slots=24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-14 slots=16 max-slots=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-15 slots=16 max-slots=16
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-16 slots=24 max-slots=24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-0-17 slots=24 max-slots=24
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-6-1 slots=4 max-slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; csclprd3-6-5 slots=4 max-slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The number of slots also includes hyperthreading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cores.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; One more question, would not having defined swap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; partitions on all the nodes in the ring cause OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to crash? Because no swap partitions are defined
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for any of the above systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Bill L.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: users [users-bounces_at_[hidden] &lt;mailto:users-bounces_at_[hidden]&gt;] on behalf of Ralph Castain [rhc_at_[hidden] &lt;mailto:rhc_at_[hidden]&gt;]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Wednesday, April 01, 2015 5:04 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The warning about binding to memory is due to not having numactl-devel installed on the system. The job would still run, but we are warning you that we cannot bind memory to the same domain as the core where we bind the process. Can cause poor performance, but not fatal. I forget the name of the param, but you can tell us to &quot;shut up&quot; :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The other warning/error indicates that we aren't seeing enough cores on the allocation you gave us via the hostile to support one proc/core - i.e., we didn't at least 128 cores in the sum of the nodes you told us about. I take it you were expecting that there were that many or more?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Apr 1, 2015 at 12:54 AM, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having problems running OpenMPI jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (using a hostfile) on an HPC cluster running
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ROCKS on CentOS 6.3. I'm running OpenMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; outside of Sun Grid Engine (i.e. it is not submitted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as a job to SGE). The program being run is a LAPACK
</span><br>
<span class="quotelev3">&gt;&gt;&gt; benchmark. The commandline parameter I'm 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using to run the jobs is:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $MPI_DIR/bin/mpirun -np $NSLOTS -bind-to-core -report-bindings --hostfile hostfile --mca btl_tcp_if_include eth0 --prefix $MPI_DIR $BENCH_DIR/$APP_DIR/$APP_BIN
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where MPI_DIR=/hpc/apps/mpi/openmpi/1.8.2/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NSLOTS=128
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm getting errors of the form and OpenMPI never runs the LAPACK benchmark:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    WARNING: a request was made to bind a process. While the system
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    supports binding the process itself, at least one node does NOT
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    support binding memory to the process location.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Node:  csclprd3-0-11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This usually is due to not having the required NUMA support installed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    on the node. In some Linux distributions, the required support is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    contained in the libnumactl and libnumactl-devel packages.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    This is a warning only; your job will continue, though performance may be degraded.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    A request was made to bind to that would result in binding more
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    processes than cpus on a resource:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Bind to:     CORE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Node:        csclprd3-0-11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       #processes:  2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       #cpus:       1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    You can override this protection by adding the &quot;overload-allowed&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    option to your binding directive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The only installed numa packages are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; numactl.x86_64                                                2.0.7-3.el6                        @centos6.3-x86_64-0/$
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I search for the available NUMA packages I find:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; yum search numa | less
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Loaded plugins: fastestmirror
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Loading mirror speeds from cached hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ============================== N/S Matched: numa ===============================
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         numactl-devel.i686 : Development package for building Applications that use numa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         numactl-devel.x86_64 : Development package for building Applications that use
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                              : numa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         numad.x86_64 : NUMA user daemon
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         numactl.i686 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         numactl.x86_64 : Library for tuning for Non Uniform Memory Access machines
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I need to install additional and/or different NUMA packages in order to get OpenMPI to work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on this cluster?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Bill Lane
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Searchable archives: <a href="http://www.open-mpi.org/community/lists/users/2015/04/index.php">http://www.open-mpi.org/community/lists/users/2015/04/index.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/index.php">http://www.open-mpi.org/community/lists/users/2015/04/index.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26589.php">http://www.open-mpi.org/community/lists/users/2015/04/26589.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26589.php">http://www.open-mpi.org/community/lists/users/2015/04/26589.php</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26611.php">http://www.open-mpi.org/community/lists/users/2015/04/26611.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26611.php">http://www.open-mpi.org/community/lists/users/2015/04/26611.php</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26618.php">http://www.open-mpi.org/community/lists/users/2015/04/26618.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26618.php">http://www.open-mpi.org/community/lists/users/2015/04/26618.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation. _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/04/26643.php">http://www.open-mpi.org/community/lists/users/2015/04/26643.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/04/26643.php">http://www.open-mpi.org/community/lists/users/2015/04/26643.php</a>&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26644/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26645.php">Alan Wild: "[OMPI users] 1.8.3 executable with 1.8.4 mpirun/orted?"</a>
<li><strong>Previous message:</strong> <a href="26643.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>In reply to:</strong> <a href="26643.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
<li><strong>Reply:</strong> <a href="26655.php">Lane, William: "Re: [OMPI users] OpenMPI 1.8.2 problems on CentOS 6.3"</a>
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
