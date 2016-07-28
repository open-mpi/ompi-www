<?
$subject_val = "Re: [OMPI devel] 1.4.4rc2 is up";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 21:47:53 2011" -->
<!-- isoreceived="20110520014753" -->
<!-- sent="Thu, 19 May 2011 21:47:47 -0400" -->
<!-- isosent="20110520014747" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.4.4rc2 is up" -->
<!-- id="8B390AF7-86F6-4EAA-BC2A-88E486796FDA_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FCF60501-4C83-4C6B-9D3E-73BF0D25E41C_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.4.4rc2 is up<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 21:47:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9273.php">Ralph Castain: "[OMPI devel] IO forwarding"</a>
<li><strong>Previous message:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>In reply to:</strong> <a href="9268.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9280.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a function of using two different subsystems that both put in their own --with-valgrind options in different .m4 scripts.  It's solved in a different way on the trunk / v1.5.  So I think we'll just have to live with it for v1.4.x.  :-\
<br>
<p>Many thanks for all these close inspections!
<br>
<p><p>On May 19, 2011, at 2:58 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; The help text for --with-valgrind in configure appears twice (fixed in 1.5.3)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   --with-libnuma-libdir=DIR
</span><br>
<span class="quotelev2">&gt;&gt;                           Directory where the libnuma software is installed
</span><br>
<span class="quotelev2">&gt;&gt;   --with-valgrind(=DIR)   Directory where the valgrind software is installed
</span><br>
<span class="quotelev2">&gt;&gt;   --with-memory-manager=TYPE
</span><br>
<span class="quotelev2">&gt;&gt;                           Use TYPE for intercepting memory management calls to
</span><br>
<span class="quotelev2">&gt;&gt;                           control memory pinning.
</span><br>
<span class="quotelev2">&gt;&gt;   --with-plpa-symbol-prefix=STRING
</span><br>
<span class="quotelev2">&gt;&gt;                           STRING can be any valid C symbol name. It will be
</span><br>
<span class="quotelev2">&gt;&gt;                           prefixed to all public PLPA symbols. Default:
</span><br>
<span class="quotelev2">&gt;&gt;                           &quot;plpa_&quot;
</span><br>
<span class="quotelev2">&gt;&gt;   --with-valgrind(=DIR)   Directory where the valgrind software is installed
</span><br>
<span class="quotelev2">&gt;&gt;   --with-timer=TYPE       Build high resolution timer component TYPE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Larry Baker
</span><br>
<span class="quotelev1">&gt; US Geological Survey
</span><br>
<span class="quotelev1">&gt; 650-329-5608
</span><br>
<span class="quotelev1">&gt; baker_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 5 May 2011, at 7:15 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Fixed the ROMIO attribute problem properly this time -- it's in the usual place:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;    <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9273.php">Ralph Castain: "[OMPI devel] IO forwarding"</a>
<li><strong>Previous message:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>In reply to:</strong> <a href="9268.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9280.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
