<?
$subject_val = "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  8 08:33:44 2014" -->
<!-- isoreceived="20140808123344" -->
<!-- sent="Fri, 8 Aug 2014 12:33:42 +0000" -->
<!-- isosent="20140808123342" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC" -->
<!-- id="A6600623-4BF6-407F-A0D3-9748EAAA37A4_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16KX5Dyc_EdEXLrj0UJri1SPgX5Y3af-NxAdVaAFpkL5w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-08 08:33:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15554.php">Jeff Squyres (jsquyres): "[OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Previous message:</strong> <a href="15552.php">Gilles Gouaillardet: "[OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>In reply to:</strong> <a href="15540.php">Paul Hargrove: "[OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15562.php">Ralph Castain: "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15562.php">Ralph Castain: "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Weirdness; I don't see any name like that in the SM BTL.
<br>
<p>I see it used in the OMPI layer... not sure how it's being using down in the btl SM component file...?
<br>
<p><p>On Aug 7, 2014, at 11:25 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Testing r32448 on trunk for trac issue #4834, I encounter the following which appears unrelated to #4834:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CCLD     orte-info
</span><br>
<span class="quotelev1">&gt; Undefined                       first referenced
</span><br>
<span class="quotelev1">&gt;  symbol                             in file
</span><br>
<span class="quotelev1">&gt; ompi_proc_local_proc                /sandbox/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v9-static/BLD/opal/.libs/libopen-pal.a(libmca_btl_sm_la-btl_sm_component.o)
</span><br>
<span class="quotelev1">&gt; ld: fatal: Symbol referencing errors. No output written to orte-info
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that this is *static* linking.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This appears to indicate a call from OPAL to OMPI, and I am guessing this is a side-effect of the BTL move.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Since OMPI contains (many) calls to OPAL this is a circular library dependence.
</span><br>
<span class="quotelev1">&gt; Unfortunately, some linkers process their argument strictly left-to-right.
</span><br>
<span class="quotelev1">&gt; Thus if this dependence is not eliminated one may need &quot;-lmpi -lopen-pal -lmpi&quot; (or similar) to resolve it.
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/08/15540.php">http://www.open-mpi.org/community/lists/devel/2014/08/15540.php</a>
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
<li><strong>Next message:</strong> <a href="15554.php">Jeff Squyres (jsquyres): "[OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Previous message:</strong> <a href="15552.php">Gilles Gouaillardet: "[OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>In reply to:</strong> <a href="15540.php">Paul Hargrove: "[OMPI devel] circular library dependence prevents static link on Solaris-10/SPARC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15562.php">Ralph Castain: "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
<li><strong>Reply:</strong> <a href="15562.php">Ralph Castain: "Re: [OMPI devel] circular library dependence prevents static link on	Solaris-10/SPARC"</a>
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
