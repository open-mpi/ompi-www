<?
$subject_val = "[OMPI devel] OpenSHMEM failures";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 25 15:04:28 2013" -->
<!-- isoreceived="20130925190428" -->
<!-- sent="Wed, 25 Sep 2013 19:02:56 +0000" -->
<!-- isosent="20130925190256" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] OpenSHMEM failures" -->
<!-- id="CE688F7D.13C4A%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] OpenSHMEM failures<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-25 15:02:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>Previous message:</strong> <a href="12990.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>Reply:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guys -
<br>
<p>I think this was mentioned already, but I'm still seeing failures in the
<br>
trunk building the SHMEM code (below).  RHEL 6.4, GCC 4.4.7, 64 bit build.
<br>
<p>&nbsp;&nbsp;CC       spml_yoda.lo
<br>
cc1: warnings being treated as errors
<br>
spml_yoda.c: In function 'mca_yoda_get_callback':
<br>
spml_yoda.c:231: error: pointer targets in passing argument 1 of
<br>
'opal_atomic_add_32' differ in signedness
<br>
../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
<br>
'volatile int32_t *' but argument is of type 'uint32_t *'
<br>
spml_yoda.c:231: error: signed and unsigned type in conditional expression
<br>
spml_yoda.c: In function 'mca_yoda_get_response_callback':
<br>
spml_yoda.c:269: error: pointer targets in passing argument 1 of
<br>
'opal_atomic_add_32' differ in signedness
<br>
../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
<br>
'volatile int32_t *' but argument is of type 'uint32_t *'
<br>
spml_yoda.c:269: error: signed and unsigned type in conditional expression
<br>
spml_yoda.c: In function 'mca_spml_yoda_put_internal':
<br>
spml_yoda.c:832: error: pointer targets in passing argument 1 of
<br>
'opal_atomic_add_32' differ in signedness
<br>
../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
<br>
'volatile int32_t *' but argument is of type 'uint32_t *'
<br>
spml_yoda.c:832: error: signed and unsigned type in conditional expression
<br>
spml_yoda.c: In function 'mca_spml_yoda_get':
<br>
spml_yoda.c:1203: error: pointer targets in passing argument 1 of
<br>
'opal_atomic_add_32' differ in signedness
<br>
../../../../opal/include/opal/sys/amd64/atomic.h:174: note: expected
<br>
'volatile int32_t *' but argument is of type 'uint32_t *'
<br>
spml_yoda.c:1203: error: signed and unsigned type in conditional expression
<br>
make[2]: *** [spml_yoda.lo] Error 1
<br>
make[2]: Leaving directory
<br>
`/home/bwbarre/projects/ompi/trunk/oshmem/mca/spml/yoda'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/home/bwbarre/projects/ompi/trunk/oshmem'
<br>
make: *** [all-recursive] Error 1
<br>
<p>Brian
<br>
<p><p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12991/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>Previous message:</strong> <a href="12990.php">Ralph Castain: "Re: [OMPI devel] Openmpi 1.6.5 is freezing under GNU/Linux ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
<li><strong>Reply:</strong> <a href="12992.php">Ralph Castain: "Re: [OMPI devel] OpenSHMEM failures"</a>
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
