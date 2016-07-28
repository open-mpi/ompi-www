<?
$subject_val = "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 10:39:15 2014" -->
<!-- isoreceived="20140122153915" -->
<!-- sent="Wed, 22 Jan 2014 07:38:35 -0800" -->
<!-- isosent="20140122153835" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323" -->
<!-- id="62937269-0E35-454E-AFF3-136D3E65872A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201401221334.s0MDYjOo022408_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 10:38:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23430.php">tmishima_at_[hidden]: "[OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23427.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23435.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hard to know how to address all that, Siegmar, but I'll give it a shot. See below.
<br>
<p>On Jan 22, 2014, at 5:34 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I installed openmpi-1.7.4rc2r30323 on our machines
</span><br>
<span class="quotelev1">&gt; (&quot;Solaris 10 x86_64&quot;, &quot;Solaris 10 Sparc&quot;, and &quot;openSUSE Linux
</span><br>
<span class="quotelev1">&gt; 12.1 x86_64&quot; with Sun C 5.12). My rankfile &quot;rf_linpc_sunpc_tyr&quot;
</span><br>
<span class="quotelev1">&gt; contains the following lines.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=linpc0 slot=0:0-1;1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=linpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=tyr slot=1:0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get no output, when I run the following command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;dbx&quot; reports the following problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/solstudio12.3/bin/sparcv9/dbx \
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; For information about new features see `help changes'
</span><br>
<span class="quotelev1">&gt; To remove this message, put `dbxenv suppress_startup_message
</span><br>
<span class="quotelev1">&gt;  7.9' in your .dbxrc
</span><br>
<span class="quotelev1">&gt; Reading mpiexec
</span><br>
<span class="quotelev1">&gt; Reading ld.so.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Reading libmd.so.1
</span><br>
<span class="quotelev1">&gt; (dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev1">&gt; Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname 
</span><br>
<span class="quotelev1">&gt; (process id 22337)
</span><br>
<span class="quotelev1">&gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Reading mca_dfs_test.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; execution completed, exit code is 1
</span><br>
<span class="quotelev1">&gt; (dbx) check -all
</span><br>
<span class="quotelev1">&gt; access checking - ON
</span><br>
<span class="quotelev1">&gt; memuse checking - ON
</span><br>
<span class="quotelev1">&gt; (dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev1">&gt; Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname 
</span><br>
<span class="quotelev1">&gt; (process id 22344)
</span><br>
<span class="quotelev1">&gt; Reading rtcapihook.so
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev1">&gt; Attempting to read 1 byte at address 0xffffffff7fffbf8b
</span><br>
<span class="quotelev1">&gt;    which is 459 bytes above the current stack pointer
</span><br>
<span class="quotelev1">&gt; Variable is 'cwd'
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) stopped in opal_getcwd at line 65 in file &quot;opal_getcwd.c&quot;
</span><br>
<span class="quotelev1">&gt;   65           if (0 != strcmp(pwd, cwd)) {
</span><br>
<span class="quotelev1">&gt; (dbx) quit
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This looks like a bogus issue to me. Are you able to run something *without* a rankfile? In other words, is it rankfile operation that is causing a problem, or are you unable to run anything on Sparc?
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rankfiles work &quot;fine&quot; on x86_64 architectures. Contents of my rankfile.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0=linpc1 slot=0:0-1;1:0-1
</span><br>
<span class="quotelev1">&gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev1">&gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev1">&gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc hostname
</span><br>
<span class="quotelev1">&gt; [sunpc1:13489] MCW rank 1 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt;  socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; [sunpc1:13489] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev1">&gt; [sunpc1:13489] MCW rank 3 bound to socket 1[core 3[hwt 0]]: [./.][./B]
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; [linpc1:29997] MCW rank 0 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt;  processors)
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately &quot;dbx&quot; reports nevertheless a problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/solstudio12.3/bin/amd64/dbx \
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; For information about new features see `help changes'
</span><br>
<span class="quotelev1">&gt; To remove this message, put `dbxenv suppress_startup_message 7.9'
</span><br>
<span class="quotelev1">&gt;  in your .dbxrc
</span><br>
<span class="quotelev1">&gt; Reading mpiexec
</span><br>
<span class="quotelev1">&gt; Reading ld.so.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Reading libmd.so.1
</span><br>
<span class="quotelev1">&gt; (dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc hostname
</span><br>
<span class="quotelev1">&gt; Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc hostname 
</span><br>
<span class="quotelev1">&gt; (process id 18330)
</span><br>
<span class="quotelev1">&gt; Reading mca_shmem_mmap.so
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Reading mca_dfs_test.so
</span><br>
<span class="quotelev1">&gt; [sunpc1:18330] MCW rank 1 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev1">&gt;  socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev1">&gt; [sunpc1:18330] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev1">&gt; [sunpc1:18330] MCW rank 3 bound to socket 1[core 3[hwt 0]]: [./.][./B]
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; sunpc1
</span><br>
<span class="quotelev1">&gt; [linpc1:30148] MCW rank 0 is not bound (or bound to all available
</span><br>
<span class="quotelev1">&gt;  processors)
</span><br>
<span class="quotelev1">&gt; linpc1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; execution completed, exit code is 0
</span><br>
<span class="quotelev1">&gt; (dbx) check -all
</span><br>
<span class="quotelev1">&gt; access checking - ON
</span><br>
<span class="quotelev1">&gt; memuse checking - ON
</span><br>
<span class="quotelev1">&gt; (dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc hostname
</span><br>
<span class="quotelev1">&gt; Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc hostname 
</span><br>
<span class="quotelev1">&gt; (process id 18340)
</span><br>
<span class="quotelev1">&gt; Reading rtcapihook.so
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; Reading disasm.so
</span><br>
<span class="quotelev1">&gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev1">&gt; Attempting to read 1 byte at address 0x436d57
</span><br>
<span class="quotelev1">&gt;    which is 15 bytes into a heap block of size 16 bytes at 0x436d48
</span><br>
<span class="quotelev1">&gt; This block was allocated from:
</span><br>
<span class="quotelev1">&gt;        [1] vasprintf() at 0xfffffd7fdc9b335a 
</span><br>
<span class="quotelev1">&gt;        [2] asprintf() at 0xfffffd7fdc9b3452 
</span><br>
<span class="quotelev1">&gt;        [3] opal_output_init() at line 184 in &quot;output.c&quot;
</span><br>
<span class="quotelev1">&gt;        [4] do_open() at line 548 in &quot;output.c&quot;
</span><br>
<span class="quotelev1">&gt;        [5] opal_output_open() at line 219 in &quot;output.c&quot;
</span><br>
<span class="quotelev1">&gt;        [6] opal_malloc_init() at line 68 in &quot;malloc.c&quot;
</span><br>
<span class="quotelev1">&gt;        [7] opal_init_util() at line 250 in &quot;opal_init.c&quot;
</span><br>
<span class="quotelev1">&gt;        [8] orterun() at line 658 in &quot;orterun.c&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) stopped in do_open at line 638 in file &quot;output.c&quot;
</span><br>
<span class="quotelev1">&gt;  638           info[i].ldi_prefix = strdup(lds-&gt;lds_prefix);
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Again, I think dbx is just getting lost
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can also manually bind threads on our Sun M4000 server (two quad-core
</span><br>
<span class="quotelev1">&gt; Sparc VII processors with two hwthreads each).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec --report-bindings -np 4 --bind-to hwthread hostname
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:09531] MCW rank 1 bound to 
</span><br>
<span class="quotelev1">&gt;  socket 0[core 1[hwt 0]]: [../B./../..][../../../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:09531] MCW rank 2 bound to 
</span><br>
<span class="quotelev1">&gt;  socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:09531] MCW rank 3 bound to 
</span><br>
<span class="quotelev1">&gt;  socket 1[core 5[hwt 0]]: [../../../..][../B./../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:09531] MCW rank 0 bound to 
</span><br>
<span class="quotelev1">&gt;  socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't work with cores. I know that it wasn't possible last
</span><br>
<span class="quotelev1">&gt; summer and it seems that it is still not possible now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec --report-bindings -np 4 --bind-to core hostname
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev1">&gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev1">&gt; will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Local host:        rs0
</span><br>
<span class="quotelev1">&gt;  Application name:  /usr/local/bin/hostname
</span><br>
<span class="quotelev1">&gt;  Error message:     hwloc indicates cpu binding cannot be enforced
</span><br>
<span class="quotelev1">&gt;  Location:          
</span><br>
<span class="quotelev1">&gt; ../../../../../openmpi-1.9a1r30290/orte/mca/odls/default/odls_default_module.c:500
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes failed to start
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it possible to specify hwthreads in a rankfile, so that I can
</span><br>
<span class="quotelev1">&gt; use a rankfile for these machines?
</span><br>
<p>Possible - yes. Will it happen in immediate future - no, I'm afraid I'm swamped right now. However, I'll make a note of it for the future
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the expected output, if I use two M4000 servers, although the
</span><br>
<span class="quotelev1">&gt; above mentioned error still exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /opt/solstudio12.3/bin/sparcv9/dbx \
</span><br>
<span class="quotelev1">&gt;  /usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
</span><br>
<span class="quotelev1">&gt; For information about new features see `help changes'
</span><br>
<span class="quotelev1">&gt; To remove this message, put `dbxenv suppress_startup_message 7.9'
</span><br>
<span class="quotelev1">&gt;  in your .dbxrc
</span><br>
<span class="quotelev1">&gt; Reading mpiexec
</span><br>
<span class="quotelev1">&gt; Reading ld.so.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Reading libmd.so.1
</span><br>
<span class="quotelev1">&gt; (dbx) run --report-bindings --host rs0,rs1 -np 4 \
</span><br>
<span class="quotelev1">&gt;  --bind-to hwthread hostname
</span><br>
<span class="quotelev1">&gt; Running: mpiexec --report-bindings --host rs0,rs1 -np 4
</span><br>
<span class="quotelev1">&gt;  --bind-to hwthread hostname 
</span><br>
<span class="quotelev1">&gt; (process id 9599)
</span><br>
<span class="quotelev1">&gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Reading mca_dfs_test.so
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:09599] MCW rank 1 bound to
</span><br>
<span class="quotelev1">&gt;  socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
</span><br>
<span class="quotelev1">&gt; [rs0.informatik.hs-fulda.de:09599] MCW rank 0 bound to
</span><br>
<span class="quotelev1">&gt;  socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:13398] MCW rank 2 bound to
</span><br>
<span class="quotelev1">&gt;  socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
</span><br>
<span class="quotelev1">&gt; [rs1.informatik.hs-fulda.de:13398] MCW rank 3 bound to
</span><br>
<span class="quotelev1">&gt;  socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
</span><br>
<span class="quotelev1">&gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; execution completed, exit code is 0
</span><br>
<span class="quotelev1">&gt; (dbx) check -all
</span><br>
<span class="quotelev1">&gt; access checking - ON
</span><br>
<span class="quotelev1">&gt; memuse checking - ON
</span><br>
<span class="quotelev1">&gt; (dbx) run --report-bindings --host rs0,rs1 -np 4 \
</span><br>
<span class="quotelev1">&gt;  --bind-to hwthread hostname
</span><br>
<span class="quotelev1">&gt; Running: mpiexec --report-bindings --host rs0,rs1 -np 4
</span><br>
<span class="quotelev1">&gt;  --bind-to hwthread hostname 
</span><br>
<span class="quotelev1">&gt; (process id 9607)
</span><br>
<span class="quotelev1">&gt; Reading rtcapihook.so
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev1">&gt; Attempting to read 1 byte at address 0xffffffff7fffc80b
</span><br>
<span class="quotelev1">&gt;    which is 459 bytes above the current stack pointer
</span><br>
<span class="quotelev1">&gt; Variable is 'cwd'
</span><br>
<span class="quotelev1">&gt; dbx: warning: can't find file
</span><br>
<span class="quotelev1">&gt;  &quot;.../openmpi-1.7.4rc2r30323-SunOS.sparc.64_cc/opal/util/../../../
</span><br>
<span class="quotelev1">&gt;  openmpi-1.7.4rc2r30323/opal/util/opal_getcwd.c&quot;
</span><br>
<span class="quotelev1">&gt; dbx: warning: see `help finding-files'
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) stopped in opal_getcwd at line 65 in file &quot;opal_getcwd.c&quot;
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our M4000 server has no access to the source code, so that it couldn't
</span><br>
<span class="quotelev1">&gt; find the file. Nevertheless it is the same error message as above. Is it
</span><br>
<span class="quotelev1">&gt; possible that someone soves this problem? Thank you very much for any
</span><br>
<span class="quotelev1">&gt; help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23430.php">tmishima_at_[hidden]: "[OMPI users] default num_procs of round_robin_mapper with cpus-per-proc option"</a>
<li><strong>Previous message:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>In reply to:</strong> <a href="23427.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23435.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
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
