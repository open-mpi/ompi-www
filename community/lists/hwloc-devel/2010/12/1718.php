<?
$subject_val = "Re: [hwloc-devel] Hwloc perl binding";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 16 05:38:44 2010" -->
<!-- isoreceived="20101216103844" -->
<!-- sent="Thu, 16 Dec 2010 11:38:39 +0100" -->
<!-- isosent="20101216103839" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hwloc perl binding" -->
<!-- id="20101216103839.GB5355_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="517262156.1394985.1292453259268.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Hwloc perl binding<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-16 05:38:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1719.php">Jeff Squyres: "[hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Previous message:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1707.php">Bernd Kallies: "[hwloc-devel] Hwloc perl binding"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guy Streeter, le Wed 15 Dec 2010 23:47:39 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I noticed that some functions (in or not in the ABI I don't recall right 
</span><br>
<span class="quotelev1">&gt; now, I'm not at my desk) need the topology parameter only because the 
</span><br>
<span class="quotelev1">&gt; topology structure holds pointers to platform-specific routines. That seems 
</span><br>
<span class="quotelev1">&gt; like a confusing generalization of the parameter's meaning/purpose.
</span><br>
<p>In the case of platform-specific routines, that's needed because
<br>
depending on how the discovery was done (synthetic topology, loaded
<br>
topology of another machine, etc.) the platform-specific routines will
<br>
vary, and we depend on that. For instance, some programmers want to be
<br>
able to simulate the execution of a distribution algorithm on another
<br>
machine topology, in that case the cpu-binding functions should just
<br>
succeed without doing anything. It's thus necessary to have the
<br>
topology pointer along the cpuset, to be sure of what should be done.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1719.php">Jeff Squyres: "[hwloc-devel] 1.0.3rc3 and 1.1rc5"</a>
<li><strong>Previous message:</strong> <a href="1717.php">Brice Goglin: "Re: [hwloc-devel] 1.1rc4 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="1707.php">Bernd Kallies: "[hwloc-devel] Hwloc perl binding"</a>
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
