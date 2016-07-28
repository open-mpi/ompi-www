<?
$subject_val = "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  3 15:31:55 2010" -->
<!-- isoreceived="20100303203155" -->
<!-- sent="Wed, 3 Mar 2010 15:31:49 -0500" -->
<!-- isosent="20100303203149" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)" -->
<!-- id="0F78B759-D2AD-4329-8AA4-35512F26A077_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="9108753b1003020617g5b761df9n54a015e9da8c09b3_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-03 15:31:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12228.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Previous message:</strong> <a href="12226.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12228.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Reply:</strong> <a href="12228.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2010, at 9:17 AM, Fernando Lemos wrote:
<br>
<p><span class="quotelev1">&gt; On Sun, Feb 28, 2010 at 11:11 PM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to come up with a fault tolerant OpenMPI setup for research
</span><br>
<span class="quotelev2">&gt;&gt; purposes. I'm doing some tests now, but I'm stuck with a segfault when
</span><br>
<span class="quotelev2">&gt;&gt; I try to restart my test program from a checkpoint.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My test program is the &quot;ring&quot; program, where messages are sent to the
</span><br>
<span class="quotelev2">&gt;&gt; next node in the ring N times. It's pretty simple, I can supply the
</span><br>
<span class="quotelev2">&gt;&gt; source code if needed. I'm running it like this:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # mpirun -np 4 -am ft-enable-cr ring
</span><br>
<span class="quotelev2">&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 1 sending 703 to 2
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 3 received 704
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 3 sending 704 to 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 3 received 703
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Process 3 sending 703 to 0
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 0 with PID 18358 on node debian1
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 4 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That's the output when I ompi-checkpoint the mpirun PID from another terminal.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The checkpoint is taken just fine in maybe 1.5 seconds. I can see the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint directory has been created in $HOME.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is what I get when I try to run ompi-restart
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ps axroot_at_debian1:~# ps ax | grep mpirun
</span><br>
<span class="quotelev2">&gt;&gt; 18357 pts/0    R+     0:01 mpirun -np 4 -am ft-enable-cr ring
</span><br>
<span class="quotelev2">&gt;&gt; 18378 pts/5    S+     0:00 grep mpirun
</span><br>
<span class="quotelev2">&gt;&gt; root_at_debian1:~# ompi-checkpoint 18357
</span><br>
<span class="quotelev2">&gt;&gt; Snapshot Ref.:   0 ompi_global_snapshot_18357.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; root_at_debian1:~# ompi-checkpoint --term 18357
</span><br>
<span class="quotelev2">&gt;&gt; Snapshot Ref.:   1 ompi_global_snapshot_18357.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; root_at_debian1:~# ompi-restart ompi_global_snapshot_18357.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev2">&gt;&gt;       checkpoint file (opal_snapshot_2.ckpt). Returned -1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] Failing at address: 0x725f725f
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] [ 0] [0xb775f40c]
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] [ 1]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/libopen-pal.so.0(opal_argv_free+0x33) [0xb771ea63]
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] [ 2]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/libopen-pal.so.0(opal_event_fini+0x30) [0xb77150a0]
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] [ 3]
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/lib/libopen-pal.so.0(opal_finalize+0x35) [0xb7708fa5]
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] [ 4] opal-restart [0x804908e]
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] [ 5] /lib/i686/cmov/libc.so.6(__libc_start_main+0xe5)
</span><br>
<span class="quotelev2">&gt;&gt; [0xb7568b55]
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] [ 6] opal-restart [0x8048fc1]
</span><br>
<span class="quotelev2">&gt;&gt; [debian1:18384] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 2 with PID 18384 on node debian1
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 11 (Segmentat
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I used a clean install of Debian Squeeze (testing) to make sure my
</span><br>
<span class="quotelev2">&gt;&gt; environment was ok. Those are the steps I took:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - Installed Debian Squeeze, only base packages
</span><br>
<span class="quotelev2">&gt;&gt; - Installed build-essential, libcr0, libcr-dev, blcr-dkms (build
</span><br>
<span class="quotelev2">&gt;&gt; tools, BLCR dev and run-time environment)
</span><br>
<span class="quotelev2">&gt;&gt; - Compiled openmpi-1.4.1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that I did compile openmpi-1.4.1 because the Debian package
</span><br>
<span class="quotelev2">&gt;&gt; (openmpi-checkpoint) doesn't seem to be usable at the moment. There
</span><br>
<span class="quotelev2">&gt;&gt; are no leftovers from any previous install of Debian packages
</span><br>
<span class="quotelev2">&gt;&gt; supplying OpenMPI because this is a fresh install, no openmpi package
</span><br>
<span class="quotelev2">&gt;&gt; had been installed before.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I used the following configure options:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also tried to add the option --with-memory-manager=none because I
</span><br>
<span class="quotelev2">&gt;&gt; saw an e-mail on the mailing list that described this as a possible
</span><br>
<span class="quotelev2">&gt;&gt; solution to an (apparently) not related problem, but the problem
</span><br>
<span class="quotelev2">&gt;&gt; remains the same.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have config.log (I rm'ed the build dir), but if you think it's
</span><br>
<span class="quotelev2">&gt;&gt; necessary I can recompile OpenMPI and provide it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some information about the system (VirtualBox virtual machine, single
</span><br>
<span class="quotelev2">&gt;&gt; processor, btw):
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kernel version 2.6.32-trunk-686
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; root_at_debian1:~# lsmod | grep blcr
</span><br>
<span class="quotelev2">&gt;&gt; blcr                   79084  0
</span><br>
<span class="quotelev2">&gt;&gt; blcr_imports            2077  1 blcr
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; libcr (BLCR) is version 0.8.2-9.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; gcc is version 4.4.3.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know of any other information you might need.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I figured it out. The problem is that the Debian package brcl-utils,
</span><br>
<span class="quotelev1">&gt; which contains the BLCR binaries (cr_restart, cr_checkpoint, etc.)
</span><br>
<span class="quotelev1">&gt; wasn't installed. I believe OpenMPI could perhaps show a more
</span><br>
<span class="quotelev1">&gt; descriptive message instead of segfaulting, though? Also, you might
</span><br>
<span class="quotelev1">&gt; want to add that information to the FAQ.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyways, I'm filing another Debian bug report.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the sake of completeness, here's, some more information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I forgot to mention that since I've installed OpenMPI to /usr/local.
</span><br>
<span class="quotelev1">&gt; So I'm setting LD_LIBRARY_PATH to /usr/lib:/usr/local/lib in .bashrc,
</span><br>
<span class="quotelev1">&gt; and thus I can run any OpenMPI command without problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I tested BLCR with cr_checkpoint and cr_restart with a simple app,
</span><br>
<span class="quotelev1">&gt; and it worked great too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - I've purged /usr/local and rebuilt OpenMPI with the mentioned flags
</span><br>
<span class="quotelev1">&gt; to obtain the attached config.log (gzipped).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - With brcl-utils installed, I can ompi-restart just fine. Without it
</span><br>
<span class="quotelev1">&gt; installed, I get the segfault mentioned in my previous message.
</span><br>
<p>Yes, ompi-restart should be printing a helpful message and exiting normally. Thanks for the bug report. I believe that I have seen and fixed this on a development branch making its way to the trunk. I'll make sure to move the fix to the 1.4 series once it has been applied to the trunk.
<br>
<p>I filed a ticket on this if you wanted to track the issue.
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2329">https://svn.open-mpi.org/trac/ompi/ticket/2329</a>
<br>
<p>Thanks again,
<br>
Josh
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="12228.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Previous message:</strong> <a href="12226.php">Dave Goodell: "Re: [OMPI users] MPI_Init() and MPI_Init_thread()"</a>
<li><strong>In reply to:</strong> <a href="12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12228.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Reply:</strong> <a href="12228.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
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
