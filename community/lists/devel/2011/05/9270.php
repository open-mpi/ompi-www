<?
$subject_val = "[OMPI devel] v1.4 RM: ruling?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 19 21:43:50 2011" -->
<!-- isoreceived="20110520014350" -->
<!-- sent="Thu, 19 May 2011 21:43:45 -0400" -->
<!-- isosent="20110520014345" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] v1.4 RM: ruling?" -->
<!-- id="6574E559-2A0C-46EA-8E1F-B6CFD1E2361A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F0C0867C-AD40-4BC8-A08A-12FB9CB760E5_at_usgs.gov" -->
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
<strong>Subject:</strong> [OMPI devel] v1.4 RM: ruling?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-19 21:43:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>Previous message:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>In reply to:</strong> <a href="9267.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9268.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
v1.4 RMs: see the suggestion below.  We have this text in trunk and v1.5; it's a fairly straightforward patch for v1.4.
<br>
<p>Do you want it in v1.4.4?
<br>
<p><p><p>On May 19, 2011, at 2:54 PM, Larry Baker wrote:
<br>
<p><span class="quotelev1">&gt; Consider adding the improved description for --with-tm from 1.5.3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  --with-tm(=DIR)         Build TM (Torque, PBSPro, and compatible) support,
</span><br>
<span class="quotelev2">&gt;&gt;                          optionally adding DIR/include, DIR/lib, and
</span><br>
<span class="quotelev2">&gt;&gt;                          DIR/lib64 to the search path for headers and
</span><br>
<span class="quotelev2">&gt;&gt;                          libraries
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to replace the text in 1.4.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  --with-tm(=DIR)         Directory where the tm software is installed
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
<span class="quotelev2">&gt;&gt;   <a href="http://www.open-mpi.org/software/ompi/v1.4/">http://www.open-mpi.org/software/ompi/v1.4/</a>
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
<li><strong>Next message:</strong> <a href="9271.php">Larry Baker: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>Previous message:</strong> <a href="9269.php">Jeff Squyres: "Re: [OMPI devel] SSE instructions?"</a>
<li><strong>In reply to:</strong> <a href="9267.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9268.php">Larry Baker: "Re: [OMPI devel] 1.4.4rc2 is up"</a>
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
