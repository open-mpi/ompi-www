<?
$subject_val = "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 24 19:14:29 2011" -->
<!-- isoreceived="20110225001429" -->
<!-- sent="Thu, 24 Feb 2011 19:14:24 -0500" -->
<!-- isosent="20110225001424" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?" -->
<!-- id="0B12A6D9-5656-4E41-A5CC-413ACA7E2DF6_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EDB892A7-B30E-4342-90B2-871F2D91E38F_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-24 19:14:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15742.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15600.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The issues have been identified deep into the tuned collective component. It has been fixed in the trunk and 1.5 a while back, but never pushed in the 1.4. I attached a patch to the ticket, and force its way into the next 1.4 release.
<br>
<p>&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 14, 2011, at 13:11 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Thanks Jeremiah; I filed the following ticket about this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/ticket/2723">https://svn.open-mpi.org/trac/ompi/ticket/2723</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 10, 2011, at 3:24 PM, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I forgot to mention that this was tested with 3 or 4 ranks, connected via TCP.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, 10 Feb 2011, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here is a small test case that hits the bug on 1.4.1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int arr[1142];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char** argv) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int rank, my_size;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; my_size = (rank == 1) ? 1142 : 1088;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Bcast(arr, my_size, MPI_INT, 0, MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return 0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried it on 1.5.1, and I get MPI_ERR_TRUNCATE instead, so this might have already been fixed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 10 Feb 2011, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FYI, I am having trouble finding a small test case that will trigger this on 1.5; I'm either getting deadlocks or MPI_ERR_TRUNCATE, so it could have been fixed.  What are the triggering rules for different broadcast algorithms?  It could be that only certain sizes or only certain BTLs trigger it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, 10 Feb 2011, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Nifty!  Yes, I agree that that's a poor error message.  It's probably (unfortunately) being propagated up from the underlying point-to-point system, where an ERR_IN_STATUS would actually make sense.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'll file a ticket about this.  Thanks for the heads up.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Feb 9, 2011, at 4:49 PM, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Wed, 9 Feb 2011, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I get the following Open MPI error from 1.4.1:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (hostname and port removed from each line).  There is no MPI_Status returned by MPI_Bcast, so I don't know what the error is?  Is this something that people have seen before?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; For the record, this appears to be caused by specifying inconsistent data sizes on the different ranks in the broadcast operation.  The error message could still be improved, though.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;I disapprove of what you say, but I will defend to the death your right to say it&quot;
<br>
&nbsp;&nbsp;-- Evelyn Beatrice Hall
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15742.php">Ralph Castain: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>Previous message:</strong> <a href="15740.php">Jeff Squyres: "Re: [OMPI users] SLURM environment variables at runtime"</a>
<li><strong>In reply to:</strong> <a href="15600.php">Jeff Squyres: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
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
