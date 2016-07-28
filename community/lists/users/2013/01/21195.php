<?
$subject_val = "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 22 15:50:54 2013" -->
<!-- isoreceived="20130122205054" -->
<!-- sent="Tue, 22 Jan 2013 21:50:49 +0100" -->
<!-- isosent="20130122205049" -->
<!-- name="Ada Mancuso" -->
<!-- email="mancuso.ada_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR" -->
<!-- id="CAEQVjDOH2hXxrHxXoBZeuN+kmX0zL+oXiFkDCmZ7Ow=+tNgXxA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E2313ABF-AB31-4910-883B-4AAB9899BDED_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR<br>
<strong>From:</strong> Ada Mancuso (<em>mancuso.ada_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-22 15:50:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21196.php">Roland Schulz: "[OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="21194.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21194.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21205.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks a lot I will try it.
<br>
Il giorno 22/gen/2013 21:49, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; ha scritto:
<br>
<p><span class="quotelev1">&gt; Ouch - no, you'd have to take it from the developer's trunk, either via
</span><br>
<span class="quotelev1">&gt; svn checkout or the nightly developer's snapshot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 22, 2013, at 12:35 PM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My problem is that I have to use openmpi 1.7 rc5 because I'm using the
</span><br>
<span class="quotelev1">&gt; Java binding mpijava... Is it present in the latest snapshot you told me?
</span><br>
<span class="quotelev1">&gt; If so where can I find it?
</span><br>
<span class="quotelev1">&gt; Thanks a lot
</span><br>
<span class="quotelev1">&gt; Ada
</span><br>
<span class="quotelev1">&gt; Il giorno 22/gen/2013 21:03, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; ha
</span><br>
<span class="quotelev1">&gt; scritto:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It seems to be working fine for me with the latest 1.7 tarball (not rc5 -
</span><br>
<span class="quotelev2">&gt;&gt; I didn't test that one). Could be there was a problem that has since been
</span><br>
<span class="quotelev2">&gt;&gt; fixed. We are getting ready to release an updated rc, so you might want to
</span><br>
<span class="quotelev2">&gt;&gt; try it (or use the latest nightly 1.7 snapshot).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 22, 2013, at 9:57 AM, Ada Mancuso &lt;mancuso.ada_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run my mpi program using open mpi 1.7 rc5 on 4 machines
</span><br>
<span class="quotelev2">&gt;&gt; using the command:
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np4 -hostfile file a.out
</span><br>
<span class="quotelev2">&gt;&gt; but i get the following message errors:
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process whose
</span><br>
<span class="quotelev2">&gt;&gt; contact information is unknown in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../../ompi/orte/mca/rml/oob/rml_oob_send.c
</span><br>
<span class="quotelev2">&gt;&gt; attempted to send to [[21341,0],2]: tag 15
</span><br>
<span class="quotelev2">&gt;&gt; ORTE_ERROR_LOG: A message is attempting to be sent to a process whose
</span><br>
<span class="quotelev2">&gt;&gt; contact information is unknown in file
</span><br>
<span class="quotelev2">&gt;&gt; ../../../../ompi/orte/mca/grpcomm/base/grpcomm_base_xcast.c
</span><br>
<span class="quotelev2">&gt;&gt; The file etc/hosts is composed by ipaddress hostname, I have exchange ssh
</span><br>
<span class="quotelev2">&gt;&gt; keys among the machines and ssh login works without requiring
</span><br>
<span class="quotelev2">&gt;&gt; authentication password. Surprisingly if I try to run my program with at
</span><br>
<span class="quotelev2">&gt;&gt; most 2 hosts, and so the file hosts contains only two hosts, it works but
</span><br>
<span class="quotelev2">&gt;&gt; if i try to run my program with more than two hosts i have this error; mpi
</span><br>
<span class="quotelev2">&gt;&gt; works well on each machine and I also tried to run my program with
</span><br>
<span class="quotelev2">&gt;&gt; different couple of machines in order to be sure that no machine could be
</span><br>
<span class="quotelev2">&gt;&gt; the problem.
</span><br>
<span class="quotelev2">&gt;&gt; Can you help me please?
</span><br>
<span class="quotelev2">&gt;&gt; Ada
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-21195/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21196.php">Roland Schulz: "[OMPI users] MPI_THREAD_FUNNELED and enable-mpi-thread-multiple"</a>
<li><strong>Previous message:</strong> <a href="21194.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<li><strong>In reply to:</strong> <a href="21194.php">Ralph Castain: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21205.php">Ada Mancuso: "Re: [OMPI users] OPENMPI_ORTE_LOG_ERROR"</a>
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
