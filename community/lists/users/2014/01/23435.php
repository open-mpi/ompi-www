<?
$subject_val = "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 23 01:52:53 2014" -->
<!-- isoreceived="20140123065253" -->
<!-- sent="Thu, 23 Jan 2014 07:52:34 +0100 (CET)" -->
<!-- isosent="20140123065234" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323" -->
<!-- id="201401230652.s0N6qYGr027239_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323" -->
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
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-23 01:52:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23436.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Previous message:</strong> <a href="23434.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Maybe in reply to:</strong> <a href="23427.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23436.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Reply:</strong> <a href="23436.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Ralph,
<br>
<p>the same problems occur without rankfiles.
<br>
<p>tyr fd1026 102 which mpicc
<br>
/usr/local/openmpi-1.7.4_64_cc/bin/mpicc
<br>
<p>tyr fd1026 103 mpiexec --report-bindings -np 2 \
<br>
&nbsp;&nbsp;-host tyr,sunpc1 hostname
<br>
<p>tyr fd1026 104 /opt/solstudio12.3/bin/sparcv9/dbx \
<br>
&nbsp;&nbsp;/usr/local/openmpi-1.7.4_64_cc/bin/mpiexec 
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message
<br>
&nbsp;&nbsp;7.9' in your .dbxrc
<br>
Reading mpiexec
<br>
Reading ld.so.1
<br>
Reading libopen-rte.so.7.0.0
<br>
Reading libopen-pal.so.6.1.0
<br>
Reading libsendfile.so.1
<br>
Reading libpicl.so.1
<br>
Reading libkstat.so.1
<br>
Reading liblgrp.so.1
<br>
Reading libsocket.so.1
<br>
Reading libnsl.so.1
<br>
Reading librt.so.1
<br>
Reading libm.so.2
<br>
Reading libthread.so.1
<br>
Reading libc.so.1
<br>
Reading libdoor.so.1
<br>
Reading libaio.so.1
<br>
Reading libmd.so.1
<br>
(dbx) check -all
<br>
access checking - ON
<br>
memuse checking - ON
<br>
(dbx) run --report-bindings -np 2 -host tyr,sunpc1 hostname
<br>
Running: mpiexec --report-bindings -np 2 -host tyr,sunpc1 hostname 
<br>
(process id 26792)
<br>
Reading rtcapihook.so
<br>
Reading libdl.so.1
<br>
Reading rtcaudit.so
<br>
Reading libmapmalloc.so.1
<br>
Reading libgen.so.1
<br>
Reading libc_psr.so.1
<br>
Reading rtcboot.so
<br>
Reading librtc.so
<br>
Reading libmd_psr.so.1
<br>
RTC: Enabling Error Checking...
<br>
RTC: Using UltraSparc trap mechanism
<br>
RTC: See `help rtc showmap' and `help rtc limitations' for details.
<br>
RTC: Running program...
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 1 byte at address 0xffffffff7fffc85b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 459 bytes above the current stack pointer
<br>
Variable is 'cwd'
<br>
t_at_1 (l_at_1) stopped in opal_getcwd at line 65 in file &quot;opal_getcwd.c&quot;
<br>
&nbsp;&nbsp;&nbsp;65           if (0 != strcmp(pwd, cwd)) {
<br>
(dbx) quit
<br>
<p><p>tyr fd1026 105 ssh sunpc1
<br>
...
<br>
sunpc1 fd1026 102 mpiexec --report-bindings -np 2 \
<br>
&nbsp;&nbsp;-host tyr,sunpc1 hostname
<br>
<p>sunpc1 fd1026 103 /opt/solstudio12.3/bin/amd64/dbx \
<br>
&nbsp;&nbsp;/usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message
<br>
&nbsp;&nbsp;7.9' in your .dbxrc
<br>
Reading mpiexec
<br>
Reading ld.so.1
<br>
Reading libopen-rte.so.7.0.0
<br>
Reading libopen-pal.so.6.1.0
<br>
Reading libsendfile.so.1
<br>
Reading libpicl.so.1
<br>
Reading libkstat.so.1
<br>
Reading liblgrp.so.1
<br>
Reading libsocket.so.1
<br>
Reading libnsl.so.1
<br>
Reading librt.so.1
<br>
Reading libm.so.2
<br>
Reading libthread.so.1
<br>
Reading libc.so.1
<br>
Reading libdoor.so.1
<br>
Reading libaio.so.1
<br>
Reading libmd.so.1
<br>
(dbx) check -all
<br>
access checking - ON
<br>
memuse checking - ON
<br>
(dbx) run --report-bindings -np 2 -host tyr,sunpc1 hostname
<br>
Running: mpiexec --report-bindings -np 2 -host tyr,sunpc1 hostname 
<br>
(process id 18806)
<br>
Reading rtcapihook.so
<br>
Reading libdl.so.1
<br>
Reading rtcaudit.so
<br>
Reading libmapmalloc.so.1
<br>
Reading libgen.so.1
<br>
Reading rtcboot.so
<br>
Reading librtc.so
<br>
RTC: Enabling Error Checking...
<br>
RTC: Running program...
<br>
Reading disasm.so
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 1 byte at address 0x436d57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 15 bytes into a heap block of size 16 bytes at 0x436d48
<br>
This block was allocated from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] vasprintf() at 0xfffffd7fdc9b335a 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] asprintf() at 0xfffffd7fdc9b3452 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[3] opal_output_init() at line 184 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[4] do_open() at line 548 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[5] opal_output_open() at line 219 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[6] opal_malloc_init() at line 68 in &quot;malloc.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[7] opal_init_util() at line 250 in &quot;opal_init.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[8] orterun() at line 658 in &quot;orterun.c&quot;
<br>
<p>t_at_1 (l_at_1) stopped in do_open at line 638 in file &quot;output.c&quot;
<br>
&nbsp;&nbsp;638           info[i].ldi_prefix = strdup(lds-&gt;lds_prefix);
<br>
(dbx) run --report-bindings -np 2 -host sunpc0,sunpc1 hostname
<br>
Running: mpiexec --report-bindings -np 2 -host sunpc0,sunpc1 hostname 
<br>
(process id 18857)
<br>
RTC: Enabling Error Checking...
<br>
RTC: Running program...
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 1 byte at address 0x436d57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 15 bytes into a heap block of size 16 bytes at 0x436d48
<br>
This block was allocated from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] vasprintf() at 0xfffffd7fdc9b335a 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] asprintf() at 0xfffffd7fdc9b3452 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[3] opal_output_init() at line 184 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[4] do_open() at line 548 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[5] opal_output_open() at line 219 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[6] opal_malloc_init() at line 68 in &quot;malloc.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[7] opal_init_util() at line 250 in &quot;opal_init.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[8] orterun() at line 658 in &quot;orterun.c&quot;
<br>
<p>t_at_1 (l_at_1) stopped in do_open at line 638 in file &quot;output.c&quot;
<br>
&nbsp;&nbsp;638           info[i].ldi_prefix = strdup(lds-&gt;lds_prefix);
<br>
(dbx) run --report-bindings -np 2 -host linpc1,sunpc1 hostname
<br>
Running: mpiexec --report-bindings -np 2 -host linpc1,sunpc1 hostname 
<br>
(process id 18868)
<br>
RTC: Enabling Error Checking...
<br>
RTC: Running program...
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 1 byte at address 0x436d57
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 15 bytes into a heap block of size 16 bytes at 0x436d48
<br>
This block was allocated from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] vasprintf() at 0xfffffd7fdc9b335a 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] asprintf() at 0xfffffd7fdc9b3452 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[3] opal_output_init() at line 184 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[4] do_open() at line 548 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[5] opal_output_open() at line 219 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[6] opal_malloc_init() at line 68 in &quot;malloc.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[7] opal_init_util() at line 250 in &quot;opal_init.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[8] orterun() at line 658 in &quot;orterun.c&quot;
<br>
<p>t_at_1 (l_at_1) stopped in do_open at line 638 in file &quot;output.c&quot;
<br>
&nbsp;&nbsp;638           info[i].ldi_prefix = strdup(lds-&gt;lds_prefix);
<br>
(dbx) quit
<br>
sunpc1 fd1026 104 exit
<br>
logout
<br>
tyr fd1026 106 
<br>
<p><p>Do you need anything else?
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><span class="quotelev1">&gt; Hard to know how to address all that, Siegmar, but I'll give it
</span><br>
<span class="quotelev1">&gt; a shot. See below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2014, at 5:34 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; yesterday I installed openmpi-1.7.4rc2r30323 on our machines
</span><br>
<span class="quotelev2">&gt; &gt; (&quot;Solaris 10 x86_64&quot;, &quot;Solaris 10 Sparc&quot;, and &quot;openSUSE Linux
</span><br>
<span class="quotelev2">&gt; &gt; 12.1 x86_64&quot; with Sun C 5.12). My rankfile &quot;rf_linpc_sunpc_tyr&quot;
</span><br>
<span class="quotelev2">&gt; &gt; contains the following lines.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=linpc0 slot=0:0-1;1:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=linpc1 slot=0:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=tyr slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get no output, when I run the following command.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;dbx&quot; reports the following problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /opt/solstudio12.3/bin/sparcv9/dbx \
</span><br>
<span class="quotelev2">&gt; &gt;  /usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; For information about new features see `help changes'
</span><br>
<span class="quotelev2">&gt; &gt; To remove this message, put `dbxenv suppress_startup_message
</span><br>
<span class="quotelev2">&gt; &gt;  7.9' in your .dbxrc
</span><br>
<span class="quotelev2">&gt; &gt; Reading mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; Reading ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Reading libmd.so.1
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev2">&gt; &gt; Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname 
</span><br>
<span class="quotelev2">&gt; &gt; (process id 22337)
</span><br>
<span class="quotelev2">&gt; &gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Reading mca_dfs_test.so
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; execution completed, exit code is 1
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) check -all
</span><br>
<span class="quotelev2">&gt; &gt; access checking - ON
</span><br>
<span class="quotelev2">&gt; &gt; memuse checking - ON
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname
</span><br>
<span class="quotelev2">&gt; &gt; Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname 
</span><br>
<span class="quotelev2">&gt; &gt; (process id 22344)
</span><br>
<span class="quotelev2">&gt; &gt; Reading rtcapihook.so
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; RTC: Running program...
</span><br>
<span class="quotelev2">&gt; &gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev2">&gt; &gt; Attempting to read 1 byte at address 0xffffffff7fffbf8b
</span><br>
<span class="quotelev2">&gt; &gt;    which is 459 bytes above the current stack pointer
</span><br>
<span class="quotelev2">&gt; &gt; Variable is 'cwd'
</span><br>
<span class="quotelev2">&gt; &gt; t_at_1 (l_at_1) stopped in opal_getcwd at line 65 in file &quot;opal_getcwd.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;   65           if (0 != strcmp(pwd, cwd)) {
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) quit
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This looks like a bogus issue to me. Are you able to run something
</span><br>
<span class="quotelev1">&gt; *without* a rankfile? In other words, is it rankfile operation that
</span><br>
<span class="quotelev1">&gt; is causing a problem, or are you unable to run anything on Sparc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Rankfiles work &quot;fine&quot; on x86_64 architectures. Contents of my rankfile.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rank 0=linpc1 slot=0:0-1;1:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 1=sunpc1 slot=0:0-1
</span><br>
<span class="quotelev2">&gt; &gt; rank 2=sunpc1 slot=1:0
</span><br>
<span class="quotelev2">&gt; &gt; rank 3=sunpc1 slot=1:1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc hostname
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:13489] MCW rank 1 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;  socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:13489] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:13489] MCW rank 3 bound to socket 1[core 3[hwt 0]]: [./.][./B]
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:29997] MCW rank 0 is not bound (or bound to all available
</span><br>
<span class="quotelev2">&gt; &gt;  processors)
</span><br>
<span class="quotelev2">&gt; &gt; linpc1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately &quot;dbx&quot; reports nevertheless a problem.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /opt/solstudio12.3/bin/amd64/dbx \
</span><br>
<span class="quotelev2">&gt; &gt;  /usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; For information about new features see `help changes'
</span><br>
<span class="quotelev2">&gt; &gt; To remove this message, put `dbxenv suppress_startup_message 7.9'
</span><br>
<span class="quotelev2">&gt; &gt;  in your .dbxrc
</span><br>
<span class="quotelev2">&gt; &gt; Reading mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; Reading ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Reading libmd.so.1
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc hostname
</span><br>
<span class="quotelev2">&gt; &gt; Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc hostname 
</span><br>
<span class="quotelev2">&gt; &gt; (process id 18330)
</span><br>
<span class="quotelev2">&gt; &gt; Reading mca_shmem_mmap.so
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Reading mca_dfs_test.so
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:18330] MCW rank 1 bound to socket 0[core 0[hwt 0]],
</span><br>
<span class="quotelev2">&gt; &gt;  socket 0[core 1[hwt 0]]: [B/B][./.]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:18330] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
</span><br>
<span class="quotelev2">&gt; &gt; [sunpc1:18330] MCW rank 3 bound to socket 1[core 3[hwt 0]]: [./.][./B]
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; sunpc1
</span><br>
<span class="quotelev2">&gt; &gt; [linpc1:30148] MCW rank 0 is not bound (or bound to all available
</span><br>
<span class="quotelev2">&gt; &gt;  processors)
</span><br>
<span class="quotelev2">&gt; &gt; linpc1
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; execution completed, exit code is 0
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) check -all
</span><br>
<span class="quotelev2">&gt; &gt; access checking - ON
</span><br>
<span class="quotelev2">&gt; &gt; memuse checking - ON
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc hostname
</span><br>
<span class="quotelev2">&gt; &gt; Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc hostname 
</span><br>
<span class="quotelev2">&gt; &gt; (process id 18340)
</span><br>
<span class="quotelev2">&gt; &gt; Reading rtcapihook.so
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; RTC: Running program...
</span><br>
<span class="quotelev2">&gt; &gt; Reading disasm.so
</span><br>
<span class="quotelev2">&gt; &gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev2">&gt; &gt; Attempting to read 1 byte at address 0x436d57
</span><br>
<span class="quotelev2">&gt; &gt;    which is 15 bytes into a heap block of size 16 bytes at 0x436d48
</span><br>
<span class="quotelev2">&gt; &gt; This block was allocated from:
</span><br>
<span class="quotelev2">&gt; &gt;        [1] vasprintf() at 0xfffffd7fdc9b335a 
</span><br>
<span class="quotelev2">&gt; &gt;        [2] asprintf() at 0xfffffd7fdc9b3452 
</span><br>
<span class="quotelev2">&gt; &gt;        [3] opal_output_init() at line 184 in &quot;output.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [4] do_open() at line 548 in &quot;output.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [5] opal_output_open() at line 219 in &quot;output.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [6] opal_malloc_init() at line 68 in &quot;malloc.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [7] opal_init_util() at line 250 in &quot;opal_init.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [8] orterun() at line 658 in &quot;orterun.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; t_at_1 (l_at_1) stopped in do_open at line 638 in file &quot;output.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  638           info[i].ldi_prefix = strdup(lds-&gt;lds_prefix);
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, I think dbx is just getting lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I can also manually bind threads on our Sun M4000 server (two quad-core
</span><br>
<span class="quotelev2">&gt; &gt; Sparc VII processors with two hwthreads each).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec --report-bindings -np 4 --bind-to hwthread hostname
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:09531] MCW rank 1 bound to 
</span><br>
<span class="quotelev2">&gt; &gt;  socket 0[core 1[hwt 0]]: [../B./../..][../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:09531] MCW rank 2 bound to 
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:09531] MCW rank 3 bound to 
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 5[hwt 0]]: [../../../..][../B./../..]
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:09531] MCW rank 0 bound to 
</span><br>
<span class="quotelev2">&gt; &gt;  socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; It doesn't work with cores. I know that it wasn't possible last
</span><br>
<span class="quotelev2">&gt; &gt; summer and it seems that it is still not possible now.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec --report-bindings -np 4 --bind-to core hostname
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Open MPI tried to bind a new process, but something went wrong.  The
</span><br>
<span class="quotelev2">&gt; &gt; process was killed without launching the target application.  Your job
</span><br>
<span class="quotelev2">&gt; &gt; will now abort.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;  Local host:        rs0
</span><br>
<span class="quotelev2">&gt; &gt;  Application name:  /usr/local/bin/hostname
</span><br>
<span class="quotelev2">&gt; &gt;  Error message:     hwloc indicates cpu binding cannot be enforced
</span><br>
<span class="quotelev2">&gt; &gt;  Location:          
</span><br>
<span class="quotelev2">&gt; &gt; ../../../../../openmpi-1.9a1r30290/orte/mca/odls/default/odls_default_module.c:500
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 4 total processes failed to start
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible to specify hwthreads in a rankfile, so that I can
</span><br>
<span class="quotelev2">&gt; &gt; use a rankfile for these machines?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Possible - yes. Will it happen in immediate future - no, I'm afraid
</span><br>
<span class="quotelev1">&gt; I'm swamped right now. However, I'll make a note of it for the future
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the expected output, if I use two M4000 servers, although the
</span><br>
<span class="quotelev2">&gt; &gt; above mentioned error still exists.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; /opt/solstudio12.3/bin/sparcv9/dbx \
</span><br>
<span class="quotelev2">&gt; &gt;  /usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; For information about new features see `help changes'
</span><br>
<span class="quotelev2">&gt; &gt; To remove this message, put `dbxenv suppress_startup_message 7.9'
</span><br>
<span class="quotelev2">&gt; &gt;  in your .dbxrc
</span><br>
<span class="quotelev2">&gt; &gt; Reading mpiexec
</span><br>
<span class="quotelev2">&gt; &gt; Reading ld.so.1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Reading libmd.so.1
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) run --report-bindings --host rs0,rs1 -np 4 \
</span><br>
<span class="quotelev2">&gt; &gt;  --bind-to hwthread hostname
</span><br>
<span class="quotelev2">&gt; &gt; Running: mpiexec --report-bindings --host rs0,rs1 -np 4
</span><br>
<span class="quotelev2">&gt; &gt;  --bind-to hwthread hostname 
</span><br>
<span class="quotelev2">&gt; &gt; (process id 9599)
</span><br>
<span class="quotelev2">&gt; &gt; Reading libc_psr.so.1
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; Reading mca_dfs_test.so
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:09599] MCW rank 1 bound to
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
</span><br>
<span class="quotelev2">&gt; &gt; [rs0.informatik.hs-fulda.de:09599] MCW rank 0 bound to
</span><br>
<span class="quotelev2">&gt; &gt;  socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; rs0.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; [rs1.informatik.hs-fulda.de:13398] MCW rank 2 bound to
</span><br>
<span class="quotelev2">&gt; &gt;  socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
</span><br>
<span class="quotelev2">&gt; &gt; [rs1.informatik.hs-fulda.de:13398] MCW rank 3 bound to
</span><br>
<span class="quotelev2">&gt; &gt;  socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
</span><br>
<span class="quotelev2">&gt; &gt; rs1.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; execution completed, exit code is 0
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) check -all
</span><br>
<span class="quotelev2">&gt; &gt; access checking - ON
</span><br>
<span class="quotelev2">&gt; &gt; memuse checking - ON
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) run --report-bindings --host rs0,rs1 -np 4 \
</span><br>
<span class="quotelev2">&gt; &gt;  --bind-to hwthread hostname
</span><br>
<span class="quotelev2">&gt; &gt; Running: mpiexec --report-bindings --host rs0,rs1 -np 4
</span><br>
<span class="quotelev2">&gt; &gt;  --bind-to hwthread hostname 
</span><br>
<span class="quotelev2">&gt; &gt; (process id 9607)
</span><br>
<span class="quotelev2">&gt; &gt; Reading rtcapihook.so
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; RTC: Running program...
</span><br>
<span class="quotelev2">&gt; &gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev2">&gt; &gt; Attempting to read 1 byte at address 0xffffffff7fffc80b
</span><br>
<span class="quotelev2">&gt; &gt;    which is 459 bytes above the current stack pointer
</span><br>
<span class="quotelev2">&gt; &gt; Variable is 'cwd'
</span><br>
<span class="quotelev2">&gt; &gt; dbx: warning: can't find file
</span><br>
<span class="quotelev2">&gt; &gt;  &quot;.../openmpi-1.7.4rc2r30323-SunOS.sparc.64_cc/opal/util/../../../
</span><br>
<span class="quotelev2">&gt; &gt;  openmpi-1.7.4rc2r30323/opal/util/opal_getcwd.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt; dbx: warning: see `help finding-files'
</span><br>
<span class="quotelev2">&gt; &gt; t_at_1 (l_at_1) stopped in opal_getcwd at line 65 in file &quot;opal_getcwd.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Our M4000 server has no access to the source code, so that it couldn't
</span><br>
<span class="quotelev2">&gt; &gt; find the file. Nevertheless it is the same error message as above. Is it
</span><br>
<span class="quotelev2">&gt; &gt; possible that someone soves this problem? Thank you very much for any
</span><br>
<span class="quotelev2">&gt; &gt; help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23436.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Previous message:</strong> <a href="23434.php">tmishima_at_[hidden]: "Re: [OMPI users] default num_procs of round_robin_mapper	with	cpus-per-proc option"</a>
<li><strong>Maybe in reply to:</strong> <a href="23427.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23436.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Reply:</strong> <a href="23436.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
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
