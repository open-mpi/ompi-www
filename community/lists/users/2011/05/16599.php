<?
$subject_val = "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 20 14:58:39 2011" -->
<!-- isoreceived="20110520185839" -->
<!-- sent="Fri, 20 May 2011 12:58:21 -0600" -->
<!-- isosent="20110520185821" -->
<!-- name="Damien" -->
<!-- email="damien_at_[hidden]" -->
<!-- subject="Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup" -->
<!-- id="4DD6B9CD.8060505_at_khubla.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BAY149-w7EF09BB6CAD4D22280350EC710_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup<br>
<strong>From:</strong> Damien (<em>damien_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-20 14:58:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16600.php">Jason Mackay: "Re: [OMPI users] users Digest, Vol 1911, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>In reply to:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI can get through your firewall, right?
<br>
<p>Damien
<br>
<p>On 20/05/2011 12:53 PM, Jason Mackay wrote:
<br>
<span class="quotelev1">&gt; I have verified that disabling UAC does not fix the problem. xhlp.exe 
</span><br>
<span class="quotelev1">&gt; starts, threads spin up on both machines, CPU usage is at 80-90% but 
</span><br>
<span class="quotelev1">&gt; no progress is ever made.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From this state, Ctrl-break on the head node yields the following output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:02032] [[20816,1],0]-[[20816,0],0] 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:05064] [[20816,1],1]-[[20816,0],0] 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:05420] [[20816,1],2]-[[20816,0],0] 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:03852] [[20816,1],3]-[[20816,0],0] 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:05436] [[20816,1],4]-[[20816,0],0] 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:04416] [[20816,1],5]-[[20816,0],0] 
</span><br>
<span class="quotelev1">&gt; mca_oob_tcp_msg_recv: readv failed: Unknown error (108)
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:02032] [[20816,1],0] routed:binomial: Connection to 
</span><br>
<span class="quotelev1">&gt; lifeline [[20816,0],0] lost
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:05064] [[20816,1],1] routed:binomial: Connection to 
</span><br>
<span class="quotelev1">&gt; lifeline [[20816,0],0] lost
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:05420] [[20816,1],2] routed:binomial: Connection to 
</span><br>
<span class="quotelev1">&gt; lifeline [[20816,0],0] lost
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:03852] [[20816,1],3] routed:binomial: Connection to 
</span><br>
<span class="quotelev1">&gt; lifeline [[20816,0],0] lost
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:05436] [[20816,1],4] routed:binomial: Connection to 
</span><br>
<span class="quotelev1">&gt; lifeline [[20816,0],0] lost
</span><br>
<span class="quotelev1">&gt; [REMOTEMACHINE:04416] [[20816,1],5] routed:binomial: Connection to 
</span><br>
<span class="quotelev1">&gt; lifeline [[20816,0],0] lost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; From: users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: users Digest, Vol 1911, Issue 1
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 20 May 2011 08:14:13 -0400
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt; &gt; users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt; &gt; users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Re: Error: Entry Point Not Found (Zhangping Wei)
</span><br>
<span class="quotelev2">&gt; &gt; 2. Re: Problem with MPI_Request, MPI_Isend/recv and
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Wait/Test (George Bosilca)
</span><br>
<span class="quotelev2">&gt; &gt; 3. Re: v1.5.3-x64 does not work on Windows 7 workgroup (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; 4. Re: Error: Entry Point Not Found (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; 5. Re: openmpi (1.2.8 or above) and Intel composer XE 2011 (aka
</span><br>
<span class="quotelev2">&gt; &gt; 12.0) (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; 6. Re: Openib with &gt; 32 cores per node (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; 7. Re: MPI_COMM_DUP freeze with OpenMPI 1.4.1 (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; 8. Re: Trouble with MPI-IO (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; 9. Re: Trouble with MPI-IO (Tom Rosmond)
</span><br>
<span class="quotelev2">&gt; &gt; 10. Re: Problem with MPI_Request, MPI_Isend/recv and
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Wait/Test (David B?ttner)
</span><br>
<span class="quotelev2">&gt; &gt; 11. Re: Trouble with MPI-IO (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; 12. Re: MPI_Alltoallv function crashes when np &gt; 100 (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; 13. Re: MPI_ERR_TRUNCATE with MPI_Allreduce() error, but only
</span><br>
<span class="quotelev2">&gt; &gt; sometimes... (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt; 14. Re: Trouble with MPI-IO (Jeff Squyres)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 1
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 09:13:53 -0700 (PDT)
</span><br>
<span class="quotelev2">&gt; &gt; From: Zhangping Wei &lt;zhangping_wei_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Error: Entry Point Not Found
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;101342.7961.qm_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;gb2312&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear Paul,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I checked the way 'mpirun -np N &lt;cmd&gt;' you mentioned, but it was the 
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev2">&gt; &gt; problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess it may related to the system I used, because I have used it 
</span><br>
<span class="quotelev1">&gt; correctly in
</span><br>
<span class="quotelev2">&gt; &gt; another XP 32 bit system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I look forward to more advice.Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Zhangping
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ________________________________
</span><br>
<span class="quotelev2">&gt; &gt; ???????? &quot;users-request_at_[hidden]&quot; &lt;users-request_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; ???????? users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; ?????????? 2011/5/19 (????) 11:00:02 ????
</span><br>
<span class="quotelev2">&gt; &gt; ?? ???? users Digest, Vol 1910, Issue 2
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt; &gt; users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt; &gt; users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt; &gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Re: Error: Entry Point Not Found (Paul van der Walt)
</span><br>
<span class="quotelev2">&gt; &gt; 2. Re: Openib with &gt; 32 cores per node (Robert Horton)
</span><br>
<span class="quotelev2">&gt; &gt; 3. Re: Openib with &gt; 32 cores per node (Samuel K. Gutierrez)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 1
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 16:14:02 +0100
</span><br>
<span class="quotelev2">&gt; &gt; From: Paul van der Walt &lt;paul_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Error: Entry Point Not Found
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;BANLkTinjZ0CNtchQJCZYhfGSnR51jPuP7w_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=UTF-8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 19 May 2011 15:54, Zhangping Wei &lt;zhangping_wei_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 4, I use command window to run it in this way: ?mpirun ?n 4 
</span><br>
<span class="quotelev1">&gt; ?**.exe ?,then I
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Probably not the problem, but shouldn't that be 'mpirun -np N &lt;cmd&gt;' ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; O&lt; ascii ribbon campaign - stop html mail - www.asciiribbon.org
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 2
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 16:37:56 +0100
</span><br>
<span class="quotelev2">&gt; &gt; From: Robert Horton &lt;r.horton_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Openib with &gt; 32 cores per node
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;1305819476.9663.148.camel_at_moelwyn&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;UTF-8&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2011-05-19 at 08:27 -0600, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Try the following QP parameters that only use shared receive queues.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for that. If I run the job over 2 x 48 cores it now works and the
</span><br>
<span class="quotelev2">&gt; &gt; performance seems reasonable (I need to do some more tuning) but when I
</span><br>
<span class="quotelev2">&gt; &gt; go up to 4 x 48 cores I'm getting the same problem:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; [compute-1-7.local][[14383,1],86][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one]
</span><br>
<span class="quotelev2">&gt; &gt; error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev2">&gt; &gt; [compute-1-7.local:18106] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev2">&gt; &gt; [compute-1-7.local:18106] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [compute-1-7.local:18106] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev2">&gt; &gt; [compute-1-7.local:18106] *** MPI_ERRORS_ARE_FATAL (your MPI job 
</span><br>
<span class="quotelev1">&gt; will now abort)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks,
</span><br>
<span class="quotelev2">&gt; &gt; Rob
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Robert Horton
</span><br>
<span class="quotelev2">&gt; &gt; System Administrator (Research Support) - School of Mathematical 
</span><br>
<span class="quotelev1">&gt; Sciences
</span><br>
<span class="quotelev2">&gt; &gt; Queen Mary, University of London
</span><br>
<span class="quotelev2">&gt; &gt; r.horton_at_[hidden] - +44 (0) 20 7882 7345
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 3
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 09:59:13 -0600
</span><br>
<span class="quotelev2">&gt; &gt; From: &quot;Samuel K. Gutierrez&quot; &lt;samuel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Openib with &gt; 32 cores per node
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;B3E83138-9AF0-48C0-871C-DBBB2E712E12_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 19, 2011, at 9:37 AM, Robert Horton wrote
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Thu, 2011-05-19 at 08:27 -0600, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Try the following QP parameters that only use shared receive queues.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; -mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks for that. If I run the job over 2 x 48 cores it now works 
</span><br>
<span class="quotelev1">&gt; and the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; performance seems reasonable (I need to do some more tuning) but 
</span><br>
<span class="quotelev1">&gt; when I
</span><br>
<span class="quotelev3">&gt; &gt; &gt; go up to 4 x 48 cores I'm getting the same problem:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt;[compute-1-7.local][[14383,1],86][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one]
</span><br>
<span class="quotelev3">&gt; &gt; &gt;] error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [compute-1-7.local:18106] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [compute-1-7.local:18106] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [compute-1-7.local:18106] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [compute-1-7.local:18106] *** MPI_ERRORS_ARE_FATAL (your MPI job 
</span><br>
<span class="quotelev1">&gt; will now
</span><br>
<span class="quotelev3">&gt; &gt; &gt;abort)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; How much memory does each node have? Does this happen at startup?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Try adding:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure if your version of OFED supports this feature, but 
</span><br>
<span class="quotelev1">&gt; maybe using XRC
</span><br>
<span class="quotelev2">&gt; &gt; may help. I **think** other tweaks are needed to get this going, but 
</span><br>
<span class="quotelev1">&gt; I'm not
</span><br>
<span class="quotelev2">&gt; &gt; familiar with the details.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hope that helps,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev2">&gt; &gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Rob
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Robert Horton
</span><br>
<span class="quotelev3">&gt; &gt; &gt; System Administrator (Research Support) - School of Mathematical 
</span><br>
<span class="quotelev1">&gt; Sciences
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Queen Mary, University of London
</span><br>
<span class="quotelev3">&gt; &gt; &gt; r.horton_at_[hidden] - +44 (0) 20 7882 7345
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; End of users Digest, Vol 1910, Issue 2
</span><br>
<span class="quotelev2">&gt; &gt; **************************************
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; HTML attachment scrubbed and removed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 2
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 08:48:03 -0800
</span><br>
<span class="quotelev2">&gt; &gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Wait/Test
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;FCAC66F9-FDB5-48BB-A800-263D8A4F9337_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=iso-8859-1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; David,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I do not see any mechanism for protecting the accesses to the 
</span><br>
<span class="quotelev1">&gt; requests to a single thread? What is the thread model you're using?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;From an implementation perspective, your code is correct only if 
</span><br>
<span class="quotelev1">&gt; you initialize the MPI library with MPI_THREAD_MULTIPLE and if the 
</span><br>
<span class="quotelev1">&gt; library accepts. Otherwise, there is an assumption that the 
</span><br>
<span class="quotelev1">&gt; application is single threaded, or that the MPI behavior is 
</span><br>
<span class="quotelev1">&gt; implementation dependent. Please read the MPI standard regarding to 
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread for more details.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regards,
</span><br>
<span class="quotelev2">&gt; &gt; george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 19, 2011, at 02:34 , David B?ttner wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am working on a hybrid MPI (OpenMPI 1.4.3) and Pthread code. I 
</span><br>
<span class="quotelev1">&gt; am using MPI_Isend and MPI_Irecv for communication and 
</span><br>
<span class="quotelev1">&gt; MPI_Test/MPI_Wait to check if it is done. I do this repeatedly in the 
</span><br>
<span class="quotelev1">&gt; outer loop of my code. The MPI_Test is used in the inner loop to check 
</span><br>
<span class="quotelev1">&gt; if some function can be called which depends on the received data.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The program regularly crashed (only when not using printf...) and 
</span><br>
<span class="quotelev1">&gt; after debugging it I figured out the following problem:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In MPI_Isend I have an invalid read of memory. I fixed the problem 
</span><br>
<span class="quotelev1">&gt; with not re-using a
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Request req_s, req_r;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but by using
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Request* req_s;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Request* req_r
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; and re-allocating them before the MPI_Isend/recv.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The documentation says, that in MPI_Wait and MPI_Test (if 
</span><br>
<span class="quotelev1">&gt; successful) the request-objects are deallocated and set to 
</span><br>
<span class="quotelev1">&gt; MPI_REQUEST_NULL.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It also says, that in MPI_Isend and MPI_Irecv, it allocates the 
</span><br>
<span class="quotelev1">&gt; Objects and associates it with the request object.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As I understand this, this either means I can use a pointer to 
</span><br>
<span class="quotelev1">&gt; MPI_Request which I don't have to initialize for this (it doesn't work 
</span><br>
<span class="quotelev1">&gt; but crashes), or that I can use a MPI_Request pointer which I have 
</span><br>
<span class="quotelev1">&gt; initialized with malloc(sizeof(MPI_REQUEST)) (or passing the address 
</span><br>
<span class="quotelev1">&gt; of a MPI_Request req), which is set and unset in the functions. But 
</span><br>
<span class="quotelev1">&gt; this version crashes, too.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What works is using a pointer, which I allocate before the 
</span><br>
<span class="quotelev1">&gt; MPI_Isend/recv and which I free after MPI_Wait in every iteration. In 
</span><br>
<span class="quotelev1">&gt; other words: It only uses if I don't reuse any kind of MPI_Request. 
</span><br>
<span class="quotelev1">&gt; Only if I recreate one every time.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is this, what is should be like? I believe that a reuse of the 
</span><br>
<span class="quotelev1">&gt; memory would be a lot more efficient (less calls to malloc...). Am I 
</span><br>
<span class="quotelev1">&gt; missing something here? Or am I doing something wrong?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Let me provide some more detailed information about my problem:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am running the program on a 30 node infiniband cluster. Each 
</span><br>
<span class="quotelev1">&gt; node has 4 single core Opteron CPUs. I am running 1 MPI Rank per node 
</span><br>
<span class="quotelev1">&gt; and 4 threads per rank (-&gt; one thread per core).
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am compiling with mpicc of OpenMPI using gcc below.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Some pseudo-code of the program can be found at the end of this 
</span><br>
<span class="quotelev1">&gt; e-mail.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I was able to reproduce the problem using different amount of 
</span><br>
<span class="quotelev1">&gt; nodes and even using one node only. The problem does not arise when I 
</span><br>
<span class="quotelev1">&gt; put printf-debugging information into the code. This pointed me into 
</span><br>
<span class="quotelev1">&gt; the direction that I have some memory problem, where some write 
</span><br>
<span class="quotelev1">&gt; accesses some memory it is not supposed to.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I ran the tests using valgrind with --leak-check=full and 
</span><br>
<span class="quotelev1">&gt; --show-reachable=yes, which pointed me either to MPI_Isend or MPI_Wait 
</span><br>
<span class="quotelev1">&gt; depending on whether I had the threads spin in a loop for MPI_Test to 
</span><br>
<span class="quotelev1">&gt; return success or used MPI_Wait respectively.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would appreciate your help with this. Am I missing something 
</span><br>
<span class="quotelev1">&gt; important here? Is there a way to re-use the request in the different 
</span><br>
<span class="quotelev1">&gt; iterations other than I thought it should work?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Or is there a way to re-initialize the allocated memory before the 
</span><br>
<span class="quotelev1">&gt; MPI_Isend/recv so that I at least don't have to call free and malloc 
</span><br>
<span class="quotelev1">&gt; each time?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thank you very much for your help!
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Kind regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; David B?ttner
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _____________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Pseudo-Code of program:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Request* req_s;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Request* req_w;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OUTER-LOOP
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if(0 == threadid)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; req_s = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev3">&gt; &gt; &gt; req_r = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Isend(..., req_s)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Irecv(..., req_r)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pthread_barrier
</span><br>
<span class="quotelev3">&gt; &gt; &gt; INNER-LOOP (while NOT_DONE or RET)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if(TRYLOCK &amp;&amp; NOT_DONE)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if(MPI_TEST(req_r))
</span><br>
<span class="quotelev3">&gt; &gt; &gt; {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Call_Function_A;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; NOT_DONE = 0;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; RET = Call_Function_B;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pthread_barrier_wait
</span><br>
<span class="quotelev3">&gt; &gt; &gt; if(0 == threadid)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_WAIT(req_s)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_WAIT(req_r)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; free(req_s);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; free(req_r);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _____________
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; David B?ttner, Informatik, Technische Universit?t M?nchen
</span><br>
<span class="quotelev3">&gt; &gt; &gt; TUM I-10 - FMI 01.06.059 - Tel. 089 / 289-17676
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot;To preserve the freedom of the human mind then and freedom of the 
</span><br>
<span class="quotelev1">&gt; press, every spirit should be ready to devote itself to martyrdom; for 
</span><br>
<span class="quotelev1">&gt; as long as we may think as we will, and speak as we think, the 
</span><br>
<span class="quotelev1">&gt; condition of man will proceed in improvement.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -- Thomas Jefferson, 1799
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 3
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 21:22:48 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] v1.5.3-x64 does not work on Windows 7
</span><br>
<span class="quotelev2">&gt; &gt; workgroup
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;278274F0-BF00-4498-950F-9779E0083C5A_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately, our Windows guy (Shiqing) is off getting married and 
</span><br>
<span class="quotelev1">&gt; will be out for a little while. :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; All that I can cite is the README.WINDOWS.txt file in the top-level 
</span><br>
<span class="quotelev1">&gt; directory. I'm afraid that I don't know much else about Windows. :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 18, 2011, at 8:17 PM, Jason Mackay wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My thanks to all those involved for putting together this Windows 
</span><br>
<span class="quotelev1">&gt; binary release of OpenMPI! I am hoping to use it in a small Windows 
</span><br>
<span class="quotelev1">&gt; based OpenMPI cluster at home.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Unfortunately my experience so far has not exactly been trouble 
</span><br>
<span class="quotelev1">&gt; free. It seems that, due to the fact that this release is using WMI, 
</span><br>
<span class="quotelev1">&gt; there are a number of settings that must be configured on the machines 
</span><br>
<span class="quotelev1">&gt; in order to get this to work. These settings are not documented in the 
</span><br>
<span class="quotelev1">&gt; distribution at all. I have been experimenting with it for over a week 
</span><br>
<span class="quotelev1">&gt; on and off and as soon as I solve one problem, another one arises.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Currently, after much searching, reading, and tinkering with DCOM 
</span><br>
<span class="quotelev1">&gt; settings etc..., I can remotely start processes on all my machines 
</span><br>
<span class="quotelev1">&gt; using mpirun but those processes cannot access network shares (e.g. 
</span><br>
<span class="quotelev1">&gt; for binary distribution) and HPL (which works on any one node) does 
</span><br>
<span class="quotelev1">&gt; not seem to work if I run it across multiple nodes, also indicating a 
</span><br>
<span class="quotelev1">&gt; network issue (CPU sits at 100% in all processes with no network 
</span><br>
<span class="quotelev1">&gt; traffic and never terminates). To eliminate premission issues that may 
</span><br>
<span class="quotelev1">&gt; be caused by UAC I tried the same setup on two domain machines using 
</span><br>
<span class="quotelev1">&gt; an administrative account to launch and the behavior was the same. I 
</span><br>
<span class="quotelev1">&gt; have read that WMI processes cannot access network resources and I am 
</span><br>
<span class="quotelev1">&gt; at a loss for a solution to this newest of problems. If anyone knows 
</span><br>
<span class="quotelev1">&gt; how to make this work I would appreciate the help. I assume that 
</span><br>
<span class="quotelev1">&gt; someone has gotten this working and has the answers.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have searched the mailing list archives and I found other users 
</span><br>
<span class="quotelev1">&gt; with similar problems but no clear guidance on the threads. Some 
</span><br>
<span class="quotelev1">&gt; threads make references to Microsoft KB articles but do not explicitly 
</span><br>
<span class="quotelev1">&gt; tell the user what needs to be done, leaving each new user to 
</span><br>
<span class="quotelev1">&gt; rediscover the tricks on their own. One thread made it appear that 
</span><br>
<span class="quotelev1">&gt; testing had only been done on Windows XP. Needless to say, security 
</span><br>
<span class="quotelev1">&gt; has changed dramatically in Windows since XP!
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would like to see OpenMPI for Windows be usable by a newcomer 
</span><br>
<span class="quotelev1">&gt; without all of this pain.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What would be fantastic would be:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1) a step-by-step procedure for how to get OpenMPI 1.5 working on 
</span><br>
<span class="quotelev1">&gt; Windows
</span><br>
<span class="quotelev3">&gt; &gt; &gt; a) preferably in a bare Windows 7 workgroup environment with 
</span><br>
<span class="quotelev1">&gt; nothing else (i.e. no Microsoft Cluster Compute Pack, no domain etc...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2) inclusion of these steps in the binary distribution
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 3) bonus points for a script which accomplishes these things 
</span><br>
<span class="quotelev1">&gt; automatically
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If someone can help with (1), I would happily volunteer my time to 
</span><br>
<span class="quotelev1">&gt; work on (3).
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jason
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 4
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 21:26:43 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Error: Entry Point Not Found
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;F830EC35-FC9B-4801-B2A3-50F54D2152A4_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=windows-1252
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 19, 2011, at 10:54 AM, Zhangping Wei wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 4, I use command window to run it in this way: ?mpirun ?n 4 **.exe 
</span><br>
<span class="quotelev1">&gt; ?,then I met the error: ?entry point not found: the procedure entry 
</span><br>
<span class="quotelev1">&gt; point inet_pton could not be located in the dynamic link library 
</span><br>
<span class="quotelev1">&gt; WS2_32.dll?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Unfortunately our Windows developer/maintainer is out for a little 
</span><br>
<span class="quotelev1">&gt; while (he's getting married); he pretty much did the Windows stuff by 
</span><br>
<span class="quotelev1">&gt; himself, so none of the rest of us know much about it. :(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; inet_pton is a standard function call relating to IP addresses that 
</span><br>
<span class="quotelev1">&gt; we use in the internals of OMPI; I'm not sure why it wouldn't be found 
</span><br>
<span class="quotelev1">&gt; on Windows XP (Shiqing did cite that the OMPI Windows port should work 
</span><br>
<span class="quotelev1">&gt; on Windows XP).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This post seems to imply that inet_ntop is only available on Vista 
</span><br>
<span class="quotelev1">&gt; and above:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://social.msdn.microsoft.com/Forums/en-US/vcgeneral/thread/e40465f2-41b7-4243-ad33-15ae9366f4e6/">http://social.msdn.microsoft.com/Forums/en-US/vcgeneral/thread/e40465f2-41b7-4243-ad33-15ae9366f4e6/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So perhaps Shiqing needs to put in some kind of portability 
</span><br>
<span class="quotelev1">&gt; workaround for OMPI, and the current binaries won't actually work for 
</span><br>
<span class="quotelev1">&gt; XP...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can't say that for sure because I really know very little about 
</span><br>
<span class="quotelev1">&gt; Windows; we'll unfortunately have to wait until he returns to get a 
</span><br>
<span class="quotelev1">&gt; definitive answer. :-(
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 5
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 21:37:49 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] openmpi (1.2.8 or above) and Intel composer
</span><br>
<span class="quotelev2">&gt; &gt; XE 2011 (aka 12.0)
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cc: Giovanni Bracco &lt;giovanni.bracco_at_[hidden]&gt;, Agostino Funel
</span><br>
<span class="quotelev2">&gt; &gt; &lt;agostino.funel_at_[hidden]&gt;, Fiorenzo Ambrosino
</span><br>
<span class="quotelev2">&gt; &gt; &lt;fiorenzo.ambrosino_at_[hidden]&gt;, Guido Guarnieri
</span><br>
<span class="quotelev2">&gt; &gt; &lt;guido.guarnieri_at_[hidden]&gt;, Roberto Ciavarella
</span><br>
<span class="quotelev2">&gt; &gt; &lt;roberto.ciavarella_at_[hidden]&gt;, Salvatore Podda
</span><br>
<span class="quotelev2">&gt; &gt; &lt;salvatore.podda_at_[hidden]&gt;, Giovanni Ponti &lt;giovanni.ponti_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;45362608-B8B0-4ADE-9959-B35C5690A6F3_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the late reply.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Other users have seen something similar but we have never been able 
</span><br>
<span class="quotelev1">&gt; to reproduce it. Is this only when using IB? If you use &quot;mpirun --mca 
</span><br>
<span class="quotelev1">&gt; btl_openib_cpc_if_include rdmacm&quot;, does the problem go away?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 11, 2011, at 6:00 PM, Marcus R. Epperson wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I've seen the same thing when I build openmpi 1.4.3 with Intel 12, 
</span><br>
<span class="quotelev1">&gt; but only when I have -O2 or -O3 in CFLAGS. If I drop it down to -O1 
</span><br>
<span class="quotelev1">&gt; then the collectives hangs go away. I don't know what, if anything, 
</span><br>
<span class="quotelev1">&gt; the higher optimization buys you when compiling openmpi, so I'm not 
</span><br>
<span class="quotelev1">&gt; sure if that's an acceptable workaround or not.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; My system is similar to yours - Intel X5570 with QDR Mellanox IB 
</span><br>
<span class="quotelev1">&gt; running RHEL 5, Slurm, and these openmpi btls: openib,sm,self. I'm 
</span><br>
<span class="quotelev1">&gt; using IMB 3.2.2 with a single iteration of Barrier to reproduce the 
</span><br>
<span class="quotelev1">&gt; hang, and it happens 100% of the time for me when I invoke it like this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # salloc -N 9 orterun -n 65 ./IMB-MPI1 -npmin 64 -iter 1 barrier
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The hang happens on the first Barrier (64 ranks) and each of the 
</span><br>
<span class="quotelev1">&gt; participating ranks have this backtrace:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; __poll (...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; poll_dispatch () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_event_loop () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_progress () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_coll_tuned_barrier_intra_recursivedoubling () from 
</span><br>
<span class="quotelev1">&gt; [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_coll_tuned_barrier_intra_dec_fixed () from 
</span><br>
<span class="quotelev1">&gt; [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; PMPI_Barrier () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; IMB_barrier ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; IMB_init_buffers_iter ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt; main ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The one non-participating rank has this backtrace:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; __poll (...)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; poll_dispatch () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_event_loop () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; opal_progress () from [instdir]/lib/libopen-pal.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_request_default_wait_all () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_coll_tuned_sendrecv_actual () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_coll_tuned_barrier_intra_bruck () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ompi_coll_tuned_barrier_intra_dec_fixed () from 
</span><br>
<span class="quotelev1">&gt; [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; PMPI_Barrier () from [instdir]/lib/libmpi.so.0
</span><br>
<span class="quotelev3">&gt; &gt; &gt; main ()
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I use more nodes I can get it to hang with 1ppn, so that seems 
</span><br>
<span class="quotelev1">&gt; to rule out the sm btl (or interactions with it) as a culprit at least.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can't reproduce this with openmpi 1.5.3, interestingly.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -Marcus
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On 05/10/2011 03:37 AM, Salvatore Podda wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; we succeed in building several version of openmpi from 1.2.8 to 
</span><br>
<span class="quotelev1">&gt; 1.4.3
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; with Intel composer XE 2011 (aka 12.0).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; However we found a threshold in the number of cores (depending 
</span><br>
<span class="quotelev1">&gt; from the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; application: IMB, xhpl or user applications
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and form the number of required cores) above which the 
</span><br>
<span class="quotelev1">&gt; application hangs
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; (sort of deadlocks).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The building of openmpi with 'gcc' and 'pgi' does not show the 
</span><br>
<span class="quotelev1">&gt; same limits.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; There are any known incompatibilities of openmpi with this 
</span><br>
<span class="quotelev1">&gt; version of
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; intel compiilers?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The characteristics of our computational infrastructure are:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Intel processors E7330, E5345, E5530 e E5620
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; CentOS 5.3, CentOS 5.5.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Intel composer XE 2011
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; gcc 4.1.2
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; pgi 10.2-1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Regards
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Salvatore Podda
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; ENEA UTICT-HPC
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Department for Computer Science Development and ICT
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Facilities Laboratory for Science and High Performace Computing
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; C.R. Frascati
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Via E. Fermi, 45
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; PoBox 65
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 00044 Frascati (Rome)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Italy
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Tel: +39 06 9400 5342
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Fax: +39 06 9400 5551
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Fax: +39 06 9400 5735
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; E-mail: salvatore.podda_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Home Page: www.cresco.enea.it
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 6
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 22:01:00 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Openib with &gt; 32 cores per node
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;C18C4827-D305-484A-9DAE-290902D40DB3_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What Sam is alluding to is that the OpenFabrics driver code in OMPI 
</span><br>
<span class="quotelev1">&gt; is sucking up oodles of memory for each IB connection that you're 
</span><br>
<span class="quotelev1">&gt; using. The receive_queues param that he sent tells OMPI to use all 
</span><br>
<span class="quotelev1">&gt; shared receive queues (instead of defaulting to one per-peer receive 
</span><br>
<span class="quotelev1">&gt; queue and the rest shared receive queues -- the per-peer RQ sucks up 
</span><br>
<span class="quotelev1">&gt; all the memory when you multiple it by N peers).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 19, 2011, at 11:59 AM, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 19, 2011, at 9:37 AM, Robert Horton wrote
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; On Thu, 2011-05-19 at 08:27 -0600, Samuel K. Gutierrez wrote:
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; Try the following QP parameters that only use shared receive queues.
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt; -mca btl_openib_receive_queues S,12288,128,64,32:S,65536,128,64,32
</span><br>
<span class="quotelev1">&gt; &gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks for that. If I run the job over 2 x 48 cores it now works 
</span><br>
<span class="quotelev1">&gt; and the
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; performance seems reasonable (I need to do some more tuning) but 
</span><br>
<span class="quotelev1">&gt; when I
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; go up to 4 x 48 cores I'm getting the same problem:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; [compute-1-7.local][[14383,1],86][../../../../../ompi/mca/btl/openib/connect/btl_openib_connect_oob.c:464:qp_create_one] 
</span><br>
<span class="quotelev1">&gt; error creating qp errno says Cannot allocate memory
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [compute-1-7.local:18106] *** An error occurred in MPI_Isend
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [compute-1-7.local:18106] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [compute-1-7.local:18106] *** MPI_ERR_OTHER: known error not in list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; [compute-1-7.local:18106] *** MPI_ERRORS_ARE_FATAL (your MPI job 
</span><br>
<span class="quotelev1">&gt; will now abort)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Any thoughts?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; How much memory does each node have? Does this happen at startup?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Try adding:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -mca btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm not sure if your version of OFED supports this feature, but 
</span><br>
<span class="quotelev1">&gt; maybe using XRC may help. I **think** other tweaks are needed to get 
</span><br>
<span class="quotelev1">&gt; this going, but I'm not familiar with the details.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hope that helps,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Samuel K. Gutierrez
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Rob
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Robert Horton
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; System Administrator (Research Support) - School of Mathematical 
</span><br>
<span class="quotelev1">&gt; Sciences
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Queen Mary, University of London
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; r.horton_at_[hidden] - +44 (0) 20 7882 7345
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 7
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 22:04:46 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] MPI_COMM_DUP freeze with OpenMPI 1.4.1
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;0DCF20B8-CA5C-4746-8187-A2DFF39B15DD_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 13, 2011, at 8:31 AM, francoise.roch_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Here is the MUMPS portion of code (in zmumps_part1.F file) where 
</span><br>
<span class="quotelev1">&gt; the slaves call MPI_COMM_DUP , id%PAR and MASTER are initialized to 0 
</span><br>
<span class="quotelev1">&gt; before :
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I re-indented so that I could read it better:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; CALL MPI_COMM_SIZE(id%COMM, id%NPROCS, IERR )
</span><br>
<span class="quotelev2">&gt; &gt; IF ( id%PAR .eq. 0 ) THEN
</span><br>
<span class="quotelev2">&gt; &gt; IF ( id%MYID .eq. MASTER ) THEN
</span><br>
<span class="quotelev2">&gt; &gt; color = MPI_UNDEFINED
</span><br>
<span class="quotelev2">&gt; &gt; ELSE
</span><br>
<span class="quotelev2">&gt; &gt; color = 0
</span><br>
<span class="quotelev2">&gt; &gt; END IF
</span><br>
<span class="quotelev2">&gt; &gt; CALL MPI_COMM_SPLIT( id%COMM, color, 0,
</span><br>
<span class="quotelev2">&gt; &gt; &amp; id%COMM_NODES, IERR )
</span><br>
<span class="quotelev2">&gt; &gt; id%NSLAVES = id%NPROCS - 1
</span><br>
<span class="quotelev2">&gt; &gt; ELSE
</span><br>
<span class="quotelev2">&gt; &gt; CALL MPI_COMM_DUP( id%COMM, id%COMM_NODES, IERR )
</span><br>
<span class="quotelev2">&gt; &gt; id%NSLAVES = id%NPROCS
</span><br>
<span class="quotelev2">&gt; &gt; END IF
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; IF (id%PAR .ne. 0 .or. id%MYID .NE. MASTER) THEN
</span><br>
<span class="quotelev2">&gt; &gt; CALL MPI_COMM_DUP( id%COMM_NODES, id%COMM_LOAD, IERR
</span><br>
<span class="quotelev2">&gt; &gt; ENDIF
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That doesn't look right -- both MPI_COMM_SPLIT and MPI_COMM_DUP are 
</span><br>
<span class="quotelev1">&gt; collective, meaning that all processes in the communicator must call 
</span><br>
<span class="quotelev1">&gt; them. In the first case, only some processes are calling 
</span><br>
<span class="quotelev1">&gt; MPI_COMM_SPLIT. Is there some other logic that forces the rest of the 
</span><br>
<span class="quotelev1">&gt; processes to call MPI_COMM_SPLIT, too?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 8
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 22:30:03 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Trouble with MPI-IO
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;EEFB638F-72F1-4208-8EA2-4F25F610C47B_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Props for that testio script. I think you win the award for &quot;most 
</span><br>
<span class="quotelev1">&gt; easy to reproduce test case.&quot; :-)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I notice that some of the lines went over 72 columns, so I renamed 
</span><br>
<span class="quotelev1">&gt; the file x.f90 and changed all the comments from &quot;c&quot; to &quot;!&quot; and joined 
</span><br>
<span class="quotelev1">&gt; the two &amp;-split lines. The error about implicit type for lenr went 
</span><br>
<span class="quotelev1">&gt; away, but then when I enabled better type checking by using &quot;use mpi&quot; 
</span><br>
<span class="quotelev1">&gt; instead of &quot;include 'mpif.h'&quot;, I got the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; x.f90:99.77:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; call mpi_type_indexed(lenij,ijlena,ijdisp,mpi_real,ij_vector_type,ierr)
</span><br>
<span class="quotelev2">&gt; &gt; 1
</span><br>
<span class="quotelev2">&gt; &gt; Error: There is no specific subroutine for the generic 
</span><br>
<span class="quotelev1">&gt; 'mpi_type_indexed' at (1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I looked at our mpi F90 module and see the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; interface MPI_Type_indexed
</span><br>
<span class="quotelev2">&gt; &gt; subroutine MPI_Type_indexed(count, array_of_blocklengths, 
</span><br>
<span class="quotelev1">&gt; array_of_displacements, oldtype, newtype, ierr)
</span><br>
<span class="quotelev2">&gt; &gt; integer, intent(in) :: count
</span><br>
<span class="quotelev2">&gt; &gt; integer, dimension(*), intent(in) :: array_of_blocklengths
</span><br>
<span class="quotelev2">&gt; &gt; integer, dimension(*), intent(in) :: array_of_displacements
</span><br>
<span class="quotelev2">&gt; &gt; integer, intent(in) :: oldtype
</span><br>
<span class="quotelev2">&gt; &gt; integer, intent(out) :: newtype
</span><br>
<span class="quotelev2">&gt; &gt; integer, intent(out) :: ierr
</span><br>
<span class="quotelev2">&gt; &gt; end subroutine MPI_Type_indexed
</span><br>
<span class="quotelev2">&gt; &gt; end interface
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't quite grok the syntax of the &quot;allocatable&quot; type ijdisp, so 
</span><br>
<span class="quotelev1">&gt; that might be the problem here...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Regardless, I'm not entirely sure if the problem is the &gt;72 
</span><br>
<span class="quotelev1">&gt; character lines, but then when that is gone, I'm not sure how the 
</span><br>
<span class="quotelev1">&gt; allocatable stuff fits in... (I'm not enough of a Fortran programmer 
</span><br>
<span class="quotelev1">&gt; to know)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 10, 2011, at 7:14 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I would appreciate someone with experience with MPI-IO look at the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; simple fortran program gzipped and attached to this note. It is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; imbedded in a script so that all that is necessary to run it is do:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 'testio' from the command line. The program generates a small 2-D 
</span><br>
<span class="quotelev1">&gt; input
</span><br>
<span class="quotelev3">&gt; &gt; &gt; array, sets up an MPI-IO environment, and write a 2-D output array
</span><br>
<span class="quotelev3">&gt; &gt; &gt; twice, with the only difference being the displacement arrays used to
</span><br>
<span class="quotelev3">&gt; &gt; &gt; construct the indexed datatype. For the first write, simple
</span><br>
<span class="quotelev3">&gt; &gt; &gt; monotonically increasing displacements are used, for the second the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; displacements are 'shuffled' in one dimension. They are printed during
</span><br>
<span class="quotelev3">&gt; &gt; &gt; the run.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For the first case the file is written properly, but for the 
</span><br>
<span class="quotelev1">&gt; second the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; program hangs on MPI_FILE_WRITE_AT_ALL and must be aborted manually.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Although the program is compiled as an mpi program, I am running on a
</span><br>
<span class="quotelev3">&gt; &gt; &gt; single processor, which makes the problem more puzzling.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The program should be relatively self-explanatory, but if more
</span><br>
<span class="quotelev3">&gt; &gt; &gt; information is needed, please ask. I am on an 8 core Xeon based Dell
</span><br>
<span class="quotelev3">&gt; &gt; &gt; workstation running Scientific Linux 5.5, Intel fortran 12.0.3, and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; OpenMPI 1.5.3. I have also attached output from 'ompi_info'.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; T. Rosmond
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt;testio.gz&gt;&lt;info_ompi.gz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 9
</span><br>
<span class="quotelev2">&gt; &gt; Date: Thu, 19 May 2011 20:24:25 -0700
</span><br>
<span class="quotelev2">&gt; &gt; From: Tom Rosmond &lt;rosmond_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Trouble with MPI-IO
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;1305861865.4284.104.camel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for looking at my problem. Sounds like you did reproduce my
</span><br>
<span class="quotelev2">&gt; &gt; problem. I have added some comments below
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Thu, 2011-05-19 at 22:30 -0400, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Props for that testio script. I think you win the award for &quot;most 
</span><br>
<span class="quotelev1">&gt; easy to reproduce test case.&quot; :-)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I notice that some of the lines went over 72 columns, so I renamed 
</span><br>
<span class="quotelev1">&gt; the file x.f90 and changed all the comments from &quot;c&quot; to &quot;!&quot; and joined 
</span><br>
<span class="quotelev1">&gt; the two &amp;-split lines. The error about implicit type for lenr went 
</span><br>
<span class="quotelev1">&gt; away, but then when I enabled better type checking by using &quot;use mpi&quot; 
</span><br>
<span class="quotelev1">&gt; instead of &quot;include 'mpif.h'&quot;, I got the following:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What fortran compiler did you use?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the original script my Intel compile used the -132 option,
</span><br>
<span class="quotelev2">&gt; &gt; allowing up to that many columns per line. I still think in
</span><br>
<span class="quotelev2">&gt; &gt; F77 fortran much of the time, and use 'c' for comments out
</span><br>
<span class="quotelev2">&gt; &gt; of habit. The change to '!' doesn't make any difference.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; x.f90:99.77:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; call 
</span><br>
<span class="quotelev1">&gt; mpi_type_indexed(lenij,ijlena,ijdisp,mpi_real,ij_vector_type,ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 1
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Error: There is no specific subroutine for the generic 
</span><br>
<span class="quotelev1">&gt; 'mpi_type_indexed' at (1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmmm, very strange, since I am looking right at the MPI standard
</span><br>
<span class="quotelev2">&gt; &gt; documents with that routine documented. I too get this compile failure
</span><br>
<span class="quotelev2">&gt; &gt; when I switch to 'use mpi'. Could that be a problem with the Open MPI
</span><br>
<span class="quotelev2">&gt; &gt; fortran libraries???
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I looked at our mpi F90 module and see the following:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; interface MPI_Type_indexed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; subroutine MPI_Type_indexed(count, array_of_blocklengths, 
</span><br>
<span class="quotelev1">&gt; array_of_displacements, oldtype, newtype, ierr)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; integer, intent(in) :: count
</span><br>
<span class="quotelev3">&gt; &gt; &gt; integer, dimension(*), intent(in) :: array_of_blocklengths
</span><br>
<span class="quotelev3">&gt; &gt; &gt; integer, dimension(*), intent(in) :: array_of_displacements
</span><br>
<span class="quotelev3">&gt; &gt; &gt; integer, intent(in) :: oldtype
</span><br>
<span class="quotelev3">&gt; &gt; &gt; integer, intent(out) :: newtype
</span><br>
<span class="quotelev3">&gt; &gt; &gt; integer, intent(out) :: ierr
</span><br>
<span class="quotelev3">&gt; &gt; &gt; end subroutine MPI_Type_indexed
</span><br>
<span class="quotelev3">&gt; &gt; &gt; end interface
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I don't quite grok the syntax of the &quot;allocatable&quot; type ijdisp, so 
</span><br>
<span class="quotelev1">&gt; that might be the problem here...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just a standard F90 'allocatable' statement. I've written thousands
</span><br>
<span class="quotelev2">&gt; &gt; just like it.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regardless, I'm not entirely sure if the problem is the &gt;72 
</span><br>
<span class="quotelev1">&gt; character lines, but then when that is gone, I'm not sure how the 
</span><br>
<span class="quotelev1">&gt; allocatable stuff fits in... (I'm not enough of a Fortran programmer 
</span><br>
<span class="quotelev1">&gt; to know)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyone else out that who can comment????
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; T. Rosmond
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 10, 2011, at 7:14 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I would appreciate someone with experience with MPI-IO look at the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; simple fortran program gzipped and attached to this note. It is
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; imbedded in a script so that all that is necessary to run it is do:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 'testio' from the command line. The program generates a small 
</span><br>
<span class="quotelev1">&gt; 2-D input
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; array, sets up an MPI-IO environment, and write a 2-D output array
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; twice, with the only difference being the displacement arrays 
</span><br>
<span class="quotelev1">&gt; used to
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; construct the indexed datatype. For the first write, simple
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; monotonically increasing displacements are used, for the second the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; displacements are 'shuffled' in one dimension. They are printed 
</span><br>
<span class="quotelev1">&gt; during
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the run.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; For the first case the file is written properly, but for the 
</span><br>
<span class="quotelev1">&gt; second the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; program hangs on MPI_FILE_WRITE_AT_ALL and must be aborted manually.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Although the program is compiled as an mpi program, I am running 
</span><br>
<span class="quotelev1">&gt; on a
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; single processor, which makes the problem more puzzling.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The program should be relatively self-explanatory, but if more
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; information is needed, please ask. I am on an 8 core Xeon based Dell
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; workstation running Scientific Linux 5.5, Intel fortran 12.0.3, and
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; OpenMPI 1.5.3. I have also attached output from 'ompi_info'.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; T. Rosmond
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt; &lt;testio.gz&gt;&lt;info_ompi.gz&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 10
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 20 May 2011 09:25:14 +0200
</span><br>
<span class="quotelev2">&gt; &gt; From: David B?ttner &lt;david.buettner_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Problem with MPI_Request, MPI_Isend/recv and
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Wait/Test
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;4DD6175A.1080403_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; thanks for the quick answer. I am sorry that I forgot to mention 
</span><br>
<span class="quotelev1">&gt; this: I
</span><br>
<span class="quotelev2">&gt; &gt; did compile OpenMPI with MPI_THREAD_MULTIPLE support and test if
</span><br>
<span class="quotelev2">&gt; &gt; required == provided after the MPI_Thread_init call.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I do not see any mechanism for protecting the accesses to the 
</span><br>
<span class="quotelev1">&gt; requests to a single thread? What is the thread model you're using?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Again I am sorry that this was not clear: In the pseudo code below I
</span><br>
<span class="quotelev2">&gt; &gt; wanted to indicate the access-protection I do by thread-id dependent
</span><br>
<span class="quotelev2">&gt; &gt; calls if(0 == thread-id) and by using the trylock(...) (using
</span><br>
<span class="quotelev2">&gt; &gt; pthread-mutexes). In the code all accesses concerning one MPI_Request
</span><br>
<span class="quotelev2">&gt; &gt; (which are pthread-global-pointers in my case) are protected and called
</span><br>
<span class="quotelev2">&gt; &gt; in sequential order, i.e. MPI_Isend/recv is returns before any 
</span><br>
<span class="quotelev1">&gt; thread is
</span><br>
<span class="quotelev2">&gt; &gt; allowed to call the corresponding MPI_Test and no-one can call MPI_Test
</span><br>
<span class="quotelev2">&gt; &gt; any more when a thread is allowed to call MPI_Wait.
</span><br>
<span class="quotelev2">&gt; &gt; I did this in the same manner before with other MPI implementations, 
</span><br>
<span class="quotelev1">&gt; but
</span><br>
<span class="quotelev2">&gt; &gt; also on the same machine with the same (untouched) OpenMPI
</span><br>
<span class="quotelev2">&gt; &gt; implementation, also using pthreads and MPI in combination, but I used
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Request req;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; instead of
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Request* req;
</span><br>
<span class="quotelev2">&gt; &gt; (and later)
</span><br>
<span class="quotelev2">&gt; &gt; req = (MPI_Request*)malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my recent (problem) code, I also tried not using pointers, but got
</span><br>
<span class="quotelev2">&gt; &gt; the same problem. Also, as I described in the first mail, I tried
</span><br>
<span class="quotelev2">&gt; &gt; everything concerning the memory allocation of the MPI_Request objects.
</span><br>
<span class="quotelev2">&gt; &gt; I tried not calling malloc. This I guessed wouldn't work, but the
</span><br>
<span class="quotelev2">&gt; &gt; OpenMPI documentation says this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot; Nonblocking calls allocate a communication request object and
</span><br>
<span class="quotelev2">&gt; &gt; associate it with the request handle the argument request). &quot;
</span><br>
<span class="quotelev2">&gt; &gt; [<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Isend.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Isend.3.php</a>] and
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; &quot; [...] if the communication object was created by a nonblocking 
</span><br>
<span class="quotelev1">&gt; send or
</span><br>
<span class="quotelev2">&gt; &gt; receive, then it is deallocated and the request handle is set to
</span><br>
<span class="quotelev2">&gt; &gt; MPI_REQUEST_NULL.&quot;
</span><br>
<span class="quotelev2">&gt; &gt; [<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Test.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Test.3.php</a>] and (in slightly
</span><br>
<span class="quotelev2">&gt; &gt; different words) [<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Wait.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Wait.3.php</a>]
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So I thought that it might do some kind of optimized memory stuff
</span><br>
<span class="quotelev2">&gt; &gt; internally.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I also tried allocating req (for each used MPI_Request) once before the
</span><br>
<span class="quotelev2">&gt; &gt; first use and deallocation after the last use (which I thought was the
</span><br>
<span class="quotelev2">&gt; &gt; way it was supposed to work), but that crashes also.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I tried replacing the pointers through global variables
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Request req;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; which didn't do the job...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only thing that seems to work is what I mentioned below: Allocate
</span><br>
<span class="quotelev2">&gt; &gt; every time I am going to need it in the MPI_Isend/recv, use it in
</span><br>
<span class="quotelev2">&gt; &gt; MPI_Test/Wait and after that deallocate it by hand each time.
</span><br>
<span class="quotelev2">&gt; &gt; I don't think that this is supposed to be like this since I have to 
</span><br>
<span class="quotelev1">&gt; do a
</span><br>
<span class="quotelev2">&gt; &gt; call to malloc and free so often (for multiple MPI_Request objects in
</span><br>
<span class="quotelev2">&gt; &gt; each iteration) that it will most likely limit performance...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Anyway I still have the same problem and am still unclear on what kind
</span><br>
<span class="quotelev2">&gt; &gt; of memory allocation I should be doing for the MPI_Requests. Is there
</span><br>
<span class="quotelev2">&gt; &gt; anything else (besides MPI_THREAD_MULTIPLE support, thread access
</span><br>
<span class="quotelev2">&gt; &gt; control, sequential order of MPI_Isend/recv, MPI_Test and MPI_Wait for
</span><br>
<span class="quotelev2">&gt; &gt; one MPI_Request object) I need to take care of? If not, what could I do
</span><br>
<span class="quotelev2">&gt; &gt; to find the source of my problem?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks again for any kind of help!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards,
</span><br>
<span class="quotelev2">&gt; &gt; David
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; From an implementation perspective, your code is correct only if 
</span><br>
<span class="quotelev1">&gt; you initialize the MPI library with MPI_THREAD_MULTIPLE and if the 
</span><br>
<span class="quotelev1">&gt; library accepts. Otherwise, there is an assumption that the 
</span><br>
<span class="quotelev1">&gt; application is single threaded, or that the MPI behavior is 
</span><br>
<span class="quotelev1">&gt; implementation dependent. Please read the MPI standard regarding to 
</span><br>
<span class="quotelev1">&gt; MPI_Init_thread for more details.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; george.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On May 19, 2011, at 02:34 , David B?ttner wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am working on a hybrid MPI (OpenMPI 1.4.3) and Pthread code. I 
</span><br>
<span class="quotelev1">&gt; am using MPI_Isend and MPI_Irecv for communication and 
</span><br>
<span class="quotelev1">&gt; MPI_Test/MPI_Wait to check if it is done. I do this repeatedly in the 
</span><br>
<span class="quotelev1">&gt; outer loop of my code. The MPI_Test is used in the inner loop to check 
</span><br>
<span class="quotelev1">&gt; if some function can be called which depends on the received data.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The program regularly crashed (only when not using printf...) and 
</span><br>
<span class="quotelev1">&gt; after debugging it I figured out the following problem:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; In MPI_Isend I have an invalid read of memory. I fixed the 
</span><br>
<span class="quotelev1">&gt; problem with not re-using a
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Request req_s, req_r;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; but by using
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Request* req_s;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Request* req_r
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; and re-allocating them before the MPI_Isend/recv.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; The documentation says, that in MPI_Wait and MPI_Test (if 
</span><br>
<span class="quotelev1">&gt; successful) the request-objects are deallocated and set to 
</span><br>
<span class="quotelev1">&gt; MPI_REQUEST_NULL.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; It also says, that in MPI_Isend and MPI_Irecv, it allocates the 
</span><br>
<span class="quotelev1">&gt; Objects and associates it with the request object.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; As I understand this, this either means I can use a pointer to 
</span><br>
<span class="quotelev1">&gt; MPI_Request which I don't have to initialize for this (it doesn't work 
</span><br>
<span class="quotelev1">&gt; but crashes), or that I can use a MPI_Request pointer which I have 
</span><br>
<span class="quotelev1">&gt; initialized with malloc(sizeof(MPI_REQUEST)) (or passing the address 
</span><br>
<span class="quotelev1">&gt; of a MPI_Request req), which is set and unset in the functions. But 
</span><br>
<span class="quotelev1">&gt; this version crashes, too.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; What works is using a pointer, which I allocate before the 
</span><br>
<span class="quotelev1">&gt; MPI_Isend/recv and which I free after MPI_Wait in every iteration. In 
</span><br>
<span class="quotelev1">&gt; other words: It only uses if I don't reuse any kind of MPI_Request. 
</span><br>
<span class="quotelev1">&gt; Only if I recreate one every time.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Is this, what is should be like? I believe that a reuse of the 
</span><br>
<span class="quotelev1">&gt; memory would be a lot more efficient (less calls to malloc...). Am I 
</span><br>
<span class="quotelev1">&gt; missing something here? Or am I doing something wrong?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Let me provide some more detailed information about my problem:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am running the program on a 30 node infiniband cluster. Each 
</span><br>
<span class="quotelev1">&gt; node has 4 single core Opteron CPUs. I am running 1 MPI Rank per node 
</span><br>
<span class="quotelev1">&gt; and 4 threads per rank (-&gt; one thread per core).
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I am compiling with mpicc of OpenMPI using gcc below.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Some pseudo-code of the program can be found at the end of this 
</span><br>
<span class="quotelev1">&gt; e-mail.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I was able to reproduce the problem using different amount of 
</span><br>
<span class="quotelev1">&gt; nodes and even using one node only. The problem does not arise when I 
</span><br>
<span class="quotelev1">&gt; put printf-debugging information into the code. This pointed me into 
</span><br>
<span class="quotelev1">&gt; the direction that I have some memory problem, where some write 
</span><br>
<span class="quotelev1">&gt; accesses some memory it is not supposed to.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I ran the tests using valgrind with --leak-check=full and 
</span><br>
<span class="quotelev1">&gt; --show-reachable=yes, which pointed me either to MPI_Isend or MPI_Wait 
</span><br>
<span class="quotelev1">&gt; depending on whether I had the threads spin in a loop for MPI_Test to 
</span><br>
<span class="quotelev1">&gt; return success or used MPI_Wait respectively.
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I would appreciate your help with this. Am I missing something 
</span><br>
<span class="quotelev1">&gt; important here? Is there a way to re-use the request in the different 
</span><br>
<span class="quotelev1">&gt; iterations other than I thought it should work?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Or is there a way to re-initialize the allocated memory before 
</span><br>
<span class="quotelev1">&gt; the MPI_Isend/recv so that I at least don't have to call free and 
</span><br>
<span class="quotelev1">&gt; malloc each time?
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Thank you very much for your help!
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Kind regards,
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; David B?ttner
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _____________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Pseudo-Code of program:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Request* req_s;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Request* req_w;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; OUTER-LOOP
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; if(0 == threadid)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; req_s = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; req_r = malloc(sizeof(MPI_Request));
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Isend(..., req_s)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_Irecv(..., req_r)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; pthread_barrier
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; INNER-LOOP (while NOT_DONE or RET)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; if(TRYLOCK&amp;&amp; NOT_DONE)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; if(MPI_TEST(req_r))
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Call_Function_A;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; NOT_DONE = 0;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; RET = Call_Function_B;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; pthread_barrier_wait
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; if(0 == threadid)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_WAIT(req_s)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; MPI_WAIT(req_r)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; free(req_s);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; free(req_r);
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; }
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _____________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; David B?ttner, Informatik, Technische Universit?t M?nchen
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; TUM I-10 - FMI 01.06.059 - Tel. 089 / 289-17676
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; &quot;To preserve the freedom of the human mind then and freedom of the 
</span><br>
<span class="quotelev1">&gt; press, every spirit should be ready to devote itself to martyrdom; for 
</span><br>
<span class="quotelev1">&gt; as long as we may think as we will, and speak as we think, the 
</span><br>
<span class="quotelev1">&gt; condition of man will proceed in improvement.&quot;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; -- Thomas Jefferson, 1799
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; David B?ttner, Informatik, Technische Universit?t M?nchen
</span><br>
<span class="quotelev2">&gt; &gt; TUM I-10 - FMI 01.06.059 - Tel. 089 / 289-17676
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 11
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 20 May 2011 06:23:21 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Trouble with MPI-IO
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;A5B121E9-E664-49D0-AE54-2CFE527129D2_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 19, 2011, at 11:24 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What fortran compiler did you use?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; gfortran.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In the original script my Intel compile used the -132 option,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; allowing up to that many columns per line.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Gotcha.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; x.f90:99.77:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; call 
</span><br>
<span class="quotelev1">&gt; mpi_type_indexed(lenij,ijlena,ijdisp,mpi_real,ij_vector_type,ierr)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; 1
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; Error: There is no specific subroutine for the generic 
</span><br>
<span class="quotelev1">&gt; 'mpi_type_indexed' at (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hmmm, very strange, since I am looking right at the MPI standard
</span><br>
<span class="quotelev3">&gt; &gt; &gt; documents with that routine documented. I too get this compile failure
</span><br>
<span class="quotelev3">&gt; &gt; &gt; when I switch to 'use mpi'. Could that be a problem with the Open MPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; fortran libraries???
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I think that that error is telling us that there's a compile-time 
</span><br>
<span class="quotelev1">&gt; mismatch -- that the signature of what you've passed doesn't match the 
</span><br>
<span class="quotelev1">&gt; signature of OMPI's MPI_Type_indexed subroutine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; I looked at our mpi F90 module and see the following:
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; interface MPI_Type_indexed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; subroutine MPI_Type_indexed(count, array_of_blocklengths, 
</span><br>
<span class="quotelev1">&gt; array_of_displacements, oldtype, newtype, ierr)
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; integer, intent(in) :: count
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; integer, dimension(*), intent(in) :: array_of_blocklengths
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; integer, dimension(*), intent(in) :: array_of_displacements
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; integer, intent(in) :: oldtype
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; integer, intent(out) :: newtype
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; integer, intent(out) :: ierr
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; end subroutine MPI_Type_indexed
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; end interface
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shouldn't ijlena and ijdisp be 1D arrays, not 2D arrays?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 12
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 20 May 2011 07:26:19 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] MPI_Alltoallv function crashes when np &gt; 100
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;F9F71854-B9DD-459F-999D-8A8AEF8D6006_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=GB2312
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I missed this email in my INBOX, sorry.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you be more specific about what exact error is occurring? You 
</span><br>
<span class="quotelev1">&gt; just say that the application crashes...? Please send all the 
</span><br>
<span class="quotelev1">&gt; information listed here:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 26, 2011, at 10:51 PM, ?????? wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; It seems that the const variable SOMAXCONN who used by listen() 
</span><br>
<span class="quotelev1">&gt; system call causes this problem. Can anybody help me resolve this 
</span><br>
<span class="quotelev1">&gt; question?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 2011/4/25 ?????? &lt;xjun.meng_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dear all,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As I mentioned, when I mpiruned an application with the parameter 
</span><br>
<span class="quotelev1">&gt; &quot;np = 150(or bigger)&quot;, the application who used the MPI_Alltoallv 
</span><br>
<span class="quotelev1">&gt; function would carsh. The problem would recur no matter how many nodes 
</span><br>
<span class="quotelev1">&gt; we used.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The edition of OpenMPI: 1.4.1 or 1.4.3
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The OS: linux redhat 2.6.32
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; BTW, my nodes had enough memory to run the application, and the 
</span><br>
<span class="quotelev1">&gt; MPI_Alltoall function worked well at my environment.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Did anybody meet the same problem? Thanks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Best Regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 13
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 20 May 2011 07:28:28 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Allreduce() error,
</span><br>
<span class="quotelev2">&gt; &gt; but only sometimes...
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;CAEF632E-757B-49EE-B545-5CCCBC712247_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=us-ascii
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the super-late reply. :-\
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, ERR_TRUNCATE means that the receiver didn't have a large enough 
</span><br>
<span class="quotelev1">&gt; buffer.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Have you tried upgrading to a newer version of Open MPI? 1.4.3 is 
</span><br>
<span class="quotelev1">&gt; the current stable release (I have a very dim and not guaranteed to be 
</span><br>
<span class="quotelev1">&gt; correct recollection that we fixed something in the internals of 
</span><br>
<span class="quotelev1">&gt; collectives somewhere with regards to ERR_TRUNCATE...?).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Apr 25, 2011, at 4:44 PM, Wei Hao wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm running openmpi 1.2.8. I'm working on a project where one part 
</span><br>
<span class="quotelev1">&gt; involves communicating an integer, representing the number of data 
</span><br>
<span class="quotelev1">&gt; points I'm keeping track of, to all the processors. The line is simple:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI_Allreduce(&amp;np,&amp;geo_N,1,MPI_INT,MPI_MAX,MPI_COMM_WORLD);
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; where np and geo_N are integers, np is the result of a local 
</span><br>
<span class="quotelev1">&gt; calculation, and geo_N has been declared on all the processors. geo_N 
</span><br>
<span class="quotelev1">&gt; is nondecreasing. This line works the first time I call it (geo_N goes 
</span><br>
<span class="quotelev1">&gt; from 0 to some other integer), but if I call it later in the program, 
</span><br>
<span class="quotelev1">&gt; I get the following error:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [woodhen-039:26189] *** An error occurred in MPI_Allreduce
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [woodhen-039:26189] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [woodhen-039:26189] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [woodhen-039:26189] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; As I understand it, MPI_ERR_TRUNCATE means that the output buffer 
</span><br>
<span class="quotelev1">&gt; is too small, but I'm not sure where I've made a mistake. It's 
</span><br>
<span class="quotelev1">&gt; particularly frustrating because it seems to work fine the first time. 
</span><br>
<span class="quotelev1">&gt; Does anyone have any thoughts?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Wei
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message: 14
</span><br>
<span class="quotelev2">&gt; &gt; Date: Fri, 20 May 2011 08:14:07 -0400
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] Trouble with MPI-IO
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Message-ID: &lt;42DB03B3-9CF4-4ACB-AA20-B857E5F76087_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Content-Type: text/plain; charset=&quot;us-ascii&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 20, 2011, at 6:23 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Shouldn't ijlena and ijdisp be 1D arrays, not 2D arrays?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ok, if I convert ijlena and ijdisp to 1D arrays, I don't get the 
</span><br>
<span class="quotelev1">&gt; compile error (even though they're allocatable -- so allocate was a 
</span><br>
<span class="quotelev1">&gt; red herring, sorry). That's all that &quot;use mpi&quot; is complaining about -- 
</span><br>
<span class="quotelev1">&gt; that the function signatures didn't match.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; use mpi is your friend -- even if you don't use F90 constructs much. 
</span><br>
<span class="quotelev1">&gt; Compile-time checking is Very Good Thing (you were effectively 
</span><br>
<span class="quotelev1">&gt; &quot;getting lucky&quot; by passing in the 2D arrays, I think).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Attached is my final version. And with this version, I see the hang 
</span><br>
<span class="quotelev1">&gt; when running it with the &quot;T&quot; parameter.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, I'm not an expert on the MPI IO stuff -- your code 
</span><br>
<span class="quotelev1">&gt; *looks* right to me, but I could be missing something subtle in the 
</span><br>
<span class="quotelev1">&gt; interpretation of MPI_FILE_SET_VIEW. I tried running your code with 
</span><br>
<span class="quotelev1">&gt; MPICH 1.3.2p1 and it also hung.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rob (ROMIO guy) -- can you comment this code? Is it correct?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; -------------- next part --------------
</span><br>
<span class="quotelev2">&gt; &gt; A non-text attachment was scrubbed...
</span><br>
<span class="quotelev2">&gt; &gt; Name: x.f90
</span><br>
<span class="quotelev2">&gt; &gt; Type: application/octet-stream
</span><br>
<span class="quotelev2">&gt; &gt; Size: 3820 bytes
</span><br>
<span class="quotelev2">&gt; &gt; Desc: not available
</span><br>
<span class="quotelev2">&gt; &gt; URL: 
</span><br>
<span class="quotelev1">&gt; &lt;<a href="http://www.open-mpi.org/MailArchives/users/attachments/20110520/53a5461b/attachment.obj">http://www.open-mpi.org/MailArchives/users/attachments/20110520/53a5461b/attachment.obj</a>&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; End of users Digest, Vol 1911, Issue 1
</span><br>
<span class="quotelev2">&gt; &gt; **************************************
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16599/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16600.php">Jason Mackay: "Re: [OMPI users] users Digest, Vol 1911, Issue 4"</a>
<li><strong>Previous message:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
<li><strong>In reply to:</strong> <a href="16598.php">Jason Mackay: "Re: [OMPI users] v1.5.3-x64 does not work on Windows 7 workgroup"</a>
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
