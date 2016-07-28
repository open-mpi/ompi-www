<?
$subject_val = "[OMPI users] MPI_Bsend vs. MPI_Ibsend (2)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  6 15:35:51 2010" -->
<!-- isoreceived="20100506193551" -->
<!-- sent="Thu, 6 May 2010 21:35:46 +0200" -->
<!-- isosent="20100506193546" -->
<!-- name="Jovana Knezevic" -->
<!-- email="jovana.knezevic.83_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Bsend vs. MPI_Ibsend (2)" -->
<!-- id="u2q9d13e50c1005061235i78e81327ib1343938c4481a2c_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)<br>
<strong>From:</strong> Jovana Knezevic (<em>jovana.knezevic.83_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-06 15:35:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12942.php">Bill Rankin: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Previous message:</strong> <a href="12940.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12943.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>Reply:</strong> <a href="12943.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>Reply:</strong> <a href="12944.php">Eugene Loh: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you all!
<br>
<p>Regarding the posted Recv, I am aware that neither send nor buffered
<br>
send tell the sender if it is posted.
<br>
Regarding the distinction between blocking and unblocking calls in
<br>
general, everything is clear as well.
<br>
<p>On the other hand,  a slight confusion when Buffered send is concerned remains:
<br>
In my understanding, MPI_SEND (standard, blocking) does not return
<br>
until the send operation it invoked has completed. Completion can mean
<br>
the message was copied into an MPI internal buffer, or it can mean the
<br>
sending and receiving processes synchronized on the message. So, if we
<br>
decide to use buffered send (Bsend, so blocking), and we say &quot;I want
<br>
to allocate a large enough buffer, I want my data to be copied into
<br>
the buffer then, because I do not want anyone else to decide if I am
<br>
going to syncronize completely my sends and receives on the message -
<br>
I know what I'm doing :-)!&quot; then as soon as the data is copied to the
<br>
buffer, the call returns and the buffer can be reused.
<br>
Is the difference in comparison to Ibsend that with Ibsend the data
<br>
doesn't even have to be copied to the buffer when the call returns, or
<br>
something like that? Because otherwise, I still do not see the
<br>
difference: data copied into buffer-&gt; call returns! Why wouldn't I
<br>
reuse my message-buffer then?!
<br>
<p>Sorry for bothering you so much, but for the type of applications I am
<br>
involved in this is very important issue, thus, it is crucial that
<br>
this becomes completely clear to me. Thank you again!
<br>
<p>Cheers,
<br>
Jovana
<br>
<p><p><span class="quotelev1">&gt; An MPI send (of any kind), is defined by &quot;local completion semantics&quot;.
</span><br>
<span class="quotelev1">&gt; When a send is complete, the send buffer may be reused. The only kind of
</span><br>
<span class="quotelev1">&gt; send that gives any indication whether the receive is posted is the
</span><br>
<span class="quotelev1">&gt; synchronous send. Neither standard send nor buffered send tell the sender
</span><br>
<span class="quotelev1">&gt; if the recv was posted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The difference between blocking and nonblocking is that a return from a
</span><br>
<span class="quotelev1">&gt; blocking send call indicates the send buffer may be reused. A return from a
</span><br>
<span class="quotelev1">&gt; nonblocking send does not allow the send buffer tpo be reused (but other
</span><br>
<span class="quotelev1">&gt; things can be done). &#160;The send buffer becomes available to reuse after a
</span><br>
<span class="quotelev1">&gt; wait or successful test.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dick Treumann &#160;- &#160;MPI Team
</span><br>
<span class="quotelev1">&gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; Tele (845) 433-7846 &#160; &#160; &#160; &#160; Fax (845) 433-8363
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; | From: &#160; &#160; &#160;|
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; &#160;|Bill Rankin &lt;Bill.Rankin_at_[hidden]&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; |
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; | To: &#160; &#160; &#160; &#160;|
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; &#160;|Open MPI Users &lt;users_at_[hidden]&gt; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; |
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; | Date: &#160; &#160; &#160;|
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; &#160;|05/06/2010 10:35 AM &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; |
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; | Subject: &#160; |
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; &#160;|Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; |
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; | Sent by: &#160; |
</span><br>
<span class="quotelev1">&gt; |------------&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt; &#160;|users-bounces_at_[hidden] &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;|
</span><br>
<span class="quotelev1">&gt; &#160;&gt;----------------------------------------------------------------------------------------------------------------------------------------|
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually the 'B' in MPI_Bsend() specifies that it is a blocking *buffered*
</span><br>
<span class="quotelev1">&gt; send. &#160;So if I remember my standards correctly, this call requires:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) you will have to explicitly manage the send buffers via
</span><br>
<span class="quotelev1">&gt; MPI_Buffer_[attach|detach](), and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) the send will block until a corresponding receive is posted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI_Ibsend() is the immediate version of the above and will return w/o
</span><br>
<span class="quotelev1">&gt; the requirement for the corresponding received. &#160;Since it is a buffered
</span><br>
<span class="quotelev1">&gt; send the local data copy should be completed before it returns, allowing
</span><br>
<span class="quotelev1">&gt; you to change the contents of the local data buffer. &#160;But there is no
</span><br>
<span class="quotelev1">&gt; guaranty that the message has been send, so you should not reuse the send
</span><br>
<span class="quotelev1">&gt; buffer until after verifying the completion of the send via MPI_Wait() or
</span><br>
<span class="quotelev1">&gt; similar.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In your example, since MPI_Test() won't block, you can have a problem. &#160;Use
</span><br>
<span class="quotelev1">&gt; MPI_Wait() instead or change your send buffer to one that is not being
</span><br>
<span class="quotelev1">&gt; used.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -bill
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Jovana Knezevic
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, May 06, 2010 4:44 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] MPI_Bsend vs. MPI_Ibsend
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could anyone please clarify me the difference between MPI_Bsend and
</span><br>
<span class="quotelev1">&gt; MPI_Ibsend? Or, in other words, what exactly is &quot;blocking&quot; in
</span><br>
<span class="quotelev1">&gt; MPI_Bsend, when the data is stored in the buffer and we &quot;return&quot;? :-)
</span><br>
<span class="quotelev1">&gt; Another, but similar, question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about the data-buffer - when can it be reused in each of the
</span><br>
<span class="quotelev1">&gt; cases - simple examples:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for (i=0; i&lt;NUMBER_OF_SLAVES; i++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Bsend (&amp;data_buffer[0], ..., slave_id1...);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; } &#160;// Can any problem occur here, since we send the data_buffer several
</span><br>
<span class="quotelev1">&gt; times?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for (i=0; i&lt;NUMBER_OF_SLAVES; i++) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Ibsend (&amp;data_buffer[0], ..., slave[i]..., &amp;request);
</span><br>
<span class="quotelev1">&gt; MPI_Test(&amp;request...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; } &#160;// Any difference to previous example? Concerning the re-use of
</span><br>
<span class="quotelev1">&gt; data_buffer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you a lot in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; Jovana
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12942.php">Bill Rankin: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend"</a>
<li><strong>Previous message:</strong> <a href="12940.php">Eugene Loh: "Re: [OMPI users] How do I run OpenMPI safely on a Nehalem	standalone machine?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12943.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>Reply:</strong> <a href="12943.php">Richard Treumann: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
<li><strong>Reply:</strong> <a href="12944.php">Eugene Loh: "Re: [OMPI users] MPI_Bsend vs. MPI_Ibsend (2)"</a>
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
