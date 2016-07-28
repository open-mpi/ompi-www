<?
$subject_val = "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  9 03:45:59 2013" -->
<!-- isoreceived="20130909074559" -->
<!-- sent="Mon, 09 Sep 2013 09:59:01 +0200" -->
<!-- isosent="20130909075901" -->
<!-- name="Max Staufer" -->
<!-- email="max.staufer_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory" -->
<!-- id="522D7FC5.8000008_at_gmx.net" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43941EBC-6FFA-4FBF-AA49-C07661851CD3_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory<br>
<strong>From:</strong> Max Staufer (<em>max.staufer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-09 03:59:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>In reply to:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Reply:</strong> <a href="22627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am still working on a small example that shows the problem,
<br>
our problematic call is part of a fairly extensive framework so its not 
<br>
easy to post that part, but see below.
<br>
<p>As you can see the subroutine is recursive and will be calling itself 
<br>
again depending on the outcome posted here.
<br>
The MPI_ALLREDUCE of dum(3) is the part that causes the ompi_free_list 
<br>
to grow.
<br>
<p>Is there an MCA parameter to limit the groth of the ompi_free_list ?
<br>
<p>Max
<br>
<p>-----------
<br>
RECURSIVE SUBROUTINE setup(l,n,listrank)
<br>
!
<br>
!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;USE dagmgpar_mem
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IMPLICIT NONE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: l,n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER, OPTIONAL :: listrank(n+1:*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER :: nc,ierr,i,j,k,nz
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL :: slcoarse
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER, POINTER, DIMENSION(:) :: jap
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REAL(kind(0.0d0)), POINTER, DIMENSION(:) :: ap
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGICAL, SAVE :: slowcoarse
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REAL(kind(0.0d0)) :: fw,eta,dum(3),dumsend(3)
<br>
#ifdef WITHOUTINPLACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REAL(kind(0.0d0)) :: dumbuffer(3)
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHARACTER(len=13) :: prtint
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REAL (kind(0.0d0)) :: fff(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;!
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nn(l)=n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nlc(1)=n
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (n &gt; 0) THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nlc(2)=dt(l)%ia(n+1)-dt(l)%ia(1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nlc(2)=0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ngl=nlc
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (l==2) slowcoarse=.FALSE.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slcoarse = 2*nlcp(1) &lt; 3*nlc(1) .AND. 2*nlcp(2) &lt; 3*nlc(2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF( l == nstep+1  .OR. l == maxlev &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.OR. ( ngl(1) &lt;= maxcoarset) &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.OR. ( nglp(1) &lt; 2*ngl(1) .AND. nglp(2) &lt; 2*ngl(2)   &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.AND. ngl(1) &lt;= maxcoarseslowt ) &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.OR. ( slowcoarse .AND. slcoarse ) &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;.OR. nglp(1) == ngl(1) )                       THEN
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;nlev=l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dumsend(3)=-1.0d0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ELSE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dumsend(3)=dble(NPROC)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;END IF
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dumsend(1:2)=dble(nlc)
<br>
#ifdef WITHOUTINPLACE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;dumbuffer = dum
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_ALLREDUCE(dumbuffer,dum,3,MPI_DOUBLE_PRECISION, &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM,ICOMM,ierr)
<br>
#else
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CALL MPI_ALLREDUCE(dumsend,dum,3,MPI_DOUBLE_PRECISION,            &amp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_SUM,ICOMM,ierr)
<br>
#endif
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ngl=dum(1:2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IF (dum(3) .LE. 0.0d0) nlev=l
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;slowcoarse=slcoarse
<br>
<p>...
<br>
<span class="quotelev1">&gt; Yes, the number of elements each freelist accepts to allocate can be bounded. However, we need to know which freelist we should act upon.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What exactly you means by &quot;MPI_ALLREDUCE is called in a recursive way&quot;? You mean inside a loop right?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 8, 2013, at 21:36 , Max Staufer &lt;max.staufer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will  post a small example for testing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is interesting to note though that this happens only
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when MPI_ALLREDUCE is called in a recursive kind of way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a possibility to limit the OMPI_free_list groth, via an --mca parameter ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Sun, 08 Sep 2013 14:51:44 +0200
</span><br>
<span class="quotelev2">&gt;&gt; From: Max Staufer &lt;max.staufer_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subject: [OMPI users] OMPI_LIST_GROW keeps allocating memory
</span><br>
<span class="quotelev2">&gt;&gt; Message-ID: &lt;522C72E0.9000301_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Content-Type: text/plain; charset=ISO-8859-15
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   using ompi 1.4.5 or 1.6.5 for that matter, I came across an
</span><br>
<span class="quotelev2">&gt;&gt; interesting thing
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; when an MPI function is called from in a recusivly called subroutine
</span><br>
<span class="quotelev2">&gt;&gt; (Fortran Interface)
</span><br>
<span class="quotelev2">&gt;&gt; the MPI_ALLREDUCE function allocates memory in the OMPI_LIST_GROW functions.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It does this indefinitly. In our case OMPI allocated 100GB.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; is there a method to limit this behaviour ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Max
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Previous message:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>In reply to:</strong> <a href="22625.php">George Bosilca: "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
<li><strong>Reply:</strong> <a href="22627.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OMPI_LIST_GROW keeps allocating memory"</a>
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
