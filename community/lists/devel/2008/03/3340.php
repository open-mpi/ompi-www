<?
$subject_val = "Re: [OMPI devel] Trunk build times?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar  3 21:18:55 2008" -->
<!-- isoreceived="20080304021855" -->
<!-- sent="Mon, 3 Mar 2008 21:18:46 -0500" -->
<!-- isosent="20080304021846" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk build times?" -->
<!-- id="617AC9B2-236E-438A-B612-35D484F43885_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3F194F0.C791%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk build times?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-03 21:18:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3339.php">Jeff Squyres: "Re: [OMPI devel] Configure and contrib pkgs"</a>
<li><strong>In reply to:</strong> <a href="3338.php">Ralph H Castain: "[OMPI devel] Trunk build times?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I just did some trivial tests:
<br>
<p>make with vt: 7.19
<br>
make -j4 with vt: 2:49
<br>
<p>make without vt: 6:29
<br>
make -j4 without vt: 2:32
<br>
<p><p><p>On Mar 3, 2008, at 1:43 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone else noticed that the time required to build the trunk  
</span><br>
<span class="quotelev1">&gt; after a
</span><br>
<span class="quotelev1">&gt; configure has gone up considerably over the last few months? It used  
</span><br>
<span class="quotelev1">&gt; to take
</span><br>
<span class="quotelev1">&gt; about 5 min on my G5 Mac desktop - it now takes a solid 15+ min  
</span><br>
<span class="quotelev1">&gt; (both times
</span><br>
<span class="quotelev1">&gt; not including autogen or configure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Interestingly, I tried it configured with and without VT and got the  
</span><br>
<span class="quotelev1">&gt; exact
</span><br>
<span class="quotelev1">&gt; same build times. Are we sure the --enable-contrib-no-build=vt option
</span><br>
<span class="quotelev1">&gt; actually works?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3341.php">Tim Prins: "Re: [OMPI devel] [RFC] Default hostfile MCA param"</a>
<li><strong>Previous message:</strong> <a href="3339.php">Jeff Squyres: "Re: [OMPI devel] Configure and contrib pkgs"</a>
<li><strong>In reply to:</strong> <a href="3338.php">Ralph H Castain: "[OMPI devel] Trunk build times?"</a>
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
