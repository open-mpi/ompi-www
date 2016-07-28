<?
$subject_val = "[OMPI devel] how to run OpenMPI in OSv container";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 15 13:59:15 2015" -->
<!-- isoreceived="20151015175915" -->
<!-- sent="Thu, 15 Oct 2015 19:59:08 +0200" -->
<!-- isosent="20151015175908" -->
<!-- name="Justin Cinkelj" -->
<!-- email="justin.cinkelj_at_[hidden]" -->
<!-- subject="[OMPI devel] how to run OpenMPI in OSv container" -->
<!-- id="561FE96C.1000409_at_xlab.si" -->
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
<strong>Subject:</strong> [OMPI devel] how to run OpenMPI in OSv container<br>
<strong>From:</strong> Justin Cinkelj (<em>justin.cinkelj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-15 13:59:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18180.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Reply:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm trying to run OpenMPI in OSv container
<br>
(<a href="https://github.com/cloudius-systems/osv">https://github.com/cloudius-systems/osv</a>). It's a single process, single
<br>
address space VM, without fork, exec, openpty function. With some
<br>
butchering of OSv and OpenMPI I was able to compile orted.so, and run it
<br>
inside OSv via mpirun (mpirun is on remote machine). The orted.so loads
<br>
mpi_hello.so and executes its main() in new pthread.
<br>
<p>Which than aborts due to communication failure/timeout - as reported by
<br>
mpirun. I assume that that mpi_hello.so should connect back to mpirun,
<br>
and report 'something' about itself. What could that be?
<br>
Plus, where could I extend that timeout period - once mpirun closes,
<br>
output from opal_output is not shown any more.
<br>
<p>Is there some highlevel overview about OpenMPI, how are modules
<br>
connected, what is 'startup' sequence etc?
<br>
ompi_info lists compiled modules, but I still don't know how are they
<br>
connected.
<br>
<p>So basically - I lack knowledge of OpenMPI internals, and would highly
<br>
appreciate links for &quot;rookie&quot; developers.
<br>
Say <a href="https://github.com/open-mpi/ompi/wiki/IOFDesign">https://github.com/open-mpi/ompi/wiki/IOFDesign</a> tells me what IOF
<br>
is, and a bit about its working. So, if someone has any list of such
<br>
links - could it be shared?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18182.php">Mark Santcroos: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<li><strong>Previous message:</strong> <a href="18180.php">Ralph Castain: "Re: [OMPI devel] orte-dvm / orte-submit race condition"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
<li><strong>Reply:</strong> <a href="18189.php">Gilles Gouaillardet: "Re: [OMPI devel] how to run OpenMPI in OSv container"</a>
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
