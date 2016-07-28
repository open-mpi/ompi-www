<?
$subject_val = "Re: [OMPI users] MPI jobs ending up in one node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 13 09:47:22 2009" -->
<!-- isoreceived="20090313134722" -->
<!-- sent="Fri, 13 Mar 2009 07:47:11 -0600" -->
<!-- isosent="20090313134711" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI jobs ending up in one node" -->
<!-- id="958D499D-A65C-4A05-8D7D-71CC7FEBC121_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="804dabb00903130300y4d17ee25mf3047995ab21c30_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI jobs ending up in one node<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-13 09:47:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8424.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8419.php">Peter Teoh: "[OMPI users] MPI jobs ending up in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8439.php">Peter Teoh: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Reply:</strong> <a href="8439.php">Peter Teoh: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm...your comments don't sound like anything relating to Open MPI.  
<br>
Are you sure you are not using some other MPI?
<br>
<p>Our mpiexec isn't a script, for example, nor do we have anything named  
<br>
I_MPI_PIN_PROCESSOR_LIST in our code.
<br>
<p>:-)
<br>
<p>On Mar 13, 2009, at 4:00 AM, Peter Teoh wrote:
<br>
<p><span class="quotelev1">&gt; I saw the following problem posed somewhere - can anyone shed some
</span><br>
<span class="quotelev1">&gt; light?   Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a cluster of 8-sock quad core systems running Redhat 5.2. It
</span><br>
<span class="quotelev1">&gt; seems that whenever I try to run multiple MPI jobs to a single node
</span><br>
<span class="quotelev1">&gt; all the jobs end up running on the same processors. For example, if I
</span><br>
<span class="quotelev1">&gt; were to submit 4 8-way jobs to a single box they all end up in CPUs 0
</span><br>
<span class="quotelev1">&gt; to 7, leaving 8 to 31 idle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I then tried all sorts of I_MPI_PIN_PROCESSOR_LIST combinations but
</span><br>
<span class="quotelev1">&gt; short of explicitly listing out the processors at each run, they all
</span><br>
<span class="quotelev1">&gt; end up still hanging on to CPUs 0-7. Browsing through the mpiexec
</span><br>
<span class="quotelev1">&gt; script, I realise that it is doing a taskset on each run.
</span><br>
<span class="quotelev1">&gt; As my jobs are all submitted through a scheduler (PBS in this case) I
</span><br>
<span class="quotelev1">&gt; cannot possibly know at job submission time which CPUs are not used.
</span><br>
<span class="quotelev1">&gt; So is there a simple way to tell mpiexec to set the taskset affinity
</span><br>
<span class="quotelev1">&gt; correctly at each run so that it will choose only the idle processors?
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Peter Teoh
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
<li><strong>Next message:</strong> <a href="8426.php">Amos Leffler: "Re: [OMPI users] Installation Problems with Openmpi-1.2.9"</a>
<li><strong>Previous message:</strong> <a href="8424.php">Prentice Bisbal: "Re: [OMPI users] PGI 8.0-4 doesn't like ompi/mca/op/op.h"</a>
<li><strong>In reply to:</strong> <a href="8419.php">Peter Teoh: "[OMPI users] MPI jobs ending up in one node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8439.php">Peter Teoh: "Re: [OMPI users] MPI jobs ending up in one node"</a>
<li><strong>Reply:</strong> <a href="8439.php">Peter Teoh: "Re: [OMPI users] MPI jobs ending up in one node"</a>
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
