<?
$subject_val = "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 20 14:23:07 2010" -->
<!-- isoreceived="20101220192307" -->
<!-- sent="Mon, 20 Dec 2010 20:22:38 +0100" -->
<!-- isosent="20101220192238" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5" -->
<!-- id="4D0FACFE.502_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D0FA946.9000003_at_redhat.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-20 14:22:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Previous message:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>In reply to:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/12/2010 20:06, Guy Streeter a &#233;crit :
<br>
<span class="quotelev1">&gt; I decided I should just give you the whole output.
</span><br>
<p>Thanks. Indeed, it's a Linux &quot;feature&quot;. When you request a non-strict
<br>
memory binding in Linux (MPOL_PREFERRED, not MPOL_BIND), it only keeps
<br>
the first node in the input nodemask. Instead of allocating on X,Y,Z
<br>
when possible and anywhere else otherwise, it allocates on X when
<br>
possible and anywhere else otherwise.
<br>
<p>That's why we get 0x0000003f (first node cpuset) instead of 0x00ffffff
<br>
(four first nodes cpuset) when we request the current binding.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1745.php">Jiri Hladky: "Re: [hwloc-devel] gather-topology fix and manpage"</a>
<li><strong>Previous message:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>In reply to:</strong> <a href="1743.php">Guy Streeter: "Re: [hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
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
