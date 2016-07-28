<?
$subject_val = "Re: [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 18 13:31:56 2010" -->
<!-- isoreceived="20101118183156" -->
<!-- sent="Thu, 18 Nov 2010 10:31:40 -0800" -->
<!-- isosent="20101118183140" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages" -->
<!-- id="4CE5710C.8030709_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4CE4F83B.2090508_at_markomanolis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-18 13:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14834.php">HeeJin Kim: "[OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Previous message:</strong> <a href="14832.php">David Zhang: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14822.php">George Markomanolis: "[OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Try lowering the eager threshold more gradually... e.g., 4K, 2K, 1K, 
<br>
512, etc. -- and watch what happens.  I think you will see what you 
<br>
expect, except once you get too small then the value is ignored 
<br>
entirely.  So, the setting just won't work at the extreme value (0) you 
<br>
want.
<br>
<p>Maybe the thing to do is convert your MPI_Send calls to MPI_Ssend 
<br>
calls.  Or, compile in a wrapper that intercepts MPI_Send calls and 
<br>
implements them by calling PMPI_Ssend.
<br>
<p>George Markomanolis wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to disable the eager mode in OpenMPI 1.3.3 and I don't see 
</span><br>
<span class="quotelev1">&gt; a real difference between the timings.
</span><br>
<span class="quotelev1">&gt; I would like to execute a ping (rank 0 sends a message to rank 1) and 
</span><br>
<span class="quotelev1">&gt; to measure the duration of the MPI_Send on rank 0 and the duration of 
</span><br>
<span class="quotelev1">&gt; MPI_Recv on rank 1. I have the following results.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Without changing the eager mode:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bytes    MPI_Send (in msec)    MPI_Recv (in msec)
</span><br>
<span class="quotelev1">&gt; 1            5.8                  52.2
</span><br>
<span class="quotelev1">&gt; 2            5.6                  51.0
</span><br>
<span class="quotelev1">&gt; 4            5.4                  51.1
</span><br>
<span class="quotelev1">&gt; 8            5.6                  51.6
</span><br>
<span class="quotelev1">&gt; 16           5.5                  49.7
</span><br>
<span class="quotelev1">&gt; 32           5.4                  52.1
</span><br>
<span class="quotelev1">&gt; 64           5.3                  53.3
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; with disabled the eager mode:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ompi_info --param btl tcp | grep eager
</span><br>
<span class="quotelev1">&gt; MCA btl: parameter &quot;btl_tcp_eager_limit&quot; (current value: &quot;0&quot;, data 
</span><br>
<span class="quotelev1">&gt; source: environment)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; bytes    MPI_Send (in msec)    MPI_Recv (in msec)
</span><br>
<span class="quotelev1">&gt; 1            5.4                  52.3
</span><br>
<span class="quotelev1">&gt; 2            5.4                  51.0
</span><br>
<span class="quotelev1">&gt; 4            5.4                  52.1
</span><br>
<span class="quotelev1">&gt; 8            5.4                  50.7
</span><br>
<span class="quotelev1">&gt; 16           5.0                  50.2
</span><br>
<span class="quotelev1">&gt; 32           5.1                  50.1
</span><br>
<span class="quotelev1">&gt; 64           5.4                  52.8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I was expecting that with disabled the eager mode the duration 
</span><br>
<span class="quotelev1">&gt; of MPI_Send should be longer. Am I wrong? Is there any option for 
</span><br>
<span class="quotelev1">&gt; making the MPI_Send to behave like blocking command for all the sizes 
</span><br>
<span class="quotelev1">&gt; of the messages?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; George Markomanolis
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
<li><strong>Next message:</strong> <a href="14834.php">HeeJin Kim: "[OMPI users] Infiniband problem, kernel mismatch"</a>
<li><strong>Previous message:</strong> <a href="14832.php">David Zhang: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>In reply to:</strong> <a href="14822.php">George Markomanolis: "[OMPI users] Making MPI_Send to behave as blocking for all the sizes of the messages"</a>
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
