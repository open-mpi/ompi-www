<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun  8 12:04:00 2006" -->
<!-- isoreceived="20060608160400" -->
<!-- sent="Thu, 8 Jun 2006 12:03:12 -0400" -->
<!-- isosent="20060608160312" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 error" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF9AEA5A_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] mpif90 error" -->
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
<strong>Date:</strong> 2006-06-08 12:03:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1386.php">Brock Palen: "[OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="1384.php">sdamjad: "[OMPI users] mpif90 error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1384.php">sdamjad: "[OMPI users] mpif90 error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This indicates that when your Open MPI was configured and installed, it
<br>
could not find a Fortran 90 compiler that both worked properly and was
<br>
compatible with your Fortran 77 compiler.  So it simply skipped building
<br>
the F90 support in Open MPI and therefore deactivated the &quot;mpif90&quot;
<br>
wrapper compiler.
<br>
<p>Have a look at the output of when you ran &quot;configure&quot; -- there's a
<br>
section somewhere near the top where it looks for a F90 compiler.  See
<br>
what it says there: whether it didn't find one, or perhaps it found one
<br>
but it was not compatible with your F77 compiler, or perhaps the F90
<br>
compiler couldn't produce valid executables.  These are the typical
<br>
reasons that OMPI chooses to skip the F90 bindings.
<br>
<p>If you need to explicitly specify the F90 compiler on the configure
<br>
command line, use the &quot;FC&quot; variable.  For example:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ ./configure F77=gfortran FC=gfortran ...
<br>
<p>This will set both the F77 and F90 compilers to use gfortran, while:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;shell$ ./configure F77=pgf77 FC=pgf90 ...
<br>
<p>Sets the F77 compiler to pgf77 and the F90 compiler to pgf90 (both of
<br>
which, naturally, are compatible with each other).  You can put in
<br>
whatever values for F77 and FC are relevant to your system.
<br>
<p>Hope this helps.
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of sdamjad
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, June 08, 2006 11:52 AM
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI users] mpif90 error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Folks
</span><br>
<span class="quotelev1">&gt; While running mpi on open mpi. This error i get
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cpp -P -Dmpi=1 -Dsgi=0 -Dlinux=0 -Dibm=0 -Dmac_osx=1 
</span><br>
<span class="quotelev1">&gt; -Dlink_to_coupler=0 
</span><br>
<span class="quotelev1">&gt; ../source/kinds.F  &gt; 
</span><br>
<span class="quotelev1">&gt; kinds.f
</span><br>
<span class="quotelev1">&gt; mpif90 -c -O3  kinds.f
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; Unfortunately, this installation of Open MPI was not compiled with
</span><br>
<span class="quotelev1">&gt; Fortran 90 support.  As such, the mpif90 compiler is non-functional.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; make: *** [kinds.o] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; any solutions
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1386.php">Brock Palen: "[OMPI users] Errors with MPI_Cart_create"</a>
<li><strong>Previous message:</strong> <a href="1384.php">sdamjad: "[OMPI users] mpif90 error"</a>
<li><strong>Maybe in reply to:</strong> <a href="1384.php">sdamjad: "[OMPI users] mpif90 error"</a>
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
