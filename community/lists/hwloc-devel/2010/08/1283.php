<?
$subject_val = "Re: [hwloc-devel] lstopo pdf weirdness";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 29 17:37:59 2010" -->
<!-- isoreceived="20100829213759" -->
<!-- sent="Sun, 29 Aug 2010 23:37:51 +0200" -->
<!-- isosent="20100829213751" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] lstopo pdf weirdness" -->
<!-- id="20100829213751.GU5158_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9171C6A1-1393-468A-A885-A44E1C0566E0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] lstopo pdf weirdness<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-29 17:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1284.php">Jeff Squyres: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
<li><strong>Previous message:</strong> <a href="1282.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2428)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1284.php">Jeff Squyres: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
<li><strong>Reply:</strong> <a href="1284.php">Jeff Squyres: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres, le Thu 26 Aug 2010 16:36:41 -0400, a &#233;crit :
<br>
<span class="quotelev1">&gt; Here's two images, both from the same machine, both generated via hwloc 1.0.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the PDF image is missing some characters here and there.  E.g., &quot;NUMANode&quot; on the PNG shows up as &quot;NU  ANode&quot; on the PDF.  &quot;24MB&quot; on the PNG is &quot;24 B&quot; on the PDF.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any idea what causes this?
</span><br>
<p>I'd tend to think cairo is guilty, like a fault in font processing.
<br>
That might also be some buffer overrun which ends up right in the middle
<br>
of the text string that utils/lstopo-cairo.c gives to cairo_show_text.
<br>
<p>You could try to pass it through valgrind to look for overruns.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1284.php">Jeff Squyres: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
<li><strong>Previous message:</strong> <a href="1282.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2428)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1284.php">Jeff Squyres: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
<li><strong>Reply:</strong> <a href="1284.php">Jeff Squyres: "Re: [hwloc-devel] lstopo pdf weirdness"</a>
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
