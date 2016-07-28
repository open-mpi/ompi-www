<?
$subject_val = "Re: [OMPI users] Ompi-restart failed and process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 23 14:45:10 2012" -->
<!-- isoreceived="20120423184510" -->
<!-- sent="Mon, 23 Apr 2012 11:45:05 -0700 (PDT)" -->
<!-- isosent="20120423184505" -->
<!-- name="kidd" -->
<!-- email="q19860103_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi-restart failed and process migration" -->
<!-- id="1335206705.7703.YahooMailNeo_at_web130103.mail.mud.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAANzjEnNiNVpq+1dHyqgTBfLZXG-Ry=40GSdT7aOnqono6thSA_at_mail.gmail.com" -->
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
<strong>From:</strong> kidd (<em>q19860103_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-23 14:45:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19074.php">Martin Siegert: "[OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ,Thank you For your reply.
&#194;&#160; 
I have some problems&#239;&#188;&#154;
(1)
Now ,In the my platform , all nodes have the same pathand LD_LIBRARY_PATH.
&#194;&#160;I set in .bashrc&#194;&#160; 
/--------------------------------------------------------------------------------/
#BLCR
export PATH=$PATH:/usr/local/BLCR/bin
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
#openMPI
export PATH=$PATH:/root/kidd_openMPI/bin
export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib

/-------------------------------------------------------------------------------------------/
but ,when I&#194;&#160; running&#194;&#160; mpirun&#194;&#160; , I have to add&#194;&#160; &quot; -x&#194;&#160; LD_LIBRARY_PATH&quot; ,or&#194;&#160; it can't&#194;&#160; run
&#194;&#160;example:&#194;&#160; mpirun -hostfile hosts&#194;&#160; -np&#194;&#160; 2&#194;&#160; ./TEST .
&#194;&#160;Error Message==&gt; 
./TEST: error while loading shared libraries: libcr.so.0: cannot open shared object file: No such file or directory
&#194;&#160;(2)&#194;&#160; BLCR need to unify linux-kernel&#194;&#160; of all the Node ?
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Now ,I reset all&#194;&#160; Node.(using Ubuntu 10.04)

&#194;&#160;(3) 
&#194;&#160; &#194;&#160; &#194;&#160; Now , My porgram using&#194;&#160; DLL . I implements some DLL&#194;&#160; ,MPI-Program calls DLLs .&#194;&#160; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Ompi can check/Restart&#194;&#160; Program contains&#194;&#160; DLL ? 
________________________________



________________________________
 &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
&#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt; 
&#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/23 (&#233;&#128;&#177;&#228;&#184;&#128;) 10:51 PM
&#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] Ompi-restart failed and process migration
 
I wonder if the LD_LIBRARY_PATH is not being set properly upon
restart. In your mpirun you pass the '-x LD_LIBRARY_PATH'.
ompi-restart will not pass that variable along for you, so if you are
using that to set the BLCR path this might be your problem.

A couple solutions:
- have the PATH and LD_LIBRARY_PATH set the same on all nodes
- have ompi-restart pass the -x parameter to the underlying mpirun by
using the -mpirun_opts command line switch:
&#194;&#160;  ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ...

Yes. ompi-restart will let you checkpoint a process on one node and
restart it on another. You will have to restart the whole application
since the ompi-migration operation is not available in the 1.5 series.

-- Josh

On Sat, Apr 21, 2012 at 4:11 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
&gt; Hi all,
&gt; I have Some problems,I wana check/Restart Multiple process on 2 node.
&gt;
&gt;&#194;&#160; My environment:
&gt;&#194;&#160; BLCR= 0.8.4&#194;&#160;&#194;&#160; , openMPI= 1.5.5&#194;&#160; , OS = ubuntu 11.04
&gt; I have 2 Node :
&gt; &#194;&#160;N05(Master ,it have NFS shared file system),N07(slave
&gt;&#194;&#160; ,mount Master-Node).
&gt;
&gt;&#194;&#160; My configure format=./configure --prefix=/root/kidd_openMPI
&gt;&#194;&#160; --with-ft=cr --enable-ft-thread&#194;&#160; --with-blcr=/usr/local/BLCR
&gt;&#194;&#160; --with-blcr-libdir=/usr/local/BLCR/lib --enable-mpirun-prefix-by-default
&gt;&#194;&#160; --enable-static --enable-shared --enable-opal-multi-threads;
&gt;
&gt;&#194;&#160;  I had also set&#194;&#160; ~/.openmpi/mca-params.conf-&gt;
&gt; &#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
&gt; &#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints.
&gt;
&gt; the dir-&gt;kidd_openMPI is my nfs shared dir.
&gt;
&gt; &#194;&#160;My Command :
&gt;&#194;&#160;  1. mpicc -o TEST -DDEFSIZE=3000 -DDEF_PROC=2 -fopenmp MPIMatrix.c
&gt;
&gt;&#194;&#160; &#194;&#160;2. mpirun -hostfile Hosts -am ft-enable-cr -x LD_LIBRARY_PATH
&gt;&#194;&#160; &#194;&#160; &#194;&#160; -np 2 ./TEST .
&gt;
&gt;&#194;&#160;  I can restart process-0 on Master,but process-1 on N07 was failed.
&gt;
&gt;&#194;&#160;  I checked my Node,it does not install the prelink,
&gt;&#194;&#160;  so the error(restart-failed) is caused by other reasons.
&gt;
&gt;&#194;&#160;  Error Message--&gt;
&gt;&#194;&#160; --------------------------------------------------------------------------
&gt;&#194;&#160; &#194;&#160;root_at_cuda05:~/kidd_openMPI/checkpoints#
&gt;&#194;&#160;  ompi-restart -hostfile Hosts ompi_global_snapshot_2892.ckpt/
&gt;&#194;&#160; --------------------------------------------------------------------------
&gt;&#194;&#160; &#194;&#160;&#194;&#160; Error: BLCR was not able to restart the process because exec failed.
&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; Check the installation of BLCR on all of the machines in your
&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; system. The following information may be of help:
&gt;&#194;&#160; &#194;&#160;Return Code : -1
&gt;&#194;&#160; &#194;&#160;BLCR Restart Command : cr_restart
&gt;&#194;&#160; &#194;&#160;Restart Command Line : cr_restart
&gt;&#194;&#160; /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/
&gt;&#194;&#160; opal_snapshot_1.ckpt/ompi_blcr_context.2704
&gt;&#194;&#160; --------------------------------------------------------------------------
&gt;&#194;&#160; --------------------------------------------------------------------------
&gt;&#194;&#160; Error: Unable to obtain the proper restart command to restart from the
&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Check the installation of the blcr checkpoint/restart service
&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; on all of the machines in your system.
&gt;&#194;&#160; ###########################################################################
&gt;&#194;&#160; problem 2: I wana let MPI-process can migration to another Node.
&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if Ompi-Restart&#194;&#160; Multiple-Node can be successful.
&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Can restart in another new node, rather than the original node?
&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; example:
&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; checkpoint (node1,node2,node3),then restart(node1,node3,node4).
&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; or just restart(node1,node3(2-process) ).
&gt;
&gt; &#194;&#160;&#194;&#160; Please help me , thanks .
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Joshua Hursey
Postdoctoral Research Associate
Oak Ridge National Laboratory
<a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>

_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19074.php">Martin Siegert: "[OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19070.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
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
