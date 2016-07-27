<?
$subject_val = "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 18:34:44 2009" -->
<!-- isoreceived="20091001223444" -->
<!-- sent="Fri, 2 Oct 2009 00:34:37 +0200" -->
<!-- isosent="20091001223437" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp" -->
<!-- id="20091001223436.GL6250_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20091001222728.GM2373_at_ozlabs.org" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 18:34:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0128.php">Brice Goglin: "Re: [hwloc-devel] libhwloc.so: undefined reference to	`hwloc_hwloc_strncasecmp"</a>
<li><strong>Previous message:</strong> <a href="0126.php">Tony Breeds: "[hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>In reply to:</strong> <a href="0126.php">Tony Breeds: "[hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0129.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Reply:</strong> <a href="0129.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tony Breeds, le Fri 02 Oct 2009 08:27:28 +1000, a &#233;crit :
<br>
<span class="quotelev1">&gt; 	I wanted to have a look at but hit a small snag the final link ended with:
</span><br>
<span class="quotelev1">&gt; libtool: link: gcc -std=gnu99 -g -O2 -o .libs/lstopo lstopo-lstopo.o lstopo-lstopo-color.o lstopo-lstopo-text.o lstopo-lstopo-draw.o lstopo-lstopo-fig.o lstopo-lstopo-cairo.o lstopo-lstopo-xml.o  -L/home/OpenHPC/hwloc/src/hwloc/trunk/src -lm ../src/.libs/libhwloc.so -Wl,-rpath -Wl,/home/OpenHPC/hwloc/build/lib
</span><br>
<span class="quotelev1">&gt; ../src/.libs/libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp'
</span><br>
<p>Yep, I'm fixing things on HP-UX and a sed script got too far. What's odd
<br>
is that make dist didn't raise it. I'm fixing it atm anyway.
<br>
<p>Thanks for the report (even if I was already on it).
<br>
Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0128.php">Brice Goglin: "Re: [hwloc-devel] libhwloc.so: undefined reference to	`hwloc_hwloc_strncasecmp"</a>
<li><strong>Previous message:</strong> <a href="0126.php">Tony Breeds: "[hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>In reply to:</strong> <a href="0126.php">Tony Breeds: "[hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0129.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
<li><strong>Reply:</strong> <a href="0129.php">Samuel Thibault: "Re: [hwloc-devel] libhwloc.so: undefined reference to `hwloc_hwloc_strncasecmp"</a>
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
