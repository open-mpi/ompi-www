<?
$subject_val = "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 02:48:13 2011" -->
<!-- isoreceived="20110706064813" -->
<!-- sent="Wed, 6 Jul 2011 08:48:09 +0200" -->
<!-- isosent="20110706064809" -->
<!-- name="Alfredo Buttari" -->
<!-- email="alfredo.buttari_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] on using hwloc_get_area_membind_nodeset" -->
<!-- id="CAA0LXamc5VGONiD_KUZ6rHeObxbLGV0_OtGV_F4O_U+iAOLFDg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E135940.60500_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] on using hwloc_get_area_membind_nodeset<br>
<strong>From:</strong> Alfredo Buttari (<em>alfredo.buttari_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 02:48:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0317.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0315.php">Samuel Thibault: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>In reply to:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0317.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Reply:</strong> <a href="0317.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice, Samuel,
<br>
thanks for your very quick replies. Yes you're right, errno is set to
<br>
ENOSYS. No luck.
<br>
Maybe I can get away with a single call to get_mempolicy (no need to
<br>
check for all the pages in the memory area).
<br>
Thanks again
<br>
<p>best regards
<br>
alfredo
<br>
<p><p>On Tue, Jul 5, 2011 at 8:34 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You're running Linux and errno is ENOSYS, right? From what I remember,
</span><br>
<span class="quotelev1">&gt; it's not supported on Linux because getting memory binding is very
</span><br>
<span class="quotelev1">&gt; poorly supported. I think we could implement it but it would be very
</span><br>
<span class="quotelev1">&gt; slow (one get_mempolicy syscall per virtual page or something like that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<p><p><p><pre>
-- 
-----------------------------------------
Alfredo Buttari, PhD
CNRS-IRIT
2 rue Camichel, 31071 Toulouse, France
<a href="http://buttari.perso.enseeiht.fr">http://buttari.perso.enseeiht.fr</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0317.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0315.php">Samuel Thibault: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>In reply to:</strong> <a href="0314.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0317.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Reply:</strong> <a href="0317.php">Brice Goglin: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
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
