<?
$subject_val = "[hwloc-devel] update NEWS file for 1.0.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 28 11:18:03 2010" -->
<!-- isoreceived="20100528151803" -->
<!-- sent="Fri, 28 May 2010 11:17:58 -0400" -->
<!-- isosent="20100528151758" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] update NEWS file for 1.0.1" -->
<!-- id="C8CB0A41-3071-4860-BB6F-4C8DC1359B1B_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="201005281515.o4SFFnXx008878_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> [hwloc-devel] update NEWS file for 1.0.1<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-28 11:17:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1034.php">Brice Goglin: "Re: [hwloc-devel] update NEWS file for 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="1032.php">Samuel Thibault: "Re: [hwloc-devel] misc questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1034.php">Brice Goglin: "Re: [hwloc-devel] update NEWS file for 1.0.1"</a>
<li><strong>Reply:</strong> <a href="1034.php">Brice Goglin: "Re: [hwloc-devel] update NEWS file for 1.0.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Please look over the points I just drafted for v1.0.1; add / edit / delete as necessary.  I like citing users who have been helpful in the NEWS file; it's a (small) way of saying &quot;thank you!&quot;.
<br>
<p>When we're done, we can copy the finished points to the v1.0 branch NEWS file.
<br>
<p>Thanks!
<br>
<p><p><p>Begin forwarded message:
<br>
<p><span class="quotelev1">&gt; From: jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Date: May 28, 2010 11:15:49 AM EDT
</span><br>
<span class="quotelev1">&gt; To: hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [hwloc-svn] svn:hwloc r2163
</span><br>
<span class="quotelev1">&gt; Reply-To: hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Author: jsquyres
</span><br>
<span class="quotelev1">&gt; Date: 2010-05-28 11:15:49 EDT (Fri, 28 May 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2163
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2163">https://svn.open-mpi.org/trac/hwloc/changeset/2163</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; Add points for v1.0.1.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Text files modified: 
</span><br>
<span class="quotelev1">&gt;   trunk/NEWS |    18 ++++++++++++++++--                      
</span><br>
<span class="quotelev1">&gt;   1 files changed, 16 insertions(+), 2 deletions(-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Modified: trunk/NEWS
</span><br>
<span class="quotelev1">&gt; ==============================================================================
</span><br>
<span class="quotelev1">&gt; --- trunk/NEWS	(original)
</span><br>
<span class="quotelev1">&gt; +++ trunk/NEWS	2010-05-28 11:15:49 EDT (Fri, 28 May 2010)
</span><br>
<span class="quotelev1">&gt; @@ -1,5 +1,5 @@
</span><br>
<span class="quotelev1">&gt; -Copyright &#194;&#169; 2009 CNRS, INRIA, Universit&#195;&#169; Bordeaux 1
</span><br>
<span class="quotelev1">&gt; -Copyright &#194;&#169; 2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; +Copyright &#195;&#130;&#194;&#169; 2009 CNRS, INRIA, Universit&#195;&#131;&#194;&#169; Bordeaux 1
</span><br>
<span class="quotelev1">&gt; +Copyright &#195;&#130;&#194;&#169; 2009 Cisco Systems, Inc.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $COPYRIGHT$
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; @@ -24,6 +24,20 @@
</span><br>
<span class="quotelev1">&gt;   manipulate CPU set strings in the format of the taskset program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; +Version 1.0.1
</span><br>
<span class="quotelev1">&gt; +-------------
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +* Fix &quot;non-native&quot; builds on x86 platforms (e.g., when building 32
</span><br>
<span class="quotelev1">&gt; +  bit executables with compilers that natively build 64 bit).
</span><br>
<span class="quotelev1">&gt; +* Ignore sockets with unknown ID values (which fixes issues on POWER7
</span><br>
<span class="quotelev1">&gt; +  machines).  Thanks to Greg Bauer for reporting the issue.
</span><br>
<span class="quotelev1">&gt; +* Various man page clarifications and minor updates.
</span><br>
<span class="quotelev1">&gt; +* Fixed memory leaks in hwloc_setup_group_from_min_distance_clique().
</span><br>
<span class="quotelev1">&gt; +* Fix cache type filtering on MS Windows 7.  Thanks to &#206;&#145;&#206;&#187;&#206;&#173;&#206;&#190;&#206;&#177;&#206;&#189;&#206;&#180;&#207;&#129;&#206;&#191;&#207;&#130;
</span><br>
<span class="quotelev1">&gt; +  &#206;&#160;&#206;&#177;&#207;&#128;&#206;&#177;&#206;&#180;&#206;&#191;&#206;&#179;&#206;&#185;&#206;&#177;&#206;&#189;&#206;&#189;&#206;&#172;&#206;&#186; for reporting the issue.
</span><br>
<span class="quotelev1">&gt; +* Fixed warnings when compiling with -DNDEBUG.
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; Version 1.0.0
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-svn mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-svn_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-svn</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1034.php">Brice Goglin: "Re: [hwloc-devel] update NEWS file for 1.0.1"</a>
<li><strong>Previous message:</strong> <a href="1032.php">Samuel Thibault: "Re: [hwloc-devel] misc questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1034.php">Brice Goglin: "Re: [hwloc-devel] update NEWS file for 1.0.1"</a>
<li><strong>Reply:</strong> <a href="1034.php">Brice Goglin: "Re: [hwloc-devel] update NEWS file for 1.0.1"</a>
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
