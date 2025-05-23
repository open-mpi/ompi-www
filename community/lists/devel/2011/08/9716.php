<?
$subject_val = "Re: [OMPI devel] known limitation or bug in hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 12:04:37 2011" -->
<!-- isoreceived="20110829160437" -->
<!-- sent="Mon, 29 Aug 2011 12:04:29 -0400" -->
<!-- isosent="20110829160429" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] known limitation or bug in hwloc?" -->
<!-- id="426AB118-F6F1-4B90-B493-485793A1230F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="F41AAD8C-0602-4C3A-852D-CDE4055555AA_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 12:04:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9717.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9717.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9717.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or, if there's a specific problem in hwloc (i.e., hwloc proper -- not the component in OMPI), post to hwloc-devel_at_open-mpi.org.
<br>
<p>I *think* that hwloc handles CPU sets of any size.  I bumped the version of hwloc to 1.2.1 (the latest stable release) in both the trunk and v1.5.  v1.4 doesn't have hwloc.
<br>
<p><p>On Aug 29, 2011, at 11:57 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2011, at 8:35 AM, nadia.derbey_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; devel-bounces_at_[hidden] wrote on 08/29/2011 04:20:30 PM:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Date : 08/29/2011 04:26 PM 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Objet : Re: [OMPI devel] known limitation or bug in hwloc? 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Actually, I'll eat those words. I was looking at the wrong place.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Yes, that is a bug in hwloc. It needs to loop over CPU_MAX for those
</span><br>
<span class="quotelev3">&gt;&gt; &gt; cases where the bit mask extends over multiple words. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But I'm afraid the fix won't be trivial at all: hwloc in itself is coherent: it loops overs NUM_BITS, but it uses masks that are NUM_BITS wide (hwloc_bitmap_t set)... 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess I'm missing that - I just did a search and cannot find any reference to OPAL_PAFFINITY_BITMASK_T_NUM_BITS anywhere in paffinity/hwloc after the last change.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you point me to where you believe a problem exists? Or feel free to submit a patch to fix it :-)  We can push it upstream to the hwloc folks for their consideration.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards, 
</span><br>
<span class="quotelev2">&gt;&gt; Nadia
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Aug 29, 2011, at 7:16 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Actually, if you look closely at the definition of those two 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; values, you'll see that it really doesn't matter which one we loop 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; over. The NUM_BITS value defines the actual total number of bits in 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; the mask. The CPU_MAX is the total number of cpus we can support, 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; which was set to a value such that the two are equal (i.e., it's a 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; power of two that happens to be an integer multiple of 64).
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I believe the original intent was to allow CPU_MAX to be 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; independent of address-alignment questions, so NUM_BITS could 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; technically be greater than CPU_MAX. Even if this happens, though, 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; all that would do is cause the loop to run across more bits than required.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; So it doesn't introduce a limitation at all. In hindsight, we 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; could simplify things by eliminating one of those values and just 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; putting a requirement on the number that it be a multiple of 64 so 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it aligns with a memory address.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; On Aug 29, 2011, at 7:05 AM, Kenneth Lloyd wrote:
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Nadia,
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Interesting. I haven't tried pushing this to levels above 8 on a particular
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; machine. Do you think that the cpuset / paffinity / hwloc only applies at
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; the machine level, at which time you need to employ a graph with carto?
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Ken
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Behalf Of nadia.derbey
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Sent: Monday, August 29, 2011 5:45 AM
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Subject: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Hi list,
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; I'm hitting a limitation with paffinity/hwloc with cpu numbers &gt;= 64.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; In opal/mca/paffinity/hwloc/paffinity_hwloc_module.c, module_set() is
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; the routine that sets the calling process affinity to the mask given as
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; parameter. Note that &quot;mask&quot; is a opal_paffinity_base_cpu_set_t (so we
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; allow the cpus to be potentially numbered up to
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX - 1).
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; The problem with module_set() is that is loops over
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS bits to check if these bits are set in
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; the mask:
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; ++i)
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;       if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;           hwloc_bitmap_set(set, i);
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;       }
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt;   }
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Given &quot;mask&quot;'s type, I think module_set() should instead loop over
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX bits.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Note that module_set() uses a type for its internal mask that is
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; coherent with OPAL_PAFFINITY_BITMASK_T_NUM_BITS (hwloc_bitmap_t).
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; So I'm wondering whether this is a known limitation I've never heard of
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; or an actual bug?
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Nadia
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; -----
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; No virus found in this message.
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; Version: 10.0.1392 / Virus Database: 1520/3864 - Release Date: 08/28/11
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9717.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9715.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9717.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9717.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
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
