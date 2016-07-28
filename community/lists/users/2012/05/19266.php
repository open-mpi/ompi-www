<?
$subject_val = "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 14 02:17:13 2012" -->
<!-- isoreceived="20120514061713" -->
<!-- sent="Mon, 14 May 2012 08:16:44 +0200" -->
<!-- isosent="20120514061644" -->
<!-- name="Andreas Sch&#228;fer" -->
<!-- email="gentryx_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily" -->
<!-- id="20120514061644.GA18673_at_neuromancer" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FB0A101.6030806_at_helsinki.fi" -->
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
<strong>Subject:</strong> Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily<br>
<strong>From:</strong> Andreas Sch&#228;fer (<em>gentryx_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-14 02:16:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19267.php">Jeff Squyres: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>In reply to:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19267.php">Jeff Squyres: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19267.php">Jeff Squyres: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 09:06 Mon 14 May     , Ilja Honkonen wrote:
<br>
<span class="quotelev1">&gt; Thanks, so it's a feature. A bit surprising though since usually local 
</span><br>
<span class="quotelev1">&gt; variables are deallocated automatically.
</span><br>
<p>Not much more surprising than an array allocated by malloc() not being
<br>
automatically deallocated once the pointer dies. The datatype variable
<br>
is merely a handle, Open MPI has an internal data store for each
<br>
user-defines datatype. Same for requests AFAIK.
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
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19266/signature.asc">Digital signature</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19267.php">Jeff Squyres: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>In reply to:</strong> <a href="19265.php">Ilja Honkonen: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19267.php">Jeff Squyres: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Reply:</strong> <a href="19267.php">Jeff Squyres: "Re: [OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
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
