<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 14:59:49 2006" -->
<!-- isoreceived="20060425185949" -->
<!-- sent="Tue, 25 Apr 2006 14:57:35 -0400" -->
<!-- isosent="20060425185735" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="[OMPI users]  Spawn and Disconnect" -->
<!-- id="54A6CA27-1E9D-42B8-827A-8F0FC96264F1_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44073F87.6070807_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-04-25 14:57:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1143.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0758.php">Ralph Castain: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1153.php">Michael Kluskens: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="1153.php">Michael Kluskens: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm running OpenMPI 1.1 (v9704)and when a spawned processes exits the  
<br>
parent does not die (see previous discussions about 1.0.1/1.0.2);  
<br>
however, the next time the parent tries to spawn a process  
<br>
MPI_Comm_spawn does not return.
<br>
<p>My test output below:
<br>
<p>&nbsp;&nbsp;parent:  0  of  1
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
<p>Notice there is no message saying &quot;parent returned from Comm_Spawn&quot;  
<br>
and the parent just sits there and obviously the second set of  
<br>
processes don't get launched.
<br>
<p>Quick note on code fixes, my child process now calls MPI_COMM_FREE 
<br>
(parent,ierr) to free the communicator to the parent before exiting,  
<br>
in earlier version of 1.1 this crashed the code.  I'm guessing this  
<br>
is the right thing to do, the Complete Reference book has an example  
<br>
without it and the Using MPI-2 book has a more detailed example with  
<br>
this in.  In either case, I get the same results regardless.
<br>
<p>Background from previous discussion on this follows.  It will cost me  
<br>
less to test new versions of Open MPI handling this than work around  
<br>
this issue in my project.
<br>
<p>Michael
<br>
<p>On Mar 2, 2006, at 1:55 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We expect to have much better support for the entire comm_spawn  
</span><br>
<span class="quotelev1">&gt; process in the next incarnation of the RTE. I don't expect that to  
</span><br>
<span class="quotelev1">&gt; be included in a release, however, until 1.1 (Jeff may be able to  
</span><br>
<span class="quotelev1">&gt; give you an estimate for when that will happen).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff et al may be able to give you access to an early non-release  
</span><br>
<span class="quotelev1">&gt; version sooner, if better comm_spawn support is a critical issue  
</span><br>
<span class="quotelev1">&gt; and you don't mind being patient with the inevitable bugs in such  
</span><br>
<span class="quotelev1">&gt; versions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI currently does not fully support a proper disconnection  
</span><br>
<span class="quotelev2">&gt;&gt; of parent and child processes. Thus, if a child dies/aborts, the  
</span><br>
<span class="quotelev2">&gt;&gt; parents will abort as well, despite of calling  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_disconnect. (The new RTE will have better support for  
</span><br>
<span class="quotelev2">&gt;&gt; these operations, Ralph/Jeff can probably give a better estimate  
</span><br>
<span class="quotelev2">&gt;&gt; when this will be available.) However, what should not happen is,  
</span><br>
<span class="quotelev2">&gt;&gt; that if the child calls MPI_Finalize (so not a violent death but a  
</span><br>
<span class="quotelev2">&gt;&gt; proper shutdown), the parent goes down at the same time. Let me  
</span><br>
<span class="quotelev2">&gt;&gt; check that as well... Brignone, Sergio wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi everybody, I am trying to run a master/slave set. Because of  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the nature of the problem I need to start and stop (kill) some  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; slaves. The problem is that as soon as one of the slave dies, the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; master dies also.
</span><br>
<p><p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1142/child2.f90">child2.f90</a>
</ul>
<!-- attachment="child2.f90" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1142/parent2.f90">parent2.f90</a>
</ul>
<!-- attachment="parent2.f90" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1143.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/03/0758.php">Ralph Castain: "Re: [OMPI users] Spawn and Disconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1153.php">Michael Kluskens: "Re: [OMPI users] Spawn and Disconnect"</a>
<li><strong>Reply:</strong> <a href="1153.php">Michael Kluskens: "Re: [OMPI users] Spawn and Disconnect"</a>
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
