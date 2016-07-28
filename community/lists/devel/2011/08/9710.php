<?
$subject_val = "Re: [OMPI devel] known limitation or bug in hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 09:05:26 2011" -->
<!-- isoreceived="20110829130526" -->
<!-- sent="Mon, 29 Aug 2011 07:05:31 -0600" -->
<!-- isosent="20110829130531" -->
<!-- name="Kenneth Lloyd" -->
<!-- email="kenneth.lloyd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] known limitation or bug in hwloc?" -->
<!-- id="007b01cc664c$554e3c40$ffeab4c0$_at_lloyd@wattsys.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1314618288.18014.55.camel_at_B014522" -->
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
<strong>Subject:</strong> Re: [OMPI devel] known limitation or bug in hwloc?<br>
<strong>From:</strong> Kenneth Lloyd (<em>kenneth.lloyd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 09:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9709.php">nadia.derbey: "[OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9709.php">nadia.derbey: "[OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nadia,
<br>
<p>Interesting. I haven't tried pushing this to levels above 8 on a particular
<br>
machine. Do you think that the cpuset / paffinity / hwloc only applies at
<br>
the machine level, at which time you need to employ a graph with carto?
<br>
<p>Regards,
<br>
<p>Ken
<br>
<p>-----Original Message-----
<br>
From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
<br>
Behalf Of nadia.derbey
<br>
Sent: Monday, August 29, 2011 5:45 AM
<br>
To: Open MPI Developers
<br>
Subject: [OMPI devel] known limitation or bug in hwloc?
<br>
<p>Hi list,
<br>
<p>I'm hitting a limitation with paffinity/hwloc with cpu numbers &gt;= 64.
<br>
<p>In opal/mca/paffinity/hwloc/paffinity_hwloc_module.c, module_set() is
<br>
the routine that sets the calling process affinity to the mask given as
<br>
parameter. Note that &quot;mask&quot; is a opal_paffinity_base_cpu_set_t (so we
<br>
allow the cpus to be potentially numbered up to
<br>
OPAL_PAFFINITY_BITMASK_CPU_MAX - 1).
<br>
<p>The problem with module_set() is that is loops over
<br>
OPAL_PAFFINITY_BITMASK_T_NUM_BITS bits to check if these bits are set in
<br>
the mask:
<br>
<p>for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; ++i)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hwloc_bitmap_set(set, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Given &quot;mask&quot;'s type, I think module_set() should instead loop over
<br>
OPAL_PAFFINITY_BITMASK_CPU_MAX bits.
<br>
<p>Note that module_set() uses a type for its internal mask that is
<br>
coherent with OPAL_PAFFINITY_BITMASK_T_NUM_BITS (hwloc_bitmap_t).
<br>
<p>So I'm wondering whether this is a known limitation I've never heard of
<br>
or an actual bug?
<br>
<p>Regards,
<br>
Nadia
<br>
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
-----
<br>
No virus found in this message.
<br>
Checked by AVG - www.avg.com
<br>
Version: 10.0.1392 / Virus Database: 1520/3864 - Release Date: 08/28/11
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9709.php">nadia.derbey: "[OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9709.php">nadia.derbey: "[OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
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
