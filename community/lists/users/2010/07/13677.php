<?
$subject_val = "Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 20:05:26 2010" -->
<!-- isoreceived="20100717000526" -->
<!-- sent="Fri, 16 Jul 2010 18:05:17 -0600" -->
<!-- isosent="20100717000517" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors in mpiexec command with &amp;quot;-loadbalance&amp;quot; options" -->
<!-- id="A05523E8-AF58-41F3-9998-08ADEF016A03_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C40E779.2060103_at_ats.ucla.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 20:05:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13676.php">Qiyang Hu: "[OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>In reply to:</strong> <a href="13676.php">Qiyang Hu: "[OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, 1.4.2 has a bug in loadbalance and the npernode options. These are corrected in an upcoming 1.4.3 release.
<br>
<p>Meantime, you can download a pre-release (but good) snapshot from the OMPI site:
<br>
<p><a href="http://www.open-mpi.org/nightly/v1.4/">http://www.open-mpi.org/nightly/v1.4/</a>
<br>
<p><p>On Jul 16, 2010, at 5:12 PM, Qiyang Hu wrote:
<br>
<p><span class="quotelev1">&gt; Hello, everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We got some &quot;Segmentation fault&quot; errors in running &quot;mpiexec&quot; with &quot;-loadbalance&quot; option (details see below). However, we don't have any problem in using &quot;-bynode&quot; or &quot;-nolocal&quot;. We tried in both Intel compiler and GCC 4.1.2. The same type of error appears.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is the error message we got:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -n 4 --loadbalance ./a.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [n265:00912] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n265:00912] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n265:00912] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n265:00912] Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt; [n265:00912] [ 0] /lib64/libpthread.so.0 [0x3e0820eb10]
</span><br>
<span class="quotelev1">&gt; [n265:00912] [ 1] /u/local/intel/11.1/openmpi/1.4.2/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xcf) [0x2b9344c3f7ff]
</span><br>
<span class="quotelev1">&gt; [n265:00912] [ 2] /u/local/intel/11.1/openmpi/1.4.2/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x3b8) [0x2b9344c5f2a8]
</span><br>
<span class="quotelev1">&gt; [n265:00912] [ 3] /u/local/intel/11.1/openmpi/1.4.2/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0xd7) [0x2b9344c70b97]
</span><br>
<span class="quotelev1">&gt; [n265:00912] [ 4] /u/local/intel/11.1/openmpi/1.4.2/lib/libopen-rte.so.0 [0x2b9344c77171]
</span><br>
<span class="quotelev1">&gt; [n265:00912] [ 5] mpiexec [0x404c27]
</span><br>
<span class="quotelev1">&gt; [n265:00912] [ 6] mpiexec [0x403e38]
</span><br>
<span class="quotelev1">&gt; [n265:00912] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3e0761d994]
</span><br>
<span class="quotelev1">&gt; [n265:00912] [ 8] mpiexec [0x403d69]
</span><br>
<span class="quotelev1">&gt; [n265:00912] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; [n96:22288] [[57019,0],3] routed:binomial: Connection to lifeline [[57019,0],0] lost
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Below is the info for our system:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; + OS: CentOS 5.5
</span><br>
<span class="quotelev1">&gt; + OpenMPI 1.4.2 configuration:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/u/local/intel/11.1/openmpi/1.4.2  \
</span><br>
<span class="quotelev1">&gt; --with-openib=/usr --enable-static    \
</span><br>
<span class="quotelev1">&gt; CC=icc CXX=icpc F77=ifort FC=ifort  --with-sge
</span><br>
<span class="quotelev1">&gt; (similar for GCC~)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas would be appreciated. Many thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes,
</span><br>
<span class="quotelev1">&gt; Qiyang
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13678.php">Anton Shterenlikht: "Re: [OMPI users] do all processors have to execute MPI_Bcast?"</a>
<li><strong>Previous message:</strong> <a href="13676.php">Qiyang Hu: "[OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>In reply to:</strong> <a href="13676.php">Qiyang Hu: "[OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
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
