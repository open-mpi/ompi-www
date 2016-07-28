<?
$subject_val = "Re: [OMPI devel] -display-map behavior in 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 10:47:29 2009" -->
<!-- isoreceived="20090501144729" -->
<!-- sent="Fri, 1 May 2009 10:47:24 -0400" -->
<!-- isosent="20090501144724" -->
<!-- name="Greg Watson" -->
<!-- email="g.watson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map behavior in 1.3" -->
<!-- id="9FA71E7D-A98D-4F5B-A0EB-3B5750D127D2_at_computer.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="71d2d8cc0905010709m467023efn37b512ec4b7f2f4f_at_mail.gmail.com" -->
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
<strong>From:</strong> Greg Watson (<em>g.watson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-05-01 10:47:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5942.php">Ralph Castain: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>Previous message:</strong> <a href="5940.php">Jeff Squyres: "[OMPI devel] OS X compilation broken"</a>
<li><strong>In reply to:</strong> <a href="5939.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5953.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>Reply:</strong> <a href="5953.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Arrgh! Sorry, my bad. I must have been linked against an old version  
<br>
or something. When I recompiled the output went away.
<br>
<p>Greg
<br>
<p>On May 1, 2009, at 10:09 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Interesting - I'm not seeing this behavior:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; graywolf54:trunk rhc$ mpirun -n 3 --xml --display-map hostname
</span><br>
<span class="quotelev1">&gt; &lt;map&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;host name=&quot;graywolf54.lanl.gov&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;process rank=&quot;0&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;process rank=&quot;1&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;         &lt;process rank=&quot;2&quot;/&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;/host&gt;
</span><br>
<span class="quotelev1">&gt; &lt;/map&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;0&quot;&gt;graywolf54.lanl.gov&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;1&quot;&gt;graywolf54.lanl.gov&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; &lt;stdout rank=&quot;2&quot;&gt;graywolf54.lanl.gov&lt;/stdout&gt;
</span><br>
<span class="quotelev1">&gt; graywolf54:trunk rhc$
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you tell me more about when you see this? Note that the display- 
</span><br>
<span class="quotelev1">&gt; map output should always appear on stderr because that is our  
</span><br>
<span class="quotelev1">&gt; default output device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 1, 2009 at 7:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hmmm...no, that's a bug. I'll fix it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 1, 2009 at 7:24 AM, Greg Watson &lt;g.watson_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Ralf,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've just noticed that if I use '-xml -display-map', I get the xml  
</span><br>
<span class="quotelev1">&gt; version of the map and then the non-xml version is sent to stderr  
</span><br>
<span class="quotelev1">&gt; (wrapped in xml tags). Was this by design? In my view it would be  
</span><br>
<span class="quotelev1">&gt; better to suppress the non-xml map altogether if the -xml option.  
</span><br>
<span class="quotelev1">&gt; 1.4 seems to do the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5942.php">Ralph Castain: "Re: [OMPI devel] OS X compilation broken"</a>
<li><strong>Previous message:</strong> <a href="5940.php">Jeff Squyres: "[OMPI devel] OS X compilation broken"</a>
<li><strong>In reply to:</strong> <a href="5939.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5953.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>Reply:</strong> <a href="5953.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
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
