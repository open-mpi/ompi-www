<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 29 13:32:52 2006" -->
<!-- isoreceived="20060829173252" -->
<!-- sent="Tue, 29 Aug 2006 14:32:43 -0300" -->
<!-- isosent="20060829173243" -->
<!-- name="Marcelo Stival" -->
<!-- email="marstival_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Short Long messages when synchronous" -->
<!-- id="cc86c080608291032q40dfed64q5abc89e2be8b74ba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Pine.WNT.4.64.0608291139160.3936_at_bosilca" -->
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
<strong>From:</strong> Marcelo Stival (<em>marstival_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-29 13:32:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1791.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1789.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Reply:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for your replay...
<br>
<p>Let me be a little insistent... :P
<br>
<p>I read (I don't remember where...) that an specific implementation
<br>
could send messages with synchronous comm mode... eagerly!
<br>
I think it still conform to the standard if the operation completes
<br>
just after the ack from the receiver.
<br>
<p>The MPI_Ssend() could send a short message eagerly and wait for the
<br>
ack... (to satisfy the semantics of synchronous send)
<br>
<p>Well, if it's possible....  I want to know if the OPENMPI
<br>
implementation (with BTL TCP over Ethernet) uses different protocols
<br>
for short/long when synchronous ...
<br>
(or it will be always rendezvous... as stated before)
<br>
<p><p>Thanks
<br>
Marcelo
<br>
<p>On 8/29/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; On Tue, 29 Aug 2006, Marcelo Stival wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have 2 questions related to short/long message protocols...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) When using synchronous comm mode, short  messages (&lt;64kB) still be
</span><br>
<span class="quotelev2">&gt; &gt; transferred eagerly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depend. 64Kb is not the limits between the eager and rendez-vous protocol.
</span><br>
<span class="quotelev1">&gt; In fact it depend on the underlying network that get activated. Anyway,
</span><br>
<span class="quotelev1">&gt; for this particular question this limit between the eager and rendez-vous
</span><br>
<span class="quotelev1">&gt; protocol does not matter. Synchronous is alway a rendez-vous protocol as
</span><br>
<span class="quotelev1">&gt; specified in the MPI standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; And larger messages will be transferred using rendezvous...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That's always the case even for non synchronous operations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2) When the progress-thread (tcp btl) will be applied?
</span><br>
<span class="quotelev2">&gt; &gt; Just for long messages? Does it affect synchronous short messages sends?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The behavior will be the same with or without threads.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;We must accept finite disappointment, but we must never lose infinite
</span><br>
<span class="quotelev1">&gt; hope.&quot;
</span><br>
<span class="quotelev1">&gt;                                    Martin Luther King
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Previous message:</strong> <a href="1791.php">Jeff Squyres: "Re: [OMPI users] [Open MPI Announce] Open MPI v1.1.1"</a>
<li><strong>In reply to:</strong> <a href="1789.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>Reply:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
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
