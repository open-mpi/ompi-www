<?
$subject_val = "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 02:33:59 2010" -->
<!-- isoreceived="20101123073359" -->
<!-- sent="Tue, 23 Nov 2010 08:33:53 +0100" -->
<!-- isosent="20101123073353" -->
<!-- name="Riccardo Murri" -->
<!-- email="riccardo.murri_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?" -->
<!-- id="AANLkTi=PBMBRBe3GDiNJg6KSQpgqYtqPJMATwFe6r5Gg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="9F954E75-A92D-464A-A711-E15D8A32352B_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?<br>
<strong>From:</strong> Riccardo Murri (<em>riccardo.murri_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 02:33:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14874.php">Terry Dontje: "Re: [OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<li><strong>Previous message:</strong> <a href="14872.php">Parallel Scientific: "[OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<li><strong>In reply to:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thanks for the explanation - I should have read the MPI standard more carefully.
<br>
In the end, I traced the bug down to using standard send instead of
<br>
synchronous send,
<br>
so it had nothing to do with the receiving side at all.
<br>
<p>Best regards,
<br>
Riccardo
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14874.php">Terry Dontje: "Re: [OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<li><strong>Previous message:</strong> <a href="14872.php">Parallel Scientific: "[OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<li><strong>In reply to:</strong> <a href="14870.php">Jeff Squyres: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
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
