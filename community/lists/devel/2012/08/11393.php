<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 14 10:05:31 2012" -->
<!-- isoreceived="20120814140531" -->
<!-- sent="Tue, 14 Aug 2012 14:04:54 +0000" -->
<!-- isosent="20120814140454" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD2395E782_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50234A7C.6020409_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-14 10:04:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11392.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>In reply to:</strong> <a href="11390.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/8/12 11:28 PM, &quot;Eugene Loh&quot; &lt;eugene.loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;On 8/7/2012 5:45 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; So the issue is when (for example) Fortran MPI_Recv says &quot;hey, C ints
</span><br>
<span class="quotelev2">&gt;&gt;are the same as Fortran INEGERs, so I don't need a temporary MPI_Status
</span><br>
<span class="quotelev2">&gt;&gt;buffer; I'll just use the INTEGER array that I was given, and pass it to
</span><br>
<span class="quotelev2">&gt;&gt;the back-end C MPI_Recv() routine.&quot; Then C MPI_Recv() tries to write to
</span><br>
<span class="quotelev2">&gt;&gt;the size_t variable, and it might be poorly aligned.  Kaboom.
</span><br>
<span class="quotelev1">&gt;Right.  Kind of.  Read on...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, specifically, what I propose is getting rid of the short-cuts that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;try to use Fortran statuses in-place if Fortran INTEGERs are as big as
</span><br>
<span class="quotelev3">&gt;&gt;&gt;C ints.  I can make the changes.  Sanity checks on all that are welcome.
</span><br>
<span class="quotelev2">&gt;&gt; Hmm.  I'm not excited about this -- the whole point is that if we don't
</span><br>
<span class="quotelev2">&gt;&gt;need to do an extra copy, let's not do it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a better way to fix this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Off the top of my head -- for example, could we change some of those
</span><br>
<span class="quotelev2">&gt;&gt;compile-time checks to run-time checks, and add in an alignment check?
</span><br>
<span class="quotelev2">&gt;&gt;E.g.:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; #if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev2">&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev2">&gt;&gt; #else
</span><br>
<span class="quotelev2">&gt;&gt;        c_status =&amp;c_status2;
</span><br>
<span class="quotelev2">&gt;&gt; #endif
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt;      /* The constant checks will be resolved at compile time; assume
</span><br>
<span class="quotelev2">&gt;&gt;         alignment_is_good() is an inline macro checking for &quot;good&quot;
</span><br>
<span class="quotelev2">&gt;&gt;alignment
</span><br>
<span class="quotelev2">&gt;&gt;         on platforms where alignment(int) != alignment(size_t) */
</span><br>
<span class="quotelev2">&gt;&gt;      if (OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT&amp;&amp;
</span><br>
<span class="quotelev2">&gt;&gt;alignment_is_good(status)) {
</span><br>
<span class="quotelev2">&gt;&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev2">&gt;&gt;      } else {
</span><br>
<span class="quotelev2">&gt;&gt;        c_status =&amp;c_status2;
</span><br>
<span class="quotelev2">&gt;&gt;      }
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would something like that work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm thinking that the benefit here is that we only penalize platforms
</span><br>
<span class="quotelev2">&gt;&gt;(with an extra &quot;if&quot; statement) where alignment(int) != alignment(size_t).
</span><br>
<span class="quotelev1">&gt;I did quite a bit more poking around.  It appears this issue is already
</span><br>
<span class="quotelev1">&gt;&quot;well known.&quot;  That is, due to this issue, we're not allowed to assume
</span><br>
<span class="quotelev1">&gt;that a status that the user passed to us (ompi/mpi/c layer) has proper
</span><br>
<span class="quotelev1">&gt;alignment since it might have come from Fortran.  So, we should use
</span><br>
<span class="quotelev1">&gt;OMPI_STATUS_SET and OMPI_STATUS_SET_COUNT instead of doing direct status
</span><br>
<span class="quotelev1">&gt;assignments.  Not only does ompi/request/request.h define these macros,
</span><br>
<span class="quotelev1">&gt;but it also gives a nice description of the issue and points us to trac
</span><br>
<span class="quotelev1">&gt;2526.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;It seems to me there are a number of places where we do direct status
</span><br>
<span class="quotelev1">&gt;assignments.  I found a couple of places in ompi/mca/pml/ob1/*.c and
</span><br>
<span class="quotelev1">&gt;quite a few more in ompi/mpi/c/*.c.  If I'm sufficiently inspired
</span><br>
<span class="quotelev1">&gt;tomorrow, I might look around to see if I can identify other places to
</span><br>
<span class="quotelev1">&gt;look.  I can also confirm this leads to failures -- not only the mprobe
</span><br>
<span class="quotelev1">&gt;stuff I reported but even vanilla MPI_Recv if you tweak the conditions
</span><br>
<span class="quotelev1">&gt;just right.  I'll try to get to this stuff tomorrow.
</span><br>
<p><p>That's incorrect.  Fortran statuses should never be passed to C
<br>
interfaces.  If you look at testany_f.c, for example, a temporary status
<br>
is created and then passed to the C binding (although, in this case, it
<br>
would probably be more efficient to pass it directly to
<br>
ompi_request_testany(), but that's not important here).  The part that is
<br>
important is that outside of the Fortran interfaces themselves, requests
<br>
are always C requests.
<br>
<p><p>Brian
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
<li><strong>Next message:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Previous message:</strong> <a href="11392.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>In reply to:</strong> <a href="11390.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11394.php">Jeff Squyres: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
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
