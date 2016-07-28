<?
$subject_val = "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 16:14:56 2014" -->
<!-- isoreceived="20140725201456" -->
<!-- sent="Fri, 25 Jul 2014 22:14:23 +0200 (CEST)" -->
<!-- isosent="20140725201423" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10" -->
<!-- id="201407252014.s6PKENoJ029680_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2014-07-25 16:14:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24883.php">Siegmar Gross: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Previous message:</strong> <a href="24881.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24908.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24908.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Oscar,
<br>
<p><span class="quotelev1">&gt; I'm sorry but I can not reproduce the problem.
</span><br>
<span class="quotelev1">&gt; I recompiled all from scratch using Java 8, and it works ok on Debian 7.5.
</span><br>
<p>I have no problem with Linux, but I have one with Solaris 10. If I use
<br>
the gcc-4.9.0 version everything works fine and if I use Sun C 5.12,
<br>
I get the warning which I mentioned in another email.
<br>
<p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; El 25/07/14 18:28, Saliya Ekanayake escribi&#243;:
</span><br>
<span class="quotelev2">&gt; &gt; I too have encountered this as mentioned in one of my previous emails 
</span><br>
<span class="quotelev2">&gt; &gt; (<a href="http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21000">http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/21000</a>). 
</span><br>
<span class="quotelev2">&gt; &gt; I've done many tests for our algorithms with 1.8.1 version and it 
</span><br>
<span class="quotelev2">&gt; &gt; didn't have this, but not sure about 1.8.2.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you,
</span><br>
<span class="quotelev2">&gt; &gt; saliya
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Fri, Jul 25, 2014 at 11:56 AM, Jeff Squyres (jsquyres) 
</span><br>
<span class="quotelev2">&gt; &gt; &lt;jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     That's quite odd that it only happens for Java programs -- it
</span><br>
<span class="quotelev2">&gt; &gt;     should happen for *all* programs, based on the stack trace you've
</span><br>
<span class="quotelev2">&gt; &gt;     shown.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Can you print the value of the lds struct where the error occurs?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     On Jul 25, 2014, at 2:29 AM, Siegmar Gross
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;Siegmar.Gross_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;     &lt;mailto:Siegmar.Gross_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; I have installed openmpi-1.8.2rc2 with Sun c 5.12 on Solaris
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; 10 Sparc and x86_64 and I receive a segmentation fault, if I
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; run a small Java program.
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; rs0 java 105 mpiexec -np 1 java InitFinalizeMain
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; #
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; # A fatal error has been detected by the Java Runtime Environment:
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; #
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; #  SIGSEGV (0xb) at pc=0xffffffff7ea3c830, pid=18363, tid=2
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; #
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; # JRE version: Java(TM) SE Runtime Environment (8.0-b132) (build
</span><br>
<span class="quotelev2">&gt; &gt;     1.8.0-b132)
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; # Java VM: Java HotSpot(TM) 64-Bit Server VM (25.0-b70 mixed
</span><br>
<span class="quotelev2">&gt; &gt;     mode solaris-sparc
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; compressed oops)
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; # Problematic frame:
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; # C  [libc.so.1+0x3c830]  strlen+0x50
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; I get the following output if I run the program in &quot;dbx&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; RTC: Running program...
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff56574da0
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; 0xffffffff56574da0: _readdir+0x0064:    call
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff56742a80
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Current function is find_dyn_components
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  397                       if (0 != lt_dlforeachfile(dir,
</span><br>
<span class="quotelev2">&gt; &gt;     save_filename, NULL))
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; {
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; (dbx)
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; I get the following output if I run the program on Solaris 10
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; x86_64.
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; RTC: Running program...
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Reading disasm.so
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Read from uninitialized (rui) on thread 1:
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Attempting to read 1 byte at address 0x437387
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;    which is 15 bytes into a heap block of size 16 bytes at 0x437378
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; This block was allocated from:
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;        [1] vasprintf() at 0xfffffd7fdc9b335a
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;        [2] asprintf() at 0xfffffd7fdc9b3452
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;        [3] opal_output_init() at line 184 in &quot;output.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;        [4] do_open() at line 548 in &quot;output.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;        [5] opal_output_open() at line 219 in &quot;output.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;        [6] opal_malloc_init() at line 68 in &quot;malloc.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;        [7] opal_init_util() at line 258 in &quot;opal_init.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;        [8] opal_init() at line 363 in &quot;opal_init.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; t_at_1 (l_at_1) stopped in do_open at line 638 in file &quot;output.c&quot;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;  638           info[i].ldi_prefix = strdup(lds-&gt;lds_prefix);
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; (dbx)
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Hopefully the above output helps to fix the errors. Can I provide
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; anything else? Thank you very much for any help in advance.
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt;     &gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;     &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/07/24870.php">http://www.open-mpi.org/community/lists/users/2014/07/24870.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     --
</span><br>
<span class="quotelev2">&gt; &gt;     Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;     jsquyres_at_[hidden] &lt;mailto:jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;     users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;     Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;     <a href="http://www.open-mpi.org/community/lists/users/2014/07/24874.php">http://www.open-mpi.org/community/lists/users/2014/07/24874.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Saliya Ekanayake esaliya_at_[hidden] &lt;mailto:esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Cell 812-391-4914 Home 812-961-6383
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/07/24875.php">http://www.open-mpi.org/community/lists/users/2014/07/24875.php</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/07/24879.php">http://www.open-mpi.org/community/lists/users/2014/07/24879.php</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24883.php">Siegmar Gross: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>Previous message:</strong> <a href="24881.php">Gus Correa: "Re: [OMPI users] Trying to use openmpi with MOM getting a compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24908.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24908.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
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
