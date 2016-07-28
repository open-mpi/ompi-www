<?
$subject_val = "Re: [OMPI users] MPI_Waitall hangs and querying";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 21 11:34:57 2012" -->
<!-- isoreceived="20120321153457" -->
<!-- sent="Wed, 21 Mar 2012 11:34:50 -0400" -->
<!-- isosent="20120321153450" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Waitall hangs and querying" -->
<!-- id="F3DD384F-058B-4FD7-AC97-97FAD14153CA_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F00D57A6-3C66-4274-A066-49BCFB8A4237_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Waitall hangs and querying<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-21 11:34:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Previous message:</strong> <a href="18824.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>In reply to:</strong> <a href="18824.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Reply:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
tcp with this code?
<br>
<p>Can we disable the psm mtl and use the verbs emulation on qlogic?  While the qlogic verbs isn't that great it is still much faster in my tests than tcp.
<br>
<p>Is there a particular reason to pick tcp?
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On Mar 21, 2012, at 11:22 AM, Jeffrey Squyres wrote:
<br>
<p><span class="quotelev1">&gt; We unfortunately don't have much visibility into the PSM device (meaning: Open MPI is a thin shim on top of the underlying libpsm, which handles all the MPI point-to-point semantics itself).  So we can't even ask you to run padb to look at the message queues, because we don't have access to them.  :-\
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you try running with TCP and see if that also deadlocks?  If it does, you can at least run padb to have a look at the message queues.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2012, at 11:15 AM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Forgotten stack as promised, it keeps changing at the lower level opal_progress, but never moves above that.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [yccho_at_nyx0817 ~]$ padb -Ormgr=orte --all --stack-trace --tree --all 
</span><br>
<span class="quotelev2">&gt;&gt; Stack trace(s) for thread: 1
</span><br>
<span class="quotelev2">&gt;&gt; -----------------
</span><br>
<span class="quotelev2">&gt;&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev2">&gt;&gt; -----------------
</span><br>
<span class="quotelev2">&gt;&gt; main() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt; Loci::makeQuery(Loci::rule_db const&amp;, Loci::fact_db&amp;, std::basic_string&lt;char, std::char_traits&lt;char&gt;, std::allocator&lt;char&gt; &gt; const&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;   Loci::execute_list::execute(Loci::fact_db&amp;, Loci::sched_db&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;     Loci::execute_list::execute(Loci::fact_db&amp;, Loci::sched_db&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;       Loci::execute_list::execute(Loci::fact_db&amp;, Loci::sched_db&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;         Loci::execute_loop::execute(Loci::fact_db&amp;, Loci::sched_db&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;           Loci::execute_list::execute(Loci::fact_db&amp;, Loci::sched_db&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;             Loci::execute_list::execute(Loci::fact_db&amp;, Loci::sched_db&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;               Loci::execute_loop::execute(Loci::fact_db&amp;, Loci::sched_db&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                 Loci::execute_list::execute(Loci::fact_db&amp;, Loci::sched_db&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                   Loci::execute_rule::execute(Loci::fact_db&amp;, Loci::sched_db&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                     streamUns::HypreSolveUnit::compute(Loci::sequence const&amp;)() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                       hypre_BoomerAMGSetup() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                         hypre_BoomerAMGBuildInterp() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                           -----------------
</span><br>
<span class="quotelev2">&gt;&gt;                           [0,2-3,5-16,18-19,21-24,27-34,36-63] (57 processes)
</span><br>
<span class="quotelev2">&gt;&gt;                           -----------------
</span><br>
<span class="quotelev2">&gt;&gt;                           hypre_ParCSRMatrixExtractBExt() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                             hypre_ParCSRMatrixExtractBExt_Arrays() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                               hypre_ParCSRCommHandleDestroy() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                                 PMPI_Waitall() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                                   -----------------
</span><br>
<span class="quotelev2">&gt;&gt;                                   [0,2-3,5,7-16,18-19,21-24,27-34,36-63] (56 processes)
</span><br>
<span class="quotelev2">&gt;&gt;                                   -----------------
</span><br>
<span class="quotelev2">&gt;&gt;                                   ompi_request_default_wait_all() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                                     opal_progress() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                                   -----------------
</span><br>
<span class="quotelev2">&gt;&gt;                                   [6] (1 processes)
</span><br>
<span class="quotelev2">&gt;&gt;                                   -----------------
</span><br>
<span class="quotelev2">&gt;&gt;                                   ompi_mtl_psm_progress() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                           -----------------
</span><br>
<span class="quotelev2">&gt;&gt;                           [1,4,17,20,25-26,35] (7 processes)
</span><br>
<span class="quotelev2">&gt;&gt;                           -----------------
</span><br>
<span class="quotelev2">&gt;&gt;                           hypre_ParCSRCommHandleDestroy() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                             PMPI_Waitall() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                               ompi_request_default_wait_all() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt;                                 opal_progress() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt; Stack trace(s) for thread: 2
</span><br>
<span class="quotelev2">&gt;&gt; -----------------
</span><br>
<span class="quotelev2">&gt;&gt; [0-63] (64 processes)
</span><br>
<span class="quotelev2">&gt;&gt; -----------------
</span><br>
<span class="quotelev2">&gt;&gt; start_thread() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt; ips_ptl_pollintr() at ptl_rcvthread.c:324
</span><br>
<span class="quotelev2">&gt;&gt;   poll() at ?:?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; CAEN Advanced Computing
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
<span class="quotelev2">&gt;&gt; On Mar 21, 2012, at 11:14 AM, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have a users code that appears to be hanging some times on MPI_Waitall(),  stack trace from padb below.  It is on qlogic IB using the psm mtl.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Without knowing what requests go to which rank, how can I check that this code didn't just get its self into a deadlock?  Is there a way to get a reable list of every ranks posted sends?  And then query an wiating MPI_Waitall() of a running job to get what rends/recvs it is waiting on?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brock Palen
</span><br>
<span class="quotelev3">&gt;&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CAEN Advanced Computing
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
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Previous message:</strong> <a href="18824.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>In reply to:</strong> <a href="18824.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
<li><strong>Reply:</strong> <a href="18826.php">Jeffrey Squyres: "Re: [OMPI users] MPI_Waitall hangs and querying"</a>
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
