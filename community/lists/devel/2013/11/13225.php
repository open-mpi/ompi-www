<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 13:21:25 2013" -->
<!-- isoreceived="20131107182125" -->
<!-- sent="Thu, 7 Nov 2013 20:21:23 +0200" -->
<!-- isosent="20131107182123" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source" -->
<!-- id="CAAO1Kya=isZiTi8Qt2RQ4=8+C1PEH_hKjz=BQPGo==LAgz7Kjg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="01230914-C4CE-462C-BA98-BCEEA5242E53_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 13:21:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13226.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Previous message:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
<li><strong>In reply to:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13226.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Reply:</strong> <a href="13226.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sorry, I though it was mentioned:
<br>
motivation is to build .deb OMPI package as part of debian/ubuntu ofed
<br>
distribution.
<br>
(similar logic/rationale as buildrpm.sh which is part of OMPI)
<br>
<p><p>On Thu, Nov 7, 2013 at 8:15 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; On Nov 7, 2013, at 9:10 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; how it is differ from other related stuf kept in svn to support:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - rpm based distros? (dist/linux/)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - macos (contrib/dist/macosx-pkg/)
</span><br>
<span class="quotelev3">&gt; &gt;&gt; - __debian_stuff_could_be_here_as_well
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; That's a fair point - I'll let the folks who added those directories
</span><br>
<span class="quotelev1">&gt; chime in as to their views on the difference, if any - I think some of
</span><br>
<span class="quotelev1">&gt; those may be historical and quite stale (i.e., they may only be there
</span><br>
<span class="quotelev1">&gt; because we forgot they existed)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The RPM stuff that is there is for the official SRPM that is distributed
</span><br>
<span class="quotelev1">&gt; on www.open-mpi.org.  This SRPM is not used by any distro -- it is used
</span><br>
<span class="quotelev1">&gt; by users.  Distros have their own, very customized, RPMs for Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Mac OS X package is defunct and should probably be removed.  But it
</span><br>
<span class="quotelev1">&gt; was also used by users to install/uninstall Open MPI because OS X never
</span><br>
<span class="quotelev1">&gt; provided one themselves.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, both of these are distinguished by the fact that Debian has a
</span><br>
<span class="quotelev1">&gt; strong, community-involved Open MPI package maintainer (Sylvestre Ledru &lt;
</span><br>
<span class="quotelev1">&gt; sylvestre_at_[hidden]&gt;, who has already replied on these threads).  It
</span><br>
<span class="quotelev1">&gt; seems weird for us to supplant his package for no reason -- is this new
</span><br>
<span class="quotelev1">&gt; OMPI Debian package better than his for some reason?  I.e., what is the
</span><br>
<span class="quotelev1">&gt; exact motivation for this new Debian package?  No information has been
</span><br>
<span class="quotelev1">&gt; provided on this front, which makes me very leery of it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13226.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Previous message:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
<li><strong>In reply to:</strong> <a href="13224.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: .	contrib contrib/dist/linux contrib/dist/linux/debian	contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13226.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>Reply:</strong> <a href="13226.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
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
