<?
$subject_val = "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 16:19:18 2012" -->
<!-- isoreceived="20120202211918" -->
<!-- sent="Thu, 2 Feb 2012 16:19:13 -0500" -->
<!-- isosent="20120202211913" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / SLURM -&amp;gt; Send/Recv blocking" -->
<!-- id="9C10DD26-FC5C-4996-A311-1D93E2BF1985_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1328194111.38824.YahooMailNeo_at_web161706.mail.bf1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-02 16:19:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18383.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18381.php">Ralph Castain: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>In reply to:</strong> <a href="18377.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18383.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="18383.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you run without a hostfile, you're likely only running on a single node via shared memory (unless you're running inside a SLURM job, which is unlikely, given the context of your mails).  
<br>
<p>When you're running in SLURM, I'm guessing that you're running across multiple nodes.  Are you using TCP as your MPI transport?
<br>
<p>If so, I would still recommend trying stopping iptables altogether -- /etc/init.d/iptables stop.  It might not make a difference, but I've found iptables to be sufficiently complex that it's easier to take that variable out altogether by stopping it to really, really test to see if that's the problem.
<br>
<p><p><p>On Feb 2, 2012, at 9:48 AM, adrian sabou wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I have disabled iptables on all nodes using:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; iptables -F
</span><br>
<span class="quotelev1">&gt; iptables -X
</span><br>
<span class="quotelev1">&gt; iptables -t nat -F
</span><br>
<span class="quotelev1">&gt; iptables -t nat -X
</span><br>
<span class="quotelev1">&gt; iptables -t mangle -F
</span><br>
<span class="quotelev1">&gt; iptables -t mangle -X
</span><br>
<span class="quotelev1">&gt; iptables -P INPUT ACCEPT
</span><br>
<span class="quotelev1">&gt; iptables -P FORWARD ACCEPT
</span><br>
<span class="quotelev1">&gt; iptables -P OUTPUT ACCEPT
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; My problem is still there. I have re-enabled iptables. The current output of the &quot;iptables --list&quot; command is:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Chain INPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; ACCEPT     udp  --  anywhere             anywhere            udp dpt:domain
</span><br>
<span class="quotelev1">&gt; ACCEPT     tcp  --  anywhere             anywhere            tcp dpt:domain
</span><br>
<span class="quotelev1">&gt; ACCEPT     udp  --  anywhere             anywhere            udp dpt:bootps
</span><br>
<span class="quotelev1">&gt; ACCEPT     tcp  --  anywhere             anywhere            tcp dpt:bootps
</span><br>
<span class="quotelev1">&gt; Chain FORWARD (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; ACCEPT     all  --  anywhere             192.168.122.0/24    state RELATED,ESTABLISHED
</span><br>
<span class="quotelev1">&gt; ACCEPT     all  --  192.168.122.0/24     anywhere
</span><br>
<span class="quotelev1">&gt; ACCEPT     all  --  anywhere             anywhere
</span><br>
<span class="quotelev1">&gt; REJECT     all  --  anywhere             anywhere            reject-with icmp-port-unreachable
</span><br>
<span class="quotelev1">&gt; REJECT     all  --  anywhere             anywhere            reject-with icmp-port-unreachable
</span><br>
<span class="quotelev1">&gt; Chain OUTPUT (policy ACCEPT)
</span><br>
<span class="quotelev1">&gt; target     prot opt source               destination
</span><br>
<span class="quotelev1">&gt; I don't think this is it. I have tried to run a simple ping-pong program that I found (keeps bouncing a value between two processes) and I keep getting the same results : the first Send / Receive pairs (p1 sends to p2, p2 receives and sends back to p1, p1 receives) work and after that the program just blocks. However, like all other examples, the example works if I launch it with &quot;mpirun -np 2 &lt;ping-pong&gt;&quot; and bounces the value 100 times.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Adrian
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: adrian sabou &lt;adrian.sabou_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, February 2, 2012 3:09 PM
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Have you disabled iptables (firewalling) on your nodes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Or, if you want to leave iptables enabled, set it such that all nodes in your cluster are allowed to open TCP connections from any port to any other port.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 2, 2012, at 4:49 AM, adrian sabou wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The only example that works is hello_c.c. All others (that use MPI_Send and MPI_Recv)(connectivity_c.c and ring_c.c) block after the first MPI_Send / MPI_Recv (although the first Send/Receive pair works well for all processes, subsequent Send/Receive pairs block). My slurm version is 2.1.0. It is also worth mentioning that all examples work when not using SLURM (launching with &quot;mpirun -np 5 &lt;exaple_app&gt;&quot;). Blocking occurs only when I try to run on multiple hosts with SLURM (&quot;salloc -N5 mpirun &lt;example_app&gt;&quot;).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Adrian
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt; To: adrian sabou &lt;adrian.sabou_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sent: Wednesday, February 1, 2012 10:32 PM
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Jan 31, 2012, at 11:16 AM, adrian sabou wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Like I said, a very simple program.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; When launching this application with SLURM (using &quot;salloc -N2 mpirun ./&lt;my_app&gt;&quot;), it hangs at the barrier.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Are you able to run the MPI example programs in examples/ ?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; However, it passes the barrier if I launch it without SLURM (using &quot;mpirun -np 2 ./&lt;my_app&gt;&quot;). I first noticed this problem when my application hanged if I tried to send two successive messages from a process to another. Only the first MPI_Send would work. The second MPI_Send would block indefinitely. I was wondering whether any of you have encountered a similar problem, or may have an ideea as to what is causing the Send/Receive pair to block when using SLURM. The exact output in my console is as follows:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        salloc: Granted job allocation 1138
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process 0 - Sending...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process 1 - Receiving...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process 1 - Received.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process 1 - Barrier reached.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process 0 - Sent.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        Process 0 - Barrier reached.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;        (it just hangs here)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am new to MPI programming and to OpenMPI and would greatly appreciate any help. My OpenMPI version is 1.4.4 (although I have also tried it on 1.5.4), my SLURM version is 0.3.3-1 (slurm-llnl 2.1.0-1),
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I'm not sure what SLURM version that is -- my &quot;srun --version&quot; shows 2.2.4.  0.3.3 would be pretty ancient, no?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18383.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18381.php">Ralph Castain: "Re: [OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>In reply to:</strong> <a href="18377.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18383.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="18383.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
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
