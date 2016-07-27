<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 02:29:28 2010" -->
<!-- isoreceived="20101201072928" -->
<!-- sent="Wed, 01 Dec 2010 08:29:23 +0100" -->
<!-- isosent="20101201072923" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868" -->
<!-- id="4CF5F953.1060206_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201011301459.oAUExek3011536_at_sourcehaven.osl.iu.edu" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 02:29:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1647.php">Wei Lin: "[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1645.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc4r2871)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1680.php">Nathalie Furmento: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Reply:</strong> <a href="1680.php">Nathalie Furmento: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Maybe reply:</strong> <a href="1683.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 30/11/2010 15:59, sthibaul_at_[hidden] a &#233;crit :
<br>
<span class="quotelev1">&gt; Author: sthibaul
</span><br>
<span class="quotelev1">&gt; Date: 2010-11-30 09:59:40 EST (Tue, 30 Nov 2010)
</span><br>
<span class="quotelev1">&gt; New Revision: 2868
</span><br>
<span class="quotelev1">&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2868">https://svn.open-mpi.org/trac/hwloc/changeset/2868</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; put back L#/P# prefixes in graphical output
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<p>Before the release, we'll have to update the graphical outputs in the
<br>
documentation (and grep for # everywhere too :)).
<br>
<p>Do we apply something similar to the above patch for the textual output too?
<br>
<p>Current output:         Node #1 (phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket #1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU #2 (phys=3)
<br>
<p>would become:           Node L#1 (Phys=0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (Phys=3)
<br>
<p><p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1647.php">Wei Lin: "[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2010/11/1645.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc4r2871)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1680.php">Nathalie Furmento: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Reply:</strong> <a href="1680.php">Nathalie Furmento: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Maybe reply:</strong> <a href="1683.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
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
