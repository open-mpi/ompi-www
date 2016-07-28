<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 21:33:29 2009" -->
<!-- isoreceived="20090121023329" -->
<!-- sent="Tue, 20 Jan 2009 21:33:20 -0500" -->
<!-- isosent="20090121023320" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="C59BF3A0.2D637%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49762128.5080707_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: sm Latency<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 21:33:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5251.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5249.php">Brian Barrett: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5241.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5254.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5254.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/20/09 2:08 PM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  Re: [OMPI devel] RFC: sm Latency First, the performance improvements look
</span><br>
<span class="quotelev2">&gt;&gt; really nice.
</span><br>
<span class="quotelev2">&gt;&gt; A few questions:
</span><br>
<span class="quotelev2">&gt;&gt;   - How much of an abstraction violation does this introduce?
</span><br>
<span class="quotelev1">&gt; Doesn't need to be much of an abstraction violation at all if, by that, we
</span><br>
<span class="quotelev1">&gt; mean teaching the BTL about the match header.  Just need to make some choices
</span><br>
<span class="quotelev1">&gt; and I flagged that one for better visibility.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I really don&#185;t see how teaching the btl about matching will help much (it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will save a subroutine call).  As I understand
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; the proposal you aim to selectively pull items out of the fifo&#185;s &#173; this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will break the fifo&#185;s, as they assume contiguous
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; entries.  Logic to manage holes will need to be added.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This looks like the btl needs to start &#179;knowing&#178; about MPI level semantics.
</span><br>
<span class="quotelev1">&gt; That's one option.  There are other options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; Such as ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Currently, the btl purposefully is ulp agnostic.
</span><br>
<span class="quotelev1">&gt; What's ULP?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;  &gt;&gt;  Upper Level Protocol
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I ask for 2 reasons
</span><br>
<span class="quotelev2">&gt;&gt;        - you mention having the btl look at the match header (if I understood
</span><br>
<span class="quotelev2">&gt;&gt; correctly)
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; Right, both to know if there is a match when the user had MPI_ANY_TAG and to
</span><br>
<span class="quotelev1">&gt; extract values to populate the MPI_Status variable.  There are other
</span><br>
<span class="quotelev1">&gt; alternatives, like calling back the PML.
</span><br>
<span class="quotelev2">&gt;&gt;        - not clear to me what you mean by returning the header to the list if
</span><br>
<span class="quotelev2">&gt;&gt; the irecv does not complete.  If it does not complete, why not just pass the
</span><br>
<span class="quotelev2">&gt;&gt; header back for further processing, if all this is happening at the pml level
</span><br>
<span class="quotelev2">&gt;&gt; ?
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; I was trying to read the FIFO to see what's on there.  If it's something we
</span><br>
<span class="quotelev1">&gt; can handle, we take it and handle it.  If it's too complicated, then we just
</span><br>
<span class="quotelev1">&gt; balk and tell the upper layer that we're declining any possible action.  That
</span><br>
<span class="quotelev1">&gt; just seemed to me to be the cleanest approach.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; see the note above.  The fifo logic would have to be changed to manage
</span><br>
<span class="quotelev3">&gt;&gt;&gt; non-contiguous entries.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's an analogy.  Let's say you have a house problem.  You don't know how
</span><br>
<span class="quotelev1">&gt; bad it is.  You think you might have to hire an expensive contractor to do
</span><br>
<span class="quotelev1">&gt; lots of work, but some local handyman thinks he can do it quickly and cheaply.
</span><br>
<span class="quotelev1">&gt; So, you have the handyman look at the job to decide how involved it is.  Let's
</span><br>
<span class="quotelev1">&gt; say the handyman discovers that it is, indeed, a big job.  How would you like
</span><br>
<span class="quotelev1">&gt; things left at this point? Two options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) Handyman says this is a big job.  Bring in the expensive contractor and big
</span><br>
<span class="quotelev1">&gt; equipment.  I left everything as I found it.  Or,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) Handyman says, &quot;I took apart the this-and-this and I bought a bunch of
</span><br>
<span class="quotelev1">&gt; supplies.  I ripped out the south wall.  The water to the house is turned off.
</span><br>
<span class="quotelev1">&gt; Etc.&quot;  You (and whoever has to come in to actually do the work) would probably
</span><br>
<span class="quotelev1">&gt; prefer that nothing had been started.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I thought it was cleaner to go the &quot;do the whole job or don't do any of it&quot;
</span><br>
<span class="quotelev1">&gt; approach.
</span><br>
<span class="quotelev2">&gt;&gt;   - The measurements seem to be very dual process specific.  Have you looked
</span><br>
<span class="quotelev2">&gt;&gt; at the impact of these changes on other applications at the same process
</span><br>
<span class="quotelev2">&gt;&gt; count ?  &#179;Real&#178; apps would be interesting, but even hpl would be a good
</span><br>
<span class="quotelev2">&gt;&gt; start. 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; Many measurements are for np=2.  There are also np&gt;2 HPCC pingpong results
</span><br>
<span class="quotelev1">&gt; though.  (HPCC pingpong measures pingpong between two processes while np-2
</span><br>
<span class="quotelev1">&gt; process sit in wait loops.)  HPCC also measures &quot;ring&quot; results... these are
</span><br>
<span class="quotelev1">&gt; point-to-point with all np processes work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HPL is pretty insensitive to point-to-point performance.  It either shows
</span><br>
<span class="quotelev1">&gt; basically DGEMM performance or something is broken.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I haven't looked at &quot;real&quot; apps.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let me be blunt about one thing:  much of this is motivated by simplistic
</span><br>
<span class="quotelev1">&gt; (HPCC) benchmarks.  This is for two reasons:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1) These benchmarks are highly visible.
</span><br>
<span class="quotelev1">&gt; 2) It's hard to tune real apps when you know the primitives need work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looking at real apps is important and I'll try to get to that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; don&#185;t disagree here at all.  Just want to make sure that aiming at these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; important benchmarks does not
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; harm what is really more important &#173; the day to day use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   The current sm implementation is aimed only at small smp node count, which
</span><br>
<span class="quotelev2">&gt;&gt; was really the only relevant type of systems when this code was written 5
</span><br>
<span class="quotelev2">&gt;&gt; years ago.  For large core counts there is a rather simple change that could
</span><br>
<span class="quotelev2">&gt;&gt; be put in that is simple to implement, and will give you flat scaling for the
</span><br>
<span class="quotelev2">&gt;&gt; sort of tests you are running.  If you replace the fifo&#185;s with a single link
</span><br>
<span class="quotelev2">&gt;&gt; list per process in shared memory, with senders to this process adding match
</span><br>
<span class="quotelev2">&gt;&gt; envelopes atomically, with each process reading its own link list (multiple
</span><br>
<span class="quotelev2">&gt;&gt; writers and single reader in non-threaded situation) there will be only one
</span><br>
<span class="quotelev2">&gt;&gt; place to poll, regardless of the number of procs involved in the run.  One
</span><br>
<span class="quotelev2">&gt;&gt; still needs other optimizations to lower the absolute latency &#173; perhaps what
</span><br>
<span class="quotelev2">&gt;&gt; you have suggested.  If one really has all N procs trying to write to the
</span><br>
<span class="quotelev2">&gt;&gt; same fifo at once, performance will stink because of contention, but most
</span><br>
<span class="quotelev2">&gt;&gt; apps don&#185;t have that behaviour.
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev1">&gt; Okay.  Yes, I am a fan of that approach.  But:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) Doesn't strike me as a &quot;simple&quot; change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; instead of a fifo_write (or what ever is is called), an entry is posted
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to the &#179;head&#178; of a linked list, and the read is
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; removing an entry from the list.  If one cares about memory locality, you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to return things to the appropiate
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; list, which is implicit in the fifo.  More objects need to be allocated
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in shared memory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *) Not sure this addresses all-to-all well.  E.g., let's say you post a
</span><br>
<span class="quotelev1">&gt; receive for a particular source.  Do you then wade through a long FIFO to look
</span><br>
<span class="quotelev1">&gt; for your match?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; to pull things of the free list, you do need to look through what is on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the queue.  If it is not the match you are
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; looking for, just post it the the appropriate local list for later use,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; just like the matching logic does now.  As
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; I mentioned this am, if you want, you don&#185;t have to have a single list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; per destination, you could have several lists,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; if you are concerned about too much contention.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What the RFC talks about is not the last SM development we'll ever need.  It's
</span><br>
<span class="quotelev1">&gt; only supposed to be one step forward from where we are today.  The &quot;single
</span><br>
<span class="quotelev1">&gt; queue per receiver&quot; approach has many advantages, but I think it's a different
</span><br>
<span class="quotelev1">&gt; topic.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; This is a big enough proposed change, that a call to describe this may be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in place.  I will state up front I am against
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; introducing MPI semantics into the btl.  Not against having that sort of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; option in the code base, but do want to
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt;&gt; preserve an option like the pml/btl abstraction.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5250/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5251.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5249.php">Brian Barrett: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5241.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5254.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5254.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
