<?
$subject_val = "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 12 02:45:36 2010" -->
<!-- isoreceived="20100312074536" -->
<!-- sent="Fri, 12 Mar 2010 08:45:30 +0100" -->
<!-- isosent="20100312074530" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines" -->
<!-- id="4B99F11A.4000705_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="36ca99e91003111537y10d6daf4ndec4c2ba05379549_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-12 02:45:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0746.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0744.php">Brice Goglin: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0738.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0746.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0746.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Bert Wesarg wrote:
<br>
<span class="quotelev2">&gt;&gt; Ups, what about the fsroot_fd now? I think this has something to do if
</span><br>
<span class="quotelev2">&gt;&gt; /proc and /sys are not mounted at the root, for example in test mode,
</span><br>
<span class="quotelev2">&gt;&gt; right?
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm right. The only way out I see is to step aside from openat and use
</span><br>
<span class="quotelev1">&gt; string operations to for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see that this would limit the test suit for debug builds, but I also
</span><br>
<span class="quotelev1">&gt; don't see a need for a user to set the FSROOT in a production system
</span><br>
<span class="quotelev1">&gt; either.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Yes, production systems can use a XML file if they really need a custom
<br>
topology. fsroot is only for debugging the Linux code.
<br>
<p>I just fixed escaped characters and used your strsep loop for parsing
<br>
options. I'll keep your patch on the side in case we find a solution
<br>
that is compatible with fsroot. Thanks a lot.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0746.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Previous message:</strong> <a href="0744.php">Brice Goglin: "Re: [hwloc-devel] thread safety"</a>
<li><strong>In reply to:</strong> <a href="0738.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0746.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
<li><strong>Reply:</strong> <a href="0746.php">Bert Wesarg: "Re: [hwloc-devel] [PATCH] Use getmntent_r(3) to parse /proc/mounts lines"</a>
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
