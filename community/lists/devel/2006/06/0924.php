<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  5 08:50:38 2006" -->
<!-- isoreceived="20060605125038" -->
<!-- sent="Mon, 5 Jun 2006 08:50:08 -0400" -->
<!-- isosent="20060605125008" -->
<!-- name="Paul Donohue" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Oversubscription/Scheduling Bug" -->
<!-- id="20060605125008.GC30290_at_TopQuark.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0605261303590.2494_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Paul Donohue (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-05 08:50:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0925.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0923.php">Josh Hursey: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0925.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry Brian and Jeff - I sent you chasing after something of a red herring...
<br>
<p>After much more testing and banging my head on the desk trying to figure this one out, it turns out '--mca mpi_yield_when_idle 1' on the command line does actually work properly for me...  The one or two times I had previously tried using the command line argument, my app (by unfortunate coincidence - it took me a long time to figure this one out) happened to run slowly for completely unrelated reasons.
<br>
<p>However, instead of typing the command line argument each time, for the bulk of my testing I was instead putting 'mpi_yield_when_idle = 1' in /usr/local/etc/openmpi-mca-params.conf on the machine I ran 'mpirun' from.  I didn't update that file on each of my worker nodes - only on the node i was running 'mpirun' from.  I had assumed that this would have the same effect as typing '--mca mpi_yield_when_idle 1' on the command line - mpirun would read /usr/local/etc/openmpi-mca-params.conf, import all of the parameters, then propagate those parameters to the worker nodes as if the parameters were typed on the command line.  Apparently, in reality, orted reads /usr/local/etc/openmpi-mca-params.conf on the local node where orted is actually running, and entries in the file on the node where 'mpirun' is run are not propagated.  Is this a bug or an undocumented feature? ;)
<br>
<p>Sorry to have wasted your time chasing the wrong problem...
<br>
-Paul
<br>
<p>On Fri, May 26, 2006 at 01:09:22PM -0400, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; On Fri, 26 May 2006, Brian W. Barrett wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 26 May 2006, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; You can see this by slightly modifying your test command -- run &quot;env&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; instead of &quot;hostname&quot;.  You'll see that the environment variable
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OMPI_MCA_mpi_yield_when_idle is set to the value that you passed in on
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the mpirun command line, regardless of a) whether you're oversubscribing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; or not, and b) whatever is passed in through the orted.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; While Jeff is correct that the parameter informing the MPI process that it
</span><br>
<span class="quotelev2">&gt; &gt; should idle when it's not busy is correctly set, it turns out that we are
</span><br>
<span class="quotelev2">&gt; &gt; ignoring this parameter inside the MPI process.  I'm looking into this and
</span><br>
<span class="quotelev2">&gt; &gt; hope to have a fix this afternoon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Mea culpa.  Jeff's right that in a normal application, we are setting up 
</span><br>
<span class="quotelev1">&gt; to call sched_yield() when idle if the user sets mpi_yield_when_idle to 1, 
</span><br>
<span class="quotelev1">&gt; regardless of what is in the hostfile .  The problem with my test case was 
</span><br>
<span class="quotelev1">&gt; that for various reasons, my test code was never actually &quot;idling&quot; - there 
</span><br>
<span class="quotelev1">&gt; were always things moving along, so our progress engine was deciding that 
</span><br>
<span class="quotelev1">&gt; the process should not be idled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you share your test code at all?  I'm wondering if something similar 
</span><br>
<span class="quotelev1">&gt; is happening with your code.  It doesn't sound like it should be &quot;always 
</span><br>
<span class="quotelev1">&gt; working&quot;, but I'm wondering if you're triggering some corner case we 
</span><br>
<span class="quotelev1">&gt; haven't thought of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Graduate Student, Open Systems Lab, Indiana University
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0925.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0923.php">Josh Hursey: "Re: [OMPI devel] SIGSTOP and SIGCONT on orted"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0899.php">Brian W. Barrett: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0925.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
