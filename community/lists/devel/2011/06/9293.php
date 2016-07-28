<?
$subject_val = "Re: [OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  3 10:03:14 2011" -->
<!-- isoreceived="20110603140314" -->
<!-- sent="Fri, 3 Jun 2011 16:03:09 +0200" -->
<!-- isosent="20110603140309" -->
<!-- name="Hugo Meyer" -->
<!-- email="meyer.hugo_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fake Modex" -->
<!-- id="BANLkTi=Xww_ePNkadwrqhTKR+SVfY5ZpAA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="06E86C93-7E50-4B77-94A2-7AFD38B26097_at_open-mpi.org" -->
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
<strong>From:</strong> Hugo Meyer (<em>meyer.hugo_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-03 10:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph.
<br>
<p>Are you talking about an MPI communication? If so, then you need to update
<br>
every proc's modex info for the proc that moved  - this is something stored
<br>
in each MPI proc's memory, so it isn't something that you can just get from
<br>
the daemon on-demand. You'll have to provide the update to every single proc
<br>
directly so that it has the info if/when it should decide to send an MPI
<br>
message to the proc that moved.
<br>
<p>Yes, about MPI communications.
<br>
<p>See the modex database interface in
<br>
orte/mca/grpcomm/base/grpcomm_base_modex.c. You'll have to create new code
<br>
to send/recv an update message, but the code to update the database entry
<br>
exists.
<br>
<p>What you mean with a send/recv update message i think that has to be
<br>
something similar to pack/unpack info maybe using also the allgather like
<br>
it's done in grpcomm_base_modex.c
<br>
<p>I took a look to the code and i found
<br>
the orte_grpcomm_base_update_modex_entries(&amp;proc_name, &amp;rbuf) function, and
<br>
then i printed the attr_name and i get *btl.tcp.1.7 *and others attributes,
<br>
but i'm not finding any information about the uri, address or something that
<br>
allows me to communicate with another peer.
<br>
<p>I'm thinking that i have to (in some way) update the endpoint in some place,
<br>
but i don't know frome where i can do this, and if there is a function that
<br>
allows me to do that kind of update.
<br>
<p>Thanks again.
<br>
<p>Hugo
<br>
<p><p><p><p>2011/6/3 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Are you talking about an MPI communication? If so, then you need to update
</span><br>
<span class="quotelev1">&gt; every proc's modex info for the proc that moved  - this is something stored
</span><br>
<span class="quotelev1">&gt; in each MPI proc's memory, so it isn't something that you can just get from
</span><br>
<span class="quotelev1">&gt; the daemon on-demand. You'll have to provide the update to every single proc
</span><br>
<span class="quotelev1">&gt; directly so that it has the info if/when it should decide to send an MPI
</span><br>
<span class="quotelev1">&gt; message to the proc that moved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is why we do a modex upon restart - sending the change to every MPI
</span><br>
<span class="quotelev1">&gt; proc is hardly scalable minus a collective operation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See the modex database interface in
</span><br>
<span class="quotelev1">&gt; orte/mca/grpcomm/base/grpcomm_base_modex.c. You'll have to create new code
</span><br>
<span class="quotelev1">&gt; to send/recv an update message, but the code to update the database entry
</span><br>
<span class="quotelev1">&gt; exists.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 2, 2011, at 7:52 AM, Hugo Meyer wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello again.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My actual problem is that i don't know where is the struct that has the
</span><br>
<span class="quotelev1">&gt; information that is used to send messages to the procs.
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
<span class="quotelev1">&gt; Because what i need is to update it when i move a process from its original
</span><br>
<span class="quotelev1">&gt; site, is there something like this??
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello @ll.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm needing some help to restart the communication with a process that i
</span><br>
<span class="quotelev2">&gt;&gt; restore in a different node. My situation is as follows:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The process fails and it's restored in another node succesfully from a
</span><br>
<span class="quotelev2">&gt;&gt; previous checkpoint that i sent there. Now, when a process try to send a
</span><br>
<span class="quotelev2">&gt;&gt; message to this restored process it will fail, or at least, it will be
</span><br>
<span class="quotelev2">&gt;&gt; locked in *ompi_request_wait_completion. *
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; *
</span><br>
<span class="quotelev2">&gt;&gt; So, when this happens i have to send a message to the daemon of the sender
</span><br>
<span class="quotelev2">&gt;&gt; that will have the uri of where the process has been restored and answer to
</span><br>
<span class="quotelev2">&gt;&gt; the proc with this and it will update this info.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, i need to know where in the code i can capture this attempt to send
</span><br>
<span class="quotelev2">&gt;&gt; and then send the message to his daemon and where and how i can update this
</span><br>
<span class="quotelev2">&gt;&gt; info to send the message to the right place (Same rank but new uri).
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9293/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Previous message:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9292.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9294.php">Ralph Castain: "Re: [OMPI devel] Fake Modex"</a>
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
