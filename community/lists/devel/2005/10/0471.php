<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Oct 21 17:15:52 2005" -->
<!-- isoreceived="20051021221552" -->
<!-- sent="Fri, 21 Oct 2005 17:15:51 -0500" -->
<!-- isosent="20051021221551" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  BUG: --disable-cxx still runs c++ configure tests" -->
<!-- id="A16B5C9C-6B10-45ED-A554-6A8AECC67214_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20051021164717.GD30127_at_kalmia.hozed.org" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-10-21 17:15:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0470.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0463.php">Troy Benjegerdes: "BUG: --disable-cxx still runs c++ configure tests"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, this was (in my opinion) a very poorly named configure option.   
<br>
--disable-cxx does not disable the need for a C++ compiler, only the  
<br>
building of the MPI-2 C++ bindings.  Some of our utilities are in C+ 
<br>
+, so a C++ compiler is always required.
<br>
<p>Brian
<br>
<p>On Oct 21, 2005, at 11:47 AM, Troy Benjegerdes wrote:
<br>
<p><span class="quotelev1">&gt;   $ ./configure --disable-cxx --prefix /scratch/troy/ompi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *** C++ compiler and preprocessor
</span><br>
<span class="quotelev1">&gt; checking for g++... no
</span><br>
<span class="quotelev1">&gt; checking for c++... no
</span><br>
<span class="quotelev1">&gt; checking for gpp... no
</span><br>
<span class="quotelev1">&gt; checking for aCC... no
</span><br>
<span class="quotelev1">&gt; checking for CC... no
</span><br>
<span class="quotelev1">&gt; checking for cxx... no
</span><br>
<span class="quotelev1">&gt; checking for cc++... no
</span><br>
<span class="quotelev1">&gt; checking for cl... no
</span><br>
<span class="quotelev1">&gt; checking for FCC... no
</span><br>
<span class="quotelev1">&gt; checking for KCC... no
</span><br>
<span class="quotelev1">&gt; checking for RCC... no
</span><br>
<span class="quotelev1">&gt; checking for xlC_r... no
</span><br>
<span class="quotelev1">&gt; checking for xlC... no
</span><br>
<span class="quotelev1">&gt; checking whether we are using the GNU C++ compiler... no
</span><br>
<span class="quotelev1">&gt; checking whether g++ accepts -g... no
</span><br>
<span class="quotelev1">&gt; checking dependency style of g++... none
</span><br>
<span class="quotelev1">&gt; checking how to run the C++ preprocessor... /lib/cpp
</span><br>
<span class="quotelev1">&gt; checking if compiler impersonates g++... no
</span><br>
<span class="quotelev1">&gt; configure: WARNING: -g has been added to CXXFLAGS (--enable-debug)
</span><br>
<span class="quotelev1">&gt; checking if want C++ exception handling... no
</span><br>
<span class="quotelev1">&gt; checking for C++ template_repository_directory... not used
</span><br>
<span class="quotelev1">&gt; checking for C++ compiler template parameters... none needed
</span><br>
<span class="quotelev1">&gt; checking for C++ optimization flags... -g
</span><br>
<span class="quotelev1">&gt; checking for bool... no
</span><br>
<span class="quotelev1">&gt; checking size of bool... 0
</span><br>
<span class="quotelev1">&gt; checking alignment of bool... configure: WARNING: *** Problem running
</span><br>
<span class="quotelev1">&gt; configure
</span><br>
<span class="quotelev1">&gt; test!
</span><br>
<span class="quotelev1">&gt; configure: WARNING: *** See config.log for details.
</span><br>
<span class="quotelev1">&gt; configure: error: *** Cannot continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0472.php">Troy Benjegerdes: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>Previous message:</strong> <a href="0470.php">George Bosilca: "Re:  Segfaults on startup? (ORTE_ERROR_LOG)"</a>
<li><strong>In reply to:</strong> <a href="0463.php">Troy Benjegerdes: "BUG: --disable-cxx still runs c++ configure tests"</a>
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
