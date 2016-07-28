<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 29 15:13:52 2006" -->
<!-- isoreceived="20060829191352" -->
<!-- sent="Tue, 29 Aug 2006 16:13:45 -0300" -->
<!-- isosent="20060829191345" -->
<!-- name="Marcelo Stival" -->
<!-- email="marstival_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Short Long messages when synchronous" -->
<!-- id="cc86c080608291213k5a76e452s9d872ac9e97ff1f1_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="661D77F9-151B-4A9A-B72D-9B15E5BCA415_at_cs.utk.edu" -->
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
<strong>Date:</strong> 2006-08-29 15:13:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>In reply to:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, I really thank u ... !
<br>
<p>How to verify the value for &quot;first_fragment&quot; param?
<br>
I tried &quot;ompi_info --param btl tcp&quot;, but I can't found this one.
<br>
(openmpi 1.1.1b)
<br>
<p>One more &quot;deep inside&quot; question (next time, to the right list..:P)
<br>
I suppose that the progress thread will be used just for rendezvous...
<br>
(and non-blocking)
<br>
But, it will be used for non-blocking synchronous short messages?
<br>
OK, that's rendezvous too.
<br>
However, the use of progress-thread depends on the condition used to
<br>
start or not the progress thread inside MPI.
<br>
(btl tcp over Ethernet)
<br>
<p><p>Marcelo
<br>
<p>On 8/29/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Well, you post the question on the user mailing list. Therefore, I
</span><br>
<span class="quotelev1">&gt; give you a user answer. If you want to know how do we implemented
</span><br>
<span class="quotelev1">&gt; deep inside, then the answer is different.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Short messages even on synchronous mode are sent using the rendez-
</span><br>
<span class="quotelev1">&gt; vous protocol (sic). Except that our rendez-vous protocol transport
</span><br>
<span class="quotelev1">&gt; some data. How much data, that depend on the network and it can be
</span><br>
<span class="quotelev1">&gt; modified via an MCA parameter (first_fragment).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In all the cases the for the synchronous send we will wait for an ack
</span><br>
<span class="quotelev1">&gt; from the remote side before marking the request as completed at the
</span><br>
<span class="quotelev1">&gt; sender. In fact, internally it happens exactly how you described in
</span><br>
<span class="quotelev1">&gt; your email.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2006, at 1:32 PM, Marcelo Stival wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for your replay...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me be a little insistent... :P
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I read (I don't remember where...) that an specific implementation
</span><br>
<span class="quotelev2">&gt; &gt; could send messages with synchronous comm mode... eagerly!
</span><br>
<span class="quotelev2">&gt; &gt; I think it still conform to the standard if the operation completes
</span><br>
<span class="quotelev2">&gt; &gt; just after the ack from the receiver.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The MPI_Ssend() could send a short message eagerly and wait for the
</span><br>
<span class="quotelev2">&gt; &gt; ack... (to satisfy the semantics of synchronous send)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Well, if it's possible....  I want to know if the OPENMPI
</span><br>
<span class="quotelev2">&gt; &gt; implementation (with BTL TCP over Ethernet) uses different protocols
</span><br>
<span class="quotelev2">&gt; &gt; for short/long when synchronous ...
</span><br>
<span class="quotelev2">&gt; &gt; (or it will be always rendezvous... as stated before)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt; Marcelo
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 8/29/06, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Tue, 29 Aug 2006, Marcelo Stival wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I have 2 questions related to short/long message protocols...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 1) When using synchronous comm mode, short  messages (&lt;64kB)
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; still be
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; transferred eagerly?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Depend. 64Kb is not the limits between the eager and rendez-vous
</span><br>
<span class="quotelev3">&gt; &gt;&gt; protocol.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In fact it depend on the underlying network that get activated.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Anyway,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for this particular question this limit between the eager and
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rendez-vous
</span><br>
<span class="quotelev3">&gt; &gt;&gt; protocol does not matter. Synchronous is alway a rendez-vous
</span><br>
<span class="quotelev3">&gt; &gt;&gt; protocol as
</span><br>
<span class="quotelev3">&gt; &gt;&gt; specified in the MPI standard.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; And larger messages will be transferred using rendezvous...?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; That's always the case even for non synchronous operations.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; 2) When the progress-thread (tcp btl) will be applied?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Just for long messages? Does it affect synchronous short messages
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; sends?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The behavior will be the same with or without threads.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;      george.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;We must accept finite disappointment, but we must never lose
</span><br>
<span class="quotelev3">&gt; &gt;&gt; infinite
</span><br>
<span class="quotelev3">&gt; &gt;&gt; hope.&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                                    Martin Luther King
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Half of what I say is meaningless; but I say it so that the other
</span><br>
<span class="quotelev1">&gt; half may reach you&quot;
</span><br>
<span class="quotelev1">&gt;                                    Kahlil Gibran
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
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1794/ompi_info.tar">ompi_info.tar</a>
</ul>
<!-- attachment="ompi_info.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1795.php">Jeff Squyres: "Re: [OMPI users] LSF with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
<li><strong>In reply to:</strong> <a href="1793.php">George Bosilca: "Re: [OMPI users] Short Long messages when synchronous"</a>
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
