<?
$subject_val = "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 23 21:54:00 2010" -->
<!-- isoreceived="20100824015400" -->
<!-- sent="Mon, 23 Aug 2010 19:53:51 -0600" -->
<!-- isosent="20100824015351" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &amp;quot;-npernode N&amp;quot; is used at command line" -->
<!-- id="8E2706EC-17D0-49BF-8814-9FFE6AB8643C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C732423.3090201_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-23 21:53:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14096.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14094.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>In reply to:</strong> <a href="14094.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14110.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>Reply:</strong> <a href="14110.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Nope - none of them will work with 1.4.2. Sorry - bug not discovered until after release
<br>
<p>On Aug 23, 2010, at 7:45 PM, Michael E. Thomadakis wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff, 
</span><br>
<span class="quotelev1">&gt; thanks for the quick reply. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would using '--cpus-per-proc N' in place of '-npernode N' or just '-bynode' do the trick?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems that using '--loadbalance' also crashes mpirun.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/23/10 19:30, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, the -npernode segv is a known issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have it fixed in the 1.4.x nightly tarballs; can you give it a whirl and see if that fixes your problem?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/nightly/v1.4/">http://www.open-mpi.org/nightly/v1.4/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 23, 2010, at 8:20 PM, Michael E. Thomadakis wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello OMPI:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have installed OMPI V1.4.2 on a Nehalem cluster running CentOS5.4. OMPI was built uisng Intel compilers 11.1.072. I am attaching the configuration log and output from ompi_info -a.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem we are encountering is that whenever we use option '-npernode N' in the mpirun command line we get a segmentation fault as in below:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; miket_at_login002[pts/7]PS $ mpirun -npernode 1  --display-devel-map  --tag-output -np 6 -cpus-per-proc 2 -H 'login001,login002,login003' hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Map generated by mapping policy: 0402
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Npernode: 1     Oversubscribe allowed: TRUE     CPU Lists: FALSE
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num new daemons: 2      New daemon starting vpid 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num nodes: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: Name: login001          Launch id: -1   Arch: 0 State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Daemon: [[44812,0],1]   Daemon launched: False
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num slots: 1    Slots in use: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num slots allocated: 1  Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Data for proc: [[44812,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Pid: 0  Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: Name: login002          Launch id: -1   Arch: ffc91200  State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Daemon: [[44812,0],0]   Daemon launched: True
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num slots: 1    Slots in use: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num slots allocated: 1  Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Data for proc: [[44812,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Pid: 0  Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Data for node: Name: login003          Launch id: -1   Arch: 0 State: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num boards: 1   Num sockets/board: 2    Num cores/socket: 4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Daemon: [[44812,0],2]   Daemon launched: False
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num slots: 1    Slots in use: 2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num slots allocated: 1  Max slots: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Username on node: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Num procs: 1    Next node_rank: 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Data for proc: [[44812,1],0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 Pid: 0  Local rank: 0   Node rank: 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 State: 0        App_context: 0  Slot list: NULL
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] Failing at address: 0x50
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] [ 0] /lib64/libpthread.so.0 [0x3569a0e7c0]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] [ 1] /g/software/openmpi-1.4.2/intel/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xa7) [0x2afa70d25de7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] [ 2] /g/software/openmpi-1.4.2/intel/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x3b8) [0x2afa70d36088]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] [ 3] /g/software/openmpi-1.4.2/intel/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0xd7) [0x2afa70d37fc7]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] [ 4] /g/software/openmpi-1.4.2/intel/lib/openmpi/mca_plm_rsh.so [0x2afa721085a1]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] [ 5] mpirun [0x404c27]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] [ 6] mpirun [0x403e38]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3568e1d994]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] [ 8] mpirun [0x403d69]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [login002:02079] *** End of error message ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Segmentation fault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We tried version 1.4.1 and this problem did not emerge. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This option is necessary for when our users launch hybrid MPI-OMP code were they can request M nodes and n ppn in a PBS/Torque setup so they can only get the right amount of MPI taks. Unfortunately, as soon as we use the 'npernode N' option mprun crashes. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this a known issue? I found related problem (of around May, 2010)  when people were using the same option but in a SLURM environment. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Michael
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;config.log.gz&gt;&lt;ompi_info-a.out.gz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14095/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14096.php">Richard Treumann: "Re: [OMPI users] IMB-MPI broadcast test stalls for large core	counts: debug ideas?"</a>
<li><strong>Previous message:</strong> <a href="14094.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>In reply to:</strong> <a href="14094.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14110.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
<li><strong>Reply:</strong> <a href="14110.php">Michael E. Thomadakis: "Re: [OMPI users] Open-MPI 1.4.2 : mpirun core-dumps when &quot;-npernode N&quot; is used at command line"</a>
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
