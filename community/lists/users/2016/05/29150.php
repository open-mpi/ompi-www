<?
$subject_val = "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 00:48:01 2016" -->
<!-- isoreceived="20160510044801" -->
<!-- sent="Tue, 10 May 2016 13:48:01 +0900" -->
<!-- isosent="20160510044801" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled" -->
<!-- id="4770d46d-565d-cccb-7791-9d48cc56b300_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="002001d1aa20$f17cac10$d4760430$_at_soft-forge.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 00:48:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29151.php">Siegmar Gross: "[OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29149.php">Devon Hollowood: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>In reply to:</strong> <a href="29143.php">Llolsten Kaonga: "[OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
you can direct OpenMPI to only use a specific range of ports (that 
<br>
should be open in your firewall configuration)
<br>
<p><p>mpirun --mca oob_tcp_static_ipv4_ports &lt;min port&gt;-&lt;max port&gt; ...
<br>
<p><p>if you use the tcp btl, you can (also) use
<br>
<p>mpirun --mca btl_tcp_port_min_v4 &lt;min port&gt; --mca btl_tcp_port_range_v4 
<br>
&lt;number of ports starting from the min port&gt; ...
<br>
<p><p>Cheers,
<br>
<p>Gilles
<br>
<p>On 5/10/2016 3:31 AM, Llolsten Kaonga wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We&#146;ve been running openmpi for a long time and up to version 1.8.2 and 
</span><br>
<span class="quotelev1">&gt; CentOS 6.7 with commands such as the one below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; usr/local/bin/mpirun --allow-run-as-root --mca btl openib,self,sm 
</span><br>
<span class="quotelev1">&gt; --mca pml ob1 -np 2 -np 8 -hostfile /root/mpi-hosts 
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To be able to run the above command, we normally just disabled the 
</span><br>
<span class="quotelev1">&gt; IPv4 firewall and SELinux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We recently made the following updates:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OS:         CentOS 7.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMB:      4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI: 1.10.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we tried to execute the above mpirun command, we got a TCP Broken 
</span><br>
<span class="quotelev1">&gt; Pipe error. There was no IP assignment conflict and eventually, we 
</span><br>
<span class="quotelev1">&gt; narrowed down the problem to the firewall. Disabling the firewalld 
</span><br>
<span class="quotelev1">&gt; daemon allows the command to run to completion. We would prefer not to 
</span><br>
<span class="quotelev1">&gt; disable the daemon as our servers may sometimes be connected to the 
</span><br>
<span class="quotelev1">&gt; rest of our subnet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are there other options such as perhaps specifying a port (I am 
</span><br>
<span class="quotelev1">&gt; guessing, so specific instructions will be greatly appreciated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I thank you.
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29143.php">http://www.open-mpi.org/community/lists/users/2016/05/29143.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29150/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29151.php">Siegmar Gross: "[OMPI users] problem with ld for Sun C 5.14 beta and openmpi-dev-4010-g6c9d65c"</a>
<li><strong>Previous message:</strong> <a href="29149.php">Devon Hollowood: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>In reply to:</strong> <a href="29143.php">Llolsten Kaonga: "[OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
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
