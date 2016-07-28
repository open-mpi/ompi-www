<?
$subject_val = "Re: [hwloc-users] Is OSX a supported platform ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  6 11:44:49 2010" -->
<!-- isoreceived="20100606154449" -->
<!-- sent="Sun, 6 Jun 2010 17:44:44 +0200" -->
<!-- isosent="20100606154444" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Is OSX a supported platform ?" -->
<!-- id="20100606154444.GA5358_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1275838643.13649.37.camel_at_iliana.magic" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Is OSX a supported platform ?<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-06 11:44:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Olivier Cessenat: "[hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0108.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0111.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Reply:</strong> <a href="0111.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Olivier Cessenat, le Sun 06 Jun 2010 17:37:23 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; I would like to get the cache sizes and hierachy;
</span><br>
<span class="quotelev1">&gt; hwloc-ls returns
</span><br>
<span class="quotelev1">&gt; &lt;&lt;
</span><br>
<span class="quotelev1">&gt; Machine + L1 #0 (0KB)
</span><br>
<span class="quotelev1">&gt;   PU #0 (phys=0)
</span><br>
<span class="quotelev1">&gt;   PU #1 (phys=1)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; which detects my dual core, but not the cache sizes, L2 and L1.
</span><br>
<p>This depends on what the OS says.
<br>
<p><span class="quotelev1">&gt; Is this an already known behaviour ?
</span><br>
<p>Could you run
<br>
<p>sysctl hw
<br>
<p>to check what the OS says?  Also, please build with --enable-debug to
<br>
enable the debugging output of hwloc.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0110.php">Olivier Cessenat: "[hwloc-users] Getting the cache hierarchy"</a>
<li><strong>Previous message:</strong> <a href="0108.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>In reply to:</strong> <a href="0108.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0111.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
<li><strong>Reply:</strong> <a href="0111.php">Olivier Cessenat: "Re: [hwloc-users] Is OSX a supported platform ?"</a>
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
