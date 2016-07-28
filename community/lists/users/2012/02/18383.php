<?
$subject_val = "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  3 05:21:18 2012" -->
<!-- isoreceived="20120203102118" -->
<!-- sent="Fri, 3 Feb 2012 02:21:13 -0800 (PST)" -->
<!-- isosent="20120203102113" -->
<!-- name="adrian sabou" -->
<!-- email="adrian.sabou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / SLURM -&amp;gt; Send/Recv blocking" -->
<!-- id="1328264473.77866.YahooMailNeo_at_web161703.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="9C10DD26-FC5C-4996-A311-1D93E2BF1985_at_cisco.com" -->
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
<strong>From:</strong> adrian sabou (<em>adrian.sabou_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-02-03 05:21:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is no iptables in my /etc/init.d. 
It's most probably a communication issue between the nodes. However, I have no ideea what it might be. It's weird though that the first Send / Receive pair works and only subsequent pairs fail. Anyway, thankyou for taking the time to help me out. I am grateful!
&#160;
Adrian
 

________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: adrian sabou &lt;adrian.sabou_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Thursday, February 2, 2012 11:19 PM
Subject: Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking
  
When you run without a hostfile, you're likely only running on a single node via shared memory (unless you're running inside a SLURM job, which is unlikely, given the context of your mails).&#160; 

When you're running in SLURM, I'm guessing that you're running across multiple nodes.&#160; Are you using TCP as your MPI transport?

If so, I would still recommend trying stopping iptables altogether -- /etc/init.d/iptables stop.&#160; It might not make a difference, but I've found iptables to be sufficiently complex that it's easier to take that variable out altogether by stopping it to really, really test to see if that's the problem.



On Feb 2, 2012, at 9:48 AM, adrian sabou wrote:

