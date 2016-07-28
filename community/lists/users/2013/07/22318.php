<?
$subject_val = "Re: [OMPI users] knem/openmpi performance?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 12 06:55:49 2013" -->
<!-- isoreceived="20130712105549" -->
<!-- sent="Fri, 12 Jul 2013 10:55:43 +0000" -->
<!-- isosent="20130712105543" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem/openmpi performance?" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F7152DA_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.GSO.2.00.1307120946280.7293_at_sunserv3" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem/openmpi performance?<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-12 06:55:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22317.php">Mark Dixon: "[OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22317.php">Mark Dixon: "[OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22320.php">Paul Kapinos: "Re: [OMPI users] knem/openmpi performance?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW: a long time ago (read: many Open MPI / knem versions ago), I did a few benchmarks with knem vs. no knem Open MPI installations.  IIRC, I used the typical suspects like NetPIPE, the NPBs, etc.  There was a modest performance improvement (I don't remember the numbers offhand); it was a smaller improvement than I had hoped for -- particularly in point-to-point message passing latency (e.g., via NetPIPE).
<br>
<p>Let me digress into a little background... 
<br>
<p>The normal non-knem shared memory pattern is to copy a message from the source buffer in the source process to an area in shared memory.  The receiver then copies from the shared memory to the target buffer in its process.  For large messages, this process is pipelined so that the receiver doesn't have to wait for the whole buffer to be copied to shared memory before it starts copying out to the target buffer.  This is what's known as a &quot;copy-in/copy-out&quot; scheme -- you can think of it as 2 overlapping mem copies.
<br>
<p>The knem shared memory implementation still uses the shared memory block for short messages, coordination, and rendezvous.  But for large messages, the pipelined copy-in/copy-out is replaced with a direct copy from the source buffer in the source process to the target buffer in the receiver process (no pipelining is necessary, of course).  So there's only 1 mem copy for the bulk of the large message.
<br>
<p>There's an obvious difference here: the knem version uses 1 mem copy for the bulk of a large message, and the non-knem version uses 2 mem copies.  So why wouldn't the knem version kick the non-knem version's butt?
<br>
<p>I didn't dig deeply into it, but I rationalized that Open MPI's pipelined shared memory copies must be pretty good.  If you view this on a timeline, it might look like this (skipping lots of details about the initial rendezvous, etc.):
<br>
<p>Non-knem / copy-in/copy-out scheme
<br>
==================================
<br>
<p>Sender copying to shmem                                T=N
<br>
&nbsp;&nbsp;&nbsp;|----------------------------------------------------|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|----------------------------------------------------|
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Receiver copying from shmem                           T=N+x
<br>
<p>You can see that the completion time is T=N+x, where x is some small number.
<br>
<p>Knem scheme
<br>
===========
<br>
<p>Sender copying to receiver                             T=N
<br>
&nbsp;&nbsp;&nbsp;|----------------------------------------------------|
<br>
<p>The completion time here is T=N -- not T=N+x.
<br>
<p>(disclaimer: it's been a loooong time since I've looked at the code; I don't remember if, in OMPI's knem scheme, the sender or the receiver does the copy).
<br>
<p><span class="quotelev1">&gt;From these timelines, you can see that if OMPI's pipelining is good, the overall performance win of an individual send/receive of knem vs. no-knem is not that huge.  
</span><br>
<p>Huh.  Disappointing.  :-(
<br>
<p>BUT.
<br>
<p>Then I expanded my benchmarking to scale up the number of MPI processes on each server.  *This* is where the real win is.
<br>
<p>As you increase the number of MPI processes that are concurrently sending/receiving to/from each other, the &quot;win&quot; of knem becomes (much) more evident.  
<br>
<p>In short: doing 1 memcopy consumes half the memory bandwidth of 2 mem copies.  So when you have lots of MPI processes competing for memory bandwidth, it turns out that having each MPI process use half the bandwidth is a Really Good Idea.  :-)  This allows more MPI processes to do shared memory communications before you hit the memory bandwidth bottleneck.
<br>
<p>Darius Buntinas, Brice Goglin, et al. wrote an excellent paper about exactly this set of issues; see <a href="http://runtime.bordeaux.inria.fr/knem/">http://runtime.bordeaux.inria.fr/knem/</a>.  IIRC, it was the &quot;Cache-Efficient, Intranode Large-Message MPI Communication with MPICH2-Nemesis&quot; paper (but that was only after a quick glance at the titles this morning -- it might not be exactly that paper).
<br>
<p><p>On Jul 12, 2013, at 5:07 AM, Mark Dixon &lt;m.c.dixon_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm taking a look at knem, to see if it improves the performance of any applications on our QDR InfiniBand cluster, so I'm eager to hear about other people's experiences. This doesn't appear to have been discussed on this list before.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I appreciate that any affect that knem will have is entirely dependent on the application, scale and input data, but:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Does anyone know of any examples of popular software packages that benefit particularly from the knem support in openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Has anyone noticed any downsides to using knem?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mark
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Mark Dixon                       Email    : m.c.dixon_at_[hidden]
</span><br>
<span class="quotelev1">&gt; HPC/Grid Systems Support         Tel (int): 35429
</span><br>
<span class="quotelev1">&gt; Information Systems Services     Tel (ext): +44(0)113 343 5429
</span><br>
<span class="quotelev1">&gt; University of Leeds, LS2 9JT, UK
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Previous message:</strong> <a href="22317.php">Mark Dixon: "[OMPI users] knem/openmpi performance?"</a>
<li><strong>In reply to:</strong> <a href="22317.php">Mark Dixon: "[OMPI users] knem/openmpi performance?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22319.php">Mark Dixon: "Re: [OMPI users] knem/openmpi performance?"</a>
<li><strong>Reply:</strong> <a href="22320.php">Paul Kapinos: "Re: [OMPI users] knem/openmpi performance?"</a>
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
