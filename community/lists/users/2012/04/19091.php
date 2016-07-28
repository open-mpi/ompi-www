<?
$subject_val = "Re: [OMPI users] Ompi-restart failed and process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 10:58:46 2012" -->
<!-- isoreceived="20120424145846" -->
<!-- sent="Tue, 24 Apr 2012 10:58:41 -0400" -->
<!-- isosent="20120424145841" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi-restart failed and process migration" -->
<!-- id="CAANzjEm95t3_ixyAB4PAXa_6dixUUY+VNfXA=nY9ppnw8Vs6Eg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="1335276614.34683.YahooMailNeo_at_web130105.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2012-04-24 10:58:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19092.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19090.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19090.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Apr 24, 2012 at 10:10 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi ,Thank you For your reply.
</span><br>
<span class="quotelev1">&gt; &#194;&#160;but I still failed. I must add -x&#194;&#160; LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; this is my&#194;&#160; All Setting ;
</span><br>
<span class="quotelev1">&gt; 1) Master-Node(cuda07)&#194;&#160; &amp;&#194;&#160; Slaves Node(cuda08) :
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160; Configure:
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160; ./configure --prefix=/root/kidd_openMPI&#194;&#160; --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --enable-ft-thread&#194;&#160; --with-blcr=/usr/local/BLCR
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160; --with-blcr-libdir=/usr/local/BLCR/lib&#194;&#160; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160; --enable-static --enable-shared&#194;&#160; --enable-opal-progress-threads; make ;
</span><br>
<span class="quotelev1">&gt; make install;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; (2) Path &amp;&amp; LD_PATH:
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; #In /etc/profile
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export PATH=$PATH:/usr/local/BLCR/bin ;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export&#194;&#160; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160; #In ~/.bashrc
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export PATH=$PATH:/root/kidd_openMPI/bin
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160; ==&gt;export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160; (3) Compiler &amp;&amp; Running:
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; ~/kidd_openMPI/NBody_TEST#&#194;&#160; mpicc -o&#194;&#160; TEST -DDEFSIZE=5000&#194;&#160; \
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; -DDEF_PROC=2 MPINbodyOMP.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; &#194;&#160; root_at_cuda07:~/kidd_openMPI/NBody_TEST# mpirun -hostfile Hosts
</span><br>
<span class="quotelev1">&gt; -np 2 TEST
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; TEST: error while loading shared libraries: libcr.so.0: cannot open shared
</span><br>
<span class="quotelev1">&gt; object file: No such file or directory
</span><br>
<p><p>I still think the core problem is with the search path given this
<br>
message. Open MPI is trying to load BLCR's libcr.so.0, and it is not
<br>
finding the library in the LD_LIBRARY_PATH search path. Something is
<br>
still off in the backend nodes. Try adding the BLCR
<br>
PATH/LD_LIBRARY_PATH to your .bashrc instead of the profile.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160; ==&gt; I make sure&#194;&#160; Master and Slave&#194;&#160; have&#194;&#160; same Install and&#194;&#160; same Path .
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; I&#194;&#160; let slave-node&#194;&#160; using cr_restart&#194;&#160;&#194;&#160; restart a contextfile ,the
</span><br>
<span class="quotelev1">&gt; contextfile checked by Master ,so
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160;&#194;&#160; Blcr&#194;&#160; can work;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; but it still&#194;&#160; cannot open shared object file-&gt;libcr.so.0:
</span><br>
<p><p>So BLCR is giving this error?
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; (4)&#194;&#160; if&#194;&#160; &#194;&#160; I pass&#194;&#160; -x LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ( local mount )
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; (4-1)My mca-params.conf(In Master )
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; snapc_base_store_in_place=0
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir=/tmp/OmpiStore/local
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/tmp/OmpiStore/global
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; step 1: mpirun -hostfile Hosts -np 2 -x LD_LIBRARY_PATH -am
</span><br>
<span class="quotelev1">&gt; ft-enable-cr ./TEST
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; step 2: ompi-checkpoint -term Pid ( I use another command)
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160; step 3:
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; cd&#194;&#160; /tmp/OmpiStore/global
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; ompi-restart&#194;&#160;&#194;&#160;&#194;&#160; Ompi_xxxxPid.ckpt .&#194;&#160;&#194;&#160; (all process
</span><br>
<span class="quotelev1">&gt; Only Restart on Master)
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ==&gt; ompi-restart&#194;&#160;&#194;&#160;&#194;&#160; --hostfile Host&#194;&#160; Ompi_xxxxPid.ckpt .
</span><br>
<span class="quotelev1">&gt; &#194;&#160;Error-Message:
</span><br>
<span class="quotelev1">&gt; root_at_cuda07:/tmp/OmpiStore/global#
</span><br>
<span class="quotelev1">&gt; &#194;&#160; ompi-restart --preload -hostfile Hosts ompi_global_snapshot_8873.ckpt/
</span><br>
<span class="quotelev1">&gt; Warning: Permanently added the RSA host key for IP address '192.168.1.10' to
</span><br>
<span class="quotelev1">&gt; the list of known hosts.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: Remote peer ([[37567,0],1]) failed to preload a file.
</span><br>
<span class="quotelev1">&gt; Exit Status: 256
</span><br>
<span class="quotelev1">&gt; Local&#194;&#160; File: /tmp/OmpiStore/global/./opal_snapshot_1.ckpt
</span><br>
<span class="quotelev1">&gt; Remote File:
</span><br>
<span class="quotelev1">&gt; /tmp/OmpiStore/global/ompi_global_snapshot_8873.ckpt/0/opal_snapshot_1.ckpt
</span><br>
<span class="quotelev1">&gt; Command:
</span><br>
<span class="quotelev1">&gt; &#194;&#160; scp&#194;&#160; -r
</span><br>
<span class="quotelev1">&gt; cuda07:/tmp/OmpiStore/global/ompi_global_snapshot_8873.ckpt/0/opal_snapshot_1.ckpt
</span><br>
<span class="quotelev1">&gt; \
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160; /tmp/OmpiStore/global/./opal_snapshot_1.ckpt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will continue attempting to launch the process(es).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [cuda08:08899] Error: Unable to access the path [./opal_snapshot_1.ckpt]!
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Error: The filename (opal_snapshot_1.ckpt) is invalid because either you
</span><br>
<span class="quotelev1">&gt; have not provided a filename
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; or provided an invalid filename.
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Please see --help for usage.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; I am 0 loop=40&#194;&#160; in #pragma&#194;&#160; time1=446.558860
</span><br>
<span class="quotelev1">&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev1">&gt; /*---------------------------------------------------------------------------------------------------------------------------------------*/
</span><br>
<p>It looks like the MCA parameters are not being set correctly. Check to
<br>
make sure that the mca-params.conf file on each nodes matches. Is your
<br>
$HOME directory mounted on a shared file system? If so, then try to
<br>
just store the checkpoints to the $HOME for now, until the rest of the
<br>
functionality is working properly.
<br>
<p><p><span class="quotelev1">&gt; &#194;&#160;(5) A couple solutions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; - have the PATH and LD_LIBRARY_PATH set the same on all nodes
</span><br>
<span class="quotelev2">&gt;&gt; - have ompi-restart pass the -x parameter to the underlying mpirun by
</span><br>
<span class="quotelev2">&gt;&gt; using the -mpirun_opts command line switch:
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160; &#194;&#160;&#194;&#160; How to Using&#194;&#160;&#194;&#160; --mpirun_opts ?
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; this is my command ==&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ompi-restart --mpirun_opts&#194;&#160; -x&#194;&#160; LD_LIBRARY_PATH&#194;&#160; -hostfile Hosts \
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ompi_global_snapshot_8873.ckpt/
</span><br>
<span class="quotelev1">&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; but it is Error.
</span><br>
<p><p>Use quotes around the mpirun specific options:
<br>
&nbsp;ompi-restart --mpirun_opts&#194;&#160; &quot;-x&#194;&#160; LD_LIBRARY_PATH&quot;&#194;&#160; -hostfile Hosts
<br>
ompi_global_snapshot_8873.ckpt
<br>
or
<br>
&nbsp;ompi-restart --mpirun_opts&#194;&#160; &quot;-x&#194;&#160; LD_LIBRARY_PATH -hostfile Hosts&quot;
<br>
ompi_global_snapshot_8873.ckpt
<br>
<p>-- Josh
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#194;&#160;thanks.
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/24 (&#233;&#128;&#177;&#228;&#186;&#140;) 3:23 AM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] Ompi-restart failed and process migration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 23, 2012 at 2:45 PM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi ,Thank you For your reply.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have some problems&#239;&#188;&#154;
</span><br>
<span class="quotelev2">&gt;&gt; (1)
</span><br>
<span class="quotelev2">&gt;&gt; Now ,In the my platform , all nodes have the same path and
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;I set in .bashrc
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /--------------------------------------------------------------------------------/
</span><br>
<span class="quotelev2">&gt;&gt; #BLCR
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=$PATH:/usr/local/BLCR/bin
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
</span><br>
<span class="quotelev2">&gt;&gt; #openMPI
</span><br>
<span class="quotelev2">&gt;&gt; export PATH=$PATH:/root/kidd_openMPI/bin
</span><br>
<span class="quotelev2">&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /-------------------------------------------------------------------------------------------/
</span><br>
<span class="quotelev2">&gt;&gt; but ,when I&#194;&#160; running&#194;&#160; mpirun&#194;&#160; , I have to add&#194;&#160; &quot; -x&#194;&#160; LD_LIBRARY_PATH&quot; ,or
</span><br>
<span class="quotelev2">&gt;&gt; it can't&#194;&#160; run
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;example:&#194;&#160; mpirun -hostfile hosts&#194;&#160; -np&#194;&#160; 2&#194;&#160; ./TEST .
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;Error Message==&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ./TEST: error while loading shared libraries: libcr.so.0: cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It sounds like something is still not quite right with your
</span><br>
<span class="quotelev1">&gt; environment and system setup. If you have set the PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH appropriately on all nodes then you should not have to
</span><br>
<span class="quotelev1">&gt; pass the &quot;-x LD_LIBRARY_PATH&quot; option to mpirun. Additionally, the
</span><br>
<span class="quotelev1">&gt; error you are seeing is from BLCR. That error seems to indicate that
</span><br>
<span class="quotelev1">&gt; BLCR is not installed correctly on all nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some things to look into (in this order):
</span><br>
<span class="quotelev1">&gt; 1) Make sure that you have BLCR and Open MPI installed in the same
</span><br>
<span class="quotelev1">&gt; location on all machines.
</span><br>
<span class="quotelev1">&gt; 2) Make sure that BLCR works on all machines by checkpointing and
</span><br>
<span class="quotelev1">&gt; restarting a single process program
</span><br>
<span class="quotelev1">&gt; 3) Make sure that Open MPI works on all machines -without-
</span><br>
<span class="quotelev1">&gt; checkpointing, and without passing the -x option.
</span><br>
<span class="quotelev1">&gt; 4) Checkpoint/restart an MPI job
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;(2)&#194;&#160; BLCR need to unify linux-kernel&#194;&#160; of all the Node ?
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Now ,I reset all&#194;&#160; Node.(using Ubuntu 10.04)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not understand what you are trying to ask here. Please rephrase.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;(3)
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; &#194;&#160; &#194;&#160; Now , My porgram using&#194;&#160; DLL . I implements some DLL&#194;&#160; ,MPI-Program
</span><br>
<span class="quotelev2">&gt;&gt; calls DLLs .
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Ompi can check/Restart&#194;&#160; Program contains&#194;&#160; DLL ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I do not understand what you are trying to ask here. Please rephrase.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#230;&#148;&#182;&#228;&#187;&#182;&#232;&#128;&#133;&#239;&#188;&#154; Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#229;&#175;&#132;&#228;&#187;&#182;&#230;&#151;&#165;&#230;&#156;&#159;&#239;&#188;&#154; 2012/4/23 (&#233;&#128;&#177;&#228;&#184;&#128;) 10:51 PM
</span><br>
<span class="quotelev2">&gt;&gt; &#228;&#184;&#187;&#230;&#151;&#168;&#239;&#188;&#154; Re: [OMPI users] Ompi-restart failed and process migration
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I wonder if the LD_LIBRARY_PATH is not being set properly upon
</span><br>
<span class="quotelev2">&gt;&gt; restart. In your mpirun you pass the '-x LD_LIBRARY_PATH'.
</span><br>
<span class="quotelev2">&gt;&gt; ompi-restart will not pass that variable along for you, so if you are
</span><br>
<span class="quotelev2">&gt;&gt; using that to set the BLCR path this might be your problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A couple solutions:
</span><br>
<span class="quotelev2">&gt;&gt; - have the PATH and LD_LIBRARY_PATH set the same on all nodes
</span><br>
<span class="quotelev2">&gt;&gt; - have ompi-restart pass the -x parameter to the underlying mpirun by
</span><br>
<span class="quotelev2">&gt;&gt; using the -mpirun_opts command line switch:
</span><br>
<span class="quotelev2">&gt;&gt; &#194;&#160; ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes. ompi-restart will let you checkpoint a process on one node and
</span><br>
<span class="quotelev2">&gt;&gt; restart it on another. You will have to restart the whole application
</span><br>
<span class="quotelev2">&gt;&gt; since the ompi-migration operation is not available in the 1.5 series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sat, Apr 21, 2012 at 4:11 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have Some problems,I wana check/Restart Multiple process on 2 node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; My environment:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; BLCR= 0.8.4&#194;&#160;&#194;&#160; , openMPI= 1.5.5&#194;&#160; , OS = ubuntu 11.04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have 2 Node :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160;N05(Master ,it have NFS shared file system),N07(slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; ,mount Master-Node).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; My configure format=./configure --prefix=/root/kidd_openMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; --with-ft=cr --enable-ft-thread&#194;&#160; --with-blcr=/usr/local/BLCR
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; --with-blcr-libdir=/usr/local/BLCR/lib --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; --enable-static --enable-shared --enable-opal-multi-threads;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; I had also set&#194;&#160; ~/.openmpi/mca-params.conf-&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160; crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160;&#194;&#160;&#194;&#160; snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the dir-&gt;kidd_openMPI is my nfs shared dir.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160;My Command :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; 1. mpicc -o TEST -DDEFSIZE=3000 -DDEF_PROC=2 -fopenmp MPIMatrix.c
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;2. mpirun -hostfile Hosts -am ft-enable-cr -x LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; -np 2 ./TEST .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; I can restart process-0 on Master,but process-1 on N07 was failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; I checked my Node,it does not install the prelink,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; so the error(restart-failed) is caused by other reasons.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; Error Message--&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;root_at_cuda05:~/kidd_openMPI/checkpoints#
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; ompi-restart -hostfile Hosts ompi_global_snapshot_2892.ckpt/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160; Error: BLCR was not able to restart the process because exec failed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; Check the installation of BLCR on all of the machines in your
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; system. The following information may be of help:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;Return Code : -1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;BLCR Restart Command : cr_restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;Restart Command Line : cr_restart
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; opal_snapshot_1.ckpt/ompi_blcr_context.2704
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; Check the installation of the blcr checkpoint/restart service
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; on all of the machines in your system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ###########################################################################
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; problem 2: I wana let MPI-process can migration to another Node.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; if Ompi-Restart&#194;&#160; Multiple-Node can be successful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; Can restart in another new node, rather than the original node?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; example:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; checkpoint (node1,node2,node3),then restart(node1,node3,node4).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; or just restart(node1,node3(2-process) ).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#194;&#160;&#194;&#160; Please help me , thanks .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev2">&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev2">&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="19092.php">Gutierrez, Samuel K: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>Previous message:</strong> <a href="19090.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>In reply to:</strong> <a href="19090.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<li><strong>Reply:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
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
