<?
$subject_val = "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 15:41:18 2008" -->
<!-- isoreceived="20080429194118" -->
<!-- sent="Tue, 29 Apr 2008 14:41:09 -0500" -->
<!-- isosent="20080429194109" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue" -->
<!-- id="A3F69660-5A46-40C8-93E8-97DC35605C03_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="481763F6.8070701_at_cacr.caltech.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 15:41:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5569.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5569.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5569.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5575.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sharon,
<br>
<p>This is, unfortunately, to be expected at the moment for this type of  
<br>
application. Extremely communication intensive applications will most  
<br>
likely cause the implementation of the current coordination algorithm  
<br>
to slow down significantly. This is because on a checkpoint Open MPI  
<br>
does a peerwise check on the description of (possibly) each message to  
<br>
make sure there are no messages in flight. So for a huge number of  
<br>
messages this could take a long time.
<br>
<p>This is a performance problem with the current implementation of the  
<br>
algorithm that we use in Open MPI. I've been meaning to go back and  
<br>
improve this, but it has not been critical to do so since applications  
<br>
that perform in this manner are outliers in HPC. The coordination  
<br>
algorithm I'm using is based on the algorithm used by LAM/MPI, but  
<br>
implemented at a higher level. There are a number of improvements that  
<br>
I can explore in the checkpoint/restart framework in Open MPI.
<br>
<p>If this is critical for you I might be able to take a look at it, but  
<br>
I can't say when. :(
<br>
<p>-- Josh
<br>
<p>On Apr 29, 2008, at 1:07 PM, Sharon Brunett wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2008, at 12:55 AM, Sharon Brunett wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm finding that using ompi-checkpoint on an application which is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; very cpu bound takes a very very long time. For example, trying to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkpoint a 4 or 8 way Pallas MPI Benchmark application can take
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more than an hour. The problem is not where I'm dumping checkpoints
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (I've tried local and an nfs mount with plenty of space, and cpu
</span><br>
<span class="quotelev3">&gt;&gt;&gt; intensive apps checkpoint quickly).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using BLCR_VERSION=0.6.5 and openmpi-1.3a1r18241.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this condition common and if so, are there possibly mca paramters
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which could help?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It depends on how you configured Open MPI with checkpoint/restart.
</span><br>
<span class="quotelev2">&gt;&gt; There are two modes of operation: No threads, and with a checkpoint
</span><br>
<span class="quotelev2">&gt;&gt; thread. They are described a bit more in the Checkpoint/Restart Fault
</span><br>
<span class="quotelev2">&gt;&gt; Tolerance User's Guide on the wiki:
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; By default we compile without the checkpoint thread. The restriction
</span><br>
<span class="quotelev2">&gt;&gt; he is that all processes must be in the MPI library in order to make
</span><br>
<span class="quotelev2">&gt;&gt; progress on the global checkpoint. For CPU intensive applications  
</span><br>
<span class="quotelev2">&gt;&gt; this
</span><br>
<span class="quotelev2">&gt;&gt; may cause quite a delay in the time to start, and subsequently  
</span><br>
<span class="quotelev2">&gt;&gt; finish,
</span><br>
<span class="quotelev2">&gt;&gt; a checkpoint. I'm guessing that this is what you are seeing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you configure with the checkpoint thread (add '--enable-mpi- 
</span><br>
<span class="quotelev2">&gt;&gt; threads-
</span><br>
<span class="quotelev2">&gt;&gt; --enable-ft-thread' to ./configure) then Open MPI will create a  
</span><br>
<span class="quotelev2">&gt;&gt; thread
</span><br>
<span class="quotelev2">&gt;&gt; that runs with each application process. This thread is fairly light
</span><br>
<span class="quotelev2">&gt;&gt; weight and will make sure that a checkpoint progresses even when the
</span><br>
<span class="quotelev2">&gt;&gt; process is not in the Open MPI library.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try enabling the checkpoint thread and see if that helps improve the
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh,
</span><br>
<span class="quotelev1">&gt; First...please pardon the blunder in my earlier mail. Comms bound apps
</span><br>
<span class="quotelev1">&gt; are the ones taking a while to checkpoint, not cpu bound. In any  
</span><br>
<span class="quotelev1">&gt; case, I
</span><br>
<span class="quotelev1">&gt; tried configuring with the above two configure options but still no  
</span><br>
<span class="quotelev1">&gt; luck
</span><br>
<span class="quotelev1">&gt; on improving checkpointing times or gaining completion on larger mpi
</span><br>
<span class="quotelev1">&gt; task runs being checkpointed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the checkpointing is just hanging. For example, I can
</span><br>
<span class="quotelev1">&gt; checkpoint a 2 way comms bound code (1 task on two nodes) ok. When I  
</span><br>
<span class="quotelev1">&gt; ask
</span><br>
<span class="quotelev1">&gt; for a 4 way run on 2 nodes, 30 minutes after the ompi-checkpoint PID
</span><br>
<span class="quotelev1">&gt; only see 1 ckpt directory with data in it!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /home/sharon/ompi_global_snapshot_25400.ckpt/0
</span><br>
<span class="quotelev1">&gt; -bash-2.05b$ ls -l *
</span><br>
<span class="quotelev1">&gt; opal_snapshot_0.ckpt:
</span><br>
<span class="quotelev1">&gt; total 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_snapshot_1.ckpt:
</span><br>
<span class="quotelev1">&gt; total 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_snapshot_2.ckpt:
</span><br>
<span class="quotelev1">&gt; total 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; opal_snapshot_3.ckpt:
</span><br>
<span class="quotelev1">&gt; total 1868
</span><br>
<span class="quotelev1">&gt; -rw-------  1 sharon shc-support 1907476 2008-04-29 10:49
</span><br>
<span class="quotelev1">&gt; ompi_blcr_context.1850
</span><br>
<span class="quotelev1">&gt; -rw-r--r--  1 sharon shc-support      33 2008-04-29 10:49  
</span><br>
<span class="quotelev1">&gt; snapshot_meta.data
</span><br>
<span class="quotelev1">&gt; -bash-2.05b$ pwd
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file system getting the checkpoints is local. I've tried /scratch
</span><br>
<span class="quotelev1">&gt; and others as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can checkpoint some codes (like xhpl) just fine across 8 mpi tasks  
</span><br>
<span class="quotelev1">&gt; ( t
</span><br>
<span class="quotelev1">&gt; nodes), dumping 254M total. Thus, the very long/stuck checkpointing
</span><br>
<span class="quotelev1">&gt; seems rather application dependent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's how I configured openmpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/nfs/ds01/support/sharon/openmpi-1.3a1r18241
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --enable-ft-thread --with-ft=cr --enable-shared
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads=posix --enable-libgcj-multifile
</span><br>
<span class="quotelev1">&gt; --enable-languages=c,c++,objc,java,f95,ada --enable-java-awt=gtk
</span><br>
<span class="quotelev1">&gt; --with-mvapi=/usr/mellanox --with-blcr=/opt/blcr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any further insights you may have.
</span><br>
<span class="quotelev1">&gt; Sharon
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
<li><strong>Next message:</strong> <a href="5569.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5567.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5569.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5569.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5575.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
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
