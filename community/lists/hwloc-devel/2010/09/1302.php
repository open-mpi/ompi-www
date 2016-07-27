<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 11:08:38 2010" -->
<!-- isoreceived="20100916150838" -->
<!-- sent="Thu, 16 Sep 2010 17:08:23 +0200" -->
<!-- isosent="20100916150823" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="20100916150823.GM5420_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20100916145701.GJ5420_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 11:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1303.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2440)"</a>
<li><strong>Previous message:</strong> <a href="1301.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1300.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Thu 16 Sep 2010 16:57:01 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I'm just asking to rework the function interfaces a little bit to
</span><br>
<span class="quotelev1">&gt; have things already cleanly separated for anybody who would feel like
</span><br>
<span class="quotelev1">&gt; adding another OS support or parsing .dts files some day, I believe
</span><br>
<span class="quotelev1">&gt; that shouldn't be too much work for you.
</span><br>
<p>I mean, don't even bother to write a nice structure containing the
<br>
functions pointers etc, just call your linux-specific functions
<br>
<p>hwloc_of_linux_get_str, hwloc_of_linux_get_int_arr, etc.
<br>
<p>and call them as such in topology-of.c, that'll be good enough for
<br>
anybody wanting to abstract this easily.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1303.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2440)"</a>
<li><strong>Previous message:</strong> <a href="1301.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1300.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
