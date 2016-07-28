<?
$subject_val = "[OMPI devel] mpirun --launch-proxy options";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  5 10:17:42 2016" -->
<!-- isoreceived="20160205151742" -->
<!-- sent="Fri, 5 Feb 2016 16:17:37 +0100" -->
<!-- isosent="20160205151737" -->
<!-- name="Justin Cinkelj" -->
<!-- email="justin.cinkelj_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun --launch-proxy options" -->
<!-- id="56B4BD11.9050402_at_xlab.si" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun --launch-proxy options<br>
<strong>From:</strong> Justin Cinkelj (<em>justin.cinkelj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-05 10:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Previous message:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Reply:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm starting mpi program via --launch-proxy, and would like to pass some 
<br>
additional parameters to it. But I'm not able to figure out how to do 
<br>
that (or if it is possible at all). Attempts to use environ failed:
<br>
OMPI_VAR1=aa mpirun program
<br>
mpirun -x VAR2=bb program
<br>
<p>The program will get set OMPI_VAR1 and VAR2, but only because orted 
<br>
setup environ. The launch-proxy gets no additional parameters. Is there 
<br>
a way to push some params to launch-proxy ?
<br>
<p>Justin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Previous message:</strong> <a href="18557.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_procs_cutoff, jobid and vpid"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
<li><strong>Reply:</strong> <a href="18559.php">Ralph Castain: "Re: [OMPI devel] mpirun --launch-proxy options"</a>
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
