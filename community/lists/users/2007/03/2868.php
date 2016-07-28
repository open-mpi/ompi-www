<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 21:53:39 2007" -->
<!-- isoreceived="20070322015339" -->
<!-- sent="Wed, 21 Mar 2007 21:53:22 -0400" -->
<!-- isosent="20070322015322" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 536, Issue 2" -->
<!-- id="18527B07-508D-47A8-A530-00B092AD0E91_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4601B3AA.30907_at_kelman.com" -->
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
<strong>Date:</strong> 2007-03-21 21:53:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2869.php">Thomas Ropars: "[OMPI users] implementation of a message logging protocol"</a>
<li><strong>Previous message:</strong> <a href="2867.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="2867.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the only thing you really need is what you just described, then FT- 
<br>
MPI is your best pick. At least until we finish moving the fault  
<br>
tolerance features from FT-MPI in Open MPI. Giving you a time frame  
<br>
it will be difficult, the only thing I can state it's that this will  
<br>
not happens before the end of the year. At least not in the  
<br>
production quality branch. I'll make an announcement on the mailing  
<br>
list when such features will be available on the trunk.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Mar 21, 2007, at 6:37 PM, Mohammad Huwaidi wrote:
<br>
<p><span class="quotelev1">&gt; The kind of recovery I am seeking after is easy, and the following  
</span><br>
<span class="quotelev1">&gt; simple example illustrates the point:
</span><br>
<span class="quotelev1">&gt; I want to send a message to a different node.  If it does not  
</span><br>
<span class="quotelev1">&gt; respond to me, I do not want my application to crash.  I want to  
</span><br>
<span class="quotelev1">&gt; continue using other node resources.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hate it when a node crashes that all my MPI_WORLD goes now.  Is  
</span><br>
<span class="quotelev1">&gt; there a way around that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I could give up the other extra hairy stuff, but it would be  
</span><br>
<span class="quotelev1">&gt; difficult to lose my running job whenever a node or application  
</span><br>
<span class="quotelev1">&gt; goes down.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev2">&gt;&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev2">&gt;&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev2">&gt;&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev2">&gt;&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev2">&gt;&gt; Today's Topics:
</span><br>
<span class="quotelev2">&gt;&gt;    1. threading (Sam Adams)
</span><br>
<span class="quotelev2">&gt;&gt;    2. Re: users Digest, Vol 536, Issue 1 (Mohammad Huwaidi)
</span><br>
<span class="quotelev2">&gt;&gt;    3. Fault Tolerance (Mohammad Huwaidi)
</span><br>
<span class="quotelev2">&gt;&gt;    4. Re: Fault Tolerance (Thomas Spraggins)
</span><br>
<span class="quotelev2">&gt;&gt;    5. Re: Fault Tolerance (George Bosilca)
</span><br>
<span class="quotelev2">&gt;&gt;    6. MPI processes  swapping out (Heywood, Todd)
</span><br>
<span class="quotelev2">&gt;&gt;    7. deadlock on barrier (tim gunter)
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; Message: 1
</span><br>
<span class="quotelev2">&gt;&gt; Date: Wed, 21 Mar 2007 11:29:34 -0500
</span><br>
<span class="quotelev2">&gt;&gt; From: &quot;Sam Adams&quot; &lt;smadasam_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] threading
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID:
</span><br>
<span class="quotelev2">&gt;&gt; 	&lt;faa2718c0703210929h3a9b4436wa255e863f1478bd9_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt; I have been looking, but I haven't really found a good answer about
</span><br>
<span class="quotelev2">&gt;&gt; system level threading.  We are about to get a new cluster of
</span><br>
<span class="quotelev2">&gt;&gt; dual-processor quad-core nodes or 8 cores per node.  Traditionally I
</span><br>
<span class="quotelev2">&gt;&gt; would just tell MPI to launch two processes per dual processor single
</span><br>
<span class="quotelev2">&gt;&gt; core node, but with eight cores on a node, having 8 processes seems
</span><br>
<span class="quotelev2">&gt;&gt; inefficient.
</span><br>
<span class="quotelev2">&gt;&gt; My question is this: does OpenMPI sense that there are multiple cores
</span><br>
<span class="quotelev2">&gt;&gt; on a node and use something like pthreads instead of creating new
</span><br>
<span class="quotelev2">&gt;&gt; processes automatically when I request 8 processes for a node, or
</span><br>
<span class="quotelev2">&gt;&gt; should I run a single process per node and use OpenMP or pthreads
</span><br>
<span class="quotelev2">&gt;&gt; explicitly to get better performance on a per node basis?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Mohammad Huwaidi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We can't resolve problems by using the same kind of thinking we used
</span><br>
<span class="quotelev1">&gt; when we created them.
</span><br>
<span class="quotelev1">&gt;                                                 --Albert Einstein
</span><br>
<span class="quotelev1">&gt; &lt;mohammad.vcf&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2869.php">Thomas Ropars: "[OMPI users] implementation of a message logging protocol"</a>
<li><strong>Previous message:</strong> <a href="2867.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="2867.php">Mohammad Huwaidi: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
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
