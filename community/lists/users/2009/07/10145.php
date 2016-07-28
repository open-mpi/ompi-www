<?
$subject_val = "Re: [OMPI users] strange IMB runs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 30 11:37:09 2009" -->
<!-- isoreceived="20090730153709" -->
<!-- sent="Thu, 30 Jul 2009 11:37:04 -0400" -->
<!-- isosent="20090730153704" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] strange IMB runs" -->
<!-- id="e75d22a90907300837h387d2b4cpfd9a2a9e5435cf6_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D76EC769-77F5-400A-9F1A-CB35B847043C_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] strange IMB runs<br>
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-30 11:37:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10144.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Jul 30, 2009 at 10:08 AM, George Bosilca&lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; The leave pinned will not help in this context. It can only help for devices
</span><br>
<span class="quotelev1">&gt; capable of real RMA operations and that require pinned memory, which
</span><br>
<span class="quotelev1">&gt; unfortunately is not the case for TCP. What is [really] strange about your
</span><br>
<span class="quotelev1">&gt; results is that you get a 4 times better bandwidth over TCP than over shared
</span><br>
<span class="quotelev1">&gt; memory. Over TCP there are 2 extra memory copies (compared with sm) plus a
</span><br>
<span class="quotelev1">&gt; bunch of syscalls, so there is absolutely no reason to get better
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The Open MPI version is something you compiled or it came installed with the
</span><br>
<span class="quotelev1">&gt; OS? If you compiled it can you please provide us the configure line?
</span><br>
<p>OpenMPI was compiled from source v1.3 with only a --prefix line, no
<br>
other options.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10146.php">Adams, Brian M: "Re: [OMPI users] Multiple mpiexec's within a job (schedule within a scheduled machinefile/job allocation)"</a>
<li><strong>Previous message:</strong> <a href="10144.php">Ricardo Fonseca: "Re: [OMPI users] OMPI users] MPI_IN_PLACE in Fortran withMPI_REDUCE	/ MPI_ALLREDUCE"</a>
<li><strong>In reply to:</strong> <a href="10143.php">George Bosilca: "Re: [OMPI users] strange IMB runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10154.php">Michael Di Domenico: "Re: [OMPI users] strange IMB runs"</a>
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
