<?
$subject_val = "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 05:15:29 2014" -->
<!-- isoreceived="20140805091529" -->
<!-- sent="Tue, 5 Aug 2014 11:15:03 +0200 (CEST)" -->
<!-- isosent="20140805091503" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10" -->
<!-- id="201408050915.s759F3A2027732_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 05:15:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24909.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24907.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24882.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm sorry to answer so late, but last week I didn't have Internet
<br>
access. In the meantime I've installed openmpi-1.8.2rc3 and I get
<br>
the same error.
<br>
<p><span class="quotelev1">&gt; That's quite odd that it only happens for Java programs -- it
</span><br>
<span class="quotelev1">&gt; should happen for *all* programs, based on the stack trace you've shown.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you print the value of the lds struct where the error occurs?
</span><br>
<p>sunpc1 java 102 /opt/solstudio12.3/bin/amd64/dbx /usr/local/openmpi-1.8.2_64_cc/bin/mpiexec 
<br>
For information about new features see `help changes'
<br>
To remove this message, put `dbxenv suppress_startup_message 7.9' in your .dbxrc
<br>
Reading mpiexec
<br>
Reading ld.so.1
<br>
Reading libopen-rte.so.7.0.4
<br>
Reading libopen-pal.so.6.2.0
<br>
Reading libsendfile.so.1
<br>
Reading libpicl.so.1
<br>
Reading libkstat.so.1
<br>
Reading liblgrp.so.1
<br>
Reading libsocket.so.1
<br>
Reading libnsl.so.1
<br>
Reading librt.so.1
<br>
Reading libm.so.2
<br>
Reading libthread.so.1
<br>
Reading libc.so.1
<br>
Reading libdoor.so.1
<br>
Reading libaio.so.1
<br>
Reading libmd.so.1
<br>
(dbx) check -all
<br>
access checking - ON
<br>
memuse checking - ON
<br>
(dbx) run -np 1 java InitFinalizeMain
<br>
Running: mpiexec -np 1 java InitFinalizeMain 
<br>
(process id 4064)
<br>
Reading rtcapihook.so
<br>
Reading libdl.so.1
<br>
Reading rtcaudit.so
<br>
Reading libmapmalloc.so.1
<br>
Reading rtcboot.so
<br>
Reading librtc.so
<br>
RTC: Enabling Error Checking...
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
(dbx) print lds
<br>
lds = 0xfffffd7fe93d1b60
<br>
(dbx) print i
<br>
i = 0
<br>
(dbx) print info[0].ldi_prefix
<br>
info[0].ldi_prefix = (nil)
<br>
(dbx) print lds-&gt;lds_verbose_level
<br>
lds-&gt;lds_verbose_level = 0
<br>
(dbx)  print lds-&gt;lds_syslog_priority
<br>
lds-&gt;lds_syslog_priority = 0
<br>
(dbx) print lds-&gt;lds_syslog_ident
<br>
lds-&gt;lds_syslog_ident = (nil)
<br>
(dbx) print lds-&gt;lds_prefix
<br>
lds-&gt;lds_prefix = 0x437378 &quot;[sunpc1:04090] &quot;
<br>
(dbx) print lds-&gt;lds_suffix
<br>
lds-&gt;lds_suffix = (nil)
<br>
(dbx) print lds-&gt;lds_is_debugging
<br>
lds-&gt;lds_is_debugging = 0
<br>
(dbx) print lds-&gt;lds_want_syslog
<br>
lds-&gt;lds_want_syslog = 0
<br>
(dbx) print lds-&gt;lds_want_stdout
<br>
lds-&gt;lds_want_stdout = 0
<br>
(dbx) print lds-&gt;lds_want_stderr
<br>
lds-&gt;lds_want_stderr = 1U
<br>
(dbx) print lds-&gt;lds_want_file
<br>
lds-&gt;lds_want_file = 0
<br>
(dbx) print lds-&gt;lds_want_file_append
<br>
lds-&gt;lds_want_file_append = 0
<br>
(dbx)  print lds-&gt;lds_file_suffix
<br>
lds-&gt;lds_file_suffix = (nil)
<br>
(dbx) 
<br>
<p>Is the above information helpful to track down the error? Do you need
<br>
anything else? Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><p><p><span class="quotelev1">&gt; On Jul 25, 2014, at 2:29 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I have installed openmpi-1.8.2rc2 with Sun c 5.12 on Solaris
</span><br>
<span class="quotelev2">&gt; &gt; 10 Sparc and x86_64 and I receive a segmentation fault, if I
</span><br>
<span class="quotelev2">&gt; &gt; run a small Java program.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; rs0 java 105 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c830, pid=18363, tid=2
</span><br>
<span class="quotelev2">&gt; &gt; #
</span><br>
<span class="quotelev2">&gt; &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build 1.8.0-b132)
</span><br>
<span class="quotelev2">&gt; &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed mode solaris-sparc 
</span><br>
<span class="quotelev2">&gt; &gt; compressed oops)
</span><br>
<span class="quotelev2">&gt; &gt; # Problematic frame:
</span><br>
<span class="quotelev2">&gt; &gt; # C  [libc.so.1+0x3c830]  strlen+0x50
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the following output if I run the program in &quot;dbx&quot;.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; RTC: Running program...
</span><br>
<span class="quotelev2">&gt; &gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev2">&gt; &gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev2">&gt; &gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff56574da0
</span><br>
<span class="quotelev2">&gt; &gt; 0xffffffff56574da0: _readdir+0x0064:    call     
</span><br>
<span class="quotelev2">&gt; &gt; _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff56742a80
</span><br>
<span class="quotelev2">&gt; &gt; Current function is find_dyn_components
</span><br>
<span class="quotelev2">&gt; &gt;  397                       if (0 != lt_dlforeachfile(dir, save_filename, NULL)) 
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the following output if I run the program on Solaris 10
</span><br>
<span class="quotelev2">&gt; &gt; x86_64.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; RTC: Running program...
</span><br>
<span class="quotelev2">&gt; &gt; Reading disasm.so
</span><br>
<span class="quotelev2">&gt; &gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev2">&gt; &gt; Attempting to read 1 byte at address 0x437387
</span><br>
<span class="quotelev2">&gt; &gt;    which is 15 bytes into a heap block of size 16 bytes at 0x437378
</span><br>
<span class="quotelev2">&gt; &gt; This block was allocated from:
</span><br>
<span class="quotelev2">&gt; &gt;        [1] vasprintf() at 0xfffffd7fdc9b335a 
</span><br>
<span class="quotelev2">&gt; &gt;        [2] asprintf() at 0xfffffd7fdc9b3452 
</span><br>
<span class="quotelev2">&gt; &gt;        [3] opal_output_init() at line 184 in &quot;output.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [4] do_open() at line 548 in &quot;output.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [5] opal_output_open() at line 219 in &quot;output.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [6] opal_malloc_init() at line 68 in &quot;malloc.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [7] opal_init_util() at line 258 in &quot;opal_init.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;        [8] opal_init() at line 363 in &quot;opal_init.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; t_at_1 (l_at_1) stopped in do_open at line 638 in file &quot;output.c&quot;
</span><br>
<span class="quotelev2">&gt; &gt;  638           info[i].ldi_prefix = strdup(lds-&gt;lds_prefix);
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hopefully the above output helps to fix the errors. Can I provide
</span><br>
<span class="quotelev2">&gt; &gt; anything else? Thank you very much for any help in advance.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Kind regards
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Siegmar
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24870.php">http://www.open-mpi.org/community/lists/users/2014/07/24870.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24909.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24907.php">Siegmar Gross: "[OMPI users] problem with rankfile in openmpi-1.8.2rc3"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/07/24882.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
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
