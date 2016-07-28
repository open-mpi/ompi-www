<?
$subject_val = "Re: [OMPI devel] Change in communication between process (RMAPS)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 13:55:39 2011" -->
<!-- isoreceived="20110106185539" -->
<!-- sent="Thu, 6 Jan 2011 13:55:34 -0500" -->
<!-- isosent="20110106185534" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in communication between process (RMAPS)" -->
<!-- id="7AA42FB1-842B-4751-AEC9-C93F2D5AC030_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTimAW+MJ+yfg8wKDm91RFPA9vyqS6hXW=sTJSv6V_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 13:55:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8840.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Previous message:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8821.php">Hugo Meyer: "[OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Reply:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for the delay; you wrote while many of us were on vacation and we're just now starting to catch up on past mails...
<br>
<p>I'm not entirely sure what you're trying to do.  It sounds like you're trying to replace one process with another.  That's quite complicated; there will be a lot of changes required in the code base to do this.
<br>
<p>- you'll need to notify the ORTE subsystem of the process change
<br>
- this notification will likely need to span multiple processes
<br>
- all MPI processes will need to quiesce their communications, disconnect, and reconnect
<br>
- ...and probably other things
<br>
<p>That being said, you might be able to leverage some of the work that's been done with checkpoint/restart/migration.  It's not entirely the same thing that you're doing, but it's at least similar (quiesce networks, [pretend to] move a process from location A to location B, etc.).
<br>
<p><p><p>On Dec 28, 2010, at 7:03 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello to all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm new in the forum, at least is the first time i write. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working with open mpi and I would do a little experiment, i will try to pass one process by another process.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For example, assuming that there are 2 processes that are communicating say rank 1 and 2. And there is a process of rank 3, I would like the rank 3 (it could be assumed that this node is marked down at the initial hostfile) took the place of rank 2, and rank 1 still think that he is communicating with rank 2 when in fact is communicating with the rank 3.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I'll have to modify tables as orte_job_map_t and orte_proc_t, but I wanted to know if someone already has experience doing something similar, and can guide me at least.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The communication between processes, in principle, would be irrelevant, so i will not need to use checkpoints / restarts for now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8840.php">Jeff Squyres: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Previous message:</strong> <a href="8838.php">George Bosilca: "Re: [OMPI devel] Problem with attributes attached to communicators"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2010/12/8821.php">Hugo Meyer: "[OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Reply:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
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
