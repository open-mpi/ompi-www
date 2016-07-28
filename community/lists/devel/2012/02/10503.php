<?
$subject_val = "Re: [OMPI devel] non-portable test operator in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 15:41:34 2012" -->
<!-- isoreceived="20120220204134" -->
<!-- sent="Mon, 20 Feb 2012 15:41:28 -0500" -->
<!-- isosent="20120220204128" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-portable test operator in configure" -->
<!-- id="14A0CE38-01AD-45D5-9D68-9DE7BD694E95_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F42AF5B.4020207_at_lbl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] non-portable test operator in configure<br>
<strong>From:</strong> Jeffrey Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 15:41:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10504.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10502.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10502.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10504.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10504.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
grep == configure | grep test
<br>
<p>only shows one more.  I found it in config/ompi_load_platform.m4 and fixed it on the trunk.
<br>
<p><p>On Feb 20, 2012, at 3:38 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; I am afraid that with the $with_platform instance fixed, configure on Solaris 10 gets far enough to find another problem.
</span><br>
<span class="quotelev1">&gt; I'll provide a patch once I've tracked this down. Sigh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FYI:
</span><br>
<span class="quotelev1">&gt; One can root out bashisms by using the &quot;dash&quot; shell on a Debian or Ubuntu system:
</span><br>
<span class="quotelev1">&gt; $ env CONFIG_SHELL=dash dash [path_to]/configure [options]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/20/2012 5:42 AM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Fixed -- thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 20, 2012, at 4:11 AM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Please note that &quot;==&quot; is NOT a portable binary operator for the &quot;test&quot; utility.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is supported only by the bash built-in version of &quot;test&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The correct operator is a simple &quot;=&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The following appear in the svn trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./orte/config/orte_check_alps.m4:                   AS_IF([test &quot;$orte_check_alps_pmi_happy&quot; == &quot;yes&quot; -a &quot;$orte_without_full_support&quot; = 0],
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./config/ompi_load_platform.m4:        if test &quot;$with_platform&quot; == &quot;&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The $with_platform test breaks configure fairly early on at least Solaris 10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10504.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10502.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10502.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10504.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10504.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
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
