<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 11:22:19 2006" -->
<!-- isoreceived="20060119162219" -->
<!-- sent="Thu, 19 Jan 2006 11:22:02 -0500" -->
<!-- isosent="20060119162202" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re:  while-loop around opal_condition_wait" -->
<!-- id="979C8604-5F35-4128-A203-C6C1BFD30419_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200601191712.08964.Keller_at_hlrs.de" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 11:22:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer,
<br>
<p>I was hopping my patch solve the problem completely ... look like  
<br>
it's not the case :( How exactly you get the dead-lock in the  
<br>
mpi_test_suite ? Which configure options ? Only --enable-progress- 
<br>
threads ?
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 19, 2006, at 11:12 AM, Rainer Keller wrote:
<br>
<p><span class="quotelev1">&gt; Hello dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George's patch svn:open-mpi r8741 makes the dead-lock, experienced  
</span><br>
<span class="quotelev1">&gt; on a
</span><br>
<span class="quotelev1">&gt; threaded build without this patch the on the mpi_test_suite  
</span><br>
<span class="quotelev1">&gt; sometimes go away
</span><br>
<span class="quotelev1">&gt; (compiled with --enable-progress-threads)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Previously, we would hang here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; rusraink_at_pcglap12:~/WORK/OPENMPI/ompi-tests/mpi_test_suite/COMPILE- 
</span><br>
<span class="quotelev1">&gt; clean-threads&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./mpi_test_suite -r FULL -c MPI_COMM_WORLD -d MPI_INT
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P2P tests Ring (3/31), comm MPI_COMM_WORLD (1/1), type MPI_INT (6/1)
</span><br>
<span class="quotelev1">&gt; [... Tests snipped ...]
</span><br>
<span class="quotelev1">&gt; P2P tests Alltoall with MPI_Probe (MPI_ANY_SOURCE) (20/31), comm
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD (1/1), type MPI_INT (6/1)
</span><br>
<span class="quotelev1">&gt; Collective tests Bcast (23/31), comm MPI_COMM_WORLD (1/1), type  
</span><br>
<span class="quotelev1">&gt; MPI_INT (6/1)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; Here we used to always hang.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, we get through most of the times (9 out of 10).
</span><br>
<span class="quotelev1">&gt; This is all without the below patch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CU,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday 18 January 2006 22:39, Brian Barrett wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Occurrences:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ompi/class/ompi_free_list.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is ok as is, because the loop protecting against a spurious
</span><br>
<span class="quotelev2">&gt;&gt; wakeup is already there.  If two threads are waiting, both are woken
</span><br>
<span class="quotelev2">&gt;&gt; up, and there's only one request (or somehow, no requests), then
</span><br>
<span class="quotelev2">&gt;&gt; they'll try to remove from the list, get NULL, and continue through
</span><br>
<span class="quotelev2">&gt;&gt; the bigger while() loop.  So that works as expected.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       opal/class/opal_free_list.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Same reasoning as ompi_free_list.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       ompi/request/req_wait.c          /* Two Occurences: not a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                must, but... */
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe these are both correct.  The first is in a larger do { ...}
</span><br>
<span class="quotelev2">&gt;&gt; while loop that will handle the case of a wakeup with no requests
</span><br>
<span class="quotelev2">&gt;&gt; ready.  The second is in a tight while() loop already, so we're ok
</span><br>
<span class="quotelev2">&gt;&gt; there.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       orte/mca/gpr/proxy/gpr_proxy_compound_cmd.c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This one I'd like Ralph to look at, because I&quot;m not sure I understand
</span><br>
<span class="quotelev2">&gt;&gt; the logic completely.  It looks like this is potentially a problem.
</span><br>
<span class="quotelev2">&gt;&gt; Only one thread will be woken up at a time, since the mutex has to be
</span><br>
<span class="quotelev2">&gt;&gt; re-acquired.  So the question becomes, will anyone give up the mutex
</span><br>
<span class="quotelev2">&gt;&gt; with component.compound_cmd_mode left set to true, and I think the
</span><br>
<span class="quotelev2">&gt;&gt; answer is yes.  This looks like it could be a possible bug if people
</span><br>
<span class="quotelev2">&gt;&gt; are using the compound command code when multiple threads are
</span><br>
<span class="quotelev2">&gt;&gt; active.  Thankfully, I don't think this happens very often.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       orte/mca/iof/base/iof_base_flush.c:108
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like it's wrapped in a larger while loop and is safe from
</span><br>
<span class="quotelev2">&gt;&gt; any restart wait conditions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       orte/mca/pls/rsh/pls_rsh_module.c:892
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This could be a bit of a problem, but I don't think spurious wake-ups
</span><br>
<span class="quotelev2">&gt;&gt; will cause any real problems.  The worst case is that possibly we end
</span><br>
<span class="quotelev2">&gt;&gt; up trying to concurrently start more processes than we really
</span><br>
<span class="quotelev2">&gt;&gt; intended.  But Tim might have more insight than I do.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just my $0.02
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Brian
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt;   High Performance Computing     Tel: ++49 (0)711-685 5858
</span><br>
<span class="quotelev1">&gt;     Center Stuttgart (HLRS)        Fax: ++49 (0)711-685 5832
</span><br>
<span class="quotelev1">&gt;   POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
</span><br>
<span class="quotelev1">&gt;   ACTUAL:Allmandring 30, R. O.030      AIM:rusraink
</span><br>
<span class="quotelev1">&gt;   70550 Stuttgart
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>&quot;Half of what I say is meaningless; but I say it so that the other  
<br>
half may reach you&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Kahlil Gibran
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0695.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0697.php">Rainer Keller: "Re:  while-loop around opal_condition_wait"</a>
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
