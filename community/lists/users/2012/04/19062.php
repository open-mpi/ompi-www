<?
$subject_val = "[OMPI users] Ompi-restart  failed and  process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 21 04:12:03 2012" -->
<!-- isoreceived="20120421081203" -->
<!-- sent="Sat, 21 Apr 2012 01:11:59 -0700 (PDT)" -->
<!-- isosent="20120421081159" -->
<!-- name="kidd" -->
<!-- email="q19860103_at_[hidden]" -->
<!-- subject="[OMPI users] Ompi-restart  failed and  process migration" -->
<!-- id="1334995919.6066.YahooMailNeo_at_web130103.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Ompi-restart  failed and  process migration<br>
<strong>From:</strong> kidd (<em>q19860103_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-21 04:11:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19063.php">Jeffrey Squyres: "Re: [OMPI users] Array version of MPI_Iprobe?"</a>
<li><strong>Previous message:</strong> <a href="19061.php">Jeffrey A Cummings: "[OMPI users]  Array version of MPI_Iprobe?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
I have Some problems,I wana check/Restart Multiple process on 2 node. My environment: BLCR= 0.8.4&#160;&#160; , openMPI= 1.5.5&#160; , OS = ubuntu 11.04
I have 2 Node :
&#160;N05(Master ,it have NFS shared file system),N07(slave
 ,mount Master-Node).
&#160;
 My configure format=./configure --prefix=/root/kidd_openMPI 
--with-ft=cr --enable-ft-thread&#160; --with-blcr=/usr/local/BLCR&#160; 
 --with-blcr-libdir=/usr/local/BLCR/lib --enable-mpirun-prefix-by-default
 --enable-static --enable-shared --enable-opal-multi-threads;

I had also set&#160; ~/.openmpi/mca-params.conf-&gt;
&#160;&#160;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
&#160;&#160;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints.

the dir-&gt;kidd_openMPI is my nfs shared dir.

&#160;My Command :
1. mpicc -o TEST -DDEFSIZE=3000 -DDEF_PROC=2 -fopenmp MPIMatrix.c

&#160;2. mpirun -hostfile Hosts -am ft-enable-cr -x LD_LIBRARY_PATH
     -np 2 ./TEST .
 &#160; 
  I can restart process-0 on Master,but process-1 on N07 was failed. I checked my Node,it does not install the prelink,so the error(restart-failed) is caused by other reasons. Error Message--&gt; -------------------------------------------------------------------------- &#160;root_at_cuda05:~/kidd_openMPI/checkpoints# 
ompi-restart -hostfile Hosts ompi_global_snapshot_2892.ckpt/
 --------------------------------------------------------------------------
 &#160;&#160; Error: BLCR was not able to restart the process because exec failed.
 &#160;&#160;&#160; Check the installation of BLCR on all of the machines in your
 &#160;&#160;  system. The following information may be of help:
 &#160;Return Code : -1
 &#160;BLCR Restart Command : cr_restart
 &#160;Restart Command Line : cr_restart
 /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/
 opal_snapshot_1.ckpt/ompi_blcr_context.2704
 --------------------------------------------------------------------------
 --------------------------------------------------------------------------
 Error: Unable to obtain the proper restart command to restart from the
 &#160;&#160;&#160;&#160;&#160;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
 &#160;&#160;&#160;&#160;&#160;&#160; Check the installation of the blcr checkpoint/restart service
 &#160;&#160;&#160;&#160;&#160;&#160; on all of the machines in your system.
 ###########################################################################
problem 2: I wana let MPI-process can migration to another Node.
if Ompi-Restart&#160; Multiple-Node can be successful. 
Can restart in another new node, rather than the original node?
example:
checkpoint (node1,node2,node3),then restart(node1,node3,node4).
or just restart(node1,node3(2-process) ). 
&#160;&#160; Please help me , thanks .
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19062/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19063.php">Jeffrey Squyres: "Re: [OMPI users] Array version of MPI_Iprobe?"</a>
<li><strong>Previous message:</strong> <a href="19061.php">Jeffrey A Cummings: "[OMPI users]  Array version of MPI_Iprobe?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
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
