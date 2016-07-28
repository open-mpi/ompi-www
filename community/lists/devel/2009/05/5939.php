<?
$subject_val = "Re: [OMPI devel] -display-map behavior in 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  1 10:09:26 2009" -->
<!-- isoreceived="20090501140926" -->
<!-- sent="Fri, 1 May 2009 08:09:21 -0600" -->
<!-- isosent="20090501140921" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] -display-map behavior in 1.3" -->
<!-- id="71d2d8cc0905010709m467023efn37b512ec4b7f2f4f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="71d2d8cc0905010639t45feb77euefb8d70f69bc9b8_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-05-01 10:09:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5940.php">Jeff Squyres: "[OMPI devel] OS X compilation broken"</a>
<li><strong>Previous message:</strong> <a href="5938.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5937.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5941.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>Reply:</strong> <a href="5941.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting - I'm not seeing this behavior:
<br>
<p>graywolf54:trunk rhc$ mpirun -n 3 --xml --display-map hostname
<br>
&lt;map&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;host name=&quot;graywolf54.lanl.gov&quot; slots=&quot;1&quot; max_slots=&quot;0&quot;&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;process rank=&quot;0&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;process rank=&quot;1&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;process rank=&quot;2&quot;/&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&lt;/host&gt;
<br>
&lt;/map&gt;
<br>
&lt;stdout rank=&quot;0&quot;&gt;graywolf54.lanl.gov&lt;/stdout&gt;
<br>
&lt;stdout rank=&quot;1&quot;&gt;graywolf54.lanl.gov&lt;/stdout&gt;
<br>
&lt;stdout rank=&quot;2&quot;&gt;graywolf54.lanl.gov&lt;/stdout&gt;
<br>
graywolf54:trunk rhc$
<br>
<p>Can you tell me more about when you see this? Note that the display-map
<br>
output should always appear on stderr because that is our default output
<br>
device.
<br>
<p><p>On Fri, May 1, 2009 at 7:39 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hmmm...no, that's a bug. I'll fix it.
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
<span class="quotelev1">&gt; On Fri, May 1, 2009 at 7:24 AM, Greg Watson &lt;g.watson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralf,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've just noticed that if I use '-xml -display-map', I get the xml version
</span><br>
<span class="quotelev2">&gt;&gt; of the map and then the non-xml version is sent to stderr (wrapped in xml
</span><br>
<span class="quotelev2">&gt;&gt; tags). Was this by design? In my view it would be better to suppress the
</span><br>
<span class="quotelev2">&gt;&gt; non-xml map altogether if the -xml option. 1.4 seems to do the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Greg
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5940.php">Jeff Squyres: "[OMPI devel] OS X compilation broken"</a>
<li><strong>Previous message:</strong> <a href="5938.php">Ralph Castain: "Re: [OMPI devel] Inherent limit on #communicators?"</a>
<li><strong>In reply to:</strong> <a href="5937.php">Ralph Castain: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5941.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
<li><strong>Reply:</strong> <a href="5941.php">Greg Watson: "Re: [OMPI devel] -display-map behavior in 1.3"</a>
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
