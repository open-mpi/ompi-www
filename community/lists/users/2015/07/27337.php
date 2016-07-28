<?
$subject_val = "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on	OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 15:19:08 2015" -->
<!-- isoreceived="20150727191908" -->
<!-- sent="Mon, 27 Jul 2015 19:19:04 +0000" -->
<!-- isosent="20150727191904" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on	OS X" -->
<!-- id="6C4C67F0-192C-4B2A-B7C4-B6F41B43107E_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="02EAB805-56EB-4319-A6EB-401490BFA856_at_noaa.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on	OS X<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 15:19:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27338.php">Ted Mansell: "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<li><strong>Previous message:</strong> <a href="27336.php">Ted Mansell: "[OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<li><strong>In reply to:</strong> <a href="27336.php">Ted Mansell: "[OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27338.php">Ted Mansell: "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<li><strong>Reply:</strong> <a href="27338.php">Ted Mansell: "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Jul 27, 2015, at 3:15 PM, Ted Mansell &lt;ted.mansell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm getting a compile-time error on MPI_WAITALL and MPI_WAITANY when using &quot;use mpi&quot;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; parcel.f90(555): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_WAITANY]
</span><br>
<span class="quotelev1">&gt;          call mpi_waitany(numprocs-1,reqt(1),index,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt; ---------------^
</span><br>
<p>This error *usually* means an error in your source code.  It's the Fortran compiler's way of saying &quot;I couldn't find a version of the MPI_WAITANY subroutine that has the type of arguments that you have provided.&quot;
<br>
<p>Can you send a short reproducer program that shows this error?
<br>
<p><span class="quotelev1">&gt; comm.f90(1516): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_WAITALL]
</span><br>
<span class="quotelev1">&gt;      call MPI_WAITALL(nr,reqs(3),MPI_STATUSES_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt; -----------^
</span><br>
<span class="quotelev1">&gt; comm.f90(1737): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_WAITANY]
</span><br>
<span class="quotelev1">&gt;      call MPI_WAITANY(nr,reqs(1),index,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev1">&gt; -----------^
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but it compiles fine with the alternate
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      include 'mpif.h'
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is OS X 10.9.5 with Intel ifort 13, Openmpi 1.8.4. I did try substituting a generic integer variable as the fourth argument, but it made no difference.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The compiler appears to be finding the module, and seems to find everything else needed for this particular code (e.g., MPI_IRECV, MPI_ISEND, contants, etc.) The mpi.mod is built in the &quot;use-mpi-ignore-tkr&quot; directory, if that matters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there any known issue here? I have not tried with gfortran yet. This is on a stand-alone Mac Pro tower, so nothing too fancy. As far as I can tell, it is not using some other version of mpi.mod.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks....
</span><br>
<span class="quotelev1">&gt; -- Ted
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; __________________________________________________________
</span><br>
<span class="quotelev1">&gt; | Ted Mansell &lt;ted.mansell_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; | National Severe Storms Laboratory
</span><br>
<span class="quotelev1">&gt; |--------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; | &quot;The contents of this message are mine personally and
</span><br>
<span class="quotelev1">&gt; | do not reflect any position of the U.S. Government or NOAA.&quot;
</span><br>
<span class="quotelev1">&gt; |--------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27336.php">http://www.open-mpi.org/community/lists/users/2015/07/27336.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27338.php">Ted Mansell: "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<li><strong>Previous message:</strong> <a href="27336.php">Ted Mansell: "[OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<li><strong>In reply to:</strong> <a href="27336.php">Ted Mansell: "[OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27338.php">Ted Mansell: "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
<li><strong>Reply:</strong> <a href="27338.php">Ted Mansell: "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h on OS X"</a>
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
