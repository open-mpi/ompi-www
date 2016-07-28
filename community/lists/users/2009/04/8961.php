<?
$subject_val = "Re: [OMPI users] Debugging memory use of Open MPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 16 14:43:57 2009" -->
<!-- isoreceived="20090416184357" -->
<!-- sent="Thu, 16 Apr 2009 11:43:43 -0700" -->
<!-- isosent="20090416184343" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging memory use of Open MPI" -->
<!-- id="49E77C5F.6020500_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49E517DB.7050705_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging memory use of Open MPI<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-16 14:43:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8960.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Eugene Loh wrote:
<br>
<p><span class="quotelev1">&gt; Shaun Jackman wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What's the purpose of the 400 MB that MPI_Init has allocated?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's for... um, I don't know.  Let's see...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; About a third of it appears to be
</span><br>
<span class="quotelev1">&gt; vt_open() -&gt; VTThrd_open() -&gt; VTGen_open
</span><br>
<span class="quotelev1">&gt; which I'm guessing is due to the VampirTrace instrumentation (maybe 
</span><br>
<span class="quotelev1">&gt; allocating the buffers into which the MPI tracing data is collected).  
</span><br>
<span class="quotelev1">&gt; It seems to go away if one doesn't collect message-tracing data.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Somehow, I can't see further into the library.  Hmm.  It does seem 
</span><br>
<span class="quotelev1">&gt; like a bunch.  The shared-memory area (which MPI_Init allocates for 
</span><br>
<span class="quotelev1">&gt; on-node message passing) is much smaller.  The remaining roughly 130 
</span><br>
<span class="quotelev1">&gt; Mbyte/process seems to be independent of the number of processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An interesting exercise for the reader.
</span><br>
<p>Arrgh.  What a pathetic response!  Lemme see if I can do better than that.
<br>
<p>As I said, about a &quot;third&quot; (whatever that means) is for vt_open(), and 
<br>
I'm pretty sure that's for the VampirTrace message tracing.  If we don't 
<br>
collect message traces, that memory isn't allocated.
<br>
<p>What's the rest?  I said the shared-memory area is much smaller, but I 
<br>
was confused about which OMPI release I was using.  So, the 
<br>
shared-memory area was 128 Mbyte and it was getting mapped in once for 
<br>
each process, and so it was counted doubly.
<br>
<p>Plus, even a &quot;hello world&quot; program seems to have some inexplicably large 
<br>
amount of memory (10-20 Mbytes?).
<br>
<p>So:
<br>
<p>- about 10-20 Mbytes just to start the simplest program up
<br>
- other miscellaneous MPI stuff
<br>
- 128 Mbyte for the shared-memory area, counted twice
<br>
- about 150 Mbyte for VT buffers
<br>
<p>Now, another question you might have is why the shared-memory area is so 
<br>
big.  The idea is that processes communicate via shared memory by having 
<br>
one process write to the shared area and the other read from it.  It can 
<br>
be advantageous to provide ample room (e.g., to minimize synchronization 
<br>
among processes... otherwise, processes end up having to wait for 
<br>
congested resources to clear or to do extra work to avoid the 
<br>
congestion).  &quot;Ample&quot; room means ample for lots of data and/or for lots 
<br>
of (short) messages.  How much is enough?  No idea.  YMMV.  The more the 
<br>
better.  Etc.  Someone picked some numbers and that's what you live with 
<br>
by default.  So, why so big?  Answer:  just because we picked it to be 
<br>
that way.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="8960.php">Jerome BENOIT: "Re: [OMPI users] MPI_Comm_spawn and oreted"</a>
<li><strong>In reply to:</strong> <a href="8927.php">Eugene Loh: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
<li><strong>Reply:</strong> <a href="8962.php">Shaun Jackman: "Re: [OMPI users] Debugging memory use of Open MPI"</a>
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
