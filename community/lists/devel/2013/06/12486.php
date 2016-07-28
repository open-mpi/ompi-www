<?
$subject_val = "Re: [OMPI devel] RGET issue when send is less than receive";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 13:21:51 2013" -->
<!-- isoreceived="20130621172151" -->
<!-- sent="Fri, 21 Jun 2013 11:21:45 -0600" -->
<!-- isosent="20130621172145" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RGET issue when send is less than receive" -->
<!-- id="20130621172145.GF3886_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F6979A6_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RGET issue when send is less than receive<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 13:21:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12487.php">Thomas Jahns: "[OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<li><strong>Previous message:</strong> <a href="12485.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>In reply to:</strong> <a href="12485.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think so. The Mellanox change that caused this issue should not be in 1.6.
<br>
<p>-Nathan
<br>
<p>On Fri, Jun 21, 2013 at 05:18:16PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; Does this need to go to v1.6?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 21, 2013, at 11:59 AM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Found my original fix (still don't know why I never pushed it) and I think George is correct. This should in both the single and multiple get cases.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -Nathan
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jun 21, 2013 at 05:52:28PM +0200, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The amount of bytes received is atomically updated on the completion callback, and the completion test is clearly spelled-out int the recv_request_pml_complete_check function (of course minus the lock part). Rolf I think your patch is correct.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That being said req_bytes_expected is a special value, one that should only be used to check from truncation. Otherwise, req_bytes_packed is the value we should compare against.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  George.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Jun 21, 2013, at 17:40 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I thought I fixed this problem awhile back (though looking at the code its possible I never committed the fix). I will have to look through my local repository and see what happened to that fix. Your fix might not work correctly since a RGET can be broken up into multiple get operations. It may work, I would just need to test it to make sure.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Fri, Jun 21, 2013 at 08:25:29AM -0700, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I ran into a hang in a test in which the sender sends less data than the receiver is expecting.  For example, the following shows the receiver expecting twice what the sender is sending.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Rank 0:  MPI_Send(buf, BUFSIZE, MPI_INT, 1, 99, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Rank 1: MPI_Recv(buf, BUFSIZE*2,  MPI_INT, 0, 99, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This is also reproducible using one of the intel tests and adjusting the eager value for the openib BTL.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ?  mpirun -np 2 -host frick,frack -mca btl_openib_eager_limit 56 MPI_Send_overtake_c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; In most cases, this works just fine.  However, when the PML protocol used is the RGET protocol, the test hangs.   Below is a proposed fix for this issue.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I believe we want to be checking against req_bytes_packed rather than req_bytes_expected as req_bytes_expected is what the user originally told us.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Otherwise, with the current code, we never send a FIN message back to the sender.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [rvandevaart_at_sm065 ompi-trunk]$ svn diff ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Index: ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; --- ompi/mca/pml/ob1/pml_ob1_recvreq.c        (revision 28633)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +++ ompi/mca/pml/ob1/pml_ob1_recvreq.c     (working copy)
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; @@ -335,7 +335,7 @@
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    /* is receive request complete */
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;    OPAL_THREAD_ADD_SIZE_T(&amp;recvreq-&gt;req_bytes_received, frag-&gt;rdma_length);
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -    if (recvreq-&gt;req_bytes_expected &lt;= recvreq-&gt;req_bytes_received) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; +    if (recvreq-&gt;req_recv.req_bytes_packed &lt;= recvreq-&gt;req_bytes_received) {
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;        mca_pml_ob1_send_fin(recvreq-&gt;req_recv.req_base.req_proc,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                              bml_btl,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;                                     frag-&gt;rdma_hdr.hdr_rget.hdr_des,
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12487.php">Thomas Jahns: "[OMPI devel] Problem when using MPI_Type_create_struct + MPI_Type_dup"</a>
<li><strong>Previous message:</strong> <a href="12485.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>In reply to:</strong> <a href="12485.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RGET issue when send is less than receive"</a>
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
