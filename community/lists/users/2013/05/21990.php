<?
$subject_val = "Re: [OMPI users] Question on MPMD runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 30 10:18:10 2013" -->
<!-- isoreceived="20130530141810" -->
<!-- sent="Thu, 30 May 2013 07:18:03 -0700" -->
<!-- isosent="20130530141803" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question on MPMD runs" -->
<!-- id="1C4A4E9F-3F77-4A96-A3AA-0A1F288179B9_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8D58A4B5E6148C419C6AD6334962375D60C77B1B_at_UWMBX01.uw.lu.se" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question on MPMD runs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-30 10:18:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>Previous message:</strong> <a href="21989.php">Victor Vysotskiy: "[OMPI users] Question on MPMD runs"</a>
<li><strong>In reply to:</strong> <a href="21989.php">Victor Vysotskiy: "[OMPI users] Question on MPMD runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is such an option in the 1.7 series and on the trunk, but I don't see it in v1.6.
<br>
<p>-mca orte_abort_non_zero_exit 0
<br>
<p><p>On May 30, 2013, at 3:40 AM, Victor Vysotskiy &lt;Victor.Vysotskiy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear OpenMPI Developers and Users,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have general question on signal trapping/handling within mpiexec/mpirun.  Let me assume that I have 2 cores and I start two different (independent) prog1 and prog2 programs in parallel  via the mpirun/mpiexec strartup command:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -n 1 prog1 : -n 1 prog2 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What happens if one of the programs just is abnormally crashed/terminated while the second one is still running normally? Is it correct observation that in such case the OpenMPI  immediately starts a cleanup process and automatically terminates all spawned/running jobs? If it is like that, is there any way to force mpiexec/mpirun to don't cleanup all processes on error and wait until all spawned processes either successfully complete or abnormally terminate their execution?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Victor.
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
<li><strong>Next message:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
<li><strong>Previous message:</strong> <a href="21989.php">Victor Vysotskiy: "[OMPI users] Question on MPMD runs"</a>
<li><strong>In reply to:</strong> <a href="21989.php">Victor Vysotskiy: "[OMPI users] Question on MPMD runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21991.php">Victor Vysotskiy: "Re: [OMPI users] Question on MPMD runs"</a>
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
