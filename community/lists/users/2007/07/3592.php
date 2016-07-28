<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul  6 08:30:10 2007" -->
<!-- isoreceived="20070706123010" -->
<!-- sent="Fri, 6 Jul 2007 08:30:03 -0400" -->
<!-- isosent="20070706123003" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="247392C0-5F34-47A4-B7F8-6CC09B224635_at_myri.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE83AC3C6_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-06 08:30:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3593.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="3591.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3591.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3582.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 6, 2007, at 7:37 AM, SLIM H.A. wrote:
<br>
<p><span class="quotelev1">&gt; Dear Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have now tried both
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl mx,sm -np 4 ./cpi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which gives the same error message again, and,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun --mca btl mx,sm,self -np 4 ./cpi_gcc_ompi_mx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; actually locks some of the mx ports but not all 4, ie this is the  
</span><br>
<span class="quotelev1">&gt; output from endpoint info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 Myrinet board installed.
</span><br>
<span class="quotelev1">&gt; The MX driver is configured to support up to 4 endpoints on 4 boards.
</span><br>
<span class="quotelev1">&gt; ===================================================================
</span><br>
<span class="quotelev1">&gt; Board #0:
</span><br>
<span class="quotelev1">&gt; Endpoint         PID             Command                 Info
</span><br>
<span class="quotelev1">&gt; &lt;raw&gt;           5061            mx_mapper
</span><br>
<span class="quotelev1">&gt; 0               20315           cpi
</span><br>
<span class="quotelev1">&gt; There are currently 1 regular endpoint open
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the output from the node:
</span><br>
<span class="quotelev2">&gt; &gt;mpirun --mca btl mx,sm,self -np 4 ./cpi_gcc_ompi_mx
</span><br>
<span class="quotelev1">&gt; [node001:20312] mca_btl_mx_init: mx_open_endpoint() failed with  
</span><br>
<span class="quotelev1">&gt; status=20
</span><br>
<span class="quotelev1">&gt; [node001:20314] mca_btl_mx_init: mx_open_endpoint() failed with  
</span><br>
<span class="quotelev1">&gt; status=20
</span><br>
<span class="quotelev1">&gt; [node001:20313] mca_btl_mx_init: mx_open_endpoint() failed with  
</span><br>
<span class="quotelev1">&gt; status=20
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_open- 
</span><br>
<span class="quotelev1">&gt; mpi.org] On Behalf Of Michael Edwards
</span><br>
<span class="quotelev1">&gt; Sent: 05 July 2007 18:06
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] openmpi fails on mx endpoint busy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If the machine is multi-processor you might want to add the sm  
</span><br>
<span class="quotelev1">&gt; btl.  That cleared up some similar problems for me, though I don't  
</span><br>
<span class="quotelev1">&gt; use mx so your millage may vary.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/5/07, SLIM H.A. &lt;h.a.slim_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compiled openmpi-1.2.3 with the --with-mx=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt; configuration and gcc compiler. On testing with 4-8 slots I get an  
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt; message, the mx ports are busy:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;mpirun --mca btl mx,self -np 4 ./cpi
</span><br>
<span class="quotelev1">&gt; [node001:10071] mca_btl_mx_init: mx_open_endpoint() failed with
</span><br>
<span class="quotelev1">&gt; status=20
</span><br>
<span class="quotelev1">&gt; [node001:10074] mca_btl_mx_init: mx_open_endpoint() failed with
</span><br>
<span class="quotelev1">&gt; status=20
</span><br>
<span class="quotelev1">&gt; [node001:10073] mca_btl_mx_init: mx_open_endpoint() failed with
</span><br>
<span class="quotelev1">&gt; status=20
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; ... snipped
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
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 10071 on node node001  
</span><br>
<span class="quotelev1">&gt; exited on
</span><br>
<span class="quotelev1">&gt; signal 1 (Hangup).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would not expect mx messages as communication should not go through
</span><br>
<span class="quotelev1">&gt; the mx card? (This is a twin dual core  shared memory node)
</span><br>
<span class="quotelev1">&gt; The same happens when testing on 2 nodes, using a hostfile.
</span><br>
<span class="quotelev1">&gt; I checked the state of the mx card with mx_endpoint_info and mx_info,
</span><br>
<span class="quotelev1">&gt; they are healthy and free.
</span><br>
<span class="quotelev1">&gt; What is missing here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Henk
</span><br>
<p>Henk,
<br>
<p>OMPI is successfully opening one endpoint and the other three fail  
<br>
with MX_BUSY (error 20). This might happen if they are all trying to  
<br>
open the same endpoint ID. OMPI normally does not do this. I do not  
<br>
see a hostfile or host parameters specified. What is OMPI using for a  
<br>
machinefile?
<br>
<p>Also, could you try creating a host file named &quot;hosts&quot; with the names  
<br>
of your machines and then try:
<br>
<p>$ mpirun -np 2 --hostfile hosts ./cpi
<br>
<p>and then
<br>
<p>$ mpirun -np 2 --hostfile hosts --mca pml cm ./cpi
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3593.php">Swamy Kandadai: "[OMPI users] Swamy Kandadai is out of the office."</a>
<li><strong>Previous message:</strong> <a href="3591.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3591.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3582.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
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
