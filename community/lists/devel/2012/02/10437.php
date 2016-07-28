<?
$subject_val = "[OMPI devel] libevent build fails when configured with --disable-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 16:58:49 2012" -->
<!-- isoreceived="20120215215849" -->
<!-- sent="Wed, 15 Feb 2012 13:58:30 -0800" -->
<!-- isosent="20120215215830" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] libevent build fails when configured with --disable-hwloc" -->
<!-- id="4F3C2A86.60104_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3C20BC.7020507_at_lbl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] libevent build fails when configured with --disable-hwloc<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 16:58:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10436.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10436.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here is a bit more on this.
<br>
When I configure w/ only a --prefix and CFLAGS=-save-temps, I can 
<br>
examine libevent2013_module.i which contains the following:
<br>
<p># 7 &quot;../../../../../opal/mca/event/libevent2013/libevent2013_module.c&quot; 2
<br>
# 1 
<br>
&quot;../../../../opal/mca/hwloc/hwloc132/hwloc/include/private/autogen/config.h&quot; 
<br>
1
<br>
# 8 &quot;../../../../../opal/mca/event/libevent2013/libevent2013_module.c&quot; 2
<br>
<p>What that says is that the '#include &quot;config.h&quot;' on line 7 of 
<br>
libevent2013_module.c has included hwloc's config.h, as I had claimed 
<br>
earlier (and this was much easier than manually traversing the -I list 
<br>
as I had done before).
<br>
<p>This is a VPATH build from a trunk tarball (1.7a1r25927).
<br>
Perhaps Ralph could not reproduce because of a difference between svn 
<br>
and tarball, such as autotools versions, or use of a non-VPATH build?
<br>
<p>For me there is a generated
<br>
&nbsp;&nbsp;&nbsp;&nbsp;BLDDIR/opal/mca/event/libevent2013/libevent/config.h
<br>
but that directory does NOT appear in the -I's, though the $(srcdir) 
<br>
version does.
<br>
So, I suspect a non-VPATH build would work when configured with 
<br>
--without-hwloc
<br>
<p>Below is a reformatted version of the compile command from &quot;make V=1&quot;.
<br>
I've marked two things:
<br>
1 = the hwloc directory from whence config.h is being included
<br>
2 = two instances of $(srcdir)/libevent (key: 5*&quot;../&quot;  = srcdir, 4*&quot;../&quot; 
<br>
= blddir)
<br>
<p><span class="quotelev1">&gt; gcc     -DHAVE_CONFIG_H
</span><br>
<span class="quotelev1">&gt;         -I.
</span><br>
<span class="quotelev1">&gt;         -I../../../../../opal/mca/event/libevent2013
</span><br>
<span class="quotelev1">&gt;         -I../../../../opal/include
</span><br>
<span class="quotelev1">&gt;         -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt;         -I../../../../ompi/include
</span><br>
<span class="quotelev1">&gt; 1-&gt;     
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc132/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt;         -I../../../../opal/mca/hwloc/hwloc132/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; 2-&gt;     -I../../../../../opal/mca/event/libevent2013/libevent
</span><br>
<span class="quotelev1">&gt;         -I../../../../../opal/mca/event/libevent2013/libevent/include
</span><br>
<span class="quotelev1">&gt;         -I./libevent/include
</span><br>
<span class="quotelev1">&gt;         -I../../../../../opal/mca/event/libevent2013/libevent/compat
</span><br>
<span class="quotelev1">&gt;         -I../../../../..
</span><br>
<span class="quotelev1">&gt;         -I../../../..
</span><br>
<span class="quotelev1">&gt;         -I../../../../../opal/include
</span><br>
<span class="quotelev1">&gt;         -I../../../../../orte/include
</span><br>
<span class="quotelev1">&gt;         -I../../../../../ompi/include
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.7a1r25927/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.7a1r25927/BLD-with/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev1">&gt; 2-&gt;      
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.7a1r25927/opal/mca/event/libevent2013/libevent
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.7a1r25927/opal/mca/event/libevent2013/libevent/include
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.7a1r25927/BLD-with/opal/mca/event/libevent2013/libevent/include
</span><br>
<span class="quotelev1">&gt;         -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt;         -I/usr/include/infiniband
</span><br>
<span class="quotelev1">&gt;         -O3 -DNDEBUG -save-temps -finline-functions -fno-strict-aliasing
</span><br>
<span class="quotelev1">&gt;         -pthread
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt; -I/home/phargrov/OMPI/openmpi-1.7a1r25927/opal/mca/hwloc/hwloc132/hwloc/include
</span><br>
<span class="quotelev1">&gt;         -MT libevent2013_module.lo -MD -MP -MF 
</span><br>
<span class="quotelev1">&gt; .deps/libevent2013_module.Tpo
</span><br>
<span class="quotelev1">&gt;         -c 
</span><br>
<span class="quotelev1">&gt; ../../../../../opal/mca/event/libevent2013/libevent2013_module.c
</span><br>
<span class="quotelev1">&gt;         -fPIC -DPIC -o .libs/libevent2013_module.o
</span><br>
<p><p>-Paul
<br>
<p>On 2/15/2012 1:16 PM, Paul H. Hargrove wrote:
<br>
<span class="quotelev1">&gt; Thanks, Ralph.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a little deficient in the autotools department.
</span><br>
<span class="quotelev1">&gt; So, I will probably only be able to retest after a new trunk tarball 
</span><br>
<span class="quotelev1">&gt; is generated tonight.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the meantime I might be able to get more info on the config.h problem.
</span><br>
<span class="quotelev1">&gt; If I add -save-temps to CFLAGS I should be able to examine the .i file 
</span><br>
<span class="quotelev1">&gt; w/o and w/ --disable-hwloc.
</span><br>
<span class="quotelev1">&gt; That will either prove or disprove what I've claimed is happening.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/15/2012 5:47 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Built on Linux --without-hwloc as well, with the fix.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Wed, Feb 15, 2012 at 3:13 AM, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Hi Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     The rank_file component should not attempt to build if
</span><br>
<span class="quotelev2">&gt;&gt;     --without-hwloc is given - I've fixed that now. Thanks for
</span><br>
<span class="quotelev2">&gt;&gt;     reporting it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     With that fix, I was able to build the trunk on Mac - testing
</span><br>
<span class="quotelev2">&gt;&gt;     Linux now. I haven't checked for the config.h confusion you
</span><br>
<span class="quotelev2">&gt;&gt;     report, though - just noting that it built.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. HargrovePHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10437/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10436.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10436.php">Paul H. Hargrove: "Re: [OMPI devel] trunk build failed when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
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
