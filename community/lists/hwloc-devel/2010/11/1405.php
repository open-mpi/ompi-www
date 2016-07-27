<?
$subject_val = "Re: [hwloc-devel] gather-topology.sh and rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 08:22:23 2010" -->
<!-- isoreceived="20101101122223" -->
<!-- sent="Mon, 1 Nov 2010 13:22:14 +0100" -->
<!-- isosent="20101101122214" -->
<!-- name="Jirka Hladky" -->
<!-- email="jhladky_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] gather-topology.sh and rpm" -->
<!-- id="201011011322.14912.jhladky_at_redhat.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4CCE8AA9.1000109_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] gather-topology.sh and rpm<br>
<strong>From:</strong> Jirka Hladky (<em>jhladky_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 08:22:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1406.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="1404.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>In reply to:</strong> <a href="1403.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1406.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1406.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Monday, November 01, 2010 10:38:49 am Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 31/10/2010 23:17, Jirka Hladky a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; 1) During install, rename  gather-topology.sh on hwloc-gather-topology.sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know how to rename properly during install with automake, so I
</span><br>
<span class="quotelev1">&gt; just renamed everywhere (source, build and install dir).
</span><br>
Great!
<br>
<p><span class="quotelev2">&gt; &gt; 2) During install,  remove variable abs_top_builddir all together and
</span><br>
<span class="quotelev2">&gt; &gt; make lstopo=`which lstopo`
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I replace $abs_top_builddir/utils with $bindir during install. I want to
</span><br>
<span class="quotelev1">&gt; be sure that we're not going to mix different versions of
</span><br>
<span class="quotelev1">&gt; gather-topology and lstopo since the command-line options given by
</span><br>
<span class="quotelev1">&gt; gather to lstopo changed in the past.
</span><br>
All right. I will test it how it works with rpm.
<br>
<p><p><span class="quotelev2">&gt; &gt; 3)Create a minimalist man page (it just need to say in one or two
</span><br>
<span class="quotelev2">&gt; &gt; sentences what the command does)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a usage but no manpage yet, lazyness :)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; BTW,
</span><br>
<span class="quotelev2">&gt; &gt; gather-topology.sh /tmp/a
</span><br>
<span class="quotelev2">&gt; &gt; is not working at the moment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just fixed this in trunk, thanks.
</span><br>
Thanks! Please let me know where I can download tarball for testing. 
<br>
<p>BTW, what is the status of 1.1? Any plan to release it?
<br>
<p>Thanks!
<br>
Jirka
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1406.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Previous message:</strong> <a href="1404.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>In reply to:</strong> <a href="1403.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1406.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<li><strong>Reply:</strong> <a href="1406.php">Brice Goglin: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
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
