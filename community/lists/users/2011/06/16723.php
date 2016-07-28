<?
$subject_val = "[OMPI users] Passive target performance (was: Deadlock with barrier und RMA)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 06:05:41 2011" -->
<!-- isoreceived="20110615100541" -->
<!-- sent="Wed, 15 Jun 2011 11:45:24 +0000" -->
<!-- isosent="20110615114524" -->
<!-- name="Ole Kliemann" -->
<!-- email="ole-ompi-2011_at_[hidden]" -->
<!-- subject="[OMPI users] Passive target performance (was: Deadlock with barrier und RMA)" -->
<!-- id="20110615114524.GC4178_at_telvanni.starfleet" -->
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
<strong>Subject:</strong> [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)<br>
<strong>From:</strong> Ole Kliemann (<em>ole-ompi-2011_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-15 07:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16724.php">Barrett, Brian W: "Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<li><strong>Previous message:</strong> <a href="16722.php">Gus Correa: "Re: [OMPI users] OpenMPI launch problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16724.php">Barrett, Brian W: "Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<li><strong>Reply:</strong> <a href="16724.php">Barrett, Brian W: "Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jun 13, 2011 at 04:11:44PM +0000, Barrett, Brian W wrote:
<br>
<span class="quotelev1">&gt; There are no missing calls to MPI_WIN_FENCE as the code is using passive
</span><br>
<span class="quotelev1">&gt; synchronization (lock/unlock).  The test code looks correct, I think this
</span><br>
<span class="quotelev1">&gt; is a bug in Open MPI.  The code also fails on the development trunk, so
</span><br>
<span class="quotelev1">&gt; upgrading will not fix the bug.  I've filed a bug (#2809).  Unfortunately,
</span><br>
<span class="quotelev1">&gt; I'm not sure when I'll have time to investigate further.
</span><br>
<p>Thanks alot for you help, much appreciated!
<br>
<p><span class="quotelev1">&gt; One other note...  Even when everything works correctly, Open MPI's
</span><br>
<span class="quotelev1">&gt; passive target synchronization implementation is pretty poor (this coming
</span><br>
<span class="quotelev1">&gt; from the guy who wrote the code).  Open MPI doesn't offer asynchronous
</span><br>
<span class="quotelev1">&gt; progress for lock/unlock, so all processes have to be entering in the MPI
</span><br>
<span class="quotelev1">&gt; library for progress.  Also, the latency isn't the best.
</span><br>
<p>To shift the topic a bit in this direction: When I stumbled across this
<br>
deadlock, I was actually trying to write test code to measure the
<br>
performance of passive target synchronization.
<br>
<p>I am working on the implementation of an evolutionary algorithm. Each
<br>
process evolves one individual. At certain points the best individual
<br>
across all processes is to be determined.
<br>
<p>But the processes are running completely asynchronous and at very
<br>
different speeds until this point.
<br>
<p>Using active target means all processes which are faster have to wait.
<br>
I measured idle times of 20-30% of the total running time of the
<br>
algorithm. I consider this to be pretty bad, but to be expected since
<br>
all processes are forced to run synchronized.
<br>
<p>Using passive target makes it possible to have all processes run
<br>
completely asynchronous throughout the whole execution of the algorithm.
<br>
But with the lock/unlock calls I measured idle times of 40-50%. I
<br>
consider this to be catastrophic and totally unexpected.
<br>
<p>I have not debugged this further because -- as I said -- when trying to
<br>
develop test code I ran into the deadlock. But from what I saw so far,
<br>
it seemed that process A could not get a lock on process B's window,
<br>
while process B was doing heavy calculation in a tight for-loop.
<br>
<p>Taking your words above into account, Brian, I think I can assume that
<br>
these 40-50% idle time are not so much out of the order and no result on
<br>
a big mistake on my part.
<br>
<p>Ole
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 6/13/11 6:41 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;I think your program has a compile error in the Win_create() line.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;But other than that, I think you're missing some calls to MPI_WIN_FENCE.
</span><br>
<span class="quotelev2">&gt; &gt;The one-sided stuff in MPI-2 is really, really confusing.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Others on this list disagree with me, but I actively discourage people
</span><br>
<span class="quotelev2">&gt; &gt;from using it.  Instead, especially if you're just starting with MPI, you
</span><br>
<span class="quotelev2">&gt; &gt;might want to use MPI_SEND and MPI_RECV (and friends).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I'd also suggest installing your own version of OMPI; the v1.0 series is
</span><br>
<span class="quotelev2">&gt; &gt;several years out of date (either get your admin to install a more recent
</span><br>
<span class="quotelev2">&gt; &gt;version, or install a personal copy, as someone outlined earlier in this
</span><br>
<span class="quotelev2">&gt; &gt;thread).  There have been oodles of bug fixes and new features added
</span><br>
<span class="quotelev2">&gt; &gt;since the v1.0 series.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Jun 11, 2011, at 10:43 AM, Ole Kliemann wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi everyone!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm trying to use MPI on a cluster running OpenMPI 1.2.4 and starting
</span><br>
<span class="quotelev3">&gt; &gt;&gt; processes through PBSPro_11.0.2.110766. I've been running into a couple
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of performance and deadlock problems and like to check whether I'm
</span><br>
<span class="quotelev3">&gt; &gt;&gt; making a mistake.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; One of the deadlocks I managed to boil down to the attached example. I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; run it on 8 cores. It usually deadlocks with all except one process
</span><br>
<span class="quotelev3">&gt; &gt;&gt; showing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     start barrier
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; as last output.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The one process out of order shows:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     start getting local
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My question at this point is simply whether this is expected behaviour
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of OpenMPI. 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ole
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt;mpi_barrier.cc&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-- 
</span><br>
<span class="quotelev2">&gt; &gt;Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;   Brian W. Barrett
</span><br>
<span class="quotelev1">&gt;   Dept. 1423: Scalable System Software
</span><br>
<span class="quotelev1">&gt;   Sandia National Laboratories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16723/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16724.php">Barrett, Brian W: "Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<li><strong>Previous message:</strong> <a href="16722.php">Gus Correa: "Re: [OMPI users] OpenMPI launch problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16724.php">Barrett, Brian W: "Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
<li><strong>Reply:</strong> <a href="16724.php">Barrett, Brian W: "Re: [OMPI users] Passive target performance (was: Deadlock with barrier und RMA)"</a>
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
