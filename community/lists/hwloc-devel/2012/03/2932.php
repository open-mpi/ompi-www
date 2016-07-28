<?
$subject_val = "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 16 02:48:30 2012" -->
<!-- isoreceived="20120316064830" -->
<!-- sent="Fri, 16 Mar 2012 07:48:23 +0100" -->
<!-- isosent="20120316064823" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed" -->
<!-- id="4F62E237.3020804_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120316014441.GK4406_at_type.famille.thibault.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-16 02:48:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2933.php">Brice Goglin: "[hwloc-devel] possible membind changes coming in the Linux kernel"</a>
<li><strong>Previous message:</strong> <a href="2931.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<li><strong>In reply to:</strong> <a href="2931.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2936.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 16/03/2012 02:44, Samuel Thibault a &#233;crit :
<br>
<span class="quotelev1">&gt; Brice Goglin, le Thu 15 Mar 2012 17:36:29 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Looks like g++ doesn't like __hwloc_attribute_unused in hwloc/helper.h
</span><br>
<span class="quotelev1">&gt; I wonder what Hydra uses for g++. I have tested various versions (from
</span><br>
<span class="quotelev1">&gt; 4.1 to 4.7), without problems.
</span><br>
<p>Looks like &quot;fedora2&quot; in the title is really what it means :)
<br>
<p>configure:4653: checking for g++
<br>
configure:4669: found /usr/bin/g++
<br>
configure:4680: result: g++
<br>
configure:4707: checking for C++ compiler version
<br>
configure:4716: g++ --version &gt;&amp;5
<br>
g++ (GCC) 3.3.3 20040412 (Red Hat Linux 3.3.3-7)
<br>
Copyright (C) 2003 Free Software Foundation, Inc.
<br>
This is free software; see the source for copying conditions.  There is NO
<br>
warranty; not even for MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
<br>
<p><p>We have g++-3.3 on grat, the same problem occurs there.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2933.php">Brice Goglin: "[hwloc-devel] possible membind changes coming in the Linux kernel"</a>
<li><strong>Previous message:</strong> <a href="2931.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<li><strong>In reply to:</strong> <a href="2931.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2936.php">Samuel Thibault: "Re: [hwloc-devel] Hydra job runtime:hwloc-trunk:build_fedora2_i386 on x86_64-linux, build 36199: Failed"</a>
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
