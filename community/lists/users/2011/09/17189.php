<?
$subject_val = "Re: [OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 09:42:02 2011" -->
<!-- isoreceived="20110908134202" -->
<!-- sent="Thu, 8 Sep 2011 15:41:57 +0200" -->
<!-- isosent="20110908134157" -->
<!-- name="Ghislain Lartigue" -->
<!-- email="ghislain.lartigue_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_BARRIER" -->
<!-- id="B85E6C2C-B428-4ABA-86A2-AB40E2788104_at_coria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="7C3F3D82-F74F-4B48-A85C-2BDB44509000_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with MPI_BARRIER<br>
<strong>From:</strong> Ghislain Lartigue (<em>ghislain.lartigue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 09:41:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17190.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17188.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17188.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17191.php">Rolf Riesen: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17191.php">Rolf Riesen: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
These &quot;times&quot; have no units, it's just an example...
<br>
Whatever units are used, at least one process should spend a very small of time in the barrier (compared to the other processes) and this is not what I see in my code.
<br>
<p>The network is supposed to be excellent: my machine is #9 in the top500 supercomputers... (<a href="http://top500.org/system/10589">http://top500.org/system/10589</a>)
<br>
<p>Ghislain.
<br>
<p>Le 8 sept. 2011 &#224; 15:34, Jeff Squyres a &#233;crit :
<br>
<p><span class="quotelev1">&gt; On Sep 8, 2011, at 9:17 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Example with 3 processes:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P0 hits barrier at t=12
</span><br>
<span class="quotelev2">&gt;&gt; P1 hits barrier at t=27
</span><br>
<span class="quotelev2">&gt;&gt; P2 hits barrier at t=41
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is the unit of time here, and how well are these times synchronized?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In this situation:
</span><br>
<span class="quotelev2">&gt;&gt; P0 waits 41-12 = 29
</span><br>
<span class="quotelev2">&gt;&gt; P1 waits 41-27 = 14
</span><br>
<span class="quotelev2">&gt;&gt; P2 waits 41-41 = 00
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So I should see something  like (no ordering is expected):
</span><br>
<span class="quotelev2">&gt;&gt; barrier_time = 14
</span><br>
<span class="quotelev2">&gt;&gt; barrier_time = 00
</span><br>
<span class="quotelev2">&gt;&gt; barrier_time = 29
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; But what I see is much more like
</span><br>
<span class="quotelev2">&gt;&gt; barrier_time = 22
</span><br>
<span class="quotelev2">&gt;&gt; barrier_time = 29
</span><br>
<span class="quotelev2">&gt;&gt; barrier_time = 25
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See? No process has a barrier_time equal to zero !!!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No process will ever have a *zero* time in a barrier; it's just not possible (unless you're measuring in seconds, or something very coarse grained?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What type of network are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 8 sept. 2011 &#224; 14:55, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The order in which you see stdout printed from mpirun is not necessarily reflective of what order things were actually printers.  Remember that the stdout from each MPI process needs to flow through at least 3 processes and potentially across the network before it is actually displayed on mpirun's stdout.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI process -&gt; local Open MPI daemon -&gt; mpirun -&gt; printed to mpirun's stdout
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hence, the ordering of stdout can get transposed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 8, 2011, at 8:49 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you for this explanation but indeed this confirms that the LAST process that hits the barrier should go through nearly instantaneously (except for the broadcast time for the acknowledgment signal).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And this is not what happens in my code : EVERY process waits for a very long time before going through the barrier (thousands of times more than a broadcast)...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Le 8 sept. 2011 &#224; 14:26, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Order in which processes hit the barrier is only one factor in the time it takes for that process to finish the barrier.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An easy way to think of a barrier implementation is a &quot;fan in/fan out&quot; model.  When each nonzero rank process calls MPI_BARRIER, it sends a message saying &quot;I have hit the barrier!&quot; (it usually sends it to its parent in a tree of all MPI processes in the communicator, but you can simplify this model and consider that it sends it to rank 0).  Rank 0 collects all of these messages.  When it has messages from all processes in the communicator, it sends out &quot;ok, you can leave the barrier now&quot; messages (again, it's usually via a tree distribution, but you can pretend that it directly, linearly sends a message to each peer process in the communicator).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hence, the time that any individual process spends in the communicator is relative to when every other process enters the communicator.  But it's also dependent upon communication speed, congestion in the network, etc.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Sep 8, 2011, at 6:20 AM, Ghislain Lartigue wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; at a given point in my (Fortran90) program, I write:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ===================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; start_time = MPI_Wtime()
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; call MPI_BARRIER(...)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; new_time = MPI_Wtime() - start_time
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; write(*,*) &quot;barrier time =&quot;,new_time
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; ==================
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and then I run my code...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I expected that the values of &quot;new_time&quot; would range from 0 to Tmax (1700 in my case)
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; As I understand it, the first process that hits the barrier should print Tmax and the last process that hits the barrier should print 0 (or a very low value).
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; But this is not the case: all processes print values in the range 1400-1700!
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Any explanation?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Ghislain.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; PS:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This small code behaves perfectly in other parts of my code...
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17190.php">Blosch, Edwin L: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes created by mpirun?"</a>
<li><strong>Previous message:</strong> <a href="17188.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>In reply to:</strong> <a href="17188.php">Jeff Squyres: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17191.php">Rolf Riesen: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17191.php">Rolf Riesen: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
