<?
$subject_val = "[hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in Grid Engine / Grid Scheduler)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 18 13:00:44 2011" -->
<!-- isoreceived="20110418170044" -->
<!-- sent="Mon, 18 Apr 2011 13:00:39 -0400" -->
<!-- isosent="20110418170039" -->
<!-- name="Rayson Ho" -->
<!-- email="raysonlogin_at_[hidden]" -->
<!-- subject="[hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in Grid Engine / Grid Scheduler)" -->
<!-- id="BANLkTinV4OqHY2MOOxzcP9wdo7ScrCk0MA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in Grid Engine / Grid Scheduler)<br>
<strong>From:</strong> Rayson Ho (<em>raysonlogin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-18 13:00:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2155.php">Brice Goglin: "Re: [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in	Grid Engine / Grid Scheduler)"</a>
<li><strong>Previous message:</strong> <a href="2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2155.php">Brice Goglin: "Re: [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in	Grid Engine / Grid Scheduler)"</a>
<li><strong>Reply:</strong> <a href="2155.php">Brice Goglin: "Re: [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in	Grid Engine / Grid Scheduler)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 13, 2011 at 1:32 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; If you want to run some tests, I can generate a fake heterogeneous
</span><br>
<span class="quotelev1">&gt; topology as a XML file that hwloc would load through the HWLOC_XMLFILE
</span><br>
<span class="quotelev1">&gt; environment variable.
</span><br>
<p>Thanks a lot Brice!
<br>
<p>I wrote &amp; hacked some XML files over the weekend, and it seems to work OK.
<br>
<p>However, I still get bug reports from people who have multi-socket AMD
<br>
Magny-Cours servers. I am wondering if there are stock XML files
<br>
available for download, esp. some HWLOC_XMLFILEs generated on
<br>
multi-socket, multi-core (or even SMT) machines??
<br>
<p>And the XML file mechanism turns out to be really useful!!
<br>
<p>Rayson
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 13/04/2011 19:21, Rayson Ho a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks Brice!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And I have a question for the list -- if the machine has processors
</span><br>
<span class="quotelev2">&gt;&gt; that are not idential - ie. some &quot;processors&quot; have SMT (or HT)
</span><br>
<span class="quotelev2">&gt;&gt; enabled, and some don't even have this support in the hardware, then
</span><br>
<span class="quotelev2">&gt;&gt; what would the tree look like?? Or if the cache structure is different
</span><br>
<span class="quotelev2">&gt;&gt; among the &quot;processors&quot;, then would I still be able to use
</span><br>
<span class="quotelev2">&gt;&gt; hwloc_get_depth_type() to get a consistent depth while I am iterating
</span><br>
<span class="quotelev2">&gt;&gt; through the tree??
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So far, my code has only been tested on homogeneous machines.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rayson
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 12, 2011 at 4:21 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Added!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 12/04/2011 22:12, Rayson Ho a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can someone please add &quot;Open Grid Scheduler&quot; to the list of &quot;...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; software already benefit from hwloc or are being ported to it&quot; in the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc project homepage??
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Our homepage is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (Open Grid Scheduler is a fork of Sun Grid Engine, in total there are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 3 forks. And Oracle is still developing its own closed source
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version!)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We will update the project status at:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://gridscheduler.sourceforge.net/projects/hwloc/GridEnginehwloc.html">http://gridscheduler.sourceforge.net/projects/hwloc/GridEnginehwloc.html</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We still need to fix a bug or 2, and then we will ship hwloc support
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in SGE 6.2u5p3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rayson
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://gridscheduler.sourceforge.net">http://gridscheduler.sourceforge.net</a>
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://sourceforge.net/projects/gridscheduler/">http://sourceforge.net/projects/gridscheduler/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2155.php">Brice Goglin: "Re: [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in	Grid Engine / Grid Scheduler)"</a>
<li><strong>Previous message:</strong> <a href="2153.php">Brice Goglin: "Re: [hwloc-devel] specifying I/O devices on the command-line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2155.php">Brice Goglin: "Re: [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in	Grid Engine / Grid Scheduler)"</a>
<li><strong>Reply:</strong> <a href="2155.php">Brice Goglin: "Re: [hwloc-devel] stock HWLOC_XMLFILE? (was: hwloc support added in	Grid Engine / Grid Scheduler)"</a>
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
