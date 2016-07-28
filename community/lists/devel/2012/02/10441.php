<?
$subject_val = "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 22:16:11 2012" -->
<!-- isoreceived="20120216031611" -->
<!-- sent="Wed, 15 Feb 2012 19:15:51 -0800" -->
<!-- isosent="20120216031551" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libevent build fails when configured with --disable-hwloc" -->
<!-- id="4F3C74E7.6010404_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAMD57ocQ1jFVUTbUzQdD3658fX=7XKECAtKRj-MZ6ap4HO9rYg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] libevent build fails when configured with --disable-hwloc<br>
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 22:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10442.php">Paul H. Hargrove: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Previous message:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10450.php">Jeff Squyres: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph.
<br>
<p>Your commit missed the nightly tarball, but the configure logic to 
<br>
exclude the rank_file component was in there.
<br>
So, I dropped the new libevent2013_module.c into tonight's tarball 
<br>
(1.7a1r25937).
<br>
My build configured --without-hwloc now PASSes &quot;make all install check 
<br>
clean&quot;.
<br>
<p>And thanks for the nfs4 fix too, BTW:
<br>
$ svn praise test/util/opal_path_nfs.c | grep nfs4
<br>
&nbsp;&nbsp;25939        rhc             0 == strcasecmp (fs, &quot;nfs4&quot;) ||
<br>
<p>-Paul
<br>
<p>On 2/15/2012 6:52 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Thanks Paul. I modified the patch a bit to silence some warnings, but 
</span><br>
<span class="quotelev1">&gt; added it to the trunk.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Feb 15, 2012 at 2:17 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:PHHargrove_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     The following 1-line change resolves the problem for me, and I see
</span><br>
<span class="quotelev1">&gt;     no potential down-side to it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     ---
</span><br>
<span class="quotelev1">&gt;     openmpi-1.7a1r25927/opal/mca/event/libevent2013/libevent2013_module.c~
</span><br>
<span class="quotelev1">&gt;          2012-02-15 14:11:22.274734667 -0800
</span><br>
<span class="quotelev1">&gt;     +++
</span><br>
<span class="quotelev1">&gt;     openmpi-1.7a1r25927/opal/mca/event/libevent2013/libevent2013_module.c
</span><br>
<span class="quotelev1">&gt;           2012-02-15 14:11:25.183478598 -0800
</span><br>
<span class="quotelev1">&gt;     @@ -4,7 +4,7 @@
</span><br>
<span class="quotelev1">&gt;      */
</span><br>
<span class="quotelev1">&gt;      #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev1">&gt;      #include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev1">&gt;     -#include &quot;config.h&quot;
</span><br>
<span class="quotelev1">&gt;     +#include &quot;libevent/config.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt;      #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 2/15/2012 1:58 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Here is a bit more on this.
</span><br>
<span class="quotelev1">&gt;         When I configure w/ only a --prefix and CFLAGS=-save-temps, I
</span><br>
<span class="quotelev1">&gt;         can examine libevent2013_module.i which contains the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         # 7
</span><br>
<span class="quotelev1">&gt;         &quot;../../../../../opal/mca/event/libevent2013/libevent2013_module.c&quot;
</span><br>
<span class="quotelev1">&gt;         2
</span><br>
<span class="quotelev1">&gt;         # 1
</span><br>
<span class="quotelev1">&gt;         &quot;../../../../opal/mca/hwloc/hwloc132/hwloc/include/private/autogen/config.h&quot;
</span><br>
<span class="quotelev1">&gt;         1
</span><br>
<span class="quotelev1">&gt;         # 8
</span><br>
<span class="quotelev1">&gt;         &quot;../../../../../opal/mca/event/libevent2013/libevent2013_module.c&quot;
</span><br>
<span class="quotelev1">&gt;         2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         What that says is that the '#include &quot;config.h&quot;' on line 7 of
</span><br>
<span class="quotelev1">&gt;         libevent2013_module.c has included hwloc's config.h, as I had
</span><br>
<span class="quotelev1">&gt;         claimed earlier (and this was much easier than manually
</span><br>
<span class="quotelev1">&gt;         traversing the -I list as I had done before).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Paul H. Hargrove PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Future Technologies Group
</span><br>
<span class="quotelev1">&gt;     HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;     &lt;tel:%2B1-510-495-2352&gt;
</span><br>
<span class="quotelev1">&gt;     Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;     &lt;tel:%2B1-510-486-6900&gt;
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
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10441/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10442.php">Paul H. Hargrove: "Re: [OMPI devel] VT build failure with Clang++"</a>
<li><strong>Previous message:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>In reply to:</strong> <a href="10440.php">Ralph Castain: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10450.php">Jeff Squyres: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
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
