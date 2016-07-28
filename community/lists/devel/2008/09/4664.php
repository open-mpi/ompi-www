<?
$subject_val = "Re: [OMPI devel] Upgrade GNU auto tools?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 19 10:07:08 2008" -->
<!-- isoreceived="20080919140708" -->
<!-- sent="Fri, 19 Sep 2008 10:07:02 -0400" -->
<!-- isosent="20080919140702" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Upgrade GNU auto tools?" -->
<!-- id="20B47902-D529-4F85-A940-3B65366B3DE9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D0971D22-3143-46FF-A27C-87B5900E7F35_at_eecs.utk.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-19 10:07:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4665.php">Ralf Wildenhues: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>Previous message:</strong> <a href="4663.php">George Bosilca: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>In reply to:</strong> <a href="4663.php">George Bosilca: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4665.php">Ralf Wildenhues: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>Reply:</strong> <a href="4665.php">Ralf Wildenhues: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yep; there may be no real specific benefit, but it's good to get the  
<br>
most recent versions for a release branch before we freeze it.
<br>
<p>It *may* have fixed some Absoft compiler issues; I'm checking with  
<br>
Absoft on this (I didn't see anything specific about it in the release  
<br>
notes, and the data is not entirely clear because a few things changed  
<br>
in Absoft's MTT setup right around the same time).
<br>
<p><p>On Sep 19, 2008, at 10:04 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; I've been using these versions for some time, basically from the  
</span><br>
<span class="quotelev1">&gt; date they get released. So far, no issues have been raised. However,  
</span><br>
<span class="quotelev1">&gt; I do not see any benefit with these new versions (on Linux and Mac  
</span><br>
<span class="quotelev1">&gt; OS X).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 19, 2008, at 9:56 AM, Tim Mattox wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just an FYI,
</span><br>
<span class="quotelev2">&gt;&gt; Last night I switched the nightly tarball creation for the
</span><br>
<span class="quotelev2">&gt;&gt; trunk and v1.3 to use the latest autoconf and libtool
</span><br>
<span class="quotelev2">&gt;&gt; releases.  AFAIK, everything worked fine.
</span><br>
<span class="quotelev2">&gt;&gt; So, these are the versions of the various gnu tools
</span><br>
<span class="quotelev2">&gt;&gt; we are currently using:
</span><br>
<span class="quotelev2">&gt;&gt; m4-1.4.11
</span><br>
<span class="quotelev2">&gt;&gt; autoconf-2.63
</span><br>
<span class="quotelev2">&gt;&gt; automake-1.10.1
</span><br>
<span class="quotelev2">&gt;&gt; libtool-2.2.6a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You may want to upgrade your local installs of these for
</span><br>
<span class="quotelev2">&gt;&gt; your own development work so we are all on the same version.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Thu, Sep 18, 2008 at 8:24 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Autoconf and Libtool released updates recently (to v2.63 and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; v2.2.6a,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; respectively).  I have tested these versions with a local trunk  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; checkout and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they seem to work fine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any objections to moving the nightly trunk and v1.3 tarballs to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these
</span><br>
<span class="quotelev3">&gt;&gt;&gt; versions?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; m4=m4-1.4.11
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ac=autoconf-2.63
</span><br>
<span class="quotelev3">&gt;&gt;&gt; am=automake-1.10.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; lt=libtool-2.2.6a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (we're still pre-1.3 lockdown, so I figured it was ok to move)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev2">&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4665.php">Ralf Wildenhues: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>Previous message:</strong> <a href="4663.php">George Bosilca: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>In reply to:</strong> <a href="4663.php">George Bosilca: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4665.php">Ralf Wildenhues: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
<li><strong>Reply:</strong> <a href="4665.php">Ralf Wildenhues: "Re: [OMPI devel] Upgrade GNU auto tools?"</a>
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
