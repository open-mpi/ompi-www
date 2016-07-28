<?
$subject_val = "Re: [OMPI devel] RFC: hostfile setting of #slots";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  4 10:30:41 2012" -->
<!-- isoreceived="20120904143041" -->
<!-- sent="Tue, 4 Sep 2012 10:30:30 -0400" -->
<!-- isosent="20120904143030" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: hostfile setting of #slots" -->
<!-- id="7F504F9B-E760-4293-AFB2-B6F6B24EA985_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55FBE820-2ACF-4E8D-B01B-B8E45CAEE31F_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: hostfile setting of #slots<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-04 10:30:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11474.php">Andreas Knüpfer: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Previous message:</strong> <a href="11472.php">Dmitry N. Mikushin: "[OMPI devel] Errors during VampirTrace wrappers compilation, when used with CUDA 5"</a>
<li><strong>In reply to:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
How about adding (yet another) MCA param: orte_&lt;whatever&gt;_default_hostfile_slots, and it can take multiple different values:
<br>
<p>- an integer &gt;0
<br>
- num_cores
<br>
- num_hwthreads
<br>
- num_sockets
<br>
- ...could have others here, but I don't know if it's actually useful to be overly flexible here
<br>
<p>Today's current default behavior would be to set this value to &quot;1&quot;.  But it could easily change to &quot;num_cores&quot; (for example).
<br>
<p><p>On Sep 2, 2012, at 11:33 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Guess I should have emphasized the &quot;IF&quot; more - I'm talking about setting the slots ONLY in the case where the user didn't provide that information. If the user provides it, then that is what we use. In OMPI, we *always* accept the user as the ultimate decider.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As things stand, we assume slots=1. This is just as arbitrary as you can get.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My point was that now that we use hwloc to discover the number of cpus in the system, we could do something more intelligent than just set it to 1 *in the case where we are given no info*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that there is no intention to set binding policy here. All this impacts is how many procs are mapped to a given node when we use the byslot mapping algo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does that help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 2, 2012, at 6:20 AM, Kenneth A. Lloyd &lt;kenneth.lloyd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I should note that we only virtualize the private cloud / management nodes
</span><br>
<span class="quotelev2">&gt;&gt; over our HPC.  The HPC is not virtualized as such.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ken
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Kenneth A. Lloyd
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sunday, September 02, 2012 7:14 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: 'Open MPI Developers'
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] RFC: hostfile setting of #slots
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is a tricky issue, isn't it?  With the differences between AMD &amp; Intel,
</span><br>
<span class="quotelev2">&gt;&gt; and between base operating systems &quot;touching&quot; &amp; heaps (betw. Linux &amp;
</span><br>
<span class="quotelev2">&gt;&gt; Windows), and various virtual machines schemes- we have opted for an
</span><br>
<span class="quotelev2">&gt;&gt; &quot;outside the main code path&quot; solution to get deterministic results. But that
</span><br>
<span class="quotelev2">&gt;&gt; is as things are now.  Who knows how stuff like AVX2 / memory mapping - or
</span><br>
<span class="quotelev2">&gt;&gt; the next new thing - will affect this?  This is similar to issues we've
</span><br>
<span class="quotelev2">&gt;&gt; found with CPU/GPU memory &amp; affinity mapping over IB.  The basis of the
</span><br>
<span class="quotelev2">&gt;&gt; decision is (as is often) how much do you trust the user to do the right
</span><br>
<span class="quotelev2">&gt;&gt; thing?  What happens if you are wrong?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Only my opinion.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ken
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Saturday, September 01, 2012 3:54 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] RFC: hostfile setting of #slots
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This is not a notice of intended change, but rather a solicitation for
</span><br>
<span class="quotelev2">&gt;&gt; comment.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We currently default the number of slots on a host provided via hostfile or
</span><br>
<span class="quotelev2">&gt;&gt; -host to 1. This is a historical &quot;feature&quot; driven by the fact that our
</span><br>
<span class="quotelev2">&gt;&gt; initial launch system spawned daemons on the remote nodes after we had
</span><br>
<span class="quotelev2">&gt;&gt; already mapped the processes to them - so we had no way of guessing a
</span><br>
<span class="quotelev2">&gt;&gt; reasonable value for the number of slots on any node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; However, the &quot;vm&quot; launch method starts daemons on every node prior to  doing
</span><br>
<span class="quotelev2">&gt;&gt; the mapping, precisely so we can use the topology in the mapping algorithm.
</span><br>
<span class="quotelev2">&gt;&gt; This creates the possibility of setting the number of slots on a node to the
</span><br>
<span class="quotelev2">&gt;&gt; number of cpus (either cores or hardware threads, depending on how that flag
</span><br>
<span class="quotelev2">&gt;&gt; is set) IF it wasn't provided in the hostfile.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This would have an impact on the default &quot;byslot&quot; mapping algorithm. With
</span><br>
<span class="quotelev2">&gt;&gt; only one slot/node, byslot essentially equates to bynode mapping. So a
</span><br>
<span class="quotelev2">&gt;&gt; user-provided hostfile that doesn't give any info on the number of slots on
</span><br>
<span class="quotelev2">&gt;&gt; a node effectively changes the default mapping algorithm to &quot;bynode&quot;. This
</span><br>
<span class="quotelev2">&gt;&gt; change would alter that behavior and retain a &quot;byslot&quot; algorithm, with the
</span><br>
<span class="quotelev2">&gt;&gt; number of slots being the number of cpus.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have a use-case that would benefit from making the change, but can handle
</span><br>
<span class="quotelev2">&gt;&gt; it outside of the main code path. However, if others would also find it of
</span><br>
<span class="quotelev2">&gt;&gt; use, I can add it to the main code path, either as the default or via MCA
</span><br>
<span class="quotelev2">&gt;&gt; param.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11474.php">Andreas Knüpfer: "Re: [OMPI devel] OpenMPI CUDA 5 readiness?"</a>
<li><strong>Previous message:</strong> <a href="11472.php">Dmitry N. Mikushin: "[OMPI devel] Errors during VampirTrace wrappers compilation, when used with CUDA 5"</a>
<li><strong>In reply to:</strong> <a href="11468.php">Ralph Castain: "Re: [OMPI devel] RFC: hostfile setting of #slots"</a>
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
