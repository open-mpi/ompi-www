<?
$subject_val = "Re: [OMPI users] Ompi-restart failed and process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 11:43:51 2012" -->
<!-- isoreceived="20120424154351" -->
<!-- sent="Tue, 24 Apr 2012 08:43:46 -0700 (PDT)" -->
<!-- isosent="20120424154346" -->
<!-- name="kidd" -->
<!-- email="q19860103_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi-restart failed and process migration" -->
<!-- id="1335282226.79171.YahooMailNeo_at_web130106.mail.mud.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAANzjEm95t3_ixyAB4PAXa_6dixUUY+VNfXA=nY9ppnw8Vs6Eg_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2012-04-24 11:43:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<li><strong>Previous message:</strong> <a href="19092.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19091.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<li><strong>Reply:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<li><strong>Reply:</strong> <a href="19097.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi ,Thank you For your reply.
I have some problem:
Q1:&#194;&#160; I setting 2 kinds&#194;&#160; mac.para.conf

&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; (1) crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints

&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; My Master : /root/kidd_openMPI &#194;&#160; is My opempi-Installed Dir&#194;&#160; ,it is&#194;&#160; Shared by NFS .
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Do I have to mount&#194;&#160; a&#194;&#160;&#194;&#160; User_Account , Rather than a&#194;&#160; dir&#194;&#160; ?
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 

&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 

&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; (2) snapc_base_store_in_place=0
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir= /tmp/OmpiStore/local
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir= /tmp/OmpiStore/global

&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; In this&#194;&#160; case&#194;&#160; ,I not use&#194;&#160; NFS&#194;&#160; in OmpiStore/local&#194;&#160; &#239;&#188;&#134;OmpiStore/local;
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; is it right ?
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; (3)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Do I setting .openmpi in all-Node ,or just seting on Master .
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 

&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; (4)&#194;&#160; I install openmpi&#194;&#160; in root ,should I move&#194;&#160;&#194;&#160; to&#194;&#160; General-user-account ? 

&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 


________________________________
 &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
&#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt; 
&#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/24 (&#233;&#128;&#177;&#228;&#186;&#140;) 10:58 PM
&#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] Ompi-restart failed and process migration
 
On Tue, Apr 24, 2012 at 10:10 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
&gt; Hi ,Thank you For your reply.
&gt; &#194;&#160;but I still failed. I must add -x&#194;&#160; LD_LIBRARY_PATH
&gt; this is my&#194;&#160; All Setting ;
&gt; 1) Master-Node(cuda07)&#194;&#160; &amp;&#194;&#160; Slaves Node(cuda08) :
&gt; &#194;&#160;&#194;&#160; Configure:
&gt; &#194;&#160;&#194;&#160; ./configure --prefix=/root/kidd_openMPI&#194;&#160; --with-ft=cr
&gt; --enable-ft-thread&#194;&#160; --with-blcr=/usr/local/BLCR
&gt; &#194;&#160;&#194;&#160; --with-blcr-libdir=/usr/local/BLCR/lib&#194;&#160; --enable-mpirun-prefix-by-default
&gt; &#194;&#160;&#194;&#160; --enable-static --enable-shared&#194;&#160; --enable-opal-progress-threads; make ;
&gt; make install;
&gt;
&gt; &#194;&#160; (2) Path &amp;&amp; LD_PATH:
&gt; &#194;&#160;&#194;&#160;&#194;&#160; #In /etc/profile
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export PATH=$PATH:/usr/local/BLCR/bin ;
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export&#194;&#160; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
&gt; &#194;&#160;&#194;&#160; #In ~/.bashrc
&gt; &#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export PATH=$PATH:/root/kidd_openMPI/bin
&gt; &#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib
&gt;
&gt; &#194;&#160;&#194;&#160; (3) Compiler &amp;&amp; Running:
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; ~/kidd_openMPI/NBody_TEST#&#194;&#160; mpicc -o&#194;&#160; TEST -DDEFSIZE=5000&#194;&#160; \
&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; -DDEF_PROC=2 MPINbodyOMP.c
&gt;
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; &#194;&#160; root_at_cuda07:~/kidd_openMPI/NBody_TEST# mpirun -hostfile Hosts
&gt; -np 2 TEST
&gt;
&gt; &#194;&#160; TEST: error while loading shared libraries: libcr.so.0: cannot open shared
&gt; object file: No such file or directory


