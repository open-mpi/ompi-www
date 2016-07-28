<?
$subject_val = "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 20:17:57 2010" -->
<!-- isoreceived="20100225011757" -->
<!-- sent="Wed, 24 Feb 2010 18:17:48 -0700" -->
<!-- isosent="20100225011748" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Using dynamic process management without mpirun/mpiexec" -->
<!-- id="F59E5C05-6DAB-4AC3-B9FF-30CC90462F4A_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B85C6D3.9010303_at_0x544745.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Using dynamic process management without mpirun/mpiexec<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 20:17:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12144.php">Terry Frankcombe: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12142.php">Brian Budge: "[OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
<li><strong>In reply to:</strong> <a href="12141.php">Damien Hocking: "[OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12145.php">Damien Hocking: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<li><strong>Reply:</strong> <a href="12145.php">Damien Hocking: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Let me see if I understand your question. You want to launch an initial MPI code using mpirun or as a singleton. This code will then determine available resources and use MPI_Comm_spawn to launch the &quot;real&quot; MPI job.
<br>
<p>Correct?
<br>
<p>If so, then yes - you can do that. When you do the comm_spawn, you need to include an MPI_Info key of &quot;add-host&quot; that specifies the host(s) (comma-delimited list) to be used for launching the specified app. Or you can do &quot;add-hostfile&quot; - either or both are supported.
<br>
<p><p><p>On Feb 24, 2010, at 5:39 PM, Damien Hocking wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does OpenMPI support dynamic process management without launching through mpirun or mpiexec?  I need to use some MPI code in a shared-memory environment where I don't know the resources in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Damien
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
<li><strong>Next message:</strong> <a href="12144.php">Terry Frankcombe: "Re: [OMPI users] problems on parallel writing"</a>
<li><strong>Previous message:</strong> <a href="12142.php">Brian Budge: "[OMPI users] MPI_ERR_TRUNCATE returned from MPI_Test"</a>
<li><strong>In reply to:</strong> <a href="12141.php">Damien Hocking: "[OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12145.php">Damien Hocking: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
<li><strong>Reply:</strong> <a href="12145.php">Damien Hocking: "Re: [OMPI users] Using dynamic process management without mpirun/mpiexec"</a>
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
