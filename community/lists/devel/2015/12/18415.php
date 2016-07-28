<?
$subject_val = "Re: [OMPI devel] ROMIO+Lustre problems 2.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 14 12:03:23 2015" -->
<!-- isoreceived="20151214170323" -->
<!-- sent="Mon, 14 Dec 2015 18:03:07 +0100" -->
<!-- isosent="20151214170307" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ROMIO+Lustre problems 2.0" -->
<!-- id="566EF64B.3090703_at_itc.rwth-aachen.de" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5666CA03.103_at_itc.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ROMIO+Lustre problems 2.0<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-14 12:03:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18416.php">Jeff Squyres (jsquyres): "[OMPI devel] Travis testing of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="18414.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>In reply to:</strong> <a href="18405.php">Paul Kapinos: "[OMPI devel] ROMIO+Lustre problems 2.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all, JFYI and for log purposes:
<br>
<p>*In short: 'caddr_t' issue is known and is addressed in new(er) ROMIO releases.*
<br>
<p>Below the (off-list) answer (snippet) from Rob Latham.
<br>
<p>On 12/08/15 13:16, Paul Kapinos wrote:
<br>
<span class="quotelev2">&gt;&gt; In short: ROMIO in actual OpenMPI versions cannot configure using old versions
</span><br>
<span class="quotelev2">&gt;&gt; of Intel compiler.
</span><br>
<p><span class="quotelev1"> &gt; .....  caddr_t -- indirectly brought in via
</span><br>
<span class="quotelev1"> &gt; quota.h --  has been a giant headache.   MPICH has a &quot;strict&quot; mode which
</span><br>
<span class="quotelev1"> &gt; helps with portability, but if  quota.h is then less portable than ROMIO,
</span><br>
<span class="quotelev1"> &gt; well, then we have problems.
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; Here's some more information:
</span><br>
<span class="quotelev1"> &gt; <a href="https://press3.mcs.anl.gov/romio/2015/02/26/lustre-preadpwrite-and-caddr_t/">https://press3.mcs.anl.gov/romio/2015/02/26/lustre-preadpwrite-and-caddr_t/</a>
</span><br>
<span class="quotelev1"> &gt;
</span><br>
<span class="quotelev1"> &gt; I've tried having ROMIO's configure look for caddr_t and define it if not
</span><br>
<span class="quotelev1"> &gt; set: I don't remember the exact problem but compilers with strict settings
</span><br>
<span class="quotelev1"> &gt; would still have problems compiling quota.h
</span><br>
<p>A short look into the above link tells us:
<br>
<span class="quotelev1"> &gt; If you found this page because you are facing a similar problem, please try
</span><br>
<span class="quotelev1"> &gt; the latest MPICH.
</span><br>
<p>and again a look into one of the GIT patches on the link show me that ROMIO 
<br>
bundled in openmpi/1.10.1 seem to be quite old (at least definitely older that 
<br>
the patches).
<br>
<p>We do not know about there is any interest in supporting older Intel compilers, 
<br>
but we do not want to keep silent that currently openmpi/1.10.1 cannot be 
<br>
configured (and thus build) using intel/11.1 compiler with ROMIO+Lustre support.
<br>
<p>Best wishes
<br>
<p>Paul
<br>
<p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, IT Center
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18415/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18416.php">Jeff Squyres (jsquyres): "[OMPI devel] Travis testing of Open MPI"</a>
<li><strong>Previous message:</strong> <a href="18414.php">Gilles Gouaillardet: "Re: [OMPI devel] RFC: remove internal copies of libevent and hwloc"</a>
<li><strong>In reply to:</strong> <a href="18405.php">Paul Kapinos: "[OMPI devel] ROMIO+Lustre problems 2.0"</a>
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
