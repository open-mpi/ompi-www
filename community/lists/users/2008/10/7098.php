<?
$subject_val = "Re: [OMPI users] Mixed Threaded MPI code, how to launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 27 09:10:07 2008" -->
<!-- isoreceived="20081027131007" -->
<!-- sent="Mon, 27 Oct 2008 07:09:58 -0600" -->
<!-- isosent="20081027130958" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Threaded MPI code, how to launch?" -->
<!-- id="DD4CC1B3-9799-41BD-B85C-58D16417B37A_at_lanl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-27 09:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7099.php">Ralph Castain: "Re: [OMPI users] job abort on MPI task exit"</a>
<li><strong>Previous message:</strong> <a href="7097.php">David Singleton: "[OMPI users] job abort on MPI task exit"</a>
<li><strong>In reply to:</strong> <a href="7094.php">Brock Palen: "[OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I take it this is using OMPI 1.2.x? If so, there really isn't a way to  
<br>
do this in that series.
<br>
<p>If they are using 1.3 (in some pre-release form), then there are two  
<br>
options:
<br>
<p>1. they could use the sequential mapper by specifying &quot;-mca rmaps  
<br>
seq&quot;. This mapper takes a hostfile and maps one process to each entry,  
<br>
in rank order. So they could specify that we only map to half of the  
<br>
actual number of cores on a particular node
<br>
<p>2. they could use the rank_file mapper that allows you to specify what  
<br>
cores are to be used by what rank. I am less familiar with this option  
<br>
and there isn't a lot of documentation on how to use it - but you may  
<br>
have to provide a fairly comprehensive map file since your nodes are  
<br>
not all the same.
<br>
<p>I have been asked by some other folks to provide a mapping option &quot;-- 
<br>
stride x&quot; that would cause the default round-robin mapper to step  
<br>
across the specified number of slots. So a stride of 2 would  
<br>
automatically cause byslot mapping to increment by 2 instead of the  
<br>
current stride of 1. I doubt that will be in 1.3.0, but it will show  
<br>
up in later releases.
<br>
<p>Ralph
<br>
<p><p>On Oct 25, 2008, at 3:36 PM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; We have a user with a code that uses threaded solvers inside each  
</span><br>
<span class="quotelev1">&gt; MPI rank.  They would like to run two threads per process.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The question is how to launch this?  The default -byslot puts all  
</span><br>
<span class="quotelev1">&gt; the processes on the first sets of cpus not leaving any cpus for the  
</span><br>
<span class="quotelev1">&gt; second thread for each process.  And half the cpus are wasted.
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
<span class="quotelev1">&gt; same machine?    This needs to work inside out torque based queueing  
</span><br>
<span class="quotelev1">&gt; system.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7099.php">Ralph Castain: "Re: [OMPI users] job abort on MPI task exit"</a>
<li><strong>Previous message:</strong> <a href="7097.php">David Singleton: "[OMPI users] job abort on MPI task exit"</a>
<li><strong>In reply to:</strong> <a href="7094.php">Brock Palen: "[OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7134.php">Brock Palen: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
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
