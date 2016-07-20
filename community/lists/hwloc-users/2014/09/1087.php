<?
$subject_val = "Re: [hwloc-users] Using hwloc to detect Hard Disks";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 16:46:14 2014" -->
<!-- isoreceived="20140922204614" -->
<!-- sent="Mon, 22 Sep 2014 20:46:13 +0000" -->
<!-- isosent="20140922204613" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Using hwloc to detect Hard Disks" -->
<!-- id="251A90A8-2214-4D0C-92D2-0AB5541EF64F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20140828232759.GL3011_at_type.youpi.perso.aquilenet.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Using hwloc to detect Hard Disks<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-22 16:46:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1088.php">Dennis Jacobfeuerborn: "[hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Previous message:</strong> <a href="1086.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1066.php">Samuel Thibault: "Re: [hwloc-users] Using hwloc to detect Hard Disks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 28, 2014, at 7:27 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I am not able to figure out how to read Hard drive details, for e.g.,
</span><br>
<span class="quotelev2">&gt;&gt; the content provided by hdparm application.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My first question is, is it possible to read this using hwloc? If yes, can
</span><br>
<span class="quotelev2">&gt;&gt; anyone direct me to the documentation which describes how to use it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Well, hwloc's goal is to describe the hardware _locality_, not its
</span><br>
<span class="quotelev1">&gt; precise content.  So we don't provide that level of detail, we only
</span><br>
<span class="quotelev1">&gt; provide where the pieces of hardware reside.
</span><br>
<p>Can you be a bit more specific about what information you want to query?
<br>
<p>I ask because it strikes me that hwloc does gather some kinds of hardware information and put them as attributes on existing hwloc topology objects.
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
<li><strong>Next message:</strong> <a href="1088.php">Dennis Jacobfeuerborn: "[hwloc-users] hwloc-ls graphical output"</a>
<li><strong>Previous message:</strong> <a href="1086.php">Siegmar Gross: "Re: [hwloc-users] problem with X11 using Solaris"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/08/1066.php">Samuel Thibault: "Re: [hwloc-users] Using hwloc to detect Hard Disks"</a>
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
