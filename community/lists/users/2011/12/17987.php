<?
$subject_val = "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 15 09:37:26 2011" -->
<!-- isoreceived="20111215143726" -->
<!-- sent="Thu, 15 Dec 2011 07:37:20 -0700" -->
<!-- isosent="20111215143720" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] &amp;quot;almost there&amp;quot; in getting MPI to run" -->
<!-- id="A290FEA8-371B-4319-960D-A0E7BB746D82_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EE9FFAE.5060708_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] &quot;almost there&quot; in getting MPI to run<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-15 09:37:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17988.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>In reply to:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What was your cmd line when you ran the job?
<br>
<p>On Dec 15, 2011, at 7:09 AM, Joao Amaral wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After trying cygwin and the windows build of Open MPI, I've now focused on using linux for my mpif90 code testing/development on my laptop.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've managed to install Open MPI, and it works, sort of.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Strangely(?), in both my laptop and the cluster, the number of threads from the command
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; call MPI_Comm_size ( MPI_COMM_WORLD, p, error )
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Results on only one active thread, when my laptop is a quad-core (should be 8 threads). The same happens running in the cluster, where each &quot;blade&quot; has 8 cores.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What am I missing here? Is there more configuration to be done? Actually, can I manually set the number of working threads?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for any help. I hope I'm &quot;almost there&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Joao
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
<li><strong>Next message:</strong> <a href="17988.php">V. Ram: "Re: [OMPI users] Error launching w/ 1.5.3 on IB mthca nodes"</a>
<li><strong>Previous message:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<li><strong>In reply to:</strong> <a href="17986.php">Joao Amaral: "[OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17991.php">Jeff Squyres: "Re: [OMPI users] &quot;almost there&quot; in getting MPI to run"</a>
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
