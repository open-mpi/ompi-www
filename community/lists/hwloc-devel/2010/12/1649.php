<?
$subject_val = "Re: [hwloc-devel] &#180;&#240;&#184;&#180;: Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  1 05:17:48 2010" -->
<!-- isoreceived="20101201101748" -->
<!-- sent="Wed, 01 Dec 2010 11:17:41 +0100" -->
<!-- isosent="20101201101741" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] &amp;#180;&amp;#240;&amp;#184;&amp;#180;: Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor" -->
<!-- id="4CF620C5.9020204_at_inria.fr" -->
<!-- charset="GB2312" -->
<!-- inreplyto="DFA9E2C8156D4E4C89FF64AB3C4F1999388B9B_at_cnbjexm03.asia.corp.platform.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] &#180;&#240;&#184;&#180;: Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-01 05:17:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1650.php">Samuel Thibault: "Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>Previous message:</strong> <a href="1648.php">Brice Goglin: "Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, good to know.
<br>
<p>The working flow is basically:
<br>
* src/topology.c initializes some stuff
<br>
* it calls the OS-specific lookup function, something like look_linux()
<br>
for instance
<br>
+ look_linux() in src/topology-linux.c does most of the job (by reading
<br>
/sys and /proc files)
<br>
+ for some OS such as freebsd, look_freebsd() will actually call
<br>
look_x86() to gather cpuid information on x86 machines because the OS
<br>
doesn't export much hardware info to user-space (I just committed a
<br>
comment to the topology-x86.c header to make this clear)
<br>
* in the future, the core will also call a libpci backend to add some
<br>
PCI devices to the tree
<br>
* at this point, objects are added to the tree but most links between
<br>
children/sibling/cousins/parents are not setup yet
<br>
* we go back to the core, filter some useless objects, setup all links,
<br>
cpusets and nodesets
<br>
<p>Brice
<br>
<p><p><p>Le 01/12/2010 10:38, Wei Lin a &#168;&#166;crit :
<br>
<p><span class="quotelev1">&gt; Thanks for your effort and reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not see any wrong output, the confusion is just from the code
</span><br>
<span class="quotelev1">&gt; reading of &#161;&#176;src/topology-x86.c&#161;&#177;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will trace hwloc to understand its working flow in more detail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks very much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wei Lin
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *&#183;&#162;&#188;&#254;&#200;&#203;:* Brice Goglin [mailto:Brice.Goglin_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *&#183;&#162;&#203;&#205;&#202;&#177;&#188;&#228;:* 2010&#196;&#234;12&#212;&#194;1&#200;&#213; 17:24
</span><br>
<span class="quotelev1">&gt; *&#202;&#213;&#188;&#254;&#200;&#203;:* Sun Yi
</span><br>
<span class="quotelev1">&gt; *&#179;&#173;&#203;&#205;:* Wei Lin
</span><br>
<span class="quotelev1">&gt; *&#214;&#247;&#204;&#226;:* Fwd: Re: [hwloc-devel] Intel extended topology enumeration in
</span><br>
<span class="quotelev1">&gt; x2APIC-supported processor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, I forgot to CC your colleague Sun Yi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------- Message original --------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Sujet: ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Re: [hwloc-devel] Intel extended topology enumeration in
</span><br>
<span class="quotelev1">&gt; x2APIC-supported processor
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Date : ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wed, 01 Dec 2010 10:22:48 +0100
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *De : ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; &lt;mailto:Brice.Goglin_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *R&#168;&#166;pondre &#168;&#164; : ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *Pour : ***
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hardware locality development list &lt;hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello Wei Lin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The x86 indeed needs regular updates to support latest processors. But
</span><br>
<span class="quotelev1">&gt; this x86 backend is mostly only useful if you're using an operating
</span><br>
<span class="quotelev1">&gt; system that does not export topology information. If you're using
</span><br>
<span class="quotelev1">&gt; Linux, a recent kernel should already tell hwloc everything you need,
</span><br>
<span class="quotelev1">&gt; and the x86 backend will not be used at all. Do you actually see some
</span><br>
<span class="quotelev1">&gt; wrong lstopo output on such machines? FWIW, we use hwloc on many
</span><br>
<span class="quotelev1">&gt; Westmere-EP and Nehalem-EX machines without problem, and we know SGI
</span><br>
<span class="quotelev1">&gt; has been using it on large UV machines too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 01/12/2010 10:07, Wei Lin a &#168;&#166;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi, hwloc-devel
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I cannot find the code branch from &#161;&#176;src/topology-x86.c &#161;&#176;which can
</span><br>
<span class="quotelev1">&gt; support for 32-bit APIC ID and CPUID leaf 0xb of Intel&#161;&#175;s new processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So I think current hwLoc cannot support for latest Intel CPU with
</span><br>
<span class="quotelev1">&gt; *x2APIC*.
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
<span class="quotelev1">&gt; logical processors in SGI&#161;&#175;s super computer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think hwloc could also support this.
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
<span class="quotelev1">&gt; or &lt;&lt;Intel? 64 Architecture Processor Topology Enumeration&gt;&gt;
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden] &lt;mailto:hwloc-devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1649/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1650.php">Samuel Thibault: "Re: [hwloc-devel] Intel extended topology enumeration in x2APIC-supported processor"</a>
<li><strong>Previous message:</strong> <a href="1648.php">Brice Goglin: "Re: [hwloc-devel] Intel extended topology enumeration in	x2APIC-supported processor"</a>
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
