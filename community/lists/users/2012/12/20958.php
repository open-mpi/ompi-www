<?
$subject_val = "Re: [OMPI users] mpi problems/many cpus per node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 17:11:23 2012" -->
<!-- isoreceived="20121214221123" -->
<!-- sent="Fri, 14 Dec 2012 14:11:16 -0800" -->
<!-- isosent="20121214221116" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi problems/many cpus per node" -->
<!-- id="E41AB6B6-8F9A-4745-9C9A-5B03098AB86C_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="50CB9FB8.20101_at_igb.uiuc.edu" -->
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
<strong>Date:</strong> 2012-12-14 17:11:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20959.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20959.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20959.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry - I forgot that you built from a tarball, and so debug isn't enabled by default. You need to configure --enable-debug.
<br>
<p>On Dec 14, 2012, at 1:52 PM, Daniel Davidson &lt;danield_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Oddly enough, adding this debugging info, lowered the number of processes that can be used down to 42 from 46.  When I run the MPI, it fails giving only the information that follows:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_compute-2-1 ssh]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -v  -np 44 --leave-session-attached -mca odls_base_verbose 5 hostname
</span><br>
<span class="quotelev1">&gt; [compute-2-1.local:44374] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev1">&gt; [compute-2-1.local:44374] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev1">&gt; [compute-2-1.local:44374] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev1">&gt; [compute-2-0.local:28950] mca:base:select:( odls) Querying component [default]
</span><br>
<span class="quotelev1">&gt; [compute-2-0.local:28950] mca:base:select:( odls) Query of component [default] set priority to 1
</span><br>
<span class="quotelev1">&gt; [compute-2-0.local:28950] mca:base:select:( odls) Selected component [default]
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; compute-2-1.local
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 12/14/2012 03:18 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; It wouldn't be ssh - in both cases, only one ssh is being done to each node (to start the local daemon). The only difference is the number of fork/exec's being done on each node, and the number of file descriptors being opened to support those fork/exec's.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It certainly looks like your limits are high enough. When you say it &quot;fails&quot;, what do you mean - what error does it report? Try adding:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --leave-session-attached -mca odls_base_verbose 5
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; to your cmd line - this will report all the local proc launch debug and hopefully show you a more detailed error report.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 14, 2012, at 12:29 PM, Daniel Davidson &lt;danield_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have had to cobble together two machines in our rocks cluster without using the standard installation, they have efi only bios on them and rocks doesnt like that, so it is the only workaround.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Everything works great now, except for one thing.  MPI jobs (openmpi or mpich) fail when started from one of these nodes (via qsub or by logging in and running the command) if 24 or more processors are needed on another system.  However if the originator of the MPI job is the headnode or any of the preexisting compute nodes, it works fine.  Right now I am guessing ssh client or ulimit problems, but I cannot find any difference.  Any help would be greatly appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; compute-2-1 and compute-2-0 are the new nodes
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Examples:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This works, prints 23 hostnames from each machine:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 46 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This does not work, prints 24 hostnames for compute-2-1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-2-1 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 48 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; These both work, print 64 hostnames from each node
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_biocluster ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-0-2 ~]# /home/apps/openmpi-1.6.3/bin/mpirun -host compute-2-0,compute-2-1 -np 128 hostname
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-2-1 ~]# ulimit -a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pending signals                 (-i) 16410016
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; open files                      (-n) 4096
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; stack size              (kbytes, -s) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; max user processes              (-u) 1024
</span><br>
<span class="quotelev3">&gt;&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [root_at_compute-2-1 ~]# more /etc/ssh/ssh_config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Host *
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        CheckHostIP             no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ForwardX11              yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        ForwardAgent            yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        StrictHostKeyChecking   no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        UsePrivilegedPort       no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        Protocol                2,1
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
<li><strong>Next message:</strong> <a href="20959.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>In reply to:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20959.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Reply:</strong> <a href="20959.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
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
