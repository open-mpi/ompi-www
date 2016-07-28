<?
$subject_val = "Re: [OMPI users] fork() warning message";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 16 09:13:16 2012" -->
<!-- isoreceived="20120516131316" -->
<!-- sent="Wed, 16 May 2012 07:13:09 -0600" -->
<!-- isosent="20120516131309" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fork() warning message" -->
<!-- id="EABDB778-040C-4552-82F8-346330419FD7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FB39AE9.6020201_at_uea.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] fork() warning message<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-16 09:13:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19296.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="19293.php">Jim Maas: "[OMPI users] fork() warning message"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We've had a few reports of this - it looks like someone made a change to R that can cause problems. Basically, the open fabrics driver for Infiniband doesn't support &quot;fork&quot; operations - it can lead to memory corruption issues if you inadvertently do the &quot;wrong thing&quot; at some point after the fork. Hence, we emit a warning if we see a &quot;fork&quot; operation when Infiniband is being used with the OFED verbs driver.
<br>
<p>You can suppress the warning by setting -mca mpi_warn_on_fork 0 on your cmd line. You will probably be okay, but just be aware you could hit issues.
<br>
<p>On May 16, 2012, at 6:17 AM, Jim Maas wrote:
<br>
<p><span class="quotelev1">&gt; I'm getting the following error with a new version of R, using Rmpi and a few other modules.  I've already had a couple of good suggestions from this group about how to diagnose the cause of the fork error using &quot;strace&quot; but we don't have it on our LSF Linux cluster.  This is my first use of R/mpi/parallel etc so am a bit naive.  Also the code I'm running involves random number generation so will always give slightly different answers.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My normal routine is to :
</span><br>
<span class="quotelev1">&gt;     a) try the code with a small number of iterations on my own Linux/R/open-mpi   pc using 8 cores, then
</span><br>
<span class="quotelev1">&gt;     b) make the job bigger and run it to the cluster.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I only get the warning on the cluster which suggests that it caused by something related to R and/or Rmpi and/or LSF and/or open MPI  ???
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could someone suggest some rigorous R test-code that I could run on my pc,  ok if it takes some time, and then rerun it on cluster to confirm that I get the same results, and thus the warning in inconsequential?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; An MPI process has executed an operation involving a call to the
</span><br>
<span class="quotelev1">&gt; &quot;fork()&quot; system call to create a child process.  Open MPI is currently
</span><br>
<span class="quotelev1">&gt; operating in a condition that could result in memory corruption or
</span><br>
<span class="quotelev1">&gt; other system errors; your MPI job may hang, crash, or produce silent
</span><br>
<span class="quotelev1">&gt; data corruption.  The use of fork() (or system() or other calls that
</span><br>
<span class="quotelev1">&gt; create child processes) is strongly discouraged.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The process that invoked fork was:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Local host:          cn159.private.dns.zone (PID 12792)
</span><br>
<span class="quotelev1">&gt;    MPI_COMM_WORLD rank: 7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are *absolutely sure* that your application will successfully
</span><br>
<span class="quotelev1">&gt; and correctly survive a call to fork(), you may disable this warning
</span><br>
<span class="quotelev1">&gt; by setting the mpi_warn_on_fork MCA parameter to 0.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dr. Jim Maas
</span><br>
<span class="quotelev1">&gt; University of East Anglia
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19295/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19296.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19294.php">Ralph Castain: "Re: [OMPI users] Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)"</a>
<li><strong>In reply to:</strong> <a href="19293.php">Jim Maas: "[OMPI users] fork() warning message"</a>
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
