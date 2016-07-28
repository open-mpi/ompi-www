<?
$subject_val = "Re: [OMPI devel] More oshmem compile errors";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct  9 09:34:53 2013" -->
<!-- isoreceived="20131009133453" -->
<!-- sent="Wed, 9 Oct 2013 13:34:52 +0000" -->
<!-- isosent="20131009133452" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] More oshmem compile errors" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F948E54_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAO1KyYshAwbAkdZKyXcvD8iE-qoDy3LSp=-V8dCjq7ggF_DTw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] More oshmem compile errors<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-09 09:34:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13079.php">Jeff Squyres (jsquyres): "[OMPI devel] Automake/m4 issue: r29407 - trunk/oshmem/mca/atomic/mxm"</a>
<li><strong>Previous message:</strong> <a href="13077.php">Ralph Castain: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>In reply to:</strong> <a href="13076.php">Mike Dubman: "Re: [OMPI devel] More oshmem compile errors"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Doing pointer math with (void*) is not defined.
<br>
<p>For example: <a href="http://gcc.gnu.org/onlinedocs/gcc-4.8.0/gcc/Pointer-Arith.html">http://gcc.gnu.org/onlinedocs/gcc-4.8.0/gcc/Pointer-Arith.html</a> says that gcc allows it, but this is in the &quot;C Extensions&quot; part of the manual.
<br>
<p>I suspect that the latest icc allows it by the same rationale, but it's still technically wrong.
<br>
<p>I'm just doing a simple build like this:
<br>
<p>&nbsp;&nbsp;./configure CC=icc CXX=icpc FC=ifort ...
<br>
<p>I note that it passes with icc 14.0, but fails with 12.x.
<br>
<p>I think (void*) pointer math should be avoided, even if modern compilers allow it.
<br>
<p><p>On Oct 9, 2013, at 8:01 AM, Mike Dubman &lt;miked_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; We have icc test in jenkins and it passes.
</span><br>
<span class="quotelev1">&gt; What icc version do you use and exact command line to configure?
</span><br>
<span class="quotelev1">&gt; Is it latest trunk?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; M
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Oct 8, 2013 at 5:37 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; With icc, getting errors about pointer math with (void*) types.  See attached.
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
<li><strong>Next message:</strong> <a href="13079.php">Jeff Squyres (jsquyres): "[OMPI devel] Automake/m4 issue: r29407 - trunk/oshmem/mca/atomic/mxm"</a>
<li><strong>Previous message:</strong> <a href="13077.php">Ralph Castain: "Re: [OMPI devel] Changes to classes in OMPI"</a>
<li><strong>In reply to:</strong> <a href="13076.php">Mike Dubman: "Re: [OMPI devel] More oshmem compile errors"</a>
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
