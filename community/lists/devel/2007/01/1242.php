<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jan  2 11:33:23 2007" -->
<!-- isoreceived="20070102163323" -->
<!-- sent="Tue, 2 Jan 2007 09:33:12 -0700" -->
<!-- isosent="20070102163312" -->
<!-- name="Brian W. Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945" -->
<!-- id="8BB36D12-2E36-4248-A554-15909DA99F7C_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5B838E4B-4427-4791-9CC2-5A6BB02B7FCA_at_cs.utk.edu" -->
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
<strong>From:</strong> Brian W. Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-02 11:33:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1243.php">Ralph H Castain: "[OMPI devel] OpenRTE telecon?"</a>
<li><strong>Previous message:</strong> <a href="1241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<li><strong>In reply to:</strong> <a href="1241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Because that's what we had been using and I was going for minimal  
<br>
change (since this is for v1.2).  Also note that *none* of this code  
<br>
is in performance critical areas.  Last I checked, we don't really  
<br>
care how fast attribute updates and error handlers are fired...  I  
<br>
think there are much better ways of dealing with all the problems  
<br>
addressed below, but to do it right means a fairly sizable change and  
<br>
that seemed like a bad idea at this time.
<br>
<p>Brian
<br>
<p>On Jan 2, 2007, at 9:06 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; Using a STL map to keep in relation the C pointer with the C++ object
</span><br>
<span class="quotelev1">&gt; isn't that way more expensive that it is supposed to be ? The STL map
</span><br>
<span class="quotelev1">&gt; is just a hash table, it can be as optimized as you want, it's still
</span><br>
<span class="quotelev1">&gt; a hash table. How about using exactly the same mechanism as for the
</span><br>
<span class="quotelev1">&gt; Fortran handler ? It's cheap, it's based on an array, it's thread
</span><br>
<span class="quotelev1">&gt; save and we just reuse the code already there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 30, 2006, at 6:41 PM, brbarret_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Author: brbarret
</span><br>
<span class="quotelev2">&gt;&gt; Date: 2006-12-30 18:41:42 EST (Sat, 30 Dec 2006)
</span><br>
<span class="quotelev2">&gt;&gt; New Revision: 12945
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Added:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/datatype.cc
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/file.cc
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/win.cc
</span><br>
<span class="quotelev2">&gt;&gt; Modified:
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/errhandler/errhandler.c
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/errhandler/errhandler.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/Makefile.am
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/comm.cc
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/comm.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/comm_inln.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/datatype.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/datatype_inln.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/errhandler.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/file.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/file_inln.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/functions.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/functions_inln.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/intercepts.cc
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/mpicxx.cc
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/mpicxx.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/win.h
</span><br>
<span class="quotelev2">&gt;&gt;    trunk/ompi/mpi/cxx/win_inln.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Log:
</span><br>
<span class="quotelev2">&gt;&gt; A number of MPI-2 compliance fixes for the C++ bindings:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   * Added Create_errhandler for MPI::File
</span><br>
<span class="quotelev2">&gt;&gt;   * Make errors_throw_exceptions a first-class predefined exception
</span><br>
<span class="quotelev2">&gt;&gt;     handler, and make it work for Comm, File, and Win
</span><br>
<span class="quotelev2">&gt;&gt;   * Deal with error handlers and attributes for Files, Types, and  
</span><br>
<span class="quotelev2">&gt;&gt; Wins
</span><br>
<span class="quotelev2">&gt;&gt;     like we do with Comms - can't just cast the callbacks from C++
</span><br>
<span class="quotelev2">&gt;&gt;     signatures to C signatures.  Callbacks will then fire with the
</span><br>
<span class="quotelev2">&gt;&gt;     C object, not the C++ object.  That's bad.
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
<p><pre>
-- 
   Brian Barrett
   Open MPI Team, CCS-1
   Los Alamos National Laboratory
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1243.php">Ralph H Castain: "[OMPI devel] OpenRTE telecon?"</a>
<li><strong>Previous message:</strong> <a href="1241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
<li><strong>In reply to:</strong> <a href="1241.php">George Bosilca: "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r12945"</a>
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
