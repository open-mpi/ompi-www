<?
$subject_val = "Re: [OMPI users] Need help running jobs across different IB vendors";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 14 09:40:18 2013" -->
<!-- isoreceived="20131014134018" -->
<!-- sent="Mon, 14 Oct 2013 13:40:16 +0000" -->
<!-- isosent="20131014134016" -->
<!-- name="Kevin M. Hildebrand" -->
<!-- email="kevin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help running jobs across different IB vendors" -->
<!-- id="D6070DAA269E4F44967B5872A5022ADC6B25E561_at_OITMX1002.AD.UMD.EDU" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Need help running jobs across different IB vendors" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help running jobs across different IB vendors<br>
<strong>From:</strong> Kevin M. Hildebrand (<em>kevin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-14 09:40:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22784.php">Ray Sheppard: "[OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Previous message:</strong> <a href="22782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Maybe in reply to:</strong> <a href="22781.php">Kevin M. Hildebrand: "[OMPI users] Need help running jobs across different IB vendors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22784.php">Ray Sheppard: "[OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Reply:</strong> <a href="22784.php">Ray Sheppard: "[OMPI users] btl_tcp_if_include setting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, the same version of OpenMPI (1.6.5) is running on all of the machines, verified via 'mpirun --version' and also checked library paths via 'ldd'.
<br>
<p>Non-MPI programs work fine.
<br>
<p>Kevin
<br>
<p>Date: Fri, 11 Oct 2013 20:06:22 +0000
<br>
From: &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt;
<br>
<p>1. Can you verify that you're running the same version/build of Open MPI on all three machines (mpirun machine, g18-6, and g17-33)?
<br>
<p>2. Can you mpirun non-MPI programs, like hostname?
<br>
<p><p>On Oct 10, 2013, at 8:41 AM, Kevin M. Hildebrand &lt;kevin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi, I'm trying to run an OpenMPI 1.6.5 job across a set of nodes, some with Mellanox cards and some with Qlogic cards.  I'm getting errors indicating &quot;At least one pair of MPI processes are unable to reach each other for MPI communications&quot;.  As far as I can tell all of the nodes are properly configured and able to reach each other, via IP and non-IP connections.
</span><br>
<span class="quotelev1">&gt; I've also discovered that even if I turn off the IB transport via &quot;--mca btl tcp,self&quot; I'm still getting the same issue.
</span><br>
<span class="quotelev1">&gt; The test works fine if I run it confined to hosts with identical IB cards.
</span><br>
<span class="quotelev1">&gt; I'd appreciate some assistance in figuring out what I'm doing wrong.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Kevin
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Here's a log of a failed run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -d --debug-daemons --mca btl tcp,self --mca orte_base_help_aggregate 0 --mca btl_base_verbose 100 -np 2 -machinefile foo.hosts /homes/kevin/alltoall.mpi-1.6.5
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] procdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/0/0
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] jobdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/0
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] top: openmpi-sessions-kevin_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] mpirun: reset PATH: /cell_root/software/openmpi/1.6.5/gnu/4.8.1/threaded/sys/bin:/cell_root/software/openmpi/1.6.5/gnu/4.8.1/threaded/sys/bin:/cell_r      ftware/gcc/4.8.1/sys/bin:/cell_root/software/moab/bin:/cell_root/software/gold/bin:/usr/local/ofed/1.5.4/sbin:/usr/local/ofed/1.5.4/bin:/homes/kevin/bin:/homes/kevin/bin/amd64:/dept/oit/glue/      scripts:/usr/local/scripts:/usr/local/bin:/usr/bin:/bin:/sbin:/usr/sbin:/usr/afsws/bin:/usr/afsws/etc
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] mpirun: reset LD_LIBRARY_PATH: /cell_root/software/openmpi/1.6.5/gnu/4.8.1/threaded/sys/lib:/usr/local/ofed/1.5.4/lib64
</span><br>
<span class="quotelev1">&gt; Daemon was launched on compute-g17-33.deepthought.umd.edu - beginning to initialize
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] procdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/0/1
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] jobdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/0
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] top: openmpi-sessions-kevin_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; Daemon [[63142,0],1] checking in as pid 20174 on host compute-g17-33.deepthought.umd.edu
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted: up and running - waiting for commands!
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] node[0].name compute-g18-5 daemon 0
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] node[1].name compute-g17-33 daemon 1
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received add_local_procs
</span><br>
<span class="quotelev1">&gt;   MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;   MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable_size = 2
</span><br>
<span class="quotelev1">&gt;   MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (0, compute-g18-5.deepthought.umd.edu, /homes/kevin/alltoall.mpi-1.6.5, 20576)
</span><br>
<span class="quotelev1">&gt;     (i, host, exe, pid) = (1, compute-g17-33, /homes/kevin/alltoall.mpi-1.6.5, 20175)
</span><br>
<span class="quotelev1">&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20576] procdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/1/0
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20576] jobdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/1
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20576] top: openmpi-sessions-kevin_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20576] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_recv: received sync+nidmap from local proc [[63142,1],0]
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20576] [[63142,1],0] node[0].name compute-g18-5 daemon 0
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20576] [[63142,1],0] node[1].name compute-g17-33 daemon 1
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20175] procdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/1/1
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20175] jobdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/1
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20175] top: openmpi-sessions-kevin_at_[hidden]_0
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20175] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_recv: received sync+nidmap from local proc [[63142,1],1]
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20175] [[63142,1],1] node[0].name compute-g18-5 daemon 0
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20175] [[63142,1],1] node[1].name compute-g17-33 daemon 1
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] mca: base: components_open: Looking for btl components
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] mca: base: components_open: opening btl components
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] mca: base: components_open: found loaded component self
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] mca: base: components_open: component self has no register function
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] mca: base: components_open: component self open function successful
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] mca: base: components_open: found loaded component tcp
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] mca: base: components_open: component tcp register function successful
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] mca: base: components_open: component tcp open function successful
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] select: initializing btl component self
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] select: init of component self returned success
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] select: initializing btl component tcp
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] btl: tcp: Found match: 127.0.0.1 (lo)
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.:20175] select: init of component tcp returned success
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: close: component self closed
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: close: unloading component self
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: close: component tcp closed
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.e:20576] mca: base: close: unloading component tcp
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received message_local_procs
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;   Local host: compute-g18-5.deepthought.umd.edu
</span><br>
<span class="quotelev1">&gt;   PID:        20576
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Process 1 ([[63142,1],1]) is on host: compute-g17-33.deepthought.umd.edu
</span><br>
<span class="quotelev1">&gt;   Process 2 ([[63142,1],0]) is on host: compute-g18-5
</span><br>
<span class="quotelev1">&gt;   BTLs attempted: self tcp
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** on a NULL communicator
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; MPI_INIT has failed because at least one MPI process is unreachable
</span><br>
<span class="quotelev1">&gt; from another.  This *usually* means that an underlying communication
</span><br>
<span class="quotelev1">&gt; plugin -- such as a BTL or an MTL -- has either not loaded or not
</span><br>
<span class="quotelev1">&gt; allowed itself to be used.  Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; You may wish to try to narrow down the problem;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; * Check the output of ompi_info to see which BTL/MTL plugins are
</span><br>
<span class="quotelev1">&gt;    available.
</span><br>
<span class="quotelev1">&gt; * Run your application with MPI_THREAD_SINGLE.
</span><br>
<span class="quotelev1">&gt; * Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
</span><br>
<span class="quotelev1">&gt;    if using MTL-based communications) to see exactly which
</span><br>
<span class="quotelev1">&gt;    communication plugins were considered and/or discarded.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; An MPI process is aborting at a time when it cannot guarantee that all
</span><br>
<span class="quotelev1">&gt; of its peer processes in the job will be killed properly.  You should
</span><br>
<span class="quotelev1">&gt; double check that everything has shut down cleanly.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;   Reason:     Before MPI_INIT completed
</span><br>
<span class="quotelev1">&gt;   Local host: compute-g17-33.deepthought.umd.edu
</span><br>
<span class="quotelev1">&gt;   PID:        20175
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received waitpid_fired cmd
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_cmd: received iof_complete cmd
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun has exited due to process rank 1 with PID 20175 on
</span><br>
<span class="quotelev1">&gt; node compute-g17-33 exiting improperly. There are two reasons this could occur:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 1. this process did not call &quot;init&quot; before exiting, but others in
</span><br>
<span class="quotelev1">&gt; the job did. This can cause a job to hang indefinitely while it waits
</span><br>
<span class="quotelev1">&gt; for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
</span><br>
<span class="quotelev1">&gt; then ALL processes must call &quot;init&quot; prior to termination.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt; By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
</span><br>
<span class="quotelev1">&gt; exiting or it will be considered an &quot;abnormal termination&quot;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; This may have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received exit cmd
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted: finalizing
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [compute-g17-33.deepthought.umd.edu:20174] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] Releasing job data for [63142,0]
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] Releasing job data for [63142,1]
</span><br>
<span class="quotelev1">&gt; [compute-g18-5.deepthought.umd.edu:20574] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; orterun: exiting with status 1
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
------------------------------
Subject: Digest Footer
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
------------------------------
End of users Digest, Vol 2705, Issue 1
**************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22784.php">Ray Sheppard: "[OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Previous message:</strong> <a href="22782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Maybe in reply to:</strong> <a href="22781.php">Kevin M. Hildebrand: "[OMPI users] Need help running jobs across different IB vendors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22784.php">Ray Sheppard: "[OMPI users] btl_tcp_if_include setting"</a>
<li><strong>Reply:</strong> <a href="22784.php">Ray Sheppard: "[OMPI users] btl_tcp_if_include setting"</a>
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
