<?
$subject_val = "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 10:52:43 2015" -->
<!-- isoreceived="20150903145243" -->
<!-- sent="Thu, 3 Sep 2015 14:52:23 +0000" -->
<!-- isosent="20150903145223" -->
<!-- name="Nick Papior" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)" -->
<!-- id="CAAbhqc7z1WQ3oLZN-KBCPP0_4KryvYAOfwiZqE8gOz4114O01w_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y5cqATwCY4o_5qokgSr0erjLX4JoSyOh4-q=n79yQsxTQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Nick Papior (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-03 10:52:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27529.php">Rolf vandeVaart: "Re: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27531.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27531.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27533.php">Thomas Jahns: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
When you change environment, that is change between OpenMPI and Intel MPI,
<br>
or compiler, it is recommended that you recompile everything.
<br>
<p>use mpi
<br>
<p>is a module, you cannot mix these between compilers/environments, sadly the
<br>
Fortran specification does not enforce a strict module format which is why
<br>
this is necessary.
<br>
<p><p><p>2015-09-03 14:43 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Dear Jeff, Dear all,
</span><br>
<span class="quotelev1">&gt; I normaly use &quot;USE MPI&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is the answar fro intel HPC forum:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *If you are switching between intel and openmpi you must remember not to
</span><br>
<span class="quotelev1">&gt; mix environment.  You might use modules to manage this.  As the data types
</span><br>
<span class="quotelev1">&gt; encodings differ, you must take care that all objects are built against the
</span><br>
<span class="quotelev1">&gt; same headers.*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could someone explain me what are these modules and how I can use them?
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
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2 September 2015 at 19:07, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you reproduce the error in a small example?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, try using &quot;use mpi&quot; instead of &quot;include 'mpif.h'&quot;, and see if that
</span><br>
<span class="quotelev2">&gt;&gt; turns up any errors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Sep 2, 2015, at 12:13 PM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear Gilles, Dear all,
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have found the error. Some CPU has no element to share. It was a my
</span><br>
<span class="quotelev2">&gt;&gt; error.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Now I have another one:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Fatal error in MPI_Isend: Invalid communicator, error stack:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Isend(158): MPI_Isend(buf=0x137b7b4, count=1, INVALID DATATYPE,
</span><br>
<span class="quotelev2">&gt;&gt; dest=0, tag=0, comm=0x0, request=0x7fffe8726fc0) failed
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; In this case with MPI does not work, with openMPI it works.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Could you see some particular information from the error message?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Diego
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Diego
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On 2 September 2015 at 14:52, Gilles Gouaillardet &lt;
</span><br>
<span class="quotelev2">&gt;&gt; gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Diego,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; about MPI_Allreduce, you should use MPI_IN_PLACE if you want the same
</span><br>
<span class="quotelev2">&gt;&gt; buffer in send and recv
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; about the stack, I notice comm is NULL which is a bit surprising...
</span><br>
<span class="quotelev3">&gt;&gt; &gt; at first glance, type creation looks good.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; that being said, you do not check MPIdata%iErr is MPI_SUCCESS after
</span><br>
<span class="quotelev2">&gt;&gt; each MPI call.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I recommend you first do this, so you can catch the error as soon it
</span><br>
<span class="quotelev2">&gt;&gt; happens, and hopefully understand why it occurs&#239;&#188;&#142;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Gilles
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Wednesday, September 2, 2015, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Dear all,
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have notice small difference between OPEN-MPI and intel MPI.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; For example in MPI_ALLREDUCE in intel MPI is not allowed to use the
</span><br>
<span class="quotelev2">&gt;&gt; same variable in send and receiving Buff.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I have written my code in OPEN-MPI, but unfortunately I have to run in
</span><br>
<span class="quotelev2">&gt;&gt; on a intel-MPI cluster.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Now I have the following error:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; atal error in MPI_Isend: Invalid communicator, error stack:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; MPI_Isend(158): MPI_Isend(buf=0x1dd27b0, count=1, INVALID DATATYPE,
</span><br>
<span class="quotelev2">&gt;&gt; dest=0, tag=0, comm=0x0, request=0x7fff9d7dd9f0) failed
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; This is ho I create my type:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   CALL  MPI_TYPE_VECTOR(1, Ncoeff_MLS, Ncoeff_MLS,
</span><br>
<span class="quotelev2">&gt;&gt; MPI_DOUBLE_PRECISION, coltype, MPIdata%iErr)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   CALL  MPI_TYPE_COMMIT(coltype, MPIdata%iErr)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   !
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   CALL  MPI_TYPE_VECTOR(1, nVar, nVar, coltype, MPI_WENO_TYPE,
</span><br>
<span class="quotelev2">&gt;&gt; MPIdata%iErr)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;   CALL  MPI_TYPE_COMMIT(MPI_WENO_TYPE, MPIdata%iErr)
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; do you believe that is here the problem?
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Is also this the way how intel MPI create a datatype?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; maybe I could also ask to intel MPI users
</span><br>
<span class="quotelev3">&gt;&gt; &gt; What do you think?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Diego
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27523.php">http://www.open-mpi.org/community/lists/users/2015/09/27523.php</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27524.php">http://www.open-mpi.org/community/lists/users/2015/09/27524.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27525.php">http://www.open-mpi.org/community/lists/users/2015/09/27525.php</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/09/27527.php">http://www.open-mpi.org/community/lists/users/2015/09/27527.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27528/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27529.php">Rolf vandeVaart: "Re: [OMPI users] tracking down what's causing a cuIpcOpenMemHandle error emitted by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>In reply to:</strong> <a href="27527.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27531.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27531.php">Diego Avesani: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
<li><strong>Reply:</strong> <a href="27533.php">Thomas Jahns: "Re: [OMPI users] difference between OPENMPI e Intel MPI (DATATYPE)"</a>
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
