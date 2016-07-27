<?
$subject_val = "Re: [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in	Grid Engine / Grid Scheduler)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 13:15:33 2011" -->
<!-- isoreceived="20110418171533" -->
<!-- sent="Mon, 18 Apr 2011 19:15:23 +0200" -->
<!-- isosent="20110418171523" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in	Grid Engine / Grid Scheduler)" -->
<!-- id="4DAC71AB.2090102_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTinV4OqHY2MOOxzcP9wdo7ScrCk0MA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in	Grid Engine / Grid Scheduler)<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-18 13:15:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2156.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3457)"</a>
<li><strong>Previous message:</strong> <a href="2154.php">Rayson Ho: "[hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in Grid Engine / Grid Scheduler)"</a>
<li><strong>In reply to:</strong> <a href="2154.php">Rayson Ho: "[hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in Grid Engine / Grid Scheduler)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 18/04/2011 19:00, Rayson Ho a &#233;crit :
<br>
<span class="quotelev1">&gt; However, I still get bug reports from people who have multi-socket AMD
</span><br>
<span class="quotelev1">&gt; Magny-Cours servers. I am wondering if there are stock XML files
</span><br>
<span class="quotelev1">&gt; available for download, esp. some HWLOC_XMLFILEs generated on
</span><br>
<span class="quotelev1">&gt; multi-socket, multi-core (or even SMT) machines??
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Here are 4 examples. The filename tells you how many sockets (&quot;s&quot;), numa
<br>
nodes (&quot;n&quot;), cores (&quot;c&quot;) and (&quot;t&quot;) each parent contains. You have an old
<br>
quad-socket dual-core HT (4s2c2t), a dual westmere with HT (2s6c2t), a
<br>
dual magny-cours (2s2n6c) and a quad-magny-cours (4s2n6c).
<br>
<p>You can generate whatever you need manually. For instance:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;lstopo -i &quot;socket:2 node:4 core:3 pu:2&quot; foo.xml
<br>
creates a machine containing 2 sockets, with 4 numa node in each of
<br>
them, with 3 cores in each of them, and 2 threads in each core. Only the
<br>
last part (&quot;pu:X&quot;, the number of PU/threads per core is needed).
<br>
Everything else is optional and you can do pretty much what you want.
<br>
<p><span class="quotelev1">&gt; And the XML file mechanism turns out to be really useful!!
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes many people under-estimate how cool this is. Not only for debugging,
<br>
but also to reload the same topology over and over much faster (you need
<br>
an additional flag in this case, to tell hwloc that your loading another
<br>
topology but it still corresponds the actual machine you're running on).
<br>
<p>Brice
<br>
<p><p>



<br><hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2155/2s2n6c.xml">2s2n6c.xml</a>
</ul>
<!-- attachment="2s2n6c.xml" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2155/2s6c2t.xml">2s6c2t.xml</a>
</ul>
<!-- attachment="2s6c2t.xml" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2155/4s2c2t.xml">4s2c2t.xml</a>
</ul>
<!-- attachment="4s2c2t.xml" -->
<hr>
<ul>
<li>text/xml attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2155/4s2n6c.xml">4s2n6c.xml</a>
</ul>
<!-- attachment="4s2n6c.xml" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2156.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.3a1r3457)"</a>
<li><strong>Previous message:</strong> <a href="2154.php">Rayson Ho: "[hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in Grid Engine / Grid Scheduler)"</a>
<li><strong>In reply to:</strong> <a href="2154.php">Rayson Ho: "[hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in Grid Engine / Grid Scheduler)"</a>
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
