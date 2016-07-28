<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 22 20:24:44 2008" -->
<!-- isoreceived="20080923002444" -->
<!-- sent="Mon, 22 Sep 2008 20:24:37 -0400" -->
<!-- isosent="20080923002437" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="A41AF3AA-0D5C-4FB8-9755-B46509687596_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48535380809221548k255acba2yf26669b471037b4d_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Configure and Build ok, but mpi module not recognized?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-22 20:24:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6684.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6682.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6684.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6684.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 22, 2008, at 6:48 PM, Brian Harker wrote:
<br>
<p><span class="quotelev1">&gt; when I compile my production code, I get:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; fortcom: Error: driver.f90: line 211: There is no matching specific
</span><br>
<span class="quotelev1">&gt; subroutine for this generic subroutine call.   [MPI_SEND]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems odd that it would spit up on MPI_SEND, but has no problem with
</span><br>
<span class="quotelev1">&gt; MPI_RECV...  What do you guys think?  And thanks again for your help
</span><br>
<span class="quotelev1">&gt; and patience?
</span><br>
<p>The F90 MPI bindings have some well-known design flaws (i.e., problems  
<br>
with the standard itself, not any particular implementation).  Many of  
<br>
them center around the fact that F90 is a strongly-typed language.   
<br>
See this paper for some details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/">http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/</a>
<br>
<p>Here's the highlights, as they pertain to writing F90 MPI apps:
<br>
<p>- There is no equivalent to C's (void*).  This means that the F90 MPI  
<br>
bindings cannot accept user-defined datatypes.
<br>
<p>- This also means that *every* pre-defined type must have a F90 MPI  
<br>
binding.  There are approximately 15 intrinsic size/type  
<br>
combinations.  There are 50 MPI functions that take one choice buffer  
<br>
(e.g., MPI_SEND, etc.), and 25 functions that take two choice buffers  
<br>
(e.g., MPI_REDUCE).  I'm copying this math from the paper, and I think  
<br>
we got it slightly wrong (there was a discussion about it on this list  
<br>
a while ago), but it results in many *millions* of F90 MPI bindings  
<br>
functions.  There's no compiler on the planet than can handle all of  
<br>
these in a single F90 module.
<br>
<p>Open MPI compensates for this with the following:
<br>
<p>- F90 bindings are not created for any of the 2-choice-buffer functions
<br>
- F90 bindings are created for all the 1-choice-buffer functions, but  
<br>
only for dimensions up to N dimensions (N defaults to 4, IIRC).  You  
<br>
can change the value of N with OMPI's configure script; use the --with- 
<br>
f90-max-array-dim.  The maximum value of N is 7.
<br>
<p>So -- your app failed to compile because you either used a user- 
<br>
defined datatype or you used an array with a dimension greater than  
<br>
4.  If it was a greater-dimension issue, you can reconfigure/recompile/ 
<br>
reinstall OMPI (again, sorry) with a larger N value.  If it was a user- 
<br>
defined datatype, you unfortunately have to &quot;include mpif.h&quot; in that  
<br>
subroutine/function/whatever, sorry (and you lose the type  
<br>
checking).  :-(
<br>
<p>Here's some info from OMPI's README:
<br>
<p>-----
<br>
- The Fortran 90 MPI bindings can now be built in one of three sizes
<br>
&nbsp;&nbsp;&nbsp;using --with-mpi-f90-size=SIZE (see description below).  These sizes
<br>
&nbsp;&nbsp;&nbsp;reflect the number of MPI functions included in the &quot;mpi&quot; Fortran 90
<br>
&nbsp;&nbsp;&nbsp;module and therefore which functions will be subject to strict type
<br>
&nbsp;&nbsp;&nbsp;checking.  All functions not included in the Fortran 90 module can
<br>
&nbsp;&nbsp;&nbsp;still be invoked from F90 applications, but will fall back to
<br>
&nbsp;&nbsp;&nbsp;Fortran-77 style checking (i.e., little/none).
<br>
<p>&nbsp;&nbsp;&nbsp;- trivial: Only includes F90-specific functions from MPI-2.  This
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;means overloaded versions of MPI_SIZEOF for all the MPI-supported
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;F90 intrinsic types.
<br>
<p>&nbsp;&nbsp;&nbsp;- small (default): All the functions in &quot;trivial&quot; plus all MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;functions that take no choice buffers (meaning buffers that are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specified by the user and are of type (void*) in the C bindings --
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;generally buffers specified for message passing).  Hence,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;functions like MPI_COMM_RANK are included, but functions like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SEND are not.
<br>
<p>&nbsp;&nbsp;&nbsp;- medium: All the functions in &quot;small&quot; plus all MPI functions that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;take one choice buffer (e.g., MPI_SEND, MPI_RECV, ...).  All
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;one-choice-buffer functions have overloaded variants for each of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the MPI-supported Fortran intrinsic types up to the number of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dimensions specified by --with-f90-max-array-dim (default value is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4).
<br>
<p>&nbsp;&nbsp;&nbsp;Increasing the size of the F90 module (in order from trivial, small,
<br>
&nbsp;&nbsp;&nbsp;and medium) will generally increase the length of time required to
<br>
&nbsp;&nbsp;&nbsp;compile user MPI applications.  Specifically, &quot;trivial&quot;- and
<br>
&nbsp;&nbsp;&nbsp;&quot;small&quot;-sized F90 modules generally allow user MPI applications to
<br>
&nbsp;&nbsp;&nbsp;be compiled fairly quickly but lose type safety for all MPI
<br>
&nbsp;&nbsp;&nbsp;functions with choice buffers.  &quot;medium&quot;-sized F90 modules generally
<br>
&nbsp;&nbsp;&nbsp;take longer to compile user applications but provide greater type
<br>
&nbsp;&nbsp;&nbsp;safety for MPI functions.
<br>
<p>&nbsp;&nbsp;&nbsp;Note that MPI functions with two choice buffers (e.g., MPI_GATHER)
<br>
&nbsp;&nbsp;&nbsp;are not currently included in Open MPI's F90 interface.  Calls to
<br>
&nbsp;&nbsp;&nbsp;these functions will automatically fall through to Open MPI's F77
<br>
&nbsp;&nbsp;&nbsp;interface.  A &quot;large&quot; size that includes the two choice buffer MPI
<br>
&nbsp;&nbsp;&nbsp;functions is possible in future versions of Open MPI.
<br>
-----
<br>
<p>FWIW, we're arguing^H^H^H^H^H^H^Hdiscussing new Fortran 2003 bindings  
<br>
for MPI in the MPI-3 Forum right now.  We have already addressed the  
<br>
problems discussed above (F03 now has an equivalent of (void*)), and  
<br>
hope to do a few more minor things as well.  There's also discussion  
<br>
of the possibility of a Boost.MPI-like Fortran 2003 MPI library that  
<br>
would take advantage of many of the features of the language, but be a  
<br>
little farther away from the official MPI bindings (see www.boost-org  
<br>
for details about how their nifty C++ library works on top of MPI).
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
<li><strong>Next message:</strong> <a href="6684.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Previous message:</strong> <a href="6682.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>In reply to:</strong> <a href="6679.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6684.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6684.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
