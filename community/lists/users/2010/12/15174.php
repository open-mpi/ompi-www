<?
$subject_val = "Re: [OMPI users] Using MPI_Put/Get correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 09:15:16 2010" -->
<!-- isoreceived="20101216141516" -->
<!-- sent="Thu, 16 Dec 2010 09:15:08 -0500" -->
<!-- isosent="20101216141508" -->
<!-- name="Matthew J. Grismer" -->
<!-- email="matthew.grismer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI_Put/Get correctly?" -->
<!-- id="C92F891C.490B%matthew.grismer_at_wpafb.af.mil" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="81544C12-E2B5-4E75-9CD8-5BA2B81C3A85_at_cisco.com" -->
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
<strong>From:</strong> Matthew J. Grismer (<em>matthew.grismer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 09:15:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I found a presentation on the web that showed significant performance
<br>
benefits for the one-sided communication, I presumed it was from hardware
<br>
RDMA support that the one-sided calls could take advantage of.  But I gather
<br>
from the your question that is not necessarily the case.  Are you aware of
<br>
cases in which it has made a significant difference?
<br>
<p><p>On 12/15/10 9:18 PM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Is there a reason to convert your code from send/receive to put/get?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The performance may not be that significantly different, and as you have
</span><br>
<span class="quotelev1">&gt; noted, the MPI-2 put/get semantics are a total nightmare to understand (I
</span><br>
<span class="quotelev1">&gt; personally advise people not to use them -- MPI-3 is cleaning up the put/get
</span><br>
<span class="quotelev1">&gt; semantics a LOT).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2010, at 3:15 PM, Grismer, Matthew J Civ USAF AFMC AFRL/RBAT wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to modify the communication routines in our code to use
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Put's instead of sends and receives.  This worked fine for several
</span><br>
<span class="quotelev2">&gt;&gt; variable Put's, but now I have one that is causing seg faults. Reading
</span><br>
<span class="quotelev2">&gt;&gt; through the MPI documentation it is not clear to me if what I am doing
</span><br>
<span class="quotelev2">&gt;&gt; is permissible or not.  Basically, the question is this - if I have
</span><br>
<span class="quotelev2">&gt;&gt; defined all of an array as a window on each processor, can I PUT data
</span><br>
<span class="quotelev2">&gt;&gt; from that array to remote processes at the same time as the remote
</span><br>
<span class="quotelev2">&gt;&gt; processes are PUTing into the local copy, assuming no overlaps of any of
</span><br>
<span class="quotelev2">&gt;&gt; the PUTs?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are the details if that doesn't make sense.  I have a (Fortran)
</span><br>
<span class="quotelev2">&gt;&gt; array QF(6,2,N) on each processor, where N could be a very large number
</span><br>
<span class="quotelev2">&gt;&gt; (100,000). I create a window QFWIN on the entire array on all the
</span><br>
<span class="quotelev2">&gt;&gt; processors.  I define MPI_Type_indexed &quot;sending&quot; datatypes (QFSND) with
</span><br>
<span class="quotelev2">&gt;&gt; block lengths of 6 that send from QF(1,1,*), and MPI_Type_indexed
</span><br>
<span class="quotelev2">&gt;&gt; &quot;receiving&quot; datatypes (QFREC) with block lengths of 6 the receive into
</span><br>
<span class="quotelev2">&gt;&gt; QF(1,2,*).  Here * is non-repeating set of integers up to N.  I create
</span><br>
<span class="quotelev2">&gt;&gt; groups of processors that communicate, where these groups will all
</span><br>
<span class="quotelev2">&gt;&gt; exchange QF data, PUTing local QF(1,1,*) to remote QF(1,2,*).  So,
</span><br>
<span class="quotelev2">&gt;&gt; processor 1 is PUTing QF data to processors 2,3,4 at the same time 2,3,4
</span><br>
<span class="quotelev2">&gt;&gt; are putting their QF data to 1, and so on.  Processors 2,3,4 are PUTing
</span><br>
<span class="quotelev2">&gt;&gt; into non-overlapping regions of QF(1,2,*) on 1, and 1 is PUTing from
</span><br>
<span class="quotelev2">&gt;&gt; QF(1,1,*) to 2,3,4, and so on.  So, my calls look like this on each
</span><br>
<span class="quotelev2">&gt;&gt; processor:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; assertion = 0
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Win_post(group, assertion, QFWIN, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Win_start(group, assertion, QFWIN, ierr)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; do I=1,neighbors
</span><br>
<span class="quotelev2">&gt;&gt;  call MPI_Put(QF, 1, QFSND(I), NEIGHBOR(I), 0, 1, QFREC(I), QFWIN,
</span><br>
<span class="quotelev2">&gt;&gt; ierr)
</span><br>
<span class="quotelev2">&gt;&gt; end do
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Win_complete(QFWIN,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_Win_wait(QFWIN,ierr)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note I did define QFREC locally on each processor to properly represent
</span><br>
<span class="quotelev2">&gt;&gt; where the data was going on the remote processors.  The error value
</span><br>
<span class="quotelev2">&gt;&gt; ierr=0 after MPI_Win_post, MPI_Win_start, MPI_Put, and MPI_Win_complete,
</span><br>
<span class="quotelev2">&gt;&gt; and the code seg faults in MPI_Win_wait.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm using Open MPI 1.4.3 on Mac OS X 10.6.5, built with Intel XE (12.0)
</span><br>
<span class="quotelev2">&gt;&gt; compilers, and running on just 2 (internal) processors of my Mac Pro.
</span><br>
<span class="quotelev2">&gt;&gt; The code ran normally with this configuration up until the point I put
</span><br>
<span class="quotelev2">&gt;&gt; the above in.  Several other communications with MPI_Put similar to the
</span><br>
<span class="quotelev2">&gt;&gt; above work fine, though the windows are only on a subset of the
</span><br>
<span class="quotelev2">&gt;&gt; communicated array, and the origin data is being PUT from part of the
</span><br>
<span class="quotelev2">&gt;&gt; array that is not within the window.
</span><br>
<span class="quotelev2">&gt;&gt; _____________________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; Matt
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Previous message:</strong> <a href="15173.php">Jeff Squyres: "Re: [OMPI users] difference between single and double precision"</a>
<li><strong>In reply to:</strong> <a href="15159.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15175.php">Jeff Squyres: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
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
