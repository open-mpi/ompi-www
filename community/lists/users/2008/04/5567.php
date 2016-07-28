<?
$subject_val = "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 29 14:07:58 2008" -->
<!-- isoreceived="20080429180758" -->
<!-- sent="Tue, 29 Apr 2008 11:07:50 -0700" -->
<!-- isosent="20080429180750" -->
<!-- name="Sharon Brunett" -->
<!-- email="sharon_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue" -->
<!-- id="481763F6.8070701_at_cacr.caltech.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5D7E8469-23D0-4289-9959-9994B290B867_at_open-mpi.org" -->
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
<strong>From:</strong> Sharon Brunett (<em>sharon_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-29 14:07:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5568.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5566.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5564.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5568.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5568.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Josh Hursey wrote:
<br>
<span class="quotelev1">&gt; On Apr 29, 2008, at 12:55 AM, Sharon Brunett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm finding that using ompi-checkpoint on an application which is  
</span><br>
<span class="quotelev2">&gt;&gt; very cpu bound takes a very very long time. For example, trying to  
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint a 4 or 8 way Pallas MPI Benchmark application can take  
</span><br>
<span class="quotelev2">&gt;&gt; more than an hour. The problem is not where I'm dumping checkpoints  
</span><br>
<span class="quotelev2">&gt;&gt; (I've tried local and an nfs mount with plenty of space, and cpu  
</span><br>
<span class="quotelev2">&gt;&gt; intensive apps checkpoint quickly).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using BLCR_VERSION=0.6.5 and openmpi-1.3a1r18241.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this condition common and if so, are there possibly mca paramters  
</span><br>
<span class="quotelev2">&gt;&gt; which could help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It depends on how you configured Open MPI with checkpoint/restart.  
</span><br>
<span class="quotelev1">&gt; There are two modes of operation: No threads, and with a checkpoint  
</span><br>
<span class="quotelev1">&gt; thread. They are described a bit more in the Checkpoint/Restart Fault  
</span><br>
<span class="quotelev1">&gt; Tolerance User's Guide on the wiki:
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR">https://svn.open-mpi.org/trac/ompi/wiki/ProcessFT_CR</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; By default we compile without the checkpoint thread. The restriction  
</span><br>
<span class="quotelev1">&gt; he is that all processes must be in the MPI library in order to make  
</span><br>
<span class="quotelev1">&gt; progress on the global checkpoint. For CPU intensive applications this  
</span><br>
<span class="quotelev1">&gt; may cause quite a delay in the time to start, and subsequently finish,  
</span><br>
<span class="quotelev1">&gt; a checkpoint. I'm guessing that this is what you are seeing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you configure with the checkpoint thread (add '--enable-mpi-threads-  
</span><br>
<span class="quotelev1">&gt; --enable-ft-thread' to ./configure) then Open MPI will create a thread  
</span><br>
<span class="quotelev1">&gt; that runs with each application process. This thread is fairly light  
</span><br>
<span class="quotelev1">&gt; weight and will make sure that a checkpoint progresses even when the  
</span><br>
<span class="quotelev1">&gt; process is not in the Open MPI library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Try enabling the checkpoint thread and see if that helps improve the  
</span><br>
<span class="quotelev1">&gt; checkpoint time.
</span><br>
<p>Josh,
<br>
First...please pardon the blunder in my earlier mail. Comms bound apps 
<br>
are the ones taking a while to checkpoint, not cpu bound. In any case, I 
<br>
tried configuring with the above two configure options but still no luck 
<br>
on improving checkpointing times or gaining completion on larger mpi 
<br>
task runs being checkpointed.
<br>
<p>It looks like the checkpointing is just hanging. For example, I can 
<br>
checkpoint a 2 way comms bound code (1 task on two nodes) ok. When I ask 
<br>
for a 4 way run on 2 nodes, 30 minutes after the ompi-checkpoint PID 
<br>
only see 1 ckpt directory with data in it!
<br>
<p><p>/home/sharon/ompi_global_snapshot_25400.ckpt/0
<br>
-bash-2.05b$ ls -l *
<br>
opal_snapshot_0.ckpt:
<br>
total 0
<br>
<p>opal_snapshot_1.ckpt:
<br>
total 0
<br>
<p>opal_snapshot_2.ckpt:
<br>
total 0
<br>
<p>opal_snapshot_3.ckpt:
<br>
total 1868
<br>
-rw-------  1 sharon shc-support 1907476 2008-04-29 10:49 
<br>
ompi_blcr_context.1850
<br>
-rw-r--r--  1 sharon shc-support      33 2008-04-29 10:49 snapshot_meta.data
<br>
-bash-2.05b$ pwd
<br>
<p><p>The file system getting the checkpoints is local. I've tried /scratch 
<br>
and others as well.
<br>
<p>I can checkpoint some codes (like xhpl) just fine across 8 mpi tasks ( t 
<br>
nodes), dumping 254M total. Thus, the very long/stuck checkpointing 
<br>
seems rather application dependent.
<br>
<p>Here's how I configured openmpi
<br>
<p>./configure --prefix=/nfs/ds01/support/sharon/openmpi-1.3a1r18241 
<br>
--enable-mpi-threads --enable-ft-thread --with-ft=cr --enable-shared 
<br>
--enable-mpi-threads=posix --enable-libgcj-multifile 
<br>
--enable-languages=c,c++,objc,java,f95,ada --enable-java-awt=gtk 
<br>
--with-mvapi=/usr/mellanox --with-blcr=/opt/blcr
<br>
<p><p><p>Thanks for any further insights you may have.
<br>
Sharon
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5568.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Previous message:</strong> <a href="5566.php">Sharon Brunett: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>In reply to:</strong> <a href="5564.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5568.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
<li><strong>Reply:</strong> <a href="5568.php">Josh Hursey: "Re: [OMPI users] openmpi-1.3a1r18241  ompi-restart issue"</a>
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
