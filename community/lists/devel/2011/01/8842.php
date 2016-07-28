<?
$subject_val = "Re: [OMPI devel] Change in communication between process (RMAPS)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 15:46:25 2011" -->
<!-- isoreceived="20110106204625" -->
<!-- sent="Thu, 6 Jan 2011 15:46:18 -0500" -->
<!-- isosent="20110106204618" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in communication between process (RMAPS)" -->
<!-- id="B640673B-22FF-40B0-98B7-36D3C2FA64F3_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTi=2QDnKKzLBn_nVaY8nTY1R3GZmSWxwaun-1Ddv_at_mail.gmail.com" -->
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
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 15:46:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8843.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>In reply to:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8843.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Reply:</strong> <a href="8843.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So I can point you to some of the work that I did while at Indiana University to support process migration in Open MPI in a coordinated manner. This should introduce you to some of the internal pieces that fit together to provide this support.
<br>
<p>The transparent C/R in Open MPI webpage from IU is a good place to start:
<br>
&nbsp;&nbsp;&nbsp;<a href="http://osl.iu.edu/research/ft/ompi-cr/index.php">http://osl.iu.edu/research/ft/ompi-cr/index.php</a>
<br>
<p><span class="quotelev1">&gt;From there you will find a link to a couple papers that should get you started. In particular &quot;A Composable Runtime Recovery Policy Framework Supporting Resilient HPC Applications&quot; discusses how the ORTE ErrMgr framework was used (initially) to provide process migration and automatic recovery. The actual code in the Open MPI trunk is slightly different. Instead of using different components of the ErrMgr framework (i.e., autor, crmig, stable) we just rolled it all into the existing components (i.e., hnp, orted, app). But all the code can be found in those component directories.
</span><br>
<p>If you want a more general overview of the C/R system in Open MPI, I would start with the paper &quot;The Design and Implementation of Checkpoint/Restart Process Fault Tolerance for Open MPI&quot; which provides a high level view of the architecture (combined with the paper above you will have a fairly complete picture of the design). The C/R infrastructure currently only supports coordinated C/R, but was designed to be more extensible. So if you are looking into uncoordinated C/R techniques you may find that many of the C/R frameworks in Open MPI can be reused.
<br>
<p>That should get you started. Let us know if you have any further questions.
<br>
<p>-- Josh
<br>
<p>On Jan 6, 2011, at 3:19 PM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for the reply and don't worry about the delay.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yeah, i supposse it wouln't be easy :(.
</span><br>
<span class="quotelev1">&gt; But my final goal is what you are mentioning, is to stop one particular process (previously checkpointed) and the migrate it to another place (node, core, slot, etc.) and restart it there, but without making a coordinated checkpoint. I just need to checkpoint processes in an uncoordinated way, and move them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Where can i see something about process migration in the code? or something that could guide me.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Greetings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo Meyer
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/1/6 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for the delay; you wrote while many of us were on vacation and we're just now starting to catch up on past mails...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not entirely sure what you're trying to do.  It sounds like you're trying to replace one process with another.  That's quite complicated; there will be a lot of changes required in the code base to do this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - you'll need to notify the ORTE subsystem of the process change
</span><br>
<span class="quotelev1">&gt; - this notification will likely need to span multiple processes
</span><br>
<span class="quotelev1">&gt; - all MPI processes will need to quiesce their communications, disconnect, and reconnect
</span><br>
<span class="quotelev1">&gt; - ...and probably other things
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, you might be able to leverage some of the work that's been done with checkpoint/restart/migration.  It's not entirely the same thing that you're doing, but it's at least similar (quiesce networks, [pretend to] move a process from location A to location B, etc.).
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
<span class="quotelev2">&gt; &gt; I'm working with open mpi and I would do a little experiment, i will try to pass one process by another process.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; For example, assuming that there are 2 processes that are communicating say rank 1 and 2. And there is a process of rank 3, I would like the rank 3 (it could be assumed that this node is marked down at the initial hostfile) took the place of rank 2, and rank 1 still think that he is communicating with rank 2 when in fact is communicating with the rank 3.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess I'll have to modify tables as orte_job_map_t and orte_proc_t, but I wanted to know if someone already has experience doing something similar, and can guide me at least.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The communication between processes, in principle, would be irrelevant, so i will not need to use checkpoints / restarts for now.
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>------------------------------------
<br>
Joshua Hursey
<br>
Postdoctoral Research Associate
<br>
Oak Ridge National Laboratory
<br>
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8843.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Previous message:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>In reply to:</strong> <a href="8841.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8843.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>Reply:</strong> <a href="8843.php">Hugo Meyer: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
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
