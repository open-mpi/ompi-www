<?
$subject_val = "[OMPI devel] Change request for include/mpif-config.h";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 21 10:37:53 2013" -->
<!-- isoreceived="20131121153753" -->
<!-- sent="Thu, 21 Nov 2013 15:37:51 +0000" -->
<!-- isosent="20131121153751" -->
<!-- name="Gunter, David O" -->
<!-- email="dog_at_[hidden]" -->
<!-- subject="[OMPI devel] Change request for include/mpif-config.h" -->
<!-- id="E7EFA621-45D9-4776-884E-9F6D32D4291B_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Change request for include/mpif-config.h<br>
<strong>From:</strong> Gunter, David O (<em>dog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-21 10:37:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13299.php">Steve Wise: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13297.php">Compres: "[OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
<li><strong>Reply:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have a user complaining about warnings he is getting from his Fortran 95 code.
<br>
<p>The Intel compilers throw out this warning:
<br>
<p>warning #7346: The CHARACTER* form of a CHARACTER declaration is an obsolescent feature in Fortran 95.
<br>
<p>The warning stems from the following two lines in &lt;mpi dir&gt;/include/mpif-config.h:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character*32 OMPI_GREEK_VERSION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character*32 OMPI_SVN_VERSION
<br>
<p>Can we simply change those lines to the following:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character(len=32) OMPI_GREEK_VERSION
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;character(len=32) OMPI_SVN_VERSION
<br>
<p>What would break if that happened?
<br>
<p>Thanks,
<br>
david
<br>
<pre>
--
David Gunter
HPC-3
Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13299.php">Steve Wise: "Re: [OMPI devel] [EXTERNAL] Re: [OMPI	svn-full]	svn:open-mpi	r29703 - in	trunk:	contrib/platform/iu/odin	ompi/mca/btl/openib	ompi/mca/btl/openib/connect"</a>
<li><strong>Previous message:</strong> <a href="13297.php">Compres: "[OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
<li><strong>Reply:</strong> <a href="13301.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Change request for include/mpif-config.h"</a>
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
