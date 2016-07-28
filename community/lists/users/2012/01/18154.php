<?
$subject_val = "Re: [OMPI users] SIGSEGV on MPI_Test";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 12 11:39:13 2012" -->
<!-- isoreceived="20120112163913" -->
<!-- sent="Thu, 12 Jan 2012 16:39:07 +0000 (GMT)" -->
<!-- isosent="20120112163907" -->
<!-- name="devendra rai" -->
<!-- email="dev641_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV on MPI_Test" -->
<!-- id="1326386347.86934.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1326384331.8226.YahooMailNeo_at_web29604.mail.ird.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGSEGV on MPI_Test<br>
<strong>From:</strong> devendra rai (<em>dev641_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-12 11:39:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18155.php">devendra rai: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>Previous message:</strong> <a href="18153.php">devendra rai: "[OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>In reply to:</strong> <a href="18153.php">devendra rai: "[OMPI users] SIGSEGV on MPI_Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18155.php">devendra rai: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,

Continuing my previous mail, I thought attaching this debugger screenshot may help anyone come up with an explanation. The exact location where the segfault happens is also highlighted.

Thanks a lot for any help.

Best,

Devendra



________________________________
 From: devendra rai &lt;dev641_at_[hidden]&gt;
To: Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Thursday, 12 January 2012, 17:05
Subject: [OMPI users] SIGSEGV on MPI_Test
 

Hello Community:

I am running into a strange problem. I get a SIGSEGV when I try to execute MPI_Test:

==21076== Process terminating with default action of signal 11 (SIGSEGV)
==21076==&#160; Bad permissions for mapped region at address 0x43AEE1
==21076==&#160;&#160;&#160; at 0x509B957: ompi_request_default_test (req_test.c:68)
==21076==&#160;&#160;&#160; by 0x50EDEBB: PMPI_Test (ptest.c:59)
==21076==&#160;&#160;&#160; by 0x44210D: InterProcessorTransmit::StartTransmission() (InterProcessorTransmit.cpp:111)


Here is the relevant piece of code:

&#160;&#160;&#160;&#160;&#160;&#160; for ( this-&gt;dbIterator = localdb.begin( ) ; this-&gt;dbIterator != localdb.end( ); this-&gt;dbIterator++)
&#160;&#160;&#160;&#160;&#160;&#160;&#160; {
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;TransmissionDetails = (this-&gt;dbIterator)-&gt;second;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; SendComplete = 0;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; UniqueIDtoSendto = std::get&lt;0&gt;(this-&gt;TransmissionDetails);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; RecepientNode = (this-&gt;dbIterator)-&gt;first;
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; Isend_request = MPI::COMM_WORLD.Issend(this-&gt;transmitbuffer, this-&gt;transmissionsize, MPI_BYTE, (this-&gt;dbIterator)-&gt;first, std::get&lt;0&gt;(this-&gt;TransmissionDetails));
/*This is line 111 */MPI_Test(&amp;(this-&gt;Isend_request), &amp;(this-&gt;SendComplete),
 &amp;(this-&gt;ISend_status));
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; while(!this-&gt;SendComplete)
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; {
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* Test whether the transmission was okay*/
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_Test(&amp;(this-&gt;Isend_request), &amp;(this-&gt;SendComplete), &amp;(this-&gt;ISend_status));


&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /**** see if we need to pause or stop ****/
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
 {
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* The mutex is released after exiting this block */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; std::unique_lock&lt;std::mutex&gt; pr_dblock(this-&gt;mutexforPauseResume);

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; while(this-&gt;pause==1)
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
 {
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* pause till resume signal is received */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;WaitingforResume.wait(pr_dblock);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; }
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; if(this-&gt;stop ==
 1)
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; {
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* stop this transmission */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; return(0);
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;
 }

&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* mutex is released here */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; }
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /**** End of pause/ stop check ****/


Am I missing something here? The piece of code shown here runs in a thread. 


Thanks a lot for any pointers.

Best

Devendra 

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18154/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18154/screenshot10.png" alt="screenshot10.png">
<!-- attachment="screenshot10.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18155.php">devendra rai: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>Previous message:</strong> <a href="18153.php">devendra rai: "[OMPI users] SIGSEGV on MPI_Test"</a>
<li><strong>In reply to:</strong> <a href="18153.php">devendra rai: "[OMPI users] SIGSEGV on MPI_Test"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18155.php">devendra rai: "Re: [OMPI users] SIGSEGV on MPI_Test"</a>
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
