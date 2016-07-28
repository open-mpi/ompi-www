<?
$subject_val = "[OMPI devel] Open MPI v1.10.2rc1 available";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec 19 11:35:08 2015" -->
<!-- isoreceived="20151219163508" -->
<!-- sent="Sat, 19 Dec 2015 08:35:02 -0800" -->
<!-- isosent="20151219163502" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI v1.10.2rc1 available" -->
<!-- id="5E507A70-3536-456E-A460-3F8FDB110A17_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI v1.10.2rc1 available<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-19 11:35:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18432.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc21] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<li><strong>Previous message:</strong> <a href="18430.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0rc1 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18433.php">Marco Atzeri: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Reply:</strong> <a href="18433.php">Marco Atzeri: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Reply:</strong> <a href="18444.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello folks
<br>
<p>Don&#226;&#128;&#153;t want your holiday to be too boring, so we are also making available the v1.10.2 release candidate for review. We won&#226;&#128;&#153;t release until sometime in January, but hopefully some of you will have a chance to test it in the meantime. You&#226;&#128;&#153;ll find it in the usual place:
<br>
<p><a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a> &lt;<a href="http://www.open-mpi.org/software/ompi/v1.10/">http://www.open-mpi.org/software/ompi/v1.10/</a>&gt;
<br>
<p>This is a bug-fix release, but does include a couple of new features as well:
<br>
<p>1.10.2
<br>
------
<br>
<p>&nbsp;**********************************************************************
<br>
&nbsp;*  OSHMEM is now 1.2 compliant
<br>
&nbsp;**********************************************************************
<br>
<p>- Fix NBC_Copy for legitimate zero-size messages
<br>
- Fix multiple bugs in OSHMEM
<br>
- Correctly handle mpirun --host &lt;user&gt;@&lt;ip-address&gt;
<br>
- Centralize two MCA params to avoid duplication between OMPI and
<br>
&nbsp;&nbsp;OSHMEM layers: opal_abort_delay and opal_abort_print_stack
<br>
- Add support for Fujitsu compilers
<br>
- Add UCX support for OMPI and OSHMEM
<br>
- Correctly handle oversubscription when not given directives
<br>
&nbsp;&nbsp;to permit it
<br>
- Add Intel HFI1 default parameters for the openib BTL
<br>
- Resolve symbol conflicts in the PSM2 library
<br>
- Add ability to empty the rgpusm cache when full if requested
<br>
- Fix another libtool bug when -L requires a space between it
<br>
&nbsp;&nbsp;and the path. Thanks to Eric Schnetter for the patch.
<br>
- Add support for OSHMEM v1.2 APIs
<br>
- Improve efficiency of oshmem_preconnect_all algorithm
<br>
- Fix bug in buffered sends support
<br>
- Multiple one-sided support fixes
<br>
- Fix integer overflow in the tuned &quot;reduce&quot; collective when
<br>
&nbsp;&nbsp;using buffers larger than INT_MAX in size
<br>
- Performance improvements in PSM2 support
<br>
- Fix NBS iBarrier for inter-communicators
<br>
- Fix bug in vader BTL during finalize
<br>
- Improved configure support for Fortran compilers
<br>
<p><p>All comments and suggestions are welcome
<br>
Ralph
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18431/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18432.php">Paul Hargrove: "Re: [OMPI devel] [1.10.2rc21] fortran build failure w/ Solaris Studio 12.4 and -m64"</a>
<li><strong>Previous message:</strong> <a href="18430.php">Jeff Squyres (jsquyres): "[OMPI devel] Open MPI v2.0.0rc1 is available"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18433.php">Marco Atzeri: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Reply:</strong> <a href="18433.php">Marco Atzeri: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
<li><strong>Reply:</strong> <a href="18444.php">Orion Poplawski: "Re: [OMPI devel] Open MPI v1.10.2rc1 available"</a>
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
