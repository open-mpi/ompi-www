<?
$subject_val = "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 04:35:17 2014" -->
<!-- isoreceived="20141125093517" -->
<!-- sent="Tue, 25 Nov 2014 10:35:15 +0100" -->
<!-- isosent="20141125093515" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc - &amp;quot;symbol already defined&amp;quot; error building with optimizations (-O3) on 32bit ubuntu" -->
<!-- id="54744D53.3080805_at_inria.fr" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAM=OmMu4VcPETy5F4TNUYFd47yp=66fxV7hTF-zwkyOOEmV1fQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 04:35:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1125.php">Brock Palen: "[hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1123.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>In reply to:</strong> <a href="1119.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 21/11/2014 01:57, Thomas Van Doren a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the quick response! That patch fixes the build issue and
</span><br>
<span class="quotelev1">&gt; hwloc works as expected (make check has 1 failure on 32bit, but that
</span><br>
<span class="quotelev1">&gt; also happens on master so I didn't worry about it).
</span><br>
<p>This was an overzealous assertion in the debug checks. It didn't like
<br>
single-core machines with I/O. Fixed in master and stable branches.
<br>
Thanks
<br>
Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/12/1125.php">Brock Palen: "[hwloc-users] Selecting real cores vs HT cores"</a>
<li><strong>Previous message:</strong> <a href="1123.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<li><strong>In reply to:</strong> <a href="1119.php">Thomas Van Doren: "Re: [hwloc-users] hwloc - &quot;symbol already defined&quot; error building with optimizations (-O3) on 32bit ubuntu"</a>
<!-- nextthread="start" -->
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
