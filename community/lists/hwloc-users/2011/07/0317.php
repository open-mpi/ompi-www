<?
$subject_val = "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  6 03:28:03 2011" -->
<!-- isoreceived="20110706072803" -->
<!-- sent="Wed, 06 Jul 2011 09:27:54 +0200" -->
<!-- isosent="20110706072754" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] on using hwloc_get_area_membind_nodeset" -->
<!-- id="4E140E7A.7070507_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAA0LXamc5VGONiD_KUZ6rHeObxbLGV0_OtGV_F4O_U+iAOLFDg_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-06 03:27:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0318.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>In reply to:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0318.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Reply:</strong> <a href="0318.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I created ticket #46 about this. We'll try to implement this in 1.3.
<br>
<p><a href="https://svn.open-mpi.org/trac/hwloc/ticket/46">https://svn.open-mpi.org/trac/hwloc/ticket/46</a>
<br>
<p>Brice
<br>
<p><p><p>Le 06/07/2011 08:48, Alfredo Buttari a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice, Samuel,
</span><br>
<span class="quotelev1">&gt; thanks for your very quick replies. Yes you're right, errno is set to
</span><br>
<span class="quotelev1">&gt; ENOSYS. No luck.
</span><br>
<span class="quotelev1">&gt; Maybe I can get away with a single call to get_mempolicy (no need to
</span><br>
<span class="quotelev1">&gt; check for all the pages in the memory area).
</span><br>
<span class="quotelev1">&gt; Thanks again
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; best regards
</span><br>
<span class="quotelev1">&gt; alfredo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jul 5, 2011 at 8:34 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You're running Linux and errno is ENOSYS, right? From what I remember,
</span><br>
<span class="quotelev2">&gt;&gt; it's not supported on Linux because getting memory binding is very
</span><br>
<span class="quotelev2">&gt;&gt; poorly supported. I think we could implement it but it would be very
</span><br>
<span class="quotelev2">&gt;&gt; slow (one get_mempolicy syscall per virtual page or something like that).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0318.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>In reply to:</strong> <a href="0316.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0318.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Reply:</strong> <a href="0318.php">Alfredo Buttari: "Re: [hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
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
