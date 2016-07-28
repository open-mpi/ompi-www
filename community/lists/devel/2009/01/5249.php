<?
$subject_val = "Re: [OMPI devel] RFC: sm Latency";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 20 20:57:43 2009" -->
<!-- isoreceived="20090121015743" -->
<!-- sent="Tue, 20 Jan 2009 18:57:21 -0700" -->
<!-- isosent="20090121015721" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: sm Latency" -->
<!-- id="5ABD4142-A5D0-40F2-BF2E-8AA91FBBB00A_at_open-mpi.org" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="BC114694-0633-4840-8651-9E211A75A679_at_cisco.com" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-20 20:57:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5250.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5248.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I unfortunately don't have time to look in depth at the patch.  But my  
<br>
concern is that currently (today, not at some made up time in the  
<br>
future, maybe), we use the BTLs for more than just MPI point-to- 
<br>
point.  The rdma one-sided component (which was added for 1.3 and  
<br>
hopefully will be the default for 1.4) sends messages directly over  
<br>
the btls.  It would be interesting to know how that is handled.
<br>
<p>Brian
<br>
<p><p>On Jan 20, 2009, at 6:53 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; This all sounds really great to me.  I agree with most of what has  
</span><br>
<span class="quotelev1">&gt; been said -- e.g., benchmarks *are* important.  Improving them can  
</span><br>
<span class="quotelev1">&gt; even sometimes have the side effect of improving real  
</span><br>
<span class="quotelev1">&gt; applications.  ;-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My one big concern is the moving of architectural boundaries of  
</span><br>
<span class="quotelev1">&gt; making the btl understand MPI match headers.  But even there, I'm  
</span><br>
<span class="quotelev1">&gt; torn:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I understand why it is better -- performance-wise -- to do this.   
</span><br>
<span class="quotelev1">&gt; And the performance improvement results are hard to argue with.  We  
</span><br>
<span class="quotelev1">&gt; took a similar approach with ORTE; ORTE is now OMPI-specific, and  
</span><br>
<span class="quotelev1">&gt; many, many things have become better (from the OMPI perspective, at  
</span><br>
<span class="quotelev1">&gt; least).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. We all have the knee-jerk reaction that we don't want to have the  
</span><br>
<span class="quotelev1">&gt; BTLs know anything about MPI semantics because they've always been  
</span><br>
<span class="quotelev1">&gt; that way and it has been a useful abstraction barrier.  Now there's  
</span><br>
<span class="quotelev1">&gt; even a project afoot to move the BTLs out into a separate later that  
</span><br>
<span class="quotelev1">&gt; cannot know about MPI (so that other things can be built upon it).   
</span><br>
<span class="quotelev1">&gt; But are we sacrificing potential MPI performance here?  I think  
</span><br>
<span class="quotelev1">&gt; that's one important question.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eugene: you mentioned that there are other possibilities to having  
</span><br>
<span class="quotelev1">&gt; the BTL understand match headers, such as a callback into the PML.   
</span><br>
<span class="quotelev1">&gt; Have you tried this approach to see what the performance cost would  
</span><br>
<span class="quotelev1">&gt; be, perchance?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd like to see George's reaction to this RFC, and Brian's (if he  
</span><br>
<span class="quotelev1">&gt; has time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 20, 2009, at 8:04 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Patrick Geoffray wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Eugene Loh wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; replace the fifo&#146;s with a single link list per process in shared
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; memory, with senders to this process adding match envelopes
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; atomically, with each process reading its own link list (multiple
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *) Doesn't strike me as a &quot;simple&quot; change.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Actually, it's much simpler than trying to optimize/scale the N^2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; implementation, IMHO.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) The version I talk about is already done. Check my putbacks.  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Already
</span><br>
<span class="quotelev2">&gt;&gt; done&quot; is easier! :^)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) The two ideas are largely orthogonal. The RFC talks about a  
</span><br>
<span class="quotelev2">&gt;&gt; variety
</span><br>
<span class="quotelev2">&gt;&gt; of things: cleaning up the sendi function, moving the sendi call up
</span><br>
<span class="quotelev2">&gt;&gt; higher in the PML, bypassing the PML receive-request structure  
</span><br>
<span class="quotelev2">&gt;&gt; (similar
</span><br>
<span class="quotelev2">&gt;&gt; to sendi), and stream-lining the data convertors in common cases.  
</span><br>
<span class="quotelev2">&gt;&gt; Only
</span><br>
<span class="quotelev2">&gt;&gt; one part of the RFC (directed polling) overlaps with having a single
</span><br>
<span class="quotelev2">&gt;&gt; FIFO per receiver.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *) Not sure this addresses all-to-all well.  E.g., let's say you  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; post a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; receive for a particular source.  Do you then wade through a long  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FIFO
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to look for your match?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The tradeoff is between demultiplexing by the sender, which cost  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in time
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and in space, or by the receiver, which cost an atomic inc. ANY_TAG
</span><br>
<span class="quotelev3">&gt;&gt;&gt; forces you to demultiplex on the receive side anyway. Regarding
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all-to-all, it won't be more expensive if the receives are pre- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; posted,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and they should be.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure I understand this paragraph. I do, however, think there are
</span><br>
<span class="quotelev2">&gt;&gt; great benefits to the single-receiver-queue model. It implies  
</span><br>
<span class="quotelev2">&gt;&gt; congestion
</span><br>
<span class="quotelev2">&gt;&gt; on the receiver side in the many-to-one case, but if a single  
</span><br>
<span class="quotelev2">&gt;&gt; receiver
</span><br>
<span class="quotelev2">&gt;&gt; is reading all those messages anyhow, message-processing is already
</span><br>
<span class="quotelev2">&gt;&gt; going to throttle the message rate. The extra &quot;bottleneck&quot; at the  
</span><br>
<span class="quotelev2">&gt;&gt; FIFO
</span><br>
<span class="quotelev2">&gt;&gt; might never be seen.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What the RFC talks about is not the last SM development we'll ever
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; need.  It's only supposed to be one step forward from where we are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; today.  The &quot;single queue per receiver&quot; approach has many  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; advantages,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but I think it's a different topic.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But is this intermediate step worth it or should we (well,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you :-) ) go
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly for the single queue model ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To recap:
</span><br>
<span class="quotelev2">&gt;&gt; 1) The work is already done.
</span><br>
<span class="quotelev2">&gt;&gt; 2) The single-queue model addresses only one of the RFC's issues.
</span><br>
<span class="quotelev2">&gt;&gt; 3) I'm a fan of the single-queue model, but it's just a separate  
</span><br>
<span class="quotelev2">&gt;&gt; discussion.
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5250.php">Richard Graham: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Previous message:</strong> <a href="5248.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>In reply to:</strong> <a href="5247.php">Jeff Squyres: "Re: [OMPI devel] RFC: sm Latency"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
<li><strong>Reply:</strong> <a href="5253.php">Eugene Loh: "Re: [OMPI devel] RFC: sm Latency"</a>
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
