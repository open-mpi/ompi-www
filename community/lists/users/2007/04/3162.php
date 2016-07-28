<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat Apr 28 08:50:30 2007" -->
<!-- isoreceived="20070428125030" -->
<!-- sent="Fri, 27 Apr 2007 19:49:04 -0400" -->
<!-- isosent="20070427234904" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem." -->
<!-- id="A159B5A4-1DDD-4241-9FF8-807925E8BA9B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200704261548.32803.slug_at_aeminium.org" -->
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
<strong>Date:</strong> 2007-04-27 19:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3163.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Previous message:</strong> <a href="3161.php">Daniel Gruner: "Re: [OMPI users] bproc problems"</a>
<li><strong>In reply to:</strong> <a href="3151.php">Nuno Sucena Almeida: "[OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3163.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Reply:</strong> <a href="3163.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is actually expected behavior.  We make the assumption that MPI  
<br>
processes are meant to exhibit as low latency as possible, and  
<br>
therefore use active polling for most message passing.
<br>
<p>Additionally, it may be possible that connections could come across  
<br>
multiple devices, so we need to poll them all to check for progress/ 
<br>
connections.  We've talked internally about getting better at  
<br>
recognizing single-device scenarios (and therefore allowing  
<br>
blocking), but haven't really done much about it.  Our internal  
<br>
interfaces were designed to be non-blocking for polling for maximum  
<br>
performance (i.e., lowest latency / highest bandwidth).
<br>
<p><p>On Apr 26, 2007, at 3:48 PM, Nuno Sucena Almeida wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	I'm having a weird problem while using the MPI_Comm_Accept (C) or the
</span><br>
<span class="quotelev1">&gt; MPI::Comm::Accept (C++ bindings).
</span><br>
<span class="quotelev1">&gt; 	My &quot;server&quot; runs until the call to this function but if there's no  
</span><br>
<span class="quotelev1">&gt; client
</span><br>
<span class="quotelev1">&gt; connecting, it sits there eating all CPU (100%), although if a  
</span><br>
<span class="quotelev1">&gt; client connects
</span><br>
<span class="quotelev1">&gt; the loop works fine, but when the client disconnects again we are  
</span><br>
<span class="quotelev1">&gt; back to the
</span><br>
<span class="quotelev1">&gt; same high CPU usage.
</span><br>
<span class="quotelev1">&gt; 	I tried using OpenMPI version 1.1.2 and 1.2. The machines  
</span><br>
<span class="quotelev1">&gt; architectures are
</span><br>
<span class="quotelev1">&gt; AMD Opteron and Intel Itanium2 respectively, the former compiled  
</span><br>
<span class="quotelev1">&gt; with gcc
</span><br>
<span class="quotelev1">&gt; 4.1.1 and the later with gcc 3.2.3.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	The C++ code is here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	<a href="http://compel.bu.edu/~nuno/openmpi/">http://compel.bu.edu/~nuno/openmpi/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	along with the logs for orted and the 'server' output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	I started orted with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	orted --persistent --seed --scope public  --universe foo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	and the 'server' with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	mpirun --universe foo -np 1 ./server
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	The code is a C++ conversion from the C basic one posted at the  
</span><br>
<span class="quotelev1">&gt; mpi-forum
</span><br>
<span class="quotelev1">&gt; website:
</span><br>
<span class="quotelev1">&gt; 	
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.mpi-forum.org/docs/mpi-20-html/node106.htm#Node109">http://www.mpi-forum.org/docs/mpi-20-html/node106.htm#Node109</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	Is there an easy fix for this? I tried also the C version having  
</span><br>
<span class="quotelev1">&gt; the same
</span><br>
<span class="quotelev1">&gt; problem...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 					Regards,
</span><br>
<span class="quotelev1">&gt; 											Nuno
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; <a href="http://aeminium.org/slug/">http://aeminium.org/slug/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3163.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Previous message:</strong> <a href="3161.php">Daniel Gruner: "Re: [OMPI users] bproc problems"</a>
<li><strong>In reply to:</strong> <a href="3151.php">Nuno Sucena Almeida: "[OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3163.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
<li><strong>Reply:</strong> <a href="3163.php">Nuno Sucena Almeida: "Re: [OMPI users] MPI_Comm_Accept / MPI::Comm::Accept problem."</a>
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
