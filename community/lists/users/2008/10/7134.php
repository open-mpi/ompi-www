<?
$subject_val = "Re: [OMPI users] Mixed Threaded MPI code, how to launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 09:47:54 2008" -->
<!-- isoreceived="20081030134754" -->
<!-- sent="Thu, 30 Oct 2008 09:46:49 -0400" -->
<!-- isosent="20081030134649" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Threaded MPI code, how to launch?" -->
<!-- id="21D2D171-E2F0-4B46-8917-8B7D95A7CEB7_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="92550C1E-FE1D-4EC1-A0A1-5BEAC9983419_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mixed Threaded MPI code, how to launch?<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 09:46:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7094.php">Brock Palen: "[OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7136.php">Reuti: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Any thoughts on this?
<br>
<p>We are looking writing a script that parses $PBS_NODEFILE to create a  
<br>
machinefile and using -machinefile
<br>
<p>When we do that though we have to disable tm to avoid an error (-mca  
<br>
pls ^tm) this is far from preferable.
<br>
<p>Any ideas to tell mpirun to only launch on half the cpus given to it  
<br>
by PBS, but each cpu must have adjacent to it another cpu in the same  
<br>
node?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Oct 25, 2008, at 5:36 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We have a user with a code that uses threaded solvers inside each  
</span><br>
<span class="quotelev1">&gt; MPI rank.  They would like to run two threads per process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question is how to launch this?  The default -byslot puts all  
</span><br>
<span class="quotelev1">&gt; the processes on the first sets of cpus not leaving any cpus for  
</span><br>
<span class="quotelev1">&gt; the second thread for each process.  And half the cpus are wasted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The -bynode option works in theory, if all our nodes had the same  
</span><br>
<span class="quotelev1">&gt; number of core (they do not).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So right now the user did:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=22:ppn=2
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=2
</span><br>
<span class="quotelev1">&gt; mpirun -np 22 app
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which made me aware of the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; How can I basically tell OMPI that a 'slot'  is two cores on the  
</span><br>
<span class="quotelev1">&gt; same machine?    This needs to work inside out torque based  
</span><br>
<span class="quotelev1">&gt; queueing system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry If I was not clear about my goal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brock Palen
</span><br>
<span class="quotelev1">&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev1">&gt; Center for Advanced Computing
</span><br>
<span class="quotelev1">&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev1">&gt; (734)936-1985
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7133.php">Gustavo Seabra: "Re: [OMPI users] Fwd: Problems installing in Cygwin"</a>
<li><strong>In reply to:</strong> <a href="7094.php">Brock Palen: "[OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7136.php">Reuti: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
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
