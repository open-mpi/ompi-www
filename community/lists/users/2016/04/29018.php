<?
$subject_val = "[OMPI users] Cannot run a simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 24 18:34:11 2016" -->
<!-- isoreceived="20160424223411" -->
<!-- sent="Sun, 24 Apr 2016 18:34:10 -0400" -->
<!-- isosent="20160424223410" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot run a simple MPI program" -->
<!-- id="CAHXxYDjb-SMdu5wVfj=igAn7dfX2zuwm0mqPPJZw2e1xH7_sCw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Cannot run a simple MPI program<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-24 18:34:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29019.php">Gilles Gouaillardet: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="29017.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29019.php">Gilles Gouaillardet: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Reply:</strong> <a href="29019.php">Gilles Gouaillardet: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>Attached is a simple MPI program (a modified version of a similar program
<br>
that was posted by another user). This program, when run on a single node
<br>
machine, hangs most of the time, as follows: (in all cases, OS was CentOS 7)
<br>
<p>Scenario 1: OMPI v 1.10, single socket quad core machine, with Chelsio T3
<br>
card, link down, and GigE, link up
<br>
<p>mpirun -np 2 &lt;progname&gt;
<br>
Backtrace of the two spawned processes as follows:
<br>
<p>(gdb) bt
<br>
#0  0x00007f6471647aba in mca_btl_vader_component_progress () at
<br>
btl_vader_component.c:708
<br>
#1  0x00007f6475c6722a in opal_progress () at runtime/opal_progress.c:187
<br>
#2  0x00007f64767b7685 in opal_condition_wait (c=&lt;optimized out&gt;,
<br>
m=&lt;optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../opal/threads/condition.h:78
<br>
#3  ompi_request_default_wait_all (count=2, requests=0x7ffd1d921530,
<br>
statuses=0x7ffd1d921540)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at request/req_wait.c:281
<br>
#4  0x00007f64709dd591 in ompi_coll_tuned_sendrecv_zero (stag=-16,
<br>
rtag=-16,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=&lt;optimized out&gt;, source=1, dest=1) at coll_tuned_barrier.c:78
<br>
#5  ompi_coll_tuned_barrier_intra_two_procs (comm=0x6022c0
<br>
&lt;ompi_mpi_comm_world&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;module=&lt;optimized out&gt;) at coll_tuned_barrier.c:324
<br>
#6  0x00007f64767c92e6 in PMPI_Barrier (comm=0x6022c0
<br>
&lt;ompi_mpi_comm_world&gt;) at pbarrier.c:70
<br>
#7  0x00000000004010bd in main (argc=1, argv=0x7ffd1d9217d8) at
<br>
mpi_hello_master_slave.c:115
<br>
(gdb)
<br>
<p><p>(gdb) bt
<br>
#0  mca_pml_ob1_progress () at pml_ob1_progress.c:45
<br>
#1  0x00007feeae7dc22a in opal_progress () at runtime/opal_progress.c:187
<br>
#2  0x00007feea9e125c5 in opal_condition_wait (c=&lt;optimized out&gt;,
<br>
m=&lt;optimized out&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../opal/threads/condition.h:78
<br>
#3  ompi_request_wait_completion (req=0xe55200) at
<br>
../../../../ompi/request/request.h:381
<br>
#4  mca_pml_ob1_recv (addr=&lt;optimized out&gt;, count=255, datatype=&lt;optimized
<br>
out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;src=&lt;optimized out&gt;, tag=&lt;optimized out&gt;, comm=&lt;optimized out&gt;,
<br>
status=0x7fff4a618000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at pml_ob1_irecv.c:118
<br>
#5  0x00007feeaf35068f in PMPI_Recv (buf=0x7fff4a618020, count=255,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type=0x6020c0 &lt;ompi_mpi_char&gt;, source=&lt;optimized out&gt;, tag=&lt;optimized
<br>
out&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;, status=0x7fff4a618000) at
<br>
precv.c:78
<br>
#6  0x0000000000400d49 in slave () at mpi_hello_master_slave.c:67
<br>
#7  0x00000000004010b3 in main (argc=1, argv=0x7fff4a6184d8) at
<br>
mpi_hello_master_slave.c:113
<br>
(gdb)
<br>
<p><p>Scenario 2:
<br>
Dual socket Hexcore machine with Qlogic IB, Chelsio iWARP and Fibre
<br>
Channel, all link down, GigE, link up, OpenMPI compiled from master branch,
<br>
crashes as follows:
<br>
<p>[durga_at_smallMPI Desktop]$ mpirun -np 2 ./mpi_hello_master_slave
<br>
<p>mpi_hello_master_slave:39570 terminated with signal 11 at PC=20
<br>
SP=7ffd438c00b8.  Backtrace:
<br>
<p>mpi_hello_master_slave:39571 terminated with signal 11 at PC=20
<br>
SP=7ffee5903e08.  Backtrace:
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 0 on node smallMPI exited on
<br>
signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p>Scenario 3:
<br>
Exactly same as scenario 2, but with command line more explicit as follows:
<br>
<p>[durga_at_smallMPI Desktop]$ mpirun -np 2 -mca btl self,sm
<br>
./mpi_hello_master_slave
<br>
This hangs with the following backtrace:
<br>
<p>(gdb) bt
<br>
#0  0x00007ff6639f049d in nanosleep () from /lib64/libc.so.6
<br>
#1  0x00007ff663a210d4 in usleep () from /lib64/libc.so.6
<br>
#2  0x00007ff662f72796 in OPAL_PMIX_PMIX120_PMIx_Fence (procs=0x0,
<br>
nprocs=0, info=0x0, ninfo=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at src/client/pmix_client_fence.c:100
<br>
#3  0x00007ff662f4f0bc in pmix120_fence (procs=0x0, collect_data=0) at
<br>
pmix120_client.c:255
<br>
#4  0x00007ff663f941af in ompi_mpi_init (argc=1, argv=0x7ffc18c9afd8,
<br>
requested=0, provided=0x7ffc18c9adac)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at runtime/ompi_mpi_init.c:813
<br>
#5  0x00007ff663fc9c33 in PMPI_Init (argc=0x7ffc18c9addc,
<br>
argv=0x7ffc18c9add0) at pinit.c:66
<br>
#6  0x000000000040101f in main (argc=1, argv=0x7ffc18c9afd8) at
<br>
mpi_hello_master_slave.c:94
<br>
(gdb) q
<br>
<p>(gdb) bt
<br>
#0  0x00007f5af7646117 in sched_yield () from /lib64/libc.so.6
<br>
#1  0x00007f5af7323875 in amsh_ep_connreq_wrap () from
<br>
/lib64/libpsm_infinipath.so.1
<br>
#2  0x00007f5af7324254 in amsh_ep_connect () from
<br>
/lib64/libpsm_infinipath.so.1
<br>
#3  0x00007f5af732d0df in psm_ep_connect () from
<br>
/lib64/libpsm_infinipath.so.1
<br>
#4  0x00007f5af7d94a69 in ompi_mtl_psm_add_procs (mtl=0x7f5af80f8500
<br>
&lt;ompi_mtl_psm&gt;, nprocs=2, procs=0xf53e60)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at mtl_psm.c:312
<br>
#5  0x00007f5af7df3630 in mca_pml_cm_add_procs (procs=0xf53e60, nprocs=2)
<br>
at pml_cm.c:134
<br>
#6  0x00007f5af7bcc0d1 in ompi_mpi_init (argc=1, argv=0x7ffc485a2f98,
<br>
requested=0, provided=0x7ffc485a2d6c)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at runtime/ompi_mpi_init.c:777
<br>
#7  0x00007f5af7c01c33 in PMPI_Init (argc=0x7ffc485a2d9c,
<br>
argv=0x7ffc485a2d90) at pinit.c:66
<br>
#8  0x000000000040101f in main (argc=1, argv=0x7ffc485a2f98) at
<br>
mpi_hello_master_slave.c:94
<br>
<p>This seems to suggest that it is trying PSM to connect even when the link
<br>
was down and it was not mentioned in the command line. Is this behavior
<br>
expected?
<br>
<p><p>Scenario 4:
<br>
Exactly same as scenario 3, but with even more explicit command line:
<br>
<p>[durga_at_smallMPI Desktop]$ mpirun -np 2 -mca btl self,sm -mca pml ob1
<br>
./mpi_hello_master_slave
<br>
<p>This hangs towards the end, after printing the output (as opposed to
<br>
scenario 3 where it hangs at the connection setup stage, without printing
<br>
anything.)
<br>
<p>Process 0 of 2 running on host smallMPI
<br>
<p><p>Now 1 slave tasks are sending greetings.
<br>
<p>Process 1 of 2 running on host smallMPI
<br>
Greetings from task 1:
<br>
&nbsp;&nbsp;message type:        3
<br>
&nbsp;&nbsp;msg length:          141 characters
<br>
&nbsp;&nbsp;message:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;hostname:          smallMPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;operating system:  Linux
<br>
&nbsp;&nbsp;&nbsp;&nbsp;release:           3.10.0-327.13.1.el7.x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;processor:         x86_64
<br>
<p><p>Backtraces of the two processes are as follows:
<br>
<p>(gdb) bt
<br>
#0  opal_timer_base_get_usec_clock_gettime () at timer_linux_component.c:180
<br>
#1  0x00007f10f46e50e4 in opal_progress () at runtime/opal_progress.c:161
<br>
#2  0x00007f10f58a9d8b in opal_condition_wait (c=0x7f10f5df3c40
<br>
&lt;ompi_request_cond&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m=0x7f10f5df3bc0 &lt;ompi_request_lock&gt;) at ../opal/threads/condition.h:76
<br>
#3  0x00007f10f58aa31b in ompi_request_default_wait_all (count=2,
<br>
requests=0x7ffe7edd5a80,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;statuses=0x7ffe7edd5a50) at request/req_wait.c:287
<br>
#4  0x00007f10f596f225 in ompi_coll_base_sendrecv_zero (dest=1, stag=-16,
<br>
source=1, rtag=-16,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;) at base/coll_base_barrier.c:63
<br>
#5  0x00007f10f596f92a in ompi_coll_base_barrier_intra_two_procs
<br>
(comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;module=0xd5a7f0) at base/coll_base_barrier.c:308
<br>
#6  0x00007f10f599ffec in ompi_coll_tuned_barrier_intra_dec_fixed
<br>
(comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;module=0xd5a7f0) at coll_tuned_decision_fixed.c:196
<br>
#7  0x00007f10f58c86fd in PMPI_Barrier (comm=0x6022c0
<br>
&lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
<br>
#8  0x00000000004010bd in main (argc=1, argv=0x7ffe7edd5d48) at
<br>
mpi_hello_master_slave.c:115
<br>
<p><p>(gdb) bt
<br>
#0  0x00007fffe9d6a988 in clock_gettime ()
<br>
#1  0x00007f704bf64edd in clock_gettime () from /lib64/libc.so.6
<br>
#2  0x00007f704b4deea5 in opal_timer_base_get_usec_clock_gettime () at
<br>
timer_linux_component.c:183
<br>
#3  0x00007f704b2f50e4 in opal_progress () at runtime/opal_progress.c:161
<br>
#4  0x00007f704c6cc39c in opal_condition_wait (c=0x7f704ca03c40
<br>
&lt;ompi_request_cond&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;m=0x7f704ca03bc0 &lt;ompi_request_lock&gt;) at
<br>
../../../../opal/threads/condition.h:76
<br>
#5  0x00007f704c6cc560 in ompi_request_wait_completion (req=0x165e580) at
<br>
../../../../ompi/request/request.h:383
<br>
#6  0x00007f704c6cd724 in mca_pml_ob1_recv (addr=0x7fffe9cafa10, count=255,
<br>
datatype=0x6020c0 &lt;ompi_mpi_char&gt;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;src=0, tag=1, comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;,
<br>
status=0x7fffe9caf9f0) at pml_ob1_irecv.c:123
<br>
#7  0x00007f704c4ff434 in PMPI_Recv (buf=0x7fffe9cafa10, count=255,
<br>
type=0x6020c0 &lt;ompi_mpi_char&gt;, source=0,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tag=1, comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;, status=0x7fffe9caf9f0) at
<br>
precv.c:79
<br>
#8  0x0000000000400d49 in slave () at mpi_hello_master_slave.c:67
<br>
#9  0x00000000004010b3 in main (argc=1, argv=0x7fffe9cafec8) at
<br>
mpi_hello_master_slave.c:113
<br>
(gdb) q
<br>
<p>I am going to try the tarball shortly, but hopefully someone can get some
<br>
insight out of this much information. BTW, the code was compiled with the
<br>
following flags:
<br>
<p>-Wall -Wextra -g3 -O0
<br>
<p>Let me rehash that NO network communication was involved in any of these
<br>
experiments; they were all single node shared memory (sm btl) jobs.
<br>
<p>Thanks
<br>
Durga
<br>
<p><p><p>1% of the executables have 99% of CPU privilege!
<br>
Userspace code! Unite!! Occupy the kernel!!!
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29018/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29018/mpi_hello_master_slave.c">mpi_hello_master_slave.c</a>
</ul>
<!-- attachment="mpi_hello_master_slave.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29019.php">Gilles Gouaillardet: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="29017.php">Gilles Gouaillardet: "Re: [OMPI users] track progress of a mpi gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29019.php">Gilles Gouaillardet: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Reply:</strong> <a href="29019.php">Gilles Gouaillardet: "Re: [OMPI users] Cannot run a simple MPI program"</a>
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
