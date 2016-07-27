<?
$subject_val = "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 11 07:36:50 2010" -->
<!-- isoreceived="20101111123650" -->
<!-- sent="Thu, 11 Nov 2010 13:36:41 +0100" -->
<!-- isosent="20101111123641" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released" -->
<!-- id="201011111336.41661.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20101111122034.GL4896_at_const.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-11 07:36:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
hi Samuel,
<br>
<p>see my comments bellow.
<br>
<p><span class="quotelev2">&gt; &gt; 1) Does the option --get works together with --pid ? Like finding out
</span><br>
<span class="quotelev2">&gt; &gt; mempolicy for any pid? I don't think that get_mempolicy supports this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc indeed gives:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc_get_membind failed (errno 38 Function not implemented)
</span><br>
<p>Yes, you are right!
<br>
--get --pid 
<br>
works on Linux.
<br>
<p>--get --membind --pid
<br>
will give &quot;Function not implemented&quot;
<br>
<p>$ /tmp/hwloc-1.1rc2/utils/hwloc-bind --get --membind --pid 344
<br>
hwloc_get_membind failed (errno 38 Function not implemented)
<br>
<p><span class="quotelev1">&gt; It actually depends on the OS. I'll see what I can.
</span><br>
I see. It's getting difficult then. I believe that in this case more explanatory 
<br>
error message would be enough.
<br>
<p><p>Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>Previous message:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<li><strong>In reply to:</strong> <a href="1470.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1472.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-announce] Hardware locality (hwloc) v1.1rc1 released"</a>
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
