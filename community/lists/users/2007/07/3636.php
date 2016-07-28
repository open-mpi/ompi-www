<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 11 01:34:51 2007" -->
<!-- isoreceived="20070711053451" -->
<!-- sent="Tue, 10 Jul 2007 22:34:46 -0700" -->
<!-- isosent="20070711053446" -->
<!-- name="Warner Yuen" -->
<!-- email="wyuen_at_[hidden]" -->
<!-- subject="[OMPI users] OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="32F8B6F0-DAC3-4CA0-B3B1-09F0058D1A39_at_apple.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.2105.1184079192.6844.users_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-07-11 01:34:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3637.php">Tim Cornwell: "[OMPI users] Problems running openmpi under os x"</a>
<li><strong>Previous message:</strong> <a href="3635.php">Ralph Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3641.php">George Bosilca: "Re: [OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3641.php">George Bosilca: "Re: [OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've also had someone run into the endpoint busy problem. I never  
<br>
figured it out, I just increased the default endpoints on MX-10G from  
<br>
8 to 16 endpoints to make the problem go away. Here's the actual  
<br>
command and error before setting the endpoints to 16. The version is  
<br>
MX-1.2.1with OMPI 1.2.3:
<br>
<p>node1:~/taepic tae$ mpirun --hostfile hostmx10g -byslot -mca btl  
<br>
self,sm,mx -np 12 test_beam_injection test_beam_injection.inp -npx 12  
<br>
<span class="quotelev1"> &gt; out12
</span><br>
[node2:00834] mca_btl_mx_init: mx_open_endpoint() failed with status=20
<br>
------------------------------------------------------------------------ 
<br>
<pre>
--
Process 0.1.3 is unable to reach 0.1.7 for MPI communication.
If you specified the use of a BTL component, you may have
forgotten a component (such as &quot;self&quot;) in the list of
usable components.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
Process 0.1.11 is unable to reach 0.1.7 for MPI communication.
If you specified the use of a BTL component, you may have
forgotten a component (such as &quot;self&quot;) in the list of
usable components.
------------------------------------------------------------------------ 
--
------------------------------------------------------------------------ 
--
It looks like MPI_INIT failed for some reason; your parallel process is
likely to abort.  There are many reasons that a parallel process can
fail during MPI_INIT; some of which are due to configuration or  
environment
problems.  This failure appears to be an internal failure; here's some
additional information (which may only be relevant to an Open MPI
developer):
  PML add procs failed
  --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
------------------------------------------------------------------------ 
--
*** An error occurred in MPI_Init
*** before MPI was initialized
*** MPI_ERRORS_ARE_FATAL (goodbye)
------------------------------------------------------------------------ 
--
Warner Yuen
Scientific Computing Consultant
Apple Computer
email: wyuen_at_[hidden]
Tel: 408.718.2859
Fax: 408.715.0133
On Jul 10, 2007, at 7:53 AM, users-request_at_[hidden] wrote:
&gt; ------------------------------
&gt;
&gt; Message: 2
&gt; Date: Tue, 10 Jul 2007 09:19:42 -0400
&gt; From: Tim Prins &lt;tprins_at_[hidden]&gt;
&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
&gt; Message-ID: &lt;4693876E.4070302_at_[hidden]&gt;
&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
&gt;
&gt; SLIM H.A. wrote:
&gt;&gt; Dear Tim
&gt;&gt;
&gt;&gt;&gt; So, you should just be able to run:
&gt;&gt;&gt; mpirun --mca btl mx,sm,self -mca mtl ^mx -np 4 -hostfile
&gt;&gt;&gt; ompi_machinefile ./cpi
&gt;&gt;
&gt;&gt; I tried
&gt;&gt;
&gt;&gt; node001&gt;mpirun --mca btl mx,sm,self -mca mtl ^mx -np 4 -hostfile
&gt;&gt; ompi_machinefile ./cpi
&gt;&gt;
&gt;&gt; I put in a sleep call to keep it running for some time and to monitor
&gt;&gt; the endpoints. None of the 4 were open, it must have used tcp.
&gt; No, this is not possible. With this command line it will not use tcp.
&gt; Are you launching on more than one machine? If the procs are all on  
&gt; one
&gt; machine, then it will use the shared memory component to communicate
&gt; (sm), although the endpoints should still be opened.
&gt;
&gt; Just to make sure, you did put the sleep between MPI_Init and  
&gt; MPI_Finalize?
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3636/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3637.php">Tim Cornwell: "[OMPI users] Problems running openmpi under os x"</a>
<li><strong>Previous message:</strong> <a href="3635.php">Ralph Castain: "Re: [OMPI users] Connection to HNP lost"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3641.php">George Bosilca: "Re: [OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3641.php">George Bosilca: "Re: [OMPI users] OMPI users] openmpi fails on mx endpoint busy"</a>
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
