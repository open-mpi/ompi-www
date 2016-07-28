<?
$subject_val = "Re: [OMPI devel] ob1 and req-&gt;req_state";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 23 17:53:44 2008" -->
<!-- isoreceived="20080623215344" -->
<!-- sent="Mon, 23 Jun 2008 17:53:35 -0400" -->
<!-- isosent="20080623215335" -->
<!-- name="Shipman, Galen M." -->
<!-- email="gshipman_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ob1 and req-&amp;gt;req_state" -->
<!-- id="1D6DEB47-DEB7-4040-8AA7-4DD60DDCBEFF_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9B33E2F8-7B57-4F0A-8A38-BE52BCF287F1_at_cisco.com" -->
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
<strong>Date:</strong> 2008-06-23 17:53:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4219.php">Jeff Squyres: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>In reply to:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4220.php">Rainer Keller: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 23, 2008, at 5:51 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Ah -- I see -- we have 2 different fields with the same name (just  
</span><br>
<span class="quotelev1">&gt; different places within the struct hierarchy) with different  
</span><br>
<span class="quotelev1">&gt; meanings.  That was a good idea.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
exactly
<br>
<p><span class="quotelev1">&gt; Thanks; that actually helps understand things quite a bit.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 23, 2008, at 5:45 PM, Shipman, Galen M. wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Oh, I see, you are confusing the req_state on the OMPI request  
</span><br>
<span class="quotelev2">&gt;&gt; with the req_state on the PML request.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The ompi request state is for persistent requests, the PML request  
</span><br>
<span class="quotelev2">&gt;&gt; state is not and does not use that enum.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - Galen
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 23, 2008, at 5:18 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 23, 2008, at 4:43 PM, Shipman, Galen M. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We use req_state currently to track that we receive both RNDV  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; completion and RNDV ack prior to freeing the request..
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Does that mean you're not using the enum values, but rather just  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to indicate that the value is &gt;= 0?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="4219.php">Jeff Squyres: "Re: [OMPI devel] PML selection logic"</a>
<li><strong>Previous message:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<li><strong>In reply to:</strong> <a href="4217.php">Jeff Squyres: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4220.php">Rainer Keller: "Re: [OMPI devel] ob1 and req-&gt;req_state"</a>
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
