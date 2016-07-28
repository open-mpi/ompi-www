<?
$subject_val = "[OMPI devel] mpirun options in the MPMD model";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  9 10:13:10 2010" -->
<!-- isoreceived="20101109151310" -->
<!-- sent="Tue, 09 Nov 2010 16:22:28 +0100" -->
<!-- isosent="20101109152228" -->
<!-- name="nadia.derbey" -->
<!-- email="Nadia.Derbey_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun options in the MPMD model" -->
<!-- id="1289316148.1869.5463.camel_at_B014522" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun options in the MPMD model<br>
<strong>From:</strong> nadia.derbey (<em>Nadia.Derbey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-09 10:22:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8670.php">Ralph Castain: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<li><strong>Previous message:</strong> <a href="8668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8670.php">Ralph Castain: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<li><strong>Reply:</strong> <a href="8670.php">Ralph Castain: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>Can someone give me an exhaustive list of the options that can be used
<br>
for any single binary when calling mpirun for the mpmd model, vs those
<br>
that are global to the job? I couldn't find it anywhere.
<br>
<p>For example, --hostfile can be specified for each binary in the job,
<br>
while it looks like --output-filename is global to the job: even if it
<br>
is given on any single line of an application context, with different
<br>
values, the last value is the one that is actually taken as an output
<br>
file prefix.
<br>
<p>Regards,
<br>
Nadia
<br>
<p><pre>
-- 
nadia.derbey &lt;Nadia.Derbey_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8670.php">Ralph Castain: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<li><strong>Previous message:</strong> <a href="8668.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23998"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8670.php">Ralph Castain: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
<li><strong>Reply:</strong> <a href="8670.php">Ralph Castain: "Re: [OMPI devel] mpirun options in the MPMD model"</a>
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
