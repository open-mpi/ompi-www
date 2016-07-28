<?
$subject_val = "[OMPI users] Segfault in ompi-restart (ft-enable-cr)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb 28 21:11:10 2010" -->
<!-- isoreceived="20100301021110" -->
<!-- sent="Sun, 28 Feb 2010 23:11:05 -0300" -->
<!-- isosent="20100301021105" -->
<!-- name="Fernando Lemos" -->
<!-- email="fernandotcl_at_[hidden]" -->
<!-- subject="[OMPI users] Segfault in ompi-restart (ft-enable-cr)" -->
<!-- id="9108753b1002281811u1737131ao20d35628908f8294_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Segfault in ompi-restart (ft-enable-cr)<br>
<strong>From:</strong> Fernando Lemos (<em>fernandotcl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-28 21:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12184.php">David Turner: "[OMPI users] sm btl choices"</a>
<li><strong>Previous message:</strong> <a href="12182.php">TRINH Minh Hieu: "[OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><p>I'm trying to come up with a fault tolerant OpenMPI setup for research
<br>
purposes. I'm doing some tests now, but I'm stuck with a segfault when
<br>
I try to restart my test program from a checkpoint.
<br>
<p>My test program is the &quot;ring&quot; program, where messages are sent to the
<br>
next node in the ring N times. It's pretty simple, I can supply the
<br>
source code if needed. I'm running it like this:
<br>
<p># mpirun -np 4 -am ft-enable-cr ring
<br>
...
<br>
<span class="quotelev3">&gt;&gt;&gt; Process 1 sending 703 to 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 received 704
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 sending 704 to 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 received 703
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Process 3 sending 703 to 0
</span><br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 18358 on node debian1
<br>
exited on signal 0 (Unknown signal 0).
<br>
--------------------------------------------------------------------------
<br>
4 total processes killed (some possibly by mpirun during cleanup)
<br>
<p>That's the output when I ompi-checkpoint the mpirun PID from another terminal.
<br>
<p>The checkpoint is taken just fine in maybe 1.5 seconds. I can see the
<br>
checkpoint directory has been created in $HOME.
<br>
<p>This is what I get when I try to run ompi-restart
<br>
<p>ps axroot_at_debian1:~# ps ax | grep mpirun
<br>
18357 pts/0    R+     0:01 mpirun -np 4 -am ft-enable-cr ring
<br>
18378 pts/5    S+     0:00 grep mpirun
<br>
root_at_debian1:~# ompi-checkpoint 18357
<br>
Snapshot Ref.:   0 ompi_global_snapshot_18357.ckpt
<br>
root_at_debian1:~# ompi-checkpoint --term 18357
<br>
Snapshot Ref.:   1 ompi_global_snapshot_18357.ckpt
<br>
root_at_debian1:~# ompi-restart ompi_global_snapshot_18357.ckpt
<br>
--------------------------------------------------------------------------
<br>
Error: Unable to obtain the proper restart command to restart from the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;checkpoint file (opal_snapshot_2.ckpt). Returned -1.
<br>
<p>--------------------------------------------------------------------------
<br>
[debian1:18384] *** Process received signal ***
<br>
[debian1:18384] Signal: Segmentation fault (11)
<br>
[debian1:18384] Signal code: Address not mapped (1)
<br>
[debian1:18384] Failing at address: 0x725f725f
<br>
[debian1:18384] [ 0] [0xb775f40c]
<br>
[debian1:18384] [ 1]
<br>
/usr/local/lib/libopen-pal.so.0(opal_argv_free+0x33) [0xb771ea63]
<br>
[debian1:18384] [ 2]
<br>
/usr/local/lib/libopen-pal.so.0(opal_event_fini+0x30) [0xb77150a0]
<br>
[debian1:18384] [ 3]
<br>
/usr/local/lib/libopen-pal.so.0(opal_finalize+0x35) [0xb7708fa5]
<br>
[debian1:18384] [ 4] opal-restart [0x804908e]
<br>
[debian1:18384] [ 5] /lib/i686/cmov/libc.so.6(__libc_start_main+0xe5)
<br>
[0xb7568b55]
<br>
[debian1:18384] [ 6] opal-restart [0x8048fc1]
<br>
[debian1:18384] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 2 with PID 18384 on node debian1
<br>
exited on signal 11 (Segmentat
<br>
--------------------------------------------------------------------------
<br>
<p>I used a clean install of Debian Squeeze (testing) to make sure my
<br>
environment was ok. Those are the steps I took:
<br>
<p>- Installed Debian Squeeze, only base packages
<br>
- Installed build-essential, libcr0, libcr-dev, blcr-dkms (build
<br>
tools, BLCR dev and run-time environment)
<br>
- Compiled openmpi-1.4.1
<br>
<p>Note that I did compile openmpi-1.4.1 because the Debian package
<br>
(openmpi-checkpoint) doesn't seem to be usable at the moment. There
<br>
are no leftovers from any previous install of Debian packages
<br>
supplying OpenMPI because this is a fresh install, no openmpi package
<br>
had been installed before.
<br>
<p>I used the following configure options:
<br>
<p># ./configure --with-ft=cr --enable-ft-thread --enable-mpi-threads
<br>
<p>I also tried to add the option --with-memory-manager=none because I
<br>
saw an e-mail on the mailing list that described this as a possible
<br>
solution to an (apparently) not related problem, but the problem
<br>
remains the same.
<br>
<p>I don't have config.log (I rm'ed the build dir), but if you think it's
<br>
necessary I can recompile OpenMPI and provide it.
<br>
<p>Some information about the system (VirtualBox virtual machine, single
<br>
processor, btw):
<br>
<p>Kernel version 2.6.32-trunk-686
<br>
<p>root_at_debian1:~# lsmod | grep blcr
<br>
blcr                   79084  0
<br>
blcr_imports            2077  1 blcr
<br>
<p>libcr (BLCR) is version 0.8.2-9.
<br>
<p>gcc is version 4.4.3.
<br>
<p><p>Please let me know of any other information you might need.
<br>
<p><p>Thanks in advance,
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12184.php">David Turner: "[OMPI users] sm btl choices"</a>
<li><strong>Previous message:</strong> <a href="12182.php">TRINH Minh Hieu: "[OMPI users] Segmentation fault when Send/Recv on heterogeneous cluster (32/64 bit machines)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2010/03/12199.php">Fernando Lemos: "Re: [OMPI users] Segfault in ompi-restart (ft-enable-cr)"</a>
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
