<?
$subject_val = "Re: [OMPI users] Using MPI_Put/Get correctly?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 21:18:53 2010" -->
<!-- isoreceived="20101216021853" -->
<!-- sent="Wed, 15 Dec 2010 21:18:48 -0500" -->
<!-- isosent="20101216021848" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using MPI_Put/Get correctly?" -->
<!-- id="81544C12-E2B5-4E75-9CD8-5BA2B81C3A85_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="2B00361EE3107A4F88383EC1B041DC9A07D6EA24_at_VFOHMLAO01.Enterprise.afmc.ds.af.mil" -->
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
<strong>Date:</strong> 2010-12-15 21:18:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15160.php">Jeff Squyres: "Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15158.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>In reply to:</strong> <a href="15145.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "[OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is there a reason to convert your code from send/receive to put/get?
<br>
<p>The performance may not be that significantly different, and as you have noted, the MPI-2 put/get semantics are a total nightmare to understand (I personally advise people not to use them -- MPI-3 is cleaning up the put/get semantics a LOT).
<br>
<p><p>On Dec 15, 2010, at 3:15 PM, Grismer, Matthew J Civ USAF AFMC AFRL/RBAT wrote:
<br>
<p><span class="quotelev1">&gt; I am trying to modify the communication routines in our code to use
</span><br>
<span class="quotelev1">&gt; MPI_Put's instead of sends and receives.  This worked fine for several
</span><br>
<span class="quotelev1">&gt; variable Put's, but now I have one that is causing seg faults. Reading
</span><br>
<span class="quotelev1">&gt; through the MPI documentation it is not clear to me if what I am doing
</span><br>
<span class="quotelev1">&gt; is permissible or not.  Basically, the question is this - if I have
</span><br>
<span class="quotelev1">&gt; defined all of an array as a window on each processor, can I PUT data
</span><br>
<span class="quotelev1">&gt; from that array to remote processes at the same time as the remote
</span><br>
<span class="quotelev1">&gt; processes are PUTing into the local copy, assuming no overlaps of any of
</span><br>
<span class="quotelev1">&gt; the PUTs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are the details if that doesn't make sense.  I have a (Fortran)
</span><br>
<span class="quotelev1">&gt; array QF(6,2,N) on each processor, where N could be a very large number
</span><br>
<span class="quotelev1">&gt; (100,000). I create a window QFWIN on the entire array on all the
</span><br>
<span class="quotelev1">&gt; processors.  I define MPI_Type_indexed &quot;sending&quot; datatypes (QFSND) with
</span><br>
<span class="quotelev1">&gt; block lengths of 6 that send from QF(1,1,*), and MPI_Type_indexed
</span><br>
<span class="quotelev1">&gt; &quot;receiving&quot; datatypes (QFREC) with block lengths of 6 the receive into
</span><br>
<span class="quotelev1">&gt; QF(1,2,*).  Here * is non-repeating set of integers up to N.  I create
</span><br>
<span class="quotelev1">&gt; groups of processors that communicate, where these groups will all
</span><br>
<span class="quotelev1">&gt; exchange QF data, PUTing local QF(1,1,*) to remote QF(1,2,*).  So,
</span><br>
<span class="quotelev1">&gt; processor 1 is PUTing QF data to processors 2,3,4 at the same time 2,3,4
</span><br>
<span class="quotelev1">&gt; are putting their QF data to 1, and so on.  Processors 2,3,4 are PUTing
</span><br>
<span class="quotelev1">&gt; into non-overlapping regions of QF(1,2,*) on 1, and 1 is PUTing from
</span><br>
<span class="quotelev1">&gt; QF(1,1,*) to 2,3,4, and so on.  So, my calls look like this on each
</span><br>
<span class="quotelev1">&gt; processor:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; assertion = 0
</span><br>
<span class="quotelev1">&gt; call MPI_Win_post(group, assertion, QFWIN, ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_Win_start(group, assertion, QFWIN, ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; do I=1,neighbors
</span><br>
<span class="quotelev1">&gt;  call MPI_Put(QF, 1, QFSND(I), NEIGHBOR(I), 0, 1, QFREC(I), QFWIN,
</span><br>
<span class="quotelev1">&gt; ierr)
</span><br>
<span class="quotelev1">&gt; end do
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_Win_complete(QFWIN,ierr)
</span><br>
<span class="quotelev1">&gt; call MPI_Win_wait(QFWIN,ierr)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note I did define QFREC locally on each processor to properly represent
</span><br>
<span class="quotelev1">&gt; where the data was going on the remote processors.  The error value
</span><br>
<span class="quotelev1">&gt; ierr=0 after MPI_Win_post, MPI_Win_start, MPI_Put, and MPI_Win_complete,
</span><br>
<span class="quotelev1">&gt; and the code seg faults in MPI_Win_wait.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI 1.4.3 on Mac OS X 10.6.5, built with Intel XE (12.0)
</span><br>
<span class="quotelev1">&gt; compilers, and running on just 2 (internal) processors of my Mac Pro.
</span><br>
<span class="quotelev1">&gt; The code ran normally with this configuration up until the point I put
</span><br>
<span class="quotelev1">&gt; the above in.  Several other communications with MPI_Put similar to the
</span><br>
<span class="quotelev1">&gt; above work fine, though the windows are only on a subset of the
</span><br>
<span class="quotelev1">&gt; communicated array, and the origin data is being PUT from part of the
</span><br>
<span class="quotelev1">&gt; array that is not within the window.
</span><br>
<span class="quotelev1">&gt; _____________________________________________________
</span><br>
<span class="quotelev1">&gt; Matt
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="15160.php">Jeff Squyres: "Re: [OMPI users] Trouble with IPM &amp; OpenMPI on SGI Altix"</a>
<li><strong>Previous message:</strong> <a href="15158.php">Jeff Squyres: "Re: [OMPI users] Calling MPI_Test() too many times results in a time spike"</a>
<li><strong>In reply to:</strong> <a href="15145.php">Grismer, Matthew J Civ USAF AFMC AFRL/RBAT: "[OMPI users] Using MPI_Put/Get correctly?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
<li><strong>Reply:</strong> <a href="15174.php">Matthew J. Grismer: "Re: [OMPI users] Using MPI_Put/Get correctly?"</a>
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
