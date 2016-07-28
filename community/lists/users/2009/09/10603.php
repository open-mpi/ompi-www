<?
$subject_val = "Re: [OMPI users] Messages getting lost during transmission (?)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 10 04:00:49 2009" -->
<!-- isoreceived="20090910080049" -->
<!-- sent="Thu, 10 Sep 2009 10:00:38 +0200" -->
<!-- isosent="20090910080038" -->
<!-- name="Dennis Luxen" -->
<!-- email="luxen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Messages getting lost during transmission (?)" -->
<!-- id="4AA8B226.6020207_at_kit.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="OFA55A2EE9.28FCB60D-ON8525762C.005CC24A-8525762C.005D2101_at_us.ibm.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Messages getting lost during transmission (?)<br>
<strong>From:</strong> Dennis Luxen (<em>luxen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-10 04:00:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10604.php">Mallikarjuna Shastry: "[OMPI users] open mpi 1.3 with blcr"</a>
<li><strong>Previous message:</strong> <a href="10602.php">Ashika Umanga Umagiliya: "[OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>In reply to:</strong> <a href="10600.php">Richard Treumann: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10606.php">Eugene Loh: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Reply:</strong> <a href="10606.php">Eugene Loh: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; In MPI, you must complete every MPI_Isend by MPI_Wait on the request handle
</span><br>
<span class="quotelev1">&gt; (or a variant like MPI_Waitall or MPI_Test that returns TRUE).  An
</span><br>
<span class="quotelev1">&gt; un-completed MPI_Isend leaves resources tied up.
</span><br>
<p>Good point, but that doesn't seem to help. I augmented each MPI_Isend 
<br>
with a MPI_Wait. Now, one process keeps hanging after a number of 
<br>
messages in MPI_Wait and the other one keeps MPI_Iprobe'ing for new 
<br>
messages to receive.
<br>
<p><span class="quotelev1">&gt; I do not know what symptom to expect from OpenMPI with this particular
</span><br>
<span class="quotelev1">&gt; application error but the one you describe is plausible.
</span><br>
<p>If I start with the parameter &quot;--mca btl tcp,self&quot; on the other hand, 
<br>
the processes finish communication just fine. I am not exactly sure why 
<br>
this flag helps.
<br>
<p>Best wishes,
<br>
Dennis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10604.php">Mallikarjuna Shastry: "[OMPI users] open mpi 1.3 with blcr"</a>
<li><strong>Previous message:</strong> <a href="10602.php">Ashika Umanga Umagiliya: "[OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>In reply to:</strong> <a href="10600.php">Richard Treumann: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10606.php">Eugene Loh: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<li><strong>Reply:</strong> <a href="10606.php">Eugene Loh: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
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
