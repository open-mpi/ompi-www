<?
$subject_val = "Re: [OMPI devel] non-portable test operator in configure";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 20 16:39:51 2012" -->
<!-- isoreceived="20120220213951" -->
<!-- sent="Mon, 20 Feb 2012 16:39:46 -0500" -->
<!-- isosent="20120220213946" -->
<!-- name="Jeffrey Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] non-portable test operator in configure" -->
<!-- id="B9476D10-9E4E-45E6-9023-76394C85BD9E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4F42B752.8060207_at_lbl.gov" -->
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
<strong>Date:</strong> 2012-02-20 16:39:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10509.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10507.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10506.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Committed -- thanks.
<br>
<p>Confirmed that it's not in v1.5, too.  Just for good measure.
<br>
<p><p>On Feb 20, 2012, at 4:12 PM, Paul H. Hargrove wrote:
<br>
<p><span class="quotelev1">&gt; Not what I had expected to find, but a pretty simple fix (missing line continuation):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Index: orte/mca/ess/alps/configure.m4
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; --- orte/mca/ess/alps/configure.m4      (revision 25970)
</span><br>
<span class="quotelev1">&gt; +++ orte/mca/ess/alps/configure.m4      (working copy)
</span><br>
<span class="quotelev1">&gt; @@ -53,7 +53,7 @@
</span><br>
<span class="quotelev1">&gt;         [orte_mca_ess_alps_happy=&quot;yes&quot;],
</span><br>
<span class="quotelev1">&gt;         [orte_mca_ess_alps_happy=&quot;no&quot;])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -    AS_IF([test &quot;$orte_mca_ess_alps_happy&quot; = &quot;yes&quot; -a &quot;$orte_without_full_support&quot; = 0 -a
</span><br>
<span class="quotelev1">&gt; +    AS_IF([test &quot;$orte_mca_ess_alps_happy&quot; = &quot;yes&quot; -a &quot;$orte_without_full_support&quot; = 0 -a \
</span><br>
<span class="quotelev1">&gt;            &quot;$orte_mca_ess_alps_have_cnos&quot; = 1],
</span><br>
<span class="quotelev1">&gt;           [$1],
</span><br>
<span class="quotelev1">&gt;           [$2])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is sufficient to let &quot;dash&quot; on an Ubuntu system make it through configure.
</span><br>
<span class="quotelev1">&gt; I'll report back ASAP on my slowlaris10 results.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; NOTE: this is NOT present in the v1.5 branch (no cmr is required).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/20/2012 12:46 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Ah, ok.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 20, 2012, at 3:45 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The one in config/ompi_load_platform.m4 was on my original hit-list.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Getting PAST that one shows a new problem that appears NOT to be a &quot;==&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The autoconf manual warns about use of &quot;-a&quot; and &quot;-o&quot; together with variables that may expand to the empty string, and I suspect that is the new problem I am hitting.   I hope to know soon.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/20/2012 12:41 PM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; grep == configure | grep test
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only shows one more.  I found it in config/ompi_load_platform.m4 and fixed it on the trunk.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 20, 2012, at 3:38 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I am afraid that with the $with_platform instance fixed, configure on Solaris 10 gets far enough to find another problem.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'll provide a patch once I've tracked this down. Sigh.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FYI:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; One can root out bashisms by using the &quot;dash&quot; shell on a Debian or Ubuntu system:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $ env CONFIG_SHELL=dash dash [path_to]/configure [options]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On 2/20/2012 5:42 AM, Jeffrey Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Fixed -- thanks!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Feb 20, 2012, at 4:11 AM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Please note that &quot;==&quot; is NOT a portable binary operator for the &quot;test&quot; utility.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; It is supported only by the bash built-in version of &quot;test&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The correct operator is a simple &quot;=&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The following appear in the svn trunk
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./orte/config/orte_check_alps.m4:                   AS_IF([test &quot;$orte_check_alps_pmi_happy&quot; == &quot;yes&quot; -a &quot;$orte_without_full_support&quot; = 0],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ./config/ompi_load_platform.m4:        if test &quot;$with_platform&quot; == &quot;&quot; ; then
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The $with_platform test breaks configure fairly early on at least Solaris 10.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -Paul
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HPC Research Department                   Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="10509.php">Jeffrey Squyres: "Re: [OMPI devel] [EXTERNAL] Re: trunk build failure on Altix [w/ WORK AROUND]"</a>
<li><strong>Previous message:</strong> <a href="10507.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
<li><strong>In reply to:</strong> <a href="10506.php">Paul H. Hargrove: "Re: [OMPI devel] non-portable test operator in configure"</a>
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
