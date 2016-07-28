<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr  3 12:31:52 2007" -->
<!-- isoreceived="20070403163152" -->
<!-- sent="Tue, 3 Apr 2007 12:30:59 -0400" -->
<!-- isosent="20070403163059" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI error when using MPI_Comm_spawn" -->
<!-- id="7057E8C2-4BEE-4D39-AEC3-D741D2E32976_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="s610fced.089_at_n6mcgw16.cchmc.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-03 12:30:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Previous message:</strong> <a href="2990.php">Mohamad Chaarawi: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="2979.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2980.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 2, 2007, at 12:53 PM, Prakash Velayutham wrote:
<br>
<p><span class="quotelev1">&gt; prakash_at_wins04:~/thesis/CS/Samples&gt;mpirun -np 4 --bynode --hostfile  
</span><br>
<span class="quotelev1">&gt; machinefile ./parallel.laplace
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [wins01:17699] *** An error occurred in MPI_Comm_spawn
</span><br>
<span class="quotelev1">&gt; [wins01:17699] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [wins01:17699] *** MPI_ERR_ARG: invalid argument of some other kind
</span><br>
<span class="quotelev1">&gt; [wins01:17699] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; mpirun noticed that job rank 1 with PID 25074 on node wins02 exited  
</span><br>
<span class="quotelev1">&gt; on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt; 2 additional processes aborted (not shown)
</span><br>
<p>This could be one of several issues:
<br>
<p>- An outright bad parameter to MPI_COMM_WORLD (e.g., a bogus  
<br>
communicator)
<br>
- A subtly-bad parameter to MPI_COMM_WORLD (e.g., the parameters all  
<br>
passed the first-order check [e.g., bozo checks for NULL], but then  
<br>
something later in the process determined that it was an invalid value)
<br>
- Something else altogether
<br>
<p>Can you make a small example that shows this same problem and send it  
<br>
to the list?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2992.php">Heywood, Todd: "Re: [OMPI users] btl_tcp_endpoint errors"</a>
<li><strong>Previous message:</strong> <a href="2990.php">Mohamad Chaarawi: "Re: [OMPI users] [Re:  Memory leak in openmpi-1.2?]"</a>
<li><strong>In reply to:</strong> <a href="2979.php">Prakash Velayutham: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2980.php">Ralph Castain: "Re: [OMPI users] Open MPI error when using MPI_Comm_spawn"</a>
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
