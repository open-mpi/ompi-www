<?
$subject_val = "Re: [OMPI users] Ompi-restart failed and process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 15:23:22 2012" -->
<!-- isoreceived="20120423192322" -->
<!-- sent="Mon, 23 Apr 2012 15:23:18 -0400" -->
<!-- isosent="20120423192318" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi-restart failed and process migration" -->
<!-- id="CAANzjEktQ4XG+2CA1jBfZ1hL2Pzj3e8ifGAWG_ZofEvkJmUHYw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1335206705.7703.YahooMailNeo_at_web130103.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2012-04-23 15:23:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19077.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19090.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19090.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Apr 23, 2012 at 2:45 PM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi ,Thank you For your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have some problems&#239;&#188;&#154;
</span><br>
<span class="quotelev1">&gt; (1)
</span><br>
<span class="quotelev1">&gt; Now ,In the my platform , all nodes have the same path and LD_LIBRARY_PATH.
</span><br>
<span class="quotelev1">&gt; &#194;&#160;I set in .bashrc
</span><br>
<span class="quotelev1">&gt; /--------------------------------------------------------------------------------/
</span><br>
<span class="quotelev1">&gt; #BLCR
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/usr/local/BLCR/bin
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
</span><br>
<span class="quotelev1">&gt; #openMPI
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/root/kidd_openMPI/bin
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib
</span><br>
<span class="quotelev1">&gt; /-------------------------------------------------------------------------------------------/
</span><br>
<span class="quotelev1">&gt; but ,when I&#194;&#160; running&#194;&#160; mpirun&#194;&#160; , I have to add&#194;&#160; &quot; -x&#194;&#160; LD_LIBRARY_PATH&quot; ,or
</span><br>
<span class="quotelev1">&gt; it can't&#194;&#160; run
</span><br>
<span class="quotelev1">&gt; &#194;&#160;example:&#194;&#160; mpirun -hostfile hosts&#194;&#160; -np&#194;&#160; 2&#194;&#160; ./TEST .
</span><br>
<span class="quotelev1">&gt; &#194;&#160;Error Message==&gt;
</span><br>
<span class="quotelev1">&gt; ./TEST: error while loading shared libraries: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<p>It sounds like something is still not quite right with your
<br>
environment and system setup. If you have set the PATH and
<br>
LD_LIBRARY_PATH appropriately on all nodes then you should not have to
<br>
pass the &quot;-x LD_LIBRARY_PATH&quot; option to mpirun. Additionally, the
<br>
error you are seeing is from BLCR. That error seems to indicate that
<br>
BLCR is not installed correctly on all nodes.
<br>
<p>Some things to look into (in this order):
<br>
&nbsp;1) Make sure that you have BLCR and Open MPI installed in the same
<br>
location on all machines.
<br>
&nbsp;2) Make sure that BLCR works on all machines by checkpointing and
<br>
restarting a single process program
<br>
&nbsp;3) Make sure that Open MPI works on all machines -without-
<br>
checkpointing, and without passing the -x option.
<br>
&nbsp;4) Checkpoint/restart an MPI job
<br>
<p><p><span class="quotelev1">&gt; &#194;&#160;(2)&#194;&#160; BLCR need to unify linux-kernel&#194;&#160; of all the Node ?
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Now ,I reset all&#194;&#160; Node.(using Ubuntu 10.04)
</span><br>
<p>I do not understand what you are trying to ask here. Please rephrase.
<br>
<p><p><span class="quotelev1">&gt; &#194;&#160;(3)
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; Now , My porgram using&#194;&#160; DLL . I implements some DLL&#194;&#160; ,MPI-Program
</span><br>
<span class="quotelev1">&gt; calls DLLs .
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Ompi can check/Restart&#194;&#160; Program contains&#194;&#160; DLL ?
</span><br>
<p>I do not understand what you are trying to ask here. Please rephrase.
<br>
<p>-- Josh
<br>
<p><p><span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/23 (&#233;&#128;&#177;&#228;&#184;&#128;) 10:51 PM
</span><br>
<span class="quotelev1">&gt; &#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] Ompi-restart failed and process migration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I wonder if the LD_LIBRARY_PATH is not being set properly upon
</span><br>
<span class="quotelev1">&gt; restart. In your mpirun you pass the '-x LD_LIBRARY_PATH'.
</span><br>
<span class="quotelev1">&gt; ompi-restart will not pass that variable along for you, so if you are
</span><br>
<span class="quotelev1">&gt; using that to set the BLCR path this might be your problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple solutions:
</span><br>
<span class="quotelev1">&gt; - have the PATH and LD_LIBRARY_PATH set the same on all nodes
</span><br>
<span class="quotelev1">&gt; - have ompi-restart pass the -x parameter to the underlying mpirun by
</span><br>
<span class="quotelev1">&gt; using the -mpirun_opts command line switch:
</span><br>
<span class="quotelev1">&gt; &#194;&#160; ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes. ompi-restart will let you checkpoint a process on one node and
</span><br>
<span class="quotelev1">&gt; restart it on another. You will have to restart the whole application
</span><br>
<span class="quotelev1">&gt; since the ompi-migration operation is not available in the 1.5 series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Apr 21, 2012 at 4:11 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; I have Some problems,I wana check/Restart Multiple process on 2 node.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; My environment:
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; BLCR= 0.8.4&#194;&#160;&#194;&#160; , openMPI= 1.5.5&#194;&#160; , OS = ubuntu 11.04
</span><br>
<span class="quotelev2">&gt;&gt; I have 2 Node :
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;N05(Master ,it have NFS shared file system),N07(slave
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; ,mount Master-Node).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; My configure format=./configure --prefix=/root/kidd_openMPI
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; --with-ft=cr --enable-ft-thread&#194;&#160; --with-blcr=/usr/local/BLCR
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; --with-blcr-libdir=/usr/local/BLCR/lib --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; --enable-static --enable-shared --enable-opal-multi-threads;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; I had also set&#194;&#160; ~/.openmpi/mca-params.conf-&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; the dir-&gt;kidd_openMPI is my nfs shared dir.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;My Command :
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; 1. mpicc -o TEST -DDEFSIZE=3000 -DDEF_PROC=2 -fopenmp MPIMatrix.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;2. mpirun -hostfile Hosts -am ft-enable-cr -x LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; -np 2 ./TEST .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; I can restart process-0 on Master,but process-1 on N07 was failed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; I checked my Node,it does not install the prelink,
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; so the error(restart-failed) is caused by other reasons.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; Error Message--&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;root_at_cuda05:~/kidd_openMPI/checkpoints#
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; ompi-restart -hostfile Hosts ompi_global_snapshot_2892.ckpt/
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160; Error: BLCR was not able to restart the process because exec failed.
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; Check the installation of BLCR on all of the machines in your
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; system. The following information may be of help:
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;Return Code : -1
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;BLCR Restart Command : cr_restart
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;Restart Command Line : cr_restart
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; opal_snapshot_1.ckpt/ompi_blcr_context.2704
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Check the installation of the blcr checkpoint/restart service
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; on all of the machines in your system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ###########################################################################
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; problem 2: I wana let MPI-process can migration to another Node.
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if Ompi-Restart&#194;&#160; Multiple-Node can be successful.
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Can restart in another new node, rather than the original node?
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; example:
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; checkpoint (node1,node2,node3),then restart(node1,node3,node4).
</span><br>
<span class="quotelev2">&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; or just restart(node1,node3(2-process) ).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;&#194;&#160; Please help me , thanks .
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Joshua Hursey
</span><br>
<span class="quotelev1">&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<span class="quotelev1">&gt;
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
<p><p><p><pre>
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
<li><strong>Next message:</strong> <a href="19077.php">Gus Correa: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19075.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19090.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19090.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
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
