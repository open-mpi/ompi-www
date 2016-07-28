<?
$subject_val = "Re: [OMPI devel] XML stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 27 09:19:29 2009" -->
<!-- isoreceived="20090527131929" -->
<!-- sent="Wed, 27 May 2009 09:19:24 -0400" -->
<!-- isosent="20090527131924" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML stdout/stderr" -->
<!-- id="5D8F15E5-E82F-4E3D-A06E-70065EEBEEE9_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905261745s43e91d1dkba49cc334cefa2f3_at_mail.gmail.com" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-27 09:19:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Previous message:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>In reply to:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6136.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6136.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Close, but no banana!
<br>
<p>Can you add a semicolon to the end of each? So &quot;&lt;&quot; should be replaced  
<br>
by &quot;&amp;lt;&quot;, etc.
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<p>On May 26, 2009, at 8:45 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Guess I had just never seen that format before - thanks for  
</span><br>
<span class="quotelev1">&gt; clarifying!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I committed the revisions to the trunk in r21285 - see what you  
</span><br>
<span class="quotelev1">&gt; think...
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, May 26, 2009 at 1:55 PM, Greg Watson &lt;g.watson_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Both my proposals are correct XML and should be parsable by any  
</span><br>
<span class="quotelev1">&gt; conforming XML parser. Just changing the tags will not work because  
</span><br>
<span class="quotelev1">&gt; any text that contains &quot;&amp;&quot;, &quot;&lt;&quot;, or &quot;&gt;&quot; will still confuse an XML  
</span><br>
<span class="quotelev1">&gt; parser.
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
<span class="quotelev2">&gt;&gt; Yo Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm slow, but it did hit me that there may be a simpler solution  
</span><br>
<span class="quotelev2">&gt;&gt; after all. I gather that the problem is that the user's output  
</span><br>
<span class="quotelev2">&gt;&gt; could have tags in it that match our own, thus causing tag- 
</span><br>
<span class="quotelev2">&gt;&gt; confusion. True?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My concern is that our proposed solution generates pidgin-xml which  
</span><br>
<span class="quotelev2">&gt;&gt; could only ever be translated by a specially written parser. Kinda  
</span><br>
<span class="quotelev2">&gt;&gt; makes xml a little moot in ways.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What if we simply change the name of our tags to something ompi- 
</span><br>
<span class="quotelev2">&gt;&gt; specific? I could tag things with &lt;ompi-stdout&gt;, for example. This  
</span><br>
<span class="quotelev2">&gt;&gt; would follow the natural naming convention for internal variables,  
</span><br>
<span class="quotelev2">&gt;&gt; and would avoid any conflicts unless the user were truly stupid -  
</span><br>
<span class="quotelev2">&gt;&gt; in which case, the onus would be on them.
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
<span class="quotelev2">&gt;&gt; On Tue, May 26, 2009 at 5:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, May 25, 2009 at 9:10 AM, Greg Watson  
</span><br>
<span class="quotelev2">&gt;&gt; &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In life, nothing is ever easy...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; While the XML output is working well, I've come across an issue  
</span><br>
<span class="quotelev2">&gt;&gt; with stdout/stderr. Unfortunately it's not just enough to wrap it  
</span><br>
<span class="quotelev2">&gt;&gt; in tags, because it's possible that the output will contain XML  
</span><br>
<span class="quotelev2">&gt;&gt; formatting information. There are two ways to get around this. The  
</span><br>
<span class="quotelev2">&gt;&gt; easiest is to wrap the output in &quot;&lt;![CDATA[&quot; and &quot;]]&gt;&quot;. This has  
</span><br>
<span class="quotelev2">&gt;&gt; the benefit of being relatively easy, but will fail if the output  
</span><br>
<span class="quotelev2">&gt;&gt; contains the string &quot;]]&gt;&quot;. The other way is to replace all  
</span><br>
<span class="quotelev2">&gt;&gt; instances of &quot;&amp;&quot;, &quot;&lt;&quot;, and &quot;&gt;&quot; with &quot;&amp;amp;&quot;, &quot;&amp;lt;&quot;, and &quot;&amp;gt;&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; respectively. This is safer, but requires more processing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Ick&quot; immediately comes to mind, but is hardly helpful. :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am already doing some processing to deal with linefeeds in the  
</span><br>
<span class="quotelev2">&gt;&gt; middle of output streams, so adding these three special chars isn't  
</span><br>
<span class="quotelev2">&gt;&gt; -that- big a deal. I can have a test version for you in the next  
</span><br>
<span class="quotelev2">&gt;&gt; day or so (svn trunk) - I am on reduced hours while moving my son  
</span><br>
<span class="quotelev2">&gt;&gt; (driving across country).
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6110.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21287"</a>
<li><strong>Previous message:</strong> <a href="6108.php">Jeff Squyres: "Re: [OMPI devel] Remove IMB 2.3 from ompi-tests?"</a>
<li><strong>In reply to:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6136.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6136.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
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
