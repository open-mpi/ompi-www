<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 13:15:19 2013" -->
<!-- isoreceived="20131107181519" -->
<!-- sent="Thu, 7 Nov 2013 18:15:16 +0000" -->
<!-- isosent="20131107181516" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source" -->
<!-- id="01230914-C4CE-462C-BA98-BCEEA5242E53_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9F6C9B3B-5746-401D-AA88-B027E9466A58_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 13:15:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13225.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Previous message:</strong> <a href="13223.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>In reply to:</strong> <a href="13223.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13225.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Reply:</strong> <a href="13225.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Reply:</strong> <a href="13227.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 7, 2013, at 9:10 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; how it is differ from other related stuf kept in svn to support:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - rpm based distros? (dist/linux/)
</span><br>
<span class="quotelev2">&gt;&gt; - macos (contrib/dist/macosx-pkg/)
</span><br>
<span class="quotelev2">&gt;&gt; - __debian_stuff_could_be_here_as_well
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That's a fair point - I'll let the folks who added those directories chime in as to their views on the difference, if any - I think some of those may be historical and quite stale (i.e., they may only be there because we forgot they existed)
</span><br>
<p>The RPM stuff that is there is for the official SRPM that is distributed on www.open-mpi.org.  This SRPM is not used by any distro -- it is used by users.  Distros have their own, very customized, RPMs for Open MPI.
<br>
<p>The Mac OS X package is defunct and should probably be removed.  But it was also used by users to install/uninstall Open MPI because OS X never provided one themselves.
<br>
<p>However, both of these are distinguished by the fact that Debian has a strong, community-involved Open MPI package maintainer (Sylvestre Ledru &lt;sylvestre_at_[hidden]&gt;, who has already replied on these threads).  It seems weird for us to supplant his package for no reason -- is this new OMPI Debian package better than his for some reason?  I.e., what is the exact motivation for this new Debian package?  No information has been provided on this front, which makes me very leery of it.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13225.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Previous message:</strong> <a href="13223.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>In reply to:</strong> <a href="13223.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13225.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Reply:</strong> <a href="13225.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Reply:</strong> <a href="13227.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
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
