<?
$subject_val = "[hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  4 17:52:38 2011" -->
<!-- isoreceived="20111004215238" -->
<!-- sent="Tue, 4 Oct 2011 23:52:31 +0200" -->
<!-- isosent="20111004215231" -->
<!-- name="Jiri Hladky" -->
<!-- email="hladky.jiri_at_[hidden]" -->
<!-- subject="[hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface" -->
<!-- id="CALT_uBSU7JzeA4X1Ad6kpyAkEFsgBcGGU2m8zwiSyrGackTAWQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface<br>
<strong>From:</strong> Jiri Hladky (<em>hladky.jiri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-04 17:52:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2492.php">Samuel Thibault: "Re: [hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface"</a>
<li><strong>Previous message:</strong> <a href="2490.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2492.php">Samuel Thibault: "Re: [hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface"</a>
<li><strong>Maybe reply:</strong> <a href="2492.php">Samuel Thibault: "Re: [hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Brice,
<br>
hi everybody,
<br>
<p>I'm involved in the project haveged:
<br>
<a href="http://www.issihosts.com/haveged/">http://www.issihosts.com/haveged/</a>
<br>
<p>which is a (true) random number generator which is using internal states of
<br>
CPU like TLB, branching predictor and so on. In order to work properly it
<br>
requires the knowledge of L1 data and instruction cache.
<br>
<p>The current implementation is using cpuid to find this. It works fine on
<br>
Intel and AMD but the trouble is on PPC where cpuid is missing. I have
<br>
suggested to use
<br>
<p>/sys/devices/system/cpu/cpu0/cache/index*/
<br>
<p>but the author is concerned with the stability of this kernel
<br>
interface. Since hwloc relies also on /sys/devices/system/cpu/cpu0/cache/
<br>
I'm wondering if you had some thoughts or issues on that.
<br>
<p>Thanks a lot for any input!
<br>
Jirka
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2491/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2492.php">Samuel Thibault: "Re: [hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface"</a>
<li><strong>Previous message:</strong> <a href="2490.php">Samuel Thibault: "Re: [hwloc-devel] multinode/network topology status"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2492.php">Samuel Thibault: "Re: [hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface"</a>
<li><strong>Maybe reply:</strong> <a href="2492.php">Samuel Thibault: "Re: [hwloc-devel] Stability of /sys/devices/system/cpu/cpu0/cache/index*/ interface"</a>
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
