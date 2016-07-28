<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 21 17:39:46 2005" -->
<!-- isoreceived="20051121223946" -->
<!-- sent="Mon, 21 Nov 2005 17:39:36 -0500" -->
<!-- isosent="20051121223936" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="1.0.1 in the works" -->
<!-- id="ba3510bfb3b04016fdb641ab8ff3c3d5_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-11-21 17:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0538.php">Jeff Squyres: "NEWS file"</a>
<li><strong>Previous message:</strong> <a href="0536.php">Jeff Squyres: "Re:  libtool question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks --
<br>
<p>We just found a fairly serious issue in the sm btl that is going to 
<br>
force a 1.0.1 in the Near Future (i.e., sooner than we expected).  
<br>
Specifically, at least part of the sm btl fixes from the trunk did not 
<br>
make it into the 1.0 release (I'm looking through the logs to figure 
<br>
out what happened -- I could have sworn that I took them all over to 
<br>
v1.0, but apparently I goofed somewhere along the way :-( ).
<br>
<p>So here's a brief list of the changes that are expected for 1.0.1:
<br>
<p>- fix --with-wrapper-ldflags
<br>
- removed a debugging printf in orterun
<br>
- some compiler warning fixes for openib and mvapi btl components
<br>
- some iof fixes
<br>
- add a value for MPI_WIN_NULL in mpif.h
<br>
- sm btl fixes
<br>
<p>There will likely eventually be a 1.0.2 with fixes for the .TRUE. value 
<br>
in Fortran compilers (this has not received adequate testing for 
<br>
1.0.1).
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
<li><strong>Next message:</strong> <a href="0538.php">Jeff Squyres: "NEWS file"</a>
<li><strong>Previous message:</strong> <a href="0536.php">Jeff Squyres: "Re:  libtool question"</a>
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
