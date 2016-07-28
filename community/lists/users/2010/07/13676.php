<?
$subject_val = "[OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 16 19:13:07 2010" -->
<!-- isoreceived="20100716231307" -->
<!-- sent="Fri, 16 Jul 2010 16:12:57 -0700" -->
<!-- isosent="20100716231257" -->
<!-- name="Qiyang Hu" -->
<!-- email="huqy_at_[hidden]" -->
<!-- subject="[OMPI users] errors in mpiexec command with &amp;quot;-loadbalance&amp;quot; options" -->
<!-- id="4C40E779.2060103_at_ats.ucla.edu" -->
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
<strong>Subject:</strong> [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options<br>
<strong>From:</strong> Qiyang Hu (<em>huqy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-16 19:12:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13677.php">Ralph Castain: "Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>Previous message:</strong> <a href="13675.php">Josh Hursey: "Re: [OMPI users] ompi-restart, ompi-ps problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13677.php">Ralph Castain: "Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>Reply:</strong> <a href="13677.php">Ralph Castain: "Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;Hello, everyone,
<br>
<p>We got some &quot;Segmentation fault&quot; errors in running &quot;mpiexec&quot; with 
<br>
&quot;-loadbalance&quot; option (details see below). However, we don't have any 
<br>
problem in using &quot;-bynode&quot; or &quot;-nolocal&quot;. We tried in both Intel 
<br>
compiler and GCC 4.1.2. The same type of error appears.
<br>
<p>Here is the error message we got:
<br>
<p>mpiexec -n 4 --loadbalance ./a.out
<br>
<p>[n265:00912] *** Process received signal ***
<br>
[n265:00912] Signal: Segmentation fault (11)
<br>
[n265:00912] Signal code: Address not mapped (1)
<br>
[n265:00912] Failing at address: 0x50
<br>
[n265:00912] [ 0] /lib64/libpthread.so.0 [0x3e0820eb10]
<br>
[n265:00912] [ 1] 
<br>
/u/local/intel/11.1/openmpi/1.4.2/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xcf) 
<br>
[0x2b9344c3f7ff]
<br>
[n265:00912] [ 2] 
<br>
/u/local/intel/11.1/openmpi/1.4.2/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x3b8) 
<br>
[0x2b9344c5f2a8]
<br>
[n265:00912] [ 3] 
<br>
/u/local/intel/11.1/openmpi/1.4.2/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0xd7) 
<br>
[0x2b9344c70b97]
<br>
[n265:00912] [ 4] /u/local/intel/11.1/openmpi/1.4.2/lib/libopen-rte.so.0 
<br>
[0x2b9344c77171]
<br>
[n265:00912] [ 5] mpiexec [0x404c27]
<br>
[n265:00912] [ 6] mpiexec [0x403e38]
<br>
[n265:00912] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3e0761d994]
<br>
[n265:00912] [ 8] mpiexec [0x403d69]
<br>
[n265:00912] *** End of error message ***
<br>
Segmentation fault
<br>
[n96:22288] [[57019,0],3] routed:binomial: Connection to lifeline 
<br>
[[57019,0],0] lost
<br>
<p><p>Below is the info for our system:
<br>
<p>+ OS: CentOS 5.5
<br>
+ OpenMPI 1.4.2 configuration:
<br>
./configure --prefix=/u/local/intel/11.1/openmpi/1.4.2  \
<br>
--with-openib=/usr --enable-static    \
<br>
CC=icc CXX=icpc F77=ifort FC=ifort  --with-sge
<br>
(similar for GCC~)
<br>
<p><p>Any ideas would be appreciated. Many thanks in advance.
<br>
<p>Best wishes,
<br>
Qiyang
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13677.php">Ralph Castain: "Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>Previous message:</strong> <a href="13675.php">Josh Hursey: "Re: [OMPI users] ompi-restart, ompi-ps problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13677.php">Ralph Castain: "Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
<li><strong>Reply:</strong> <a href="13677.php">Ralph Castain: "Re: [OMPI users] errors in mpiexec command with &quot;-loadbalance&quot; options"</a>
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
