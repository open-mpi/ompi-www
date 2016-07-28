<?
$subject_val = "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 10:33:44 2010" -->
<!-- isoreceived="20100506143344" -->
<!-- sent="Thu, 6 May 2010 10:33:38 -0400" -->
<!-- isosent="20100506143338" -->
<!-- name="Bill Rankin" -->
<!-- email="Bill.Rankin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend" -->
<!-- id="BBA15439DC467648BBAB71E6BA4D990039028B8602_at_MERCMBX12.na.sas.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="r2i9d13e50c1005060143g727553abl1978d85b959dec99_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2010-05-06 10:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12923.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12921.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12916.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Reply:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually the 'B' in MPI_Bsend() specifies that it is a blocking *buffered* send.  So if I remember my standards correctly, this call requires:
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12923.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<li><strong>Previous message:</strong> <a href="12921.php">John Hearns: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem standalone machine?"</a>
<li><strong>In reply to:</strong> <a href="12916.php">Jovana Knezevic: "[OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Reply:</strong> <a href="12924.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
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
