<?
$subject_val = "Re: [OMPI devel] non-portable test operator in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 08:42:42 2012" -->
<!-- isoreceived="20120220134242" -->
<!-- sent="Mon, 20 Feb 2012 08:42:36 -0500" -->
<!-- isosent="20120220134236" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-portable test operator in configure" -->
<!-- id="E3472717-846C-45E0-BF52-B6205E6DBDB4_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F420E47.5070206_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-20 08:42:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10497.php">Jeffrey Squyres: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10494.php">Paul H. Hargrove: "[OMPI devel] non-portable test operator in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10502.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10502.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed -- thanks!
<br>
<p>On Feb 20, 2012, at 4:11 AM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Please note that &quot;==&quot; is NOT a portable binary operator for the &quot;test&quot; utility.
</span><br>
<span class="quotelev1">&gt; It is supported only by the bash built-in version of &quot;test&quot;.
</span><br>
<span class="quotelev1">&gt; The correct operator is a simple &quot;=&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The following appear in the svn trunk
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./orte/config/orte_check_alps.m4:                   AS_IF([test &quot;$orte_check_alps_pmi_happy&quot; == &quot;yes&quot; -a &quot;$orte_without_full_support&quot; = 0],
</span><br>
<span class="quotelev1">&gt; ./config/ompi_load_platform.m4:        if test &quot;$with_platform&quot; == &quot;&quot; ; then
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The $with_platform test breaks configure fairly early on at least Solaris 10.
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
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10497.php">Jeffrey Squyres: "Re: [OMPI devel] trunk build failure on OpenBSD-5.0 [SOLVED/PATCH]"</a>
<li><strong>Previous message:</strong> <a href="10495.php">Matthias Jurenz: "Re: [OMPI devel] poor btl sm latency"</a>
<li><strong>In reply to:</strong> <a href="10494.php">Paul H. Hargrove: "[OMPI devel] non-portable test operator in configure"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10502.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>Reply:</strong> <a href="10502.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
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
