<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jan 17 14:14:03 2007" -->
<!-- isoreceived="20070117191403" -->
<!-- sent="Wed, 17 Jan 2007 14:13:53 -0500" -->
<!-- isosent="20070117191353" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_initialized interface" -->
<!-- id="52F69135-4010-42E6-A068-1D6B12767400_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="628C36CE-8A63-4010-880A-18B12B865F2E_at_nrlssc.navy.mil" -->
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
<strong>Date:</strong> 2007-01-17 14:13:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2487.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Previous message:</strong> <a href="2485.php">Tim Campbell: "[OMPI users] mpi_initialized interface"</a>
<li><strong>In reply to:</strong> <a href="2485.php">Tim Campbell: "[OMPI users] mpi_initialized interface"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are absolutely correct.  Today is just the day for Fortran  
<br>
issues.  :-)
<br>
<p>I've filed bug #782 (<a href="https://svn.open-mpi.org/trac/ompi/ticket/782">https://svn.open-mpi.org/trac/ompi/ticket/782</a>)  
<br>
about this and get it fixed up for v1.2.  Thanks for reporting!
<br>
<p><p>On Jan 17, 2007, at 2:04 PM, Tim Campbell wrote:
<br>
<p><span class="quotelev1">&gt; The interface definition for MPI_Initialized in
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	ompi/mpi/f90/scripts/mpi-f90-interfaces.h.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is incorrect.  The script is generating the interface as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	subroutine MPI_Initialized(flag, ierr)
</span><br>
<span class="quotelev1">&gt; 	  integer, intent(out) :: flag
</span><br>
<span class="quotelev1">&gt; 	  integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; 	end subroutine MPI_Initialized
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, according to the MPI standard it should be
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	subroutine MPI_Initialized(flag, ierr)
</span><br>
<span class="quotelev1">&gt; 	  logical, intent(out) :: flag
</span><br>
<span class="quotelev1">&gt; 	  integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; 	end subroutine MPI_Initialized
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I find this error in both 1.1.2 and the 1.2x series.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Tim Campbell
</span><br>
<span class="quotelev1">&gt; Naval Research Laboratory
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2487.php">Brian Budge: "Re: [OMPI users] ld_library_path not being updated"</a>
<li><strong>Previous message:</strong> <a href="2485.php">Tim Campbell: "[OMPI users] mpi_initialized interface"</a>
<li><strong>In reply to:</strong> <a href="2485.php">Tim Campbell: "[OMPI users] mpi_initialized interface"</a>
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
