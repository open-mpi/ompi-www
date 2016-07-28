<?
$subject_val = "Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Dec 18 21:55:37 2011" -->
<!-- isoreceived="20111219025537" -->
<!-- sent="Sun, 18 Dec 2011 19:55:29 -0700" -->
<!-- isosent="20111219025529" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh" -->
<!-- id="FFBB3F41-CC5D-4D8A-8AAD-BB28EB5D3B58_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="loom.20111219T003147-733_at_post.gmane.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-18 21:55:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI users] OpenMPI and valgrind"</a>
<li><strong>Previous message:</strong> <a href="17999.php">Ralph Castain: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>In reply to:</strong> <a href="17997.php">Jaison Paul: "[OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 18, 2011, at 4:43 PM, Jaison Paul wrote:
<br>
<p><span class="quotelev1">&gt; We have reported this before. We are still not able to do it, fully.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However partially successful, now. We have used a machine with static IP address
</span><br>
<span class="quotelev1">&gt; and modified the router settings by opening all ssh ports. Master runs on this
</span><br>
<span class="quotelev1">&gt; machine and the slaves on EC2. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now we can run the &quot;Hello world&quot; over internet using ssh. It starts MPI
</span><br>
<span class="quotelev1">&gt; executables in EC2 (we can see on 'top') and print back &quot;hello&quot; to our
</span><br>
<span class="quotelev1">&gt; home/master machine. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But send/recv doesnt work. send/recv hang between master(home PC)&lt;-&gt;slave(EC2),
</span><br>
<span class="quotelev1">&gt; both ways. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What are the port settings for send/recv? Do we need to modify anything?
</span><br>
<p>Have you looked at all the other EC2 discussions on the user list? Several people have provided instructions on how to deal with the EC2 security settings. Unfortunately, this is all a firewall/security issue.
<br>
<p>It sounds like the out-of-band connections required by the RTE are getting through. However, the MPI connections are created separately. You can force the selection by setting the mca parameters to fit the EC2 and local firewall settings:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &lt;none&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comma-delimited list of devices or CIDR notation of networks to use for MPI communication (e.g.,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;eth0,eth1&quot; or &quot;192.168.0.0/16,10.1.4.0/24&quot;).  Mutually exclusive with btl_tcp_if_exclude.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_port_min_v4&quot; (current value: &lt;1024&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The minimum port where the TCP BTL will try to bind (default 1024)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA btl: parameter &quot;btl_tcp_port_range_v4&quot; (current value: &lt;64511&gt;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The number of ports where the TCP BTL will try to bind (default 64511). This parameter together with
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the port min, define a range of ports where Open MPI will open sockets.
<br>
&nbsp;
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help is very much appreciated. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jaison
</span><br>
<span class="quotelev1">&gt; Australian National Uni
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
<li><strong>Next message:</strong> <a href="18001.php">Ralph Castain: "Re: [OMPI users] OpenMPI and valgrind"</a>
<li><strong>Previous message:</strong> <a href="17999.php">Ralph Castain: "Re: [OMPI users] Quick question on compiling Openmpi w/ Torque and Infiniband"</a>
<li><strong>In reply to:</strong> <a href="17997.php">Jaison Paul: "[OMPI users] Accessing OpenMPI processes on EC2 machine over Internet using ssh"</a>
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
