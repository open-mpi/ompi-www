<?
$subject_val = "Re: [OMPI devel] portable_platform.h copies";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov  6 09:44:30 2013" -->
<!-- isoreceived="20131106144430" -->
<!-- sent="Wed, 6 Nov 2013 14:44:28 +0000" -->
<!-- isosent="20131106144428" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] portable_platform.h copies" -->
<!-- id="88C1F1D3-921B-40B2-B3DA-185CCB6AECFF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE9FA2CF.15546%bwbarre_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] portable_platform.h copies<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-06 09:44:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13202.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>Previous message:</strong> <a href="13200.php">Barrett, Brian W: "[OMPI devel] portable_platform.h copies"</a>
<li><strong>In reply to:</strong> <a href="13200.php">Barrett, Brian W: "[OMPI devel] portable_platform.h copies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13202.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>Reply:</strong> <a href="13202.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I looked at that, too -- I think the only reason to have 2 files is that mpi_portable_platform.h is included by mpi.h (its used for knowing how to define __mpi_interface_deprecated__ in mpi.h), and is therefore installed.  opal_portable_platform.h is not installed.
<br>
<p><p>On Nov 6, 2013, at 6:40 AM, &quot;Barrett, Brian W&quot; &lt;bwbarre_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; All -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a reason we have both opal/include/opal_portable_platform.h and
</span><br>
<span class="quotelev1">&gt; ompi/include/mpi_portable_platform.h?  If they're always supposed to have
</span><br>
<span class="quotelev1">&gt; the same content (which appears to be the case), then it seems like
</span><br>
<span class="quotelev1">&gt; building mpi_portable_platform.h from opal_portable_platform.h at build
</span><br>
<span class="quotelev1">&gt; time is a more appropriate path forward.  I'll do the work, but wanted
</span><br>
<span class="quotelev1">&gt; someone else to verify that I wasn't missing something.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;  Scalable System Software Group
</span><br>
<span class="quotelev1">&gt;  Sandia National Laboratories
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
<li><strong>Next message:</strong> <a href="13202.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>Previous message:</strong> <a href="13200.php">Barrett, Brian W: "[OMPI devel] portable_platform.h copies"</a>
<li><strong>In reply to:</strong> <a href="13200.php">Barrett, Brian W: "[OMPI devel] portable_platform.h copies"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13202.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
<li><strong>Reply:</strong> <a href="13202.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re:  portable_platform.h copies"</a>
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
