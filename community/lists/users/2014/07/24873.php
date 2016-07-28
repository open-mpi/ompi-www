<?
$subject_val = "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 11:54:50 2014" -->
<!-- isoreceived="20140725155450" -->
<!-- sent="Fri, 25 Jul 2014 15:54:48 +0000" -->
<!-- isosent="20140725155448" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc" -->
<!-- id="E652227D-8580-4A69-9CA9-E9E45517FEA2_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201407250608.s6P68IUh029174_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 11:54:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on	Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="24872.php">Nathan Hjelm: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>In reply to:</strong> <a href="24869.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24909.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>This looks like the typical type of alignment error that we used to see when testing regularly on SPARC.  :-\
<br>
<p>It looks like the error was happening in mca_db_hash.so.  Could you get a stack trace / file+line number where it was failing in mca_db_hash?  (i.e., the actual bad code will likely be under opal/mca/db/hash somewhere)
<br>
<p><p>On Jul 25, 2014, at 2:08 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have installed openmpi-1.8.2rc2 with gcc-4.9.0 on Solaris
</span><br>
<span class="quotelev1">&gt; 10 Sparc and I receive a bus error, if I run a small program.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tyr hello_1 105 mpiexec -np 2 a.out 
</span><br>
<span class="quotelev1">&gt; [tyr:29164] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [tyr:29164] Signal: Bus Error (10)
</span><br>
<span class="quotelev1">&gt; [tyr:29164] Signal code: Invalid address alignment (1)
</span><br>
<span class="quotelev1">&gt; [tyr:29164] Failing at address: ffffffff7fffd1c4
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfd0
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xd8b98
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc70c
</span><br>
<span class="quotelev1">&gt; /lib/sparcv9/libc.so.1:0xcc918
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3ee8 [ Signal 10 (BUS)]
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_db_base_store+0xc8
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_decode_pidmap+0x798
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_nidmap_init+0x3cc
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x226c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_init+0x308
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_init+0x31c
</span><br>
<span class="quotelev1">&gt; /export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:PMPI_Init+0x2a8
</span><br>
<span class="quotelev1">&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:main+0x20
</span><br>
<span class="quotelev1">&gt; /home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:_start+0x7c
</span><br>
<span class="quotelev1">&gt; [tyr:29164] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I get the following output if I run the program in &quot;dbx&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; RTC: Enabling Error Checking...
</span><br>
<span class="quotelev1">&gt; RTC: Running program...
</span><br>
<span class="quotelev1">&gt; Write to unallocated (wua) on thread 1:
</span><br>
<span class="quotelev1">&gt; Attempting to write 1 byte at address 0xffffffff79f04000
</span><br>
<span class="quotelev1">&gt; t_at_1 (l_at_1) stopped in _readdir at 0xffffffff55174da0
</span><br>
<span class="quotelev1">&gt; 0xffffffff55174da0: _readdir+0x0064:    call     _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff55342a80
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24869.php">http://www.open-mpi.org/community/lists/users/2014/07/24869.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24874.php">Jeff Squyres (jsquyres): "Re: [OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on	Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="24872.php">Nathan Hjelm: "Re: [OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<li><strong>In reply to:</strong> <a href="24869.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24909.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
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
