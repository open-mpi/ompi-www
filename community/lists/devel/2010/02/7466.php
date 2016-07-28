<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 12:31:25 2010" -->
<!-- isoreceived="20100223173125" -->
<!-- sent="Tue, 23 Feb 2010 12:31:20 -0500" -->
<!-- isosent="20100223173120" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="7C444B01-CA2E-49EA-B4C3-CD684DC80A57_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="e7ba66e41002190715t5f3dc2crb961d30e1deb3894_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 12:31:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7465.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>In reply to:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No one has opposed the &quot;1 big libmpi&quot; proposal from a week ago, and I brought it up on the call again today to ensure that people had an opportunity to oppose the idea.  No one did, so I plan to bring this into the trunk in the near future.  
<br>
<p>Two notes:
<br>
<p>1. libopen-rte and libopen-pal will continue to be 0:0:0 for the rest of the v1.4 series.  They will be versioned starting with v1.5.0.
<br>
2. Liandro's point is a good one that we need to document what was done, and perhaps also the workaround mentioned in case someone needs it (although I don't think that we should guarantee that it works; since we're opening the floodgates of breaking ABI, other ABI-changing things may come in that may subtly or explicitly break this workaround).
<br>
<p><p>On Feb 19, 2010, at 10:15 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; On 18 February 2010 10:53, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 18, 2010, at 1:53 AM, Ralf Wildenhues wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You could probably create fake empty libopen-rte and libopen-pal stub
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libraries with 0:0:0 purely for the sake of allowing such an a.out to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; still work (on systems with versioned sonames[1]).  Since this doesn't
</span><br>
<span class="quotelev3">&gt;&gt;&gt; actually use any of the APIs from those libraries, there is no problem
</span><br>
<span class="quotelev3">&gt;&gt;&gt; here, and your 1.5 libmpi will pull in the 1:0:0 versions of the other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; two libraries.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; You get 10 &quot;evil genius&quot; points for a nifty-yet-icky solution.  :-)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't really want to continue carrying forward empty libraries just to maintain ABI.  I'm (mostly) ok with breaking ABI at a major series change (i.e., 1.5.0).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And you could add a FAQ entry or document in some place how to do this
</span><br>
<span class="quotelev1">&gt; trick, just in case a sysadmin desperately needs the hack because of
</span><br>
<span class="quotelev1">&gt; pressure from some user with ABI issues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; Centro Internacional de M&#233;todos Computacionales en Ingenier&#237;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#243;gico para la Industria Qu&#237;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#237;ficas y T&#233;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#252;emes 3450, (3000) Santa Fe, Argentina
</span><br>
<span class="quotelev1">&gt; Tel/Fax: +54-(0)342-451.1594
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
<li><strong>Next message:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7465.php">Ethan Mallove: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r22663"</a>
<li><strong>In reply to:</strong> <a href="7463.php">Lisandro Dalcin: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7467.php">Graham, Richard L.: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
