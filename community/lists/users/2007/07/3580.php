<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 13:01:00 2007" -->
<!-- isoreceived="20070705170100" -->
<!-- sent="Thu, 5 Jul 2007 18:00:41 +0100" -->
<!-- isosent="20070705170041" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi fails on mx endpoint busy" -->
<!-- id="BDDB7C5009659447B2F1747B53854FE83AC3BA_at_EXDUR1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-05 13:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3581.php">Michael Edwards: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3581.php">Michael Edwards: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3581.php">Michael Edwards: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3582.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I have compiled openmpi-1.2.3 with the --with-mx=&lt;directory&gt;
<br>
configuration and gcc compiler. On testing with 4-8 slots I get an error
<br>
message, the mx ports are busy:
<br>
<p><span class="quotelev1">&gt;mpirun --mca btl mx,self -np 4 ./cpi
</span><br>
[node001:10071] mca_btl_mx_init: mx_open_endpoint() failed with
<br>
status=20
<br>
[node001:10074] mca_btl_mx_init: mx_open_endpoint() failed with
<br>
status=20
<br>
[node001:10073] mca_btl_mx_init: mx_open_endpoint() failed with
<br>
status=20
<br>
------------------------------------------------------------------------
<br>
<pre>
--
Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
If you specified the use of a BTL component, you may have
forgotten a component (such as &quot;self&quot;) in the list of 
usable components.
... snipped
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
mpirun noticed that job rank 0 with PID 10071 on node node001 exited on
signal 1 (Hangup).
I would not expect mx messages as communication should not go through
the mx card? (This is a twin dual core  shared memory node)
The same happens when testing on 2 nodes, using a hostfile.
I checked the state of the mx card with mx_endpoint_info and mx_info,
they are healthy and free.
What is missing here?
Thanks
Henk
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3581.php">Michael Edwards: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Previous message:</strong> <a href="3579.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3581.php">Michael Edwards: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3581.php">Michael Edwards: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
<li><strong>Reply:</strong> <a href="3582.php">Tim Prins: "Re: [OMPI users] openmpi fails on mx endpoint busy"</a>
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
