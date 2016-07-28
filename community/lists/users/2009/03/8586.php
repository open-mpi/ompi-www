<?
$subject_val = "Re: [OMPI users] MPI Blocking Routines and Memory Leaks";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 25 14:20:55 2009" -->
<!-- isoreceived="20090325182055" -->
<!-- sent="Wed, 25 Mar 2009 11:20:49 -0700" -->
<!-- isosent="20090325182049" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Blocking Routines and Memory Leaks" -->
<!-- id="937D6CAD-D734-4281-8A51-258DB691E6AB_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-25 14:20:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8585.php">Eugene Loh: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>In reply to:</strong> <a href="8584.php">Simon K&#246;stlin: "[OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2009, at 9:55 AM, Simon K&#246;stlin wrote:
<br>
<p><span class="quotelev1">&gt; I'm new to MPI and I've got a question about blocking routines like  
</span><br>
<span class="quotelev1">&gt; the Send-, Wait-Function and so on. I wrote a parallel program that  
</span><br>
<span class="quotelev1">&gt; uses the blocking Send and the Nonblocking Isend function. Now my  
</span><br>
<span class="quotelev1">&gt; question: If I'm sending something with the blocking Send function  
</span><br>
<span class="quotelev1">&gt; it should block the process until the other process received the  
</span><br>
<span class="quotelev1">&gt; message. I think that works so far. But I'm also sending a message  
</span><br>
<span class="quotelev1">&gt; to the process itself and my programm doesn't block. So does MPI not  
</span><br>
<span class="quotelev1">&gt; block if I'm sending a message to the same process from which I'm  
</span><br>
<span class="quotelev1">&gt; sending the message and it is a blocking routine? The same happens  
</span><br>
<span class="quotelev1">&gt; if I'm sending with a non-blocking Isend and do a request.Wait() on  
</span><br>
<span class="quotelev1">&gt; the send request after each send operation. So it doesn't block if  
</span><br>
<span class="quotelev1">&gt; I'm sending the message to itself. I'm wondering about that because  
</span><br>
<span class="quotelev1">&gt; the Recv function will occur only after all messages have been sent.  
</span><br>
<span class="quotelev1">&gt; It's ok that it works, because I need to send a message to the  
</span><br>
<span class="quotelev1">&gt; process itself for simplicity. I'm only wondering why this works.
</span><br>
<p>Eugene gave pretty good answers here.  Only thing I have to add is  
<br>
that if you need a guarantee that the receiver has *started* to  
<br>
receive the message before the sender returns, you can use MPI_SSEND  
<br>
(synchronous send).  It does not guarantee that the receiver has fully  
<br>
received all the data -- it only indicates that the receiver has  
<br>
posted a matching MPI receive.
<br>
<p><span class="quotelev1">&gt; Another question I have is about a memory leak. I got a heavy memory  
</span><br>
<span class="quotelev1">&gt; leak if I did not a request.Wait() on the send request before the  
</span><br>
<span class="quotelev1">&gt; Isend function and didn't wait until the last Isend operation  
</span><br>
<span class="quotelev1">&gt; completed. But all messages were arrived if I do the request.Wait()  
</span><br>
<span class="quotelev1">&gt; or not. Now I'm doing a request.Wait() before each Isend function  
</span><br>
<span class="quotelev1">&gt; and my memory isn't increasing much, but still a bit.
</span><br>
<p>I'm not quite sure what you're saying here.  For every non-blocking  
<br>
send/receive, you must do a corresponding wait or test (assuming test  
<br>
indicates that the request completed).  So if you're re-using the same  
<br>
request handle for the next ISEND, you're effectively orphaning it and  
<br>
MPI may not ever completely free the resources associated with it  
<br>
(because you didn't call a test or wait on it).
<br>
<p>So you don't have to wait for all pending non-blocking actions before  
<br>
you invoke your next non-blocking communication; you just have to have  
<br>
distinct requests for each pending action.
<br>
<p><span class="quotelev1">&gt; Do I have to do something else on the blocking Send function? And is  
</span><br>
<span class="quotelev1">&gt; there a function in MPI to clean up its buffers in a running  
</span><br>
<span class="quotelev1">&gt; application without using the Finalize function.
</span><br>
<p><p>No.  All MPI applications must call MPI_Finalize.
<br>
<p>Open MPI caches some of its internal data structures via freelists  
<br>
such that if you do a non-blocking send and then test/wait to complete  
<br>
it, we don't necessarily free everything -- we put it on a list that  
<br>
so we can reuse it for your *next* non-blocking communication.  Make  
<br>
sense?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8587.php">Shaun Jackman: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8585.php">Eugene Loh: "Re: [OMPI users] MPI Blocking Routines and Memory Leaks"</a>
<li><strong>In reply to:</strong> <a href="8584.php">Simon K&#246;stlin: "[OMPI users] MPI Blocking Routines and Memory Leaks"</a>
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
