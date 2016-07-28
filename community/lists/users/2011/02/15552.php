<?
$subject_val = "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 10 08:31:28 2011" -->
<!-- isoreceived="20110210133128" -->
<!-- sent="Thu, 10 Feb 2011 05:31:14 -0800" -->
<!-- isosent="20110210133114" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?" -->
<!-- id="E23F47CE-2E01-48BA-8391-A23384D6BB5F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.00.1102091949040.21880_at_flowerpot.osl.iu.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-10 08:31:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
<li><strong>In reply to:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nifty!  Yes, I agree that that's a poor error message.  It's probably (unfortunately) being propagated up from the underlying point-to-point system, where an ERR_IN_STATUS would actually make sense.
<br>
<p>I'll file a ticket about this.  Thanks for the heads up.
<br>
<p><p>On Feb 9, 2011, at 4:49 PM, Jeremiah Willcock wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 9 Feb 2011, Jeremiah Willcock wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I get the following Open MPI error from 1.4.1:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** An error occurred in MPI_Bcast
</span><br>
<span class="quotelev2">&gt;&gt; *** on communicator MPI COMMUNICATOR 3 SPLIT FROM 0
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERR_IN_STATUS: error code in status
</span><br>
<span class="quotelev2">&gt;&gt; *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; (hostname and port removed from each line).  There is no MPI_Status returned by MPI_Bcast, so I don't know what the error is?  Is this something that people have seen before?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the record, this appears to be caused by specifying inconsistent data sizes on the different ranks in the broadcast operation.  The error message could still be improved, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Jeremiah Willcock
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="15551.php">Jeff Squyres: "Re: [OMPI users] runtime error"</a>
<li><strong>In reply to:</strong> <a href="15545.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
<li><strong>Reply:</strong> <a href="15553.php">Jeremiah Willcock: "Re: [OMPI users] MPI_ERR_IN_STATUS from MPI_Bcast?"</a>
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
