<?
$subject_val = "[OMPI devel] Please provide the pshmem_finalize symbol";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 02:19:34 2014" -->
<!-- isoreceived="20140514061934" -->
<!-- sent="Wed, 14 May 2014 08:19:22 +0200" -->
<!-- isosent="20140514061922" -->
<!-- name="Bert Wesarg" -->
<!-- email="Bert.Wesarg_at_[hidden]" -->
<!-- subject="[OMPI devel] Please provide the pshmem_finalize symbol" -->
<!-- id="53730AEA.8020101_at_tu-dresden.de" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Please provide the pshmem_finalize symbol<br>
<strong>From:</strong> Bert Wesarg (<em>Bert.Wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 02:19:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14794.php">Mike Dubman: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>Previous message:</strong> <a href="14792.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14794.php">Mike Dubman: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>Reply:</strong> <a href="14794.php">Mike Dubman: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>the Score-P community is currently in the process to support the 
<br>
OpenSHMEM API in its performance measurement infrastructure Score-P [1]. 
<br>
And we are near a release of a new major version of it. Now that Open 
<br>
MPI also provides an OpenSHMEM implementation, we extended our testing 
<br>
also to the new 1.8 version of Open MPI. We already submitted some bug 
<br>
reports while we are working on this, but the last one isn't really a 
<br>
bug though:
<br>
<p>The OpenSHMEM standard does not include the shmem_finalize API, though 
<br>
Open MPI provides one and also ensures (via the destructor attribute) 
<br>
that this function is called in the end. But when a performance monitor 
<br>
like Score-P intercepts the library calls via weak symbols we finally 
<br>
need to call the original function too. As the user is free to call this 
<br>
function itself, but Score-P still needs the parallel context to 
<br>
finalize the measurement after exiting main, we need to intercept 
<br>
shmem_finalize and call the real shmem_finalize after we are done. But 
<br>
unfortunately we can't call the original shmem_finalize as there is no 
<br>
pshmem_finalize in Open MPI. But without finalizing the Open MPI library 
<br>
orterun will report errors because the application did not call 
<br>
shmem_finalize.
<br>
<p>So our pledge to the Open MPI community is to provide the 
<br>
pshmem_finalize symbol, even though this function is not (yet) in the 
<br>
OpenSHMEM standard.
<br>
<p>Sincerely,
<br>
Bert Wesarg
<br>
<p>[1] <a href="http://www.vi-hps.org/projects/score-p">http://www.vi-hps.org/projects/score-p</a>
<br>
<p><pre>
-- 
Dipl.-Inf. Bert Wesarg
wiss. Mitarbeiter
Technische Universit&#195;&#164;t Dresden
Zentrum f&#195;&#188;r Informationsdienste und Hochleistungsrechnen (ZIH)
01062 Dresden
Tel.: +49 (351) 463-42451
Fax: +49 (351) 463-37773
E-Mail: Bert.Wesarg_at_tu-dresden.

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14793/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14794.php">Mike Dubman: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>Previous message:</strong> <a href="14792.php">Ralph Castain: "Re: [OMPI devel] about btl/scif thread cancellation (#4616 / r31738)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14794.php">Mike Dubman: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
<li><strong>Reply:</strong> <a href="14794.php">Mike Dubman: "Re: [OMPI devel] Please provide the pshmem_finalize symbol"</a>
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
