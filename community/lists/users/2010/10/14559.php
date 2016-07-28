<?
$subject_val = "Re: [OMPI users] OPEN MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 17:36:07 2010" -->
<!-- isoreceived="20101022213607" -->
<!-- sent="Fri, 22 Oct 2010 15:36:01 -0600" -->
<!-- isosent="20101022213601" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPEN MPI data transfer error" -->
<!-- id="SNT134-w502574C9A5E8014E29DF4ECB5E0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="86BB3C83-1255-4A7A-AEAA-2BA46D243BF9_at_cisco.com" -->
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
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 17:36:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14558.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM is out of the office until 01/02/2001. (returning 11/01/2010)"</a>
<li><strong>In reply to:</strong> <a href="14557.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
I have used mpi_waitall() to do it. 
<br>
The data can be received but the contents are wrong.
<br>
Any help is appreciated. 
<br>
thanks
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: Fri, 22 Oct 2010 15:35:11 -0400
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OPEN MPI data transfer error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It doesn't look like you have completed the request that came back from Irecv.  You need to TEST or WAIT on requests before they are actually completed (e.g., in the case of a receive, the data won't be guaranteed to be in the target buffer until TEST/WAIT indicates that the request has completed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Oct 22, 2010, at 3:19 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi, 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I am using open MPI to transfer data between nodes. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; But the received data is not what the data sender sends out . 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have tried C and C++ binding . 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; data sender: 
</span><br>
<span class="quotelev2">&gt; &gt; 	double* sendArray = new double[sendResultVec.size()];
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 	for (int ii =0 ; ii &lt; sendResultVec.size() ; ii++)
</span><br>
<span class="quotelev2">&gt; &gt; 	{
</span><br>
<span class="quotelev2">&gt; &gt; 		sendArray[ii] = sendResultVec[ii];
</span><br>
<span class="quotelev2">&gt; &gt; 	}
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 	MPI::COMM_WORLD.Send(sendArray, sendResultVec.size(), MPI_DOUBLE, 0, myworkerUpStreamTaskTag);	
</span><br>
<span class="quotelev2">&gt; &gt; 	
</span><br>
<span class="quotelev2">&gt; &gt; data receiver: 
</span><br>
<span class="quotelev2">&gt; &gt; 	double* recvArray = new double[objSize];
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 	mToMasterT1Req = MPI::COMM_WORLD.Irecv(recvArray, objSize, MPI_DOUBLE, destRank, myUpStreamTaskTag);
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The sendResultVec.size() = objSize. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; What is the possible reason ? 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Any help is appreciated. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; jack
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Oct. 22 1010
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14559/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14558.php">Richard Treumann: "[OMPI users] AUTO: Richard Treumann/Poughkeepsie/IBM is out of the office until 01/02/2001. (returning 11/01/2010)"</a>
<li><strong>In reply to:</strong> <a href="14557.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14560.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
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
