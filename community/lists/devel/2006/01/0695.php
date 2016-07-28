<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 11:14:01 2006" -->
<!-- isoreceived="20060119161401" -->
<!-- sent="Thu, 19 Jan 2006 17:12:08 +0100" -->
<!-- isosent="20060119161208" -->
<!-- name="Rainer Keller" -->
<!-- email="Keller_at_[hidden]" -->
<!-- subject="Re:  while-loop around opal_condition_wait" -->
<!-- id="200601191712.08964.Keller_at_hlrs.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="EC489EA3-B456-46F3-99C2-265AD891BF7E_at_open-mpi.org" -->
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
<strong>From:</strong> Rainer Keller (<em>Keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 11:12:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0694.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>In reply to:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello dear all,
<br>
<p>George's patch svn:open-mpi r8741 makes the dead-lock, experienced on a 
<br>
threaded build without this patch the on the mpi_test_suite sometimes go away 
<br>
(compiled with --enable-progress-threads)
<br>
<p>Previously, we would hang here:
<br>
<p>rusraink_at_pcglap12:~/WORK/OPENMPI/ompi-tests/mpi_test_suite/COMPILE-clean-threads&gt; 
<br>
mpirun -np 2 ./mpi_test_suite -r FULL -c MPI_COMM_WORLD -d MPI_INT
<br>
<p>P2P tests Ring (3/31), comm MPI_COMM_WORLD (1/1), type MPI_INT (6/1)
<br>
[... Tests snipped ...]
<br>
P2P tests Alltoall with MPI_Probe (MPI_ANY_SOURCE) (20/31), comm 
<br>
MPI_COMM_WORLD (1/1), type MPI_INT (6/1)
<br>
Collective tests Bcast (23/31), comm MPI_COMM_WORLD (1/1), type MPI_INT (6/1)
<br>
...
<br>
Here we used to always hang.
<br>
<p>Now, we get through most of the times (9 out of 10).
<br>
This is all without the below patch.
<br>
<p>CU,
<br>
Rainer
<br>
<p>On Wednesday 18 January 2006 22:39, Brian Barrett wrote:
<br>
<span class="quotelev2">&gt; &gt; Occurrences:
</span><br>
<span class="quotelev2">&gt; &gt;       ompi/class/ompi_free_list.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is ok as is, because the loop protecting against a spurious
</span><br>
<span class="quotelev1">&gt; wakeup is already there.  If two threads are waiting, both are woken
</span><br>
<span class="quotelev1">&gt; up, and there's only one request (or somehow, no requests), then
</span><br>
<span class="quotelev1">&gt; they'll try to remove from the list, get NULL, and continue through
</span><br>
<span class="quotelev1">&gt; the bigger while() loop.  So that works as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;       opal/class/opal_free_list.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Same reasoning as ompi_free_list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;       ompi/request/req_wait.c          /* Two Occurences: not a
</span><br>
<span class="quotelev2">&gt; &gt;                must, but... */
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe these are both correct.  The first is in a larger do { ...}
</span><br>
<span class="quotelev1">&gt; while loop that will handle the case of a wakeup with no requests
</span><br>
<span class="quotelev1">&gt; ready.  The second is in a tight while() loop already, so we're ok
</span><br>
<span class="quotelev1">&gt; there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;       orte/mca/gpr/proxy/gpr_proxy_compound_cmd.c
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This one I'd like Ralph to look at, because I&quot;m not sure I understand
</span><br>
<span class="quotelev1">&gt; the logic completely.  It looks like this is potentially a problem.
</span><br>
<span class="quotelev1">&gt; Only one thread will be woken up at a time, since the mutex has to be
</span><br>
<span class="quotelev1">&gt; re-acquired.  So the question becomes, will anyone give up the mutex
</span><br>
<span class="quotelev1">&gt; with component.compound_cmd_mode left set to true, and I think the
</span><br>
<span class="quotelev1">&gt; answer is yes.  This looks like it could be a possible bug if people
</span><br>
<span class="quotelev1">&gt; are using the compound command code when multiple threads are
</span><br>
<span class="quotelev1">&gt; active.  Thankfully, I don't think this happens very often.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;       orte/mca/iof/base/iof_base_flush.c:108
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks like it's wrapped in a larger while loop and is safe from
</span><br>
<span class="quotelev1">&gt; any restart wait conditions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;       orte/mca/pls/rsh/pls_rsh_module.c:892
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This could be a bit of a problem, but I don't think spurious wake-ups
</span><br>
<span class="quotelev1">&gt; will cause any real problems.  The worst case is that possibly we end
</span><br>
<span class="quotelev1">&gt; up trying to concurrently start more processes than we really
</span><br>
<span class="quotelev1">&gt; intended.  But Tim might have more insight than I do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just my $0.02
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><pre>
-- 
---------------------------------------------------------------------
Dipl.-Inf. Rainer Keller       email: keller_at_[hidden]
  High Performance Computing     Tel: ++49 (0)711-685 5858
    Center Stuttgart (HLRS)        Fax: ++49 (0)711-685 5832
  POSTAL:Nobelstrasse 19             <a href="http://www.hlrs.de/people/keller">http://www.hlrs.de/people/keller</a>
  ACTUAL:Allmandring 30, R. O.030      AIM:rusraink
  70550 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0694.php">Brian Barrett: "Re:  posix threads"</a>
<li><strong>In reply to:</strong> <a href="0689.php">Brian Barrett: "Re:  while-loop around opal_condition_wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Reply:</strong> <a href="0696.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
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
