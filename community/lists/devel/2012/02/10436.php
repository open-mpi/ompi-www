<?
$subject_val = "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 16:16:59 2012" -->
<!-- isoreceived="20120215211659" -->
<!-- sent="Wed, 15 Feb 2012 13:16:44 -0800" -->
<!-- isosent="20120215211644" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failed when configured with --disable-hwloc" -->
<!-- id="4F3C20BC.7020507_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57od=xvb8gXpECY9+RJ4iF7FRH3_6vmdqtvLNEHBcLAqERQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failed when configured with --disable-hwloc<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 16:16:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10435.php">Jeff Squyres: "Re: [OMPI devel] Fortran improbe support"</a>
<li><strong>In reply to:</strong> <a href="10424.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph.
<br>
<p>I am a little deficient in the autotools department.
<br>
So, I will probably only be able to retest after a new trunk tarball is 
<br>
generated tonight.
<br>
<p>In the meantime I might be able to get more info on the config.h problem.
<br>
If I add -save-temps to CFLAGS I should be able to examine the .i file 
<br>
w/o and w/ --disable-hwloc.
<br>
That will either prove or disprove what I've claimed is happening.
<br>
<p>-Paul
<br>
<p>On 2/15/2012 5:47 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Built on Linux --without-hwloc as well, with the fix.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 15, 2012 at 3:13 AM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The rank_file component should not attempt to build if
</span><br>
<span class="quotelev1">&gt;     --without-hwloc is given - I've fixed that now. Thanks for
</span><br>
<span class="quotelev1">&gt;     reporting it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     With that fix, I was able to build the trunk on Mac - testing
</span><br>
<span class="quotelev1">&gt;     Linux now. I haven't checked for the config.h confusion you
</span><br>
<span class="quotelev1">&gt;     report, though - just noting that it built.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10436/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10435.php">Jeff Squyres: "Re: [OMPI devel] Fortran improbe support"</a>
<li><strong>In reply to:</strong> <a href="10424.php">Ralph Castain: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10437.php">Paul H. Hargrove: "[OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
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
