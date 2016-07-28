<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb 15 14:51:26 2007" -->
<!-- isoreceived="20070215195126" -->
<!-- sent="Thu, 15 Feb 2007 12:50:07 -0700" -->
<!-- isosent="20070215195007" -->
<!-- name="Brian Barrett" -->
<!-- email="bbarrett_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] installed wrappers" -->
<!-- id="340A1EB9-883F-4832-9CA5-C1FDCCF956B1_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="45D42DD9.5000506_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Brian Barrett (<em>bbarrett_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-15 14:50:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1309.php">Jeff Squyres: "Re: [OMPI devel] v1.1/opal/event/poll.c:132: syntax error"</a>
<li><strong>Previous message:</strong> <a href="1307.php">Bert Wesarg: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>In reply to:</strong> <a href="1299.php">Bert Wesarg: "[OMPI devel] installed wrappers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 15, 2007, at 2:54 AM, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; why are the mpiCC, mpif77, and mpif90 wrappers installed, when i  
</span><br>
<span class="quotelev1">&gt; specify
</span><br>
<span class="quotelev1">&gt; --disable-mpi-cxx, --disable-mpi-f77, and --disable-mpi-f90 for the
</span><br>
<span class="quotelev1">&gt; ./configure?
</span><br>
<p>The Fortran 77 and Fortran 90 compilers will be disabled and return  
<br>
an error if those language bindings are disabled.  This seemed to be  
<br>
easier for users to deal with than sometimes not having the wrapper  
<br>
compilers available.  And also made it more clear to users when they  
<br>
were using a build of Open MPI without those bindings, which removed  
<br>
support cost from us.
<br>
<p>The C++ wrapper is a slightly more complicated issue.  Many users  
<br>
want to compile C++ code, but still use the C bindings.  So they  
<br>
expect mpiCC/mpic++ to work even when the C++ bindings aren't  
<br>
installed (just without linking in the C++ bindings).
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1309.php">Jeff Squyres: "Re: [OMPI devel] v1.1/opal/event/poll.c:132: syntax error"</a>
<li><strong>Previous message:</strong> <a href="1307.php">Bert Wesarg: "Re: [OMPI devel] build problem with 1.1.4"</a>
<li><strong>In reply to:</strong> <a href="1299.php">Bert Wesarg: "[OMPI devel] installed wrappers"</a>
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
