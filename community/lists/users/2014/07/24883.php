<?
$subject_val = "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 17:54:29 2014" -->
<!-- isoreceived="20140725215429" -->
<!-- sent="Fri, 25 Jul 2014 23:54:05 +0200 (CEST)" -->
<!-- isosent="20140725215405" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2" -->
<!-- id="201407252154.s6PLs5NG018703_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 17:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24884.php">Dan Shell: "[OMPI users] mpifort wrapper.txt"</a>
<li><strong>Previous message:</strong> <a href="24882.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Maybe in reply to:</strong> <a href="24868.php">Siegmar Gross: "[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><span class="quotelev1">&gt; Can you try adding the
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #include &lt;alloca.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to pml_ob1_isend.c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And see if that resolves the issue?
</span><br>
<p>Unfortunately it doesn't resolve the problem. I still get the
<br>
same error messages.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Jul 25, 2014 at 07:59:21AM +0200, Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; today I tried to track down the error which I reported for
</span><br>
<span class="quotelev2">&gt; &gt; my small program (running on Solaris 10 Sparc).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 121 mpiexec -np 2 a.out 
</span><br>
<span class="quotelev2">&gt; &gt; Process 1 of 2 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Process 0 of 2 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev2">&gt; &gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev2">&gt; &gt; ld.so.1: a.out: fatal: relocation error:
</span><br>
<span class="quotelev2">&gt; &gt;   file /usr/local/openmpi-1.8.2_64_cc/lib64/openmpi/mca_pml_ob1.so:
</span><br>
<span class="quotelev2">&gt; &gt;   symbol alloca: referenced symbol not found
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; &quot;alloca&quot; is available.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 122 more x.c 
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; #include &lt;alloca.h&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; int main (void)
</span><br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt;   int *alloca_buffer;
</span><br>
<span class="quotelev2">&gt; &gt;   alloca_buffer = (int *) alloca (sizeof (int));
</span><br>
<span class="quotelev2">&gt; &gt;   *alloca_buffer = 1234;
</span><br>
<span class="quotelev2">&gt; &gt;   printf (&quot;value: %d\n&quot;, *alloca_buffer);
</span><br>
<span class="quotelev2">&gt; &gt;   return EXIT_SUCCESS;
</span><br>
<span class="quotelev2">&gt; &gt; }
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 123 cc x.c 
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 124 a.out
</span><br>
<span class="quotelev2">&gt; &gt; value: 1234
</span><br>
<span class="quotelev2">&gt; &gt; tyr hello_1 125 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I get the following output if I run my original program in &quot;dbx&quot;.
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
<span class="quotelev2">&gt; &gt;   397                       if (0 != lt_dlforeachfile(dir, save_filename, 
</span><br>
NULL)) 
<br>
<span class="quotelev2">&gt; &gt; {
</span><br>
<span class="quotelev2">&gt; &gt; (dbx) 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hopefully the above output helps to fix the error. Can I provide
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
<span class="quotelev2">&gt; &gt; Link to this post: 
</span><br>
<a href="http://www.open-mpi.org/community/lists/users/2014/07/24868.php">http://www.open-mpi.org/community/lists/users/2014/07/24868.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24884.php">Dan Shell: "[OMPI users] mpifort wrapper.txt"</a>
<li><strong>Previous message:</strong> <a href="24882.php">Siegmar Gross: "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 onSolaris 10"</a>
<li><strong>Maybe in reply to:</strong> <a href="24868.php">Siegmar Gross: "[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
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
