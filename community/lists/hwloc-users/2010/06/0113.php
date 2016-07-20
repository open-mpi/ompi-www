<?
$subject_val = "Re: [hwloc-users] Getting the cache hierarchy";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 12:39:42 2010" -->
<!-- isoreceived="20100606163942" -->
<!-- sent="Sun, 6 Jun 2010 18:39:37 +0200" -->
<!-- isosent="20100606163937" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Getting the cache hierarchy" -->
<!-- id="20100606163937.GE5358_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1275840875.13649.46.camel_at_iliana.magic" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Getting the cache hierarchy<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-06 12:39:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0114.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0112.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0110.php">Olivier Cessenat: "[hwloc-users] Getting the cache hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0116.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0116.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Olivier Cessenat, le Sun 06 Jun 2010 18:14:35 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; In file included from topology.c:17:
</span><br>
<span class="quotelev1">&gt; /opt/gfortran/irun/bin/../lib/gcc/i386-pc-linux-gnu/4.3.0/include-fixed/sys/stat.h:345: error: expected ',' or ';' before '__wur'
</span><br>
<p>Wow, how odd.  Could you send us the file?  I really wonder what they
<br>
put there that errors out like this.
<br>
<p><span class="quotelev1">&gt; In file included from /tmp/hwloc-1.0.1/include/hwloc.h:17,
</span><br>
<span class="quotelev1">&gt;                  from topology.c:21:
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.0.1/include/hwloc/config.h:115:2: error: #error &quot;unknown
</span><br>
<span class="quotelev1">&gt; size for unsigned long.&quot;
</span><br>
<span class="quotelev1">&gt; /tmp/hwloc-1.0.1/include/hwloc/config.h:119:2: error: #error &quot;unknown
</span><br>
<span class="quotelev1">&gt; size for unsigned int.&quot;
</span><br>
<p>Could you tell us how much HWLOC_SIZEOF_UNSIGNED_LONG is defined to?
<br>
This looks like autoconf wasn't able to properly determine it actually.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0114.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Previous message:</strong> <a href="0112.php">Samuel Thibault: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0110.php">Olivier Cessenat: "[hwloc-users] Getting the cache hierarchy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0116.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Reply:</strong> <a href="0116.php">Olivier Cessenat: "Re: [hwloc-users] Getting the cache hierarchy"</a>
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
