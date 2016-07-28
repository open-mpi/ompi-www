<?
$subject_val = "Re: [hwloc-devel] lstopo-nox strikes back";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 25 09:39:57 2012" -->
<!-- isoreceived="20120425133957" -->
<!-- sent="Wed, 25 Apr 2012 09:39:51 -0400" -->
<!-- isosent="20120425133951" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo-nox strikes back" -->
<!-- id="FADD6D1C-AF9D-4501-882D-BCA9B7890E5B_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201204252213.42907.samuel_at_unimelb.edu.au" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo-nox strikes back<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-25 09:39:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3026.php">Jiri Hladky: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3026.php">Jiri Hladky: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What about going The OMPI Way?  :-)
<br>
<p>That is, having support for these things via dynamically loaded plugins.  Since the plugins are loaded at runtime, the presence or absence of a plugin in the filesystem determines whether that output format is supported or not.
<br>
<p>Hence, a hwloc-core package (RPM or deb or whatever) can contain the basic lstopo plugins, and a supplemental hwloc-x11 package (or whatever name they want) can contain the X11 based plugin.  Ditto for Cairo.
<br>
<p><p><p>On Apr 25, 2012, at 8:13 AM, Chris Samuel wrote:
<br>
<p><span class="quotelev1">&gt; On Wednesday 25 April 2012 19:38:00 Brice Goglin wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; How do people feel about this? 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It sounds like what you have is a conflict between the policies of 
</span><br>
<span class="quotelev1">&gt; Debian (and hence Ubuntu) and the expectations of RHEL/CentOS users.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debian Policy is fairly clear on this matter:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # 11.8.1 Providing X support and package priorities
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; # Programs that can be configured with support for the X Window System
</span><br>
<span class="quotelev1">&gt; # must be configured to do so and must declare any package
</span><br>
<span class="quotelev1">&gt; # dependencies necessary to satisfy their runtime requirements when
</span><br>
<span class="quotelev1">&gt; # using the X Window System.  [...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It says you can split it into a separate package to provide GUI 
</span><br>
<span class="quotelev1">&gt; functionality *only* if the &quot;package is of higher priority than the X 
</span><br>
<span class="quotelev1">&gt; packages on which it depends&quot; (which I suspect is not the usual case).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Christopher Samuel - Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt; VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt; Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.vlsci.unimelb.edu.au/">http://www.vlsci.unimelb.edu.au/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3026.php">Jiri Hladky: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>Previous message:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<li><strong>In reply to:</strong> <a href="3024.php">Chris Samuel: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3026.php">Jiri Hladky: "Re: [hwloc-devel] lstopo-nox strikes back"</a>
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
