<?
$subject_val = "Re: [OMPI devel] v2.0.0rc4 is released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 11:21:11 2016" -->
<!-- isoreceived="20160707152111" -->
<!-- sent="Thu, 7 Jul 2016 15:21:08 +0000" -->
<!-- isosent="20160707152108" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v2.0.0rc4 is released" -->
<!-- id="ED26E72A-F73B-4844-A374-A25F6135D2C4_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-07-07 11:21:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19163.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Previous message:</strong> <a href="19161.php">Takashi Sato: "[OMPI devel] Caught ibv_create_ah error in executing multi-node MPI program with openmpi-1.10.3"</a>
<li><strong>In reply to:</strong> <a href="19158.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like we forgot to move <a href="https://github.com/open-mpi/ompi/commit/62c45e4a">https://github.com/open-mpi/ompi/commit/62c45e4a</a> to v2.x (i.e., the functionality that only displays the common symbols warning if you have a .git directory).
<br>

<br>

<br>

<br>
<span class="quotelev1">&gt; On Jul 7, 2016, at 1:03 AM, tmishima_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<span class="quotelev1">&gt;          show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
</span><br>
<span class="quotelev1">&gt;          show_help_lex.o: 0000000000000008 C opal_show_help_yytext
</span><br>
<span class="quotelev1">&gt;           hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
</span><br>
<span class="quotelev1">&gt;           hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
</span><br>
<span class="quotelev1">&gt;    rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
</span><br>
<span class="quotelev1">&gt;    rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Changes since rc3 (the list may look long, but most are quite small
</span><br>
<span class="quotelev1">&gt; corner cases):
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19153.php">http://www.open-mpi.org/community/lists/devel/2016/07/19153.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/07/19158.php">http://www.open-mpi.org/community/lists/devel/2016/07/19158.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19163.php">Josh Hursey: "Re: [OMPI devel] [2.0.0rc4] dlopen_test crash with xlc"</a>
<li><strong>Previous message:</strong> <a href="19161.php">Takashi Sato: "[OMPI devel] Caught ibv_create_ah error in executing multi-node MPI program with openmpi-1.10.3"</a>
<li><strong>In reply to:</strong> <a href="19158.php">tmishima_at_[hidden]: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
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
