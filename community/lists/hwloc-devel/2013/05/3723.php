<?
$subject_val = "Re: [hwloc-devel] hwloc embedding vs libltdl";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  8 02:26:53 2013" -->
<!-- isoreceived="20130508062653" -->
<!-- sent="Wed, 08 May 2013 08:26:43 +0200" -->
<!-- isosent="20130508062643" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc embedding vs libltdl" -->
<!-- id="5189F023.1050805_at_inria.fr" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F60E467_at_xmb-rcd-x01.cisco.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc embedding vs libltdl<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-08 02:26:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3724.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Previous message:</strong> <a href="3722.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5595)"</a>
<li><strong>In reply to:</strong> <a href="3718.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3727.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3727.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Le 08/05/2013 02:47, Jeff Squyres (jsquyres) a &#233;crit :
<br>
<span class="quotelev1">&gt; How's this patch?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only question I have is: how do we figure out what libraries to put in the .pc file in the --disable-shared --enable-static case?
</span><br>
<p>There should be a ltdl.pc for this. But I don't see any. Is there a
<br>
standard way to extract this line from ltdl.la ?
<br>
dependency_libs=' -ldl'
<br>
<p>How about we do not support plugins when --enable-static is given?
<br>
<p>Brice
<br>
<p><p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On May 7, 2013, at 8:24 PM, Samuel Thibault &lt;samuel.thibault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres (jsquyres), le Wed 08 May 2013 02:21:02 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 7, 2013, at 6:25 PM, Brice Goglin &lt;Brice.Goglin_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I don't have anything against this. What was the reason for not using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the default/system libltdl in OMPI? libtool was buggy when you started
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using it?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I neglected to answer this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes, plus libltdl grew new functionality that we needed (global/local symbol visibility).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We might be getting to the point soon where we can rely on the installed libltdl to be new enough everywhere, but we haven't had that conversation.
</span><br>
<span class="quotelev2">&gt;&gt; We could already check that the installed version is new enough for our
</span><br>
<span class="quotelev2">&gt;&gt; needs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Samuel
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-3723/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3724.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r5606 - trunk"</a>
<li><strong>Previous message:</strong> <a href="3722.php">MPI Team: "[hwloc-devel] Create success (hwloc r1.5.3rc1r5595)"</a>
<li><strong>In reply to:</strong> <a href="3718.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3727.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
<li><strong>Reply:</strong> <a href="3727.php">Jeff Squyres (jsquyres): "Re: [hwloc-devel] hwloc embedding vs libltdl"</a>
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
