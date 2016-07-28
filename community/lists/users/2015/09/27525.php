<?
$subject_val = "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 13:07:19 2015" -->
<!-- isoreceived="20150902170719" -->
<!-- sent="Wed, 2 Sep 2015 17:07:16 +0000" -->
<!-- isosent="20150902170716" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)" -->
<!-- id="31830E97-7543-4F70-8FFD-5C42E1696AF3_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAG8o1y4x_pDHFLF7VppN8QyaR4uFADj7mpR=H7V+W4G-5RpBpA_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-02 13:07:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27526.php">Lev Givon: "[OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you reproduce the error in a small example?
<br>

<br>
Also, try using &quot;use mpi&quot; instead of &quot;include 'mpif.h'&quot;, and see if that turns up any errors.
<br>

<br>

<br>
<span class="quotelev1">&gt; On Sep 2, 2015, at 12:13 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dear Gilles, Dear all,
</span><br>
<span class="quotelev1">&gt; I have found the error. Some CPU has no element to share. It was a my error.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now I have another one:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fatal error in MPI_Isend: Invalid communicator, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Isend(158): MPI_Isend(buf=0x137b7b4, count=1, INVALID DATATYPE, dest=0, tag=0, comm=0x0, request=0x7fffe8726fc0) failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In this case with MPI does not work, with openMPI it works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you see some particular information from the error message?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Diego
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
<span class="quotelev1">&gt; On 2 September 2015 at 14:52, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Diego,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; about MPI_Allreduce, you should use MPI_IN_PLACE if you want the same buffer in send and recv
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; about the stack, I notice comm is NULL which is a bit surprising...
</span><br>
<span class="quotelev1">&gt; at first glance, type creation looks good.
</span><br>
<span class="quotelev1">&gt; that being said, you do not check MPIdata%iErr is MPI_SUCCESS after each MPI call.
</span><br>
<span class="quotelev1">&gt; I recommend you first do this, so you can catch the error as soon it happens, and hopefully understand why it occurs&#239;&#188;&#142;
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
<span class="quotelev1">&gt; On Wednesday, September 2, 2015, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have notice small difference between OPEN-MPI and intel MPI. 
</span><br>
<span class="quotelev1">&gt; For example in MPI_ALLREDUCE in intel MPI is not allowed to use the same variable in send and receiving Buff.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have written my code in OPEN-MPI, but unfortunately I have to run in on a intel-MPI cluster. 
</span><br>
<span class="quotelev1">&gt; Now I have the following error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; atal error in MPI_Isend: Invalid communicator, error stack:
</span><br>
<span class="quotelev1">&gt; MPI_Isend(158): MPI_Isend(buf=0x1dd27b0, count=1, INVALID DATATYPE, dest=0, tag=0, comm=0x0, request=0x7fff9d7dd9f0) failed
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is ho I create my type:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   CALL  MPI_TYPE_VECTOR(1, Ncoeff_MLS, Ncoeff_MLS, MPI_DOUBLE_PRECISION, coltype, MPIdata%iErr) 
</span><br>
<span class="quotelev1">&gt;   CALL  MPI_TYPE_COMMIT(coltype, MPIdata%iErr)
</span><br>
<span class="quotelev1">&gt;   !
</span><br>
<span class="quotelev1">&gt;   CALL  MPI_TYPE_VECTOR(1, nVar, nVar, coltype, MPI_WENO_TYPE, MPIdata%iErr) 
</span><br>
<span class="quotelev1">&gt;   CALL  MPI_TYPE_COMMIT(MPI_WENO_TYPE, MPIdata%iErr)
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27523.php">http://www.open-mpi.org/community/lists/users/2015/09/27523.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27524.php">http://www.open-mpi.org/community/lists/users/2015/09/27524.php</a>
</span><br>

<br>

<br>
-- 
<br>
Jeff Squyres
<br>
jsquyres_at_[hidden]
<br>
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>

<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27526.php">Lev Givon: "[OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27524.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
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
