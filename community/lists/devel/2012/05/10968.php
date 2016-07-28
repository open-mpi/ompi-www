<?
$subject_val = "[OMPI devel] Open MPI v1.6rc2 available";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  4 06:51:05 2012" -->
<!-- isoreceived="20120504105105" -->
<!-- sent="Fri, 4 May 2012 06:51:01 -0400" -->
<!-- isosent="20120504105101" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] Open MPI v1.6rc2 available" -->
<!-- id="B35272B8-59FD-490A-9EBE-8DA8C8DC147A_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI devel] Open MPI v1.6rc2 available<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-04 06:51:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10967.php">Jeff Squyres: "Re: [OMPI devel] Build MPI applications with Open MPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In the usual place:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.6/">http://www.open-mpi.org/software/ompi/v1.6/</a>
<br>
<p>Changes since rc1:
<br>
<p>- Fix some process affinity issues.  When binding a process, Open MPI
<br>
&nbsp;&nbsp;will now bind to all available hyperthreads in a core (or socket,
<br>
&nbsp;&nbsp;depending on the binding options specified).
<br>
- Add support for ARM5 and ARM6 (in addition to the existing ARM7
<br>
&nbsp;&nbsp;support).  Thanks to Evan Clinton for the patch.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10969.php">Jeff Squyres: "Re: [OMPI devel] [PATCH] Open MPI on ARMv5"</a>
<li><strong>Previous message:</strong> <a href="10967.php">Jeff Squyres: "Re: [OMPI devel] Build MPI applications with Open MPI"</a>
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
