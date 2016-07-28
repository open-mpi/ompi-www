<?
$subject_val = "Re: [OMPI devel] PML/ob1 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 07:47:53 2009" -->
<!-- isoreceived="20090303124753" -->
<!-- sent="Tue, 3 Mar 2009 07:47:47 -0500" -->
<!-- isosent="20090303124747" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML/ob1 problem" -->
<!-- id="7BB61B70-DB5C-4D14-8F44-E37B321DBE83_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="453d39990903030201i3a487766m16427ce2af28783b_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 07:47:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5554.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>Previous message:</strong> <a href="5552.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>In reply to:</strong> <a href="5548.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5556.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Reply:</strong> <a href="5556.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Which solution seems to be working ?
<br>
<p>This bug was fixed a while ago in the trunk (<a href="https://svn.open-mpi.org/trac/ompi/changeset/20591">https://svn.open-mpi.org/trac/ompi/changeset/20591</a> 
<br>
) and in the 1.3 branch. It even made it in the 1.3.2.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 3, 2009, at 05:01 , Lenny Verkhovsky wrote:
<br>
<p><span class="quotelev1">&gt; Seems to be working.
</span><br>
<span class="quotelev1">&gt; George, can you commit it, pls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Lenny.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Feb 19, 2009 at 3:05 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; George -- any thoughts on this one?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 11, 2009, at 1:01 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello guys,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm running some experimental tcp btl which implements rdma GET  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; method and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; advertises it in its flags of the btl API.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The btl`s send() method returns rc=1 to select fast path for PML.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; optimization was added in revision 18551 in v1.3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It seems that in PML/ob1, mca_pml_ob1_send_request_start_rdma()  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not treat right such combination (btl GET + fastpath rc&gt;0)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and going
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into deadlock, i.e.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ pml_ob1_sendreq.c +670
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At this line, sendreq-&gt;req_state is 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; +++ pml_ob1_sendreq.c +800
</span><br>
<span class="quotelev3">&gt;&gt;&gt; At this line, if btl has GET method and btl`s send() returned  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fastpath
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hint - the call to mca_pml_ob1_rndv_completion_request() will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; decrement
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sendreq-&gt;req_state by one, leaving it to -1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This value of -1 will keep send_request_pml_complete_check() from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; completing request on PML level.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The PML logic (in mca_pml_ob1_send_request_start_rdma) for PUT  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operation
</span><br>
<span class="quotelev3">&gt;&gt;&gt; initializes req_state to &quot;2&quot; in pml_ob1_sendreq.c +791, but leaves  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; req_state
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to 0 for GET operations.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please suggest.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Mike.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="5554.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>Previous message:</strong> <a href="5552.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 1/4] opal-ps: fix memory leak"</a>
<li><strong>In reply to:</strong> <a href="5548.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5556.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Reply:</strong> <a href="5556.php">Lenny Verkhovsky: "Re: [OMPI devel] PML/ob1 problem"</a>
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
