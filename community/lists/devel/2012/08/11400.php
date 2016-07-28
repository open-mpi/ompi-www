<?
$subject_val = "[OMPI devel] Bug Report cxx/constants.h";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Aug 15 08:59:53 2012" -->
<!-- isoreceived="20120815125953" -->
<!-- sent="Wed, 15 Aug 2012 08:08:21 -0500" -->
<!-- isosent="20120815130821" -->
<!-- name="John T. Foster" -->
<!-- email="john.foster_at_[hidden]" -->
<!-- subject="[OMPI devel] Bug Report cxx/constants.h" -->
<!-- id="4C5C6B03-0EC1-4046-85F5-B2D857AE44EA_at_utsa.edu" -->
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
<strong>Subject:</strong> [OMPI devel] Bug Report cxx/constants.h<br>
<strong>From:</strong> John T. Foster (<em>john.foster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-15 09:08:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI devel] Bug Report cxx/constants.h"</a>
<li><strong>Previous message:</strong> <a href="11399.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI devel] Bug Report cxx/constants.h"</a>
<li><strong>Reply:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI devel] Bug Report cxx/constants.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the release version of open-mpi 1.6
<br>
<p>cxx/constants.h header file on line 54 there is an extra semi-colon at the end of line.  This causes the clang compiler to fail on a Mac when the header is included.
<br>
<p>JTF
<br>
<p><pre>
--
John T. Foster
Assistant Professor
Mechanical Engineering Department
The University of Texas at San Antonio
AET 2.330
One UTSA Circle
San Antonio, TX 78249
210.458.5521
john.foster_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI devel] Bug Report cxx/constants.h"</a>
<li><strong>Previous message:</strong> <a href="11399.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r27035 - trunk/orte/util"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI devel] Bug Report cxx/constants.h"</a>
<li><strong>Reply:</strong> <a href="11401.php">Jeff Squyres: "Re: [OMPI devel] Bug Report cxx/constants.h"</a>
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
