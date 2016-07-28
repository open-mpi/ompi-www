<?
$subject_val = "Re: [OMPI devel] non-portable test operator in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 15:39:02 2012" -->
<!-- isoreceived="20120220203902" -->
<!-- sent="Mon, 20 Feb 2012 12:38:51 -0800" -->
<!-- isosent="20120220203851" -->
<!-- name="Paul H. Hargrove" -->
<!-- email="PHHargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-portable test operator in configure" -->
<!-- id="4F42AF5B.4020207_at_lbl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E3472717-846C-45E0-BF52-B6205E6DBDB4_at_cisco.com" -->
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
<strong>From:</strong> Paul H. Hargrove (<em>PHHargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-20 15:38:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10503.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>In reply to:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10503.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10503.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am afraid that with the $with_platform instance fixed, configure on 
<br>
Solaris 10 gets far enough to find another problem.
<br>
I'll provide a patch once I've tracked this down. Sigh.
<br>
<p>FYI:
<br>
One can root out bashisms by using the &quot;dash&quot; shell on a Debian or 
<br>
Ubuntu system:
<br>
$ env CONFIG_SHELL=dash dash [path_to]/configure [options]
<br>
<p>-Paul
<br>
<p><p><p>On 2/20/2012 5:42 AM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; Fixed -- thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 20, 2012, at 4:11 AM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please note that &quot;==&quot; is NOT a portable binary operator for the &quot;test&quot; utility.
</span><br>
<span class="quotelev2">&gt;&gt; It is supported only by the bash built-in version of &quot;test&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; The correct operator is a simple &quot;=&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The following appear in the svn trunk
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./orte/config/orte_check_alps.m4:                   AS_IF([test &quot;$orte_check_alps_pmi_happy&quot; == &quot;yes&quot; -a &quot;$orte_without_full_support&quot; = 0],
</span><br>
<span class="quotelev2">&gt;&gt; ./config/ompi_load_platform.m4:        if test &quot;$with_platform&quot; == &quot;&quot; ; then
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The $with_platform test breaks configure fairly early on at least Solaris 10.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Paul
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev2">&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
HPC Research Department                   Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10503.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Previous message:</strong> <a href="10501.php">Paul H. Hargrove: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>In reply to:</strong> <a href="10496.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10503.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10503.php">Jeffrey Squyres: "Re: [OMPI devel] non-portable test operator in configure"</a>
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
