<?
$subject_val = "[OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 02:30:32 2014" -->
<!-- isoreceived="20140725063032" -->
<!-- sent="Fri, 25 Jul 2014 08:29:54 +0200 (CEST)" -->
<!-- isosent="20140725062954" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10" -->
<!-- id="201407250629.s6P6TsAt029229_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 02:29:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24871.php">Siegmar Gross: "[OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="24869.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on	Solaris 10"</a>
<li><strong>Reply:</strong> <a href="24874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on	Solaris 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed openmpi-1.8.2rc2 with Sun c 5.12 on Solaris
<br>
10 Sparc and x86_64 and I receive a segmentation fault, if I
<br>
run a small Java program.
<br>
<p>rs0 java 105 mpiexec -np 1 java InitFinalizeMain
<br>
#
<br>
# A fatal error has been detected by the Java Runtime Environment:
<br>
#
<br>
#  SIGSEGV (0xb) at pc=0xffffffff7ea3c830, pid=18363, tid=2
<br>
#
<br>
# JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
<br>
# Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc 
<br>
compressed oops)
<br>
# Problematic frame:
<br>
# C  [libc.so.1+0x3c830]  strlen+0x50
<br>
...
<br>
<p><p>I get the following output if I run the program in &quot;dbx&quot;.
<br>
<p>...
<br>
RTC: Running program...
<br>
Write to unallocated (wua) on thread 1:
<br>
Attempting to write 1 byte at address 0xffffffff79f04000
<br>
t_at_1 (l_at_1) stopped in _readdir at 0xffffffff56574da0
<br>
0xffffffff56574da0: _readdir+0x0064:    call     
<br>
_PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff56742a80
<br>
Current function is find_dyn_components
<br>
&nbsp;&nbsp;397                       if (0 != lt_dlforeachfile(dir, save_filename, NULL)) 
<br>
{
<br>
(dbx) 
<br>
<p><p>I get the following output if I run the program on Solaris 10
<br>
x86_64.
<br>
<p>...
<br>
RTC: Running program...
<br>
Reading disasm.so
<br>
Read from uninitialized (rui) on thread 1:
<br>
Attempting to read 1 byte at address 0x437387
<br>
&nbsp;&nbsp;&nbsp;&nbsp;which is 15 bytes into a heap block of size 16 bytes at 0x437378
<br>
This block was allocated from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] vasprintf() at 0xfffffd7fdc9b335a 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] asprintf() at 0xfffffd7fdc9b3452 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[3] opal_output_init() at line 184 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[4] do_open() at line 548 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[5] opal_output_open() at line 219 in &quot;output.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[6] opal_malloc_init() at line 68 in &quot;malloc.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[7] opal_init_util() at line 258 in &quot;opal_init.c&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[8] opal_init() at line 363 in &quot;opal_init.c&quot;
<br>
<p>t_at_1 (l_at_1) stopped in do_open at line 638 in file &quot;output.c&quot;
<br>
&nbsp;&nbsp;638           info[i].ldi_prefix = strdup(lds-&gt;lds_prefix);
<br>
(dbx) 
<br>
<p><p>Hopefully the above output helps to fix the errors. Can I provide
<br>
anything else? Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24871.php">Siegmar Gross: "[OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<li><strong>Previous message:</strong> <a href="24869.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on	Solaris 10"</a>
<li><strong>Reply:</strong> <a href="24874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on	Solaris 10"</a>
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
