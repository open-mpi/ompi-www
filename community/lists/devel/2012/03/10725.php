<?
$subject_val = "Re: [OMPI devel] New odls component fails";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 17 14:16:35 2012" -->
<!-- isoreceived="20120317181635" -->
<!-- sent="Sat, 17 Mar 2012 12:16:26 -0600" -->
<!-- isosent="20120317181626" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] New odls component fails" -->
<!-- id="63529F1E-3A46-4820-8927-95C8482694DA_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F64CF2E.90401_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] New odls component fails<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-17 14:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Previous message:</strong> <a href="10724.php">Alex Margolin: "[OMPI devel] New odls component fails"</a>
<li><strong>In reply to:</strong> <a href="10724.php">Alex Margolin: "[OMPI devel] New odls component fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Reply:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think you need to .ompi_ignore all those components. First, you need to use the --without-hwloc option (you misspelled it below as --disable-hwloc).
<br>
<p>Assuming you removed the relevant code from your clone of the default odls module, I suspect the calls are being made in ompi/runtime/ompi_mpi_init.c. If the process detects it isn't bound, it looks to see if it should bind itself. I thought that code was also turned &quot;off&quot; if we configured without-hwloc, so you might have to check it.
<br>
<p>Shared memory is a separate issue. If you want/need to avoid it, then run with -mca btl ^sm and this will turn off all shared memory calls.
<br>
<p><p>On Mar 17, 2012, at 11:51 AM, Alex Margolin wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I want to launch Open-MPI processes using another process: instead of using &quot;hello&quot; x 4 I want to run &quot;mosrun -w hello&quot; x 4 when I start it with &quot;mpirun -n 4 hello&quot;. I've cloned the &quot;default&quot; component in orte/mca/odls (from trunk) - see patch attached.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting an error which is related to mosrun, but I want to configure OpenMPI to avoid it. I'm running on my laptop (&quot;singularity&quot;), which is the only node.
</span><br>
<span class="quotelev1">&gt; I suspect my error (full output at the bottom) is caused by the following lines, indicating system-calls invoked which are not supported by mosrun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MOSRUN: system-call 'sched_getaffinity' not supported under MOSIX
</span><br>
<span class="quotelev1">&gt; MOSRUN: Shared memory (MAP_SHARED) not supported under MOSIX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As the lines state, both the sched_getaffinity() syscall (and the likes) and mmap with MAP_SHARED are not supported. I've tried to find all the relevant instances in the Open-MPI code and disable them, but to no avail:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-trunk$ find . -name .ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./opal/mca/shmem/mmap/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./opal/mca/shmem/posix/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./opal/mca/hwloc/hwloc132/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./opal/mca/timer/altix/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./opal/mca/memory/linux/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./orte/mca/plm/xgrid/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./orte/mca/plm/submit/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./orte/mca/sensor/heartbeat/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/fs/lustre/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/rcache/rb/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/coll/sm/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/coll/demo/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/pml/example/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/op/x86/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/op/example/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/btl/sm/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/btl/template/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/mpool/sm/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/common/sm/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; ./ompi/mca/vprotocol/example/.ompi_ignore
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-trunk$ cat command
</span><br>
<span class="quotelev1">&gt; ./autogen.sh ; ./configure CFLAGS=-m64 CXXFLAGS=-m64 --prefix=/home/alex/huji/ompit --disable-hwloc --disable-mmap-shmem --disable-posix-shmem --disable-sysv-shmem --enable-mca-no-build=maffinity,paffinity ; make ; make install
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/openmpi-trunk$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can anyone help me determine where is the code calling these system calls and disable it? Or maybe it is another, unrelated problem?
</span><br>
<span class="quotelev1">&gt; The attached module is part of a system I'm building (along with the BTL module I've mentioned in the past - still working on it...) in hope of contributing to the Open-MPI community upon completion.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Alex
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; P.S. Here is the full output of the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$ ~/huji/ompit/bin/mpirun -mca orte_debug 100 -n 1 hello
</span><br>
<span class="quotelev1">&gt; [singularity:15041] mca: base: component_find: unable to open /home/alex/huji/ompit/lib/openmpi/mca_paffinity_hwloc: /home/alex/huji/ompit/lib/openmpi/mca_paffinity_hwloc.so: undefined symbol: opal_hwloc_topology (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:15041] mca: base: component_find: unable to open /home/alex/huji/ompit/lib/openmpi/mca_rmaps_rank_file: /home/alex/huji/ompit/lib/openmpi/mca_rmaps_rank_file.so: undefined symbol: opal_hwloc_binding_policy (ignored)
</span><br>
<span class="quotelev1">&gt; [singularity:15041] procdir: /tmp/openmpi-sessions-alex_at_singularity_0/35712/0/0
</span><br>
<span class="quotelev1">&gt; [singularity:15041] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/35712/0
</span><br>
<span class="quotelev1">&gt; [singularity:15041] top: openmpi-sessions-alex_at_singularity_0
</span><br>
<span class="quotelev1">&gt; [singularity:15041] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [singularity:15041] mpirun: reset PATH: /home/alex/huji/ompit/bin:/usr/lib/lightdm/lightdm:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games:/usr/lib/jvm/default-java/bin::/usr/local/apache-maven-3.0.3/bin
</span><br>
<span class="quotelev1">&gt; [singularity:15041] mpirun: reset LD_LIBRARY_PATH: /home/alex/huji/ompit/lib
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] hostfile: checking hostfile /home/alex/huji/ompit/etc/openmpi-default-hostfile for nodes
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] hostfile: filtering nodes through hostfile /home/alex/huji/ompit/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; [singularity:15041] defining message event: grpcomm_bad_module.c 165
</span><br>
<span class="quotelev1">&gt; [singularity:15041] progressed_wait: base/plm_base_launch_support.c 297
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by [[35712,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orte:daemon:send_relay
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orte:daemon:send_relay - recipient list is empty!
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_ADD_LOCAL_PROCS
</span><br>
<span class="quotelev1">&gt;  MPIR_being_debugged = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_debug_state = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_partial_attach_ok = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_i_am_starter = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_forward_output = 0
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable_size = 1
</span><br>
<span class="quotelev1">&gt;  MPIR_proctable:
</span><br>
<span class="quotelev1">&gt;    (i, host, exe, pid) = (0, singularity, /home/alex/huji/benchmarks/simple/hello, 15042)
</span><br>
<span class="quotelev1">&gt; MPIR_executable_path: NULL
</span><br>
<span class="quotelev1">&gt; MPIR_server_arguments: NULL
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MOSRUN: system-call 'sched_getaffinity' not supported under MOSIX
</span><br>
<span class="quotelev1">&gt; MOSRUN: Shared memory (MAP_SHARED) not supported under MOSIX
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [singularity:15042] procdir: /tmp/openmpi-sessions-alex_at_singularity_0/35712/1/0
</span><br>
<span class="quotelev1">&gt; [singularity:15042] jobdir: /tmp/openmpi-sessions-alex_at_singularity_0/35712/1
</span><br>
<span class="quotelev1">&gt; [singularity:15042] top: openmpi-sessions-alex_at_singularity_0
</span><br>
<span class="quotelev1">&gt; [singularity:15042] tmp: /tmp
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orted_recv_cmd: received message from [[35712,1],0]
</span><br>
<span class="quotelev1">&gt; [singularity:15041] defining message event: orted/orted_comm.c 172
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orted_recv_cmd: reissued recv
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by [[35712,1],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SYNC_WANT_NIDMAP
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor: processing commands completed
</span><br>
<span class="quotelev1">&gt; [singularity:15042] OPAL dss:unpack: got type 33 when expecting type 12
</span><br>
<span class="quotelev1">&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../orte/util/nidmap.c at line 429
</span><br>
<span class="quotelev1">&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../orte/mca/ess/base/ess_base_nidmap.c at line 62
</span><br>
<span class="quotelev1">&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../../../../orte/mca/ess/env/ess_env_module.c at line 173
</span><br>
<span class="quotelev1">&gt; [singularity:15042] [[35712,1],0] ORTE_ERROR_LOG: Pack data mismatch in file ../../../orte/runtime/orte_init.c at line 132
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
<span class="quotelev1">&gt;  ompi_mpi_init: orte_init failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Pack data mismatch&quot; (-22) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** The MPI_Init() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; [singularity:15042] Abort before MPI_INIT completed successfully; not able to guarantee that all other processes were killed!
</span><br>
<span class="quotelev1">&gt; [singularity:15041] defining message event: iof_hnp_read.c 293
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by [[35712,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_IOF_COMPLETE
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor: processing commands completed
</span><br>
<span class="quotelev1">&gt; [singularity:15041] defining message event: base/odls_base_default_fns.c 2532
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orte:daemon:cmd:processor called by [[35712,0],0] for tag 1
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_WAITPID_FIRED
</span><br>
<span class="quotelev1">&gt; [singularity:15041] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0]:errmgr_default_hnp.c(948) updating exit status to 1
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; While the primary job  terminated normally, 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Further examination may be required.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [singularity:15041] sess_dir_finalize: job session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] Releasing job data for [35712,0]
</span><br>
<span class="quotelev1">&gt; [singularity:15041] [[35712,0],0] Releasing job data for [35712,1]
</span><br>
<span class="quotelev1">&gt; [singularity:15041] sess_dir_finalize: proc session dir not empty - leaving
</span><br>
<span class="quotelev1">&gt; orterun: exiting with status 1
</span><br>
<span class="quotelev1">&gt; alex_at_singularity:~/huji/benchmarks/simple$
</span><br>
<span class="quotelev1">&gt; &lt;odls_mosix.diff&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Previous message:</strong> <a href="10724.php">Alex Margolin: "[OMPI devel] New odls component fails"</a>
<li><strong>In reply to:</strong> <a href="10724.php">Alex Margolin: "[OMPI devel] New odls component fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
<li><strong>Reply:</strong> <a href="10726.php">Alex Margolin: "Re: [OMPI devel] New odls component fails"</a>
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
