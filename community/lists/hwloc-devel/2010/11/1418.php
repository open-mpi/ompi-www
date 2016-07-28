<?
$subject_val = "Re: [hwloc-devel] gather-topology.sh and rpm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  4 13:28:33 2010" -->
<!-- isoreceived="20101104172833" -->
<!-- sent="Thu, 04 Nov 2010 18:19:15 +0100" -->
<!-- isosent="20101104171915" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] gather-topology.sh and rpm" -->
<!-- id="4CD2EB13.9080100_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011041659.05606.jhladky_at_redhat.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-04 13:19:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1419.php">Jeff Squyres: "[hwloc-devel] RHEL 5/6 SRPM"</a>
<li><strong>Previous message:</strong> <a href="1417.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2696"</a>
<li><strong>In reply to:</strong> <a href="1414.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1404.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/11/2010 16:59, Jirka Hladky a &#233;crit :
<br>
<span class="quotelev1">&gt; 1) Could we remove following line
</span><br>
<span class="quotelev1">&gt; abs_top_builddir=&quot;/home/jhladky/rpmbuild/BUILD/hwloc-1.2a1r2694&quot;
</span><br>
<span class="quotelev1">&gt; during make install ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's not used anymore. It's just to make the code look nicer.
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Done.
<br>
<p><span class="quotelev1">&gt; 2) $hwloc-gather-topology.sh /tmp/A/hwloc
</span><br>
<span class="quotelev1">&gt; works nicely, too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, if I do something nasty like
</span><br>
<span class="quotelev1">&gt; $touch /tmp/c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /tmp/c is a regular file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $hwloc-gather-topology.sh /tmp/c/hwloc
</span><br>
<span class="quotelev1">&gt; mkdir: cannot create directory `/tmp/c': File exists
</span><br>
<span class="quotelev1">&gt; mv: accessing `/tmp/c/hwloc.tar.bz2': Not a directory
</span><br>
<span class="quotelev1">&gt; Hierarchy gathered in /tmp/c/hwloc.tar.bz2 and kept in 
</span><br>
<span class="quotelev1">&gt; /tmp/tmp.anx1tIvmak/hwloc/
</span><br>
<span class="quotelev1">&gt; ./hwloc-gather-topology.sh: line 75: /tmp/c/hwloc.output: Not a directory
</span><br>
<span class="quotelev1">&gt; Expected topology output stored in /tmp/c/hwloc.output
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which is nonsense. Neither /tmp/c/hwloc.tar.bz2 nor   /tmp/c/hwloc.output 
</span><br>
<span class="quotelev1">&gt; exists. It can be fixed easily by replacing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  mkdir -p &quot;$dirname&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; if ! mkdir -p &quot;$dirname&quot;
</span><br>
<span class="quotelev1">&gt; then
</span><br>
<span class="quotelev1">&gt;     exit 1
</span><br>
<span class="quotelev1">&gt; fi
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Fixed thanks!
<br>
<p><span class="quotelev1">&gt; GOOD NEWS - hwloc will be included in RHEL 6.1 as official (supported) package. 
</span><br>
<span class="quotelev1">&gt; AMD has asked for it
</span><br>
<p>Great!
<br>
.
<br>
<span class="quotelev1">&gt; Keep up the GREAT work!
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>And keep up the good feedback :)
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1419.php">Jeff Squyres: "[hwloc-devel] RHEL 5/6 SRPM"</a>
<li><strong>Previous message:</strong> <a href="1417.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2696"</a>
<li><strong>In reply to:</strong> <a href="1414.php">Jirka Hladky: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1404.php">Samuel Thibault: "Re: [hwloc-devel] gather-topology.sh and rpm"</a>
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
