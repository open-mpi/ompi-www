<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jun  5 09:20:35 2006" -->
<!-- isoreceived="20060605132035" -->
<!-- sent="Mon, 5 Jun 2006 09:20:24 -0400" -->
<!-- isosent="20060605132024" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Oversubscription/Scheduling Bug" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF94C969_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] Oversubscription/Scheduling Bug" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-06-05 09:20:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0926.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0924.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0926.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="0926.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No worries!
<br>
<p>This is actually an intended feature -- it allows specific configuration
<br>
on a per-node basis (especially for heterogeneous situations, perhaps
<br>
not as heterogeneous as different architectures, but one can easily
<br>
imagine scenarios where different resources exist within the same
<br>
cluster, such as different networks, different amounts of RAM, etc.).
<br>
<p>You make a good point about the values in that file, though -- I'll add
<br>
some information to the FAQ that such config files are only valid on the
<br>
nodes where they can be seen (i.e., that mpirun does not bundle up all
<br>
these files and send them to remote nodes during mpirun).  Sorry for the
<br>
confusion!
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Paul Donohue
</span><br>
<span class="quotelev1">&gt; Sent: Monday, June 05, 2006 8:50 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] Oversubscription/Scheduling Bug
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry Brian and Jeff - I sent you chasing after something of 
</span><br>
<span class="quotelev1">&gt; a red herring...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After much more testing and banging my head on the desk 
</span><br>
<span class="quotelev1">&gt; trying to figure this one out, it turns out '--mca 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle 1' on the command line does actually work 
</span><br>
<span class="quotelev1">&gt; properly for me...  The one or two times I had previously 
</span><br>
<span class="quotelev1">&gt; tried using the command line argument, my app (by unfortunate 
</span><br>
<span class="quotelev1">&gt; coincidence - it took me a long time to figure this one out) 
</span><br>
<span class="quotelev1">&gt; happened to run slowly for completely unrelated reasons.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, instead of typing the command line argument each 
</span><br>
<span class="quotelev1">&gt; time, for the bulk of my testing I was instead putting 
</span><br>
<span class="quotelev1">&gt; 'mpi_yield_when_idle = 1' in 
</span><br>
<span class="quotelev1">&gt; /usr/local/etc/openmpi-mca-params.conf on the machine I ran 
</span><br>
<span class="quotelev1">&gt; 'mpirun' from.  I didn't update that file on each of my 
</span><br>
<span class="quotelev1">&gt; worker nodes - only on the node i was running 'mpirun' from.  
</span><br>
<span class="quotelev1">&gt; I had assumed that this would have the same effect as typing 
</span><br>
<span class="quotelev1">&gt; '--mca mpi_yield_when_idle 1' on the command line - mpirun 
</span><br>
<span class="quotelev1">&gt; would read /usr/local/etc/openmpi-mca-params.conf, import all 
</span><br>
<span class="quotelev1">&gt; of the parameters, then propagate those parameters to the 
</span><br>
<span class="quotelev1">&gt; worker nodes as if the parameters were typed on the command 
</span><br>
<span class="quotelev1">&gt; line.  Apparently, in reality, orted reads 
</span><br>
<span class="quotelev1">&gt; /usr/local/etc/openmpi-mca-params.conf on the local node 
</span><br>
<span class="quotelev1">&gt; where orted is actually running, and entries in the file on 
</span><br>
<span class="quotelev1">&gt; the node where 'mpirun' is run are not propagated.  Is this a 
</span><br>
<span class="quotelev1">&gt; bug or an undocumented feature? ;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry to have wasted your time chasing the wrong problem...
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, May 26, 2006 at 01:09:22PM -0400, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 26 May 2006, Brian W. Barrett wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Fri, 26 May 2006, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; You can see this by slightly modifying your test command 
</span><br>
<span class="quotelev1">&gt; -- run &quot;env&quot;
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; instead of &quot;hostname&quot;.  You'll see that the environment variable
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; OMPI_MCA_mpi_yield_when_idle is set to the value that 
</span><br>
<span class="quotelev1">&gt; you passed in on
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; the mpirun command line, regardless of a) whether you're 
</span><br>
<span class="quotelev1">&gt; oversubscribing
</span><br>
<span class="quotelev4">&gt; &gt; &gt;&gt; or not, and b) whatever is passed in through the orted.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; While Jeff is correct that the parameter informing the 
</span><br>
<span class="quotelev1">&gt; MPI process that it
</span><br>
<span class="quotelev3">&gt; &gt; &gt; should idle when it's not busy is correctly set, it turns 
</span><br>
<span class="quotelev1">&gt; out that we are
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ignoring this parameter inside the MPI process.  I'm 
</span><br>
<span class="quotelev1">&gt; looking into this and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hope to have a fix this afternoon.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Mea culpa.  Jeff's right that in a normal application, we 
</span><br>
<span class="quotelev1">&gt; are setting up 
</span><br>
<span class="quotelev2">&gt; &gt; to call sched_yield() when idle if the user sets 
</span><br>
<span class="quotelev1">&gt; mpi_yield_when_idle to 1, 
</span><br>
<span class="quotelev2">&gt; &gt; regardless of what is in the hostfile .  The problem with 
</span><br>
<span class="quotelev1">&gt; my test case was 
</span><br>
<span class="quotelev2">&gt; &gt; that for various reasons, my test code was never actually 
</span><br>
<span class="quotelev1">&gt; &quot;idling&quot; - there 
</span><br>
<span class="quotelev2">&gt; &gt; were always things moving along, so our progress engine was 
</span><br>
<span class="quotelev1">&gt; deciding that 
</span><br>
<span class="quotelev2">&gt; &gt; the process should not be idled.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Can you share your test code at all?  I'm wondering if 
</span><br>
<span class="quotelev1">&gt; something similar 
</span><br>
<span class="quotelev2">&gt; &gt; is happening with your code.  It doesn't sound like it 
</span><br>
<span class="quotelev1">&gt; should be &quot;always 
</span><br>
<span class="quotelev2">&gt; &gt; working&quot;, but I'm wondering if you're triggering some 
</span><br>
<span class="quotelev1">&gt; corner case we 
</span><br>
<span class="quotelev2">&gt; &gt; haven't thought of.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Brian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt;    Brian Barrett
</span><br>
<span class="quotelev2">&gt; &gt;    Graduate Student, Open Systems Lab, Indiana University
</span><br>
<span class="quotelev2">&gt; &gt;    <a href="http://www.osl.iu.edu/~brbarret/">http://www.osl.iu.edu/~brbarret/</a>
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<li><strong>Next message:</strong> <a href="0926.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Previous message:</strong> <a href="0924.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/05/0851.php">Paul Donohue: "[OMPI devel] Oversubscription/Scheduling Bug"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0926.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
<li><strong>Reply:</strong> <a href="0926.php">Paul Donohue: "Re: [OMPI devel] Oversubscription/Scheduling Bug"</a>
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
