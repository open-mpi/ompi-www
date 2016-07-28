<?
$subject_val = "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 16 13:19:11 2011" -->
<!-- isoreceived="20110216181911" -->
<!-- sent="Wed, 16 Feb 2011 13:16:45 -0500" -->
<!-- isosent="20110216181645" -->
<!-- name="Petit, George (Cont, ARL/CISD)" -->
<!-- email="george.petit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library" -->
<!-- id="B7C522117AA39D42B2EBD869F5AF622E01750E93_at_ARLABML02.DS.ARL.ARMY.MIL" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="5CBBEC9A-34C6-487B-86C7-A0526DA4317B_at_cisco.com" -->
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
<strong>From:</strong> Petit, George (Cont, ARL/CISD) (<em>george.petit_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-16 13:16:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15629.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>In reply to:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15630.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Reply:</strong> <a href="15630.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
&nbsp;
<br>
The problem occurs in both OpenMPI 1.3 and 1.4.  The user is also reporting that he's experiencing this problem on other systems as well.
<br>
&nbsp;
<br>
George Petit
<br>
Lockheed Martin
<br>
ARL DSRC Customer Support Team Lead
<br>
george.petit_at_[hidden]
<br>
410-278-9283
<br>
&nbsp;
<br>
<p>________________________________
<br>
<p>From: users-bounces_at_[hidden] on behalf of Jeff Squyres
<br>
Sent: Wed 2/16/2011 10:40 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library
<br>
<p><p><p>What version of Open MPI are you using?
<br>
<p>I just checked a trivial f90 MPI program and MPI_TYPE_CREATE_SUBARRAY seemed to work ok.
<br>
<p>I am not a fortran expert, but when I have seen this type of error message before, it *usually* meant that there was a type mismatch between the types passed to the function and the function signature available in the f90 module.  I.e., the compiler found a function matching the *name*, but wasn't able to find a match for the *type signature*.
<br>
<p>Here's Open MPI's declaration of MPI_TYPE_CREATE_SUBARRAY:
<br>
<p>-----
<br>
interface MPI_Type_create_subarray
<br>
subroutine MPI_Type_create_subarray(ndims, size_array, subsize_array, start_array, order, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;oldtype, newtype, ierr)
<br>
&nbsp;&nbsp;integer, intent(in) :: ndims
<br>
&nbsp;&nbsp;integer, dimension(*), intent(in) :: size_array
<br>
&nbsp;&nbsp;integer, dimension(*), intent(in) :: subsize_array
<br>
&nbsp;&nbsp;integer, dimension(*), intent(in) :: start_array
<br>
&nbsp;&nbsp;integer, intent(in) :: order
<br>
&nbsp;&nbsp;integer, intent(in) :: oldtype
<br>
&nbsp;&nbsp;integer, intent(out) :: newtype
<br>
&nbsp;&nbsp;integer, intent(out) :: ierr
<br>
end subroutine MPI_Type_create_subarray
<br>
end interface
<br>
-----
<br>
<p>One thing you might want to double check is that OMPI was compiled with MPI_REAL8 support (since MPI_REAL8 was passed to the subroutine).  Run this:
<br>
<p>-----
<br>
shell$ ompi_info --all | grep real8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort have real8: yes
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real8 size: 8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort real8 align: 8
<br>
shell$
<br>
-----
<br>
<p>Finally, note that Open MPI doesn't have many of the F90 symbols that you might expect in libmpi_f90.so because most of our F90 support is &quot;direct pass through&quot; to the F77 subroutines.  Specifically, our F90 mpi module simply provides compile-time checking for expected signatures, but the subroutine call is actually automatically linked against the corresponding symbol in libmpi_f77.so.  Only a few subroutines -- i.e., the ones that have multiple different type signatures -- actually appear in libmpi_f90.so.
<br>
<p>Meaning: MPI_TYPE_CREATE_SUBARRAY only has one type signature.  So it's normal / expected that you don't see /mpi_type_subarray/i in libmpi_f90.so.
<br>
<p><p>On Feb 15, 2011, at 1:18 PM, Petit, George (Cont, ARL/CISD) wrote:
<br>
<p><span class="quotelev1">&gt; A user posted the following ticket to our site.  Should the referenced MPI routine be included in the mpif90 library?  If not, why?  And is there a way to get it added.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; I receive the following error when I try to compile my code with ifort with the
</span><br>
<span class="quotelev1">&gt; openmpi library:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; grid.f(38): error #6285: There is no matching specific subroutine for this generic
</span><br>
<span class="quotelev1">&gt; subroutine call. [MPI_TYPE_CREATE_SUBARRAY]
</span><br>
<span class="quotelev1">&gt; call
</span><br>
<span class="quotelev1">&gt; mpi_type_create_subarray(3,isizes,isubs,istarts,MPI_ORDER_FORTRAN,MPI_REAL8,DTghost(1),ierr)
</span><br>
<span class="quotelev1">&gt; -------------^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the 'mpi_type_create_subarray' routine is missing from the openmpi
</span><br>
<span class="quotelev1">&gt; library libmpi_f90.so. The routine is in libmpi_f77.so. Is it possible to add it
</span><br>
<span class="quotelev1">&gt; to the f90 library? The fortran 90 versions of mpi for sgi_mpt, xt-mpt, ibm-mpi and
</span><br>
<span class="quotelev1">&gt; intelmpi all include this routine. Thanks. -Rob
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
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/ms-tnef attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15628/winmail.dat">winmail.dat</a>
</ul>
<!-- attachment="winmail.dat" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15629.php">Gus Correa: "Re: [OMPI users] This must be ssh problem, but I can't figure out what it is..."</a>
<li><strong>Previous message:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>In reply to:</strong> <a href="15627.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15630.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
<li><strong>Reply:</strong> <a href="15630.php">Jeff Squyres: "Re: [OMPI users] MPI_TYPE_CREATE_SUBARRAY not in mpif90 library"</a>
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
