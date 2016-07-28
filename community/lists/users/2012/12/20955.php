<?
$subject_val = "Re: [OMPI users] mpi problems/many cpus per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 16:18:46 2012" -->
<!-- isoreceived="20121214211846" -->
<!-- sent="Fri, 14 Dec 2012 13:18:38 -0800" -->
<!-- isosent="20121214211838" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems/many cpus per node" -->
<!-- id="CA3ACB4E-A0E2-4E49-ACE8-D29850F92BE8_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50CB8C2F.9010802_at_igb.uiuc.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi problems/many cpus per node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 16:18:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20956.php">Handerson, Steven: "[OMPI users] Possible memory error"</a>
<li><strong>Previous message:</strong> <a href="20954.php">Daniel Davidson: "[OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20954.php">Daniel Davidson: "[OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It wouldn't be ssh - in both cases, only one ssh is being done to each node (to start the local daemon). The only difference is the number of fork/exec's being done on each node, and the number of file descriptors being opened to support those fork/exec's.
<br>
<p>It certainly looks like your limits are high enough. When you say it &quot;fails&quot;, what do you mean - what error does it report? Try adding:
<br>
<p>--leave-session-attached -mca odls_base_verbose 5
<br>
<p>to your cmd line - this will report all the local proc launch debug and hopefully show you a more detailed error report.
<br>
<p><p>On Dec 14, 2012, at 12:29 PM, Daniel Davidson &lt;danield_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have had to cobble together two machines in our rocks cluster without using the standard installation, they have efi only bios on them and rocks doesnt like that, so it is the only workaround.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Everything works great now, except for one thing.  MPI jobs (openmpi or mpich) fail when started from one of these nodes (via qsub or by logging in and running the command) if 24 or more processors are needed on another system.  However if the originator of the MPI job is the headnode or any of the preexisting compute nodes, it works fine.  Right now I am guessing ssh client or ulimit problems, but I cannot find any difference.  Any help would be greatly appreciated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; compute-2-1 and compute-2-0 are the new nodes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Examples:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This works, prints 23 hostnames from each machine:
</span><br>
<span class="quotelev1">&gt; [root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 46 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This does not work, prints 24 hostnames for compute-2-1
</span><br>
<span class="quotelev1">&gt; [root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 48 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These both work, print 64 hostnames from each node
</span><br>
<span class="quotelev1">&gt; [root_at_biocluster ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev1">&gt; [root_at_compute-0-2 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_compute-2-1 ~]# ulimit -a
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 16410016
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 4096
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_compute-2-1 ~]# more /etc/ssh/ssh_config
</span><br>
<span class="quotelev1">&gt; Host *
</span><br>
<span class="quotelev1">&gt;        CheckHostIP             no
</span><br>
<span class="quotelev1">&gt;        ForwardX11              yes
</span><br>
<span class="quotelev1">&gt;        ForwardAgent            yes
</span><br>
<span class="quotelev1">&gt;        StrictHostKeyChecking   no
</span><br>
<span class="quotelev1">&gt;        UsePrivilegedPort       no
</span><br>
<span class="quotelev1">&gt;        Protocol                2,1
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20956.php">Handerson, Steven: "[OMPI users] Possible memory error"</a>
<li><strong>Previous message:</strong> <a href="20954.php">Daniel Davidson: "[OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20954.php">Daniel Davidson: "[OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
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
