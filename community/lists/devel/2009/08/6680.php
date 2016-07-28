<?
$subject_val = "Re: [OMPI devel] XML request";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 19 10:48:06 2009" -->
<!-- isoreceived="20090819144806" -->
<!-- sent="Wed, 19 Aug 2009 10:48:01 -0400" -->
<!-- isosent="20090819144801" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] XML request" -->
<!-- id="9241BDBF-A233-48D8-BDBC-986BB15C07C9_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ED9A06EF-BF49-4BC4-B402-736F4C224FF6_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] XML request<br>
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-19 10:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>Previous message:</strong> <a href="6679.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>In reply to:</strong> <a href="6677.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6682.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6682.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>Looks like it's working now.
<br>
<p>Thanks,
<br>
Greg
<br>
<p>On Aug 18, 2009, at 5:21 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Give r21836 a try and see if it still gets out of order.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 18, 2009, at 2:18 PM, Greg Watson wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Not sure that's it because all XML output should be via stdout.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 18, 2009, at 3:53 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hmmm....let me try adding a fflush after the &lt;mpirun&gt; output to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; force it out. Best guess is that you are seeing a little race  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; condition - the map output is coming over stderr, while the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpirun&gt; tag is coming over stdout.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Aug 18, 2009 at 12:53 PM, Greg Watson  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm seeing something strange. When I run &quot;mpirun -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_show_resolved_nodenames 1 -xml -display-map...&quot;, I see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;host name=&quot;Jarrah.local&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                &lt;process rank=&quot;1&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                &lt;process rank=&quot;2&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                &lt;process rank=&quot;3&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;/host&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but when I run &quot; ssh localhost mpirun -mca  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; orte_show_resolved_nodenames 1 -xml -display-map...&quot;, I see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;host name=&quot;Jarrah.local&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                &lt;process rank=&quot;1&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                &lt;process rank=&quot;2&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                &lt;process rank=&quot;3&quot;/&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        &lt;/host&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 17, 2009, at 11:16 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should be done on trunk with r21826 - would you please give it a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; try and let me know if that meets requirements? If so, I'll move  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it to 1.3.4.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 17, 2009, at 6:42 AM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, you'd just need issue the start tag prior to any other XML  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; output, then the end tag when it's guaranteed all XML other output  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has been sent.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Greg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 17, 2009, at 7:44 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; All things are possible - some just a tad more painful than others.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It looks like you want the mpirun tags to flow around all output  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; during the run - i.e., there is only one pair of mpirun tags that  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; surround anything that might come out of the job. True?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If so, that would be trivial.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 14, 2009, at 9:25 AM, Greg Watson wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Would it be possible to get mpirun to issue start and end tags if  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the -xml option is used? Currently there is no way to determine  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when the output starts and finishes, which makes parsing the XML  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tricky, particularly if something else generates output (e.g. the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shell). Something like this would be ideal:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mpirun&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;map&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/map&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;stdout&gt;...&lt;/stdout&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;stderr&gt;...&lt;/stderr&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;/mpirun&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If we could get it in 1.3.4 even better. :-)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6680/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6681.php">Jeff Squyres: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>Previous message:</strong> <a href="6679.php">Rainer Keller: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r21834"</a>
<li><strong>In reply to:</strong> <a href="6677.php">Ralph Castain: "Re: [OMPI devel] XML request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6682.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
<li><strong>Reply:</strong> <a href="6682.php">Greg Watson: "Re: [OMPI devel] XML request"</a>
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
