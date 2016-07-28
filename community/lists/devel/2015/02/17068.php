<?
$subject_val = "[OMPI devel] CORRECTION: mtl:psm configury broken (but NOT on master)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 26 19:22:15 2015" -->
<!-- isoreceived="20150227002215" -->
<!-- sent="Thu, 26 Feb 2015 16:22:13 -0800" -->
<!-- isosent="20150227002213" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] CORRECTION: mtl:psm configury broken (but NOT on master)" -->
<!-- id="CAAvDA14C0sVf5BisG437gLM6qakUMrz+wFFYZCKVXtGoOJ_ReQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] CORRECTION: mtl:psm configury broken (but NOT on master)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-26 19:22:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17069.php">Paul Hargrove: "[OMPI devel] Master warning on oob:ud w/ PGI"</a>
<li><strong>Previous message:</strong> <a href="17067.php">Paul Hargrove: "[OMPI devel] mtl:psm configury build broken in master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops, my mistake - this was *not* a test of 'master'
<br>
<p>This problem appears in Jeff's latest unofficial tarball built from his
<br>
branch &quot;feature/libltdl-must-die&quot;.
<br>
<p>I don't know if Jeff introduced the problem in his branch, or is missing
<br>
the fix.  Either way, its in your lap, Jeff.
<br>
<p>-Paul
<br>
<p>On Thu, Feb 26, 2015 at 4:12 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have been testing mtl:psm on a very old system.
</span><br>
<span class="quotelev1">&gt; Sometime pretty recently (this week I think), this started to break at
</span><br>
<span class="quotelev1">&gt; configure time:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component mtl:psm (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component mtl:psm compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-psm value... sanity check ok (/usr/local/Infinipath)
</span><br>
<span class="quotelev1">&gt; checking --with-psm-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking psm.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking psm.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for psm.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for library containing psm_finalize... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for library containing psm_finalize... (cached) no
</span><br>
<span class="quotelev1">&gt; configure: error: PSM support requested but not found.  Aborting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I strongly suspect that &quot;(cached) no&quot; is a sign of the real problem.
</span><br>
<span class="quotelev1">&gt; The test didn't find /usr/local/Infinipath/lib64/libpsm_infinipath.so.1.0
</span><br>
<span class="quotelev1">&gt; because it didn't actually try to!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For comparison here is the same section of configure output archived from
</span><br>
<span class="quotelev1">&gt; testing of 1.8.4rc5:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --- MCA component mtl:psm (m4 configuration macro)
</span><br>
<span class="quotelev1">&gt; checking for MCA component mtl:psm compile mode... dso
</span><br>
<span class="quotelev1">&gt; checking --with-psm value... sanity check ok (/usr/local/Infinipath)
</span><br>
<span class="quotelev1">&gt; checking --with-psm-libdir value... simple ok (unspecified)
</span><br>
<span class="quotelev1">&gt; checking psm.h usability... yes
</span><br>
<span class="quotelev1">&gt; checking psm.h presence... yes
</span><br>
<span class="quotelev1">&gt; checking for psm.h... yes
</span><br>
<span class="quotelev1">&gt; looking for library in lib
</span><br>
<span class="quotelev1">&gt; checking for psm_finalize in -lpsm_infinipath... no
</span><br>
<span class="quotelev1">&gt; looking for library in lib64
</span><br>
<span class="quotelev1">&gt; checking for psm_finalize in -lpsm_infinipath... yes
</span><br>
<span class="quotelev1">&gt; checking if MCA component mtl:psm can compile... yes
</span><br>
<span class="quotelev1">&gt; checking for index in endpoint array for tag MTL... 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note the &quot;yes&quot; rather than &quot;(cached) no&quot; AND the different checking
</span><br>
<span class="quotelev1">&gt; description (specific lib vs any).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17068/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17069.php">Paul Hargrove: "[OMPI devel] Master warning on oob:ud w/ PGI"</a>
<li><strong>Previous message:</strong> <a href="17067.php">Paul Hargrove: "[OMPI devel] mtl:psm configury build broken in master"</a>
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
