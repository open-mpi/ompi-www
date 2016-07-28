<?
$subject_val = "Re: [OMPI devel] known limitation or bug in hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 10:26:33 2011" -->
<!-- isoreceived="20110829142633" -->
<!-- sent="Mon, 29 Aug 2011 08:20:30 -0600" -->
<!-- isosent="20110829142030" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] known limitation or bug in hwloc?" -->
<!-- id="F8EF8391-CFCC-4451-AC57-695D4ADD33F8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="207DE476-3D8B-410D-BAEA-2AC42D553D6C_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-08-29 10:20:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9714.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9714.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9714.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9720.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Actually, I'll eat those words. I was looking at the wrong place.
<br>
<p>Yes, that is a bug in hwloc. It needs to loop over CPU_MAX for those cases where the bit mask extends over multiple words.
<br>
<p><p>On Aug 29, 2011, at 7:16 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Actually, if you look closely at the definition of those two values, you'll see that it really doesn't matter which one we loop over. The NUM_BITS value defines the actual total number of bits in the mask. The CPU_MAX is the total number of cpus we can support, which was set to a value such that the two are equal (i.e., it's a power of two that happens to be an integer multiple of 64).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe the original intent was to allow CPU_MAX to be independent of address-alignment questions, so NUM_BITS could technically be greater than CPU_MAX. Even if this happens, though, all that would do is cause the loop to run across more bits than required.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So it doesn't introduce a limitation at all. In hindsight, we could simplify things by eliminating one of those values and just putting a requirement on the number that it be a multiple of 64 so it aligns with a memory address.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2011, at 7:05 AM, Kenneth Lloyd wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Nadia,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Interesting. I haven't tried pushing this to levels above 8 on a particular
</span><br>
<span class="quotelev2">&gt;&gt; machine. Do you think that the cpuset / paffinity / hwloc only applies at
</span><br>
<span class="quotelev2">&gt;&gt; the machine level, at which time you need to employ a graph with carto?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ken
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev2">&gt;&gt; Behalf Of nadia.derbey
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Monday, August 29, 2011 5:45 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi list,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm hitting a limitation with paffinity/hwloc with cpu numbers &gt;= 64.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In opal/mca/paffinity/hwloc/paffinity_hwloc_module.c, module_set() is
</span><br>
<span class="quotelev2">&gt;&gt; the routine that sets the calling process affinity to the mask given as
</span><br>
<span class="quotelev2">&gt;&gt; parameter. Note that &quot;mask&quot; is a opal_paffinity_base_cpu_set_t (so we
</span><br>
<span class="quotelev2">&gt;&gt; allow the cpus to be potentially numbered up to
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX - 1).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The problem with module_set() is that is loops over
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS bits to check if these bits are set in
</span><br>
<span class="quotelev2">&gt;&gt; the mask:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; ++i)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;       if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
</span><br>
<span class="quotelev2">&gt;&gt;           hwloc_bitmap_set(set, i);
</span><br>
<span class="quotelev2">&gt;&gt;       }
</span><br>
<span class="quotelev2">&gt;&gt;   }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Given &quot;mask&quot;'s type, I think module_set() should instead loop over
</span><br>
<span class="quotelev2">&gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX bits.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that module_set() uses a type for its internal mask that is
</span><br>
<span class="quotelev2">&gt;&gt; coherent with OPAL_PAFFINITY_BITMASK_T_NUM_BITS (hwloc_bitmap_t).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I'm wondering whether this is a known limitation I've never heard of
</span><br>
<span class="quotelev2">&gt;&gt; or an actual bug?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; No virus found in this message.
</span><br>
<span class="quotelev2">&gt;&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev2">&gt;&gt; Version: 10.0.1392 / Virus Database: 1520/3864 - Release Date: 08/28/11
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9714.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9712.php">teng ma: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>In reply to:</strong> <a href="9711.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9714.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9714.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9720.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
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
