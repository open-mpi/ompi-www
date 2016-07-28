<?
$subject_val = "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 15:32:33 2012" -->
<!-- isoreceived="20120201203233" -->
<!-- sent="Wed, 1 Feb 2012 15:32:29 -0500" -->
<!-- isosent="20120201203229" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / SLURM -&amp;gt; Send/Recv blocking" -->
<!-- id="D6D3CEE0-C747-4811-BB4D-1C6C2A856531_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1328026616.11998.YahooMailNeo_at_web161703.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 15:32:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18373.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18371.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18339.php">adrian sabou: "[OMPI users]  OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18373.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="18373.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Maybe reply:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 31, 2012, at 11:16 AM, adrian sabou wrote:
<br>
<p><span class="quotelev1">&gt; Like I said, a very simple program.
</span><br>
<span class="quotelev1">&gt; When launching this application with SLURM (using &quot;salloc -N2 mpirun ./&lt;my_app&gt;&quot;), it hangs at the barrier.
</span><br>
<p>Are you able to run the MPI example programs in examples/ ?
<br>
<p><span class="quotelev1">&gt; However, it passes the barrier if I launch it without SLURM (using &quot;mpirun -np 2 ./&lt;my_app&gt;&quot;). I first noticed this problem when my application hanged if I tried to send two successive messages from a process to another. Only the first MPI_Send would work. The second MPI_Send would block indefinitely. I was wondering whether any of you have encountered a similar problem, or may have an ideea as to what is causing the Send/Receive pair to block when using SLURM. The exact output in my console is as follows:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         salloc: Granted job allocation 1138
</span><br>
<span class="quotelev1">&gt;         Process 0 - Sending...
</span><br>
<span class="quotelev1">&gt;         Process 1 - Receiving...
</span><br>
<span class="quotelev1">&gt;         Process 1 - Received.
</span><br>
<span class="quotelev1">&gt;         Process 1 - Barrier reached.
</span><br>
<span class="quotelev1">&gt;         Process 0 - Sent.
</span><br>
<span class="quotelev1">&gt;         Process 0 - Barrier reached.
</span><br>
<span class="quotelev1">&gt;         (it just hangs here)
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am new to MPI programming and to OpenMPI and would greatly appreciate any help. My OpenMPI version is 1.4.4 (although I have also tried it on 1.5.4), my SLURM version is 0.3.3-1 (slurm-llnl 2.1.0-1),
</span><br>
<p>I'm not sure what SLURM version that is -- my &quot;srun --version&quot; shows 2.2.4.  0.3.3 would be pretty ancient, no?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18373.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18371.php">Ralph Castain: "Re: [OMPI users] Spawn_multiple with tight integration to SGE grid engine"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18339.php">adrian sabou: "[OMPI users]  OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18373.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="18373.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Maybe reply:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
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
