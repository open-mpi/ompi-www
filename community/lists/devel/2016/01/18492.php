<?
$subject_val = "Re: [OMPI devel] orted-children communication";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 19 11:40:29 2016" -->
<!-- isoreceived="20160119164029" -->
<!-- sent="Tue, 19 Jan 2016 08:40:26 -0800" -->
<!-- isosent="20160119164026" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orted-children communication" -->
<!-- id="0AA77E88-947A-4373-B4E5-5633891B1F44_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAP1=D+xCqBhAfTHQO=P7Fx4mpOSRDfx0HSm9rqptxddV5eQW3A_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2016-01-19 11:40:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18493.php">Ralph Castain: "[OMPI devel] Open MPI v1.10.2 released"</a>
<li><strong>Previous message:</strong> <a href="18491.php">Gianmario Pozzi: "[OMPI devel] orted-children communication"</a>
<li><strong>In reply to:</strong> <a href="18491.php">Gianmario Pozzi: "[OMPI devel] orted-children communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18527.php">Gianmario Pozzi: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Reply:</strong> <a href="18527.php">Gianmario Pozzi: "Re: [OMPI devel] orted-children communication"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is on master, yes? The only orted-children communication on the master (and going forward) is via PMIx. I&#226;&#128;&#153;ve got a branch that contains the error notification support so the orted can alert the child about changes such as migration, and Annu Dasari and Dave Solt are working on the error response APIs to the client can request specific responses by the resource manager.
<br>
<p><p><span class="quotelev1">&gt; On Jan 19, 2016, at 4:57 AM, Gianmario Pozzi &lt;pozzigmario_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi everyone!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm one of Federico's colleagues working on orted migration. In this post (<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18268.php">http://www.open-mpi.org/community/lists/devel/2015/10/18268.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18268.php">http://www.open-mpi.org/community/lists/devel/2015/10/18268.php</a>&gt;) he made a summary of all the communication channels involved in each run. 
</span><br>
<span class="quotelev1">&gt; I need to know which framework manages communications between orted and its children, so that we can forward info about migrating nodes to btl.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/01/18491.php">http://www.open-mpi.org/community/lists/devel/2016/01/18491.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18493.php">Ralph Castain: "[OMPI devel] Open MPI v1.10.2 released"</a>
<li><strong>Previous message:</strong> <a href="18491.php">Gianmario Pozzi: "[OMPI devel] orted-children communication"</a>
<li><strong>In reply to:</strong> <a href="18491.php">Gianmario Pozzi: "[OMPI devel] orted-children communication"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18527.php">Gianmario Pozzi: "Re: [OMPI devel] orted-children communication"</a>
<li><strong>Reply:</strong> <a href="18527.php">Gianmario Pozzi: "Re: [OMPI devel] orted-children communication"</a>
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
