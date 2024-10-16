<?
$subject_val = "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 16:40:00 2011" -->
<!-- isoreceived="20110216214000" -->
<!-- sent="Wed, 16 Feb 2011 16:39:55 -0500" -->
<!-- isosent="20110216213955" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library" -->
<!-- id="93F33CA5-24BB-48F5-A8AE-9FE0CE89FB0A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B7C522117AA39D42B2EBD869F5AF622E01750E93_at_ARLABML02.DS.ARL.ARMY.MIL" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-16 16:39:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15631.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15629.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15628.php">Petit, George (Cont, ARL/CISD): "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15639.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Reply:</strong> <a href="15639.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Were you able to check that their code matches the type signature that Open MPI is exporting?  Specifically, double check that the types of the parameters that the code is passing as arguments to MPI_TYPE_CREATE_SUBARRAY match the types in the signature that I sent in my original reply.  I verified that OMPI v1.4.x's signature matches what is listed in MPI-2.2 p87.
<br>
<p>Absent any other information, I am guessing that his code is incorrect.
<br>
<p>I'm hazarding a guess here: it's possible that this code works with other MPI's because they don't offer an F90 binding for MPI_TYPE_CREATE_SUBARRAY.  I.e., your user can call this function from an F90 MPI code, but it just &quot;falls through&quot; (with no compiler checking) to that MPI's underlying F77 function.  
<br>
<p>Open MPI actually implements the F90 compiler checking before letting the implementation &quot;fall through&quot; to the underlying F77 function -- many other MPI's do not.  ...or at least, many other MPI implementations *did* not; but I admit that I haven't checked in a while.  Note, too, that it's perfectly allowable for MPI implementations to *not* do the compiler checking because the F90 bindings are classified as &quot;optional&quot; in the MPI specification.
<br>
<p>Finally, I note that we've had a few F90 bindings fixes in between 1.4.x and 1.5.x, but only in the following functions:
<br>
<p>MPI_COMM_CREATE_KEYVAL
<br>
MPI_GREQUEST_START
<br>
MPI_OP_CREATE
<br>
MPI_REGISTER_DATAREP
<br>
MPI_TYPE_CREATE_KEYVAL
<br>
MPI_WIN_CREATE_KEYVAL
<br>
<p>I'm actually a little surprised that we (I) forgot to back-port these fixes to the 1.4.x series; I'll do so now...
<br>
<p><p><p><p>On Feb 16, 2011, at 1:16 PM, Petit, George (Cont, ARL/CISD) wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; The problem occurs in both OpenMPI 1.3 and 1.4.  The user is also reporting that he's experiencing this problem on other systems as well.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; George Petit
</span><br>
<span class="quotelev1">&gt; Lockheed Martin
</span><br>
<span class="quotelev1">&gt; ARL DSRC Customer Support Team Lead
</span><br>
<span class="quotelev1">&gt; george.petit_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 410-278-9283
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] on behalf of Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Sent: Wed 2/16/2011 10:40 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What version of Open MPI are you using?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I just checked a trivial f90 MPI program and MPI_TYPE_CREATE_SUBARRAY seemed to work ok.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am not a fortran expert, but when I have seen this type of error message before, it *usually* meant that there was a type mismatch between the types passed to the function and the function signature available in the f90 module.  I.e., the compiler found a function matching the *name*, but wasn't able to find a match for the *type signature*.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's Open MPI's declaration of MPI_TYPE_CREATE_SUBARRAY:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; interface MPI_Type_create_subarray
</span><br>
<span class="quotelev1">&gt; subroutine MPI_Type_create_subarray(ndims, size_array, subsize_array, start_array, order, &amp;
</span><br>
<span class="quotelev1">&gt;         oldtype, newtype, ierr)
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: ndims
</span><br>
<span class="quotelev1">&gt;   integer, dimension(*), intent(in) :: size_array
</span><br>
<span class="quotelev1">&gt;   integer, dimension(*), intent(in) :: subsize_array
</span><br>
<span class="quotelev1">&gt;   integer, dimension(*), intent(in) :: start_array
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: order
</span><br>
<span class="quotelev1">&gt;   integer, intent(in) :: oldtype
</span><br>
<span class="quotelev1">&gt;   integer, intent(out) :: newtype
</span><br>
<span class="quotelev1">&gt;   integer, intent(out) :: ierr
</span><br>
<span class="quotelev1">&gt; end subroutine MPI_Type_create_subarray
</span><br>
<span class="quotelev1">&gt; end interface
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One thing you might want to double check is that OMPI was compiled with MPI_REAL8 support (since MPI_REAL8 was passed to the subroutine).  Run this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; shell$ ompi_info --all | grep real8
</span><br>
<span class="quotelev1">&gt;          Fort have real8: yes
</span><br>
<span class="quotelev1">&gt;          Fort real8 size: 8
</span><br>
<span class="quotelev1">&gt;         Fort real8 align: 8
</span><br>
<span class="quotelev1">&gt; shell$
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Finally, note that Open MPI doesn't have many of the F90 symbols that you might expect in libmpi_f90.so because most of our F90 support is &quot;direct pass through&quot; to the F77 subroutines.  Specifically, our F90 mpi module simply provides compile-time checking for expected signatures, but the subroutine call is actually automatically linked against the corresponding symbol in libmpi_f77.so.  Only a few subroutines -- i.e., the ones that have multiple different type signatures -- actually appear in libmpi_f90.so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: MPI_TYPE_CREATE_SUBARRAY only has one type signature.  So it's normal / expected that you don't see /mpi_type_subarray/i in libmpi_f90.so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 15, 2011, at 1:18 PM, Petit, George (Cont, ARL/CISD) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; A user posted the following ticket to our site.  Should the referenced MPI routine be included in the mpif90 library?  If not, why?  And is there a way to get it added.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; I receive the following error when I try to compile my code with ifort with the
</span><br>
<span class="quotelev2">&gt; &gt; openmpi library:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; grid.f(38): error #6285: There is no matching specific subroutine for this generic
</span><br>
<span class="quotelev2">&gt; &gt; subroutine call. [MPI_TYPE_CREATE_SUBARRAY]
</span><br>
<span class="quotelev2">&gt; &gt; call
</span><br>
<span class="quotelev2">&gt; &gt; mpi_type_create_subarray(3,isizes,isubs,istarts,MPI_ORDER_FORTRAN,MPI_REAL8,DTghost(1),ierr)
</span><br>
<span class="quotelev2">&gt; &gt; -------------^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks like the 'mpi_type_create_subarray' routine is missing from the openmpi
</span><br>
<span class="quotelev2">&gt; &gt; library libmpi_f90.so. The routine is in libmpi_f77.so. Is it possible to add it
</span><br>
<span class="quotelev2">&gt; &gt; to the f90 library? The fortran 90 versions of mpi for sgi_mpt, xt-mpt, ibm-mpi and
</span><br>
<span class="quotelev2">&gt; &gt; intelmpi all include this routine. Thanks. -Rob
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; George Petit
</span><br>
<span class="quotelev2">&gt; &gt; Lockheed Martin
</span><br>
<span class="quotelev2">&gt; &gt; ARL DSRC Customer Support Team Lead
</span><br>
<span class="quotelev2">&gt; &gt; george.petit_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; 410-278-9283
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15631.php">Tena Sakai: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15629.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>In reply to:</strong> <a href="15628.php">Petit, George (Cont, ARL/CISD): "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15639.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Reply:</strong> <a href="15639.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
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
