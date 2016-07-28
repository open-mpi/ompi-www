<?
$subject_val = "Re: [OMPI devel] sm BTL flow management";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 23 23:58:59 2009" -->
<!-- isoreceived="20090624035859" -->
<!-- sent="Tue, 23 Jun 2009 21:58:45 -0600" -->
<!-- isosent="20090624035845" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] sm BTL flow management" -->
<!-- id="0C53D8AA-A524-46ED-A695-7FD87FF72547_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A4183FB.20507_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] sm BTL flow management<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-23 23:58:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6318.php">neeraj_at_[hidden]: "Re: [OMPI devel] OMPI performance competitiveness"</a>
<li><strong>Previous message:</strong> <a href="6316.php">Eugene Loh: "[OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6316.php">Eugene Loh: "[OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure I can address that broader issue, but would you like us to  
<br>
acid test your fix?
<br>
<p>Be happy to put it through the wringer... :-)
<br>
<p>Ralph
<br>
<p>On Jun 23, 2009, at 7:40 PM, Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; I have a fix for ticket 1944 working, but the broader problem is  
</span><br>
<span class="quotelev1">&gt; unpleasant.  E.g., let's say we have zillions of uncountered Bcasts  
</span><br>
<span class="quotelev1">&gt; or something.  Say, the root is repeatedly emitting sends, but never  
</span><br>
<span class="quotelev1">&gt; polling its in-coming FIFO.  Return fragments will be accumulating,  
</span><br>
<span class="quotelev1">&gt; the FIFO will be congested, pending-send queues on peer processes  
</span><br>
<span class="quotelev1">&gt; will be growing, etc.  The code now handles this (by growing the  
</span><br>
<span class="quotelev1">&gt; pending-send queues and eventually draining them, pre-1.3.2 we would  
</span><br>
<span class="quotelev1">&gt; also have handled this by growing the FIFO and using up the shared  
</span><br>
<span class="quotelev1">&gt; memory), but the whole thing is disturbing.  E.g., queues might  
</span><br>
<span class="quotelev1">&gt; drain only when the root reaches MPI_Finalize.  (Okay, unclear to me  
</span><br>
<span class="quotelev1">&gt; what sort of real application would have communications only from  
</span><br>
<span class="quotelev1">&gt; one process going out.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, is this (one-way communications, e.g., repeated Bcasts)  
</span><br>
<span class="quotelev1">&gt; pathological and not worth worrying about.  Or, are other solutions  
</span><br>
<span class="quotelev1">&gt; worth considering?  E.g., I'd like to have a sending process run  
</span><br>
<span class="quotelev1">&gt; mca_btl_sm_component_progress occasionally, even if it is  
</span><br>
<span class="quotelev1">&gt; successfully completing its sends.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6318.php">neeraj_at_[hidden]: "Re: [OMPI devel] OMPI performance competitiveness"</a>
<li><strong>Previous message:</strong> <a href="6316.php">Eugene Loh: "[OMPI devel] sm BTL flow management"</a>
<li><strong>In reply to:</strong> <a href="6316.php">Eugene Loh: "[OMPI devel] sm BTL flow management"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
<li><strong>Reply:</strong> <a href="6324.php">Bryan Lally: "Re: [OMPI devel] sm BTL flow management"</a>
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
