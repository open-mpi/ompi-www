<?
$subject_val = "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  9 22:15:57 2014" -->
<!-- isoreceived="20140110031557" -->
<!-- sent="Thu, 9 Jan 2014 19:15:51 -0800" -->
<!-- isosent="20140110031551" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD" -->
<!-- id="CAAvDA14j5m8pVUwYN4zZdeTzdy_rY6nX1LQi4JhG9HUFMTapCA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="ECC83A54-A36B-4BE4-BB2E-EB1745DF67B8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-09 22:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13666.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13664.php">Paul Hargrove: "[OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>In reply to:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13666.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13666.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>No joy on Solaris-10 either:
<br>
<p>&nbsp;&nbsp;CC       path.lo
<br>
&quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v8plus/openmpi-1.9a1r30215/opal/util/path.c&quot;,
<br>
line
<br>
&nbsp;478: prototype mismatch: 2 args passed, 4 expected
<br>
&quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v8plus/openmpi-1.9a1r30215/opal/util/path.c&quot;,
<br>
line
<br>
&nbsp;568: prototype mismatch: 2 args passed, 4 expected
<br>
&quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v8plus/openmpi-1.9a1r30215/opal/util/path.c&quot;,
<br>
line
<br>
&nbsp;584: improper member use: f_bavail
<br>
&quot;/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v8plus/openmpi-1.9a1r30215/opal/util/path.c&quot;,
<br>
line
<br>
&nbsp;584: improper member use: f_bavail
<br>
cc: acomp failed for
<br>
/home/hargrove/OMPI/openmpi-trunk-solaris10-sparcT2-ss12u3-v8plus/openmpi-1.9a1r30215/opa
<br>
l/util/path.c
<br>
*** Error code 1
<br>
<p>By the line numbers, the &quot;2 args passed, 2 expected&quot; refers to a call to
<br>
stafs(), which one should NOT be using on Solaris.  I've attached the
<br>
config.log to help you determine why statfs() is being selected.
<br>
<p>My Solaris-11 build stopped again on the failure to find ibv_open_device().
<br>
I am re-running w/o --enable-openib now.
<br>
<p>-Paul
<br>
<p><p><p>On Thu, Jan 9, 2014 at 1:30 PM, Jeff Squyres (jsquyres)
<br>
&lt;jsquyres_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Fixed on trunk in <a href="https://svn.open-mpi.org/trac/ompi/changeset/30198">https://svn.open-mpi.org/trac/ompi/changeset/30198</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can't test on all the kinds of systems Paul/Marco have, though -- we'll
</span><br>
<span class="quotelev1">&gt; have to see what happens when he tries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2014, at 10:36 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I fully concur - just limited by my available time to fix it. Jeff has
</span><br>
<span class="quotelev1">&gt; volunteered to step in, though.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 8, 2014, at 11:44 PM, marco atzeri &lt;marco.atzeri_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Il 1/9/2014 5:10 AM, Ralph Castain ha scritto:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Actually, as I look at it, the logic escapes me anyway. Basically, you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; only have two options - use the vfs struct for Sun, and use fs struct
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; for everything else. I'm not aware of any other choice, and indeed the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; list of all the systems for the latter actually is intended to amount
</span><br>
<span class="quotelev1">&gt; to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; &quot;anything else&quot;.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; So I just changed it to an &quot;else&quot; statement in the trunk and scheduled
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; it for 1.7.4 if it passes muster - see how this works for you.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; please note that there are other similar cases in the same file
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; in &quot;bool opal_path_nfs&quot; function at row 434 and 462
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the one at 489 is a multiple if with no default case,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; so the code will fail to perform for any architecture
</span><br>
<span class="quotelev3">&gt; &gt;&gt; no reported there, like CYGWIN, and it is very hard to notice
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In general this type of &quot;ifdefined&quot; around platform
</span><br>
<span class="quotelev3">&gt; &gt;&gt; are very bad for portability or platform evolution.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Adding a new platform will be a hell of work.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The Autoconf approach to portability &quot;should be&quot; to test
</span><br>
<span class="quotelev3">&gt; &gt;&gt; for features, not for versions or platform.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Marco
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13665/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13665/openmpi-trunk-solaris10-sparcT2-ss12u3-v8plus-config.log.bz2">openmpi-trunk-solaris10-sparcT2-ss12u3-v8plus-config.log.bz2</a>
</ul>
<!-- attachment="openmpi-trunk-solaris10-sparcT2-ss12u3-v8plus-config.log.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13666.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Previous message:</strong> <a href="13664.php">Paul Hargrove: "[OMPI devel] trunk - build failure on OpenBSD"</a>
<li><strong>In reply to:</strong> <a href="13639.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13666.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
<li><strong>Reply:</strong> <a href="13666.php">Paul Hargrove: "Re: [OMPI devel] trunk build failure on {Free,Net,Open}BSD"</a>
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
