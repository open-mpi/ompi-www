<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  5 16:21:21 2006" -->
<!-- isoreceived="20060905202121" -->
<!-- sent="Tue, 05 Sep 2006 14:21:15 -0600" -->
<!-- isosent="20060905202115" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] include file locations" -->
<!-- id="1157487675.5599.30.camel_at_boxtop.lanl.gov" -->
<!-- inreplyto="9A9A1E24-A29C-427E-BA0F-DD74048C6597_at_apple.com" -->
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
<strong>Date:</strong> 2006-09-05 16:21:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1028.php">Ben Byer: "Re: [OMPI devel] include file locations"</a>
<li><strong>Previous message:</strong> <a href="1026.php">Ben Byer: "[OMPI devel] include file locations"</a>
<li><strong>In reply to:</strong> <a href="1026.php">Ben Byer: "[OMPI devel] include file locations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1028.php">Ben Byer: "Re: [OMPI devel] include file locations"</a>
<li><strong>Reply:</strong> <a href="1028.php">Ben Byer: "Re: [OMPI devel] include file locations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2006-09-05 at 12:07 -0700, Ben Byer wrote:
<br>
<span class="quotelev1">&gt; Hi all!  I'm happy to report that I was able to build OpenMPI 1.1 4- 
</span><br>
<span class="quotelev1">&gt; way fat (ppc, i386, ppc64, x86_64) using buildpackage.sh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I installed the resulting package, it installed the following  
</span><br>
<span class="quotelev1">&gt; include files:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/include/constants.h
</span><br>
<span class="quotelev1">&gt; /usr/include/mpi.h
</span><br>
<span class="quotelev1">&gt; /usr/include/mpif-common.h
</span><br>
<span class="quotelev1">&gt; /usr/include/mpif-config.h
</span><br>
<span class="quotelev1">&gt; /usr/include/mpif.h
</span><br>
<span class="quotelev1">&gt; /usr/include/totalview.h
</span><br>
<span class="quotelev1">&gt; /usr/include/types.h
</span><br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there a reason that those 7 include files installed in /usr/ 
</span><br>
<span class="quotelev1">&gt; include shouldn't be installed in /usr/include/openmpi instead?
</span><br>
<p>MPI users generally expect to find mpi.h and mpif.h in $prefix/include.
<br>
The mpif-common.h and mpif-config.h are artifacts of the way we deal
<br>
with the mixture of Fortran 77 and Fortran 90 bindings.  Thinking about
<br>
it, mpif.h, mpif-common.h, and mpif-config.h really shouldn't be
<br>
installed if you don't have Fortran 77 / Fortran 90 bindings.  This
<br>
needs to be fixed in the future.
<br>
<p>constants.h, totalview.h, and types.h should not have been installed in
<br>
$prefix/include.  This was a mistake in the 1.1 release that was fixed
<br>
in 1.1.1.
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1028.php">Ben Byer: "Re: [OMPI devel] include file locations"</a>
<li><strong>Previous message:</strong> <a href="1026.php">Ben Byer: "[OMPI devel] include file locations"</a>
<li><strong>In reply to:</strong> <a href="1026.php">Ben Byer: "[OMPI devel] include file locations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1028.php">Ben Byer: "Re: [OMPI devel] include file locations"</a>
<li><strong>Reply:</strong> <a href="1028.php">Ben Byer: "Re: [OMPI devel] include file locations"</a>
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
