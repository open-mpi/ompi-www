<?
$subject_val = "[OMPI devel] New odls component fails";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 17 13:51:57 2012" -->
<!-- isoreceived="20120317175157" -->
<!-- sent="Sat, 17 Mar 2012 19:51:42 +0200" -->
<!-- isosent="20120317175142" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] New odls component fails" -->
<!-- id="4F64CF2E.90401_at_mail.huji.ac.il" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] New odls component fails<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-17 13:51:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Previous message:</strong> <a href="10723.php">Jeffrey Squyres: "[OMPI devel] Fwd: [hwloc-devel] possible membind changes coming in the Linux kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Reply:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I want to launch Open-MPI processes using another process: instead of 
<br>
using &quot;hello&quot; x 4 I want to run &quot;mosrun -w hello&quot; x 4 when I start it 
<br>
with &quot;mpirun -n 4 hello&quot;. I've cloned the &quot;default&quot; component in 
<br>
orte/mca/odls (from trunk) - see patch attached.
<br>
<p>I'm getting an error which is related to mosrun, but I want to configure 
<br>
OpenMPI to avoid it. I'm running on my laptop (&quot;singularity&quot;), which is 
<br>
the only node.
<br>
I suspect my error (full output at the bottom) is caused by the 
<br>
following lines, indicating system-calls invoked which are not supported 
<br>
by mosrun:
<br>
<p>MOSRUN: system-call 'sched_getaffinity' not supported under MOSIX
<br>
MOSRUN: Shared memory (MAP_SHARED) not supported under MOSIX
<br>
<p>As the lines state, both the sched_getaffinity() syscall (and the likes) 
<br>
and mmap with MAP_SHARED are not supported. I've tried to find all the 
<br>
relevant instances in the Open-MPI code and disable them, but to no avail:
<br>
<p>alex_at_singularity:~/huji/openmpi-trunk$ find . -name .ompi_ignore
<br>
./opal/mca/shmem/mmap/.ompi_ignore
<br>
./opal/mca/shmem/posix/.ompi_ignore
<br>
./opal/mca/hwloc/hwloc132/.ompi_ignore
<br>
./opal/mca/timer/altix/.ompi_ignore
<br>
./opal/mca/memory/linux/.ompi_ignore
<br>
./orte/mca/plm/xgrid/.ompi_ignore
<br>
./orte/mca/plm/submit/.ompi_ignore
<br>
./orte/mca/sensor/heartbeat/.ompi_ignore
<br>
./ompi/mca/fs/lustre/.ompi_ignore
<br>
./ompi/mca/rcache/rb/.ompi_ignore
<br>
./ompi/mca/coll/sm/.ompi_ignore
<br>
./ompi/mca/coll/demo/.ompi_ignore
<br>
./ompi/mca/pml/example/.ompi_ignore
<br>
./ompi/mca/op/x86/.ompi_ignore
<br>
./ompi/mca/op/example/.ompi_ignore
<br>
./ompi/mca/btl/sm/.ompi_ignore
<br>
./ompi/mca/btl/template/.ompi_ignore
<br>
./ompi/mca/mpool/sm/.ompi_ignore
<br>
./ompi/mca/common/sm/.ompi_ignore
<br>
./ompi/mca/vprotocol/example/.ompi_ignore
<br>
alex_at_singularity:~/huji/openmpi-trunk$ cat command
<br>
./autogen.sh ; ./configure CFLAGS=-m64 CXXFLAGS=-m64 
<br>
--prefix=/home/alex/huji/ompit --disable-hwloc --disable-mmap-shmem 
<br>
--disable-posix-shmem --disable-sysv-shmem 
<br>
--enable-mca-no-build=maffinity,paffinity ; make ; make install
<br>
alex_at_singularity:~/huji/openmpi-trunk$
<br>
<p>Can anyone help me determine where is the code calling these system 
<br>
calls and disable it? Or maybe it is another, unrelated problem?
<br>
The attached module is part of a system I'm building (along with the BTL 
<br>
module I've mentioned in the past - still working on it...) in hope of 
<br>
contributing to the Open-MPI community upon completion.
<br>
<p>Thanks a lot,
<br>
Alex
<br>
<p>P.S. Here is the full output of the error:
<br>
<p>alex_at_singularity:~/huji/benchmarks/simple$ ~/huji/ompit/bin/mpirun -mca 
<br>
orte_debug 100 -n 1 hello
<br>
[singularity:15041] mca: base: component_find: unable to open 
<br>
/home/alex/huji/ompit/lib/openmpi/mca_paffinity_hwloc: 
<br>
/home/alex/huji/ompit/lib/openmpi/mca_paffinity_hwloc.so: undefined 
<br>
symbol: opal_hwloc_topology (ignored)
<br>
[singularity:15041] mca: base: component_find: unable to open 
<br>
/home/alex/huji/ompit/lib/openmpi/mca_rmaps_rank_file: 
<br>
/home/alex/huji/ompit/lib/openmpi/mca_rmaps_rank_file.so: undefined 
<br>
symbol: opal_hwloc_binding_policy (ignored)
<br>
[singularity:15041] procdir: 
<br>
/tmp/openmpi-sessions-alex_at_singularity_0/35712/0/0
<br>
[singularity:15041] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/35712/0
<br>
[singularity:15041] top: openmpi-sessions-alex_at_singularity_0
<br>
[singularity:15041] tmp: /tmp
<br>
[singularity:15041] mpirun: reset PATH: 
<br>
/home/alex/huji/ompit/bin:/usr/lib/lightdm/lightdm:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/lib/jvm/default-java/bin::/usr/local/apache-maven-3.0.3/bin
<br>
[singularity:15041] mpirun: reset LD_LIBRARY_PATH: /home/alex/huji/ompit/lib
<br>
[singularity:15041] [[35712,0],0] hostfile: checking hostfile 
<br>
/home/alex/huji/ompit/etc/openmpi-default-hostfile for nodes
<br>
[singularity:15041] [[35712,0],0] hostfile: filtering nodes through 
<br>
hostfile /home/alex/huji/ompit/etc/openmpi-default-hostfile
<br>
[singularity:15041] defining message event: grpcomm_bad_module.c 165
<br>
[singularity:15041] progressed_wait: base/plm_base_launch_support.c 297
<br>
[singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by 
<br>
[[35712,0],0] for tag 1
<br>
[singularity:15041] [[35712,0],0] orte:daemon:send_relay
<br>
[singularity:15041] [[35712,0],0] orte:daemon:send_relay - recipient 
<br>
list is empty!
<br>
[singularity:15041] [[35712,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_ADD_LOCAL_PROCS
<br>
&nbsp;&nbsp;&nbsp;MPIR_being_debugged = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_debug_state = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_partial_attach_ok = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_i_am_starter = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_forward_output = 0
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable_size = 1
<br>
&nbsp;&nbsp;&nbsp;MPIR_proctable:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(i, host, exe, pid) = (0, singularity, 
<br>
/home/alex/huji/benchmarks/simple/hello, 15042)
<br>
MPIR_executable_path: NULL
<br>
MPIR_server_arguments: NULL
<br>
<p>MOSRUN: system-call 'sched_getaffinity' not supported under MOSIX
<br>
MOSRUN: Shared memory (MAP_SHARED) not supported under MOSIX
<br>
<p>[singularity:15042] procdir: 
<br>
/tmp/openmpi-sessions-alex_at_singularity_0/35712/1/0
<br>
[singularity:15042] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/35712/1
<br>
[singularity:15042] top: openmpi-sessions-alex_at_singularity_0
<br>
[singularity:15042] tmp: /tmp
<br>
[singularity:15041] [[35712,0],0] orted_recv_cmd: received message from 
<br>
[[35712,1],0]
<br>
[singularity:15041] defining message event: orted/orted_comm.c 172
<br>
[singularity:15041] [[35712,0],0] orted_recv_cmd: reissued recv
<br>
[singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by 
<br>
[[35712,1],0] for tag 1
<br>
[singularity:15041] [[35712,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
<br>
[singularity:15041] [[35712,0],0] orte:daemon:cmd:processor: processing 
<br>
commands completed
<br>
[singularity:15042] OPAL dss:unpack: got type 33 when expecting type 12
<br>
[singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in 
<br>
file ../../../orte/util/nidmap.c at line 429
<br>
[singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in 
<br>
file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 62
<br>
[singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in 
<br>
file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
<br>
[singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in 
<br>
file ../../../orte/runtime/orte_init.c at line 132
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
<p>&nbsp;&nbsp;&nbsp;ompi_mpi_init: orte_init failed
<br>
&nbsp;&nbsp;&nbsp;--&gt; Returned &quot;Pack data mismatch&quot; (-22) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** The MPI_Init() function was called before MPI_INIT was invoked.
<br>
*** This is disallowed by the MPI standard.
<br>
*** Your MPI job will now abort.
<br>
[singularity:15042] Abort before MPI_INIT completed successfully; not 
<br>
able to guarantee that all other processes were killed!
<br>
[singularity:15041] defining message event: iof_hnp_read.c 293
<br>
[singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by 
<br>
[[35712,0],0] for tag 1
<br>
[singularity:15041] [[35712,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_IOF_COMPLETE
<br>
[singularity:15041] [[35712,0],0] orte:daemon:cmd:processor: processing 
<br>
commands completed
<br>
[singularity:15041] defining message event: base/odls_base_default_fns.c 
<br>
2532
<br>
[singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by 
<br>
[[35712,0],0] for tag 1
<br>
[singularity:15041] [[35712,0],0] orted:comm:process_commands() 
<br>
Processing Command: ORTE_DAEMON_WAITPID_FIRED
<br>
[singularity:15041] sess_dir_finalize: proc session dir not empty - leaving
<br>
[singularity:15041] [[35712,0],0]:errmgr_default_hnp.c(948) updating 
<br>
exit status to 1
<br>
-------------------------------------------------------
<br>
While the primary job  terminated normally, 1 process returned
<br>
a non-zero exit code.. Further examination may be required.
<br>
-------------------------------------------------------
<br>
[singularity:15041] sess_dir_finalize: job session dir not empty - leaving
<br>
[singularity:15041] [[35712,0],0] Releasing job data for [35712,0]
<br>
[singularity:15041] [[35712,0],0] Releasing job data for [35712,1]
<br>
[singularity:15041] sess_dir_finalize: proc session dir not empty - leaving
<br>
orterun: exiting with status 1
<br>
alex_at_singularity:~/huji/benchmarks/simple$
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10724/odls_mosix.diff">odls_mosix.diff</a>
</ul>
<!-- attachment="odls_mosix.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Previous message:</strong> <a href="10723.php">Jeffrey Squyres: "[OMPI devel] Fwd: [hwloc-devel] possible membind changes coming in the Linux kernel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Reply:</strong> <a href="10725.php">Ralph Castain: "Re: [OMPI devel] New odls component fails"</a>
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
