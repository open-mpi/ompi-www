<?
$subject_val = "Re: [hwloc-devel] mpich2 maintained patches for hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 01:31:00 2012" -->
<!-- isoreceived="20120906053100" -->
<!-- sent="Thu, 06 Sep 2012 07:30:55 +0200" -->
<!-- isosent="20120906053055" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] mpich2 maintained patches for hwloc" -->
<!-- id="5048350F.2070703_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="50483353.3070100_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] mpich2 maintained patches for hwloc<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 01:30:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3269.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 06/09/2012 07:23, Pavan Balaji a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/06/2012 12:22 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; No, we didn't apply anything to v1.5. In trunk, we're using sysconf
</span><br>
<span class="quotelev2">&gt;&gt; instead of getpagesize when it supports SC_PAGESIZE or SC_PAGE_SIZE
</span><br>
<span class="quotelev2">&gt;&gt; (very often).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this going to go into 1.5.1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I wasn't sure of the wide availability of SC_PAGESIZE when I applied it
<br>
to trunk, so I didn't backport it. The patch is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/hwloc/changeset/4677">https://svn.open-mpi.org/trac/hwloc/changeset/4677</a>
<br>
If you can test it and confirm it doesn't break anything and fix your
<br>
problems, I'll backport it in v1.5.1.
<br>
<p>We have very few backports in the v1.5 branch for now, so v1.5.1 may not
<br>
happen for a while. We might even see a v1.6rc1 (with the patch) before
<br>
that.
<br>
<p>Brice
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3269.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4815 - branches/components/src"</a>
<li><strong>Previous message:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
<li><strong>In reply to:</strong> <a href="3267.php">Pavan Balaji: "Re: [hwloc-devel] mpich2 maintained patches for hwloc"</a>
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
