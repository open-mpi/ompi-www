<?
$subject_val = "Re: [OMPI users] mpi_comm_spawn question";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 10:45:59 2014" -->
<!-- isoreceived="20140703144559" -->
<!-- sent="Thu, 3 Jul 2014 07:45:54 -0700" -->
<!-- isosent="20140703144554" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_comm_spawn question" -->
<!-- id="0D2296A1-8D1D-44A2-B064-274CA1F802B2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="21429.27103.403201.686460_at_ala.cmm.ki.si" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_comm_spawn question<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-03 10:45:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>Previous message:</strong> <a href="24744.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn question"</a>
<li><strong>In reply to:</strong> <a href="24744.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, that has never been supported. The problem is that the embedded mpirun picks up all those MCA params that were provided to the original application process, and gets hopelessly confused. We have tried in the past to figure out a solution, but it has proved difficult to separate those params that were set during launch of the original child from ones you are trying to provide to the embedded mpirun.
<br>
<p>So it remains an &quot;unsupported&quot; operation.
<br>
<p><p>On Jul 3, 2014, at 7:34 AM, Milan Hodoscek &lt;milan_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to run the following setup in fortran without much
</span><br>
<span class="quotelev1">&gt; success:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an MPI program, that uses mpi_comm_spawn which spawns some
</span><br>
<span class="quotelev1">&gt; interface program that communicates with the one that spawned it. This
</span><br>
<span class="quotelev1">&gt; spawned program then prepares some data and uses call system()
</span><br>
<span class="quotelev1">&gt; statement in fortran. Now if the program that is called from system is
</span><br>
<span class="quotelev1">&gt; not mpi program itself everything is running OK. But I want to run the
</span><br>
<span class="quotelev1">&gt; program with something like mpirun -n X ... and then this is a no go.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Different versions of open mpi give different messages before they
</span><br>
<span class="quotelev1">&gt; either die or hang. I googled all the messages but all I get is just
</span><br>
<span class="quotelev1">&gt; links to some openmpi sources, so I would appreciate if someone can
</span><br>
<span class="quotelev1">&gt; help me explain how to run above setup. Given so many MCA options I
</span><br>
<span class="quotelev1">&gt; hope there is one which can run the above setup ??
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The message for 1.6 is the following:
</span><br>
<span class="quotelev1">&gt; ... routed:binomial: connection to lifeline lost (+ PIDs and port numbers)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The message for 1.8.1 is:
</span><br>
<span class="quotelev1">&gt; ... FORKING HNP: orted --hnp --set-sid --report-uri 18 --singleton-died-pipe 19 -mca state_novm_select 1 -mca ess_base_jobid 3378249728
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If this is not trivial to solve problem I can provide a simple test
</span><br>
<span class="quotelev1">&gt; programs (we need 3) that show all of this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Milan Hodoscek                      
</span><br>
<span class="quotelev1">&gt; --------------
</span><br>
<span class="quotelev1">&gt; National Institute of Chemistry              tel:+386-1-476-0278
</span><br>
<span class="quotelev1">&gt; Hajdrihova 19                                fax:+386-1-476-0300        
</span><br>
<span class="quotelev1">&gt; SI-1000 Ljubljana                            e-mail: milan_at_[hidden]      
</span><br>
<span class="quotelev1">&gt; Slovenia                                     web: <a href="http://a.cmm.ki.si">http://a.cmm.ki.si</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24744.php">http://www.open-mpi.org/community/lists/users/2014/07/24744.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
<li><strong>Previous message:</strong> <a href="24744.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn question"</a>
<li><strong>In reply to:</strong> <a href="24744.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24746.php">George Bosilca: "Re: [OMPI users] mpi_comm_spawn question"</a>
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
