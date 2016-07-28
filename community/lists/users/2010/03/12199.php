<?
$subject_val = "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  2 09:17:52 2010" -->
<!-- isoreceived="20100302141752" -->
<!-- sent="Tue, 2 Mar 2010 11:17:46 -0300" -->
<!-- isosent="20100302141746" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)" -->
<!-- id="9108753b1003020617g5b761df9n54a015e9da8c09b3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9108753b1002281811u1737131ao20d35628908f8294_at_mail.gmail.com" -->
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
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-02 09:17:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12200.php">Addepalli, Srirangam V: "[OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12198.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12183.php">Fernando Lemos: "[OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Reply:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Feb 28, 2010 at 11:11 PM, Fernando Lemos &lt;fernandotcl_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to come up with a fault tolerant OpenMPI setup for research
</span><br>
<span class="quotelev1">&gt; purposes. I'm doing some tests now, but I'm stuck with a segfault when
</span><br>
<span class="quotelev1">&gt; I try to restart my test program from a checkpoint.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My test program is the &quot;ring&quot; program, where messages are sent to the
</span><br>
<span class="quotelev1">&gt; next node in the ring N times. It's pretty simple, I can supply the
</span><br>
<span class="quotelev1">&gt; source code if needed. I'm running it like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # mpirun -np 4 -am ft-enable-cr ring
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 1 sending 703 to 2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 3 received 704
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 3 sending 704 to 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 3 received 703
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 3 sending 703 to 0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 0 with PID 18358 on node debian1
</span><br>
<span class="quotelev1">&gt; exited on signal 0 (Unknown signal 0).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 4 total processes killed (some possibly by mpirun during cleanup)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's the output when I ompi-checkpoint the mpirun PID from another terminal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The checkpoint is taken just fine in maybe 1.5 seconds. I can see the
</span><br>
<span class="quotelev1">&gt; checkpoint directory has been created in $HOME.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is what I get when I try to run ompi-restart
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps axroot_at_debian1:~# ps ax | grep mpirun
</span><br>
<span class="quotelev1">&gt; 18357 pts/0 &#160; &#160;R+ &#160; &#160; 0:01 mpirun -np 4 -am ft-enable-cr ring
</span><br>
<span class="quotelev1">&gt; 18378 pts/5 &#160; &#160;S+ &#160; &#160; 0:00 grep mpirun
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~# ompi-checkpoint 18357
</span><br>
<span class="quotelev1">&gt; Snapshot Ref.: &#160; 0 ompi_global_snapshot_18357.ckpt
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~# ompi-checkpoint --term 18357
</span><br>
<span class="quotelev1">&gt; Snapshot Ref.: &#160; 1 ompi_global_snapshot_18357.ckpt
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~# ompi-restart ompi_global_snapshot_18357.ckpt
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt; &#160; &#160; &#160; checkpoint file (opal_snapshot_2.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [debian1:18384] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [debian1:18384] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [debian1:18384] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [debian1:18384] Failing at address: 0x725f725f
</span><br>
<span class="quotelev1">&gt; [debian1:18384] [ 0] [0xb775f40c]
</span><br>
<span class="quotelev1">&gt; [debian1:18384] [ 1]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libopen-pal.so.0(opal_argv_free+0x33) [0xb771ea63]
</span><br>
<span class="quotelev1">&gt; [debian1:18384] [ 2]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libopen-pal.so.0(opal_event_fini+0x30) [0xb77150a0]
</span><br>
<span class="quotelev1">&gt; [debian1:18384] [ 3]
</span><br>
<span class="quotelev1">&gt; /usr/local/lib/libopen-pal.so.0(opal_finalize+0x35) [0xb7708fa5]
</span><br>
<span class="quotelev1">&gt; [debian1:18384] [ 4] opal-restart [0x804908e]
</span><br>
<span class="quotelev1">&gt; [debian1:18384] [ 5] /lib/i686/cmov/libc.so.6(__libc_start_main+0xe5)
</span><br>
<span class="quotelev1">&gt; [0xb7568b55]
</span><br>
<span class="quotelev1">&gt; [debian1:18384] [ 6] opal-restart [0x8048fc1]
</span><br>
<span class="quotelev1">&gt; [debian1:18384] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun noticed that process rank 2 with PID 18384 on node debian1
</span><br>
<span class="quotelev1">&gt; exited on signal 11 (Segmentat
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used a clean install of Debian Squeeze (testing) to make sure my
</span><br>
<span class="quotelev1">&gt; environment was ok. Those are the steps I took:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Installed Debian Squeeze, only base packages
</span><br>
<span class="quotelev1">&gt; - Installed build-essential, libcr0, libcr-dev, blcr-dkms (build
</span><br>
<span class="quotelev1">&gt; tools, BLCR dev and run-time environment)
</span><br>
<span class="quotelev1">&gt; - Compiled openmpi-1.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I did compile openmpi-1.4.1 because the Debian package
</span><br>
<span class="quotelev1">&gt; (openmpi-checkpoint) doesn't seem to be usable at the moment. There
</span><br>
<span class="quotelev1">&gt; are no leftovers from any previous install of Debian packages
</span><br>
<span class="quotelev1">&gt; supplying OpenMPI because this is a fresh install, no openmpi package
</span><br>
<span class="quotelev1">&gt; had been installed before.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I used the following configure options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also tried to add the option --with-memory-manager=none because I
</span><br>
<span class="quotelev1">&gt; saw an e-mail on the mailing list that described this as a possible
</span><br>
<span class="quotelev1">&gt; solution to an (apparently) not related problem, but the problem
</span><br>
<span class="quotelev1">&gt; remains the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't have config.log (I rm'ed the build dir), but if you think it's
</span><br>
<span class="quotelev1">&gt; necessary I can recompile OpenMPI and provide it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some information about the system (VirtualBox virtual machine, single
</span><br>
<span class="quotelev1">&gt; processor, btw):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kernel version 2.6.32-trunk-686
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; root_at_debian1:~# lsmod | grep blcr
</span><br>
<span class="quotelev1">&gt; blcr &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; 79084 &#160;0
</span><br>
<span class="quotelev1">&gt; blcr_imports &#160; &#160; &#160; &#160; &#160; &#160;2077 &#160;1 blcr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libcr (BLCR) is version 0.8.2-9.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gcc is version 4.4.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please let me know of any other information you might need.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hello,
<br>
<p>I figured it out. The problem is that the Debian package brcl-utils,
<br>
which contains the BLCR binaries (cr_restart, cr_checkpoint, etc.)
<br>
wasn't installed. I believe OpenMPI could perhaps show a more
<br>
descriptive message instead of segfaulting, though? Also, you might
<br>
want to add that information to the FAQ.
<br>
<p>Anyways, I'm filing another Debian bug report.
<br>
<p>For the sake of completeness, here's, some more information:
<br>
<p>- I forgot to mention that since I've installed OpenMPI to /usr/local.
<br>
So I'm setting LD_LIBRARY_PATH to /usr/lib:/usr/local/lib in .bashrc,
<br>
and thus I can run any OpenMPI command without problems.
<br>
<p>- I tested BLCR with cr_checkpoint and cr_restart with a simple app,
<br>
and it worked great too.
<br>
<p>- I've purged /usr/local and rebuilt OpenMPI with the mentioned flags
<br>
to obtain the attached config.log (gzipped).
<br>
<p>- With brcl-utils installed, I can ompi-restart just fine. Without it
<br>
installed, I get the segfault mentioned in my previous message.
<br>
<p><p><p>Best regards,
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12199/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12200.php">Addepalli, Srirangam V: "[OMPI users] Option to use only 7 cores out of 8 on each node"</a>
<li><strong>Previous message:</strong> <a href="12198.php">TRINH Minh Hieu: "Re: [OMPI users] Segmentation fault when Send/Recv on heterogeneouscluster (32/64 bit machines)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/02/12183.php">Fernando Lemos: "[OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Reply:</strong> <a href="12227.php">Joshua Hursey: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
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
