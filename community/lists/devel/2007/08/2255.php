<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 29 09:57:46 2007" -->
<!-- isoreceived="20070829135746" -->
<!-- sent="Wed, 29 Aug 2007 09:58:46 -0400" -->
<!-- isosent="20070829135846" -->
<!-- name="Terry D. Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SM BTL hang issue" -->
<!-- id="46D57B96.3010901_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070829134807.GD25167_at_minantech.com" -->
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
<strong>From:</strong> Terry D. Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-29 09:58:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2256.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2256.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Trunk.
<br>
<p>--td
<br>
Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt;Is this trunk or 1.2?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;On Wed, Aug 29, 2007 at 09:40:30AM -0400, Terry D. Dontje wrote:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I have a program that does a simple bucket brigade of sends and receives 
</span><br>
<span class="quotelev2">&gt;&gt;where rank 0 is the start and repeatedly sends to rank 1 until a certain 
</span><br>
<span class="quotelev2">&gt;&gt;amount of time has passed and then it sends and all done packet.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Running this under np=2 always works.  However, when I run with greater 
</span><br>
<span class="quotelev2">&gt;&gt;than 2 using only the SM btl the program usually hangs and one of the 
</span><br>
<span class="quotelev2">&gt;&gt;processes has a long stack that has a lot of the following 3 calls in it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [25] opal_progress(), line 187 in &quot;opal_progress.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  [26] mca_btl_sm_component_progress(), line 397 in &quot;btl_sm_component.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;  [27] mca_bml_r2_progress(), line 110 in &quot;bml_r2.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;When stepping through the ompi_fifo_write_to_head routine it looks like 
</span><br>
<span class="quotelev2">&gt;&gt;the fifo has overflowed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;I am wondering if what is happening is rank 0 has sent a bunch of 
</span><br>
<span class="quotelev2">&gt;&gt;messages that have exhausted the
</span><br>
<span class="quotelev2">&gt;&gt;resources such that one of the middle ranks which is in the process of 
</span><br>
<span class="quotelev2">&gt;&gt;sending cannot send and therefore
</span><br>
<span class="quotelev2">&gt;&gt;never gets to the point of trying to receive the messages from rank 0?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Is the above a possible scenario or are messages periodically bled off 
</span><br>
<span class="quotelev2">&gt;&gt;the SM BTL's fifos?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;Note, I have seen np=3 pass sometimes and I can get it to pass reliably 
</span><br>
<span class="quotelev2">&gt;&gt;if I raise the shared memory space used by the BTL.   This is using the 
</span><br>
<span class="quotelev2">&gt;&gt;trunk.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;--td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;    
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;			Gleb.
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2256.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>Previous message:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<li><strong>In reply to:</strong> <a href="2254.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2256.php">Gleb Natapov: "Re: [OMPI devel] SM BTL hang issue"</a>
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
