<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 11:06:49 2007" -->
<!-- isoreceived="20070102160649" -->
<!-- sent="Tue, 2 Jan 2007 11:06:33 -0500" -->
<!-- isosent="20070102160633" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945" -->
<!-- id="5B838E4B-4427-4791-9CC2-5A6BB02B7FCA_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200612302341.kBUNfhk1028338_at_sourcehaven.osl.iu.edu" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 11:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1242.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/12/1240.php">Brian W. Barrett: "Re: [OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1242.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<li><strong>Reply:</strong> <a href="1242.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Using a STL map to keep in relation the C pointer with the C++ object  
<br>
isn't that way more expensive that it is supposed to be ? The STL map  
<br>
is just a hash table, it can be as optimized as you want, it's still  
<br>
a hash table. How about using exactly the same mechanism as for the  
<br>
Fortran handler ? It's cheap, it's based on an array, it's thread  
<br>
save and we just reuse the code already there.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Dec 30, 2006, at 6:41 PM, brbarret_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Author: brbarret
</span><br>
<span class="quotelev1">&gt; Date: 2006-12-30 18:41:42 EST (Sat, 30 Dec 2006)
</span><br>
<span class="quotelev1">&gt; New Revision: 12945
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Added:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/datatype.cc
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/file.cc
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/win.cc
</span><br>
<span class="quotelev1">&gt; Modified:
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/errhandler/errhandler.c
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/errhandler/errhandler.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/Makefile.am
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/comm.cc
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/comm.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/comm_inln.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/datatype.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/datatype_inln.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/errhandler.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/file.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/file_inln.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/functions.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/functions_inln.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/intercepts.cc
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/mpicxx.cc
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/mpicxx.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/win.h
</span><br>
<span class="quotelev1">&gt;    trunk/ompi/mpi/cxx/win_inln.h
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Log:
</span><br>
<span class="quotelev1">&gt; A number of MPI-2 compliance fixes for the C++ bindings:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   * Added Create_errhandler for MPI::File
</span><br>
<span class="quotelev1">&gt;   * Make errors_throw_exceptions a first-class predefined exception
</span><br>
<span class="quotelev1">&gt;     handler, and make it work for Comm, File, and Win
</span><br>
<span class="quotelev1">&gt;   * Deal with error handlers and attributes for Files, Types, and Wins
</span><br>
<span class="quotelev1">&gt;     like we do with Comms - can't just cast the callbacks from C++
</span><br>
<span class="quotelev1">&gt;     signatures to C signatures.  Callbacks will then fire with the
</span><br>
<span class="quotelev1">&gt;     C object, not the C++ object.  That's bad.
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1242.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/12/1240.php">Brian W. Barrett: "Re: [OMPI devel] incorrect definition of MPI_ERRCODES_IGNORE?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1242.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<li><strong>Reply:</strong> <a href="1242.php">Brian W. Barrett: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
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
