<?
$subject_val = "Re: [OMPI users] Mixed Threaded MPI code, how to launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 10:12:51 2008" -->
<!-- isoreceived="20081030141251" -->
<!-- sent="Thu, 30 Oct 2008 08:12:42 -0600" -->
<!-- isosent="20081030141242" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Threaded MPI code, how to launch?" -->
<!-- id="7B7C1D7E-9A0B-4F76-8A59-B41810999040_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-30 10:12:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7136.php">Reuti: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7140.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7140.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe I answered much of this the other day - did it get lost in  
<br>
the email?
<br>
<p>As for using TM with a hostfile - this is an unfortunately bug in the  
<br>
1.2 series. You can't - you'll have to move to 1.3 to do so. When you  
<br>
do, note the changed handling of hostfiles as specified on the wiki:
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt; I take it this is using OMPI 1.2.x? If so, there really isn't a way  
</span><br>
<span class="quotelev1">&gt; to do this in that series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If they are using 1.3 (in some pre-release form), then there are two  
</span><br>
<span class="quotelev1">&gt; options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. they could use the sequential mapper by specifying &quot;-mca rmaps  
</span><br>
<span class="quotelev1">&gt; seq&quot;. This mapper takes a hostfile and maps one process to each  
</span><br>
<span class="quotelev1">&gt; entry, in rank order. So they could specify that we only map to half  
</span><br>
<span class="quotelev1">&gt; of the actual number of cores on a particular node
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. they could use the rank_file mapper that allows you to specify  
</span><br>
<span class="quotelev1">&gt; what cores are to be used by what rank. I am less familiar with this  
</span><br>
<span class="quotelev1">&gt; option and there isn't a lot of documentation on how to use it - but  
</span><br>
<span class="quotelev1">&gt; you may have to provide a fairly comprehensive map file since your  
</span><br>
<span class="quotelev1">&gt; nodes are not all the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been asked by some other folks to provide a mapping option &quot;-- 
</span><br>
<span class="quotelev1">&gt; stride x&quot; that would cause the default round-robin mapper to step  
</span><br>
<span class="quotelev1">&gt; across the specified number of slots. So a stride of 2 would  
</span><br>
<span class="quotelev1">&gt; automatically cause byslot mapping to increment by 2 instead of the  
</span><br>
<span class="quotelev1">&gt; current stride of 1. I doubt that will be in 1.3.0, but it will show  
</span><br>
<span class="quotelev1">&gt; up in later releases.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
On Oct 30, 2008, at 7:46 AM, Brock Palen wrote:
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
<span class="quotelev1">&gt; When we do that though we have to disable tm to avoid an error (-mca  
</span><br>
<span class="quotelev1">&gt; pls ^tm) this is far from preferable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any ideas to tell mpirun to only launch on half the cpus given to it  
</span><br>
<span class="quotelev1">&gt; by PBS, but each cpu must have adjacent to it another cpu in the  
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
<li><strong>Next message:</strong> <a href="7136.php">Reuti: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Previous message:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>In reply to:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7140.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7140.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
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
