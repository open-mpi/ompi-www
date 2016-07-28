<?
$subject_val = "Re: [OMPI devel] autogen.sh generates broken configure onFreeBSD-8.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 10:13:50 2011" -->
<!-- isoreceived="20111221151350" -->
<!-- sent="Wed, 21 Dec 2011 10:13:38 -0500" -->
<!-- isosent="20111221151338" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen.sh generates broken configure onFreeBSD-8.2" -->
<!-- id="7390612C-F2A1-4B38-A7DE-2160247692FE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EF1E1E9.7020509_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autogen.sh generates broken configure onFreeBSD-8.2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 10:13:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10198.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10196.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: tests on linux non-x86"</a>
<li><strong>In reply to:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10198.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Reply:</strong> <a href="10198.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Don't need to re-run autogen if you edit a make file.am. 
<br>
<p>To avoid older config.foo files, you might be able to edit configur directly, or upgrade Autotools...?  I am specifically wondering if the config.guess issues you ran into are from te results that we return from our config.foo files or the ones from your Autotools. 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Dec 21, 2011, at 8:41 AM, &quot;Paul H. Hargrove&quot; &lt;PHHargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I only ran autogen after I had edited a Makefile.am or a .m4 file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/21/2011 4:58 AM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Paul -
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Are you running autogen from the tarballs in your testing?  You probably shouldn't - we have users just run configure and make. We also bootstrap the tarballs w the most recent config.sub and .guess (i.e., more recent than what comes w the most recent Autotools).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li><strong>Next message:</strong> <a href="10198.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10196.php">Paul H. Hargrove: "[OMPI devel] openmpi-1.5.5rc1: tests on linux non-x86"</a>
<li><strong>In reply to:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10198.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Reply:</strong> <a href="10198.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
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
