<?
$subject_val = "Re: [OMPI devel] XML stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 08:25:06 2009" -->
<!-- isoreceived="20090526122506" -->
<!-- sent="Tue, 26 May 2009 06:25:01 -0600" -->
<!-- isosent="20090526122501" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML stdout/stderr" -->
<!-- id="71d2d8cc0905260525occ5f1c1x7141150dac39d893_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0905260442m21924f20hcd4a23a3224a064_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-26 08:25:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6088.php">Jeff Squyres: "[OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="6086.php">Nadia Derbey: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>In reply to:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo Greg
<br>
<p>I'm slow, but it did hit me that there may be a simpler solution after all.
<br>
I gather that the problem is that the user's output could have tags in it
<br>
that match our own, thus causing tag-confusion. True?
<br>
<p>My concern is that our proposed solution generates pidgin-xml which could
<br>
only ever be translated by a specially written parser. Kinda makes xml a
<br>
little moot in ways.
<br>
<p>What if we simply change the name of our tags to something ompi-specific? I
<br>
could tag things with &lt;ompi-stdout&gt;, for example. This would follow the
<br>
natural naming convention for internal variables, and would avoid any
<br>
conflicts unless the user were truly stupid - in which case, the onus would
<br>
be on them.
<br>
<p>Would that resolve the problem?
<br>
Ralph
<br>
<p><p>On Tue, May 26, 2009 at 5:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 25, 2009 at 9:10 AM, Greg Watson &lt;g.watson_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In life, nothing is ever easy...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While the XML output is working well, I've come across an issue with
</span><br>
<span class="quotelev2">&gt;&gt; stdout/stderr. Unfortunately it's not just enough to wrap it in tags,
</span><br>
<span class="quotelev2">&gt;&gt; because it's possible that the output will contain XML formatting
</span><br>
<span class="quotelev2">&gt;&gt; information. There are two ways to get around this. The easiest is to wrap
</span><br>
<span class="quotelev2">&gt;&gt; the output in &quot;&lt;![CDATA[&quot; and &quot;]]&gt;&quot;. This has the benefit of being
</span><br>
<span class="quotelev2">&gt;&gt; relatively easy, but will fail if the output contains the string &quot;]]&gt;&quot;. The
</span><br>
<span class="quotelev2">&gt;&gt; other way is to replace all instances of &quot;&amp;&quot;, &quot;&lt;&quot;, and &quot;&gt;&quot; with &quot;&amp;amp;&quot;,
</span><br>
<span class="quotelev2">&gt;&gt; &quot;&amp;lt;&quot;, and &quot;&amp;gt;&quot; respectively. This is safer, but requires more
</span><br>
<span class="quotelev2">&gt;&gt; processing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Ick&quot; immediately comes to mind, but is hardly helpful. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am already doing some processing to deal with linefeeds in the middle of
</span><br>
<span class="quotelev1">&gt; output streams, so adding these three special chars isn't -that- big a deal.
</span><br>
<span class="quotelev1">&gt; I can have a test version for you in the next day or so (svn trunk) - I am
</span><br>
<span class="quotelev1">&gt; on reduced hours while moving my son (driving across country).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Let's give that a try and see if it resolves the problem...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6087/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6088.php">Jeff Squyres: "[OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>Previous message:</strong> <a href="6086.php">Nadia Derbey: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>In reply to:</strong> <a href="6085.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6094.php">Greg Watson: "Re: [OMPI devel] XML stdout/stderr"</a>
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
