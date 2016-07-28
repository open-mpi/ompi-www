<?
$subject_val = "Re: [OMPI users] Ompi-restart failed and process migration";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 24 14:59:40 2012" -->
<!-- isoreceived="20120424185940" -->
<!-- sent="Tue, 24 Apr 2012 14:59:36 -0400" -->
<!-- isosent="20120424185936" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Ompi-restart failed and process migration" -->
<!-- id="CAANzjEnK1f82VDaHp-kwKoGepkkqvOwtH0T2jXn=E-rtaxx0nA_at_mail.gmail.com" -->
<!-- charset="Big5" -->
<!-- inreplyto="1335282226.79171.YahooMailNeo_at_web130106.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2012-04-24 14:59:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19098.php">Tom Rosmond: "[OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19096.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ~/.openmpi/mca-params.conf file should contain the same
<br>
information on all nodes.
<br>
<p>You can install Open MPI as root. However, we do not recommend that
<br>
you run Open MPI as root.
<br>
<p>If the user $HOME directory is NFS mounted, then you can use an NFS
<br>
mounted directory to store your files. With this option you do not
<br>
need to use the local disk. For an NFS mounted directory you only need
<br>
to set:
<br>
&nbsp;&nbsp;snapc_base_global_snapshot_dir=/path_to_NFS_directory/
<br>
<p>If you need to stage the files then the following options are what you need.
<br>
&nbsp;&nbsp;snapc_base_store_in_place=0
<br>
&nbsp;&nbsp;snapc_base_global_snapshot_dir=/path_to_global_storage_dir/
<br>
&nbsp;&nbsp;crs_base_snapshot_dir=/path_to_local_storage_dir/
<br>
<p>As you start getting setup, I would recommend the NFS options to
<br>
reduce the number of variables that you need to worry about to get the
<br>
basic setup working.
<br>
<p>-- Josh
<br>
<p><p>On Tue, Apr 24, 2012 at 11:43 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi ,Thank you For your reply.
</span><br>
<span class="quotelev1">&gt; I have some problem:
</span><br>
<span class="quotelev1">&gt; Q1:  I setting 2 kinds  mac.para.conf
</span><br>
<span class="quotelev1">&gt;         (1) crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
</span><br>
<span class="quotelev1">&gt;               snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;              My Master : /root/kidd_openMPI   is My opempi-Installed Dir
</span><br>
<span class="quotelev1">&gt; ,it is  Shared by NFS .
</span><br>
<span class="quotelev1">&gt;              Do I have to mount  a   User_Account , Rather than a  dir  ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;          (2) snapc_base_store_in_place=0
</span><br>
<span class="quotelev1">&gt;               crs_base_snapshot_dir= /tmp/OmpiStore/local
</span><br>
<span class="quotelev1">&gt;               snapc_base_global_snapshot_dir= /tmp/OmpiStore/global
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             In this  case  ,I not use  NFS  in OmpiStore/local  &#161;&#174;
</span><br>
<span class="quotelev1">&gt; OmpiStore/local;
</span><br>
<span class="quotelev1">&gt;             is it right ?
</span><br>
<span class="quotelev1">&gt;           (3)
</span><br>
<span class="quotelev1">&gt;                Do I setting .openmpi in all-Node ,or just seting on Master .
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           (4)  I install openmpi  in root ,should I move   to
</span><br>
<span class="quotelev1">&gt; General-user-account ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________
</span><br>
<span class="quotelev1">&gt; &#177;H&#165;&#243;&#170;&#204;&#161;G Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#166;&#172;&#165;&#243;&#170;&#204;&#161;G Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; &#177;H&#165;&#243;&#164;&#233;&#180;&#193;&#161;G 2012/4/24 (&#182;g&#164;G) 10:58 PM
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#165;D&#166;&#174;&#161;G Re: [OMPI users] Ompi-restart failed and process migration
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 24, 2012 at 10:10 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi ,Thank you For your reply.
</span><br>
<span class="quotelev2">&gt;&gt;  but I still failed. I must add -x  LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; this is my  All Setting ;
</span><br>
<span class="quotelev2">&gt;&gt; 1) Master-Node(cuda07)  &amp;  Slaves Node(cuda08) :
</span><br>
<span class="quotelev2">&gt;&gt;    Configure:
</span><br>
<span class="quotelev2">&gt;&gt;    ./configure --prefix=/root/kidd_openMPI  --with-ft=cr
</span><br>
<span class="quotelev2">&gt;&gt; --enable-ft-thread  --with-blcr=/usr/local/BLCR
</span><br>
<span class="quotelev2">&gt;&gt;    --with-blcr-libdir=/usr/local/BLCR/lib
</span><br>
<span class="quotelev2">&gt;&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev2">&gt;&gt;    --enable-static --enable-shared  --enable-opal-progress-threads; make ;
</span><br>
<span class="quotelev2">&gt;&gt; make install;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   (2) Path &amp;&amp; LD_PATH:
</span><br>
<span class="quotelev2">&gt;&gt;     #In /etc/profile
</span><br>
<span class="quotelev2">&gt;&gt;      ==&gt;export PATH=$PATH:/usr/local/BLCR/bin ;
</span><br>
<span class="quotelev2">&gt;&gt;      ==&gt;export  LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
</span><br>
<span class="quotelev2">&gt;&gt;    #In ~/.bashrc
</span><br>
<span class="quotelev2">&gt;&gt;     ==&gt;export PATH=$PATH:/root/kidd_openMPI/bin
</span><br>
<span class="quotelev2">&gt;&gt;     ==&gt;export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    (3) Compiler &amp;&amp; Running:
</span><br>
<span class="quotelev2">&gt;&gt;       ==&gt; ~/kidd_openMPI/NBody_TEST#  mpicc -o  TEST -DDEFSIZE=5000  \
</span><br>
<span class="quotelev2">&gt;&gt;               -DDEF_PROC=2 MPINbodyOMP.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       ==&gt;   root_at_cuda07:~/kidd_openMPI/NBody_TEST# mpirun -hostfile Hosts
</span><br>
<span class="quotelev2">&gt;&gt; -np 2 TEST
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   TEST: error while loading shared libraries: libcr.so.0: cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared
</span><br>
<span class="quotelev2">&gt;&gt; object file: No such file or directory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I still think the core problem is with the search path given this
</span><br>
<span class="quotelev1">&gt; message. Open MPI is trying to load BLCR's libcr.so.0, and it is not
</span><br>
<span class="quotelev1">&gt; finding the library in the LD_LIBRARY_PATH search path. Something is
</span><br>
<span class="quotelev1">&gt; still off in the backend nodes. Try adding the BLCR
</span><br>
<span class="quotelev1">&gt; PATH/LD_LIBRARY_PATH to your .bashrc instead of the profile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    ==&gt; I make sure  Master and Slave  have  same Install and  same Path .
</span><br>
<span class="quotelev2">&gt;&gt;            I  let slave-node  using cr_restart   restart a contextfile
</span><br>
<span class="quotelev2">&gt;&gt; ,the
</span><br>
<span class="quotelev2">&gt;&gt; contextfile checked by Master ,so
</span><br>
<span class="quotelev2">&gt;&gt;            Blcr  can work;
</span><br>
<span class="quotelev2">&gt;&gt;            but it still  cannot open shared object file-&gt;libcr.so.0:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So BLCR is giving this error?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   (4)  if    I pass  -x LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt;          ( local mount )
</span><br>
<span class="quotelev2">&gt;&gt;         (4-1)My mca-params.conf(In Master )
</span><br>
<span class="quotelev2">&gt;&gt;          ==&gt; snapc_base_store_in_place=0
</span><br>
<span class="quotelev2">&gt;&gt;                  crs_base_snapshot_dir=/tmp/OmpiStore/local
</span><br>
<span class="quotelev2">&gt;&gt;                  snapc_base_global_snapshot_dir=/tmp/OmpiStore/global
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;           step 1: mpirun -hostfile Hosts -np 2 -x LD_LIBRARY_PATH -am
</span><br>
<span class="quotelev2">&gt;&gt; ft-enable-cr ./TEST
</span><br>
<span class="quotelev2">&gt;&gt;           step 2: ompi-checkpoint -term Pid ( I use another command)
</span><br>
<span class="quotelev2">&gt;&gt;           step 3:
</span><br>
<span class="quotelev2">&gt;&gt;                    cd  /tmp/OmpiStore/global
</span><br>
<span class="quotelev2">&gt;&gt;                   ==&gt; ompi-restart    Ompi_xxxxPid.ckpt .   (all process
</span><br>
<span class="quotelev2">&gt;&gt; Only Restart on Master)
</span><br>
<span class="quotelev2">&gt;&gt;                   ==&gt; ompi-restart    --hostfile Host  Ompi_xxxxPid.ckpt .
</span><br>
<span class="quotelev2">&gt;&gt;  Error-Message:
</span><br>
<span class="quotelev2">&gt;&gt; root_at_cuda07:/tmp/OmpiStore/global#
</span><br>
<span class="quotelev2">&gt;&gt;   ompi-restart --preload -hostfile Hosts ompi_global_snapshot_8873.ckpt/
</span><br>
<span class="quotelev2">&gt;&gt; Warning: Permanently added the RSA host key for IP address '192.168.1.10'
</span><br>
<span class="quotelev2">&gt;&gt; to
</span><br>
<span class="quotelev2">&gt;&gt; the list of known hosts.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; WARNING: Remote peer ([[37567,0],1]) failed to preload a file.
</span><br>
<span class="quotelev2">&gt;&gt; Exit Status: 256
</span><br>
<span class="quotelev2">&gt;&gt; Local  File: /tmp/OmpiStore/global/./opal_snapshot_1.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; Remote File:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /tmp/OmpiStore/global/ompi_global_snapshot_8873.ckpt/0/opal_snapshot_1.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; Command:
</span><br>
<span class="quotelev2">&gt;&gt;   scp  -r
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; cuda07:/tmp/OmpiStore/global/ompi_global_snapshot_8873.ckpt/0/opal_snapshot_1.ckpt
</span><br>
<span class="quotelev2">&gt;&gt; \
</span><br>
<span class="quotelev2">&gt;&gt;    /tmp/OmpiStore/global/./opal_snapshot_1.ckpt
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Will continue attempting to launch the process(es).
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; [cuda08:08899] Error: Unable to access the path [./opal_snapshot_1.ckpt]!
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Error: The filename (opal_snapshot_1.ckpt) is invalid because either you
</span><br>
<span class="quotelev2">&gt;&gt; have not provided a filename
</span><br>
<span class="quotelev2">&gt;&gt;        or provided an invalid filename.
</span><br>
<span class="quotelev2">&gt;&gt;        Please see --help for usage.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; I am 0 loop=40  in #pragma  time1=446.558860
</span><br>
<span class="quotelev2">&gt;&gt; ^Cmpirun: killing job...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /*---------------------------------------------------------------------------------------------------------------------------------------*/
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the MCA parameters are not being set correctly. Check to
</span><br>
<span class="quotelev1">&gt; make sure that the mca-params.conf file on each nodes matches. Is your
</span><br>
<span class="quotelev1">&gt; $HOME directory mounted on a shared file system? If so, then try to
</span><br>
<span class="quotelev1">&gt; just store the checkpoints to the $HOME for now, until the rest of the
</span><br>
<span class="quotelev1">&gt; functionality is working properly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  (5) A couple solutions:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - have the PATH and LD_LIBRARY_PATH set the same on all nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - have ompi-restart pass the -x parameter to the underlying mpirun by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the -mpirun_opts command line switch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ..
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      How to Using   --mpirun_opts ?
</span><br>
<span class="quotelev2">&gt;&gt;      this is my command ==&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      ompi-restart --mpirun_opts  -x  LD_LIBRARY_PATH  -hostfile Hosts \
</span><br>
<span class="quotelev2">&gt;&gt;      ompi_global_snapshot_8873.ckpt/
</span><br>
<span class="quotelev2">&gt;&gt;      but it is Error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Use quotes around the mpirun specific options:
</span><br>
<span class="quotelev1">&gt; ompi-restart --mpirun_opts  &quot;-x  LD_LIBRARY_PATH&quot;  -hostfile Hosts
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_8873.ckpt
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev1">&gt; ompi-restart --mpirun_opts  &quot;-x  LD_LIBRARY_PATH -hostfile Hosts&quot;
</span><br>
<span class="quotelev1">&gt; ompi_global_snapshot_8873.ckpt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  thanks.
</span><br>
<span class="quotelev2">&gt;&gt; ________________________________
</span><br>
<span class="quotelev2">&gt;&gt; &#177;H&#165;&#243;&#170;&#204;&#161;G Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#166;&#172;&#165;&#243;&#170;&#204;&#161;G Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#177;H&#165;&#243;&#164;&#233;&#180;&#193;&#161;G 2012/4/24 (&#182;g&#164;G) 3:23 AM
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &#165;D&#166;&#174;&#161;G Re: [OMPI users] Ompi-restart failed and process migration
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mon, Apr 23, 2012 at 2:45 PM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi ,Thank you For your reply.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have some problems&#161;G
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Now ,In the my platform , all nodes have the same path and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_LIBRARY_PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  I set in .bashrc
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /--------------------------------------------------------------------------------/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #BLCR
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH=$PATH:/usr/local/BLCR/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/local/BLCR/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #openMPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export PATH=$PATH:/root/kidd_openMPI/bin
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/root/kidd_openMPI/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /-------------------------------------------------------------------------------------------/
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but ,when I  running  mpirun  , I have to add  &quot; -x  LD_LIBRARY_PATH&quot; ,or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it can't  run
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  example:  mpirun -hostfile hosts  -np  2  ./TEST .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Error Message==&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ./TEST: error while loading shared libraries: libcr.so.0: cannot open
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shared
</span><br>
<span class="quotelev3">&gt;&gt;&gt; object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It sounds like something is still not quite right with your
</span><br>
<span class="quotelev2">&gt;&gt; environment and system setup. If you have set the PATH and
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH appropriately on all nodes then you should not have to
</span><br>
<span class="quotelev2">&gt;&gt; pass the &quot;-x LD_LIBRARY_PATH&quot; option to mpirun. Additionally, the
</span><br>
<span class="quotelev2">&gt;&gt; error you are seeing is from BLCR. That error seems to indicate that
</span><br>
<span class="quotelev2">&gt;&gt; BLCR is not installed correctly on all nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Some things to look into (in this order):
</span><br>
<span class="quotelev2">&gt;&gt; 1) Make sure that you have BLCR and Open MPI installed in the same
</span><br>
<span class="quotelev2">&gt;&gt; location on all machines.
</span><br>
<span class="quotelev2">&gt;&gt; 2) Make sure that BLCR works on all machines by checkpointing and
</span><br>
<span class="quotelev2">&gt;&gt; restarting a single process program
</span><br>
<span class="quotelev2">&gt;&gt; 3) Make sure that Open MPI works on all machines -without-
</span><br>
<span class="quotelev2">&gt;&gt; checkpointing, and without passing the -x option.
</span><br>
<span class="quotelev2">&gt;&gt; 4) Checkpoint/restart an MPI job
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (2)  BLCR need to unify linux-kernel  of all the Node ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Now ,I reset all  Node.(using Ubuntu 10.04)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not understand what you are trying to ask here. Please rephrase.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  (3)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Now , My porgram using  DLL . I implements some DLL  ,MPI-Program
</span><br>
<span class="quotelev3">&gt;&gt;&gt; calls DLLs .
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       Ompi can check/Restart  Program contains  DLL ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not understand what you are trying to ask here. Please rephrase.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- Josh
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#177;H&#165;&#243;&#170;&#204;&#161;G Josh Hursey &lt;jjhursey_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#166;&#172;&#165;&#243;&#170;&#204;&#161;G Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#177;H&#165;&#243;&#164;&#233;&#180;&#193;&#161;G 2012/4/23 (&#182;g&#164;@) 10:51 PM
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#165;D&#166;&#174;&#161;G Re: [OMPI users] Ompi-restart failed and process migration
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I wonder if the LD_LIBRARY_PATH is not being set properly upon
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restart. In your mpirun you pass the '-x LD_LIBRARY_PATH'.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi-restart will not pass that variable along for you, so if you are
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using that to set the BLCR path this might be your problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A couple solutions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - have the PATH and LD_LIBRARY_PATH set the same on all nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - have ompi-restart pass the -x parameter to the underlying mpirun by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using the -mpirun_opts command line switch:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   ompi-restart --mpirun_opts &quot;-x LD_LIBRARY_PATH&quot; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yes. ompi-restart will let you checkpoint a process on one node and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; restart it on another. You will have to restart the whole application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since the ompi-migration operation is not available in the 1.5 series.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Josh
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sat, Apr 21, 2012 at 4:11 AM, kidd &lt;q19860103_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have Some problems,I wana check/Restart Multiple process on 2 node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  My environment:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  BLCR= 0.8.4   , openMPI= 1.5.5  , OS = ubuntu 11.04
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I have 2 Node :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  N05(Master ,it have NFS shared file system),N07(slave
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ,mount Master-Node).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  My configure format=./configure --prefix=/root/kidd_openMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-ft=cr --enable-ft-thread  --with-blcr=/usr/local/BLCR
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --with-blcr-libdir=/usr/local/BLCR/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --enable-mpirun-prefix-by-default
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  --enable-static --enable-shared --enable-opal-multi-threads;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I had also set  ~/.openmpi/mca-params.conf-&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     crs_base_snapshot_dir=/root/kidd_openMPI/Tmp
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     snapc_base_global_snapshot_dir=/root/kidd_openMPI/checkpoints.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the dir-&gt;kidd_openMPI is my nfs shared dir.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  My Command :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  1. mpicc -o TEST -DDEFSIZE=3000 -DDEF_PROC=2 -fopenmp MPIMatrix.c
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   2. mpirun -hostfile Hosts -am ft-enable-cr -x LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      -np 2 ./TEST .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I can restart process-0 on Master,but process-1 on N07 was failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  I checked my Node,it does not install the prelink,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  so the error(restart-failed) is caused by other reasons.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Error Message--&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   root_at_cuda05:~/kidd_openMPI/checkpoints#
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  ompi-restart -hostfile Hosts ompi_global_snapshot_2892.ckpt/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Error: BLCR was not able to restart the process because exec failed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      Check the installation of BLCR on all of the machines in your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      system. The following information may be of help:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Return Code : -1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   BLCR Restart Command : cr_restart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Restart Command Line : cr_restart
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  /root/kidd_openMPI/checkpoints/ompi_global_snapshot_2892.ckpt/0/
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  opal_snapshot_1.ckpt/ompi_blcr_context.2704
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  Error: Unable to obtain the proper restart command to restart from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         checkpoint file (opal_snapshot_1.ckpt). Returned -1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         Check the installation of the blcr checkpoint/restart service
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         on all of the machines in your system.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ###########################################################################
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  problem 2: I wana let MPI-process can migration to another Node.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          if Ompi-Restart  Multiple-Node can be successful.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          Can restart in another new node, rather than the original node?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;                        example:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          checkpoint (node1,node2,node3),then restart(node1,node3,node4).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          or just restart(node1,node3(2-process) ).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    Please help me , thanks .
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Joshua Hursey
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Postdoctoral Research Associate
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://users.nccs.gov/~jjhursey">http://users.nccs.gov/~jjhursey</a>
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="19098.php">Tom Rosmond: "[OMPI users] Optimal 3-D Cartesian processor mapping"</a>
<li><strong>Previous message:</strong> <a href="19096.php">Seyyed Mohtadin Hashemi: "Re: [OMPI users] OpenMPI fails to run with -np larger than 10"</a>
<li><strong>In reply to:</strong> <a href="19093.php">kidd: "Re: [OMPI users] Ompi-restart failed and process migration"</a>
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
