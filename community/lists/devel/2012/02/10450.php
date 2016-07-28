<?
$subject_val = "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 16 07:43:43 2012" -->
<!-- isoreceived="20120216124343" -->
<!-- sent="Thu, 16 Feb 2012 07:43:38 -0500" -->
<!-- isosent="20120216124338" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] libevent build fails when configured with --disable-hwloc" -->
<!-- id="1FC69210-0E1B-4E67-AB88-3C06985BD0E9_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-16 07:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10451.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10449.php">Jeff Squyres: "[OMPI devel] svn.open-mpi.org unscheduled downtime"</a>
<li><strong>In reply to:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
/jsquyres appreciates phargroves debugging mojo
<br>
<p><p><p>On Feb 15, 2012, at 5:17 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; The following 1-line change resolves the problem for me, and I see no potential down-side to it:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --- openmpi-1.7a1r25927/opal/mca/event/libevent2013/libevent2013_module.c~      2012-02-15 14:11:22.274734667 -0800
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.7a1r25927/opal/mca/event/libevent2013/libevent2013_module.c       2012-02-15 14:11:25.183478598 -0800
</span><br>
<span class="quotelev1">&gt; @@ -4,7 +4,7 @@
</span><br>
<span class="quotelev1">&gt;  */
</span><br>
<span class="quotelev1">&gt; #include &quot;opal_config.h&quot;
</span><br>
<span class="quotelev1">&gt; #include &quot;opal/constants.h&quot;
</span><br>
<span class="quotelev1">&gt; -#include &quot;config.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;libevent/config.h&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #ifdef HAVE_SYS_TYPES_H
</span><br>
<span class="quotelev1">&gt; #include &lt;sys/types.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/15/2012 1:58 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Here is a bit more on this.
</span><br>
<span class="quotelev2">&gt;&gt; When I configure w/ only a --prefix and CFLAGS=-save-temps, I can examine libevent2013_module.i which contains the following:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; # 7 &quot;../../../../../opal/mca/event/libevent2013/libevent2013_module.c&quot; 2
</span><br>
<span class="quotelev2">&gt;&gt; # 1 &quot;../../../../opal/mca/hwloc/hwloc132/hwloc/include/private/autogen/config.h&quot; 1
</span><br>
<span class="quotelev2">&gt;&gt; # 8 &quot;../../../../../opal/mca/event/libevent2013/libevent2013_module.c&quot; 2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What that says is that the '#include &quot;config.h&quot;' on line 7 of libevent2013_module.c has included hwloc's config.h, as I had claimed earlier (and this was much easier than manually traversing the -I list as I had done before).
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
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10451.php">nadia.derbey_at_[hidden]: "Re: [OMPI devel] btl/openib: get_ib_dev_distance	doesn't	see	processes as bound if the job has been launched by srun"</a>
<li><strong>Previous message:</strong> <a href="10449.php">Jeff Squyres: "[OMPI devel] svn.open-mpi.org unscheduled downtime"</a>
<li><strong>In reply to:</strong> <a href="10438.php">Paul H. Hargrove: "Re: [OMPI devel] libevent build fails when configured with --disable-hwloc"</a>
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
