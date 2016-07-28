<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 25 13:16:46 2006" -->
<!-- isoreceived="20060425171646" -->
<!-- sent="Tue, 25 Apr 2006 13:16:38 -0400" -->
<!-- isosent="20060425171638" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] f90 module files compile a lot faster" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF709240_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] f90 module files compile a lot faster" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-25 13:16:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1142.php">Michael Kluskens: "[OMPI users]  Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="1140.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe in reply to:</strong> <a href="1134.php">Michael Kluskens: "[OMPI users] f90 module files compile a lot faster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1143.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Reply:</strong> <a href="1143.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of Michael Kluskens
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, April 25, 2006 11:15 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] f90 module files compile a lot faster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could I/we have a translation of what &quot;trivial, small, 
</span><br>
<span class="quotelev1">&gt; medium, large&quot;  
</span><br>
<span class="quotelev1">&gt; means to the end user?
</span><br>
<p>How's this (from the new README):
<br>
<p>- The Fortran 90 MPI bindings can now be built in one of four sizes.
<br>
&nbsp;&nbsp;These sizes reflect the number of MPI functions included in the
<br>
&nbsp;&nbsp;&quot;mpi&quot; Fortran 90 module and therefore which functions will be
<br>
&nbsp;&nbsp;subject to strict type checking.  All functions not included in the
<br>
&nbsp;&nbsp;Fortran 90 module can still be invoked from F90 applications, but
<br>
&nbsp;&nbsp;will fall back to Fortran-77 style checking (i.e., little/none).
<br>
<p>&nbsp;&nbsp;- trivial: Only includes F90-specific functions from MPI-2.  This
<br>
&nbsp;&nbsp;&nbsp;&nbsp;means overloaded versions of MPI_SIZEOF for all the MPI-supported
<br>
&nbsp;&nbsp;&nbsp;&nbsp;F90 intrinsic types.
<br>
<p>&nbsp;&nbsp;- small (default): All the functions in &quot;trivial&quot; plus all MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;functions that take no choice buffers (meaning buffers that are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;specified by the user and are of type (void*) in the C bindings --
<br>
&nbsp;&nbsp;&nbsp;&nbsp;generally buffers specified for message passing).  Hence,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;functions like MPI_COMM_RANK are included, but functions like
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_SEND are not.
<br>
<p>&nbsp;&nbsp;- medium: All the functions in &quot;small&quot; plus all MPI functions that
<br>
&nbsp;&nbsp;&nbsp;&nbsp;take one choice buffer (e.g., MPI_SEND, MPI_RECV, ...).  All
<br>
&nbsp;&nbsp;&nbsp;&nbsp;one-choice-buffer functions have overloaded variants for each of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;the MPI-supported Fortran intrinsic types up to the number of
<br>
&nbsp;&nbsp;&nbsp;&nbsp;dimensions specified by --with-f90-max-array-dim (default value is
<br>
&nbsp;&nbsp;&nbsp;&nbsp;4).
<br>
<p>&nbsp;&nbsp;- large: All MPI functions (i.e., all the functions in &quot;medium&quot; plus
<br>
&nbsp;&nbsp;&nbsp;&nbsp;all MPI functions that take two choice buffers, such as
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_SCATTER, MPI_GATHER, etc.).  All the two-choice-buffer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;functions will have variants for each of the MPI-supported Fortran
<br>
&nbsp;&nbsp;&nbsp;&nbsp;intrinsic types up to the number of dimensions specified by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;--with-f90-max-array-dim, but both buffers will be of the same
<br>
&nbsp;&nbsp;&nbsp;&nbsp;type.
<br>
<p>&nbsp;&nbsp;Increasing the size of the F90 module (in order from trivial, small,
<br>
&nbsp;&nbsp;medium, and large) will generally increase the length of time
<br>
&nbsp;&nbsp;required to compile user MPI applications.  Specifically, &quot;trivial&quot;-
<br>
&nbsp;&nbsp;and &quot;small&quot;-sized F90 modules generally allow user MPI applications
<br>
&nbsp;&nbsp;to be compiled fairly quickly but lose type safety for all MPI
<br>
&nbsp;&nbsp;functions with choice buffers.  &quot;medium&quot;- and &quot;large&quot;-sized F90
<br>
&nbsp;&nbsp;modules generally take longer to compile user applications but
<br>
&nbsp;&nbsp;provide greater type safety for MPI functions.
<br>
<p><span class="quotelev1">&gt; I for one don't read the docs every week with new 1.1 alpha tests.
</span><br>
<p>Er... Well, good!  Then I can claim that the docs were there the whole
<br>
time.  ;-)
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1142.php">Michael Kluskens: "[OMPI users]  Spawn and Disconnect"</a>
<li><strong>Previous message:</strong> <a href="1140.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Maybe in reply to:</strong> <a href="1134.php">Michael Kluskens: "[OMPI users] f90 module files compile a lot faster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1143.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>Reply:</strong> <a href="1143.php">Michael Kluskens: "Re: [OMPI users] f90 module files compile a lot faster"</a>
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
