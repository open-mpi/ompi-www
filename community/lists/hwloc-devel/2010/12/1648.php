<?
$subject_val = "Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 04:22:54 2010" -->
<!-- isoreceived="20101201092254" -->
<!-- sent="Wed, 01 Dec 2010 10:22:48 +0100" -->
<!-- isosent="20101201092248" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor" -->
<!-- id="4CF613E8.7090707_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DFA9E2C8156D4E4C89FF64AB3C4F1999388B8F_at_cnbjexm03.asia.corp.platform.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 04:22:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1649.php">Brice Goglin: "Re: [hwloc-devel] &#180;&#240;&#184;&#180;: Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>Previous message:</strong> <a href="1647.php">Wei Lin: "[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>In reply to:</strong> <a href="1647.php">Wei Lin: "[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1650.php">Samuel Thibault: "Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Wei Lin,
<br>
<p>The x86 indeed needs regular updates to support latest processors. But
<br>
this x86 backend is mostly only useful if you're using an operating
<br>
system that does not export topology information. If you're using Linux,
<br>
a recent kernel should already tell hwloc everything you need, and the
<br>
x86 backend will not be used at all. Do you actually see some wrong
<br>
lstopo output on such machines? FWIW, we use hwloc on many Westmere-EP
<br>
and Nehalem-EX machines without problem, and we know SGI has been using
<br>
it on large UV machines too.
<br>
<p>Best regards,
<br>
Brice
<br>
<p><p><p>Le 01/12/2010 10:07, Wei Lin a &#233;crit :
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, hwloc-devel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      I cannot find the code branch from &quot;src/topology-x86.c &quot;which can
</span><br>
<span class="quotelev1">&gt; support for 32-bit APIC ID and CPUID leaf 0xb of Intel's new processors.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think current hwLoc cannot support for latest Intel CPU with
</span><br>
<span class="quotelev1">&gt; *x2APIC*.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Linux kernel 2.6.30 or following version already supports this
</span><br>
<span class="quotelev1">&gt; hardware feature
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and uses CPUID leaf 0xb to recognize the topology for more than 1024
</span><br>
<span class="quotelev1">&gt; logical processors in SGI's super computer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think hwloc could also support this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The following docs from Intel give details about x2APIC:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.intel.com/Assets/PDF/appnote/241618.pdf">http://www.intel.com/Assets/PDF/appnote/241618.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.intel.com/Assets/pdf/manual/318148.pdf">http://www.intel.com/Assets/pdf/manual/318148.pdf</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    or &lt;&lt;Intel&#174; 64 Architecture Processor Topology Enumeration&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wei Lin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010-12-1
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt;   
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1648/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1649.php">Brice Goglin: "Re: [hwloc-devel] &#180;&#240;&#184;&#180;: Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>Previous message:</strong> <a href="1647.php">Wei Lin: "[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>In reply to:</strong> <a href="1647.php">Wei Lin: "[hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1650.php">Samuel Thibault: "Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
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
