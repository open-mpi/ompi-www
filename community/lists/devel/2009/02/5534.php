<?
$subject_val = "[OMPI devel] Minor patch for vtunify use of tolower()";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 04:12:03 2009" -->
<!-- isoreceived="20090227091203" -->
<!-- sent="Fri, 27 Feb 2009 09:11:58 +0000" -->
<!-- isosent="20090227091158" -->
<!-- name="Number Cruncher" -->
<!-- email="number.cruncher_at_[hidden]" -->
<!-- subject="[OMPI devel] Minor patch for vtunify use of tolower()" -->
<!-- id="49A7AE5E.2000306_at_ntlworld.com" -->
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
<strong>Subject:</strong> [OMPI devel] Minor patch for vtunify use of tolower()<br>
<strong>From:</strong> Number Cruncher (<em>number.cruncher_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-27 04:11:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5535.php">Eugene Loh: "[OMPI devel] PML Start error?"</a>
<li><strong>Previous message:</strong> <a href="5533.php">Jeff Squyres: "[OMPI devel] 1.3.1 blocker"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5536.php">Jeff Squyres: "Re: [OMPI devel] Minor patch for vtunify use of tolower()"</a>
<li><strong>Reply:</strong> <a href="5536.php">Jeff Squyres: "Re: [OMPI devel] Minor patch for vtunify use of tolower()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I couldn't get Open MPI 1.3 to compile on RedHat 9 or CentOS3, due to 
<br>
vt_unify_stats.h using the tolower() function without including the 
<br>
relevant header.
<br>
<p>Attached is patch against 1.3 release to fix this minor bug.
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5534/openmpi-vtunify-tolower.patch">openmpi-vtunify-tolower.patch</a>
</ul>
<!-- attachment="openmpi-vtunify-tolower.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5535.php">Eugene Loh: "[OMPI devel] PML Start error?"</a>
<li><strong>Previous message:</strong> <a href="5533.php">Jeff Squyres: "[OMPI devel] 1.3.1 blocker"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5536.php">Jeff Squyres: "Re: [OMPI devel] Minor patch for vtunify use of tolower()"</a>
<li><strong>Reply:</strong> <a href="5536.php">Jeff Squyres: "Re: [OMPI devel] Minor patch for vtunify use of tolower()"</a>
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
