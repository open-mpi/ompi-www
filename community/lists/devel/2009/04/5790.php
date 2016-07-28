<?
$subject_val = "[OMPI devel] access to tests";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  3 14:45:43 2009" -->
<!-- isoreceived="20090403184543" -->
<!-- sent="Fri, 03 Apr 2009 10:45:24 -0800" -->
<!-- isosent="20090403184524" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] access to tests" -->
<!-- id="49D65944.7040609_at_sun.com" -->
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
<strong>Subject:</strong> [OMPI devel] access to tests<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-03 14:45:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5791.php">Jeff Squyres: "Re: [OMPI devel] access to tests"</a>
<li><strong>Previous message:</strong> <a href="5789.php">Jeff Squyres: "Re: [OMPI devel] event library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5791.php">Jeff Squyres: "Re: [OMPI devel] access to tests"</a>
<li><strong>Reply:</strong> <a href="5791.php">Jeff Squyres: "Re: [OMPI devel] access to tests"</a>
<li><strong>Reply:</strong> <a href="5793.php">Terry Dontje: "Re: [OMPI devel] access to tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Do I need to buy someone a beer to get access to the test suites?
<br>
<p>[eloh_at_milliways]$ svn co <a href="https://svn.open-mpi.org/svn/ompi/trunk">https://svn.open-mpi.org/svn/ompi/trunk</a>
<br>
[... successful ...]
<br>
[eloh_at_milliways]$ svn co 
<br>
<a href="https://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests">https://svn.open-mpi.org/svn/ompi-tests/trunk/intel_tests</a>
<br>
svn: PROPFIND request failed on '/svn/ompi-tests/trunk/intel_tests'
<br>
svn: PROPFIND of '/svn/ompi-tests/trunk/intel_tests': 403 Forbidden 
<br>
(<a href="https://svn.open-mpi.org">https://svn.open-mpi.org</a>)
<br>
[eloh_at_milliways]$ svn co <a href="https://svn.open-mpi.org/svn/ompi-tests/trunk">https://svn.open-mpi.org/svn/ompi-tests/trunk</a>
<br>
svn: PROPFIND request failed on '/svn/ompi-tests/trunk'
<br>
svn: PROPFIND of '/svn/ompi-tests/trunk': 403 Forbidden 
<br>
(<a href="https://svn.open-mpi.org">https://svn.open-mpi.org</a>)
<br>
[eloh_at_milliways]$
<br>
<p>I seem to have access to the OMPI trunk, but not to the tests.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5791.php">Jeff Squyres: "Re: [OMPI devel] access to tests"</a>
<li><strong>Previous message:</strong> <a href="5789.php">Jeff Squyres: "Re: [OMPI devel] event library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5791.php">Jeff Squyres: "Re: [OMPI devel] access to tests"</a>
<li><strong>Reply:</strong> <a href="5791.php">Jeff Squyres: "Re: [OMPI devel] access to tests"</a>
<li><strong>Reply:</strong> <a href="5793.php">Terry Dontje: "Re: [OMPI devel] access to tests"</a>
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
