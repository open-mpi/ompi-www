<?
$subject_val = "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 17:58:57 2010" -->
<!-- isoreceived="20100224225857" -->
<!-- sent="Wed, 24 Feb 2010 17:58:52 -0500" -->
<!-- isosent="20100224225852" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OFED 1.4.1-2ofed SRPM" -->
<!-- id="E4F504DB-C14D-4C21-AC1E-20E330CB6047_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B1F6ABB1-E317-481A-A523-A9640FABA2AD_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OFED 1.4.1-2ofed SRPM<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 17:58:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7481.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<li><strong>Previous message:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>In reply to:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 24, 2010, at 5:05 PM, Barrett, Brian W wrote:
<br>
<p><span class="quotelev2">&gt; &gt; We should record this specfile somewhere, though, just for posterity.  Two questions:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1. Should I commit this stuff in the 1.4 contrib/dist/linux branch?  (if I hear nothing back, I assume &quot;yes&quot;)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which stuff?  If it's just the updated INI file, I'd say no -- there's no need to record what OFED did to the tarball (just like we don't record what Red Hat did to the tarball).  If there were some changes to the RPM generation script which would be useful in the future (such as making it easier to dump a new INI file into the SRPM), then I would say yes.
</span><br>
<p>The stuff is a few updates to the specfile and a slightly modified buildrpm.sh script to copy 3 *.patch files to the SOURCES directory so that they can be used in Patch[012]: and %patch[012] clauses in the specfile.  I didn't bother making it generic.  These 3 patches update the .ini file included in the 1.4.1 tarball.
<br>
<p>So if it's not worthwhile, I don't need to commit this stuff.  All the INI changes are on the trunk and slated to go over to the branches; it'll just take time to get a formal release out with these patches.
<br>
<p><pre>
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
<li><strong>Next message:</strong> <a href="7481.php">Jeff Squyres: "Re: [OMPI devel] what's the relationship between proc, endpoint and btl?"</a>
<li><strong>Previous message:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
<li><strong>In reply to:</strong> <a href="7479.php">Barrett, Brian W: "Re: [OMPI devel] OFED 1.4.1-2ofed SRPM"</a>
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
