<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 20 16:09:19 2012" -->
<!-- isoreceived="20120620200919" -->
<!-- sent="Wed, 20 Jun 2012 16:09:14 -0400" -->
<!-- isosent="20120620200914" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="7E4AF7DC-7B0C-41AB-89AF-6B7389C7C850_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CC076206.F96A%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenIB compile error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-20 16:09:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11131.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11129.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11128.php">Barrett, Brian W: "[OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11131.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11131.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian and I talked about this more off list and figured out the problem.  The issue is that Brian has OFED installed in a non-standard location, so he specified --with-openib=/path/to/ofed.  The openib BTL therefore knows where OFED (and verbs.h) is installed, but other OFED-lovin' components don't:
<br>
<p>- OOB UD
<br>
- BTL UD
<br>
- hwloc hwloc142
<br>
<p>So it seems like it's finally time to rename and universalize the --with-openib switch.
<br>
<p>Ladies and gentlemen, I present: --with-ofed.
<br>
<p>This one option will function exactly like --with-openib today, with the exception that all OFED-lovin' components can look at $with_ofed.  
<br>
<p>For the 1.7/1.8 series, we'll accept --with-openib in lieu of --with-ofed, but we'll print a warning if you do so.  We'll delete the --with-openib=dir form of --with-openib in 1.9/2.0 (i.e., --with-openib will just mean &quot;you must build openib; error if you cannot build it&quot;).
<br>
<p>Speak now if you hate this plan...
<br>
<p><p><p>On Jun 20, 2012, at 1:18 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev1">&gt; Hi all -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm seeing the compile error with the OMPI trunk and OFED 15.3.1.  Has
</span><br>
<span class="quotelev1">&gt; anyone seen this before?  I have vague recollections of seeing e-mail
</span><br>
<span class="quotelev1">&gt; discussion on the issue, but can't find those e-mails now...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../opal/mca/hwloc/hwloc.h:87,
</span><br>
<span class="quotelev1">&gt;                 from btl_openib_component.c:69:
</span><br>
<span class="quotelev1">&gt; ../../../../opal/mca/hwloc/hwloc142/hwloc142.h:38:10: error: #error Tried
</span><br>
<span class="quotelev1">&gt; to include hwloc verbs helper file, but hwloc was compiled with no
</span><br>
<span class="quotelev1">&gt; OpenFabrics support
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c: In function 'get_ib_dev_distance':
</span><br>
<span class="quotelev1">&gt; btl_openib_component.c:2435: error: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'opal_hwloc142_hwloc_ibv_get_device_cpuset'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [btl_openib_component.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/bwbarre/projects/ompi/trunk/ompi/mca/btl/openib'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11131.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11129.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11128.php">Barrett, Brian W: "[OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11131.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11131.php">Shamis, Pavel: "Re: [OMPI devel] OpenIB compile error"</a>
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
