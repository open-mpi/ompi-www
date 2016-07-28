<?
$subject_val = "[OMPI users] ARM Compilation Issue";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  8 02:49:13 2013" -->
<!-- isoreceived="20130108074913" -->
<!-- sent="Tue, 8 Jan 2013 15:49:08 +0800" -->
<!-- isosent="20130108074908" -->
<!-- name="Lee Eric" -->
<!-- email="openlinuxsource_at_[hidden]" -->
<!-- subject="[OMPI users] ARM Compilation Issue" -->
<!-- id="CAOJJ1ZqWXuXX_1axrxcrH9TO87U8V1ib6ms+GXgU=BD3L8OU6g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] ARM Compilation Issue<br>
<strong>From:</strong> Lee Eric (<em>openlinuxsource_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-08 02:49:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="21085.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using cross toolchain to compile OpenMPI 1.6.3 for ARM w/
<br>
following command line.
<br>
<p>./configure --build=x86_64-redhat-linux
<br>
--host=arm-unknown-linux-gnueabi CFLAGS=&quot;-O2 -g -pipe -Wall
<br>
-Wp,-D_FORTIFY_SOURCE=2 -fexceptions -fstack-protector
<br>
--param=ssp-buffer-size=4 -mfpu=vfp -march=armv5te -mfloat-abi=hard&quot;
<br>
<p>Then I got following error there:
<br>
<p>*** Assembler
<br>
checking dependency style of arm-unknown-linux-gnueabi-gcc... gcc3
<br>
checking for BSD- or MS-compatible name lister (nm)...
<br>
/home/huli/Projects/arm-devel/bin/arm-unknown-linux-gnueabi-nm -B
<br>
checking the name lister
<br>
(/home/huli/Projects/arm-devel/bin/arm-unknown-linux-gnueabi-nm -B)
<br>
interface... BSD nm
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
checking if .note.GNU-stack is needed... yes
<br>
checking suffix for labels... :
<br>
checking prefix for global symbol labels...
<br>
checking prefix for lsym labels... .L
<br>
checking prefix for function in .type... #
<br>
checking if .size is needed... yes
<br>
checking if .align directive takes logarithmic value... yes
<br>
configure: error: No atomic primitives available for arm-unknown-linux-gnueabi
<br>
<p>Is there any good way to fix that?
<br>
<p>Thank you very much.
<br>
<p>Eric
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21087.php">Yoshiki SATO: "Re: [OMPI users] Backward Compatibility of MPI Java Binding"</a>
<li><strong>Previous message:</strong> <a href="21085.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-mpi running issue and bug"</a>
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
