<?
$subject_val = "Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 16 10:03:42 2011" -->
<!-- isoreceived="20110616140342" -->
<!-- sent="Thu, 16 Jun 2011 14:03:09 +0000" -->
<!-- isosent="20110616140309" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)" -->
<!-- id="CA1F68AF.5492%bwbarre_at_sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20110615114524.GC4178_at_telvanni.starfleet" -->
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
<strong>Subject:</strong> Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-16 10:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16725.php">Michael Cugley: "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90? Solved!"</a>
<li><strong>Previous message:</strong> <a href="16723.php">Ole Kliemann: "[OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<li><strong>In reply to:</strong> <a href="16723.php">Ole Kliemann: "[OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 6/15/11 5:45 AM, &quot;Ole Kliemann&quot; &lt;ole-ompi-2011_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt;On Mon, Jun 13, 2011 at 04:11:44PM +0000, Barrett, Brian W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; There are no missing calls to MPI_WIN_FENCE as the code is using passive
</span><br>
<span class="quotelev2">&gt;&gt; synchronization (lock/unlock).  The test code looks correct, I think
</span><br>
<span class="quotelev2">&gt;&gt;this
</span><br>
<span class="quotelev2">&gt;&gt; is a bug in Open MPI.  The code also fails on the development trunk, so
</span><br>
<span class="quotelev2">&gt;&gt; upgrading will not fix the bug.  I've filed a bug (#2809).
</span><br>
<span class="quotelev2">&gt;&gt;Unfortunately,
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure when I'll have time to investigate further.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Thanks alot for you help, much appreciated!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; One other note...  Even when everything works correctly, Open MPI's
</span><br>
<span class="quotelev2">&gt;&gt; passive target synchronization implementation is pretty poor (this
</span><br>
<span class="quotelev2">&gt;&gt;coming
</span><br>
<span class="quotelev2">&gt;&gt; from the guy who wrote the code).  Open MPI doesn't offer asynchronous
</span><br>
<span class="quotelev2">&gt;&gt; progress for lock/unlock, so all processes have to be entering in the
</span><br>
<span class="quotelev2">&gt;&gt;MPI
</span><br>
<span class="quotelev2">&gt;&gt; library for progress.  Also, the latency isn't the best.
</span><br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt;Taking your words above into account, Brian, I think I can assume that
</span><br>
<span class="quotelev1">&gt;these 40-50% idle time are not so much out of the order and no result on
</span><br>
<span class="quotelev1">&gt;a big mistake on my part.
</span><br>
<p>Given what you've described, yes, the overheads are probably expected.
<br>
The issue is that the threading design on which the one-sided relies for
<br>
progress was never implemented in the rest of Open MPI, and there's not a
<br>
good way to provide asynchronous progress using the data movement
<br>
interface inside Open MPI at this time.
<br>
<p>Brian
<br>
<p><pre>
-- 
  Brian W. Barrett
  Dept. 1423: Scalable System Software
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16725.php">Michael Cugley: "Re: [OMPI users] Conflicting versions of libgfortran.so with mpif90? Solved!"</a>
<li><strong>Previous message:</strong> <a href="16723.php">Ole Kliemann: "[OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<li><strong>In reply to:</strong> <a href="16723.php">Ole Kliemann: "[OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
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
