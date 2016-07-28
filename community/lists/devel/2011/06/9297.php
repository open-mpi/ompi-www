<?
$subject_val = "Re: [OMPI devel] Fake Modex";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 10:55:12 2011" -->
<!-- isoreceived="20110604145512" -->
<!-- sent="Sat, 4 Jun 2011 08:55:01 -0600" -->
<!-- isosent="20110604145501" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fake Modex" -->
<!-- id="85055CEF-C255-4FA9-A267-03F6FDE8FF84_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTimCEUx2yOH0zi4tu+dyk7qd11wpeQ_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2011-06-04 10:55:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9298.php">Sebastian Rinke: "[OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Previous message:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9367.php">Josh Hursey: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9367.php">Josh Hursey: "Re: [OMPI devel] Fake Modex"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 4, 2011, at 5:21 AM, Hugo Meyer wrote:
<br>
<p><span class="quotelev1">&gt; Thanks for your replies.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;After doing that, the MPI_Init procedure calls grpcomm.modex to distribute the data across all procs in the job. Unfortunately, being a collective, all procs must participate. In your case, you'll have to find a different way to do it. Upon receipt, each proc updates its own modex db to include the new info.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Look in orte/mca/grpcomm/bad/grpcomm_bad_module.c at the modex function and follow that code thru the grpcomm/base functions to see how the modex info is retrieved, passed, and decoded on the far end.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I will take a look to this Ralph and let you know how it goes. But today looking at the code with a partner, he suggested to me to try to capture an error when sending data through the btl_tcp_endpoint, more precisely in mca_btl_tcp_frag_send and capture there an error when we try to write to the fd of the socket. I've tried this but when a process moves and try to send a message, or someone try to send a message for him, i cannot capture the moment of the failure in the mca_btl_tcp_frag_send, but i don't know why, it is supposed to fail when someone try to send, is there any other place where this is capture? If i do in this way, i can reset connections on demand i suppose. What do you think of this? it's a good idea? And after i detect this failure, i will try to update de modex db of that process from here it's ok?
</span><br>
<p>I'm no expert on the tcp btl - perhaps George can answer?
<br>
<p>The run-time has no visibility into MPI connections, and has no understanding of the modex contents. So if a proc detects that it cannot make the btl connection, I guess it could send an orte message to the proc it's trying to reach, and have that proc return a copy of its modex data?
<br>
<p>I guess that could work. You may be running into the MPI layer's own attempts to ensure comm success via retry...I know you won't get a send failure just because the socket is closed - it'll keep retrying the connection for awhile before giving up.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
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
<span class="quotelev1">&gt; 2011/6/3 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 3, 2011, at 10:12 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; When an MPI proc calls MPI_Init, each btl pushes its contact info into the modex database - one example is the btl.tcp.1.7 info you found there. That entry is for the TCP btl, which is probably what you are looking for. There is no way for you to edit that data - each btl encodes it in its own way and then adds it to the modex.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically, whatever each entity puts into the modex is a blob that is only readable by other entities just like itself.  For example, what one TCP BTL puts in the modex can really only be read by another TCP BTL. The contents of what the TCP BTL puts in there is an opaque binary blob from the modex's point of view.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9297/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9298.php">Sebastian Rinke: "[OMPI devel] openib error for message size 1.5 GB"</a>
<li><strong>Previous message:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>In reply to:</strong> <a href="9296.php">Hugo Meyer: "Re: [OMPI devel] Fake Modex"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9367.php">Josh Hursey: "Re: [OMPI devel] Fake Modex"</a>
<li><strong>Reply:</strong> <a href="9367.php">Josh Hursey: "Re: [OMPI devel] Fake Modex"</a>
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
