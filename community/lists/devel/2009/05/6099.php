<?
$subject_val = "Re: [OMPI devel] XML stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 20:45:15 2009" -->
<!-- isoreceived="20090527004515" -->
<!-- sent="Tue, 26 May 2009 18:45:09 -0600" -->
<!-- isosent="20090527004509" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML stdout/stderr" -->
<!-- id="71d2d8cc0905261745s43e91d1dkba49cc334cefa2f3_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF9BD2F7-F967-4CC8-90A2-BD2611E34B21_at_computer.org" -->
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
<strong>Date:</strong> 2009-05-26 20:45:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6100.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Previous message:</strong> <a href="6098.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guess I had just never seen that format before - thanks for clarifying!
<br>
<p>I committed the revisions to the trunk in r21285 - see what you think...
<br>
Ralph
<br>
<p><p>On Tue, May 26, 2009 at 1:55 PM, Greg Watson &lt;g.watson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt; Both my proposals are correct XML and should be parsable by any conforming
</span><br>
<span class="quotelev1">&gt; XML parser. Just changing the tags will not work because any text that
</span><br>
<span class="quotelev1">&gt; contains &quot;&amp;&quot;, &quot;&lt;&quot;, or &quot;&gt;&quot; will still confuse an XML parser.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 26, 2009, at 8:25 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yo Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm slow, but it did hit me that there may be a simpler solution after all.
</span><br>
<span class="quotelev1">&gt; I gather that the problem is that the user's output could have tags in it
</span><br>
<span class="quotelev1">&gt; that match our own, thus causing tag-confusion. True?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My concern is that our proposed solution generates pidgin-xml which could
</span><br>
<span class="quotelev1">&gt; only ever be translated by a specially written parser. Kinda makes xml a
</span><br>
<span class="quotelev1">&gt; little moot in ways.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What if we simply change the name of our tags to something ompi-specific? I
</span><br>
<span class="quotelev1">&gt; could tag things with &lt;ompi-stdout&gt;, for example. This would follow the
</span><br>
<span class="quotelev1">&gt; natural naming convention for internal variables, and would avoid any
</span><br>
<span class="quotelev1">&gt; conflicts unless the user were truly stupid - in which case, the onus would
</span><br>
<span class="quotelev1">&gt; be on them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Would that resolve the problem?
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 26, 2009 at 5:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, May 25, 2009 at 9:10 AM, Greg Watson &lt;g.watson_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In life, nothing is ever easy...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While the XML output is working well, I've come across an issue with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stdout/stderr. Unfortunately it's not just enough to wrap it in tags,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; because it's possible that the output will contain XML formatting
</span><br>
<span class="quotelev3">&gt;&gt;&gt; information. There are two ways to get around this. The easiest is to wrap
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the output in &quot;&lt;![CDATA[&quot; and &quot;]]&gt;&quot;. This has the benefit of being
</span><br>
<span class="quotelev3">&gt;&gt;&gt; relatively easy, but will fail if the output contains the string &quot;]]&gt;&quot;. The
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other way is to replace all instances of &quot;&amp;&quot;, &quot;&lt;&quot;, and &quot;&gt;&quot; with &quot;&amp;amp;&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;&amp;lt;&quot;, and &quot;&amp;gt;&quot; respectively. This is safer, but requires more
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Ick&quot; immediately comes to mind, but is hardly helpful. :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am already doing some processing to deal with linefeeds in the middle of
</span><br>
<span class="quotelev2">&gt;&gt; output streams, so adding these three special chars isn't -that- big a deal.
</span><br>
<span class="quotelev2">&gt;&gt; I can have a test version for you in the next day or so (svn trunk) - I am
</span><br>
<span class="quotelev2">&gt;&gt; on reduced hours while moving my son (driving across country).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's give that a try and see if it resolves the problem...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6099/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6100.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Previous message:</strong> <a href="6098.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6109.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
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
