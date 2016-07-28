<?
$subject_val = "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 27 10:51:54 2015" -->
<!-- isoreceived="20151027145154" -->
<!-- sent="Tue, 27 Oct 2015 15:52:10 +0100" -->
<!-- isosent="20151027145210" -->
<!-- name="Fabian Wein" -->
<!-- email="fabian.wein_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family" -->
<!-- id="562F8F9A.3080701_at_fau.de" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="562F8D66.5050700_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family<br>
<strong>From:</strong> Fabian Wein (<em>fabian.wein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-27 10:52:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1208.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1208.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/27/2015 03:42 PM, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; I guess the problem is that your OMPI uses an old hwloc internally. That
</span><br>
<span class="quotelev1">&gt; one may be too old to understand recent XML exports.
</span><br>
<span class="quotelev1">&gt; Try replacing &quot;Package&quot; with &quot;Socket&quot; everywhere in the XML file.
</span><br>
<p>Thanks! That was it.
<br>
<p>I now get almost perfectly reproducible results.
<br>
<p>np  speedup
<br>
1 1.0
<br>
2 1.99
<br>
3 2.98
<br>
4 3.98
<br>
5 4.89
<br>
6 5.9
<br>
7 6.89
<br>
8 7.87
<br>
9 5.44
<br>
10 6.04
<br>
11 6.55
<br>
12 7.0
<br>
13 7.75
<br>
14 8.24
<br>
15 8.41
<br>
16 9.4
<br>
17 7.33
<br>
18 7.16
<br>
19 8.05
<br>
20 8.39
<br>
<p>What still puzzles me is the almost perfect speedup up to eight and 
<br>
than the
<br>
drop down. But for the beginning 8 is already good!
<br>
<p>Thanks again,
<br>
<p>Fabian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Previous message:</strong> <a href="1208.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>In reply to:</strong> <a href="1208.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
<li><strong>Reply:</strong> <a href="1210.php">Brice Goglin: "Re: [hwloc-users] hwloc error for AMD Opteron 6300 processor family"</a>
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
