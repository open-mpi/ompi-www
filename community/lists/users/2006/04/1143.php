<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 15:38:02 2006" -->
<!-- isoreceived="20060425193802" -->
<!-- sent="Tue, 25 Apr 2006 15:37:50 -0400" -->
<!-- isosent="20060425193750" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] f90 module files compile a lot faster" -->
<!-- id="0D4D27BE-BFA8-4449-9F4C-9BC063375FE7_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF709240_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-25 15:37:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1144.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1142.php">Michael Kluskens: "[OMPI users]  Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1144.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Minor suggestion, change the first sentence to read:
<br>
<p>- The Fortran 90 MPI bindings can now be built in one of four sizes  
<br>
using --with-mpi-f90-size=SIZE.
<br>
<p>Also, Open MPI 1.2 changes the --with-mpi-param-check default from  
<br>
always to runtime according to my comparison of the 1.1 README and  
<br>
1.2 configure --help; however, the 1.2 README disagrees with the 1.2  
<br>
configure --help (betting the latter is more correct, maybe).
<br>
<p>Michael
<br>
<p>On Apr 25, 2006, at 1:16 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; How's this (from the new README):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - The Fortran 90 MPI bindings can now be built in one of four sizes.
</span><br>
<span class="quotelev1">&gt;   These sizes reflect the number of MPI functions included in the
</span><br>
<span class="quotelev1">&gt;   &quot;mpi&quot; Fortran 90 module and therefore which functions will be
</span><br>
<span class="quotelev1">&gt;   subject to strict type checking.  All functions not included in the
</span><br>
<span class="quotelev1">&gt;   Fortran 90 module can still be invoked from F90 applications, but
</span><br>
<span class="quotelev1">&gt;   will fall back to Fortran-77 style checking (i.e., little/none).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - trivial: Only includes F90-specific functions from MPI-2.  This
</span><br>
<span class="quotelev1">&gt;     means overloaded versions of MPI_SIZEOF for all the MPI-supported
</span><br>
<span class="quotelev1">&gt;     F90 intrinsic types.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - small (default): All the functions in &quot;trivial&quot; plus all MPI
</span><br>
<span class="quotelev1">&gt;     functions that take no choice buffers (meaning buffers that are
</span><br>
<span class="quotelev1">&gt;     specified by the user and are of type (void*) in the C bindings --
</span><br>
<span class="quotelev1">&gt;     generally buffers specified for message passing).  Hence,
</span><br>
<span class="quotelev1">&gt;     functions like MPI_COMM_RANK are included, but functions like
</span><br>
<span class="quotelev1">&gt;     MPI_SEND are not.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - medium: All the functions in &quot;small&quot; plus all MPI functions that
</span><br>
<span class="quotelev1">&gt;     take one choice buffer (e.g., MPI_SEND, MPI_RECV, ...).  All
</span><br>
<span class="quotelev1">&gt;     one-choice-buffer functions have overloaded variants for each of
</span><br>
<span class="quotelev1">&gt;     the MPI-supported Fortran intrinsic types up to the number of
</span><br>
<span class="quotelev1">&gt;     dimensions specified by --with-f90-max-array-dim (default value is
</span><br>
<span class="quotelev1">&gt;     4).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   - large: All MPI functions (i.e., all the functions in &quot;medium&quot; plus
</span><br>
<span class="quotelev1">&gt;     all MPI functions that take two choice buffers, such as
</span><br>
<span class="quotelev1">&gt;     MPI_SCATTER, MPI_GATHER, etc.).  All the two-choice-buffer
</span><br>
<span class="quotelev1">&gt;     functions will have variants for each of the MPI-supported Fortran
</span><br>
<span class="quotelev1">&gt;     intrinsic types up to the number of dimensions specified by
</span><br>
<span class="quotelev1">&gt;     --with-f90-max-array-dim, but both buffers will be of the same
</span><br>
<span class="quotelev1">&gt;     type.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Increasing the size of the F90 module (in order from trivial, small,
</span><br>
<span class="quotelev1">&gt;   medium, and large) will generally increase the length of time
</span><br>
<span class="quotelev1">&gt;   required to compile user MPI applications.  Specifically, &quot;trivial&quot;-
</span><br>
<span class="quotelev1">&gt;   and &quot;small&quot;-sized F90 modules generally allow user MPI applications
</span><br>
<span class="quotelev1">&gt;   to be compiled fairly quickly but lose type safety for all MPI
</span><br>
<span class="quotelev1">&gt;   functions with choice buffers.  &quot;medium&quot;- and &quot;large&quot;-sized F90
</span><br>
<span class="quotelev1">&gt;   modules generally take longer to compile user applications but
</span><br>
<span class="quotelev1">&gt;   provide greater type safety for MPI functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I for one don't read the docs every week with new 1.1 alpha tests.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Er... Well, good!  Then I can claim that the docs were there the whole
</span><br>
<span class="quotelev1">&gt; time.  ;-)
</span><br>
<p>Other than the fact that I just finished reading the 1.2 README  
<br>
(nightly snapshot -- I'm bleeding enough with that, SVN would be a  
<br>
bit much for me).
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1144.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Previous message:</strong> <a href="1142.php">Michael Kluskens: "[OMPI users]  Spawn and Disconnect"</a>
<li><strong>In reply to:</strong> <a href="1141.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1144.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
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
