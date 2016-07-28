<?
$subject_val = "Re: [OMPI devel] known limitation or bug in hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 10:36:07 2011" -->
<!-- isoreceived="20110829143607" -->
<!-- sent="Mon, 29 Aug 2011 16:35:17 +0200" -->
<!-- isosent="20110829143517" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] known limitation or bug in hwloc?" -->
<!-- id="OF9F75C0FD.BD0360BC-ONC12578FB.004FC7BB-C12578FB.00501A71_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F8EF8391-CFCC-4451-AC57-695D4ADD33F8_at_open-mpi.org" -->
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
<strong>From:</strong> <a href="mailto:nadia.derbey_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20known%20limitation%20or%20bug%20in%20hwloc?"><em>nadia.derbey_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-08-29 10:35:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
devel-bounces_at_[hidden] wrote on 08/29/2011 04:20:30 PM:
<br>
<p><span class="quotelev1">&gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 08/29/2011 04:26 PM
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Actually, I'll eat those words. I was looking at the wrong place.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, that is a bug in hwloc. It needs to loop over CPU_MAX for those
</span><br>
<span class="quotelev1">&gt; cases where the bit mask extends over multiple words.
</span><br>
<p>But I'm afraid the fix won't be trivial at all: hwloc in itself is 
<br>
coherent: it loops overs NUM_BITS, but it uses masks that are NUM_BITS 
<br>
wide (hwloc_bitmap_t set)...
<br>
<p>Regards,
<br>
Nadia
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2011, at 7:16 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Actually, if you look closely at the definition of those two 
</span><br>
<span class="quotelev1">&gt; values, you'll see that it really doesn't matter which one we loop 
</span><br>
<span class="quotelev1">&gt; over. The NUM_BITS value defines the actual total number of bits in 
</span><br>
<span class="quotelev1">&gt; the mask. The CPU_MAX is the total number of cpus we can support, 
</span><br>
<span class="quotelev1">&gt; which was set to a value such that the two are equal (i.e., it's a 
</span><br>
<span class="quotelev1">&gt; power of two that happens to be an integer multiple of 64).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I believe the original intent was to allow CPU_MAX to be 
</span><br>
<span class="quotelev1">&gt; independent of address-alignment questions, so NUM_BITS could 
</span><br>
<span class="quotelev1">&gt; technically be greater than CPU_MAX. Even if this happens, though, 
</span><br>
<span class="quotelev1">&gt; all that would do is cause the loop to run across more bits than 
</span><br>
required.
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; So it doesn't introduce a limitation at all. In hindsight, we 
</span><br>
<span class="quotelev1">&gt; could simplify things by eliminating one of those values and just 
</span><br>
<span class="quotelev1">&gt; putting a requirement on the number that it be a multiple of 64 so 
</span><br>
<span class="quotelev1">&gt; it aligns with a memory address.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 29, 2011, at 7:05 AM, Kenneth Lloyd wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nadia,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Interesting. I haven't tried pushing this to levels above 8 on a 
</span><br>
particular
<br>
<span class="quotelev3">&gt; &gt;&gt; machine. Do you think that the cpuset / paffinity / hwloc only 
</span><br>
applies at
<br>
<span class="quotelev3">&gt; &gt;&gt; the machine level, at which time you need to employ a graph with 
</span><br>
carto?
<br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ken
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] 
</span><br>
On
<br>
<span class="quotelev3">&gt; &gt;&gt; Behalf Of nadia.derbey
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Sent: Monday, August 29, 2011 5:45 AM
</span><br>
<span class="quotelev3">&gt; &gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subject: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi list,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm hitting a limitation with paffinity/hwloc with cpu numbers &gt;= 64.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In opal/mca/paffinity/hwloc/paffinity_hwloc_module.c, module_set() is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the routine that sets the calling process affinity to the mask given 
</span><br>
as
<br>
<span class="quotelev3">&gt; &gt;&gt; parameter. Note that &quot;mask&quot; is a opal_paffinity_base_cpu_set_t (so we
</span><br>
<span class="quotelev3">&gt; &gt;&gt; allow the cpus to be potentially numbered up to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX - 1).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The problem with module_set() is that is loops over
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS bits to check if these bits are set 
</span><br>
in
<br>
<span class="quotelev3">&gt; &gt;&gt; the mask:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; 
</span><br>
++i)
<br>
<span class="quotelev3">&gt; &gt;&gt; {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
</span><br>
<span class="quotelev3">&gt; &gt;&gt;           hwloc_bitmap_set(set, i);
</span><br>
<span class="quotelev3">&gt; &gt;&gt;       }
</span><br>
<span class="quotelev3">&gt; &gt;&gt;   }
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Given &quot;mask&quot;'s type, I think module_set() should instead loop over
</span><br>
<span class="quotelev3">&gt; &gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX bits.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Note that module_set() uses a type for its internal mask that is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; coherent with OPAL_PAFFINITY_BITMASK_T_NUM_BITS (hwloc_bitmap_t).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So I'm wondering whether this is a known limitation I've never heard 
</span><br>
of
<br>
<span class="quotelev3">&gt; &gt;&gt; or an actual bug?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Nadia
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -----
</span><br>
<span class="quotelev3">&gt; &gt;&gt; No virus found in this message.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Version: 10.0.1392 / Virus Database: 1520/3864 - Release Date: 
</span><br>
08/28/11
<br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9714/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9713.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
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
