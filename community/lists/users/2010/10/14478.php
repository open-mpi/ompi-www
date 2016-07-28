<?
$subject_val = "Re: [OMPI users] self-messaging questions";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 15 06:21:22 2010" -->
<!-- isoreceived="20101015102122" -->
<!-- sent="Fri, 15 Oct 2010 06:21:18 -0400" -->
<!-- isosent="20101015102118" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] self-messaging questions" -->
<!-- id="A24B4A01-C1F4-4CD9-88FD-776319D85AF9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CB79738.4090902_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-15 06:21:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14477.php">Gus Correa: "[OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>In reply to:</strong> <a href="14476.php">Gus Correa: "[OMPI users] self-messaging questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14482.php">Gus Correa: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>Reply:</strong> <a href="14482.php">Gus Correa: "Re: [OMPI users] self-messaging questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 14, 2010, at 7:50 PM, Gus Correa wrote:
<br>
<p><span class="quotelev1">&gt; *1) Can a process send a message to itself?*
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The book &quot;MPI: The complete reference, Vol. 1, 2nd Ed.&quot;, by Snir et al.,
</span><br>
<span class="quotelev1">&gt; page 42, section 2.9.9 (Comments on Receive) says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;Therefore, it is unsafe and non-portable to send self-messages with the standard mode, blocking send and receive operations described so far,
</span><br>
<span class="quotelev1">&gt; since this may lead to deadlock.&quot;
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; *2) Would it be safe and portable to send messages to self, if one uses non-blocking send and recv (MPI_Isend, MPI_Irecv), or with persistent
</span><br>
<span class="quotelev1">&gt; communication (MPI_Init_[Send/Recv], MPI_Startall, MPI_Waitall) ?*
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; On the other hand, the OpenMPI FAQ seems to say something different,
</span><br>
<span class="quotelev1">&gt; i.e., that self-messaging is OK, as long as the
</span><br>
<span class="quotelev1">&gt; &quot;self&quot; BTL is turned on:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=all#tcp-btl">http://www.open-mpi.org/faq/?category=all#tcp-btl</a>
</span><br>
<p>Also correct.  
<br>
<p>We made a software engineering choice with the BTLs (i.e., the OB1-based transports) that they would not have the ability to send to themselves.  Instead, we created a &quot;self&quot; BTL that has all of the logic for sending messages to myself.  In this way, we didn't have to replicate all of that logic in every other BTL.
<br>
<p>So it's not really a performance optimization -- it's really a software engineering issue (i.e., avoid code duplication).
<br>
<p><span class="quotelev1">&gt; *3) Is this a particular feature or extension provided by OpenMPI,
</span><br>
<span class="quotelev1">&gt; beyond the MPI standard?*
</span><br>
<p>Nope.  Sending to self is something that the MPI standard implicitly guarantees must work.
<br>
<p><span class="quotelev1">&gt; *4) If I write a program with self-messaging, will it
</span><br>
<span class="quotelev1">&gt; be portable and run safely when compiled with other MPI implementations?*
</span><br>
<p>Yes.  Provided you use non-blocking communications, per #2.
<br>
<p><span class="quotelev1">&gt; Of course, I can use an &quot;if&quot; conditional to copy the data to
</span><br>
<span class="quotelev1">&gt; the output buffer, instead of sending the message to self,
</span><br>
<span class="quotelev1">&gt; although this makes the code somewhat ugly.
</span><br>
<span class="quotelev1">&gt; This brings up yet another question:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *5) Which one is better/faster: sending messages to self,
</span><br>
<span class="quotelev1">&gt; or copying the data to the output buffer?*
</span><br>
<p>If the copy is a straight memcpy, it's probably marginally faster to use memcpy only because you're not making as many function calls to get down into the MPI progression engine.  We didn't really take any pains to highly optimize the send-to-self case, but it should perform well.  
<br>
<p>You might want to benchmark memcpy vs. MPI_Sendrecv() to self (for example) and see if there's a noticeable difference.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14479.php">Jeff Squyres: "Re: [OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>Previous message:</strong> <a href="14477.php">Gus Correa: "[OMPI users] MPI_STARTALL doesn't compile with mpif90 and a multi-dimensional request array"</a>
<li><strong>In reply to:</strong> <a href="14476.php">Gus Correa: "[OMPI users] self-messaging questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14482.php">Gus Correa: "Re: [OMPI users] self-messaging questions"</a>
<li><strong>Reply:</strong> <a href="14482.php">Gus Correa: "Re: [OMPI users] self-messaging questions"</a>
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
