<?
$subject_val = "Re: [OMPI devel] v2.0.0rc4 is released";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 01:03:14 2016" -->
<!-- isoreceived="20160707050314" -->
<!-- sent="Thu, 7 Jul 2016 14:03:02 +0900" -->
<!-- isosent="20160707050302" -->
<!-- name="tmishima_at_[hidden]" -->
<!-- email="tmishima_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] v2.0.0rc4 is released" -->
<!-- id="OF7DA91232.60F6F34D-ON49257FE9.001B28AA-49257FE9.001BC2C7_at_jcity.maeda.co.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="40611C17-CB59-44DF-8B29-C9ABC8F5ACC6_at_cisco.com" -->
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
<strong>From:</strong> <a href="mailto:tmishima_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20v2.0.0rc4%20is%20released"><em>tmishima_at_[hidden]</em></a><br>
<strong>Date:</strong> 2016-07-07 01:03:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19159.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19157.php">Paul Hargrove: "[OMPI devel] [2.0.0rc4] check failure with Linux Studio Compilers and -m32"</a>
<li><strong>In reply to:</strong> <a href="19153.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0.0rc4 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19159.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Reply:</strong> <a href="19159.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Reply:</strong> <a href="19162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, sorry for a very short report. I saw the warning below
<br>
at the end of installation of openmpi-2.0.0rc4. Is this okay?
<br>

<br>
$ make install
<br>
...
<br>
make  install-exec-hook
<br>
make[3]: Entering directory
<br>
`/home/mishima/mis/openmpi/openmpi-pgi16.5/openmpi-2.0.0rc4'
<br>
WARNING!  Common symbols found:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000004 C opal_show_help_yyleng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show_help_lex.o: 0000000000000008 C opal_show_help_yytext
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000004 C orte_util_hostfile_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hostfile_lex.o: 0000000000000008 C orte_util_hostfile_text
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000004 C orte_rmaps_rank_file_leng
<br>
&nbsp;&nbsp;&nbsp;&nbsp;rmaps_rank_file_lex.o: 0000000000000008 C orte_rmaps_rank_file_text
<br>
make[3]: [install-exec-hook] Error 1 (ignored)
<br>
make[3]: Leaving directory
<br>
`/home/mishima/mis/openmpi/openmpi-pgi16.5/openmpi-2.0.0rc4'
<br>
make[2]: Nothing to be done for `install-data-am'.
<br>
make[2]: Leaving directory
<br>
`/home/mishima/mis/openmpi/openmpi-pgi16.5/openmpi-2.0.0rc4'
<br>
make[1]: Leaving directory
<br>
`/home/mishima/mis/openmpi/openmpi-pgi16.5/openmpi-2.0.0rc4'
<br>

<br>
Regards,
<br>
Tetsuya Mishima
<br>

<br>
2016/07/07 2:40:25&#227;&#128;&#129;&quot;devel&quot;&#227;&#129;&#149;&#227;&#130;&#147;&#227;&#129;&#175;&#227;&#128;&#140;[OMPI devel] v2.0.0rc4 is released&#227;&#128;&#141;&#227;&#129;&#167;&#230;&#155;&#184;
<br>
&#227;&#129;&#141;&#227;&#129;&#190;&#227;&#129;&#151;&#227;&#129;&#159;
<br>
<span class="quotelev1">&gt; While crossing our fingers and doing mystical rain dances, we're hoping
</span><br>
that 2.0.0rc4 is the last rc before v2.0.0 (final) is released.  Please
<br>
test!
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://www.open-mpi.org/software/ompi/v2.x/">https://www.open-mpi.org/software/ompi/v2.x/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Changes since rc3 (the list may look long, but most are quite small
</span><br>
corner cases):
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Lots of threading fixes
</span><br>
<span class="quotelev1">&gt; - More fixes for the new memory patcher system
</span><br>
<span class="quotelev1">&gt; - Updates to NEWS and README
</span><br>
<span class="quotelev1">&gt; - Fixed some hcoll bugs
</span><br>
<span class="quotelev1">&gt; - Updates for external PMIx support
</span><br>
<span class="quotelev1">&gt; - PMIx direct launching fixes
</span><br>
<span class="quotelev1">&gt; - libudev fixes
</span><br>
<span class="quotelev1">&gt; - compatibility fixes with ibv_exp_*
</span><br>
<span class="quotelev1">&gt; - 32 bit compatibility fixes
</span><br>
<span class="quotelev1">&gt; - fix some powerpc issues
</span><br>
<span class="quotelev1">&gt; - various OMPIO / libnbc fixes from Lisandro Dalcin
</span><br>
<span class="quotelev1">&gt; - fix some Solaris configury patching
</span><br>
<span class="quotelev1">&gt; - fix PSM/PSM2 active state detection
</span><br>
<span class="quotelev1">&gt; - disable PSM/PSM2 signal hijacking by default
</span><br>
<span class="quotelev1">&gt; - datatype fixes
</span><br>
<span class="quotelev1">&gt; - portals4 fixes
</span><br>
<span class="quotelev1">&gt; - change ofi MTL to only use a limited set of OFI providers by default
</span><br>
<span class="quotelev1">&gt; - fix OSHMEM init error check
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
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<a href="http://www.open-mpi.org/community/lists/devel/2016/07/19153.php">http://www.open-mpi.org/community/lists/devel/2016/07/19153.php</a><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19159.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Previous message:</strong> <a href="19157.php">Paul Hargrove: "[OMPI devel] [2.0.0rc4] check failure with Linux Studio Compilers and -m32"</a>
<li><strong>In reply to:</strong> <a href="19153.php">Jeff Squyres (jsquyres): "[OMPI devel] v2.0.0rc4 is released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19159.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Reply:</strong> <a href="19159.php">Gilles Gouaillardet: "Re: [OMPI devel] v2.0.0rc4 is released"</a>
<li><strong>Reply:</strong> <a href="19162.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] v2.0.0rc4 is released"</a>
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
