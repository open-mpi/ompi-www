<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 22 10:40:23 2007" -->
<!-- isoreceived="20070122154023" -->
<!-- sent="Mon, 22 Jan 2007 15:37:24 +0000" -->
<!-- isosent="20070122153724" -->
<!-- name="Arif Ali" -->
<!-- email="aali_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]" -->
<!-- id="1169480244.6128.4.camel_at_sahang" -->
<!-- inreplyto="0EA861EF-1D3E-4A40-8A23-4F9810239518_at_cisco.com" -->
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
<strong>Date:</strong> 2007-01-22 10:37:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2524.php">Axel Schweiger: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Previous message:</strong> <a href="2522.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>In reply to:</strong> <a href="2520.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2007-01-19 at 20:15 -0500, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jan 19, 2007, at 6:19 PM, Arif Ali wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [0,1,59][btl_openib_component.c: 
</span><br>
<span class="quotelev2">&gt; &gt; 1153:btl_openib_component_progress] from
</span><br>
<span class="quotelev3">&gt; &gt; &gt; node16 to: node02 error polling HP CQ with status REMOTE ACCESS  
</span><br>
<span class="quotelev2">&gt; &gt; ERROR
</span><br>
<span class="quotelev3">&gt; &gt; &gt; status number 10 for wr_id 268919352 opcode 256614836
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun noticed that job rank 0 with PID 0 on node node02 exited on
</span><br>
<span class="quotelev3">&gt; &gt; &gt; signal 15 (Terminated).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 55 additional processes aborted (not shown)
</span><br>
<span class="quotelev2">&gt; &gt; does this happen with btl_openib_flags=1? Does this also happen  
</span><br>
<span class="quotelev2">&gt; &gt; without
</span><br>
<span class="quotelev2">&gt; &gt; this setting. This doesn't happen with OpenMPI-1.2b3 right?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's Correct, I tried all the flags that was suggested, and a few  
</span><br>
<span class="quotelev2">&gt; &gt; more, which I listed in previous mails
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can parse your text either way, so forgive me for belaboring the  
</span><br>
<span class="quotelev1">&gt; point:
</span><br>
<p>Sorry for not being clear
<br>
<p><span class="quotelev1">&gt; - Does this happen with btl_openib_flags=1 on the nightly snapshot of  
</span><br>
<span class="quotelev1">&gt; OMPI v1.2?
</span><br>
<p>Yes
<br>
<p><span class="quotelev1">&gt; - Does this happen without setting btl_openib_flags on the nightly  
</span><br>
<span class="quotelev1">&gt; snapshot of OMPI v1.2?
</span><br>
<p>Yes
<br>
<p><span class="quotelev1">&gt; - What is the exact version of the nightly snapshot for OMPI v1.2  
</span><br>
<span class="quotelev1">&gt; that you are using?
</span><br>
<p>1.2b4r13137
<br>
<p><span class="quotelev2">&gt; &gt; Yes, correct, this doesn't happen with 1.2b3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Good to know.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Were you able to experiment with the various MCA parameters that I  
</span><br>
<span class="quotelev1">&gt; described in the other mail to see if such problems went away?   
</span><br>
<span class="quotelev1">&gt; (i.e., ensure that you're not running out of DMA-able memory)
</span><br>
<p>Not yet, I'll be doing these today, and will get back to you as soon as
<br>
I can
<br>
<p>regards,
<br>
Arif 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2524.php">Axel Schweiger: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>Previous message:</strong> <a href="2522.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_COMM: invalid communicator using POP 1.2"</a>
<li><strong>In reply to:</strong> <a href="2520.php">Jeff Squyres: "Re: [OMPI users] OpenMPI/OpenIB/IMB hangs[Scanned]"</a>
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
