<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 12:39:22 2007" -->
<!-- isoreceived="20070711163922" -->
<!-- sent="Wed, 11 Jul 2007 09:39:16 -0700" -->
<!-- isosent="20070711163916" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails on mx endpoint" -->
<!-- id="BA9422C7-BA65-420A-8D4A-F5CEE158270A_at_apple.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.29.1184169606.19359.users_at_open-mpi.org" -->
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
<strong>From:</strong> Warner Yuen (<em>wyuen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 12:39:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>Previous message:</strong> <a href="3641.php">George Bosilca: "Re: [OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>Reply:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The hostfile was changed around. As we tried to pull nodes out that  
<br>
we thought might have been bad. But none were over subscribed if  
<br>
that's what you mean.
<br>
<p>Warner Yuen
<br>
Scientific Computing Consultant
<br>
Apple Computer
<br>
<p><p><p>On Jul 11, 2007, at 9:00 AM, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Message: 3
</span><br>
<span class="quotelev1">&gt; Date: Wed, 11 Jul 2007 11:27:47 -0400
</span><br>
<span class="quotelev1">&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI users] openmpi fails on mx endpoint
</span><br>
<span class="quotelev1">&gt; 	busy
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;15C9E0AB-6C55-43D9-A40E-82CF973B0426_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What's in the hostmx10g file ? How many hosts ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 11, 2007, at 1:34 AM, Warner Yuen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've also had someone run into the endpoint busy problem. I never
</span><br>
<span class="quotelev2">&gt;&gt; figured it out, I just increased the default endpoints on MX-10G
</span><br>
<span class="quotelev2">&gt;&gt; from 8 to 16 endpoints to make the problem go away. Here's the
</span><br>
<span class="quotelev2">&gt;&gt; actual command and error before setting the endpoints to 16. The
</span><br>
<span class="quotelev2">&gt;&gt; version is MX-1.2.1with OMPI 1.2.3:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; node1:~/taepic tae$ mpirun --hostfile hostmx10g -byslot -mca btl
</span><br>
<span class="quotelev2">&gt;&gt; self,sm,mx -np 12 test_beam_injection test_beam_injection.inp -npx
</span><br>
<span class="quotelev2">&gt;&gt; 12 &gt; out12
</span><br>
<span class="quotelev2">&gt;&gt; [node2:00834] mca_btl_mx_init: mx_open_endpoint() failed with
</span><br>
<span class="quotelev2">&gt;&gt; status=20
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt; -
</span><br>
<span class="quotelev2">&gt;&gt; ----
</span><br>
<span class="quotelev2">&gt;&gt; Process 0.1.3 is unable to reach 0.1.7 for MPI communication.
</span><br>
<span class="quotelev2">&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev2">&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev2">&gt;&gt; usable components.
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3642/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>Previous message:</strong> <a href="3641.php">George Bosilca: "Re: [OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>Reply:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
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