&gt; Hi,
&gt;&#160; 
&gt; I have disabled iptables on all nodes using:
&gt;&#160; 
&gt; iptables -F
&gt; iptables -X
&gt; iptables -t nat -F
&gt; iptables -t nat -X
&gt; iptables -t mangle -F
&gt; iptables -t mangle -X
&gt; iptables -P INPUT ACCEPT
&gt; iptables -P FORWARD ACCEPT
&gt; iptables -P OUTPUT ACCEPT
&gt;&#160; 
&gt; My problem is still there. I have re-enabled iptables. The current output of the &quot;iptables --list&quot; command is:
&gt;&#160; 
&gt; Chain INPUT (policy ACCEPT)
&gt; target&#160; &#160;  prot opt source&#160; &#160; &#160; &#160; &#160; &#160; &#160;  destination
&gt; ACCEPT&#160; &#160;  udp&#160; --&#160; anywhere&#160; &#160; &#160; &#160; &#160; &#160;  anywhere&#160; &#160; &#160; &#160; &#160; &#160; udp dpt:domain
&gt; ACCEPT&#160; &#160;  tcp&#160; --&#160; anywhere&#160; &#160; &#160; &#160; &#160; &#160;  anywhere&#160; &#160; &#160; &#160; &#160; &#160; tcp dpt:domain
&gt; ACCEPT&#160; &#160;  udp&#160; --&#160; anywhere&#160; &#160; &#160; &#160; &#160; &#160;  anywhere&#160; &#160; &#160; &#160; &#160; &#160; udp dpt:bootps
&gt; ACCEPT&#160; &#160;  tcp&#160; --&#160; anywhere&#160; &#160; &#160; &#160; &#160; &#160;  anywhere&#160; &#160; &#160; &#160; &#160; &#160; tcp dpt:bootps
&gt; Chain FORWARD (policy ACCEPT)
&gt; target&#160; &#160;  prot opt source&#160; &#160; &#160; &#160; &#160; &#160; &#160;  destination
&gt; ACCEPT&#160; &#160;  all&#160; --&#160; anywhere&#160; &#160; &#160; &#160; &#160; &#160;  192.168.122.0/24&#160; &#160; state RELATED,ESTABLISHED
&gt; ACCEPT&#160; &#160;  all&#160; --&#160; 192.168.122.0/24&#160; &#160;  anywhere
&gt; ACCEPT&#160; &#160;  all&#160; --&#160; anywhere&#160; &#160; &#160; &#160; &#160; &#160;  anywhere
&gt; REJECT&#160; &#160;  all&#160; --&#160; anywhere&#160; &#160; &#160; &#160; &#160; &#160;  anywhere&#160; &#160; &#160; &#160; &#160; &#160; reject-with icmp-port-unreachable
&gt; REJECT&#160; &#160;  all&#160; --&#160; anywhere&#160; &#160; &#160; &#160; &#160; &#160;  anywhere&#160; &#160; &#160; &#160; &#160; &#160; reject-with icmp-port-unreachable
&gt; Chain OUTPUT (policy ACCEPT)
&gt; target&#160; &#160;  prot opt source&#160; &#160; &#160; &#160; &#160; &#160; &#160;  destination
&gt; I don't think this is it. I have tried to run a simple ping-pong program that I found (keeps bouncing a value between two processes) and I keep getting the same results : the first Send / Receive pairs (p1 sends to p2, p2 receives and sends back to p1, p1 receives) work and after that the program just blocks. However, like all other examples, the example works if I launch it with &quot;mpirun -np 2 &lt;ping-pong&gt;&quot; and bounces the value 100 times.
&gt;&#160; 
&gt; Adrian
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; To: adrian sabou &lt;adrian.sabou_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
&gt; Sent: Thursday, February 2, 2012 3:09 PM
&gt; Subject: Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking
&gt; 
&gt; Have you disabled iptables (firewalling) on your nodes?
&gt; 
&gt; Or, if you want to leave iptables enabled, set it such that all nodes in your cluster are allowed to open TCP connections from any port to any other port.
&gt; 
&gt; 
&gt; 
&gt; 
&gt; On Feb 2, 2012, at 4:49 AM, adrian sabou wrote:
&gt; 
&gt; &gt; Hi,
&gt; &gt; 
&gt; &gt; The only example that works is hello_c.c. All others (that use MPI_Send and MPI_Recv)(connectivity_c.c and ring_c.c) block after the first MPI_Send / MPI_Recv (although the first Send/Receive pair works well for all processes, subsequent Send/Receive pairs block). My slurm version is 2.1.0. It is also worth mentioning that all examples work when not using SLURM (launching with &quot;mpirun -np 5 &lt;exaple_app&gt;&quot;). Blocking occurs only when I try to run on multiple hosts with SLURM (&quot;salloc -N5 mpirun &lt;example_app&gt;&quot;).
&gt; &gt; 
&gt; &gt; Adrian
&gt; &gt; 
&gt; &gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; &gt; To: adrian sabou &lt;adrian.sabou_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
&gt; &gt; Sent: Wednesday, February 1, 2012 10:32 PM
&gt; &gt; Subject: Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking
&gt; &gt; 
&gt; &gt; On Jan 31, 2012, at 11:16 AM, adrian sabou wrote:
&gt; &gt; 
&gt; &gt; &gt; Like I said, a very simple program.
&gt; &gt; &gt; When launching this application with SLURM (using &quot;salloc -N2 mpirun ./&lt;my_app&gt;&quot;), it hangs at the barrier.
&gt; &gt; 
&gt; &gt; Are you able to run the MPI example programs in examples/ ?
&gt; &gt; 
&gt; &gt; &gt; However, it passes the barrier if I launch it without SLURM (using &quot;mpirun -np 2 ./&lt;my_app&gt;&quot;). I first noticed this problem when my application hanged if I tried to send two successive messages from a process to another. Only the first MPI_Send would work. The second MPI_Send would block indefinitely. I was wondering whether any of you have encountered a similar problem, or may have an ideea as to what is causing the Send/Receive pair to block when using SLURM. The exact output in my console is as follows:
&gt; &gt; &gt;&#160; 
&gt; &gt; &gt;&#160; &#160; &#160; &#160; salloc: Granted job allocation 1138
&gt; &gt; &gt;&#160; &#160; &#160; &#160; Process 0 - Sending...
&gt; &gt; &gt;&#160; &#160; &#160; &#160; Process 1 - Receiving...
&gt; &gt; &gt;&#160; &#160; &#160; &#160; Process 1 - Received.
&gt; &gt; &gt;&#160; &#160; &#160; &#160; Process 1 - Barrier reached.
&gt; &gt; &gt;&#160; &#160; &#160; &#160; Process 0 - Sent.
&gt; &gt; &gt;&#160; &#160; &#160; &#160; Process 0 - Barrier reached.
&gt; &gt; &gt;&#160; &#160; &#160; &#160; (it just hangs here)
&gt; &gt; &gt;&#160; 
&gt; &gt; &gt; I am new to MPI programming and to OpenMPI and would greatly appreciate any help. My OpenMPI version is 1.4.4 (although I have also tried it on 1.5.4), my SLURM version is 0.3.3-1 (slurm-llnl 2.1.0-1),
&gt; &gt; 
&gt; &gt; I'm not sure what SLURM version that is -- my &quot;srun --version&quot; shows 2.2.4.&#160; 0.3.3 would be pretty ancient, no?
&gt; &gt; 
&gt; &gt; -- 
&gt; &gt; Jeff Squyres
&gt; &gt; jsquyres_at_[hidden]
&gt; &gt; For corporate legal information go to:
&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; &gt; 
&gt; &gt; 
&gt; &gt; 
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; 
&gt; 
&gt; -- 
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt; 
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Previous message:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18384.php">adrian sabou: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
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
