<?
$subject_val = "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 14:18:39 2012" -->
<!-- isoreceived="20120201191839" -->
<!-- sent="Wed, 01 Feb 2012 11:18:20 -0800" -->
<!-- isosent="20120201191820" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu" -->
<!-- id="4F298FFC.2050709_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20120201171321.GM14526_at_type.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 14:18:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2763.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2761.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
<li><strong>In reply to:</strong> <a href="2760.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2790.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2/1/2012 9:13 AM, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Paul H. Hargrove, le Wed 01 Feb 2012 05:58:05 +0100, a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; At the moment my suspicion falls on the compiler, as I can't see how a
</span><br>
<span class="quotelev2">&gt;&gt; failure of 256ia64-64n2s2c.output could be h/w dependent.
</span><br>
<span class="quotelev1">&gt; It could be a problem of imperfect qemu emulation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>If I understand correctly, the failing test just processes synthetic 
<br>
data (for a 64-node X 2-socket X 2-core cluster of ia64 cpus).
<br>
So if qemu's emulation were at fault, then one would expect more 
<br>
wide-spread problems and a generally unstable system.
<br>
While -mabi=64 is not the default in user-space, it IS the way the linux 
<br>
kernel is built and thus should be well tested.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2763.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2761.php">Samuel Thibault: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r4224"</a>
<li><strong>In reply to:</strong> <a href="2760.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2790.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.3.1 and 1.4 failures on MIPS64/qemu"</a>
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
