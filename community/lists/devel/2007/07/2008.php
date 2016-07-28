<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 26 09:29:46 2007" -->
<!-- isoreceived="20070726132946" -->
<!-- sent="Thu, 26 Jul 2007 16:29:40 +0300" -->
<!-- isosent="20070726132940" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] openib credits problem" -->
<!-- id="20070726132940.GA4434_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5FA8BEAE-BEEA-42E5-BBE9-5E792A6761F6_at_cisco.com" -->
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
<strong>Date:</strong> 2007-07-26 09:29:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2007.php">Jeff Squyres: "[OMPI devel] openib credits problem"</a>
<li><strong>In reply to:</strong> <a href="2007.php">Jeff Squyres: "[OMPI devel] openib credits problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2011.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>Reply:</strong> <a href="2011.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 26, 2007 at 09:12:26AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; I got a problem in MTT runs last night with the openib BTL w.r.t.  
</span><br>
<span class="quotelev1">&gt; credits:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...lots of IMB output...]
</span><br>
<span class="quotelev1">&gt;         #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]    
</span><br>
<span class="quotelev1">&gt; Mbytes/sec
</span><br>
<span class="quotelev1">&gt;              0         1000       367.66       371.58        
</span><br>
<span class="quotelev1">&gt; 369.34         0.00
</span><br>
<span class="quotelev1">&gt; IMB-MPI1: ./btl_openib_endpoint.h:261: Assertion `endpoint-&gt;qps 
</span><br>
<span class="quotelev1">&gt; [qp].u.pp_qp.rd_credits &lt; rd_num' failed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gleb -- you've been mucking around in here recently; did something  
</span><br>
<span class="quotelev1">&gt; you do cause this, perchance?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
This is definitely caused by something I did. I am not sure this assert
<br>
is valid though. I am looking into it.
<br>
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2009.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2007.php">Jeff Squyres: "[OMPI devel] openib credits problem"</a>
<li><strong>In reply to:</strong> <a href="2007.php">Jeff Squyres: "[OMPI devel] openib credits problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2011.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
<li><strong>Reply:</strong> <a href="2011.php">Gleb Natapov: "Re: [OMPI devel] openib credits problem"</a>
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
