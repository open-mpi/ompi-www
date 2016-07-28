<?
$subject_val = "Re: [OMPI users] MPI_Gatherv error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 22 03:27:49 2011" -->
<!-- isoreceived="20110422072749" -->
<!-- sent="Fri, 22 Apr 2011 00:27:25 -0700" -->
<!-- isosent="20110422072725" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Gatherv error" -->
<!-- id="BANLkTik2Rs6oy6ykfJHe0wmH8mv9kVa=Zg_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="437841.47420.qm_at_web111819.mail.gq1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Gatherv error<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-22 03:27:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16314.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Previous message:</strong> <a href="16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>In reply to:</strong> <a href="16310.php">Zhangping Wei: "[OMPI users] MPI_Gatherv error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wonder if this is related to the problem reported in
<br>
[OMPI users] Bug in MPI_scatterv Fortran-90 implementation
<br>
<p>On Thu, Apr 21, 2011 at 7:19 PM, Zhangping Wei &lt;zhangping_wei_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a beginner of MPI, right now I try to use MPI_GATHERV in my code, the
</span><br>
<span class="quotelev1">&gt; test code just gather the value of array A to store them in array B, but I
</span><br>
<span class="quotelev1">&gt; found an error listed as follows,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 'Fatal error in MPI_Gatherv: Invalid count, error stack:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PMPI_Gatherv&lt;398&gt;: MPI_Gatherv failed &lt;sbuf=004d96c0, scount=64,MPI_REAL,
</span><br>
<span class="quotelev1">&gt; rbuf=0049AC0, rcnts=003DCB8, displs=003D4C68, MPI_REAL, root=0,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD&gt; failed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PMPI_Gatherv&lt;317&gt;: Negative count, value is -842150451&#146;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here I post my program with the email, I wonder anyone can help me to fix
</span><br>
<span class="quotelev1">&gt; it or not? I guess my error is from the sending or receiving buffer and the
</span><br>
<span class="quotelev1">&gt; displacement of the value stored, I tried to changed &#145;B,jlen,idisp&#146; to &#146;
</span><br>
<span class="quotelev1">&gt; B(1,1), jlen(myid),idisp(myid)&#146; or other things, but I still cannot work it
</span><br>
<span class="quotelev1">&gt; out.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am looking forward some help from you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Zhangping Wei
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my code is,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PROGRAM MAIN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       IMPLICIT NONE
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INCLUDE 'mpif.h'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INTEGER I,J,IWORK,JWORK,I1,I2,J1,J2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       REAL A(16,16),B(16,16)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INTEGER,ALLOCATABLE ::idisp(:),jlen(:)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       integer myid,numprocs,rc,ierr,istar,iend,jstar,jend
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       integer status(MPI_STATUS_SIZE)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       CALL MPI_INIT(ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       CALL MPI_COMM_RANK(MPI_COMM_WORLD,myid,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       CALL MPI_COMM_SIZE(MPI_COMM_WORLD,numprocs,ierr)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  !     PRINT *,'process ',myid, 'of',numprocs, 'is alive.'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       allocate(idisp(0:numprocs-1),jlen(0:numprocs-1))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       DO J=1,16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         DO I=1,16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             A(I,J)=I+J
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             B(I,J)=0.0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;           I1=1;I2=16;J1=1;J2=16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             JWORK=(J2-J1)/numprocs+1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             JSTAR=MIN(myid*JWORK+J1,J2+1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             JEND=MIN(JSTAR+JWORK-1,J2)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ISTAR=I1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             IEND=I2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       PRINT *,myid,istar,iend,jstar,jend
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       jlen(myid)=16*(jend-jstar+1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       idisp(myid)=16*(jstar-1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       print *,myid,jlen(myid),idisp(myid)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       CALL MPI_GATHERV(A(1,jstar),jlen(myid),MPI_REAL,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      *B,jlen,idisp,MPI_REAL,0,MPI_COMM_WORLD,IERR)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       IF(myid.EQ.0)THEN
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         DO J=1,16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             DO I=1,16
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 PRINT *,I,J,B(I,J)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       ENDIF
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       CALL MPI_Finalize(rc)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       END PROGRAM
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
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16313/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16314.php">Jeff Squyres: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Previous message:</strong> <a href="16312.php">Eloi Gaudry: "Re: [OMPI users] huge VmRSS on rank 0 after MPI_Init when using	&quot;btl_openib_receive_queues&quot; option"</a>
<li><strong>In reply to:</strong> <a href="16310.php">Zhangping Wei: "[OMPI users] MPI_Gatherv error"</a>
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
