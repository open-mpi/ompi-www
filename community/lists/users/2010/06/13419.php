<?
$subject_val = "Re: [OMPI users] openMPI asychronous communication";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 28 00:11:45 2010" -->
<!-- isoreceived="20100628041145" -->
<!-- sent="Sun, 27 Jun 2010 22:11:40 -0600" -->
<!-- isosent="20100628041140" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI asychronous communication" -->
<!-- id="SNT134-w13D0F49DDB97485003DBC4CBCA0_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AANLkTilcretXz-ultv5sZ37IQ9BYChTcuAneLVOZNqNh_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI asychronous communication<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-28 00:11:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13418.php">Changsheng Jiang: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13418.php">Changsheng Jiang: "Re: [OMPI users] openMPI asychronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13426.php">David Zhang: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Reply:</strong> <a href="13426.php">David Zhang: "Re: [OMPI users] openMPI asychronous communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks
<br>
I know that. 
<br>
MPI_irecv() ;
<br>
do other works;
<br>
MPI_wait();
<br>
But, my message receiver is much slower than sender. 
<br>
when the sender is doing its local  works, the sender has sent out their messages. but at this time, the sender is very busy doing its local work and cannot post MPI_irecv to get the messages from senders. 
<br>
Any help is appreciated. 
<br>
jack
<br>
<p><p>From: jiangzuoyan_at_[hidden]
<br>
Date: Mon, 28 Jun 2010 11:55:32 +0800
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] openMPI asychronous communication
<br>
<p>OK, then i think you also know using MPI_Wait to wait the asynchronous requests to complete. if sender works faster then receiver(or reverse), then the MPI_Wait will do wait, not just deallocted. you should keep the buffer content before MPI_Wait.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Changsheng Jiang
<br>
<p><p><p>On Mon, Jun 28, 2010 at 11:41, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p><p><p>thanks
<br>
I know this. 
<br>
but, what if sender can send a lot of messages to receivers faster than what receiver can receive ? 
<br>
it means that sender works faster than receiver. 
<br>
<p><p>Any help is appreciated. 
<br>
jack 
<br>
<p>From: jiangzuoyan_at_[hidden]
<br>
Date: Mon, 28 Jun 2010 11:31:16 +0800
<br>
<p><p>To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] openMPI asychronous communication
<br>
<p>MPI_Isend - Starts a standard-mode, nonblocking send.
<br>
<p><p><p>BTW, are there any asynchronous collective operations?
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Changsheng Jiang
<br>
<p><p><p>On Mon, Jun 28, 2010 at 11:22, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><p><p><p><p><p><p>Dear All:
<br>
How to do asychronous communication among nodes by openMPI or boot.MPI  in cluster ?
<br>
<p><p><p><p>I need to set up a kind of asychronous communication protocol such that message senders and receivers can communicate asychronously without losing anymessages between them. 
<br>
<p><p><p><p>I do not want to use blocking MPI routines because the processors can do otheroperations when they wait for new messages coming.
<br>
I donot find this kind of MPI routines that support this 
<br>
<p><p><p>asychronous communication. 
<br>
Any help is appreciated. 
<br>
thanks
<br>
Jack 
<br>
June 27  2010 		 	   		  
<br>
<p><p>The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with Hotmail.  Get busy.
<br>
<p><p><p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with Hotmail.  Get busy.
<br>
<p><p><p>_______________________________________________
<br>
<p>users mailing list
<br>
<p>users_at_[hidden]
<br>
<p><a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
The New Busy think 9 to 5 is a cute idea. Combine multiple calendars with Hotmail. 
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5">http://www.windowslive.com/campaign/thenewbusy?tile=multicalendar&amp;ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_5</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13419/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13420.php">Srinivas Gopal: "Re: [OMPI users] Unable to include mpich library"</a>
<li><strong>Previous message:</strong> <a href="13418.php">Changsheng Jiang: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>In reply to:</strong> <a href="13418.php">Changsheng Jiang: "Re: [OMPI users] openMPI asychronous communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13426.php">David Zhang: "Re: [OMPI users] openMPI asychronous communication"</a>
<li><strong>Reply:</strong> <a href="13426.php">David Zhang: "Re: [OMPI users] openMPI asychronous communication"</a>
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
