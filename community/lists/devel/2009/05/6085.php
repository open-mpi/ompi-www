<?
$subject_val = "Re: [OMPI devel] XML stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 07:42:53 2009" -->
<!-- isoreceived="20090526114253" -->
<!-- sent="Tue, 26 May 2009 05:42:48 -0600" -->
<!-- isosent="20090526114248" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML stdout/stderr" -->
<!-- id="71d2d8cc0905260442m21924f20hcd4a23a3224a064_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="402C47F1-51B6-441D-8C88-B127BAFC2050_at_computer.org" -->
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
<strong>Date:</strong> 2009-05-26 07:42:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6086.php">Nadia Derbey: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Previous message:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>In reply to:</strong> <a href="6082.php">Greg Watson: "[OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, May 25, 2009 at 9:10 AM, Greg Watson &lt;g.watson_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In life, nothing is ever easy...
</span><br>
<p><p>:-)
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While the XML output is working well, I've come across an issue with
</span><br>
<span class="quotelev1">&gt; stdout/stderr. Unfortunately it's not just enough to wrap it in tags,
</span><br>
<span class="quotelev1">&gt; because it's possible that the output will contain XML formatting
</span><br>
<span class="quotelev1">&gt; information. There are two ways to get around this. The easiest is to wrap
</span><br>
<span class="quotelev1">&gt; the output in &quot;&lt;![CDATA[&quot; and &quot;]]&gt;&quot;. This has the benefit of being
</span><br>
<span class="quotelev1">&gt; relatively easy, but will fail if the output contains the string &quot;]]&gt;&quot;. The
</span><br>
<span class="quotelev1">&gt; other way is to replace all instances of &quot;&amp;&quot;, &quot;&lt;&quot;, and &quot;&gt;&quot; with &quot;&amp;amp;&quot;,
</span><br>
<span class="quotelev1">&gt; &quot;&amp;lt;&quot;, and &quot;&amp;gt;&quot; respectively. This is safer, but requires more
</span><br>
<span class="quotelev1">&gt; processing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<p><p>&quot;Ick&quot; immediately comes to mind, but is hardly helpful. :-)
<br>
<p>I am already doing some processing to deal with linefeeds in the middle of
<br>
output streams, so adding these three special chars isn't -that- big a deal.
<br>
I can have a test version for you in the next day or so (svn trunk) - I am
<br>
on reduced hours while moving my son (driving across country).
<br>
<p>Let's give that a try and see if it resolves the problem...
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6085/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6086.php">Nadia Derbey: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>Previous message:</strong> <a href="6084.php">Ralph Castain: "Re: [OMPI devel] RFC: Diagnostoc framework for MPI"</a>
<li><strong>In reply to:</strong> <a href="6082.php">Greg Watson: "[OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
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
