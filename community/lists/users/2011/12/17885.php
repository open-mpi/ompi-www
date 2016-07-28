<?
$subject_val = "Re: [OMPI users] Program hangs in mpi_bcast";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  3 07:36:24 2011" -->
<!-- isoreceived="20111203123624" -->
<!-- sent="Sat, 3 Dec 2011 07:36:19 -0500" -->
<!-- isosent="20111203123619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Program hangs in mpi_bcast" -->
<!-- id="6FB48BE5-E3EB-4471-AC6D-E6054DC0BE29_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="000201ccb0f9$7e26a970$2044efc3_at_alexg" -->
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
<strong>Subject:</strong> Re: [OMPI users] Program hangs in mpi_bcast<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-03 07:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17886.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17884.php">Paul Kapinos: "[OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>In reply to:</strong> <a href="17883.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17915.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Reply:</strong> <a href="17915.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 2, 2011, at 8:50 AM, Alex A. Granovsky wrote:
<br>
<p><span class="quotelev1">&gt;    I would like to start discussion on implementation of collective
</span><br>
<span class="quotelev1">&gt; operations within OpenMPI. The reason for this is at least twofold.
</span><br>
<span class="quotelev1">&gt; Last months, there was the constantly growing number of messages in
</span><br>
<span class="quotelev1">&gt; the list sent by persons facing problems with collectives so I do
</span><br>
<span class="quotelev1">&gt; believe these issues must be discussed and hopefully will finally
</span><br>
<span class="quotelev1">&gt; attract proper attention of OpenMPI developers. The second one is my
</span><br>
<span class="quotelev1">&gt; involvement in the development of Firefly Quantum Chemistry package,
</span><br>
<span class="quotelev1">&gt; which, of course, uses collectives rather intensively.
</span><br>
<p>Greetings Alex, and thanks for your note.  We take it quite seriously, and had a bunch of phone/off-list conversations about it in the past 24 hours.
<br>
<p>Let me shed a little light on the history with regards to this particular issue...
<br>
<p>- This issue was originally brought to light by LANL quite some time ago.  They discovered that one of their MPI codes was hanging in the middle of lengthy runs.  After some investigation, it was determined that it was hanging in the middle of some collective operations -- MPI_REDUCE, IIRC (maybe MPI_ALLREDUCE?  For the purposes of this email, I'll assume MPI_REDUCE). 
<br>
<p>- It turns out that this application called MPI_REDUCE a *lot*.  Which is not uncommon.  However, it was actually a fairly poorly architected application, such that it was doing things like repeatedly invoking MPI_REDUCE on single variables rather than bundling them up into an array and computing them all with a single MPI_REDUCE (for example).  Calling MPI_REDUCE a lot is not necessarily a problem, per se, however -- MPI guarantees that this is supposed to be ok.  I'll bring up below why I mention this specific point.
<br>
<p>- After some investigating at LANL, they determined that putting a barrier in every N iterations caused the hangs to stop.  A little experimentation determined that running a barrier every 1000 collective operations both did not affect performance in any noticeable way and avoided whatever the underlying problem was.
<br>
<p>- The user did not want to add the barriers to their code, so we added another collective module that internally counts collective operations and invokes a barrier every N iterations (where N is settable via MCA parameter).  We defaulted N to 1000 because it solved LANL's problems.  I do not recall offhand whether we experimented to see if we could make N *more* than 1000 or not.
<br>
<p>- Compounding the difficulty of this investigation was the fact that other Open MPI community members had an incredibly difficult time reproducing the problem.  I don't think that I was able to reproduce the problem at all, for example.  I just took Ralph's old reproducers and tried again, and am unable to make OMPI 1.4 or OMPI 1.5 hang.  I actually modified his reproducers to make them a bit *more* abusive (i.e., flood rank 0 with even *more* unexpected incoming messages), but I still can't get it to hang.
<br>
<p>- To be clear: due to personnel changes at LANL at the time, there was very little experience in the MPI layer at LANL (Ralph, who was at LANL at the time, is the ORTE guy -- he actively stays out of the MPI layer whenever possible).  The application that generated the problem was on restricted / un-shareable networks, so no one else in the OMPI community could see them.  So:
<br>
<p>&nbsp;&nbsp;- no one else could replicate the problem
<br>
&nbsp;&nbsp;- no OMPI layer expert could see the application that caused the problem
<br>
<p>This made it *extremely* difficult to diagnose.  As such, the barrier-every-N-iterations solution was deemed sufficient.
<br>
<p>- There were some *suppositions* about what the real problem was, but we were never able to investigate properly, due to the conditions listed above.  The suppositions included:
<br>
<p>&nbsp;&nbsp;- some kind of race condition where an incoming message is dropped.  This seemed unlikely, however, because if we were dropping messages, that kind of problem should have showed up long ago
<br>
&nbsp;&nbsp;- resource exhaustion.  There are 3 documented issues with Open MPI running out of registered memory (one of which is just about to get fixed).  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2295">https://svn.open-mpi.org/trac/ompi/ticket/2295</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2155">https://svn.open-mpi.org/trac/ompi/ticket/2155</a>
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2157">https://svn.open-mpi.org/trac/ompi/ticket/2157</a> (this one is about to be fixed)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;It *could* be an issue with running out of registered memory, but preliminary investigation indicated that it *might* not have been.  However, this investigation was hampered by the factors above, and therefore was not completed (and therefore was not definitive).
<br>
<p>FWIW, LANL now does have additional OMPI-level experts on staff, but the one problematic application that showed this behavior has been re-written/modernized and no longer exhibits the problem.  Hence, no one can justify reviving the old, complex, legacy code to figure out what, if any, was the actual problem.
<br>
<p>- Since no one else was able to replicate the problem, we determined that the barrier-every-N-iterations solution was sufficient.  We added the sync module to OMPI v1.4 and v1.5, and made it the default.  It solved LANL's problems and didn't affect performance in a noticeable way: problem solved, let's move on to the next issue.
<br>
<p>- The most recent report about this issue had the user claim that they had to set the iteration count down to *5* (vs. 1000) before their code worked right.  This did set off alarm bells in my head -- *5* is waaaay too small of a number.  That's why I specifically asked if there was a way we could get a reproducer for that issue -- it would (hopefully) be a smoking gun pointing to whatever the actual underlying issue was.  Unfortunately, the user had a good enough solution and moved on, so a reproducer wasn't possible with available resources.  That being said, given that the number the user had to use was *5*, I wonder if there is some other problem / race condition in the application itself.  Keep in mind that just because an application runs with one MPI implementation doesn't mean that it is correct / conformant.  But without a detailed analysis of the problematic application code, it's impossible to say.
<br>
<p>- Per the &quot;the original LANL code was poorly architected&quot; comment above, it falls into this same category: we don't actually know if the application itself was correct.  Since there were no MPI experts available at LANL at the time, the MPI application itself was not analyzed to see if it, itself, was correct.  To be clear: it is *possible* that OMPI is correct in hanging because the application itself is invalid.  That sounds like me avoiding responsibility, but it is a possibility that cannot be ignored.  We've run into *lots* of faulty use applications that, once corrected, run just fine.  But that being said, we don't *know* that the application was faulty (nor did we assume it) because a proper analysis was not able to be done both on that code or what was happening inside OMPI.  So we don't know where the problem was.
<br>
<p>So -- that's why we are where we are today.  Basically: a) this issue seemed to happen to a *very* small number of users, and b) no one has created a reproducer that MPI experts can use to reliably diagnose the actual problem.
<br>
<p>My only point in this lengthy recitation of history: there are (good) reasons why we are where we are.
<br>
<p>All that being said, however, if a) and/or b) are incorrect -- e.g., if you have a simple reproducer code that can exhibit the problem -- that would be *great*.  I'd also apologize, because we honestly thought this was a problem that had affected a very small number of people and that the coll sync workaround fixed the issue for everyone in an un-noticeable way.
<br>
<p><span class="quotelev1">&gt;   Some of our users would like to use Firefly with OpenMPI. Usually, we
</span><br>
<span class="quotelev1">&gt; simply answer them that OpenMPI is too buggy to be used.
</span><br>
<p>This surprises me.  Is this with regards to this collective/hang issue, or something else?  I don't see prior emails from you indicating any specific bugs -- did I miss them?  It would be good to get whatever the issues are fixed.
<br>
<p>Do you have some specific issues that you could report to us?
<br>
<p>More specifically, do you have a simple reproducer that shows the collective hangs when the coll sync module is disabled?  That would be most helpful.
<br>
<p>If you're still reading this super lengthy email :-), many thanks for your time for a) reporting the issue, and b) reading my huge reply!
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
<li><strong>Next message:</strong> <a href="17886.php">arnaud Heritier: "Re: [OMPI users] Qlogic &amp; openmpi"</a>
<li><strong>Previous message:</strong> <a href="17884.php">Paul Kapinos: "[OMPI users] Open MPI and DAPL 2.0.34 are incompatible?"</a>
<li><strong>In reply to:</strong> <a href="17883.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17915.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
<li><strong>Reply:</strong> <a href="17915.php">Alex A. Granovsky: "Re: [OMPI users] Program hangs in mpi_bcast"</a>
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
