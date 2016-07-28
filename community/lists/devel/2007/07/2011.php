<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 09:56:58 2007" -->
<!-- isoreceived="20070726135658" -->
<!-- sent="Thu, 26 Jul 2007 16:56:52 +0300" -->
<!-- isosent="20070726135652" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib credits problem" -->
<!-- id="20070726135652.GB4434_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20070726132940.GA4434_at_minantech.com" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-26 09:56:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Previous message:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 26, 2007 at 04:29:40PM +0300, Gleb Natapov wrote:
<br>
<span class="quotelev1">&gt; On Thu, Jul 26, 2007 at 09:12:26AM -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I got a problem in MTT runs last night with the openib BTL w.r.t.  
</span><br>
<span class="quotelev2">&gt; &gt; credits:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [...lots of IMB output...]
</span><br>
<span class="quotelev2">&gt; &gt;         #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]    
</span><br>
<span class="quotelev2">&gt; &gt; Mbytes/sec
</span><br>
<span class="quotelev2">&gt; &gt;              0         1000       367.66       371.58        
</span><br>
<span class="quotelev2">&gt; &gt; 369.34         0.00
</span><br>
<span class="quotelev2">&gt; &gt; IMB-MPI1: ./btl_openib_endpoint.h:261: Assertion `endpoint-&gt;qps 
</span><br>
<span class="quotelev2">&gt; &gt; [qp].u.pp_qp.rd_credits &lt; rd_num' failed.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Gleb -- you've been mucking around in here recently; did something  
</span><br>
<span class="quotelev2">&gt; &gt; you do cause this, perchance?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; This is definitely caused by something I did. I am not sure this assert
</span><br>
<span class="quotelev1">&gt; is valid though. I am looking into it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Assertion is valid. r15635 should fix this.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2012.php">Lisandro Dalcin: "Re: [OMPI devel] MPI_ALLOC_MEM warning when requesting 0 (zero) bytes"</a>
<li><strong>Previous message:</strong> <a href="2010.php">Ralph H Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2008.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
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
