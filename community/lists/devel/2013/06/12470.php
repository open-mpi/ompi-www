<?
$subject_val = "[OMPI devel] two questions about 1.7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 19 07:52:50 2013" -->
<!-- isoreceived="20130619115250" -->
<!-- sent="Wed, 19 Jun 2013 13:52:45 +0200" -->
<!-- isosent="20130619115245" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] two questions about 1.7.1" -->
<!-- id="51C19B8D.7060402_at_rz.rwth-aachen.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] two questions about 1.7.1<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-19 07:52:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12471.php">Jeff Squyres (jsquyres): "[OMPI devel] End of life: original hg mirror on www.open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="12469.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello All,
<br>
<p>I.
<br>
Using the new Open MPI 1.7.1 we see some messages on the console:
<br>
<p><span class="quotelev1"> &gt; example mpiext init
</span><br>
<span class="quotelev1"> &gt; example mpiext fini
</span><br>
<p>... on each call to MPI_INIT, MPI_FINALIZE at least in Fortran programs.
<br>
<p>Seems somebody forgot to disable some 'printf'-debug-output? =)
<br>
<p>II.
<br>
In the 1.7.x series, the 'carto' framework has been deleted:
<br>
<a href="http://www.open-mpi.org/community/lists/announce/2013/04/0053.php">http://www.open-mpi.org/community/lists/announce/2013/04/0053.php</a>
<br>
<span class="quotelev1"> &gt; - Removed maffinity, paffinity, and carto frameworks (and associated
</span><br>
<span class="quotelev1"> &gt;   MCA params).
</span><br>
<p>Is there some replacement for this? Or, would Open MPI detect the NUMA structure 
<br>
of nodes automatically?
<br>
<p>Background: Currently we're using the 'carto' framework on our kinda special 
<br>
'Bull BCS' nodes. Each such node consist of 4 boards with own IB card but build 
<br>
a shared memory system. Clearly, communicating should go over the nearest IB 
<br>
interface - for this we use 'carto' now.
<br>
<p><p>best
<br>
Paul Kapinos
<br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12470/test172.f90">test172.f90</a>
</ul>
<!-- attachment="test172.f90" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12470/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12471.php">Jeff Squyres (jsquyres): "[OMPI devel] End of life: original hg mirror on www.open-mpi.org"</a>
<li><strong>Previous message:</strong> <a href="12469.php">Aur&#233;lien Bouteiller: "Re: [OMPI devel] [EXTERNAL] Re: RFC: support for Mellanox's &quot;libhcoll&quot; library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>Reply:</strong> <a href="12472.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] two questions about 1.7.1"</a>
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
