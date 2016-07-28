<?
$subject_val = "Re: [OMPI devel] ob1 and req-&gt;req_state";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 17:45:28 2008" -->
<!-- isoreceived="20080623214528" -->
<!-- sent="Mon, 23 Jun 2008 17:45:16 -0400" -->
<!-- isosent="20080623214516" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ob1 and req-&amp;gt;req_state" -->
<!-- id="EEDFF66D-4A14-4900-A105-363E1E910DAB_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDA1384E-6BF8-4825-A32F-DBE338A39A4C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ob1 and req-&gt;req_state<br>
<strong>From:</strong> Shipman, Galen M. (<em>gshipman_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-23 17:45:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>In reply to:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4220.php">Rainer Keller: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oh, I see, you are confusing the req_state on the OMPI request with  
<br>
the req_state on the PML request.
<br>
<p>The ompi request state is for persistent requests, the PML request  
<br>
state is not and does not use that enum.
<br>
<p>- Galen
<br>
<p><p>On Jun 23, 2008, at 5:18 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 23, 2008, at 4:43 PM, Shipman, Galen M. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We use req_state currently to track that we receive both RNDV  
</span><br>
<span class="quotelev2">&gt;&gt; completion and RNDV ack prior to freeing the request..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does that mean you're not using the enum values, but rather just to  
</span><br>
<span class="quotelev1">&gt; indicate that the value is &gt;= 0?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Previous message:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>In reply to:</strong> <a href="4215.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>Reply:</strong> <a href="4220.php">Rainer Keller: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
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
