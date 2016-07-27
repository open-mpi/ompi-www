<?
$subject_val = "Re: [hwloc-devel] Picky compiler options in hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 20 16:34:04 2011" -->
<!-- isoreceived="20110120213404" -->
<!-- sent="Thu, 20 Jan 2011 22:33:54 +0100" -->
<!-- isosent="20110120213354" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Picky compiler options in hwloc" -->
<!-- id="4D38AA42.3010804_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4D38A63D.6030805_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Picky compiler options in hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-20 16:33:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1867.php">Pavan Balaji: "[hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1867.php">Pavan Balaji: "[hwloc-devel] Picky compiler options in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Reply:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 20/01/2011 22:16, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One of the patches that we maintain in MPICH2 for hwloc is to disable
</span><br>
<span class="quotelev1">&gt; picking stricter compiler options based on the fact that a &quot;.svn&quot; or
</span><br>
<span class="quotelev1">&gt; &quot;.hg&quot; is available. This is similar to disabling picking verbose mode
</span><br>
<span class="quotelev1">&gt; based on .svn or .hg existing, that I had reported earlier.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/browser/branches/v1.1/config/hwloc_internal.m4?rev=3120#L162">https://svn.open-mpi.org/trac/hwloc/browser/branches/v1.1/config/hwloc_internal.m4?rev=3120#L162</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this something that can be fixed in hwloc, or do you guys prefer
</span><br>
<span class="quotelev1">&gt; having it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -- Pavan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>I'd rather keep it. Maybe Jeff can add a m4 macro that your m4 would
<br>
call to disable it? Something that would force the default value of
<br>
hwloc_want_picky to 0.
<br>
<p>What's surprising is that this code is in HWLOC_SETUP_DOCS. Do you call
<br>
HWLOC_SETUP_DOCS in MPICH2?
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Previous message:</strong> <a href="1867.php">Pavan Balaji: "[hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>In reply to:</strong> <a href="1867.php">Pavan Balaji: "[hwloc-devel] Picky compiler options in hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
<li><strong>Reply:</strong> <a href="1869.php">Pavan Balaji: "Re: [hwloc-devel] Picky compiler options in hwloc"</a>
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
