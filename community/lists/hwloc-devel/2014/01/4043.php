<?
$subject_val = "Re: [hwloc-devel] Attribute request";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 29 04:12:41 2014" -->
<!-- isoreceived="20140129091241" -->
<!-- sent="Wed, 29 Jan 2014 10:12:38 +0100" -->
<!-- isosent="20140129091238" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Attribute request" -->
<!-- id="52E8C606.3060000_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="52E6E738.2090003_at_inria.fr" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-29 04:12:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4042.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4041.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4046.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Reply:</strong> <a href="4046.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Assuming people will confirm that ARM information isn't so simple, I
<br>
wonder where it's better to put architecture specific fields. With the
<br>
proposed solution, Intel and ARM would be different:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Architecture=x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUVendor=GenuineIntel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUModelNumber=45
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUFamilyNumber=6
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Architecture=armv7l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUVendor=cardhu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUModel=ARMv7 Processor rev 9 (v7l)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUImplementer=0x41
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUArchitecture=7
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUVariant=0x2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUPart=0xc09
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPURevision=9
<br>
<p>We could also merge those arch-specific into a single generic one:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Architecture=x86_64
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUVendor=GenuineIntel
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUModelNumber=family=6;model=45
<br>
and
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Architecture=armv7l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUVendor=cardhu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;CPUModel=ARMv7 Processor rev 9 (v7l)
<br>
&nbsp;&nbsp;&nbsp;
<br>
CPUModelNumber=implementer=0x41;architecture=7;variant=0x2;part=0xc09;revision=9
<br>
<p>The drawback is that you'd have to parse CPUModelNumber to extract
<br>
family and model.
<br>
<p>I am not sure which one is best.
<br>
<p>Brice
<br>
<p><p><p><p><p>Le 28/01/2014 00:09, Brice Goglin a &#233;crit :
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I have some code that seems to work. Here's what it reports below.
</span><br>
<span class="quotelev1">&gt; Does that look ok to you?
</span><br>
<span class="quotelev1">&gt; I had to modify quite a lot of things to make the parsing of
</span><br>
<span class="quotelev1">&gt; /proc/cpuinfo more robust (the code is basically arch-specific now),
</span><br>
<span class="quotelev1">&gt; so I am not sure we'll be able to backport this to OMPI.
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; * Sandy-Bridge Xeon E5 (Stampede)
</span><br>
<span class="quotelev1">&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev1">&gt; CPUModel=Intel(R) Xeon(R) CPU E5-2680 0 @ 2.70GHz
</span><br>
<span class="quotelev1">&gt; CPUModelNumber=45
</span><br>
<span class="quotelev1">&gt; CPUFamilyNumber=6
</span><br>
<span class="quotelev1">&gt; * Old Nehalem-EX
</span><br>
<span class="quotelev1">&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev1">&gt; CPUModel=Intel(R) Xeon(R) CPU           E7540  @ 2.00GHz
</span><br>
<span class="quotelev1">&gt; CPUModelNumber=46
</span><br>
<span class="quotelev1">&gt; CPUFamilyNumber=6
</span><br>
<span class="quotelev1">&gt; * Itanium
</span><br>
<span class="quotelev1">&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev1">&gt; CPUModel=Dual-Core Intel(R) Itanium(R) Processor 9140N
</span><br>
<span class="quotelev1">&gt; CPUModelNumber=1
</span><br>
<span class="quotelev1">&gt; CPUFamilyNumber=32
</span><br>
<span class="quotelev1">&gt; * AMD
</span><br>
<span class="quotelev1">&gt; CPUVendor=AuthenticAMD
</span><br>
<span class="quotelev1">&gt; CPUModel=Dual Core AMD Opteron(tm) Processor 865
</span><br>
<span class="quotelev1">&gt; CPUModelNumber=33
</span><br>
<span class="quotelev1">&gt; CPUFamilyNumber=15
</span><br>
<span class="quotelev1">&gt; * MIC (Stampede)
</span><br>
<span class="quotelev1">&gt; CPUVendor=GenuineIntel
</span><br>
<span class="quotelev1">&gt; CPUModel=0b/01
</span><br>
<span class="quotelev1">&gt; CPUModelNumber=1
</span><br>
<span class="quotelev1">&gt; CPUFamilyNumber=11
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 23/01/2014 19:50, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; That would be perfect! Thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 23, 2014, at 10:27 AM, Brice Goglin &lt;Brice.Goglin_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Should be easy on Linux, sure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The model name is already known as CPUModel in hwloc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We should likely add CPUVendor (would be GenuineIntel or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; AuthenticAMD), CPUFamily (or CPUFamilyNumber if there's a name for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these families?) and CPUModelNumber ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brice
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 23/01/2014 19:09, Ralph Castain a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi folks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Looking at the current topology info, I see you capture the model
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; name for the socket, but not a couple of other key things Intel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; could use:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; cpu family      : 6
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; model           : 44
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; model name      : Intel(R) Xeon(R) CPU           E5645  @ 2.40GHz
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Both the cpu family and model are important to us - any issue with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; adding them to the &quot;infos&quot; array?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc-devel_at_[hidden] &lt;mailto:hwloc-devel_at_[hidden]&gt;
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
<span class="quotelev1">&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-4043/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4044.php">Brice Goglin: "Re: [hwloc-devel] hwloc with Xen system support - v2"</a>
<li><strong>Previous message:</strong> <a href="4042.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>In reply to:</strong> <a href="4041.php">Brice Goglin: "Re: [hwloc-devel] Attribute request"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4046.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
<li><strong>Reply:</strong> <a href="4046.php">Ralph Castain: "Re: [hwloc-devel] Attribute request"</a>
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
