<?
$subject_val = "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 22:29:02 2013" -->
<!-- isoreceived="20131203032902" -->
<!-- sent="Mon, 2 Dec 2013 19:29:00 -0800" -->
<!-- isosent="20131203032900" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II" -->
<!-- id="CAMD57odkJmzrGhgVK0jMWnsWOmEob8ZkB1kqmMH08j6WMatn=Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="529D42E3.30605_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 22:29:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23127.php">ºúÑî: "[OMPI users] can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23125.php">Eric Chamberland: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<li><strong>In reply to:</strong> <a href="23125.php">Eric Chamberland: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No surprise there - that's known behavior. As has been said, we hope to
<br>
extend the thread-multiple support in the 1.9 series.
<br>
<p><p><p>On Mon, Dec 2, 2013 at 6:33 PM, Eric Chamberland &lt;
<br>
Eric.Chamberland_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just open a new &quot;chapter&quot; with the same subject. ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are using OpenMPI 1.6.5 (compiled with --enable-thread-multiple) with
</span><br>
<span class="quotelev1">&gt; Petsc 3.4.3 (on colosse supercomputer: <a href="http://www.calculquebec.ca/en/">http://www.calculquebec.ca/en/</a>
</span><br>
<span class="quotelev1">&gt; resources/compute-servers/colosse). We observed a deadlock with threads
</span><br>
<span class="quotelev1">&gt; within the openib btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We successfully bypassed the deadlock by 2 different ways:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #1- launching the code with &quot;--mca btl ^openib&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #2- compiling OpenMPI 1.6.5 *without* the &quot;--enable-thread-multiple&quot;
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When the code hangs, here are some backtraces (on different processes)
</span><br>
<span class="quotelev1">&gt; that we got:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00007fb4a6a03795 in pthread_spin_lock () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00007fb49db7ea7b in ?? () from /usr/lib64/libmlx4-rdmav2.so
</span><br>
<span class="quotelev1">&gt; #2  0x00007fb4a878d469 in ibv_poll_cq () at
</span><br>
<span class="quotelev1">&gt; /usr/include/infiniband/verbs.h:884
</span><br>
<span class="quotelev1">&gt; #3  poll_device () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3563
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #4  progress_one_device () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3694
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #5  btl_openib_component_progress () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3719
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #6  0x00007fb4a8973d32 in opal_progress () at
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.6.5/opal/runtime/opal_progress.c:207
</span><br>
<span class="quotelev1">&gt; #7  0x00007fb4a87404f0 in opal_condition_wait (count=25695904,
</span><br>
<span class="quotelev1">&gt; requests=0x100, statuses=0x7fff9b7f1320) at
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.6.5/opal/threads/condition.h:92
</span><br>
<span class="quotelev1">&gt; #8  ompi_request_default_wait_all (count=25695904, requests=0x100,
</span><br>
<span class="quotelev1">&gt; statuses=0x7fff9b7f1320) at ../../openmpi-1.6.5/ompi/
</span><br>
<span class="quotelev1">&gt; request/req_wait.c:263
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00007f731d1100b8 in pthread_mutex_unlock () from
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00007f731ee9b3b7 in opal_mutex_unlock () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/opal/threads/mutex_unix.h:123
</span><br>
<span class="quotelev1">&gt; #2  progress_one_device () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3688
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3  btl_openib_component_progress () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3719
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #4  0x00007f731f081d32 in opal_progress () at
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.6.5/opal/runtime/opal_progress.c:207
</span><br>
<span class="quotelev1">&gt; #5  0x00007f731ee4e4f0 in opal_condition_wait (count=25649104,
</span><br>
<span class="quotelev1">&gt; requests=0x0, statuses=0x1875fd0) at
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.6.5/opal/threads/condition.h:92
</span><br>
<span class="quotelev1">&gt; #6  ompi_request_default_wait_all (count=25649104, requests=0x0,
</span><br>
<span class="quotelev1">&gt; statuses=0x1875fd0) at ../../openmpi-1.6.5/ompi/request/req_wait.c:263
</span><br>
<span class="quotelev1">&gt; #7  0x00007f731eec2644 in
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x1875fd0,
</span><br>
<span class="quotelev1">&gt; rbuf=0x0, count=25649104, dtype=0x7f72ce8f80fc, op=0x1875fd0,
</span><br>
<span class="quotelev1">&gt; comm=0x5e80, module=0xca4ec20)
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_
</span><br>
<span class="quotelev1">&gt; tuned_allreduce.c:223
</span><br>
<span class="quotelev1">&gt; #8  0x00007f731eebe2ec in ompi_coll_tuned_allreduce_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (sbuf=0x1875fd0, rbuf=0x0, count=25649104, dtype=0x7f72ce8f80fc,
</span><br>
<span class="quotelev1">&gt; op=0x1875fd0, comm=0x5e80, module=0x159d8330)
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #9  0x00007f731ee5cad9 in PMPI_Allreduce (sendbuf=0x1875fd0,
</span><br>
<span class="quotelev1">&gt; recvbuf=0x0, count=25649104, datatype=0x7f72ce8f80fc, op=0x1875fd0,
</span><br>
<span class="quotelev1">&gt; comm=0x5e80) at pallreduce.c:105
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  opal_progress () at ../../openmpi-1.6.5/opal/
</span><br>
<span class="quotelev1">&gt; runtime/opal_progress.c:206
</span><br>
<span class="quotelev1">&gt; #1  0x00007f8e3d8844f0 in opal_condition_wait (count=0, requests=0x0,
</span><br>
<span class="quotelev1">&gt; statuses=0x7f8e3dde8a20) at ../../openmpi-1.6.5/opal/
</span><br>
<span class="quotelev1">&gt; threads/condition.h:92
</span><br>
<span class="quotelev1">&gt; #2  ompi_request_default_wait_all (count=0, requests=0x0,
</span><br>
<span class="quotelev1">&gt; statuses=0x7f8e3dde8a20) at ../../openmpi-1.6.5/ompi/
</span><br>
<span class="quotelev1">&gt; request/req_wait.c:263
</span><br>
<span class="quotelev1">&gt; #3  0x00007f8e3d8f8644 in
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x0, rbuf=0x0,
</span><br>
<span class="quotelev1">&gt; count=1037994528, dtype=0x1, op=0x0, comm=0x60bb, module=0xcb86ce0)
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_
</span><br>
<span class="quotelev1">&gt; tuned_allreduce.c:223
</span><br>
<span class="quotelev1">&gt; #4  0x00007f8e3d8f42ec in ompi_coll_tuned_allreduce_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (sbuf=0x0, rbuf=0x0, count=1037994528, dtype=0x1, op=0x0, comm=0x60bb,
</span><br>
<span class="quotelev1">&gt; module=0x171d59a0)
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #5  0x00007f8e3d892ad9 in PMPI_Allreduce (sendbuf=0x0, recvbuf=0x0,
</span><br>
<span class="quotelev1">&gt; count=1037994528, datatype=0x1, op=0x0, comm=0x60bb) at pallreduce.c:105
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00007f7ef7d0b258 in pthread_mutex_lock_at_plt () from
</span><br>
<span class="quotelev1">&gt; /software/MPI/openmpi/1.6.5_intel/lib/libmpi.so.1
</span><br>
<span class="quotelev1">&gt; #1  0x00007f7ef7d72377 in opal_mutex_lock () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/opal/threads/mutex_unix.h:109
</span><br>
<span class="quotelev1">&gt; #2  progress_one_device () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3650
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3  btl_openib_component_progress () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3719
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #4  0x00007f7ef7f58d32 in opal_progress () at
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.6.5/opal/runtime/opal_progress.c:207
</span><br>
<span class="quotelev1">&gt; #5  0x00007f7ef7d254f0 in opal_condition_wait (count=25625488,
</span><br>
<span class="quotelev1">&gt; requests=0x0, statuses=0x7f7ef8324208) at
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.6.5/opal/threads/condition.h:92
</span><br>
<span class="quotelev1">&gt; #6  ompi_request_default_wait_all (count=25625488, requests=0x0,
</span><br>
<span class="quotelev1">&gt; statuses=0x7f7ef8324208) at ../../openmpi-1.6.5/ompi/
</span><br>
<span class="quotelev1">&gt; request/req_wait.c:263
</span><br>
<span class="quotelev1">&gt; #7  0x00007f7ef7d99644 in
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x1870390,
</span><br>
<span class="quotelev1">&gt; rbuf=0x0, count=-130924024, dtype=0x0, op=0x1874cb0, comm=0x60bc,
</span><br>
<span class="quotelev1">&gt; module=0xca6a360)
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_
</span><br>
<span class="quotelev1">&gt; tuned_allreduce.c:223
</span><br>
<span class="quotelev1">&gt; #8  0x00007f7ef7d952ec in ompi_coll_tuned_allreduce_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (sbuf=0x1870390, rbuf=0x0, count=-130924024, dtype=0x0, op=0x1874cb0,
</span><br>
<span class="quotelev1">&gt; comm=0x60bc, module=0x14512a20)
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #9  0x00007f7ef7d33ad9 in PMPI_Allreduce (sendbuf=0x1870390,
</span><br>
<span class="quotelev1">&gt; recvbuf=0x0, count=-130924024, datatype=0x0, op=0x1874cb0, comm=0x60bc)
</span><br>
<span class="quotelev1">&gt; at pallreduce.c:105
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #0  0x00007f1fe7bcd0b8 in pthread_mutex_unlock () from
</span><br>
<span class="quotelev1">&gt; /lib64/libpthread.so.0
</span><br>
<span class="quotelev1">&gt; #1  0x00007f1fe99583b7 in opal_mutex_unlock () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/opal/threads/mutex_unix.h:123
</span><br>
<span class="quotelev1">&gt; #2  progress_one_device () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3688
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #3  btl_openib_component_progress () at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3719
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #4  0x00007f1fe9b3ed32 in opal_progress () at
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.6.5/opal/runtime/opal_progress.c:207
</span><br>
<span class="quotelev1">&gt; #5  0x00007f1fe990b4f0 in opal_condition_wait (count=25659568,
</span><br>
<span class="quotelev1">&gt; requests=0x0, statuses=0x18788b0) at
</span><br>
<span class="quotelev1">&gt; ../../openmpi-1.6.5/opal/threads/condition.h:92
</span><br>
<span class="quotelev1">&gt; #6  ompi_request_default_wait_all (count=25659568, requests=0x0,
</span><br>
<span class="quotelev1">&gt; statuses=0x18788b0) at ../../openmpi-1.6.5/ompi/request/req_wait.c:263
</span><br>
<span class="quotelev1">&gt; #7  0x00007f1fe997f644 in
</span><br>
<span class="quotelev1">&gt; ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x18788b0,
</span><br>
<span class="quotelev1">&gt; rbuf=0x0, count=25659568, dtype=0x7f1f9949727c, op=0x18788b0,
</span><br>
<span class="quotelev1">&gt; comm=0x3db6, module=0xccda900)
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_
</span><br>
<span class="quotelev1">&gt; tuned_allreduce.c:223
</span><br>
<span class="quotelev1">&gt; #8  0x00007f1fe997b2ec in ompi_coll_tuned_allreduce_intra_dec_fixed
</span><br>
<span class="quotelev1">&gt; (sbuf=0x18788b0, rbuf=0x0, count=25659568, dtype=0x7f1f9949727c,
</span><br>
<span class="quotelev1">&gt; op=0x18788b0, comm=0x3db6, module=0x170dbf00)
</span><br>
<span class="quotelev1">&gt;       at
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:61
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #9  0x00007f1fe9919ad9 in PMPI_Allreduce (sendbuf=0x18788b0,
</span><br>
<span class="quotelev1">&gt; recvbuf=0x0, count=25659568, datatype=0x7f1f9949727c, op=0x18788b0,
</span><br>
<span class="quotelev1">&gt; comm=0x3db6) at pallreduce.c:105
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached, is &quot;ompi_info -all&quot; output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; here is the command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;mpiexec -mca mpi_show_mca_params all -mca oob_tcp_peer_retries 1000
</span><br>
<span class="quotelev1">&gt;  --output-filename PneuSurfaceLibre.out --timestamp-output
</span><br>
<span class="quotelev1">&gt; --report-bindings -mca orte_num_sockets 2 -mca orte_num_cores 4
</span><br>
<span class="quotelev1">&gt; --bind-to-socket -npersocket 1 our_housecode_executable_based_on_petsc_343
</span><br>
<span class="quotelev1">&gt;    and_parameters...&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope it can help to debug!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23126/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23127.php">ºúÑî: "[OMPI users] can you help me please ?thanks"</a>
<li><strong>Previous message:</strong> <a href="23125.php">Eric Chamberland: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<li><strong>In reply to:</strong> <a href="23125.php">Eric Chamberland: "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<!-- nextthread="start" -->
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
