<?
$subject_val = "Re: [OMPI devel] MPI_Mprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug  9 01:28:35 2012" -->
<!-- isoreceived="20120809052835" -->
<!-- sent="Wed, 08 Aug 2012 22:28:28 -0700" -->
<!-- isosent="20120809052828" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Mprobe" -->
<!-- id="50234A7C.6020409_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="0CE4ADBF-E167-40D6-B1BE-4567BB517C1D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Mprobe<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-09 01:28:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11391.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Previous message:</strong> <a href="11389.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>In reply to:</strong> <a href="11385.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11393.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11393.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 8/7/2012 5:45 AM, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; So the issue is when (for example) Fortran MPI_Recv says &quot;hey, C ints are the same as Fortran INEGERs, so I don't need a temporary MPI_Status buffer; I'll just use the INTEGER array that I was given, and pass it to the back-end C MPI_Recv() routine.&quot; Then C MPI_Recv() tries to write to the size_t variable, and it might be poorly aligned.  Kaboom.
</span><br>
Right.  Kind of.  Read on...
<br>
<span class="quotelev2">&gt;&gt; So, specifically, what I propose is getting rid of the short-cuts that try to use Fortran statuses in-place if Fortran INTEGERs are as big as C ints.  I can make the changes.  Sanity checks on all that are welcome.
</span><br>
<span class="quotelev1">&gt; Hmm.  I'm not excited about this -- the whole point is that if we don't need to do an extra copy, let's not do it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a better way to fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Off the top of my head -- for example, could we change some of those compile-time checks to run-time checks, and add in an alignment check?  E.g.:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; #if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
</span><br>
<span class="quotelev1">&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;        c_status =&amp;c_status2;
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;      /* The constant checks will be resolved at compile time; assume
</span><br>
<span class="quotelev1">&gt;         alignment_is_good() is an inline macro checking for &quot;good&quot; alignment
</span><br>
<span class="quotelev1">&gt;         on platforms where alignment(int) != alignment(size_t) */
</span><br>
<span class="quotelev1">&gt;      if (OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT&amp;&amp;  alignment_is_good(status)) {
</span><br>
<span class="quotelev1">&gt;        c_status = (MPI_Status *) status;
</span><br>
<span class="quotelev1">&gt;      } else {
</span><br>
<span class="quotelev1">&gt;        c_status =&amp;c_status2;
</span><br>
<span class="quotelev1">&gt;      }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would something like that work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm thinking that the benefit here is that we only penalize platforms (with an extra &quot;if&quot; statement) where alignment(int) != alignment(size_t).
</span><br>
I did quite a bit more poking around.  It appears this issue is already 
<br>
&quot;well known.&quot;  That is, due to this issue, we're not allowed to assume 
<br>
that a status that the user passed to us (ompi/mpi/c layer) has proper 
<br>
alignment since it might have come from Fortran.  So, we should use 
<br>
OMPI_STATUS_SET and OMPI_STATUS_SET_COUNT instead of doing direct status 
<br>
assignments.  Not only does ompi/request/request.h define these macros, 
<br>
but it also gives a nice description of the issue and points us to trac 
<br>
2526.
<br>
<p>It seems to me there are a number of places where we do direct status 
<br>
assignments.  I found a couple of places in ompi/mca/pml/ob1/*.c and 
<br>
quite a few more in ompi/mpi/c/*.c.  If I'm sufficiently inspired 
<br>
tomorrow, I might look around to see if I can identify other places to 
<br>
look.  I can also confirm this leads to failures -- not only the mprobe 
<br>
stuff I reported but even vanilla MPI_Recv if you tweak the conditions 
<br>
just right.  I'll try to get to this stuff tomorrow.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11391.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Previous message:</strong> <a href="11389.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>In reply to:</strong> <a href="11385.php">Jeff Squyres: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11393.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11393.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  MPI_Mprobe"</a>
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
