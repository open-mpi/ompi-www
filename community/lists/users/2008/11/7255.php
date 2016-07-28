<?
$subject_val = "Re: [OMPI users] Open MPI programs with autoconf/automake?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 10 11:59:41 2008" -->
<!-- isoreceived="20081110165941" -->
<!-- sent="Mon, 10 Nov 2008 11:27:11 -0500" -->
<!-- isosent="20081110162711" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI programs with autoconf/automake?" -->
<!-- id="425083A6-66E4-4A45-B1C2-93BAD9080638_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20081110114147.GO20100_at_brakk.ethz.ch" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI programs with autoconf/automake?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-10 11:27:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7256.php">Ray Muno: "[OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7254.php">Oleg V. Zhylin: "[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7272.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7272.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 10, 2008, at 6:41 AM, Jed Brown wrote:
<br>
<p><span class="quotelev2">&gt;&gt; With #define's and compiler flags, I think that can be  easily done  
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; was wondering if this is something that developers using MPI do and
</span><br>
<span class="quotelev2">&gt;&gt; whether AC/AM  supports it.
</span><br>
<p>AC will allow you to #define whatever you want -- look at the  
<br>
documentation for AC_DEFINE and AC_DEFINE_UNQUOTED.  You can also tell  
<br>
your configure script to accept various --with-&lt;foo&gt; and --enable- 
<br>
&lt;foo&gt; arguments; see the docs for AC_ARG_WITH and AC_ARG_ENABLE.
<br>
<p><span class="quotelev1">&gt; The normal way to do this is by building against a serial  
</span><br>
<span class="quotelev1">&gt; implementation
</span><br>
<span class="quotelev1">&gt; of MPI.  Lots of parallel numerical libraries bundle such an
</span><br>
<span class="quotelev1">&gt; implementation so you could just grab one of those.  For example, see
</span><br>
<span class="quotelev1">&gt; PETSc's mpiuni ($PETSC_DIR/include/mpiuni/mpi.h and
</span><br>
<span class="quotelev1">&gt; $PETSC_DIR/src/sys/mpiuni/mpi.c) which implements many MPI calls as
</span><br>
<span class="quotelev1">&gt; macros.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that your serial implementation only needs to provide the  
</span><br>
<span class="quotelev1">&gt; subset of
</span><br>
<span class="quotelev1">&gt; MPI that your program actually uses.  For instance, if you never send
</span><br>
<span class="quotelev1">&gt; messages to yourself, you can implement MPI_Send as MPI_Abort since it
</span><br>
<span class="quotelev1">&gt; should never be called in serial.
</span><br>
<p>This is one viable way to do it.  Another way that I have seen is to  
<br>
use #define's (via AC_DEFINE / AC_DEFINE_UNQUOTED) to both define  
<br>
BUILDING_WITH_MPI to 0 or 1 (or some variant) and conditionally use  
<br>
the MPI wrapper compilers (or not) to build your application.  This  
<br>
technique is best suited to applications have are highly modular and  
<br>
can easily segregate all your calls to MPI in a single area that can  
<br>
be turned on / off with a #define.
<br>
<p>To put this more concretely, you can have this:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./configure --with-mpi
<br>
that does two things:
<br>
<p>1. set CC=mpicc (and friends) before calling AC_PROG_CC (and  
<br>
friends).  This will setup your app to be compiled with the MPI  
<br>
wrapper compilers, and therefore automatically link in libmpi, etc.
<br>
2. #define BUILDING_WITH_MPI to 1, so in your code you can do stuff like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#if BUILDING_WITH_MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(...);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#endif
<br>
<p>If --with-mpi is not specified, the following will happen:
<br>
<p>1. You don't set CC (and friends), so AC_PROG_CC will find the default  
<br>
compilers.  Hence, your app will not be compiled and linked against  
<br>
the MPI libraries.
<br>
2. #define BUILDING_WITH_MPI to 0, so the code above will compile out  
<br>
the call to MPI_Send().
<br>
<p>Both of these are valid techniques -- use whichever suits your app the  
<br>
best.
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
<li><strong>Next message:</strong> <a href="7256.php">Ray Muno: "[OMPI users] /dev/shm"</a>
<li><strong>Previous message:</strong> <a href="7254.php">Oleg V. Zhylin: "[OMPI users] Can I build development RPM from openmpi-1.2.8-1.src.rpm?"</a>
<li><strong>In reply to:</strong> <a href="7253.php">Jed Brown: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7272.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
<li><strong>Reply:</strong> <a href="7272.php">Raymond Wan: "Re: [OMPI users] Open MPI programs with autoconf/automake?"</a>
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
