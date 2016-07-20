<?
$subject_val = "[hwloc-users] Multiple thread binding";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  2 10:22:33 2011" -->
<!-- isoreceived="20110802142233" -->
<!-- sent="Tue, 2 Aug 2011 16:22:28 +0200" -->
<!-- isosent="20110802142228" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="[hwloc-users] Multiple thread binding" -->
<!-- id="CAJNPZUU0d4kmkCrAmnS-OVANEFozKDR7Ef6BzYPtpwozBY1ksw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [hwloc-users] Multiple thread binding<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-02 10:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0354.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Previous message:</strong> <a href="0352.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0354.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe reply:</strong> <a href="0354.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe reply:</strong> <a href="0356.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe reply:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>binding a thread on a core  like this:
<br>
<p>hwloc_set_cpubind(*topology, set,  HWLOC_CPUBIND_THREAD |
<br>
HWLOC_CPUBIND_STRICT |   HWLOC_CPUBIND_NOMEMBIND);
<br>
<p>is it possible do multiple call to hwloc_set_cpubind passing each flag per
<br>
time?
<br>
<p>hwloc_set_cpubind(*topology, set,  HWLOC_CPUBIND_THREAD);
<br>
hwloc_set_cpubind(*topology, set, HWLOC_CPUBIND_STRICT);
<br>
hwloc_set_cpubind(*topology, set, HWLOC_CPUBIND_NOMEMBIND);
<br>
<p>or only the last have effect?
<br>
<p>Thanks in forward.
<br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0353/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0354.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Previous message:</strong> <a href="0352.php">Samuel Thibault: "Re: [hwloc-users] [hwloc-announce] Hardware Locality (hwloc) v1.2.1rc1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0354.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe reply:</strong> <a href="0354.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe reply:</strong> <a href="0356.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
<li><strong>Maybe reply:</strong> <a href="0358.php">Samuel Thibault: "Re: [hwloc-users] Multiple thread binding"</a>
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
