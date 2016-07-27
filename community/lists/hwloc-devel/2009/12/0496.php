<?
$subject_val = "Re: [hwloc-devel] embedding m4 code";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 12:00:01 2009" -->
<!-- isoreceived="20091209170001" -->
<!-- sent="Wed, 9 Dec 2009 17:59:57 +0100" -->
<!-- isosent="20091209165957" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] embedding m4 code" -->
<!-- id="20091209165957.GQ5233_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BAA3D899-EDFD-4465-A085-22D7F9184A94_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] embedding m4 code<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-09 11:59:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0497.php">Jeff Squyres: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Previous message:</strong> <a href="0495.php">Ashley Pittman: "Re: [hwloc-devel] Disabling X component"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "[hwloc-devel] embedding m4 code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0497.php">Jeff Squyres: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0497.php">Jeff Squyres: "Re: [hwloc-devel] embedding m4 code"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Jeff Squyres, le Fri 04 Dec 2009 12:53:35 -0500, a &#233;crit :
<br>
<span class="quotelev1">&gt; Could you guys try builds on the supported platforms to see if I broke anything?  I only have access to rhel4, rhel5, and osx.  The code is in a mercurial branch here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     <a href="http://bitbucket.org/jsquyres/hwloc-embedded/">http://bitbucket.org/jsquyres/hwloc-embedded/</a>
</span><br>
<p>make check failed here:
<br>
<p>/bin/sh: line 9: ./test-hwloc-distrib.sh: Permission non accord&#233;e
<br>
<p>It seems you missed the chmod +x call.
<br>
<p>Else it seems to be working, at least on AIX and solaris.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0497.php">Jeff Squyres: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Previous message:</strong> <a href="0495.php">Ashley Pittman: "Re: [hwloc-devel] Disabling X component"</a>
<li><strong>In reply to:</strong> <a href="0476.php">Jeff Squyres: "[hwloc-devel] embedding m4 code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0497.php">Jeff Squyres: "Re: [hwloc-devel] embedding m4 code"</a>
<li><strong>Reply:</strong> <a href="0497.php">Jeff Squyres: "Re: [hwloc-devel] embedding m4 code"</a>
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
