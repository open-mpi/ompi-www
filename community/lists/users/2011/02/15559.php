<?
$subject_val = "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 15:24:22 2011" -->
<!-- isoreceived="20110210202422" -->
<!-- sent="Thu, 10 Feb 2011 15:24:21 -0500 (EST)" -->
<!-- isosent="20110210202421" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?" -->
<!-- id="alpine.LRH.2.00.1102101523460.30558_at_flowerpot.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.LRH.2.00.1102101500330.30558_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 15:24:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15560.php">Jeremiah Willcock: "[OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="15558.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="15558.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15600.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15600.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I forgot to mention that this was tested with 3 or 4 ranks, connected via 
<br>
TCP.
<br>
<p>-- Jeremiah Willcock
<br>
<p>On Thu, 10 Feb 2011, Jeremiah Willcock wrote:
<br>
<p><span class="quotelev1">&gt; Here is a small test case that hits the bug on 1.4.1:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int arr[1142];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev1">&gt;  int rank, my_size;
</span><br>
<span class="quotelev1">&gt;  MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev1">&gt;  my_size = (rank == 1) ? 1142 : 1088;
</span><br>
<span class="quotelev1">&gt;  MPI_Bcast(arr, my_size, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried it on 1.5.1, and I get MPI_ERR_TRUNCATE instead, so this might have 
</span><br>
<span class="quotelev1">&gt; already been fixed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 10 Feb 2011, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; FYI, I am having trouble finding a small test case that will trigger this 
</span><br>
<span class="quotelev2">&gt;&gt; on 1.5; I'm either getting deadlocks or MPI_ERR_TRUNCATE, so it could have 
</span><br>
<span class="quotelev2">&gt;&gt; been fixed.  What are the triggering rules for different broadcast 
</span><br>
<span class="quotelev2">&gt;&gt; algorithms?  It could be that only certain sizes or only certain BTLs 
</span><br>
<span class="quotelev2">&gt;&gt; trigger it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 10 Feb 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nifty!  Yes, I agree that that's a poor error message.  It's probably 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (unfortunately) being propagated up from the underlying point-to-point 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; system, where an ERR_IN_STATUS would actually make sense.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'll file a ticket about this.  Thanks for the heads up.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 9, 2011, at 4:49 PM, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Wed, 9 Feb 2011, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I get the following Open MPI error from 1.4.1:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (hostname and port removed from each line).  There is no MPI_Status 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; returned by MPI_Bcast, so I don't know what the error is?  Is this 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; something that people have seen before?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For the record, this appears to be caused by specifying inconsistent data 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sizes on the different ranks in the broadcast operation.  The error 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; message could still be improved, though.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15560.php">Jeremiah Willcock: "[OMPI users] Deadlock/NULL pointer dereference in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="15558.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>In reply to:</strong> <a href="15558.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15600.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15600.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
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
