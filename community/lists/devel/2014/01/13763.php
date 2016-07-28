<?
$subject_val = "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 16:16:59 2014" -->
<!-- isoreceived="20140113211659" -->
<!-- sent="Mon, 13 Jan 2014 22:16:56 +0100" -->
<!-- isosent="20140113211656" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out" -->
<!-- id="D5CE2A71-5CFE-4429-A7F4-9B8F1B2EA875_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FDE6B32B-CFD6-4B1A-B854-C2DB0E288FFA_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 16:16:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Previous message:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
<li><strong>In reply to:</strong> <a href="13758.php">Jeff Squyres (jsquyres): "[OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Reply:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The code is well protected against such issues. If one of our base structures become larger than corresponding predefined structure, the compiler should trigger an error similar to:
<br>
<p>In file included from ../../../ompi/ompi/datatype/ompi_datatype_create_contiguous.c:23:0:
<br>
../../../ompi/ompi/datatype/ompi_datatype.h:105:10: error: size of array 'padding' is too large
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char padding[PREDEFINED_DATATYPE_PAD - sizeof(ompi_datatype_t)];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>This is the case for all types that have a predefined enveloppe. Thus, the commit 30268 was unnecessary as the check was already included in the compilation by the inclusion of the ompi_debugger_canary.c.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>On Jan 13, 2014, at 17:10 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I noticed the following this morning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * sizeof(ompi_predefined_datatype_t): 512
</span><br>
<span class="quotelev1">&gt; * sizeof(ompi_datatype_t): 488
</span><br>
<span class="quotelev1">&gt; * padding left: 24
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do we need to increase the size of padding for predefined communicators for v1.9?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Previous message:</strong> <a href="13762.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL]  RFC: async modex"</a>
<li><strong>In reply to:</strong> <a href="13758.php">Jeff Squyres (jsquyres): "[OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Reply:</strong> <a href="13764.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
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
