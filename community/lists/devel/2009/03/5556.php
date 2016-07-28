<?
$subject_val = "Re: [OMPI devel] PML/ob1 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar  3 10:47:57 2009" -->
<!-- isoreceived="20090303154757" -->
<!-- sent="Tue, 3 Mar 2009 17:47:52 +0200" -->
<!-- isosent="20090303154752" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lenny.verkhovsky_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PML/ob1 problem" -->
<!-- id="453d39990903030747t67c1142ah353adb47b644a922_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7BB61B70-DB5C-4D14-8F44-E37B321DBE83_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-03-03 10:47:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5557.php">Jeff Squyres: "[OMPI devel] Writeup of new release methodology"</a>
<li><strong>Previous message:</strong> <a href="5555.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
<li><strong>In reply to:</strong> <a href="5553.php">George Bosilca: "Re: [OMPI devel] PML/ob1 problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sorry, missed this commit.
<br>
Thanks, George,
<br>
<p>On 3/3/09, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Which solution seems to be working ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This bug was fixed a while ago in the trunk
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.open-mpi.org/trac/ompi/changeset/20591">https://svn.open-mpi.org/trac/ompi/changeset/20591</a>) and in
</span><br>
<span class="quotelev1">&gt; the 1.3 branch. It even made it in the 1.3.2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Mar 3, 2009, at 05:01 , Lenny Verkhovsky wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Seems to be working.
</span><br>
<span class="quotelev2">&gt; &gt; George, can you commit it, pls.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Lenny.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, Feb 19, 2009 at 3:05 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; George -- any thoughts on this one?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Feb 11, 2009, at 1:01 AM, Mike Dubman wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hello guys,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I'm running some experimental tcp btl which implements rdma GET method
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; advertises it in its flags of the btl API.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The btl`s send() method returns rc=1 to select fast path for PML.
</span><br>
<span class="quotelev1">&gt; (this
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; optimization was added in revision 18551 in v1.3)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; It seems that in PML/ob1,
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_send_request_start_rdma() function
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; does not treat right such combination (btl GET + fastpath rc&gt;0) and
</span><br>
<span class="quotelev1">&gt; going
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; into deadlock, i.e.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; +++ pml_ob1_sendreq.c +670
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; At this line, sendreq-&gt;req_state is 0
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; +++ pml_ob1_sendreq.c +800
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; At this line, if btl has GET method and btl`s send() returned fastpath
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; hint - the call to
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_rndv_completion_request() will decrement
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; sendreq-&gt;req_state by one, leaving it to -1.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; This value of -1 will keep
</span><br>
<span class="quotelev1">&gt; send_request_pml_complete_check() from
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; completing request on PML level.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The PML logic (in
</span><br>
<span class="quotelev1">&gt; mca_pml_ob1_send_request_start_rdma) for PUT operation
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; initializes req_state to &quot;2&quot; in pml_ob1_sendreq.c +791, but leaves
</span><br>
<span class="quotelev1">&gt; req_state
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; to 0 for GET operations.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Please suggest.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Mike.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt;  devel mailing list
</span><br>
<span class="quotelev1">&gt;  devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5557.php">Jeff Squyres: "[OMPI devel] Writeup of new release methodology"</a>
<li><strong>Previous message:</strong> <a href="5555.php">Jeff Squyres: "Re: [OMPI devel] [PATCH 3/4] opal-ps: Use the return value from asprintf as the header length."</a>
<li><strong>In reply to:</strong> <a href="5553.php">George Bosilca: "Re: [OMPI devel] PML/ob1 problem"</a>
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
