<?
$subject_val = "[OMPI devel] opal_util_register_stackhandlers()";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 11:13:48 2009" -->
<!-- isoreceived="20090319151348" -->
<!-- sent="Thu, 19 Mar 2009 16:13:42 +0100" -->
<!-- isosent="20090319151342" -->
<!-- name="Kees Verstoep" -->
<!-- email="versto_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_util_register_stackhandlers()" -->
<!-- id="49C26126.2030508_at_cs.vu.nl" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] opal_util_register_stackhandlers()<br>
<strong>From:</strong> Kees Verstoep (<em>versto_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 11:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5667.php">Ralph Castain: "[OMPI devel] Open MPI v1.3.1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Reply:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Maybe reply:</strong> <a href="5674.php">Kees Verstoep: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Currently, opal_util_register_stackhandlers() in opal/util/stacktrace.c
<br>
calls sigaction() with a third NULL argument, meaning you don't look
<br>
at possibly previously installed signal handlers, and always override
<br>
them with print_stackframe().
<br>
<p>But there are actually realistic scenarios where an application actively
<br>
uses these signals, and also wants to use MPI.  As an example, the default
<br>
opal &quot;signal&quot; parameter settings are such that SIG_SEGV is redirected.
<br>
Typically, indeed, SIG_SEGV indicates a bug somewhere, and the stacktrace
<br>
from Open MPI is a nice bonus.   However, the Sun Java JDK uses SIG_SEGV
<br>
to detect when stacks should be automatically extended, and it stops working
<br>
rather ungracefully when that handler gets replaced.
<br>
<p>(BTW, we stumbled on this recently when we added an MPI backend for our
<br>
Ibis grid programming environment.  It took a bit of time to figure out
<br>
what was happening, since we got no usable stacktrace for the thread that
<br>
got bitten.  We suspected a bug in our native code mapping at first,
<br>
but MPICH did not have this problem).
<br>
<p>In most cases, you can of course work around it by manually changing
<br>
the opal &quot;signal&quot; list, but it would be nicer if Open MPI would detect
<br>
the situation, and e.g. only install the stack printer when there is
<br>
no handler yet, or at least warn about the possible clash.
<br>
<p>Thanks!
<br>
Kees Verstoep
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5669.php">Rainer Keller: "Re: [OMPI devel] RFC: Final cleanup of included headers"</a>
<li><strong>Previous message:</strong> <a href="5667.php">Ralph Castain: "[OMPI devel] Open MPI v1.3.1 released"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Reply:</strong> <a href="5671.php">Jeff Squyres: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
<li><strong>Maybe reply:</strong> <a href="5674.php">Kees Verstoep: "Re: [OMPI devel] opal_util_register_stackhandlers()"</a>
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
