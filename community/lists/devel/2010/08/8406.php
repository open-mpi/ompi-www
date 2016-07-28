<?
$subject_val = "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 27 13:57:15 2010" -->
<!-- isoreceived="20100827175715" -->
<!-- sent="Fri, 27 Aug 2010 13:57:09 -0400" -->
<!-- isosent="20100827175709" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf" -->
<!-- id="53B46ADE-0188-4039-8274-A8D7D940D3F4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20100818173226.GB19361_at_gmx.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-27 13:57:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8407.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Previous message:</strong> <a href="8405.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All instances will be fixed on the SVN trunk in a commit coming in a few hours (delaying autogen-worthy changes during the business day).  Shame on us for using AS_VAR_GET.
<br>
<p>CMR's for v1.5 coming tonight; CMR for v1.4 (because it's a different patch) is here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2559">https://svn.open-mpi.org/trac/ompi/ticket/2559</a>
<br>
<p>Thanks!
<br>
<p><p><p>On Aug 18, 2010, at 1:32 PM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Jeff Squyres wrote on Wed, Aug 18, 2010 at 06:35:22PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With a quick grep, I actually see 16 uses of AS_VAR_GET.  Do the other
</span><br>
<span class="quotelev2">&gt;&gt; 15 cases not cause problems?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Whether or not, since AS_VAR_GET is undocumented (and inefficient,
</span><br>
<span class="quotelev1">&gt; and now also buggy), it's prudent to replace them all with either
</span><br>
<span class="quotelev1">&gt; AS_VAR_COPY or AS_VAR_IF as appropriate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
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
<li><strong>Next message:</strong> <a href="8407.php">Jeff Squyres: "Re: [OMPI devel] 1.5rc5 over MX"</a>
<li><strong>Previous message:</strong> <a href="8405.php">Paul H. Hargrove: "Re: [OMPI devel] Problem w/ documented SPARC/gcc flags (1.5rc5 and 1.4.3rc1)"</a>
<li><strong>In reply to:</strong> <a href="8292.php">Ralf Wildenhues: "Re: [OMPI devel] [PATCH] openmpi: get it built with newer autoconf"</a>
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
