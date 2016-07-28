<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Nov 16 17:23:54 2005" -->
<!-- isoreceived="20051116222354" -->
<!-- sent="Wed, 16 Nov 2005 17:23:26 -0500" -->
<!-- isosent="20051116222326" -->
<!-- name="Enrique Curchitser" -->
<!-- email="ec605_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Configuring port" -->
<!-- id="33E8158F-3147-4B35-9C17-C4AE3BF8F535_at_columbia.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="op.s0craqjqies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Enrique Curchitser (<em>ec605_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-16 17:23:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0356.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0354.php">Troy Telford: "Re: [O-MPI users] Configuring port"</a>
<li><strong>In reply to:</strong> <a href="0354.php">Troy Telford: "Re: [O-MPI users] Configuring port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Reply:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you.  It did the trick!  Now on to optimizing the communications
<br>
over gig-ethernet.
<br>
<p><p>_________________
<br>
Enrique Curchitser
<br>
ec605_at_[hidden]
<br>
<p><p><p>On Nov 16, 2005, at 4:29 PM, Troy Telford wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 16 Nov 2005 14:16:20 -0700, Enrique Curchitser
</span><br>
<span class="quotelev1">&gt; &lt;ec605_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I put together a small cluster (4 computers) which has one head node
</span><br>
<span class="quotelev2">&gt;&gt; that sees the world
</span><br>
<span class="quotelev2">&gt;&gt; and 3 that are on a private network.  If I want to use the head node
</span><br>
<span class="quotelev2">&gt;&gt; (which has 2 NICs)
</span><br>
<span class="quotelev2">&gt;&gt; as part of the ring, how do I tell it to go over the NIC that is part
</span><br>
<span class="quotelev2">&gt;&gt; of the private network?
</span><br>
<span class="quotelev2">&gt;&gt; In mpich, there is a modification to the hostfile, but I did not see
</span><br>
<span class="quotelev2">&gt;&gt; any such thing with OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here's an entry from an earlier post to this list (in the archives)  
</span><br>
<span class="quotelev1">&gt; that I
</span><br>
<span class="quotelev1">&gt; believe applies:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2005/11/0337.php">http://www.open-mpi.org/community/lists/users/2005/11/0337.php</a>
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
<li><strong>Next message:</strong> <a href="0356.php">Clement Chu: "Re: [O-MPI users] Error on mpirun in Redhat Fedora Core 4"</a>
<li><strong>Previous message:</strong> <a href="0354.php">Troy Telford: "Re: [O-MPI users] Configuring port"</a>
<li><strong>In reply to:</strong> <a href="0354.php">Troy Telford: "Re: [O-MPI users] Configuring port"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
<li><strong>Reply:</strong> <a href="0369.php">Jeff Squyres: "Re: [O-MPI users] Configuring port"</a>
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
