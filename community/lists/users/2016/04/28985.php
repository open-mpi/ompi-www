<?
$subject_val = "Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 17:35:43 2016" -->
<!-- isoreceived="20160420213543" -->
<!-- sent="Wed, 20 Apr 2016 21:35:40 +0000" -->
<!-- isosent="20160420213540" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490" -->
<!-- id="548E4047-19C1-415E-AA78-A0DF19A4F624_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4c1a9b9c-015b-4819-dd43-016b1445b257_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-20 17:35:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28984.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>In reply to:</strong> <a href="28984.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Siegmar; I posted this in <a href="https://github.com/open-mpi/ompi/issues/1569">https://github.com/open-mpi/ompi/issues/1569</a>.
<br>
<p><span class="quotelev1">&gt; On Apr 20, 2016, at 1:14 PM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have built openmpi-v1.10.2-142-g5cd9490 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux
</span><br>
<span class="quotelev1">&gt; 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. Unfortunately I get
</span><br>
<span class="quotelev1">&gt; runtime errors for some programs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sun C 5.13:
</span><br>
<span class="quotelev1">&gt; ===========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr spawn 116 mpiexec -np 1 --host tyr,sunpc1,linpc1,linpc1,ruester spawn_master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;  I create 4 slave processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (proc_pointer))-&gt;obj_magic_id, file ../../openmpi-v1.10.2-142-g5cd9490/ompi/group/group_init.c, line 215, function ompi_group_increment_proc_count
</span><br>
<span class="quotelev1">&gt; [ruester:10077] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [ruester:10077] Signal: Abort (6)
</span><br>
<span class="quotelev1">&gt; [ruester:10077] Signal code:  (-1)
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:opal_backtrace_print+0x1c
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libopen-pal.so.13.0.2:0x1b10f0
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8c28
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc79c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc9a8
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 2091943080 (?)]
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:abort+0xd0
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:_assert_c99+0x78
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_group_increment_proc_count+0x10c
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0xe758
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/openmpi/mca_dpm_orte.so:0x113d4
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:ompi_mpi_init+0x188c
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_cc/lib64/libmpi.so.12.0.3:MPI_Init+0x26c
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/spawn_slave:main+0x18
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/spawn_slave:_start+0x108
</span><br>
<span class="quotelev1">&gt; [ruester:10077] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 3 with PID 0 on node ruester exited on signal 6 (Abort).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GCC-5.1.0:
</span><br>
<span class="quotelev1">&gt; ==========
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr spawn 129 mpiexec -np 1 --host ruester,ruester,sunpc1,linpc1,linpc1 spawn_master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on ruester.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;  I create 4 slave processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ruester.informatik.hs-fulda.de:09823] [[60617,1],0] ORTE_ERROR_LOG: Unreachable in file ../../../../../openmpi-v1.10.2-142-g5cd9490/ompi/mca/dpm/orte/dpm_orte.c at line 523
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.  This means that no Open MPI device has indicated
</span><br>
<span class="quotelev1">&gt; that it can be used to communicate between these processes.  This is
</span><br>
<span class="quotelev1">&gt; an error; Open MPI requires that all MPI processes be able to reach
</span><br>
<span class="quotelev1">&gt; each other.  This error can sometimes be the result of forgetting to
</span><br>
<span class="quotelev1">&gt; specify the &quot;self&quot; BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process 1 ([[60617,1],0]) is on host: ruester
</span><br>
<span class="quotelev1">&gt;  Process 2 ([[0,0],0]) is on host: unknown!
</span><br>
<span class="quotelev1">&gt;  BTLs attempted: tcp self
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your MPI job is now going to abort; sorry.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [ruester:9823] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; [ruester:9823] *** reported by process [3972595713,0]
</span><br>
<span class="quotelev1">&gt; [ruester:9823] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [ruester:9823] *** MPI_ERR_INTERN: internal error
</span><br>
<span class="quotelev1">&gt; [ruester:9823] *** MPI_ERRORS_ARE_FATAL (processes in this communicator will now abort,
</span><br>
<span class="quotelev1">&gt; [ruester:9823] ***    and potentially your MPI job)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Process name: [[60617,1],0]
</span><br>
<span class="quotelev1">&gt;  Exit code:    17
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr spawn 130
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr spawn 133 mpiexec -np 1 --host tyr,sunpc1,linpc1,ruester spawn_multiple_master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Parent process 0 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;  I create 3 slave processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Assertion failed: OPAL_OBJ_MAGIC_ID == ((opal_object_t *) (proc_pointer))-&gt;obj_magic_id, file ../../openmpi-v1.10.2-142-g5cd9490/ompi/group/group_init.c, line 215, function ompi_group_increment_proc_count
</span><br>
<span class="quotelev1">&gt; [ruester:09954] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [ruester:09954] Signal: Abort (6)
</span><br>
<span class="quotelev1">&gt; [ruester:09954] Signal code:  (-1)
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libopen-pal.so.13.0.2:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libopen-pal.so.13.0.2:0xc2c0c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8c28
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc79c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc9a8
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:__lwp_kill+0x8 [ Signal 6 (ABRT)]
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:abort+0xd0
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:_assert_c99+0x78
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12.0.3:ompi_group_increment_proc_count+0xf0
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/openmpi/mca_dpm_orte.so:0x6638
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/openmpi/mca_dpm_orte.so:0x948c
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12.0.3:ompi_mpi_init+0x1978
</span><br>
<span class="quotelev1">&gt; /usr/local/openmpi-1.10.3_64_gcc/lib64/libmpi.so.12.0.3:MPI_Init+0x2a8
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/spawn_slave:main+0x10
</span><br>
<span class="quotelev1">&gt; /home/fd1026/SunOS/sparc/bin/spawn_slave:_start+0x7c
</span><br>
<span class="quotelev1">&gt; [ruester:09954] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that process rank 2 with PID 0 on node ruester exited on signal 6 (Abort).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; tyr spawn 134
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody can fix the problems. Thank you very
</span><br>
<span class="quotelev1">&gt; much for any help in advance.
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
<span class="quotelev1">&gt; &lt;spawn_master.c&gt;&lt;spawn_multiple_master.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28984.php">http://www.open-mpi.org/community/lists/users/2016/04/28984.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28986.php">Ralph Castain: "Re: [OMPI users] runtime errors for openmpi-v2.x-dev-1280-gc110ae8"</a>
<li><strong>Previous message:</strong> <a href="28984.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
<li><strong>In reply to:</strong> <a href="28984.php">Siegmar Gross: "[OMPI users] runtime errors for openmpi-v1.10.2-142-g5cd9490"</a>
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
