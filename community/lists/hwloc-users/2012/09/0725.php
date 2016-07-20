<?
$subject_val = "[hwloc-users] Questions to lstopo and hwloc-bind";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 14 01:55:06 2012" -->
<!-- isoreceived="20120914055506" -->
<!-- sent="Fri, 14 Sep 2012 07:48:03 +0200 (CEST)" -->
<!-- isosent="20120914054803" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[hwloc-users] Questions to lstopo and hwloc-bind" -->
<!-- id="201209140548.q8E5m3BZ001597_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [hwloc-users] Questions to lstopo and hwloc-bind<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-14 01:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-users] Questions to lstopo and hwloc-bind"</a>
<li><strong>Previous message:</strong> <a href="0724.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-users] Questions to lstopo and hwloc-bind"</a>
<li><strong>Reply:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-users] Questions to lstopo and hwloc-bind"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed hwloc-1.5 on our systems and get the following output
<br>
when I run &quot;lstopo&quot; on a Sun Server M4000 (two quad-core processors with
<br>
two hardware-threads each).
<br>
<p>rs0 fd1026 101 lstopo
<br>
Machine (32GB) + NUMANode L#0 (P#1 32GB)
<br>
&nbsp;&nbsp;Socket L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#0 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#1 (P#1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#3 (P#3)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#4 (P#4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#5 (P#5)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#6 (P#6)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#7 (P#7)
<br>
&nbsp;&nbsp;Socket L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#8 (P#8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#9 (P#9)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#5
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#10 (P#10)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#11 (P#11)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#6
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#12 (P#12)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#13 (P#13)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Core L#7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#14 (P#14)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#15 (P#15)
<br>
<p>When I run the command on a Sun Ultra 45 with two single core processors
<br>
I get the following output.
<br>
<p>tyr fd1026 116 lstopo
<br>
Machine (4096MB)
<br>
&nbsp;&nbsp;NUMANode L#0 (P#2 2048MB) + Socket L#0 + Core L#0 + PU L#0 (P#0)
<br>
&nbsp;&nbsp;NUMANode L#1 (P#1 2048MB) + Socket L#1 + Core L#1 + PU L#1 (P#1)
<br>
<p><p>First question: Why reports &quot;lstopo&quot; two NUMA nodes on a Sun Ultra and
<br>
only one NUMA node on the M4000 although both machines are equipped
<br>
with two processors and both machines are running Solaris 10?
<br>
<p>rs0 fd1026 101 uname -a
<br>
SunOS rs0.informatik.hs-fulda.de 5.10 Generic_147440-21 sun4u
<br>
sparc SUNW,SPARC-Enterprise Solaris
<br>
<p>tyr fd1026 117 uname -a
<br>
SunOS tyr.informatik.hs-fulda.de 5.10 Generic_147440-23 sun4u
<br>
&nbsp;&nbsp;sparc SUNW,A70 Solaris
<br>
<p><p>I get the following error when I try to bind a process to a core
<br>
on the M4000 machine.
<br>
<p>rs0 fd1026 104 hwloc-bind socket:0.core:0 -l date
<br>
hwloc_set_cpubind 0x00000003 failed (errno 18 Cross-device link)
<br>
Fri Sep 14 07:37:14 CEST 2012
<br>
<p><p>I can use the following command which works for all 16 hardware threads.
<br>
<p>rs0 fd1026 105 hwloc-bind pu:0 -l date
<br>
Fri Sep 14 07:38:37 CEST 2012
<br>
<p><p>It's no problem to use both commands on the Sun Ultra.
<br>
<p>tyr fd1026 121 hwloc-bind socket:0.core:0 -l date
<br>
Fri Sep 14 07:40:22 CEST 2012
<br>
tyr fd1026 122 hwloc-bind socket:1.core:0 -l date
<br>
Fri Sep 14 07:40:26 CEST 2012
<br>
tyr fd1026 123 hwloc-bind pu:0 -l date
<br>
Fri Sep 14 07:40:37 CEST 2012
<br>
tyr fd1026 124 hwloc-bind pu:1 -l date
<br>
Fri Sep 14 07:40:41 CEST 2012
<br>
<p>Second question: How can I find out which bindings are allowed when
<br>
I know the output from &quot;lstopo&quot;? I have no idea why I get &quot;errno 18
<br>
Cross-device link&quot; on the M4000.
<br>
<p>Thank you very much for any answers and suggestions in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-users] Questions to lstopo and hwloc-bind"</a>
<li><strong>Previous message:</strong> <a href="0724.php">Jeff Squyres: "Re: [hwloc-users] Solaris and hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-users] Questions to lstopo and hwloc-bind"</a>
<li><strong>Reply:</strong> <a href="0726.php">Brice Goglin: "Re: [hwloc-users] Questions to lstopo and hwloc-bind"</a>
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
