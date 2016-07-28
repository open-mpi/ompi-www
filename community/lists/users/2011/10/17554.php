<?
$subject_val = "Re: [OMPI users] remote spawned process hangs at MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 15 15:42:50 2011" -->
<!-- isoreceived="20111015194250" -->
<!-- sent="Sat, 15 Oct 2011 13:42:41 -0600" -->
<!-- isosent="20111015194241" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] remote spawned process hangs at MPI_Init" -->
<!-- id="89BF3AE2-0699-48EB-A588-A431E58B5408_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4E99D00C.9080100_at_otter-rsch.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] remote spawned process hangs at MPI_Init<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-10-15 15:42:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17555.php">Shiqing Fan: "Re: [OMPI users] Build error using Cygwin on Winxp"</a>
<li><strong>Previous message:</strong> <a href="17553.php">dave fournier: "[OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17553.php">dave fournier: "[OMPI users] remote spawned process hangs at MPI_Init"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 15, 2011, at 12:25 PM, dave fournier wrote:
<br>
<p><span class="quotelev1">&gt; OK, I found that if I inovke the master process
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; with  mpirun as in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       mpirun ./orange -master
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then the remote process is successful in the  MPI_Init call.
</span><br>
<span class="quotelev1">&gt; I would like to avoid using mpirun if possible.  It seems to
</span><br>
<span class="quotelev1">&gt; be responsible for setting up communication between the
</span><br>
<span class="quotelev1">&gt; two machines in some way. Can I do that programatically
</span><br>
<span class="quotelev1">&gt; at run time.
</span><br>
<p><p>No - you have to use mpirun so the two procs can wireup properly.
<br>
<p><p><span class="quotelev1">&gt; _______________________________________________
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
<li><strong>Next message:</strong> <a href="17555.php">Shiqing Fan: "Re: [OMPI users] Build error using Cygwin on Winxp"</a>
<li><strong>Previous message:</strong> <a href="17553.php">dave fournier: "[OMPI users] remote spawned process hangs at MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="17553.php">dave fournier: "[OMPI users] remote spawned process hangs at MPI_Init"</a>
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
