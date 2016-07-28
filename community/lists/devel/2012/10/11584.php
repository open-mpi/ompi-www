<?
$subject_val = "[OMPI devel] Another case of 'secret' disabling of InfiniBand";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 10 10:08:27 2012" -->
<!-- isoreceived="20121010140827" -->
<!-- sent="Wed, 10 Oct 2012 16:08:22 +0200" -->
<!-- isosent="20121010140822" -->
<!-- name="Paul Kapinos" -->
<!-- email="kapinos_at_[hidden]" -->
<!-- subject="[OMPI devel] Another case of 'secret' disabling of InfiniBand" -->
<!-- id="50758156.50102_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> [OMPI devel] Another case of 'secret' disabling of InfiniBand<br>
<strong>From:</strong> Paul Kapinos (<em>kapinos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-10 10:08:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11585.php">Santhosh Kokala: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Previous message:</strong> <a href="11583.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developer,
<br>
in this  post:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2012/10/20416.php">http://www.open-mpi.org/community/lists/users/2012/10/20416.php</a>
<br>
I already reported about a case when Open MPI silently (without any word of 
<br>
caution!) changed the transport from InfiniBand to IPoIB, thus loosing the 
<br>
performance.
<br>
<p>Another case of 'secret' disabling of InfiniBand is the use of 'multiple' 
<br>
threading level (assume the threading support is enabled by 
<br>
--enable-mpi-thread-multiple). Please have a look at 
<br>
ompi/mca/btl/openib/btl_openib_component.c (v.1.6.1, ll.2504-2508). In this 
<br>
lines a message about disabling InfiniBand transport is compounded, but normally 
<br>
it did not came out because is seem to be intended to be debug info only.
<br>
<p><p>The problem is not the fallback itself but the muted way it is done. The user 
<br>
has hardly a possibility to get it out about the application is creeping over 
<br>
TCP, unless the performance loss will be noticed and analysed.
<br>
<p>Well, we believe that disabling of high performance network _without any word a 
<br>
caution_ is a bad thing, because it may lead to huge waste of resources (because 
<br>
an actual problem may not be noticed for years - the program seem to work!). We 
<br>
will probably forbid any fallback to workaround this scenarios in future.
<br>
<p>Maybe a bit more verbosity at this place is a good idea?
<br>
<p>Best,
<br>
<p>Paul Kapinos
<br>
<p><p><p><pre>
-- 
Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
RWTH Aachen University, Center for Computing and Communication
Seffenter Weg 23,  D 52074  Aachen (Germany)
Tel: +49 241/80-24915

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-11584/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11585.php">Santhosh Kokala: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
<li><strong>Previous message:</strong> <a href="11583.php">George Bosilca: "Re: [OMPI devel] MPI_Reduce Hangs in my Application"</a>
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
