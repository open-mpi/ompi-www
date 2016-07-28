<?
$subject_val = "Re: [OMPI users] Mixed Threaded MPI code, how to launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 10:27:46 2008" -->
<!-- isoreceived="20081030142746" -->
<!-- sent="Thu, 30 Oct 2008 08:27:39 -0600" -->
<!-- isosent="20081030142739" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Threaded MPI code, how to launch?" -->
<!-- id="ED5B6522-D117-4377-9859-ADBC187E599B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F3BEEE33-E63B-44D5-8207-69EBD6FA421D_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 10:27:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7136.php">Reuti: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7136.php">Reuti: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 30, 2008, at 8:13 AM, Reuti wrote:
<br>
<p><span class="quotelev1">&gt; Am 30.10.2008 um 14:46 schrieb Brock Palen:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are looking writing a script that parses $PBS_NODEFILE to create  
</span><br>
<span class="quotelev2">&gt;&gt; a machinefile and using -machinefile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When we do that though we have to disable tm to avoid an error (- 
</span><br>
<span class="quotelev2">&gt;&gt; mca pls ^tm) this is far from preferable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What about redefining the variable $PBS_NODEFILE pointing to an  
</span><br>
<span class="quotelev1">&gt; adjusted copy of the original file? With this, you could even use  
</span><br>
<span class="quotelev1">&gt; the TM startup of the nodes, as mpirun would use the adjusted file  
</span><br>
<span class="quotelev1">&gt; AFAICS.
</span><br>
<p>Probably won't work. The problem is that TM doesn't launch based on  
<br>
node name - it launches based on a TM-defined &quot;launchid&quot;. This is  
<br>
computed based on the location of the slot in the list in the  
<br>
PBS_NODEFILE.
<br>
<p>So if you mess with the nodefile, there is no guarantee that the  
<br>
launchid we compute when reading the file will match what Torque  
<br>
thinks it assigned. This has been fixed in 1.3, but remains a  
<br>
constraint in 1.2
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you know, that you request always 2 cores per node, the startup  
</span><br>
<span class="quotelev1">&gt; of any threads is up to you on your own. As you got two cores, it's  
</span><br>
<span class="quotelev1">&gt; safe.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas to tell mpirun to only launch on half the cpus given to  
</span><br>
<span class="quotelev2">&gt;&gt; it by PBS, but each cpu must have adjacent to it another cpu in the  
</span><br>
<span class="quotelev2">&gt;&gt; same node?
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
<span class="quotelev2">&gt;&gt; On Oct 25, 2008, at 5:36 PM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We have a user with a code that uses threaded solvers inside each  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI rank.  They would like to run two threads per process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The question is how to launch this?  The default -byslot puts all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the processes on the first sets of cpus not leaving any cpus for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the second thread for each process.  And half the cpus are wasted.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The -bynode option works in theory, if all our nodes had the same  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; number of core (they do not).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So right now the user did:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l nodes=22:ppn=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; export OMP_NUM_THREADS=2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 22 app
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which made me aware of the problem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; How can I basically tell OMPI that a 'slot'  is two cores on the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same machine?    This needs to work inside out torque based  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; queueing system.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sorry If I was not clear about my goal.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="7138.php">Benjamin Lamptey: "[OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7136.php">Reuti: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7136.php">Reuti: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
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
