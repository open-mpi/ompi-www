<?
$subject_val = "Re: [hwloc-devel] hwloc trouble with the PGI compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 19 10:35:24 2010" -->
<!-- isoreceived="20100919143524" -->
<!-- sent="Sun, 19 Sep 2010 16:35:19 +0200" -->
<!-- isosent="20100919143519" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc trouble with the PGI compiler" -->
<!-- id="20100919143519.GJ7470_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C9613D6.7070106_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc trouble with the PGI compiler<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-19 10:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1316.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="1314.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="1311.php">Brice Goglin: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1313.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Sun 19 Sep 2010 15:44:54 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I suggest you report the problem to PGI. I looks like it is entirely
</span><br>
<span class="quotelev1">&gt; caused by PGI doing strange stuff with sched.h. I'd like a clear
</span><br>
<span class="quotelev1">&gt; explanation from PGI of what they're trying to do
</span><br>
<p>I know what they're trying to do: they try to expose the CPU functions
<br>
even when the user does not provide _GNU_SOURCE, which from one hand
<br>
is a clear violation of the C standard (unexpectedly exposing new
<br>
functions), and also is dangerous since they are assuming they know the
<br>
underlying implementation, which is not true any more since glibc
<br>
changed it...  I guess in a newer version they would test for the
<br>
presence for the _S variants, and then it would work again, until glibc
<br>
changes its underlying implementation again...
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1316.php">Pavan Balaji: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>Previous message:</strong> <a href="1314.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<li><strong>In reply to:</strong> <a href="1311.php">Brice Goglin: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1313.php">Samuel Thibault: "Re: [hwloc-devel] hwloc trouble with the PGI compiler"</a>
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
