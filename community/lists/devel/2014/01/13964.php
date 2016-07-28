<?
$subject_val = "[OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 09:49:38 2014" -->
<!-- isoreceived="20140131144938" -->
<!-- sent="Fri, 31 Jan 2014 15:49:35 +0100" -->
<!-- isosent="20140131144935" -->
<!-- name="Ren&#233; Oertel" -->
<!-- email="rene.oertel_at_[hidden]" -->
<!-- subject="[OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds" -->
<!-- id="52EBB7FF.7000406_at_cs.tu-chemnitz.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds<br>
<strong>From:</strong> Ren&#233; Oertel (<em>rene.oertel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 09:49:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13965.php">George Bosilca: "Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<li><strong>Previous message:</strong> <a href="13963.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13965.php">George Bosilca: "Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<li><strong>Reply:</strong> <a href="13965.php">George Bosilca: "Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear OpenMPI developers,
<br>
<p>I think the source code modification titled
<br>
&quot;Ensure that we don't try to call orte_show_help() before orte_init()
<br>
succeeds.&quot; is buggy (see [1] at lines 755-763).
<br>
There is no difference between the if and the else path of the code,
<br>
i.e. checking orte_setup/rte_setup makes no sense.
<br>
You will find the erroneous code below the 'error' label in
<br>
ompi/runtime/ompi_mpi_init.c in SVN trunk, too.
<br>
<p>Kind regards,
<br>
<p>Ren&#233;
<br>
<p>[1]
<br>
<a href="https://github.com/open-mpi/ompi-svn-mirror/commit/b200ea0e1554d40ed4948f9823fc6dd7b0cc3ba6#diff-3673b21a7f42dc0665ea4470b3171df1">https://github.com/open-mpi/ompi-svn-mirror/commit/b200ea0e1554d40ed4948f9823fc6dd7b0cc3ba6#diff-3673b21a7f42dc0665ea4470b3171df1</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13965.php">George Bosilca: "Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<li><strong>Previous message:</strong> <a href="13963.php">Ralph Castain: "Re: [OMPI devel] Intermittent mpirun crash?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13965.php">George Bosilca: "Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
<li><strong>Reply:</strong> <a href="13965.php">George Bosilca: "Re: [OMPI devel] Don't try to call orte_show_help() before orte_init() succeeds"</a>
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
