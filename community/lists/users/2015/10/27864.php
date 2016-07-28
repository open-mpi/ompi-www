<?
$subject_val = "Re: [OMPI users] MPI_GATHERV error";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 14 10:51:00 2015" -->
<!-- isoreceived="20151014145100" -->
<!-- sent="Wed, 14 Oct 2015 16:50:57 +0200" -->
<!-- isosent="20151014145057" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_GATHERV error" -->
<!-- id="CAG8o1y7WvedcfO8xr1kNTY19iThUrQg0CVeyWgrBJYteeOEsOg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="561E6069.6090005_at_dlr.de" -->
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
<strong>Date:</strong> 2015-10-14 10:50:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27865.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Previous message:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>In reply to:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27865.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Reply:</strong> <a href="27865.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
dear George, dear all,
<br>
thanks for the suggestions, it works now.
<br>
I have just put:
<br>
IDNodeStartGLOBAL = IDNodeStartGLOBAL -1
<br>
<p>but I do not understand why. Can you explain it to me?
<br>
<p>Thanks
<br>
<p>Diego
<br>
<p><p>On 14 October 2015 at 16:02, Georg Geiser &lt;Georg.Geiser_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; try to decrease your displacements by one.
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
<span class="quotelev1">&gt; Am 14.10.2015 um 15:51 schrieb Diego Avesani:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dear all,
</span><br>
<span class="quotelev1">&gt; I have some problem with MPI_GATHERV.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In my code I generate a complex number
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  DO ij=iNS,iNE
</span><br>
<span class="quotelev1">&gt;     X11(ij) = cmplx(1.,0.)
</span><br>
<span class="quotelev1">&gt;  ENDDO
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; where iNS,INE change according to the CPU rank, in may case
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     cpu 0           1       10050
</span><br>
<span class="quotelev1">&gt;     cpu 1       10051       20100
</span><br>
<span class="quotelev1">&gt;     cpu 2       20101       30150
</span><br>
<span class="quotelev1">&gt;     cpu 3       30151       40401
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; according to that I have
</span><br>
<span class="quotelev1">&gt; nNodeGLOBAL   = 10050       10050       10050       10251
</span><br>
<span class="quotelev1">&gt; IDNodeStartGLOBAL =    1       10051       20101       30151
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After that I apply a  MPI_GATHERV as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CALL MPI_GATHERV(X11(*iNS:iNE*),MPIdata%nNodes, mpi_double_cpmplex, *PHIH*,
</span><br>
<span class="quotelev1">&gt; nNodeGLOBAL,IDNodeStartGLOBAL, mpi_double_cpmplex, 0, MPI_COMM_WORLD, Err)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but when I plot REAL(PHIH(1)), I get
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use fortran, do you think that there is an error in nNodeGLOBAL? do I
</span><br>
<span class="quotelev1">&gt; have to allocate the vector nNodeGLOBAL and IDNodeStartGLOBAL satrting from
</span><br>
<span class="quotelev1">&gt; 0 according to the name of the rank?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; really really
</span><br>
<span class="quotelev1">&gt; thanks a lot
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/10/27862.php">http://www.open-mpi.org/community/lists/users/2015/10/27862.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/10/27863.php">http://www.open-mpi.org/community/lists/users/2015/10/27863.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27864/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27865.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Previous message:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>In reply to:</strong> <a href="27863.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27865.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
<li><strong>Reply:</strong> <a href="27865.php">Georg Geiser: "Re: [OMPI users] MPI_GATHERV error"</a>
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
