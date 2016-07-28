<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 08:04:12 2005" -->
<!-- isoreceived="20050826130412" -->
<!-- sent="Fri, 26 Aug 2005 09:04:05 -0400" -->
<!-- isosent="20050826130405" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="F90 support" -->
<!-- id="b2590d4890b1e897f875a9271f4c2ab3_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-26 08:04:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0241.php">Jeff Squyres: "maffinity framework"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With help from Brian and Craig, we have now F90 MPI bindings support 
<br>
working properly.  Because of the time required to compile the F90 
<br>
bindings, they are automatically disabled in SVN checkout builds.  You 
<br>
can enable them with --enable-f90.
<br>
<p>*** The F90 bindings are now automatically enabled in tarball and VPATH 
<br>
builds ***
<br>
<p>Unfortunately, the current generation of Libtool (1.5.x) does not 
<br>
support building F90 shared libraries, so the F90 support library can 
<br>
only be built statically (even if you --enable-shared, the F90 library 
<br>
will be built statically).  Bummer.  :-\
<br>
<p>Ralf Wildenhues, one of the Libtool developers and a long-time Friend 
<br>
of LAM/MPI, assures me that F90 support will be included in the 
<br>
forthcoming Libtool 2.0 series.  He's even testing with the Open MPI 
<br>
code base to ensure that everything will work properly.  Woo hoo -- 
<br>
thanks Ralf!
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
<li><strong>Next message:</strong> <a href="0243.php">Troy Benjegerdes: "Re:  OpenIB results"</a>
<li><strong>Previous message:</strong> <a href="0241.php">Jeff Squyres: "maffinity framework"</a>
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
