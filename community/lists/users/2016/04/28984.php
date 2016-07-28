<?
$subject_val = "[OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 13:14:51 2016" -->
<!-- isoreceived="20160420171451" -->
<!-- sent="Wed, 20 Apr 2016 19:14:41 +0200" -->
<!-- isosent="20160420171441" -->
<!-- name="Siegmar Gross" -->
<!-- email="siegmar.gross_at_[hidden]" -->
<!-- subject="[OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490" -->
<!-- id="4c1a9b9c-015b-4819-dd43-016b1445b257_at_informatik.hs-fulda.de" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490<br>
<strong>From:</strong> Siegmar Gross (<em>siegmar.gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 13:14:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28985.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>Previous message:</strong> <a href="28983.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28985.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>Reply:</strong> <a href="28985.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have built openmpi-v1.10.2-142-g5cd9490 on my machines
<br>
(Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
<br>
12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. Unfortunately I get
<br>
runtime errors for some programs.
<br>
<p><p>Sun C 5.13:
<br>
===========
<br>
<p>tyr spawn 116 mpiexec -np 1 --host tyr,sunpc1,linpc1,linpc1,ruester spawn_master
<br>
<p>Parent process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) 
<br>
(proc_pointer))-&gt;obj_magic_id, file 
<br>
../../openmpi-v1.10.2-142-g5cd9490/ompi/group/group_init.c, line 215, function 
<br>
ompi_group_increment_proc_count
<br>
[ruester:10077] *** Process received signal ***
<br>
[ruester:10077] Signal: Abort (6)
<br>
[ruester:10077] Signal code:  (-1)
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:opal_backtrace_print+0x1c
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:0x1b10f0
<br>
/lib/sparcv9/libc.so.1:0xd8c28
<br>
/lib/sparcv9/libc.so.1:0xcc79c
<br>
/lib/sparcv9/libc.so.1:0xcc9a8
<br>
/lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 2091943080 (?)]
<br>
/lib/sparcv9/libc.so.1:abort+0xd0
<br>
/lib/sparcv9/libc.so.1:_assert_c99+0x78
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_group_increment_proc_count+0x10c
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0xe758
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0x113d4
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_mpi_init+0x188c
<br>
/usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:MPI_Init+0x26c
<br>
/home/fd1026/SunOS/sparc/bin/spawn_slave:main+0x18
<br>
/home/fd1026/SunOS/sparc/bin/spawn_slave:_start+0x108
<br>
[ruester:10077] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 3 with PID 0 on node ruester exited on 
<br>
signal 6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
<p><p><p><p><p>GCC-5.1.0:
<br>
==========
<br>
<p>tyr spawn 129 mpiexec -np 1 --host ruester,ruester,sunpc1,linpc1,linpc1 
<br>
spawn_master
<br>
<p>Parent process 0 running on ruester.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 4 slave processes
<br>
<p>[ruester.informatik.hs-fulda.de:09823] [[60617,1],0] ORTE_ERROR_LOG: 
<br>
Unreachable in file 
<br>
../../../../../openmpi-v1.10.2-142-g5cd9490/ompi/mca/dpm/orte/dpm_orte.c at 
<br>
line 523
<br>
--------------------------------------------------------------------------
<br>
At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.  This means that no Open MPI device has indicated
<br>
that it can be used to communicate between these processes.  This is
<br>
an error; Open MPI requires that all MPI processes be able to reach
<br>
each other.  This error can sometimes be the result of forgetting to
<br>
specify the &quot;self&quot; BTL.
<br>
<p>&nbsp;&nbsp;&nbsp;Process 1 ([[60617,1],0]) is on host: ruester
<br>
&nbsp;&nbsp;&nbsp;Process 2 ([[0,0],0]) is on host: unknown!
<br>
&nbsp;&nbsp;&nbsp;BTLs attempted: tcp self
<br>
<p>Your MPI job is now going to abort; sorry.
<br>
--------------------------------------------------------------------------
<br>
[ruester:9823] *** An error occurred in MPI_Comm_spawn
<br>
[ruester:9823] *** reported by process [3972595713,0]
<br>
[ruester:9823] *** on communicator MPI_COMM_WORLD
<br>
[ruester:9823] *** MPI_ERR_INTERN: internal error
<br>
[ruester:9823] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will 
<br>
now abort,
<br>
[ruester:9823] ***    and potentially your MPI job)
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus 
<br>
causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;&nbsp;Process name: [[60617,1],0]
<br>
&nbsp;&nbsp;&nbsp;Exit code:    17
<br>
--------------------------------------------------------------------------
<br>
tyr spawn 130
<br>
<p><p>tyr spawn 133 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester spawn_multiple_master
<br>
<p>Parent process 0 running on tyr.informatik.hs-fulda.de
<br>
&nbsp;&nbsp;&nbsp;I create 3 slave processes.
<br>
<p>Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) 
<br>
(proc_pointer))-&gt;obj_magic_id, file 
<br>
../../openmpi-v1.10.2-142-g5cd9490/ompi/group/group_init.c, line 215, function 
<br>
ompi_group_increment_proc_count
<br>
[ruester:09954] *** Process received signal ***
<br>
[ruester:09954] Signal: Abort (6)
<br>
[ruester:09954] Signal code:  (-1)
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libopen-pal.so.13.0.2:opal_backtrace_print+0x2c
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libopen-pal.so.13.0.2:0xc2c0c
<br>
/lib/sparcv9/libc.so.1:0xd8c28
<br>
/lib/sparcv9/libc.so.1:0xcc79c
<br>
/lib/sparcv9/libc.so.1:0xcc9a8
<br>
/lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 6 (ABRT)]
<br>
/lib/sparcv9/libc.so.1:abort+0xd0
<br>
/lib/sparcv9/libc.so.1:_assert_c99+0x78
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12.0.3:ompi_group_increment_proc_count+0xf0
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/openmpi/mca_dpm_orte.so:0x6638
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/openmpi/mca_dpm_orte.so:0x948c
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12.0.3:ompi_mpi_init+0x1978
<br>
/usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12.0.3:MPI_Init+0x2a8
<br>
/home/fd1026/SunOS/sparc/bin/spawn_slave:main+0x10
<br>
/home/fd1026/SunOS/sparc/bin/spawn_slave:_start+0x7c
<br>
[ruester:09954] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 2 with PID 0 on node ruester exited on 
<br>
signal 6 (Abort).
<br>
--------------------------------------------------------------------------
<br>
tyr spawn 134
<br>
<p><p><p>I would be grateful if somebody can fix the problems. Thank you very
<br>
much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>

<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28984/spawn_master.c">spawn_master.c</a>
</ul>
<!-- attachment="spawn_master.c" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28984/spawn_multiple_master.c">spawn_multiple_master.c</a>
</ul>
<!-- attachment="spawn_multiple_master.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28985.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>Previous message:</strong> <a href="28983.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28985.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>Reply:</strong> <a href="28985.php">Jeff Squyres (jsquyres): "Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
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
