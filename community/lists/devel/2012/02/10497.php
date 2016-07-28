<?
$subject_val = "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 10:53:35 2012" -->
<!-- isoreceived="20120220155335" -->
<!-- sent="Mon, 20 Feb 2012 10:53:29 -0500" -->
<!-- isosent="20120220155329" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]" -->
<!-- id="3EE2A4FD-E2E0-47C3-A59E-4CF0E8290D31_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4F41DAA1.5000104_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 10:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10498.php">Jeffrey Squyres: "[OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>Previous message:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10493.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Applied -- thanks!
<br>
<p>On Feb 20, 2012, at 12:31 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; The attachment adds the necessary (cached) check for aio.h before enabling fbtl:posix.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/17/2012 12:55 AM, Paul Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; OpenBSD lacks an aio.h header.
</span><br>
<span class="quotelev2">&gt;&gt; configure knows this:
</span><br>
<span class="quotelev2">&gt;&gt; $ grep aio.h configure.log 
</span><br>
<span class="quotelev2">&gt;&gt; checking aio.h usability... no
</span><br>
<span class="quotelev2">&gt;&gt; checking aio.h presence... no
</span><br>
<span class="quotelev2">&gt;&gt; checking for aio.h... no
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yet fbtl/posix is enabled, despite needing aio.h:
</span><br>
<span class="quotelev2">&gt;&gt; checking if MCA component fbtl:posix can compile... yes
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am guessing this problem will appear on any platform w/o aio.h.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think is just a simple matter of requiring OPAL_HAVE_AIO_H when &quot;checking if component fbtl:posix can compile&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          
</span><br>
<span class="quotelev1">&gt; PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;fbtl_posix_config.diff&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="10498.php">Jeffrey Squyres: "[OMPI devel] Fwd: [OMPI users] WEXITSTATUS: OpenMPI 1.5.5 RC1 doesn't build on NetBSD (and perhaps other BSDs)"</a>
<li><strong>Previous message:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10493.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
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
