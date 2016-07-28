<?
$subject_val = "Re: [OMPI devel] shared-memory allocations";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 13 14:48:55 2008" -->
<!-- isoreceived="20081213194855" -->
<!-- sent="Sat, 13 Dec 2008 14:48:49 -0500" -->
<!-- isosent="20081213194849" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] shared-memory allocations" -->
<!-- id="C5697BD1.2C582%rlgraham_at_ornl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49430E01.5030403_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] shared-memory allocations<br>
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-13 14:48:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>In reply to:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5064.php">Patrick Geoffray: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5064.php">Patrick Geoffray: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5078.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/12/08 8:21 PM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt; Re: [OMPI devel] shared-memory allocations The memory allocation is intended
</span><br>
to take into account that two separate procs may be touching the same memory, so
<br>
the intent is to reduce cache conflicts (false sharing)
<br>
<span class="quotelev1">&gt; Got it.  I'm totally fine with that.  Separate cachelines.
</span><br>
<span class="quotelev1">&gt; and put the memory close to the process that is using it.
</span><br>
<span class="quotelev1">&gt; Problematic concept, but ... okay, I'll read on.
</span><br>
<span class="quotelev1">&gt; When the code first went in, there was no explicit memory affinity
</span><br>
implemented, so first-touch was relied on to get the memory in the &#248;correct&#248;
<br>
location.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Okay.
</span><br>
<span class="quotelev1">&gt; If I remember correctly, the head and the tail each are written to be a
</span><br>
different process, and is where the pointers and counters used to manage the
<br>
fifo are maintained.  They need to be close to the writer, and on separate cache
<br>
lines, to avoid false sharing.
<br>
<span class="quotelev1">&gt; Why close to the writer (versus reader)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyhow, so far as I can tell, the 2d structure ompi_fifo_t
</span><br>
fifo[receiver][sender] is organized by receiver.  That is, the main ompi_fifo_t
<br>
FIFO data structures are local to receivers.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But then, each FIFO is initialized (that is, circular buffers and associated
</span><br>
allocations) by senders.  E.g.,
<br>
<a href="https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/Smylers/bt">https://svn.open-mpi.org/trac/ompi/browser/branches/v1.3/ompi/mca/btl/Smylers/bt</a>
<br>
l_sm.c?version=19785#L537
<br>
<span class="quotelev1">&gt; In the call to ompi_fifo_init(), all the circular buffer (CB) data structures
</span><br>
are allocated by the sender.  On different cachelines -- even different pages --
<br>
but all by the sender.
<br>
<p>It does not make a difference who allocates it, what makes a difference is
<br>
who touches it first.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Specifically, one accesses FIFO on the receiver side then follow pointers to
</span><br>
the senders side.  Doesn't matter if you're talking head, tail, or queue.
<br>
<span class="quotelev1">&gt; The queue itself is accessed most often by the reader,
</span><br>
<span class="quotelev1">&gt; You mean because it's polling often, but writer writes only once?
</span><br>
<p>Yes - it is polling volatile memory, so has to load from memory on every
<br>
read.
<br>
<p><span class="quotelev1">&gt; so it should be closer to the reader.
</span><br>
<span class="quotelev1">&gt; Are there measurements to substantiate this?  Seems to me that in a
</span><br>
cache-based system, a reader could poll on a remote location all it wanted and
<br>
there'd be traffic only if the cached copy were invalidated.  Conceivably, a
<br>
transfer could go cache-to-cache and not hit memory at all.  I tried some
<br>
measurements and found no difference for any location -- close to writer, close
<br>
to reader, or far from both.
<br>
<span class="quotelev1">&gt; I honestly don&#248;t remember much about the wrapper &#248; would have to go back to
</span><br>
the code to look at it.  If we no longer allow multiple fifo per pair, the
<br>
wrapper layer can go away &#248; it is there to manage multiple fifo&#248;s per pair.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is support for multiple circular buffers per FIFO.
</span><br>
<p>The code is there, but I believe Gleb disabled using multiple fifo's, and
<br>
added a list to hold pending
<br>
messages, so now we are paying two overheads ...  I could be wrong here, but
<br>
am pretty sure I am not.
<br>
I don't know if George has touched the code since.
<br>
<p><p><span class="quotelev1">&gt; As far as granularity of allocation &#248; it needs to be large enough to
</span><br>
accommodate the smallest shared memory hierarchy, so I suppose in the most
<br>
general case this may be the tertiary cache ?
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't get this.  I understand how certain things should be on separate
</span><br>
cachelines.  Beyond that, we just figure out what should be local to a process
<br>
and allocate all those things together.  That takes us from 3*n*n allocations
<br>
(and pages) to just n of them.
<br>
<p>Not sure what you point is here.  The cost per process is linear in the
<br>
total number of processes, so
<br>
overall the cost scales as the number of procs squared.  This was designed
<br>
for small smp's, to reduce
<br>
coordination costs between processes, and where memory costs are not large.
<br>
Once can go to very simple
<br>
schemes that are constant with respect to memory footprint, but then pay the
<br>
cost of multiple writers
<br>
to a single queue - this is what LA-MPI did.
<br>
<p><span class="quotelev1">&gt; No reason not to allocate objects that need to be associated with the same
</span><br>
process on the same page, as long as one avoids false sharing.
<br>
<span class="quotelev1">&gt; Got it.
</span><br>
<span class="quotelev1">&gt; So seems like each process could have all of it&#248;s receive fifo&#248;s on the same
</span><br>
page, and these could share the also with either the heads, or the tails of each
<br>
queue.
<br>
<p>Yes, this makes sense.
<br>
<p>Rich
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will propose some specifics and run them by y'all.  I think I know enough to
</span><br>
get started.  Thanks for the comments.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5060/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5061.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<li><strong>Previous message:</strong> <a href="5059.php">Jeff Squyres: "Re: [OMPI devel] RFC: Add ompi-top tool"</a>
<li><strong>In reply to:</strong> <a href="5057.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5064.php">Patrick Geoffray: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5064.php">Patrick Geoffray: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Reply:</strong> <a href="5078.php">Eugene Loh: "Re: [OMPI devel] shared-memory allocations"</a>
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
