<?
$subject_val = "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  2 09:48:36 2012" -->
<!-- isoreceived="20120202144836" -->
<!-- sent="Thu, 2 Feb 2012 06:48:31 -0800 (PST)" -->
<!-- isosent="20120202144831" -->
<!-- name="adrian sabou" -->
<!-- email="adrian.sabou_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI / SLURM -&amp;gt; Send/Recv blocking" -->
<!-- id="1328194111.38824.YahooMailNeo_at_web161706.mail.bf1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C8E4F1D4-6C78-4B92-A36F-22387FFA6766_at_cisco.com" -->
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
<strong>Date:</strong> 2012-02-02 09:48:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18378.php">François Tessier: "[OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>Previous message:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
&#160;
I have disabled iptables on all nodes using:
&#160;
iptables -F
iptables -X
iptables -t nat -F
iptables -t nat -X
iptables -t mangle -F
iptables -t mangle -X
iptables -P INPUT ACCEPT
iptables -P FORWARD ACCEPT
iptables -P OUTPUT ACCEPT
&#160;
My problem is still there. I have re-enabled iptables. The current output of the &quot;iptables --list&quot; command is:
&#160;
Chain INPUT (policy ACCEPT)
target&#160;&#160;&#160;&#160; prot opt source&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; destination
ACCEPT&#160;&#160;&#160;&#160; udp&#160; --&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; udp dpt:domain
ACCEPT&#160;&#160;&#160;&#160; tcp&#160; --&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; tcp dpt:domain
ACCEPT&#160;&#160;&#160;&#160; udp&#160; --&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; udp dpt:bootps
ACCEPT&#160;&#160;&#160;&#160; tcp&#160; --&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; tcp dpt:bootps
Chain FORWARD (policy ACCEPT)
target&#160;&#160;&#160;&#160; prot opt source&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; destination
ACCEPT&#160;&#160;&#160;&#160; all&#160; --&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 192.168.122.0/24&#160;&#160;&#160; state RELATED,ESTABLISHED
ACCEPT&#160;&#160;&#160;&#160; all&#160; --&#160; 192.168.122.0/24&#160;&#160;&#160;&#160; anywhere
ACCEPT&#160;&#160;&#160;&#160; all&#160; --&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; anywhere
REJECT&#160;&#160;&#160;&#160; all&#160; --&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; reject-with icmp-port-unreachable
REJECT&#160;&#160;&#160;&#160; all&#160; --&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; anywhere&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; reject-with icmp-port-unreachable
Chain OUTPUT (policy ACCEPT)
target&#160;&#160;&#160;&#160; prot opt source&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; destination

I don't think this is it. I have tried to run a simple ping-pong program that I found (keeps bouncing a value between two processes) and I keep getting the same results : the first Send / Receive pairs (p1 sends to p2, p2 receives and sends back to p1, p1 receives) work and after that the program just blocks. However, like all other examples, the example works if I launch it with &quot;mpirun -np 2 &lt;ping-pong&gt;&quot; and bounces the value 100 times.
&#160;
Adrian
 

________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: adrian sabou &lt;adrian.sabou_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Thursday, February 2, 2012 3:09 PM
Subject: Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking
  
Have you disabled iptables (firewalling) on your nodes?

Or, if you want to leave iptables enabled, set it such that all nodes in your cluster are allowed to open TCP connections from any port to any other port.




On Feb 2, 2012, at 4:49 AM, adrian sabou wrote:

&gt; Hi,
&gt; 
&gt; The only example that works is hello_c.c. All others (that use MPI_Send and MPI_Recv)(connectivity_c.c and ring_c.c) block after the first MPI_Send / MPI_Recv (although the first Send/Receive pair works well for all processes, subsequent Send/Receive pairs block). My slurm version is 2.1.0. It is also worth mentioning that all examples work when not using SLURM (launching with &quot;mpirun -np 5 &lt;exaple_app&gt;&quot;). Blocking occurs only when I try to run on multiple hosts with SLURM (&quot;salloc -N5 mpirun &lt;example_app&gt;&quot;).
&gt; 
&gt; Adrian
&gt; 
&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
&gt; To: adrian sabou &lt;adrian.sabou_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
&gt; Sent: Wednesday, February 1, 2012 10:32 PM
&gt; Subject: Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking
&gt; 
&gt; On Jan 31, 2012, at 11:16 AM, adrian sabou wrote:
&gt; 
&gt; &gt; Like I said, a very simple program.
&gt; &gt; When launching this application with SLURM (using &quot;salloc -N2 mpirun ./&lt;my_app&gt;&quot;), it hangs at the barrier.
&gt; 
&gt; Are you able to run the MPI example programs in examples/ ?
&gt; 
&gt; &gt; However, it passes the barrier if I launch it without SLURM (using &quot;mpirun -np 2 ./&lt;my_app&gt;&quot;). I first noticed this problem when my application hanged if I tried to send two successive messages from a process to another. Only the first MPI_Send would work. The second MPI_Send would block indefinitely. I was wondering whether any of you have encountered a similar problem, or may have an ideea as to what is causing the Send/Receive pair to block when using SLURM. The exact output in my console is as follows:
&gt; &gt;&#160; 
&gt; &gt;&#160; &#160; &#160; &#160; salloc: Granted job allocation 1138
&gt; &gt;&#160; &#160; &#160; &#160; Process 0 - Sending...
&gt; &gt;&#160; &#160; &#160; &#160; Process 1 - Receiving...
&gt; &gt;&#160; &#160; &#160; &#160; Process 1 - Received.
&gt; &gt;&#160; &#160; &#160; &#160; Process 1 - Barrier reached.
&gt; &gt;&#160; &#160; &#160; &#160; Process 0 - Sent.
&gt; &gt;&#160; &#160; &#160; &#160; Process 0 - Barrier reached.
&gt; &gt;&#160; &#160; &#160; &#160; (it just hangs here)
&gt; &gt;&#160; 
&gt; &gt; I am new to MPI programming and to OpenMPI and would greatly appreciate any help. My OpenMPI version is 1.4.4 (although I have also tried it on 1.5.4), my SLURM version is 0.3.3-1 (slurm-llnl 2.1.0-1),
&gt; 
&gt; I'm not sure what SLURM version that is -- my &quot;srun --version&quot; shows 2.2.4.&#160; 0.3.3 would be pretty ancient, no?
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18377/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18378.php">François Tessier: "[OMPI users] Using physical numbering in a rankfile"</a>
<li><strong>Previous message:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>In reply to:</strong> <a href="18376.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
<li><strong>Reply:</strong> <a href="18382.php">Jeff Squyres: "Re: [OMPI users] OpenMPI / SLURM -&gt; Send/Recv blocking"</a>
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
