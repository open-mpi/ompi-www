<?
$subject_val = "Re: [OMPI users] Mixed Threaded MPI code, how to launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 10:13:12 2008" -->
<!-- isoreceived="20081030141312" -->
<!-- sent="Thu, 30 Oct 2008 15:13:04 +0100" -->
<!-- isosent="20081030141304" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Threaded MPI code, how to launch?" -->
<!-- id="F3BEEE33-E63B-44D5-8207-69EBD6FA421D_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="21D2D171-E2F0-4B46-8917-8B7D95A7CEB7_at_umich.edu" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 10:13:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7137.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7137.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7137.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 30.10.2008 um 14:46 schrieb Brock Palen:
<br>
<p><span class="quotelev1">&gt; Any thoughts on this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We are looking writing a script that parses $PBS_NODEFILE to create  
</span><br>
<span class="quotelev1">&gt; a machinefile and using -machinefile
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When we do that though we have to disable tm to avoid an error (- 
</span><br>
<span class="quotelev1">&gt; mca pls ^tm) this is far from preferable.
</span><br>
<p>What about redefining the variable $PBS_NODEFILE pointing to an  
<br>
adjusted copy of the original file? With this, you could even use the  
<br>
TM startup of the nodes, as mpirun would use the adjusted file AFAICS.
<br>
<p>When you know, that you request always 2 cores per node, the startup  
<br>
of any threads is up to you on your own. As you got two cores, it's  
<br>
safe.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Any ideas to tell mpirun to only launch on half the cpus given to  
</span><br>
<span class="quotelev1">&gt; it by PBS, but each cpu must have adjacent to it another cpu in the  
</span><br>
<span class="quotelev1">&gt; same node?
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
<span class="quotelev1">&gt; On Oct 25, 2008, at 5:36 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We have a user with a code that uses threaded solvers inside each  
</span><br>
<span class="quotelev2">&gt;&gt; MPI rank.  They would like to run two threads per process.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The question is how to launch this?  The default -byslot puts all  
</span><br>
<span class="quotelev2">&gt;&gt; the processes on the first sets of cpus not leaving any cpus for  
</span><br>
<span class="quotelev2">&gt;&gt; the second thread for each process.  And half the cpus are wasted.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The -bynode option works in theory, if all our nodes had the same  
</span><br>
<span class="quotelev2">&gt;&gt; number of core (they do not).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So right now the user did:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=22:ppn=2
</span><br>
<span class="quotelev2">&gt;&gt; export OMP_NUM_THREADS=2
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 22 app
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which made me aware of the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How can I basically tell OMPI that a 'slot'  is two cores on the  
</span><br>
<span class="quotelev2">&gt;&gt; same machine?    This needs to work inside out torque based  
</span><br>
<span class="quotelev2">&gt;&gt; queueing system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry If I was not clear about my goal.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7137.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7137.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7137.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
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
