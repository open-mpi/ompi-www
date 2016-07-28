<?
$subject_val = "Re: [OMPI users] Problem with MPI_BARRIER";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  8 08:26:24 2011" -->
<!-- isoreceived="20110908122624" -->
<!-- sent="Thu, 8 Sep 2011 08:26:17 -0400" -->
<!-- isosent="20110908122617" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with MPI_BARRIER" -->
<!-- id="1BB5B3A7-BA74-4DF5-A20B-DE4D621DE2DF_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE527A96-A52B-4D5D-8A78-C358E319FD34_at_coria.fr" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-08 08:26:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17185.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17183.php">Jeff Squyres: "Re: [OMPI users] query regarding Open fabrics connections"</a>
<li><strong>In reply to:</strong> <a href="17182.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17185.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17185.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Order in which processes hit the barrier is only one factor in the time it takes for that process to finish the barrier.
<br>
<p>An easy way to think of a barrier implementation is a &quot;fan in/fan out&quot; model.  When each nonzero rank process calls MPI_BARRIER, it sends a message saying &quot;I have hit the barrier!&quot; (it usually sends it to its parent in a tree of all MPI processes in the communicator, but you can simplify this model and consider that it sends it to rank 0).  Rank 0 collects all of these messages.  When it has messages from all processes in the communicator, it sends out &quot;ok, you can leave the barrier now&quot; messages (again, it's usually via a tree distribution, but you can pretend that it directly, linearly sends a message to each peer process in the communicator).
<br>
<p>Hence, the time that any individual process spends in the communicator is relative to when every other process enters the communicator.  But it's also dependent upon communication speed, congestion in the network, etc.
<br>
<p><p>On Sep 8, 2011, at 6:20 AM, Ghislain Lartigue wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; at a given point in my (Fortran90) program, I write:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ===================
</span><br>
<span class="quotelev1">&gt; start_time = MPI_Wtime()
</span><br>
<span class="quotelev1">&gt; call MPI_BARRIER(...)
</span><br>
<span class="quotelev1">&gt; new_time = MPI_Wtime() - start_time
</span><br>
<span class="quotelev1">&gt; write(*,*) &quot;barrier time =&quot;,new_time
</span><br>
<span class="quotelev1">&gt; ==================
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and then I run my code...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I expected that the values of &quot;new_time&quot; would range from 0 to Tmax (1700 in my case)
</span><br>
<span class="quotelev1">&gt; As I understand it, the first process that hits the barrier should print Tmax and the last process that hits the barrier should print 0 (or a very low value).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But this is not the case: all processes print values in the range 1400-1700!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any explanation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Ghislain.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS:
</span><br>
<span class="quotelev1">&gt; This small code behaves perfectly in other parts of my code...
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17185.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Previous message:</strong> <a href="17183.php">Jeff Squyres: "Re: [OMPI users] query regarding Open fabrics connections"</a>
<li><strong>In reply to:</strong> <a href="17182.php">Ghislain Lartigue: "[OMPI users] Problem with MPI_BARRIER"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17185.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
<li><strong>Reply:</strong> <a href="17185.php">Ghislain Lartigue: "Re: [OMPI users] Problem with MPI_BARRIER"</a>
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
