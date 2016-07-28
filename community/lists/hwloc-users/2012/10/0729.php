<?
$subject_val = "[hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct  2 17:45:51 2012" -->
<!-- isoreceived="20121002214551" -->
<!-- sent="Tue, 2 Oct 2012 15:45:44 -0600" -->
<!-- isosent="20121002214544" -->
<!-- name="Sebastian Kuzminsky" -->
<!-- email="seb_at_[hidden]" -->
<!-- subject="[hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware" -->
<!-- id="CAN=597RNSvU8iZwxLPReLvvJA-LSQLEqkyiZ8bVjijP3_Tq3cQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware<br>
<strong>From:</strong> Sebastian Kuzminsky (<em>seb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-02 17:45:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0730.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/09/0728.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0730.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="0730.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="0731.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks, I just discovered hwloc and it's really cool.  Very useful, so
<br>
thanks!
<br>
<p>I'm trying to understand the hardware layout of a computer I'm working
<br>
with, an HP Proliant DL360p G8 server with two Intel E5-2690 processors.
<br>
<p>I'm getting puzzling results from lstopo (from hwloc 1.5).  The results I
<br>
get in Linux make good sense, but the results I get in FreeBSD (running on
<br>
the same hardware) seem wrong.  Specifically, notice how the first 10 CPUs
<br>
are not assigned to any socket or L1/L2 cache.  Strange!
<br>
<p>I've attached the output from both platforms.
<br>
<p>Any ideas what I'm doing wrong?
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0729/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0729/hwloc-1.5.linux-output">hwloc-1.5.linux-output</a>
</ul>
<!-- attachment="hwloc-1.5.linux-output" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0729/hwloc-1.5.freebsd-output">hwloc-1.5.freebsd-output</a>
</ul>
<!-- attachment="hwloc-1.5.freebsd-output" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0730.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/09/0728.php">Samuel Thibault: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0730.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="0730.php">Brice Goglin: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
<li><strong>Reply:</strong> <a href="0731.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.5, freebsd and linux output on the same hardware"</a>
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