I still think the core problem is with the search path given this
message. Open MPI is trying to load BLCR's libcr.so.0, and it is not
finding the library in the LD_LIBRARY_PATH search path. Something is
still off in the backend nodes. Try adding the BLCR
PATH/LD_LIBRARY_PATH to your .bashrc instead of the profile.


&gt;
&gt; &#194;&#160;&#194;&#160; ==&gt; I make sure&#194;&#160; Master and Slave&#194;&#160; have&#194;&#160; same Install and&#194;&#160; same Path .
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; I&#194;&#160; let slave-node&#194;&#160; using cr_restart&#194;&#160;&#194;&#160; restart a contextfile ,the
&gt; contextfile checked by Master ,so
&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160; Blcr&#194;&#160; can work;
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; but it still&#194;&#160; cannot open shared object file-&gt;libcr.so.0:


So BLCR is giving this error?

&gt;
&gt; &#194;&#160; (4)&#194;&#160; if&#194;&#160; &#194;&#160; I pass&#194;&#160; -x LD_LIBRARY_PATH
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ( local mount )
&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; (4-1)My mca-params.conf(In Master )
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; snapc_base_store_in_place=0
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir=/tmp/OmpiStore/local
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/tmp/OmpiStore/global
&gt;
&gt; &#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; step 1: mpirun -hostfile Hosts -np 2 -x LD_LIBRARY_PATH -am
&gt; ft-enable-cr ./TEST
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; step 2: ompi-checkpoint -term Pid ( I use another command)
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160; step 3:
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; cd&#194;&#160; /tmp/OmpiStore/global
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; ompi-restart&#194;&#160;&#194;&#160;&#194;&#160; Ompi_xxxxPid.ckpt .&#194;&#160;&#194;&#160; (all process
&gt; Only Restart on Master)
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; ompi-restart&#194;&#160;&#194;&#160;&#194;&#160; --hostfile Host&#194;&#160; Ompi_xxxxPid.ckpt .
&gt; &#194;&#160;Error-Message:
&gt; root_at_cuda07:/tmp/OmpiStore/global#
&gt; &#194;&#160; ompi-restart --preload -hostfile Hosts ompi_global_snapshot_8873.ckpt/
&gt; Warning: Permanently added the RSA host key for IP address '192.168.1.10' to
&gt; the list of known hosts.
&gt; --------------------------------------------------------------------------
&gt; WARNING: Remote peer ([[37567,0],1]) failed to preload a file.
&gt; Exit Status: 256
&gt; Local&#194;&#160; File: /tmp/OmpiStore/global/./opal_snapshot_1.ckpt
&gt; Remote File:
&gt; /tmp/OmpiStore/global/ompi_global_snapshot_8873.ckpt/0/opal_snapshot_1.ckpt
&gt; Command:
&gt; &#194;&#160; scp&#194;&#160; -r
&gt; cuda07:/tmp/OmpiStore/global/ompi_global_snapshot_8873.ckpt/0/opal_snapshot_1.ckpt
&gt; \
&gt; &#194;&#160;&#194;&#160; /tmp/OmpiStore/global/./opal_snapshot_1.ckpt
&gt;
&gt; Will continue attempting to launch the process(es).
&gt; --------------------------------------------------------------------------
&gt; [cuda08:08899] Error: Unable to access the path [./opal_snapshot_1.ckpt]!
&gt; --------------------------------------------------------------------------
&gt; Error: The filename (opal_snapshot_1.ckpt) is invalid because either you
&gt; have not provided a filename
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; or provided an invalid filename.
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Please see --help for usage.
&gt; --------------------------------------------------------------------------
&gt; I am 0 loop=40&#194;&#160; in #pragma&#194;&#160; time1=446.558860
&gt; ^Cmpirun: killing job...
&gt; /*---------------------------------------------------------------------------------------------------------------------------------------*/

