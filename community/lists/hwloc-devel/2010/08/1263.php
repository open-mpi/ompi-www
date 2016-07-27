<?
$subject_val = "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 13 07:36:13 2010" -->
<!-- isoreceived="20100813113613" -->
<!-- sent="Fri, 13 Aug 2010 13:35:56 +0200" -->
<!-- isosent="20100813113556" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints" -->
<!-- id="1281699356.12957.1773.camel_at_kallies.zib.de" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="20100813113306.GB15512_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2010-08-13 07:35:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1264.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2406)"</a>
<li><strong>Previous message:</strong> <a href="1262.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1262.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-08-13 at 13:33 +0200, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Bernd Kallies, le Fri 06 Aug 2010 18:13:06 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2360">https://svn.open-mpi.org/trac/hwloc/changeset/2360</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; libibverbs is only used during make check when it's available.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; There is a problem with this philosophy. We provide hwloc on our
</span><br>
<span class="quotelev2">&gt; &gt; machines in a network filesystem at a unique path. All machines have
</span><br>
<span class="quotelev2">&gt; &gt; OFED installed, but some miss ibverbs.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The changes above makes only the _tests_ use ibverbs, the hwloc library
</span><br>
<span class="quotelev1">&gt; won't use it any more.
</span><br>
<p>I understand.
<br>
<p><span class="quotelev1">&gt; Samuel
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
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
<li><strong>Next message:</strong> <a href="1264.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.1a1r2406)"</a>
<li><strong>Previous message:</strong> <a href="1262.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1262.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
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
