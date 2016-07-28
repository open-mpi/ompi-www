<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 16:52:53 2005" -->
<!-- isoreceived="20050901215253" -->
<!-- sent="Thu, 1 Sep 2005 17:52:46 -0400" -->
<!-- isosent="20050901215246" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="IU odin cluster" -->
<!-- id="54155e75ba8f4807e24405ce9f8ade9d_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-01 16:52:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0295.php">Ralph H. Castain: "Re:  RHC development plans"</a>
<li><strong>Previous message:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Everyone using the odin cluster at IU:
<br>
<p>There was an unscheduled upgrade of the g++ compiler on the odin 
<br>
cluster at IU this afternoon (from 3.4.3 to 3.4.4 to get an important 
<br>
bug fix).  The end result is that if you're compiling the C++ MPI 
<br>
bindings in an OMPI tree (which is the default), you'll need to re-run 
<br>
configure and build again. :-(
<br>
<p>This is because libtool snarfs various paths for C++ libraries and 
<br>
stashes them away for use during the build.  If you previously ran 
<br>
configure with the 3.4.3 compiler, these paths are now all wrong (i.e., 
<br>
they don't match the g++ compiler that is used to compile/link).  
<br>
Hence, you need to re-run configure again and build again.
<br>
<p>Sorry about this -- it wasn't planned, but was rather urgent (the bug 
<br>
was so bad that fprintf() was returning 1, regardless of the number of 
<br>
characters written!).
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
<li><strong>Next message:</strong> <a href="0295.php">Ralph H. Castain: "Re:  RHC development plans"</a>
<li><strong>Previous message:</strong> <a href="0293.php">Tim S. Woodall: "Re:  gm configure status"</a>
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
