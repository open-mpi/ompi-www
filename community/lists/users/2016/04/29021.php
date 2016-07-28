<?
$subject_val = "Re: [OMPI users] Cannot run a simple MPI program";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 24 21:43:46 2016" -->
<!-- isoreceived="20160425014346" -->
<!-- sent="Sun, 24 Apr 2016 21:43:44 -0400" -->
<!-- isosent="20160425014344" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot run a simple MPI program" -->
<!-- id="CAMJJpkVRoqa8yW_UkPKZUhGkb+TPR+OkSPFnOBvFeT4FiF2OUQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHXxYDhaKjXzpd5MC=MG_voa7mkBDsxyWyy5G8qMvEh_vdWboQ_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-24 21:43:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29022.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29022.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Reply:</strong> <a href="29022.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Add --mca pml ob1 to your mpirun command.
<br>
<p>George
<br>
<p>On Sunday, April 24, 2016, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for finding the bug; it was not there in the original code; I
</span><br>
<span class="quotelev1">&gt; added it while trying to 'simplify' the code.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With the bug fixed, the code now runs in the last scenario. But it still
</span><br>
<span class="quotelev1">&gt; hangs with the following command line (even after updating to latest git
</span><br>
<span class="quotelev1">&gt; tree, rebuilding and reinstalling):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 -mca btl self,sm ./mpi_hello_master_slave
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and the stack is still as before:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0x00007f4e4bd60117 in sched_yield () from /lib64/libc.so.6
</span><br>
<span class="quotelev1">&gt; #1  0x00007f4e4ba3d875 in amsh_ep_connreq_wrap () from
</span><br>
<span class="quotelev1">&gt; /lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev1">&gt; #2  0x00007f4e4ba3e254 in amsh_ep_connect () from
</span><br>
<span class="quotelev1">&gt; /lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev1">&gt; #3  0x00007f4e4ba470df in psm_ep_connect () from
</span><br>
<span class="quotelev1">&gt; /lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev1">&gt; #4  0x00007f4e4c4c8975 in ompi_mtl_psm_add_procs (mtl=0x7f4e4c846500
</span><br>
<span class="quotelev1">&gt; &lt;ompi_mtl_psm&gt;, nprocs=2, procs=0x23bb420)
</span><br>
<span class="quotelev1">&gt;     at mtl_psm.c:312
</span><br>
<span class="quotelev1">&gt; #5  0x00007f4e4c52ef6b in mca_pml_cm_add_procs (procs=0x23bb420, nprocs=2)
</span><br>
<span class="quotelev1">&gt; at pml_cm.c:134
</span><br>
<span class="quotelev1">&gt; #6  0x00007f4e4c2e7d0f in ompi_mpi_init (argc=1, argv=0x7fffe930f9b8,
</span><br>
<span class="quotelev1">&gt; requested=0, provided=0x7fffe930f78c)
</span><br>
<span class="quotelev1">&gt;     at runtime/ompi_mpi_init.c:770
</span><br>
<span class="quotelev1">&gt; #7  0x00007f4e4c324aff in PMPI_Init (argc=0x7fffe930f7bc,
</span><br>
<span class="quotelev1">&gt; argv=0x7fffe930f7b0) at pinit.c:66
</span><br>
<span class="quotelev1">&gt; #8  0x000000000040101f in main (argc=1, argv=0x7fffe930f9b8) at
</span><br>
<span class="quotelev1">&gt; mpi_hello_master_slave.c:94
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As you can see, OMPI is trying the PSM link to communicate, even though
</span><br>
<span class="quotelev1">&gt; the link is down and it is not mentioned in the arguments to mpirun. (There
</span><br>
<span class="quotelev1">&gt; are not even multiple nodes mentioned in the arguments.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this the expected behaviour or is it a bug?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev1">&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Apr 24, 2016 at 8:12 PM, Gilles Gouaillardet &lt;gilles_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','gilles_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; two comments :
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - the program is incorrect : slave() should MPI_Recv(..., MPI_ANY_TAG,
</span><br>
<span class="quotelev2">&gt;&gt; ...)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - current master uses pmix114, and your traces mention pmix120
</span><br>
<span class="quotelev2">&gt;&gt;   so your master is out of sync, or pmix120 is an old module that was not
</span><br>
<span class="quotelev2">&gt;&gt; manually removed.
</span><br>
<span class="quotelev2">&gt;&gt;   fwiw, once in a while, i
</span><br>
<span class="quotelev2">&gt;&gt;   rm -rf /.../ompi_install_dir/lib/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;   to get rid of the removed modules
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 4/25/2016 7:34 AM, dpchoudh . wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attached is a simple MPI program (a modified version of a similar program
</span><br>
<span class="quotelev2">&gt;&gt; that was posted by another user). This program, when run on a single node
</span><br>
<span class="quotelev2">&gt;&gt; machine, hangs most of the time, as follows: (in all cases, OS was CentOS 7)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scenario 1: OMPI v 1.10, single socket quad core machine, with Chelsio T3
</span><br>
<span class="quotelev2">&gt;&gt; card, link down, and GigE, link up
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 2 &lt;progname&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Backtrace of the two spawned processes as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f6471647aba in mca_btl_vader_component_progress () at
</span><br>
<span class="quotelev2">&gt;&gt; btl_vader_component.c:708
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f6475c6722a in opal_progress () at runtime/opal_progress.c:187
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f64767b7685 in opal_condition_wait (c=&lt;optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; m=&lt;optimized out&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../opal/threads/condition.h:78
</span><br>
<span class="quotelev2">&gt;&gt; #3  ompi_request_default_wait_all (count=2, requests=0x7ffd1d921530,
</span><br>
<span class="quotelev2">&gt;&gt; statuses=0x7ffd1d921540)
</span><br>
<span class="quotelev2">&gt;&gt;     at request/req_wait.c:281
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f64709dd591 in ompi_coll_tuned_sendrecv_zero (stag=-16,
</span><br>
<span class="quotelev2">&gt;&gt; rtag=-16,
</span><br>
<span class="quotelev2">&gt;&gt;     comm=&lt;optimized out&gt;, source=1, dest=1) at coll_tuned_barrier.c:78
</span><br>
<span class="quotelev2">&gt;&gt; #5  ompi_coll_tuned_barrier_intra_two_procs (comm=0x6022c0
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     module=&lt;optimized out&gt;) at coll_tuned_barrier.c:324
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f64767c92e6 in PMPI_Barrier (comm=0x6022c0
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:70
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00000000004010bd in main (argc=1, argv=0x7ffd1d9217d8) at
</span><br>
<span class="quotelev2">&gt;&gt; mpi_hello_master_slave.c:115
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  mca_pml_ob1_progress () at pml_ob1_progress.c:45
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007feeae7dc22a in opal_progress () at runtime/opal_progress.c:187
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007feea9e125c5 in opal_condition_wait (c=&lt;optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; m=&lt;optimized out&gt;)
</span><br>
<span class="quotelev2">&gt;&gt;     at ../../../../opal/threads/condition.h:78
</span><br>
<span class="quotelev2">&gt;&gt; #3  ompi_request_wait_completion (req=0xe55200) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/request/request.h:381
</span><br>
<span class="quotelev2">&gt;&gt; #4  mca_pml_ob1_recv (addr=&lt;optimized out&gt;, count=255,
</span><br>
<span class="quotelev2">&gt;&gt; datatype=&lt;optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     src=&lt;optimized out&gt;, tag=&lt;optimized out&gt;, comm=&lt;optimized out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; status=0x7fff4a618000)
</span><br>
<span class="quotelev2">&gt;&gt;     at pml_ob1_irecv.c:118
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007feeaf35068f in PMPI_Recv (buf=0x7fff4a618020, count=255,
</span><br>
<span class="quotelev2">&gt;&gt;     type=0x6020c0 &lt;ompi_mpi_char&gt;, source=&lt;optimized out&gt;, tag=&lt;optimized
</span><br>
<span class="quotelev2">&gt;&gt; out&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;, status=0x7fff4a618000) at
</span><br>
<span class="quotelev2">&gt;&gt; precv.c:78
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x0000000000400d49 in slave () at mpi_hello_master_slave.c:67
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00000000004010b3 in main (argc=1, argv=0x7fff4a6184d8) at
</span><br>
<span class="quotelev2">&gt;&gt; mpi_hello_master_slave.c:113
</span><br>
<span class="quotelev2">&gt;&gt; (gdb)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scenario 2:
</span><br>
<span class="quotelev2">&gt;&gt; Dual socket Hexcore machine with Qlogic IB, Chelsio iWARP and Fibre
</span><br>
<span class="quotelev2">&gt;&gt; Channel, all link down, GigE, link up, OpenMPI compiled from master branch,
</span><br>
<span class="quotelev2">&gt;&gt; crashes as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI Desktop]$ mpirun -np 2 ./mpi_hello_master_slave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi_hello_master_slave:39570 terminated with signal 11 at PC=20
</span><br>
<span class="quotelev2">&gt;&gt; SP=7ffd438c00b8.  Backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpi_hello_master_slave:39571 terminated with signal 11 at PC=20
</span><br>
<span class="quotelev2">&gt;&gt; SP=7ffee5903e08.  Backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev2">&gt;&gt; a non-zero exit code. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 0 on node smallMPI exited on
</span><br>
<span class="quotelev2">&gt;&gt; signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scenario 3:
</span><br>
<span class="quotelev2">&gt;&gt; Exactly same as scenario 2, but with command line more explicit as
</span><br>
<span class="quotelev2">&gt;&gt; follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI Desktop]$ mpirun -np 2 -mca btl self,sm
</span><br>
<span class="quotelev2">&gt;&gt; ./mpi_hello_master_slave
</span><br>
<span class="quotelev2">&gt;&gt; This hangs with the following backtrace:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007ff6639f049d in nanosleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007ff663a210d4 in usleep () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007ff662f72796 in OPAL_PMIX_PMIX120_PMIx_Fence (procs=0x0,
</span><br>
<span class="quotelev2">&gt;&gt; nprocs=0, info=0x0, ninfo=0)
</span><br>
<span class="quotelev2">&gt;&gt;     at src/client/pmix_client_fence.c:100
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007ff662f4f0bc in pmix120_fence (procs=0x0, collect_data=0) at
</span><br>
<span class="quotelev2">&gt;&gt; pmix120_client.c:255
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007ff663f941af in ompi_mpi_init (argc=1, argv=0x7ffc18c9afd8,
</span><br>
<span class="quotelev2">&gt;&gt; requested=0, provided=0x7ffc18c9adac)
</span><br>
<span class="quotelev2">&gt;&gt;     at runtime/ompi_mpi_init.c:813
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007ff663fc9c33 in PMPI_Init (argc=0x7ffc18c9addc,
</span><br>
<span class="quotelev2">&gt;&gt; argv=0x7ffc18c9add0) at pinit.c:66
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x000000000040101f in main (argc=1, argv=0x7ffc18c9afd8) at
</span><br>
<span class="quotelev2">&gt;&gt; mpi_hello_master_slave.c:94
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) q
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f5af7646117 in sched_yield () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f5af7323875 in amsh_ep_connreq_wrap () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f5af7324254 in amsh_ep_connect () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f5af732d0df in psm_ep_connect () from
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/libpsm_infinipath.so.1
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f5af7d94a69 in ompi_mtl_psm_add_procs (mtl=0x7f5af80f8500
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_mtl_psm&gt;, nprocs=2, procs=0xf53e60)
</span><br>
<span class="quotelev2">&gt;&gt;     at mtl_psm.c:312
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f5af7df3630 in mca_pml_cm_add_procs (procs=0xf53e60, nprocs=2)
</span><br>
<span class="quotelev2">&gt;&gt; at pml_cm.c:134
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f5af7bcc0d1 in ompi_mpi_init (argc=1, argv=0x7ffc485a2f98,
</span><br>
<span class="quotelev2">&gt;&gt; requested=0, provided=0x7ffc485a2d6c)
</span><br>
<span class="quotelev2">&gt;&gt;     at runtime/ompi_mpi_init.c:777
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f5af7c01c33 in PMPI_Init (argc=0x7ffc485a2d9c,
</span><br>
<span class="quotelev2">&gt;&gt; argv=0x7ffc485a2d90) at pinit.c:66
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x000000000040101f in main (argc=1, argv=0x7ffc485a2f98) at
</span><br>
<span class="quotelev2">&gt;&gt; mpi_hello_master_slave.c:94
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This seems to suggest that it is trying PSM to connect even when the link
</span><br>
<span class="quotelev2">&gt;&gt; was down and it was not mentioned in the command line. Is this behavior
</span><br>
<span class="quotelev2">&gt;&gt; expected?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Scenario 4:
</span><br>
<span class="quotelev2">&gt;&gt; Exactly same as scenario 3, but with even more explicit command line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [durga_at_smallMPI Desktop]$ mpirun -np 2 -mca btl self,sm -mca pml ob1
</span><br>
<span class="quotelev2">&gt;&gt; ./mpi_hello_master_slave
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This hangs towards the end, after printing the output (as opposed to
</span><br>
<span class="quotelev2">&gt;&gt; scenario 3 where it hangs at the connection setup stage, without printing
</span><br>
<span class="quotelev2">&gt;&gt; anything.)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 0 of 2 running on host smallMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Process 1 of 2 running on host smallMPI
</span><br>
<span class="quotelev2">&gt;&gt; Greetings from task 1:
</span><br>
<span class="quotelev2">&gt;&gt;   message type:        3
</span><br>
<span class="quotelev2">&gt;&gt;   msg length:          141 characters
</span><br>
<span class="quotelev2">&gt;&gt;   message:
</span><br>
<span class="quotelev2">&gt;&gt;     hostname:          smallMPI
</span><br>
<span class="quotelev2">&gt;&gt;     operating system:  Linux
</span><br>
<span class="quotelev2">&gt;&gt;     release:           3.10.0-327.13.1.el7.x86_64
</span><br>
<span class="quotelev2">&gt;&gt;     processor:         x86_64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Backtraces of the two processes are as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  opal_timer_base_get_usec_clock_gettime () at
</span><br>
<span class="quotelev2">&gt;&gt; timer_linux_component.c:180
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f10f46e50e4 in opal_progress () at runtime/opal_progress.c:161
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f10f58a9d8b in opal_condition_wait (c=0x7f10f5df3c40
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_request_cond&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     m=0x7f10f5df3bc0 &lt;ompi_request_lock&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; ../opal/threads/condition.h:76
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f10f58aa31b in ompi_request_default_wait_all (count=2,
</span><br>
<span class="quotelev2">&gt;&gt; requests=0x7ffe7edd5a80,
</span><br>
<span class="quotelev2">&gt;&gt;     statuses=0x7ffe7edd5a50) at request/req_wait.c:287
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f10f596f225 in ompi_coll_base_sendrecv_zero (dest=1, stag=-16,
</span><br>
<span class="quotelev2">&gt;&gt; source=1, rtag=-16,
</span><br>
<span class="quotelev2">&gt;&gt;     comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;) at base/coll_base_barrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f10f596f92a in ompi_coll_base_barrier_intra_two_procs
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     module=0xd5a7f0) at base/coll_base_barrier.c:308
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f10f599ffec in ompi_coll_tuned_barrier_intra_dec_fixed
</span><br>
<span class="quotelev2">&gt;&gt; (comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     module=0xd5a7f0) at coll_tuned_decision_fixed.c:196
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f10f58c86fd in PMPI_Barrier (comm=0x6022c0
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_mpi_comm_world&gt;) at pbarrier.c:63
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x00000000004010bd in main (argc=1, argv=0x7ffe7edd5d48) at
</span><br>
<span class="quotelev2">&gt;&gt; mpi_hello_master_slave.c:115
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) bt
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007fffe9d6a988 in clock_gettime ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  0x00007f704bf64edd in clock_gettime () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f704b4deea5 in opal_timer_base_get_usec_clock_gettime () at
</span><br>
<span class="quotelev2">&gt;&gt; timer_linux_component.c:183
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f704b2f50e4 in opal_progress () at runtime/opal_progress.c:161
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f704c6cc39c in opal_condition_wait (c=0x7f704ca03c40
</span><br>
<span class="quotelev2">&gt;&gt; &lt;ompi_request_cond&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     m=0x7f704ca03bc0 &lt;ompi_request_lock&gt;) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../opal/threads/condition.h:76
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f704c6cc560 in ompi_request_wait_completion (req=0x165e580) at
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/request/request.h:383
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f704c6cd724 in mca_pml_ob1_recv (addr=0x7fffe9cafa10,
</span><br>
<span class="quotelev2">&gt;&gt; count=255, datatype=0x6020c0 &lt;ompi_mpi_char&gt;,
</span><br>
<span class="quotelev2">&gt;&gt;     src=0, tag=1, comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;,
</span><br>
<span class="quotelev2">&gt;&gt; status=0x7fffe9caf9f0) at pml_ob1_irecv.c:123
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f704c4ff434 in PMPI_Recv (buf=0x7fffe9cafa10, count=255,
</span><br>
<span class="quotelev2">&gt;&gt; type=0x6020c0 &lt;ompi_mpi_char&gt;, source=0,
</span><br>
<span class="quotelev2">&gt;&gt;     tag=1, comm=0x6022c0 &lt;ompi_mpi_comm_world&gt;, status=0x7fffe9caf9f0) at
</span><br>
<span class="quotelev2">&gt;&gt; precv.c:79
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x0000000000400d49 in slave () at mpi_hello_master_slave.c:67
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x00000000004010b3 in main (argc=1, argv=0x7fffe9cafec8) at
</span><br>
<span class="quotelev2">&gt;&gt; mpi_hello_master_slave.c:113
</span><br>
<span class="quotelev2">&gt;&gt; (gdb) q
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am going to try the tarball shortly, but hopefully someone can get some
</span><br>
<span class="quotelev2">&gt;&gt; insight out of this much information. BTW, the code was compiled with the
</span><br>
<span class="quotelev2">&gt;&gt; following flags:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Wall -Wextra -g3 -O0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let me rehash that NO network communication was involved in any of these
</span><br>
<span class="quotelev2">&gt;&gt; experiments; they were all single node shared memory (sm btl) jobs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1% of the executables have 99% of CPU privilege!
</span><br>
<span class="quotelev2">&gt;&gt; Userspace code! Unite!! Occupy the kernel!!!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/29018.php">http://www.open-mpi.org/community/lists/users/2016/04/29018.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','users_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/04/29019.php">http://www.open-mpi.org/community/lists/users/2016/04/29019.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29021/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29022.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Previous message:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>In reply to:</strong> <a href="29020.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29022.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
<li><strong>Reply:</strong> <a href="29022.php">dpchoudh .: "Re: [OMPI users] Cannot run a simple MPI program"</a>
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
