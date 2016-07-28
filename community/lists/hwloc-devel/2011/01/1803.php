<?
$subject_val = "Re: [hwloc-devel] Docs updates";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  6 16:58:02 2011" -->
<!-- isoreceived="20110106215802" -->
<!-- sent="Thu, 06 Jan 2011 22:57:55 +0100" -->
<!-- isosent="20110106215755" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Docs updates" -->
<!-- id="4D263AE3.8080002_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="601D2BF3-542D-4913-AB53-F0B4A9E38533_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Docs updates<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-06 16:57:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1804.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<li><strong>In reply to:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1809.php">Jeff Squyres: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Reply:</strong> <a href="1809.php">Jeff Squyres: "Re: [hwloc-devel] Docs updates"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/01/2011 19:46, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Please review:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="https://svn.open-mpi.org/trac/hwloc/changeset/3046">https://svn.open-mpi.org/trac/hwloc/changeset/3046</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>I fixed a double typo in r3053.
<br>
<p>Is HWLOC_MEMBIND_MIXED defined somewhere?
<br>
<p>I am not sure about &quot;on next touch ... move and rebind&quot; in the NEXTTOUCH
<br>
description.
<br>
<span class="quotelev1">&gt;From what I see, on solaris, it's only supported when we bind to the
</span><br>
entire machine. So there's no binding, only moving there.
<br>
Linux doesn't support NEXTTOUCH yet. I think most implementations I have
<br>
seen would change the binding immediately and only move the page
<br>
(according to the binding) on next-touch.
<br>
<p>In short, my feeling is that it's more &quot;bind but only lazily move pages
<br>
on next touch&quot; (compared to MIGRATE = &quot;bind and move everything now&quot;,
<br>
and BIND = &quot;bind but don't move already faulted pages&quot;).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1804.php">Christopher Samuel: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Previous message:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<li><strong>In reply to:</strong> <a href="1802.php">Jeff Squyres: "[hwloc-devel] Docs updates"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1809.php">Jeff Squyres: "Re: [hwloc-devel] Docs updates"</a>
<li><strong>Reply:</strong> <a href="1809.php">Jeff Squyres: "Re: [hwloc-devel] Docs updates"</a>
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
