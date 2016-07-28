<?
$subject_val = "Re: [OMPI users] calculation progress status";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct 21 11:05:21 2013" -->
<!-- isoreceived="20131021150521" -->
<!-- sent="Mon, 21 Oct 2013 17:05:41 +0200" -->
<!-- isosent="20131021150541" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] calculation progress status" -->
<!-- id="20131021150541.GA13818_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CADsB1iCMAUrgHYiJ5k_+G31ORb3t8y9XaJKj6ZqXNvKyUrs4pA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] calculation progress status<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-10-21 11:05:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
<li><strong>In reply to:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>On 15:58 Mon 21 Oct     , MM wrote:
<br>
<span class="quotelev1">&gt; Would you suggest to modify the loop to do a MPI_ISend after x iterations
</span><br>
<span class="quotelev1">&gt; (for the clients) and MPI_IRecv on the root?
</span><br>
<p>sounds good. Don't forget to call MPI_Cancel for all pending status
<br>
update communications (MPI_Isend and MPI_Irecv).
<br>
<p>Best
<br>
-Andreas
<br>
<p><p><pre>
-- 
==========================================================
Andreas Sch&#228;fer
HPC and Grid Computing
Chair of Computer Science 3
Friedrich-Alexander-Universit&#228;t Erlangen-N&#252;rnberg, Germany
+49 9131 85-27910
PGP/GPG key via keyserver
<a href="http://www.libgeodecomp.org">http://www.libgeodecomp.org</a>
==========================================================
(\___/)
(+'.'+)
(&quot;)_(&quot;)
This is Bunny. Copy and paste Bunny into your
signature to help him gain world domination!

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22810/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22811.php">Patrick Begou: "Re: [OMPI users] Compiling OpenMPI 1.7.x with core afinity"</a>
<li><strong>Previous message:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
<li><strong>In reply to:</strong> <a href="22809.php">MM: "Re: [OMPI users] calculation progress status"</a>
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
