<?
$subject_val = "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 29 18:40:26 2009" -->
<!-- isoreceived="20091029224026" -->
<!-- sent="Thu, 29 Oct 2009 23:40:07 +0100" -->
<!-- isosent="20091029224007" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc" -->
<!-- id="4AEA19C7.9010501_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4AEA1583.9000203_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-29 18:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Jeff Squyres: "Re: [hwloc-devel] docs updated"</a>
<li><strong>In reply to:</strong> <a href="0300.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pavan Balaji wrote:
<br>
<span class="quotelev1">&gt; This is the latest version of the PGI compiler. If this is indeed
</span><br>
<span class="quotelev1">&gt; broken, then it'll be ideal if the configure can detect it and basically
</span><br>
<span class="quotelev1">&gt; disable everything. That is, hwloc_topology_init can return a failure,
</span><br>
<span class="quotelev1">&gt; so packages relying on hwloc can do something else.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>We don't have pgcc, so we can't really really/test such a detection
<br>
code. Maybe AC_COMPILE_IFELSE or AC_LINK_IFELSE with a code like below
<br>
would be enough:
<br>
#define _GNU_SOURCE 1
<br>
#include &lt;sched.h&gt;
<br>
void foo(cpu_set_t *set) {
<br>
&nbsp;&nbsp;CPU_SET(0, set);
<br>
}
<br>
If such a basic code doesn't compile fine with pgcc, it's worth a
<br>
bug-report to pgi...
<br>
<p><span class="quotelev1">&gt; FWIW, I don't have this problem with plpa.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>PLPA seems to be redefining its own PLPA_CPU_* so it's much easier to
<br>
avoid wrong redefinitions :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Previous message:</strong> <a href="0301.php">Jeff Squyres: "Re: [hwloc-devel] docs updated"</a>
<li><strong>In reply to:</strong> <a href="0300.php">Pavan Balaji: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
<li><strong>Reply:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-0.9.1rc3 fails with pgcc"</a>
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
