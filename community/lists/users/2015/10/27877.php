<?
$subject_val = "Re: [OMPI users] MPI_GATHERV error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 16 03:07:57 2015" -->
<!-- isoreceived="20151016070757" -->
<!-- sent="Fri, 16 Oct 2015 09:07:53 +0200" -->
<!-- isosent="20151016070753" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_GATHERV error" -->
<!-- id="CAG8o1y61c_hLBWO8Qja-MTWwyhPFjHMni_gCsL7+pTp4JhUsKg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="561E71CD.5060801_at_dlr.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_GATHERV error<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-16 03:07:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27876.php">Brant Abbott: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>In reply to:</strong> <a href="27865.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear George,
<br>
<p>thanks a lot for your explanations. Now all works and it is more clear to
<br>
me.
<br>
<p>Best Regards,
<br>
Diego
<br>
<p>Diego
<br>
<p><p>On 14 October 2015 at 17:16, Georg Geiser &lt;Georg.Geiser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; displacements start at 0, so 0 means no displacement, i.e., the
</span><br>
<span class="quotelev1">&gt; corresponding data starts at the first entry (by default 1 in Fortran) of
</span><br>
<span class="quotelev1">&gt; the receive field. A displacement of 1 would point to entry number 2.
</span><br>
<span class="quotelev1">&gt; Btw., MPI does not care how you allocate your fields in Fortran. E.g., if
</span><br>
<span class="quotelev1">&gt; you do an
</span><br>
<span class="quotelev1">&gt; allocate(A(-1:10))
</span><br>
<span class="quotelev1">&gt; the lower and upper bounds are only known to Fortran. You just pass an
</span><br>
<span class="quotelev1">&gt; pointer to this field to MPI and declare that it contains size(A)=12
</span><br>
<span class="quotelev1">&gt; entries. All displacements are relative to the first entry of that field,
</span><br>
<span class="quotelev1">&gt; so a displacement of 0 points to A(-1), a displacement of 1 to A(0) and so
</span><br>
<span class="quotelev1">&gt; on.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Georg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 14.10.2015 um 16:50 schrieb Diego Avesani:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dear George, dear all,
</span><br>
<span class="quotelev1">&gt; thanks for the suggestions, it works now.
</span><br>
<span class="quotelev1">&gt; I have just put:
</span><br>
<span class="quotelev1">&gt; IDNodeStartGLOBAL = IDNodeStartGLOBAL -1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but I do not understand why. Can you explain it to me?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 14 October 2015 at 16:02, Georg Geiser &lt;Georg.Geiser_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; try to decrease your displacements by one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Georg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Am 14.10.2015 um 15:51 schrieb Diego Avesani:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; dear all,
</span><br>
<span class="quotelev2">&gt;&gt; I have some problem with MPI_GATHERV.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In my code I generate a complex number
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  DO ij=iNS,iNE
</span><br>
<span class="quotelev2">&gt;&gt;     X11(ij) = cmplx(1.,0.)
</span><br>
<span class="quotelev2">&gt;&gt;  ENDDO
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where iNS,INE change according to the CPU rank, in may case
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     cpu 0           1       10050
</span><br>
<span class="quotelev2">&gt;&gt;     cpu 1       10051       20100
</span><br>
<span class="quotelev2">&gt;&gt;     cpu 2       20101       30150
</span><br>
<span class="quotelev2">&gt;&gt;     cpu 3       30151       40401
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; according to that I have
</span><br>
<span class="quotelev2">&gt;&gt; nNodeGLOBAL   = 10050       10050       10050       10251
</span><br>
<span class="quotelev2">&gt;&gt; IDNodeStartGLOBAL =    1       10051       20101       30151
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After that I apply a  MPI_GATHERV as
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; CALL MPI_GATHERV(X11(*iNS:iNE*),MPIdata%nNodes, mpi_double_cpmplex,
</span><br>
<span class="quotelev2">&gt;&gt; *PHIH*, nNodeGLOBAL,IDNodeStartGLOBAL, mpi_double_cpmplex, 0,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_COMM_WORLD, Err)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but when I plot REAL(PHIH(1)), I get
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I use fortran, do you think that there is an error in nNodeGLOBAL? do I
</span><br>
<span class="quotelev2">&gt;&gt; have to allocate the vector nNodeGLOBAL and IDNodeStartGLOBAL satrting from
</span><br>
<span class="quotelev2">&gt;&gt; 0 according to the name of the rank?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; really really
</span><br>
<span class="quotelev2">&gt;&gt; thanks a lot
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
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27862.php">http://www.open-mpi.org/community/lists/users/2015/10/27862.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27863.php">http://www.open-mpi.org/community/lists/users/2015/10/27863.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27864.php">http://www.open-mpi.org/community/lists/users/2015/10/27864.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27865.php">http://www.open-mpi.org/community/lists/users/2015/10/27865.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27877/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27878.php">Jeff Squyres (jsquyres): "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>Previous message:</strong> <a href="27876.php">Brant Abbott: "Re: [OMPI users] mpirun/mpiexec requires su"</a>
<li><strong>In reply to:</strong> <a href="27865.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
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
