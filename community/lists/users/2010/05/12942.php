<?
$subject_val = "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 15:47:05 2010" -->
<!-- isoreceived="20100506194705" -->
<!-- sent="Thu, 6 May 2010 15:46:58 -0400" -->
<!-- isosent="20100506194658" -->
<!-- name="Bill Rankin" -->
<!-- email="Bill.Rankin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend" -->
<!-- id="BBA15439DC467648BBAB71E6BA4D9900390294A2BF_at_MERCMBX12.na.sas.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="OFE9753104.91FD50CE-ON8525771B.0050DF7A-8525771B.00515E70_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend<br>
<strong>From:</strong> Bill Rankin (<em>Bill.Rankin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 15:46:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12943.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>Previous message:</strong> <a href="12941.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>In reply to:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Dick - thanks for the correction.  You are (of course) absolutely right.  I was getting blocking and synchronous confused (again).  Need to remember to fully engage brain before I type. ;-)
<br>
<p>-bill
<br>
<p><p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Richard Treumann
<br>
Sent: Thursday, May 06, 2010 10:49 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend
<br>
<p><p>An MPI send (of any kind), is defined by &quot;local completion semantics&quot;. When a send is complete, the send buffer may be reused. The only kind of send that gives any indication whether the receive is posted is the synchronous send. Neither standard send nor buffered send tell the sender if the recv was posted.
<br>
<p>The difference between blocking and nonblocking is that a return from a blocking send call indicates the send buffer may be reused. A return from a nonblocking send does not allow the send buffer tpo be reused (but other things can be done). The send buffer becomes available to reuse after a wait or successful test.
<br>
<p>Dick Treumann - MPI Team
<br>
IBM Systems &amp; Technology Group
<br>
Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
<br>
Tele (845) 433-7846 Fax (845) 433-8363
<br>
<p><p>[cid:image001.gif_at_01CAED32.D4DA1450]Bill Rankin ---05/06/2010 10:35:13 AM---Actually the 'B' in MPI_Bsend() specifies that it is a blocking *buffered* send. So if I remember m
<br>
<p>From:
<br>
<p><p>Bill Rankin &lt;Bill.Rankin_at_[hidden]&gt;
<br>
<p><p>To:
<br>
<p><p>Open MPI Users &lt;users_at_[hidden]&gt;
<br>
<p><p>Date:
<br>
<p><p>05/06/2010 10:35 AM
<br>
<p><p>Subject:
<br>
<p><p>Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend
<br>
<p><p>Sent by:
<br>
<p><p>users-bounces_at_[hidden]
<br>
<p>________________________________
<br>
<p><p><p>Actually the 'B' in MPI_Bsend() specifies that it is a blocking *buffered* send.  So if I remember my standards correctly, this call requires:
<br>
<p>1) you will have to explicitly manage the send buffers via MPI_Buffer_[attach|detach](), and
<br>
<p>2) the send will block until a corresponding receive is posted.
<br>
<p>The MPI_Ibsend() is the immediate version of the above and will return w/o the requirement for the corresponding received.  Since it is a buffered send the local data copy should be completed before it returns, allowing you to change the contents of the local data buffer.  But there is no guaranty that the message has been send, so you should not reuse the send buffer until after verifying the completion of the send via MPI_Wait() or similar.
<br>
<p>In your example, since MPI_Test() won't block, you can have a problem.  Use MPI_Wait() instead or change your send buffer to one that is not being used.
<br>
<p>-bill
<br>
<p><p><p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On Behalf Of Jovana Knezevic
<br>
Sent: Thursday, May 06, 2010 4:44 AM
<br>
To: users_at_[hidden]
<br>
Subject: [OMPI users] MPI_Bsend vs. MPI_Ibsend
<br>
<p>Dear all,
<br>
<p>Could anyone please clarify me the difference between MPI_Bsend and
<br>
MPI_Ibsend? Or, in other words, what exactly is &quot;blocking&quot; in
<br>
MPI_Bsend, when the data is stored in the buffer and we &quot;return&quot;? :-)
<br>
Another, but similar, question:
<br>
<p>What about the data-buffer - when can it be reused in each of the
<br>
cases - simple examples:
<br>
<p>for (i=0; i&lt;NUMBER_OF_SLAVES; i++) {
<br>
<p>MPI_Bsend (&amp;data_buffer[0], ..., slave_id1...);
<br>
<p>}  // Can any problem occur here, since we send the data_buffer several times?
<br>
<p>for (i=0; i&lt;NUMBER_OF_SLAVES; i++) {
<br>
<p>MPI_Ibsend (&amp;data_buffer[0], ..., slave[i]..., &amp;request);
<br>
MPI_Test(&amp;request...)
<br>
<p>}  // Any difference to previous example? Concerning the re-use of data_buffer?
<br>
<p>Thank you a lot in advance.
<br>
<p>Regards
<br>
Jovana
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p><p><p>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12942/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12942/image001.gif" alt="image001.gif
">
<!-- attachment="image001.gif" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12942/image003.png" alt="image003.png
">
<!-- attachment="image003.png" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-12942/image004.png" alt="image004.png
">
<!-- attachment="image004.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12943.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>Previous message:</strong> <a href="12941.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>In reply to:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
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
