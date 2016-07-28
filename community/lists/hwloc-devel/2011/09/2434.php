<?
$subject_val = "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 15:59:40 2011" -->
<!-- isoreceived="20110922195940" -->
<!-- sent="Thu, 22 Sep 2011 21:59:33 +0200" -->
<!-- isosent="20110922195933" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf" -->
<!-- id="4E7B93A5.9040804_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7C88F882-7253-4BC9-92CF-A87BFE26DF05_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 15:59:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2435.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Previous message:</strong> <a href="2433.php">Jeff Squyres: "[hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2432.php">Jeff Squyres: "[hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2435.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Reply:</strong> <a href="2435.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Reply:</strong> <a href="2436.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Ralph,
<br>
<p>Indeed, adding something before the cache size might be good.
<br>
<p>But if I was picky, I would say &quot;size=32kB linesize=64&quot;. The word
<br>
&quot;Cache&quot; is already written above (in the object type), why would we
<br>
duplicate it in &quot;Cachesize&quot; and &quot;Cacheline&quot; ?
<br>
<p>Right now, lstopo shows:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#3 (4096KB line=64)
<br>
With your patch, it would say:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#3 (Cachesize=4096KB Cacheline=64)
<br>
With my variant, it would say:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;L3Cache L#3 (size=4096KB linesize=64)
<br>
<p>Brice
<br>
<p><p><p><p>Le 22/09/2011 21:27, Jeff Squyres a &#233;crit :
<br>
<span class="quotelev1">&gt; Ralph noticed the following when working on integrating hwloc deeply into OMPI, and suggests the attached patch.  Does it look good to you guys?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Something isn't right with hwloc_obj_attr_snprintf() when the object is a cache. I get this when printing the topology of my Mac:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Detected Resources: 	Type: Machine Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; 		Name=NULL
</span><br>
<span class="quotelev1">&gt; 		total=3145728KB
</span><br>
<span class="quotelev1">&gt; 		Backend=Darwin
</span><br>
<span class="quotelev1">&gt; 		OSName=Darwin
</span><br>
<span class="quotelev1">&gt; 		OSRelease=10.8.0
</span><br>
<span class="quotelev1">&gt; 		OSVersion=&quot;Darwin Kernel Version 10.8.0: Tue Jun  7 16:33:36 PDT 2011; root:xnu-1504.15.3~1/RELEASE_I386&quot;
</span><br>
<span class="quotelev1">&gt; 		Architecture=i386
</span><br>
<span class="quotelev1">&gt; 		Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt; 		Online:  0x00000003
</span><br>
<span class="quotelev1">&gt; 		Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt; 		Type: NUMANode Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; 			Name=NULL
</span><br>
<span class="quotelev1">&gt; 			local=3145728KB
</span><br>
<span class="quotelev1">&gt; 			total=3145728KB
</span><br>
<span class="quotelev1">&gt; 			Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt; 			Online:  0x00000003
</span><br>
<span class="quotelev1">&gt; 			Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt; 			Type: Socket Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; 				Name=NULL
</span><br>
<span class="quotelev1">&gt; 				
</span><br>
<span class="quotelev1">&gt; 				Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt; 				Online:  0x00000003
</span><br>
<span class="quotelev1">&gt; 				Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt; 				Type: L2Cache Number of child objects: 2
</span><br>
<span class="quotelev1">&gt; 					Name=NULL
</span><br>
<span class="quotelev1">&gt; 					4096KB
</span><br>
<span class="quotelev1">&gt; 					line=64
</span><br>
<span class="quotelev1">&gt; 					Cpuset:  0x00000003
</span><br>
<span class="quotelev1">&gt; 					Online:  0x00000003
</span><br>
<span class="quotelev1">&gt; 					Allowed: 0x00000003
</span><br>
<span class="quotelev1">&gt; 					Type: L1Cache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; 						Name=NULL
</span><br>
<span class="quotelev1">&gt; 						32KB
</span><br>
<span class="quotelev1">&gt; 						line=64
</span><br>
<span class="quotelev1">&gt; 						Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt; 						Online:  0x00000001
</span><br>
<span class="quotelev1">&gt; 						Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt; 						Type: Core Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; 							Name=NULL
</span><br>
<span class="quotelev1">&gt; 							
</span><br>
<span class="quotelev1">&gt; 							Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt; 							Online:  0x00000001
</span><br>
<span class="quotelev1">&gt; 							Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt; 							Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt; 								Name=NULL
</span><br>
<span class="quotelev1">&gt; 								
</span><br>
<span class="quotelev1">&gt; 								Cpuset:  0x00000001
</span><br>
<span class="quotelev1">&gt; 								Online:  0x00000001
</span><br>
<span class="quotelev1">&gt; 								Allowed: 0x00000001
</span><br>
<span class="quotelev1">&gt; 					Type: L1Cache Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; 						Name=NULL
</span><br>
<span class="quotelev1">&gt; 						32KB
</span><br>
<span class="quotelev1">&gt; 						line=64
</span><br>
<span class="quotelev1">&gt; 						Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt; 						Online:  0x00000002
</span><br>
<span class="quotelev1">&gt; 						Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt; 						Type: Core Number of child objects: 1
</span><br>
<span class="quotelev1">&gt; 							Name=NULL
</span><br>
<span class="quotelev1">&gt; 							
</span><br>
<span class="quotelev1">&gt; 							Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt; 							Online:  0x00000002
</span><br>
<span class="quotelev1">&gt; 							Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt; 							Type: PU Number of child objects: 0
</span><br>
<span class="quotelev1">&gt; 								Name=NULL
</span><br>
<span class="quotelev1">&gt; 								
</span><br>
<span class="quotelev1">&gt; 								Cpuset:  0x00000002
</span><br>
<span class="quotelev1">&gt; 								Online:  0x00000002
</span><br>
<span class="quotelev1">&gt; 								Allowed: 0x00000002
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that I get an empty line (it is non-NULL and has length &gt; 0) when there are no attrs at all, but attrs is non-NULL (see the output for the cores). The output for the caches shows &quot;32KB&quot;, but no title explaining what that value means. Likewise, I get a &quot;line=64&quot; output, which makes no sense.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attached patch clarifies the output.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2435.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Previous message:</strong> <a href="2433.php">Jeff Squyres: "[hwloc-devel] Some practical hwloc API feedback"</a>
<li><strong>In reply to:</strong> <a href="2432.php">Jeff Squyres: "[hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2435.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Reply:</strong> <a href="2435.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Reply:</strong> <a href="2436.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
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
