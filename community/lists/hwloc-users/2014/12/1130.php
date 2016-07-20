<?
$subject_val = "Re: [hwloc-users] Selecting real cores vs HT cores";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 17:03:46 2014" -->
<!-- isoreceived="20141211220346" -->
<!-- sent="Thu, 11 Dec 2014 23:03:44 +0100" -->
<!-- isosent="20141211220344" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Selecting real cores vs HT cores" -->
<!-- id="548A14C0.6000009_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="EBD402D9-50CC-46CC-9B09-253FD677A37C_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Selecting real cores vs HT cores<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-11 17:03:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1131.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1129.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1125.php">Brock Palen: "[hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1131.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1131.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 11/12/2014 21:51, Brock Palen a &#233;crit :
<br>
<span class="quotelev1">&gt; When a system has HT enabled is one core presented the real one and one the fake partner?  Or is that not the case?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If wanting to test behavior without messing with the bios how do I select just the 'real cores'  if this is the case?   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking for the equivelent of 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hwloc-bind ALLREALCORES  my.exe
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Assuming this still makes sense after your discussion with Jeff, you can
<br>
easily bind on the first hyperthread of all cores with:
<br>
<p>hwloc-bind core:all.pu:0 my.exe
<br>
<p><p>None of the hyperthreads is better than the others afaik.
<br>
<p>By the way, if you can't in the BIOS, you may want to disable the
<br>
hyperthread in the kernel:
<br>
<p>for i in $(hwloc-calc --whole-system --po -I pu core:all.pu:0) ; do echo 0 &gt; /sys/devices/system/cpu/cpu$i/online ; done
<br>
<p>(write 1 instead of 0 to reenable them).
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1131.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1129.php">Brock Palen: "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>In reply to:</strong> <a href="1125.php">Brock Palen: "[hwloc-users] Selecting real cores vs HT cores"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1131.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Reply:</strong> <a href="1131.php">Jeff Squyres (jsquyres): "Re: [hwloc-users] Selecting real cores vs HT cores"</a>
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
