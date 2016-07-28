<?
$subject_val = "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 15 21:52:54 2012" -->
<!-- isoreceived="20120216025254" -->
<!-- sent="Wed, 15 Feb 2012 18:52:49 -0800" -->
<!-- isosent="20120216025249" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libevent build fails when configured with --disable-hwloc" -->
<!-- id="CAMD57ocQ1jFVUTbUzQdD3658fX=7XKECAtKRj-MZ6ap4HO9rYg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4F3C2EE6.807_at_lbl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-15 21:52:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10441.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10439.php">Paul H. Hargrove: "[OMPI devel] opal_path_nfs test failure on NFS4 [w/ PATCH]"</a>
<li><strong>In reply to:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10441.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10441.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks Paul. I modified the patch a bit to silence some warnings, but added
<br>
it to the trunk.
<br>
<p><p>On Wed, Feb 15, 2012 at 2:17 PM, Paul H. Hargrove &lt;PHHargrove_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; The following 1-line change resolves the problem for me, and I see no
</span><br>
<span class="quotelev1">&gt; potential down-side to it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.7a1r25927/opal/mca/**event/libevent2013/**libevent2013_module.c~
</span><br>
<span class="quotelev1">&gt;      2012-02-15 14:11:22.274734667 -0800
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.7a1r25927/opal/mca/**event/libevent2013/**libevent2013_module.c
</span><br>
<span class="quotelev1">&gt;       2012-02-15 14:11:25.183478598 -0800
</span><br>
<span class="quotelev1">&gt; @@ -4,7 +4,7 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev1">&gt;  #include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;config.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;libevent/config.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt;  #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/15/2012 1:58 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is a bit more on this.
</span><br>
<span class="quotelev2">&gt;&gt; When I configure w/ only a --prefix and CFLAGS=-save-temps, I can examine
</span><br>
<span class="quotelev2">&gt;&gt; libevent2013_module.i which contains the following:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; # 7 &quot;../../../../../opal/mca/**event/libevent2013/**libevent2013_module.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt; # 1 &quot;../../../../opal/mca/hwloc/**hwloc132/hwloc/include/**private/autogen/config.h&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 1
</span><br>
<span class="quotelev2">&gt;&gt; # 8 &quot;../../../../../opal/mca/**event/libevent2013/**libevent2013_module.c&quot;
</span><br>
<span class="quotelev2">&gt;&gt; 2
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What that says is that the '#include &quot;config.h&quot;' on line 7 of
</span><br>
<span class="quotelev2">&gt;&gt; libevent2013_module.c has included hwloc's config.h, as I had claimed
</span><br>
<span class="quotelev2">&gt;&gt; earlier (and this was much easier than manually traversing the -I list as I
</span><br>
<span class="quotelev2">&gt;&gt; had done before).
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
<span class="quotelev1">&gt; ______________________________**_________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/**mailman/listinfo.cgi/devel<http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10440/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10441.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Previous message:</strong> <a href="10439.php">Paul H. Hargrove: "[OMPI devel] opal_path_nfs test failure on NFS4 [w/ PATCH]"</a>
<li><strong>In reply to:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10441.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<li><strong>Reply:</strong> <a href="10441.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
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
