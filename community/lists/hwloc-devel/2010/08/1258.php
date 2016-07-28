<?
$subject_val = "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  9 07:42:08 2010" -->
<!-- isoreceived="20100809114208" -->
<!-- sent="Mon, 09 Aug 2010 13:41:53 +0200" -->
<!-- isosent="20100809114153" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints" -->
<!-- id="1281354113.12957.895.camel_at_kallies.zib.de" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="20B2FDEE-DF3D-4E84-9027-216008D14F7A_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints<br>
<strong>From:</strong> Bernd Kallies (<em>kallies_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-09 07:41:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1259.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1257.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1257.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1259.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1259.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2010-08-09 at 07:29 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Aug 6, 2010, at 12:13 PM, Bernd Kallies wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libibverbs is only used during make check when it's available.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There is a problem with this philosophy. We provide hwloc on our
</span><br>
<span class="quotelev2">&gt; &gt; machines in a network filesystem at a unique path. All machines have
</span><br>
<span class="quotelev2">&gt; &gt; OFED installed, but some miss ibverbs. When building hwloc on a machine
</span><br>
<span class="quotelev2">&gt; &gt; with ibverbs, then things will not work on machines without ibverbs. So
</span><br>
<span class="quotelev2">&gt; &gt; I guess choice via configure is better. See attachments, if you are
</span><br>
<span class="quotelev2">&gt; &gt; interested (based on hwloc-1.0.2(stable)).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just curious: how can you have OFED installed without libibverbs?
</span><br>
<p>As far as I know, with SLES11 the OFED things are provided via rpms, and
<br>
one may install them withour ibverbs. The installation itself is done by
<br>
our vendor. And since our vendor believed we don't need ibverbs, they
<br>
did not install it (by default). This made sense, because these machines
<br>
are big SMP machines, which need IB for Lustre only. MPI is done fully
<br>
via shared memory with a library that is proprietary to the vendor
<br>
(SGI).
<br>
<p><pre>
-- 
Dr. Bernd Kallies
Konrad-Zuse-Zentrum f&#252;r Informationstechnik Berlin
Takustr. 7
14195 Berlin
Tel: +49-30-84185-270
Fax: +49-30-84185-311
e-mail: kallies_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1259.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Previous message:</strong> <a href="1257.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1257.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1259.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1259.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
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
