<?
$subject_val = "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 15:17:52 2011" -->
<!-- isoreceived="20110210201752" -->
<!-- sent="Thu, 10 Feb 2011 15:17:51 -0500 (EST)" -->
<!-- isosent="20110210201751" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?" -->
<!-- id="alpine.LRH.2.00.1102101500330.30558_at_flowerpot.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.LRH.2.00.1102101059180.29187_at_flowerpot.osl.iu.edu" -->
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
<strong>Date:</strong> 2011-02-10 15:17:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15559.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15557.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15559.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15559.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is a small test case that hits the bug on 1.4.1:
<br>
<p>#include &lt;mpi.h&gt;
<br>
<p>int arr[1142];
<br>
<p>int main(int argc, char** argv) {
<br>
&nbsp;&nbsp;&nbsp;int rank, my_size;
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
&nbsp;&nbsp;&nbsp;my_size = (rank == 1) ? 1142 : 1088;
<br>
&nbsp;&nbsp;&nbsp;MPI_Bcast(arr, my_size, MPI_INT, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>I tried it on 1.5.1, and I get MPI_ERR_TRUNCATE instead, so this might 
<br>
have already been fixed.
<br>
<p>-- Jeremiah Willcock
<br>
<p><p>On Thu, 10 Feb 2011, Jeremiah Willcock wrote:
<br>
<p><span class="quotelev1">&gt; FYI, I am having trouble finding a small test case that will trigger this on 
</span><br>
<span class="quotelev1">&gt; 1.5; I'm either getting deadlocks or MPI_ERR_TRUNCATE, so it could have been 
</span><br>
<span class="quotelev1">&gt; fixed.  What are the triggering rules for different broadcast algorithms?  It 
</span><br>
<span class="quotelev1">&gt; could be that only certain sizes or only certain BTLs trigger it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, 10 Feb 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Nifty!  Yes, I agree that that's a poor error message.  It's probably 
</span><br>
<span class="quotelev2">&gt;&gt; (unfortunately) being propagated up from the underlying point-to-point 
</span><br>
<span class="quotelev2">&gt;&gt; system, where an ERR_IN_STATUS would actually make sense.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'll file a ticket about this.  Thanks for the heads up.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 9, 2011, at 4:49 PM, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, 9 Feb 2011, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I get the following Open MPI error from 1.4.1:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (hostname and port removed from each line).  There is no MPI_Status 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; returned by MPI_Bcast, so I don't know what the error is?  Is this 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; something that people have seen before?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For the record, this appears to be caused by specifying inconsistent data 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sizes on the different ranks in the broadcast operation.  The error 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; message could still be improved, though.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="15559.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15557.php">Reuti: "Re: [OMPI users] How does authentication between nodes work without password? (Newbie alert on)"</a>
<li><strong>In reply to:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15559.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15559.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
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
