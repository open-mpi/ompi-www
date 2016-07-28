<?
$subject_val = "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 23 12:58:57 2010" -->
<!-- isoreceived="20100223175857" -->
<!-- sent="Tue, 23 Feb 2010 12:58:51 -0500" -->
<!-- isosent="20100223175851" -->
<!-- name="Graham, Richard L." -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
<!-- id="236B18D117B37C449E470367EFCEC00303B6F146777E_at_EXCHMB.ornl.gov" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning" -->
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
<strong>From:</strong> Graham, Richard L. (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-23 12:58:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7468.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7466.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Maybe in reply to:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7468.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7468.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will we still have the option to build individual libraries, is we opt for this ?
<br>
<p>Rich
<br>
<p>----- Original Message -----
<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Tue Feb 23 12:31:20 2010
<br>
Subject: Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning
<br>
<p>No one has opposed the &quot;1 big libmpi&quot; proposal from a week ago, and I brought it up on the call again today to ensure that people had an opportunity to oppose the idea.  No one did, so I plan to bring this into the trunk in the near future.  
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
<span class="quotelev1">&gt; Centro Internacional de M&#195;&#169;todos Computacionales en Ingenier&#195;&#173;a (CIMEC)
</span><br>
<span class="quotelev1">&gt; Instituto de Desarrollo Tecnol&#195;&#179;gico para la Industria Qu&#195;&#173;mica (INTEC)
</span><br>
<span class="quotelev1">&gt; Consejo Nacional de Investigaciones Cient&#195;&#173;ficas y T&#195;&#169;cnicas (CONICET)
</span><br>
<span class="quotelev1">&gt; PTLC - G&#195;&#188;emes 3450, (3000) Santa Fe, Argentina
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
_______________________________________________
devel mailing list
devel_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7468.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Previous message:</strong> <a href="7466.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Maybe in reply to:</strong> <a href="7447.php">Jeff Squyres: "[OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7468.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
<li><strong>Reply:</strong> <a href="7468.php">Jeff Squyres: "Re: [OMPI devel] RFC: ABI break between 1.4 and 1.5 / .so versioning"</a>
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
