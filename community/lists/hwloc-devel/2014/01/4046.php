<?
$subject_val = "Re: [hwloc-devel] Attribute request";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 11:23:15 2014" -->
<!-- isoreceived="20140129162315" -->
<!-- sent="Wed, 29 Jan 2014 08:22:59 -0800" -->
<!-- isosent="20140129162259" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute request" -->
<!-- id="FFE0B27D-7135-4FEF-A541-AA302F45356C_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="52E8C606.3060000_at_inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Attribute request<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 11:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4047.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4045.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4042.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'd prefer your first option - it's easy enough to check the info objects for existence of a particular attribute.
<br>
<p>On Jan 29, 2014, at 1:12 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Assuming people will confirm that ARM information isn't so simple, I wonder where it's better to put architecture specific fields. With the proposed solution, Intel and ARM would be different:
</span><br>
<span class="quotelev1">&gt;     Architecture=x86_64
</span><br>
<span class="quotelev1">&gt;     CPUVendor=GenuineIntel
</span><br>
<span class="quotelev1">&gt;     CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
</span><br>
<span class="quotelev1">&gt;     CPUModelNumber=45
</span><br>
<span class="quotelev1">&gt;     CPUFamilyNumber=6
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;     Architecture=armv7l
</span><br>
<span class="quotelev1">&gt;     CPUVendor=cardhu
</span><br>
<span class="quotelev1">&gt;     CPUModel=ARMv7 Processor rev 9 (v7l)
</span><br>
<span class="quotelev1">&gt;     CPUImplementer=0x41
</span><br>
<span class="quotelev1">&gt;     CPUArchitecture=7
</span><br>
<span class="quotelev1">&gt;     CPUVariant=0x2
</span><br>
<span class="quotelev1">&gt;     CPUPart=0xc09
</span><br>
<span class="quotelev1">&gt;     CPURevision=9 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We could also merge those arch-specific into a single generic one:
</span><br>
<span class="quotelev1">&gt;     Architecture=x86_64
</span><br>
<span class="quotelev1">&gt;     CPUVendor=GenuineIntel
</span><br>
<span class="quotelev1">&gt;     CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
</span><br>
<span class="quotelev1">&gt;     CPUModelNumber=family=6;model=45
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;     Architecture=armv7l
</span><br>
<span class="quotelev1">&gt;     CPUVendor=cardhu
</span><br>
<span class="quotelev1">&gt;     CPUModel=ARMv7 Processor rev 9 (v7l)
</span><br>
<span class="quotelev1">&gt;     CPUModelNumber=implementer=0x41;architecture=7;variant=0x2;part=0xc09;revision=9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The drawback is that you'd have to parse CPUModelNumber to extract family and model.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not sure which one is best.
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le 28/01/2014 00:09, Brice Goglin a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt; I have some code that seems to work. Here's what it reports below. Does that look ok to you?
</span><br>
<span class="quotelev2">&gt;&gt; I had to modify quite a lot of things to make the parsing of /proc/cpuinfo more robust (the code is basically arch-specific now), so I am not sure we'll be able to backport this to OMPI.
</span><br>
<span class="quotelev2">&gt;&gt; Brice
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * Sandy-Bridge Xeon E5 (Stampede)
</span><br>
<span class="quotelev2">&gt;&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
</span><br>
<span class="quotelev2">&gt;&gt; CPUModelNumber=45
</span><br>
<span class="quotelev2">&gt;&gt; CPUFamilyNumber=6
</span><br>
<span class="quotelev2">&gt;&gt; * Old Nehalem-EX
</span><br>
<span class="quotelev2">&gt;&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=Intel(R) Xeon(R) CPU           E7540  @ 2.00GHz
</span><br>
<span class="quotelev2">&gt;&gt; CPUModelNumber=46
</span><br>
<span class="quotelev2">&gt;&gt; CPUFamilyNumber=6
</span><br>
<span class="quotelev2">&gt;&gt; * Itanium
</span><br>
<span class="quotelev2">&gt;&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=Dual-Core Intel(R) Itanium(R) Processor 9140N
</span><br>
<span class="quotelev2">&gt;&gt; CPUModelNumber=1
</span><br>
<span class="quotelev2">&gt;&gt; CPUFamilyNumber=32
</span><br>
<span class="quotelev2">&gt;&gt; * AMD
</span><br>
<span class="quotelev2">&gt;&gt; CPUVendor=AuthenticAMD
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=Dual Core AMD Opteron(tm) Processor 865
</span><br>
<span class="quotelev2">&gt;&gt; CPUModelNumber=33
</span><br>
<span class="quotelev2">&gt;&gt; CPUFamilyNumber=15
</span><br>
<span class="quotelev2">&gt;&gt; * MIC (Stampede)
</span><br>
<span class="quotelev2">&gt;&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev2">&gt;&gt; CPUModel=0b/01
</span><br>
<span class="quotelev2">&gt;&gt; CPUModelNumber=1
</span><br>
<span class="quotelev2">&gt;&gt; CPUFamilyNumber=11
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 23/01/2014 19:50, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That would be perfect! Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 23, 2014, at 10:27 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Should be easy on Linux, sure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The model name is already known as CPUModel in hwloc.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; We should likely add CPUVendor (would be GenuineIntel or AuthenticAMD), CPUFamily (or CPUFamilyNumber if there's a name for these families?) and CPUModelNumber ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 23/01/2014 19:09, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Looking at the current topology info, I see you capture the model name for the socket, but not a couple of other key things Intel could use:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model           : 44
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; model name      : Intel(R) Xeon(R) CPU           E5645  @ 2.40GHz
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Both the cpu family and model are important to us - any issue with adding them to the &quot;infos&quot; array?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4046/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4047.php">Andrew Cooper: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4045.php">Samuel Thibault: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>In reply to:</strong> <a href="4043.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4042.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
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
