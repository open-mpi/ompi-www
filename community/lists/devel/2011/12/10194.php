<?
$subject_val = "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 21 07:58:17 2011" -->
<!-- isoreceived="20111221125817" -->
<!-- sent="Wed, 21 Dec 2011 07:58:11 -0500" -->
<!-- isosent="20111221125811" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2" -->
<!-- id="35090C72-FDDD-41C1-9074-6B15CC737326_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EF14A84.6000309_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-21 07:58:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10193.php">TERRY DONTJE: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>In reply to:</strong> <a href="10191.php">Paul H. Hargrove: "[OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Reply:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul -
<br>
<p>Are you running autogen from the tarballs in your testing?  You probably shouldn't - we have users just run configure and make. We also bootstrap the tarballs w the most recent config.sub and .guess (i.e., more recent than what comes w the most recent Autotools). 
<br>
<p>Sent from my phone. No type good. 
<br>
<p>On Dec 20, 2011, at 9:55 PM, &quot;Paul H. Hargrove&quot; &lt;PHHargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; While dealing w/ GNU-vs-Berkeley Make issues, mentioned in passing that I wasn't able to autogen on my FreeBSD tester because the resulting configure failed.  The specific failure I encountered was:
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: No atomic primitives available for amd64-unknown-freebsd8.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The problem boils down to the difference in the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; $ /usr/local/share/autoconf-2.68/config.guess
</span><br>
<span class="quotelev2">&gt;&gt; amd64-unknown-freebsd8.2
</span><br>
<span class="quotelev2">&gt;&gt; $ openmpi-1.5.5rc1/config/config.guess
</span><br>
<span class="quotelev2">&gt;&gt; x86_64-unknown-freebsd8.2
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These differ in the arch identifier, which then causes (at least) opal/config/opal_config_asm.m4 to decide there is no atomics support for the (unknown) architecture.  The included hwloc also appears unhappy w/ arch=amd64, but at least that is non-fatal.  I cannot (yet?) say what else is broken due to this disagreement in system tuple.  I can say that adding &quot;|amd64-*&quot; in the appropriate spot in opal/config/opal_config_asm.m4 is sufficient to get past the configure failure.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The basic problem is that this system's config.guess is ancient (timestamp='2003-07-02') despite the recent autoconf-2.68.
</span><br>
<span class="quotelev1">&gt; I suggest that autogen.sh should include logic to keep the NEWER of the config/config.guess and the one that &quot;automake --copy&quot; wishes to install.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; While looking into this I also noted something &quot;odd&quot; in autogen.sh:
</span><br>
<span class="quotelev1">&gt; Why is ompi_autoconf_version=&quot;2.59&quot; when there is ALSO a check for 2.60 or later?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that I don't think this is worth fixing for 1.5.5.
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
<li><strong>Next message:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Previous message:</strong> <a href="10193.php">TERRY DONTJE: "Re: [OMPI devel] missing file when running autogen - ALSO in 1.4.5rc1"</a>
<li><strong>In reply to:</strong> <a href="10191.php">Paul H. Hargrove: "[OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
<li><strong>Reply:</strong> <a href="10195.php">Paul H. Hargrove: "Re: [OMPI devel] autogen.sh generates broken configure on FreeBSD-8.2"</a>
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
