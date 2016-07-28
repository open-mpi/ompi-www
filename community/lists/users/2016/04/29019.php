<?
$subject_val = "Re: [OMPI users] Cannot run a simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 24 20:12:49 2016" -->
<!-- isoreceived="20160425001249" -->
<!-- sent="Mon, 25 Apr 2016 09:12:43 +0900" -->
<!-- isosent="20160425001243" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot run a simple MPI program" -->
<!-- id="571D60FB.5080504_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDjb-SMdu5wVfj=igAn7dfX2zuwm0mqPPJZw2e1xH7_sCw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot run a simple MPI program<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-24 20:12:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="29018.php">dpchoudh .: "[OMPI users] Cannot run a simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="29018.php">dpchoudh .: "[OMPI users] Cannot run a simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Reply:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Reply:</strong> <a href="29027.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
two comments :
<br>
<p>- the program is incorrect : slave() should MPI_Recv(..., MPI_ANY_TAG, ...)
<br>
<p>- current master uses pmix114, and your traces mention pmix120
<br>
&nbsp;&nbsp;&nbsp;so your master is out of sync, or pmix120 is an old module that was 
<br>
not manually removed.
<br>
&nbsp;&nbsp;&nbsp;fwiw, once in a while, i
<br>
&nbsp;&nbsp;&nbsp;rm -rf /.../ompi_install_dir/lib/openmpi
<br>
&nbsp;&nbsp;&nbsp;to get rid of the removed modules
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 4/25/2016 7:34 AM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is a simple MPI program (a modified version of a similar 
</span><br>
<span class="quotelev1">&gt; program that was posted by another user). This program, when run on a 
</span><br>
<span class="quotelev1">&gt; single node machine, hangs most of the time, as follows: (in all 
</span><br>
<span class="quotelev1">&gt; cases, OS was CentOS 7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scenario 1: OMPI v 1.10, single socket quad core machine, with Chelsio 
</span><br>
<span class="quotelev1">&gt; T3 card, link down, and GigE, link up
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 &lt;progname&gt;
</span><br>
<span class="quotelev1">&gt; Backtrace of the two spawned processes as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f6471647aba in mca_btl_vader_component_progress () at 
</span><br>
<span class="quotelev1">&gt; btl_vader_component.c:708
</span><br>
<span class="quotelev1">&gt; #1  0x00007f6475c6722a in opal_progress () at runtime/opal_progress.c:187
</span><br>
<span class="quotelev1">&gt; #2  0x00007f64767b7685 in opal_condition_wait (c=&lt;optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt; m=&lt;optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../opal/threads/condition.h:78
</span><br>
<span class="quotelev1">&gt; #3  ompi_request_default_wait_all (count=2, requests=0x7ffd1d921530, 
</span><br>
<span class="quotelev1">&gt; statuses=0x7ffd1d921540)
</span><br>
<span class="quotelev1">&gt;     at request/req_wait.c:281
</span><br>
<span class="quotelev1">&gt; #4  0x00007f64709dd591 in ompi_coll_tuned_sendrecv_zero (stag=-16, 
</span><br>
<span class="quotelev1">&gt; rtag=-16,
</span><br>
<span class="quotelev1">&gt;     comm=&lt;optimized out&gt;, source=1, dest=1) at coll_tuned_barrier.c:78
</span><br>
<span class="quotelev1">&gt; #5  ompi_coll_tuned_barrier_intra_two_procs (comm=0x6022c0 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev1">&gt;     module=&lt;optimized out&gt;) at coll_tuned_barrier.c:324
</span><br>
<span class="quotelev1">&gt; #6  0x00007f64767c92e6 in PMPI_Barrier (comm=0x6022c0 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:70
</span><br>
<span class="quotelev1">&gt; #7  0x00000000004010bd in main (argc=1, argv=0x7ffd1d9217d8) at 
</span><br>
<span class="quotelev1">&gt; mpi_hello_master_slave.c:115
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  mca_pml_ob1_progress () at pml_ob1_progress.c:45
</span><br>
<span class="quotelev1">&gt; #1  0x00007feeae7dc22a in opal_progress () at runtime/opal_progress.c:187
</span><br>
<span class="quotelev1">&gt; #2  0x00007feea9e125c5 in opal_condition_wait (c=&lt;optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt; m=&lt;optimized out&gt;)
</span><br>
<span class="quotelev1">&gt;     at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev1">&gt; #3  ompi_request_wait_completion (req=0xe55200) at 
</span><br>
<span class="quotelev1">&gt; ../../../../ompi/request/request.h:381
</span><br>
<span class="quotelev1">&gt; #4  mca_pml_ob1_recv (addr=&lt;optimized out&gt;, count=255, 
</span><br>
<span class="quotelev1">&gt; datatype=&lt;optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     src=&lt;optimized out&gt;, tag=&lt;optimized out&gt;, comm=&lt;optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt; status=0x7fff4a618000)
</span><br>
<span class="quotelev1">&gt;     at pml_ob1_irecv.c:118
</span><br>
<span class="quotelev1">&gt; #5  0x00007feeaf35068f in PMPI_Recv (buf=0x7fff4a618020, count=255,
</span><br>
<span class="quotelev1">&gt;     type=0x6020c0 &lt;ompi_mpi_char&gt;, source=&lt;optimized out&gt;, 
</span><br>
<span class="quotelev1">&gt; tag=&lt;optimized out&gt;,
</span><br>
<span class="quotelev1">&gt;     comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;, status=0x7fff4a618000) at 
</span><br>
<span class="quotelev1">&gt; precv.c:78
</span><br>
<span class="quotelev1">&gt; #6  0x0000000000400d49 in slave () at mpi_hello_master_slave.c:67
</span><br>
<span class="quotelev1">&gt; #7  0x00000000004010b3 in main (argc=1, argv=0x7fff4a6184d8) at 
</span><br>
<span class="quotelev1">&gt; mpi_hello_master_slave.c:113
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scenario 2:
</span><br>
<span class="quotelev1">&gt; Dual socket Hexcore machine with Qlogic IB, Chelsio iWARP and Fibre 
</span><br>
<span class="quotelev1">&gt; Channel, all link down, GigE, link up, OpenMPI compiled from master 
</span><br>
<span class="quotelev1">&gt; branch, crashes as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI Desktop]$ mpirun -np 2 ./mpi_hello_master_slave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_hello_master_slave:39570 terminated with signal 11 at PC=20 
</span><br>
<span class="quotelev1">&gt; SP=7ffd438c00b8.  Backtrace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpi_hello_master_slave:39571 terminated with signal 11 at PC=20 
</span><br>
<span class="quotelev1">&gt; SP=7ffee5903e08.  Backtrace:
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 0 on node smallMPI exited 
</span><br>
<span class="quotelev1">&gt; on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scenario 3:
</span><br>
<span class="quotelev1">&gt; Exactly same as scenario 2, but with command line more explicit as 
</span><br>
<span class="quotelev1">&gt; follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI Desktop]$ mpirun -np 2 -mca btl self,sm 
</span><br>
<span class="quotelev1">&gt; ./mpi_hello_master_slave
</span><br>
<span class="quotelev1">&gt; This hangs with the following backtrace:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007ff6639f049d in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007ff663a210d4 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00007ff662f72796 in OPAL_PMIX_PMIX120_PMIx_Fence (procs=0x0, 
</span><br>
<span class="quotelev1">&gt; nprocs=0, info=0x0, ninfo=0)
</span><br>
<span class="quotelev1">&gt;     at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev1">&gt; #3  0x00007ff662f4f0bc in pmix120_fence (procs=0x0, collect_data=0) at 
</span><br>
<span class="quotelev1">&gt; pmix120_client.c:255
</span><br>
<span class="quotelev1">&gt; #4  0x00007ff663f941af in ompi_mpi_init (argc=1, argv=0x7ffc18c9afd8, 
</span><br>
<span class="quotelev1">&gt; requested=0, provided=0x7ffc18c9adac)
</span><br>
<span class="quotelev1">&gt;     at runtime/ompi_mpi_init.c:813
</span><br>
<span class="quotelev1">&gt; #5  0x00007ff663fc9c33 in PMPI_Init (argc=0x7ffc18c9addc, 
</span><br>
<span class="quotelev1">&gt; argv=0x7ffc18c9add0) at pinit.c:66
</span><br>
<span class="quotelev1">&gt; #6  0x000000000040101f in main (argc=1, argv=0x7ffc18c9afd8) at 
</span><br>
<span class="quotelev1">&gt; mpi_hello_master_slave.c:94
</span><br>
<span class="quotelev1">&gt; (gdb) q
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f5af7646117 in sched_yield () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f5af7323875 in amsh_ep_connreq_wrap () from 
</span><br>
<span class="quotelev1">&gt; /lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev1">&gt; #2  0x00007f5af7324254 in amsh_ep_connect () from 
</span><br>
<span class="quotelev1">&gt; /lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev1">&gt; #3  0x00007f5af732d0df in psm_ep_connect () from 
</span><br>
<span class="quotelev1">&gt; /lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x00007f5af7d94a69 in ompi_mtl_psm_add_procs (mtl=0x7f5af80f8500 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mtl_psm&gt;, nprocs=2, procs=0xf53e60)
</span><br>
<span class="quotelev1">&gt;     at mtl_psm.c:312
</span><br>
<span class="quotelev1">&gt; #5  0x00007f5af7df3630 in mca_pml_cm_add_procs (procs=0xf53e60, 
</span><br>
<span class="quotelev1">&gt; nprocs=2) at pml_cm.c:134
</span><br>
<span class="quotelev1">&gt; #6  0x00007f5af7bcc0d1 in ompi_mpi_init (argc=1, argv=0x7ffc485a2f98, 
</span><br>
<span class="quotelev1">&gt; requested=0, provided=0x7ffc485a2d6c)
</span><br>
<span class="quotelev1">&gt;     at runtime/ompi_mpi_init.c:777
</span><br>
<span class="quotelev1">&gt; #7  0x00007f5af7c01c33 in PMPI_Init (argc=0x7ffc485a2d9c, 
</span><br>
<span class="quotelev1">&gt; argv=0x7ffc485a2d90) at pinit.c:66
</span><br>
<span class="quotelev1">&gt; #8  0x000000000040101f in main (argc=1, argv=0x7ffc485a2f98) at 
</span><br>
<span class="quotelev1">&gt; mpi_hello_master_slave.c:94
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This seems to suggest that it is trying PSM to connect even when the 
</span><br>
<span class="quotelev1">&gt; link was down and it was not mentioned in the command line. Is this 
</span><br>
<span class="quotelev1">&gt; behavior expected?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scenario 4:
</span><br>
<span class="quotelev1">&gt; Exactly same as scenario 3, but with even more explicit command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [durga_at_smallMPI Desktop]$ mpirun -np 2 -mca btl self,sm -mca pml ob1 
</span><br>
<span class="quotelev1">&gt; ./mpi_hello_master_slave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This hangs towards the end, after printing the output (as opposed to 
</span><br>
<span class="quotelev1">&gt; scenario 3 where it hangs at the connection setup stage, without 
</span><br>
<span class="quotelev1">&gt; printing anything.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 0 of 2 running on host smallMPI
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Process 1 of 2 running on host smallMPI
</span><br>
<span class="quotelev1">&gt; Greetings from task 1:
</span><br>
<span class="quotelev1">&gt;   message type:        3
</span><br>
<span class="quotelev1">&gt;   msg length:          141 characters
</span><br>
<span class="quotelev1">&gt;   message:
</span><br>
<span class="quotelev1">&gt;     hostname:          smallMPI
</span><br>
<span class="quotelev1">&gt;     operating system:  Linux
</span><br>
<span class="quotelev1">&gt;     release:           3.10.0-327.13.1.el7.x86_64
</span><br>
<span class="quotelev1">&gt;     processor:         x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Backtraces of the two processes are as follows:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  opal_timer_base_get_usec_clock_gettime () at 
</span><br>
<span class="quotelev1">&gt; timer_linux_component.c:180
</span><br>
<span class="quotelev1">&gt; #1  0x00007f10f46e50e4 in opal_progress () at runtime/opal_progress.c:161
</span><br>
<span class="quotelev1">&gt; #2  0x00007f10f58a9d8b in opal_condition_wait (c=0x7f10f5df3c40 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_request_cond&gt;,
</span><br>
<span class="quotelev1">&gt;     m=0x7f10f5df3bc0 &lt;ompi_request_lock&gt;) at 
</span><br>
<span class="quotelev1">&gt; ../opal/threads/condition.h:76
</span><br>
<span class="quotelev1">&gt; #3  0x00007f10f58aa31b in ompi_request_default_wait_all (count=2, 
</span><br>
<span class="quotelev1">&gt; requests=0x7ffe7edd5a80,
</span><br>
<span class="quotelev1">&gt;     statuses=0x7ffe7edd5a50) at request/req_wait.c:287
</span><br>
<span class="quotelev1">&gt; #4  0x00007f10f596f225 in ompi_coll_base_sendrecv_zero (dest=1, 
</span><br>
<span class="quotelev1">&gt; stag=-16, source=1, rtag=-16,
</span><br>
<span class="quotelev1">&gt;     comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;) at base/coll_base_barrier.c:63
</span><br>
<span class="quotelev1">&gt; #5  0x00007f10f596f92a in ompi_coll_base_barrier_intra_two_procs 
</span><br>
<span class="quotelev1">&gt; (comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev1">&gt;     module=0xd5a7f0) at base/coll_base_barrier.c:308
</span><br>
<span class="quotelev1">&gt; #6  0x00007f10f599ffec in ompi_coll_tuned_barrier_intra_dec_fixed 
</span><br>
<span class="quotelev1">&gt; (comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev1">&gt;     module=0xd5a7f0) at coll_tuned_decision_fixed.c:196
</span><br>
<span class="quotelev1">&gt; #7  0x00007f10f58c86fd in PMPI_Barrier (comm=0x6022c0 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev1">&gt; #8  0x00000000004010bd in main (argc=1, argv=0x7ffe7edd5d48) at 
</span><br>
<span class="quotelev1">&gt; mpi_hello_master_slave.c:115
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007fffe9d6a988 in clock_gettime ()
</span><br>
<span class="quotelev1">&gt; #1  0x00007f704bf64edd in clock_gettime () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #2  0x00007f704b4deea5 in opal_timer_base_get_usec_clock_gettime () at 
</span><br>
<span class="quotelev1">&gt; timer_linux_component.c:183
</span><br>
<span class="quotelev1">&gt; #3  0x00007f704b2f50e4 in opal_progress () at runtime/opal_progress.c:161
</span><br>
<span class="quotelev1">&gt; #4  0x00007f704c6cc39c in opal_condition_wait (c=0x7f704ca03c40 
</span><br>
<span class="quotelev1">&gt; &lt;ompi_request_cond&gt;,
</span><br>
<span class="quotelev1">&gt;     m=0x7f704ca03bc0 &lt;ompi_request_lock&gt;) at 
</span><br>
<span class="quotelev1">&gt; ../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev1">&gt; #5  0x00007f704c6cc560 in ompi_request_wait_completion (req=0x165e580) 
</span><br>
<span class="quotelev1">&gt; at ../../../../ompi/request/request.h:383
</span><br>
<span class="quotelev1">&gt; #6  0x00007f704c6cd724 in mca_pml_ob1_recv (addr=0x7fffe9cafa10, 
</span><br>
<span class="quotelev1">&gt; count=255, datatype=0x6020c0 &lt;ompi_mpi_char&gt;,
</span><br>
<span class="quotelev1">&gt;     src=0, tag=1, comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;, 
</span><br>
<span class="quotelev1">&gt; status=0x7fffe9caf9f0) at pml_ob1_irecv.c:123
</span><br>
<span class="quotelev1">&gt; #7  0x00007f704c4ff434 in PMPI_Recv (buf=0x7fffe9cafa10, count=255, 
</span><br>
<span class="quotelev1">&gt; type=0x6020c0 &lt;ompi_mpi_char&gt;, source=0,
</span><br>
<span class="quotelev1">&gt;     tag=1, comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;, status=0x7fffe9caf9f0) 
</span><br>
<span class="quotelev1">&gt; at precv.c:79
</span><br>
<span class="quotelev1">&gt; #8  0x0000000000400d49 in slave () at mpi_hello_master_slave.c:67
</span><br>
<span class="quotelev1">&gt; #9  0x00000000004010b3 in main (argc=1, argv=0x7fffe9cafec8) at 
</span><br>
<span class="quotelev1">&gt; mpi_hello_master_slave.c:113
</span><br>
<span class="quotelev1">&gt; (gdb) q
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am going to try the tarball shortly, but hopefully someone can get 
</span><br>
<span class="quotelev1">&gt; some insight out of this much information. BTW, the code was compiled 
</span><br>
<span class="quotelev1">&gt; with the following flags:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Wall -Wextra -g3 -O0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me rehash that NO network communication was involved in any of 
</span><br>
<span class="quotelev1">&gt; these experiments; they were all single node shared memory (sm btl) jobs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev1">&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29018.php">http://www.open-mpi.org/community/lists/users/2016/04/29018.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29019/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="29018.php">dpchoudh .: "[OMPI users] Cannot run a simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="29018.php">dpchoudh .: "[OMPI users] Cannot run a simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Reply:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Reply:</strong> <a href="29027.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a simple MPI program"</a>
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
