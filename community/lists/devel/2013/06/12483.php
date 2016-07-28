<?
$subject_val = "Re: [OMPI devel] RGET issue when send is less than receive";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 11:52:35 2013" -->
<!-- isoreceived="20130621155235" -->
<!-- sent="Fri, 21 Jun 2013 17:52:28 +0200" -->
<!-- isosent="20130621155228" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RGET issue when send is less than receive" -->
<!-- id="CF0473EE-D195-4268-A60D-708F72655FA0_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130621154009.GC3886_at_pantheralanlgov.local" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-21 11:52:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12484.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Previous message:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>In reply to:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12484.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Reply:</strong> <a href="12484.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The amount of bytes received is atomically updated on the completion callback, and the completion test is clearly spelled-out int the recv_request_pml_complete_check function (of course minus the lock part). Rolf I think your patch is correct.
<br>
<p>That being said req_bytes_expected is a special value, one that should only be used to check from truncation. Otherwise, req_bytes_packed is the value we should compare against.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jun 21, 2013, at 17:40 , Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I thought I fixed this problem awhile back (though looking at the code its possible I never committed the fix). I will have to look through my local repository and see what happened to that fix. Your fix might not work correctly since a RGET can be broken up into multiple get operations. It may work, I would just need to test it to make sure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jun 21, 2013 at 08:25:29AM -0700, Rolf vandeVaart wrote:
</span><br>
<span class="quotelev2">&gt;&gt; I ran into a hang in a test in which the sender sends less data than the receiver is expecting.  For example, the following shows the receiver expecting twice what the sender is sending.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rank 0:  MPI_Send(buf, BUFSIZE, MPI_INT, 1, 99, MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt; Rank 1: MPI_Recv(buf, BUFSIZE*2,  MPI_INT, 0, 99, MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is also reproducible using one of the intel tests and adjusting the eager value for the openib BTL.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ?  mpirun -np 2 -host frick,frack -mca btl_openib_eager_limit 56 MPI_Send_overtake_c
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In most cases, this works just fine.  However, when the PML protocol used is the RGET protocol, the test hangs.   Below is a proposed fix for this issue.
</span><br>
<span class="quotelev2">&gt;&gt; I believe we want to be checking against req_bytes_packed rather than req_bytes_expected as req_bytes_expected is what the user originally told us.
</span><br>
<span class="quotelev2">&gt;&gt; Otherwise, with the current code, we never send a FIN message back to the sender.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [rvandevaart_at_sm065 ompi-trunk]$ svn diff ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev2">&gt;&gt; Index: ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev2">&gt;&gt; ===================================================================
</span><br>
<span class="quotelev2">&gt;&gt; --- ompi/mca/pml/ob1/pml_ob1_recvreq.c        (revision 28633)
</span><br>
<span class="quotelev2">&gt;&gt; +++ ompi/mca/pml/ob1/pml_ob1_recvreq.c     (working copy)
</span><br>
<span class="quotelev2">&gt;&gt; @@ -335,7 +335,7 @@
</span><br>
<span class="quotelev2">&gt;&gt;     /* is receive request complete */
</span><br>
<span class="quotelev2">&gt;&gt;     OPAL_THREAD_ADD_SIZE_T(&amp;recvreq-&gt;req_bytes_received, frag-&gt;rdma_length);
</span><br>
<span class="quotelev2">&gt;&gt; -    if (recvreq-&gt;req_bytes_expected &lt;= recvreq-&gt;req_bytes_received) {
</span><br>
<span class="quotelev2">&gt;&gt; +    if (recvreq-&gt;req_recv.req_bytes_packed &lt;= recvreq-&gt;req_bytes_received) {
</span><br>
<span class="quotelev2">&gt;&gt;         mca_pml_ob1_send_fin(recvreq-&gt;req_recv.req_base.req_proc,
</span><br>
<span class="quotelev2">&gt;&gt;                               bml_btl,
</span><br>
<span class="quotelev2">&gt;&gt;                                      frag-&gt;rdma_hdr.hdr_rget.hdr_des,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev2">&gt;&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev2">&gt;&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev2">&gt;&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12484.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Previous message:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>In reply to:</strong> <a href="12482.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12484.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Reply:</strong> <a href="12484.php">Nathan Hjelm: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
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
