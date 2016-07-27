<?
$subject_val = "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 16:13:02 2011" -->
<!-- isoreceived="20110922201302" -->
<!-- sent="Thu, 22 Sep 2011 14:04:11 -0600" -->
<!-- isosent="20110922200411" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf" -->
<!-- id="2105D669-AD16-4596-9BB7-234289863E85_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4E7B93A5.9040804_at_inria.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 16:04:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2436.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Previous message:</strong> <a href="2434.php">Brice Goglin: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>In reply to:</strong> <a href="2434.php">Brice Goglin: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2436.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Resending - had to join list!
<br>
<p>********************
<br>
Either is fine with me - just want it to be labelled so it can be understood.
<br>
<p>Thx!
<br>
<p>On Sep 22, 2011, at 1:59 PM, Brice Goglin wrote:
<br>
<p><span class="quotelev1">&gt; Hello Ralph,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, adding something before the cache size might be good.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But if I was picky, I would say &quot;size=32kB linesize=64&quot;. The word &quot;Cache&quot; is already written above (in the object type), why would we duplicate it in &quot;Cachesize&quot; and &quot;Cacheline&quot; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now, lstopo shows:
</span><br>
<span class="quotelev1">&gt;     L3Cache L#3 (4096KB line=64)
</span><br>
<span class="quotelev1">&gt; With your patch, it would say:
</span><br>
<span class="quotelev1">&gt;     L3Cache L#3 (Cachesize=4096KB Cacheline=64)
</span><br>
<span class="quotelev1">&gt; With my variant, it would say:
</span><br>
<span class="quotelev1">&gt;     L3Cache L#3 (size=4096KB linesize=64)
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
<span class="quotelev1">&gt; Le 22/09/2011 21:27, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph noticed the following when working on integrating hwloc deeply into OMPI, and suggests the attached patch.  Does it look good to you guys?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -----
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Something isn't right with hwloc_obj_attr_snprintf() when the object is a cache. I get this when printing the topology of my Mac:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 	Detected Resources: 	Type: Machine Number of child objects: 1
</span><br>
<span class="quotelev2">&gt;&gt; 		Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 		total=3145728KB
</span><br>
<span class="quotelev2">&gt;&gt; 		Backend=Darwin
</span><br>
<span class="quotelev2">&gt;&gt; 		OSName=Darwin
</span><br>
<span class="quotelev2">&gt;&gt; 		OSRelease=10.8.0
</span><br>
<span class="quotelev2">&gt;&gt; 		OSVersion=&quot;Darwin Kernel Version 10.8.0: Tue Jun  7 16:33:36 PDT 2011; root:xnu-1504.15.3~1/RELEASE_I386&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 		Architecture=i386
</span><br>
<span class="quotelev2">&gt;&gt; 		Cpuset:  0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 		Online:  0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 		Allowed: 0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 		Type: NUMANode Number of child objects: 1
</span><br>
<span class="quotelev2">&gt;&gt; 			Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 			local=3145728KB
</span><br>
<span class="quotelev2">&gt;&gt; 			total=3145728KB
</span><br>
<span class="quotelev2">&gt;&gt; 			Cpuset:  0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 			Online:  0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 			Allowed: 0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 			Type: Socket Number of child objects: 1
</span><br>
<span class="quotelev2">&gt;&gt; 				Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 				
</span><br>
<span class="quotelev2">&gt;&gt; 				Cpuset:  0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 				Online:  0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 				Allowed: 0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 				Type: L2Cache Number of child objects: 2
</span><br>
<span class="quotelev2">&gt;&gt; 					Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 					4096KB
</span><br>
<span class="quotelev2">&gt;&gt; 					line=64
</span><br>
<span class="quotelev2">&gt;&gt; 					Cpuset:  0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 					Online:  0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 					Allowed: 0x00000003
</span><br>
<span class="quotelev2">&gt;&gt; 					Type: L1Cache Number of child objects: 1
</span><br>
<span class="quotelev2">&gt;&gt; 						Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 						32KB
</span><br>
<span class="quotelev2">&gt;&gt; 						line=64
</span><br>
<span class="quotelev2">&gt;&gt; 						Cpuset:  0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 						Online:  0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 						Allowed: 0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 						Type: Core Number of child objects: 1
</span><br>
<span class="quotelev2">&gt;&gt; 							Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 							
</span><br>
<span class="quotelev2">&gt;&gt; 							Cpuset:  0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 							Online:  0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 							Allowed: 0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 							Type: PU Number of child objects: 0
</span><br>
<span class="quotelev2">&gt;&gt; 								Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 								
</span><br>
<span class="quotelev2">&gt;&gt; 								Cpuset:  0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 								Online:  0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 								Allowed: 0x00000001
</span><br>
<span class="quotelev2">&gt;&gt; 					Type: L1Cache Number of child objects: 1
</span><br>
<span class="quotelev2">&gt;&gt; 						Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 						32KB
</span><br>
<span class="quotelev2">&gt;&gt; 						line=64
</span><br>
<span class="quotelev2">&gt;&gt; 						Cpuset:  0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 						Online:  0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 						Allowed: 0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 						Type: Core Number of child objects: 1
</span><br>
<span class="quotelev2">&gt;&gt; 							Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 							
</span><br>
<span class="quotelev2">&gt;&gt; 							Cpuset:  0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 							Online:  0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 							Allowed: 0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 							Type: PU Number of child objects: 0
</span><br>
<span class="quotelev2">&gt;&gt; 								Name=NULL
</span><br>
<span class="quotelev2">&gt;&gt; 								
</span><br>
<span class="quotelev2">&gt;&gt; 								Cpuset:  0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 								Online:  0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 								Allowed: 0x00000002
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Note that I get an empty line (it is non-NULL and has length &gt; 0) when there are no attrs at all, but attrs is non-NULL (see the output for the cores). The output for the caches shows &quot;32KB&quot;, but no title explaining what that value means. Likewise, I get a &quot;line=64&quot; output, which makes no sense.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The attached patch clarifies the output.
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-2435/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2436.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>Previous message:</strong> <a href="2434.php">Brice Goglin: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<li><strong>In reply to:</strong> <a href="2434.php">Brice Goglin: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2436.php">Ralph Castain: "Re: [hwloc-devel] Patch for hwloc_obj_attr_snprintf"</a>
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
