<?
$subject_val = "Re: [OMPI users] using MPI_Recv in two different threads.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 16 21:11:01 2012" -->
<!-- isoreceived="20120117021101" -->
<!-- sent="Mon, 16 Jan 2012 18:10:56 -0800 (PST)" -->
<!-- isosent="20120117021056" -->
<!-- name="Hamilton Fischer" -->
<!-- email="fischerhamilton_at_[hidden]" -->
<!-- subject="Re: [OMPI users] using MPI_Recv in two different threads." -->
<!-- id="1326766256.890.YahooMailNeo_at_web113107.mail.gq1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F0D89F2.5060105_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] using MPI_Recv in two different threads.<br>
<strong>From:</strong> Hamilton Fischer (<em>fischerhamilton_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-16 21:10:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18177.php">Hamilton Fischer: "[OMPI users] unknown af_family recieved errors..."</a>
<li><strong>Previous message:</strong> <a href="18175.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After some searching, it turns out mpi4py tries to call MPI_Init_thread but python in general has issues with threads apparently. I'm backing off from threading at this point.

noobermin




________________________________
 From: TERRY DONTJE &lt;terry.dontje_at_[hidden]&gt;
To: users_at_[hidden] 
Sent: Wednesday, January 11, 2012 8:09 AM
Subject: Re: [OMPI users] using MPI_Recv in two different threads.
 

 
I am a little confused by your problem statement.&#160; Are you saying you want to have each MPI process to have multiple threads that can call MPI concurrently?&#160; If so you'll want to read up on the MPI_Init_thread function.&#160; 

--td

On 1/11/2012 7:19 AM, Hamilton Fischer wrote: 
Hi, I'm actually using mpi4py but my question should be similar to normal MPI in spirit. Simply, I want to do a MPMD application with a dedicated thread for each node (I have a small network). I was wondering if it was okay to do a blocking recv in each independent thread. Of course, since each thread has one node, there is no problem with wrong recv's being picked up by other threads. Thanks. noobermin _______________________________________________
users mailing list users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a> 

-- 

 

Terry D. Dontje | Principal Software Engineer

Developer Tools Engineering | +1.781.442.2631
 Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]




_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18176/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-18176/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18177.php">Hamilton Fischer: "[OMPI users] unknown af_family recieved errors..."</a>
<li><strong>Previous message:</strong> <a href="18175.php">Ralph Castain: "Re: [OMPI users] Possible bug in finalize, OpenMPI v1.5, head revision"</a>
<li><strong>In reply to:</strong> <a href="18135.php">TERRY DONTJE: "Re: [OMPI users] using MPI_Recv in two different threads."</a>
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
