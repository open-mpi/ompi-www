<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 26 15:33:34 2006" -->
<!-- isoreceived="20060426193334" -->
<!-- sent="Wed, 26 Apr 2006 15:25:41 -0400" -->
<!-- isosent="20060426192541" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Spawn and Disconnect" -->
<!-- id="8C85B452-43B4-4949-B193-B6FBA64CC4C2_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="54A6CA27-1E9D-42B8-827A-8F0FC96264F1_at_ieee.org" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-26 15:25:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1154.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704"</a>
<li><strong>Previous message:</strong> <a href="1152.php">damien_at_[hidden]: "Re: [OMPI users] which is better: 64x1 or 32x2"</a>
<li><strong>In reply to:</strong> <a href="1142.php">Michael Kluskens: "[OMPI users]  Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0791.php">Brignone, Sergio: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Correction on this, this problem only occurs (with OpenMPI 1.2) when  
<br>
I don't use mpirun to launch my process.
<br>
<p>I know seems strange to most mpi users, it turns out that when using  
<br>
OpenMPI and only needing one process (because I spawn everything else  
<br>
I need), I had found it quicker just to launch the executable directly.
<br>
<p>I have only confirmed my test code works with OpenMPI 1.2 (if I have  
<br>
trouble I'll test 1.1), below is the proper output for my test of  
<br>
spawning, disconnecting, and respawning:
<br>
<p><span class="quotelev1"> &gt;mpirun -np 1 parent2
</span><br>
parent:  0  of  1
<br>
parent: How many processes total?
<br>
2
<br>
parent: Calling MPI_Comm_spawn to start  1  subprocesses.
<br>
child starting
<br>
parent returned from Comm_Spawn call
<br>
parent: Calling MPI_BCAST with btest =  17 .  child =  3
<br>
child 0 of 1:  Parent 3
<br>
parent: Calling MPI_Comm_spawn to start  1  subprocesses.
<br>
child 0 of 1:  Receiving   17 from parent
<br>
child calling COMM_FREE
<br>
child calling FINALIZE
<br>
child exiting
<br>
Maximum user memory allocated: 0
<br>
child starting
<br>
parent: Calling MPI_BCAST with btest =  17 .  child =  3
<br>
child 0 of 1:  Parent 3
<br>
child 0 of 1:  Receiving   17 from parent
<br>
child calling COMM_FREE
<br>
child calling FINALIZE
<br>
<p>Michael
<br>
<p>On Apr 25, 2006, at 2:57 PM, Michael Kluskens wrote:
<br>
<p><span class="quotelev1">&gt; I'm running OpenMPI 1.1 (v9704)and when a spawned processes exits  
</span><br>
<span class="quotelev1">&gt; the parent does not die (see previous discussions about  
</span><br>
<span class="quotelev1">&gt; 1.0.1/1.0.2); however, the next time the parent tries to spawn a  
</span><br>
<span class="quotelev1">&gt; process MPI_Comm_spawn does not return.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My test output below:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  parent:  0  of  1
</span><br>
<span class="quotelev1">&gt; parent: How many processes total?
</span><br>
<span class="quotelev1">&gt; 2
</span><br>
<span class="quotelev1">&gt; parent: Calling MPI_Comm_spawn to start  1  subprocesses.
</span><br>
<span class="quotelev1">&gt; child starting
</span><br>
<span class="quotelev1">&gt; parent returned from Comm_Spawn call
</span><br>
<span class="quotelev1">&gt; parent: Calling MPI_BCAST with btest =  17 .  child =  3
</span><br>
<span class="quotelev1">&gt; child 0 of 1:  Parent 3
</span><br>
<span class="quotelev1">&gt; parent: Calling MPI_Comm_spawn to start  1  subprocesses.
</span><br>
<span class="quotelev1">&gt; child 0 of 1:  Receiving   17 from parent
</span><br>
<span class="quotelev1">&gt; child calling COMM_FREE
</span><br>
<span class="quotelev1">&gt; child calling FINALIZE
</span><br>
<span class="quotelev1">&gt; child exiting
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notice there is no message saying &quot;parent returned from Comm_Spawn&quot;  
</span><br>
<span class="quotelev1">&gt; and the parent just sits there and obviously the second set of  
</span><br>
<span class="quotelev1">&gt; processes don't get launched.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quick note on code fixes, my child process now calls MPI_COMM_FREE 
</span><br>
<span class="quotelev1">&gt; (parent,ierr) to free the communicator to the parent before  
</span><br>
<span class="quotelev1">&gt; exiting, in earlier version of 1.1 this crashed the code.  I'm  
</span><br>
<span class="quotelev1">&gt; guessing this is the right thing to do, the Complete Reference book  
</span><br>
<span class="quotelev1">&gt; has an example without it and the Using MPI-2 book has a more  
</span><br>
<span class="quotelev1">&gt; detailed example with this in.  In either case, I get the same  
</span><br>
<span class="quotelev1">&gt; results regardless.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Background from previous discussion on this follows.  It will cost  
</span><br>
<span class="quotelev1">&gt; me less to test new versions of Open MPI handling this than work  
</span><br>
<span class="quotelev1">&gt; around this issue in my project.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 2, 2006, at 1:55 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We expect to have much better support for the entire comm_spawn  
</span><br>
<span class="quotelev2">&gt;&gt; process in the next incarnation of the RTE. I don't expect that to  
</span><br>
<span class="quotelev2">&gt;&gt; be included in a release, however, until 1.1 (Jeff may be able to  
</span><br>
<span class="quotelev2">&gt;&gt; give you an estimate for when that will happen).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jeff et al may be able to give you access to an early non-release  
</span><br>
<span class="quotelev2">&gt;&gt; version sooner, if better comm_spawn support is a critical issue  
</span><br>
<span class="quotelev2">&gt;&gt; and you don't mind being patient with the inevitable bugs in such  
</span><br>
<span class="quotelev2">&gt;&gt; versions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI currently does not fully support a proper disconnection  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of parent and child processes. Thus, if a child dies/aborts, the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; parents will abort as well, despite of calling  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Comm_disconnect. (The new RTE will have better support for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; these operations, Ralph/Jeff can probably give a better estimate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when this will be available.) However, what should not happen is,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that if the child calls MPI_Finalize (so not a violent death but  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a proper shutdown), the parent goes down at the same time. Let me  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; check that as well... Brignone, Sergio wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi everybody, I am trying to run a master/slave set. Because of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the nature of the problem I need to start and stop (kill) some  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; slaves. The problem is that as soon as one of the slave dies,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the master dies also.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;child2.f90&gt;
</span><br>
<span class="quotelev1">&gt; &lt;parent2.f90&gt;
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
<li><strong>Next message:</strong> <a href="1154.php">Michael Kluskens: "Re: [OMPI users] missing mpi_allgather_f90.f90.sh in openmpi-1.2a1r9704"</a>
<li><strong>Previous message:</strong> <a href="1152.php">damien_at_[hidden]: "Re: [OMPI users] which is better: 64x1 or 32x2"</a>
<li><strong>In reply to:</strong> <a href="1142.php">Michael Kluskens: "[OMPI users]  Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0791.php">Brignone, Sergio: "Re: [OMPI users] Spawn and Disconnect"</a>
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
