<?
$subject_val = "Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 10:54:04 2007" -->
<!-- isoreceived="20071204155404" -->
<!-- sent="Tue, 4 Dec 2007 10:53:58 -0500" -->
<!-- isosent="20071204155358" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()" -->
<!-- id="E6F5DEBC-1691-46D2-876D-8250D5320C42_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="e7ba66e40712040743v2e48d4ddmb7e8d0225ad7d717_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 10:53:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2715.php">Jeff Squyres: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="2713.php">Ralph H Castain: "[OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2712.php">Lisandro Dalcin: "[OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2007, at 10:43 AM, Lisandro Dalcin wrote:
<br>
<p><span class="quotelev1">&gt; * MPI_GROUP_EMPTY cannot be freed, as it is a predefined handle. Users
</span><br>
<span class="quotelev1">&gt; have to always check if the result of a group operation is
</span><br>
<span class="quotelev1">&gt; MPI_GROUP_EMPTY to know if they can or cannot free them. This way is
</span><br>
<span class="quotelev1">&gt; similar to the current management of predefined datatypes.
</span><br>
<p>I'd be in favor of this, since it's consistent with the rest of the  
<br>
spec w.r.t. predefined handles.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2715.php">Jeff Squyres: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<li><strong>Previous message:</strong> <a href="2713.php">Ralph H Castain: "[OMPI devel] RTE Issue IV: RTE/MPI relative modex responsibilities"</a>
<li><strong>In reply to:</strong> <a href="2712.php">Lisandro Dalcin: "[OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
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
