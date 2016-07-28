<?
$subject_val = "Re: [OMPI devel] known limitation or bug in hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 09:16:15 2011" -->
<!-- isoreceived="20110829131615" -->
<!-- sent="Mon, 29 Aug 2011 07:16:08 -0600" -->
<!-- isosent="20110829131608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] known limitation or bug in hwloc?" -->
<!-- id="207DE476-3D8B-410D-BAEA-2AC42D553D6C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4e5b8eb0.49d8e00a.7769.654aSMTPIN_ADDED_at_mx.google.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 09:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9710.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Maybe in reply to:</strong> <a href="9709.php">nadia.derbey: "[OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, if you look closely at the definition of those two values, you'll see that it really doesn't matter which one we loop over. The NUM_BITS value defines the actual total number of bits in the mask. The CPU_MAX is the total number of cpus we can support, which was set to a value such that the two are equal (i.e., it's a power of two that happens to be an integer multiple of 64).
<br>
<p>I believe the original intent was to allow CPU_MAX to be independent of address-alignment questions, so NUM_BITS could technically be greater than CPU_MAX. Even if this happens, though, all that would do is cause the loop to run across more bits than required.
<br>
<p>So it doesn't introduce a limitation at all. In hindsight, we could simplify things by eliminating one of those values and just putting a requirement on the number that it be a multiple of 64 so it aligns with a memory address.
<br>
<p><p>On Aug 29, 2011, at 7:05 AM, Kenneth Lloyd wrote:
<br>
<p><span class="quotelev1">&gt; Nadia,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interesting. I haven't tried pushing this to levels above 8 on a particular
</span><br>
<span class="quotelev1">&gt; machine. Do you think that the cpuset / paffinity / hwloc only applies at
</span><br>
<span class="quotelev1">&gt; the machine level, at which time you need to employ a graph with carto?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of nadia.derbey
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 29, 2011 5:45 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi list,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm hitting a limitation with paffinity/hwloc with cpu numbers &gt;= 64.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In opal/mca/paffinity/hwloc/paffinity_hwloc_module.c, module_set() is
</span><br>
<span class="quotelev1">&gt; the routine that sets the calling process affinity to the mask given as
</span><br>
<span class="quotelev1">&gt; parameter. Note that &quot;mask&quot; is a opal_paffinity_base_cpu_set_t (so we
</span><br>
<span class="quotelev1">&gt; allow the cpus to be potentially numbered up to
</span><br>
<span class="quotelev1">&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX - 1).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem with module_set() is that is loops over
</span><br>
<span class="quotelev1">&gt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS bits to check if these bits are set in
</span><br>
<span class="quotelev1">&gt; the mask:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; ++i)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;        if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
</span><br>
<span class="quotelev1">&gt;            hwloc_bitmap_set(set, i);
</span><br>
<span class="quotelev1">&gt;        }
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Given &quot;mask&quot;'s type, I think module_set() should instead loop over
</span><br>
<span class="quotelev1">&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX bits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that module_set() uses a type for its internal mask that is
</span><br>
<span class="quotelev1">&gt; coherent with OPAL_PAFFINITY_BITMASK_T_NUM_BITS (hwloc_bitmap_t).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I'm wondering whether this is a known limitation I've never heard of
</span><br>
<span class="quotelev1">&gt; or an actual bug?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nadia
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; No virus found in this message.
</span><br>
<span class="quotelev1">&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev1">&gt; Version: 10.0.1392 / Virus Database: 1520/3864 - Release Date: 08/28/11
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9710.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Maybe in reply to:</strong> <a href="9709.php">nadia.derbey: "[OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
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
