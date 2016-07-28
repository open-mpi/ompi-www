<?
$subject_val = "[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec  2 21:30:44 2013" -->
<!-- isoreceived="20131203023044" -->
<!-- sent="Mon, 02 Dec 2013 21:33:07 -0500" -->
<!-- isosent="20131203023307" -->
<!-- name="Eric Chamberland" -->
<!-- email="Eric.Chamberland_at_[hidden]" -->
<!-- subject="[OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II" -->
<!-- id="529D42E3.30605_at_giref.ulaval.ca" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II<br>
<strong>From:</strong> Eric Chamberland (<em>Eric.Chamberland_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-02 21:33:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23126.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<li><strong>Previous message:</strong> <a href="23124.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23126.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<li><strong>Reply:</strong> <a href="23126.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just open a new &quot;chapter&quot; with the same subject. ;-)
<br>
<p>We are using OpenMPI 1.6.5 (compiled with --enable-thread-multiple) with 
<br>
Petsc 3.4.3 (on colosse supercomputer: 
<br>
<a href="http://www.calculquebec.ca/en/resources/compute-servers/colosse">http://www.calculquebec.ca/en/resources/compute-servers/colosse</a>). We 
<br>
observed a deadlock with threads within the openib btl.
<br>
<p>We successfully bypassed the deadlock by 2 different ways:
<br>
<p>#1- launching the code with &quot;--mca btl ^openib&quot;
<br>
<p>#2- compiling OpenMPI 1.6.5 *without* the &quot;--enable-thread-multiple&quot; option.
<br>
<p>When the code hangs, here are some backtraces (on different processes) 
<br>
that we got:
<br>
<p>#0  0x00007fb4a6a03795 in pthread_spin_lock () from /lib64/libpthread.so.0
<br>
#1  0x00007fb49db7ea7b in ?? () from /usr/lib64/libmlx4-rdmav2.so
<br>
#2  0x00007fb4a878d469 in ibv_poll_cq () at
<br>
/usr/include/infiniband/verbs.h:884
<br>
#3  poll_device () at
<br>
../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3563 
<br>
<p>#4  progress_one_device () at
<br>
../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3694 
<br>
<p>#5  btl_openib_component_progress () at
<br>
../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3719 
<br>
<p>#6  0x00007fb4a8973d32 in opal_progress () at
<br>
../../openmpi-1.6.5/opal/runtime/opal_progress.c:207
<br>
#7  0x00007fb4a87404f0 in opal_condition_wait (count=25695904,
<br>
requests=0x100, statuses=0x7fff9b7f1320) at
<br>
../../openmpi-1.6.5/opal/threads/condition.h:92
<br>
#8  ompi_request_default_wait_all (count=25695904, requests=0x100,
<br>
statuses=0x7fff9b7f1320) at ../../openmpi-1.6.5/ompi/request/req_wait.c:263
<br>
<p><p><p><p>#0  0x00007f731d1100b8 in pthread_mutex_unlock () from
<br>
/lib64/libpthread.so.0
<br>
#1  0x00007f731ee9b3b7 in opal_mutex_unlock () at
<br>
../../../../../openmpi-1.6.5/opal/threads/mutex_unix.h:123
<br>
#2  progress_one_device () at
<br>
../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3688 
<br>
<p>#3  btl_openib_component_progress () at
<br>
../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3719 
<br>
<p>#4  0x00007f731f081d32 in opal_progress () at
<br>
../../openmpi-1.6.5/opal/runtime/opal_progress.c:207
<br>
#5  0x00007f731ee4e4f0 in opal_condition_wait (count=25649104,
<br>
requests=0x0, statuses=0x1875fd0) at
<br>
../../openmpi-1.6.5/opal/threads/condition.h:92
<br>
#6  ompi_request_default_wait_all (count=25649104, requests=0x0,
<br>
statuses=0x1875fd0) at ../../openmpi-1.6.5/ompi/request/req_wait.c:263
<br>
#7  0x00007f731eec2644 in
<br>
ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x1875fd0,
<br>
rbuf=0x0, count=25649104, dtype=0x7f72ce8f80fc, op=0x1875fd0,
<br>
comm=0x5e80, module=0xca4ec20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_allreduce.c:223
<br>
#8  0x00007f731eebe2ec in ompi_coll_tuned_allreduce_intra_dec_fixed
<br>
(sbuf=0x1875fd0, rbuf=0x0, count=25649104, dtype=0x7f72ce8f80fc,
<br>
op=0x1875fd0, comm=0x5e80, module=0x159d8330)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:61 
<br>
<p>#9  0x00007f731ee5cad9 in PMPI_Allreduce (sendbuf=0x1875fd0,
<br>
recvbuf=0x0, count=25649104, datatype=0x7f72ce8f80fc, op=0x1875fd0,
<br>
comm=0x5e80) at pallreduce.c:105
<br>
<p><p><p>#0  opal_progress () at 
<br>
../../openmpi-1.6.5/opal/runtime/opal_progress.c:206
<br>
#1  0x00007f8e3d8844f0 in opal_condition_wait (count=0, requests=0x0,
<br>
statuses=0x7f8e3dde8a20) at ../../openmpi-1.6.5/opal/threads/condition.h:92
<br>
#2  ompi_request_default_wait_all (count=0, requests=0x0,
<br>
statuses=0x7f8e3dde8a20) at ../../openmpi-1.6.5/ompi/request/req_wait.c:263
<br>
#3  0x00007f8e3d8f8644 in
<br>
ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x0, rbuf=0x0,
<br>
count=1037994528, dtype=0x1, op=0x0, comm=0x60bb, module=0xcb86ce0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_allreduce.c:223
<br>
#4  0x00007f8e3d8f42ec in ompi_coll_tuned_allreduce_intra_dec_fixed
<br>
(sbuf=0x0, rbuf=0x0, count=1037994528, dtype=0x1, op=0x0, comm=0x60bb,
<br>
module=0x171d59a0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:61 
<br>
<p>#5  0x00007f8e3d892ad9 in PMPI_Allreduce (sendbuf=0x0, recvbuf=0x0,
<br>
count=1037994528, datatype=0x1, op=0x0, comm=0x60bb) at pallreduce.c:105
<br>
<p><p><p>#0  0x00007f7ef7d0b258 in pthread_mutex_lock_at_plt () from
<br>
/software/MPI/openmpi/1.6.5_intel/lib/libmpi.so.1
<br>
#1  0x00007f7ef7d72377 in opal_mutex_lock () at
<br>
../../../../../openmpi-1.6.5/opal/threads/mutex_unix.h:109
<br>
#2  progress_one_device () at
<br>
../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3650 
<br>
<p>#3  btl_openib_component_progress () at
<br>
../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3719 
<br>
<p>#4  0x00007f7ef7f58d32 in opal_progress () at
<br>
../../openmpi-1.6.5/opal/runtime/opal_progress.c:207
<br>
#5  0x00007f7ef7d254f0 in opal_condition_wait (count=25625488,
<br>
requests=0x0, statuses=0x7f7ef8324208) at
<br>
../../openmpi-1.6.5/opal/threads/condition.h:92
<br>
#6  ompi_request_default_wait_all (count=25625488, requests=0x0,
<br>
statuses=0x7f7ef8324208) at ../../openmpi-1.6.5/ompi/request/req_wait.c:263
<br>
#7  0x00007f7ef7d99644 in
<br>
ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x1870390,
<br>
rbuf=0x0, count=-130924024, dtype=0x0, op=0x1874cb0, comm=0x60bc,
<br>
module=0xca6a360)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_allreduce.c:223
<br>
#8  0x00007f7ef7d952ec in ompi_coll_tuned_allreduce_intra_dec_fixed
<br>
(sbuf=0x1870390, rbuf=0x0, count=-130924024, dtype=0x0, op=0x1874cb0,
<br>
comm=0x60bc, module=0x14512a20)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:61 
<br>
<p>#9  0x00007f7ef7d33ad9 in PMPI_Allreduce (sendbuf=0x1870390,
<br>
recvbuf=0x0, count=-130924024, datatype=0x0, op=0x1874cb0, comm=0x60bc)
<br>
at pallreduce.c:105
<br>
<p><p><p><p>#0  0x00007f1fe7bcd0b8 in pthread_mutex_unlock () from
<br>
/lib64/libpthread.so.0
<br>
#1  0x00007f1fe99583b7 in opal_mutex_unlock () at
<br>
../../../../../openmpi-1.6.5/opal/threads/mutex_unix.h:123
<br>
#2  progress_one_device () at
<br>
../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3688 
<br>
<p>#3  btl_openib_component_progress () at
<br>
../../../../../openmpi-1.6.5/ompi/mca/btl/openib/btl_openib_component.c:3719 
<br>
<p>#4  0x00007f1fe9b3ed32 in opal_progress () at
<br>
../../openmpi-1.6.5/opal/runtime/opal_progress.c:207
<br>
#5  0x00007f1fe990b4f0 in opal_condition_wait (count=25659568,
<br>
requests=0x0, statuses=0x18788b0) at
<br>
../../openmpi-1.6.5/opal/threads/condition.h:92
<br>
#6  ompi_request_default_wait_all (count=25659568, requests=0x0,
<br>
statuses=0x18788b0) at ../../openmpi-1.6.5/ompi/request/req_wait.c:263
<br>
#7  0x00007f1fe997f644 in
<br>
ompi_coll_tuned_allreduce_intra_recursivedoubling (sbuf=0x18788b0,
<br>
rbuf=0x0, count=25659568, dtype=0x7f1f9949727c, op=0x18788b0,
<br>
comm=0x3db6, module=0xccda900)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_allreduce.c:223
<br>
#8  0x00007f1fe997b2ec in ompi_coll_tuned_allreduce_intra_dec_fixed
<br>
(sbuf=0x18788b0, rbuf=0x0, count=25659568, dtype=0x7f1f9949727c,
<br>
op=0x18788b0, comm=0x3db6, module=0x170dbf00)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at
<br>
../../../../../openmpi-1.6.5/ompi/mca/coll/tuned/coll_tuned_decision_fixed.c:61 
<br>
<p>#9  0x00007f1fe9919ad9 in PMPI_Allreduce (sendbuf=0x18788b0,
<br>
recvbuf=0x0, count=25659568, datatype=0x7f1f9949727c, op=0x18788b0,
<br>
comm=0x3db6) at pallreduce.c:105
<br>
<p>Attached, is &quot;ompi_info -all&quot; output.
<br>
<p>here is the command line:
<br>
<p>&quot;mpiexec -mca mpi_show_mca_params all -mca oob_tcp_peer_retries 1000  
<br>
--output-filename PneuSurfaceLibre.out --timestamp-output 
<br>
--report-bindings -mca orte_num_sockets 2 -mca orte_num_cores 4 
<br>
--bind-to-socket -npersocket 1 
<br>
our_housecode_executable_based_on_petsc_343    and_parameters...&quot;
<br>
<p>Hope it can help to debug!
<br>
<p>Thanks!
<br>
<p>Eric
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23125/ompiinfo.txt">ompiinfo.txt</a>
</ul>
<!-- attachment="ompiinfo.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23126.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<li><strong>Previous message:</strong> <a href="23124.php">Ralph Castain: "Re: [OMPI users] [EXTERNAL] Re: (OpenMPI for Cray XE6 ) How to set mca parameters through aprun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23126.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
<li><strong>Reply:</strong> <a href="23126.php">Ralph Castain: "Re: [OMPI users] MPI process hangs if OpenMPI is compiled with --enable-thread-multiple -- part II"</a>
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
