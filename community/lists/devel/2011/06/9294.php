<?
$subject_val = "Re: [OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  3 10:12:38 2011" -->
<!-- isoreceived="20110603141238" -->
<!-- sent="Fri, 3 Jun 2011 08:12:27 -0600" -->
<!-- isosent="20110603141227" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fake Modex" -->
<!-- id="39BB11D8-FAB2-4725-B4F1-0E12783E0531_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTi=Xww_ePNkadwrqhTKR+SVfY5ZpAA_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-06-03 10:12:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 3, 2011, at 8:03 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are you talking about an MPI communication? If so, then you need to update every proc's modex info for the proc that moved  - this is something stored in each MPI proc's memory, so it isn't something that you can just get from the daemon on-demand. You'll have to provide the update to every single proc directly so that it has the info if/when it should decide to send an MPI message to the proc that moved.
</span><br>
<span class="quotelev1">&gt; Yes, about MPI communications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the modex database interface in orte/mca/grpcomm/base/grpcomm_base_modex.c. You'll have to create new code to send/recv an update message, but the code to update the database entry exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you mean with a send/recv update message i think that has to be something similar to pack/unpack info maybe using also the allgather like it's done in grpcomm_base_modex.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I took a look to the code and i found the orte_grpcomm_base_update_modex_entries(&amp;proc_name, &amp;rbuf) function, and then i printed the attr_name and i get btl.tcp.1.7 and others attributes, but i'm not finding any information about the uri, address or something that allows me to communicate with another peer.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm thinking that i have to (in some way) update the endpoint in some place, but i don't know frome where i can do this, and if there is a function that allows me to do that kind of update.
</span><br>
<p>When an MPI proc calls MPI_Init, each btl pushes its contact info into the modex database - one example is the btl.tcp.1.7 info you found there. That entry is for the TCP btl, which is probably what you are looking for. There is no way for you to edit that data - each btl encodes it in its own way and then adds it to the modex.
<br>
<p>After doing that, the MPI_Init procedure calls grpcomm.modex to distribute the data across all procs in the job. Unfortunately, being a collective, all procs must participate. In your case, you'll have to find a different way to do it. Upon receipt, each proc updates its own modex db to include the new info.
<br>
<p>Look in orte/mca/grpcomm/bad/grpcomm_bad_module.c at the modex function and follow that code thru the grpcomm/base functions to see how the modex info is retrieved, passed, and decoded on the far end.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hugo
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2011/6/3 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Are you talking about an MPI communication? If so, then you need to update every proc's modex info for the proc that moved  - this is something stored in each MPI proc's memory, so it isn't something that you can just get from the daemon on-demand. You'll have to provide the update to every single proc directly so that it has the info if/when it should decide to send an MPI message to the proc that moved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is why we do a modex upon restart - sending the change to every MPI proc is hardly scalable minus a collective operation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See the modex database interface in orte/mca/grpcomm/base/grpcomm_base_modex.c. You'll have to create new code to send/recv an update message, but the code to update the database entry exists.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2011, at 7:52 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My actual problem is that i don't know where is the struct that has the information that is used to send messages to the procs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Something like:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Rank       URI
</span><br>
<span class="quotelev2">&gt;&gt; 0             21222:tcp:192.168.1.1:1250
</span><br>
<span class="quotelev2">&gt;&gt; 1             21223:tcp:192.168.1.2:1250
</span><br>
<span class="quotelev2">&gt;&gt; .....          .....
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Because what i need is to update it when i move a process from its original site, is there something like this??
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hugo 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2011/5/31 Hugo Meyer &lt;meyer.hugo_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello @ll.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm needing some help to restart the communication with a process that i restore in a different node. My situation is as follows:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The process fails and it's restored in another node succesfully from a previous checkpoint that i sent there. Now, when a process try to send a message to this restored process it will fail, or at least, it will be locked in ompi_request_wait_completion. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, when this happens i have to send a message to the daemon of the sender that will have the uri of where the process has been restored and answer to the proc with this and it will update this info.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So, i need to know where in the code i can capture this attempt to send and then send the message to his daemon and where and how i can update this info to send the message to the right place (Same rank but new uri).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have to do it in this way to avoid a collective communication.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you give me a hand on this, it will be great.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best regards.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hugo
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9293.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9295.php">Jeff Squyres: "Re: [OMPI devel] Fake Modex"</a>
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
