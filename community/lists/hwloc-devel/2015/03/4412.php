<?
$subject_val = "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 08:37:14 2015" -->
<!-- isoreceived="20150327123714" -->
<!-- sent="Fri, 27 Mar 2015 12:37:12 +0000" -->
<!-- isosent="20150327123712" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Lhwloc1 duplicate symbol issue" -->
<!-- id="45C1A575-C239-427E-B6FE-D61D3CED1492_at_cisco.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="55131727.5060606_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Lhwloc1 duplicate symbol issue<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-27 08:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4413.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-482-g651405e)"</a>
<li><strong>Previous message:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>In reply to:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 25, 2015, at 4:14 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Looks like I missed something in the OMPI discussion:
</span><br>
<span class="quotelev1">&gt; When you say symbol, do you mean asm label?
</span><br>
<span class="quotelev1">&gt; include/private/cpuid-x86.h: Assembler messages:
</span><br>
<span class="quotelev1">&gt; include/private/cpuid-x86.h:40: Error: symbol `Lhwloc1' is already defined
</span><br>
<span class="quotelev1">&gt; Like in the mail included at the end of
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php">http://www.open-mpi.org/community/lists/hwloc-users/2014/11/1119.php</a>
</span><br>
<p>(sorry it took me a few days to get back to this)
<br>
<p>Yes, exactly like this.
<br>
<p><span class="quotelev1">&gt; This is fixed by
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e">https://github.com/open-mpi/hwloc/commit/790aa2e1e62be6b4f37622959de9ce3766ebc57e</a>
</span><br>
<span class="quotelev1">&gt; (applied to all stable branches 4 month ago)
</span><br>
<p>Got it.  Looks like we didn't grab it in OMPI because there was never an hwloc 1.9.2.
<br>
<p><span class="quotelev1">&gt; This is actually one of the reason why OMPI upgraded to hwloc v1.9. But
</span><br>
<span class="quotelev1">&gt; I thought they were going to upgrade to hwloc v1.9 git HEAD, while they
</span><br>
<span class="quotelev1">&gt; only went to v1.9.1, which does not contain this fix.
</span><br>
<p>Makes sense.
<br>
<p><span class="quotelev1">&gt; There's a stable release/branch issue here. hwloc updates stable
</span><br>
<span class="quotelev1">&gt; *branches* up to what OMPI uses (hwloc v1.8), but usually we only
</span><br>
<span class="quotelev1">&gt; publish stable *releases* on the last stable branch (v1.10). We need to
</span><br>
<span class="quotelev1">&gt; clarify if OMPI wants official hwloc releases only, or if applying
</span><br>
<span class="quotelev1">&gt; (possibly many) hwloc patches is OK.
</span><br>
<p>Here's what I just did -- I grabbed all (relevant) hwloc 1.9 commits (including the dup symbol fix):
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://github.com/open-mpi/ompi/pull/498">https://github.com/open-mpi/ompi/pull/498</a>
<br>
<p>We usually only grab actual releases, but the OMPI v1.8 series is coming to a close, so I think that this is ok.
<br>
<p>This PR is actually for OMPI master; once it shakes out ok on master, we'll PR it over to OMPI v1.8.  Once that has all completed, we'll likely want to upgrade OMPI master to hwloc v1.10.1 (which includes this Lhwloc1 fix).
<br>
<p>Howzat?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4413.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-482-g651405e)"</a>
<li><strong>Previous message:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
<li><strong>In reply to:</strong> <a href="4411.php">Brice Goglin: "Re: [hwloc-devel] Lhwloc1 duplicate symbol issue"</a>
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
