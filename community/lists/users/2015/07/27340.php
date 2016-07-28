<?
$subject_val = "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h	on OS X";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 27 17:33:32 2015" -->
<!-- isoreceived="20150727213332" -->
<!-- sent="Mon, 27 Jul 2015 16:33:19 -0500" -->
<!-- isosent="20150727213319" -->
<!-- name="Ted Mansell" -->
<!-- email="ted.mansell_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h	on OS X" -->
<!-- id="4B6408B7-3E41-4ED7-805F-6AA172515CD9_at_noaa.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="71389382-60C5-45B7-A54C-D01E8D036F32_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h	on OS X<br>
<strong>From:</strong> Ted Mansell (<em>ted.mansell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-27 17:33:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27341.php">Syed Ahsan Ali: "[OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<li><strong>Previous message:</strong> <a href="27339.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h	on OS X"</a>
<li><strong>In reply to:</strong> <a href="27339.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h	on OS X"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK, finally got it. MPI_WAITALL gets MPI_STATUSES_IGNORE, but MPI_WAITANY gets MPI_STATUS_IGNORE. I'm otherwise familiar with just MPI_WAIT. 
<br>
<p>Thanks again!
<br>
<p>- Ted
<br>
<p>On Jul 27, 2015, at 4:07 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 27, 2015, at 4:45 PM, Ted Mansell &lt;ted.mansell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; That was a fast response! Of course, it's not my code :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I had looked at the arguments and thought they were OK, but eventually noticed that the fourth argument is supposed to be an *array* of statuses. Apparently passing 'MPI_STATUS_IGNORE' there did not cause a problem for the 'mpif.h' interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, the mpif.h interface does not check your arguments at compile time.  The &quot;mpi&quot; and &quot;mpi_f08&quot; interfaces do.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I also tried MPI_STATUSES_IGNORE, but it still didn't like it, so I created an array [integer :: statuses(MPI_STATUS_SIZE)] that it was happy with. So your suggestion was correct -- thank you!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Shouldn't MPI_STATUSES_IGNORE work, however?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes, it should.  What didn't work -- can you send a test program and/or exact error output from the compiler?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Or is it something about using the module interface being pickier than the include file? (I suppose with the explicit &quot;intent(out)&quot; in the interface.) I don't know what flavor of MPI was used to test the code, but perhaps it was less picky, because it must have worked for the developer.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Ted
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 27, 2015, at 2:19 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 27, 2015, at 3:15 PM, Ted Mansell &lt;ted.mansell_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm getting a compile-time error on MPI_WAITALL and MPI_WAITANY when using &quot;use mpi&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; parcel.f90(555): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_WAITANY]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       call mpi_waitany(numprocs-1,reqt(1),index,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ---------------^
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This error *usually* means an error in your source code.  It's the Fortran compiler's way of saying &quot;I couldn't find a version of the MPI_WAITANY subroutine that has the type of arguments that you have provided.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can you send a short reproducer program that shows this error?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm.f90(1516): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_WAITALL]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   call MPI_WAITALL(nr,reqs(3),MPI_STATUSES_IGNORE,ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; comm.f90(1737): error #6285: There is no matching specific subroutine for this generic subroutine call.   [MPI_WAITANY]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   call MPI_WAITANY(nr,reqs(1),index,MPI_STATUS_IGNORE,ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -----------^
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but it compiles fine with the alternate
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   include 'mpif.h'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is OS X 10.9.5 with Intel ifort 13, Openmpi 1.8.4. I did try substituting a generic integer variable as the fourth argument, but it made no difference.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The compiler appears to be finding the module, and seems to find everything else needed for this particular code (e.g., MPI_IRECV, MPI_ISEND, contants, etc.) The mpi.mod is built in the &quot;use-mpi-ignore-tkr&quot; directory, if that matters.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is there any known issue here? I have not tried with gfortran yet. This is on a stand-alone Mac Pro tower, so nothing too fancy. As far as I can tell, it is not using some other version of mpi.mod.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks....
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- Ted
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; __________________________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; | Ted Mansell &lt;ted.mansell_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; | National Severe Storms Laboratory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |--------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; | &quot;The contents of this message are mine personally and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; | do not reflect any position of the U.S. Government or NOAA.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; |--------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27336.php">http://www.open-mpi.org/community/lists/users/2015/07/27336.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27337.php">http://www.open-mpi.org/community/lists/users/2015/07/27337.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27338.php">http://www.open-mpi.org/community/lists/users/2015/07/27338.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/07/27339.php">http://www.open-mpi.org/community/lists/users/2015/07/27339.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27341.php">Syed Ahsan Ali: "[OMPI users] Fatal Error: Cannot read module file 'mpi.mod' opened at (1), because it was created by a different version of GNU Fortran"</a>
<li><strong>Previous message:</strong> <a href="27339.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h	on OS X"</a>
<li><strong>In reply to:</strong> <a href="27339.php">Jeff Squyres (jsquyres): "Re: [OMPI users] MPI_WAITANY compile error with mpi.mod vs. mpif.h	on OS X"</a>
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
