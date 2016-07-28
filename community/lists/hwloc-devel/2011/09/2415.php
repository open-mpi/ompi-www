<?
$subject_val = "Re: [hwloc-devel] CPU Model and type";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 14 05:54:38 2011" -->
<!-- isoreceived="20110914095438" -->
<!-- sent="Wed, 14 Sep 2011 17:54:23 +0800" -->
<!-- isosent="20110914095423" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] CPU Model and type" -->
<!-- id="4E7079CF.5050307_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4E6F6365.3050902_at_oracle.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] CPU Model and type<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-14 05:54:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2416.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2414.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3789)"</a>
<li><strong>In reply to:</strong> <a href="2413.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2416.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2416.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 13/09/2011 22:06, TERRY DONTJE a &#233;crit :
<br>
<span class="quotelev1">&gt; On 9/13/2011 9:54 AM, Brice Goglin wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Le 13/09/2011 21:51, TERRY DONTJE a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both type and model are character strings.  An example of what I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; currently store in the sysinfo structures are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; type = &quot;SPARC&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model = &quot;SPARC64_VI&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Other values for model are &quot;T1&quot;, &quot;T2&quot;, &quot;SPARC64_VII&quot;...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What about Solaris on non-sparc machines ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Looks like the type is an empty string and model is &quot;i86pc&quot; in one case.
</span><br>
<span class="quotelev1">&gt; These are basically values that come from calls to solairs sysinfo.
</span><br>
<p>Type doesn't seem that helpful then. We already have the architecture
<br>
(taken from uname) in the machine attribute.
<br>
<p>I think you should just put model in the CPUModel info attribute. I wil
<br>
do the same for Linux and add the vendor to &quot;CPUVendor&quot; when available,
<br>
we'll get something like:
<br>
<p>CPUVendor=GenuineIntel
<br>
CPUModel=Intel(R) Core(TM) i7 CPU       M 620  @ 2.67GHz
<br>
or
<br>
CPUVendor=AuthenticAMD
<br>
CPUModel=AMD Opteron(tm) Processor 6174
<br>
or
<br>
CPUModel=Alpha EV68CB
<br>
or
<br>
CPUModel=POWER7 (architected), altivec supported
<br>
or
<br>
CPUModel=Cell Broadband Engine, altivec supported
<br>
or
<br>
CPUModel=ARMv7 Processor rev 1 (v71)
<br>
<p>Brice
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2415/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2416.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Previous message:</strong> <a href="2414.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.4a1r3789)"</a>
<li><strong>In reply to:</strong> <a href="2413.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2416.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
<li><strong>Reply:</strong> <a href="2416.php">TERRY DONTJE: "Re: [hwloc-devel] CPU Model and type"</a>
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
