<?
$subject_val = "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  3 14:32:55 2012" -->
<!-- isoreceived="20120703183255" -->
<!-- sent="Tue, 03 Jul 2012 11:32:40 -0700" -->
<!-- isosent="20120703183240" -->
<!-- name="Carl Smith" -->
<!-- email="cs_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?" -->
<!-- id="22563.1341340360_at_kanawha.pbspro.com" -->
<!-- inreplyto="Brice.Goglin_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?<br>
<strong>From:</strong> Carl Smith (<em>cs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-03 14:32:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/08/0657.php">Wheeler, Kyle Bruce: "[hwloc-users] hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0655.php">Guy Streeter: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; I think I remember a similar report but I can't find it in the archives.
</span><br>
<span class="quotelev1">&gt; RHEL bugzilla found <a href="https://bugzilla.redhat.com/show_bug.cgi?id=740630">https://bugzilla.redhat.com/show_bug.cgi?id=740630</a>
</span><br>
<span class="quotelev1">&gt; which is solved in pciutils &gt;= 3.1.4-11
</span><br>
<span class="quotelev1">&gt; Which pciutils do you have?
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes, that's my problem - I fetched a version of pciutils with the
<br>
fix, built hwloc with it, and that caused this problem to vanish.  Thanks.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2012/08/0657.php">Wheeler, Kyle Bruce: "[hwloc-users] hwloc_get_latency() failures and confusion"</a>
<li><strong>Previous message:</strong> <a href="0655.php">Guy Streeter: "Re: [hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0652.php">Carl Smith: "[hwloc-users] anyone seen problems with PCI on RHEL 6?"</a>
<!-- nextthread="start" -->
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
