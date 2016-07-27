<?
$subject_val = "[hwloc-devel] hwloc-1.9.1 failure on FreeBSD64";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  4 10:39:42 2014" -->
<!-- isoreceived="20140904143942" -->
<!-- sent="Thu, 4 Sep 2014 14:39:38 +0000" -->
<!-- isosent="20140904143938" -->
<!-- name="Balaji, Pavan" -->
<!-- email="balaji_at_[hidden]" -->
<!-- subject="[hwloc-devel] hwloc-1.9.1 failure on FreeBSD64" -->
<!-- id="D844B833-0874-43AA-BDD5-F10F2DF120D0_at_anl.gov" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64<br>
<strong>From:</strong> Balaji, Pavan (<em>balaji_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-04 10:39:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4196.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Previous message:</strong> <a href="4194.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-2-gd7d6531)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4196.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Reply:</strong> <a href="4196.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Reply:</strong> <a href="4197.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>

<br>
hwloc-1.9.1 doesn&#226;&#128;&#153;t seem to build on FreeBSD64 with strict flags.
<br>

<br>
----8&lt;----
<br>
% ./configure CFLAGS='-Werror-implicit-function-declaration -D_POSIX_C_SOURCE=200112L&#226;&#128;&#153;
<br>

<br>
% make  
<br>
Making all in src
<br>
&nbsp;&nbsp;CC       topology.lo
<br>
topology.c: In function 'hwloc_fallback_nbprocessors':
<br>
topology.c:164:2: warning: #warning No known way to discover number of available processors on this system [-Wcpp]
<br>
topology.c:165:2: warning: #warning hwloc_fallback_nbprocessors will default to 1 [-Wcpp]
<br>
&nbsp;&nbsp;CC       traversal.lo
<br>
In file included from traversal.c:12:0:
<br>
/home/autotest/balaji/hwloc/hwloc-1.9.1/include/private/misc.h: In function 'hwloc_strncasecmp':
<br>
/home/autotest/balaji/hwloc/hwloc-1.9.1/include/private/misc.h:360:3: error: implicit declaration of function 'strncasecmp' [-Werror=implicit-function-declaration]
<br>
cc1: some warnings being treated as errors
<br>
*** [traversal.lo] Error code 1
<br>

<br>
Stop in /usr/home/autotest/balaji/hwloc/hwloc-1.9.1/src.
<br>
*** [all-recursive] Error code 1
<br>

<br>
Stop in /usr/home/autotest/balaji/hwloc/hwloc-1.9.1.
<br>
----8&lt;----
<br>

<br>
Thanks,
<br>

<br>
&nbsp;&nbsp;&#226;&#128;&#148; Pavan
<br>

<br>
--
<br>
Pavan Balaji  &#226;&#156;&#137;&#239;&#184;&#143;
<br>
<a href="http://www.mcs.anl.gov/~balaji">http://www.mcs.anl.gov/~balaji</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4196.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Previous message:</strong> <a href="4194.php">MPI Team: "[hwloc-devel] Create success (hwloc git 1.9.1-2-gd7d6531)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4196.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Reply:</strong> <a href="4196.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
<li><strong>Reply:</strong> <a href="4197.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.9.1 failure on FreeBSD64"</a>
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
