<?
$subject_val = "Re: [OMPI users] OPEN MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 15:35:17 2010" -->
<!-- isoreceived="20101022193517" -->
<!-- sent="Fri, 22 Oct 2010 15:35:11 -0400" -->
<!-- isosent="20101022193511" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPEN MPI data transfer error" -->
<!-- id="86BB3C83-1255-4A7A-AEAA-2BA46D243BF9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="SNT134-w21AB1E8C506E8D12E9044ACB5E0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPEN MPI data transfer error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 15:35:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14558.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM is out of the office until 01/02/2001. (returning 11/01/2010)"</a>
<li><strong>Previous message:</strong> <a href="14556.php">Jack Bryan: "[OMPI users] OPEN MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14556.php">Jack Bryan: "[OMPI users] OPEN MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14559.php">Jack Bryan: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14559.php">Jack Bryan: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It doesn't look like you have completed the request that came back from Irecv.  You need to TEST or WAIT on requests before they are actually completed (e.g., in the case of a receive, the data won't be guaranteed to be in the target buffer until TEST/WAIT indicates that the request has completed).
<br>
<p><p><p>On Oct 22, 2010, at 3:19 PM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using open MPI to transfer data between nodes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But the received data is not what the data sender sends out . 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried C and C++ binding . 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; data sender: 
</span><br>
<span class="quotelev1">&gt; 	double* sendArray = new double[sendResultVec.size()];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	for (int ii =0 ; ii &lt; sendResultVec.size() ; ii++)
</span><br>
<span class="quotelev1">&gt; 	{
</span><br>
<span class="quotelev1">&gt; 		sendArray[ii] = sendResultVec[ii];
</span><br>
<span class="quotelev1">&gt; 	}
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	MPI::COMM_WORLD.Send(sendArray, sendResultVec.size(), MPI_DOUBLE, 0, myworkerUpStreamTaskTag);	
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; data receiver: 
</span><br>
<span class="quotelev1">&gt; 	double* recvArray = new double[objSize];
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	mToMasterT1Req = MPI::COMM_WORLD.Irecv(recvArray, objSize, MPI_DOUBLE, destRank, myUpStreamTaskTag);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The sendResultVec.size() = objSize. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the possible reason ? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Oct. 22 1010
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
<li><strong>Next message:</strong> <a href="14558.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM is out of the office until 01/02/2001. (returning 11/01/2010)"</a>
<li><strong>Previous message:</strong> <a href="14556.php">Jack Bryan: "[OMPI users] OPEN MPI data transfer error"</a>
<li><strong>In reply to:</strong> <a href="14556.php">Jack Bryan: "[OMPI users] OPEN MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14559.php">Jack Bryan: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14559.php">Jack Bryan: "Re: [OMPI users] OPEN MPI data transfer error"</a>
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
