<?
$subject_val = "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 12:13:07 2015" -->
<!-- isoreceived="20150902161307" -->
<!-- sent="Wed, 2 Sep 2015 18:13:06 +0200" -->
<!-- isosent="20150902161306" -->
<!-- name="Diego Avesani" -->
<!-- email="diego.avesani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)" -->
<!-- id="CAG8o1y4x_pDHFLF7VppN8QyaR4uFADj7mpR=H7V+W4G-5RpBpA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAkFZ5u9q=JY8zdVeRN7cxpOqn2wGgUOmhPiZGfD0E96y=gU_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)<br>
<strong>From:</strong> Diego Avesani (<em>diego.avesani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-02 12:13:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Gilles, Dear all,
<br>
I have found the error. Some CPU has no element to share. It was a my error.
<br>
<p>Now I have another one:
<br>
<p>*Fatal error in MPI_Isend: Invalid communicator, error stack:*
<br>
*MPI_Isend(158): MPI_Isend(buf=0x137b7b4, count=1, INVALID DATATYPE,
<br>
dest=0, tag=0, comm=0x0, request=0x7fffe8726fc0) failed*
<br>
<p>In this case with MPI does not work, with openMPI it works.
<br>
<p>Could you see some particular information from the error message?
<br>
<p>Diego
<br>
<p><p>Diego
<br>
<p><p>On 2 September 2015 at 14:52, Gilles Gouaillardet &lt;
<br>
gilles.gouaillardet_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Diego,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; about MPI_Allreduce, you should use MPI_IN_PLACE if you want the same
</span><br>
<span class="quotelev1">&gt; buffer in send and recv
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; about the stack, I notice comm is NULL which is a bit surprising...
</span><br>
<span class="quotelev1">&gt; at first glance, type creation looks good.
</span><br>
<span class="quotelev1">&gt; that being said, you do not check MPIdata%iErr is MPI_SUCCESS after each
</span><br>
<span class="quotelev1">&gt; MPI call.
</span><br>
<span class="quotelev1">&gt; I recommend you first do this, so you can catch the error as soon it
</span><br>
<span class="quotelev1">&gt; happens, and hopefully understand why it occurs&#239;&#188;&#142;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday, September 2, 2015, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have notice small difference between OPEN-MPI and intel MPI.
</span><br>
<span class="quotelev2">&gt;&gt; For example in MPI_ALLREDUCE in intel MPI is not allowed to use the same
</span><br>
<span class="quotelev2">&gt;&gt; variable in send and receiving Buff.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have written my code in OPEN-MPI, but unfortunately I have to run in on
</span><br>
<span class="quotelev2">&gt;&gt; a intel-MPI cluster.
</span><br>
<span class="quotelev2">&gt;&gt; Now I have the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *atal error in MPI_Isend: Invalid communicator, error stack:*
</span><br>
<span class="quotelev2">&gt;&gt; *MPI_Isend(158): MPI_Isend(buf=0x1dd27b0, count=1, INVALID DATATYPE,
</span><br>
<span class="quotelev2">&gt;&gt; dest=0, tag=0, comm=0x0, request=0x7fff9d7dd9f0) failed*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is ho I create my type:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *  CALL  MPI_TYPE_VECTOR(1, Ncoeff_MLS, Ncoeff_MLS, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev2">&gt;&gt; coltype, MPIdata%iErr) *
</span><br>
<span class="quotelev2">&gt;&gt; *  CALL  MPI_TYPE_COMMIT(coltype, MPIdata%iErr)*
</span><br>
<span class="quotelev2">&gt;&gt; *  !*
</span><br>
<span class="quotelev2">&gt;&gt; *  CALL  MPI_TYPE_VECTOR(1, nVar, nVar, coltype, MPI_WENO_TYPE,
</span><br>
<span class="quotelev2">&gt;&gt; MPIdata%iErr) *
</span><br>
<span class="quotelev2">&gt;&gt; *  CALL  MPI_TYPE_COMMIT(MPI_WENO_TYPE, MPIdata%iErr)*
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; do you believe that is here the problem?
</span><br>
<span class="quotelev2">&gt;&gt; Is also this the way how intel MPI create a datatype?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; maybe I could also ask to intel MPI users
</span><br>
<span class="quotelev2">&gt;&gt; What do you think?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27523.php">http://www.open-mpi.org/community/lists/users/2015/09/27523.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27524/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27523.php">Gilles Gouaillardet: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
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
