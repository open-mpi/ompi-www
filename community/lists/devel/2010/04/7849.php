<?
$subject_val = "Re: [OMPI devel] MPI Forum question?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 30 05:59:25 2010" -->
<!-- isoreceived="20100430095925" -->
<!-- sent="30 Apr 2010 10:59:20 +0100" -->
<!-- isosent="20100430095920" -->
<!-- name="N.M. Maclaren" -->
<!-- email="nmm1_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI Forum question?" -->
<!-- id="Prayer.1.3.2.1004301059200.2885_at_hermes-2.csi.cam.ac.uk" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="2E0D7AEE-E5CC-4F50-8FBB-35DA8AD4FE03_at_usgs.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI Forum question?<br>
<strong>From:</strong> N.M. Maclaren (<em>nmm1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-30 05:59:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7848.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 30 2010, Larry Baker wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I don't know if there is any standard ordering of non-zero exit status  
</span><br>
<span class="quotelev1">&gt;codes.  If so, another option would be to return the the largest  
</span><br>
<span class="quotelev1">&gt;(smallest) value, when that is the most serious exit status.
</span><br>
<p>There isn't, and some systems have used exit codes in other ways (e.g.
<br>
as a set of flag bits).  That is actually the answer to the original
<br>
question.
<br>
<p>MPI quite rightly does not specify this, because the matter is very system-
<br>
dependent, and it is not possible to return the exit code (or display it)
<br>
in all environments.  Sorry, but that is reality.
<br>
<p>The last paragraph of the specification of MPI_Finalize makes it clear
<br>
that it is the USER'S responsibility to return an exit code to the system
<br>
for process 0, and that what happens for other ones is undefined.  Or
<br>
fairly clear - it could be stated in so many words, rather than being
<br>
implicit in the requirement on implementors.
<br>
<p><p>Regards,
<br>
Nick Maclaren.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Previous message:</strong> <a href="7848.php">Ralph Castain: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>In reply to:</strong> <a href="7847.php">Larry Baker: "Re: [OMPI devel] MPI Forum question?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
<li><strong>Reply:</strong> <a href="7850.php">Jeff Squyres: "Re: [OMPI devel] MPI Forum question?"</a>
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
