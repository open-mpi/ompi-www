<?
$subject_val = "[OMPI devel] [patch] Verifying the message queue DLL build";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  8 06:55:29 2009" -->
<!-- isoreceived="20091208115529" -->
<!-- sent="Tue, 08 Dec 2009 11:55:14 +0000" -->
<!-- isosent="20091208115514" -->
<!-- name="Ashley Pittman" -->
<!-- email="ashley_at_[hidden]" -->
<!-- subject="[OMPI devel] [patch] Verifying the message queue DLL build" -->
<!-- id="1260273314.3379.131.camel_at_alpha" -->
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
<strong>Subject:</strong> [OMPI devel] [patch] Verifying the message queue DLL build<br>
<strong>From:</strong> Ashley Pittman (<em>ashley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-08 06:55:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7199.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7223.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I've seen several cases now where people have functional, installed MPI
<br>
libraries yet when they've come to use padb they have discovered a build
<br>
problem with the Message Queue DLL which prevents it from working.
<br>
<p>The most common problem is unresolved symbols in the dll meaning the
<br>
debugger cannot dlopen it or in some cases can only dlopen it with
<br>
RTLD_LAZY which introduces other problems.
<br>
<p>Attached is a patch to the OpenMPI sources which adds a simple test
<br>
program, to be built and run as part of the build procedure that
<br>
verifies the dll can be loaded without error.
<br>
<p>The test program itself is good, I'm less happy about the autoconf
<br>
integration, it adds a check-local target in the debuggers makefile (the
<br>
only one in the source tree) which fails if there is a problem with the
<br>
DLL, this causes &quot;make check&quot; to fail however this isn't run by either
<br>
&quot;make&quot; or &quot;make install&quot;.  As such it's a step forward but it would be
<br>
better if the test was performed in the make stage, I haven't figured
<br>
out how to do this however.
<br>
<p>Ashley,
<br>
<p><pre>
-- 
Ashley Pittman, Bath, UK.
Padb - A parallel job inspection tool for cluster computing
<a href="http://padb.pittman.org.uk">http://padb.pittman.org.uk</a>

</pre>
<p>
<p><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7200/dll-check.patch">dll-check.patch</a>
</ul>
<!-- attachment="dll-check.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Previous message:</strong> <a href="7199.php">Sylvain Jeaugey: "Re: [OMPI devel] Crash when using MPI_REAL8"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7201.php">Terry Dontje: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
<li><strong>Reply:</strong> <a href="7223.php">Jeff Squyres: "Re: [OMPI devel] [patch] Verifying the message queue DLL build"</a>
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
