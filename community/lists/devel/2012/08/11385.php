<?
$subject_val = "Re: [OMPI devel] MPI_Mprobe";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  7 08:45:51 2012" -->
<!-- isoreceived="20120807124551" -->
<!-- sent="Tue, 7 Aug 2012 08:45:46 -0400" -->
<!-- isosent="20120807124546" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Mprobe" -->
<!-- id="0CE4ADBF-E167-40D6-B1BE-4567BB517C1D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5017F706.7040101_at_oracle.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-07 08:45:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11386.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Previous message:</strong> <a href="11384.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11348.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11390.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11390.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene -- somehow this slipped by me in the disaster that is my inbox.  Sorry! 
<br>
<p>Answers below...
<br>
<p><p>On Jul 31, 2012, at 11:17 AM, Eugene Loh wrote:
<br>
<p><span class="quotelev2">&gt;&gt; What specifically do you propose?  I don't remember offhand if the status conversion macros are the same as the regular int/INTEGER conversion macros -- we want to keep the no-op behavior for the regular int/INTEGER conversion macros and only handle the conversion of MPI_Status separately, I think.  Specifically: for MPI_Status, we can probably still have those shortcuts for the int/INTEGERs, but treat the copying to the size_t separately.
</span><br>
<span class="quotelev1">&gt; I'm embarrassingly unfamiliar with the code.  My impression is that internally we deal with C status structures and so our requirements for Fortran status are:
</span><br>
<span class="quotelev1">&gt; *)  enough bytes to hold whatever is in a C status
</span><br>
<span class="quotelev1">&gt; *)  several words are addressable via the indices MPI_SOURCE, MPI_TAG, and MPI_ERROR
</span><br>
<p>Correct.
<br>
<p><span class="quotelev1">&gt; So, I think what we do today is sufficient in most respects.  Copying between Fortran and C integer-by-integer is fine.  It might be a little nonsensical for an 8-byte size_t component to be handled as two 4-byte words, but if we do so only for copying and otherwise only use that component from the C side, things should be fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The only problem is if we try to use the Fortran array in-place.  It's big enough, but its alignment might be wrong.
</span><br>
<p>Ok.
<br>
<p>So the issue is when (for example) Fortran MPI_Recv says &quot;hey, C ints are the same as Fortran INEGERs, so I don't need a temporary MPI_Status buffer; I'll just use the INTEGER array that I was given, and pass it to the back-end C MPI_Recv() routine.&quot; Then C MPI_Recv() tries to write to the size_t variable, and it might be poorly aligned.  Kaboom.
<br>
<p><span class="quotelev1">&gt; So, specifically, what I propose is getting rid of the short-cuts that try to use Fortran statuses in-place if Fortran INTEGERs are as big as C ints.  I can make the changes.  Sanity checks on all that are welcome.
</span><br>
<p>Hmm.  I'm not excited about this -- the whole point is that if we don't need to do an extra copy, let's not do it.
<br>
<p>Is there a better way to fix this?
<br>
<p>Off the top of my head -- for example, could we change some of those compile-time checks to run-time checks, and add in an alignment check?  E.g.:
<br>
<p><pre>
----
#if OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT
      c_status = (MPI_Status *) status;
#else
      c_status = &amp;c_status2;
#endif
-----
to
----
    /* The constant checks will be resolved at compile time; assume
       alignment_is_good() is an inline macro checking for &quot;good&quot; alignment
       on platforms where alignment(int) != alignment(size_t) */
    if (OMPI_SIZEOF_FORTRAN_INTEGER == SIZEOF_INT &amp;&amp; alignment_is_good(status)) {
      c_status = (MPI_Status *) status;
    } else {
      c_status = &amp;c_status2;
    }
-----
Would something like that work?
I'm thinking that the benefit here is that we only penalize platforms (with an extra &quot;if&quot; statement) where alignment(int) != alignment(size_t).
&gt;&gt; Related issue: do we need to (conditionally) add padding for the size_t in the Fortran array?
&gt; I guess so, but once again am unsure of myself.  If I look in ompi/config/ompi_setup_mpi_fortran.m4, we compute the size of 4 C ints and a size_t in units of Fortran INTEGERs.  I'm guessing that usually works for us today since any padding is at the very end and doesn't need to be copied.  If someone reorganized MPI_Status, however, there could be internal padding and we would start losing parts of the status.  So, it might make the code a little more robust if the padding were accounted for.  I'm not keen on making such a change myself.
You're probably right -- it's not needed at this time (if it's 4 int's plus a size_t).
&gt; Meanwhile, the config code errors out if the size turns out not to be an even multiple of Fortran INTEGER size.  I don't get this.  I would think one could just round up to the next multiple.  I'm worried my understanding of what's going on is faulty.
I probably did that just as a sanity check -- i.e., why wouldn't the Fortran status size be an even multiple of integers?  If it isn't, that would seem to be a very strange machine, and I'd be worried of something else breaking (e.g., copying the status values over int-by-int might actually result in a wonky error).
It's also possible/likely that that m4 code pre-dates us having a size_t in the C status.
&gt;&gt; [regarding IBM test suite / MPI_STATUS_IGNORE and MPROBE]
&gt;&gt; If not, we should probably extend them to do so.
&gt; I suppose so.  Horse having left the barn, we had better close the doors.  I can add to the tests, albeit making some judgment calls about how carried away to get with this task.  Clearly, that test suite is not very aggressive about exercising all code paths.
Correct.  That suite started off its life as the IBM test suite, and as morphed over time with LAM and Open MPI tests being added to it.  I wrote the MPROBE tests and obviously didn't check for all the proper corner cases...
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11386.php">Gutierrez, Samuel K: "Re: [OMPI devel] RFC: sm BTL Initialization via Modex"</a>
<li><strong>Previous message:</strong> <a href="11384.php">Christopher Yeoh: "Re: [OMPI devel] MPI_THREAD_MULTIPLE testing on trunk"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2012/07/11348.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11390.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
<li><strong>Reply:</strong> <a href="11390.php">Eugene Loh: "Re: [OMPI devel] MPI_Mprobe"</a>
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
