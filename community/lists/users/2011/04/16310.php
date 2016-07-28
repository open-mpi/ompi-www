<?
$subject_val = "[OMPI users] MPI_Gatherv error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 21 22:19:16 2011" -->
<!-- isoreceived="20110422021916" -->
<!-- sent="Thu, 21 Apr 2011 19:19:10 -0700 (PDT)" -->
<!-- isosent="20110422021910" -->
<!-- name="Zhangping Wei" -->
<!-- email="zhangping_wei_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Gatherv error" -->
<!-- id="437841.47420.qm_at_web111819.mail.gq1.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Gatherv error<br>
<strong>From:</strong> Zhangping Wei (<em>zhangping_wei_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-21 22:19:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Previous message:</strong> <a href="16309.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16313.php">David Zhang: "Re: [OMPI users] MPI_Gatherv error"</a>
<li><strong>Reply:</strong> <a href="16313.php">David Zhang: "Re: [OMPI users] MPI_Gatherv error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
I am a beginner of MPI, right now I try to use MPI_GATHERV in my code, the test 
code just gather the value of array A to store them in array B, but I found an 
error listed as follows, 

'Fatal error in MPI_Gatherv: Invalid count, error stack:
PMPI_Gatherv&lt;398&gt;: MPI_Gatherv failed &lt;sbuf=004d96c0, scount=64,MPI_REAL, 
rbuf=0049AC0, rcnts=003DCB8, displs=003D4C68, MPI_REAL, root=0, MPI_COMM_WORLD&gt; 
failed
PMPI_Gatherv&lt;317&gt;: Negative count, value is -842150451&#226;&#128;&#153;
Here I post my program with the email, I wonder anyone can help me to fix it or 
not? I guess my error is from the sending or receiving buffer and the 
displacement of the value stored, I tried to changed &#226;&#128;&#152;B,jlen,idisp&#226;&#128;&#153; to &#226;&#128;&#153; B(1,1), 
jlen(myid),idisp(myid)&#226;&#128;&#153; or other things, but I still cannot work it out. 

I am looking forward some help from you.
Zhangping Wei
&#194;&#160;
my code is,
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; PROGRAM MAIN
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; IMPLICIT NONE
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; INCLUDE 'mpif.h' 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; INTEGER I,J,IWORK,JWORK,I1,I2,J1,J2
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; REAL A(16,16),B(16,16) 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; INTEGER,ALLOCATABLE ::idisp(:),jlen(:) 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; integer myid,numprocs,rc,ierr,istar,iend,jstar,jend
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; integer status(MPI_STATUS_SIZE) 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; CALL MPI_INIT(ierr)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; CALL MPI_COMM_RANK(MPI_COMM_WORLD,myid,ierr)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; CALL MPI_COMM_SIZE(MPI_COMM_WORLD,numprocs,ierr)
&#194;&#160;!&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; PRINT *,'process ',myid, 'of',numprocs, 'is alive.'&#194;&#160;&#194;&#160; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; allocate(idisp(0:numprocs-1),jlen(0:numprocs-1))&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; DO J=1,16
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; DO I=1,16
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; A(I,J)=I+J
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; B(I,J)=0.0
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ENDDO
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ENDDO 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; I1=1;I2=16;J1=1;J2=16
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; JWORK=(J2-J1)/numprocs+1
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; JSTAR=MIN(myid*JWORK+J1,J2+1)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; JEND=MIN(JSTAR+JWORK-1,J2)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ISTAR=I1
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; IEND=I2&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; PRINT *,myid,istar,iend,jstar,jend 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; jlen(myid)=16*(jend-jstar+1)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; idisp(myid)=16*(jstar-1) 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; print *,myid,jlen(myid),idisp(myid)&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; CALL MPI_GATHERV(A(1,jstar),jlen(myid),MPI_REAL,
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; *B,jlen,idisp,MPI_REAL,0,MPI_COMM_WORLD,IERR)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; IF(myid.EQ.0)THEN
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; DO J=1,16
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; DO I=1,16
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; PRINT *,I,J,B(I,J)
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ENDDO
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ENDDO&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; ENDIF
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; CALL MPI_Finalize(rc)&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; 
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; END PROGRAM
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16310/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16311.php">Stanislav Sazykin: "Re: [OMPI users] Bug in MPI_scatterv Fortran-90 implementation"</a>
<li><strong>Previous message:</strong> <a href="16309.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16313.php">David Zhang: "Re: [OMPI users] MPI_Gatherv error"</a>
<li><strong>Reply:</strong> <a href="16313.php">David Zhang: "Re: [OMPI users] MPI_Gatherv error"</a>
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
