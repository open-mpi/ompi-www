<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 25 02:48:41 2005" -->
<!-- isoreceived="20051025074841" -->
<!-- sent="Tue, 25 Oct 2005 09:48:33 +0200" -->
<!-- isosent="20051025074833" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re:  Segfaults on startup? (ORTE_ERROR_LOG)" -->
<!-- id="20051025074833.GC26025_at_iam.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="435D0F3A.2090909_at_open-mpi.org" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-25 02:48:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0494.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0481.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff, Troy,
<br>
<p>* Jeff Squyres wrote on Mon, Oct 24, 2005 at 06:43:38PM CEST:
<br>
<span class="quotelev1">&gt; Troy Benjegerdes wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Another note.. I think I may have had some problems because I built with
</span><br>
<span class="quotelev2">&gt; &gt; 'make -j16'.. has anyone else tried parallel make builds?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am jumping into this thread late -- but FWIW:
</span><br>
<p>Me too.  :)
<br>
<p><span class="quotelev1">&gt; 1. Yes, we build VPATH (with both relative and absolute flavors) every 
</span><br>
<span class="quotelev1">&gt; night.  So the build works fine.  If gdb can't find stuff, that's a 
</span><br>
<span class="quotelev1">&gt; different issue -- I don't know if the linker stores VPATH information 
</span><br>
<span class="quotelev1">&gt; properly for debuggers to find files properly or not (this is part of 
</span><br>
<span class="quotelev1">&gt; the Automake magic that we rely on).
</span><br>
<p>Finding sources is usually not an autotools or make issue, but as far as
<br>
I know, an issue of how sophisticated the compiler is with creating
<br>
debugging information (and whether the binary format allows to store
<br>
them).  In doubt, gdb's `directory' command may be used to specify
<br>
additional directories to have it search for source files in.
<br>
<p><span class="quotelev1">&gt; 2. Yes, we do parallel builds all the time (and every night).
</span><br>
<p>Now that Troy mentions it: I vaguely remember bug reports about
<br>
parallel builds failing with some versions of GNU make and autotools,
<br>
but have never been able to reproduce any of them (except for some that
<br>
turned out to have different cause).
<br>
<p>If this error persists, and you are willing to help, I would like to
<br>
know: exact versions of make, all autotools, exact source tree (svn
<br>
version of OpenMPI), build system details (OS, kernel version, number of
<br>
processors) and a complete log of configure and make output.  Thanks!
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0494.php">Jeff Squyres: "Re:  MPI_Barrier in Netpipe causes segfault"</a>
<li><strong>Previous message:</strong> <a href="0492.php">Ralf Wildenhues: "Re:  ppc64 linux bustage?"</a>
<li><strong>In reply to:</strong> <a href="0481.php">Jeff Squyres: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0474.php">Troy Benjegerdes: "Dumb SVN question (was RE: Segfaults on startup?)"</a>
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
