<?
$subject_val = "Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 17 11:42:52 2011" -->
<!-- isoreceived="20110217164252" -->
<!-- sent="Thu, 17 Feb 2011 17:42:46 +0100" -->
<!-- isosent="20110217164246" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess" -->
<!-- id="20110217164246.GU5930_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="860095234.115875.1297960224689.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-17 11:42:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1946.php">Brice Goglin: "[hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<li><strong>Maybe in reply to:</strong> <a href="1946.php">Brice Goglin: "[hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Thu 17 Feb 2011 17:30:24 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I guess we can't #define _GNU_SOURCE in hwloc.h.
</span><br>
<p>Yes. Actually glibc-sched.h shouldn't really. Only .c files are supposed
<br>
to define _GNU_SOURCE, because it exposes new function names which could
<br>
conflict with the .c source.
<br>
<p><span class="quotelev1">&gt; Any comments or better idea ?
</span><br>
<p>I was thus more thinking about just being even more precise:
<br>
<p>#if !defined _GNU_SOURCE || !defined _SCHED_H || !defined CPU_SETSIZE
<br>
#error Please make sure to include sched.h before including glibc-sched.h, and define _GNU_SOURCE before any inclusion of sched.h
<br>
#endif
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1948.php">Jeff Squyres: "[hwloc-devel] The de-C99 of hwloc"</a>
<li><strong>Previous message:</strong> <a href="1946.php">Brice Goglin: "[hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
<li><strong>Maybe in reply to:</strong> <a href="1946.php">Brice Goglin: "[hwloc-devel] sched.h and _GNU_SOURCE vs hwloc/glibc-sched.h mess"</a>
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