It looks like the MCA parameters are not being set correctly. Check to
make sure that the mca-params.conf file on each nodes matches. Is your
$HOME directory mounted on a shared file system? If so, then try to
just store the checkpoints to the $HOME for now, until the rest of the
functionality is working properly.


&gt; &#194;&#160;(5) A couple solutions:
&gt;
&gt;&gt; - have the PATH and LD_LIBRARY_PATH set the same on all nodes
&gt;&gt; - have ompi-restart pass the -x parameter to the underlying mpirun by
&gt;&gt; using the -mpirun_opts command line switch:
&gt;&gt; &#194;&#160; ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ..
&gt;
&gt; &#194;&#160; &#194;&#160;&#194;&#160; How to Using&#194;&#160;&#194;&#160; --mpirun_opts ?
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; this is my command ==&gt;
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ompi-restart --mpirun_opts&#194;&#160; -x&#194;&#160; LD_LIBRARY_PATH&#194;&#160; -hostfile Hosts \
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ompi_global_snapshot_8873.ckpt/
&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; but it is Error.


Use quotes around the mpirun specific options:
ompi-restart --mpirun_opts&#194;&#160; &quot;-x&#194;&#160; LD_LIBRARY_PATH&quot;&#194;&#160; -hostfile Hosts
ompi_global_snapshot_8873.ckpt
or
ompi-restart --mpirun_opts&#194;&#160; &quot;-x&#194;&#160; LD_LIBRARY_PATH -hostfile Hosts&quot;
ompi_global_snapshot_8873.ckpt

-- Josh

