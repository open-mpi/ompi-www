<?
$subject_val = "[OMPI devel] [v1.8] build failure with xlc-11.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Aug  9 16:22:41 2014" -->
<!-- isoreceived="20140809202241" -->
<!-- sent="Sat, 9 Aug 2014 13:22:40 -0700" -->
<!-- isosent="20140809202240" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [v1.8] build failure with xlc-11.1" -->
<!-- id="CAAvDA178dO-UYr+ZZDpFYzkGNXWArAtUOyWv6R_b=A_=CamEfg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] [v1.8] build failure with xlc-11.1<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-09 16:22:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15598.php">Paul Hargrove: "[OMPI devel] cosmetic configure nit"</a>
<li><strong>Previous message:</strong> <a href="15596.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15599.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<li><strong>Reply:</strong> <a href="15599.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building v1.8 nightly tarball with xlc-11.1 on a ppc64/linux platform:
<br>
<p>Making all in asm
<br>
make[2]: Entering directory
<br>
`/home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/BLD/opal/asm'
<br>
&nbsp;&nbsp;CC       asm.lo
<br>
rm -f atomic-asm.S
<br>
ln -s &quot;../../opal/asm/generated/atomic-local.s&quot; atomic-asm.S
<br>
&nbsp;&nbsp;CPPAS    atomic-asm.lo
<br>
&nbsp;&nbsp;CCLD     libasm.la
<br>
ar: .libs/atomic-asm.o: No such file or directory
<br>
<p>The related portion of the configure output:
<br>
<p>*** Assembler
<br>
checking dependency style of
<br>
/home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/openmpi-1.8.2rc4r32480/config/compile
<br>
xlc... none
<br>
checking for BSD- or MS-compatible name lister (nm)... /usr/bin/nm -B
<br>
checking the name lister (/usr/bin/nm -B) interface... BSD nm
<br>
checking for fgrep... /bin/grep -F
<br>
checking if need to remove -g from CCASFLAGS... no
<br>
checking whether to enable smp locks... yes
<br>
checking if .proc/endp is needed... no
<br>
checking directive for setting text section... .text
<br>
checking directive for exporting symbols... .globl
<br>
checking for objdump... objdump
<br>
checking if .note.GNU-stack is needed... no
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels...
<br>
checking prefix for lsym labels... .L
<br>
checking prefix for function in .type... @
<br>
checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... yes
<br>
checking if PowerPC registers have r prefix... no
<br>
checking if
<br>
/home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/openmpi-1.8.2rc4r32480/config/compile
<br>
xlc supports GCC inline assembly... yes
<br>
checking if
<br>
/home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/openmpi-1.8.2rc4r32480/config/compile
<br>
xlc supports DEC inline assembly... no
<br>
checking if
<br>
/home/hargrov1/OMPI/openmpi-1.8-latest-bluedrop-64-xlc/openmpi-1.8.2rc4r32480/config/compile
<br>
xlc supports XLC inline assembly... no
<br>
checking for assembly format... default-.text-.globl-:--.L-_at_-1-1-0-1-0
<br>
checking for asssembly architecture... POWERPC64
<br>
checking for builtin atomics... BUILTIN_NO
<br>
checking for perl... perl
<br>
checking for pre-built assembly file... no (not in asm-data)
<br>
checking whether possible to generate assembly file... yes
<br>
checking for atomic assembly filename... atomic-local.s
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15597/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15598.php">Paul Hargrove: "[OMPI devel] cosmetic configure nit"</a>
<li><strong>Previous message:</strong> <a href="15596.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] 32-bit c++ build failure with Sun compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15599.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
<li><strong>Reply:</strong> <a href="15599.php">Paul Hargrove: "Re: [OMPI devel] [v1.8] build failure with xlc-11.1"</a>
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
