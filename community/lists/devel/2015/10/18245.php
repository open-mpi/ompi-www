<?
$subject_val = "[OMPI devel] How is session dir used?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 22 14:45:54 2015" -->
<!-- isoreceived="20151022184554" -->
<!-- sent="Thu, 22 Oct 2015 20:45:47 +0200" -->
<!-- isosent="20151022184547" -->
<!-- name="Justin Cinkelj" -->
<!-- email="justin.cinkelj_at_[hidden]" -->
<!-- subject="[OMPI devel] How is session dir used?" -->
<!-- id="56292EDB.7040300_at_xlab.si" -->
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
<strong>Subject:</strong> [OMPI devel] How is session dir used?<br>
<strong>From:</strong> Justin Cinkelj (<em>justin.cinkelj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-22 14:45:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Previous message:</strong> <a href="18244.php">Howard Pritchard: "[OMPI devel] Fwd: mtt-submit, etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18257.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>Reply:</strong> <a href="18257.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Normally, mpi_run starts via ssh on remote node orted process, and orted
<br>
start mpi_program via fork+exec.
<br>
orted and mpi_program communicate via:
<br>
- environment variables (ok, that's on-time setup only, but still)
<br>
- pipes (only one, right? - it is close-on-exec by child).
<br>
- file descriptors, mpi_program stdin/out/err are redirected in orted
<br>
between fork and exec.
<br>
- socket (only one?), mpi_program connects to OMPI_MCA_orte_local_daemon_uri
<br>
- session dir (OMPI_FILE_LOCATION)
<br>
(did I miss anything - or, how much?)
<br>
<p>How is session dir used? I saw check for aborted file (so that orted can
<br>
figure out if child died?). Is there any other use of that dir?
<br>
<p>Can I just ignore it, if I try to run orted on host, and mpi_program in
<br>
container/virtual machine?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18246.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.1 overnight failures - Fortran"</a>
<li><strong>Previous message:</strong> <a href="18244.php">Howard Pritchard: "[OMPI devel] Fwd: mtt-submit, etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18257.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
<li><strong>Reply:</strong> <a href="18257.php">Ralph Castain: "Re: [OMPI devel] How is session dir used?"</a>
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
