<?
$subject_val = "Re: [OMPI users] Ompi-restart failed and process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 10:10:19 2012" -->
<!-- isoreceived="20120424141019" -->
<!-- sent="Tue, 24 Apr 2012 07:10:14 -0700 (PDT)" -->
<!-- isosent="20120424141014" -->
<!-- name="kidd" -->
<!-- email="q19860103_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi-restart failed and process migration" -->
<!-- id="1335276614.34683.YahooMailNeo_at_web130105.mail.mud.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAANzjEktQ4XG+2CA1jBfZ1hL2Pzj3e8ifGAWG_ZofEvkJmUHYw_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-04-24 10:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19091.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19089.php">Rolf vandeVaart: "Re: [OMPI users] MPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19091.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19091.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ,Thank you For your reply.&#194;&#160; 
&#194;&#160;but I still failed. I must add -x&#194;&#160; LD_LIBRARY_PATH 
this is my&#194;&#160; All Setting ;
1) Master-Node(cuda07)&#194;&#160; &amp;&#194;&#160; Slaves Node(cuda08) :
&#194;&#160;&#194;&#160; Configure: 
&#194;&#160;&#194;&#160; ./configure --prefix=/root/kidd_openMPI&#194;&#160; --with-ft=cr&#194;&#160; --enable-ft-thread&#194;&#160; --with-blcr=/usr/local/BLCR&#194;&#160; 
&#194;&#160;&#194;&#160; --with-blcr-libdir=/usr/local/BLCR/lib&#194;&#160; --enable-mpirun-prefix-by-default 
&#194;&#160;&#194;&#160; --enable-static --enable-shared&#194;&#160; --enable-opal-progress-threads; make ; make install;

&#194;&#160; (2) Path &amp;&amp; LD_PATH: 
&#194;&#160;&#194;&#160;&#194;&#160; #In /etc/profile
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export PATH=$PATH:/usr/local/BLCR/bin ;
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export&#194;&#160; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
&#194;&#160;&#194;&#160; #In ~/.bashrc
&#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export PATH=$PATH:/root/kidd_openMPI/bin
&#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib
&#194;&#160;&#194;&#160; 
&#194;&#160;&#194;&#160; (3) Compiler &amp;&amp; Running:
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; ~/kidd_openMPI/NBody_TEST#&#194;&#160; mpicc -o&#194;&#160; TEST -DDEFSIZE=5000&#194;&#160; \
&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; -DDEF_PROC=2 MPINbodyOMP.c

&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; &#194;&#160; root_at_cuda07:~/kidd_openMPI/NBody_TEST# mpirun -hostfile Hosts -np 2 TEST
&#194;&#160; TEST: error while loading shared libraries: libcr.so.0: cannot open shared object file: No such file or directory
&#194;&#160;&#194;&#160; 
&#194;&#160;&#194;&#160; ==&gt; I make sure&#194;&#160; Master and Slave&#194;&#160; have&#194;&#160; same Install and&#194;&#160; same Path . 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; I&#194;&#160; let slave-node&#194;&#160; using cr_restart&#194;&#160;&#194;&#160; restart a contextfile ,the contextfile checked by Master ,so 
&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160; Blcr&#194;&#160; can work; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; but it still&#194;&#160; cannot open shared object file-&gt;libcr.so.0:

&#194;&#160; (4)&#194;&#160; if&#194;&#160; &#194;&#160; I pass&#194;&#160; -x LD_LIBRARY_PATH 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ( local mount )
&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; (4-1)My mca-params.conf(In Master )
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; snapc_base_store_in_place=0
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir=/tmp/OmpiStore/local
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/tmp/OmpiStore/global
&#194;&#160; 
&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; step 1: mpirun -hostfile Hosts -np 2 -x LD_LIBRARY_PATH -am ft-enable-cr ./TEST
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; step 2: ompi-checkpoint -term Pid ( I use another command)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160; step 3:&#194;&#160; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; cd&#194;&#160; /tmp/OmpiStore/global
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; ompi-restart&#194;&#160;&#194;&#160;&#194;&#160; Ompi_xxxxPid.ckpt .&#194;&#160;&#194;&#160; (all process &#194;&#160;&#194;&#160; Only Restart on Master)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; ompi-restart&#194;&#160;&#194;&#160;&#194;&#160; --hostfile Host&#194;&#160; Ompi_xxxxPid.ckpt .
&#194;&#160;Error-Message:
root_at_cuda07:/tmp/OmpiStore/global#
&#194;&#160; ompi-restart --preload -hostfile Hosts ompi_global_snapshot_8873.ckpt/
Warning: Permanently added the RSA host key for IP address '192.168.1.10' to the list of known hosts.
--------------------------------------------------------------------------
WARNING: Remote peer ([[37567,0],1]) failed to preload a file.
Exit Status: 256
Local&#194;&#160; File: /tmp/OmpiStore/global/./opal_snapshot_1.ckpt
Remote File: /tmp/OmpiStore/global/ompi_global_snapshot_8873.ckpt/0/opal_snapshot_1.ckpt
Command:
&#194;&#160; scp&#194;&#160; -r&#194;&#160; cuda07:/tmp/OmpiStore/global/ompi_global_snapshot_8873.ckpt/0/opal_snapshot_1.ckpt \
&#194;&#160;&#194;&#160; /tmp/OmpiStore/global/./opal_snapshot_1.ckpt 

