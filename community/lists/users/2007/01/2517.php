<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 18:23:45 2007" -->
<!-- isoreceived="20070119232345" -->
<!-- sent="Fri, 19 Jan 2007 23:19:09 -0000" -->
<!-- isosent="20070119231909" -->
<!-- name="Arif Ali" -->
<!-- email="aali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]" -->
<!-- id="43185D89536AD545B065B7ECEA630065078C36_at_mailserver.ocf.co.uk" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070119183313.GA28812_at_minantech.com" -->
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
<strong>From:</strong> Arif Ali (<em>aali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 18:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2518.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Previous message:</strong> <a href="2516.php">Evan Smyth: "[OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>In reply to:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2520.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2520.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
-----Original Message-----
<br>
From: Gleb Natapov [mailto:glebn_at_[hidden]]
<br>
Sent: Fri 19/01/2007 18:33
<br>
To: Arif Ali
<br>
Cc: Open MPI Users; Galen Shipman; Brad Benton; Pavel Shamis; Russell Slack; Barry Evans
<br>
Subject: Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]
<br>
&nbsp;
<br>
On Fri, Jan 19, 2007 at 05:51:49PM +0000, Arif Ali wrote:
<br>
<span class="quotelev3">&gt; &gt;&gt;I tried the nightly snapshot of OpenMPI-1.2b4r13137, which failed  
</span><br>
<span class="quotelev3">&gt; &gt;&gt;miserably.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Can you describe what happened there?  Is it failing in a different way?
</span><br>
<span class="quotelev2">&gt; &gt;  
</span><br>
<span class="quotelev1">&gt; Here's the output
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Intel (R) MPI Benchmark Suite V2.3, MPI-1 part
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Date : Fri Jan 19 17:33:52 2007
</span><br>
<span class="quotelev1">&gt; # Machine : ppc64# System : Linux
</span><br>
<span class="quotelev1">&gt; # Release : 2.6.16.21-0.8-ppc64
</span><br>
<span class="quotelev1">&gt; # Version : #1 SMP Mon Jul 3 18:25:39 UTC 2006
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Minimum message length in bytes: 0
</span><br>
<span class="quotelev1">&gt; # Maximum message length in bytes: 4194304
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype : MPI_BYTE
</span><br>
<span class="quotelev1">&gt; # MPI_Datatype for reductions : MPI_FLOAT
</span><br>
<span class="quotelev1">&gt; # MPI_Op : MPI_SUM
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # List of Benchmarks to run:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # PingPong
</span><br>
<span class="quotelev1">&gt; # PingPing
</span><br>
<span class="quotelev1">&gt; # Sendrecv
</span><br>
<span class="quotelev1">&gt; # Exchange
</span><br>
<span class="quotelev1">&gt; # Allreduce
</span><br>
<span class="quotelev1">&gt; # Reduce
</span><br>
<span class="quotelev1">&gt; # Reduce_scatter
</span><br>
<span class="quotelev1">&gt; # Allgather
</span><br>
<span class="quotelev1">&gt; # Allgatherv
</span><br>
<span class="quotelev1">&gt; # Alltoall
</span><br>
<span class="quotelev1">&gt; # Bcast
</span><br>
<span class="quotelev1">&gt; # Barrier
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; # Benchmarking PingPong
</span><br>
<span class="quotelev1">&gt; # #processes = 2
</span><br>
<span class="quotelev1">&gt; # ( 58 additional processes waiting in MPI_Barrier)
</span><br>
<span class="quotelev1">&gt; #---------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #bytes #repetitions t[usec] Mbytes/sec
</span><br>
<span class="quotelev1">&gt; 0 1000 1.76 0.00
</span><br>
<span class="quotelev1">&gt; 1 1000 1.88 0.51
</span><br>
<span class="quotelev1">&gt; 2 1000 1.89 1.01
</span><br>
<span class="quotelev1">&gt; 4 1000 1.91 2.00
</span><br>
<span class="quotelev1">&gt; 8 1000 1.88 4.05
</span><br>
<span class="quotelev1">&gt; 16 1000 2.02 7.55
</span><br>
<span class="quotelev1">&gt; 32 1000 2.05 14.88
</span><br>
<span class="quotelev1">&gt; [0,1,4][btl_openib_component.c:1153:btl_openib_component_progress] from 
</span><br>
<span class="quotelev1">&gt; node03 to: node02 error polling HP CQ with status REMOTE ACCESS ERROR 
</span><br>
<span class="quotelev1">&gt; status number 10 for wr_id 268969528 opcode 128
</span><br>
<span class="quotelev1">&gt; [0,1,28][btl_openib_component.c:1153:btl_openib_component_progress] from 
</span><br>
<span class="quotelev1">&gt; node09 to: node02 error polling HP CQ with status REMOTE ACCESS ERROR 
</span><br>
<span class="quotelev1">&gt; status number 10 for wr_id 268906808 opcode 128
</span><br>
<span class="quotelev1">&gt; [0,1,58][btl_openib_component.c:1153:btl_openib_component_progress] from 
</span><br>
<span class="quotelev1">&gt; node16 to: node02 error polling HP CQ with status REMOTE ACCESS ERROR 
</span><br>
<span class="quotelev1">&gt; status number 10 for wr_id 268919352 opcode 256614836
</span><br>
<span class="quotelev1">&gt; [0,1,0][btl_openib_component.c:1153:btl_openib_component_progress] from 
</span><br>
<span class="quotelev1">&gt; node02 to: node03 error polling HP CQ with status WORK REQUEST FLUSHED 
</span><br>
<span class="quotelev1">&gt; ERROR status number 5 for wr_id 276070200 opcode 0
</span><br>
<span class="quotelev1">&gt; [0,1,59][btl_openib_component.c:1153:btl_openib_component_progress] from 
</span><br>
<span class="quotelev1">&gt; node16 to: node02 error polling HP CQ with status REMOTE ACCESS ERROR 
</span><br>
<span class="quotelev1">&gt; status number 10 for wr_id 268919352 opcode 256614836
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 0 on node node02 exited on 
</span><br>
<span class="quotelev1">&gt; signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 55 additional processes aborted (not shown)
</span><br>
does this happen with btl_openib_flags=1? Does this also happen without
<br>
this setting. This doesn't happen with OpenMPI-1.2b3 right?
<br>
<p><p>That's Correct, I tried all the flags that was suggested, and a few more, which I listed in previous mails
<br>
<p>Yes, correct, this doesn't happen with 1.2b3
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2517/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2518.php">Robert Bicknell: "Re: [OMPI users] Slurm and Openmpi"</a>
<li><strong>Previous message:</strong> <a href="2516.php">Evan Smyth: "[OMPI users] openmpi equivalent to mpich serv_p4 daemon"</a>
<li><strong>In reply to:</strong> <a href="2513.php">Gleb Natapov: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2520.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2520.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
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
