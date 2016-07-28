<?
$subject_val = "Re: [OMPI users] Ompi-restart failed and process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 10:51:36 2012" -->
<!-- isoreceived="20120423145136" -->
<!-- sent="Mon, 23 Apr 2012 10:51:32 -0400" -->
<!-- isosent="20120423145132" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi-restart failed and process migration" -->
<!-- id="CAANzjEnNiNVpq+1dHyqgTBfLZXG-Ry=40GSdT7aOnqono6thSA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1334995919.6066.YahooMailNeo_at_web130103.mail.mud.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Ompi-restart failed and process migration<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 10:51:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Previous message:</strong> <a href="19069.php">Constantinos Makassikis: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>In reply to:</strong> <a href="19062.php">kidd: "[OMPI users] Ompi-restart  failed and  process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if the LD_LIBRARY_PATH is not being set properly upon
<br>
restart. In your mpirun you pass the '-x LD_LIBRARY_PATH'.
<br>
ompi-restart will not pass that variable along for you, so if you are
<br>
using that to set the BLCR path this might be your problem.
<br>
<p>A couple solutions:
<br>
&nbsp;- have the PATH and LD_LIBRARY_PATH set the same on all nodes
<br>
&nbsp;- have ompi-restart pass the -x parameter to the underlying mpirun by
<br>
using the -mpirun_opts command line switch:
<br>
&nbsp;&nbsp;&nbsp;ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ...
<br>
<p>Yes. ompi-restart will let you checkpoint a process on one node and
<br>
restart it on another. You will have to restart the whole application
<br>
since the ompi-migration operation is not available in the 1.5 series.
<br>
<p>-- Josh
<br>
<p>On Sat, Apr 21, 2012 at 4:11 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; I have Some problems,I wana check/Restart Multiple process on 2 node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My environment:
</span><br>
<span class="quotelev1">&gt;  BLCR= 0.8.4&#160;&#160; , openMPI= 1.5.5&#160; , OS = ubuntu 11.04
</span><br>
<span class="quotelev1">&gt; I have 2 Node :
</span><br>
<span class="quotelev1">&gt; &#160;N05(Master ,it have NFS shared file system),N07(slave
</span><br>
<span class="quotelev1">&gt;  ,mount Master-Node).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My configure format=./configure --prefix=/root/kidd_openMPI
</span><br>
<span class="quotelev1">&gt;  --with-ft=cr --enable-ft-thread&#160; --with-blcr=/usr/local/BLCR
</span><br>
<span class="quotelev1">&gt;  --with-blcr-libdir=/usr/local/BLCR/lib --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt;  --enable-static --enable-shared --enable-opal-multi-threads;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I had also set&#160; ~/.openmpi/mca-params.conf-&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
</span><br>
<span class="quotelev1">&gt; &#160;&#160;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the dir-&gt;kidd_openMPI is my nfs shared dir.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;My Command :
</span><br>
<span class="quotelev1">&gt;   1. mpicc -o TEST -DDEFSIZE=3000 -DDEF_PROC=2 -fopenmp MPIMatrix.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &#160;2. mpirun -hostfile Hosts -am ft-enable-cr -x LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;      -np 2 ./TEST .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I can restart process-0 on Master,but process-1 on N07 was failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   I checked my Node,it does not install the prelink,
</span><br>
<span class="quotelev1">&gt;   so the error(restart-failed) is caused by other reasons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Error Message--&gt;
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &#160;root_at_cuda05:~/kidd_openMPI/checkpoints#
</span><br>
<span class="quotelev1">&gt;   ompi-restart -hostfile Hosts ompi_global_snapshot_2892.ckpt/
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  &#160;&#160; Error: BLCR was not able to restart the process because exec failed.
</span><br>
<span class="quotelev1">&gt;  &#160;&#160;&#160; Check the installation of BLCR on all of the machines in your
</span><br>
<span class="quotelev1">&gt;  &#160;&#160;  system. The following information may be of help:
</span><br>
<span class="quotelev1">&gt;  &#160;Return Code : -1
</span><br>
<span class="quotelev1">&gt;  &#160;BLCR Restart Command : cr_restart
</span><br>
<span class="quotelev1">&gt;  &#160;Restart Command Line : cr_restart
</span><br>
<span class="quotelev1">&gt;  /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/
</span><br>
<span class="quotelev1">&gt;  opal_snapshot_1.ckpt/ompi_blcr_context.2704
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;  Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev1">&gt;  &#160;&#160;&#160;&#160;&#160;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev1">&gt;  &#160;&#160;&#160;&#160;&#160;&#160; Check the installation of the blcr checkpoint/restart service
</span><br>
<span class="quotelev1">&gt;  &#160;&#160;&#160;&#160;&#160;&#160; on all of the machines in your system.
</span><br>
<span class="quotelev1">&gt;  ###########################################################################
</span><br>
<span class="quotelev1">&gt;  problem 2: I wana let MPI-process can migration to another Node.
</span><br>
<span class="quotelev1">&gt;          if Ompi-Restart&#160; Multiple-Node can be successful.
</span><br>
<span class="quotelev1">&gt;          Can restart in another new node, rather than the original node?
</span><br>
<span class="quotelev1">&gt;                        example:
</span><br>
<span class="quotelev1">&gt;          checkpoint (node1,node2,node3),then restart(node1,node3,node4).
</span><br>
<span class="quotelev1">&gt;          or just restart(node1,node3(2-process) ).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;&#160; Please help me , thanks .
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
<p><p><pre>
-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19071.php">Jim Dinan: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>Previous message:</strong> <a href="19069.php">Constantinos Makassikis: "Re: [OMPI users] Regarding MPI programming"</a>
<li><strong>In reply to:</strong> <a href="19062.php">kidd: "[OMPI users] Ompi-restart  failed and  process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
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
