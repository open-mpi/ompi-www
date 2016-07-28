<?
$subject_val = "Re: [OMPI users] self-messaging questions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 15 14:06:27 2010" -->
<!-- isoreceived="20101015180627" -->
<!-- sent="Fri, 15 Oct 2010 14:06:10 -0400" -->
<!-- isosent="20101015180610" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] self-messaging questions" -->
<!-- id="4CB89812.5000301_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="A24B4A01-C1F4-4CD9-88FD-776319D85AF9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] self-messaging questions<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-15 14:06:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14481.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff
<br>
<p>Thank you very much for your detailed answers.
<br>
This is the type of information that is hard to find,
<br>
even if you read &quot;MPI The Complete Reference&quot; over and over,
<br>
highlighting and writing notes on the margins.
<br>
<p>Considering what you wrote, and the perhaps only marginal advantage of
<br>
copying vs. self-messaging with non-blocking
<br>
p2p routines (persistent in my case), I will stick to the latter.
<br>
This also makes the code simpler.
<br>
<p>Regards,
<br>
Gus Correa
<br>
<p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 14, 2010, at 7:50 PM, Gus Correa wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *1) Can a process send a message to itself?*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The book &quot;MPI: The complete reference, Vol. 1, 2nd Ed.&quot;, by Snir et al.,
</span><br>
<span class="quotelev2">&gt;&gt; page 42, section 2.9.9 (Comments on Receive) says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Therefore, it is unsafe and non-portable to send self-messages with the standard mode, blocking send and receive operations described so far,
</span><br>
<span class="quotelev2">&gt;&gt; since this may lead to deadlock.&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Correct.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *2) Would it be safe and portable to send messages to self, if one uses non-blocking send and recv (MPI_Isend, MPI_Irecv), or with persistent
</span><br>
<span class="quotelev2">&gt;&gt; communication (MPI_Init_[Send/Recv], MPI_Startall, MPI_Waitall) ?*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On the other hand, the OpenMPI FAQ seems to say something different,
</span><br>
<span class="quotelev2">&gt;&gt; i.e., that self-messaging is OK, as long as the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;self&quot; BTL is turned on:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=all#tcp-btl">http://www.open-mpi.org/faq/?category=all#tcp-btl</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also correct.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We made a software engineering choice with the BTLs (i.e., the OB1-based transports) that they would not have the ability to send to themselves.  Instead, we created a &quot;self&quot; BTL that has all of the logic for sending messages to myself.  In this way, we didn't have to replicate all of that logic in every other BTL.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it's not really a performance optimization -- it's really a software engineering issue (i.e., avoid code duplication).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *3) Is this a particular feature or extension provided by OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt; beyond the MPI standard?*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nope.  Sending to self is something that the MPI standard implicitly guarantees must work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *4) If I write a program with self-messaging, will it
</span><br>
<span class="quotelev2">&gt;&gt; be portable and run safely when compiled with other MPI implementations?*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes.  Provided you use non-blocking communications, per #2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Of course, I can use an &quot;if&quot; conditional to copy the data to
</span><br>
<span class="quotelev2">&gt;&gt; the output buffer, instead of sending the message to self,
</span><br>
<span class="quotelev2">&gt;&gt; although this makes the code somewhat ugly.
</span><br>
<span class="quotelev2">&gt;&gt; This brings up yet another question:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *5) Which one is better/faster: sending messages to self,
</span><br>
<span class="quotelev2">&gt;&gt; or copying the data to the output buffer?*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the copy is a straight memcpy, it's probably marginally faster to use memcpy only because you're not making as many function calls to get down into the MPI progression engine.  We didn't really take any pains to highly optimize the send-to-self case, but it should perform well.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might want to benchmark memcpy vs. MPI_Sendrecv() to self (for example) and see if there's a noticeable difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14483.php">Gus Correa: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a	multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14481.php">Matthias Jurenz: "Re: [OMPI users] Build failure with OMPI-1.5 (clang-2.8, gcc-4.5.1 with debug options)"</a>
<li><strong>In reply to:</strong> <a href="14478.php">Jeff Squyres: "Re: [OMPI users] self-messaging questions"</a>
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
