<?
$subject_val = "Re: [OMPI users] Mimicking timeout for MPI_Wait";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 13:38:10 2009" -->
<!-- isoreceived="20091204183810" -->
<!-- sent="Fri, 4 Dec 2009 13:38:05 -0500" -->
<!-- isosent="20091204183805" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Mimicking timeout for MPI_Wait" -->
<!-- id="03DE3055-2C3A-459C-AB8F-90851ACFDD98_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="89F8C511E9BE1F41AE2F1BB0424037F201C6A4BD46_at_hasmsx504.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Mimicking timeout for MPI_Wait<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-04 13:38:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11422.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11394.php">Katz, Jacob: "[OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11424.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11424.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11426.php">Tim Prince: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 3, 2009, at 3:31 AM, Katz, Jacob wrote:
<br>
<p><span class="quotelev1">&gt; I wonder if there is a BKM (efficient and portable) to mimic a timeout with a call to MPI_Wait, i.e. to interrupt it once a given time period has passed if it hasn&#146;t returned by then yet.
</span><br>
<p>Pardon my ignorance, but what does BKM stand for?
<br>
<p>Open MPI does not currently implement a timeout-capable MPI_WAIT.  Such functionality probably could be implemented (e.g., in the MPIX &quot;experimental&quot; namespace), especially since Open MPI polls for progress -- it could check a timer every so often while polling -- but no one has done so.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11422.php">Eugene Loh: "Re: [OMPI users] MPI_Comm_spawn, caller uses CPU while waiting for 	spawned processes"</a>
<li><strong>Previous message:</strong> <a href="11420.php">Jeff Squyres: "Re: [OMPI users] Pointers for understanding failure messages on NetBSD"</a>
<li><strong>In reply to:</strong> <a href="11394.php">Katz, Jacob: "[OMPI users] Mimicking timeout for MPI_Wait"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11424.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11424.php">Richard Treumann: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
<li><strong>Reply:</strong> <a href="11426.php">Tim Prince: "Re: [OMPI users] Mimicking timeout for MPI_Wait"</a>
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
