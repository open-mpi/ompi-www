<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 11 06:00:49 2007" -->
<!-- isoreceived="20071011100049" -->
<!-- sent="Thu, 11 Oct 2007 12:01:39 +0200" -->
<!-- isosent="20071011100139" -->
<!-- name="Torsten Hoefler" -->
<!-- email="htor_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Tuning Openmpi with IB Interconnect" -->
<!-- id="20071011100139.GA20899_at_ringo.informatik.tu-chemnitz.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Tuning Openmpi with IB Interconnect" -->
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
<strong>From:</strong> Torsten Hoefler (<em>htor_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-11 06:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4198.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Previous message:</strong> <a href="4196.php">Neeraj Chourasia: "[OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Maybe in reply to:</strong> <a href="4196.php">Neeraj Chourasia: "[OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4199.php">Matteo Cicuttin: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Neeraj,
<br>
<span class="quotelev1">&gt;        Could anyone tell me the important tuning parameters in openmpi with
</span><br>
<span class="quotelev1">&gt;    IB interconnect? I tried setting eager_rdma, min_rdma_size,
</span><br>
<span class="quotelev1">&gt;    mpi_leave_pinned parameters from the mpirun command line on 38 nodes
</span><br>
<span class="quotelev1">&gt;    cluster (38*2 processors) but in vain. I found simple mpirun with no mca
</span><br>
<span class="quotelev1">&gt;    parameters performing better. I conducted test on P2P send/receive with
</span><br>
<span class="quotelev1">&gt;    data size of 8MB.
</span><br>
The performance of the BTL with different parameters depends heavily on
<br>
the code that you run. E.g., leave_pinned works very well with many
<br>
microbenchmarks (e.g., bandwidth/overlap-wise) but may not perform well
<br>
with real applications that use different memory regions. It's pretty
<br>
much the same with the other parameters. The default values are
<br>
considered best for many applications. Can you provide us any details
<br>
about the code you're runnning to test performance? 
<br>
<p><span class="quotelev1">&gt;        Similarly i patched HPL linpack code with libnbc(non blocking
</span><br>
<span class="quotelev1">&gt;    collectives) and found no performance benefits. I went through its patch
</span><br>
<span class="quotelev1">&gt;    and found that, its probably not overlapping computation with
</span><br>
<span class="quotelev1">&gt;    communication.
</span><br>
Ah, so there are two things. LibNBC provides overlap, most overlap is
<br>
achieved if memory regions are reused and leave_pinned is activated. But
<br>
again, this is highly application-dependent. However, the patch for the
<br>
Linpack code (I guess you refer to the patch from the LibNBC webpage
<br>
[1]) is in experimental stage (as the website says) and is not properly
<br>
tested for performance benefit. The original HPL provides something like
<br>
a broadcast start and broadcast end phase. I just replaced them with
<br>
non-blocking calls to NBC_Ibcast() and did not find the time to do any
<br>
performance/code analysis yet. Any input by HPL experts is appreciated!
<br>
<p>Best,
<br>
&nbsp;&nbsp;Torsten
<br>
<p>[1]: <a href="http://www.unixer.de/research/nbcoll/hpl/">http://www.unixer.de/research/nbcoll/hpl/</a>
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
&quot;Software Engineering is that part of Computer Science which is too
difficult for the Computer Scientist.&quot; ~ F. L. Bauer
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4198.php">Jeff Squyres: "Re: [OMPI users] OpenMPI and torque/maui -&gt; crashing on MPI_Send()"</a>
<li><strong>Previous message:</strong> <a href="4196.php">Neeraj Chourasia: "[OMPI users] Tuning Openmpi with IB Interconnect"</a>
<li><strong>Maybe in reply to:</strong> <a href="4196.php">Neeraj Chourasia: "[OMPI users] Tuning Openmpi with IB Interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4199.php">Matteo Cicuttin: "Re: [OMPI users] Tuning Openmpi with IB Interconnect"</a>
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
