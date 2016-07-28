<?
$subject_val = "Re: [OMPI users] Mixed Threaded MPI code, how to launch?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 10:42:00 2008" -->
<!-- isoreceived="20081030144200" -->
<!-- sent="Thu, 30 Oct 2008 10:40:56 -0400" -->
<!-- isosent="20081030144056" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mixed Threaded MPI code, how to launch?" -->
<!-- id="F1FFB436-4B72-4A69-BF82-7B8E1BA59F1C_at_umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="7B7C1D7E-9A0B-4F76-8A59-B41810999040_at_lanl.gov" -->
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
<strong>Date:</strong> 2008-10-30 10:40:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7141.php">Eugene Loh: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7139.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7145.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7145.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes I never made it to my mailbox.  Strange, (wink wink, ahh email).
<br>
<p>Thanks for letting me know about it, I have the message now.
<br>
<p>as for using 1.3 prerelease, that is not really an option right now  
<br>
for us.  I think we can get by with 1.2 without threads or do some  
<br>
hacking (ppn=largest number we have  launch with -bynode).
<br>
TIll a 1.3 stable is out.
<br>
<p>Thanks, new features for launching look really neat.
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
<p><p><p>On Oct 30, 2008, at 10:12 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I believe I answered much of this the other day - did it get lost  
</span><br>
<span class="quotelev1">&gt; in the email?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As for using TM with a hostfile - this is an unfortunately bug in  
</span><br>
<span class="quotelev1">&gt; the 1.2 series. You can't - you'll have to move to 1.3 to do so.  
</span><br>
<span class="quotelev1">&gt; When you do, note the changed handling of hostfiles as specified on  
</span><br>
<span class="quotelev1">&gt; the wiki:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan">https://svn.open-mpi.org/trac/ompi/wiki/HostFilePlan</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I take it this is using OMPI 1.2.x? If so, there really isn't a  
</span><br>
<span class="quotelev2">&gt;&gt; way to do this in that series.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If they are using 1.3 (in some pre-release form), then there are  
</span><br>
<span class="quotelev2">&gt;&gt; two options:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. they could use the sequential mapper by specifying &quot;-mca rmaps  
</span><br>
<span class="quotelev2">&gt;&gt; seq&quot;. This mapper takes a hostfile and maps one process to each  
</span><br>
<span class="quotelev2">&gt;&gt; entry, in rank order. So they could specify that we only map to  
</span><br>
<span class="quotelev2">&gt;&gt; half of the actual number of cores on a particular node
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. they could use the rank_file mapper that allows you to specify  
</span><br>
<span class="quotelev2">&gt;&gt; what cores are to be used by what rank. I am less familiar with  
</span><br>
<span class="quotelev2">&gt;&gt; this option and there isn't a lot of documentation on how to use  
</span><br>
<span class="quotelev2">&gt;&gt; it - but you may have to provide a fairly comprehensive map file  
</span><br>
<span class="quotelev2">&gt;&gt; since your nodes are not all the same.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have been asked by some other folks to provide a mapping option  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;--stride x&quot; that would cause the default round-robin mapper to  
</span><br>
<span class="quotelev2">&gt;&gt; step across the specified number of slots. So a stride of 2 would  
</span><br>
<span class="quotelev2">&gt;&gt; automatically cause byslot mapping to increment by 2 instead of  
</span><br>
<span class="quotelev2">&gt;&gt; the current stride of 1. I doubt that will be in 1.3.0, but it  
</span><br>
<span class="quotelev2">&gt;&gt; will show up in later releases.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 30, 2008, at 7:46 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts on this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We are looking writing a script that parses $PBS_NODEFILE to  
</span><br>
<span class="quotelev2">&gt;&gt; create a machinefile and using -machinefile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When we do that though we have to disable tm to avoid an error (- 
</span><br>
<span class="quotelev2">&gt;&gt; mca pls ^tm) this is far from preferable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas to tell mpirun to only launch on half the cpus given to  
</span><br>
<span class="quotelev2">&gt;&gt; it by PBS, but each cpu must have adjacent to it another cpu in  
</span><br>
<span class="quotelev2">&gt;&gt; the same node?
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7141.php">Eugene Loh: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>Previous message:</strong> <a href="7139.php">Brock Palen: "Re: [OMPI users] Equivalent .h files"</a>
<li><strong>In reply to:</strong> <a href="7135.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7145.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
<li><strong>Reply:</strong> <a href="7145.php">Ralph Castain: "Re: [OMPI users] Mixed Threaded MPI code, how to launch?"</a>
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
