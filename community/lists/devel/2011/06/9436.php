<?
$subject_val = "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 27 22:41:38 2011" -->
<!-- isoreceived="20110628024138" -->
<!-- sent="Mon, 27 Jun 2011 22:41:29 -0400" -->
<!-- isosent="20110628024129" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] &amp;quot;Open MPI&amp;quot;-based MPI library used by K computer" -->
<!-- id="C0BB5A63-64C5-4925-9683-ABA0C5C32D0E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87sjquu36z.wl%t-kawashima_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-27 22:41:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9437.php">nadia.derbey: "[OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<li><strong>Previous message:</strong> <a href="9435.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9434.php">Takahiro Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I echo what Ralph said -- congratulations!
<br>
<p>Let us know when you'll be ready to contribute back what you can.
<br>
<p>Thanks!
<br>
<p><p>On Jun 27, 2011, at 9:58 PM, Takahiro Kawashima wrote:
<br>
<p><span class="quotelev1">&gt; Dear Open MPI community,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm a member of MPI library development team in Fujitsu. Shinji
</span><br>
<span class="quotelev1">&gt; Sumimoto, whose name appears in Jeff's blog, is one of our bosses.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As Rayson and Jeff noted, K computer, world's most powerful HPC system
</span><br>
<span class="quotelev1">&gt; developed by RIKEN and Fujitsu, utilizes Open MPI as a base of its MPI
</span><br>
<span class="quotelev1">&gt; library. We, Fujitsu, are pleased to announce that, and also have special
</span><br>
<span class="quotelev1">&gt; thanks to Open MPI community.
</span><br>
<span class="quotelev1">&gt; We are sorry to be late announce!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Our MPI library is based on Open MPI 1.4 series, and has a new point-
</span><br>
<span class="quotelev1">&gt; to-point component (BTL) and new topology-aware collective communication
</span><br>
<span class="quotelev1">&gt; algorithms (COLL). Also, it is adapted to our runtime environment (ESS,
</span><br>
<span class="quotelev1">&gt; PLM, GRPCOMM etc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; K computer connects 68,544 nodes by our custom interconnect.
</span><br>
<span class="quotelev1">&gt; Its runtime environment is our proprietary one. So we don't use orted.
</span><br>
<span class="quotelev1">&gt; We cannot tell start-up time yet because of disclosure restriction, sorry.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We are surprised by the extensibility of Open MPI, and have proved that
</span><br>
<span class="quotelev1">&gt; Open MPI is scalable to 68,000 processes level! We feel pleasure to
</span><br>
<span class="quotelev1">&gt; utilize such a great open-source software.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We cannot tell detail of our technology yet because of our contract
</span><br>
<span class="quotelev1">&gt; with RIKEN AICS, however, we will plan to feedback of our improvements
</span><br>
<span class="quotelev1">&gt; and bug fixes. We can contribute some bug fixes soon, however, for
</span><br>
<span class="quotelev1">&gt; contribution of our improvements will be next year with Open MPI
</span><br>
<span class="quotelev1">&gt; agreement.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MPI development team,
</span><br>
<span class="quotelev1">&gt; Fujitsu
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I got more information:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   <a href="http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/">http://blogs.cisco.com/performance/open-mpi-powers-8-petaflops/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Short version: yes, Open MPI is used on K and was used to power the 8PF runs.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; w00t!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 24, 2011, at 7:16 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; w00t!  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; OMPI powers 8 petaflops!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (at least I'm guessing that -- does anyone know if that's true?)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jun 24, 2011, at 7:03 PM, Rayson Ho wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Interesting... page 11:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf">http://www.fujitsu.com/downloads/TC/sc10/programming-on-k-computer.pdf</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI based:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Open Standard, Open Source, Multi-Platform including PC Cluster.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * Adding extension to Open MPI for &quot;Tofu&quot; interconnect
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rayson
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9437.php">nadia.derbey: "[OMPI devel] Fix a hang in carto_base_select() if carto_module_init() fails"</a>
<li><strong>Previous message:</strong> <a href="9435.php">Ralph Castain: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>In reply to:</strong> <a href="9434.php">Takahiro Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
<li><strong>Reply:</strong> <a href="9439.php">Kawashima: "Re: [OMPI devel] &quot;Open MPI&quot;-based MPI library used by K computer"</a>
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
