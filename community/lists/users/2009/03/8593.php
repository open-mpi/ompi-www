<?
$subject_val = "Re: [OMPI users] MPI_Test without deallocation";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 26 08:55:51 2009" -->
<!-- isoreceived="20090326125551" -->
<!-- sent="Thu, 26 Mar 2009 08:55:27 -0400" -->
<!-- isosent="20090326125527" -->
<!-- name="Richard Treumann" -->
<!-- email="treumann_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Test without deallocation" -->
<!-- id="OF511DC342.9A78BF3E-ON85257585.0045C407-85257585.0046FEC8_at_us.ibm.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49CABF6E.1070807_at_bcgsc.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Test without deallocation<br>
<strong>From:</strong> Richard Treumann (<em>treumann_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-26 08:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8592.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>In reply to:</strong> <a href="8591.php">Shaun Jackman: "Re: [OMPI users] MPI_Test without deallocation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You  can use MPI_REQUEST_GET_STATUS as a way to &quot;test&quot; without
<br>
deallocation.
<br>
<p>I do not understand the reason you would forward the request (as a request)
<br>
to another function. The data is already in a specific receive buffer by
<br>
the time an MPI_Test returns TRUE so calling the function and passing it
<br>
the buffer address,  and tag seems functionally equivalent.   If the called
<br>
function needs information from the MPI_Status (beyond tag) returned by
<br>
MPI_Test  you can pass it the status you get back.   The MPI_Status is in
<br>
application managed memory so the function can do whatever you like with it
<br>
after it has referenced it for the data.
<br>
<p>malloc a status
<br>
MPI_Test
<br>
if (flag == TRUE)
<br>
&nbsp;&nbsp;&nbsp;call function passing the status structure // use tag info from status
<br>
to pick the function &amp; let the function free the status
<br>
<p><p>If you do pass the un-deallocated request, remember your function must
<br>
still MPI_Wait it.
<br>
<p><p>Dick Treumann  -  MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846         Fax (845) 433-8363
<br>
<p><p>users-bounces_at_[hidden] wrote on 03/25/2009 07:34:06 PM:
<br>
<p><span class="quotelev1">&gt; [image removed]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [OMPI users] MPI_Test without deallocation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Shaun Jackman
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 03/25/2009 07:35 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent by:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please respond to Open MPI Users
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If an MPI_Irecv has already been posted, and a single message is sent
</span><br>
<span class="quotelev1">&gt; to the receiver, then will an MPI_Probe return that there is no
</span><br>
<span class="quotelev1">&gt; message waiting to be received? The message has already been received
</span><br>
<span class="quotelev1">&gt; by the MPI_Irecv. It's the MPI_Request object of the MPI_Irecv call
</span><br>
<span class="quotelev1">&gt; that needs to be probed, but MPI_Test has the side effect of also
</span><br>
<span class="quotelev1">&gt; deallocating the MPI_Request object.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Shaun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Justin wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Have you tried MPI_Probe?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Justin
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there a function similar to MPI_Test that doesn't deallocate the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; MPI_Request object? I would like to test if a message has been
</span><br>
<span class="quotelev3">&gt; &gt;&gt; received (MPI_Irecv), check its tag, and dispatch the MPI_Request to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; another function based on that tag.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Shaun
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8593/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8594.php">Alessandro Surace: "[OMPI users] PML add procs failed --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>Previous message:</strong> <a href="8592.php">Justin: "Re: [OMPI users] MPI_Test without deallocation"</a>
<li><strong>In reply to:</strong> <a href="8591.php">Shaun Jackman: "Re: [OMPI users] MPI_Test without deallocation"</a>
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
