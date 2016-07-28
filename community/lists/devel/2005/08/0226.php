<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 05:51:40 2005" -->
<!-- isoreceived="20050825105140" -->
<!-- sent="Thu, 25 Aug 2005 06:51:34 -0400" -->
<!-- isosent="20050825105134" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  processor affinity" -->
<!-- id="209ea379c56352c4c586340ea5448be2_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050825022746.GI1685_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-25 05:51:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0227.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0225.php">Galen M. Shipman: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0223.php">Troy Benjegerdes: "Re:  processor affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 24, 2005, at 10:27 PM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Processor affinity is now implemented.  You must ask for it via the 
</span><br>
<span class="quotelev2">&gt;&gt; MCA
</span><br>
<span class="quotelev2">&gt;&gt; param &quot;mpi_paffinity_alone&quot;.  If this parameter is set to a nonzero
</span><br>
<span class="quotelev2">&gt;&gt; value, OMPI will assume that its job is alone on the nodes that it is
</span><br>
<span class="quotelev2">&gt;&gt; running on, and, if you have not oversubscribed the node, will bind 
</span><br>
<span class="quotelev2">&gt;&gt; MPI
</span><br>
<span class="quotelev2">&gt;&gt; processes to processors, starting with processor ID 0 (i.e.,
</span><br>
<span class="quotelev2">&gt;&gt; effectively bindings MPI processes to the processor number equivalent
</span><br>
<span class="quotelev2">&gt;&gt; to their relative VPID on that node).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any thoughts on how to support NUMA with something like this? On the
</span><br>
<span class="quotelev1">&gt; dual opteron w/DDR IB systems I've got, I'm seeing a big perfomance
</span><br>
<span class="quotelev1">&gt; difference that primarily depends on which node the memory is on.
</span><br>
<p>I take it from this that you have activated the processor affinity 
<br>
stuff?  I'm not well-versed on how opterons work, but don't they 
<br>
allocate memory in a first-processor-usage kind of basis?  I.e., 
<br>
malloc() will return memory local to the processor that invoked it?  If 
<br>
so, the processor affinity stuff is called way at the beginning of 
<br>
time, before 99% of the malloc's in OMPI are invoked, so that *should* 
<br>
be taken care of naturally...
<br>
<p>Are you seeing something different?
<br>
<p>I'm also working on an memory affinity framework, but that's really for 
<br>
explicit shared memory operations on NUMA machines (e.g., shared memory 
<br>
collectives, where we want to control the physical location of pages in 
<br>
an mmap'ed chunk of memory that is shared between multiple processes).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0227.php">Jeff Squyres: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0225.php">Galen M. Shipman: "Re:  OpenIB results"</a>
<li><strong>In reply to:</strong> <a href="0223.php">Troy Benjegerdes: "Re:  processor affinity"</a>
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
