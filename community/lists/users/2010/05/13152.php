<?
$subject_val = "Re: [OMPI users] fork / exec from an MPI process";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 24 21:26:31 2010" -->
<!-- isoreceived="20100525012631" -->
<!-- sent="Mon, 24 May 2010 19:26:22 -0600" -->
<!-- isosent="20100525012622" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] fork / exec from an MPI process" -->
<!-- id="479FADD9-0466-42C6-BCD5-004334A22D8F_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="auto-000022769320_at_sci.utah.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] fork / exec from an MPI process<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-24 21:26:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13153.php">Yves Caniou: "[OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Previous message:</strong> <a href="13151.php">tom fogal: "[OMPI users] fork / exec from an MPI process"</a>
<li><strong>In reply to:</strong> <a href="13151.php">tom fogal: "[OMPI users] fork / exec from an MPI process"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, there are three easy ways to do this:
<br>
<p>1. put OMPI_MCA_mpi_warn_on_fork=0 in your environ (you can even do that within your code prior to calling MPI_Init)
<br>
<p>2. put mpi_warn_on_fork=0 in your default MCA param file
<br>
<p>3. add -mca mpi_warn_on_fork 0 to your mpirun cmd line
<br>
<p><p>On May 24, 2010, at 6:33 PM, tom fogal wrote:
<br>
<p><span class="quotelev1">&gt; Our project is fork / exec'ing in some cases to provide a service for
</span><br>
<span class="quotelev1">&gt; some of the processes within our MPI job.  Open MPI spews big warnings
</span><br>
<span class="quotelev1">&gt; to the terminal about this.  It explains how to disable the message,
</span><br>
<span class="quotelev1">&gt; but I'd really like it to not pop up regardless.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The child process does not perform any MPI calls, or even access the
</span><br>
<span class="quotelev1">&gt; network.  In many cases, it probably doesn't even use sockets.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any way I could disable this message?  Perhaps some special
</span><br>
<span class="quotelev1">&gt; Open MPI code I could insert:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  #ifdef OPENMPI
</span><br>
<span class="quotelev1">&gt;    disable_fork_exec_warning();
</span><br>
<span class="quotelev1">&gt;  #endif
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -tom
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
<li><strong>Next message:</strong> <a href="13153.php">Yves Caniou: "[OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Previous message:</strong> <a href="13151.php">tom fogal: "[OMPI users] fork / exec from an MPI process"</a>
<li><strong>In reply to:</strong> <a href="13151.php">tom fogal: "[OMPI users] fork / exec from an MPI process"</a>
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
