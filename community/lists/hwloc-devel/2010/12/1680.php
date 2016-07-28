<?
$subject_val = "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  8 04:41:44 2010" -->
<!-- isoreceived="20101208094144" -->
<!-- sent="Wed, 08 Dec 2010 10:41:39 +0100" -->
<!-- isosent="20101208094139" -->
<!-- name="Nathalie Furmento" -->
<!-- email="nathalie.furmento_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868" -->
<!-- id="4CFF52D3.1070802_at_labri.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CF5F953.1060206_at_inria.fr" -->
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
<strong>From:</strong> Nathalie Furmento (<em>nathalie.furmento_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-08 04:41:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1681.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Previous message:</strong> <a href="1679.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc4r2905)"</a>
<li><strong>In reply to:</strong> <a href="1646.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1681.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Reply:</strong> <a href="1681.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 01/12/2010 08:29, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 30/11/2010 15:59, sthibaul_at_[hidden] a &#233;crit :
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev2">&gt;&gt; Author: sthibaul
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2010-11-30 09:59:40 EST (Tue, 30 Nov 2010)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 2868
</span><br>
<span class="quotelev2">&gt;&gt; URL: <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2868">https://svn.open-mpi.org/trac/hwloc/changeset/2868</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; put back L#/P# prefixes in graphical output
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; Before the release, we'll have to update the graphical outputs in the
</span><br>
<span class="quotelev1">&gt; documentation (and grep for # everywhere too :)).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do we apply something similar to the above patch for the textual output too?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Current output:         Node #1 (phys=0)
</span><br>
<span class="quotelev1">&gt;                           Socket #1
</span><br>
<span class="quotelev1">&gt;                            PU #2 (phys=3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; would become:           Node L#1 (Phys=0)
</span><br>
<span class="quotelev1">&gt;                           Socket L#1
</span><br>
<span class="quotelev1">&gt;                            PU L#2 (Phys=3)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>I would rather go for a solution like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node L#1 (P#0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Socket L#1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PU L#2 (P#3)
<br>
<p>to be more homegeneous.
<br>
<p>Nathalie
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1681.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Previous message:</strong> <a href="1679.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1rc4r2905)"</a>
<li><strong>In reply to:</strong> <a href="1646.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1681.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
<li><strong>Reply:</strong> <a href="1681.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2868"</a>
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