Will continue attempting to launch the process(es).
--------------------------------------------------------------------------
[cuda08:08899] Error: Unable to access the path [./opal_snapshot_1.ckpt]!
--------------------------------------------------------------------------
Error: The filename (opal_snapshot_1.ckpt) is invalid because either you have not provided a filename
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; or provided an invalid filename.
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Please see --help for usage.
--------------------------------------------------------------------------
I am 0 loop=40&#194;&#160; in #pragma&#194;&#160; time1=446.558860 
^Cmpirun: killing job...
/*---------------------------------------------------------------------------------------------------------------------------------------*/
&#194;&#160;(5)A couple solutions:
&gt; - have the PATH and LD_LIBRARY_PATH set the same on all nodes
&gt; - have ompi-restart pass the -x parameter to the underlying mpirun by
&gt; using the -mpirun_opts command line switch:
&gt; &#194;&#160; ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ..
&#194;&#160;&#194;&#160; 
&#194;&#160; &#194;&#160;&#194;&#160; How to Using&#194;&#160;&#194;&#160; --mpirun_opts ? 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; this is my command ==&gt; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ompi-restart --mpirun_opts&#194;&#160; -x&#194;&#160; LD_LIBRARY_PATH&#194;&#160; -hostfile Hosts \
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ompi_global_snapshot_8873.ckpt/
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; but it is Error.

&#194;&#160;thanks.&#194;&#160; 


________________________________
 &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
&#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt; 
&#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/24 (&#233;&#128;&#177;&#228;&#186;&#140;) 3:23 AM
&#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] Ompi-restart failed and process migration
 
On Mon, Apr 23, 2012 at 2:45 PM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
&gt; Hi ,Thank you For your reply.
&gt;
&gt; I have some problems&#239;&#188;&#154;
&gt; (1)
&gt; Now ,In the my platform , all nodes have the same path and LD_LIBRARY_PATH.
&gt; &#194;&#160;I set in .bashrc
&gt; /--------------------------------------------------------------------------------/
&gt; #BLCR
&gt; export PATH=$PATH:/usr/local/BLCR/bin
&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
&gt; #openMPI
&gt; export PATH=$PATH:/root/kidd_openMPI/bin
&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib
&gt; /-------------------------------------------------------------------------------------------/
&gt; but ,when I&#194;&#160; running&#194;&#160; mpirun&#194;&#160; , I have to add&#194;&#160; &quot; -x&#194;&#160; LD_LIBRARY_PATH&quot; ,or
&gt; it can't&#194;&#160; run
&gt; &#194;&#160;example:&#194;&#160; mpirun -hostfile hosts&#194;&#160; -np&#194;&#160; 2&#194;&#160; ./TEST .
&gt; &#194;&#160;Error Message==&gt;
&gt; ./TEST: error while loading shared libraries: libcr.so.0: cannot open shared
&gt; object file: No such file or directory

It sounds like something is still not quite right with your
environment and system setup. If you have set the PATH and
LD_LIBRARY_PATH appropriately on all nodes then you should not have to
pass the &quot;-x LD_LIBRARY_PATH&quot; option to mpirun. Additionally, the
error you are seeing is from BLCR. That error seems to indicate that
BLCR is not installed correctly on all nodes.

Some things to look into (in this order):
1) Make sure that you have BLCR and Open MPI installed in the same
location on all machines.
2) Make sure that BLCR works on all machines by checkpointing and
restarting a single process program
3) Make sure that Open MPI works on all machines -without-
checkpointing, and without passing the -x option.
4) Checkpoint/restart an MPI job


&gt; &#194;&#160;(2)&#194;&#160; BLCR need to unify linux-kernel&#194;&#160; of all the Node ?
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Now ,I reset all&#194;&#160; Node.(using Ubuntu 10.04)

I do not understand what you are trying to ask here. Please rephrase.


&gt; &#194;&#160;(3)
&gt; &#194;&#160; &#194;&#160; &#194;&#160; Now , My porgram using&#194;&#160; DLL . I implements some DLL&#194;&#160; ,MPI-Program
&gt; calls DLLs .
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Ompi can check/Restart&#194;&#160; Program contains&#194;&#160; DLL ?

I do not understand what you are trying to ask here. Please rephrase.

-- Josh


