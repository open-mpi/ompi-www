<?
$subject_val = "[OMPI users] OpenMPI and Rmpi/snow";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 17:42:06 2012" -->
<!-- isoreceived="20120726214206" -->
<!-- sent="Thu, 26 Jul 2012 17:41:59 -0400" -->
<!-- isosent="20120726214159" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI and Rmpi/snow" -->
<!-- id="F9FA7CB9-2B0A-4749-8175-152248AFA010_at_umich.edu" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI and Rmpi/snow<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 17:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19829.php">Erik Nelson: "[OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Reply:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have ran into a problem using Rmpi with OpenMPI (trying to get snow running).
<br>
<p>I built OpenMPI following another post where I built static:
<br>
<p>./configure --prefix=$INSTALL/gcc-4.4.6-static --mandir=$INSTALL/gcc-4.4.6-static/man --with-tm=/usr/local/torque/ --with-openib --with-psm --enable-static CC=gcc CXX=g++ FC=gfortran F77=gfortran
<br>
<p>Rmpi/snow work fine when I run on a single node.  When I span more than one node I get nasty errors (pasted below).
<br>
<p>I tested this mpi install with a simple hello world and that works.  Any thoughts what is different about Rmpi/snow that could cause this?
<br>
<p>[nyx0400.engin.umich.edu:11927] [[48116,0],4] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
<br>
[nyx0400.engin.umich.edu:11927] [[48116,0],4]:route_callback tried routing message from [[48116,2],16] to [[48116,1],0]:16, can't find route
<br>
[nyx0405.engin.umich.edu:07707] [[48116,0],8] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
<br>
[nyx0405.engin.umich.edu:07707] [[48116,0],8]:route_callback tried routing message from [[48116,2],32] to [[48116,1],0]:16, can't find route
<br>
[0] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(opal_backtrace_print+0x1f) [0x2b7e9209e0df]
<br>
[1] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(+0x9f77a) [0x2b7e9206577a]
<br>
[2] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(mca_oob_tcp_msg_recv_complete+0x27f) [0x2b7e920404af]
<br>
[3] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(+0x7bed2) [0x2b7e92041ed2]
<br>
[4] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(opal_event_base_loop+0x238) [0x2b7e92087e38]
<br>
[5] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(orte_daemon+0x8d8) [0x2b7e92016768]
<br>
[6] func:orted(main+0x66) [0x400966]
<br>
[7] func:/lib64/libc.so.6(__libc_start_main+0xfd) [0x3d39c1ecdd]
<br>
[8] func:orted() [0x400839]
<br>
[nyx0397.engin.umich.edu:06959] [[48116,0],1] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
<br>
[nyx0397.engin.umich.edu:06959] [[48116,0],1]:route_callback tried routing message from [[48116,2],7] to [[48116,1],0]:16, can't find route
<br>
[nyx0401.engin.umich.edu:07782] [[48116,0],5] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
<br>
[nyx0401.engin.umich.edu:07782] [[48116,0],5]:route_callback tried routing message from [[48116,2],23] to [[48116,1],0]:16, can't find route
<br>
[nyx0406.engin.umich.edu:07743] [[48116,0],9] ORTE_ERROR_LOG: Not found in file routed_binomial.c at line 386
<br>
[nyx0406.engin.umich.edu:07743] [[48116,0],9]:route_callback tried routing message from [[48116,2],39] to [[48116,1],0]:16, can't find route
<br>
[0] func:/home/software/rhel6/openmpi-1.6.0/gcc-4.4.6-static/lib/libopen-rte.so.4(opal_backtrace_print+0x1f) [0x2ae2ad17d0df]
<br>
<p><p><p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19831.php">Reuti: "Re: [OMPI users] restricting a job to a set of hosts"</a>
<li><strong>Previous message:</strong> <a href="19829.php">Erik Nelson: "[OMPI users] restricting a job to a set of hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
<li><strong>Reply:</strong> <a href="19835.php">Ralph Castain: "Re: [OMPI users] OpenMPI and Rmpi/snow"</a>
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
