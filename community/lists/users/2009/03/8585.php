<?
$subject_val = "Re: [OMPI users] MPI Blocking Routines and Memory Leaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 14:01:06 2009" -->
<!-- isoreceived="20090325180106" -->
<!-- sent="Wed, 25 Mar 2009 10:00:19 -0800" -->
<!-- isosent="20090325180019" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Blocking Routines and Memory Leaks" -->
<!-- id="49CA7133.60007_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="576b8700903250955x51bb0deck8838ad36eaebf54_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Blocking Routines and Memory Leaks<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 14:00:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8586.php">Jeff Squyres: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Previous message:</strong> <a href="8584.php">Simon K&#246;stlin: "[OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>In reply to:</strong> <a href="8584.php">Simon K&#246;stlin: "[OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8586.php">Jeff Squyres: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Simon K&#246;stlin wrote:
<br>
<p><span class="quotelev1">&gt; I'm new to MPI and I've got a question about blocking routines like 
</span><br>
<span class="quotelev1">&gt; the Send-, Wait-Function and so on. I wrote a parallel program that 
</span><br>
<span class="quotelev1">&gt; uses the blocking Send and the Nonblocking Isend function. Now my 
</span><br>
<span class="quotelev1">&gt; question: If I'm sending something with the blocking Send function it 
</span><br>
<span class="quotelev1">&gt; should block the process until the other process received the message.
</span><br>
<p>No.  MPI_Send returns once the message has been taken out of the user's 
<br>
send buffer.  The receiving process might not yet have received the 
<br>
message.  The MPI implementation could have buffered the message 
<br>
somewhere, and for short messages it probably did.  To ensure sync with 
<br>
receiver, use MPI_Ssend.
<br>
<p><span class="quotelev1">&gt; I think that works so far. But I'm also sending a message to the 
</span><br>
<span class="quotelev1">&gt; process itself and my programm doesn't block.
</span><br>
<p>You're lucky.  To send to yourself, it's safest to use nonblocking 
<br>
operations such as MPI_Irecv/MPI_Send/MPI_Wait (where you wait on the 
<br>
receive).  If you MPI_Send to yourself but there is no receive posted, 
<br>
an MPI implementation could lock up on you.
<br>
<p><span class="quotelev1">&gt; So does MPI not block if I'm sending a message to the same process 
</span><br>
<span class="quotelev1">&gt; from which I'm sending the message and it is a blocking routine?
</span><br>
<p>That's implementation dependent.
<br>
<p><span class="quotelev1">&gt; The same happens if I'm sending with a non-blocking Isend and do a 
</span><br>
<span class="quotelev1">&gt; request.Wait() on the send request after each send operation. So it 
</span><br>
<span class="quotelev1">&gt; doesn't block if I'm sending the message to itself. I'm wondering 
</span><br>
<span class="quotelev1">&gt; about that because the Recv function will occur only after all 
</span><br>
<span class="quotelev1">&gt; messages have been sent. It's ok that it works, because I need to send 
</span><br>
<span class="quotelev1">&gt; a message to the process itself for simplicity. I'm only wondering why 
</span><br>
<span class="quotelev1">&gt; this works.
</span><br>
<p>If the receives are posted only after all the sends, you're relying on 
<br>
the MPI implementation buffering everything up somewhere.  That behavior 
<br>
is implementation dependent, and typically shorter messages can be 
<br>
buffered but longer messages will induce sync with the receiver.  If you 
<br>
*really* want to hold off on Recv operations, you might have to buffer 
<br>
messages yourself with MPI_Bsend.  But the generally recommended pattern 
<br>
is to post MPI_Irecv requests as soon as possible and then post your sends.
<br>
<p><span class="quotelev1">&gt; Another question I have is about a memory leak. I got a heavy memory 
</span><br>
<span class="quotelev1">&gt; leak if I did not a request.Wait() on the send request before the 
</span><br>
<span class="quotelev1">&gt; Isend function and didn't wait until the last Isend operation 
</span><br>
<span class="quotelev1">&gt; completed. But all messages were arrived if I do the request.Wait() or 
</span><br>
<span class="quotelev1">&gt; not. Now I'm doing a request.Wait() before each Isend function and my 
</span><br>
<span class="quotelev1">&gt; memory isn't increasing much, but still a bit. Do I have to do 
</span><br>
<span class="quotelev1">&gt; something else on the blocking Send function? And is there a function 
</span><br>
<span class="quotelev1">&gt; in MPI to clean up its buffers in a running application without using 
</span><br>
<span class="quotelev1">&gt; the Finalize function.
</span><br>
<p>Doesn't sound right to me, but someone else may understand this better.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8586.php">Jeff Squyres: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>Previous message:</strong> <a href="8584.php">Simon K&#246;stlin: "[OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>In reply to:</strong> <a href="8584.php">Simon K&#246;stlin: "[OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8586.php">Jeff Squyres: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
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
