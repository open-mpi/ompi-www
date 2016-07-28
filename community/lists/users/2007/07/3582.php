<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 13:15:37 2007" -->
<!-- isoreceived="20070705171537" -->
<!-- sent="Thu, 05 Jul 2007 13:15:38 -0400" -->
<!-- isosent="20070705171538" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="468D273A.4080609_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BDDB7C5009659447B2F1747B53854FE83AC3BA_at_EXDUR1.mds.ad.dur.ac.uk" -->
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
<strong>Date:</strong> 2007-07-05 13:15:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3583.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Previous message:</strong> <a href="3581.php">Michael Edwards: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3580.php">SLIM H.A.: "[OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3590.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3590.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Henk,
<br>
<p>By specifying '--mca btl mx,self' you are telling Open MPI not to use 
<br>
its shared memory support. If you want to use Open MPI's shared memory 
<br>
support, you must add 'sm' to the list. I.e. '--mca btl mx,self'. If you 
<br>
would rather use MX's shared memory support, instead use '--mca btl 
<br>
mx,self --mca btl_mx_shared_mem 1'. However, in most cases I believe 
<br>
Open MPI's shared memory support is a bit better.
<br>
<p>Alternatively, if you don't specify any btls, Open MPI should figure out 
<br>
what to use automatically.
<br>
<p>Hope this helps,
<br>
<p>Tim
<br>
<p>SLIM H.A. wrote:
<br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have compiled openmpi-1.2.3 with the --with-mx=&lt;directory&gt;
</span><br>
<span class="quotelev1">&gt; configuration and gcc compiler. On testing with 4-8 slots I get an error
</span><br>
<span class="quotelev1">&gt; message, the mx ports are busy:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; mpirun --mca btl mx,self -np 4 ./cpi
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 0 with PID 10071 on node node001 exited on
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
<li><strong>Next message:</strong> <a href="3583.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Previous message:</strong> <a href="3581.php">Michael Edwards: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>In reply to:</strong> <a href="3580.php">SLIM H.A.: "[OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3590.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3590.php">SLIM H.A.: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
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
