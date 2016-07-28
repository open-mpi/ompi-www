<?
$subject_val = "[OMPI users] Need help running jobs across different IB vendors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 10 08:41:54 2013" -->
<!-- isoreceived="20131010124154" -->
<!-- sent="Thu, 10 Oct 2013 12:41:52 +0000" -->
<!-- isosent="20131010124152" -->
<!-- name="Kevin M. Hildebrand" -->
<!-- email="kevin_at_[hidden]" -->
<!-- subject="[OMPI users] Need help running jobs across different IB vendors" -->
<!-- id="D6070DAA269E4F44967B5872A5022ADC6B2522A8_at_OITMX1002.AD.UMD.EDU" -->
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
<strong>Subject:</strong> [OMPI users] Need help running jobs across different IB vendors<br>
<strong>From:</strong> Kevin M. Hildebrand (<em>kevin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-10 08:41:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22780.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Reply:</strong> <a href="22782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Maybe reply:</strong> <a href="22783.php">Kevin M. Hildebrand: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Reply:</strong> <a href="22793.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, I'm trying to run an OpenMPI 1.6.5 job across a set of nodes, some with Mellanox cards and some with Qlogic cards.  I'm getting errors indicating &quot;At least one pair of MPI processes are unable to reach each other for MPI communications&quot;.  As far as I can tell all of the nodes are properly configured and able to reach each other, via IP and non-IP connections.
<br>
I've also discovered that even if I turn off the IB transport via &quot;--mca btl tcp,self&quot; I'm still getting the same issue.
<br>
The test works fine if I run it confined to hosts with identical IB cards.
<br>
I'd appreciate some assistance in figuring out what I'm doing wrong.
<br>
<p>Thanks,
<br>
Kevin
<br>
<p>Here's a log of a failed run:
<br>
<p><span class="quotelev1">&gt; mpirun -d --debug-daemons --mca btl tcp,self --mca orte_base_help_aggregate 0 --mca btl_base_verbose 100 -np 2 -machinefile foo.hosts /homes/kevin/alltoall.mpi-1.6.5
</span><br>
[compute-g18-5.deepthought.umd.edu:20574] procdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/0/0
<br>
[compute-g18-5.deepthought.umd.edu:20574] jobdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/0
<br>
[compute-g18-5.deepthought.umd.edu:20574] top: openmpi-sessions-kevin_at_[hidden]_0
<br>
[compute-g18-5.deepthought.umd.edu:20574] tmp: /tmp
<br>
[compute-g18-5.deepthought.umd.edu:20574] mpirun: reset PATH: /cell_root/software/openmpi/1.6.5/gnu/4.8.1/threaded/sys/bin:/cell_root/software/openmpi/1.6.5/gnu/4.8.1/threaded/sys/bin:/cell_r      ftware/gcc/4.8.1/sys/bin:/cell_root/software/moab/bin:/cell_root/software/gold/bin:/usr/local/ofed/1.5.4/sbin:/usr/local/ofed/1.5.4/bin:/homes/kevin/bin:/homes/kevin/bin/amd64:/dept/oit/glue/      scripts:/usr/local/scripts:/usr/local/bin:/usr/bin:/bin:/sbin:/usr/sbin:/usr/afsws/bin:/usr/afsws/etc
<br>
[compute-g18-5.deepthought.umd.edu:20574] mpirun: reset LD_LIBRARY_PATH: /cell_root/software/openmpi/1.6.5/gnu/4.8.1/threaded/sys/lib:/usr/local/ofed/1.5.4/lib64
<br>
Daemon was launched on compute-g17-33.deepthought.umd.edu - beginning to initialize
<br>
[compute-g17-33.deepthought.umd.edu:20174] procdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/0/1
<br>
[compute-g17-33.deepthought.umd.edu:20174] jobdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/0
<br>
[compute-g17-33.deepthought.umd.edu:20174] top: openmpi-sessions-kevin_at_[hidden]_0
<br>
[compute-g17-33.deepthought.umd.edu:20174] tmp: /tmp
<br>
Daemon [[63142,0],1] checking in as pid 20174 on host compute-g17-33.deepthought.umd.edu
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted: up and running - waiting for commands!
<br>
[compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_cmd: received add_local_procs
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] node[0].name compute-g18-5 daemon 0
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] node[1].name compute-g17-33 daemon 1
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received add_local_procs
<br>
&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;MPIR_proctable_size = 2
<br>
&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, compute-g18-5.deepthought.umd.edu, /homes/kevin/alltoall.mpi-1.6.5, 20576)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (1, compute-g17-33, /homes/kevin/alltoall.mpi-1.6.5, 20175)
<br>
MPIR_executable_path: NULL
<br>
MPIR_server_arguments: NULL
<br>
[compute-g18-5.deepthought.umd.edu:20576] procdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/1/0
<br>
[compute-g18-5.deepthought.umd.edu:20576] jobdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/1
<br>
[compute-g18-5.deepthought.umd.edu:20576] top: openmpi-sessions-kevin_at_[hidden]_0
<br>
[compute-g18-5.deepthought.umd.edu:20576] tmp: /tmp
<br>
[compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_recv: received sync+nidmap from local proc [[63142,1],0]
<br>
[compute-g18-5.deepthought.umd.edu:20576] [[63142,1],0] node[0].name compute-g18-5 daemon 0
<br>
[compute-g18-5.deepthought.umd.edu:20576] [[63142,1],0] node[1].name compute-g17-33 daemon 1
<br>
[compute-g17-33.deepthought.umd.edu:20175] procdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/1/1
<br>
[compute-g17-33.deepthought.umd.edu:20175] jobdir: /tmp/openmpi-sessions-kevin_at_[hidden]_0/63142/1
<br>
[compute-g17-33.deepthought.umd.edu:20175] top: openmpi-sessions-kevin_at_[hidden]_0
<br>
[compute-g17-33.deepthought.umd.edu:20175] tmp: /tmp
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_recv: received sync+nidmap from local proc [[63142,1],1]
<br>
[compute-g17-33.deepthought.umd.edu:20175] [[63142,1],1] node[0].name compute-g18-5 daemon 0
<br>
[compute-g17-33.deepthought.umd.edu:20175] [[63142,1],1] node[1].name compute-g17-33 daemon 1
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: Looking for btl components
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: opening btl components
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: found loaded component self
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: component self has no register function
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: component self open function successful
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: found loaded component tcp
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: component tcp register function successful
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: components_open: component tcp open function successful
<br>
[compute-g17-33.deepthought.umd.:20175] mca: base: components_open: Looking for btl components
<br>
[compute-g17-33.deepthought.umd.:20175] mca: base: components_open: opening btl components
<br>
[compute-g17-33.deepthought.umd.:20175] mca: base: components_open: found loaded component self
<br>
[compute-g17-33.deepthought.umd.:20175] mca: base: components_open: component self has no register function
<br>
[compute-g17-33.deepthought.umd.:20175] mca: base: components_open: component self open function successful
<br>
[compute-g17-33.deepthought.umd.:20175] mca: base: components_open: found loaded component tcp
<br>
[compute-g17-33.deepthought.umd.:20175] mca: base: components_open: component tcp register function successful
<br>
[compute-g17-33.deepthought.umd.:20175] mca: base: components_open: component tcp open function successful
<br>
[compute-g17-33.deepthought.umd.:20175] select: initializing btl component self
<br>
[compute-g17-33.deepthought.umd.:20175] select: init of component self returned success
<br>
[compute-g17-33.deepthought.umd.:20175] select: initializing btl component tcp
<br>
[compute-g17-33.deepthought.umd.:20175] btl: tcp: Searching for exclude address+prefix: 127.0.0.1 / 8
<br>
[compute-g17-33.deepthought.umd.:20175] btl: tcp: Found match: 127.0.0.1 (lo)
<br>
[compute-g17-33.deepthought.umd.:20175] select: init of component tcp returned success
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: close: component self closed
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: close: unloading component self
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: close: component tcp closed
<br>
[compute-g18-5.deepthought.umd.e:20576] mca: base: close: unloading component tcp
<br>
[compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_cmd: received message_local_procs
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received message_local_procs
<br>
--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: compute-g18-5.deepthought.umd.edu
<br>
&nbsp;&nbsp;PID:        20576
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;Process 1 ([[63142,1],1]) is on host: compute-g17-33.deepthought.umd.edu
<br>
&nbsp;&nbsp;Process 2 ([[63142,1],0]) is on host: compute-g18-5
<br>
&nbsp;&nbsp;BTLs attempted: self tcp
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** on a NULL communicator
<br>
*** MPI_ERRORS_ARE_FATAL: your MPI job will now abort
<br>
--------------------------------------------------------------------------
<br>
MPI_INIT has failed because at least one MPI process is unreachable
<br>
from another.  This *usually* means that an underlying communication
<br>
plugin -- such as a BTL or an MTL -- has either not loaded or not
<br>
allowed itself to be used.  Your MPI job will now abort.
<br>
<p>You may wish to try to narrow down the problem;
<br>
<p>* Check the output of ompi_info to see which BTL/MTL plugins are
<br>
&nbsp;&nbsp;&nbsp;available.
<br>
* Run your application with MPI_THREAD_SINGLE.
<br>
* Set the MCA parameter btl_base_verbose to 100 (or mtl_base_verbose,
<br>
&nbsp;&nbsp;&nbsp;if using MTL-based communications) to see exactly which
<br>
&nbsp;&nbsp;&nbsp;communication plugins were considered and/or discarded.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
An MPI process is aborting at a time when it cannot guarantee that all
<br>
of its peer processes in the job will be killed properly.  You should
<br>
double check that everything has shut down cleanly.
<br>
<p>&nbsp;&nbsp;Reason:     Before MPI_INIT completed
<br>
&nbsp;&nbsp;Local host: compute-g17-33.deepthought.umd.edu
<br>
&nbsp;&nbsp;PID:        20175
<br>
--------------------------------------------------------------------------
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received waitpid_fired cmd
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received iof_complete cmd
<br>
[compute-g17-33.deepthought.umd.edu:20174] sess_dir_finalize: proc session dir not empty - leaving
<br>
[compute-g18-5.deepthought.umd.edu:20574] sess_dir_finalize: proc session dir not empty - leaving
<br>
[compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_cmd: received iof_complete cmd
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 1 with PID 20175 on
<br>
node compute-g17-33 exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] orted_cmd: received exit cmd
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted_cmd: received exit cmd
<br>
[compute-g17-33.deepthought.umd.edu:20174] [[63142,0],1] orted: finalizing
<br>
[compute-g18-5.deepthought.umd.edu:20574] sess_dir_finalize: job session dir not empty - leaving
<br>
[compute-g17-33.deepthought.umd.edu:20174] sess_dir_finalize: job session dir not empty - leaving
<br>
[compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] Releasing job data for [63142,0]
<br>
[compute-g18-5.deepthought.umd.edu:20574] [[63142,0],0] Releasing job data for [63142,1]
<br>
[compute-g18-5.deepthought.umd.edu:20574] sess_dir_finalize: proc session dir not empty - leaving
<br>
orterun: exiting with status 1
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22781/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Previous message:</strong> <a href="22780.php">Nathan Hjelm: "Re: [OMPI users] MPI_IN_PLACE with GATHERV, AGATHERV, and SCATERV"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Reply:</strong> <a href="22782.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Maybe reply:</strong> <a href="22783.php">Kevin M. Hildebrand: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
<li><strong>Reply:</strong> <a href="22793.php">Dave Love: "Re: [OMPI users] Need help running jobs across different IB vendors"</a>
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
