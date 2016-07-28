<?
$subject_val = "Re: [OMPI devel] known limitation or bug in hwloc?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 30 01:57:25 2011" -->
<!-- isoreceived="20110830055725" -->
<!-- sent="Tue, 30 Aug 2011 07:56:31 +0200" -->
<!-- isosent="20110830055631" -->
<!-- name="nadia.derbey_at_[hidden]" -->
<!-- email="nadia.derbey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] known limitation or bug in hwloc?" -->
<!-- id="OFD208A0AC.A5197DC2-ONC12578FC.00206495-C12578FC.00209C03_at_bull.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D23EBEC2-5146-451C-A0FA-C066E7660D27_at_open-mpi.org" -->
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
<strong>Date:</strong> 2011-08-30 01:56:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9725.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9723.php">Eugene Loh: "[OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="9719.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9720.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot Ralph!
<br>
<p>Regards,
<br>
<p><pre>
--
Nadia Derbey
Phone: +33 (0)4 76 29 77 62
devel-bounces_at_[hidden] wrote on 08/29/2011 06:12:13 PM:
&gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt;
&gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt;
&gt; Date : 08/29/2011 06:12 PM
&gt; Objet : Re: [OMPI devel] known limitation or bug in hwloc?
&gt; Envoy&#233; par : devel-bounces_at_[hidden]
&gt; 
&gt; On Aug 29, 2011, at 10:08 AM, nadia.derbey_at_[hidden] wrote:
&gt; 
&gt; devel-bounces_at_[hidden] wrote on 08/29/2011 05:57:59 PM:
&gt; 
&gt; &gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt; 
&gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
&gt; &gt; Date : 08/29/2011 05:58 PM 
&gt; &gt; Objet : Re: [OMPI devel] known limitation or bug in hwloc? 
&gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
&gt; &gt; 
&gt; &gt; On Aug 29, 2011, at 8:35 AM, nadia.derbey_at_[hidden] wrote: 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; devel-bounces_at_[hidden] wrote on 08/29/2011 04:20:30 PM:
&gt; &gt; 
&gt; &gt; &gt; De : Ralph Castain &lt;rhc_at_[hidden]&gt; 
&gt; &gt; &gt; A : Open MPI Developers &lt;devel_at_[hidden]&gt; 
&gt; &gt; &gt; Date : 08/29/2011 04:26 PM 
&gt; &gt; &gt; Objet : Re: [OMPI devel] known limitation or bug in hwloc? 
&gt; &gt; &gt; Envoy&#233; par : devel-bounces_at_[hidden] 
&gt; &gt; &gt; 
&gt; &gt; &gt; Actually, I'll eat those words. I was looking at the wrong place.
&gt; &gt; &gt; 
&gt; &gt; &gt; Yes, that is a bug in hwloc. It needs to loop over CPU_MAX for those
&gt; &gt; &gt; cases where the bit mask extends over multiple words. 
&gt; &gt; 
&gt; &gt; But I'm afraid the fix won't be trivial at all: hwloc in itself is 
&gt; &gt; coherent: it loops overs NUM_BITS, but it uses masks that are 
&gt; &gt; NUM_BITS wide (hwloc_bitmap_t set)... 
&gt; &gt; 
&gt; &gt; I guess I'm missing that - I just did a search and cannot find any 
&gt; &gt; reference to OPAL_PAFFINITY_BITMASK_T_NUM_BITS anywhere in 
&gt; &gt; paffinity/hwloc after the last change. 
&gt; &gt; 
&gt; &gt; Can you point me to where you believe a problem exists? Or feel free
&gt; &gt; to submit a patch to fix it :-)  We can push it upstream to the 
&gt; &gt; hwloc folks for their consideration. 
&gt; 
&gt; file: opal/mca/paffinity/hwloc/paffinity_hwloc_module.c 
&gt; routine: module_set() 
&gt; 
&gt; You hae a reference to OPAL_PAFFINITY_BITMASK_T_NUM_BITS both in the
&gt; trunk and in v1.5 
&gt; 
&gt; But may be this issue has been fixed already? 
&gt; 
&gt; I fixed it in the trunk (r25102) per this thread and filed a CMR to 
&gt; move it to v1.5. You should be copied on the CMR ticket.
&gt; 
&gt; 
&gt; Regards, 
&gt; Nadia 
&gt; 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; Regards, 
&gt; &gt; Nadia
&gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt; On Aug 29, 2011, at 7:16 AM, Ralph Castain wrote:
&gt; &gt; &gt; 
&gt; &gt; &gt; &gt; Actually, if you look closely at the definition of those two 
&gt; &gt; &gt; values, you'll see that it really doesn't matter which one we loop 
&gt; &gt; &gt; over. The NUM_BITS value defines the actual total number of bits in 
&gt; &gt; &gt; the mask. The CPU_MAX is the total number of cpus we can support, 
&gt; &gt; &gt; which was set to a value such that the two are equal (i.e., it's a 
&gt; &gt; &gt; power of two that happens to be an integer multiple of 64).
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; I believe the original intent was to allow CPU_MAX to be 
&gt; &gt; &gt; independent of address-alignment questions, so NUM_BITS could 
&gt; &gt; &gt; technically be greater than CPU_MAX. Even if this happens, though, 
&gt; &gt; &gt; all that would do is cause the loop to run across more bits 
thanrequired.
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; So it doesn't introduce a limitation at all. In hindsight, we 
&gt; &gt; &gt; could simplify things by eliminating one of those values and just 
&gt; &gt; &gt; putting a requirement on the number that it be a multiple of 64 so 
&gt; &gt; &gt; it aligns with a memory address.
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt; On Aug 29, 2011, at 7:05 AM, Kenneth Lloyd wrote:
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; &gt;&gt; Nadia,
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; Interesting. I haven't tried pushing this to levels above 8 on 
&gt; &gt; a particular
&gt; &gt; &gt; &gt;&gt; machine. Do you think that the cpuset / paffinity / hwloc 
&gt; only applies at
&gt; &gt; &gt; &gt;&gt; the machine level, at which time you need to employ a graph with 
carto?
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; Regards,
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; Ken
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; -----Original Message-----
&gt; &gt; &gt; &gt;&gt; From: devel-bounces_at_[hidden] [
mailto:devel-bounces_at_[hidden]] On
&gt; &gt; &gt; &gt;&gt; Behalf Of nadia.derbey
&gt; &gt; &gt; &gt;&gt; Sent: Monday, August 29, 2011 5:45 AM
&gt; &gt; &gt; &gt;&gt; To: Open MPI Developers
&gt; &gt; &gt; &gt;&gt; Subject: [OMPI devel] known limitation or bug in hwloc?
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; Hi list,
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; I'm hitting a limitation with paffinity/hwloc with cpu numbers &gt;= 
64.
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; In opal/mca/paffinity/hwloc/paffinity_hwloc_module.c, 
module_set() is
&gt; &gt; &gt; &gt;&gt; the routine that sets the calling process affinity to the mask 
given as
&gt; &gt; &gt; &gt;&gt; parameter. Note that &quot;mask&quot; is a opal_paffinity_base_cpu_set_t 
(so we
&gt; &gt; &gt; &gt;&gt; allow the cpus to be potentially numbered up to
&gt; &gt; &gt; &gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX - 1).
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; The problem with module_set() is that is loops over
&gt; &gt; &gt; &gt;&gt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS bits to check if these bitsare 
set in
&gt; &gt; &gt; &gt;&gt; the mask:
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; for (i = 0; ((unsigned int) i) &lt; 
&gt; OPAL_PAFFINITY_BITMASK_T_NUM_BITS; ++i)
&gt; &gt; &gt; &gt;&gt; {
&gt; &gt; &gt; &gt;&gt;       if (OPAL_PAFFINITY_CPU_ISSET(i, mask)) {
&gt; &gt; &gt; &gt;&gt;           hwloc_bitmap_set(set, i);
&gt; &gt; &gt; &gt;&gt;       }
&gt; &gt; &gt; &gt;&gt;   }
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; Given &quot;mask&quot;'s type, I think module_set() should instead loop 
over
&gt; &gt; &gt; &gt;&gt; OPAL_PAFFINITY_BITMASK_CPU_MAX bits.
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; Note that module_set() uses a type for its internal mask that is
&gt; &gt; &gt; &gt;&gt; coherent with OPAL_PAFFINITY_BITMASK_T_NUM_BITS (hwloc_bitmap_t).
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; So I'm wondering whether this is a known limitation I've never 
heard of
&gt; &gt; &gt; &gt;&gt; or an actual bug?
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; Regards,
&gt; &gt; &gt; &gt;&gt; Nadia
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; _______________________________________________
&gt; &gt; &gt; &gt;&gt; devel mailing list
&gt; &gt; &gt; &gt;&gt; devel_at_[hidden]
&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; &gt; &gt; &gt;&gt; -----
&gt; &gt; &gt; &gt;&gt; No virus found in this message.
&gt; &gt; &gt; &gt;&gt; Checked by AVG - www.avg.com
&gt; &gt; &gt; &gt;&gt; Version: 10.0.1392 / Virus Database: 1520/3864 - Release Date: 
08/28/11
&gt; &gt; &gt; &gt;&gt; 
&gt; &gt; &gt; &gt;&gt; _______________________________________________
&gt; &gt; &gt; &gt;&gt; devel mailing list
&gt; &gt; &gt; &gt;&gt; devel_at_[hidden]
&gt; &gt; &gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; &gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt; 
&gt; &gt; &gt; _______________________________________________
&gt; &gt; &gt; devel mailing list
&gt; &gt; &gt; devel_at_[hidden]
&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; &gt; _______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> 
&gt; &gt; _______________________________________________
&gt; &gt; devel mailing list
&gt; &gt; devel_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-9724/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9725.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<li><strong>Previous message:</strong> <a href="9723.php">Eugene Loh: "[OMPI devel] OMPI_MCA_opal_set_max_sys_limits"</a>
<li><strong>In reply to:</strong> <a href="9719.php">Ralph Castain: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9720.php">Kenneth Lloyd: "Re: [OMPI devel] known limitation or bug in hwloc?"</a>
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