&gt;
&gt; &#194;&#160;thanks.
&gt; ________________________________
&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
&gt; &#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt;
&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/24 (&#233;&#128;&#177;&#228;&#186;&#140;) 3:23 AM
&gt;
&gt; &#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] Ompi-restart failed and process migration
&gt;
&gt; On Mon, Apr 23, 2012 at 2:45 PM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
&gt;&gt; Hi ,Thank you For your reply.
&gt;&gt;
&gt;&gt; I have some problems&#239;&#188;&#154;
&gt;&gt; (1)
&gt;&gt; Now ,In the my platform , all nodes have the same path and
&gt;&gt; LD_LIBRARY_PATH.
&gt;&gt; &#194;&#160;I set in .bashrc
&gt;&gt;
&gt;&gt; /--------------------------------------------------------------------------------/
&gt;&gt; #BLCR
&gt;&gt; export PATH=$PATH:/usr/local/BLCR/bin
&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
&gt;&gt; #openMPI
&gt;&gt; export PATH=$PATH:/root/kidd_openMPI/bin
&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib
&gt;&gt;
&gt;&gt; /-------------------------------------------------------------------------------------------/
&gt;&gt; but ,when I&#194;&#160; running&#194;&#160; mpirun&#194;&#160; , I have to add&#194;&#160; &quot; -x&#194;&#160; LD_LIBRARY_PATH&quot; ,or
&gt;&gt; it can't&#194;&#160; run
&gt;&gt; &#194;&#160;example:&#194;&#160; mpirun -hostfile hosts&#194;&#160; -np&#194;&#160; 2&#194;&#160; ./TEST .
&gt;&gt; &#194;&#160;Error Message==&gt;
&gt;&gt; ./TEST: error while loading shared libraries: libcr.so.0: cannot open
&gt;&gt; shared
&gt;&gt; object file: No such file or directory
&gt;
&gt; It sounds like something is still not quite right with your
&gt; environment and system setup. If you have set the PATH and
&gt; LD_LIBRARY_PATH appropriately on all nodes then you should not have to
&gt; pass the &quot;-x LD_LIBRARY_PATH&quot; option to mpirun. Additionally, the
&gt; error you are seeing is from BLCR. That error seems to indicate that
&gt; BLCR is not installed correctly on all nodes.
&gt;
&gt; Some things to look into (in this order):
&gt; 1) Make sure that you have BLCR and Open MPI installed in the same
&gt; location on all machines.
&gt; 2) Make sure that BLCR works on all machines by checkpointing and
&gt; restarting a single process program
&gt; 3) Make sure that Open MPI works on all machines -without-
&gt; checkpointing, and without passing the -x option.
&gt; 4) Checkpoint/restart an MPI job
&gt;
&gt;
&gt;&gt; &#194;&#160;(2)&#194;&#160; BLCR need to unify linux-kernel&#194;&#160; of all the Node ?
&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Now ,I reset all&#194;&#160; Node.(using Ubuntu 10.04)
&gt;
&gt; I do not understand what you are trying to ask here. Please rephrase.
&gt;
&gt;
&gt;&gt; &#194;&#160;(3)
&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; Now , My porgram using&#194;&#160; DLL . I implements some DLL&#194;&#160; ,MPI-Program
&gt;&gt; calls DLLs .
&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Ompi can check/Restart&#194;&#160; Program contains&#194;&#160; DLL ?
&gt;
&gt; I do not understand what you are trying to ask here. Please rephrase.
&gt;
&gt; -- Josh
&gt;
&gt;
&gt;&gt; ________________________________
&gt;&gt;
&gt;&gt; ________________________________
&gt;&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
&gt;&gt; &#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt;
&gt;&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/23 (&#233;&#128;&#177;&#228;&#184;&#128;) 10:51 PM
&gt;&gt; &#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] Ompi-restart failed and process migration
&gt;&gt;
&gt;&gt; I wonder if the LD_LIBRARY_PATH is not being set properly upon
&gt;&gt; restart. In your mpirun you pass the '-x LD_LIBRARY_PATH'.
&gt;&gt; ompi-restart will not pass that variable along for you, so if you are
&gt;&gt; using that to set the BLCR path this might be your problem.
&gt;&gt;
&gt;&gt; A couple solutions:
&gt;&gt; - have the PATH and LD_LIBRARY_PATH set the same on all nodes
&gt;&gt; - have ompi-restart pass the -x parameter to the underlying mpirun by
&gt;&gt; using the -mpirun_opts command line switch:
&gt;&gt; &#194;&#160; ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ...
&gt;&gt;
&gt;&gt; Yes. ompi-restart will let you checkpoint a process on one node and
&gt;&gt; restart it on another. You will have to restart the whole application
&gt;&gt; since the ompi-migration operation is not available in the 1.5 series.
&gt;&gt;
&gt;&gt; -- Josh
&gt;&gt;
&gt;&gt; On Sat, Apr 21, 2012 at 4:11 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
&gt;&gt;&gt; Hi all,
&gt;&gt;&gt; I have Some problems,I wana check/Restart Multiple process on 2 node.
&gt;&gt;&gt;
&gt;&gt;&gt;&#194;&#160; My environment:
&gt;&gt;&gt;&#194;&#160; BLCR= 0.8.4&#194;&#160;&#194;&#160; , openMPI= 1.5.5&#194;&#160; , OS = ubuntu 11.04
&gt;&gt;&gt; I have 2 Node :
&gt;&gt;&gt; &#194;&#160;N05(Master ,it have NFS shared file system),N07(slave
&gt;&gt;&gt;&#194;&#160; ,mount Master-Node).
&gt;&gt;&gt;
&gt;&gt;&gt;&#194;&#160; My configure format=./configure --prefix=/root/kidd_openMPI
&gt;&gt;&gt;&#194;&#160; --with-ft=cr --enable-ft-thread&#194;&#160; --with-blcr=/usr/local/BLCR
&gt;&gt;&gt;&#194;&#160; --with-blcr-libdir=/usr/local/BLCR/lib --enable-mpirun-prefix-by-default
&gt;&gt;&gt;&#194;&#160; --enable-static --enable-shared --enable-opal-multi-threads;
&gt;&gt;&gt;
&gt;&gt;&gt;&#194;&#160; I had also set&#194;&#160; ~/.openmpi/mca-params.conf-&gt;
&gt;&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
&gt;&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints.
&gt;&gt;&gt;
&gt;&gt;&gt; the dir-&gt;kidd_openMPI is my nfs shared dir.
&gt;&gt;&gt;
&gt;&gt;&gt; &#194;&#160;My Command :
&gt;&gt;&gt;&#194;&#160; 1. mpicc -o TEST -DDEFSIZE=3000 -DDEF_PROC=2 -fopenmp MPIMatrix.c
&gt;&gt;&gt;
&gt;&gt;&gt;&#194;&#160; &#194;&#160;2. mpirun -hostfile Hosts -am ft-enable-cr -x LD_LIBRARY_PATH
&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; -np 2 ./TEST .
&gt;&gt;&gt;
&gt;&gt;&gt;&#194;&#160; I can restart process-0 on Master,but process-1 on N07 was failed.
&gt;&gt;&gt;
&gt;&gt;&gt;&#194;&#160; I checked my Node,it does not install the prelink,
&gt;&gt;&gt;&#194;&#160; so the error(restart-failed) is caused by other reasons.
&gt;&gt;&gt;
&gt;&gt;&gt;&#194;&#160; Error Message--&gt;
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&#194;&#160; &#194;&#160;root_at_cuda05:~/kidd_openMPI/checkpoints#
&gt;&gt;&gt;&#194;&#160; ompi-restart -hostfile Hosts ompi_global_snapshot_2892.ckpt/
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160; Error: BLCR was not able to restart the process because exec failed.
&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; Check the installation of BLCR on all of the machines in your
&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; system. The following information may be of help:
&gt;&gt;&gt;&#194;&#160; &#194;&#160;Return Code : -1
&gt;&gt;&gt;&#194;&#160; &#194;&#160;BLCR Restart Command : cr_restart
&gt;&gt;&gt;&#194;&#160; &#194;&#160;Restart Command Line : cr_restart
&gt;&gt;&gt;&#194;&#160; /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/
&gt;&gt;&gt;&#194;&#160; opal_snapshot_1.ckpt/ompi_blcr_context.2704
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --------------------------------------------------------------------------
&gt;&gt;&gt;&#194;&#160; Error: Unable to obtain the proper restart command to restart from the
&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Check the installation of the blcr checkpoint/restart service
&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; on all of the machines in your system.
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; ###########################################################################
&gt;&gt;&gt;&#194;&#160; problem 2: I wana let MPI-process can migration to another Node.
&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if Ompi-Restart&#194;&#160; Multiple-Node can be successful.
&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Can restart in another new node, rather than the original node?
&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; example:
&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; checkpoint (node1,node2,node3),then restart(node1,node3,node4).
&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; or just restart(node1,node3(2-process) ).
&gt;&gt;&gt;
&gt;&gt;&gt; &#194;&#160;&#194;&#160; Please help me , thanks .
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; users mailing list
&gt;&gt;&gt; users_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;
&gt;&gt; --
&gt;&gt; Joshua Hursey
&gt;&gt; Postdoctoral Research Associate
&gt;&gt; Oak Ridge National Laboratory
&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; users mailing list
&gt;&gt; users_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<li><strong>Previous message:</strong> <a href="19092.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19091.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<li><strong>Reply:</strong> <a href="19094.php">Jeffrey A Cummings: "[OMPI users]  Segmentation fault during MPI initialization"</a>
<li><strong>Reply:</strong> <a href="19097.php">Josh Hursey: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
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
