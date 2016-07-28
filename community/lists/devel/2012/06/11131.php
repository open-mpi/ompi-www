<?
$subject_val = "Re: [OMPI devel] OpenIB compile error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 20 16:25:52 2012" -->
<!-- isoreceived="20120620202552" -->
<!-- sent="Wed, 20 Jun 2012 16:25:46 -0400" -->
<!-- isosent="20120620202546" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenIB compile error" -->
<!-- id="1DEAFC7E-4D02-4B02-AAE0-7142846A6CB3_at_ornl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7E4AF7DC-7B0C-41AB-89AF-6B7389C7C850_at_cisco.com" -->
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
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-20 16:25:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I hate it ...
<br>
<p>As far as I understand it is not reason to rename it. The OFED-lovin components should look at $with_openib.
<br>
<p><p>Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jun 20, 2012, at 4:09 PM, Jeff Squyres wrote:
&gt; Brian and I talked about this more off list and figured out the problem.  The issue is that Brian has OFED installed in a non-standard location, so he specified --with-openib=/path/to/ofed.  The openib BTL therefore knows where OFED (and verbs.h) is installed, but other OFED-lovin' components don't:
&gt; 
&gt; - OOB UD
&gt; - BTL UD
&gt; - hwloc hwloc142
&gt; 
&gt; So it seems like it's finally time to rename and universalize the --with-openib switch.
&gt; 
&gt; Ladies and gentlemen, I present: --with-ofed.
&gt; 
&gt; This one option will function exactly like --with-openib today, with the exception that all OFED-lovin' components can look at $with_ofed.  
&gt; 
&gt; For the 1.7/1.8 series, we'll accept --with-openib in lieu of --with-ofed, but we'll print a warning if you do so.  We'll delete the --with-openib=dir form of --with-openib in 1.9/2.0 (i.e., --with-openib will just mean &quot;you must build openib; error if you cannot build it&quot;).
&gt; 
&gt; Speak now if you hate this plan...
&gt; 
&gt; 
&gt; 
&gt; On Jun 20, 2012, at 1:18 PM, Barrett, Brian W wrote:
&gt; 
&gt;&gt; Hi all -
&gt;&gt; 
&gt;&gt; I'm seeing the compile error with the OMPI trunk and OFED 15.3.1.  Has
&gt;&gt; anyone seen this before?  I have vague recollections of seeing e-mail
&gt;&gt; discussion on the issue, but can't find those e-mails now...
&gt;&gt; 
&gt;&gt; Thanks,
&gt;&gt; 
&gt;&gt; Brian
&gt;&gt; 
&gt;&gt; 
&gt;&gt; In file included from ../../../../opal/mca/hwloc/hwloc.h:87,
&gt;&gt;                from btl_openib_component.c:69:
&gt;&gt; ../../../../opal/mca/hwloc/hwloc142/hwloc142.h:38:10: error: #error Tried
&gt;&gt; to include hwloc verbs helper file, but hwloc was compiled with no
&gt;&gt; OpenFabrics support
&gt;&gt; btl_openib_component.c: In function 'get_ib_dev_distance':
&gt;&gt; btl_openib_component.c:2435: error: implicit declaration of function
&gt;&gt; 'opal_hwloc142_hwloc_ibv_get_device_cpuset'
&gt;&gt; make[1]: *** [btl_openib_component.lo] Error 1
&gt;&gt; make[1]: Leaving directory
&gt;&gt; `/home/bwbarre/projects/ompi/trunk/ompi/mca/btl/openib'
&gt;&gt; make: *** [all-recursive] Error 1
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; -- 
&gt;&gt; Brian W. Barrett
&gt;&gt; Dept. 1423: Scalable System Software
&gt;&gt; Sandia National Laboratories
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; 
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Previous message:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>In reply to:</strong> <a href="11130.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
<li><strong>Reply:</strong> <a href="11132.php">Jeff Squyres: "Re: [OMPI devel] OpenIB compile error"</a>
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
