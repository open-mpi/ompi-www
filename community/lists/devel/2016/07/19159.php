<?
$subject_val = "Re: [OMPI devel] v2.0.0rc4 is released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 01:13:00 2016" -->
<!-- isoreceived="20160707051300" -->
<!-- sent="Thu, 7 Jul 2016 14:13:02 +0900" -->
<!-- isosent="20160707051302" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v2.0.0rc4 is released" -->
<!-- id="b87134b7-e92b-b4f1-9913-2964506a4d08_at_rist.or.jp" -->
<!-- charset="utf-8" -->
<!-- inreplyto="OF7DA91232.60F6F34D-ON49257FE9.001B28AA-49257FE9.001BC2C7_at_jcity.maeda.co.jp" -->
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
<strong>Subject:</strong> Re: [OMPI devel] v2.0.0rc4 is released<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-07 01:13:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19160.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19158.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>In reply to:</strong> <a href="19158.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19160.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Reply:</strong> <a href="19160.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a warning that can be safely ignored.
<br>
<p><p>That being said, this can be seen as a false positive (unless we fix 
<br>
flex or its generated output).
<br>
<p>Also, and generally speaking, these kind of warnings is for developers 
<br>
only (e.g. end users can do nothing about that).
<br>
<p><p>That raises the question : what could/should we do ?
<br>
<p>- master filters out these false positives, should we backport this to 
<br>
v2.x ?
<br>
<p>- should we simply not check for common symbols when building from a 
<br>
tarball ?
<br>
<p><p>Cheers,
<br>
<p><p>Gilles
<br>
<p>On 7/7/2016 2:03 PM, tmishima_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; Hi Jeff, sorry for a very short report. I saw the warning below
</span><br>
<span class="quotelev1">&gt; at the end of installation of openmpi-2.0.0rc4. Is this okay?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ make install
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make  install-exec-hook
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/mishima/mis/openmpi/openmpi-pgi16.5/openmpi-2.0.0rc4'
</span><br>
<span class="quotelev1">&gt; WARNING!  Common symbols found:
</span><br>
<span class="quotelev1">&gt;            show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
</span><br>
<span class="quotelev1">&gt;            show_help_lex.o: 0000000000000008 C opal_show_help_yytext
</span><br>
<span class="quotelev1">&gt;             hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
</span><br>
<span class="quotelev1">&gt;             hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
</span><br>
<span class="quotelev1">&gt;      rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
</span><br>
<span class="quotelev1">&gt;      rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
</span><br>
<span class="quotelev1">&gt; make[3]: [install-exec-hook] Error 1 (ignored)
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mishima/mis/openmpi/openmpi-pgi16.5/openmpi-2.0.0rc4'
</span><br>
<span class="quotelev1">&gt; make[2]: Nothing to be done for `install-data-am'.
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mishima/mis/openmpi/openmpi-pgi16.5/openmpi-2.0.0rc4'
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/home/mishima/mis/openmpi/openmpi-pgi16.5/openmpi-2.0.0rc4'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Tetsuya Mishima
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2016/07/07 2:40:25&#227;&#128;&#129;&quot;devel&quot;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#175;&#227;&#128;&#140;[OMPI devel] v2.0.0rc4 is released&#227;&#128;&#141;&#227;&#129;&#167;&#230;&#155;&#184;
</span><br>
<span class="quotelev1">&gt; &#227;&#129;&#141;&#227;&#129;&#190;&#227;&#129;&#151;&#227;&#129;&#159;
</span><br>
<span class="quotelev2">&gt;&gt; While crossing our fingers and doing mystical rain dances, we're hoping
</span><br>
<span class="quotelev1">&gt; that 2.0.0rc4 is the last rc before v2.0.0 (final) is released.  Please
</span><br>
<span class="quotelev1">&gt; test!
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Changes since rc3 (the list may look long, but most are quite small
</span><br>
<span class="quotelev1">&gt; corner cases):
</span><br>
<span class="quotelev2">&gt;&gt; - Lots of threading fixes
</span><br>
<span class="quotelev2">&gt;&gt; - More fixes for the new memory patcher system
</span><br>
<span class="quotelev2">&gt;&gt; - Updates to NEWS and README
</span><br>
<span class="quotelev2">&gt;&gt; - Fixed some hcoll bugs
</span><br>
<span class="quotelev2">&gt;&gt; - Updates for external PMIx support
</span><br>
<span class="quotelev2">&gt;&gt; - PMIx direct launching fixes
</span><br>
<span class="quotelev2">&gt;&gt; - libudev fixes
</span><br>
<span class="quotelev2">&gt;&gt; - compatibility fixes with ibv_exp_*
</span><br>
<span class="quotelev2">&gt;&gt; - 32 bit compatibility fixes
</span><br>
<span class="quotelev2">&gt;&gt; - fix some powerpc issues
</span><br>
<span class="quotelev2">&gt;&gt; - various OMPIO / libnbc fixes from Lisandro Dalcin
</span><br>
<span class="quotelev2">&gt;&gt; - fix some Solaris configury patching
</span><br>
<span class="quotelev2">&gt;&gt; - fix PSM/PSM2 active state detection
</span><br>
<span class="quotelev2">&gt;&gt; - disable PSM/PSM2 signal hijacking by default
</span><br>
<span class="quotelev2">&gt;&gt; - datatype fixes
</span><br>
<span class="quotelev2">&gt;&gt; - portals4 fixes
</span><br>
<span class="quotelev2">&gt;&gt; - change ofi MTL to only use a limited set of OFI providers by default
</span><br>
<span class="quotelev2">&gt;&gt; - fix OSHMEM init error check
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19153.php">http://www.open-mpi.org/community/lists/devel/2016/07/19153.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19158.php">http://www.open-mpi.org/community/lists/devel/2016/07/19158.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19160.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19158.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>In reply to:</strong> <a href="19158.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19160.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Reply:</strong> <a href="19160.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
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
