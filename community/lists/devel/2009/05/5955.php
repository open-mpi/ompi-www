<?
$subject_val = "Re: [OMPI devel] -display-map behavior in 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  4 14:54:05 2009" -->
<!-- isoreceived="20090504185405" -->
<!-- sent="Mon, 4 May 2009 12:53:58 -0600" -->
<!-- isosent="20090504185358" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map behavior in 1.3" -->
<!-- id="71d2d8cc0905041153k125c70dbxd71ac16a43777c01_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0905040842u6c837c7biadd3af926dc4c963_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] -display-map behavior in 1.3<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-04 14:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5956.php">Greg Koenig: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Previous message:</strong> <a href="5954.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>In reply to:</strong> <a href="5954.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Easier than I thought...done in r21147
<br>
<p>Let me know if that meets your needs
<br>
Ralph
<br>
<p><p>On Mon, May 4, 2009 at 9:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Should be doable....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Since the output was going to stderr, we just let it continue to do so and
</span><br>
<span class="quotelev1">&gt; tagged it. I think I can redirect it when doing xml tagging as that is
</span><br>
<span class="quotelev1">&gt; handled as a separate case - shouldn't be too hard to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 4, 2009 at 9:29 AM, Greg Watson &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; I did find another issue in 1.3 though. It looks like with the -xml option
</span><br>
<span class="quotelev2">&gt;&gt; you're sending output tagged with &lt;stderr&gt; to stderr, whereas it would
</span><br>
<span class="quotelev2">&gt;&gt; probably be better if everything was sent to stdout. Otherwise it's
</span><br>
<span class="quotelev2">&gt;&gt; necessary to parse the stderr stream separately.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 1, 2009, at 10:47 AM, Greg Watson wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Arrgh! Sorry, my bad. I must have been linked against an old version or
</span><br>
<span class="quotelev2">&gt;&gt; something. When I recompiled the output went away.
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 1, 2009, at 10:09 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Interesting - I'm not seeing this behavior:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; graywolf54:trunk rhc$ mpirun -n 3 --xml --display-map hostname
</span><br>
<span class="quotelev2">&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;host name=&quot;graywolf54.lanl.gov&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;process rank=&quot;1&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         &lt;process rank=&quot;2&quot;/&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;/host&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout rank=&quot;0&quot;&gt;graywolf54.lanl.gov&lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout rank=&quot;1&quot;&gt;graywolf54.lanl.gov&lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;stdout rank=&quot;2&quot;&gt;graywolf54.lanl.gov&lt;/stdout&gt;
</span><br>
<span class="quotelev2">&gt;&gt; graywolf54:trunk rhc$
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you tell me more about when you see this? Note that the display-map
</span><br>
<span class="quotelev2">&gt;&gt; output should always appear on stderr because that is our default output
</span><br>
<span class="quotelev2">&gt;&gt; device.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, May 1, 2009 at 7:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm...no, that's a bug. I'll fix it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, May 1, 2009 at 7:24 AM, Greg Watson &lt;g.watson_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralf,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've just noticed that if I use '-xml -display-map', I get the xml
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version of the map and then the non-xml version is sent to stderr (wrapped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in xml tags). Was this by design? In my view it would be better to suppress
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the non-xml map altogether if the -xml option. 1.4 seems to do the same.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5955/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5956.php">Greg Koenig: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>Previous message:</strong> <a href="5954.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>In reply to:</strong> <a href="5954.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
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
