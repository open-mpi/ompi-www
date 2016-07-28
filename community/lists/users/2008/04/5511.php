<?
$subject_val = "Re: [OMPI users] How to restart a job twice";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 24 13:59:14 2008" -->
<!-- isoreceived="20080424175914" -->
<!-- sent="Thu, 24 Apr 2008 13:59:05 -0400" -->
<!-- isosent="20080424175905" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to restart a job twice" -->
<!-- id="5187DC46-6EC4-4746-B111-FE9386C93AE8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0C40AFA-52F7-4F5C-B0E3-00EA28A57D3C_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to restart a job twice<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-24 13:59:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5512.php">Andreas Schäfer: "Re: [OMPI users] Openmpi (VASP): Signal code: Address not mapped	(1)"</a>
<li><strong>Previous message:</strong> <a href="5510.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5495.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tamer,
<br>
<p>I'm confident that this particular problem is now fixed in the trunk  
<br>
(r18276). If you are interested in the details on the bug and how it  
<br>
was fixed the commit message is fairly detailed:
<br>
&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/changeset/18276">https://svn.open-mpi.org/trac/ompi/changeset/18276</a>
<br>
<p>Let me know if this patch fixes things. Like I said I'm confident that  
<br>
it does, but there are always more bugs :)
<br>
<p>Thanks again for the bug report.
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On Apr 24, 2008, at 11:02 AM, Josh Hursey wrote:
<br>
<p><span class="quotelev1">&gt; Tamer,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Another user contacted me off list yesterday with a similar problem
</span><br>
<span class="quotelev1">&gt; with the current trunk. I have been able to reproduce this, and am
</span><br>
<span class="quotelev1">&gt; currently trying to debug it again. It seems to occur more often with
</span><br>
<span class="quotelev1">&gt; builds without the checkpoint thread (--disable-ft-thread). It seems
</span><br>
<span class="quotelev1">&gt; to be a race in our connection wireup which is why it does not always
</span><br>
<span class="quotelev1">&gt; occur.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for your patience as I try to track this down. I'll let you
</span><br>
<span class="quotelev1">&gt; know as soon as I have a fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 24, 2008, at 10:50 AM, Tamer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh, Thank you for your help. I was able to do the following with
</span><br>
<span class="quotelev2">&gt;&gt; r18241:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; start the parallel job
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint and restart
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint and restart
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint but failed to restart with the following message:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ompi-restart ompi_global_snapshot_23800.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202.caltech.edu:23650] [[45699,1],1]-[[45699,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202.caltech.edu:23650] [[45699,1],1] routed:tree:  
</span><br>
<span class="quotelev2">&gt;&gt; Connection
</span><br>
<span class="quotelev2">&gt;&gt; to lifeline [[45699,0],0] lost
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202.caltech.edu:23650] [[45699,1],1]-[[45699,0],0]
</span><br>
<span class="quotelev2">&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202.caltech.edu:23650] [[45699,1],1] routed:tree:  
</span><br>
<span class="quotelev2">&gt;&gt; Connection
</span><br>
<span class="quotelev2">&gt;&gt; to lifeline [[45699,0],0] lost
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202:23650] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202:23650] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202:23650] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202:23650] Failing at address: 0x3e0f50
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202:23650] [ 0] [0x110440]
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202:23650] [ 1] /lib/libc.so.6(__libc_start_main+0x107)
</span><br>
<span class="quotelev2">&gt;&gt; [0xc5df97]
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202:23650] [ 2] ./ares-openmpi-r18241 [0x81703b1]
</span><br>
<span class="quotelev2">&gt;&gt; [dhcp-119-202:23650] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; mpirun noticed that process rank 1 with PID 23857 on node
</span><br>
<span class="quotelev2">&gt;&gt; dhcp-119-202.caltech.edu exited on signal 11 (Segmentation fault).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, this time the process went further than before. I tested on a
</span><br>
<span class="quotelev2">&gt;&gt; different platform (64 bit machine with fedora core 7) and openmpi
</span><br>
<span class="quotelev2">&gt;&gt; checkpoints and restarts as many times as I want to without any
</span><br>
<span class="quotelev2">&gt;&gt; problems. This means that the issue above must be platform dependent
</span><br>
<span class="quotelev2">&gt;&gt; and I must be missing some option in building the code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Tamer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 22, 2008, at 5:52 PM, Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tamer,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This should now be fixed in r18241.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Though I was able to replicate this bug, it only occurred
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sporadically for me. It seemed to be caused by some socket  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; descriptor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; caching that was not properly cleaned up by the restart procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My testing appears to conclude that this bug is now fixed, but since
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it is difficult to reproduce if you see it happen again definitely
</span><br>
<span class="quotelev3">&gt;&gt;&gt; let me know.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; With the current trunk you may see the following error message:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [odin001][[7448,1],0][btl_tcp_frag.c:216:mca_btl_tcp_frag_recv]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca_btl_tcp_frag_recv: readv failed: Connection reset by peer (104)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is not caused by the checkpoint/restart code, but by some  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; recent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; changes to our TCP component. We are working on fixing this, but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just wanted to give you a heads up in case you see this error. As  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; far
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as I can tell it does not interfere with the checkpoint/restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt; functionality.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let me know if this fixes your problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 22, 2008, at 9:16 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tamer,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Just wanted to update you on my progress. I am able to reproduce
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something similar to this problem. I am currently working on a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; solution to it. I'll let you know when it is available, probably in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the next day or two.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you for the bug report.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Apr 18, 2008, at 1:11 PM, Tamer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi Josh:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am running on linux fedora core 7 kernel: 2.6.23.15-80.fc7
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The machine is dual-core with shared memory so it's not even a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cluster.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I downloaded r18208 and built it with the following options:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/usr/local/openmpi-with-checkpointing-r18208
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with-ft=cr --with-blcr=/usr/local/blcr
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when I run mpirun I pass the following command:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun -np 2 -am ft-enable-cr ./ares-openmpi -c -f madonna-13760
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was able to checkpoint and restart successfully and was able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; checkpoint the restarted job  (mpirun showed up with ps-efa |grep
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun under r18208) but was unable to restart again; here's the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; error message:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpi-restart ompi_global_snapshot_23865.ckpt
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:23846] [[45670,1],1]-[[45670,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:23846] [[45670,1],1] routed:unity:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Connection to lifeline [[45670,0],0] lost
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:23845] [[45670,1],0]-[[45670,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:23845] [[45670,1],0] routed:unity:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Connection to lifeline [[45670,0],0] lost
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:23846] [[45670,1],1]-[[45670,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:23846] [[45670,1],1] routed:unity:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Connection to lifeline [[45670,0],0] lost
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:23845] [[45670,1],0]-[[45670,0],0]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:23845] [[45670,1],0] routed:unity:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Connection to lifeline [[45670,0],0] lost
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; mpirun has exited due to process rank 1 with PID 24012 on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; node dhcp-119-202.caltech.edu exiting without calling &quot;finalize&quot;.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This may
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; terminated by signals sent by mpirun (as reported here).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you in advance for your help.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tamer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 18, 2008, at 7:07 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This problem has come up in the past and may have been fixed  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; since
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; r14519. Can you update to r18208 and see if the error still
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; occurs?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; A few other questions that will help me try to reproduce the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; problem.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Can you tell me more about the configuration of the system you  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; running on (number of machines, if there is a resource manager)?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; How
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; did you configure Open MPI and what command line options are you
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; passing to 'mpirun'?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Apr 18, 2008, at 9:36 AM, Tamer wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks Josh, I tried what you suggested with my existing r14519,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; was able to checkpoint the restarted job but was never able to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it. I looked up the PID for 'orterun' and checkpointed the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; restarted
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; job but when I try to restart from that point I get the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; following
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ompi-restart ompi_global_snapshot_7704.ckpt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07292] [[61851,1],1]-[[61851,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07292] [[61851,1],1] routed:unity:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Connection to lifeline [[61851,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07292] [[61851,1],1]-[[61851,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07292] [[61851,1],1] routed:unity:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Connection to lifeline [[61851,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07291] [[61851,1],0]-[[61851,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07291] [[61851,1],0] routed:unity:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Connection to lifeline [[61851,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07291] [[61851,1],0]-[[61851,0],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; mca_oob_tcp_msg_send_handler: writev failed: Broken pipe (32)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [dhcp-119-202.caltech.edu:07291] [[61851,1],0] routed:unity:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Connection to lifeline [[61851,0],0] lost
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; orterun has exited due to process rank 1 with PID 7737 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; node dhcp-119-202.caltech.edu exiting without calling  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;finalize&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; This
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; may
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; have caused other processes in the application to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; terminated by signals sent by orterun (as reported here).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Do I have to run the copenmpi clean command after the first
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; checkpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and before restarting the checkpointed job so I can checkpoint  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; again or is there something I am missing in this version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; completely
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and I would have to go to r18208? Thank you in advance for your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tamer
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 18, 2008, at 6:03 AM, Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; When you use 'ompi-restart' to restart a job it fork/execs the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; completely new job using the restarted processes for the ranks.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However instead of calling the 'mpirun' process ompi-restart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; currently
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; calls 'orterun'. These two programs are exactly the same  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (mpirun
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; is a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; symbolic link to orterun). So if you look for the PID of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'orterun'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that can be used to checkpoint the process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; However it is confusing that Open MPI makes this switch. So I
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; committed in r18208 a fix for this that uses the 'mpirun'  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; binary
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; name
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; instead of the 'orterun' binary name. This fits with the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; typical
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; case of checkpoint/restart in Open MPI in which users expect to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; find
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the 'mpirun' process on restart instead of the lesser known
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'orterun'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; process.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry for the confusion.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 18, 2008, at 1:14 AM, Tamer wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear all, I installed the developer's version r14519 and was
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; able to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; get it running. I successfully checkpointed a parallel job and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; restarted it. My question is how can I checkpoint the  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; restarted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; job?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The problem is once the original job is terminated and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; restarted
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; later
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on, the mpirun does not exist anymore (ps -efa|grep mpirun)  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; hence
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I do not know which PID I should use when I run the ompi-
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checkpoint
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; on
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; the restarted job. Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5512.php">Andreas Schäfer: "Re: [OMPI users] Openmpi (VASP): Signal code: Address not mapped	(1)"</a>
<li><strong>Previous message:</strong> <a href="5510.php">Barry Rountree: "Re: [OMPI users] Busy waiting [was Re:  (no subject)]"</a>
<li><strong>In reply to:</strong> <a href="5495.php">Josh Hursey: "Re: [OMPI users] How to restart a job twice"</a>
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
