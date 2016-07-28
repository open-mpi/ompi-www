<?
$subject_val = "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 17:10:33 2013" -->
<!-- isoreceived="20131107221033" -->
<!-- sent="Thu, 07 Nov 2013 23:10:30 +0100" -->
<!-- isosent="20131107221030" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source" -->
<!-- id="527C0FD6.8010105_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAO1KyZFiNKOhLUKsi2KS=KubeDEVRoEpo2znLLB44LQ+BK=wg_at_mail.gmail.com" -->
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
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 17:10:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13230.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 - trunk/orte/mca/rmaps/mindist"</a>
<li><strong>Previous message:</strong> <a href="13228.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>In reply to:</strong> <a href="13228.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13227.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OFED is already in Debian as far as I know. At least Roland Dreier takes
<br>
care of uploading some IB-related packages. And I didn't have any
<br>
problem getting Mellanox IB to work on Debian in the last years, but I
<br>
haven't played with Mellanox custom APIs.
<br>
<p>Brice
<br>
<p><p><p>Le 07/11/2013 20:27, Mike Dubman a &#233;crit :
<br>
<span class="quotelev1">&gt; it is for MOFED now and probably OFED later.
</span><br>
<span class="quotelev1">&gt; will rename to contrib/dist/mofed tomorrow.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Nov 7, 2013 at 9:08 PM, Jeff Squyres (jsquyres)
</span><br>
<span class="quotelev1">&gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On Nov 7, 2013, at 10:21 AM, Mike Dubman &lt;miked_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:miked_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt; sorry, I though it was mentioned:
</span><br>
<span class="quotelev2">&gt;     &gt; motivation is to build .deb OMPI package as part of
</span><br>
<span class="quotelev1">&gt;     debian/ubuntu ofed distribution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Ah, this is a fairly critical piece of information that was not
</span><br>
<span class="quotelev1">&gt;     supplied.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Is this OFED or MOFED?  I thought OFED stopped shipping MPI's a
</span><br>
<span class="quotelev1">&gt;     while ago...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     How about having a contrib/dist/[m]ofed directory, and put all
</span><br>
<span class="quotelev1">&gt;     this stuff in there?  (you may even want contrib/dist/ofed/rhel
</span><br>
<span class="quotelev1">&gt;     and contrib/dist/ofed/debian, ...etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     Jeff Squyres
</span><br>
<span class="quotelev1">&gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13229/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13230.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29644 - trunk/orte/mca/rmaps/mindist"</a>
<li><strong>Previous message:</strong> <a href="13228.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<li><strong>In reply to:</strong> <a href="13228.php">Mike Dubman: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13227.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI svn] svn:open-mpi r29633 - in trunk: . contrib contrib/dist/linux contrib/dist/linux/debian contrib/dist/linux/debian/source"</a>
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
