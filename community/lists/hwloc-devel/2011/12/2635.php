<?
$subject_val = "Re: [hwloc-devel] very sched_setaffinity support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 14 05:34:40 2011" -->
<!-- isoreceived="20111214103440" -->
<!-- sent="Wed, 14 Dec 2011 11:34:31 +0100" -->
<!-- isosent="20111214103431" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] very sched_setaffinity support" -->
<!-- id="20111214103431.GR4197_at_type.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="18002077.4952.1323858090804.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] very sched_setaffinity support<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-14 05:34:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2636.php">Brice Goglin: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Previous message:</strong> <a href="2634.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<li><strong>Maybe in reply to:</strong> <a href="2633.php">Brice Goglin: "[hwloc-devel] very sched_setaffinity support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2636.php">Brice Goglin: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Reply:</strong> <a href="2636.php">Brice Goglin: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brice Goglin, le Wed 14 Dec 2011 11:21:30 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; His sched.h defines the very old prototype of sched_setaffinity (pid,
</span><br>
<span class="quotelev1">&gt; len, ulong*).
</span><br>
<p>Urgl. Is it actually &quot;very old&quot;? I thought it was just a transient
<br>
prototype in glibc, between pid,mask and pid,size,mask, which IIRC was
<br>
never officially released... (there is a thread about it on the hwloc
<br>
mailing list).
<br>
<p><span class="quotelev1">&gt; * change configure to also define a HWLOC_HAVE_SCHED_SETAFFINITY when
</span><br>
<span class="quotelev1">&gt; there's a sched_setaffinity in sched.h (recent, old or very old)
</span><br>
<span class="quotelev1">&gt; * change src/topology-linux.c to check HWLOC_HAVE_SCHED_SETAFFINITY
</span><br>
<span class="quotelev1">&gt; before using syscall3
</span><br>
<p>Agreed.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2636.php">Brice Goglin: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Previous message:</strong> <a href="2634.php">Samuel Thibault: "Re: [hwloc-devel] HWLOC_HAVE_ATTRIBUTE_* unused warning"</a>
<li><strong>Maybe in reply to:</strong> <a href="2633.php">Brice Goglin: "[hwloc-devel] very sched_setaffinity support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2636.php">Brice Goglin: "Re: [hwloc-devel] very sched_setaffinity support"</a>
<li><strong>Reply:</strong> <a href="2636.php">Brice Goglin: "Re: [hwloc-devel] very sched_setaffinity support"</a>
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
