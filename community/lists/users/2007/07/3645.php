<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 13:25:31 2007" -->
<!-- isoreceived="20070711172531" -->
<!-- sent="Wed, 11 Jul 2007 13:25:33 -0400" -->
<!-- isosent="20070711172533" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails on mx endpoint" -->
<!-- id="4695128D.8070005_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DF7135AB-2EAF-4AE3-BEC3-C69C22757A86_at_cs.utk.edu" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 13:25:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3646.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Previous message:</strong> <a href="3644.php">Lev Gelb: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>In reply to:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Or you can simply tell the mx mtl not to run by adding &quot;-mca mtl ^mx&quot; to 
<br>
the command line.
<br>
<p>George: There is an open bug about this problem: 
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1080">https://svn.open-mpi.org/trac/ompi/ticket/1080</a>
<br>
<p>Tim
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; There seems to be a problem with MX, because a conflict between out  
</span><br>
<span class="quotelev1">&gt; MTL and the BTL. So, I suspect that if you want it to run [right now]  
</span><br>
<span class="quotelev1">&gt; you should spawn less than the MX supported endpoint by node (one  
</span><br>
<span class="quotelev1">&gt; less). I'll take a look this afternoon.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Thanks,
</span><br>
<span class="quotelev1">&gt;      george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 11, 2007, at 12:39 PM, Warner Yuen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The hostfile was changed around. As we tried to pull nodes out that  
</span><br>
<span class="quotelev2">&gt;&gt; we thought might have been bad. But none were over subscribed if  
</span><br>
<span class="quotelev2">&gt;&gt; that's what you mean.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Warner Yuen
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Computing Consultant
</span><br>
<span class="quotelev2">&gt;&gt; Apple Computer
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 11, 2007, at 9:00 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message: 3
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Wed, 11 Jul 2007 11:27:47 -0400
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] OMPI users] openmpi fails on mx endpoint
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 	busy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;15C9E0AB-6C55-43D9-A40E-82CF973B0426_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=US-ASCII; delsp=yes; format=flowed
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What's in the hostmx10g file ? How many hosts ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 11, 2007, at 1:34 AM, Warner Yuen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've also had someone run into the endpoint busy problem. I never
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; figured it out, I just increased the default endpoints on MX-10G
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; from 8 to 16 endpoints to make the problem go away. Here's the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; actual command and error before setting the endpoints to 16. The
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; version is MX-1.2.1with OMPI 1.2.3:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node1:~/taepic tae$ mpirun --hostfile hostmx10g -byslot -mca btl
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; self,sm,mx -np 12 test_beam_injection test_beam_injection.inp -npx
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 12 &gt; out12
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [node2:00834] mca_btl_mx_init: mx_open_endpoint() failed with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; status=20
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -------------------------------------------------------------------- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Process 0.1.3 is unable to reach 0.1.7 for MPI communication.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; usable components.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="3646.php">Ralph H Castain: "Re: [OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>Previous message:</strong> <a href="3644.php">Lev Gelb: "[OMPI users] Recursive use of &quot;orterun&quot;"</a>
<li><strong>In reply to:</strong> <a href="3643.php">George Bosilca: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
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
