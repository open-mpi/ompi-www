<?
$subject_val = "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 10:52:40 2014" -->
<!-- isoreceived="20140725145240" -->
<!-- sent="Fri, 25 Jul 2014 08:52:31 -0600" -->
<!-- isosent="20140725145231" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2" -->
<!-- id="20140725145231.GB59493_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201407250559.s6P5xLsD029088_at_tyr.informatik.hs-fulda.de" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 10:52:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24873.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24871.php">Siegmar Gross: "[OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="24868.php">Siegmar Gross: "[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24883.php">Siegmar Gross: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you try adding the
<br>
<p>#include &lt;alloca.h&gt;
<br>
<p>to pml_ob1_isend.c
<br>
<p>And see if that resolves the issue?
<br>
<p>-Nathan
<br>
<p>On Fri, Jul 25, 2014 at 07:59:21AM +0200, Siegmar Gross wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to track down the error which I reported for
</span><br>
<span class="quotelev1">&gt; my small program (running on Solaris 10 Sparc).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 121 mpiexec -np 2 a.out 
</span><br>
<span class="quotelev1">&gt; Process 1 of 2 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Process 0 of 2 running on tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt; Now 1 slave tasks are sending greetings.
</span><br>
<span class="quotelev1">&gt; ld.so.1: a.out: fatal: relocation error:
</span><br>
<span class="quotelev1">&gt;   file /usr/local/openmpi-1.8.2_64_cc/lib64/openmpi/mca_pml_ob1.so:
</span><br>
<span class="quotelev1">&gt;   symbol alloca: referenced symbol not found
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;alloca&quot; is available.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 122 more x.c 
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;alloca.h&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main (void)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;   int *alloca_buffer;
</span><br>
<span class="quotelev1">&gt;   alloca_buffer = (int *) alloca (sizeof (int));
</span><br>
<span class="quotelev1">&gt;   *alloca_buffer = 1234;
</span><br>
<span class="quotelev1">&gt;   printf (&quot;value: %d\n&quot;, *alloca_buffer);
</span><br>
<span class="quotelev1">&gt;   return EXIT_SUCCESS;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; tyr hello_1 123 cc x.c 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 124 a.out
</span><br>
<span class="quotelev1">&gt; value: 1234
</span><br>
<span class="quotelev1">&gt; tyr hello_1 125 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following output if I run my original program in &quot;dbx&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev1">&gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff56574da0
</span><br>
<span class="quotelev1">&gt; 0xffffffff56574da0: _readdir+0x0064:    call     
</span><br>
<span class="quotelev1">&gt; _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff56742a80
</span><br>
<span class="quotelev1">&gt; Current function is find_dyn_components
</span><br>
<span class="quotelev1">&gt;   397                       if (0 != lt_dlforeachfile(dir, save_filename, NULL)) 
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; (dbx) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully the above output helps to fix the error. Can I provide
</span><br>
<span class="quotelev1">&gt; anything else? Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24868.php">http://www.open-mpi.org/community/lists/users/2014/07/24868.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24872/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24873.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24871.php">Siegmar Gross: "[OMPI users] missing link option for openmpi-1.8.2rc2 on Linux"</a>
<li><strong>In reply to:</strong> <a href="24868.php">Siegmar Gross: "[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24883.php">Siegmar Gross: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
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
