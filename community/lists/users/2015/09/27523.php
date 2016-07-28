<?
$subject_val = "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 08:52:14 2015" -->
<!-- isoreceived="20150902125214" -->
<!-- sent="Wed, 2 Sep 2015 21:52:12 +0900" -->
<!-- isosent="20150902125212" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)" -->
<!-- id="CAAkFZ5u9q=JY8zdVeRN7cxpOqn2wGgUOmhPiZGfD0E96y=gU_w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y66GSgwZjuxF=92LuswhTygeM6vKHL9mX7CHXx4Vuipwg_at_mail.gmail.com" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-02 08:52:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27522.php">Diego Avesani: "[OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27522.php">Diego Avesani: "[OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Diego,
<br>
<p>about MPI_Allreduce, you should use MPI_IN_PLACE if you want the same
<br>
buffer in send and recv
<br>
<p>about the stack, I notice comm is NULL which is a bit surprising...
<br>
at first glance, type creation looks good.
<br>
that being said, you do not check MPIdata%iErr is MPI_SUCCESS after each
<br>
MPI call.
<br>
I recommend you first do this, so you can catch the error as soon it
<br>
happens, and hopefully understand why it occurs&#239;&#188;&#142;
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Wednesday, September 2, 2015, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have notice small difference between OPEN-MPI and intel MPI.
</span><br>
<span class="quotelev1">&gt; For example in MPI_ALLREDUCE in intel MPI is not allowed to use the same
</span><br>
<span class="quotelev1">&gt; variable in send and receiving Buff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have written my code in OPEN-MPI, but unfortunately I have to run in on
</span><br>
<span class="quotelev1">&gt; a intel-MPI cluster.
</span><br>
<span class="quotelev1">&gt; Now I have the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *atal error in MPI_Isend: Invalid communicator, error stack:*
</span><br>
<span class="quotelev1">&gt; *MPI_Isend(158): MPI_Isend(buf=0x1dd27b0, count=1, INVALID DATATYPE,
</span><br>
<span class="quotelev1">&gt; dest=0, tag=0, comm=0x0, request=0x7fff9d7dd9f0) failed*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is ho I create my type:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *  CALL  MPI_TYPE_VECTOR(1, Ncoeff_MLS, Ncoeff_MLS, MPI_DOUBLE_PRECISION,
</span><br>
<span class="quotelev1">&gt; coltype, MPIdata%iErr) *
</span><br>
<span class="quotelev1">&gt; *  CALL  MPI_TYPE_COMMIT(coltype, MPIdata%iErr)*
</span><br>
<span class="quotelev1">&gt; *  !*
</span><br>
<span class="quotelev1">&gt; *  CALL  MPI_TYPE_VECTOR(1, nVar, nVar, coltype, MPI_WENO_TYPE,
</span><br>
<span class="quotelev1">&gt; MPIdata%iErr) *
</span><br>
<span class="quotelev1">&gt; *  CALL  MPI_TYPE_COMMIT(MPI_WENO_TYPE, MPIdata%iErr)*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; do you believe that is here the problem?
</span><br>
<span class="quotelev1">&gt; Is also this the way how intel MPI create a datatype?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; maybe I could also ask to intel MPI users
</span><br>
<span class="quotelev1">&gt; What do you think?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27523/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Previous message:</strong> <a href="27522.php">Diego Avesani: "[OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27522.php">Diego Avesani: "[OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
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
