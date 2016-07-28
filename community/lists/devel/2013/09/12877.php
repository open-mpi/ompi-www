<?
$subject_val = "Re: [OMPI devel] [OMPI users] OMPI_LIST_GROW keeps allocating memory";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep  9 10:45:34 2013" -->
<!-- isoreceived="20130909144534" -->
<!-- sent="Mon, 9 Sep 2013 14:45:31 +0000" -->
<!-- isosent="20130909144531" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI users] OMPI_LIST_GROW keeps allocating memory" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F8769E2_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="522D7FC5.8000008_at_gmx.net" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [OMPI users] OMPI_LIST_GROW keeps allocating memory<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-09 10:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12878.php">Matthias Jurenz: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Previous message:</strong> <a href="12876.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FYI: discussions of Open MPI internals should be on the devel_at_[hidden] list, not the users_at_[hidden] list.  I mention this because not all OMPI developers are on the users list.
<br>
<p><p>On Sep 9, 2013, at 3:59 AM, Max Staufer &lt;max.staufer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am still working on a small example that shows the problem,
</span><br>
<span class="quotelev1">&gt; our problematic call is part of a fairly extensive framework so its not easy to post that part, but see below.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see the subroutine is recursive and will be calling itself again depending on the outcome posted here.
</span><br>
<span class="quotelev1">&gt; The MPI_ALLREDUCE of dum(3) is the part that causes the ompi_free_list to grow.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is there an MCA parameter to limit the groth of the ompi_free_list ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Max
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------
</span><br>
<span class="quotelev1">&gt; RECURSIVE SUBROUTINE setup(l,n,listrank)
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt; !
</span><br>
<span class="quotelev1">&gt;    USE dagmgpar_mem
</span><br>
<span class="quotelev1">&gt;    IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;    INTEGER :: l,n
</span><br>
<span class="quotelev1">&gt;    INTEGER, OPTIONAL :: listrank(n+1:*)
</span><br>
<span class="quotelev1">&gt;    INTEGER :: nc,ierr,i,j,k,nz
</span><br>
<span class="quotelev1">&gt;    LOGICAL :: slcoarse
</span><br>
<span class="quotelev1">&gt;    INTEGER, POINTER, DIMENSION(:) :: jap
</span><br>
<span class="quotelev1">&gt;    REAL(kind(0.0d0)), POINTER, DIMENSION(:) :: ap
</span><br>
<span class="quotelev1">&gt;    LOGICAL, SAVE :: slowcoarse
</span><br>
<span class="quotelev1">&gt;    REAL(kind(0.0d0)) :: fw,eta,dum(3),dumsend(3)
</span><br>
<span class="quotelev1">&gt; #ifdef WITHOUTINPLACE
</span><br>
<span class="quotelev1">&gt;    REAL(kind(0.0d0)) :: dumbuffer(3)
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;    CHARACTER(len=13) :: prtint
</span><br>
<span class="quotelev1">&gt;    REAL (kind(0.0d0)) :: fff(1)
</span><br>
<span class="quotelev1">&gt;    !
</span><br>
<span class="quotelev1">&gt;    nn(l)=n
</span><br>
<span class="quotelev1">&gt;    nlc(1)=n
</span><br>
<span class="quotelev1">&gt;    IF (n &gt; 0) THEN
</span><br>
<span class="quotelev1">&gt;       nlc(2)=dt(l)%ia(n+1)-dt(l)%ia(1)
</span><br>
<span class="quotelev1">&gt;    ELSE
</span><br>
<span class="quotelev1">&gt;       nlc(2)=0
</span><br>
<span class="quotelev1">&gt;    END IF
</span><br>
<span class="quotelev1">&gt;    ngl=nlc
</span><br>
<span class="quotelev1">&gt;    IF (l==2) slowcoarse=.FALSE.
</span><br>
<span class="quotelev1">&gt;    slcoarse = 2*nlcp(1) &lt; 3*nlc(1) .AND. 2*nlcp(2) &lt; 3*nlc(2)
</span><br>
<span class="quotelev1">&gt;    IF( l == nstep+1  .OR. l == maxlev &amp;
</span><br>
<span class="quotelev1">&gt;         .OR. ( ngl(1) &lt;= maxcoarset) &amp;
</span><br>
<span class="quotelev1">&gt;         .OR. ( nglp(1) &lt; 2*ngl(1) .AND. nglp(2) &lt; 2*ngl(2)   &amp;
</span><br>
<span class="quotelev1">&gt;                            .AND. ngl(1) &lt;= maxcoarseslowt ) &amp;
</span><br>
<span class="quotelev1">&gt;         .OR. ( slowcoarse .AND. slcoarse ) &amp;
</span><br>
<span class="quotelev1">&gt;         .OR. nglp(1) == ngl(1) )                       THEN
</span><br>
<span class="quotelev1">&gt;         nlev=l
</span><br>
<span class="quotelev1">&gt;         dumsend(3)=-1.0d0
</span><br>
<span class="quotelev1">&gt;    ELSE
</span><br>
<span class="quotelev1">&gt;         dumsend(3)=dble(NPROC)
</span><br>
<span class="quotelev1">&gt;    END IF
</span><br>
<span class="quotelev1">&gt;    dumsend(1:2)=dble(nlc)
</span><br>
<span class="quotelev1">&gt; #ifdef WITHOUTINPLACE
</span><br>
<span class="quotelev1">&gt;    dumbuffer = dum
</span><br>
<span class="quotelev1">&gt;    CALL MPI_ALLREDUCE(dumbuffer,dum,3,MPI_DOUBLE_PRECISION, &amp;
</span><br>
<span class="quotelev1">&gt;         MPI_SUM,ICOMM,ierr)
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;    CALL MPI_ALLREDUCE(dumsend,dum,3,MPI_DOUBLE_PRECISION,            &amp;
</span><br>
<span class="quotelev1">&gt;         MPI_SUM,ICOMM,ierr)
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;    ngl=dum(1:2)
</span><br>
<span class="quotelev1">&gt;    IF (dum(3) .LE. 0.0d0) nlev=l
</span><br>
<span class="quotelev1">&gt;    slowcoarse=slcoarse
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev2">&gt;&gt; Yes, the number of elements each freelist accepts to allocate can be bounded. However, we need to know which freelist we should act upon.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What exactly you means by &quot;MPI_ALLREDUCE is called in a recursive way&quot;? You mean inside a loop right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 8, 2013, at 21:36 , Max Staufer &lt;max.staufer_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I will  post a small example for testing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It is interesting to note though that this happens only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when MPI_ALLREDUCE is called in a recursive kind of way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a possibility to limit the OMPI_free_list groth, via an --mca parameter ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Sun, 08 Sep 2013 14:51:44 +0200
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Max Staufer &lt;max.staufer_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: [OMPI users] OMPI_LIST_GROW keeps allocating memory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Message-ID: &lt;522C72E0.9000301_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Content-Type: text/plain; charset=ISO-8859-15
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  using ompi 1.4.5 or 1.6.5 for that matter, I came across an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interesting thing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when an MPI function is called from in a recusivly called subroutine
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (Fortran Interface)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the MPI_ALLREDUCE function allocates memory in the OMPI_LIST_GROW functions.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It does this indefinitly. In our case OMPI allocated 100GB.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; is there a method to limit this behaviour ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Max
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12878.php">Matthias Jurenz: "Re: [OMPI devel] GNU Automake 1.14 released"</a>
<li><strong>Previous message:</strong> <a href="12876.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] (no subject)"</a>
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
