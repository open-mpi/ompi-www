<?
$subject_val = "Re: [OMPI devel] [v1.8] build failure with xlc-11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 16:29:49 2014" -->
<!-- isoreceived="20140809202949" -->
<!-- sent="Sat, 9 Aug 2014 13:29:30 -0700" -->
<!-- isosent="20140809202930" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [v1.8] build failure with xlc-11.1" -->
<!-- id="CAAvDA15p9NdbVSGWsV-M=dtt4UsBB0N-cm6x+kbGGmt5oAmsog_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA178dO-UYr+ZZDpFYzkGNXWArAtUOyWv6R_b=A_=CamEfg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [v1.8] build failure with xlc-11.1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 16:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15600.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<li><strong>Previous message:</strong> <a href="15598.php">Paul Hargrove: "[OMPI devel] cosmetic configure nit"</a>
<li><strong>In reply to:</strong> <a href="15597.php">Paul Hargrove: "[OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15600.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<li><strong>Reply:</strong> <a href="15600.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One note regarding my report below:
<br>
<p>I have noticed that autoconf has chosen to use &quot;$srcdir/config/compile xlc&quot;
<br>
instead of just &quot;xlc&quot; (I set CC=xlc).  I strongly suspect this is related,
<br>
and am investigating why the compile wrapper is used.  However, independent
<br>
of that there does seem to be some flaw in how the atomics are getting
<br>
built on this configuration.
<br>
<p>-Paul
<br>
<p><p>On Sat, Aug 9, 2014 at 1:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Building v1.8 nightly tarball with xlc-11.1 on a ppc64/linux platform:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in asm
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory
</span><br>
<span class="quotelev1">&gt; `/home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/BLD/opal/asm'
</span><br>
<span class="quotelev1">&gt;   CC       asm.lo
</span><br>
<span class="quotelev1">&gt; rm -f atomic-asm.S
</span><br>
<span class="quotelev1">&gt; ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
</span><br>
<span class="quotelev1">&gt;   CPPAS    atomic-asm.lo
</span><br>
<span class="quotelev1">&gt;   CCLD     libasm.la
</span><br>
<span class="quotelev1">&gt; ar: .libs/atomic-asm.o: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The related portion of the configure output:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** Assembler
</span><br>
<span class="quotelev1">&gt; checking dependency style of
</span><br>
<span class="quotelev1">&gt; /home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/openmpi-1.8.2rc4r32480/config/compile
</span><br>
<span class="quotelev1">&gt; xlc... none
</span><br>
<span class="quotelev1">&gt; checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
</span><br>
<span class="quotelev1">&gt; checking the name lister (/usr/bin/nm -B) interface... BSD nm
</span><br>
<span class="quotelev1">&gt; checking for fgrep... /bin/grep -F
</span><br>
<span class="quotelev1">&gt; checking if need to remove -g from CCASFLAGS... no
</span><br>
<span class="quotelev1">&gt; checking whether to enable smp locks... yes
</span><br>
<span class="quotelev1">&gt; checking if .proc/endp is needed... no
</span><br>
<span class="quotelev1">&gt; checking directive for setting text section... .text
</span><br>
<span class="quotelev1">&gt; checking directive for exporting symbols... .globl
</span><br>
<span class="quotelev1">&gt; checking for objdump... objdump
</span><br>
<span class="quotelev1">&gt; checking if .note.GNU-stack is needed... no
</span><br>
<span class="quotelev1">&gt; checking suffix for labels... :
</span><br>
<span class="quotelev1">&gt; checking prefix for global symbol labels...
</span><br>
<span class="quotelev1">&gt; checking prefix for lsym labels... .L
</span><br>
<span class="quotelev1">&gt; checking prefix for function in .type... @
</span><br>
<span class="quotelev1">&gt; checking if .size is needed... yes
</span><br>
<span class="quotelev1">&gt; checking if .align directive takes logarithmic value... yes
</span><br>
<span class="quotelev1">&gt; checking if PowerPC registers have r prefix... no
</span><br>
<span class="quotelev1">&gt; checking if
</span><br>
<span class="quotelev1">&gt; /home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/openmpi-1.8.2rc4r32480/config/compile
</span><br>
<span class="quotelev1">&gt; xlc supports GCC inline assembly... yes
</span><br>
<span class="quotelev1">&gt; checking if
</span><br>
<span class="quotelev1">&gt; /home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/openmpi-1.8.2rc4r32480/config/compile
</span><br>
<span class="quotelev1">&gt; xlc supports DEC inline assembly... no
</span><br>
<span class="quotelev1">&gt; checking if
</span><br>
<span class="quotelev1">&gt; /home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/openmpi-1.8.2rc4r32480/config/compile
</span><br>
<span class="quotelev1">&gt; xlc supports XLC inline assembly... no
</span><br>
<span class="quotelev1">&gt; checking for assembly format... default-.text-.globl-:--.L-_at_-1-1-0-1-0
</span><br>
<span class="quotelev1">&gt; checking for asssembly architecture... POWERPC64
</span><br>
<span class="quotelev1">&gt; checking for builtin atomics... BUILTIN_NO
</span><br>
<span class="quotelev1">&gt; checking for perl... perl
</span><br>
<span class="quotelev1">&gt; checking for pre-built assembly file... no (not in asm-data)
</span><br>
<span class="quotelev1">&gt; checking whether possible to generate assembly file... yes
</span><br>
<span class="quotelev1">&gt; checking for atomic assembly filename... atomic-local.s
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
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15599/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15600.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<li><strong>Previous message:</strong> <a href="15598.php">Paul Hargrove: "[OMPI devel] cosmetic configure nit"</a>
<li><strong>In reply to:</strong> <a href="15597.php">Paul Hargrove: "[OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15600.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<li><strong>Reply:</strong> <a href="15600.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
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
