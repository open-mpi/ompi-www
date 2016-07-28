<?
$subject_val = "Re: [OMPI devel] RGET issue when send is less than receive";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 21 11:40:14 2013" -->
<!-- isoreceived="20130621154014" -->
<!-- sent="Fri, 21 Jun 2013 09:40:09 -0600" -->
<!-- isosent="20130621154009" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RGET issue when send is less than receive" -->
<!-- id="20130621154009.GC3886_at_pantheralanlgov.local" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3AF945EBF4D3EC41AFE44EED9B0585F35E992B317C_at_HQMAIL02.nvidia.com" -->
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
<strong>Date:</strong> 2013-06-21 11:40:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12483.php">George Bosilca: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Previous message:</strong> <a href="12481.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>In reply to:</strong> <a href="12480.php">Rolf vandeVaart: "[OMPI devel] RGET issue when send is less than receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12483.php">George Bosilca: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Reply:</strong> <a href="12483.php">George Bosilca: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I thought I fixed this problem awhile back (though looking at the code its possible I never committed the fix). I will have to look through my local repository and see what happened to that fix. Your fix might not work correctly since a RGET can be broken up into multiple get operations. It may work, I would just need to test it to make sure.
<br>
<p>-Nathan
<br>
<p>On Fri, Jun 21, 2013 at 08:25:29AM -0700, Rolf vandeVaart wrote:
<br>
<span class="quotelev1">&gt; I ran into a hang in a test in which the sender sends less data than the receiver is expecting.  For example, the following shows the receiver expecting twice what the sender is sending.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rank 0:  MPI_Send(buf, BUFSIZE, MPI_INT, 1, 99, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt; Rank 1: MPI_Recv(buf, BUFSIZE*2,  MPI_INT, 0, 99, MPI_COMM_WORLD)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is also reproducible using one of the intel tests and adjusting the eager value for the openib BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?  mpirun -np 2 -host frick,frack -mca btl_openib_eager_limit 56 MPI_Send_overtake_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In most cases, this works just fine.  However, when the PML protocol used is the RGET protocol, the test hangs.   Below is a proposed fix for this issue.
</span><br>
<span class="quotelev1">&gt; I believe we want to be checking against req_bytes_packed rather than req_bytes_expected as req_bytes_expected is what the user originally told us.
</span><br>
<span class="quotelev1">&gt; Otherwise, with the current code, we never send a FIN message back to the sender.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [rvandevaart_at_sm065 ompi-trunk]$ svn diff ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; Index: ompi/mca/pml/ob1/pml_ob1_recvreq.c
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- ompi/mca/pml/ob1/pml_ob1_recvreq.c        (revision 28633)
</span><br>
<span class="quotelev1">&gt; +++ ompi/mca/pml/ob1/pml_ob1_recvreq.c     (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -335,7 +335,7 @@
</span><br>
<span class="quotelev1">&gt;      /* is receive request complete */
</span><br>
<span class="quotelev1">&gt;      OPAL_THREAD_ADD_SIZE_T(&amp;recvreq-&gt;req_bytes_received, frag-&gt;rdma_length);
</span><br>
<span class="quotelev1">&gt; -    if (recvreq-&gt;req_bytes_expected &lt;= recvreq-&gt;req_bytes_received) {
</span><br>
<span class="quotelev1">&gt; +    if (recvreq-&gt;req_recv.req_bytes_packed &lt;= recvreq-&gt;req_bytes_received) {
</span><br>
<span class="quotelev1">&gt;          mca_pml_ob1_send_fin(recvreq-&gt;req_recv.req_base.req_proc,
</span><br>
<span class="quotelev1">&gt;                                bml_btl,
</span><br>
<span class="quotelev1">&gt;                                       frag-&gt;rdma_hdr.hdr_rget.hdr_des,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; This email message is for the sole use of the intended recipient(s) and may contain
</span><br>
<span class="quotelev1">&gt; confidential information.  Any unauthorized review, use, disclosure or distribution
</span><br>
<span class="quotelev1">&gt; is prohibited.  If you are not the intended recipient, please contact the sender by
</span><br>
<span class="quotelev1">&gt; reply email and destroy all copies of the original message.
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="12483.php">George Bosilca: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Previous message:</strong> <a href="12481.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>In reply to:</strong> <a href="12480.php">Rolf vandeVaart: "[OMPI devel] RGET issue when send is less than receive"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12483.php">George Bosilca: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
<li><strong>Reply:</strong> <a href="12483.php">George Bosilca: "Re: [OMPI devel] RGET issue when send is less than receive"</a>
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
