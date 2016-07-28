<?
$subject_val = "[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 08:35:21 2014" -->
<!-- isoreceived="20140122133521" -->
<!-- sent="Wed, 22 Jan 2014 14:34:45 +0100 (CET)" -->
<!-- isosent="20140122133445" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323" -->
<!-- id="201401221334.s0MDYjOo022408_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 08:34:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23429.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Reply:</strong> <a href="23429.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Maybe reply:</strong> <a href="23435.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I installed openmpi-1.7.4rc2r30323 on our machines
<br>
(&quot;Solaris 10 x86_64&quot;, &quot;Solaris 10 Sparc&quot;, and &quot;openSUSE Linux
<br>
12.1 x86_64&quot; with Sun C 5.12). My rankfile &quot;rf_linpc_sunpc_tyr&quot;
<br>
contains the following lines.
<br>
<p>rank 0=linpc0 slot=0:0-1;1:0-1
<br>
rank 1=linpc1 slot=0:0-1
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=tyr slot=1:0
<br>
<p>I get no output, when I run the following command.
<br>
<p>mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname
<br>
<p>&quot;dbx&quot; reports the following problem.
<br>
<p>/opt/solstudio12.3/bin/sparcv9/dbx \
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
...
<br>
Reading libmd.so.1
<br>
(dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname
<br>
Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname 
<br>
(process id 22337)
<br>
Reading libc_psr.so.1
<br>
...
<br>
Reading mca_dfs_test.so
<br>
<p>execution completed, exit code is 1
<br>
(dbx) check -all
<br>
access checking - ON
<br>
memuse checking - ON
<br>
(dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname
<br>
Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc_tyr hostname 
<br>
(process id 22344)
<br>
Reading rtcapihook.so
<br>
...
<br>
RTC: Running program...
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 1 byte at address 0xffffffff7fffbf8b
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
<p><p><p><p>Rankfiles work &quot;fine&quot; on x86_64 architectures. Contents of my rankfile.
<br>
<p>rank 0=linpc1 slot=0:0-1;1:0-1
<br>
rank 1=sunpc1 slot=0:0-1
<br>
rank 2=sunpc1 slot=1:0
<br>
rank 3=sunpc1 slot=1:1
<br>
<p><p>mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc hostname
<br>
[sunpc1:13489] MCW rank 1 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
[sunpc1:13489] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
[sunpc1:13489] MCW rank 3 bound to socket 1[core 3[hwt 0]]: [./.][./B]
<br>
sunpc1
<br>
sunpc1
<br>
sunpc1
<br>
[linpc1:29997] MCW rank 0 is not bound (or bound to all available
<br>
&nbsp;&nbsp;processors)
<br>
linpc1
<br>
<p><p>Unfortunately &quot;dbx&quot; reports nevertheless a problem.
<br>
<p>/opt/solstudio12.3/bin/amd64/dbx \
<br>
&nbsp;&nbsp;/usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.9'
<br>
&nbsp;&nbsp;in your .dbxrc
<br>
Reading mpiexec
<br>
Reading ld.so.1
<br>
...
<br>
Reading libmd.so.1
<br>
(dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc hostname
<br>
Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc hostname 
<br>
(process id 18330)
<br>
Reading mca_shmem_mmap.so
<br>
...
<br>
Reading mca_dfs_test.so
<br>
[sunpc1:18330] MCW rank 1 bound to socket 0[core 0[hwt 0]],
<br>
&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [B/B][./.]
<br>
[sunpc1:18330] MCW rank 2 bound to socket 1[core 2[hwt 0]]: [./.][B/.]
<br>
[sunpc1:18330] MCW rank 3 bound to socket 1[core 3[hwt 0]]: [./.][./B]
<br>
sunpc1
<br>
sunpc1
<br>
sunpc1
<br>
[linpc1:30148] MCW rank 0 is not bound (or bound to all available
<br>
&nbsp;&nbsp;processors)
<br>
linpc1
<br>
<p>execution completed, exit code is 0
<br>
(dbx) check -all
<br>
access checking - ON
<br>
memuse checking - ON
<br>
(dbx) run -report-bindings -np 4 -rf rf_linpc_sunpc hostname
<br>
Running: mpiexec -report-bindings -np 4 -rf rf_linpc_sunpc hostname 
<br>
(process id 18340)
<br>
Reading rtcapihook.so
<br>
...
<br>
<p>RTC: Running program...
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
(dbx) 
<br>
<p><p>&nbsp;
<br>
<p><p>I can also manually bind threads on our Sun M4000 server (two quad-core
<br>
Sparc VII processors with two hwthreads each).
<br>
<p>mpiexec --report-bindings -np 4 --bind-to hwthread hostname
<br>
[rs0.informatik.hs-fulda.de:09531] MCW rank 1 bound to 
<br>
&nbsp;&nbsp;socket 0[core 1[hwt 0]]: [../B./../..][../../../..]
<br>
[rs0.informatik.hs-fulda.de:09531] MCW rank 2 bound to 
<br>
&nbsp;&nbsp;socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
<br>
[rs0.informatik.hs-fulda.de:09531] MCW rank 3 bound to 
<br>
&nbsp;&nbsp;socket 1[core 5[hwt 0]]: [../../../..][../B./../..]
<br>
[rs0.informatik.hs-fulda.de:09531] MCW rank 0 bound to 
<br>
&nbsp;&nbsp;socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
<br>
rs0.informatik.hs-fulda.de
<br>
rs0.informatik.hs-fulda.de
<br>
rs0.informatik.hs-fulda.de
<br>
rs0.informatik.hs-fulda.de
<br>
<p><p>It doesn't work with cores. I know that it wasn't possible last
<br>
summer and it seems that it is still not possible now.
<br>
<p>mpiexec --report-bindings -np 4 --bind-to core hostname
<br>
-----------------------------------------------------------------------
<br>
Open MPI tried to bind a new process, but something went wrong.  The
<br>
process was killed without launching the target application.  Your job
<br>
will now abort.
<br>
<p>&nbsp;&nbsp;Local host:        rs0
<br>
&nbsp;&nbsp;Application name:  /usr/local/bin/hostname
<br>
&nbsp;&nbsp;Error message:     hwloc indicates cpu binding cannot be enforced
<br>
&nbsp;&nbsp;Location:          
<br>
../../../../../openmpi-1.9a1r30290/orte/mca/odls/default/odls_default_module.c:500
<br>
-----------------------------------------------------------------------
<br>
4 total processes failed to start
<br>
<p><p><p>Is it possible to specify hwthreads in a rankfile, so that I can
<br>
use a rankfile for these machines?
<br>
<p>I get the expected output, if I use two M4000 servers, although the
<br>
above mentioned error still exists.
<br>
<p><p>/opt/solstudio12.3/bin/sparcv9/dbx \
<br>
&nbsp;&nbsp;/usr/local/openmpi-1.7.4_64_cc/bin/mpiexec
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.9'
<br>
&nbsp;&nbsp;in your .dbxrc
<br>
Reading mpiexec
<br>
Reading ld.so.1
<br>
...
<br>
Reading libmd.so.1
<br>
(dbx) run --report-bindings --host rs0,rs1 -np 4 \
<br>
&nbsp;&nbsp;--bind-to hwthread hostname
<br>
Running: mpiexec --report-bindings --host rs0,rs1 -np 4
<br>
&nbsp;&nbsp;--bind-to hwthread hostname 
<br>
(process id 9599)
<br>
Reading libc_psr.so.1
<br>
...
<br>
Reading mca_dfs_test.so
<br>
[rs0.informatik.hs-fulda.de:09599] MCW rank 1 bound to
<br>
&nbsp;&nbsp;socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
<br>
[rs0.informatik.hs-fulda.de:09599] MCW rank 0 bound to
<br>
&nbsp;&nbsp;socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
<br>
rs0.informatik.hs-fulda.de
<br>
rs0.informatik.hs-fulda.de
<br>
rs1.informatik.hs-fulda.de
<br>
[rs1.informatik.hs-fulda.de:13398] MCW rank 2 bound to
<br>
&nbsp;&nbsp;socket 0[core 0[hwt 0]]: [B./../../..][../../../..]
<br>
[rs1.informatik.hs-fulda.de:13398] MCW rank 3 bound to
<br>
&nbsp;&nbsp;socket 1[core 4[hwt 0]]: [../../../..][B./../../..]
<br>
rs1.informatik.hs-fulda.de
<br>
<p>execution completed, exit code is 0
<br>
(dbx) check -all
<br>
access checking - ON
<br>
memuse checking - ON
<br>
(dbx) run --report-bindings --host rs0,rs1 -np 4 \
<br>
&nbsp;&nbsp;--bind-to hwthread hostname
<br>
Running: mpiexec --report-bindings --host rs0,rs1 -np 4
<br>
&nbsp;&nbsp;--bind-to hwthread hostname 
<br>
(process id 9607)
<br>
Reading rtcapihook.so
<br>
...
<br>
RTC: Running program...
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 1 byte at address 0xffffffff7fffc80b
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 459 bytes above the current stack pointer
<br>
Variable is 'cwd'
<br>
dbx: warning: can't find file
<br>
&nbsp;&nbsp;&quot;.../openmpi-1.7.4rc2r30323-SunOS.sparc.64_cc/opal/util/../../../
<br>
&nbsp;&nbsp;openmpi-1.7.4rc2r30323/opal/util/opal_getcwd.c&quot;
<br>
dbx: warning: see `help finding-files'
<br>
t_at_1 (l_at_1) stopped in opal_getcwd at line 65 in file &quot;opal_getcwd.c&quot;
<br>
(dbx) 
<br>
<p><p>Our M4000 server has no access to the source code, so that it couldn't
<br>
find the file. Nevertheless it is the same error message as above. Is it
<br>
possible that someone soves this problem? Thank you very much for any
<br>
help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23428.php">Fischer, Greg A.: "Re: [OMPI users] simple test problem hangs on	mpi_finalize	and	consumes all system resources"</a>
<li><strong>Previous message:</strong> <a href="23426.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple test problem hangs on mpi_finalize	and	consumes all system resources"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23429.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Reply:</strong> <a href="23429.php">Ralph Castain: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
<li><strong>Maybe reply:</strong> <a href="23435.php">Siegmar Gross: "Re: [OMPI users] problem with rankfile in openmpi-1.7.4rc2r30323"</a>
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
