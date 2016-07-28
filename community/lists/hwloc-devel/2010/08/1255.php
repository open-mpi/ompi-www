<?
$subject_val = "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  6 12:13:23 2010" -->
<!-- isoreceived="20100806161323" -->
<!-- sent="Fri, 06 Aug 2010 18:13:06 +0200" -->
<!-- isosent="20100806161306" -->
<!-- name="Bernd Kallies" -->
<!-- email="kallies_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints" -->
<!-- id="1281111186.12957.554.camel_at_kallies.zib.de" -->
<!-- charset="ISO-8859-15" -->
<!-- inreplyto="4C5C31AD.1030806_at_inria.fr" -->
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
<strong>Date:</strong> 2010-08-06 12:13:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1256.php">Terry Dontje: "[hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1254.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1254.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1257.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1257.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1262.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 2010-08-06 at 18:00 +0200, Brice Goglin wrote:
<br>
<span class="quotelev1">&gt; Le 06/08/2010 18:01, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, 2010-08-06 at 17:50 +0200, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Le 06/08/2010 17:28, Bernd Kallies a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Fri, 2010-08-06 at 15:51 +0200, Brice Goglin wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Can you send /proc/mounts of both systems?
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I fixed a problem after 1.0.2 was released [1], it could be related.
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; [1] <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2357">https://svn.open-mpi.org/trac/hwloc/changeset/2357</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;         
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The mentioned changes in topology-linux.c solved the problem.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ok good to know, thanks. We already 2 people report this problem, so I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; wonder if we should do a 1.0.3 quickly. The ibverbs dependency fix might
</span><br>
<span class="quotelev3">&gt; &gt;&gt; be worth shipping too.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt; Yes, I noticed the ibverbs thing, too. It is very ugly. I did a Q&amp;D fix
</span><br>
<span class="quotelev2">&gt; &gt; in some config m4 macros to provide the choice via configure. Is the fix
</span><br>
<span class="quotelev2">&gt; &gt; you mentioned of the same type?
</span><br>
<span class="quotelev2">&gt; &gt;   
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/hwloc/changeset/2360">https://svn.open-mpi.org/trac/hwloc/changeset/2360</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; libibverbs is only used during make check when it's available.
</span><br>
<p>There is a problem with this philosophy. We provide hwloc on our
<br>
machines in a network filesystem at a unique path. All machines have
<br>
OFED installed, but some miss ibverbs. When building hwloc on a machine
<br>
with ibverbs, then things will not work on machines without ibverbs. So
<br>
I guess choice via configure is better. See attachments, if you are
<br>
interested (based on hwloc-1.0.2(stable)).
<br>
<p><p><span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
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
<p>
<p><hr>
<ul>
<li>application/x-m4 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1255/hwloc.m4">hwloc.m4</a>
</ul>
<!-- attachment="hwloc.m4" -->
<hr>
<ul>
<li>application/x-m4 attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1255/hwloc_internal.m4">hwloc_internal.m4</a>
</ul>
<!-- attachment="hwloc_internal.m4" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1256.php">Terry Dontje: "[hwloc-devel] Support for solaris lgrp_affinity_set"</a>
<li><strong>Previous message:</strong> <a href="1254.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>In reply to:</strong> <a href="1254.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1257.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1257.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
<li><strong>Reply:</strong> <a href="1262.php">Samuel Thibault: "Re: [hwloc-devel] hwloc-1.0.2 on SLES11SP2 does not honor cpuset constraints"</a>
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
