<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 11:28:03 2007" -->
<!-- isoreceived="20070711152803" -->
<!-- sent="Wed, 11 Jul 2007 11:27:47 -0400" -->
<!-- isosent="20070711152747" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="15C9E0AB-6C55-43D9-A40E-82CF973B0426_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="32F8B6F0-DAC3-4CA0-B3B1-09F0058D1A39_at_apple.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-11 11:27:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3642.php">Warner Yuen: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>Previous message:</strong> <a href="3640.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3636.php">Warner Yuen: "[OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What's in the hostmx10g file ? How many hosts ?
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 11, 2007, at 1:34 AM, Warner Yuen wrote:
<br>
<p><span class="quotelev1">&gt; I've also had someone run into the endpoint busy problem. I never  
</span><br>
<span class="quotelev1">&gt; figured it out, I just increased the default endpoints on MX-10G  
</span><br>
<span class="quotelev1">&gt; from 8 to 16 endpoints to make the problem go away. Here's the  
</span><br>
<span class="quotelev1">&gt; actual command and error before setting the endpoints to 16. The  
</span><br>
<span class="quotelev1">&gt; version is MX-1.2.1with OMPI 1.2.3:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; node1:~/taepic tae$ mpirun --hostfile hostmx10g -byslot -mca btl  
</span><br>
<span class="quotelev1">&gt; self,sm,mx -np 12 test_beam_injection test_beam_injection.inp -npx  
</span><br>
<span class="quotelev1">&gt; 12 &gt; out12
</span><br>
<span class="quotelev1">&gt; [node2:00834] mca_btl_mx_init: mx_open_endpoint() failed with  
</span><br>
<span class="quotelev1">&gt; status=20
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Process 0.1.3 is unable to reach 0.1.7 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Process 0.1.11 is unable to reach 0.1.7 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PML add procs failed
</span><br>
<span class="quotelev1">&gt;  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Warner Yuen
</span><br>
<span class="quotelev1">&gt; Scientific Computing Consultant
</span><br>
<span class="quotelev1">&gt; Apple Computer
</span><br>
<span class="quotelev1">&gt; email: wyuen_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Tel: 408.718.2859
</span><br>
<span class="quotelev1">&gt; Fax: 408.715.0133
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 10, 2007, at 7:53 AM, users-request_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message: 2
</span><br>
<span class="quotelev2">&gt;&gt; Date: Tue, 10 Jul 2007 09:19:42 -0400
</span><br>
<span class="quotelev2">&gt;&gt; From: Tim Prins &lt;tprins_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;4693876E.4070302_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SLIM H.A. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Tim
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, you should just be able to run:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mpirun --mca btl mx,sm,self -mca mtl ^mx -np 4 -hostfile
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ompi_machinefile ./cpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node001&gt;mpirun --mca btl mx,sm,self -mca mtl ^mx -np 4 -hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ompi_machinefile ./cpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I put in a sleep call to keep it running for some time and to  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; monitor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the endpoints. None of the 4 were open, it must have used tcp.
</span><br>
<span class="quotelev2">&gt;&gt; No, this is not possible. With this command line it will not use tcp.
</span><br>
<span class="quotelev2">&gt;&gt; Are you launching on more than one machine? If the procs are all  
</span><br>
<span class="quotelev2">&gt;&gt; on one
</span><br>
<span class="quotelev2">&gt;&gt; machine, then it will use the shared memory component to communicate
</span><br>
<span class="quotelev2">&gt;&gt; (sm), although the endpoints should still be opened.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to make sure, you did put the sleep between MPI_Init and  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize?
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
<li><strong>Next message:</strong> <a href="3642.php">Warner Yuen: "Re: [OMPI users] openmpi fails on mx endpoint"</a>
<li><strong>Previous message:</strong> <a href="3640.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>In reply to:</strong> <a href="3636.php">Warner Yuen: "[OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
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
