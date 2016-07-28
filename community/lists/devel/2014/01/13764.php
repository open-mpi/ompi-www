<?
$subject_val = "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 17:14:33 2014" -->
<!-- isoreceived="20140113221433" -->
<!-- sent="Mon, 13 Jan 2014 22:14:31 +0000" -->
<!-- isosent="20140113221431" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out" -->
<!-- id="A764764B-EA35-46F9-8576-D7C7EFB7AA99_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="D5CE2A71-5CFE-4429-A7F4-9B8F1B2EA875_at_icl.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 17:14:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13765.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>Previous message:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>In reply to:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13766.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Reply:</strong> <a href="13766.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ok, fair enough -- I can remove it.
<br>
<p>But the question still remains: should we increase the size of the padding for the predefined datatypes?  The idea is that it would need to be big enough for the entire 1.9/1.10 (2.0?) series.
<br>
<p><p>On Jan 13, 2014, at 4:16 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; The code is well protected against such issues. If one of our base structures become larger than corresponding predefined structure, the compiler should trigger an error similar to:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In file included from ../../../ompi/ompi/datatype/ompi_datatype_create_contiguous.c:23:0:
</span><br>
<span class="quotelev1">&gt; ../../../ompi/ompi/datatype/ompi_datatype.h:105:10: error: size of array 'padding' is too large
</span><br>
<span class="quotelev1">&gt;     char padding[PREDEFINED_DATATYPE_PAD - sizeof(ompi_datatype_t)];
</span><br>
<span class="quotelev1">&gt;          ^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is the case for all types that have a predefined enveloppe. Thus, the commit 30268 was unnecessary as the check was already included in the compilation by the inclusion of the ompi_debugger_canary.c.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2014, at 17:10 , Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I noticed the following this morning:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; * sizeof(ompi_predefined_datatype_t): 512
</span><br>
<span class="quotelev2">&gt;&gt; * sizeof(ompi_datatype_t): 488
</span><br>
<span class="quotelev2">&gt;&gt; * padding left: 24
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Do we need to increase the size of padding for predefined communicators for v1.9?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13765.php">Ralph Castain: "Re: [OMPI devel] [EXTERNAL] RFC: async modex"</a>
<li><strong>Previous message:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>In reply to:</strong> <a href="13763.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13766.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
<li><strong>Reply:</strong> <a href="13766.php">George Bosilca: "Re: [OMPI devel] Padding on ompi_predefined_datatype_t running out"</a>
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
