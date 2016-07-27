<?
$subject_val = "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  1 06:02:50 2012" -->
<!-- isoreceived="20120201110250" -->
<!-- sent="Wed, 1 Feb 2012 06:02:45 -0500" -->
<!-- isosent="20120201110245" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86" -->
<!-- id="1328E4EF-D011-40E9-B602-9917039629A0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F28B53F.9050003_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-01 06:02:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good to know -- thanks!
<br>
<p>(I was a little worried at first, because hwloc-1.3.1 uses a pretty recent libtool to build itself! LT 2.4)
<br>
<p><p>On Jan 31, 2012, at 10:45 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Upon further examination, I've discovered that this is HARMLESS noise.
</span><br>
<span class="quotelev1">&gt; The &quot;|| { rm &amp;&amp; ln -s }&quot; part DOES make the required symlink.
</span><br>
<span class="quotelev1">&gt; In fact, ltmain.sh has a comment on this subject:
</span><br>
<span class="quotelev1">&gt;            # Delete the old symlinks, and create new ones.
</span><br>
<span class="quotelev1">&gt;            # Try `ln -sf' first, because the `ln' binary might depend on
</span><br>
<span class="quotelev1">&gt;            # the symlink we replace!  Solaris /bin/ln does not understand -f,
</span><br>
<span class="quotelev1">&gt;            # so we also need to try rm &amp;&amp; ln -s.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for this report, which turned out NOT to be an actual problem.
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/31/2012 6:53 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The problem I described below is ALSO present in hwloc-1.4
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/31/2012 5:43 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When running &quot;make install&quot; for hwloc-1.3.1 on my Solaris-10/x86 system I am seeing multiple messages like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; libtool: install: (cd /export/home/phargrov/OMPI/hwloc-1.3.1-solaris10-x86-gcc343/INST/lib &amp;&amp; { ln -s -f libhwloc.so.4.1.4 libhwloc.so.4 || { rm -f libhwloc.so.4 &amp;&amp; ln -s libhwloc.so.4.1.4 libhwloc.so.4; }; })
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Usage: ln [-f] [-s] f1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       ln [-f] [-s] f1 f2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       ln [-f] [-s] f1 ... fn d1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is because &quot;ln -s -f&quot; is being run by libtool while &quot;ln&quot; on this platform is happy only with &quot;ln -f -s&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This sensitivity to argument order is sad, but true.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<p><p><pre>
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
<li><strong>Next message:</strong> <a href="2754.php">Brice Goglin: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on	Solaris-10/SPARC/gccfss"</a>
<li><strong>Previous message:</strong> <a href="2752.php">Jeff Squyres: "Re: [hwloc-devel] hwloc-1.3.1 &quot;gmake check&quot; failure on Solaris-10/SPARC/gccfss"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2012/01/2746.php">Paul H. Hargrove: "Re: [hwloc-devel] hwloc-1.4 libtool broken on Solaris10-x86"</a>
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
