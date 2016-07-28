<?
$subject_val = "[hwloc-devel] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 16:59:30 2014" -->
<!-- isoreceived="20140922205930" -->
<!-- sent="Mon, 22 Sep 2014 20:59:29 +0000" -->
<!-- isosent="20140922205929" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[hwloc-devel] Using hwloc to detect Hard Disks" -->
<!-- id="A2F6D4BD-0C86-43B5-B8B3-164CF057FFFA_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="251A90A8-2214-4D0C-92D2-0AB5541EF64F_at_cisco.com" -->
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
<strong>Subject:</strong> [hwloc-devel] Using hwloc to detect Hard Disks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-22 16:59:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4225.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-10-g7daef64)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2014, at 4:46 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev3">&gt;&gt;&gt; I am not able to figure out how to read Hard drive details, for e.g.,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the content provided by hdparm application.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My first question is, is it possible to read this using hwloc? If yes, can
</span><br>
<span class="quotelev3">&gt;&gt;&gt; anyone direct me to the documentation which describes how to use it?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Well, hwloc's goal is to describe the hardware _locality_, not its
</span><br>
<span class="quotelev2">&gt;&gt; precise content.  So we don't provide that level of detail, we only
</span><br>
<span class="quotelev2">&gt;&gt; provide where the pieces of hardware reside.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you be a bit more specific about what information you want to query?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I ask because it strikes me that hwloc does gather some kinds of hardware information and put them as attributes on existing hwloc topology objects.
</span><br>
<p>I'm taking the liberty of moving this thread to the devel list; this seems more like a development kind of issue.
<br>
<p>Vineet -- can you reply on this list, and not the hwloc-users list?  Thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Previous message:</strong> <a href="4225.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-10-g7daef64)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
<li><strong>Reply:</strong> <a href="4227.php">Ralph Castain: "Re: [hwloc-devel] Using hwloc to detect Hard Disks"</a>
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
