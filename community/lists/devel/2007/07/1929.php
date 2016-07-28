<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jul 18 11:46:41 2007" -->
<!-- isoreceived="20070718154641" -->
<!-- sent="Wed, 18 Jul 2007 11:46:13 -0400" -->
<!-- isosent="20070718154613" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] optional fortran datatype fixes: 1.2.4?" -->
<!-- id="F5496568-573C-47EA-BDE3-B65E7059E8E4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2007-07-18 11:46:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1930.php">Jeff Squyres: "[OMPI devel] MPI_BOTTOM fixes: 1.2.4?"</a>
<li><strong>Previous message:</strong> <a href="1928.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1931.php">Jeff Squyres: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>Reply:</strong> <a href="1931.php">Jeff Squyres: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>Reply:</strong> <a href="1932.php">Rainer Keller: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Rainer --
<br>
<p>Did you want to get r14818 and r15137 into 1.2.4?  There's no CMR for  
<br>
them.  Here's your commit messages:
<br>
<p>r14818:
<br>
&nbsp;&nbsp;- The optional Fortran datatypes may not be available
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Do not initialize them, if not.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;If initializing them, check for the correct C-equivalent type
<br>
&nbsp;&nbsp;&nbsp;&nbsp;to copy from...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Issue a warning, when a type (e.g. REAL*16) is not available to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;build the type (here COMPLEX*32).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;This fixes issues with ompi and pacx.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Works with intel-compiler and FCFLAGS=&quot;-i8 -r8&quot; on ia32.
<br>
<p>r15137:
<br>
- Add the missing parts: add MPI_REAL2 to the end of the list
<br>
&nbsp;&nbsp;&nbsp;&nbsp;of Fortran datatypes (mpif-common.h) and the list of registered
<br>
&nbsp;&nbsp;&nbsp;&nbsp;datatypes: MOOG(REAL2).
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Configure and Compilation with ia32/gcc just finished, naturally
<br>
&nbsp;&nbsp;&nbsp;&nbsp;without real2.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1930.php">Jeff Squyres: "[OMPI devel] MPI_BOTTOM fixes: 1.2.4?"</a>
<li><strong>Previous message:</strong> <a href="1928.php">Ralph H Castain: "Re: [OMPI devel] LD_LIBRARY_PATH and process launch on a head node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1931.php">Jeff Squyres: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>Reply:</strong> <a href="1931.php">Jeff Squyres: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
<li><strong>Reply:</strong> <a href="1932.php">Rainer Keller: "Re: [OMPI devel] optional fortran datatype fixes: 1.2.4?"</a>
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