&gt; ________________________________
&gt;
&gt; ________________________________
&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
&gt; &#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt;
&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/23 (&#233;&#128;&#177;&#228;&#184;&#128;) 10:51 PM
&gt; &#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] Ompi-restart failed and process migration
&gt;
&gt; I wonder if the LD_LIBRARY_PATH is not being set properly upon
&gt; restart. In your mpirun you pass the '-x LD_LIBRARY_PATH'.
&gt; ompi-restart will not pass that variable along for you, so if you are
&gt; using that to set the BLCR path this might be your problem.
&gt;
&gt; A couple solutions:
&gt; - have the PATH and LD_LIBRARY_PATH set the same on all nodes
&gt; - have ompi-restart pass the -x parameter to the underlying mpirun by
&gt; using the -mpirun_opts command line switch:
&gt; &#194;&#160; ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ...
&gt;
&gt; Yes. ompi-restart will let you checkpoint a process on one node and
&gt; restart it on another. You will have to restart the whole application
&gt; since the ompi-migration operation is not available in the 1.5 series.
&gt;
&gt; -- Josh
&gt;
&gt; On Sat, Apr 21, 2012 at 4:11 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
&gt;&gt; Hi all,
&gt;&gt; I have Some problems,I wana check/Restart Multiple process on 2 node.
&gt;&gt;
&gt;&gt;&#194;&#160; My environment:
&gt;&gt;&#194;&#160; BLCR= 0.8.4&#194;&#160;&#194;&#160; , openMPI= 1.5.5&#194;&#160; , OS = ubuntu 11.04
&gt;&gt; I have 2 Node :
&gt;&gt; &#194;&#160;N05(Master ,it have NFS shared file system),N07(slave
&gt;&gt;&#194;&#160; ,mount Master-Node).
&gt;&gt;
&gt;&gt;&#194;&#160; My configure format=./configure --prefix=/root/kidd_openMPI
&gt;&gt;&#194;&#160; --with-ft=cr --enable-ft-thread&#194;&#160; --with-blcr=/usr/local/BLCR
&gt;&gt;&#194;&#160; --with-blcr-libdir=/usr/local/BLCR/lib --enable-mpirun-prefix-by-default
&gt;&gt;&#194;&#160; --enable-static --enable-shared --enable-opal-multi-threads;
&gt;&gt;
&gt;&gt;&#194;&#160; I had also set&#194;&#160; ~/.openmpi/mca-params.conf-&gt;
&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints.
&gt;&gt;
&gt;&gt; the dir-&gt;kidd_openMPI is my nfs shared dir.
&gt;&gt;
&gt;&gt; &#194;&#160;My Command :
&gt;&gt;&#194;&#160; 1. mpicc -o TEST -DDEFSIZE=3000 -DDEF_PROC=2 -fopenmp MPIMatrix.c
&gt;&gt;
&gt;&gt;&#194;&#160; &#194;&#160;2. mpirun -hostfile Hosts -am ft-enable-cr -x LD_LIBRARY_PATH
&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; -np 2 ./TEST .
&gt;&gt;
&gt;&gt;&#194;&#160; I can restart process-0 on Master,but process-1 on N07 was failed.
&gt;&gt;
&gt;&gt;&#194;&#160; I checked my Node,it does not install the prelink,
&gt;&gt;&#194;&#160; so the error(restart-failed) is caused by other reasons.
&gt;&gt;
&gt;&gt;&#194;&#160; Error Message--&gt;
&gt;&gt;
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&#194;&#160; &#194;&#160;root_at_cuda05:~/kidd_openMPI/checkpoints#
&gt;&gt;&#194;&#160; ompi-restart -hostfile Hosts ompi_global_snapshot_2892.ckpt/
&gt;&gt;
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160; Error: BLCR was not able to restart the process because exec failed.
&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; Check the installation of BLCR on all of the machines in your
&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; system. The following information may be of help:
&gt;&gt;&#194;&#160; &#194;&#160;Return Code : -1
&gt;&gt;&#194;&#160; &#194;&#160;BLCR Restart Command : cr_restart
&gt;&gt;&#194;&#160; &#194;&#160;Restart Command Line : cr_restart
&gt;&gt;&#194;&#160; /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/
&gt;&gt;&#194;&#160; opal_snapshot_1.ckpt/ompi_blcr_context.2704
&gt;&gt;
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;
&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&#194;&#160; Error: Unable to obtain the proper restart command to restart from the
&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Check the installation of the blcr checkpoint/restart service
&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; on all of the machines in your system.
&gt;&gt;
&gt;&gt; ###########################################################################
&gt;&gt;&#194;&#160; problem 2: I wana let MPI-process can migration to another Node.
&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if Ompi-Restart&#194;&#160; Multiple-Node can be successful.
&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Can restart in another new node, rather than the original node?
&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; example:
&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; checkpoint (node1,node2,node3),then restart(node1,node3,node4).
&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; or just restart(node1,node3(2-process) ).
&gt;&gt;
&gt;&gt; &#194;&#160;&#194;&#160; Please help me , thanks .
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; --
&gt; Joshua Hursey
&gt; Postdoctoral Research Associate
&gt; Oak Ridge National Laboratory
&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19090/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19091.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Previous message:</strong> <a href="19089.php">Rolf vandeVaart: "Re: [OMPI users] MPI and CUDA"</a>
<li><strong>In reply to:</strong> <a href="19076.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19091.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19091.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
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
