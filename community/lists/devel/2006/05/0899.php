<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri May 26 13:09:25 2006" -->
<!-- isoreceived="20060526170925" -->
<!-- sent="Fri, 26 May 2006 13:09:22 -0400 (EDT)" -->
<!-- isosent="20060526170922" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Oversubscription/Scheduling Bug" -->
<!-- id="Pine.LNX.4.64.0605261303590.2494_at_milliways.osl.iu.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0605261214330.2494_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-26 13:09:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0900.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Updating to r10118"</a>
<li><strong>Previous message:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0924.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0924.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 26 May 2006, Brian W. Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Fri, 26 May 2006, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You can see this by slightly modifying your test command -- run &quot;env&quot;
</span><br>
<span class="quotelev2">&gt;&gt; instead of &quot;hostname&quot;.  You'll see that the environment variable
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_mpi_yield_when_idle is set to the value that you passed in on
</span><br>
<span class="quotelev2">&gt;&gt; the mpirun command line, regardless of a) whether you're oversubscribing
</span><br>
<span class="quotelev2">&gt;&gt; or not, and b) whatever is passed in through the orted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While Jeff is correct that the parameter informing the MPI process that it
</span><br>
<span class="quotelev1">&gt; should idle when it's not busy is correctly set, it turns out that we are
</span><br>
<span class="quotelev1">&gt; ignoring this parameter inside the MPI process.  I'm looking into this and
</span><br>
<span class="quotelev1">&gt; hope to have a fix this afternoon.
</span><br>
<p>Mea culpa.  Jeff's right that in a normal application, we are setting up 
<br>
to call sched_yield() when idle if the user sets mpi_yield_when_idle to 1, 
<br>
regardless of what is in the hostfile .  The problem with my test case was 
<br>
that for various reasons, my test code was never actually &quot;idling&quot; - there 
<br>
were always things moving along, so our progress engine was deciding that 
<br>
the process should not be idled.
<br>
<p>Can you share your test code at all?  I'm wondering if something similar 
<br>
is happening with your code.  It doesn't sound like it should be &quot;always 
<br>
working&quot;, but I'm wondering if you're triggering some corner case we 
<br>
haven't thought of.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Graduate Student, Open Systems Lab, Indiana University
   <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0900.php">Jeff Squyres \(jsquyres\): "[OMPI devel] Updating to r10118"</a>
<li><strong>Previous message:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>In reply to:</strong> <a href="0898.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0924.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/06/0924.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
