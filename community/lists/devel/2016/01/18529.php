<?
$subject_val = "Re: [OMPI devel] orted-children communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 09:40:07 2016" -->
<!-- isoreceived="20160126144007" -->
<!-- sent="Tue, 26 Jan 2016 06:39:58 -0800" -->
<!-- isosent="20160126143958" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted-children communication" -->
<!-- id="CAMD57odYZOkH8DHCe+PsmJiy6parHLz20EVfUD1b=9PtGm7y_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5sHN_hcPVoNO4a83Zj50oZz9emuHAD=dGhqbvOALSZ-xA_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 09:39:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18530.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>In reply to:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
As Gilles said, we actually have four pipes open to each process (one for
<br>
show_help output separately from the others he mentioned). In addition,
<br>
there is a Unix domain socket connection used by PMIx.
<br>
<p>The message_local_procs code path is stale - I need to prune things now
<br>
that the PMIx integration is complete.
<br>
<p><p>On Tue, Jan 26, 2016 at 5:53 AM, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; iirc, there are pipes between orted and app for IOF (I/O
</span><br>
<span class="quotelev1">&gt; forwarding) (stdin, stdout and stderr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tuesday, January 26, 2016, Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Ralph.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What about ORTE_DAEMON_MESSAGE_LOCAL_PROCS case into orte_comm.c? I see
</span><br>
<span class="quotelev2">&gt;&gt; it calls orte_odls.deliver_message() and the comments say something about
</span><br>
<span class="quotelev2">&gt;&gt; delivering to children.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Furthermore I can see a socket opened between orted and the application
</span><br>
<span class="quotelev2">&gt;&gt; while it's running, what is that for?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2016-01-19 17:40 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is on master, yes? The only orted-children communication on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master (and going forward) is via PMIx. I&#226;&#128;&#153;ve got a branch that contains the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; error notification support so the orted can alert the child about changes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; such as migration, and Annu Dasari and Dave Solt are working on the error
</span><br>
<span class="quotelev3">&gt;&gt;&gt; response APIs to the client can request specific responses by the resource
</span><br>
<span class="quotelev3">&gt;&gt;&gt; manager.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 19, 2016, at 4:57 AM, Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everyone!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm one of Federico's colleagues working on orted migration. In this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post (<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18268.php">http://www.open-mpi.org/community/lists/devel/2015/10/18268.php</a>)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; he made a summary of all the communication channels involved in each run.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to know which framework manages communications between orted and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; its children, so that we can forward info about migrating nodes to btl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can anybody help me?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18491.php">http://www.open-mpi.org/community/lists/devel/2016/01/18491.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18492.php">http://www.open-mpi.org/community/lists/devel/2016/01/18492.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18528.php">http://www.open-mpi.org/community/lists/devel/2016/01/18528.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18529/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18530.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] tm-less tm module"</a>
<li><strong>Previous message:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>In reply to:</strong> <a href="18528.php">Gilles Gouaillardet: "Re: [OMPI devel] orted-children communication"</a>
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
