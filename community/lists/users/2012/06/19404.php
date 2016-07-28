<?
$subject_val = "Re: [OMPI users] seg fault with intel compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  1 10:03:50 2012" -->
<!-- isoreceived="20120601140350" -->
<!-- sent="Fri, 1 Jun 2012 08:03:45 -0600" -->
<!-- isosent="20120601140345" -->
<!-- name="Edmund Sumbar" -->
<!-- email="esumbar_at_[hidden]" -->
<!-- subject="Re: [OMPI users] seg fault with intel compiler" -->
<!-- id="CAPkgxcxPsr2mB8i6SO=dL1ZJFVL0yuNNwzHOxaY1a7hhs7xLMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF31BB64-B489-4144-9F2C-0FAF6C42FFA2_at_cisco.com" -->
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
<strong>From:</strong> Edmund Sumbar (<em>esumbar_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-01 10:03:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19405.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19396.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19405.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19405.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, Jun 1, 2012 at 5:00 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Try running:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which mpirun
</span><br>
<span class="quotelev1">&gt; ssh cl2n022 which mpirun
</span><br>
<span class="quotelev1">&gt; ssh cl2n010 which mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ldd your_mpi_executable
</span><br>
<span class="quotelev1">&gt; ssh cl2n022 which mpirun
</span><br>
<span class="quotelev1">&gt; ssh cl2n010 which mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compare the results and ensure that you're finding the same mpirun on all
</span><br>
<span class="quotelev1">&gt; nodes, and the same libmpi.so on all nodes.  There may well be another Open
</span><br>
<span class="quotelev1">&gt; MPI installed in some non-default location of which you're unaware.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I'll try that Jeff (results given below). However, I suspect there must be
<br>
something goofy about this (brand new) cluster itself because among the
<br>
countless jobs that failed, I got one job that ran without error, and all I
<br>
ever did was to rearrange the echo and which commands. We've also observed
<br>
some peculiar behaviour on this cluster using Intel MPI that seemed to be
<br>
associated with the number of tasks requested. And after more
<br>
experimentation, the Open MPI version of the program also seems to be
<br>
sensitive to the number of tasks (e.g., works with 48, fails with 64).
<br>
<p>Thanks for the feedback Jeff, but I think the ball is firmly in my court.
<br>
<p><p><p>I ran the following PBS script with &quot;qsub -l procs=128 job.pbs&quot;.
<br>
Environment variables are set using the Environment Modules packages.
<br>
<p>echo $HOSTNAME
<br>
which mpiexec
<br>
module load library/openmpi/1.6-intel
<br>
which mpiexec
<br>
echo $PATH
<br>
echo $LD_LIBRARY_PATH
<br>
ldd test-ompi16
<br>
mpiexec --prefix /lustre/jasper/software/openmpi/openmpi-1.6-intel
<br>
./test-ompi16
<br>
<p>Standard output gave
<br>
<p>cl2n011
<br>
<p>/lustre/jasper/software/openmpi/openmpi-1.6-intel/bin/mpiexec
<br>
<p>/lustre/jasper/software/openmpi/openmpi-1.6-intel/bin:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mpirt/bin/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/bin/intel64:/home/esumbar/local/bin:/home/esumbar/bin:/usr/kerberos/bin:/bin:/usr/bin:/opt/sgi/sgimc/bin:/usr/local/torque/sbin:/usr/local/torque/bin
<br>
<p>/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/ipp/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mkl/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/compiler/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/tbb/lib/intel64:/home/esumbar/local/lib:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64/server:/usr/lib/jvm/jre-1.6.0-sun/lib/amd64:/opt/sgi/sgimc/lib:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/debugger/lib/intel64:/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/mpirt/lib/intel64
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffb5358000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.1 =&gt;
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1
<br>
(0x00002b3968d1d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000329ce00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt;
<br>
/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/compiler/lib/intel64/libimf.so
<br>
(0x00002b3969137000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x000000329d200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;librt.so.1 =&gt; /lib64/librt.so.1 (0x000000329da00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x00000032a6400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x00000032a8400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt;
<br>
/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/compiler/lib/intel64/libsvml.so
<br>
(0x00002b3969504000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x00000032a4c00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt;
<br>
/lustre/jasper/software/intel//l_ics_2012.0.032/composer_xe_2011_sp1.6.233/compiler/lib/intel64/libintlc.so.5
<br>
(0x00002b3969c77000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000329d600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x000000329ca00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x000000329c200000)
<br>
<p><p>Standard error gave
<br>
<p>which: no mpiexec in
<br>
(/home/esumbar/local/bin:/home/esumbar/bin:/usr/kerberos/bin:/bin:/usr/bin:/opt/sgi/sgimc/bin:/usr/local/torque/sbin:/usr/local/torque/bin)
<br>
<p>[cl2n005:05142] *** Process received signal ***
<br>
[cl2n005:05142] Signal: Segmentation fault (11)
<br>
[cl2n005:05142] Signal code: Address not mapped (1)
<br>
[cl2n005:05142] Failing at address: 0x10
<br>
[cl2n005:05142] [ 0] /lib64/libpthread.so.0 [0x373180ebe0]
<br>
[cl2n005:05142] [ 1]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(opal_memory_ptmalloc2_int_malloc+0x4b3)
<br>
[0x2aff9aad5113]
<br>
[cl2n005:05142] [ 2]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(opal_memory_ptmalloc2_malloc+0x59)
<br>
[0x2aff9aad78a9]
<br>
[cl2n005:05142] [ 3]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1
<br>
[0x2aff9aad7596]
<br>
[cl2n005:05142] [ 4]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(ompi_free_list_grow+0x89)
<br>
[0x2aff9aa0fa59]
<br>
[cl2n005:05142] [ 5]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(ompi_free_list_init_ex+0x9c)
<br>
[0x2aff9aa0fd8c]
<br>
[cl2n005:05142] [ 6]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/openmpi/mca_btl_openib.so
<br>
[0x2aff9e94561c]
<br>
[cl2n005:05142] [ 7]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(mca_btl_base_select+0x130)
<br>
[0x2aff9aa57930]
<br>
[cl2n005:05142] [ 8]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/openmpi/mca_bml_r2.so(mca_bml_r2_component_init+0xe)
<br>
[0x2aff9e52bc1e]
<br>
[cl2n005:05142] [ 9]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(mca_bml_base_init+0x72)
<br>
[0x2aff9aa570b2]
<br>
[cl2n005:05142] [10]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/openmpi/mca_pml_ob1.so
<br>
[0x2aff9e1107e9]
<br>
[cl2n005:05142] [11]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(mca_pml_base_select+0x43e)
<br>
[0x2aff9aa6592e]
<br>
[cl2n005:05142] [12]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(ompi_mpi_init+0x782)
<br>
[0x2aff9aa276a2]
<br>
[cl2n005:05142] [13]
<br>
/lustre/jasper/software/openmpi/openmpi-1.6-intel/lib/libmpi.so.1(MPI_Init+0xf4)
<br>
[0x2aff9aa3f884]
<br>
[cl2n005:05142] [14] ./test-ompi16(main+0x4c) [0x400b5c]
<br>
[cl2n005:05142] [15] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3730c1d994]
<br>
[cl2n005:05142] [16] ./test-ompi16 [0x400a59]
<br>
[cl2n005:05142] *** End of error message ***
<br>
[cl2n006:32362] [[58962,0],5] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file util/nidmap.c at line 776
<br>
[cl2n006:32362] [[58962,0],5] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file ess_tm_module.c at line 310
<br>
[cl2n006:32362] [[58962,0],5] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file base/odls_base_default_fns.c at line 2342
<br>
[cl2n003:04157] [[58962,0],8] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file util/nidmap.c at line 776
<br>
[cl2n003:04157] [[58962,0],8] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file ess_tm_module.c at line 310
<br>
[cl2n003:04157] [[58962,0],8] ORTE_ERROR_LOG: Data unpack would read past
<br>
end of buffer in file base/odls_base_default_fns.c at line 2342
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that process rank 77 with PID 5142 on node cl2n005 exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
<p><p><pre>
-- 
Edmund Sumbar
University of Alberta
+1 780 492 9360
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="../../att-19404/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19405.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Previous message:</strong> <a href="19403.php">Jeff Squyres: "Re: [OMPI users] mpicc, mpif90, ... not created during installation"</a>
<li><strong>In reply to:</strong> <a href="19396.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19405.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
<li><strong>Reply:</strong> <a href="19405.php">Jeff Squyres: "Re: [OMPI users] seg fault with intel compiler"</a>
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
