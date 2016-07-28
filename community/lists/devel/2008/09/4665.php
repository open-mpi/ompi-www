<?
$subject_val = "Re: [OMPI devel] Upgrade GNU auto tools?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 13:26:41 2008" -->
<!-- isoreceived="20080919172641" -->
<!-- sent="Fri, 19 Sep 2008 19:26:25 +0200" -->
<!-- isosent="20080919172625" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Upgrade GNU auto tools?" -->
<!-- id="20080919172624.GB27073_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20B47902-D529-4F85-A940-3B65366B3DE9_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Upgrade GNU auto tools?<br>
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 13:26:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4666.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>In reply to:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello OpenMPI developers,
<br>
<p>on Darwin/OS X, recent Libtool has some debugging symbols issue fixed.
<br>
I think that was even raised on this list a short while ago.  Also, an
<br>
issue with recent Intel compilers on Linux has been fixed.
<br>
<p>Absoft support is not yet in Libtool, but Lahey is.
<br>
<p>Hope that helps.
<br>
<p>Cheers,
<br>
Ralf
<br>
<p>* Jeff Squyres wrote on Fri, Sep 19, 2008 at 04:07:02PM CEST:
<br>
<span class="quotelev1">&gt; Yep; there may be no real specific benefit, but it's good to get the  
</span><br>
<span class="quotelev1">&gt; most recent versions for a release branch before we freeze it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It *may* have fixed some Absoft compiler issues; I'm checking with  
</span><br>
<span class="quotelev1">&gt; Absoft on this (I didn't see anything specific about it in the release  
</span><br>
<span class="quotelev1">&gt; notes, and the data is not entirely clear because a few things changed  
</span><br>
<span class="quotelev1">&gt; in Absoft's MTT setup right around the same time).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2008, at 10:04 AM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been using these versions for some time, basically from the date 
</span><br>
<span class="quotelev2">&gt;&gt; they get released. So far, no issues have been raised. However, I do 
</span><br>
<span class="quotelev2">&gt;&gt; not see any benefit with these new versions (on Linux and Mac OS X).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 19, 2008, at 9:56 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Just an FYI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Last night I switched the nightly tarball creation for the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trunk and v1.3 to use the latest autoconf and libtool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; releases.  AFAIK, everything worked fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, these are the versions of the various gnu tools
</span><br>
<span class="quotelev3">&gt;&gt;&gt; we are currently using:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m4-1.4.11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; autoconf-2.63
</span><br>
<span class="quotelev3">&gt;&gt;&gt; automake-1.10.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libtool-2.2.6a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may want to upgrade your local installs of these for
</span><br>
<span class="quotelev3">&gt;&gt;&gt; your own development work so we are all on the same version.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, Sep 18, 2008 at 8:24 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Autoconf and Libtool released updates recently (to v2.63 and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v2.2.6a,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; respectively).  I have tested these versions with a local trunk  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checkout and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; they seem to work fine.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Any objections to moving the nightly trunk and v1.3 tarballs to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; versions?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; m4=m4-1.4.11
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ac=autoconf-2.63
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; am=automake-1.10.1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; lt=libtool-2.2.6a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (we're still pre-1.3 lockdown, so I figured it was ok to move)
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4666.php">Aurélien Bouteiller: "Re: [OMPI devel] gdb libmpi.dylib on Leopard"</a>
<li><strong>Previous message:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>In reply to:</strong> <a href="4664.php">Jeff Squyres: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
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
