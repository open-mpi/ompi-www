<?
$subject_val = "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 23 08:07:00 2008" -->
<!-- isoreceived="20080923120700" -->
<!-- sent="Tue, 23 Sep 2008 08:06:53 -0400" -->
<!-- isosent="20080923120653" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Configure and Build ok, but mpi module not recognized?" -->
<!-- id="8A79FE95-93EA-49FA-BA9D-EA73BD5BAF37_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48535380809221754g5440fd28wc1add825d9a74ec_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-09-23 08:06:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6697.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Previous message:</strong> <a href="6695.php">Jed Brown: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>In reply to:</strong> <a href="6687.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6698.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6698.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's not entirely clear from the later messages whether you got it  
<br>
running with mpif.h or &quot;use mpi&quot;.
<br>
<p>What is the source code around the problematic line when you &quot;use  
<br>
mpi&quot;?  (including all the declarations of the arguments, etc.)
<br>
<p>MPICH2's F90 module is a bit different than ours -- I don't remember  
<br>
if they do MPI_SEND and all of the single-choice buffer function  
<br>
overloads (because of the problem I described yesterday).
<br>
<p>Since we already found the compile bug with the F90 module, I'd like  
<br>
to ensure that we don't also have an F90 MPI interface bug, too.
<br>
<p><p>On Sep 22, 2008, at 8:54 PM, Brian Harker wrote:
<br>
<p><span class="quotelev1">&gt; Yes I have matched all the arguments.  I should mention that the code
</span><br>
<span class="quotelev1">&gt; compiles and runs flawlessly using MPICH2-1.0.7 so it's got to be an
</span><br>
<span class="quotelev1">&gt; issue with my specific build of openMPI. I want to get openMPI up and
</span><br>
<span class="quotelev1">&gt; running for performance comparisons.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Sep 22, 2008 at 6:43 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What's the source code in question, then?  Did you match all the  
</span><br>
<span class="quotelev2">&gt;&gt; arguments?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 22, 2008, at 8:36 PM, Brian Harker wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Nope, no user-defined types or arrays greater than 2 dimensions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mon, Sep 22, 2008 at 6:24 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 22, 2008, at 6:48 PM, Brian Harker wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; when I compile my production code, I get:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; fortcom: Error: driver.f90: line 211: There is no matching  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; specific
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subroutine for this generic subroutine call.   [MPI_SEND]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Seems odd that it would spit up on MPI_SEND, but has no problem  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_RECV...  What do you guys think?  And thanks again for your  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; help
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and patience?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The F90 MPI bindings have some well-known design flaws (i.e.,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the standard itself, not any particular implementation).  Many of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; them
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; center around the fact that F90 is a strongly-typed language.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; See this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; paper for some details:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/">http://www.open-mpi.org/papers/euro-pvmmpi-2005-fortran/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's the highlights, as they pertain to writing F90 MPI apps:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - There is no equivalent to C's (void*).  This means that the F90  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bindings cannot accept user-defined datatypes.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - This also means that *every* pre-defined type must have a F90 MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; binding.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are approximately 15 intrinsic size/type combinations.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; There are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 50
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI functions that take one choice buffer (e.g., MPI_SEND, etc.),  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and 25
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functions that take two choice buffers (e.g., MPI_REDUCE).  I'm  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; copying
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; math from the paper, and I think we got it slightly wrong (there  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; was a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; discussion about it on this list a while ago), but it results in  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; many
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; *millions* of F90 MPI bindings functions.  There's no compiler on  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; planet
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; than can handle all of these in a single F90 module.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Open MPI compensates for this with the following:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - F90 bindings are not created for any of the 2-choice-buffer  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functions
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - F90 bindings are created for all the 1-choice-buffer functions,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for dimensions up to N dimensions (N defaults to 4, IIRC).  You can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; change
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the value of N with OMPI's configure script; use the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-f90-max-array-dim.  The maximum value of N is 7.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So -- your app failed to compile because you either used a user- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; defined
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datatype or you used an array with a dimension greater than 4.   
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If it was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; greater-dimension issue, you can reconfigure/recompile/reinstall  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (again, sorry) with a larger N value.  If it was a user-defined  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; datatype,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you unfortunately have to &quot;include mpif.h&quot; in that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; subroutine/function/whatever, sorry (and you lose the type  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here's some info from OMPI's README:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - The Fortran 90 MPI bindings can now be built in one of three  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sizes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; using --with-mpi-f90-size=SIZE (see description below).  These  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; sizes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reflect the number of MPI functions included in the &quot;mpi&quot; Fortran  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 90
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module and therefore which functions will be subject to strict type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; checking.  All functions not included in the Fortran 90 module can
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; still be invoked from F90 applications, but will fall back to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Fortran-77 style checking (i.e., little/none).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - trivial: Only includes F90-specific functions from MPI-2.  This
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; means overloaded versions of MPI_SIZEOF for all the MPI-supported
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; F90 intrinsic types.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - small (default): All the functions in &quot;trivial&quot; plus all MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functions that take no choice buffers (meaning buffers that are
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; specified by the user and are of type (void*) in the C bindings --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generally buffers specified for message passing).  Hence,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functions like MPI_COMM_RANK are included, but functions like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_SEND are not.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - medium: All the functions in &quot;small&quot; plus all MPI functions that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; take one choice buffer (e.g., MPI_SEND, MPI_RECV, ...).  All
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; one-choice-buffer functions have overloaded variants for each of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the MPI-supported Fortran intrinsic types up to the number of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; dimensions specified by --with-f90-max-array-dim (default value is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Increasing the size of the F90 module (in order from trivial,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; small,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and medium) will generally increase the length of time required to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; compile user MPI applications.  Specifically, &quot;trivial&quot;- and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;small&quot;-sized F90 modules generally allow user MPI applications to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; be compiled fairly quickly but lose type safety for all MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functions with choice buffers.  &quot;medium&quot;-sized F90 modules  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generally
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; take longer to compile user applications but provide greater type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; safety for MPI functions.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note that MPI functions with two choice buffers (e.g., MPI_GATHER)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; are not currently included in Open MPI's F90 interface.  Calls to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; these functions will automatically fall through to Open MPI's F77
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; interface.  A &quot;large&quot; size that includes the two choice buffer MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; functions is possible in future versions of Open MPI.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; FWIW, we're arguing^H^H^H^H^H^H^Hdiscussing new Fortran 2003  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bindings for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI in the MPI-3 Forum right now.  We have already addressed the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; problems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; discussed above (F03 now has an equivalent of (void*)), and hope  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to do a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; few
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; more minor things as well.  There's also discussion of the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possibility of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Boost.MPI-like Fortran 2003 MPI library that would take advantage  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of many
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the features of the language, but be a little farther away from the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; official
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI bindings (see www.boost-org for details about how their nifty  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; C++
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; library works on top of MPI).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; brian.harker_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;In science, there is only physics; all the rest is stamp- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collecting.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Ernest Rutherford
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt; brian.harker_at_[hidden]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;In science, there is only physics; all the rest is stamp-collecting.&quot;
</span><br>
<span class="quotelev1">&gt; -Ernest Rutherford
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6697.php">Jeff Squyres: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>Previous message:</strong> <a href="6695.php">Jed Brown: "Re: [OMPI users] where is mpif.h ?"</a>
<li><strong>In reply to:</strong> <a href="6687.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6698.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
<li><strong>Reply:</strong> <a href="6698.php">Brian Harker: "Re: [OMPI users] Configure and Build ok, but mpi module not recognized?"</a>
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
