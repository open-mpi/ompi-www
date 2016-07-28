<?
$subject_val = "Re: [OMPI devel] orted-children communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 26 08:53:41 2016" -->
<!-- isoreceived="20160126135341" -->
<!-- sent="Tue, 26 Jan 2016 22:53:39 +0900" -->
<!-- isosent="20160126135339" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted-children communication" -->
<!-- id="CAAkFZ5sHN_hcPVoNO4a83Zj50oZz9emuHAD=dGhqbvOALSZ-xA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAP1=D+w0d7F+LYUJ-rVz6fNBAYvCuBHDna0==ecxpiFz1JXpNg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-26 08:53:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18529.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Previous message:</strong> <a href="18527.php">Gianmario Pozzi: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>In reply to:</strong> <a href="18527.php">Gianmario Pozzi: "Re: [OMPI devel] orted-children communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18529.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Reply:</strong> <a href="18529.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
iirc, there are pipes between orted and app for IOF (I/O
<br>
forwarding) (stdin, stdout and stderr)
<br>
<p><p>On Tuesday, January 26, 2016, Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you, Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about ORTE_DAEMON_MESSAGE_LOCAL_PROCS case into orte_comm.c? I see it
</span><br>
<span class="quotelev1">&gt; calls orte_odls.deliver_message() and the comments say something about
</span><br>
<span class="quotelev1">&gt; delivering to children.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Furthermore I can see a socket opened between orted and the application
</span><br>
<span class="quotelev1">&gt; while it's running, what is that for?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016-01-19 17:40 GMT+01:00 Ralph Castain &lt;rhc_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:_e(%7B%7D,'cvml','rhc_at_[hidden]');&gt;&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is on master, yes? The only orted-children communication on the
</span><br>
<span class="quotelev2">&gt;&gt; master (and going forward) is via PMIx. I&#226;&#128;&#153;ve got a branch that contains the
</span><br>
<span class="quotelev2">&gt;&gt; error notification support so the orted can alert the child about changes
</span><br>
<span class="quotelev2">&gt;&gt; such as migration, and Annu Dasari and Dave Solt are working on the error
</span><br>
<span class="quotelev2">&gt;&gt; response APIs to the client can request specific responses by the resource
</span><br>
<span class="quotelev2">&gt;&gt; manager.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 19, 2016, at 4:57 AM, Gianmario Pozzi &lt;pozzigmario_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;javascript:_e(%7B%7D,'cvml','pozzigmario_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm one of Federico's colleagues working on orted migration. In this post
</span><br>
<span class="quotelev2">&gt;&gt; (<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18268.php">http://www.open-mpi.org/community/lists/devel/2015/10/18268.php</a>) he
</span><br>
<span class="quotelev2">&gt;&gt; made a summary of all the communication channels involved in each run.
</span><br>
<span class="quotelev2">&gt;&gt; I need to know which framework manages communications between orted and
</span><br>
<span class="quotelev2">&gt;&gt; its children, so that we can forward info about migrating nodes to btl.
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody help me?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18491.php">http://www.open-mpi.org/community/lists/devel/2016/01/18491.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18492.php">http://www.open-mpi.org/community/lists/devel/2016/01/18492.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18529.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Previous message:</strong> <a href="18527.php">Gianmario Pozzi: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>In reply to:</strong> <a href="18527.php">Gianmario Pozzi: "Re: [OMPI devel] orted-children communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18529.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Reply:</strong> <a href="18529.php">Ralph Castain: "Re: [OMPI devel] orted-children communication"</a>
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
