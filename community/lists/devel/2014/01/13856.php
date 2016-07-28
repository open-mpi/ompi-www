<?
$subject_val = "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 22 21:31:54 2014" -->
<!-- isoreceived="20140123023154" -->
<!-- sent="Thu, 23 Jan 2014 02:31:53 +0000" -->
<!-- isosent="20140123023153" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1" -->
<!-- id="F41388A9-9505-4311-9CB6-170DEC13C00A_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA151L-DYMBtYm07Y85aM5D46T2wE9GhDsYjsqkhYrm3Hbg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-22 21:31:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13857.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13855.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>In reply to:</strong> <a href="13854.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep, this is 'zactly what I was contemplating today.  Chris from Pathscale is checking into what their symbol length limits are for me and promises to get back to me shortly.  So I'm holding off on the symbol length issues until then.
<br>
<p>But just to confirm: you said that your pathscale compilers *do* compile 1.7.3 -- including the mpi_f08 module -- with no problems?  That would be a little surprising, because those same &gt;=32 character symbol names are in 1.7.3...
<br>
<p><p>On Jan 22, 2014, at 9:20 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Jan 22, 2014 at 8:50 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Can you do me a favor and cd into ompi/mpi/fortran/use-mpi-f08 and try to manually &quot;make type_create_indexed_block_f08.lo&quot; and see if it also complains?  That's a 32 character name -- let's see if the limit is &gt;=32 or &gt;=33...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Perhaps you came to the same conclusion already, but just in case:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think the simplest approach to this problem is to include a configure check with the longest name in the interface (without regard to WHAT that length is).  This would be added to the ever-growing list of probes of BIND behavior.  If the compiler can't handle the longest name required, then it is disqualified from building use-mpi-f08.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Of course that solution adeptly avoids the &quot;Internal&quot; failure in PathScale and Open64 compilers, but a configure option to disable the F08 support addresses that and other misc cases of fortran compilers that just aren't ready for F08 (or 03 for that matter).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="13857.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 1.7.4 status update"</a>
<li><strong>Previous message:</strong> <a href="13855.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc: linux/ppc32/xlc-11.1 build failure"</a>
<li><strong>In reply to:</strong> <a href="13854.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
<li><strong>Reply:</strong> <a href="13859.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc: MPI_F08_INTERFACES_CALLBACKS build failure with PathScale 4.0.12.1"</a>
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
