<?
$subject_val = "Re: [OMPI devel] PML/ob1 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 05:01:15 2009" -->
<!-- isoreceived="20090303100115" -->
<!-- sent="Tue, 3 Mar 2009 12:01:09 +0200" -->
<!-- isosent="20090303100109" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML/ob1 problem" -->
<!-- id="453d39990903030201i3a487766m16427ce2af28783b_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CDC4AE6D-B57D-4D4A-9CEE-E7A03812F848_at_cisco.com" -->
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
<strong>From:</strong> Lenny Verkhovsky (<em>lenny.verkhovsky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-03 05:01:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5549.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5547.php">Jie Cai: "[OMPI devel] How to configure Open MPI on multi-port IB HCA cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5474.php">Jeff Squyres: "Re: [OMPI devel] PML/ob1 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5553.php">George Bosilca: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Reply:</strong> <a href="5553.php">George Bosilca: "Re: [OMPI devel] PML/ob1 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Seems to be working.
<br>
George, can you commit it, pls.
<br>
<p>Thanks
<br>
Lenny.
<br>
<p><p>On Thu, Feb 19, 2009 at 3:05 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; George -- any thoughts on this one?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 11, 2009, at 1:01 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello guys,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm running some experimental tcp btl which implements rdma GET method and
</span><br>
<span class="quotelev2">&gt;&gt; advertises it in its flags of the btl API.
</span><br>
<span class="quotelev2">&gt;&gt; The btl`s send() method returns rc=1 to select fast path for PML. (this
</span><br>
<span class="quotelev2">&gt;&gt; optimization was added in revision 18551 in v1.3)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems that in PML/ob1, mca_pml_ob1_send_request_start_rdma() function
</span><br>
<span class="quotelev2">&gt;&gt; does not treat right such combination (btl GET + fastpath rc&gt;0) and going
</span><br>
<span class="quotelev2">&gt;&gt; into deadlock, i.e.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +++ pml_ob1_sendreq.c +670
</span><br>
<span class="quotelev2">&gt;&gt; At this line, sendreq-&gt;req_state is 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; +++ pml_ob1_sendreq.c +800
</span><br>
<span class="quotelev2">&gt;&gt; At this line, if btl has GET method and btl`s send() returned fastpath
</span><br>
<span class="quotelev2">&gt;&gt; hint - the call to mca_pml_ob1_rndv_completion_request() will decrement
</span><br>
<span class="quotelev2">&gt;&gt; sendreq-&gt;req_state by one, leaving it to -1.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This value of -1 will keep send_request_pml_complete_check() from
</span><br>
<span class="quotelev2">&gt;&gt; completing request on PML level.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The PML logic (in mca_pml_ob1_send_request_start_rdma) for PUT operation
</span><br>
<span class="quotelev2">&gt;&gt; initializes req_state to &quot;2&quot; in pml_ob1_sendreq.c +791, but leaves req_state
</span><br>
<span class="quotelev2">&gt;&gt; to 0 for GET operations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please suggest.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mike.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5549.php">Terry Dontje: "Re: [OMPI devel] calling sendi earlier in the PML"</a>
<li><strong>Previous message:</strong> <a href="5547.php">Jie Cai: "[OMPI devel] How to configure Open MPI on multi-port IB HCA cluster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/02/5474.php">Jeff Squyres: "Re: [OMPI devel] PML/ob1 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5553.php">George Bosilca: "Re: [OMPI devel] PML/ob1 problem"</a>
<li><strong>Reply:</strong> <a href="5553.php">George Bosilca: "Re: [OMPI devel] PML/ob1 problem"</a>
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
