<?
$subject_val = "Re: [OMPI devel] XML stdout/stderr";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 15:56:03 2009" -->
<!-- isoreceived="20090526195603" -->
<!-- sent="Tue, 26 May 2009 15:55:58 -0400" -->
<!-- isosent="20090526195558" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML stdout/stderr" -->
<!-- id="DF9BD2F7-F967-4CC8-90A2-BD2611E34B21_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905260525occ5f1c1x7141150dac39d893_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-26 15:55:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6095.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Both my proposals are correct XML and should be parsable by any  
<br>
conforming XML parser. Just changing the tags will not work because  
<br>
any text that contains &quot;&amp;&quot;, &quot;&lt;&quot;, or &quot;&gt;&quot; will still confuse an XML  
<br>
parser.
<br>
<p>Regards,
<br>
<p>Greg
<br>
<p>On May 26, 2009, at 8:25 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo Greg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm slow, but it did hit me that there may be a simpler solution  
</span><br>
<span class="quotelev1">&gt; after all. I gather that the problem is that the user's output could  
</span><br>
<span class="quotelev1">&gt; have tags in it that match our own, thus causing tag-confusion. True?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My concern is that our proposed solution generates pidgin-xml which  
</span><br>
<span class="quotelev1">&gt; could only ever be translated by a specially written parser. Kinda  
</span><br>
<span class="quotelev1">&gt; makes xml a little moot in ways.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What if we simply change the name of our tags to something ompi- 
</span><br>
<span class="quotelev1">&gt; specific? I could tag things with &lt;ompi-stdout&gt;, for example. This  
</span><br>
<span class="quotelev1">&gt; would follow the natural naming convention for internal variables,  
</span><br>
<span class="quotelev1">&gt; and would avoid any conflicts unless the user were truly stupid - in  
</span><br>
<span class="quotelev1">&gt; which case, the onus would be on them.
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
<span class="quotelev1">&gt; On Tue, May 26, 2009 at 5:42 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 25, 2009 at 9:10 AM, Greg Watson &lt;g.watson_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In life, nothing is ever easy...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; While the XML output is working well, I've come across an issue with  
</span><br>
<span class="quotelev1">&gt; stdout/stderr. Unfortunately it's not just enough to wrap it in  
</span><br>
<span class="quotelev1">&gt; tags, because it's possible that the output will contain XML  
</span><br>
<span class="quotelev1">&gt; formatting information. There are two ways to get around this. The  
</span><br>
<span class="quotelev1">&gt; easiest is to wrap the output in &quot;&lt;![CDATA[&quot; and &quot;]]&gt;&quot;. This has the  
</span><br>
<span class="quotelev1">&gt; benefit of being relatively easy, but will fail if the output  
</span><br>
<span class="quotelev1">&gt; contains the string &quot;]]&gt;&quot;. The other way is to replace all instances  
</span><br>
<span class="quotelev1">&gt; of &quot;&amp;&quot;, &quot;&lt;&quot;, and &quot;&gt;&quot; with &quot;&amp;amp;&quot;, &quot;&amp;lt;&quot;, and &quot;&amp;gt;&quot; respectively.  
</span><br>
<span class="quotelev1">&gt; This is safer, but requires more processing.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Ick&quot; immediately comes to mind, but is hardly helpful. :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am already doing some processing to deal with linefeeds in the  
</span><br>
<span class="quotelev1">&gt; middle of output streams, so adding these three special chars isn't - 
</span><br>
<span class="quotelev1">&gt; that- big a deal. I can have a test version for you in the next day  
</span><br>
<span class="quotelev1">&gt; or so (svn trunk) - I am on reduced hours while moving my son  
</span><br>
<span class="quotelev1">&gt; (driving across country).
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6094/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6095.php">Josh Hursey: "Re: [OMPI devel] RFC: MPI Interface Extensions Infrastructure"</a>
<li><strong>Previous message:</strong> <a href="6093.php">Jeff Squyres: "Re: [OMPI devel] problem in the ORTE notifier framework"</a>
<li><strong>In reply to:</strong> <a href="6087.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
<li><strong>Reply:</strong> <a href="6099.php">Ralph Castain: "Re: [OMPI devel] XML stdout/stderr"</a>
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
