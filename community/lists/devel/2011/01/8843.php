<?
$subject_val = "Re: [OMPI devel] Change in communication between process (RMAPS)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  7 07:29:39 2011" -->
<!-- isoreceived="20110107122939" -->
<!-- sent="Fri, 7 Jan 2011 13:29:33 +0100" -->
<!-- isosent="20110107122933" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Change in communication between process (RMAPS)" -->
<!-- id="AANLkTinV1OJQq2HvtHPQ+4K5V-Hi6k6v_R+NmFmzXAGT_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="B640673B-22FF-40B0-98B7-36D3C2FA64F3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-01-07 07:29:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8844.php">Leif Lindholm: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Previous message:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>In reply to:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Josh and Jeff.
<br>
<p>I have read already &quot;The Design and Implementation of Checkpoint/Restart
<br>
Process Fault Tolerance for Open MPI&quot; and i'm gonna read now &quot;A Composable
<br>
Runtime Recovery Policy Framework Supporting Resilient HPC Applications&quot; and
<br>
then i will take a look to the code of the components that you mention, and
<br>
i will let you know how things are going.
<br>
<p>Thanks a lot.
<br>
<p>Hugo Meyer
<br>
<p>2011/1/6 Joshua Hursey &lt;jjhursey_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; So I can point you to some of the work that I did while at Indiana
</span><br>
<span class="quotelev1">&gt; University to support process migration in Open MPI in a coordinated manner.
</span><br>
<span class="quotelev1">&gt; This should introduce you to some of the internal pieces that fit together
</span><br>
<span class="quotelev1">&gt; to provide this support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The transparent C/R in Open MPI webpage from IU is a good place to start:
</span><br>
<span class="quotelev1">&gt;   <a href="http://osl.iu.edu/research/ft/ompi-cr/index.php">http://osl.iu.edu/research/ft/ompi-cr/index.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;From there you will find a link to a couple papers that should get you
</span><br>
<span class="quotelev1">&gt; started. In particular &quot;A Composable Runtime Recovery Policy Framework
</span><br>
<span class="quotelev1">&gt; Supporting Resilient HPC Applications&quot; discusses how the ORTE ErrMgr
</span><br>
<span class="quotelev1">&gt; framework was used (initially) to provide process migration and automatic
</span><br>
<span class="quotelev1">&gt; recovery. The actual code in the Open MPI trunk is slightly different.
</span><br>
<span class="quotelev1">&gt; Instead of using different components of the ErrMgr framework (i.e., autor,
</span><br>
<span class="quotelev1">&gt; crmig, stable) we just rolled it all into the existing components (i.e.,
</span><br>
<span class="quotelev1">&gt; hnp, orted, app). But all the code can be found in those component
</span><br>
<span class="quotelev1">&gt; directories.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want a more general overview of the C/R system in Open MPI, I would
</span><br>
<span class="quotelev1">&gt; start with the paper &quot;The Design and Implementation of Checkpoint/Restart
</span><br>
<span class="quotelev1">&gt; Process Fault Tolerance for Open MPI&quot; which provides a high level view of
</span><br>
<span class="quotelev1">&gt; the architecture (combined with the paper above you will have a fairly
</span><br>
<span class="quotelev1">&gt; complete picture of the design). The C/R infrastructure currently only
</span><br>
<span class="quotelev1">&gt; supports coordinated C/R, but was designed to be more extensible. So if you
</span><br>
<span class="quotelev1">&gt; are looking into uncoordinated C/R techniques you may find that many of the
</span><br>
<span class="quotelev1">&gt; C/R frameworks in Open MPI can be reused.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That should get you started. Let us know if you have any further questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 6, 2011, at 3:19 PM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks for the reply and don't worry about the delay.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yeah, i supposse it wouln't be easy :(.
</span><br>
<span class="quotelev2">&gt; &gt; But my final goal is what you are mentioning, is to stop one particular
</span><br>
<span class="quotelev1">&gt; process (previously checkpointed) and the migrate it to another place (node,
</span><br>
<span class="quotelev1">&gt; core, slot, etc.) and restart it there, but without making a coordinated
</span><br>
<span class="quotelev1">&gt; checkpoint. I just need to checkpoint processes in an uncoordinated way, and
</span><br>
<span class="quotelev1">&gt; move them.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where can i see something about process migration in the code? or
</span><br>
<span class="quotelev1">&gt; something that could guide me.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Greetings.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 2011/1/6 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the delay; you wrote while many of us were on vacation and
</span><br>
<span class="quotelev1">&gt; we're just now starting to catch up on past mails...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm not entirely sure what you're trying to do.  It sounds like you're
</span><br>
<span class="quotelev1">&gt; trying to replace one process with another.  That's quite complicated; there
</span><br>
<span class="quotelev1">&gt; will be a lot of changes required in the code base to do this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - you'll need to notify the ORTE subsystem of the process change
</span><br>
<span class="quotelev2">&gt; &gt; - this notification will likely need to span multiple processes
</span><br>
<span class="quotelev2">&gt; &gt; - all MPI processes will need to quiesce their communications,
</span><br>
<span class="quotelev1">&gt; disconnect, and reconnect
</span><br>
<span class="quotelev2">&gt; &gt; - ...and probably other things
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That being said, you might be able to leverage some of the work that's
</span><br>
<span class="quotelev1">&gt; been done with checkpoint/restart/migration.  It's not entirely the same
</span><br>
<span class="quotelev1">&gt; thing that you're doing, but it's at least similar (quiesce networks,
</span><br>
<span class="quotelev1">&gt; [pretend to] move a process from location A to location B, etc.).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 28, 2010, at 7:03 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello to all.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm new in the forum, at least is the first time i write.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I'm working with open mpi and I would do a little experiment, i will
</span><br>
<span class="quotelev1">&gt; try to pass one process by another process.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; For example, assuming that there are 2 processes that are communicating
</span><br>
<span class="quotelev1">&gt; say rank 1 and 2. And there is a process of rank 3, I would like the rank 3
</span><br>
<span class="quotelev1">&gt; (it could be assumed that this node is marked down at the initial hostfile)
</span><br>
<span class="quotelev1">&gt; took the place of rank 2, and rank 1 still think that he is communicating
</span><br>
<span class="quotelev1">&gt; with rank 2 when in fact is communicating with the rank 3.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I guess I'll have to modify tables as orte_job_map_t and orte_proc_t,
</span><br>
<span class="quotelev1">&gt; but I wanted to know if someone already has experience doing something
</span><br>
<span class="quotelev1">&gt; similar, and can guide me at least.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The communication between processes, in principle, would be irrelevant,
</span><br>
<span class="quotelev1">&gt; so i will not need to use checkpoints / restarts for now.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Greetings
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hugo Meyer
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt; ------------------------------------
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8843/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8844.php">Leif Lindholm: "Re: [OMPI devel] [Patch] Add support for ARMv7-A architecture"</a>
<li><strong>Previous message:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
<li><strong>In reply to:</strong> <a href="8842.php">Joshua Hursey: "Re: [OMPI devel] Change in communication between process (RMAPS)"</a>
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
