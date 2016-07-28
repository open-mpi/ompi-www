<?
$subject_val = "Re: [OMPI users] Using MPI_Put/Get correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 09:34:36 2010" -->
<!-- isoreceived="20101216143436" -->
<!-- sent="Thu, 16 Dec 2010 09:34:31 -0500" -->
<!-- isosent="20101216143431" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI_Put/Get correctly?" -->
<!-- id="4B017A66-2933-4E1D-B37B-80846176F778_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C92F891C.490B%matthew.grismer_at_wpafb.af.mil" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using MPI_Put/Get correctly?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 09:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI uses RDMA under the covers for send/receive when it makes sense.  See these FAQ entries for more details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.2">http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.2</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3">http://www.open-mpi.org/faq/?category=openfabrics#large-message-tuning-1.3</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned">http://www.open-mpi.org/faq/?category=openfabrics#large-message-leave-pinned</a>
<br>
<p>The short version is that in many cases, we're doing the RDMA for you anyway and you can keep your send/receive semantics.  In general, RDMA helps in 2 cases:
<br>
<p>1. sending lots of short messages to a small number of peer processes.  With RDMA, you can get lower latency of delivery of these messages.
<br>
<p>2. sending large messages.  With RDMA, you can get higher bandwidth and interrupt the receiver's CPU less often (i.e., more overlap of communication / computation).
<br>
<p>If you don't have either of these cases, RDMA might not be that important to your application.
<br>
<p>One crass generalization (which isn't entirely accurate, but it's probably close enough for this discussion) is that you should use whichever of 1 or 2 sided semantics are easier for your application's native abstractions.  Software's complicated enough; if you don't need a (possible) 2% performance improvement (I made that number up as an example), then don't add a pile of incredibly complex code that will be a nightmare to maintain over time.  
<br>
<p>Additionally, since MPI-3 is updating the semantics of the one-sided stuff, it might be worth waiting for all those clarifications before venturing into the MPI one-sided realm.  One-sided semantics are much more subtle and complex than two-sided semantics.
<br>
<p>That's my $0.02.  :-)
<br>
<p><p>On Dec 16, 2010, at 9:15 AM, Matthew J. Grismer wrote:
<br>
<p><span class="quotelev1">&gt; I found a presentation on the web that showed significant performance
</span><br>
<span class="quotelev1">&gt; benefits for the one-sided communication, I presumed it was from hardware
</span><br>
<span class="quotelev1">&gt; RDMA support that the one-sided calls could take advantage of.  But I gather
</span><br>
<span class="quotelev1">&gt; from the your question that is not necessarily the case.  Are you aware of
</span><br>
<span class="quotelev1">&gt; cases in which it has made a significant difference?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/15/10 9:18 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a reason to convert your code from send/receive to put/get?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The performance may not be that significantly different, and as you have
</span><br>
<span class="quotelev2">&gt;&gt; noted, the MPI-2 put/get semantics are a total nightmare to understand (I
</span><br>
<span class="quotelev2">&gt;&gt; personally advise people not to use them -- MPI-3 is cleaning up the put/get
</span><br>
<span class="quotelev2">&gt;&gt; semantics a LOT).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 15, 2010, at 3:15 PM, Grismer, Matthew J Civ USAF AFMC AFRL/RBAT wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am trying to modify the communication routines in our code to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Put's instead of sends and receives.  This worked fine for several
</span><br>
<span class="quotelev3">&gt;&gt;&gt; variable Put's, but now I have one that is causing seg faults. Reading
</span><br>
<span class="quotelev3">&gt;&gt;&gt; through the MPI documentation it is not clear to me if what I am doing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is permissible or not.  Basically, the question is this - if I have
</span><br>
<span class="quotelev3">&gt;&gt;&gt; defined all of an array as a window on each processor, can I PUT data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from that array to remote processes at the same time as the remote
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processes are PUTing into the local copy, assuming no overlaps of any of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the PUTs?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Here are the details if that doesn't make sense.  I have a (Fortran)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; array QF(6,2,N) on each processor, where N could be a very large number
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (100,000). I create a window QFWIN on the entire array on all the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processors.  I define MPI_Type_indexed &quot;sending&quot; datatypes (QFSND) with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; block lengths of 6 that send from QF(1,1,*), and MPI_Type_indexed
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;receiving&quot; datatypes (QFREC) with block lengths of 6 the receive into
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QF(1,2,*).  Here * is non-repeating set of integers up to N.  I create
</span><br>
<span class="quotelev3">&gt;&gt;&gt; groups of processors that communicate, where these groups will all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exchange QF data, PUTing local QF(1,1,*) to remote QF(1,2,*).  So,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor 1 is PUTing QF data to processors 2,3,4 at the same time 2,3,4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are putting their QF data to 1, and so on.  Processors 2,3,4 are PUTing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into non-overlapping regions of QF(1,2,*) on 1, and 1 is PUTing from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; QF(1,1,*) to 2,3,4, and so on.  So, my calls look like this on each
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assertion = 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_Win_post(group, assertion, QFWIN, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_Win_start(group, assertion, QFWIN, ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do I=1,neighbors
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_Put(QF, 1, QFSND(I), NEIGHBOR(I), 0, 1, QFREC(I), QFWIN,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; end do
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_Win_complete(QFWIN,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; call MPI_Win_wait(QFWIN,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note I did define QFREC locally on each processor to properly represent
</span><br>
<span class="quotelev3">&gt;&gt;&gt; where the data was going on the remote processors.  The error value
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ierr=0 after MPI_Win_post, MPI_Win_start, MPI_Put, and MPI_Win_complete,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the code seg faults in MPI_Win_wait.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using Open MPI 1.4.3 on Mac OS X 10.6.5, built with Intel XE (12.0)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compilers, and running on just 2 (internal) processors of my Mac Pro.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The code ran normally with this configuration up until the point I put
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the above in.  Several other communications with MPI_Put similar to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; above work fine, though the windows are only on a subset of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; communicated array, and the origin data is being PUT from part of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; array that is not within the window.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _____________________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Matt
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>In reply to:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15176.php">James Dinan: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
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
