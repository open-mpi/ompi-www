<?
$subject_val = "Re: [OMPI devel] PML/ob1 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 08:05:30 2009" -->
<!-- isoreceived="20090219130530" -->
<!-- sent="Thu, 19 Feb 2009 08:05:24 -0500" -->
<!-- isosent="20090219130524" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML/ob1 problem" -->
<!-- id="CDC4AE6D-B57D-4D4A-9CEE-E7A03812F848_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b20b52800902102201o15b115d0k3e85ff04de24fb99_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] PML/ob1 problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-19 08:05:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>In reply to:</strong> <a href="5395.php">Mike Dubman: "[OMPI devel] PML/ob1 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5548.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5548.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George -- any thoughts on this one?
<br>
<p>On Feb 11, 2009, at 1:01 AM, Mike Dubman wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm running some experimental tcp btl which implements rdma GET  
</span><br>
<span class="quotelev1">&gt; method and advertises it in its flags of the btl API.
</span><br>
<span class="quotelev1">&gt; The btl`s send() method returns rc=1 to select fast path for PML.  
</span><br>
<span class="quotelev1">&gt; (this optimization was added in revision 18551 in v1.3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems that in PML/ob1, mca_pml_ob1_send_request_start_rdma()  
</span><br>
<span class="quotelev1">&gt; function does not treat right such combination (btl GET + fastpath  
</span><br>
<span class="quotelev1">&gt; rc&gt;0) and going into deadlock, i.e.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ pml_ob1_sendreq.c +670
</span><br>
<span class="quotelev1">&gt; At this line, sendreq-&gt;req_state is 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +++ pml_ob1_sendreq.c +800
</span><br>
<span class="quotelev1">&gt; At this line, if btl has GET method and btl`s send() returned  
</span><br>
<span class="quotelev1">&gt; fastpath hint - the call to mca_pml_ob1_rndv_completion_request()  
</span><br>
<span class="quotelev1">&gt; will decrement sendreq-&gt;req_state by one, leaving it to -1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This value of -1 will keep send_request_pml_complete_check() from  
</span><br>
<span class="quotelev1">&gt; completing request on PML level.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The PML logic (in mca_pml_ob1_send_request_start_rdma) for PUT  
</span><br>
<span class="quotelev1">&gt; operation initializes req_state to &quot;2&quot; in pml_ob1_sendreq.c +791,  
</span><br>
<span class="quotelev1">&gt; but leaves req_state to 0 for GET operations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please suggest.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mike.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5475.php">Ralph Castain: "Re: [OMPI devel] workspace management question"</a>
<li><strong>Previous message:</strong> <a href="5473.php">Jeff Squyres: "Re: [OMPI devel] ompi v1.3 compilation problem on ia64/gcc/rhel4.7"</a>
<li><strong>In reply to:</strong> <a href="5395.php">Mike Dubman: "[OMPI devel] PML/ob1 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5548.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/03/5548.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
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
