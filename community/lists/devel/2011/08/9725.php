<?
$subject_val = "Re: [OMPI devel] known limitation or bug in hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 01:59:27 2011" -->
<!-- isoreceived="20110830055927" -->
<!-- sent="Tue, 30 Aug 2011 07:58:34 +0200" -->
<!-- isosent="20110830055834" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] known limitation or bug in hwloc?" -->
<!-- id="OF8406215E.C1BEA5F7-ONC12578FC.001E1889-C12578FC.0020CBE1_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E5BC585.7040300_at_inria.fr" -->
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
<strong>Date:</strong> 2011-08-30 01:58:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9724.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9721.php">Brice Goglin: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
devel-bounces_at_[hidden] wrote on 08/29/2011 06:59:49 PM:
<br>
<p><span class="quotelev1">&gt; De : Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date : 08/29/2011 07:00 PM
</span><br>
<span class="quotelev1">&gt; Objet : Re: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev1">&gt; Envoy&#233; par : devel-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am playing with those aspects right now (it's planned for hwloc v1.4).
</span><br>
<span class="quotelev1">&gt; hwloc (even the 1.2 currently in OMPI) can already support topology
</span><br>
<span class="quotelev1">&gt; containing different machines,
</span><br>
<p>I guess this is what corresponds to the HWLOC_OBJ_SYSTEM topology object?
<br>
<p><span class="quotelev1">&gt; but there's no easy/automatic way to
</span><br>
<span class="quotelev1">&gt; agregate multiple machine topologies into a single global one. The
</span><br>
<span class="quotelev1">&gt; important thing to understand is that the cpuset/bitmap structure does
</span><br>
<span class="quotelev1">&gt; not span to multiple machines, it remains local (because it's tightly
</span><br>
<span class="quotelev1">&gt; coupled to binding processes/memory). So if a process running on A
</span><br>
<span class="quotelev1">&gt; considers a topology containing nodes A and B, only the cpusets of
</span><br>
<span class="quotelev1">&gt; objects corresponding to A are meaningful. Trying (on A) to bind on
</span><br>
<span class="quotelev1">&gt; cpusets from B objects would actually bind on A (if the core numbers are
</span><br>
<span class="quotelev1">&gt; similar). And the objects &quot;above&quot; the machine just have no cpusets at
</span><br>
<span class="quotelev1">&gt; all (because there's no way to bind across multiple machines).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That said, my understanding is that this is not what this discussion is
</span><br>
<span class="quotelev1">&gt; about. Doesn't OMPI use one topology for each node so far? Nadia might
</span><br>
<span class="quotelev1">&gt; just be playing with large node (more than 64 cores?) which cause the
</span><br>
<span class="quotelev1">&gt; bit loop to end too early.
</span><br>
<p>Exactly: Bull guys are doing some tests on Westmere-EX nodes: 4 sockets of 
<br>
10 cores each, with potentially HT enabled.
<br>
The problem is that the BIOS has numbered the cores in the following way 
<br>
(each pair x,y corresponds to the ids of a physical core):
<br>
<p>socket 0: 0,32 4,36  8,40 12,44 16,48 20,52 24,56 28,60 64,72 68,76
<br>
socket 0: 1,33 5,37  9,41 13,45 17,49 21,53 25,57 29,61 65,73 69,77
<br>
socket 2: 2,34 6,38 10,42 14,46 18,50 22,54 26,58 30,62 66,74 70,78
<br>
socket 3: 3,35 7,39 11,43 15,47 19,51 23,55 27,59 31,63 67,75 71,79
<br>
<p>I hit the issue with a rankfile as soon as I reached the following line:
<br>
<p>rank 8=my_host slot=p64
<br>
<p>Regards,
<br>
Nadia
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 29/08/2011 18:47, Kenneth Lloyd a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; This might get interesting.  In &quot;portable hardware locality&quot; (hwloc) 
</span><br>
as
<br>
<span class="quotelev2">&gt; &gt; originating at the native cpuset, and I see &quot;locality&quot; working at the
</span><br>
<span class="quotelev2">&gt; &gt; machine level (machines in my world can have up to 8 CPUs, for 
</span><br>
example).
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But from an ompi world view, the execution graph across myriad 
</span><br>
machines
<br>
<span class="quotelev2">&gt; &gt; might dictate a larger, yet still fine grained approach.  I haven't 
</span><br>
had a
<br>
<span class="quotelev2">&gt; &gt; chance to play with those aspects.  Has anyone else?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ken
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----Original Message-----
</span><br>
<span class="quotelev2">&gt; &gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] 
</span><br>
On
<br>
<span class="quotelev2">&gt; &gt; Behalf Of Ralph Castain
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Monday, August 29, 2011 8:21 AM
</span><br>
<span class="quotelev2">&gt; &gt; To: Open MPI Developers
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Actually, I'll eat those words. I was looking at the wrong place.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, that is a bug in hwloc. It needs to loop over CPU_MAX for those 
</span><br>
cases
<br>
<span class="quotelev2">&gt; &gt; where the bit mask extends over multiple words.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Aug 29, 2011, at 7:16 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Actually, if you look closely at the definition of those two values,
</span><br>
<span class="quotelev2">&gt; &gt; you'll see that it really doesn't matter which one we loop over. The
</span><br>
<span class="quotelev2">&gt; &gt; NUM_BITS value defines the actual total number of bits in the mask. 
</span><br>
The
<br>
<span class="quotelev2">&gt; &gt; CPU_MAX is the total number of cpus we can support, which was set to a 
</span><br>
value
<br>
<span class="quotelev2">&gt; &gt; such that the two are equal (i.e., it's a power of two that happens to 
</span><br>
be an
<br>
<span class="quotelev2">&gt; &gt; integer multiple of 64).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I believe the original intent was to allow CPU_MAX to be independent 
</span><br>
of
<br>
<span class="quotelev2">&gt; &gt; address-alignment questions, so NUM_BITS could technically be greater 
</span><br>
than
<br>
<span class="quotelev2">&gt; &gt; CPU_MAX. Even if this happens, though, all that would do is cause the 
</span><br>
loop
<br>
<span class="quotelev2">&gt; &gt; to run across more bits than required.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; So it doesn't introduce a limitation at all. In hindsight, we could
</span><br>
<span class="quotelev2">&gt; &gt; simplify things by eliminating one of those values and just putting a
</span><br>
<span class="quotelev2">&gt; &gt; requirement on the number that it be a multiple of 64 so it aligns 
</span><br>
with a
<br>
<span class="quotelev2">&gt; &gt; memory address.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Aug 29, 2011, at 7:05 AM, Kenneth Lloyd wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Nadia,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Interesting. I haven't tried pushing this to levels above 8 on a
</span><br>
<span class="quotelev2">&gt; &gt; particular
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; machine. Do you think that the cpuset / paffinity / hwloc only 
</span><br>
applies at
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the machine level, at which time you need to employ a graph with 
</span><br>
carto?
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ken
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -----Original Message-----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; From: devel-bounces_at_[hidden] [mailto:devel-bounces_at_[hidden]] 
</span><br>
On
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Behalf Of nadia.derbey
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Sent: Monday, August 29, 2011 5:45 AM
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; To: Open MPI Developers
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Subject: [OMPI devel] known limitation or bug in hwloc?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi list,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I'm hitting a limitation with paffinity/hwloc with cpu numbers &gt;= 
</span><br>
64.
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; In opal/mca/paffinity/hwloc/paffinity_hwloc_module.c, module_set() 
</span><br>
is
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the routine that sets the calling process affinity to the mask given 
</span><br>
as
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; parameter. Note that &quot;mask&quot; is a opal_paffinity_base_cpu_set_t (so 
</span><br>
we
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; allow the cpus to be potentially numbered up to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX - 1).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; The problem with module_set() is that is loops over
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS bits to check if these bits are 
</span><br>
set in
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; the mask:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for (i = 0; ((unsigned int) i) &lt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; 
</span><br>
++i)
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;           hwloc_bitmap_set(set, i);
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;       }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   }
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Given &quot;mask&quot;'s type, I think module_set() should instead loop over
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX bits.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Note that module_set() uses a type for its internal mask that is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; coherent with OPAL_PAFFINITY_BITMASK_T_NUM_BITS (hwloc_bitmap_t).
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So I'm wondering whether this is a known limitation I've never heard 
</span><br>
of
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt; or an actual bug?
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Regards,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Nadia
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; No virus found in this message.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Version: 10.0.1392 / Virus Database: 1520/3864 - Release Date: 
</span><br>
08/28/11
<br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; No virus found in this message.
</span><br>
<span class="quotelev2">&gt; &gt; Checked by AVG - www.avg.com
</span><br>
<span class="quotelev2">&gt; &gt; Version: 10.0.1392 / Virus Database: 1520/3865 - Release Date: 
</span><br>
08/29/11
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9725/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9726.php">Xin He: "Re: [OMPI devel] TIPC BTL code ready for review"</a>
<li><strong>Previous message:</strong> <a href="9724.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>In reply to:</strong> <a href="9721.php">Brice Goglin: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
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
