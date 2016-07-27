<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 29 16:10:12 2012" -->
<!-- isoreceived="20120629201012" -->
<!-- sent="Fri, 29 Jun 2012 22:10:08 +0200" -->
<!-- isosent="20120629201008" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils" -->
<!-- id="20120629221008.14691lmmk8ynffkw_at_webmail.labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120629190104.E979615F566_at_tiger.crest.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-29 16:10:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Previous message:</strong> <a href="3137.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Reply:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; +.SH HINT
</span><br>
<span class="quotelev1">&gt; +To check what the result actually is, use
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +    hwloc-bind blabla -- lstopo --pid 0
</span><br>
<span class="quotelev1">&gt; +
</span><br>
<span class="quotelev1">&gt; +lstopo will graphically show where it is bound to by hwloc-bind.
</span><br>
<p>My lstopo doesn't show anything with such a command (--pid doesn't  
<br>
care about binding, it just changes things like cgroups).
<br>
<p>You can either list all bound pids with --ps, but that wouldn't be  
<br>
easy to read if many processes are already bound.
<br>
Or you can use &quot;--restrict binding&quot; to only show which part of the  
<br>
machine is included in the binding.
<br>
Also, adding &quot;--no-io&quot; may make things more readable.
<br>
<p>By the way, please replace &quot;blabla&quot; with either an example or  
<br>
&lt;location&gt; to match the rest of the manpage.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Previous message:</strong> <a href="3137.php">Brice Goglin: "Re: [hwloc-devel] HWLOC_NBMAXCPUS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
<li><strong>Reply:</strong> <a href="3139.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4554 - trunk/utils"</a>
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
