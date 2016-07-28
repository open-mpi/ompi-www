<?
$subject_val = "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 10:57:09 2014" -->
<!-- isoreceived="20140904145709" -->
<!-- sent="Thu, 04 Sep 2014 16:57:08 +0200" -->
<!-- isosent="20140904145708" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64" -->
<!-- id="54087DC4.3010901_at_inria.fr" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="D844B833-0874-43AA-BDD5-F10F2DF120D0_at_anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-04 10:57:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4198.php">Balaji, Pavan: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Previous message:</strong> <a href="4196.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>In reply to:</strong> <a href="4195.php">Balaji, Pavan: "[hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4198.php">Balaji, Pavan: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Reply:</strong> <a href="4198.php">Balaji, Pavan: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 04/09/2014 16:39, Balaji, Pavan a &#195;&#169;crit :
<br>
<span class="quotelev1">&gt; ./configure CFLAGS='-Werror-implicit-function-declaration -D_POSIX_C_SOURCE=200112L&#226;&#128;&#153;
</span><br>
<p>Hello,
<br>
<p>Looks like we need &lt;strings.h&gt;
<br>
<p>Did this config work in the past? I am getting a failure because of
<br>
putenv() in lstopo.c later, and that code didn't change recently.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4198.php">Balaji, Pavan: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Previous message:</strong> <a href="4196.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>In reply to:</strong> <a href="4195.php">Balaji, Pavan: "[hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4198.php">Balaji, Pavan: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Reply:</strong> <a href="4198.php">Balaji, Pavan: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
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
