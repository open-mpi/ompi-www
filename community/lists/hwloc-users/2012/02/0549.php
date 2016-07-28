<?
$subject_val = "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 14 19:41:17 2012" -->
<!-- isoreceived="20120215004117" -->
<!-- sent="Wed, 15 Feb 2012 01:41:10 +0100" -->
<!-- isosent="20120215004110" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released" -->
<!-- id="20120215004110.GL4243_at_type.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1371548688.822714.1329266324340.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-14 19:41:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Previous message:</strong> <a href="0548.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="0548.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0550.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Reply:</strong> <a href="0550.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Jiri Hladky, le Wed 15 Feb 2012 01:38:44 +0100, a &#233;crit :
<br>
<span class="quotelev1">&gt; I have found one minor issue - file&#160;hwloc-assembler-remote does not have
</span><br>
<span class="quotelev1">&gt; executable bit set. I had to add following to the RPM SPEC file to fix it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; %{__chmod} 0755 %{buildroot}%{_bindir}/hwloc-assembler-remote
</span><br>
<p>That's odd: we already explicitly set the +x bit at ./configure time,
<br>
see config/hwloc_internal.m4:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AC_CONFIG_COMMANDS([chmoding-scripts], [chmod +x ]hwloc_config_prefix[tests/linux/test-topology.sh ]hwloc_config_prefix[tests/xml/test-topology.sh ]hwloc_config_prefix[tests/linux/hwloc-gather-topology ]hwloc_config_prefix[tests/linux/gather/test-gather-topology.sh ]hwloc_config_prefix[utils/hwloc-assembler-remote ]hwloc_config_prefix[utils/test-hwloc-assembler.sh ]hwloc_config_prefix[utils/test-hwloc-calc.sh ]hwloc_config_prefix[utils/test-hwloc-distances.sh ]hwloc_config_prefix[utils/test-hwloc-distrib.sh ]hwloc_config_prefix[utils/test-hwloc-ls.sh])
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0550.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Previous message:</strong> <a href="0548.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Maybe in reply to:</strong> <a href="0548.php">Jiri Hladky: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0550.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
<li><strong>Reply:</strong> <a href="0550.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware locality (hwloc) v1.4 released"</a>
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
