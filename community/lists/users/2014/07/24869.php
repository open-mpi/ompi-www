<?
$subject_val = "[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 25 02:08:41 2014" -->
<!-- isoreceived="20140725060841" -->
<!-- sent="Fri, 25 Jul 2014 08:08:18 +0200 (CEST)" -->
<!-- isosent="20140725060818" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc" -->
<!-- id="201407250608.s6P68IUh029174_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-25 02:08:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24870.php">Siegmar Gross: "[OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="24868.php">Siegmar Gross: "[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24873.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="24873.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24909.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24935.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I have installed openmpi-1.8.2rc2 with gcc-4.9.0 on Solaris
<br>
10 Sparc and I receive a bus error, if I run a small program.
<br>
<p>tyr hello_1 105 mpiexec -np 2 a.out 
<br>
[tyr:29164] *** Process received signal ***
<br>
[tyr:29164] Signal: Bus Error (10)
<br>
[tyr:29164] Signal code: Invalid address alignment (1)
<br>
[tyr:29164] Failing at address: ffffffff7fffd1c4
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_backtrace_print+0x2c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:0xccfd0
<br>
/lib/sparcv9/libc.so.1:0xd8b98
<br>
/lib/sparcv9/libc.so.1:0xcc70c
<br>
/lib/sparcv9/libc.so.1:0xcc918
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_db_hash.so:0x3ee8 [ Signal 10 (BUS)]
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-pal.so.6.2.0:opal_db_base_store+0xc8
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_decode_pidmap+0x798
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_util_nidmap_init+0x3cc
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/openmpi/mca_ess_env.so:0x226c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libopen-rte.so.7.0.4:orte_init+0x308
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:ompi_mpi_init+0x31c
<br>
/export2/prog/SunOS_sparc/openmpi-1.8.2_64_gcc/lib64/libmpi.so.1.5.2:PMPI_Init+0x2a8
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:main+0x20
<br>
/home/fd1026/work/skripte/master/parallel/prog/mpi/hello_1/a.out:_start+0x7c
<br>
[tyr:29164] *** End of error message ***
<br>
...
<br>
<p><p>I get the following output if I run the program in &quot;dbx&quot;.
<br>
<p>...
<br>
RTC: Enabling Error Checking...
<br>
RTC: Running program...
<br>
Write to unallocated (wua) on thread 1:
<br>
Attempting to write 1 byte at address 0xffffffff79f04000
<br>
t_at_1 (l_at_1) stopped in _readdir at 0xffffffff55174da0
<br>
0xffffffff55174da0: _readdir+0x0064:    call     _PROCEDURE_LINKAGE_TABLE_+0x2380 [PLT] ! 0xffffffff55342a80
<br>
(dbx) 
<br>
<p><p>Hopefully the above output helps to fix the error. Can I provide
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
<li><strong>Next message:</strong> <a href="24870.php">Siegmar Gross: "[OMPI users] SIGSEGV for Java program in openmpi-1.8.2rc2 on Solaris 10"</a>
<li><strong>Previous message:</strong> <a href="24868.php">Siegmar Gross: "[OMPI users] problem with mca_pml_ob1.so in openmpi-1.8.2rc2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24873.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Reply:</strong> <a href="24873.php">Jeff Squyres (jsquyres): "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24909.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/08/24935.php">Siegmar Gross: "Re: [OMPI users] bus error with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
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
