<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jan 19 20:16:06 2007" -->
<!-- isoreceived="20070120011606" -->
<!-- sent="Fri, 19 Jan 2007 20:15:46 -0500" -->
<!-- isosent="20070120011546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]" -->
<!-- id="0EA861EF-1D3E-4A40-8A23-4F9810239518_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="43185D89536AD545B065B7ECEA630065078C36_at_mailserver.ocf.co.uk" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-19 20:15:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2521.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2519.php">Axel Schweiger: "[OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>In reply to:</strong> <a href="2517.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2523.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2523.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jan 19, 2007, at 6:19 PM, Arif Ali wrote:
<br>
<p><span class="quotelev2">&gt; &gt; [0,1,59][btl_openib_component.c: 
</span><br>
<span class="quotelev1">&gt; 1153:btl_openib_component_progress] from
</span><br>
<span class="quotelev2">&gt; &gt; node16 to: node02 error polling HP CQ with status REMOTE ACCESS  
</span><br>
<span class="quotelev1">&gt; ERROR
</span><br>
<span class="quotelev2">&gt; &gt; status number 10 for wr_id 268919352 opcode 256614836
</span><br>
<span class="quotelev2">&gt; &gt; mpirun noticed that job rank 0 with PID 0 on node node02 exited on
</span><br>
<span class="quotelev2">&gt; &gt; signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt; &gt; 55 additional processes aborted (not shown)
</span><br>
<span class="quotelev1">&gt; does this happen with btl_openib_flags=1? Does this also happen  
</span><br>
<span class="quotelev1">&gt; without
</span><br>
<span class="quotelev1">&gt; this setting. This doesn't happen with OpenMPI-1.2b3 right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's Correct, I tried all the flags that was suggested, and a few  
</span><br>
<span class="quotelev1">&gt; more, which I listed in previous mails
</span><br>
<p>I can parse your text either way, so forgive me for belaboring the  
<br>
point:
<br>
<p>- Does this happen with btl_openib_flags=1 on the nightly snapshot of  
<br>
OMPI v1.2?
<br>
- Does this happen without setting btl_openib_flags on the nightly  
<br>
snapshot of OMPI v1.2?
<br>
- What is the exact version of the nightly snapshot for OMPI v1.2  
<br>
that you are using?
<br>
<p><span class="quotelev1">&gt; Yes, correct, this doesn't happen with 1.2b3
</span><br>
<p>Good to know.
<br>
<p>Were you able to experiment with the various MCA parameters that I  
<br>
described in the other mail to see if such problems went away?   
<br>
(i.e., ensure that you're not running out of DMA-able memory)
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2521.php">eddie168: "Re: [OMPI users] Can't start more than one process in a node as normal user"</a>
<li><strong>Previous message:</strong> <a href="2519.php">Axel Schweiger: "[OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>In reply to:</strong> <a href="2517.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2523.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<li><strong>Reply:</strong> <a href="2523.php">Arif Ali: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
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
