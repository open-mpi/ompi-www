<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 18:37:34 2007" -->
<!-- isoreceived="20070321223734" -->
<!-- sent="Wed, 21 Mar 2007 16:37:30 -0600" -->
<!-- isosent="20070321223730" -->
<!-- name="Mohammad Huwaidi" -->
<!-- email="mohammad_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 536, Issue 2" -->
<!-- id="4601B3AA.30907_at_kelman.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="mailman.959.1174510277.26964.users_at_open-mpi.org" -->
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
<strong>From:</strong> Mohammad Huwaidi (<em>mohammad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-21 18:37:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2868.php">George Bosilca: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2868.php">George Bosilca: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<li><strong>Reply:</strong> <a href="2868.php">George Bosilca: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The kind of recovery I am seeking after is easy, and the following 
<br>
simple example illustrates the point:
<br>
I want to send a message to a different node.  If it does not respond to 
<br>
me, I do not want my application to crash.  I want to continue using 
<br>
other node resources.
<br>
<p>I hate it when a node crashes that all my MPI_WORLD goes now.  Is there 
<br>
a way around that?
<br>
<p>I could give up the other extra hairy stuff, but it would be difficult 
<br>
to lose my running job whenever a node or application goes down.
<br>
<p>users-request_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Send users mailing list submissions to
</span><br>
<span class="quotelev1">&gt; 	users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To subscribe or unsubscribe via the World Wide Web, visit
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; or, via email, send a message with subject or body 'help' to
</span><br>
<span class="quotelev1">&gt; 	users-request_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can reach the person managing the list at
</span><br>
<span class="quotelev1">&gt; 	users-owner_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When replying, please edit your Subject line so it is more specific
</span><br>
<span class="quotelev1">&gt; than &quot;Re: Contents of users digest...&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. threading (Sam Adams)
</span><br>
<span class="quotelev1">&gt;    2. Re: users Digest, Vol 536, Issue 1 (Mohammad Huwaidi)
</span><br>
<span class="quotelev1">&gt;    3. Fault Tolerance (Mohammad Huwaidi)
</span><br>
<span class="quotelev1">&gt;    4. Re: Fault Tolerance (Thomas Spraggins)
</span><br>
<span class="quotelev1">&gt;    5. Re: Fault Tolerance (George Bosilca)
</span><br>
<span class="quotelev1">&gt;    6. MPI processes  swapping out (Heywood, Todd)
</span><br>
<span class="quotelev1">&gt;    7. deadlock on barrier (tim gunter)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 21 Mar 2007 11:29:34 -0500
</span><br>
<span class="quotelev1">&gt; From: &quot;Sam Adams&quot; &lt;smadasam_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] threading
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt; 	&lt;faa2718c0703210929h3a9b4436wa255e863f1478bd9_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have been looking, but I haven't really found a good answer about
</span><br>
<span class="quotelev1">&gt; system level threading.  We are about to get a new cluster of
</span><br>
<span class="quotelev1">&gt; dual-processor quad-core nodes or 8 cores per node.  Traditionally I
</span><br>
<span class="quotelev1">&gt; would just tell MPI to launch two processes per dual processor single
</span><br>
<span class="quotelev1">&gt; core node, but with eight cores on a node, having 8 processes seems
</span><br>
<span class="quotelev1">&gt; inefficient.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My question is this: does OpenMPI sense that there are multiple cores
</span><br>
<span class="quotelev1">&gt; on a node and use something like pthreads instead of creating new
</span><br>
<span class="quotelev1">&gt; processes automatically when I request 8 processes for a node, or
</span><br>
<span class="quotelev1">&gt; should I run a single process per node and use OpenMP or pthreads
</span><br>
<span class="quotelev1">&gt; explicitly to get better performance on a per node basis?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Regards,
Mohammad Huwaidi
We can't resolve problems by using the same kind of thinking we used
when we created them.
                                                 --Albert Einstein
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2868.php">George Bosilca: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="2866.php">David Burns: "Re: [OMPI users] threading"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2868.php">George Bosilca: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
<li><strong>Reply:</strong> <a href="2868.php">George Bosilca: "Re: [OMPI users] users Digest, Vol 536, Issue 2"</a>
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
