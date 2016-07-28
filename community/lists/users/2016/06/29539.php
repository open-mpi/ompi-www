<?
$subject_val = "Re: [OMPI users] Fwd: Run MPI in Firewall Enviroment";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 23 22:38:08 2016" -->
<!-- isoreceived="20160624023808" -->
<!-- sent="Thu, 23 Jun 2016 19:37:55 -0700" -->
<!-- isosent="20160624023755" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: Run MPI in Firewall Enviroment" -->
<!-- id="8A1133FE-0F7E-42DD-92C9-F61A42CC9936_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAA_2dT+ENDuSNRx3vUPSVFdJVLwSDYcDzW9rhByB3PfEzRsaNw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: Run MPI in Firewall Enviroment<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-23 22:37:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29540.php">knawnd_at_[hidden]: "[OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29538.php">Wilkinson, Collin: "[OMPI users] Fwd: Run MPI in Firewall Enviroment"</a>
<li><strong>In reply to:</strong> <a href="29538.php">Wilkinson, Collin: "[OMPI users] Fwd: Run MPI in Firewall Enviroment"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Both the runtime and TCP BTL components accept port range definitions. All you have to do is tell us what those are, and then set your firewall to leave those ports open.
<br>
<p>So the cmd line would look like: mpirun -mca oob_tcp_dynamic_ipv4_ports 12345-12350 -mca btl_tcp_port_min_v4 34561 -mca btl_tcp_port_range_v4 100 ...
<br>
<p>The two components are a little different. The oob_tcp one takes a range, while the btl_tcp one wants a starting port number and then the number of ports in the range. Still, the result is the same.
<br>
<p>HTH
<br>
Ralph
<br>
<p><span class="quotelev1">&gt; On Jun 23, 2016, at 7:26 PM, Wilkinson, Collin &lt;cjwilkinson_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I realize that OpenMPI wasn't made to run in a Firewall environment. I'd like to try to get it to run in said environment though. So what exact ports do I need to open to be able to run in a firewall environment? And how can I set MPI to run on said ports?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any help I would really appreciate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank You.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29538.php">http://www.open-mpi.org/community/lists/users/2016/06/29538.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29540.php">knawnd_at_[hidden]: "[OMPI users] tcp_peer_send_blocking: send() to socket 9 failed: Broken pipe (32) on openvz containers"</a>
<li><strong>Previous message:</strong> <a href="29538.php">Wilkinson, Collin: "[OMPI users] Fwd: Run MPI in Firewall Enviroment"</a>
<li><strong>In reply to:</strong> <a href="29538.php">Wilkinson, Collin: "[OMPI users] Fwd: Run MPI in Firewall Enviroment"</a>
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
