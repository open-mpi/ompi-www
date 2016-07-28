<?
$subject_val = "[OMPI users] OPEN MPI data transfer error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 22 15:19:10 2010" -->
<!-- isoreceived="20101022191910" -->
<!-- sent="Fri, 22 Oct 2010 13:19:05 -0600" -->
<!-- isosent="20101022191905" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] OPEN MPI data transfer error" -->
<!-- id="SNT134-w21AB1E8C506E8D12E9044ACB5E0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OPEN MPI data transfer error<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-22 15:19:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14557.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14555.php">Siegmar Gross: "[OMPI users] cannot build Open MPI-1.5 on Solaris x86 with Sun C 5.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14557.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14557.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
I am using open MPI to transfer data between nodes. 
<br>
But the received data is not what the data sender sends out . 
<br>
I have tried C and C++ binding . 
<br>
data sender: 	double* sendArray = new double[sendResultVec.size()];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int ii =0 ; ii &lt; sendResultVec.size() ; ii++)	{		sendArray[ii] = sendResultVec[ii];	}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI::COMM_WORLD.Send(sendArray, sendResultVec.size(), MPI_DOUBLE, 0, myworkerUpStreamTaskTag);		data receiver: 	double* recvArray = new double[objSize];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mToMasterT1Req = MPI::COMM_WORLD.Irecv(recvArray, objSize, MPI_DOUBLE, destRank, myUpStreamTaskTag);
<br>
<p>The sendResultVec.size() = objSize. 
<br>
<p>What is the possible reason ? 
<br>
<p>Any help is appreciated. 
<br>
thanks
<br>
jack
<br>
Oct. 22 1010 		 	   		  
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14556/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14557.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Previous message:</strong> <a href="14555.php">Siegmar Gross: "[OMPI users] cannot build Open MPI-1.5 on Solaris x86 with Sun C 5.9"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14557.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
<li><strong>Reply:</strong> <a href="14557.php">Jeff Squyres: "Re: [OMPI users] OPEN MPI data transfer error"</a>
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
