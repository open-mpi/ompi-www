<?
$subject_val = "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  9 11:16:30 2012" -->
<!-- isoreceived="20120309161630" -->
<!-- sent="Fri, 9 Mar 2012 11:16:25 -0500" -->
<!-- isosent="20120309161625" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any" -->
<!-- id="B419F572-CF42-4C64-900B-F92B0F719F68_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F4E69DE.40102_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-09 11:16:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18727.php">Jeffrey Squyres: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18725.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18609.php">Eric Chamberland: "[OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18736.php">Eric Chamberland: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>Reply:</strong> <a href="18736.php">Eric Chamberland: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay.  Answers inline.
<br>
<p><p>On Feb 29, 2012, at 1:09 PM, Eric Chamberland wrote:
<br>
<p><span class="quotelev1">&gt; I would like to know which of &quot;waitone&quot; vs &quot;waitany&quot; is optimal and of course, will never produce deadlocks.
</span><br>
<p>In your sample application, either will work just fine -- they will not deadlock.
<br>
<p><span class="quotelev1">&gt; After executing several times, on different number of processes and different number of nodes and almost always large value of &quot;lNbInt&quot;, I *think* these could be good conclusions? :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #1- Both version take almost the same wall clock time to complete
</span><br>
<span class="quotelev1">&gt; #2- Both version do *not* produce deadlock
</span><br>
<p>For this application, I agree.
<br>
<p><span class="quotelev1">&gt; #3- MPI_WAIT_ANY_VERSION could do better if some work was really done with received data.
</span><br>
<p>Probably so.  It would probably do even better if the senders were sending at staggered times.
<br>
<p><span class="quotelev1">&gt; #4- MPI_WAIT_ANY_VERSION received always the data from processes on the same host.
</span><br>
<p>I'm not sure what you mean by that statement.
<br>
<p><span class="quotelev1">&gt; I haven't be able to reproduce a deadlock even while varying array length, number of processes and number of hosts.  How can I conclude there are no problem with this code?  Any reading suggestion?
</span><br>
<p><p>I think the classical conditions for deadlock apply here.  Summarizing, if you're going to block, you need to ensure that *something* will eventually complete that blocking (i.e., either the specific/WAIT will complete, or *some* sender/WAITANY will complete).
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18727.php">Jeffrey Squyres: "Re: [OMPI users] AlltoallV (with some zero send count values)"</a>
<li><strong>Previous message:</strong> <a href="18725.php">Robert Collyer: "Re: [OMPI users] Compilation errors: Unexpected EOF while looking for matching `'' on 1.4.5"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18609.php">Eric Chamberland: "[OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18736.php">Eric Chamberland: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>Reply:</strong> <a href="18736.php">Eric Chamberland: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
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
