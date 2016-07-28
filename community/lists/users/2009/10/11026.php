<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 12:26:55 2009" -->
<!-- isoreceived="20091030162655" -->
<!-- sent="Fri, 30 Oct 2009 17:26:41 +0100" -->
<!-- isosent="20091030162641" -->
<!-- name="Peter Kjellstrom" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="200910301726.50463.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="65BE579095BE0C489DB2EC8C7F85E83D1E33C0_at_UXEXMBU115.academic.windsor" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Peter Kjellstrom (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 12:26:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11027.php">Abhishek Kulkarni: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11025.php">Konstantinos Angelopoulos: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="11025.php">Konstantinos Angelopoulos: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11028.php">Gus Correa: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday 30 October 2009, Konstantinos Angelopoulos wrote:
<br>
<span class="quotelev1">&gt; good part of the day,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to run a parallel program (that used to run in a cluster) in my
</span><br>
<span class="quotelev1">&gt; double core pc. Could openmpi simulate the distribution of the parallel
</span><br>
<span class="quotelev1">&gt; jobs  to my 2 processors
</span><br>
<p>If your program is an MPI program then, yes, OpenMPI on your PC would allow 
<br>
you to use both cores (assuming your job can fit on the PC of course).
<br>
<p><span class="quotelev1">&gt; meaning will qsub work even if it is not a real 
</span><br>
<span class="quotelev1">&gt; cluster?
</span><br>
<p>qsub has nothing to do with MPI it belongs to the work load management system 
<br>
or batch queue system. You could install this on your PC as well (see for 
<br>
example torque, SGE or slurm).
<br>
<p>/Peter
<br>
<p><span class="quotelev1">&gt; thank you for reading my message and for any answer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Konstantinos Angelopoulos
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11026/signature.asc_">This is a digitally signed message part.</a>
</ul>
<!-- attachment="signature.asc_" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11027.php">Abhishek Kulkarni: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11025.php">Konstantinos Angelopoulos: "[OMPI users] (no subject)"</a>
<li><strong>In reply to:</strong> <a href="11025.php">Konstantinos Angelopoulos: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11028.php">Gus Correa: "Re: [OMPI users] (no subject)"</a>
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
