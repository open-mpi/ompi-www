<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Oct 24 11:43:40 2005" -->
<!-- isoreceived="20051024164340" -->
<!-- sent="Mon, 24 Oct 2005 11:43:38 -0500" -->
<!-- isosent="20051024164338" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="435D0F3A.2090909_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20051021232632.GG30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-24 11:43:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0480.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Ralf Wildenhues: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0493.php">Ralf Wildenhues: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Troy Benjegerdes wrote:
<br>
<p><span class="quotelev1">&gt; Another note.. I think I may have had some problems because I built with
</span><br>
<span class="quotelev1">&gt; 'make -j16'.. has anyone else tried parallel make builds?
</span><br>
<p>I am jumping into this thread late -- but FWIW:
<br>
<p>1. Yes, we build VPATH (with both relative and absolute flavors) every 
<br>
night.  So the build works fine.  If gdb can't find stuff, that's a 
<br>
different issue -- I don't know if the linker stores VPATH information 
<br>
properly for debuggers to find files properly or not (this is part of 
<br>
the Automake magic that we rely on).
<br>
<p>2. Yes, we do parallel builds all the time (and every night).
<br>
<p>3. I committed the ddt and show_help fixes to the v1.0 branch this morning.
<br>
<p>So neither of #1 or #2 should be part of your problem.  However, you 
<br>
*do* need to be careful about using one and only one installation.  At 
<br>
least one of your error messages made it look like you were mixing 
<br>
multiple installations, and/or not re-compiling/re-linking OMPI and/or 
<br>
your application properly:
<br>
<p>-----
<br>
troy_at_octeropt:/usr/src/ompi-buildtest$ /usr/local/bin/mpirun -np 2
<br>
hostname
<br>
/usr/local/bin/mpirun: Symbol `opal_event_lock' has different size in
<br>
shared object, consider re-linking
<br>
-----
<br>
<p>This is a canonical example of compiling/linking against one version of 
<br>
a library, and then running with a different one (i.e., one with a 
<br>
different symbol size than the application was originally linked against).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0482.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0480.php">Brian Barrett: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0493.php">Ralf Wildenhues: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Reply:</strong> <a href="0493.php">Ralf Wildenhues: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
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
