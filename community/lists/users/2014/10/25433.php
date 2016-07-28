<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 02:15:54 2014" -->
<!-- isoreceived="20141003061554" -->
<!-- sent="Fri, 3 Oct 2014 06:15:34 +0000" -->
<!-- isosent="20141003061534" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAAbhqc7KWrDFTxEXN2dOgOyeerpjOgAqxZnaY1KoaYnfM7MDHA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="20141003093919.09342582f60241929b892764_at_jp.fujitsu.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 02:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If misalignment is the case then adding &quot;sequence&quot; to the data type might
<br>
help.
<br>
<p>So:
<br>
<p>type :: &lt;whatever&gt;
<br>
sequence
<br>
integer :: ...
<br>
real :: ...
<br>
end type
<br>
<p>Note that you cannot use the alignment on types with allocatables and
<br>
pointers for obvious reasons.
<br>
<p>2014-10-03 0:39 GMT+00:00 Kawashima, Takahiro &lt;t-kawashima_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Hi Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know what CPU/compiler you are using and what -r8
</span><br>
<span class="quotelev1">&gt; option means, but DISPLACEMENTS(2) and DISPLACEMENTS(3) is
</span><br>
<span class="quotelev1">&gt; incorrect if integer is 4 bytes and real is 8 bytes.
</span><br>
<span class="quotelev1">&gt; In this case, usually there is a gap between ip and RP.
</span><br>
<span class="quotelev1">&gt; See description about datatype alignment in the MPI Standard.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Takahiro
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dear all.
</span><br>
<span class="quotelev2">&gt; &gt; I have some problem with MPI_TYPE_CREATE_STRUCT and as a consequence
</span><br>
<span class="quotelev2">&gt; &gt; with SENDRECV.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have this variable type
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *type particle*
</span><br>
<span class="quotelev2">&gt; &gt; *integer :: ip*
</span><br>
<span class="quotelev2">&gt; &gt; * real :: RP(2)*
</span><br>
<span class="quotelev2">&gt; &gt; * real :: QQ(4)*
</span><br>
<span class="quotelev2">&gt; &gt; *end type particle*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; When I compile in double precision with:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *mpif90 -r8 -fpp -DPARALLEL *.f90 *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; So when I create my own variable type for MPI, I have
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; *TYPES(1)=MPI_INTEGER                           !We have three variables
</span><br>
<span class="quotelev2">&gt; &gt; type in the new varible*
</span><br>
<span class="quotelev2">&gt; &gt; *TYPES(2)=MPI_DOUBLE_PRECISION       !Integer and Real and Real*
</span><br>
<span class="quotelev2">&gt; &gt; * TYPES(3)=MPI_DOUBLE_PRECISION       !Integer and Real and Real*
</span><br>
<span class="quotelev2">&gt; &gt; * nBLOCKS(1)=1                                              !number of
</span><br>
<span class="quotelev2">&gt; &gt; element in each block *
</span><br>
<span class="quotelev2">&gt; &gt; * nBLOCKS(2)=2*
</span><br>
<span class="quotelev2">&gt; &gt; *  nBLOCKS(3)=4*
</span><br>
<span class="quotelev2">&gt; &gt; *  !*
</span><br>
<span class="quotelev2">&gt; &gt; *  DISPLACEMENTS(1)=0*
</span><br>
<span class="quotelev2">&gt; &gt; *  DISPLACEMENTS(2)=sizeof(dummy%ip)*
</span><br>
<span class="quotelev2">&gt; &gt; *
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; DISPLACEMENTS(3)=sizeof(dummy%ip)+sizeof(dummy%RP(1))+sizeof(dummy%RP(2))*
</span><br>
<span class="quotelev2">&gt; &gt; *   !  *
</span><br>
<span class="quotelev2">&gt; &gt; *  CALL
</span><br>
<span class="quotelev2">&gt; &gt; MPI_TYPE_CREATE_STRUCT(3,nBLOCKS,DISPLACEMENTS,TYPES,MPI_PARTICLE_TYPE,
</span><br>
<span class="quotelev2">&gt; &gt; PI%ierr)*
</span><br>
<span class="quotelev2">&gt; &gt; *   CALL MPI_TYPE_COMMIT(MPI_PARTICLE_TYPE,MPI%ierr)*
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am I right?
</span><br>
<span class="quotelev2">&gt; &gt; Thanks, in advance, for any kind of help
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25432.php">http://www.open-mpi.org/community/lists/users/2014/10/25432.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25433/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25432.php">Kawashima, Takahiro: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25434.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
