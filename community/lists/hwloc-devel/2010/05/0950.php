<?
$subject_val = "Re: [hwloc-devel] Windows 7 problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  3 18:09:23 2010" -->
<!-- isoreceived="20100503220923" -->
<!-- sent="Mon, 3 May 2010 17:09:17 -0500" -->
<!-- isosent="20100503220917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Windows 7 problems" -->
<!-- id="E84E93A3-0A88-4853-9804-048766F2A1E2_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="A961C211-A523-4081-AB79-6086D426E081_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Windows 7 problems<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-03 18:09:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0951.php">Brice Goglin: "Re: [hwloc-devel] Windows 7 problems"</a>
<li><strong>Previous message:</strong> <a href="0949.php">Jeff Squyres: "Re: [hwloc-devel] Windows 7 problems"</a>
<li><strong>In reply to:</strong> <a href="0949.php">Jeff Squyres: "Re: [hwloc-devel] Windows 7 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0951.php">Brice Goglin: "Re: [hwloc-devel] Windows 7 problems"</a>
<li><strong>Reply:</strong> <a href="0951.php">Brice Goglin: "Re: [hwloc-devel] Windows 7 problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is this helpful?
<br>
<p>&nbsp;&nbsp;&nbsp;<a href="http://msdn.microsoft.com/en-us/library/ms724379(VS.85">http://msdn.microsoft.com/en-us/library/ms724379(VS.85</a>).aspx
<br>
<p>You can use that to enumerate the ACPI firmware tables directly.  Supposedly, you should be able to discover topology information.  Not very user friendly, unfortunately.
<br>
<p><p>On May 3, 2010, at 4:52 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; He says:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; GlobalMemoryStatusEx
</span><br>
<span class="quotelev1">&gt; <a href="http://msdn.microsoft.com/en-us/library/aa366589(v=VS.85">http://msdn.microsoft.com/en-us/library/aa366589(v=VS.85</a>).aspx
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But that doesn't give numa node information.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; He's looking to see if he can find another function that gives numa info, but it may take a little time (the windows memory subsystem guy is not available today to ask).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess there's 2 options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Take the total amount of memory and divide by the number of numa nodes.  This is *probably* accurate on most machines today, but there's probably some machines where it isn't (and/or won't be in the future).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. Indicate visually that it's the amount of memory available -- not the total memory.  (do we document this somewhere, btw?  I admit to not having reading the windows docs...?)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 3, 2010, at 4:22 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; (I'm asking my local Microsoft contact....)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On May 3, 2010, at 4:15 PM, Samuel Thibault wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jeff Squyres, le Mon 03 May 2010 15:57:37 -0500, a &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Running lstopo on w7 (64 bit):
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -----
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; C:\Temp\hwloc&gt;lstopo
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Note: GetLogicalProcessorInformationEx was never tested yet!
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; -----
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ooops, it seems I have forgotten to remove it. Now done.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Plus, the memory it reported was the currently free memory, not total memory.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yes. I haven't found a win32 function that provides the total memory.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Samuel
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="0951.php">Brice Goglin: "Re: [hwloc-devel] Windows 7 problems"</a>
<li><strong>Previous message:</strong> <a href="0949.php">Jeff Squyres: "Re: [hwloc-devel] Windows 7 problems"</a>
<li><strong>In reply to:</strong> <a href="0949.php">Jeff Squyres: "Re: [hwloc-devel] Windows 7 problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0951.php">Brice Goglin: "Re: [hwloc-devel] Windows 7 problems"</a>
<li><strong>Reply:</strong> <a href="0951.php">Brice Goglin: "Re: [hwloc-devel] Windows 7 problems"</a>
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
