<?
$subject_val = "Re: [OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  3 05:29:27 2011" -->
<!-- isoreceived="20110603092927" -->
<!-- sent="Fri, 3 Jun 2011 03:29:16 -0600" -->
<!-- isosent="20110603092916" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fake Modex" -->
<!-- id="06E86C93-7E50-4B77-94A2-7AFD38B26097_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTiktnVtWhpG3Ls6CQTjR0XNdeUXFug_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fake Modex<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-03 05:29:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you talking about an MPI communication? If so, then you need to update every proc's modex info for the proc that moved  - this is something stored in each MPI proc's memory, so it isn't something that you can just get from the daemon on-demand. You'll have to provide the update to every single proc directly so that it has the info if/when it should decide to send an MPI message to the proc that moved.
<br>
<p>This is why we do a modex upon restart - sending the change to every MPI proc is hardly scalable minus a collective operation.
<br>
<p>See the modex database interface in orte/mca/grpcomm/base/grpcomm_base_modex.c. You'll have to create new code to send/recv an update message, but the code to update the database entry exists.
<br>
<p><p>On Jun 2, 2011, at 7:52 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My actual problem is that i don't know where is the struct that has the information that is used to send messages to the procs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rank       URI
</span><br>
<span class="quotelev1">&gt; 0             21222:tcp:192.168.1.1:1250
</span><br>
<span class="quotelev1">&gt; 1             21223:tcp:192.168.1.2:1250
</span><br>
<span class="quotelev1">&gt; .....          .....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Because what i need is to update it when i move a process from its original site, is there something like this??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/5/31 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Hello @ll.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm needing some help to restart the communication with a process that i restore in a different node. My situation is as follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The process fails and it's restored in another node succesfully from a previous checkpoint that i sent there. Now, when a process try to send a message to this restored process it will fail, or at least, it will be locked in ompi_request_wait_completion. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, when this happens i have to send a message to the daemon of the sender that will have the uri of where the process has been restored and answer to the proc with this and it will update this info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, i need to know where in the code i can capture this attempt to send and then send the message to his daemon and where and how i can update this info to send the message to the right place (Same rank but new uri).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have to do it in this way to avoid a collective communication.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you give me a hand on this, it will be great.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9292/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9291.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
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
