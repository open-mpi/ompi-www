<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 16 14:28:28 2007" -->
<!-- isoreceived="20070716182828" -->
<!-- sent="Mon, 16 Jul 2007 11:28:22 -0700" -->
<!-- isosent="20070716182822" -->
<!-- name="Matthew Moskewicz" -->
<!-- email="moskewcz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] devel Digest, Vol 801, Issue 1" -->
<!-- id="325001540707161128r7a59d3d5t55a2da63cb37c123_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.3.1184601604.31483.devel_at_open-mpi.org" -->
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
<strong>From:</strong> Matthew Moskewicz (<em>moskewcz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-16 14:28:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1907.php">Neil Ludban: "[OMPI devel] InfiniBand timeout errors"</a>
<li><strong>Previous message:</strong> <a href="1905.php">Jeff Squyres: "[OMPI devel] MTT OMPI results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Reply:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi again,
<br>
<p><span class="quotelev4">&gt; &gt;&gt;&gt; i'll probably just continue experimenting on my own for the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; moment (tracking
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; any updates to the main trunk LSF support) to see if i can figure
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it out. any
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; advice the best way to get such back support into trunk, if and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; when if exists
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; / is working?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The *best* way would be for you to sign a third-party agreement -
</span><br>
<span class="quotelev3">&gt; &gt;&gt; see the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  web site for details and a copy. Barring that, the only option
</span><br>
<span class="quotelev3">&gt; &gt;&gt; would be to
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  submit the code through either Jeff or I. We greatly prefer the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; agreement
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  method as it is (a) less burdensome on us and (b) gives you greater
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  flexibility.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i'll talk to 'the man' -- it should be okay ... eventually, at
</span><br>
<span class="quotelev2">&gt; &gt; least ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/community/contribute/">http://www.open-mpi.org/community/contribute/</a> for details.  As an
</span><br>
<span class="quotelev1">&gt; open project, we always welcome new developers, but we do need to
</span><br>
<span class="quotelev1">&gt; keep the IP tidy.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>will do.
<br>
<p><span class="quotelev1">&gt; MPI-2 does support the MPI_COMM_JOIN and MPI_COMM_ACCEPT/
</span><br>
<span class="quotelev1">&gt; MPI_COMM_CONNECT models.  We do support this in Open MPI, but the
</span><br>
<span class="quotelev1">&gt; restrictions (in terms of ORTE) may not be sufficient for you.
</span><br>
<p>perhaps i'll experiment -- any clues as to what the orte restrictions might be?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some other random notes in no particular order:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - As you noted, the LSF support is *very* new; it was just added last
</span><br>
<span class="quotelev1">&gt; week.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - It also likely doesn't work yet; we started the integration work
</span><br>
<span class="quotelev1">&gt; and ran into a technical issue that required further discussion with
</span><br>
<span class="quotelev1">&gt; Platform.  They're currently looking into it; we stopped the LSF work
</span><br>
<span class="quotelev1">&gt; in ORTE until they get back to us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>i see -- i might be trying to work on the 6.x support today. can you
<br>
give me any hints on what the problem was in case i run into the same
<br>
issue?
<br>
<p><span class="quotelev1">&gt; - FWIW, one of the main reasons OMPI/ORTE didn't add extensive/
</span><br>
<span class="quotelev1">&gt; flexible support for dynamic addition of resources was the potential
</span><br>
<span class="quotelev1">&gt; for queue time.  Many systems run &quot;full&quot; all the time, so if you try
</span><br>
<span class="quotelev1">&gt; to acquire more resources, you could just sit in a queue for minutes/
</span><br>
<span class="quotelev1">&gt; hours/days/weeks before getting nodes.  While it is certainly
</span><br>
<span class="quotelev1">&gt; possible to program with this model, we didn't really want to get
</span><br>
<span class="quotelev1">&gt; into the rats nest of corner cases that this would entail, especially
</span><br>
<span class="quotelev1">&gt; since very few users are asking for it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>yeah, it does seem like the queuing issue is critical. i think as long
<br>
as the requests for more resources are non-blocking, and the
<br>
application itself can deal with that, it shouldn't create too many
<br>
corner cases. in fact, if the application wants to block (potentially
<br>
for a long time) that might be okay too (i.e. on the initial big
<br>
allocation, just after some startup routine determines the needed
<br>
initial resources).
<br>
<p><span class="quotelev1">&gt; - That being said, MPI_THREAD_MULTIPLE and MPI_COMM_SPAWN *might*
</span><br>
<span class="quotelev1">&gt; offer a way out here.  But I think a) THREAD_MULTIPLE isn't working
</span><br>
<span class="quotelev1">&gt; yet (other OMPI members are working on this), and b) even when
</span><br>
<span class="quotelev1">&gt; THREAD_MULTIPLE works, there will be ORTE issues to deal with
</span><br>
<span class="quotelev1">&gt; (canceling pending resource allocations, etc.).  Ralph mentioned that
</span><br>
<span class="quotelev1">&gt; someone else is working on such things on the TM/PBS/Torque side; I
</span><br>
<span class="quotelev1">&gt; haven't followed that effort closely.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>it seems that MPI_THREAD_MULTIPLE is to be avoided for now, but there
<br>
are perhaps other workarounds (using threads in other ways, etc.).
<br>
also, i'd love to hear about the existing efforts -- i'm hoping
<br>
someone working on them might be reading this ... ;)
<br>
<p><span class="quotelev2">&gt; &gt; well, certainly part of the issue is the need (or at least strong
</span><br>
<span class="quotelev2">&gt; &gt; preference) to support 6.2 -- but read on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
[SNIP LSF API info/guesswork]
<br>
<p><span class="quotelev1">&gt; I am certainly not an expert on LSF (nor its API) -- I only started
</span><br>
<span class="quotelev1">&gt; using it last week!  Do you have any contacts to ask at Platform?
</span><br>
<span class="quotelev1">&gt; They would likely be the best ones to discuss this with.
</span><br>
<p>i'm in the same boat. i'll try to talk to the people here at cadence
<br>
that might have said contacts at Platform.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Matt.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1907.php">Neil Ludban: "[OMPI devel] InfiniBand timeout errors"</a>
<li><strong>Previous message:</strong> <a href="1905.php">Jeff Squyres: "[OMPI devel] MTT OMPI results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
<li><strong>Reply:</strong> <a href="1909.php">Jeff Squyres: "Re: [OMPI devel] devel Digest, Vol 801, Issue 1"</a>
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
