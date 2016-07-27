<?
$subject_val = "Re: [hwloc-devel] hwloc failures";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 20 15:52:56 2014" -->
<!-- isoreceived="20141120205256" -->
<!-- sent="Thu, 20 Nov 2014 20:52:40 +0000" -->
<!-- isosent="20141120205240" -->
<!-- name="Balaji, Pavan" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc failures" -->
<!-- id="D74B1C6F-2396-441A-92A2-211876416B19_at_anl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="204726C9-611C-419B-8E9A-1D8373FCFBE8_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc failures<br>
<strong>From:</strong> Balaji, Pavan (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-20 15:52:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4301.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>Previous message:</strong> <a href="4299.php">Balaji, Pavan: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>In reply to:</strong> <a href="4298.php">Ralph Castain: "Re: [hwloc-devel] hwloc failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4301.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>Reply:</strong> <a href="4301.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>

<br>
Mine is 2.9.0.  The issue is that hwloc&#226;&#128;&#153;s configure is not checking for something it should before building.  I didn&#226;&#128;&#153;t get time to look into the configure script to figure it out.
<br>

<br>
&nbsp;&nbsp;&#226;&#128;&#148; Pavan
<br>

<br>
<span class="quotelev1">&gt; On Nov 19, 2014, at 3:49 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW: I just downloaded and build 1.10.0 without problem on Mac Yosemite using GCC. I have the Darwin ports libxml2 installed - version 2.9.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 19, 2014, at 1:28 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which version of libxml2 do you have?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 19/11/2014 22:26, Balaji, Pavan a &#195;&#169;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I&#226;&#128;&#153;m seeing the following failure with hwloc on the mac (yosemite):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC       topology-xml-libxml.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../../../../../../../../mpich/src/pm/hydra/tools/topo/hwloc/hwloc/src/topology-xml-libxml.c:17:27: fatal error: libxml/parser.h: No such file or directory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #include &lt;libxml/parser.h&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is GNU compilers and the latest hwloc release.  I have libxml2 installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Do I need to install a different package?  Why is configure not able to detect it?  What files can I send to help diagnose this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#226;&#128;&#148; Pavan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/11/4296.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/11/4296.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/11/4297.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/11/4297.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2014/11/4298.php">http://www.open-mpi.org/community/lists/hwloc-devel/2014/11/4298.php</a>
</span><br>

<br>
--
<br>
Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
<br>
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4301.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>Previous message:</strong> <a href="4299.php">Balaji, Pavan: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>In reply to:</strong> <a href="4298.php">Ralph Castain: "Re: [hwloc-devel] hwloc failures"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4301.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
<li><strong>Reply:</strong> <a href="4301.php">Brice Goglin: "Re: [hwloc-devel] hwloc failures"</a>
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
