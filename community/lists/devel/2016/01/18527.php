<?
$subject_val = "Re: [OMPI devel] orted-children communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 08:13:30 2016" -->
<!-- isoreceived="20160126131330" -->
<!-- sent="Tue, 26 Jan 2016 14:13:27 +0100" -->
<!-- isosent="20160126131327" -->
<!-- name="Gianmario Pozzi" -->
<!-- email="pozzigmario_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted-children communication" -->
<!-- id="CAP1=D+w0d7F+LYUJ-rVz6fNBAYvCuBHDna0==ecxpiFz1JXpNg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="0AA77E88-947A-4373-B4E5-5633891B1F44_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orted-children communication<br>
<strong>From:</strong> Gianmario Pozzi (<em>pozzigmario_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 08:13:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Previous message:</strong> <a href="18526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18492.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Reply:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Ralph.
<br>
<p>What about ORTE_DAEMON_MESSAGE_LOCAL_PROCS case into orte_comm.c? I see it
<br>
calls orte_odls.deliver_message() and the comments say something about
<br>
delivering to children.
<br>
<p>Furthermore I can see a socket opened between orted and the application
<br>
while it's running, what is that for?
<br>
<p>2016-01-19 17:40 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; This is on master, yes? The only orted-children communication on the
</span><br>
<span class="quotelev1">&gt; master (and going forward) is via PMIx. I&#226;&#128;&#153;ve got a branch that contains the
</span><br>
<span class="quotelev1">&gt; error notification support so the orted can alert the child about changes
</span><br>
<span class="quotelev1">&gt; such as migration, and Annu Dasari and Dave Solt are working on the error
</span><br>
<span class="quotelev1">&gt; response APIs to the client can request specific responses by the resource
</span><br>
<span class="quotelev1">&gt; manager.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 19, 2016, at 4:57 AM, Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi everyone!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm one of Federico's colleagues working on orted migration. In this post (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/10/18268.php">http://www.open-mpi.org/community/lists/devel/2015/10/18268.php</a>) he made
</span><br>
<span class="quotelev1">&gt; a summary of all the communication channels involved in each run.
</span><br>
<span class="quotelev1">&gt; I need to know which framework manages communications between orted and
</span><br>
<span class="quotelev1">&gt; its children, so that we can forward info about migrating nodes to btl.
</span><br>
<span class="quotelev1">&gt; Can anybody help me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18491.php">http://www.open-mpi.org/community/lists/devel/2016/01/18491.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18492.php">http://www.open-mpi.org/community/lists/devel/2016/01/18492.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18527/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Previous message:</strong> <a href="18526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>In reply to:</strong> <a href="18492.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Reply:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
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
