<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 29 14:06:51 2006" -->
<!-- isoreceived="20060829180651" -->
<!-- sent="Tue, 29 Aug 2006 14:07:12 -0400" -->
<!-- isosent="20060829180712" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Short Long messages when synchronous" -->
<!-- id="661D77F9-151B-4A9A-B72D-9B15E5BCA415_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cc86c080608291032q40dfed64q5abc89e2be8b74ba_at_mail.gmail.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-29 14:07:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1794.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>In reply to:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1794.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Reply:</strong> <a href="1794.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, you post the question on the user mailing list. Therefore, I  
<br>
give you a user answer. If you want to know how do we implemented  
<br>
deep inside, then the answer is different.
<br>
<p>Short messages even on synchronous mode are sent using the rendez- 
<br>
vous protocol (sic). Except that our rendez-vous protocol transport  
<br>
some data. How much data, that depend on the network and it can be  
<br>
modified via an MCA parameter (first_fragment).
<br>
<p>In all the cases the for the synchronous send we will wait for an ack  
<br>
from the remote side before marking the request as completed at the  
<br>
sender. In fact, internally it happens exactly how you described in  
<br>
your email.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Aug 29, 2006, at 1:32 PM, Marcelo Stival wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your replay...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let me be a little insistent... :P
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I read (I don't remember where...) that an specific implementation
</span><br>
<span class="quotelev1">&gt; could send messages with synchronous comm mode... eagerly!
</span><br>
<span class="quotelev1">&gt; I think it still conform to the standard if the operation completes
</span><br>
<span class="quotelev1">&gt; just after the ack from the receiver.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The MPI_Ssend() could send a short message eagerly and wait for the
</span><br>
<span class="quotelev1">&gt; ack... (to satisfy the semantics of synchronous send)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well, if it's possible....  I want to know if the OPENMPI
</span><br>
<span class="quotelev1">&gt; implementation (with BTL TCP over Ethernet) uses different protocols
</span><br>
<span class="quotelev1">&gt; for short/long when synchronous ...
</span><br>
<span class="quotelev1">&gt; (or it will be always rendezvous... as stated before)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Marcelo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 8/29/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 29 Aug 2006, Marcelo Stival wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have 2 questions related to short/long message protocols...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) When using synchronous comm mode, short  messages (&lt;64kB)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; transferred eagerly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Depend. 64Kb is not the limits between the eager and rendez-vous  
</span><br>
<span class="quotelev2">&gt;&gt; protocol.
</span><br>
<span class="quotelev2">&gt;&gt; In fact it depend on the underlying network that get activated.  
</span><br>
<span class="quotelev2">&gt;&gt; Anyway,
</span><br>
<span class="quotelev2">&gt;&gt; for this particular question this limit between the eager and  
</span><br>
<span class="quotelev2">&gt;&gt; rendez-vous
</span><br>
<span class="quotelev2">&gt;&gt; protocol does not matter. Synchronous is alway a rendez-vous  
</span><br>
<span class="quotelev2">&gt;&gt; protocol as
</span><br>
<span class="quotelev2">&gt;&gt; specified in the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And larger messages will be transferred using rendezvous...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That's always the case even for non synchronous operations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) When the progress-thread (tcp btl) will be applied?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just for long messages? Does it affect synchronous short messages  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; sends?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The behavior will be the same with or without threads.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;      george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;We must accept finite disappointment, but we must never lose  
</span><br>
<span class="quotelev2">&gt;&gt; infinite
</span><br>
<span class="quotelev2">&gt;&gt; hope.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;                                    Martin Luther King
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1794.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>In reply to:</strong> <a href="1792.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1794.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Reply:</strong> <a href="1794.php">Marcelo Stival: "Re: [OMPI users] Short Long messages when synchronous"</a>
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
