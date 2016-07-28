<?
$subject_val = "Re: [OMPI devel] Change in communication between process (RMAPS)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 15:19:25 2011" -->
<!-- isoreceived="20110106201925" -->
<!-- sent="Thu, 6 Jan 2011 21:19:20 +0100" -->
<!-- isosent="20110106201920" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in communication between process (RMAPS)" -->
<!-- id="AANLkTi=2QDnKKzLBn_nVaY8nTY1R3GZmSWxwaun-1Ddv_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7AA42FB1-842B-4751-AEC9-C93F2D5AC030_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Change in communication between process (RMAPS)<br>
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 15:19:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8840.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>In reply to:</strong> <a href="8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Reply:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the reply and don't worry about the delay.
<br>
<p>Yeah, i supposse it wouln't be easy :(.
<br>
But my final goal is what you are mentioning, is to stop one particular
<br>
process (previously checkpointed) and the migrate it to another place (node,
<br>
core, slot, etc.) and restart it there, but without making a coordinated
<br>
checkpoint. I just need to checkpoint processes in an uncoordinated way, and
<br>
move them.
<br>
<p>Where can i see something about process migration in the code? or something
<br>
that could guide me.
<br>
<p>Greetings.
<br>
<p>Hugo Meyer
<br>
<p>2011/1/6 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Sorry for the delay; you wrote while many of us were on vacation and we're
</span><br>
<span class="quotelev1">&gt; just now starting to catch up on past mails...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not entirely sure what you're trying to do.  It sounds like you're
</span><br>
<span class="quotelev1">&gt; trying to replace one process with another.  That's quite complicated; there
</span><br>
<span class="quotelev1">&gt; will be a lot of changes required in the code base to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - you'll need to notify the ORTE subsystem of the process change
</span><br>
<span class="quotelev1">&gt; - this notification will likely need to span multiple processes
</span><br>
<span class="quotelev1">&gt; - all MPI processes will need to quiesce their communications, disconnect,
</span><br>
<span class="quotelev1">&gt; and reconnect
</span><br>
<span class="quotelev1">&gt; - ...and probably other things
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That being said, you might be able to leverage some of the work that's been
</span><br>
<span class="quotelev1">&gt; done with checkpoint/restart/migration.  It's not entirely the same thing
</span><br>
<span class="quotelev1">&gt; that you're doing, but it's at least similar (quiesce networks, [pretend to]
</span><br>
<span class="quotelev1">&gt; move a process from location A to location B, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 28, 2010, at 7:03 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello to all.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm new in the forum, at least is the first time i write.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm working with open mpi and I would do a little experiment, i will try
</span><br>
<span class="quotelev1">&gt; to pass one process by another process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example, assuming that there are 2 processes that are communicating
</span><br>
<span class="quotelev1">&gt; say rank 1 and 2. And there is a process of rank 3, I would like the rank 3
</span><br>
<span class="quotelev1">&gt; (it could be assumed that this node is marked down at the initial hostfile)
</span><br>
<span class="quotelev1">&gt; took the place of rank 2, and rank 1 still think that he is communicating
</span><br>
<span class="quotelev1">&gt; with rank 2 when in fact is communicating with the rank 3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess I'll have to modify tables as orte_job_map_t and orte_proc_t, but
</span><br>
<span class="quotelev1">&gt; I wanted to know if someone already has experience doing something similar,
</span><br>
<span class="quotelev1">&gt; and can guide me at least.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The communication between processes, in principle, would be irrelevant,
</span><br>
<span class="quotelev1">&gt; so i will not need to use checkpoints / restarts for now.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8840.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>In reply to:</strong> <a href="8839.php">Jeff Squyres: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Reply:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
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
