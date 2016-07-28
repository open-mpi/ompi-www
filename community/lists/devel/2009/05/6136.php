<?
$subject_val = "Re: [OMPI devel] XML stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 20:56:10 2009" -->
<!-- isoreceived="20090528005610" -->
<!-- sent="Wed, 27 May 2009 18:56:04 -0600" -->
<!-- isosent="20090528005604" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML stdout/stderr" -->
<!-- id="71d2d8cc0905271756s67334ce8x32261ec81203331a_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5D8F15E5-E82F-4E3D-A06E-70065EEBEEE9_at_computer.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XML stdout/stderr<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 20:56:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6135.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, should be there with r21309...let me know!
<br>
<p>Ralph
<br>
<p><p>On Wed, May 27, 2009 at 7:19 AM, Greg Watson &lt;g.watson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Close, but no banana!
</span><br>
<span class="quotelev1">&gt; Can you add a semicolon to the end of each? So &quot;&lt;&quot; should be replaced by
</span><br>
<span class="quotelev1">&gt; &quot;&amp;lt;&quot;, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2009, at 8:45 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Guess I had just never seen that format before - thanks for clarifying!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I committed the revisions to the trunk in r21285 - see what you think...
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 26, 2009 at 1:55 PM, Greg Watson &lt;g.watson_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; Both my proposals are correct XML and should be parsable by any conforming
</span><br>
<span class="quotelev2">&gt;&gt; XML parser. Just changing the tags will not work because any text that
</span><br>
<span class="quotelev2">&gt;&gt; contains &quot;&amp;&quot;, &quot;&lt;&quot;, or &quot;&gt;&quot; will still confuse an XML parser.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 26, 2009, at 8:25 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yo Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm slow, but it did hit me that there may be a simpler solution after
</span><br>
<span class="quotelev2">&gt;&gt; all. I gather that the problem is that the user's output could have tags in
</span><br>
<span class="quotelev2">&gt;&gt; it that match our own, thus causing tag-confusion. True?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My concern is that our proposed solution generates pidgin-xml which could
</span><br>
<span class="quotelev2">&gt;&gt; only ever be translated by a specially written parser. Kinda makes xml a
</span><br>
<span class="quotelev2">&gt;&gt; little moot in ways.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What if we simply change the name of our tags to something ompi-specific?
</span><br>
<span class="quotelev2">&gt;&gt; I could tag things with &lt;ompi-stdout&gt;, for example. This would follow the
</span><br>
<span class="quotelev2">&gt;&gt; natural naming convention for internal variables, and would avoid any
</span><br>
<span class="quotelev2">&gt;&gt; conflicts unless the user were truly stupid - in which case, the onus would
</span><br>
<span class="quotelev2">&gt;&gt; be on them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Would that resolve the problem?
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, May 26, 2009 at 5:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, May 25, 2009 at 9:10 AM, Greg Watson &lt;g.watson_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In life, nothing is ever easy...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; While the XML output is working well, I've come across an issue with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stdout/stderr. Unfortunately it's not just enough to wrap it in tags,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; because it's possible that the output will contain XML formatting
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; information. There are two ways to get around this. The easiest is to wrap
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the output in &quot;&lt;![CDATA[&quot; and &quot;]]&gt;&quot;. This has the benefit of being
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; relatively easy, but will fail if the output contains the string &quot;]]&gt;&quot;. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other way is to replace all instances of &quot;&amp;&quot;, &quot;&lt;&quot;, and &quot;&gt;&quot; with &quot;&amp;amp;&quot;,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;&amp;lt;&quot;, and &quot;&amp;gt;&quot; respectively. This is safer, but requires more
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; processing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thoughts?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;Ick&quot; immediately comes to mind, but is hardly helpful. :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am already doing some processing to deal with linefeeds in the middle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of output streams, so adding these three special chars isn't -that- big a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; deal. I can have a test version for you in the next day or so (svn trunk) -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am on reduced hours while moving my son (driving across country).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's give that a try and see if it resolves the problem...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Greg
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6136/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6137.php">Nadia Derbey: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>Previous message:</strong> <a href="6135.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21292"</a>
<li><strong>In reply to:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
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
