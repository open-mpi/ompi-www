<?
$subject_val = "Re: [OMPI devel] known limitation or bug in hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 29 12:59:56 2011" -->
<!-- isoreceived="20110829165956" -->
<!-- sent="Mon, 29 Aug 2011 18:59:49 +0200" -->
<!-- isosent="20110829165949" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] known limitation or bug in hwloc?" -->
<!-- id="4E5BC585.7040300_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="006701cc666b$5b6596e0$1230c4a0$_at_lloyd@wattsys.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-29 12:59:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9722.php">Eugene Loh: "[OMPI devel] descriptor limits -- FAQ item"</a>
<li><strong>Previous message:</strong> <a href="9720.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9720.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9725.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9725.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am playing with those aspects right now (it's planned for hwloc v1.4).
<br>
hwloc (even the 1.2 currently in OMPI) can already support topology
<br>
containing different machines, but there's no easy/automatic way to
<br>
agregate multiple machine topologies into a single global one. The
<br>
important thing to understand is that the cpuset/bitmap structure does
<br>
not span to multiple machines, it remains local (because it's tightly
<br>
coupled to binding processes/memory). So if a process running on A
<br>
considers a topology containing nodes A and B, only the cpusets of
<br>
objects corresponding to A are meaningful. Trying (on A) to bind on
<br>
cpusets from B objects would actually bind on A (if the core numbers are
<br>
similar). And the objects &quot;above&quot; the machine just have no cpusets at
<br>
all (because there's no way to bind across multiple machines).
<br>
<p>That said, my understanding is that this is not what this discussion is
<br>
about. Doesn't OMPI use one topology for each node so far? Nadia might
<br>
just be playing with large node (more than 64 cores?) which cause the
<br>
bit loop to end too early.
<br>
<p>Brice
<br>
<p><p><p><p>Le 29/08/2011 18:47, Kenneth Lloyd a &#233;crit :
<br>
<span class="quotelev1">&gt; This might get interesting.  In &quot;portable hardware locality&quot; (hwloc) as
</span><br>
<span class="quotelev1">&gt; originating at the native cpuset, and I see &quot;locality&quot; working at the
</span><br>
<span class="quotelev1">&gt; machine level (machines in my world can have up to 8 CPUs, for example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But from an ompi world view, the execution graph across myriad machines
</span><br>
<span class="quotelev1">&gt; might dictate a larger, yet still fine grained approach.  I haven't had a
</span><br>
<span class="quotelev1">&gt; chance to play with those aspects.  Has anyone else?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ken
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev1">&gt; Sent: Monday, August 29, 2011 8:21 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Actually, I'll eat those words. I was looking at the wrong place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes, that is a bug in hwloc. It needs to loop over CPU_MAX for those cases
</span><br>
<span class="quotelev1">&gt; where the bit mask extends over multiple words.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 29, 2011, at 7:16 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Actually, if you look closely at the definition of those two values,
</span><br>
<span class="quotelev1">&gt; you'll see that it really doesn't matter which one we loop over. The
</span><br>
<span class="quotelev1">&gt; NUM_BITS value defines the actual total number of bits in the mask. The
</span><br>
<span class="quotelev1">&gt; CPU_MAX is the total number of cpus we can support, which was set to a value
</span><br>
<span class="quotelev1">&gt; such that the two are equal (i.e., it's a power of two that happens to be an
</span><br>
<span class="quotelev1">&gt; integer multiple of 64).
</span><br>
<span class="quotelev2">&gt;&gt; I believe the original intent was to allow CPU_MAX to be independent of
</span><br>
<span class="quotelev1">&gt; address-alignment questions, so NUM_BITS could technically be greater than
</span><br>
<span class="quotelev1">&gt; CPU_MAX. Even if this happens, though, all that would do is cause the loop
</span><br>
<span class="quotelev1">&gt; to run across more bits than required.
</span><br>
<span class="quotelev2">&gt;&gt; So it doesn't introduce a limitation at all. In hindsight, we could
</span><br>
<span class="quotelev1">&gt; simplify things by eliminating one of those values and just putting a
</span><br>
<span class="quotelev1">&gt; requirement on the number that it be a multiple of 64 so it aligns with a
</span><br>
<span class="quotelev1">&gt; memory address.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 29, 2011, at 7:05 AM, Kenneth Lloyd wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nadia,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Interesting. I haven't tried pushing this to levels above 8 on a
</span><br>
<span class="quotelev1">&gt; particular
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machine. Do you think that the cpuset / paffinity / hwloc only applies at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the machine level, at which time you need to employ a graph with carto?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ken
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] On
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Behalf Of nadia.derbey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Monday, August 29, 2011 5:45 AM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi list,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm hitting a limitation with paffinity/hwloc with cpu numbers &gt;= 64.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In opal/mca/paffinity/hwloc/paffinity_hwloc_module.c, module_set() is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the routine that sets the calling process affinity to the mask given as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parameter. Note that &quot;mask&quot; is a opal_paffinity_base_cpu_set_t (so we
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow the cpus to be potentially numbered up to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX - 1).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem with module_set() is that is loops over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS bits to check if these bits are set in
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the mask:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; ++i)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           hwloc_bitmap_set(set, i);
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   }
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Given &quot;mask&quot;'s type, I think module_set() should instead loop over
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX bits.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note that module_set() uses a type for its internal mask that is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; coherent with OPAL_PAFFINITY_BITMASK_T_NUM_BITS (hwloc_bitmap_t).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I'm wondering whether this is a known limitation I've never heard of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or an actual bug?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nadia
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No virus found in this message.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Version: 10.0.1392 / Virus Database: 1520/3864 - Release Date: 08/28/11
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt; Version: 10.0.1392 / Virus Database: 1520/3865 - Release Date: 08/29/11
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
<li><strong>Next message:</strong> <a href="9722.php">Eugene Loh: "[OMPI devel] descriptor limits -- FAQ item"</a>
<li><strong>Previous message:</strong> <a href="9720.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9720.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9725.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Reply:</strong> <a href="9725.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
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
