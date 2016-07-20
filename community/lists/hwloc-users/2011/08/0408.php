<?
$subject_val = "[hwloc-users] Re :  lstopo on multiple machines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 16 10:02:37 2011" -->
<!-- isoreceived="20110816140237" -->
<!-- sent="Tue, 16 Aug 2011 16:02:31 +0200 (CEST)" -->
<!-- isosent="20110816140231" -->
<!-- name="Brice Goglin" -->
<!-- email="brice.goglin_at_[hidden]" -->
<!-- subject="[hwloc-users] Re :  lstopo on multiple machines" -->
<!-- id="5B393396-A7F0-4411-B0A3-3EB244F0EF00_at_inria.fr" -->
<!-- charset="ANSI_X3.4-1968" -->
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
<strong>Subject:</strong> [hwloc-users] Re :  lstopo on multiple machines<br>
<strong>From:</strong> Brice Goglin (<em>brice.goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-16 10:02:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0407.php">PULVERAIL S&#233;bastien: "[hwloc-users] lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0409.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0409.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Maybe reply:</strong> <a href="0410.php">Samuel Thibault: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Seb,
<br>
Hwloc only looks at the local machine, there's no support for multinode topology detection so far. We are considering adding it but we don't know yet what users want to do with it, if it should be in the core or not, automatic or nor. Your feedback is welcome.
<br>
Brice
<br>
<p>----- Reply message -----
<br>
De : &quot;PULVERAIL S?bastien&quot; &lt;sebastien.pulverail_at_[hidden]&gt;
<br>
Pour?: &lt;hwloc-users_at_[hidden]&gt;
<br>
Objet : [hwloc-users] lstopo on multiple machines
<br>
Date : mar., ao?t 16, 2011 15:04
<br>
<p><p><p><p>Hello,
<br>
<p>&nbsp;
<br>
<p>I have two machines I use for running my programs on multiple nodes (with
<br>
hydra or slurm).
<br>
<p>When I launch my lstopo command, only one machine characteristics are
<br>
printed.
<br>
<p>How can I tell HWLOC to look for those two machines ?
<br>
<p>&nbsp;
<br>
<p><pre>
--
Seb
 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0409.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Previous message:</strong> <a href="0407.php">PULVERAIL S&#233;bastien: "[hwloc-users] lstopo on multiple machines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0409.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0409.php">Jeff Squyres: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Maybe reply:</strong> <a href="0410.php">Samuel Thibault: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
<li><strong>Reply:</strong> <a href="0411.php">Marcelo Alaniz: "Re: [hwloc-users] Re :  lstopo on multiple machines"</a>
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
