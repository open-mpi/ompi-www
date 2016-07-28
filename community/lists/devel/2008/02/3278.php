<?
$subject_val = "[OMPI devel] rch-step2 branch errors";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 21 10:03:09 2008" -->
<!-- isoreceived="20080221150309" -->
<!-- sent="Thu, 21 Feb 2008 17:02:55 +0200" -->
<!-- isosent="20080221150255" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="[OMPI devel] rch-step2 branch errors" -->
<!-- id="39C75744D164D948A170E9792AF8E7CAE14C25_at_exil.voltaire.com" -->
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
<strong>Subject:</strong> [OMPI devel] rch-step2 branch errors<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-21 10:02:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Previous message:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Reply:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Reply:</strong> <a href="3280.php">Ralph H Castain: "Re: [OMPI devel] rch-step2 branch errors"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>In order to make a /tmp/rank_file branch with new RMAPS component I need
<br>
/tmp/rhc-step2b branch to be based on.
<br>
<p>I tried to download and compile it, but it failed.
<br>
(missing many defines, h files and new directories e.t.c)
<br>
<p><p><p>gcc -O3 -DNDEBUG -finline-functions -fno-strict-aliasing -pthread -o
<br>
.libs/opal_wrapper opal_wrapper.o -Wl,--export-dynamic
<br>
../../../opal/.libs/libopen-pal.so -ldl -lnsl -lutil -lm  -Wl,--rpath
<br>
-Wl,/home/USERS/lenny/OMPI_ORTE_17540/lib
<br>
../../../opal/.libs/libopen-pal.so: undefined reference to `OPAL_OUTPUT'
<br>
collect2: ld returned 1 exit status
<br>
<p><p>Best Regards,
<br>
Lenny.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Previous message:</strong> <a href="3277.php">Sharon Melamed: "Re: [OMPI devel] PLPA ready?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Reply:</strong> <a href="3279.php">Tim Prins: "Re: [OMPI devel] rch-step2 branch errors"</a>
<li><strong>Reply:</strong> <a href="3280.php">Ralph H Castain: "Re: [OMPI devel] rch-step2 branch errors"</a>
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
