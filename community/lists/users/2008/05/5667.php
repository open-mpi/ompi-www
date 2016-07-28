<?
$subject_val = "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 13:11:45 2008" -->
<!-- isoreceived="20080514171145" -->
<!-- sent="Wed, 14 May 2008 13:11:36 -0400" -->
<!-- isosent="20080514171136" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue" -->
<!-- id="5DF18493-E103-4BF4-A982-8DE3261BE2E8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9E789180-85EE-4164-97D3-63018B3FA52E_at_caltech.edu" -->
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
<strong>Date:</strong> 2008-05-14 13:11:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5668.php">Andreas Klöckner: "[OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5666.php">Brock Palen: "Re: [OMPI users] Open-MPI spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5661.php">Tamer: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5669.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5669.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tamer,
<br>
<p>How much communication does your application tend to do? As reported  
<br>
below if there is a lot of communication between checkpoints then it  
<br>
may take a while to checkpoint the application since the current  
<br>
implementation of the coordination algorithm checks every message at  
<br>
checkpoint time. So what you are seeing might be that the checkpoint  
<br>
is taking an extremely long time to clear the channel.
<br>
<p>I have a few things in the works that attempt to fix this problem.  
<br>
They are not ready just yet, but I'll make it known when they are. You  
<br>
can get some diagnostics be setting &quot;-mca crcp_coord_verbose 10&quot; on  
<br>
the command line, but it is fairly course gained at the moment (I have  
<br>
some improvements in the pipeline here as well).
<br>
<p>Cheers,
<br>
Josh
<br>
<p>On May 13, 2008, at 3:42 PM, Tamer wrote:
<br>
<p><span class="quotelev1">&gt; Hi Josh: I am currently using openmpi r18291 and when I run a 12  
</span><br>
<span class="quotelev1">&gt; task job on 3 quad core nodes I am able to checkpoint and restart  
</span><br>
<span class="quotelev1">&gt; several times at the beginning of the run, however, after a few  
</span><br>
<span class="quotelev1">&gt; hours, when I try to checkpoint the code just hangs and it just  
</span><br>
<span class="quotelev1">&gt; won't checkpoint and won't give me an error message. Has this  
</span><br>
<span class="quotelev1">&gt; problem been reported before? All the required executables and  
</span><br>
<span class="quotelev1">&gt; libraries are in my path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Tamer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 29, 2008, at 1:37 PM, Sharon Brunett wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, I'll try the version you recommend below!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your previous email indicted that you were using r18241. I committed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in r18276 a patch that should fix this problem. Let me know if you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still see it after that update.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Apr 29, 2008, at 3:18 PM, Sharon Brunett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm also having trouble using ompi-restart on a snapspot made  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which was previously checkpointed. In other words, restarting a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; previously restarted run!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (a) start the run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun -np 16 -am ft-enable-cr ./a.out
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &lt;---do an ompi-checkpoint on the mpirun pid from (a) from another
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminal---&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (b) restart the checkpointed run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi-restart ompi_global_snapshot_30086.ckpt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  &lt;--do an ompi-checkpoint on mpirun pid from (b) from another
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminal----&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (c) restart the checkpointed run
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ompi-restart ompi_global_snapshot_30120.ckpt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun noticed that process rank 12 with PID 30480 on node shc005
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; exited
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; on signal 13 (Broken pipe).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -bash-2.05b$
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can restart the previous (30086) ckpt but not the latest one made
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a restarted run.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any insights would be appreciated.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sharon
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sharon,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is, unfortunately, to be expected at the moment for this  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; type of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; application. Extremely communication intensive applications will  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; most
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; likely cause the implementation of the current coordination  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; algorithm
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to slow down significantly. This is because on a checkpoint Open  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does a peerwise check on the description of (possibly) each  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; message
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; make sure there are no messages in flight. So for a huge number of
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; messages this could take a long time.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is a performance problem with the current implementation of  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; algorithm that we use in Open MPI. I've been meaning to go back  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; improve this, but it has not been critical to do so since
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; applications
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that perform in this manner are outliers in HPC. The coordination
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; algorithm I'm using is based on the algorithm used by LAM/MPI, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; implemented at a higher level. There are a number of improvements
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can explore in the checkpoint/restart framework in Open MPI.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If this is critical for you I might be able to take a look at  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; it, but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can't say when. :(
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Apr 29, 2008, at 1:07 PM, Sharon Brunett wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh Hursey wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Apr 29, 2008, at 12:55 AM, Sharon Brunett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm finding that using ompi-checkpoint on an application  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; very cpu bound takes a very very long time. For example,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; trying to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checkpoint a 4 or 8 way Pallas MPI Benchmark application can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; take
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; more than an hour. The problem is not where I'm dumping
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; checkpoints
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (I've tried local and an nfs mount with plenty of space, and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; cpu
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; intensive apps checkpoint quickly).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm using BLCR_VERSION=0.6.5 and openmpi-1.3a1r18241.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Is this condition common and if so, are there possibly mca
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; paramters
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; which could help?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It depends on how you configured Open MPI with checkpoint/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; restart.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; There are two modes of operation: No threads, and with a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; checkpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; thread. They are described a bit more in the Checkpoint/Restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tolerance User's Guide on the wiki:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; By default we compile without the checkpoint thread. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; restriction
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; he is that all processes must be in the MPI library in order to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; make
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; progress on the global checkpoint. For CPU intensive  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; applications
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; may cause quite a delay in the time to start, and subsequently
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; finish,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; a checkpoint. I'm guessing that this is what you are seeing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; If you configure with the checkpoint thread (add '--enable-mpi-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; threads-
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; --enable-ft-thread' to ./configure) then Open MPI will create a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; thread
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; that runs with each application process. This thread is fairly
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; light
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; weight and will make sure that a checkpoint progresses even when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; process is not in the Open MPI library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Try enabling the checkpoint thread and see if that helps improve
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; checkpoint time.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Josh,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; First...please pardon the blunder in my earlier mail. Comms bound
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; apps
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; are the ones taking a while to checkpoint, not cpu bound. In any
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; case, I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tried configuring with the above two configure options but  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; still no
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; luck
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on improving checkpointing times or gaining completion on  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; larger mpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; task runs being checkpointed.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; It looks like the checkpointing is just hanging. For example, I  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; can
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; checkpoint a 2 way comms bound code (1 task on two nodes) ok.  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; When I
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ask
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; for a 4 way run on 2 nodes, 30 minutes after the ompi- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; checkpoint PID
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; only see 1 ckpt directory with data in it!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; /home/sharon/ompi_global_snapshot_25400.ckpt/0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -bash-2.05b$ ls -l *
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_snapshot_0.ckpt:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; total 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_snapshot_1.ckpt:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; total 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_snapshot_2.ckpt:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; total 0
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; opal_snapshot_3.ckpt:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; total 1868
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rw-------  1 sharon shc-support 1907476 2008-04-29 10:49
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ompi_blcr_context.1850
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -rw-r--r--  1 sharon shc-support      33 2008-04-29 10:49
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; snapshot_meta.data
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -bash-2.05b$ pwd
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The file system getting the checkpoints is local. I've tried /
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; scratch
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and others as well.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I can checkpoint some codes (like xhpl) just fine across 8 mpi  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tasks
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ( t
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; nodes), dumping 254M total. Thus, the very long/stuck  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; checkpointing
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; seems rather application dependent.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Here's how I configured openmpi
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ./configure --prefix=/nfs/ds01/support/sharon/openmpi-1.3a1r18241
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --enable-mpi-threads --enable-ft-thread --with-ft=cr --enable- 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --enable-mpi-threads=posix --enable-libgcj-multifile
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --enable-languages=c,c++,objc,java,f95,ada --enable-java-awt=gtk
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --with-mvapi=/usr/mellanox --with-blcr=/opt/blcr
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks for any further insights you may have.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Sharon
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5668.php">Andreas Klöckner: "[OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5666.php">Brock Palen: "Re: [OMPI users] Open-MPI spawn problem"</a>
<li><strong>In reply to:</strong> <a href="5661.php">Tamer: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5669.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5669.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
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
