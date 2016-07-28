<?
$subject_val = "[OMPI devel] about the test_shmem_zero_get.x test from the openshmem test suite";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 26 03:17:47 2014" -->
<!-- isoreceived="20140826071747" -->
<!-- sent="Tue, 26 Aug 2014 16:17:52 +0900" -->
<!-- isosent="20140826071752" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="[OMPI devel] about the test_shmem_zero_get.x test from the openshmem test suite" -->
<!-- id="53FC34A0.5030106_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] about the test_shmem_zero_get.x test from the openshmem test suite<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-26 03:17:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15708.php">Gilles Gouaillardet: "[OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Previous message:</strong> <a href="15706.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<li><strong>Reply:</strong> <a href="15755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>the test_shmem_zero_get.x from the openshmem-release-1.0d test suite is
<br>
currently failing.
<br>
<p>i looked at the test itself, and compared it to test_shmem_zero_put.x
<br>
(that is a success) and
<br>
i am very puzzled ...
<br>
<p>the test calls several flavors of shmem_*_get where :
<br>
- the destination is in the shmem (why not, but this is useless)
<br>
- the source is *not* in the shmem
<br>
- the number of elements to be transferred is zero
<br>
<p>currently, this is failing because the source is *not* in the shmem.
<br>
<p>1) is the test itself correct ?
<br>
i mean that if we compare it to test_shmem_zero_put.x, i would guess that
<br>
destination should be in the local memory and source should be in the shmem.
<br>
<p>2) should shmem_*_get even fail ?
<br>
i mean there is zero data to be transferred, so why do we even care
<br>
whether source is in the shmem or not ?
<br>
is the openshmem standard explicit about this case (e.g. zero elements
<br>
to be transferred) ?
<br>
<p>3) is a failure expected ?
<br>
even if i doubt it, this is an option ... and in this case, mtt should
<br>
be aware about it and report a success when the test fails
<br>
<p>4) the test is a success on v1.8.
<br>
the reason is the default configure value is --oshmem-param-check=never
<br>
on v1.8 whereas it is --oshmem-param-check=always on trunk
<br>
is there any reason for this ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15708.php">Gilles Gouaillardet: "[OMPI devel] coll/ml without hwloc (?)"</a>
<li><strong>Previous message:</strong> <a href="15706.php">Andrej Prsa: "Re: [OMPI devel] 1.8.2rc4 problem: only 32 out of 48 cores are working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
<li><strong>Reply:</strong> <a href="15755.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] about the test_shmem_zero_get.x test from the	openshmem test suite"</a>
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
